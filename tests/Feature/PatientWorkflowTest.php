<?php

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('creates a patient with full data', function () {
    $data = [
        'uhid' => 'FULL-001',
        'age' => '45',
        'sex' => 'Male',
        'hospital_code' => 'HOSP-A',
        'sofa_score_admission' => '5',
        'serial_labs' => [
            [
                'day' => 'Day 1',
                'wbc_tc' => '12000',
                'hb' => '14.5'
            ]
        ],
        'cultures' => [
            [
                'day' => 'Day 2',
                'specimen_type' => 'Blood',
                'organism_name' => 'E. coli',
                'sensitivities' => [
                    [
                        'antibiotic_name' => 'amikacin',
                        'result' => 'S'
                    ]
                ]
            ]
        ]
    ];

    $response = $this->post(route('admin.patients.store'), $data);

    $response->assertSessionHasNoErrors();
    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('patients', [
        'uhid' => 'FULL-001',
        'age' => 45
    ]);

    $this->assertDatabaseHas('clinical_assessments', [
        'sofa_score_admission' => '5'
    ]);

    $this->assertDatabaseHas('serial_labs', [
        'day' => 'Day 1',
        'wbc_tc' => '12000'
    ]);

    $this->assertDatabaseHas('cultures', [
        'specimen_type' => 'Blood',
        'organism_name' => 'E. coli'
    ]);

    $this->assertDatabaseHas('culture_sensitivities', [
        'antibiotic_name' => 'amikacin',
        'result' => 'S'
    ]);
});

test('can save progress with partial data', function () {
    $data = [
        'uhid' => 'PARTIAL-001',
        'date_of_admission' => '2026-07-15'
    ];

    $response = $this->post(route('admin.patients.store'), $data);
    $response->assertSessionHasNoErrors();
    $response->assertRedirect();
    
    $this->assertDatabaseHas('patients', [
        'uhid' => 'PARTIAL-001',
        'date_of_admission' => '2026-07-15'
    ]);
    
    // Clinical assessment should still be created but empty
    $this->assertDatabaseHas('clinical_assessments', [
        'sofa_score_admission' => null
    ]);
});

test('can resume later and update existing patient', function () {
    $patient = Patient::create([
        'uhid' => 'RESUME-001',
        'age' => 30
    ]);
    
    $patient->clinicalAssessment()->create([
        'sofa_score_admission' => '2'
    ]);

    $updateData = [
        'uhid' => 'RESUME-001', // MUST pass uhid to pass validation
        'age' => '31', // changed
        'sofa_score_admission' => '3', // changed
        'serial_labs' => [
            [
                'day' => 'Day 5',
                'hb' => '10.1'
            ]
        ]
    ];

    $response = $this->put(route('admin.patients.update', $patient->id), $updateData);
    $response->assertSessionHasNoErrors();
    $response->assertRedirect();

    $this->assertDatabaseHas('patients', [
        'uhid' => 'RESUME-001',
        'age' => 31
    ]);

    $this->assertDatabaseHas('clinical_assessments', [
        'sofa_score_admission' => '3'
    ]);

    $this->assertDatabaseHas('serial_labs', [
        'day' => 'Day 5',
        'hb' => 10.1
    ]);
});

test('rejects duplicate uhid', function () {
    Patient::create([
        'uhid' => 'DUP-001',
        'age' => 50
    ]);

    $data = [
        'uhid' => 'DUP-001',
        'age' => 45
    ];

    $response = $this->post(route('admin.patients.store'), $data);
    
    // Should fail validation and have session errors
    $response->assertSessionHasErrors('uhid');
    
    // Ensure the second patient was not created (only 1 exists)
    $this->assertDatabaseCount('patients', 1);
});

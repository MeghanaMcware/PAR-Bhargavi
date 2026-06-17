@extends('admin.layout.app')

@section('title')
    Patient List
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .invalid-feedback {
            display: none;
        }

        .form-control.is-invalid~.invalid-feedback,
        .form-select.is-invalid~.invalid-feedback {
            display: block;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row d-flex justify-content-end">
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="home-item" href="">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Add Patient</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="card">

            <div class="card-body">

                <form class="f1" method="post" >

                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                        </div>

                        <div class="f1-step active">
                            <div class="f1-step-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <p>SERIAL LAB </p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <p>MIC MICRO</p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <p>MS Ramiah Memorial</p>
                        </div>
                    </div>

                    <!-- Step 1 -->
                    <fieldset>
                        <div class="d-flex row m-0">
                            <div class="mb-3 col-lg-6 col-12">
                                <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Patient ID 
                                </label>

                                <input class="form-control"  type="text" name="patient_id"
                                    placeholder="Enter Patient ID" >

                                <div class="invalid-feedback">
                                    Please enter your patient id
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    WBC TC 
                                </label>

                                <input class="form-control" id="f1-last-name" type="text" name="wbc_tc"
                                    placeholder="Enter WBC TC" >

                                <div class="invalid-feedback">
                                    Please enter WBC TC
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Hospital Name 
                                </label>

                                <input class="form-control" id="f1-last-name" type="text" name="hospital_name"
                                    placeholder="Enter Hospital Name" >

                                <div class="invalid-feedback">
                                    Please enter Hospital Name
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Date of admission
                                    
                                </label>

                                <input class="form-control" id="f1-last-name" type="date" name="date_of_admission"
                                    placeholder="Enter Date of admission" >

                                <div class="invalid-feedback">
                                    Please enter Date of admission
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Time of admisison
                                    
                                </label>

                                <input class="form-control" id="f1-last-name" type="time" name="time_of_admission"
                                    placeholder="Enter Time of admisison" >

                                <div class="invalid-feedback">
                                    Please enter Time of admisison
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label" style="margin-bottom: 0px !important;">q-SOFA SCORE1</label>

                                <select class="form-select" name="q_sofa_score" >
                                    <option value="">Select q-SOFA Score</option>
                                    <option value="<2">Less than 2</option>
                                    <option value=">2">Greater than 2</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select q-SOFA score
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">NLR </label>
                                <input type="text" class="form-control" name="nlr" placeholder="Enter NLR" >
                                <div class="invalid-feedback">Please enter NLR</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">Platelets </label>
                                <input type="text" class="form-control" name="platelets" placeholder="Enter Platelets"
                                    >
                                <div class="invalid-feedback">Please enter Platelets</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">Hb </label>
                                <input type="text" class="form-control" name="hb" placeholder="Enter Hb" >
                                <div class="invalid-feedback">Please enter Hb</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PCT </label>
                                <input type="text" class="form-control" name="pct" placeholder="Enter PCT" >
                                <div class="invalid-feedback">Please enter PCT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">CRP </label>
                                <input type="text" class="form-control" name="crp" placeholder="Enter CRP" >
                                <div class="invalid-feedback">Please enter CRP</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Lactate </label>
                                <input type="text" class="form-control" name="s_lactate" placeholder="Enter S. Lactate"
                                    >
                                <div class="invalid-feedback">Please enter S. Lactate</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">BUN </label>
                                <input type="text" class="form-control" name="bun" placeholder="Enter BUN" >
                                <div class="invalid-feedback">Please enter BUN</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Creatinine </label>
                                <input type="text" class="form-control" name="s_creatinine"
                                    placeholder="Enter S. Creatinine" >
                                <div class="invalid-feedback">Please enter S. Creatinine</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">AST </label>
                                <input type="text" class="form-control" name="ast" placeholder="Enter AST" >
                                <div class="invalid-feedback">Please enter AST</div>
                            </div>


                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Bilirubin </label>
                                <input type="text" class="form-control" name="s_bilirubin" placeholder="Enter S. Bilirubin"
                                    >
                                <div class="invalid-feedback">Please enter S. Bilirubin</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">LDH </label>
                                <input type="text" class="form-control" name="ldh" placeholder="Enter LDH" >
                                <div class="invalid-feedback">Please enter LDH</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">IL 6/8/10 </label>
                                <input type="text" class="form-control" name="il_6_8_10" placeholder="Enter IL 6/8/10"
                                    >
                                <div class="invalid-feedback">Please enter IL 6/8/10</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">pH ABG </label>
                                <input type="text" class="form-control" name="ph_abg" placeholder="Enter pH ABG" >
                                <div class="invalid-feedback">Please enter pH ABG</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PCO2 </label>
                                <input type="text" class="form-control" name="pco2" placeholder="Enter PCO2" >
                                <div class="invalid-feedback">Please enter PCO2</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PO2 </label>
                                <input type="text" class="form-control" name="po2" placeholder="Enter PO2" >
                                <div class="invalid-feedback">Please enter PO2</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">HCO3 </label>
                                <input type="text" class="form-control" name="hco3" placeholder="Enter HCO3" >
                                <div class="invalid-feedback">Please enter HCO3</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">APTT </label>
                                <input type="text" class="form-control" name="aptt" placeholder="Enter APTT" >
                                <div class="invalid-feedback">Please enter APTT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PT </label>
                                <input type="text" class="form-control" name="pt" placeholder="Enter PT" >
                                <div class="invalid-feedback">Please enter PT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">INR </label>
                                <input type="text" class="form-control" name="inr" placeholder="Enter INR" >
                                <div class="invalid-feedback">Please enter INR</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">d-Dimer </label>
                                <input type="text" class="form-control" name="d_dimer" placeholder="Enter d-Dimer" >
                                <div class="invalid-feedback">Please enter d-Dimer</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">Fibrinogen </label>
                                <input type="text" class="form-control" name="fibrinogen" placeholder="Enter Fibrinogen"
                                    >
                                <div class="invalid-feedback">Please enter Fibrinogen</div>
                            </div>


                        </div>


                        <div class="f1-buttons d-flex flex-row align-items-center justify-content-center">
                            <button class="btn btn-primary btn-next" type="button">
                                Next
                            </button>
                        </div>

                    </fieldset>

                    <!-- Step 2 -->
                    <fieldset>
                        <div class="d-flex row m-0">

                            <!-- UHID -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">UHID </label>
                                <input class="form-control" type="text" name="uhid" placeholder="Enter UHID" >
                                <div class="invalid-feedback">Please enter UHID</div>
                            </div>

                            <!-- Specimen Type -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Specimen Type </label>
                                <input class="form-control" type="text" name="specimen_type"
                                    placeholder="Enter Specimen Type" >
                                <div class="invalid-feedback">Please enter Specimen Type</div>
                            </div>

                            <!-- Testing Date -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Testing Date </label>
                                <input class="form-control" type="date" name="testing_date" >
                                <div class="invalid-feedback">Please select Testing Date</div>
                            </div>

                            <!-- Organism Name -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Organism Name </label>
                                <input class="form-control" type="text" name="organism_name"
                                    placeholder="Enter Organism Name" >
                                <div class="invalid-feedback">Please enter Organism Name</div>
                            </div>

                            <!-- AMPICILLIN MIC -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMPICILLIN MIC </label>
                                <input class="form-control" type="text" name="ampicillin_mic"
                                    placeholder="Enter AMPICILLIN MIC" >
                                <div class="invalid-feedback">Please enter AMPICILLIN MIC</div>
                            </div>

                            <!-- AMPICILLIN Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMPICILLIN Interpretation </label>
                                <input class="form-control" type="text" name="ampicillin_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- AMOX CLAVULANIC ACID -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMOX CLAVULANIC ACID </label>
                                <input class="form-control" type="text" name="amox_clavulanic_acid"
                                    placeholder="Enter AMOX CLAVULANIC ACID" >
                                <div class="invalid-feedback">Please enter AMOX CLAVULANIC ACID</div>
                            </div>

                            <!-- AMOX CLAVULANIC ACID Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMOX CLAVULANIC ACID Interpretation </label>
                                <input class="form-control" type="text" name="amox_clavulanic_acid_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- AMIKACIN -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMIKACIN </label>
                                <input class="form-control" type="text" name="amikacin" placeholder="Enter AMIKACIN"
                                    >
                                <div class="invalid-feedback">Please enter AMIKACIN</div>
                            </div>

                            <!-- AMIKACIN Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">AMIKACIN Interpretation </label>
                                <input class="form-control" type="text" name="amikacin_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- CHLORAMPHENICOL -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CHLORAMPHENICOL </label>
                                <input class="form-control" type="text" name="chloramphenicol"
                                    placeholder="Enter CHLORAMPHENICOL" >
                                <div class="invalid-feedback">Please enter CHLORAMPHENICOL</div>
                            </div>

                            <!-- CHLORAMPHENICOL Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CHLORAMPHENICOL Interpretation </label>
                                <input class="form-control" type="text" name="chloramphenicol_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- CASPOFUNGIN -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CASPOFUNGIN </label>
                                <input class="form-control" type="text" name="caspofungin" placeholder="Enter CASPOFUNGIN"
                                    >
                                <div class="invalid-feedback">Please enter CASPOFUNGIN</div>
                            </div>

                            <!-- CASPOFUNGIN Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CASPOFUNGIN Interpretation </label>
                                <input class="form-control" type="text" name="caspofungin_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- CEFTAZIDIME -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CEFTAZIDIME </label>
                                <input class="form-control" type="text" name="ceftazidime" placeholder="Enter CEFTAZIDIME"
                                    >
                                <div class="invalid-feedback">Please enter CEFTAZIDIME</div>
                            </div>

                            <!-- CEFTAZIDIME Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CEFTAZIDIME Interpretation </label>
                                <input class="form-control" type="text" name="ceftazidime_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                            <!-- CEFALOTHIN -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CEFALOTHIN </label>
                                <input class="form-control" type="text" name="cefalothin" placeholder="Enter CEFALOTHIN"
                                    >
                                <div class="invalid-feedback">Please enter CEFALOTHIN</div>
                            </div>

                            <!-- CEFALOTHIN Interpretation -->
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">CEFALOTHIN Interpretation 
                                </label>
                                <input class="form-control" type="text" name="cefalothin_interpretation"
                                    placeholder="Enter Interpretation" >
                                <div class="invalid-feedback">Please enter Interpretation</div>
                            </div>

                        </div>



                        <div class="f1-buttons">
                            <button class="btn btn-secondary btn-previous" type="button">
                                Previous
                            </button>

                            <button class="btn btn-primary btn-next" type="button">
                                Next
                            </button>
                        </div>

                    </fieldset>

                    <!-- Step 3 -->
                    <fieldset>

                        <div class="row">

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Hospital code </label>
                                <input class="form-control" type="text" name="hospital_code"
                                    placeholder="Enter Hospital code" >
                                <div class="invalid-feedback">Please enter Hospital code</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">UHID/Pregn No. </label>
                                <input class="form-control" type="text" name="uhid_pregn_no"
                                    placeholder="Enter UHID/Pregn No." >
                                <div class="invalid-feedback">Please enter UHID/Pregn No.</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Date of admission </label>
                                <input class="form-control" type="text" name="date_of_admission"
                                    placeholder="Enter Date of admission" >
                                <div class="invalid-feedback">Please enter Date of admission</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Time of presentation </label>
                                <input class="form-control" type="text" name="time_of_presentation"
                                    placeholder="Enter Time of presentation" >
                                <div class="invalid-feedback">Please enter Time of presentation</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Age </label>
                                <input class="form-control" type="text" name="age" placeholder="Enter Age" >
                                <div class="invalid-feedback">Please enter Age</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Sex </label>
                                <input class="form-control" type="text" name="sex" placeholder="Enter Sex" >
                                <div class="invalid-feedback">Please enter Sex</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Chief complaints </label>
                                <input class="form-control" type="text" name="chief_complaints"
                                    placeholder="Enter Chief complaints" >
                                <div class="invalid-feedback">Please enter Chief complaints</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Symptom duration </label>
                                <input class="form-control" type="text" name="symptom_duration"
                                    placeholder="Enter Symptom duration" >
                                <div class="invalid-feedback">Please enter Symptom duration</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Comorbidities (CC INDEX) </label>
                                <input class="form-control" type="text" name="comorbidities__cc_index"
                                    placeholder="Enter Comorbidities (CC INDEX)" >
                                <div class="invalid-feedback">Please enter Comorbidities (CC INDEX)</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Any comorbidity (<5 years,>5 years) </label>
                                <input class="form-control" type="text" name="any_comorbidity___5_years___5_years"
                                    placeholder="Enter Any comorbidity (<5 years, >5 years)" >
                                <div class="invalid-feedback">Please enter Any comorbidity (<5 years,>5 years)</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Previously ill requiring admission last 3 months </label>
                                <input class="form-control" type="text"
                                    name="previously_ill_requiring_admission_last_3_months"
                                    placeholder="Enter Previously ill requiring admission last 3 months" >
                                <div class="invalid-feedback">Please enter Previously ill requiring admission last 3 months
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Previously received any antibiotic last 3 months </label>
                                <input class="form-control" type="text"
                                    name="previously_received_any_antibiotic_last_3_months"
                                    placeholder="Enter Previously received any antibiotic last 3 months" >
                                <div class="invalid-feedback">Please enter Previously received any antibiotic last 3 months
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Initial probable sepsis diagnosis mentioned in file </label>
                                <input class="form-control" type="text"
                                    name="initial_probable_sepsis_diagnosis_mentioned_in_file"
                                    placeholder="Enter Initial probable sepsis diagnosis mentioned in file" >
                                <div class="invalid-feedback">Please enter Initial probable sepsis diagnosis mentioned in
                                    file</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Direct admission here or referred here? </label>
                                <input class="form-control" type="text" name="direct_admission_here_or_referred_here"
                                    placeholder="Enter Direct admission here or referred here?" >
                                <div class="invalid-feedback">Please enter Direct admission here or referred here?</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Date & Time of meeting SIRS criteria </label>
                                <input class="form-control" type="text" name="date___time_of_meeting_sirs_criteria"
                                    placeholder="Enter Date & Time of meeting SIRS criteria" >
                                <div class="invalid-feedback">Please enter Date & Time of meeting SIRS criteria</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">SOFA score at admission </label>
                                <input class="form-control" type="text" name="sofa_score_at_admission"
                                    placeholder="Enter SOFA score at admission" >
                                <div class="invalid-feedback">Please enter SOFA score at admission</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">MDRO Screening @admission </label>
                                <input class="form-control" type="text" name="mdro_screening__admission"
                                    placeholder="Enter MDRO Screening @admission" >
                                <div class="invalid-feedback">Please enter MDRO Screening @admission</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Organ dysfunction? </label>
                                <input class="form-control" type="text" name="organ_dysfunction"
                                    placeholder="Enter Organ dysfunction?" >
                                <div class="invalid-feedback">Please enter Organ dysfunction?</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Renal/Metabolic/cardiac/haematology/respiratory </label>
                                <input class="form-control" type="text"
                                    name="renal_metabolic_cardiac_haematology_respiratory"
                                    placeholder="Enter Renal/Metabolic/cardiac/haematology/respiratory" >
                                <div class="invalid-feedback">Please enter Renal/Metabolic/cardiac/haematology/respiratory
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">1st Lactate Value ordered date </label>
                                <input class="form-control" type="text" name="1st_lactate_value_ordered_date"
                                    placeholder="Enter 1st Lactate Value ordered date" >
                                <div class="invalid-feedback">Please enter 1st Lactate Value ordered date</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">First Lactate Value ordered time </label>
                                <input class="form-control" type="text" name="first_lactate_value_ordered_time"
                                    placeholder="Enter First Lactate Value ordered time" >
                                <div class="invalid-feedback">Please enter First Lactate Value ordered time</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Blood cultures sent date </label>
                                <input class="form-control" type="text" name="blood_cultures_sent_date"
                                    placeholder="Enter Blood cultures sent date" >
                                <div class="invalid-feedback">Please enter Blood cultures sent date</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Blood cultures sent time </label>
                                <input class="form-control" type="text" name="blood_cultures_sent_time"
                                    placeholder="Enter Blood cultures sent time" >
                                <div class="invalid-feedback">Please enter Blood cultures sent time</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Name other samples sent for cultures </label>
                                <input class="form-control" type="text" name="name_other_samples_sent_for_cultures"
                                    placeholder="Enter Name other samples sent for cultures" >
                                <div class="invalid-feedback">Please enter Name other samples sent for cultures</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Other Culture sent date </label>
                                <input class="form-control" type="text" name="other_culture_sent_date"
                                    placeholder="Enter Other Culture sent date" >
                                <div class="invalid-feedback">Please enter Other Culture sent date</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Other Culture sent time </label>
                                <input class="form-control" type="text" name="other_culture_sent_time"
                                    placeholder="Enter Other Culture sent time" >
                                <div class="invalid-feedback">Please enter Other Culture sent time</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">First dose antibiotic administered Date </label>
                                <input class="form-control" type="text" name="first_dose_antibiotic_administered_date"
                                    placeholder="Enter First dose antibiotic administered Date" >
                                <div class="invalid-feedback">Please enter First dose antibiotic administered Date</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">First dose antibiotic administered time </label>
                                <input class="form-control" type="text" name="first_dose_antibiotic_administered_time"
                                    placeholder="Enter First dose antibiotic administered time" >
                                <div class="invalid-feedback">Please enter First dose antibiotic administered time</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Name of emperical antibiotic </label>
                                <input class="form-control" type="text" name="name_of_emperical_antibiotic"
                                    placeholder="Enter Name of emperical antibiotic" >
                                <div class="invalid-feedback">Please enter Name of emperical antibiotic</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Initial fluid administered </label>
                                <input class="form-control" type="text" name="initial_fluid_administered"
                                    placeholder="Enter Initial fluid administered" >
                                <div class="invalid-feedback">Please enter Initial fluid administered</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Volume fluid administered </label>
                                <input class="form-control" type="text" name="volume_fluid_administered"
                                    placeholder="Enter Volume fluid administered" >
                                <div class="invalid-feedback">Please enter Volume fluid administered</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Patient response post infusion </label>
                                <input class="form-control" type="text" name="patient_response_post_infusion"
                                    placeholder="Enter Patient response post infusion" >
                                <div class="invalid-feedback">Please enter Patient response post infusion</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Repeat Lactate after repeated infusion(if) </label>
                                <input class="form-control" type="text" name="repeat_lactate_after_repeated_infusion_if"
                                    placeholder="Enter Repeat Lactate after repeated infusion(if)" >
                                <div class="invalid-feedback">Please enter Repeat Lactate after repeated infusion(if)</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">No. of organs affected(after lab reports) </label>
                                <input class="form-control" type="text" name="no__of_organs_affected_after_lab_reports"
                                    placeholder="Enter No. of organs affected(after lab reports)" >
                                <div class="invalid-feedback">Please enter No. of organs affected(after lab reports)</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Any surgery(<28 Days) </label>
                                <input class="form-control" type="text" name="any_surgery__28_days"
                                    placeholder="Enter Any surgery(<28 Days)" >
                                <div class="invalid-feedback">Please enter Any surgery(<28 Days)</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Molecular tests ordered date </label>
                                    <input class="form-control" type="text" name="molecular_tests_ordered_date"
                                        placeholder="Enter Molecular tests ordered date" >
                                    <div class="invalid-feedback">Please enter Molecular tests ordered date</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Which molecular test </label>
                                    <input class="form-control" type="text" name="which_molecular_test"
                                        placeholder="Enter Which molecular test" >
                                    <div class="invalid-feedback">Please enter Which molecular test</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Molecular tests result received date </label>
                                    <input class="form-control" type="text" name="molecular_tests_result_received_date"
                                        placeholder="Enter Molecular tests result received date" >
                                    <div class="invalid-feedback">Please enter Molecular tests result received date</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day 1 Hemat & Biochem lab values (sheet 3) </label>
                                    <input class="form-control" type="text" name="day_1_hemat___biochem_lab_values__sheet_3"
                                        placeholder="Enter Day 1 Hemat & Biochem lab values (sheet 3)" >
                                    <div class="invalid-feedback">Please enter Day 1 Hemat & Biochem lab values (sheet 3)
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood culture result </label>
                                    <input class="form-control" type="text" name="blood_culture_result"
                                        placeholder="Enter Blood culture result" >
                                    <div class="invalid-feedback">Please enter Blood culture result</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood culture flagged positive date </label>
                                    <input class="form-control" type="text" name="blood_culture_flagged_positive_date"
                                        placeholder="Enter Blood culture flagged positive date" >
                                    <div class="invalid-feedback">Please enter Blood culture flagged positive date</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood culture flagged positive time </label>
                                    <input class="form-control" type="text" name="blood_culture_flagged_positive_time"
                                        placeholder="Enter Blood culture flagged positive time" >
                                    <div class="invalid-feedback">Please enter Blood culture flagged positive time</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood culture positive communicated at </label>
                                    <input class="form-control" type="text" name="blood_culture_positive_communicated_at"
                                        placeholder="Enter Blood culture positive communicated at" >
                                    <div class="invalid-feedback">Please enter Blood culture positive communicated at</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Rapid PCRs on blood culture results </label>
                                    <input class="form-control" type="text" name="rapid_pcrs_on_blood_culture_results"
                                        placeholder="Enter Rapid PCRs on blood culture results" >
                                    <div class="invalid-feedback">Please enter Rapid PCRs on blood culture results</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotics change after rapid PCR </label>
                                    <input class="form-control" type="text" name="antibiotics_change_after_rapid_pcr"
                                        placeholder="Enter Antibiotics change after rapid PCR" >
                                    <div class="invalid-feedback">Please enter Antibiotics change after rapid PCR</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Other Culture growth reported on </label>
                                    <input class="form-control" type="text" name="other_culture_growth_reported_on"
                                        placeholder="Enter Other Culture growth reported on" >
                                    <div class="invalid-feedback">Please enter Other Culture growth reported on</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Sample from which culture growth reported </label>
                                    <input class="form-control" type="text" name="sample_from_which_culture_growth_reported"
                                        placeholder="Enter Sample from which culture growth reported" >
                                    <div class="invalid-feedback">Please enter Sample from which culture growth reported
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">ESBL/CRE/CRAB/MRSA/VRE </label>
                                    <input class="form-control" type="text" name="esbl_cre_crab_mrsa_vre"
                                        placeholder="Enter ESBL/CRE/CRAB/MRSA/VRE" >
                                    <div class="invalid-feedback">Please enter ESBL/CRE/CRAB/MRSA/VRE</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotic sensitivity Sheet entry 2 </label>
                                    <input class="form-control" type="text" name="antibiotic_sensitivity_sheet_entry_2"
                                        placeholder="Enter Antibiotic sensitivity Sheet entry 2" >
                                    <div class="invalid-feedback">Please enter Antibiotic sensitivity Sheet entry 2</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">MDRO screening @admission result </label>
                                    <input class="form-control" type="text" name="mdro_screening__admission_result"
                                        placeholder="Enter MDRO screening @admission result" >
                                    <div class="invalid-feedback">Please enter MDRO screening @admission result</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First USG abdomen done on </label>
                                    <input class="form-control" type="text" name="first_usg_abdomen_done_on"
                                        placeholder="Enter First USG abdomen done on" >
                                    <div class="invalid-feedback">Please enter First USG abdomen done on</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">USG-abdomen findings </label>
                                    <input class="form-control" type="text" name="usg_abdomen_findings"
                                        placeholder="Enter USG-abdomen findings" >
                                    <div class="invalid-feedback">Please enter USG-abdomen findings</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Chest-X-ray done on </label>
                                    <input class="form-control" type="text" name="first_chest_x_ray_done_on"
                                        placeholder="Enter First Chest-X-ray done on" >
                                    <div class="invalid-feedback">Please enter First Chest-X-ray done on</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Chest X-ray findings </label>
                                    <input class="form-control" type="text" name="chest_x_ray_findings"
                                        placeholder="Enter Chest X-ray findings" >
                                    <div class="invalid-feedback">Please enter Chest X-ray findings</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">PET/CT done on </label>
                                    <input class="form-control" type="text" name="pet_ct_done_on"
                                        placeholder="Enter PET/CT done on" >
                                    <div class="invalid-feedback">Please enter PET/CT done on</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">PET/CT findings </label>
                                    <input class="form-control" type="text" name="pet_ct_findings"
                                        placeholder="Enter PET/CT findings" >
                                    <div class="invalid-feedback">Please enter PET/CT findings</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day 3 hemat & Biochem lab values (sheet 3) </label>
                                    <input class="form-control" type="text" name="day_3_hemat___biochem_lab_values__sheet_3"
                                        placeholder="Enter Day 3 hemat & Biochem lab values (sheet 3)" >
                                    <div class="invalid-feedback">Please enter Day 3 hemat & Biochem lab values (sheet 3)
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day 5 hemat & Biochem lab values (sheet 3) </label>
                                    <input class="form-control" type="text" name="day_5_hemat___biochem_lab_values__sheet_3"
                                        placeholder="Enter Day 5 hemat & Biochem lab values (sheet 3)" >
                                    <div class="invalid-feedback">Please enter Day 5 hemat & Biochem lab values (sheet 3)
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Repeat date/s of chest ray </label>
                                    <input class="form-control" type="text" name="repeat_date_s_of_chest_ray"
                                        placeholder="Enter Repeat date/s of chest ray" >
                                    <div class="invalid-feedback">Please enter Repeat date/s of chest ray</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Findings of X ray worsening/better/new changes </label>
                                    <input class="form-control" type="text"
                                        name="findings_of_x_ray_worsening_better_new_changes"
                                        placeholder="Enter Findings of X ray worsening/better/new changes" >
                                    <div class="invalid-feedback">Please enter Findings of X ray worsening/better/new
                                        changes</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pleural Tapping(if done) date </label>
                                    <input class="form-control" type="text" name="pleural_tapping_if_done__date"
                                        placeholder="Enter Pleural Tapping(if done) date" >
                                    <div class="invalid-feedback">Please enter Pleural Tapping(if done) date</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pleural fluid culture results </label>
                                    <input class="form-control" type="text" name="pleural_fluid_culture_results"
                                        placeholder="Enter Pleural fluid culture results" >
                                    <div class="invalid-feedback">Please enter Pleural fluid culture results</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day of change of antibiotics </label>
                                    <input class="form-control" type="text" name="day_of_change_of_antibiotics"
                                        placeholder="Enter Day of change of antibiotics" >
                                    <div class="invalid-feedback">Please enter Day of change of antibiotics</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotics changed to </label>
                                    <input class="form-control" type="text" name="antibiotics_changed_to"
                                        placeholder="Enter Antibiotics changed to" >
                                    <div class="invalid-feedback">Please enter Antibiotics changed to</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days of emperical antibiotic therapy </label>
                                    <input class="form-control" type="text" name="days_of_emperical_antibiotic_therapy"
                                        placeholder="Enter Days of emperical antibiotic therapy" >
                                    <div class="invalid-feedback">Please enter Days of emperical antibiotic therapy</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days of definitive antibiotic therapy </label>
                                    <input class="form-control" type="text" name="days_of_definitive_antibiotic_therapy"
                                        placeholder="Enter Days of definitive antibiotic therapy" >
                                    <div class="invalid-feedback">Please enter Days of definitive antibiotic therapy</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient outcome at 7th day </label>
                                    <input class="form-control" type="text" name="patient_outcome_at_7th_day"
                                        placeholder="Enter Patient outcome at 7th day" >
                                    <div class="invalid-feedback">Please enter Patient outcome at 7th day</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient outcome at 14th day </label>
                                    <input class="form-control" type="text" name="patient_outcome_at_14th_day"
                                        placeholder="Enter Patient outcome at 14th day" >
                                    <div class="invalid-feedback">Please enter Patient outcome at 14th day</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient outcome at 21st day </label>
                                    <input class="form-control" type="text" name="patient_outcome_at_21st_day"
                                        placeholder="Enter Patient outcome at 21st day" >
                                    <div class="invalid-feedback">Please enter Patient outcome at 21st day</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient outcome at 28th day </label>
                                    <input class="form-control" type="text" name="patient_outcome_at_28th_day"
                                        placeholder="Enter Patient outcome at 28th day" >
                                    <div class="invalid-feedback">Please enter Patient outcome at 28th day</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Source established? Where? </label>
                                    <input class="form-control" type="text" name="source_established__where"
                                        placeholder="Enter Source established? Where?" >
                                    <div class="invalid-feedback">Please enter Source established? Where?</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days of ICU hospitalization </label>
                                    <input class="form-control" type="text" name="days_of_icu_hospitalization"
                                        placeholder="Enter Days of ICU hospitalization" >
                                    <div class="invalid-feedback">Please enter Days of ICU hospitalization</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days of Ward hospitalization </label>
                                    <input class="form-control" type="text" name="days_of_ward_hospitalization"
                                        placeholder="Enter Days of Ward hospitalization" >
                                    <div class="invalid-feedback">Please enter Days of Ward hospitalization</div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Final Diagnosis </label>
                                    <input class="form-control" type="text" name="final_diagnosis"
                                        placeholder="Enter Final Diagnosis" >
                                    <div class="invalid-feedback">Please enter Final Diagnosis</div>
                                </div>
                            </div>
                            <div class="f1-buttons">

                                <button class="btn btn-secondary btn-previous" type="button">
                                    Previous
                                </button>

                                <button class="btn btn-success btn-submit" type="submit">
                                    Submit
                                </button>

                            </div>

                    </fieldset>

                </form>

            </div>
        </div>
    </div>

@endsection

@section('script')

    

@endsection
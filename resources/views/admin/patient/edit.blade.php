@extends('admin.layout.app')

@section('title')
    Patient List
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: #f2f6ff;
        }


        .main-card {

            margin-top: 70px;
            background: #fff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .15);

        }


        .tab-btn {

            min-width: 180px;
            border-radius: 50px;
            padding: 14px 25px;
            font-weight: 600;
            transition: .3s;

        }


        .tab-btn:hover {

            transform: translateY(-7px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, .2);

        }



        .form-card {

            display: none;
            margin-top: 35px;
            animation: slide .5s ease;

        }


        .form-card.active {

            display: block;

        }
        @keyframes slide {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .inner-card {

            background: #f8faff;
            padding: 20px;
            border-radius: 20px;

        }
        .form-control {

            border-radius: 5px;
        }
        .select2-container {
            border: 1px solid #0000002e;
            border-radius: 5px;
        }
        .step-indicator {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .step {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f1f5f9;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            position: relative;
            margin: 0 45px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.06);
            border: 2px solid #e2e8f0;
            z-index: 2;
        }
        .step span {
            position: absolute;
            top: 55px;
            font-size: 14px;
            font-weight: 600;
            color: #64748b;
            white-space: nowrap;
            transition: all 0.3s;
        }
        .step.active {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: #fff;
            border-color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
            transform: scale(1.1);
        }
        .step.active span {
            color: #1e40af;
        }
        .step.completed {
            background: linear-gradient(135deg, #10b981, #059669);
            color: #fff;
            border-color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        .step.completed span {
            color: #059669;
        }
        .step::after {
            content: '';
            position: absolute;
            width: 90px;
            height: 4px;
            background: #e2e8f0;
            left: 45px;
            top: 18px;
            z-index: -1;
            transition: all 0.4s;
        }
        .step:last-child::after {
            display: none;
        }
        .step.completed::after {
            background: #10b981;
        }
        .step-content {
            display: none;
        }
        .step-content.active {
            display: block;
        }
        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', sans-serif;
        }
        .patient-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .08);
        }
        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #1c4fb9;
            margin-bottom: 30px;
        }
        .step-no {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #2155d6;
            color: #fff;
            border-radius: 50%;
            margin-right: 10px;
        }
        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        .form-control,
        .form-select {
            height: 46px;
            border-radius: 8px;
            border: 1px solid #d9dee7;
            box-shadow: none;
        }
        .form-control:focus,
        .form-select:focus {
            border-color: #2155d6;
            box-shadow: none;
        }
        textarea.form-control {
            height: 90px;
        }
        .required {
            color: red;
        }
        .radio-group {
            display: flex;
            gap: 35px;
            margin-top: 10px;
        }

        .table-dark1 {
            background-color: #1e3a8a;
        }
        .table-bordered td,
        .table-bordered th {
            border-color: #577695 !important;
        }
        .table-responsive {
            overflow-x: auto;
            overflow-y: hidden;
            scrollbar-width: thin;
            /* Firefox */
            scrollbar-color: #6c757d #f1f1f1;
            /* Firefox */
        }
        /* Chrome, Edge, Safari */
        .table-responsive::-webkit-scrollbar {
            height: 6px;
            /* Thin horizontal scrollbar */
        }
        .table-responsive::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .table-responsive::-webkit-scrollbar-thumb {
            background: #6c757d;
            border-radius: 10px;
            transition: background 0.3s;
        }
        .table-responsive::-webkit-scrollbar-thumb:hover {
            background: #495057;
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
                                <i class="fa-solid fa-house"></i>
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
                <form method="POST" action="{{ route('admin.patients.update', $patient->id) }}" class="needs-validation" novalidate id="patientForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="current_step" id="current_step_input" value="{{ session('current_step', 1) }}">
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Please fix the following errors:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <div class="step-indicator mb-5">

                        <div class="step active">1
                            <span>Create</span>
                        </div>

                        <div class="step">2
                            <span>Update</span>
                        </div>

                        <div class="step">3
                            <span>Serial Lab</span>
                        </div>

                        <div class="step">4
                            <span>Pus</span>
                        </div>

                        <div class="step">5
                            <span>Urine</span>
                        </div>

                        <div class="step">6
                            <span>Blood</span>
                        </div>

                    </div>

                    <div class="step-content active" id="step1">

                        <div class="card shadow-lg border-0">

                           @include('admin.patient.partials.basicdetails')
                        </div>
                    </div>

                        <div class="step-content" id="step2">

                           @include('admin.patient.partials.clinicalassessment')
                        </div>
                    </div>

                        <!-- ===========================
                            STEP 3 : SERIAL LAB
                    =========================== -->

                        <div class="step-content" id="step3">

                            <div class="card shadow border-0">
                                @include('admin.patient.partials.seriallab')
                        

                            </div>
                        </div>
                        <!-- ===========================
                            STEP 4 : PUS CULTURE
                    =========================== -->
                        <div id="pusCultureSection">
                            <div class="step-content" id="step4">

                                <div class="card shadow border-0">
                                    @include('admin.patient.partials.pusculture')

                                </div>
                            </div>
                        </div>

                        <!-- ===========================
                            STEP 5 : URINE CULTURE
                    =========================== -->

                        <div class="step-content" id="step5">

                            <div class="card shadow border-0">

                                @include('admin.patient.partials.urineculture')

                            </div>
                        </div>

                        <!-- ===========================
                            STEP 6 : BLOOD CULTURE
                    =========================== -->

                        <div class="step-content" id="step6">

                            <div class="card shadow border-0">

                                @include('admin.patient.partials.blood')

                            </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        // Change Forms (SERIAL LAB <-> MIC MICRO)
        function openForm(id) {
            document.querySelectorAll('.form-card')
                .forEach(form => {

                    form.classList.remove('active');

                });
            document.getElementById(id)
                .classList.add('active');
        }

        // Change sub-tabs inside MIC MICRO (PUS / URINE / BLOOD)
        function openMicroForm(id) {
            document.querySelectorAll('.micro-subform')
                .forEach(section => {
                    section.classList.remove('active');
                });
            document.getElementById(id)
                .classList.add('active');
        }

        // Generic row delete (works for any table since it just removes the closest <tr>)
        function deleteRow(button, tableBodyId, containerId) {
            const row = button.closest('tr');
            row.remove();

            if (tableBodyId) {
                const tableBody = document.getElementById(tableBodyId);
                if (tableBody && tableBody.children.length === 0 && containerId) {
                    document.getElementById(containerId).style.display = 'none';
                }
            }
        }

        // ===================== SERIAL LAB =====================
        function submitForm(event) {
            event.preventDefault();
            let form = event.target;
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            const tableBody = document.getElementById('labDataBody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                        <td>${data.day || 'N/A'}</td>
                        <td>${data.lab_parameters || 'N/A'}</td>
                        <td>${data.wbc_tc || 'N/A'}</td>
                        <td>${data.bands_left_shift || 'N/A'}</td>
                        <td>${data.nlr || 'N/A'}</td>
                        <td>${data.platelets || 'N/A'}</td>
                        <td>${data.hb || 'N/A'}</td>
                        <td>${data.pct || 'N/A'}</td>
                        <td>${data.crp || 'N/A'}</td>
                        <td>${data.s_lactate || 'N/A'}</td>
                        <td>${data.urea_bun || 'N/A'}</td>
                        <td>${data.s_creatinine || 'N/A'}</td>
                        <td>${data.ast || 'N/A'}</td>
                        <td>${data.alt || 'N/A'}</td>
                        <td>${data.s_bilurubin || 'N/A'}</td>
                        <td>${data.albubin || 'N/A'}</td>
                        <td>${data.ldh || 'N/A'}</td>
                        <td>${data.il_6_8_10 || 'N/A'}</td>
                        <td>${data.abg || 'N/A'}</td>
                        <td>${data.ph || 'N/A'}</td>
                        <td>${data.pc02 || 'N/A'}</td>
                        <td>${data.po2 || 'N/A'}</td>
                        <td>${data.hco3 || 'N/A'}</td>
                        <td>${data.coagulation_profile || 'N/A'}</td>
                        <td>${data.aptt || 'N/A'}</td>
                        <td>${data.pt || 'N/A'}</td>
                        <td>${data.inr || 'N/A'}</td>
                        <td>${data.d_dimer || 'N/A'}</td>
                        <td>${data.fibrinogen || 'N/A'}</td>
                        <td>${data.electrolytes || 'N/A'}</td>
                        <td>${data.na || 'N/A'}</td>
                        <td>${data.k || 'N/A'}</td>
                        <td>${data.cl || 'N/A'}</td>
                        <td>${data.bicarbonates || 'N/A'}</td>
                        <td>${data.hba1c || 'N/A'}</td>
                        <td>${data.spo2 || 'N/A'}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(this, 'labDataBody', 'labDataTableContainer')">Delete</button>
                        </td>
                    `;

            tableBody.appendChild(newRow);
            document.getElementById('labDataTableContainer').style.display = 'block';
            document.getElementById('finalSubmitBtn').style.display = 'block';

            Swal.fire({
                icon: 'success',
                title: 'Added',
                text: 'Row added to SERIAL LAB table',
                showConfirmButton: false,
                timer: 1500
            });

            form.reset();
            form.classList.remove('was-validated');
        }

        function resetLabTable() {
            const tableBody = document.getElementById('labDataBody');
            tableBody.innerHTML = '';
            document.getElementById('labDataTableContainer').style.display = 'none';
            document.getElementById('finalSubmitBtn').style.display = 'none';

            Swal.fire({
                icon: 'success',
                title: 'Submitted Successfully',
                text: 'SERIAL LAB data has been submitted and table reset',
                showConfirmButton: false,
                timer: 2000
            });
        }

        // ===================== PUS CULTURE =====================
        function submitPusCultureForm(event) {
            event.preventDefault();
            let form = event.target;
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => { data[key] = value; });

            const tableBody = document.getElementById('pusCultureDataBody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                        <td>${data.pusday || 'N/A'}</td>
                        <td>${data.specimen_type || 'N/A'}</td>
                        <td>${data.uhidsingle_patient || 'N/A'}</td>
                        <td>${data.testing_date || 'N/A'}</td>
                        <td>${data.organism_name || 'N/A'}</td>
                        <td>${data.amox_clavulanic_acid || 'N/A'}</td>
                        <td>${data.piptaz || 'N/A'}</td>
                        <td>${data.piptaz_interpretation || 'N/A'}</td>
                        <td>${data.cefuroxime || 'N/A'}</td>
                        <td>${data.cefuroxime_interpretation || 'N/A'}</td>
                        <td>${data.cefurioxime_axe || 'N/A'}</td>
                        <td>${data.ceftrixone || 'N/A'}</td>
                        <td>${data.cefplussulbactum || 'N/A'}</td>
                        <td>${data.cefepime || 'N/A'}</td>
                        <td>${data.cefepime_interpretation || 'N/A'}</td>
                        <td>${data.ertapenem || 'N/A'}</td>
                        <td>${data.ertapenem_interpretation || 'N/A'}</td>
                        <td>${data.imipenem || 'N/A'}</td>
                        <td>${data.imipenem_interpretation || 'N/A'}</td>
                        <td>${data.meropenem || 'N/A'}</td>
                        <td>${data.meropenem_interpretation || 'N/A'}</td>
                        <td>${data.amikacin || 'N/A'}</td>
                        <td>${data.gentamycin || 'N/A'}</td>
                        <td>${data.ciprofloxacin || 'N/A'}</td>
                        <td>${data.tigecycline || 'N/A'}</td>
                        <td>${data.tigecycline_interpretation || 'N/A'}</td>
                        <td>${data.fosfomycin || 'N/A'}</td>
                        <td>${data.fosfomycin_interpretation || 'N/A'}</td>
                        <td>${data.colistin || 'N/A'}</td>
                        <td>${data.colistin_interpretation || 'N/A'}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(this, 'pusCultureDataBody', 'pusCultureTableContainer')">Delete</button>
                        </td>
                    `;
            tableBody.appendChild(newRow);
            document.getElementById('pusCultureTableContainer').style.display = 'block';
            document.getElementById('pusFinalSubmitBtn').style.display = 'inline-block';

            Swal.fire({ icon: 'success', title: 'Added', text: 'Row added to PUS CULTURE table', showConfirmButton: false, timer: 1500 });

            form.reset();
            form.classList.remove('was-validated');
        }

        // ===================== URINE CULTURE =====================
        function submitUrineCultureForm(event) {
            event.preventDefault();
            let form = event.target;
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => { data[key] = value; });

            const tableBody = document.getElementById('urineCultureDataBody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                        <td>${data.urineday || 'N/A'}</td>
                        <td>${data.uhid || 'N/A'}</td>
                        <td>${data.testing_date || 'N/A'}</td>
                        <td>${data.organism_name || 'N/A'}</td>
                        <td>${data.amikacin || 'N/A'}</td>
                        <td>${data.amox_clav || 'N/A'}</td>
                        <td>${data.cefepime || 'N/A'}</td>
                        <td>${data.cefixime || 'N/A'}</td>
                        <td>${data.cef_salbactam || 'N/A'}</td>
                        <td>${data.cefoxitin || 'N/A'}</td>
                        <td>${data.ceftrixone || 'N/A'}</td>
                        <td>${data.ciprofloxacin || 'N/A'}</td>
                        <td>${data.colistin || 'N/A'}</td>
                        <td>${data.ertapenem || 'N/A'}</td>
                        <td>${data.fosfomycin || 'N/A'}</td>
                        <td>${data.meropenem || 'N/A'}</td>
                        <td>${data.nitrofururantoin || 'N/A'}</td>
                        <td>${data.norfloxacin || 'N/A'}</td>
                        <td>${data.pip_taz || 'N/A'}</td>
                        <td>${data.cotrimaxazole || 'N/A'}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(this, 'urineCultureDataBody', 'urineCultureTableContainer')">Delete</button>
                        </td>
                    `;
            tableBody.appendChild(newRow);
            document.getElementById('urineCultureTableContainer').style.display = 'block';
            document.getElementById('urineFinalSubmitBtn').style.display = 'inline-block';

            Swal.fire({ icon: 'success', title: 'Added', text: 'Row added to URINE CULTURE table', showConfirmButton: false, timer: 1500 });

            form.reset();
            form.classList.remove('was-validated');
        }

        // ===================== BLOOD CULTURE =====================
        function submitBloodCultureForm(event) {
            event.preventDefault();
            let form = event.target;
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => { data[key] = value; });

            const tableBody = document.getElementById('bloodCultureDataBody');
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                        <td>${data.bloodday || 'N/A'}</td>
                        <td>${data.specimen_type || 'N/A'}</td>
                        <td>${data.uhid || 'N/A'}</td>
                        <td>${data.testing_date || 'N/A'}</td>
                        <td>${data.organism_name || 'N/A'}</td>
                        <td>${data.amox_clav || 'N/A'}</td>
                        <td>${data.pip_taz || 'N/A'}</td>
                        <td>${data.cefuroxime || 'N/A'}</td>
                        <td>${data.cefuroxime_axe || 'N/A'}</td>
                        <td>${data.ceftriaxone || 'N/A'}</td>
                        <td>${data.cef_salbactam || 'N/A'}</td>
                        <td>${data.cefepime || 'N/A'}</td>
                        <td>${data.ertapenem || 'N/A'}</td>
                        <td>${data.imipenem || 'N/A'}</td>
                        <td>${data.amikacin || 'N/A'}</td>
                        <td>${data.gentamycin || 'N/A'}</td>
                        <td>${data.ciprofloxacin || 'N/A'}</td>
                        <td>${data.tigecycline || 'N/A'}</td>
                        <td>${data.fosfomycin || 'N/A'}</td>
                        <td>${data.colistin || 'N/A'}</td>
                        <td>${data.cotrimaxazole || 'N/A'}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger d-flex flex-row gap-2" onclick="deleteRow(this, 'bloodCultureDataBody', 'bloodCultureTableContainer')">Delete</button>
                        </td>
                    `;
            tableBody.appendChild(newRow);
            document.getElementById('bloodCultureTableContainer').style.display = 'block';
            document.getElementById('bloodFinalSubmitBtn').style.display = 'inline-block';

            Swal.fire({ icon: 'success', title: 'Added', text: 'Row added to BLOOD CULTURE table', showConfirmButton: false, timer: 1500 });

            form.reset();
            form.classList.remove('was-validated');
        }

        // ===================== MICRO FINAL SUBMIT (per sub-tab, only touches its own table) =====================
        function resetSingleMicroTable(type) {
            const map = {
                pus: { body: 'pusCultureDataBody', container: 'pusCultureTableContainer', btn: 'pusFinalSubmitBtn', label: 'PUS CULTURE' },
                urine: { body: 'urineCultureDataBody', container: 'urineCultureTableContainer', btn: 'urineFinalSubmitBtn', label: 'URINE CULTURE' },
                blood: { body: 'bloodCultureDataBody', container: 'bloodCultureTableContainer', btn: 'bloodFinalSubmitBtn', label: 'BLOOD CULTURE' }
            };

            const cfg = map[type];
            if (!cfg) return;

            // TODO: send this table's collected data to the server here before clearing, if needed.

            const body = document.getElementById(cfg.body);
            if (body) body.innerHTML = '';

            const container = document.getElementById(cfg.container);
            if (container) container.style.display = 'none';

            const btn = document.getElementById(cfg.btn);
            if (btn) btn.style.display = 'none';

            Swal.fire({
                icon: 'success',
                title: 'Submitted Successfully',
                text: cfg.label + ' data has been submitted and table reset',
                showConfirmButton: false,
                timer: 2000
            });
        }
    </script>

    <script>

        (function () {
            'use strict'
            let forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        event.preventDefault(); // Always prevent native submission

                        // Auto-add any pending row data in the dynamic tabs silently
                        if (typeof addSerialLabData === 'function') addSerialLabData(true);
                        if (typeof addPusCultureData === 'function') addPusCultureData(true);
                        if (typeof addUrineCultureData === 'function') addUrineCultureData(true);
                        if (typeof addBloodCultureData === 'function') addBloodCultureData(true);
                        
                        if (!form.checkValidity()) {
                            event.stopPropagation()
                            form.classList.add('was-validated')
                            
                            // Auto-navigate to the first invalid tab
                            const firstInvalid = form.querySelector(':invalid');
                            if (firstInvalid) {
                                const stepContent = firstInvalid.closest('.step-content');
                                if (stepContent) {
                                    const stepId = parseInt(stepContent.id.replace('step', ''));
                                    showStep(stepId);
                                }
                            }
                            return;
                        }

                        // AJAX Submission
                        form.classList.add('was-validated');
                        const submitBtns = form.querySelectorAll('button[type="submit"]');
                        submitBtns.forEach(btn => {
                            btn.dataset.originalText = btn.innerHTML;
                            btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Saving...';
                            btn.disabled = true;
                        });

                        fetch(form.action, {
                            method: form.method || 'POST',
                            body: new FormData(form),
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            }
                        })
                        .then(async response => {
                            const data = await response.json().catch(() => ({}));
                            
                            if (response.ok) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Saved!',
                                    text: data.message || 'Progress saved successfully.',
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                                // Remove dirty validation state so they can continue editing
                                form.classList.remove('was-validated');
                            } else if (response.status === 422) {
                                // Validation error from server
                                let errorHtml = '<ul class="text-start">';
                                for (const field in data.errors) {
                                    errorHtml += `<li>${data.errors[field][0]}</li>`;
                                    
                                    // Highlight fields and navigate
                                    const input = form.querySelector(`[name="${field}"]`);
                                    if (input) {
                                        input.classList.add('is-invalid');
                                        const stepContent = input.closest('.step-content');
                                        if (stepContent) {
                                            const stepId = parseInt(stepContent.id.replace('step', ''));
                                            showStep(stepId);
                                        }
                                    }
                                }
                                errorHtml += '</ul>';
                                
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    html: errorHtml
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message || 'An unexpected error occurred while saving.'
                                });
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'A network error occurred.'
                            });
                        })
                        .finally(() => {
                            submitBtns.forEach(btn => {
                                btn.innerHTML = btn.dataset.originalText;
                                btn.disabled = false;
                            });
                        });

                    }, false)
                })
        })()

    </script>

    <script>
        let currentStep = {{ session('current_step', 1) }};
        const totalSteps = 6;

        document.addEventListener("DOMContentLoaded", function () {
            showStep(currentStep);
        });

        function showStep(step) {
            let stepInput = document.getElementById('current_step_input');
            if (stepInput) stepInput.value = step;

            document.querySelectorAll(".step-content").forEach(function (div) {
                div.style.display = "none";
            });

            document.getElementById("step" + step).style.display = "block";

            const steps = document.querySelectorAll(".step");

            steps.forEach(function (stepDiv) {
                stepDiv.classList.remove("active");
                stepDiv.classList.remove("completed");
            });

            for (let i = 0; i < steps.length; i++) {

                if (i + 1 < step) {

                    steps[i].classList.add("completed");

                } else if (i + 1 === step) {

                    steps[i].classList.add("active");

                }

            }

        }

        function nextStep() {

            if (!validateStep(currentStep))
                return;

            if (currentStep < totalSteps) {

                currentStep++;

                showStep(currentStep);

            }

        }

        function previousStep() {

            if (currentStep > 1) {

                currentStep--;

                showStep(currentStep);

            }

        }

        function validateStep(step) {

            let valid = true;

            let container = document.getElementById("step" + step);

            let inputs = container.querySelectorAll("input,select,textarea");

            inputs.forEach(function (input) {

                if (input.hasAttribute("required")) {

                    if (input.value.trim() == "") {

                        input.classList.add("is-invalid");

                        valid = false;

                    } else {

                        input.classList.remove("is-invalid");

                    }

                }

            });

            return valid;

        }

        let serialLabRowCount = 0;
        let globalCultureRowCount = 0;
        
        
        

        function addSerialLabData(silent = false) {
            const form = document.querySelector('#step3');
            const fields = ['day', 'lab_parameters', 'wbc_tc', 'bands_left_shift', 'nlr', 'platelets', 'hb', 'pct', 'crp', 's_lactate', 'urea_bun', 's_creatinine', 'ast', 'alt', 's_bilurubin', 'albubin', 'ldh', 'il_6_8_10', 'abg', 'ph', 'pc02', 'po2', 'hco3', 'coagulation_profile', 'aptt', 'pt', 'inr', 'd_dimer', 'fibrinogen', 'electrolytes', 'na', 'k', 'cl', 'bicarbonates', 'hba1c', 'spo2'];

            let rowHtml = '<tr data-row-id="' + serialLabRowCount + '">';
            let rowData = [];
            let hasData = false;

            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const value = field && field.value.trim() !== '' ? field.value : 'N/A';
                if (value !== 'N/A') hasData = true;
                rowData.push(value);
                const hiddenInput = `<input type="hidden" name="serial_labs[${serialLabRowCount}][${fieldName}]" value="${value !== 'N/A' ? value : ''}">`;
                rowHtml += `<td>${value}${hiddenInput}</td>`;
            });

            rowHtml += `<td class="d-flex flex-row gap-2">
                    <button type="button" class="btn btn-sm btn-info me-1" onclick="editSerialLabRow(${serialLabRowCount})">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteSerialLabRow(${serialLabRowCount})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>`;
            rowHtml += '</tr>';

            if (hasData) {
                const tbody = document.getElementById('serialLabTableBody');
                tbody.innerHTML += rowHtml;
                document.getElementById('serialLabTableContainer').style.display = 'block';

                fields.forEach(fieldName => {
                    const field = form.querySelector(`[name="${fieldName}"]`);
                    if (field) field.value = '';
                });

                serialLabRowCount++;
            } else if (!silent) {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Data',
                    text: 'Please fill at least one field before adding.',
                    confirmButtonColor: '#0d6efd'
                });
            }
        }

                function openSerialLabModal() {
            const form = document.querySelector('#step3');
            const fields = ['day', 'lab_parameters', 'wbc_tc', 'bands_left_shift', 'nlr', 'platelets', 'hb', 'pct', 'crp', 's_lactate', 'urea_bun', 's_creatinine', 'ast', 'alt', 's_bilurubin', 'albubin', 'ldh', 'il_6_8_10', 'abg', 'ph', 'pc02', 'po2', 'hco3', 'coagulation_profile', 'aptt', 'pt', 'inr', 'd_dimer', 'fibrinogen', 'electrolytes', 'na', 'k', 'cl', 'bicarbonates', 'hba1c', 'spo2'];
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                if (field) field.value = '';
            });
            var m = new bootstrap.Modal(document.getElementById('serialLabModal'));
            m.show();
        }
        function editSerialLabRow(rowId) {
            const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
            if (!row) return;

            const fields = ['day', 'lab_parameters', 'wbc_tc', 'bands_left_shift', 'nlr', 'platelets', 'hb', 'pct', 'crp', 's_lactate', 'urea_bun', 's_creatinine', 'ast', 'alt', 's_bilurubin', 'albubin', 'ldh', 'il_6_8_10', 'abg', 'ph', 'pc02', 'po2', 'hco3', 'coagulation_profile', 'aptt', 'pt', 'inr', 'd_dimer', 'fibrinogen', 'electrolytes', 'na', 'k', 'cl', 'bicarbonates', 'hba1c', 'spo2'];
            const form = document.querySelector('#step3');

            fields.forEach((fieldName, index) => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const cellValue = row.cells[index].textContent;
                if (field) {
                    field.value = (cellValue !== 'N/A') ? cellValue : '';
                }
            });

            row.remove();

            if (document.getElementById('serialLabTableBody').children.length === 0) {
                document.getElementById('serialLabTableContainer').style.display = 'none';
            }
                    new bootstrap.Modal(document.getElementById('serialLabModal')).show();
        }

        function deleteSerialLabRow(rowId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this row?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
                    if (row) {
                        row.remove();

                        if (document.getElementById('serialLabTableBody').children.length === 0) {
                            document.getElementById('serialLabTableContainer').style.display = 'none';
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Row has been deleted.',
                            confirmButtonColor: '#198754'
                        });
                    }
                }
            });
        }

        function addPusCultureData(silent = false) {
            const form = document.querySelector('#step4');
            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];

            let rowHtml = '<tr data-row-id="' + globalCultureRowCount + '">';
            let hasData = false;

            let sensCount = 0;
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const value = field && field.value.trim() !== '' ? field.value : 'N/A';
                if (value !== 'N/A') hasData = true;
                
                let hiddenInput = '';
                let cleanVal = value !== 'N/A' ? value : '';
                if (fieldName === 'urineday') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][day]" value="${cleanVal}">`;
                    hiddenInput += `<input type="hidden" name="cultures[${globalCultureRowCount}][specimen_type]" value="Pus">`;
                } else if (fieldName === 'uhid' || fieldName === 'testing_date' || fieldName === 'organism_name') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][${fieldName}]" value="${cleanVal}">`;
                } else {
                    if (cleanVal !== '') {
                        hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][antibiotic_name]" value="${fieldName}">`;
                        hiddenInput += `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][result]" value="${cleanVal}">`;
                        sensCount++;
                    }
                }
                rowHtml += `<td>${value}${hiddenInput}</td>`;
            });

            rowHtml += `<td class="d-flex flex-row gap-2">
                    <button type="button" class="btn btn-sm btn-info me-1" onclick="editPusCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="deletePusCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>`;
            rowHtml += '</tr>';

            if (hasData) {
                const tbody = document.getElementById('pusCultureTableBody');
                tbody.innerHTML += rowHtml;
                document.getElementById('pusCultureTableContainer').style.display = 'block';

                fields.forEach(fieldName => {
                    const field = form.querySelector(`[name="${fieldName}"]`);
                    if (field) field.value = '';
                });

                globalCultureRowCount++;
            } else if (!silent) {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Data',
                    text: 'Please fill at least one field before adding.',
                    confirmButtonColor: '#0d6efd'
                });
            }
        }

                function openPusCultureModal() {
            const form = document.querySelector('#step4');
            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                if (field) field.value = '';
            });
            var m = new bootstrap.Modal(document.getElementById('pusCultureModal'));
            m.show();
        }
        function editPusCultureRow(rowId) {
            const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
            if (!row) return;

            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
            const form = document.querySelector('#step4');

            fields.forEach((fieldName, index) => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const cellValue = row.cells[index].textContent;
                if (field) {
                    field.value = (cellValue !== 'N/A') ? cellValue : '';
                }
            });

            row.remove();

            if (document.getElementById('pusCultureTableBody').children.length === 0) {
                document.getElementById('pusCultureTableContainer').style.display = 'none';
            }
                    new bootstrap.Modal(document.getElementById('pusCultureModal')).show();
        }

        function deletePusCultureRow(rowId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this row?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
                    if (row) {
                        row.remove();

                        if (document.getElementById('pusCultureTableBody').children.length === 0) {
                            document.getElementById('pusCultureTableContainer').style.display = 'none';
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Row has been deleted.',
                            confirmButtonColor: '#198754'
                        });
                    }
                }
            });
        }

        function resetSingleMicroTable(type) {
            if (type === 'pusCulture') {
                const tbody = document.getElementById('pusCultureTableBody');
                const tableContainer = document.getElementById('pusCultureTableContainer');

                if (tbody && tbody.innerHTML.trim() !== '') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Saved Successfully',
                        text: 'Pus Culture data has been saved.',
                        confirmButtonColor: '#198754'
                    }).then(() => {
                        tbody.innerHTML = '';
                        tableContainer.style.display = 'none';
                        globalCultureRowCount = 0;
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Data to Save',
                        text: 'Please add data to the table before saving.',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            } else if (type === 'urineCulture') {
                const tbody = document.getElementById('urineCultureTableBody');
                const tableContainer = document.getElementById('urineCultureTableContainer');

                if (tbody && tbody.innerHTML.trim() !== '') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Saved Successfully',
                        text: 'Urine Culture data has been saved.',
                        confirmButtonColor: '#198754'
                    }).then(() => {
                        tbody.innerHTML = '';
                        tableContainer.style.display = 'none';
                        globalCultureRowCount = 0;
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No Data to Save',
                        text: 'Please add data to the table before saving.',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            }
        }

        function addUrineCultureData(silent = false) {
            const form = document.querySelector('#step5');
            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];

            let rowHtml = '<tr data-row-id="' + globalCultureRowCount + '">';
            let hasData = false;

            let sensCount = 0;
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const value = field && field.value.trim() !== '' ? field.value : 'N/A';
                if (value !== 'N/A') hasData = true;
                
                let hiddenInput = '';
                let cleanVal = value !== 'N/A' ? value : '';
                if (fieldName === 'urineday') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][day]" value="${cleanVal}">`;
                    hiddenInput += `<input type="hidden" name="cultures[${globalCultureRowCount}][specimen_type]" value="Urine">`;
                } else if (fieldName === 'uhid' || fieldName === 'testing_date' || fieldName === 'organism_name') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][${fieldName}]" value="${cleanVal}">`;
                } else {
                    if (cleanVal !== '') {
                        hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][antibiotic_name]" value="${fieldName}">`;
                        hiddenInput += `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][result]" value="${cleanVal}">`;
                        sensCount++;
                    }
                }
                rowHtml += `<td>${value}${hiddenInput}</td>`;
            });

            rowHtml += `<td class="d-flex flex-row gap-2">
                    <button type="button" class="btn btn-sm btn-info me-1" onclick="editUrineCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteUrineCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>`;
            rowHtml += '</tr>';

            if (hasData) {
                const tbody = document.getElementById('urineCultureTableBody');
                tbody.innerHTML += rowHtml;
                document.getElementById('urineCultureTableContainer').style.display = 'block';

                fields.forEach(fieldName => {
                    const field = form.querySelector(`[name="${fieldName}"]`);
                    if (field) field.value = '';
                });

                globalCultureRowCount++;
            } else if (!silent) {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Data',
                    text: 'Please fill at least one field before adding.',
                    confirmButtonColor: '#0d6efd'
                });
            }
        }

                function openUrineCultureModal() {
            const form = document.querySelector('#step5');
            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                if (field) field.value = '';
            });
            var m = new bootstrap.Modal(document.getElementById('urineCultureModal'));
            m.show();
        }
        function editUrineCultureRow(rowId) {
            const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
            if (!row) return;

            const fields = ['urineday', 'uhid', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
            const form = document.querySelector('#step5');

            fields.forEach((fieldName, index) => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const cellValue = row.cells[index].textContent;
                if (field) {
                    field.value = (cellValue !== 'N/A') ? cellValue : '';
                }
            });

            row.remove();

            if (document.getElementById('urineCultureTableBody').children.length === 0) {
                document.getElementById('urineCultureTableContainer').style.display = 'none';
            }
                    new bootstrap.Modal(document.getElementById('urineCultureModal')).show();
        }

        function deleteUrineCultureRow(rowId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this row?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
                    if (row) {
                        row.remove();

                        if (document.getElementById('urineCultureTableBody').children.length === 0) {
                            document.getElementById('urineCultureTableContainer').style.display = 'none';
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Row has been deleted.',
                            confirmButtonColor: '#198754'
                        });
                    }
                }
            });
        }

        function addBloodCultureData(silent = false) {
            const form = document.querySelector('#step6');
            const fields = ['bloodday', 'specimen_type', 'uhid', 'testing_date', 'organism_name', 'amox_clav', 'pip_taz', 'cefuroxime', 'cefuroxime_axe', 'ceftriaxone', 'cef_salbactam', 'cefepime', 'ertapenem', 'imipenem', 'amikacin', 'gentamycin', 'ciprofloxacin', 'tigecycline', 'fosfomycin', 'colistin', 'cotrimaxazole'];

            let rowHtml = '<tr data-row-id="' + globalCultureRowCount + '">';
            let hasData = false;

            let sensCount = 0;
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const value = field && field.value.trim() !== '' ? field.value : 'N/A';
                if (value !== 'N/A') hasData = true;
                
                let hiddenInput = '';
                let cleanVal = value !== 'N/A' ? value : '';
                if (fieldName === 'bloodday') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][day]" value="${cleanVal}">`;
                } else if (fieldName === 'specimen_type') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][specimen_type]" value="${cleanVal}">`;
                } else if (fieldName === 'uhid' || fieldName === 'testing_date' || fieldName === 'organism_name') {
                    hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][${fieldName}]" value="${cleanVal}">`;
                } else {
                    if (cleanVal !== '') {
                        hiddenInput = `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][antibiotic_name]" value="${fieldName}">`;
                        hiddenInput += `<input type="hidden" name="cultures[${globalCultureRowCount}][sensitivities][${sensCount}][result]" value="${cleanVal}">`;
                        sensCount++;
                    }
                }
                rowHtml += `<td>${value}${hiddenInput}</td>`;
            });

            rowHtml += `<td class="d-flex flex-row gap-2">
                    <button type="button" class="btn btn-sm btn-info me-1" onclick="editBloodCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteBloodCultureRow(${globalCultureRowCount})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>`;
            rowHtml += '</tr>';

            if (hasData) {
                const tbody = document.getElementById('bloodCultureTableBody');
                tbody.innerHTML += rowHtml;
                document.getElementById('bloodCultureTableContainer').style.display = 'block';

                fields.forEach(fieldName => {
                    const field = form.querySelector(`[name="${fieldName}"]`);
                    if (field) field.value = '';
                });

                globalCultureRowCount++;
            } else if (!silent) {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Data',
                    text: 'Please fill at least one field before adding.',
                    confirmButtonColor: '#0d6efd'
                });
            }
        }

                function openBloodCultureModal() {
            const form = document.querySelector('#step6');
            const fields = ['bloodday', 'specimen_type', 'uhid', 'testing_date', 'organism_name', 'amox_clav', 'pip_taz', 'cefuroxime', 'cefuroxime_axe', 'ceftriaxone', 'cef_salbactam', 'cefepime', 'ertapenem', 'imipenem', 'amikacin', 'gentamycin', 'ciprofloxacin', 'tigecycline', 'fosfomycin', 'colistin', 'cotrimaxazole'];
            fields.forEach(fieldName => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                if (field) field.value = '';
            });
            var m = new bootstrap.Modal(document.getElementById('bloodCultureModal'));
            m.show();
        }
        function editBloodCultureRow(rowId) {
            const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
            if (!row) return;

            const fields = ['bloodday', 'specimen_type', 'uhid', 'testing_date', 'organism_name', 'amox_clav', 'pip_taz', 'cefuroxime', 'cefuroxime_axe', 'ceftriaxone', 'cef_salbactam', 'cefepime', 'ertapenem', 'imipenem', 'amikacin', 'gentamycin', 'ciprofloxacin', 'tigecycline', 'fosfomycin', 'colistin', 'cotrimaxazole'];
            const form = document.querySelector('#step6');

            fields.forEach((fieldName, index) => {
                const field = form.querySelector(`[name="${fieldName}"]`);
                const cellValue = row.cells[index].textContent;
                if (field) {
                    field.value = (cellValue !== 'N/A') ? cellValue : '';
                }
            });

            row.remove();

            if (document.getElementById('bloodCultureTableBody').children.length === 0) {
                document.getElementById('bloodCultureTableContainer').style.display = 'none';
            }
                    new bootstrap.Modal(document.getElementById('bloodCultureModal')).show();
        }

        function deleteBloodCultureRow(rowId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this row?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const row = document.querySelector(`tr[data-row-id="${rowId}"]`);
                    if (row) {
                        row.remove();

                        if (document.getElementById('bloodCultureTableBody').children.length === 0) {
                            document.getElementById('bloodCultureTableContainer').style.display = 'none';
                        }

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Row has been deleted.',
                            confirmButtonColor: '#198754'
                        });
                    }
                }
            });
        }

        function saveStep() {
            const tbody = document.getElementById('serialLabTableBody');
            const tableContainer = document.getElementById('serialLabTableContainer');

            if (tbody && tbody.innerHTML.trim() !== '') {
                Swal.fire({
                    icon: 'success',
                    title: 'Saved Successfully',
                    text: 'Serial Lab data has been saved.',
                    confirmButtonColor: '#198754'
                }).then(() => {
                    tbody.innerHTML = '';
                    tableContainer.style.display = 'none';
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Data to Save',
                    text: 'Please add data to the table before saving.',
                    confirmButtonColor: '#0d6efd'
                });
            }
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if ($errors->any())
                const errors = @json($errors->getMessages());
                let firstErrorStep = null;
                
                for (const field in errors) {
                    const inputName = field.includes('.') ? field.split('.')[0] + '[]' : field;
                    const inputs = document.querySelectorAll(`[name="${inputName}"]`);
                    
                    inputs.forEach(input => {
                        input.classList.add('is-invalid');
                        
                        let feedback = input.parentNode.querySelector('.invalid-feedback');
                        if(!feedback) {
                            feedback = document.createElement('div');
                            feedback.className = 'invalid-feedback';
                            input.parentNode.appendChild(feedback);
                        }
                        feedback.innerHTML = errors[field][0];
                        feedback.style.display = 'block';

                        let stepContent = input.closest('.step-content');
                        if (stepContent && !firstErrorStep) {
                            firstErrorStep = stepContent.id.replace('step', '');
                        }
                    });
                }

                if (firstErrorStep) {
                    currentStep = parseInt(firstErrorStep);
                    showStep(currentStep);
                }
            @endif
        });

        
                }
            });
        }
            // Load existing Serial Labs from DB
        var patientDataJS = {!! json_encode($patient) !!};
        
        function populateSerialLabs() {
            if (patientDataJS && patientDataJS.serial_labs) {
                const fields = ['day', 'lab_parameters', 'wbc_tc', 'bands_left_shift', 'nlr', 'platelets', 'hb', 'pct', 'crp', 's_lactate', 'urea_bun', 's_creatinine', 'ast', 'alt', 's_bilurubin', 'albubin', 'ldh', 'il_6_8_10', 'abg', 'ph', 'pc02', 'po2', 'hco3', 'coagulation_profile', 'aptt', 'pt', 'inr', 'd_dimer', 'fibrinogen', 'electrolytes', 'na', 'k', 'cl', 'bicarbonates', 'hba1c', 'spo2'];
                
                patientDataJS.serial_labs.forEach(lab => {
                    let rowHtml = '<tr data-row-id="' + serialLabRowCount + '">';
                    fields.forEach(fieldName => {
                        const val = lab[fieldName] !== null && lab[fieldName] !== '' ? lab[fieldName] : 'N/A';
                        const hiddenInput = `<input type="hidden" name="serial_labs[${serialLabRowCount}][${fieldName}]" value="${val !== 'N/A' ? val : ''}">`;
                        rowHtml += `<td>${val}${hiddenInput}</td>`;
                    });
                    
                    rowHtml += `<td class="d-flex flex-row gap-2">
                        <button type="button" class="btn btn-sm btn-info me-1" onclick="editSerialLabRow(${serialLabRowCount})">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteSerialLabRow(${serialLabRowCount})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td></tr>`;
                    
                    document.getElementById('serialLabTableBody').innerHTML += rowHtml;
                    document.getElementById('serialLabTableContainer').style.display = 'block';
                    serialLabRowCount++;
                });
            }
        }
        
        function populateCultures() {
            if (patientDataJS && patientDataJS.cultures) {
                patientDataJS.cultures.forEach(culture => {
                    let type = culture.specimen_type;
                    let prefix = '';
                    let fields = [];
                    let tableBody = '';
                    let container = '';
                    let rowCount = 0;
                    
                    if (type === 'Pus') {
                        fields = ['pusday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'pusCultureTableBody';
                        container = 'pusCultureTableContainer';
                        prefix = 'pusculture_';
                        rowCount = globalCultureRowCount;
                    } else if (type === 'Urine') {
                        fields = ['urineday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'urineCultureTableBody';
                        container = 'urineCultureTableContainer';
                        prefix = 'urineculture_';
                        rowCount = globalCultureRowCount;
                    } else if (type === 'Blood') {
                        fields = ['bloodday', 'testing_date', 'organism_name', 'amikacin', 'amox_clav', 'cefepime', 'cefixime', 'cef_salbactam', 'cefoxitin', 'ceftrixone', 'ciprofloxacin', 'colistin', 'ertapenem', 'fosfomycin', 'meropenem', 'nitrofururantoin', 'norfloxacin', 'pip_taz', 'cotrimaxazole'];
                        tableBody = 'bloodCultureTableBody';
                        container = 'bloodCultureTableContainer';
                        prefix = 'bloodculture_';
                        rowCount = globalCultureRowCount;
                    } else {
                        return; // Skip unknown
                    }
                    
                    let rowHtml = '<tr data-row-id="' + rowCount + '">';
                    
                    // The backend stores day in 'day', but the HTML field is 'pusday' or 'urineday'.
                    let dayVal = culture.day !== null && culture.day !== '' ? culture.day : 'N/A';
                    let testingDate = culture.testing_date !== null && culture.testing_date !== '' ? culture.testing_date : 'N/A';
                    let organism = culture.organism_name !== null && culture.organism_name !== '' ? culture.organism_name : 'N/A';
                    
                    rowHtml += `<td>${dayVal}<input type="hidden" name="cultures[${rowCount}][day]" value="${dayVal !== 'N/A' ? dayVal : ''}"></td>`;
                    
                    if (type === 'Blood') {
                        // Blood has specimen_type column
                        rowHtml += `<td>${type}<input type="hidden" name="cultures[${rowCount}][specimen_type]" value="${type}"></td>`;
                    } else {
                        rowHtml += `<input type="hidden" name="cultures[${rowCount}][specimen_type]" value="${type}">`;
                    }
                    
                    rowHtml += `<td>${testingDate}<input type="hidden" name="cultures[${rowCount}][testing_date]" value="${testingDate !== 'N/A' ? testingDate : ''}"></td>`;
                    rowHtml += `<td>${organism}<input type="hidden" name="cultures[${rowCount}][organism_name]" value="${organism !== 'N/A' ? organism : ''}"></td>`;
                    
                    // Sensitivities
                    let sensMap = {};
                    if (culture.sensitivities) {
                        culture.sensitivities.forEach(s => {
                            sensMap[s.antibiotic_name.toLowerCase().replace(' ', '_')] = s.result;
                        });
                    }
                    
                    let sensIndex = 0;
                    fields.slice(3).forEach(sensField => {
                        let antibioticName = sensField.replace('_', ' ').replace(/\b\w/g, l => l.toUpperCase());
                        let result = sensMap[sensField] || 'N/A';
                        
                        let hidden1 = `<input type="hidden" name="cultures[${rowCount}][sensitivities][${sensIndex}][antibiotic_name]" value="${antibioticName}">`;
                        let hidden2 = `<input type="hidden" name="cultures[${rowCount}][sensitivities][${sensIndex}][result]" value="${result !== 'N/A' ? result : ''}">`;
                        
                        rowHtml += `<td>${result}${hidden1}${hidden2}</td>`;
                        sensIndex++;
                    });
                    
                    rowHtml += `<td class="d-flex flex-row gap-2">
                        <button type="button" class="btn btn-sm btn-info me-1" onclick="edit${type}CultureRow(${rowCount})">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="delete${type}CultureRow(${rowCount})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td></tr>`;
                    
                    document.getElementById(tableBody).innerHTML += rowHtml;
                    document.getElementById(container).style.display = 'block';
                    
                    if (type === 'Pus') globalCultureRowCount++;
                    if (type === 'Urine') globalCultureRowCount++;
                    if (type === 'Blood') globalCultureRowCount++;
                });
            }
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            populateSerialLabs();
            populateCultures();
        });
</script>
@endsection
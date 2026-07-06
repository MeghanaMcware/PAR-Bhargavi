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
                transform: translateY(30px);

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
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #dee2e6;
            color: #555;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: relative;
            margin: 0 35px;
            transition: .3s;
        }

        .step span {
            position: absolute;
            top: 60px;
            font-size: 13px;
            white-space: nowrap;
        }

        .step.active {
            background: #0d6efd;
            color: #fff;
        }

        .step.completed {
            background: #198754;
            color: #fff;
        }

        .step::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background: #dee2e6;
            left: 50px;
            top: 24px;
        }

        .step:last-child::after {
            display: none;
        }

        .step.completed::after {
            background: #198754;
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
                <form class="needs-validation" novalidate>
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

                            <div class="patient-card">
                                <h3 class="page-title">
                                    <span class="step-no">1</span>
                                    Patient Registration - Basic Details
                                </h3>

                                <div class="card-body">

                                    <div class="row">

                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Hospital code</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter Hospital code">
                                            <div class="invalid-feedback">
                                                Please enter Hospital code
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">UHID/Rgen No.</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter UHID/Rgen No.">
                                            <div class="invalid-feedback">
                                                Please enter UHID/Rgen No.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Date of Admission</label>
                                            <input class="form-control" type="date" name="Date_admission"
                                                placeholder="dd-mm-yyyy">
                                            <div class="invalid-feedback">
                                                Please enter Date of Admission
                                            </div>
                                        </div>


                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Time of Presentation</label>
                                            <input class="form-control" type="time" name="time_presentation"
                                                placeholder="Enter time of presentation">

                                            <div class="invalid-feedback">
                                                Please enter time of presentation.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Age</label>
                                            <input class="form-control" type="text" name="age" placeholder="Enter age"
                                                oninput="this.value=this.value.replace(/[^0-9]/g,'')">

                                            <div class="invalid-feedback">
                                                Please enter age.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Sex</label>
                                                <select class="js-example-placeholder-multiple col-sm-12">
                                                    <option value="AL">Male</option>
                                                    <option value="WY">Female</option>
                                                    <option value="WY">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Chief complaints</label>
                                            <textarea class="form-control" name="Chiefcomplaints"
                                                placeholder="Enter chief complaints"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter age.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Diagnosis</label>
                                            <input class="form-control" type="text" name="Diagnosis"
                                                placeholder="Enter diagnosis">

                                            <div class="invalid-feedback">
                                                Please enter diagnosis.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Symptom Duration</label>
                                                <select class="js-example-placeholder-multiple col-sm-12">
                                                    <option value="AL">>15days (3weeks)</option>
                                                    <option value="WY">1 week</option>
                                                    <option value="WY">3 days</option>
                                                    <option value="WY">1 week</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Comorbidities(CC INDEX)</label>
                                                <select class="js-example-placeholder-multiple col-sm-12">
                                                    <option value="AL">2</option>
                                                    <option value="WY">1 </option>
                                                    <option value="WY">>5</option>
                                                    <option value="WY">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Any comorbidity (<5 years)</label>
                                                    <input class="form-control" type="text" name="comorbidity"
                                                        placeholder="Enter any comorbidity (<5 years)">

                                                    <div class="invalid-feedback">
                                                        Please enter any comorbidity (<5 years). </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Previously ill requiring admission
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter previously ill requiring admission last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter previously ill requiring admission last 3 months?
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Previously received any antibiotic
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter previously received any antibiotic last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter Previously received any antibiotic last 3 months?
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Initital probable sepsis diagnosis
                                                            mentioned in
                                                            file</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter initital probable sepsis diagnosis mentioned in file">

                                                        <div class="invalid-feedback">
                                                            Please enter initital probable sepsis diagnosis mentioned in
                                                            file
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Direct admission here or referred
                                                            here?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter direct admission here or referred here?">

                                                        <div class="invalid-feedback">
                                                            Please enter direct admission here or referred here?
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="text-end">

                                            <button type="button" class="btn btn-primary" onclick="nextStep()">

                                                Next →

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="step-content" id="step2">

                            <div class="patient-card">

                                <h3 class="page-title">
                                    <span class="step-no">2</span>
                                    Clinical Assessment
                                </h3>

                                  <div class="row mb-3">

                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Date of Admission</label>
                            <input class="form-control" type="date" value="test" name="Date_admission"
                                placeholder="dd-mm-yyyy">
                            <div class="invalid-feedback">
                                Please enter Date of Admission
                            </div>
                        </div>


                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Time of Presentation</label>
                            <input class="form-control" type="time" value="10-06-2026" name="time_presentation"
                                placeholder="Enter time of presentation">

                            <div class="invalid-feedback">
                                Please enter time of presentation.
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Age</label>
                            <input class="form-control" type="text" value="20" name="age" placeholder="Enter age"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')">

                            <div class="invalid-feedback">
                                Please enter age.
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <div class="mb-0">
                                <label class="col-form-label mb-0 pb-0 pt-0">Sex</label>
                                <select class="js-example-placeholder-multiple col-sm-12">
                                    <option value="AL">Male</option>
                                    <option value="WY">Female</option>
                                    <option value="WY">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Chief complaints</label>
                            <textarea class="form-control" value="test" name="Chiefcomplaints"
                                placeholder="Enter chief complaints"></textarea>
                            <div class="invalid-feedback">
                                Please enter age.
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Diagnosis</label>
                            <input class="form-control" type="text" value="test" name="Diagnosis"
                                placeholder="Enter diagnosis">

                            <div class="invalid-feedback">
                                Please enter diagnosis.
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <div class="mb-0">
                                <label class="col-form-label mb-0 pb-0 pt-0">Symptom Duration</label>
                                <select class="js-example-placeholder-multiple col-sm-12">
                                    <option value="AL">>15days (3weeks)</option>
                                    <option value="WY">1 week</option>
                                    <option value="WY">3 days</option>
                                    <option value="WY">1 week</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <div class="mb-0">
                                <label class="col-form-label mb-0 pb-0 pt-0">Comorbidities(CC INDEX)</label>
                                <select class="js-example-placeholder-multiple col-sm-12">
                                    <option value="AL">2</option>
                                    <option value="WY">1 </option>
                                    <option value="WY">>5</option>
                                    <option value="WY">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Any comorbidity (<5 years)</label>
                                    <input class="form-control" value="test" type="text" name="comorbidity"
                                        placeholder="Enter any comorbidity (<5 years)">
                                    <div class="invalid-feedback">
                                        Please enter any comorbidity (5 years).
                                    </div>
                        </div>



                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Previously ill requiring admission last 3
                                months?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter previously ill requiring admission last 3 months?">

                            <div class="invalid-feedback">
                                Please enter previously ill requiring admission last 3 months?
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Previously received any antibiotic last 3
                                months?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter previously received any antibiotic last 3 months?">

                            <div class="invalid-feedback">
                                Please enter Previously received any antibiotic last 3 months?
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Initital probable sepsis diagnosis mentioned
                                in
                                file</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter initital probable sepsis diagnosis mentioned in file">

                            <div class="invalid-feedback">
                                Please enter initital probable sepsis diagnosis mentioned in file
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Direct admission here or referred
                                here?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter direct admission here or referred here?">

                            <div class="invalid-feedback">
                                Please enter direct admission here or referred here?
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">SOFA score at admission</label>
                            <input class="form-control" type="date" name="SOFAscoreadmission"
                                placeholder="Enter SOFA score at admission">

                            <div class="invalid-feedback">
                                Please enter SOFA score at admission
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">qSOFA Score</label>
                            <input class="form-control" type="text" name="qSOFAScore" placeholder="Enter qSOFA Score">

                            <div class="invalid-feedback">
                                Please enter qSOFA Score
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">MEWS Score</label>
                            <input class="form-control" type="text" name="MEWSScore" placeholder="Enter MEWS Score">

                            <div class="invalid-feedback">
                                Please enter MEWS Score
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">NEWS Score</label>
                            <input class="form-control" type="text" name="NEWSScore" placeholder="Enter NEWS Score">

                            <div class="invalid-feedback">
                                Please enter NEWS Score
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">MDRO Screening</label>
                            <input class="form-control" type="text" name="MDROScreening" placeholder="Enter MDRO Screening">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-md-4 col-12">
                            <label class="form-label mb-0">Organ dysfunction?
                                Renal/Metabolic/cardiac/haematology/respiratory</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Organ dysfunction? Renal/Metabolic/cardiac/haematology/respiratory">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">1st Lactate Value ordered date</label>
                            <input class="form-control" type="text" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">First Lactate Value ordered time</label>
                            <input class="form-control" type="time" name="MDROScreening" placeholder="">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">First Lactate Value </label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter First Lactate Value ">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Blood cultures sent date </label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Name other samples sent for cultures</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Name other samples sent for cultures">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Other Culture sent date</label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">other Culture sent time</label>
                            <input class="form-control" type="time" name="MDROScreening" placeholder="">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">First dose antibiotic administered Date</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter First dose antibiotic administered Date">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Name of emperical antibiotic</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Name of emperical antibiotic">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Initial fluid administered</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Initial fluid administered">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">volume fluid administered</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter volume fluid administered">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Pateint response post infusion</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Pateint response post infusion">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Repeat Lactate after repeated infusion(if)</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Repeat Lactate after repeated infusion(if)">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">No. of organs affected(after lab reports)</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter No. of organs affected(after lab reports)">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Any surgery(<28 Days)</label>
                                    <input class="form-control" type="number" name="MDROScreening"
                                        placeholder="Enter Any surgery(<28 Days)">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Molecular tests ordered date</label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Which molecular test</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter Which molecular test">


                        </div>
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Molecular tests result received date</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter Molecular tests result received date">


                        </div>

                        <!-- Blood Culture Result -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Blood Culture Result</label>
                            <select class="form-select" name="blood_culture_result">
                                <option value="">Select</option>
                                <option>Positive</option>
                                <option>Negative</option>
                                <option>No Growth</option>
                                <option>Pending</option>
                            </select>
                        </div>

                        <!-- Blood Culture Flagged Positive Date -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Blood Culture Flagged Positive Date</label>
                            <input type="date" class="form-control" name="blood_culture_positive_date">
                        </div>

                        <!-- Blood Culture Flagged Positive Time -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Blood Culture Flagged Positive Time</label>
                            <input type="time" class="form-control" name="blood_culture_positive_time">
                        </div>

                        <!-- Antibiotic Changed -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Antibiotic Changed After Blood Culture Report</label>
                            <select class="form-select" name="antibiotic_changed">
                                <option value="">Select</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <!-- Rapid PCR Results -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Rapid PCRs on Blood Culture Results</label>
                            <textarea class="form-control" name="rapid_pcr_results" rows="2"
                                placeholder="Enter PCR Results"></textarea>
                        </div>

                        <!-- Antibiotics Change After Rapid PCR -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Antibiotics Change After Rapid PCR</label>
                            <select class="form-select" name="antibiotics_change_after_pcr">
                                <option value="">Select</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <!-- Other Culture Growth Reported On -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Other Culture Growth Reported On</label>
                            <input type="date" class="form-control" name="other_culture_reported_on">
                        </div>

                        <!-- Sample From Which Culture Growth Reported -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Sample From Which Culture Growth Reported</label>
                            <input type="text" class="form-control" name="sample_culture_growth"
                                placeholder="Enter Sample Type">
                        </div>

                        <!-- ESBL / CRE / CRAB / MRSA / VRE -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">ESBL / CRE / CRAB / MRSA / VRE</label>
                            <select class="form-select" name="resistant_organism">
                                <option value="">Select</option>
                                <option>ESBL</option>
                                <option>CRE</option>
                                <option>CRAB</option>
                                <option>MRSA</option>
                                <option>VRE</option>
                                <option>None</option>
                            </select>
                        </div>

                        <!-- MDRO Screening @ Admission Result -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">MDRO Screening @ Admission Result</label>
                            <select class="form-select" name="mdro_screening_result">
                                <option value="">Select</option>
                                <option>Positive</option>
                                <option>Negative</option>
                                <option>Pending</option>
                                <option>Not Done</option>
                            </select>
                        </div>

                        <!-- First USG Abdomen Done On -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">First USG Abdomen Done On</label>
                            <input type="date" class="form-control" name="usg_abdomen_date">
                        </div>

                        <!-- USG Abdomen Findings -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">USG Abdomen Findings</label>
                            <textarea class="form-control" name="usg_abdomen_findings" rows="2"
                                placeholder="Enter USG Abdomen Findings"></textarea>
                        </div>

                        <!-- First Chest X-Ray Done On -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">First Chest X-Ray Done On</label>
                            <input type="date" class="form-control" name="chest_xray_date">
                        </div>

                        <!-- Chest X-Ray Findings -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Chest X-Ray Findings</label>
                            <textarea class="form-control" name="chest_xray_findings" rows="2"
                                placeholder="Enter Chest X-Ray Findings"></textarea>
                        </div>

                        <!-- PET/CT Done On -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">PET/CT Done On</label>
                            <input type="date" class="form-control" name="pet_ct_date">
                        </div>

                        <!-- PET/CT Findings -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">PET/CT Findings</label>
                            <textarea class="form-control" name="pet_ct_findings" rows="2"
                                placeholder="Enter PET/CT Findings"></textarea>
                        </div>

                        <!-- Follow Up CT Scan Done On -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Follow Up CT Scan Done On</label>
                            <input type="date" class="form-control" name="followup_ct_date">
                        </div>

                        <!-- Follow Up CT Scan Findings -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Follow Up CT Scan Findings</label>
                            <textarea class="form-control" name="followup_ct_findings" rows="2"
                                placeholder="Enter Follow Up CT Scan Findings"></textarea>
                        </div>

                        <!-- Repeat Date(s) of Chest X-Ray -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Repeat Date(s) of Chest X-Ray</label>
                            <input type="text" class="form-control" name="repeat_chest_xray_dates"
                                placeholder="e.g. 10/06/2026, 15/06/2026">
                        </div>

                        <!-- Findings of X-Ray -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Findings of X-Ray (Worsening / Better / New Changes)</label>
                            <textarea class="form-control" name="xray_findings" rows="2"
                                placeholder="Enter X-Ray Findings"></textarea>
                        </div>

                        <!-- Pleural Tapping Date -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Pleural Tapping (If Done) Date</label>
                            <input type="date" class="form-control" name="pleural_tapping_date">
                        </div>

                        <!-- Pleural Fluid Culture Results -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Pleural Fluid Culture Results</label>
                            <textarea class="form-control" name="pleural_fluid_culture" rows="2"
                                placeholder="Enter Culture Results"></textarea>
                        </div>

                        <!-- Day of Change of Antibiotics -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Day of Change of Antibiotics</label>
                            <input type="number" class="form-control" name="day_antibiotic_change" min="0"
                                placeholder="Days">
                        </div>

                        <!-- Days of Empirical Antibiotic Therapy -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Days of Empirical Antibiotic Therapy</label>
                            <input type="number" class="form-control" name="empirical_antibiotic_days" min="0"
                                placeholder="Days">
                        </div>

                        <!-- Days of Definitive Antibiotic Therapy -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Days of Definitive Antibiotic Therapy</label>
                            <input type="number" class="form-control" name="definitive_antibiotic_days" min="0"
                                placeholder="Days">
                        </div>

                        <!-- Source Established -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Source Established? Where?</label>
                            <input type="text" class="form-control" name="source_established" placeholder="Enter Source">
                        </div>

                        <!-- Patient Outcome - Day 7 -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Patient Outcome at 7th Day</label>
                            <select class="form-select" name="outcome_day7">
                                <option value="">Select</option>
                                <option>Recovered</option>
                                <option>Improved</option>
                                <option>Stable</option>
                                <option>Worsened</option>
                                <option>Expired</option>
                            </select>
                        </div>

                        <!-- Patient Outcome - Day 14 -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Patient Outcome at 14th Day</label>
                            <select class="form-select" name="outcome_day14">
                                <option value="">Select</option>
                                <option>Recovered</option>
                                <option>Improved</option>
                                <option>Stable</option>
                                <option>Worsened</option>
                                <option>Expired</option>
                            </select>
                        </div>

                        <!-- Patient Outcome - Day 21 -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Patient Outcome at 21st Day</label>
                            <select class="form-select" name="outcome_day21">
                                <option value="">Select</option>
                                <option>Recovered</option>
                                <option>Improved</option>
                                <option>Stable</option>
                                <option>Worsened</option>
                                <option>Expired</option>
                            </select>
                        </div>

                        <!-- Patient Outcome - Day 28 -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Patient Outcome at 28th Day</label>
                            <select class="form-select" name="outcome_day28">
                                <option value="">Select</option>
                                <option>Recovered</option>
                                <option>Improved</option>
                                <option>Stable</option>
                                <option>Worsened</option>
                                <option>Expired</option>
                            </select>
                        </div>

                        <!-- ICU Hospitalization -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Days of ICU Hospitalization</label>
                            <input type="number" class="form-control" name="icu_days" min="0" placeholder="Days">
                        </div>

                        <!-- Ward Hospitalization -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Days of Ward Hospitalization</label>
                            <input type="number" class="form-control" name="ward_days" min="0" placeholder="Days">
                        </div>

                        <!-- Discharge Date -->
                        <div class="col-md-4 col-12 mb-3">
                            <label class="form-label mb-0">Discharge Date</label>
                            <input type="date" class="form-control" name="discharge_date">
                        </div>

                                <div class="d-flex justify-content-between align-items-center mt-5">

    <button type="button" class="btn btn-secondary px-4" onclick="previousStep()">
        <i class="fa fa-arrow-left me-2"></i> Previous
    </button>

    <div>
        <button type="button" class="btn btn-success px-4 me-2" onclick="saveStep()">
            <i class="fa fa-save me-2"></i> Save
        </button>

        <button type="button" class="btn btn-primary px-4" onclick="nextStep()">
            Next <i class="fa fa-arrow-right ms-2"></i>
        </button>
    </div>

</div>
                            </div>

                        </div>
                        </div>

                        <!-- ===========================
            STEP 3 : SERIAL LAB
    =========================== -->

                       <div class="step-content" id="step3">

    <div class="card shadow border-0">
  <div class="patient-card ">
        <h3 class="page-title mb-0">
            <span class="step-no">3</span>
            Serial Lab
        </h3>

        <div class="card-body">

            <div class="row ">
                                <div class="mb-3 col-md-4 col-12">
                                    <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                        Day
                                    </label>

                                    <input class="form-control" type="text" id="day" name="day" placeholder="Enter Day">

                                    <div class="invalid-feedback">
                                        Please enter day
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                        Lab Parameters
                                    </label>

                                    <input class="form-control" type="text" id="lab_parameters" name="lab_parameters" placeholder="Enter Lab Parameters">

                                    <div class="invalid-feedback">
                                        Please enter lab parameters
                                    </div>
                                </div>

                                <div class="mb-3 col-md-4 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        WBC TC
                                    </label>

                                    <input class="form-control" id="" type="number" name="wbc_tc" placeholder="Enter WBC TC">

                                    <div class="invalid-feedback">
                                        Please enter WBC TC
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        BANDS/Left shift
                                    </label>

                                    <input class="form-control" id="f1-last-name" type="text" name="bands_left_shift"
                                        placeholder="Enter BANDS/Left shift">

                                    <div class="invalid-feedback">
                                        Please enter BANDS/Left shift
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        NLR

                                    </label>

                                    <input class="form-control" id="" type="number" name="nlr" placeholder="Enter NLR">

                                    <div class="invalid-feedback">
                                        Please enter NLR
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        Platelets

                                    </label>

                                    <input class="form-control" id="f1-last-name" type="number" name="platelets"
                                        placeholder="Enter Platelets">

                                    <div class="invalid-feedback">
                                        Please enter Platelets
                                    </div>
                                </div>


                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Hb </label>
                                    <input type="number" class="form-control" name="hb" placeholder="Enter Hb">
                                    <div class="invalid-feedback">Please enter Hb</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">PCT </label>
                                    <input type="number" class="form-control" name="pct" placeholder="Enter PCT">
                                    <div class="invalid-feedback">Please enter PCT</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">CRP </label>
                                    <input type="number" class="form-control" name="crp" placeholder="Enter CRP">
                                    <div class="invalid-feedback">Please enter CRP</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">S.lactate </label>
                                    <input type="number" class="form-control" name="s_lactate" placeholder="Enter S.lactate">
                                    <div class="invalid-feedback">Please enter S.lactate</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Urea/BUN </label>
                                    <input type="number" class="form-control" name="urea_bun" placeholder="Enter Urea/BUN">
                                    <div class="invalid-feedback">Please enter Urea/BUN</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">S. creatinine </label>
                                    <input type="number" class="form-control" name="s_creatinine" placeholder="Enter S. creatinine">
                                    <div class="invalid-feedback">Please enter S. creatinine</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">AST </label>
                                    <input type="number" class="form-control" name="ast" placeholder="Enter AST">
                                    <div class="invalid-feedback">Please enter AST</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">ALT </label>
                                    <input type="number" class="form-control" name="alt" placeholder="Enter ALT">
                                    <div class="invalid-feedback">Please enter ALT</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">S.bilurubin </label>
                                    <input type="number" class="form-control" name="s_bilurubin" placeholder="Enter S.bilurubin">
                                    <div class="invalid-feedback">Please enter S.bilurubin</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Albubin </label>
                                    <input type="number" class="form-control" name="albubin" placeholder="Enter Albubin">
                                    <div class="invalid-feedback">Please enter Albubin</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">LDH </label>
                                    <input type="number" class="form-control" name="ldh" placeholder="Enter LDH">
                                    <div class="invalid-feedback">Please enter LDH</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">IL 6/8/10 </label>
                                    <input type="number" class="form-control" name="il_6_8_10" placeholder="Enter IL 6/8/10">
                                    <div class="invalid-feedback">Please enter IL 6/8/10</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">ABG </label>
                                    <input type="number" class="form-control" name="abg" placeholder="Enter ABG">
                                    <div class="invalid-feedback">Please enter ABG</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">pH </label>
                                    <input type="number" class="form-control" name="ph" placeholder="Enter pH">
                                    <div class="invalid-feedback">Please enter pH</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">PC02 </label>
                                    <input type="number" class="form-control" name="pc02" placeholder="Enter PC02">
                                    <div class="invalid-feedback">Please enter PC02</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">PO2 </label>
                                    <input type="number" class="form-control" name="po2" placeholder="Enter PO2">
                                    <div class="invalid-feedback">Please enter PO2</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">HCO3 </label>
                                    <input type="number" class="form-control" name="hco3" placeholder="Enter HCO3">
                                    <div class="invalid-feedback">Please enter HCO3</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Coagulation profile </label>
                                    <input type="number" class="form-control" name="coagulation_profile"
                                        placeholder="Enter Coagulation profile">
                                    <div class="invalid-feedback">Please enter Coagulation profile</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">APTT</label>
                                    <input type="number" class="form-control" name="aptt" placeholder="Enter APTT">
                                    <div class="invalid-feedback">Please enter APTT</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">PT</label>
                                    <input type="number" class="form-control" name="pt" placeholder="Enter PT">
                                    <div class="invalid-feedback">Please enter PT</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">INR</label>
                                    <input type="number" class="form-control" name="inr" placeholder="Enter INR">
                                    <div class="invalid-feedback">Please enter INR</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">d-Dimer</label>
                                    <input type="number" class="form-control" name="d_dimer" placeholder="Enter d-Dimer">
                                    <div class="invalid-feedback">Please enter d-Dimer</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">fibrinogen</label>
                                    <input type="number" class="form-control" name="fibrinogen" placeholder="Enter fibrinogen">
                                    <div class="invalid-feedback">Please enter fibrinogen</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Electrolytes</label>
                                    <input type="number" class="form-control" name="electrolytes" placeholder="Enter Electrolytes">
                                    <div class="invalid-feedback">Please enter Electrolytes</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Na</label>
                                    <input type="number" class="form-control" name="na" placeholder="Enter Na">
                                    <div class="invalid-feedback">Please enter Na</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">K</label>
                                    <input type="number" class="form-control" name="k" placeholder="Enter K">
                                    <div class="invalid-feedback">Please enter K</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Cl</label>
                                    <input type="number" class="form-control" name="cl" placeholder="Enter Cl">
                                    <div class="invalid-feedback">Please enter Cl</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">Bicarbonates</label>
                                    <input type="number" class="form-control" name="bicarbonates" placeholder="Enter Bicarbonates">
                                    <div class="invalid-feedback">Please enter Bicarbonates</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">HbA1C</label>
                                    <input type="number" class="form-control" name="hba1c" placeholder="Enter HbA1C">
                                    <div class="invalid-feedback">Please enter HbA1C</div>
                                </div>
                                <div class="mb-3 col-md-4 col-12">
                                    <label class="form-label mb-0">SpO2</label>
                                    <input type="number" class="form-control" name="spo2" placeholder="Enter SpO2">
                                    <div class="invalid-feedback">Please enter SpO2</div>
                                </div>

                            </div>

           <div class="d-flex justify-content-between align-items-center mt-5">

    <button type="button" class="btn btn-secondary px-4" onclick="previousStep()">
        <i class="fa fa-arrow-left me-2"></i> Previous
    </button>

    <div>
        <button type="button" class="btn btn-success px-4 me-2" onclick="saveStep()">
            <i class="fa fa-save me-2"></i> Save
        </button>

        <button type="button" class="btn btn-primary px-4" onclick="nextStep()">
            Next <i class="fa fa-arrow-right ms-2"></i>
        </button>
    </div>

</div>

        </div>

    </div>

</div>
</div>
                        <!-- ===========================
            STEP 4 : PUS CULTURE
    =========================== -->
<div id="pusCultureSection">
                        <div class="step-content" id="step4">

                            <div class="card shadow border-0">
<div class="patient-card">
                                <h3 class="page-title mb-0">
                                    <span class="step-no">4</span>
                                    Pus Culture
                                </h3>

                                <div class="card-body">

                                 <div class="row g-3 mb-3">
                                <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Day</label><input class="form-control" name="urineday"
                                            placeholder="Enter Day">
                                    </div> 
                                    <!-- UHID -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFIXIME -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFIXIME</label>
                                        <select class="form-select" name="cefixime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF + SALBACTAM -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEF + SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFOXITIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFOXITIN</label>
                                        <select class="form-select" name="cefoxitin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIXONE -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFTRIXONE</label>
                                        <select class="form-select" name="ceftrixone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- MEROPENEM -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">MEROPENEM</label>
                                        <select class="form-select" name="meropenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NITROFURURANTOIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">NITROFURURANTOIN</label>
                                        <select class="form-select" name="nitrofururantoin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NORFLOXACIN -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">NORFLOXACIN</label>
                                        <select class="form-select" name="norfloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class="col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">COTRIMAXAZOLE</label>
                                        <select class="form-select" name="cotrimaxazole">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 text-end">
                                        Add
                                    </button>
                                </div>
                                <div class="mt-4" id="urineCultureTableContainer" style="display: none;">
                                    <h4 class="text-primary mb-3 text-center"><b>Added URINE CULTURE Data</b></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="urineCultureDataTable">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Day</th>
                                                    <th>UHID</th>
                                                    <th>Testing Date</th>
                                                    <th>Organism Name</th>
                                                    <th>AMIKACIN</th>
                                                    <th>AMOX CLAV</th>
                                                    <th>CEFEPIME</th>
                                                    <th>CEFIXIME</th>
                                                    <th>CEF + SALBACTAM</th>
                                                    <th>CEFOXITIN</th>
                                                    <th>CEFTRIXONE</th>
                                                    <th>CIPROFLOXACIN</th>
                                                    <th>COLISTIN</th>
                                                    <th>ERTAPENEM</th>
                                                    <th>FOSFOMYCIN</th>
                                                    <th>MEROPENEM</th>
                                                    <th>NITROFURURANTOIN</th>
                                                    <th>NORFLOXACIN</th>
                                                    <th>PIP-TAZ</th>
                                                    <th>COTRIMAXAZOLE</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="urineCultureDataBody">
                                                <!-- Data will be added here dynamically -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    <div class="d-flex justify-content-between align-items-center mt-5">

    <button type="button" class="btn btn-secondary px-4" onclick="previousStep()">
        <i class="fa fa-arrow-left me-2"></i> Previous
    </button>

    <div>
       <button type="button" class="btn btn-success rounded-pill px-4" id="urineFinalSubmitBtn" style="display: none;" onclick="resetSingleMicroTable('urine')">
                                    Save
                                </button>

        <button type="button" class="btn btn-primary px-4" onclick="nextStep()">
            Next <i class="fa fa-arrow-right ms-2"></i>
        </button>
    </div>

</div>

                                </div>

                            </div>

                        </div>
                        </div>
</div>
                       
                        <!-- ===========================
            STEP 5 : URINE CULTURE
    =========================== -->

                        <div class="step-content" id="step5">

                            <div class="card shadow border-0">

                                <div class="patient-card">
                                <h3 class="page-title mb-0">
                                    <span class="step-no">4</span>
                                    Pus Culture
                                </h3>

                                <div class="card-body">

                                     <div class="row g-3 mb-3">
                                <div class="col-md-4 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Day</label><input class="form-control" name="urineday"
                                            placeholder="Enter Day">
                                    </div> 
                                    <!-- UHID -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFIXIME -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFIXIME</label>
                                        <select class="form-select" name="cefixime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF + SALBACTAM -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEF + SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFOXITIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFOXITIN</label>
                                        <select class="form-select" name="cefoxitin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIXONE -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFTRIXONE</label>
                                        <select class="form-select" name="ceftrixone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- MEROPENEM -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">MEROPENEM</label>
                                        <select class="form-select" name="meropenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NITROFURURANTOIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">NITROFURURANTOIN</label>
                                        <select class="form-select" name="nitrofururantoin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NORFLOXACIN -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">NORFLOXACIN</label>
                                        <select class="form-select" name="norfloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class="col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">COTRIMAXAZOLE</label>
                                        <select class="form-select" name="cotrimaxazole">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                </div>

                                   <div class="d-flex justify-content-between align-items-center mt-5">

    <button type="button" class="btn btn-secondary px-4" onclick="previousStep()">
        <i class="fa fa-arrow-left me-2"></i> Previous
    </button>

    <div>
        <button type="button" class="btn btn-success px-4 me-2" onclick="saveStep()">
            <i class="fa fa-save me-2"></i> Save
        </button>

        <button type="button" class="btn btn-primary px-4" onclick="nextStep()">
            Next <i class="fa fa-arrow-right ms-2"></i>
        </button>
    </div>

</div>

                                </div>

                            </div>

                        </div>
                        </div>

                        <!-- ===========================
            STEP 6 : BLOOD CULTURE
    =========================== -->

                        <div class="step-content" id="step6">

                            <div class="card shadow border-0">

                                <div class="patient-card">
                                <h3 class="page-title mb-0">
                                    <span class="step-no">6</span>
                                    Blood Culture
                                </h3>

                                <div class="card-body">

                                    <div class="row g-3 mb-3">
                                   <div class="col-md-4 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Day</label><input class="form-control" name="bloodday"
                                            placeholder="Enter Day">
                                    </div> 
                                    <!-- Specimen Type -->
                                    <div class=" col-md-4 col-12">
                                        <label class="form-label mb-0">Specimen Type</label>
                                        <select class="form-select" name="specimen_type">
                                            <option value="">Select Specimen</option>
                                            <option>Urine</option>
                                            <option>Blood</option>
                                            <option>Pus</option>
                                            <option>Sputum</option>
                                            <option>Stool</option>
                                            <option>CSF</option>
                                            <option>Swab</option>
                                            <option>Other</option>
                                        </select>
                                    </div>

                                    <!-- UHID -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFUROXIME</label>
                                        <select class="form-select" name="cefuroxime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME-AXE -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFUROXIME-AXE</label>
                                        <select class="form-select" name="cefuroxime_axe">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIAXONE -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFTRIAXONE</label>
                                        <select class="form-select" name="ceftriaxone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF-SALBACTAM -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEF-SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- IMIPENEM -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">IMIPENEM</label>
                                        <select class="form-select" name="imipenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- GENTAMYCIN -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">GENTAMYCIN</label>
                                        <select class="form-select" name="gentamycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- TIGECYCLINE -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">TIGECYCLINE</label>
                                        <select class="form-select" name="tigecycline">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class=" col-md-4 col-12 mb-3">
                                        <label class="form-label mb-0">COTRIMAXAZOLE</label>
                                        <select class="form-select" name="cotrimaxazole">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                </div>

                                    <div class="d-flex justify-content-between mt-4">

                                        <button type="button" class="btn btn-secondary" onclick="previousStep()">

                                            <i class="fa fa-arrow-left"></i> Previous

                                        </button>

                                        <button type="submit" class="btn btn-success">

                                            <i class="fa fa-save"></i> Submit Patient Form

                                        </button>

                                    </div>

                                </div>

                            </div>

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
            <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(this, 'bloodCultureDataBody', 'bloodCultureTableContainer')">Delete</button>
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
        pus:   { body: 'pusCultureDataBody',   container: 'pusCultureTableContainer',   btn: 'pusFinalSubmitBtn',   label: 'PUS CULTURE' },
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

                        if (!form.checkValidity()) {

                            event.preventDefault()
                            event.stopPropagation()

                        } else {

                            event.preventDefault();

                            Swal.fire({
                                icon: 'success',
                                title: 'Submitted Successfully',
                                text: 'Your details saved successfully',
                                showConfirmButton: false,
                                timer: 2000
                            });

                            form.reset();

                        }

                        form.classList.add('was-validated')

                    }, false)

                })

        })()

    </script>

    <script>
        let currentStep = 1;
        const totalSteps = 6;

        document.addEventListener("DOMContentLoaded", function () {
            showStep(currentStep);
        });

        function showStep(step) {

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
    </script>

@endsection
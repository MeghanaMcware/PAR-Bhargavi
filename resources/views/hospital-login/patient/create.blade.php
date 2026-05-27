@extends('hospital-login.layout.app')

@section('title')
    Patient List
@endsection

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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

                <form class="f1 needs-validation" method="post" novalidate>

                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                        </div>

                        <div class="f1-step active">
                            <div class="f1-step-icon">
                               <i class="fa fa-hospital-o"></i>
                            </div>
                            <p>SERIAL LAB </p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <p>MIC MICRO</p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <p>MS Ramiah Memorial</p>
                        </div>
                    </div>

                    <!-- Step 1 -->
                    <fieldset>
                        <div class="d-flex row m-0">
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-first-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Patient ID <span class="text-danger">*</span>
                                </label>

                                <input class="form-control" id="f1-first-name" type="text" name="patient_id"
                                    placeholder="Enter Patient ID" required>

                                <div class="invalid-feedback">
                                    Please enter your patient id
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    WBC TC <span class="text-danger">*</span>
                                </label>

                                <input class="form-control" id="f1-last-name" type="text" name="wbc_tc"
                                    placeholder="Enter WBC TC" required>

                                <div class="invalid-feedback">
                                    Please enter WBC TC
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Hospital Name <span class="text-danger">*</span>
                                </label>

                                <input class="form-control" id="f1-last-name" type="text" name="hospital_name"
                                    placeholder="Enter Hospital Name" required>

                                <div class="invalid-feedback">
                                    Please enter Hospital Name
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Date of admission
                                    <span class="text-danger">*</span>
                                </label>

                                <input class="form-control" id="f1-last-name" type="date" name="date_of_admission"
                                    placeholder="Enter Date of admission" required>

                                <div class="invalid-feedback">
                                    Please enter Date of admission
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                    Time of admisison
                                    <span class="text-danger">*</span>
                                </label>

                                <input class="form-control" id="f1-last-name" type="time" name="time_of_admission"
                                    placeholder="Enter Time of admisison" required>

                                <div class="invalid-feedback">
                                    Please enter Time of admisison
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label" style="margin-bottom: 0px !important;">q-SOFA SCORE</label>

                                <select class="form-select" name="q_sofa_score" required>
                                    <option value="">Select q-SOFA Score</option>
                                    <option value="<2">Less than 2</option>
                                    <option value=">2">Greater than 2</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select q-SOFA score
                                </div>
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
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-email" class="form-label" style="margin-bottom: 0px !important;">
                                    UHID
                                </label>

                                <input class="form-control" id="f1-email" type="text" name="uhid" placeholder="Enter UHID"
                                    required>

                                <div class="invalid-feedback">
                                    Please enter UHID
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label" style="margin-bottom: 0px !important;">Specimen Type</label>

                                <select class="form-select" name="specimen_type" required>
                                    <option value="">Select Specimen Type</option>
                                    <option value="Blood">Blood</option>
                                    <option value="Urine">Urine</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select specimen type
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-repeat-password" class="form-label">
                                   Testing Date
                                </label>

                                <input class="form-control" id="f1-repeat-password" type="date"
                                    name="testing_date" required>

                                <div class="invalid-feedback">
                                    Please select testing date
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-repeat-password" class="form-label">
                                  Organism Name
                                </label>

                                <input class="form-control" id="f1-repeat-password" type="text"
                                    name="organism_name" placeholder="Enter organism name" required>

                                <div class="invalid-feedback">
                                    Please enter organism name
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-repeat-password" class="form-label">
                                  AMPICILLIN MIC
                                </label>

                                <input class="form-control" id="f1-repeat-password" type="text"
                                    name="ampicillin_mic" placeholder="Enter AMPICILLIN MIC" required>

                                <div class="invalid-feedback">
                                    Please enter AMPICILLIN MIC
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-repeat-password" class="form-label">
                                  Interpretation
                                </label>

                                <input class="form-control" id="f1-repeat-password" type="text"
                                    name="interpretation" placeholder="Enter interpretation" required>

                                <div class="invalid-feedback">
                                    Please enter interpretation
                                </div>
                            </div>
                            <div class="mb-3 col-lg-6 col-12">
                                <label for="f1-repeat-password" class="form-label">
                                AMOX CLAVULANIC ACID
                                </label>

                                <input class="form-control" id="f1-repeat-password" type="text"
                                    name="amox_clavulanic_acid" placeholder="Enter AMOX CLAVULANIC ACID" required>

                                <div class="invalid-feedback">
                                    Please enter AMOX CLAVULANIC ACID
                                </div>
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

                        <div class="mb-3">
                            <label for="dd" class="form-label">
                                Single patient

                            </label>

                            <input class="form-control" id="dd" type="number" placeholder="Single patient" required>

                            <div class="invalid-feedback">
                                Please enter day
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mm" class="form-label">
                                WBC TC

                            </label>

                            <input class="form-control" id="mm" type="number" placeholder="WBC TC" required>

                            <div class="invalid-feedback">
                                Please enter WBC TC
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="yyyy" class="form-label">
                                BANDS/Left shift

                            </label>

                            <input class="form-control" id="yyyy" type="number" placeholder="BANDS/Left shift" required>

                            <div class="invalid-feedback">
                                Please enter BANDS/Left shift
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="yyyy" class="form-label">
                                NLR


                            </label>

                            <input class="form-control" id="yyyy" type="number" placeholder="NLR" required>

                            <div class="invalid-feedback">
                                Please enter NLR
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="yyyy" class="form-label">
                                Platelets



                            </label>

                            <input class="form-control" id="yyyy" type="text" placeholder="Platelets" required>

                            <div class="invalid-feedback">
                                Please enter Platelets
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

    <script>
        (() => {
            'use strict';

            const forms = document.querySelectorAll('.needs-validation');

            Array.from(forms).forEach(form => {

                form.addEventListener('submit', event => {

                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');

                }, false);

            });

        })();
    </script>

@endsection
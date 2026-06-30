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
                        <li class="breadcrumb-item">Update Patient</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="card">

            <div class="card-body">
                <form class="needs-validation" novalidate>

                    <div class="row">

                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Date of Admission</label>
                            <input class="form-control" type="date" value="test" name="Date_admission"
                                placeholder="dd-mm-yyyy">
                            <div class="invalid-feedback">
                                Please enter Date of Admission
                            </div>
                        </div>


                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Time of Presentation</label>
                            <input class="form-control" type="time" value="10-06-2026" name="time_presentation"
                                placeholder="Enter time of presentation">

                            <div class="invalid-feedback">
                                Please enter time of presentation.
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Age</label>
                            <input class="form-control" type="text" value="20" name="age" placeholder="Enter age"
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
                            <textarea class="form-control" value="test" name="Chiefcomplaints"
                                placeholder="Enter chief complaints"></textarea>
                            <div class="invalid-feedback">
                                Please enter age.
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Diagnosis</label>
                            <input class="form-control" type="text" value="test" name="Diagnosis"
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
                                    <input class="form-control" value="test" type="text" name="comorbidity"
                                        placeholder="Enter any comorbidity (<5 years)">
                                    <div class="invalid-feedback">
                                        Please enter any comorbidity (5 years).
                                    </div>
                        </div>



                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Previously ill requiring admission last 3
                                months?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter previously ill requiring admission last 3 months?">

                            <div class="invalid-feedback">
                                Please enter previously ill requiring admission last 3 months?
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Previously received any antibiotic last 3
                                months?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter previously received any antibiotic last 3 months?">

                            <div class="invalid-feedback">
                                Please enter Previously received any antibiotic last 3 months?
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Initital probable sepsis diagnosis mentioned
                                in
                                file</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter initital probable sepsis diagnosis mentioned in file">

                            <div class="invalid-feedback">
                                Please enter initital probable sepsis diagnosis mentioned in file
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Direct admission here or referred
                                here?</label>
                            <input class="form-control" type="text" value="test" name="comorbidity"
                                placeholder="Enter direct admission here or referred here?">

                            <div class="invalid-feedback">
                                Please enter direct admission here or referred here?
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">SOFA score at admission</label>
                            <input class="form-control" type="date" name="SOFAscoreadmission"
                                placeholder="Enter SOFA score at admission">

                            <div class="invalid-feedback">
                                Please enter SOFA score at admission
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">qSOFA Score</label>
                            <input class="form-control" type="text" name="qSOFAScore" placeholder="Enter qSOFA Score">

                            <div class="invalid-feedback">
                                Please enter qSOFA Score
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">MEWS Score</label>
                            <input class="form-control" type="text" name="MEWSScore" placeholder="Enter MEWS Score">

                            <div class="invalid-feedback">
                                Please enter MEWS Score
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">NEWS Score</label>
                            <input class="form-control" type="text" name="NEWSScore" placeholder="Enter NEWS Score">

                            <div class="invalid-feedback">
                                Please enter NEWS Score
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">MDRO Screening</label>
                            <input class="form-control" type="text" name="MDROScreening" placeholder="Enter MDRO Screening">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Organ dysfunction?
                                Renal/Metabolic/cardiac/haematology/respiratory</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Organ dysfunction? Renal/Metabolic/cardiac/haematology/respiratory">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">1st Lactate Value ordered date</label>
                            <input class="form-control" type="text" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">First Lactate Value ordered time</label>
                            <input class="form-control" type="time" name="MDROScreening" placeholder="">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">First Lactate Value </label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter First Lactate Value ">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Blood cultures sent date </label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Name other samples sent for cultures</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Name other samples sent for cultures">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Other Culture sent date</label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">other Culture sent time</label>
                            <input class="form-control" type="time" name="MDROScreening" placeholder="">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">First dose antibiotic administered Date</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter First dose antibiotic administered Date">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Name of emperical antibiotic</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Name of emperical antibiotic">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Initial fluid administered</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Initial fluid administered">

                            <div class="invalid-feedback">
                                Please enter MDRO Screening
                            </div>
                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">volume fluid administered</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter volume fluid administered">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Pateint response post infusion</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Pateint response post infusion">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Repeat Lactate after repeated infusion(if)</label>
                            <input class="form-control" type="text" name="MDROScreening"
                                placeholder="Enter Repeat Lactate after repeated infusion(if)">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">No. of organs affected(after lab reports)</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter No. of organs affected(after lab reports)">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Any surgery(<28 Days)</label>
                                    <input class="form-control" type="number" name="MDROScreening"
                                        placeholder="Enter Any surgery(<28 Days)">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Molecular tests ordered date</label>
                            <input class="form-control" type="date" name="MDROScreening" placeholder="dd-mm-yyyy">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Which molecular test</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter Which molecular test">


                        </div>
                        <div class="mb-3 col-lg-4 col-12">
                            <label class="form-label mb-0">Molecular tests result received date</label>
                            <input class="form-control" type="number" name="MDROScreening"
                                placeholder="Enter Molecular tests result received date">


                        </div>

 <div class="d-flex flex-column align-items-center">
                            <a href="{{ url('patient/continueform') }}" class="btn btn-danger rounded-pill px-4" type="submit">
                                Update
    </a>
                        </div>
                     
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
   

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





@endsection
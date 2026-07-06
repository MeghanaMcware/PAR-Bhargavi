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

                <div class="row">

                    <div class="mb-3 col-lg-4 col-12">
                        <label class="form-label mb-0">Hospital code</label>
                        <input class="form-control" type="text" name="Date_admission" placeholder="Enter Hospital code">
                        <div class="invalid-feedback">
                            Please enter Hospital code
                        </div>
                    </div>
                    <div class="mb-3 col-lg-4 col-12">
                        <label class="form-label mb-0">UHID/Rgen No.</label>
                        <input class="form-control" type="text" name="Date_admission" placeholder="Enter UHID/Rgen No.">
                        <div class="invalid-feedback">
                            Please enter UHID/Rgen No.
                        </div>
                    </div>
                    <div class="mb-3 col-lg-4 col-12">
                        <label class="form-label mb-0">Date of Admission</label>
                        <input class="form-control" type="date" name="Date_admission" placeholder="dd-mm-yyyy">
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
                        <input class="form-control" type="text" name="Diagnosis" placeholder="Enter diagnosis">

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
                                    <label class="form-label mb-0">Previously ill requiring admission last 3
                                        months?</label>
                                    <input class="form-control" type="text" name="comorbidity"
                                        placeholder="Enter previously ill requiring admission last 3 months?">

                                    <div class="invalid-feedback">
                                        Please enter previously ill requiring admission last 3 months?
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-4 col-12">
                                    <label class="form-label mb-0">Previously received any antibiotic last 3
                                        months?</label>
                                    <input class="form-control" type="text" name="comorbidity"
                                        placeholder="Enter previously received any antibiotic last 3 months?">

                                    <div class="invalid-feedback">
                                        Please enter Previously received any antibiotic last 3 months?
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-4 col-12">
                                    <label class="form-label mb-0">Initital probable sepsis diagnosis mentioned in
                                        file</label>
                                    <input class="form-control" type="text" name="comorbidity"
                                        placeholder="Enter initital probable sepsis diagnosis mentioned in file">

                                    <div class="invalid-feedback">
                                        Please enter initital probable sepsis diagnosis mentioned in file
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-4 col-12">
                                    <label class="form-label mb-0">Direct admission here or referred here?</label>
                                    <input class="form-control" type="text" name="comorbidity"
                                        placeholder="Enter direct admission here or referred here?">

                                    <div class="invalid-feedback">
                                        Please enter direct admission here or referred here?
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <button class="btn btn-danger rounded-pill px-4" type="submit">
                                        Submit
                                    </button>
                                </div>
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
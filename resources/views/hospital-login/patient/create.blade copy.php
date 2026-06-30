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
    </style>
@endsection

@section('content')



    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <!-- BUTTONS -->
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <button class="btn btn-primary tab-btn" onclick="openForm('lab')">
                            <i class="fa-solid fa-flask me-2"></i>
                            SERIAL LAB
                        </button>
                        <button class="btn btn-success tab-btn" onclick="openForm('micro')">
                            <i class="fa-solid fa-microchip me-2"></i>
                            MIC MICRO
                        </button>
                       
                      
                    </div>
                    <div id="lab" class="form-card active">
                        <div class="inner-card">
                          <h4 class="text-primary mb-4 text-center">
                                <b>SERIAL LAB </b>
                            </h4>
                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                                <div class="d-flex row m-0">
                                    <div class="mb-3 col-lg-6 col-12">
                                        <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                            Patient ID
                                        </label>
                                        <input class="form-control" type="text" name="patient_id"
                                            placeholder="Enter Patient ID">

                                        <div class="invalid-feedback">
                                            Please enter your patient id
                                        </div>
                                    </div>

                                    <div class="mb-3 col-lg-6 col-12">
                                        <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                            class="form-label">
                                            WBC TC
                                        </label>

                                        <input class="form-control" id="f1-last-name" type="text" name="wbc_tc"
                                            placeholder="Enter WBC TC">

                                        <div class="invalid-feedback">
                                            Please enter WBC TC
                                        </div>
                                    </div>
                                    <div class="mb-3 col-lg-6 col-12">
                                        <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                            class="form-label">
                                            Hospital Name
                                        </label>

                                        <input class="form-control" id="f1-last-name" type="text" name="hospital_name"
                                            placeholder="Enter Hospital Name">

                                        <div class="invalid-feedback">
                                            Please enter Hospital Name
                                        </div>
                                    </div>
                                </div>

                                <div>
                                here show what we fill top form in table multiple time fill the form 
                            </div>
                                <div class="d-flex flex-column align-items-center">
                                    <button class="btn btn-primary rounded-pill px-4 text-center">
                                        Submit
                                    </button>
                                </div>
                            </form>

                              

                        </div>

                    </div>
                    <!-- MICRO FORM -->
                    <div id="micro" class="form-card">
                        <div class="inner-card">
                            <h4 class="text-success mb-4 text-center">
                                <b>MIC MICRO FORM</b>
                            </h4>
                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                                <div class="d-flex row m-0">
                                    <!-- UHID -->
                                    <div class="mb-3 col-lg-6 col-12">
                                        <label class="form-label mb-0">UHID </label>
                                        <input class="form-control" type="text" name="uhid" placeholder="Enter UHID">
                                        <div class="invalid-feedback">Please enter UHID</div>
                                    </div>
                                    <!-- Specimen Type -->
                                    <div class="mb-3 col-lg-6 col-12">
                                        <label class="form-label mb-0">Specimen Type </label>
                                        <input class="form-control" type="text" name="specimen_type"
                                            placeholder="Enter Specimen Type">
                                        <div class="invalid-feedback">Please enter Specimen Type</div>
                                    </div>
                                </div>

                             <div>
                                here show what we fill top form in table multiple time fill the form 
                            </div>
                                <div class="d-flex flex-column align-items-center">
                                    <button class="btn btn-success rounded-pill px-4">
                                        Submit
                                    </button>
                                </div>
                            </form>

                            

                        </div>
                    </div>
                 

                  
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        // Change Forms
        function openForm(id) {
            document.querySelectorAll('.form-card')
                .forEach(form => {

                    form.classList.remove('active');

                });
            document.getElementById(id)
                .classList.add('active');
        }
        // Validation + SweetAlert

        function submitForm(event) {
            event.preventDefault();
            let form = event.target;
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            Swal.fire({

                icon: 'success',

                title: 'Submitted Successfully',

                text: 'Your details saved successfully',

                showConfirmButton: false,

                timer: 2000

            });
            form.reset();
            form.classList.remove('was-validated');
        }
    </script>

@endsection
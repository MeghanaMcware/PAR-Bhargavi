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

                        <div class="mb-3 col-lg-6 col-12">
                            <label class="form-label mb-0">Hospital code </label>
                            <input class="form-control" type="text" name="hospital_code" placeholder="Enter Hospital code">
                            <div class="invalid-feedback">Please enter Hospital code</div>
                        </div>

                        <div class="mb-3 col-lg-6 col-12">
                            <label class="form-label mb-0">UHID/Pregn No. </label>
                            <input class="form-control" type="text" name="uhid_pregn_no" placeholder="Enter UHID/Pregn No.">
                            <div class="invalid-feedback">Please enter UHID/Pregn No.</div>
                        </div>

                        


                        <div class="d-flex flex-column align-items-center">
                            <button class="btn btn-danger rounded-pill px-4" type="submit">
                                Submit
                            </button>
                        </div>

                </form>
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
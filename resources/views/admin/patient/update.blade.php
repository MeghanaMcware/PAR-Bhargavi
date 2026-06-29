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
                            <input class="form-control" type="number" name="MDROScreening" placeholder="dd-mm-yyyy">


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


                        <div class="card pt-3">

                            <div class="card-body p-0">

                                <div class="">

                                    <!-- BUTTONS -->

                                    <div class="d-flex justify-content-center gap-3 flex-wrap">



                                        <button class="btn btn-primary tab-btn" onclick="openForm('lab')">

                                            <i class="fa-solid fa-flask me-2"></i>
                                           Day 1 Hemat & Biochem lab values

                                        </button>




                                        <button class="btn btn-success tab-btn" onclick="openForm('micro')">

                                            <i class="fa-solid fa-microchip me-2"></i>
                                           Antibiotic sensitivity

                                        </button>




                                        <button class="btn btn-danger tab-btn" onclick="openForm('ramaiah')">

                                            <i class="fa-solid fa-building me-2"></i>
                                            Day 3 hemat & Biochem lab values

                                        </button>
                                      



                                    </div>








                                    <!-- LAB FORM -->


                                    <div id="lab" class="form-card active">


                                        <div class="inner-card">


                                            <h4 class="text-primary mb-4 text-center">
                                                <b>Day 1 Hemat & Biochem lab values </b>
                                            </h4>



                                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">


                                                <div class="d-flex row m-0">
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for=" mb-0" style="margin-bottom: 0px !important;"
                                                            class="form-label">
                                                           Blood cultuture result
                                                        </label>

                                                        <input class="form-control" type="text" name="patient_id"
                                                            placeholder="Enter Blood cultuture result">

                                                        <div class="invalid-feedback">
                                                            Please enter your Blood cultuture result
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for="f1-last-name mb-0"
                                                            style="margin-bottom: 0px !important;" class="form-label">
                                                          Blood culture flagged positive date
                                                        </label>

                                                        <input class="form-control" id="f1-last-name" type="date"
                                                            name="wbc_tc" placeholder="dd-mm-yyyy">

                                                        <div class="invalid-feedback">
                                                            Please enter  Blood culture flagged positive date
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for="f1-last-name mb-0"
                                                            style="margin-bottom: 0px !important;" class="form-label">
                                                            Blood culture flagged positive time
                                                        </label>

                                                        <input class="form-control" id="f1-last-name" type="time"
                                                            name="hospital_name" placeholder="">

                                                        <div class="invalid-feedback">
                                                            Please enter Blood culture flagged positive time
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for="f1-last-name mb-0"
                                                            style="margin-bottom: 0px !important;" class="form-label">
                                                            Antibiotic Changed to after blood culture report

                                                        </label>

                                                        <input class="form-control" id="f1-last-name" type="text"
                                                            name="date_of_admission" placeholder="Enter Antibiotic Changed to after blood culture report">

                                                        <div class="invalid-feedback">
                                                            Please enter Antibiotic Changed to after blood culture report
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for="f1-last-name mb-0"
                                                            style="margin-bottom: 0px !important;" class="form-label">
                                                           Rapid PCRs on blood culture results

                                                        </label>

                                                        <input class="form-control" id="f1-last-name" type="time"
                                                            name="time_of_admission" placeholder="Enter Rapid PCRs on blood culture results">

                                                        <div class="invalid-feedback">
                                                            Please enter Rapid PCRs on blood culture results
                                                        </div>
                                                    </div>
                                                   

                                                    <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                        <label class="form-label mb-0">Antibiotics change after rapid PCR </label>
                                                        <input type="text" class="form-control" name="nlr"
                                                            placeholder="Enter Antibiotics change after rapid PCR">
                                                        <div class="invalid-feedback">Please enter Antibiotics change after rapid PCR</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                        <label class="form-label mb-0">other Culture growth reported on </label>
                                                        <input type="text" class="form-control" name="platelets"
                                                            placeholder="Enter other Culture growth reported on">
                                                        <div class="invalid-feedback">Please enter other Culture growth reported on</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                        <label class="form-label mb-0">Sample from which culture growth reported </label>
                                                        <input type="text" class="form-control" name="hb"
                                                            placeholder="Enter Sample from which culture growth reported">
                                                        <div class="invalid-feedback">Please enter Sample from which culture growth reported</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                        <label class="form-label mb-0">ESBL/CRE/CRAB/MRSA/VRE </label>
                                                        <input type="text" class="form-control" name="pct"
                                                            placeholder="Enter ESBL/CRE/CRAB/MRSA/VRE">
                                                        <div class="invalid-feedback">Please enter ESBL/CRE/CRAB/MRSA/VRE</div>
                                                    </div>

                                                   


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
                                                <b>Antibiotic sensitivity</b>
                                            </h4>
                                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                                                <div class="d-flex row m-0">

                                                    <!-- UHID -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">MDRO screening </label>
                                                        <input class="form-control" type="text" name="uhid"
                                                            placeholder="Enter MDRO screening">
                                                        <div class="invalid-feedback">Please enter MDRO screening</div>
                                                    </div>

                                                    <!-- Specimen Type -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">First USG abdomen done on </label>
                                                        <input class="form-control" type="text" name="specimen_type"
                                                            placeholder="Enter First USG abdomen done on">
                                                        <div class="invalid-feedback">Please enter First USG abdomen done on</div>
                                                    </div>

                                                    <!-- Testing Date -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">First Chest-X-ray done on </label>
                                                        <input class="form-control" type="date" name="testing_date" placeholder="Enter First Chest-X-ray done on">
                                                        <div class="invalid-feedback">Please First Chest-X-ray done on</div>
                                                    </div>

                                                    <!-- Organism Name -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Chest X-ray findings</label>
                                                        <input class="form-control" type="text" name="organism_name"
                                                            placeholder="Enter Chest X-ray findings">
                                                        <div class="invalid-feedback">Please enter Chest X-ray findings</div>
                                                    </div>

                                                    <!-- AMPICILLIN MIC -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">PET/CT done on </label>
                                                        <input class="form-control" type="text" name="ampicillin_mic"
                                                            placeholder="Enter PET/CT done on">
                                                        <div class="invalid-feedback">Please enter PET/CT done on</div>
                                                    </div>

                                                    <!-- AMPICILLIN Interpretation -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">PET/CT findings</label>
                                                        <input class="form-control" type="text"
                                                            name="ampicillin_interpretation"
                                                            placeholder="Enter PET/CT findings">
                                                        <div class="invalid-feedback">Please enter PET/CT findings</div>
                                                    </div>

                                                    <!-- AMOX CLAVULANIC ACID -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Follow Up CT Scan done on</label>
                                                        <input class="form-control" type="text" name="amox_clavulanic_acid"
                                                            placeholder="Enter Follow Up CT Scan done on">
                                                        <div class="invalid-feedback">Please enter Follow Up CT Scan done on
                                                        </div>
                                                    </div>

                                                    <!-- AMOX CLAVULANIC ACID Interpretation -->
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Follow Up CT Scan Findings
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="amox_clavulanic_acid_interpretation"
                                                            placeholder="Enter Follow Up CT Scan Findings">
                                                        <div class="invalid-feedback">Please enter Follow Up CT Scan Findings</div>
                                                    </div>

                                                   
                                                </div>
                                                <div class="d-flex flex-column align-items-center">
                                                    <button class="btn btn-success rounded-pill px-4">
                                                        Submit
                                                    </button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                    <!-- RAMAIAH FORM -->
                                    <div id="ramaiah" class="form-card">
                                        <div class="inner-card">
                                            <h4 class="text-danger mb-4 text-center">
                                                <b>Day 3 hemat & Biochem lab values</b>
                                            </h4>
                                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                                                <div class="row">

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Hospital code </label>
                                                        <input class="form-control" type="text" name="hospital_code"
                                                            placeholder="Enter Hospital code">
                                                        <div class="invalid-feedback">Please enter Hospital code</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">UHID/Pregn No. </label>
                                                        <input class="form-control" type="text" name="uhid_pregn_no"
                                                            placeholder="Enter UHID/Pregn No.">
                                                        <div class="invalid-feedback">Please enter UHID/Pregn No.</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Date of admission </label>
                                                        <input class="form-control" type="text" name="date_of_admission"
                                                            placeholder="Enter Date of admission">
                                                        <div class="invalid-feedback">Please enter Date of admission</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Time of presentation </label>
                                                        <input class="form-control" type="text" name="time_of_presentation"
                                                            placeholder="Enter Time of presentation">
                                                        <div class="invalid-feedback">Please enter Time of presentation
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Age </label>
                                                        <input class="form-control" type="text" name="age"
                                                            placeholder="Enter Age">
                                                        <div class="invalid-feedback">Please enter Age</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Sex </label>
                                                        <input class="form-control" type="text" name="sex"
                                                            placeholder="Enter Sex">
                                                        <div class="invalid-feedback">Please enter Sex</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Chief complaints </label>
                                                        <input class="form-control" type="text" name="chief_complaints"
                                                            placeholder="Enter Chief complaints">
                                                        <div class="invalid-feedback">Please enter Chief complaints</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Symptom duration </label>
                                                        <input class="form-control" type="text" name="symptom_duration"
                                                            placeholder="Enter Symptom duration">
                                                        <div class="invalid-feedback">Please enter Symptom duration</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Comorbidities (CC INDEX) </label>
                                                        <input class="form-control" type="text"
                                                            name="comorbidities__cc_index"
                                                            placeholder="Enter Comorbidities (CC INDEX)">
                                                        <div class="invalid-feedback">Please enter Comorbidities (CC INDEX)
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Any comorbidity (<5 years,>5 years)
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="any_comorbidity___5_years___5_years"
                                                            placeholder="Enter Any comorbidity (<5 years, >5 years)">
                                                        <div class="invalid-feedback">Please enter Any comorbidity (<5
                                                                years,>5 years)</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Previously ill requiring admission
                                                            last 3 months
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="previously_ill_requiring_admission_last_3_months"
                                                            placeholder="Enter Previously ill requiring admission last 3 months">
                                                        <div class="invalid-feedback">Please enter Previously ill requiring
                                                            admission last 3
                                                            months
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Previously received any antibiotic
                                                            last 3 months
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="previously_received_any_antibiotic_last_3_months"
                                                            placeholder="Enter Previously received any antibiotic last 3 months">
                                                        <div class="invalid-feedback">Please enter Previously received any
                                                            antibiotic last 3
                                                            months
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Initial probable sepsis diagnosis
                                                            mentioned in file
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="initial_probable_sepsis_diagnosis_mentioned_in_file"
                                                            placeholder="Enter Initial probable sepsis diagnosis mentioned in file">
                                                        <div class="invalid-feedback">Please enter Initial probable sepsis
                                                            diagnosis
                                                            mentioned in
                                                            file</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Direct admission here or referred
                                                            here? </label>
                                                        <input class="form-control" type="text"
                                                            name="direct_admission_here_or_referred_here"
                                                            placeholder="Enter Direct admission here or referred here?">
                                                        <div class="invalid-feedback">Please enter Direct admission here or
                                                            referred here?
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Date & Time of meeting SIRS criteria
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="date___time_of_meeting_sirs_criteria"
                                                            placeholder="Enter Date & Time of meeting SIRS criteria">
                                                        <div class="invalid-feedback">Please enter Date & Time of meeting
                                                            SIRS criteria
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">SOFA score at admission </label>
                                                        <input class="form-control" type="text"
                                                            name="sofa_score_at_admission"
                                                            placeholder="Enter SOFA score at admission">
                                                        <div class="invalid-feedback">Please enter SOFA score at admission
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">MDRO Screening @admission </label>
                                                        <input class="form-control" type="text"
                                                            name="mdro_screening__admission"
                                                            placeholder="Enter MDRO Screening @admission">
                                                        <div class="invalid-feedback">Please enter MDRO Screening @admission
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Organ dysfunction? </label>
                                                        <input class="form-control" type="text" name="organ_dysfunction"
                                                            placeholder="Enter Organ dysfunction?">
                                                        <div class="invalid-feedback">Please enter Organ dysfunction?</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label
                                                            class="form-label mb-0">Renal/Metabolic/cardiac/haematology/respiratory
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="renal_metabolic_cardiac_haematology_respiratory"
                                                            placeholder="Enter Renal/Metabolic/cardiac/haematology/respiratory">
                                                        <div class="invalid-feedback">Please enter
                                                            Renal/Metabolic/cardiac/haematology/respiratory
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">1st Lactate Value ordered date
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="1st_lactate_value_ordered_date"
                                                            placeholder="Enter 1st Lactate Value ordered date">
                                                        <div class="invalid-feedback">Please enter 1st Lactate Value ordered
                                                            date</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">First Lactate Value ordered time
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="first_lactate_value_ordered_time"
                                                            placeholder="Enter First Lactate Value ordered time">
                                                        <div class="invalid-feedback">Please enter First Lactate Value
                                                            ordered time</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Blood cultures sent date </label>
                                                        <input class="form-control" type="text"
                                                            name="blood_cultures_sent_date"
                                                            placeholder="Enter Blood cultures sent date">
                                                        <div class="invalid-feedback">Please enter Blood cultures sent date
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Blood cultures sent time </label>
                                                        <input class="form-control" type="text"
                                                            name="blood_cultures_sent_time"
                                                            placeholder="Enter Blood cultures sent time">
                                                        <div class="invalid-feedback">Please enter Blood cultures sent time
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Name other samples sent for cultures
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="name_other_samples_sent_for_cultures"
                                                            placeholder="Enter Name other samples sent for cultures">
                                                        <div class="invalid-feedback">Please enter Name other samples sent
                                                            for cultures
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Other Culture sent date </label>
                                                        <input class="form-control" type="text"
                                                            name="other_culture_sent_date"
                                                            placeholder="Enter Other Culture sent date">
                                                        <div class="invalid-feedback">Please enter Other Culture sent date
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Other Culture sent time </label>
                                                        <input class="form-control" type="text"
                                                            name="other_culture_sent_time"
                                                            placeholder="Enter Other Culture sent time">
                                                        <div class="invalid-feedback">Please enter Other Culture sent time
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">First dose antibiotic administered
                                                            Date </label>
                                                        <input class="form-control" type="text"
                                                            name="first_dose_antibiotic_administered_date"
                                                            placeholder="Enter First dose antibiotic administered Date">
                                                        <div class="invalid-feedback">Please enter First dose antibiotic
                                                            administered Date
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">First dose antibiotic administered
                                                            time </label>
                                                        <input class="form-control" type="text"
                                                            name="first_dose_antibiotic_administered_time"
                                                            placeholder="Enter First dose antibiotic administered time">
                                                        <div class="invalid-feedback">Please enter First dose antibiotic
                                                            administered time
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Name of emperical antibiotic </label>
                                                        <input class="form-control" type="text"
                                                            name="name_of_emperical_antibiotic"
                                                            placeholder="Enter Name of emperical antibiotic">
                                                        <div class="invalid-feedback">Please enter Name of emperical
                                                            antibiotic</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Initial fluid administered </label>
                                                        <input class="form-control" type="text"
                                                            name="initial_fluid_administered"
                                                            placeholder="Enter Initial fluid administered">
                                                        <div class="invalid-feedback">Please enter Initial fluid
                                                            administered</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Volume fluid administered </label>
                                                        <input class="form-control" type="text"
                                                            name="volume_fluid_administered"
                                                            placeholder="Enter Volume fluid administered">
                                                        <div class="invalid-feedback">Please enter Volume fluid administered
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Patient response post infusion
                                                        </label>
                                                        <input class="form-control" type="text"
                                                            name="patient_response_post_infusion"
                                                            placeholder="Enter Patient response post infusion">
                                                        <div class="invalid-feedback">Please enter Patient response post
                                                            infusion</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Repeat Lactate after repeated
                                                            infusion(if) </label>
                                                        <input class="form-control" type="text"
                                                            name="repeat_lactate_after_repeated_infusion_if"
                                                            placeholder="Enter Repeat Lactate after repeated infusion(if)">
                                                        <div class="invalid-feedback">Please enter Repeat Lactate after
                                                            repeated
                                                            infusion(if)</div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">No. of organs affected(after lab
                                                            reports) </label>
                                                        <input class="form-control" type="text"
                                                            name="no__of_organs_affected_after_lab_reports"
                                                            placeholder="Enter No. of organs affected(after lab reports)">
                                                        <div class="invalid-feedback">Please enter No. of organs
                                                            affected(after lab reports)
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label class="form-label mb-0">Any surgery(<28 Days) </label>
                                                                <input class="form-control" type="text"
                                                                    name="any_surgery__28_days"
                                                                    placeholder="Enter Any surgery(<28 Days)">
                                                                <div class="invalid-feedback">Please enter Any surgery(<28
                                                                        Days)</div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Molecular tests ordered
                                                                        date </label>
                                                                    <input class="form-control" type="text"
                                                                        name="molecular_tests_ordered_date"
                                                                        placeholder="Enter Molecular tests ordered date">
                                                                    <div class="invalid-feedback">Please enter Molecular
                                                                        tests ordered date
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Which molecular test
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="which_molecular_test"
                                                                        placeholder="Enter Which molecular test">
                                                                    <div class="invalid-feedback">Please enter Which
                                                                        molecular test</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Molecular tests result
                                                                        received date
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="molecular_tests_result_received_date"
                                                                        placeholder="Enter Molecular tests result received date">
                                                                    <div class="invalid-feedback">Please enter Molecular
                                                                        tests result
                                                                        received date
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Day 1 Hemat & Biochem lab
                                                                        values (sheet
                                                                        3)
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="day_1_hemat___biochem_lab_values__sheet_3"
                                                                        placeholder="Enter Day 1 Hemat & Biochem lab values (sheet 3)">
                                                                    <div class="invalid-feedback">Please enter Day 1 Hemat &
                                                                        Biochem lab
                                                                        values
                                                                        (sheet 3)
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Blood culture result
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="blood_culture_result"
                                                                        placeholder="Enter Blood culture result">
                                                                    <div class="invalid-feedback">Please enter Blood culture
                                                                        result</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Blood culture flagged
                                                                        positive date
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="blood_culture_flagged_positive_date"
                                                                        placeholder="Enter Blood culture flagged positive date">
                                                                    <div class="invalid-feedback">Please enter Blood culture
                                                                        flagged
                                                                        positive date
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Blood culture flagged
                                                                        positive time
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="blood_culture_flagged_positive_time"
                                                                        placeholder="Enter Blood culture flagged positive time">
                                                                    <div class="invalid-feedback">Please enter Blood culture
                                                                        flagged
                                                                        positive time
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Blood culture positive
                                                                        communicated at
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="blood_culture_positive_communicated_at"
                                                                        placeholder="Enter Blood culture positive communicated at">
                                                                    <div class="invalid-feedback">Please enter Blood culture
                                                                        positive
                                                                        communicated
                                                                        at</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Rapid PCRs on blood
                                                                        culture results
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="rapid_pcrs_on_blood_culture_results"
                                                                        placeholder="Enter Rapid PCRs on blood culture results">
                                                                    <div class="invalid-feedback">Please enter Rapid PCRs on
                                                                        blood culture
                                                                        results
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Antibiotics change after
                                                                        rapid PCR
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="antibiotics_change_after_rapid_pcr"
                                                                        placeholder="Enter Antibiotics change after rapid PCR">
                                                                    <div class="invalid-feedback">Please enter Antibiotics
                                                                        change after
                                                                        rapid PCR
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Other Culture growth
                                                                        reported on </label>
                                                                    <input class="form-control" type="text"
                                                                        name="other_culture_growth_reported_on"
                                                                        placeholder="Enter Other Culture growth reported on">
                                                                    <div class="invalid-feedback">Please enter Other Culture
                                                                        growth reported
                                                                        on
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Sample from which culture
                                                                        growth reported
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="sample_from_which_culture_growth_reported"
                                                                        placeholder="Enter Sample from which culture growth reported">
                                                                    <div class="invalid-feedback">Please enter Sample from
                                                                        which culture
                                                                        growth
                                                                        reported
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">ESBL/CRE/CRAB/MRSA/VRE
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="esbl_cre_crab_mrsa_vre"
                                                                        placeholder="Enter ESBL/CRE/CRAB/MRSA/VRE">
                                                                    <div class="invalid-feedback">Please enter
                                                                        ESBL/CRE/CRAB/MRSA/VRE</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Antibiotic sensitivity
                                                                        Sheet entry 2
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="antibiotic_sensitivity_sheet_entry_2"
                                                                        placeholder="Enter Antibiotic sensitivity Sheet entry 2">
                                                                    <div class="invalid-feedback">Please enter Antibiotic
                                                                        sensitivity Sheet
                                                                        entry 2
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">MDRO screening @admission
                                                                        result </label>
                                                                    <input class="form-control" type="text"
                                                                        name="mdro_screening__admission_result"
                                                                        placeholder="Enter MDRO screening @admission result">
                                                                    <div class="invalid-feedback">Please enter MDRO
                                                                        screening @admission
                                                                        result
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">First USG abdomen done on
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="first_usg_abdomen_done_on"
                                                                        placeholder="Enter First USG abdomen done on">
                                                                    <div class="invalid-feedback">Please enter First USG
                                                                        abdomen done on
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">USG-abdomen findings
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="usg_abdomen_findings"
                                                                        placeholder="Enter USG-abdomen findings">
                                                                    <div class="invalid-feedback">Please enter USG-abdomen
                                                                        findings</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">First Chest-X-ray done on
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="first_chest_x_ray_done_on"
                                                                        placeholder="Enter First Chest-X-ray done on">
                                                                    <div class="invalid-feedback">Please enter First
                                                                        Chest-X-ray done on
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Chest X-ray findings
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="chest_x_ray_findings"
                                                                        placeholder="Enter Chest X-ray findings">
                                                                    <div class="invalid-feedback">Please enter Chest X-ray
                                                                        findings</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">PET/CT done on </label>
                                                                    <input class="form-control" type="text"
                                                                        name="pet_ct_done_on"
                                                                        placeholder="Enter PET/CT done on">
                                                                    <div class="invalid-feedback">Please enter PET/CT done
                                                                        on</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">PET/CT findings </label>
                                                                    <input class="form-control" type="text"
                                                                        name="pet_ct_findings"
                                                                        placeholder="Enter PET/CT findings">
                                                                    <div class="invalid-feedback">Please enter PET/CT
                                                                        findings</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Day 3 hemat & Biochem lab
                                                                        values (sheet
                                                                        3)
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="day_3_hemat___biochem_lab_values__sheet_3"
                                                                        placeholder="Enter Day 3 hemat & Biochem lab values (sheet 3)">
                                                                    <div class="invalid-feedback">Please enter Day 3 hemat &
                                                                        Biochem lab
                                                                        values
                                                                        (sheet 3)
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Day 5 hemat & Biochem lab
                                                                        values (sheet
                                                                        3)
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="day_5_hemat___biochem_lab_values__sheet_3"
                                                                        placeholder="Enter Day 5 hemat & Biochem lab values (sheet 3)">
                                                                    <div class="invalid-feedback">Please enter Day 5 hemat &
                                                                        Biochem lab
                                                                        values
                                                                        (sheet 3)
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Repeat date/s of chest
                                                                        ray </label>
                                                                    <input class="form-control" type="text"
                                                                        name="repeat_date_s_of_chest_ray"
                                                                        placeholder="Enter Repeat date/s of chest ray">
                                                                    <div class="invalid-feedback">Please enter Repeat date/s
                                                                        of chest ray
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Findings of X ray
                                                                        worsening/better/new
                                                                        changes
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="findings_of_x_ray_worsening_better_new_changes"
                                                                        placeholder="Enter Findings of X ray worsening/better/new changes">
                                                                    <div class="invalid-feedback">Please enter Findings of X
                                                                        ray
                                                                        worsening/better/new
                                                                        changes</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Pleural Tapping(if done)
                                                                        date </label>
                                                                    <input class="form-control" type="text"
                                                                        name="pleural_tapping_if_done__date"
                                                                        placeholder="Enter Pleural Tapping(if done) date">
                                                                    <div class="invalid-feedback">Please enter Pleural
                                                                        Tapping(if done) date
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Pleural fluid culture
                                                                        results </label>
                                                                    <input class="form-control" type="text"
                                                                        name="pleural_fluid_culture_results"
                                                                        placeholder="Enter Pleural fluid culture results">
                                                                    <div class="invalid-feedback">Please enter Pleural fluid
                                                                        culture results
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Day of change of
                                                                        antibiotics </label>
                                                                    <input class="form-control" type="text"
                                                                        name="day_of_change_of_antibiotics"
                                                                        placeholder="Enter Day of change of antibiotics">
                                                                    <div class="invalid-feedback">Please enter Day of change
                                                                        of antibiotics
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Antibiotics changed to
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="antibiotics_changed_to"
                                                                        placeholder="Enter Antibiotics changed to">
                                                                    <div class="invalid-feedback">Please enter Antibiotics
                                                                        changed to</div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Days of emperical
                                                                        antibiotic therapy
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="days_of_emperical_antibiotic_therapy"
                                                                        placeholder="Enter Days of emperical antibiotic therapy">
                                                                    <div class="invalid-feedback">Please enter Days of
                                                                        emperical antibiotic
                                                                        therapy
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Days of definitive
                                                                        antibiotic therapy
                                                                    </label>
                                                                    <input class="form-control" type="text"
                                                                        name="days_of_definitive_antibiotic_therapy"
                                                                        placeholder="Enter Days of definitive antibiotic therapy">
                                                                    <div class="invalid-feedback">Please enter Days of
                                                                        definitive antibiotic
                                                                        therapy
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Patient outcome at 7th
                                                                        day </label>
                                                                    <input class="form-control" type="text"
                                                                        name="patient_outcome_at_7th_day"
                                                                        placeholder="Enter Patient outcome at 7th day">
                                                                    <div class="invalid-feedback">Please enter Patient
                                                                        outcome at 7th day
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Patient outcome at 14th
                                                                        day </label>
                                                                    <input class="form-control" type="text"
                                                                        name="patient_outcome_at_14th_day"
                                                                        placeholder="Enter Patient outcome at 14th day">
                                                                    <div class="invalid-feedback">Please enter Patient
                                                                        outcome at 14th day
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Patient outcome at 21st
                                                                        day </label>
                                                                    <input class="form-control" type="text"
                                                                        name="patient_outcome_at_21st_day"
                                                                        placeholder="Enter Patient outcome at 21st day">
                                                                    <div class="invalid-feedback">Please enter Patient
                                                                        outcome at 21st day
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Patient outcome at 28th
                                                                        day </label>
                                                                    <input class="form-control" type="text"
                                                                        name="patient_outcome_at_28th_day"
                                                                        placeholder="Enter Patient outcome at 28th day">
                                                                    <div class="invalid-feedback">Please enter Patient
                                                                        outcome at 28th day
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Source established?
                                                                        Where? </label>
                                                                    <input class="form-control" type="text"
                                                                        name="source_established__where"
                                                                        placeholder="Enter Source established? Where?">
                                                                    <div class="invalid-feedback">Please enter Source
                                                                        established? Where?
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Days of ICU
                                                                        hospitalization </label>
                                                                    <input class="form-control" type="text"
                                                                        name="days_of_icu_hospitalization"
                                                                        placeholder="Enter Days of ICU hospitalization">
                                                                    <div class="invalid-feedback">Please enter Days of ICU
                                                                        hospitalization
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Days of Ward
                                                                        hospitalization </label>
                                                                    <input class="form-control" type="text"
                                                                        name="days_of_ward_hospitalization"
                                                                        placeholder="Enter Days of Ward hospitalization">
                                                                    <div class="invalid-feedback">Please enter Days of Ward
                                                                        hospitalization
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label class="form-label mb-0">Final Diagnosis </label>
                                                                    <input class="form-control" type="text"
                                                                        name="final_diagnosis"
                                                                        placeholder="Enter Final Diagnosis">
                                                                    <div class="invalid-feedback">Please enter Final
                                                                        Diagnosis</div>
                                                                </div>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <button class="btn btn-danger rounded-pill px-4" type="submit">
                                                            Submit
                                                        </button>
                                                    </div>

                                            </form>
                                        </div>
                                    </div>

                                    <!-- RAMAIAH FORM -->
                                    <div id="patient" class="form-card">
                                        <div class="inner-card">
                                            <h4 class="text-danger mb-4 text-center">
                                                <b>Patient Form</b>
                                            </h4>
                                            <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                                                <div class="d-flex row m-0 align-items-end">
                                                    <div class="col-lg-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label mb-0">Hospital Name</label>
                                                            <select class="js-example-placeholder-multiple col-sm-12"
                                                                multiple="multiple">
                                                                <option value="AL">Manipal Airport Road</option>
                                                                <option value="WY">Manipal Yeshwanthpur</option>
                                                                <option value="WY">Sparsh Yeshwanthpur</option>
                                                                <option value="WY">MS Ramiah Teaching Hospital</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for=" mb-0" style="margin-bottom: 0px !important;"
                                                            class="form-label">
                                                            Patient UHID/MRD
                                                        </label>

                                                        <input class="form-control" type="text" name="patient_uhid_mrd"
                                                            placeholder="Enter Patient UHID/MRD">

                                                        <div class="invalid-feedback">
                                                            Please enter your patient uhid/mrd
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for=" mb-0" style="margin-bottom: 0px !important;"
                                                            class="form-label">
                                                            Date of admission

                                                        </label>

                                                        <input class="form-control" type="date" name="date_of_admission"
                                                            placeholder="Enter Date of admission">

                                                        <div class="invalid-feedback">
                                                            Please enter your date of admission
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for=" mb-0" style="margin-bottom: 0px !important;"
                                                            class="form-label">
                                                            Time of admisison
                                                        </label>

                                                        <input class="form-control" type="time" name="time_of_admission"
                                                            placeholder="Enter Time of admission">

                                                        <div class="invalid-feedback">
                                                            Please enter your time of admission
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label mb-0">q-SOFA SCORE</label>
                                                            <select class="js-example-placeholder-multiple col-sm-12">
                                                                <option value="AL">
                                                                    <2< /option>
                                                                <option value="WY">>2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label mb-0">NEWS score</label>
                                                            <select class="js-example-placeholder-multiple col-sm-12">
                                                                <option value="AL">
                                                                    <7< /option>
                                                                <option value="WY">>7</option>
                                                                <option value="WY">not done</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label mb-0">MEWS Score</label>
                                                            <select class="js-example-placeholder-multiple col-sm-12">
                                                                <option value="AL">0</option>
                                                                <option value="WY">1</option>
                                                                <option value="WY">2</option>
                                                                <option value="WY">3</option>
                                                                <option value="WY">4</option>
                                                                <option value="WY">5</option>
                                                                <option value="WY">not done</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-lg-6 col-12">
                                                        <label for=" mb-0" style="margin-bottom: 0px !important;"
                                                            class="form-label">
                                                            Any Comorbidity <5 years </label>

                                                                <input class="form-control" type="text"
                                                                    name="any_comorbidity_5_years"
                                                                    placeholder="Enter Any Comorbidity <5 years">

                                                                <div class="invalid-feedback">
                                                                    Please enter your any comorbidity <5 years </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Any Comorbidity >5 years
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="any_comorbidity_5_years"
                                                                        placeholder="Enter Any Comorbidity >5 years">

                                                                    <div class="invalid-feedback">
                                                                        Please enter your any comorbidity >5 years
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">Age(in
                                                                            years)</label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">18-40</option>
                                                                            <option value="WY">41-60</option>
                                                                            <option value="WY">61-80</option>
                                                                            <option value="WY">>80 yrs</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">Gender</label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">Male</option>
                                                                            <option value="WY">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        CCI Score
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            1-2
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            3-4
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            >=5
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">ICU type
                                                                        </label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">Medical</option>
                                                                            <option value="WY">Surgical</option>
                                                                            <option value="WY">Cardiac</option>
                                                                            <option value="WY">HDU</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Chief complaints

                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="chief_complaints"
                                                                        placeholder="Cough/breathlessness/cold/sputum/with or without fever etc">

                                                                    <div class="invalid-feedback">
                                                                        Please enter your chief complaints
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Immunocompromised?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Diagnoised malignancy on chemotherapy
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Diagnoised malignancy not on chemotherapy
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Post transplant
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Autoimmune disease on steroids
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            On steroids for other causes
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">Fresh
                                                                            admission/transfer from
                                                                            other hospital
                                                                        </label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">Direct fresh admission
                                                                            </option>
                                                                            <option value="WY">Transfereed from other
                                                                                hospital <5 days on treatment</option>
                                                                            <option value="WY">Transferred from other
                                                                                hospital >5 days on
                                                                                treatment</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">MDRO risk
                                                                            assessment
                                                                        </label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">Any devices present at
                                                                                admission</option>
                                                                            <option value="WY">Previous hospitalizations in
                                                                                last 3 months
                                                                            </option>
                                                                            <option value="WY">Recieved previous antibiotics
                                                                                in last 3
                                                                                months</option>
                                                                            <option value="WY">Any Previous culture reports
                                                                                grown MDRO/MRSA
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">Current Symptom
                                                                            duration
                                                                        </label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">
                                                                                <7 days</option>
                                                                            <option value="WY">8-14 days</option>
                                                                            <option value="WY">15-30 days</option>
                                                                            <option value="WY">>30 days</option>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        First S. lactate sent time (from admission)
                                                                    </label>

                                                                    <input class="form-control" type="time"
                                                                        name="first_s_lactate_sent_time"
                                                                        placeholder="First S. lactate sent time (from admission)">

                                                                    <div class="invalid-feedback">
                                                                        Please enter First S. lactate sent time (from
                                                                        admission)
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        First S. lactate sent date (from admission)
                                                                    </label>

                                                                    <input class="form-control" type="date"
                                                                        name="first_s_lactate_sent_date"
                                                                        placeholder="First S. lactate sent date (from admission)">

                                                                    <div class="invalid-feedback">
                                                                        Please enter First S. lactate sent date (from
                                                                        admission)
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        First S.lactate value
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="first_s_lactate_value"
                                                                        placeholder="First S.lactate value">

                                                                    <div class="invalid-feedback">
                                                                        Please enter First S.lactate value
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Antibiotic started time (from admission)
                                                                    </label>

                                                                    <input class="form-control" type="time"
                                                                        name="antibiotic_started_time"
                                                                        placeholder="Antibiotic started time (from admission)">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Antibiotic started time (from
                                                                        admission)
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Name of antibiotic with Dose (List all as 1, 2, 3)
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="antibiotic_with_dose" placeholder="">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Name of antibiotic with Dose (List all
                                                                        as 1, 2, 3)
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Blood cultures drawn time(from admission)
                                                                    </label>

                                                                    <input class="form-control" type="time"
                                                                        name="blood_cultures_drawn_time"
                                                                        placeholder="Blood cultures drawn time(from admission)">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Blood cultures drawn time(from
                                                                        admission)
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Crystalloid given

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Crystalloid started time
                                                                    </label>

                                                                    <input class="form-control" type="time"
                                                                        name="crystalloid_started_time"
                                                                        placeholder="Crystalloid started time">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Crystalloid started time
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Which crystalloid?

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Normal Saline
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Ringer Lactate
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            5% D5W
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Inotropes Given

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Which Inotropes is given
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="which_inotropes_given"
                                                                        placeholder="Enter Which Inotropes is given">

                                                                    <div class="invalid-feedback">
                                                                        Please enter which inotropes is given
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Inotropes given for
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="inotropes_given_for"
                                                                        placeholder="Enter Inotropes given for">

                                                                    <div class="invalid-feedback">
                                                                        Please enter inotropes given for
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Organ dysfunction

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Renal
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Cardiac
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Hematology
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Metabolic
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Liver
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            None
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Clinical Outcome on this episode

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Survived
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Expired
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Outcome Pending
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Final Sepsis diagnosis
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Clincial
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Culture proven
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Probable
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Antibiotics changed after day 3 cultures?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No, continued the same
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Total duration antibiotics
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            7 days
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            10 days
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            14 days
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Septic shock at presentation
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Vasopresser used or not?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Which Vasopressor?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Nor-adrenaline
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Epinehrine
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Dose and duration of vasopressor
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="dose_duration_vasopressor"
                                                                        placeholder="Enter Dose and duration of vasopressor">

                                                                    <div class="invalid-feedback">
                                                                        Please enter dose and duration of vasopressor
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Dialysis/renal support RRT
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        No. of times dialyzed during ICU stay
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="no_times_dialyzed"
                                                                        placeholder="Enter No. of times dialyzed during ICU stay">

                                                                    <div class="invalid-feedback">
                                                                        Please enter no of times dialyzed during ICU stay
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Lungs condition

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Mechanical ventilation
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            NIV/HFNC
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            O2
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        No of days above
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="no_days_above"
                                                                        placeholder="Enter No of days above">

                                                                    <div class="invalid-feedback">
                                                                        Please enter no of days above
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Immunotherapy given or not? If yes, write name, dose
                                                                        in others
                                                                        option

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>



                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Steroids used?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>



                                                                </div>


                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        1st Chest X-ray done date
                                                                    </label>

                                                                    <input class="form-control" type="date"
                                                                        name="first_chest_xray_done_date"
                                                                        placeholder="1st Chest X-ray done date">

                                                                    <div class="invalid-feedback">
                                                                        Please enter 1st Chest X-ray done date
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        1st Chest X-ray findings
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="first_chest_xray_findings"
                                                                        placeholder="Enter 1st Chest X-ray findings">

                                                                    <div class="invalid-feedback">
                                                                        Please enter 1st Chest X-ray findings
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        2nd chest X-ray done date
                                                                    </label>

                                                                    <input class="form-control" type="date"
                                                                        name="second_chest_xray_done_date"
                                                                        placeholder="2nd chest X-ray done date">

                                                                    <div class="invalid-feedback">
                                                                        Please enter 2nd chest X-ray done date
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Comparitative finding in 2nd from 1st chest X-ray
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Better
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            worsening
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        USG Abdomen done or not?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        USG abdomen done date
                                                                    </label>

                                                                    <input class="form-control" type="date"
                                                                        name="usg_abdomen_done_date"
                                                                        placeholder="USG abdomen done date">

                                                                    <div class="invalid-feedback">
                                                                        Please enter USG abdomen done date
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        USG abdomen findings
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="usg_abdomen_findings"
                                                                        placeholder="USG abdomen findings">

                                                                    <div class="invalid-feedback">
                                                                        Please enter USG abdomen findings
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        2nd USG abdomen done date
                                                                    </label>

                                                                    <input class="form-control" type="date"
                                                                        name="second_usg_abdomen_done_date"
                                                                        placeholder="2nd USG abdomen done date">

                                                                    <div class="invalid-feedback">
                                                                        Please enter 2nd USG abdomen done date
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Report of 2nd USG compared to 1st
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Worse
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Better
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Not commented in report
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        CT/MR which organ
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Lung
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Abdomen
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Brain
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        1st CT /MR done date and time
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="first_ct_mr_done_date_time"
                                                                        placeholder="1st CT /MR done date and time">

                                                                    <div class="invalid-feedback">
                                                                        Please enter 1st CT /MR done date and time
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        CT/MR findings
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="ct_mr_findings" placeholder="CT/MR findings">

                                                                    <div class="invalid-feedback">
                                                                        Please enter CT/MR findings
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Any other radiology tests? Date, time, result
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="any_other_radiology_tests"
                                                                        placeholder="Any other radiology tests? Date, time, result">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Any other radiology tests? Date, time,
                                                                        result
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Blood cultures sent or not till 5 days?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Blood culture at 5 days

                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Growth present
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Sterile
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Blood culture fagged positive date and time
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="blood_culture_fagged_positive_date_time"
                                                                        placeholder="Blood culture fagged positive  date and time">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Blood culture fagged positive date and
                                                                        time
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Bio Fire done for positive blood culture?
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                                <div class="mb-3 col-lg-6 col-12">
                                                                    <label for=" mb-0"
                                                                        style="margin-bottom: 0px !important;"
                                                                        class="form-label">
                                                                        Biofire report(name of pathogen, genes, reported
                                                                        date and time)
                                                                    </label>

                                                                    <input class="form-control" type="text"
                                                                        name="biofire_report"
                                                                        placeholder="Biofire report(name of pathogen, genes, reported date and time)">

                                                                    <div class="invalid-feedback">
                                                                        Please enter Biofire report(name of pathogen, genes,
                                                                        reported date and time)
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <label class="form-label d-block">
                                                                        Did antibiotics change after BioFire report(check
                                                                        date-day)
                                                                    </label>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            Yes
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="patient">
                                                                        <label class="form-check-label">
                                                                            No
                                                                        </label>
                                                                    </div>


                                                                </div>

                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">If growth on 3rd
                                                                            day, What is growing in Blood culture</label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">E.coli</option>
                                                                            <option value="WY">Klebsiella pneumoniae
                                                                            </option>
                                                                            <option value="WY">Klebsiella oxytoca</option>
                                                                            <option value="WY">Ps. aeruginosa</option>
                                                                            <option value="WY">S. aureus</option>
                                                                            <option value="WY">Enterobacter Spp</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">What Other
                                                                            cultures sent</label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">Sputum</option>
                                                                            <option value="WY">BAL</option>
                                                                            <option value="WY">Urine</option>
                                                                            <option value="WY">pleural fluid</option>
                                                                            <option value="WY">Wound swab/tissue/exudate
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label mb-0">If growth in
                                                                            other cultures, what organism?</label>
                                                                        <select
                                                                            class="js-example-placeholder-multiple col-sm-12"
                                                                            multiple="multiple">
                                                                            <option value="AL">E.coli</option>
                                                                            <option value="WY">Klebsiella pneumoniae
                                                                            </option>
                                                                            <option value="WY">Klebsiella oxytoca</option>
                                                                            <option value="WY">Proteus Spp</option>
                                                                            <option value="WY">Ps. aeruginosa</option>
                                                                            <option value="WY">S. aureus</option>
                                                                            <option value="WY">S. pneumoniae</option>
                                                                            <option value="WY">Enterobacter Spp</option>
                                                                        </select>
                                                                    </div>
                                                                </div>


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
                            </div>
                        </div>


                        <div class="d-flex flex-column align-items-center">
                            <button class="btn btn-danger rounded-pill px-4" type="submit">
                                Update
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
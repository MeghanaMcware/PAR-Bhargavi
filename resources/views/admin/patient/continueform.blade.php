@extends('admin.layout.app')

@section('title')
Patient Form
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
.table-responsive {
    overflow-x: auto;
    scrollbar-width: thin; /* Firefox */
    scrollbar-color: #888 #f1f1f1;
}

/* Chrome, Edge, Safari */
.table-responsive::-webkit-scrollbar {
    height: 5px; /* horizontal scrollbar height */
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #555;
}

.needs-validation label{
        font-size: 15px;
    font-weight: 500;
    color: black;
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

                <!-- LAB FORM -->
                <div id="lab" class="form-card active">


                    <div class="inner-card">


                        <h4 class="text-primary mb-4 text-center">
                            <b>SERIAL LAB </b>
                        </h4>



                        <form class="needs-validation" novalidate onsubmit="submitForm(event)">


                            <div class="d-flex row m-0">
                                <div class="mb-3 col-md-3 col-12">
                                    <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                        Day
                                    </label>

                                    <input class="form-control" type="text" id="day" name="day" placeholder="Enter Day">

                                    <div class="invalid-feedback">
                                        Please enter day
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label for=" mb-0" style="margin-bottom: 0px !important;" class="form-label">
                                        Lab Parameters
                                    </label>

                                    <input class="form-control" type="text" id="lab_parameters" name="lab_parameters" placeholder="Enter Lab Parameters">

                                    <div class="invalid-feedback">
                                        Please enter lab parameters
                                    </div>
                                </div>

                                <div class="mb-3 col-md-3 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        WBC TC
                                    </label>

                                    <input class="form-control" id="" type="number" name="wbc_tc" placeholder="Enter WBC TC">

                                    <div class="invalid-feedback">
                                        Please enter WBC TC
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
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
                                <div class="mb-3 col-md-3 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        NLR

                                    </label>

                                    <input class="form-control" id="" type="number" name="nlr" placeholder="Enter NLR">

                                    <div class="invalid-feedback">
                                        Please enter NLR
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
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


                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Hb </label>
                                    <input type="number" class="form-control" name="hb" placeholder="Enter Hb">
                                    <div class="invalid-feedback">Please enter Hb</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PCT </label>
                                    <input type="number" class="form-control" name="pct" placeholder="Enter PCT">
                                    <div class="invalid-feedback">Please enter PCT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">CRP </label>
                                    <input type="number" class="form-control" name="crp" placeholder="Enter CRP">
                                    <div class="invalid-feedback">Please enter CRP</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S.lactate </label>
                                    <input type="number" class="form-control" name="s_lactate" placeholder="Enter S.lactate">
                                    <div class="invalid-feedback">Please enter S.lactate</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Urea/BUN </label>
                                    <input type="number" class="form-control" name="urea_bun" placeholder="Enter Urea/BUN">
                                    <div class="invalid-feedback">Please enter Urea/BUN</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S. creatinine </label>
                                    <input type="number" class="form-control" name="s_creatinine" placeholder="Enter S. creatinine">
                                    <div class="invalid-feedback">Please enter S. creatinine</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">AST </label>
                                    <input type="number" class="form-control" name="ast" placeholder="Enter AST">
                                    <div class="invalid-feedback">Please enter AST</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">ALT </label>
                                    <input type="number" class="form-control" name="alt" placeholder="Enter ALT">
                                    <div class="invalid-feedback">Please enter ALT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S.bilurubin </label>
                                    <input type="number" class="form-control" name="s_bilurubin" placeholder="Enter S.bilurubin">
                                    <div class="invalid-feedback">Please enter S.bilurubin</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Albubin </label>
                                    <input type="number" class="form-control" name="albubin" placeholder="Enter Albubin">
                                    <div class="invalid-feedback">Please enter Albubin</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">LDH </label>
                                    <input type="number" class="form-control" name="ldh" placeholder="Enter LDH">
                                    <div class="invalid-feedback">Please enter LDH</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">IL 6/8/10 </label>
                                    <input type="number" class="form-control" name="il_6_8_10" placeholder="Enter IL 6/8/10">
                                    <div class="invalid-feedback">Please enter IL 6/8/10</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">ABG </label>
                                    <input type="number" class="form-control" name="abg" placeholder="Enter ABG">
                                    <div class="invalid-feedback">Please enter ABG</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">pH </label>
                                    <input type="number" class="form-control" name="ph" placeholder="Enter pH">
                                    <div class="invalid-feedback">Please enter pH</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PC02 </label>
                                    <input type="number" class="form-control" name="pc02" placeholder="Enter PC02">
                                    <div class="invalid-feedback">Please enter PC02</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PO2 </label>
                                    <input type="number" class="form-control" name="po2" placeholder="Enter PO2">
                                    <div class="invalid-feedback">Please enter PO2</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">HCO3 </label>
                                    <input type="number" class="form-control" name="hco3" placeholder="Enter HCO3">
                                    <div class="invalid-feedback">Please enter HCO3</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Coagulation profile </label>
                                    <input type="number" class="form-control" name="coagulation_profile"
                                        placeholder="Enter Coagulation profile">
                                    <div class="invalid-feedback">Please enter Coagulation profile</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">APTT</label>
                                    <input type="number" class="form-control" name="aptt" placeholder="Enter APTT">
                                    <div class="invalid-feedback">Please enter APTT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PT</label>
                                    <input type="number" class="form-control" name="pt" placeholder="Enter PT">
                                    <div class="invalid-feedback">Please enter PT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">INR</label>
                                    <input type="number" class="form-control" name="inr" placeholder="Enter INR">
                                    <div class="invalid-feedback">Please enter INR</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">d-Dimer</label>
                                    <input type="number" class="form-control" name="d_dimer" placeholder="Enter d-Dimer">
                                    <div class="invalid-feedback">Please enter d-Dimer</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">fibrinogen</label>
                                    <input type="number" class="form-control" name="fibrinogen" placeholder="Enter fibrinogen">
                                    <div class="invalid-feedback">Please enter fibrinogen</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Electrolytes</label>
                                    <input type="number" class="form-control" name="electrolytes" placeholder="Enter Electrolytes">
                                    <div class="invalid-feedback">Please enter Electrolytes</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Na</label>
                                    <input type="number" class="form-control" name="na" placeholder="Enter Na">
                                    <div class="invalid-feedback">Please enter Na</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">K</label>
                                    <input type="number" class="form-control" name="k" placeholder="Enter K">
                                    <div class="invalid-feedback">Please enter K</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Cl</label>
                                    <input type="number" class="form-control" name="cl" placeholder="Enter Cl">
                                    <div class="invalid-feedback">Please enter Cl</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Bicarbonates</label>
                                    <input type="number" class="form-control" name="bicarbonates" placeholder="Enter Bicarbonates">
                                    <div class="invalid-feedback">Please enter Bicarbonates</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">HbA1C</label>
                                    <input type="number" class="form-control" name="hba1c" placeholder="Enter HbA1C">
                                    <div class="invalid-feedback">Please enter HbA1C</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">SpO2</label>
                                    <input type="number" class="form-control" name="spo2" placeholder="Enter SpO2">
                                    <div class="invalid-feedback">Please enter SpO2</div>
                                </div>

                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary rounded-pill px-4 text-center">
                                    Add
                                </button>
                            </div>
                           <div class="mt-4 mb-3" id="labDataTableContainer" style="display: none;">
                                <h4 class="text-primary mb-3 text-center"><b>Added SERIAL LAB Data</b></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="labDataTable">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Day</th>
                                                <th>Lab Parameters</th>
                                                <th>WBC TC</th>
                                                <th>BANDS/Left shift</th>
                                                <th>NLR</th>
                                                <th>Platelets</th>
                                                <th>Hb</th>
                                                <th>PCT</th>
                                                <th>CRP</th>
                                                <th>S.lactate</th>
                                                <th>Urea/BUN</th>
                                                <th>S. creatinine</th>
                                                <th>AST</th>
                                                <th>ALT</th>
                                                <th>S.bilurubin</th>
                                                <th>Albubin</th>
                                                <th>LDH</th>
                                                <th>IL 6/8/10</th>
                                                <th>ABG</th>
                                                <th>pH</th>
                                                <th>PC02</th>
                                                <th>PO2</th>
                                                <th>HCO3</th>
                                                <th>Coagulation profile</th>
                                                <th>APTT</th>
                                                <th>PT</th>
                                                <th>INR</th>
                                                <th>d-Dimer</th>
                                                <th>fibrinogen</th>
                                                <th>Electrolytes</th>
                                                <th>Na</th>
                                                <th>K</th>
                                                <th>Cl</th>
                                                <th>Bicarbonates</th>
                                                <th>HbA1C</th>
                                                <th>SpO2</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="labDataBody">
                                            <!-- Data will be added here dynamically -->
                                        </tbody>
                                    </table>
                                </div>
                           </div>

                            <div class="d-flex flex-column align-items-center">
                                <button class="btn btn-primary rounded-pill px-4 text-center" id="finalSubmitBtn" style="display: none;" onclick="resetLabTable()">
                                    Final Submit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- MICRO FORM -->
                <div id="micro" class="form-card">
                    <div class="inner-card">
                        <h4 class="text-success mb-4 text-center">
                            <b>MIC MICRO</b>
                        </h4>
                        <hr>

                        <!-- ===================== PUS CULTURE (own form, not nested) ===================== -->
                        <form class="needs-validation" novalidate onsubmit="submitPusCultureForm(event)" id="pusCultureForm">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>PUS CULTURE</b></h4>
                                </div>
                                <div class="row g-3">
                                      <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Day</label><input class="form-control" name="pusday"
                                            placeholder="Enter Day">
                                    </div>  
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Specimen Type</label><select
                                            class="form-select" name="specimen_type">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">UHID(single
                                            patient)</label><input class="form-control" name="uhidsingle_patient"
                                            placeholder="Enter UHID(single patient)">
                                    </div>  
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Testing Date</label><input
                                            type="date" class="form-control" name="testing_date"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Organism Name</label><input
                                            class="form-control" name="organism_name" placeholder="Enter Organism Name">
                                    </div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">AMOX CLAVULANIC
                                            ACID</label><input class="form-control" name="amox_clavulanic_acid"
                                            placeholder="Enter AMOX CLAVULANIC ACID"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">PIPTAZ</label><input
                                            class="form-control" name="piptaz" placeholder="Enter PIPTAZ"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">PIPTAZ
                                            Interpretation</label><select class="form-select"
                                            name="piptaz_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFUROXIME</label><input
                                            class="form-control" name="cefuroxime" placeholder="Enter CEFUROXIME"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFUROXIME
                                            Interpretation</label><select class="form-select"
                                            name="cefuroxime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFURIOXIME-AXE</label><input
                                            class="form-control" name="cefurioxime_axe"
                                            placeholder="Enter CEFURIOXIME-AXE"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFTRIXONE</label><input
                                            class="form-control" name="ceftrixone" placeholder="Enter CEFTRIXONE"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEF+SULBACTUM</label><input
                                            class="form-control" name="cefplussulbactum"
                                            placeholder="Enter CEF+SULBACTUM"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFEPIME</label><input
                                            class="form-control" name="cefepime" placeholder="Enter CEFEPIME"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CEFEPIME
                                            Interpretation</label><select class="form-select"
                                            name="cefepime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">ERTAPENEM</label><input
                                            class="form-control" name="ertapenem" placeholder="Enter ERTAPENEM"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">ERTAPENEM
                                            Interpretation</label><select class="form-select"
                                            name="ertapenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">IMIPENEM</label><input
                                            class="form-control" name="imipenem" placeholder="Enter IMIPENEM"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">IMIPENEM
                                            Interpretation</label><select class="form-select"
                                            name="imipenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">MEROPENEM</label><input
                                            class="form-control" name="meropenem" placeholder="Enter MEROPENEM"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">MEROPENEM
                                            Interpretation</label><select class="form-select"
                                            name="meropenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">AMIKACIN</label><input
                                            class="form-control" name="amikacin" placeholder="Enter AMIKACIN"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">GENTAMYCIN</label><input
                                            class="form-control" name="gentamycin" placeholder="Enter GENTAMYCIN"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">CIPROFLOXACIN</label><input
                                            class="form-control" name="ciprofloxacin" placeholder="Enter CIPROFLOXACIN">
                                    </div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">TIGECYCLINE</label><input
                                            class="form-control" name="tigecycline" placeholder="Enter TIGECYCLINE">
                                    </div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">TIGECYCLINE
                                            Interpretation</label><select class="form-select"
                                            name="tigecycline_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">FOSFOMYCIN</label><input
                                            class="form-control" name="fosfomycin" placeholder="Enter FOSFOMYCIN"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">FOSFOMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="fosfomycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">COLISTIN</label><input
                                            class="form-control" name="colistin" placeholder="Enter COLISTIN"></div>
                                    <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">COLISTIN
                                            Interpretation</label><select class="form-select"
                                            name="colistin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 text-center">
                                        Add
                                    </button>
                                </div>
                                <div class="mt-4" id="pusCultureTableContainer" style="display: none;">
                                    <h4 class="text-primary mb-3 text-center"><b>Added PUS CULTURE Data</b></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="pusCultureDataTable">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Specimen Type</th>
                                                    <th>UHID</th>
                                                    <th>Testing Date</th>
                                                    <th>Organism Name</th>
                                                    <th>AMOX CLAVULANIC ACID</th>
                                                    <th>PIPTAZ</th>
                                                    <th>PIPTAZ Interpretation</th>
                                                    <th>CEFUROXIME</th>
                                                    <th>CEFUROXIME Interpretation</th>
                                                    <th>CEFURIOXIME-AXE</th>
                                                    <th>CEFTRIXONE</th>
                                                    <th>CEF+SULBACTUM</th>
                                                    <th>CEFEPIME</th>
                                                    <th>CEFEPIME Interpretation</th>
                                                    <th>ERTAPENEM</th>
                                                    <th>ERTAPENEM Interpretation</th>
                                                    <th>IMIPENEM</th>
                                                    <th>IMIPENEM Interpretation</th>
                                                    <th>MEROPENEM</th>
                                                    <th>MEROPENEM Interpretation</th>
                                                    <th>AMIKACIN</th>
                                                    <th>GENTAMYCIN</th>
                                                    <th>CIPROFLOXACIN</th>
                                                    <th>TIGECYCLINE</th>
                                                    <th>TIGECYCLINE Interpretation</th>
                                                    <th>FOSFOMYCIN</th>
                                                    <th>FOSFOMYCIN Interpretation</th>
                                                    <th>COLISTIN</th>
                                                    <th>COLISTIN Interpretation</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="pusCultureDataBody">
                                                <!-- Data will be added here dynamically -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <!-- ===================== URINE CULTURE (own form, sibling, not nested) ===================== -->
                        <form class="needs-validation" novalidate onsubmit="submitUrineCultureForm(event)" id="urineCultureForm">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>URINE CULTURE</b></h4>
                                </div>
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
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 text-center">
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
                            </div>
                        </form>

                        <hr>

                        <!-- ===================== BLOOD CULTURE (own form, sibling, not nested) ===================== -->
                        <form class="needs-validation" novalidate onsubmit="submitBloodCultureForm(event)" id="bloodCultureForm">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>BLOOD CLUTURE</b></h4>
                                </div>
                                <div class="row g-3 mb-3">
   <div class="col-md-3 col-12 mb-0"><label class="form-label pt-0 pb-0 mb-0">Day</label><input class="form-control" name="bloodday"
                                            placeholder="Enter Day">
                                    </div> 
                                    <!-- Specimen Type -->
                                    <div class=" col-md-3 col-12">
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
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFUROXIME</label>
                                        <select class="form-select" name="cefuroxime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME-AXE -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFUROXIME-AXE</label>
                                        <select class="form-select" name="cefuroxime_axe">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIAXONE -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFTRIAXONE</label>
                                        <select class="form-select" name="ceftriaxone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF-SALBACTAM -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEF-SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- IMIPENEM -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">IMIPENEM</label>
                                        <select class="form-select" name="imipenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- GENTAMYCIN -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">GENTAMYCIN</label>
                                        <select class="form-select" name="gentamycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- TIGECYCLINE -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">TIGECYCLINE</label>
                                        <select class="form-select" name="tigecycline">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class=" col-md-3 col-12 mb-3">
                                        <label class="form-label mb-0">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class=" col-md-3 col-12 mb-3">
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
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 text-center">
                                        Add
                                    </button>
                                </div>
                                <div class="mt-4" id="bloodCultureTableContainer" style="display: none;">
                                    <h4 class="text-primary mb-3 text-center"><b>Added BLOOD CULTURE Data</b></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="bloodCultureDataTable">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Specimen Type</th>
                                                    <th>UHID</th>
                                                    <th>Testing Date</th>
                                                    <th>Organism Name</th>
                                                    <th>AMOX CLAV</th>
                                                    <th>PIP-TAZ</th>
                                                    <th>CEFUROXIME</th>
                                                    <th>CEFUROXIME-AXE</th>
                                                    <th>CEFTRIAXONE</th>
                                                    <th>CEF-SALBACTAM</th>
                                                    <th>CEFEPIME</th>
                                                    <th>ERTAPENEM</th>
                                                    <th>IMIPENEM</th>
                                                    <th>AMIKACIN</th>
                                                    <th>GENTAMYCIN</th>
                                                    <th>CIPROFLOXACIN</th>
                                                    <th>TIGECYCLINE</th>
                                                    <th>FOSFOMYCIN</th>
                                                    <th>COLISTIN</th>
                                                    <th>COTRIMAXAZOLE</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bloodCultureDataBody">
                                                <!-- Data will be added here dynamically -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column align-items-center mt-3">
                                <button type="button" class="btn btn-success rounded-pill px-4" id="microFinalSubmitBtn" style="display: none;" onclick="resetMicroTable()">
                                 Final Submit
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
    document.getElementById('microFinalSubmitBtn').style.display = 'inline-block';

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
    document.getElementById('microFinalSubmitBtn').style.display = 'inline-block';

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
    document.getElementById('microFinalSubmitBtn').style.display = 'inline-block';

    Swal.fire({ icon: 'success', title: 'Added', text: 'Row added to BLOOD CULTURE table', showConfirmButton: false, timer: 1500 });

    form.reset();
    form.classList.remove('was-validated');
}

// ===================== MICRO FINAL SUBMIT (only touches the 3 micro tables) =====================
function resetMicroTable() {
    // TODO: send collected data to the server here before clearing, if needed.

    ['pusCultureDataBody', 'urineCultureDataBody', 'bloodCultureDataBody'].forEach(id => {
        const body = document.getElementById(id);
        if (body) body.innerHTML = '';
    });

    ['pusCultureTableContainer', 'urineCultureTableContainer', 'bloodCultureTableContainer'].forEach(id => {
        const container = document.getElementById(id);
        if (container) container.style.display = 'none';
    });

    document.getElementById('microFinalSubmitBtn').style.display = 'none';

    Swal.fire({
        icon: 'success',
        title: 'Submitted Successfully',
        text: 'MICRO data has been submitted and tables reset',
        showConfirmButton: false,
        timer: 2000
    });
}
</script>

@endsection

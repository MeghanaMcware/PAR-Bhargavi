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
                                        Lab Parameters
                                    </label>

                                    <input class="form-control" type="text" name="" placeholder="Enter Lab Parameters">

                                    <div class="invalid-feedback">
                                        Please enter lab parameters
                                    </div>
                                </div>

                                <div class="mb-3 col-md-3 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        WBC TC
                                    </label>

                                    <input class="form-control" id="" type="number" name="" placeholder="Enter WBC TC">

                                    <div class="invalid-feedback">
                                        Please enter WBC TC
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        BANDS/Left shift
                                    </label>

                                    <input class="form-control" id="f1-last-name" type="text" name=""
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

                                    <input class="form-control" id="" type="number" name="" placeholder="Enter NLR">

                                    <div class="invalid-feedback">
                                        Please enter NLR
                                    </div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label for="f1-last-name mb-0" style="margin-bottom: 0px !important;"
                                        class="form-label">
                                        Platelets

                                    </label>

                                    <input class="form-control" id="f1-last-name" type="number" name=""
                                        placeholder="Enter Platelets">

                                    <div class="invalid-feedback">
                                        Please enter Platelets
                                    </div>
                                </div>


                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Hb </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Hb">
                                    <div class="invalid-feedback">Please enter Hb</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PCT </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter PCT">
                                    <div class="invalid-feedback">Please enter PCT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">CRP </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter CRP">
                                    <div class="invalid-feedback">Please enter CRP</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S.lactate </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter S.lactate">
                                    <div class="invalid-feedback">Please enter S.lactate</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Urea/BUN </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Urea/BUN">
                                    <div class="invalid-feedback">Please enter Urea/BUN</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S. creatinine </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter S. creatinine">
                                    <div class="invalid-feedback">Please enter S. creatinine</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">AST </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter AST">
                                    <div class="invalid-feedback">Please enter AST</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">ALT </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter ALT">
                                    <div class="invalid-feedback">Please enter ALT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">S.bilurubin </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter S.bilurubin">
                                    <div class="invalid-feedback">Please enter S.bilurubin</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Albubin </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Albubin">
                                    <div class="invalid-feedback">Please enter Albubin</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">LDH </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter LDH">
                                    <div class="invalid-feedback">Please enter LDH</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">IL 6/8/10 </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter IL 6/8/10">
                                    <div class="invalid-feedback">Please enter IL 6/8/10</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">ABG </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter ABG">
                                    <div class="invalid-feedback">Please enter ABG</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">pH </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter pH">
                                    <div class="invalid-feedback">Please enter pH</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PC02 </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter PC02">
                                    <div class="invalid-feedback">Please enter PC02</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PO2 </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter PO2">
                                    <div class="invalid-feedback">Please enter PO2</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">HCO3 </label>
                                    <input type="number" class="form-control" name="" placeholder="Enter HCO3">
                                    <div class="invalid-feedback">Please enter HCO3</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Coagulation profile </label>
                                    <input type="number" class="form-control" name=""
                                        placeholder="Enter Coagulation profile">
                                    <div class="invalid-feedback">Please enter Coagulation profile</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">APTT</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter APTT">
                                    <div class="invalid-feedback">Please enter APTT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">PT</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter PT">
                                    <div class="invalid-feedback">Please enter PT</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">INR</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter INR">
                                    <div class="invalid-feedback">Please enter INR</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">d-Dimer</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter d-Dimer">
                                    <div class="invalid-feedback">Please enter d-Dimer</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">fibrinogen</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter fibrinogen">
                                    <div class="invalid-feedback">Please enter fibrinogen</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Electrolytes</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Electrolytes">
                                    <div class="invalid-feedback">Please enter Electrolytes</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Na</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Na">
                                    <div class="invalid-feedback">Please enter Na</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">K</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter K">
                                    <div class="invalid-feedback">Please enter K</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Cl</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Cl">
                                    <div class="invalid-feedback">Please enter Cl</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">Bicarbonates</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter Bicarbonates">
                                    <div class="invalid-feedback">Please enter Bicarbonates</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">HbA1C</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter HbA1C">
                                    <div class="invalid-feedback">Please enter HbA1C</div>
                                </div>
                                <div class="mb-3 col-md-3 col-12">
                                    <label class="form-label mb-0">SpO2</label>
                                    <input type="number" class="form-control" name="" placeholder="Enter SpO2">
                                    <div class="invalid-feedback">Please enter SpO2</div>
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
                            <b>MIC MICRO</b>
                        </h4>
                        <hr>
                        <form class="needs-validation" novalidate onsubmit="submitForm(event)">
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>PUS CULTURE</b></h4>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-3 col-12"><label class="form-label">Specimen Type</label><select
                                            class="form-select" name="piptaz_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">UHID(single
                                            patient)</label><input class="form-control" name="uhidsingle_patient"
                                            placeholder="Enter UHID(single patient)">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">Testing Date</label><input
                                            type="date" class="form-control"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">Organism Name</label><input
                                            class="form-control" name="organism_name" placeholder="Enter Organism Name">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">AMOX CLAVULANIC
                                            ACID</label><input class="form-control" name="amox_clavulanic_acid"
                                            placeholder="Enter AMOX CLAVULANIC ACID"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PIPTAZ</label><input
                                            class="form-control" name="piptaz" placeholder="Enter PIPTAZ"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PIPTAZ
                                            Interpretation</label><select class="form-select"
                                            name="piptaz_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFUROXIME</label><input
                                            class="form-control" name="cefuroxime" placeholder="Enter CEFUROXIME"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFUROXIME
                                            Interpretation</label><select class="form-select"
                                            name="cefuroxime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFURIOXIME-AXE</label><input
                                            class="form-control" name="cefurioxime_axe"
                                            placeholder="Enter CEFURIOXIME-AXE"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFTRIXONE</label><input
                                            class="form-control" name="ceftrixone" placeholder="Enter CEFTRIXONE"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEF+SULBACTUM</label><input
                                            class="form-control" name="cefplussulbactum"
                                            placeholder="Enter CEF+SULBACTUM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFEPIME</label><input
                                            class="form-control" name="cefepime" placeholder="Enter CEFEPIME"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFEPIME
                                            Interpretation</label><select class="form-select"
                                            name="cefepime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERTAPENEM</label><input
                                            class="form-control" name="ertapenem" placeholder="Enter ERTAPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERTAPENEM
                                            Interpretation</label><select class="form-select"
                                            name="ertapenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">IMIPENEM</label><input
                                            class="form-control" name="imipenem" placeholder="Enter IMIPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">IMIPENEM
                                            Interpretation</label><select class="form-select"
                                            name="imipenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">MEROPENEM</label><input
                                            class="form-control" name="meropenem" placeholder="Enter MEROPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">MEROPENEM
                                            Interpretation</label><select class="form-select"
                                            name="meropenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">AMIKACIN</label><input
                                            class="form-control" name="amikacin" placeholder="Enter AMIKACIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">GENTAMYCIN</label><input
                                            class="form-control" name="gentamycin" placeholder="Enter GENTAMYCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CIPROFLOXACIN</label><input
                                            class="form-control" name="ciprofloxacin" placeholder="Enter CIPROFLOXACIN">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">TIGECYCLINE</label><input
                                            class="form-control" name="tigecycline" placeholder="Enter TIGECYCLINE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">TIGECYCLINE
                                            Interpretation</label><select class="form-select"
                                            name="tigecycline_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FOSFOMYCIN</label><input
                                            class="form-control" name="fosfomycin" placeholder="Enter FOSFOMYCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FOSFOMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="fosfomycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COLISTIN</label><input
                                            class="form-control" name="colistin" placeholder="Enter COLISTIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COLISTIN
                                            Interpretation</label><select class="form-select"
                                            name="colistin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COTRIMAXAZOLE</label><input
                                            class="form-control" name="cotrimaxazole" placeholder="Enter COTRIMAXAZOLE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">CLINDAMYCIN</label><input
                                            class="form-control" name="clindamycin" placeholder="Enter CLINDAMYCIN">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFTRIAXONE</label><input
                                            class="form-control" name="ceftriaxone" placeholder="Enter CEFTRIAXONE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFTRIAXONE
                                            Interpretation</label><select class="form-select"
                                            name="ceftriaxone_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COLISTIN</label><input
                                            class="form-control" name="colistin" placeholder="Enter COLISTIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COLISTIN
                                            Interpretation</label><select class="form-select"
                                            name="colistin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFOTAXIME</label><input
                                            class="form-control" name="cefotaxime" placeholder="Enter CEFOTAXIME"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFOTAXIME
                                            Interpretation</label><select class="form-select"
                                            name="cefotaxime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFUROXIME</label><input
                                            class="form-control" name="cefuroxime" placeholder="Enter CEFUROXIME"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFUROXIME
                                            Interpretation</label><select class="form-select"
                                            name="cefuroxime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFTAZIDIME</label><input
                                            class="form-control" name="ceftazidime" placeholder="Enter CEFTAZIDIME">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFTAZIDIME
                                            Interpretation</label><select class="form-select"
                                            name="ceftazidime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">DAPTOMCIN</label><input
                                            class="form-control" name="daptomcin" placeholder="Enter DAPTOMCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">DAPTOMCIN
                                            Interpretation</label><select class="form-select"
                                            name="daptomcin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">DOXYCYYLIN</label><input
                                            class="form-control" name="doxycyylin" placeholder="Enter DOXYCYYLIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">DOXYCYYLIN
                                            Interpretation</label><select class="form-select"
                                            name="doxycyylin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERYTHROMYCIN</label><input
                                            class="form-control" name="erythromycin" placeholder="Enter ERYTHROMYCIN">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERYTHROMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="erythromycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERTAPENEM</label><input
                                            class="form-control" name="ertapenem" placeholder="Enter ERTAPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ERTAPENEM
                                            Interpretation</label><select class="form-select"
                                            name="ertapenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FLUCTOSINE</label><input
                                            class="form-control" name="fluctosine" placeholder="Enter FLUCTOSINE"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FLUCTOSINE
                                            Interpretation</label><select class="form-select"
                                            name="fluctosine_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFEPIME</label><input
                                            class="form-control" name="cefepime" placeholder="Enter CEFEPIME"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFEPIME
                                            Interpretation</label><select class="form-select"
                                            name="cefepime_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FLUCONAZOLE</label><input
                                            class="form-control" name="fluconazole" placeholder="Enter FLUCONAZOLE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">FLUCONAZOLE
                                            Interpretation</label><select class="form-select"
                                            name="fluconazole_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FOSFOMYCIN</label><input
                                            class="form-control" name="fosfomycin" placeholder="Enter FOSFOMYCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">FOSFOMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="fosfomycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFOXITIN</label><input
                                            class="form-control" name="cefoxitin" placeholder="Enter CEFOXITIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFOXITIN
                                            Interpretation</label><select class="form-select"
                                            name="cefoxitin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NITROFURANTOIN</label><input
                                            class="form-control" name="nitrofurantoin"
                                            placeholder="Enter NITROFURANTOIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NITROFURANTOIN
                                            Interpretation</label><select class="form-select"
                                            name="nitrofurantoin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">GENTAMICIN</label><input
                                            class="form-control" name="gentamicin" placeholder="Enter GENTAMICIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">GENTAMICIN
                                            Interpretation</label><select class="form-select"
                                            name="gentamicin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">HLG-Gentamicin High Level
                                            (synICUgy)</label><input class="form-control"
                                            name="hlg_gentamicin_high_level_synicugy"
                                            placeholder="Enter HLG-Gentamicin High Level (synICUgy)"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">HLG-Gentamicin High Level
                                            (synICUgy)
                                            Interpretation</label><select class="form-select"
                                            name="hlg_gentamicin_high_level_synicugy_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">ICR-Inducible Clindamycin
                                            Resistance</label><input class="form-control"
                                            name="icr_inducible_clindamycin_resistance"
                                            placeholder="Enter ICR-Inducible Clindamycin Resistance"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">IMIPENEM</label><input
                                            class="form-control" name="imipenem" placeholder="Enter IMIPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">IMIPENEM
                                            Interpretation</label><select class="form-select"
                                            name="imipenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">LEVOFLOXACIN</label><input
                                            class="form-control" name="levofloxacin" placeholder="Enter LEVOFLOXACIN">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">LEVOFLOXACIN
                                            Interpretation</label><select class="form-select"
                                            name="levofloxacin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">LINEZOLID</label><input
                                            class="form-control" name="linezolid" placeholder="Enter LINEZOLID"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">LINEZOLID
                                            Interpretation</label><select class="form-select"
                                            name="linezolid_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">Micafungin</label><input
                                            class="form-control" name="micafungin" placeholder="Enter Micafungin"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">Micafungin
                                            Interpretation</label><select class="form-select"
                                            name="micafungin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">MEROPENEM</label><input
                                            class="form-control" name="meropenem" placeholder="Enter MEROPENEM"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">MEROPENEM
                                            Interpretation</label><select class="form-select"
                                            name="meropenem_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">MINOCYCLINE</label><input
                                            class="form-control" name="minocycline" placeholder="Enter MINOCYCLINE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">MINOCYCLINE
                                            Interpretation</label><select class="form-select"
                                            name="minocycline_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NETILMYCIN</label><input
                                            class="form-control" name="netilmycin" placeholder="Enter NETILMYCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NETILMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="netilmycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NORFLOX</label><input
                                            class="form-control" name="norflox" placeholder="Enter NORFLOX"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">NORFLOX
                                            Interpretation</label><select class="form-select"
                                            name="norflox_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">OFLOX</label><input
                                            class="form-control" name="oflox" placeholder="Enter OFLOX"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">OFLOX
                                            Interpretation</label><select class="form-select"
                                            name="oflox_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">OXACILLIN</label><input
                                            class="form-control" name="oxacillin" placeholder="Enter OXACILLIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">OXACILLIN
                                            Interpretation</label><select class="form-select"
                                            name="oxacillin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">Cefoxitin
                                            Screen</label><input class="form-control" name="cefoxitin_screen"
                                            placeholder="Enter Cefoxitin Screen"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PENICILLIN</label><input
                                            class="form-control" name="penicillin" placeholder="Enter PENICILLIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PENICILLIN
                                            Interpretation</label><select class="form-select"
                                            name="penicillin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">POLYMYXIN B</label><input
                                            class="form-control" name="polymyxin_b" placeholder="Enter POLYMYXIN B">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">POLYMYXIN B
                                            Interpretation</label><select class="form-select"
                                            name="polymyxin_b_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">RIFAMPICIN</label><input
                                            class="form-control" name="rifampicin" placeholder="Enter RIFAMPICIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">RIFAMPICIN
                                            Interpretation</label><select class="form-select"
                                            name="rifampicin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFO SULBA</label><input
                                            class="form-control" name="cefo_sulba" placeholder="Enter CEFO SULBA"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">CEFO SULBA
                                            Interpretation</label><select class="form-select"
                                            name="cefo_sulba_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COTRIMOX</label><input
                                            class="form-control" name="cotrimox" placeholder="Enter COTRIMOX"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">COTRIMOX
                                            Interpretation</label><select class="form-select"
                                            name="cotrimox_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">Tetracycline</label><input
                                            class="form-control" name="tetracycline" placeholder="Enter Tetracycline">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">Tetracycline
                                            Interpretation</label><select class="form-select"
                                            name="tetracycline_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TEICOPLANIN</label><input
                                            class="form-control" name="teicoplanin" placeholder="Enter TEICOPLANIN">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">TEICOPLANIN
                                            Interpretation</label><select class="form-select"
                                            name="teicoplanin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TIGECYCLINE</label><input
                                            class="form-control" name="tigecycline" placeholder="Enter TIGECYCLINE">
                                    </div>
                                    <div class="col-md-3 col-12"><label class="form-label">TIGECYCLINE
                                            Interpretation</label><select class="form-select"
                                            name="tigecycline_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TICACILLIN</label><input
                                            class="form-control" name="ticacillin" placeholder="Enter TICACILLIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TICACILLIN
                                            Interpretation</label><select class="form-select"
                                            name="ticacillin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TOBRA</label><input
                                            class="form-control" name="tobra" placeholder="Enter TOBRA"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">TOBRA
                                            Interpretation</label><select class="form-select"
                                            name="tobra_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PIPTAZ</label><input
                                            class="form-control" name="piptaz" placeholder="Enter PIPTAZ"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">PIPTAZ
                                            Interpretation</label><select class="form-select"
                                            name="piptaz_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label class="form-label">VANCOMYCIN</label><input
                                            class="form-control" name="vancomycin" placeholder="Enter VANCOMYCIN"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">VANCOMYCIN
                                            Interpretation</label><select class="form-select"
                                            name="vancomycin_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>
                                    <div class="col-md-3 col-12"><label
                                            class="form-label">VRC-Voriconazole</label><input class="form-control"
                                            name="vrc_voriconazole" placeholder="Enter VRC-Voriconazole"></div>
                                    <div class="col-md-3 col-12"><label class="form-label">VRC-Voriconazole
                                            Interpretation</label><select class="form-select"
                                            name="vrc_voriconazole_interpretation">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select></div>

                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>URINE CULTURE</b></h4>
                                </div>
                                <div class="row g-3 mb-3">

                                    <!-- UHID -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFIXIME -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CEFIXIME</label>
                                        <select class="form-select" name="cefixime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF + SALBACTAM -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CEF + SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFOXITIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CEFOXITIN</label>
                                        <select class="form-select" name="cefoxitin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIXONE -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CEFTRIXONE</label>
                                        <select class="form-select" name="ceftrixone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- MEROPENEM -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">MEROPENEM</label>
                                        <select class="form-select" name="meropenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NITROFURURANTOIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">NITROFURURANTOIN</label>
                                        <select class="form-select" name="nitrofururantoin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- NORFLOXACIN -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">NORFLOXACIN</label>
                                        <select class="form-select" name="norfloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class="col-md-3 col-12">
                                        <label class="form-label">COTRIMAXAZOLE</label>
                                        <select class="form-select" name="cotrimaxazole">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class="d-flex flex-column gap-2">
                                <div>
                                    <h4 class="text-center"><b>BLOOD CLUTURE</b></h4>
                                </div>
                                <div class="row g-3 mb-3">

                                    <!-- Specimen Type -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">Specimen Type</label>
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
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">UHID (Single Patient)</label>
                                        <input type="text" class="form-control" name="uhid" placeholder="Enter UHID">
                                    </div>

                                    <!-- Testing Date -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">Testing Date</label>
                                        <input type="date" class="form-control" name="testing_date">
                                    </div>

                                    <!-- Organism Name -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">Organism Name</label>
                                        <input type="text" class="form-control" name="organism_name"
                                            placeholder="Enter Organism Name">
                                    </div>

                                    <!-- AMOX CLAV -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">AMOX CLAV</label>
                                        <select class="form-select" name="amox_clav">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- PIP-TAZ -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">PIP-TAZ</label>
                                        <select class="form-select" name="pip_taz">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CEFUROXIME</label>
                                        <select class="form-select" name="cefuroxime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFUROXIME-AXE -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CEFUROXIME-AXE</label>
                                        <select class="form-select" name="cefuroxime_axe">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFTRIAXONE -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CEFTRIAXONE</label>
                                        <select class="form-select" name="ceftriaxone">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEF-SALBACTAM -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CEF-SALBACTAM</label>
                                        <select class="form-select" name="cef_salbactam">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CEFEPIME -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CEFEPIME</label>
                                        <select class="form-select" name="cefepime">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- ERTAPENEM -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">ERTAPENEM</label>
                                        <select class="form-select" name="ertapenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- IMIPENEM -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">IMIPENEM</label>
                                        <select class="form-select" name="imipenem">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- AMIKACIN -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">AMIKACIN</label>
                                        <select class="form-select" name="amikacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- GENTAMYCIN -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">GENTAMYCIN</label>
                                        <select class="form-select" name="gentamycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- CIPROFLOXACIN -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">CIPROFLOXACIN</label>
                                        <select class="form-select" name="ciprofloxacin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- TIGECYCLINE -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">TIGECYCLINE</label>
                                        <select class="form-select" name="tigecycline">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- FOSFOMYCIN -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">FOSFOMYCIN</label>
                                        <select class="form-select" name="fosfomycin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COLISTIN -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">COLISTIN</label>
                                        <select class="form-select" name="colistin">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

                                    <!-- COTRIMAXAZOLE -->
                                    <div class=" col-md-3 col-12">
                                        <label class="form-label">COTRIMAXAZOLE</label>
                                        <select class="form-select" name="cotrimaxazole">
                                            <option value="">Select</option>
                                            <option>S</option>
                                            <option>I</option>
                                            <option>R</option>
                                        </select>
                                    </div>

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
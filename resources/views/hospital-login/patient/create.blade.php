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
                                <i class="fas fa-hospital"></i>
                            </div>
                            <p>SERIAL LAB </p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <p>MIC MICRO</p>
                        </div>

                        <div class="f1-step">
                            <div class="f1-step-icon">
                                <i class="fas fa-hospital"></i>
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
                                <label class="form-label" style="margin-bottom: 0px !important;">q-SOFA SCORE1</label>

                                <select class="form-select" name="q_sofa_score" required>
                                    <option value="">Select q-SOFA Score</option>
                                    <option value="<2">Less than 2</option>
                                    <option value=">2">Greater than 2</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select q-SOFA score
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">NLR <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nlr" placeholder="Enter NLR" required>
                                <div class="invalid-feedback">Please enter NLR</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">Platelets <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="platelets" placeholder="Enter Platelets"
                                    required>
                                <div class="invalid-feedback">Please enter Platelets</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">Hb <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="hb" placeholder="Enter Hb" required>
                                <div class="invalid-feedback">Please enter Hb</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PCT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pct" placeholder="Enter PCT" required>
                                <div class="invalid-feedback">Please enter PCT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">CRP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="crp" placeholder="Enter CRP" required>
                                <div class="invalid-feedback">Please enter CRP</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Lactate <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="s_lactate" placeholder="Enter S. Lactate"
                                    required>
                                <div class="invalid-feedback">Please enter S. Lactate</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">BUN <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="bun" placeholder="Enter BUN" required>
                                <div class="invalid-feedback">Please enter BUN</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Creatinine <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="s_creatinine"
                                    placeholder="Enter S. Creatinine" required>
                                <div class="invalid-feedback">Please enter S. Creatinine</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">AST <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ast" placeholder="Enter AST" required>
                                <div class="invalid-feedback">Please enter AST</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">ALT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alt" placeholder="Enter ALT" required>
                                <div class="invalid-feedback">Please enter ALT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">S. Bilirubin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="s_bilirubin" placeholder="Enter S. Bilirubin"
                                    required>
                                <div class="invalid-feedback">Please enter S. Bilirubin</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">LDH <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ldh" placeholder="Enter LDH" required>
                                <div class="invalid-feedback">Please enter LDH</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">IL 6/8/10 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="il_6_8_10" placeholder="Enter IL 6/8/10"
                                    required>
                                <div class="invalid-feedback">Please enter IL 6/8/10</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">pH ABG <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ph_abg" placeholder="Enter pH ABG" required>
                                <div class="invalid-feedback">Please enter pH ABG</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PCO2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pco2" placeholder="Enter PCO2" required>
                                <div class="invalid-feedback">Please enter PCO2</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PO2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="po2" placeholder="Enter PO2" required>
                                <div class="invalid-feedback">Please enter PO2</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">HCO3 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="hco3" placeholder="Enter HCO3" required>
                                <div class="invalid-feedback">Please enter HCO3</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">APTT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="aptt" placeholder="Enter APTT" required>
                                <div class="invalid-feedback">Please enter APTT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">PT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pt" placeholder="Enter PT" required>
                                <div class="invalid-feedback">Please enter PT</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">INR <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="inr" placeholder="Enter INR" required>
                                <div class="invalid-feedback">Please enter INR</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb-0">d-Dimer <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="d_dimer" placeholder="Enter d-Dimer" required>
                                <div class="invalid-feedback">Please enter d-Dimer</div>
                            </div>

                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                <label class="form-label mb=0">Fibrinogen <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fibrinogen" placeholder="Enter Fibrinogen"
                                    required>
                                <div class="invalid-feedback">Please enter Fibrinogen</div>
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

                        <div class="row">

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Uhid <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="uhid" placeholder="Enter Uhid" required>
                                <div class="invalid-feedback">
                                    Please enter Uhid
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Specimen Type <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="specimen_type"
                                    placeholder="Enter Specimen Type" required>
                                <div class="invalid-feedback">
                                    Please enter Specimen Type
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Testing Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="testing_date" placeholder="Enter Testing Date"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Testing Date
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Organism Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="organism_name"
                                    placeholder="Enter Organism Name" required>
                                <div class="invalid-feedback">
                                    Please enter Organism Name
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ampicillin Mic <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ampicillin_mic"
                                    placeholder="Enter Ampicillin Mic" required>
                                <div class="invalid-feedback">
                                    Please enter Ampicillin Mic
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ampicillin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ampicillin_interpretation"
                                    placeholder="Enter Ampicillin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ampicillin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Amox Clavulanic Acid <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="amox_clavulanic_acid"
                                    placeholder="Enter Amox Clavulanic Acid" required>
                                <div class="invalid-feedback">
                                    Please enter Amox Clavulanic Acid
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Amox Clavulanic Acid Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="amox_clavulanic_acid_interpretation"
                                    placeholder="Enter Amox Clavulanic Acid Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Amox Clavulanic Acid Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Amikacin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="amikacin" placeholder="Enter Amikacin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Amikacin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Amikacin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="amikacin_interpretation"
                                    placeholder="Enter Amikacin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Amikacin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Chlorampinicol <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="chlorampinicol"
                                    placeholder="Enter Chlorampinicol" required>
                                <div class="invalid-feedback">
                                    Please enter Chlorampinicol
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Chlorampinicol Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="chlorampinicol_interpretation"
                                    placeholder="Enter Chlorampinicol Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Chlorampinicol Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Caspofungin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="caspofungin" placeholder="Enter Caspofungin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Caspofungin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Caspofungin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="caspofungin_interpretation"
                                    placeholder="Enter Caspofungin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Caspofungin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftazidime <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftazidime" placeholder="Enter Ceftazidime"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Ceftazidime
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftazidime Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftazidime_interpretation"
                                    placeholder="Enter Ceftazidime Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ceftazidime Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefalothin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefalothin" placeholder="Enter Cefalothin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefalothin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefalothin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefalothin_interpretation"
                                    placeholder="Enter Cefalothin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefalothin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefixime <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefixime" placeholder="Enter Cefixime"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefixime
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefixime Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefixime_interpretation"
                                    placeholder="Enter Cefixime Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefixime Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ciprofloxacin Mic <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ciprofloxacin_mic"
                                    placeholder="Enter Ciprofloxacin Mic" required>
                                <div class="invalid-feedback">
                                    Please enter Ciprofloxacin Mic
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ciprofloxacin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ciprofloxacin_interpretation"
                                    placeholder="Enter Ciprofloxacin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ciprofloxacin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Clindamycin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="clindamycin" placeholder="Enter Clindamycin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Clindamycin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Clindamycin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="clindamycin_interpretation"
                                    placeholder="Enter Clindamycin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Clindamycin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftriaxone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftriaxone" placeholder="Enter Ceftriaxone"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Ceftriaxone
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftriaxone Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftriaxone_interpretation"
                                    placeholder="Enter Ceftriaxone Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ceftriaxone Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Colistin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="colistin" placeholder="Enter Colistin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Colistin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Colistin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="colistin_interpretation"
                                    placeholder="Enter Colistin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Colistin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefotaxime <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefotaxime" placeholder="Enter Cefotaxime"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefotaxime
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefotaxime Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefotaxime_interpretation"
                                    placeholder="Enter Cefotaxime Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefotaxime Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefuroxime <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefuroxime" placeholder="Enter Cefuroxime"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefuroxime
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefuroxime Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefuroxime_interpretation"
                                    placeholder="Enter Cefuroxime Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefuroxime Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftazidime 2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftazidime_2"
                                    placeholder="Enter Ceftazidime 2" required>
                                <div class="invalid-feedback">
                                    Please enter Ceftazidime 2
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ceftazidime 2 Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ceftazidime_2_interpretation"
                                    placeholder="Enter Ceftazidime 2 Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ceftazidime 2 Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Daptomycin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="daptomycin" placeholder="Enter Daptomycin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Daptomycin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Daptomycin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="daptomycin_interpretation"
                                    placeholder="Enter Daptomycin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Daptomycin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Doxycycline <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="doxycycline" placeholder="Enter Doxycycline"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Doxycycline
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Doxycycline Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="doxycycline_interpretation"
                                    placeholder="Enter Doxycycline Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Doxycycline Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Erythromycin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="erythromycin" placeholder="Enter Erythromycin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Erythromycin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Erythromycin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="erythromycin_interpretation"
                                    placeholder="Enter Erythromycin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Erythromycin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ertapenem <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ertapenem" placeholder="Enter Ertapenem"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Ertapenem
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ertapenem Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ertapenem_interpretation"
                                    placeholder="Enter Ertapenem Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ertapenem Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Flucytosine <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="flucytosine" placeholder="Enter Flucytosine"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Flucytosine
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Flucytosine Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="flucytosine_interpretation"
                                    placeholder="Enter Flucytosine Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Flucytosine Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefepime <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefepime" placeholder="Enter Cefepime"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefepime
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefepime Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefepime_interpretation"
                                    placeholder="Enter Cefepime Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefepime Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Fluconazole <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fluconazole" placeholder="Enter Fluconazole"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Fluconazole
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Fluconazole Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fluconazole_interpretation"
                                    placeholder="Enter Fluconazole Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Fluconazole Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Fosfomycin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fosfomycin" placeholder="Enter Fosfomycin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Fosfomycin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Fosfomycin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fosfomycin_interpretation"
                                    placeholder="Enter Fosfomycin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Fosfomycin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefoxitin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefoxitin" placeholder="Enter Cefoxitin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefoxitin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefoxitin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefoxitin_interpretation"
                                    placeholder="Enter Cefoxitin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefoxitin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Nitrofurantoin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nitrofurantoin"
                                    placeholder="Enter Nitrofurantoin" required>
                                <div class="invalid-feedback">
                                    Please enter Nitrofurantoin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Nitrofurantoin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nitrofurantoin_interpretation"
                                    placeholder="Enter Nitrofurantoin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Nitrofurantoin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Gentamicin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="gentamicin" placeholder="Enter Gentamicin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Gentamicin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Gentamicin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="gentamicin_interpretation"
                                    placeholder="Enter Gentamicin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Gentamicin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Hlg Gentamicin High Level Synergy <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="hlg_gentamicin_high_level_synergy"
                                    placeholder="Enter Hlg Gentamicin High Level Synergy" required>
                                <div class="invalid-feedback">
                                    Please enter Hlg Gentamicin High Level Synergy
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Hlg Gentamicin High Level Synergy Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control"
                                    name="hlg_gentamicin_high_level_synergy_interpretation"
                                    placeholder="Enter Hlg Gentamicin High Level Synergy Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Hlg Gentamicin High Level Synergy Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Icr Inducible Clindamycin Resistance <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="icr_inducible_clindamycin_resistance"
                                    placeholder="Enter Icr Inducible Clindamycin Resistance" required>
                                <div class="invalid-feedback">
                                    Please enter Icr Inducible Clindamycin Resistance
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Imipenem <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="imipenem" placeholder="Enter Imipenem"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Imipenem
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Imipenem Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="imipenem_interpretation"
                                    placeholder="Enter Imipenem Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Imipenem Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Levofloxacin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="levofloxacin" placeholder="Enter Levofloxacin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Levofloxacin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Levofloxacin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="levofloxacin_interpretation"
                                    placeholder="Enter Levofloxacin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Levofloxacin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Linezolid <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="linezolid" placeholder="Enter Linezolid"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Linezolid
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Linezolid Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="linezolid_interpretation"
                                    placeholder="Enter Linezolid Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Linezolid Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Micafungin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="micafungin" placeholder="Enter Micafungin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Micafungin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Micafungin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="micafungin_interpretation"
                                    placeholder="Enter Micafungin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Micafungin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Meropenem <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="meropenem" placeholder="Enter Meropenem"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Meropenem
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Meropenem Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="meropenem_interpretation"
                                    placeholder="Enter Meropenem Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Meropenem Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Minocycline <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="minocycline" placeholder="Enter Minocycline"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Minocycline
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Minocycline Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="minocycline_interpretation"
                                    placeholder="Enter Minocycline Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Minocycline Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Netilmicin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="netilmicin" placeholder="Enter Netilmicin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Netilmicin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Netilmicin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="netilmicin_interpretation"
                                    placeholder="Enter Netilmicin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Netilmicin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Norflox <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="norflox" placeholder="Enter Norflox" required>
                                <div class="invalid-feedback">
                                    Please enter Norflox
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Norflox Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="norflox_interpretation"
                                    placeholder="Enter Norflox Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Norflox Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Oflox <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="oflox" placeholder="Enter Oflox" required>
                                <div class="invalid-feedback">
                                    Please enter Oflox
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Oflox Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="oflox_interpretation"
                                    placeholder="Enter Oflox Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Oflox Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Oxacillin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="oxacillin" placeholder="Enter Oxacillin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Oxacillin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Oxacillin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="oxacillin_interpretation"
                                    placeholder="Enter Oxacillin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Oxacillin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefoxitin Screen <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefoxitin_screen"
                                    placeholder="Enter Cefoxitin Screen" required>
                                <div class="invalid-feedback">
                                    Please enter Cefoxitin Screen
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Penicillin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="penicillin" placeholder="Enter Penicillin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Penicillin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Penicillin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="penicillin_interpretation"
                                    placeholder="Enter Penicillin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Penicillin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Polymyxin B <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="polymyxin_b" placeholder="Enter Polymyxin B"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Polymyxin B
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Polymyxin B Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="polymyxin_b_interpretation"
                                    placeholder="Enter Polymyxin B Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Polymyxin B Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Rifampicin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="rifampicin" placeholder="Enter Rifampicin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Rifampicin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Rifampicin Interpretation <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="rifampicin_interpretation"
                                    placeholder="Enter Rifampicin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Rifampicin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefo Sulba <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefo_sulba" placeholder="Enter Cefo Sulba"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cefo Sulba
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cefo Sulba Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cefo_sulba_interpretation"
                                    placeholder="Enter Cefo Sulba Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cefo Sulba Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cotrimox <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cotrimox" placeholder="Enter Cotrimox"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Cotrimox
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Cotrimox Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="cotrimox_interpretation"
                                    placeholder="Enter Cotrimox Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Cotrimox Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tetracycline <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tetracycline" placeholder="Enter Tetracycline"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Tetracycline
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tetracycline Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tetracycline_interpretation"
                                    placeholder="Enter Tetracycline Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Tetracycline Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Teicoplanin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="teicoplanin" placeholder="Enter Teicoplanin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Teicoplanin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Teicoplanin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="teicoplanin_interpretation"
                                    placeholder="Enter Teicoplanin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Teicoplanin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tigecycline <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tigecycline" placeholder="Enter Tigecycline"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Tigecycline
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tigecycline Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tigecycline_interpretation"
                                    placeholder="Enter Tigecycline Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Tigecycline Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ticacillin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ticacillin" placeholder="Enter Ticacillin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Ticacillin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Ticacillin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="ticacillin_interpretation"
                                    placeholder="Enter Ticacillin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Ticacillin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tobra <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tobra" placeholder="Enter Tobra" required>
                                <div class="invalid-feedback">
                                    Please enter Tobra
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Tobra Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tobra_interpretation"
                                    placeholder="Enter Tobra Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Tobra Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Piptaz <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="piptaz" placeholder="Enter Piptaz" required>
                                <div class="invalid-feedback">
                                    Please enter Piptaz
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Piptaz Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="piptaz_interpretation"
                                    placeholder="Enter Piptaz Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Piptaz Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Vancomycin <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="vancomycin" placeholder="Enter Vancomycin"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter Vancomycin
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Vancomycin Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="vancomycin_interpretation"
                                    placeholder="Enter Vancomycin Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Vancomycin Interpretation
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Vrc Voriconazole <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="vrc_voriconazole"
                                    placeholder="Enter Vrc Voriconazole" required>
                                <div class="invalid-feedback">
                                    Please enter Vrc Voriconazole
                                </div>
                            </div>

                            <div class="mb-3 col-lg-6 col-12">
                                <label class="form-label mb-0">Vrc Voriconazole Interpretation <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="vrc_voriconazole_interpretation"
                                    placeholder="Enter Vrc Voriconazole Interpretation" required>
                                <div class="invalid-feedback">
                                    Please enter Vrc Voriconazole Interpretation
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

                        <div class="d-flex row">
                            <div class="row">

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Icu Type <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="icu_type" placeholder="Enter Icu Type"
                                        required>
                                    <div class="invalid-feedback">
                                        Please enter Icu Type
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Hospital Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="hospital_code"
                                        placeholder="Enter Hospital Code" required>
                                    <div class="invalid-feedback">
                                        Please enter Hospital Code
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Uhid Rgen No <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="uhid_rgen_no"
                                        placeholder="Enter Uhid Rgen No" required>
                                    <div class="invalid-feedback">
                                        Please enter Uhid Rgen No
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Date Of Admission <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="date_of_admission"
                                        placeholder="Enter Date Of Admission" required>
                                    <div class="invalid-feedback">
                                        Please select Date Of Admission
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Time Of Presentation <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="time_of_presentation"
                                        placeholder="Enter Time Of Presentation" required>
                                    <div class="invalid-feedback">
                                        Please select Time Of Presentation
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="age" placeholder="Enter Age" required>
                                    <div class="invalid-feedback">
                                        Please enter Age
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Sex <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="sex" placeholder="Enter Sex" required>
                                    <div class="invalid-feedback">
                                        Please enter Sex
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Chief Complaints <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="chief_complaints"
                                        placeholder="Enter Chief Complaints" required>
                                    <div class="invalid-feedback">
                                        Please enter Chief Complaints
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Symptom Duration <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="symptom_duration"
                                        placeholder="Enter Symptom Duration" required>
                                    <div class="invalid-feedback">
                                        Please enter Symptom Duration
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Comorbidities Cc Index <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="comorbidities_cc_index"
                                        placeholder="Enter Comorbidities Cc Index" required>
                                    <div class="invalid-feedback">
                                        Please enter Comorbidities Cc Index
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Comorbidity Duration <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="comorbidity_duration"
                                        placeholder="Enter Comorbidity Duration" required>
                                    <div class="invalid-feedback">
                                        Please enter Comorbidity Duration
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Previously Ill Requiring Admission Last 3 Months <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        name="previously_ill_requiring_admission_last_3_months"
                                        placeholder="Enter Previously Ill Requiring Admission Last 3 Months" required>
                                    <div class="invalid-feedback">
                                        Please enter Previously Ill Requiring Admission Last 3 Months
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Previously Received Antibiotic Last 3 Months <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        name="previously_received_antibiotic_last_3_months"
                                        placeholder="Enter Previously Received Antibiotic Last 3 Months" required>
                                    <div class="invalid-feedback">
                                        Please enter Previously Received Antibiotic Last 3 Months
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Initial Probable Sepsis Diagnosis<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="initial_probable_sepsis_diagnosis"
                                        placeholder="Enter Initial Probable Sepsis Diagnosis" required>
                                    <div class="invalid-feedback">
                                        Please enter Initial Probable Sepsis Diagnosis
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Direct Admission Or Referred<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="direct_admission_or_referred"
                                        placeholder="Enter Direct Admission Or Referred" required>
                                    <div class="invalid-feedback">
                                        Please enter Direct Admission Or Referred
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Sirs Criteria Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="sirs_criteria_date"
                                        placeholder="Enter Sirs Criteria Date" required>
                                    <div class="invalid-feedback">
                                        Please select Sirs Criteria Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Sirs Criteria Time<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="sirs_criteria_time"
                                        placeholder="Enter Sirs Criteria Time" required>
                                    <div class="invalid-feedback">
                                        Please select Sirs Criteria Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Sofa Score At Admission<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="sofa_score_at_admission"
                                        placeholder="Enter Sofa Score At Admission" required>
                                    <div class="invalid-feedback">
                                        Please enter Sofa Score At Admission
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Mdro Screening Admission<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mdro_screening_admission"
                                        placeholder="Enter Mdro Screening Admission" required>
                                    <div class="invalid-feedback">
                                        Please enter Mdro Screening Admission
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Organ Dysfunction<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="organ_dysfunction"
                                        placeholder="Enter Organ Dysfunction" required>
                                    <div class="invalid-feedback">
                                        Please enter Organ Dysfunction
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Lactate Ordered Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="first_lactate_ordered_date"
                                        placeholder="Enter First Lactate Ordered Date" required>
                                    <div class="invalid-feedback">
                                        Please select First Lactate Ordered Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Lactate Ordered Time<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="first_lactate_ordered_time"
                                        placeholder="Enter First Lactate Ordered Time" required>
                                    <div class="invalid-feedback">
                                        Please select First Lactate Ordered Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Cultures Sent Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="blood_cultures_sent_date"
                                        placeholder="Enter Blood Cultures Sent Date" required>
                                    <div class="invalid-feedback">
                                        Please select Blood Cultures Sent Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Cultures Sent Time<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="blood_cultures_sent_time"
                                        placeholder="Enter Blood Cultures Sent Time" required>
                                    <div class="invalid-feedback">
                                        Please select Blood Cultures Sent Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Other Samples Sent For Cultures<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="other_samples_sent_for_cultures"
                                        placeholder="Enter Other Samples Sent For Cultures" required>
                                    <div class="invalid-feedback">
                                        Please enter Other Samples Sent For Cultures
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Other Culture Sent Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="other_culture_sent_date"
                                        placeholder="Enter Other Culture Sent Date" required>
                                    <div class="invalid-feedback">
                                        Please select Other Culture Sent Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Other Culture Sent Time<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="other_culture_sent_time"
                                        placeholder="Enter Other Culture Sent Time" required>
                                    <div class="invalid-feedback">
                                        Please select Other Culture Sent Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Dose Antibiotic Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="first_dose_antibiotic_date"
                                        placeholder="Enter First Dose Antibiotic Date" required>
                                    <div class="invalid-feedback">
                                        Please select First Dose Antibiotic Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Dose Antibiotic Time <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="first_dose_antibiotic_time"
                                        placeholder="Enter First Dose Antibiotic Time" required>
                                    <div class="invalid-feedback">
                                        Please select First Dose Antibiotic Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Empirical Antibiotic Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="empirical_antibiotic_name"
                                        placeholder="Enter Empirical Antibiotic Name" required>
                                    <div class="invalid-feedback">
                                        Please enter Empirical Antibiotic Name
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Initial Fluid Administered <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="initial_fluid_administered"
                                        placeholder="Enter Initial Fluid Administered" required>
                                    <div class="invalid-feedback">
                                        Please enter Initial Fluid Administered
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Fluid Volume Administered <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fluid_volume_administered"
                                        placeholder="Enter Fluid Volume Administered" required>
                                    <div class="invalid-feedback">
                                        Please enter Fluid Volume Administered
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient Response Post Infusion <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="patient_response_post_infusion"
                                        placeholder="Enter Patient Response Post Infusion" required>
                                    <div class="invalid-feedback">
                                        Please enter Patient Response Post Infusion
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Repeat Lactate After Infusion <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="repeat_lactate_after_infusion"
                                        placeholder="Enter Repeat Lactate After Infusion" required>
                                    <div class="invalid-feedback">
                                        Please enter Repeat Lactate After Infusion
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Organs Affected After Lab Reports <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="organs_affected_after_lab_reports"
                                        placeholder="Enter Organs Affected After Lab Reports" required>
                                    <div class="invalid-feedback">
                                        Please enter Organs Affected After Lab Reports
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Surgery Within 28 Days <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="surgery_within_28_days"
                                        placeholder="Enter Surgery Within 28 Days" required>
                                    <div class="invalid-feedback">
                                        Please enter Surgery Within 28 Days
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Molecular Test Ordered Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="molecular_test_ordered_date"
                                        placeholder="Enter Molecular Test Ordered Date" required>
                                    <div class="invalid-feedback">
                                        Please select Molecular Test Ordered Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Molecular Test Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="molecular_test_name"
                                        placeholder="Enter Molecular Test Name" required>
                                    <div class="invalid-feedback">
                                        Please enter Molecular Test Name
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Molecular Test Result Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="molecular_test_result_date"
                                        placeholder="Enter Molecular Test Result Date" required>
                                    <div class="invalid-feedback">
                                        Please select Molecular Test Result Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day1 Hemat Biochem Values<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="day1_hemat_biochem_values"
                                        placeholder="Enter Day1 Hemat Biochem Values" required>
                                    <div class="invalid-feedback">
                                        Please enter Day1 Hemat Biochem Values
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Culture Result <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="blood_culture_result"
                                        placeholder="Enter Blood Culture Result" required>
                                    <div class="invalid-feedback">
                                        Please enter Blood Culture Result
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Culture Positive Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="blood_culture_positive_date"
                                        placeholder="Enter Blood Culture Positive Date" required>
                                    <div class="invalid-feedback">
                                        Please select Blood Culture Positive Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Culture Positive Time<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="blood_culture_positive_time"
                                        placeholder="Enter Blood Culture Positive Time" required>
                                    <div class="invalid-feedback">
                                        Please select Blood Culture Positive Time
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Blood Culture Communicated At<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="blood_culture_communicated_at"
                                        placeholder="Enter Blood Culture Communicated At" required>
                                    <div class="invalid-feedback">
                                        Please enter Blood Culture Communicated At
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Rapid Pcr Blood Culture Result<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="rapid_pcr_blood_culture_result"
                                        placeholder="Enter Rapid Pcr Blood Culture Result" required>
                                    <div class="invalid-feedback">
                                        Please enter Rapid Pcr Blood Culture Result
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotic Change After Rapid Pcr<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="antibiotic_change_after_rapid_pcr"
                                        placeholder="Enter Antibiotic Change After Rapid Pcr" required>
                                    <div class="invalid-feedback">
                                        Please enter Antibiotic Change After Rapid Pcr
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Other Culture Growth Reported On<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="other_culture_growth_reported_on"
                                        placeholder="Enter Other Culture Growth Reported On" required>
                                    <div class="invalid-feedback">
                                        Please enter Other Culture Growth Reported On
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Culture Growth Sample Source<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="culture_growth_sample_source"
                                        placeholder="Enter Culture Growth Sample Source" required>
                                    <div class="invalid-feedback">
                                        Please enter Culture Growth Sample Source
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Esbl Cre Crab Mrsa Vre<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="esbl_cre_crab_mrsa_vre"
                                        placeholder="Enter Esbl Cre Crab Mrsa Vre" required>
                                    <div class="invalid-feedback">
                                        Please enter Esbl Cre Crab Mrsa Vre
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotic Sensitivity Sheet Entry 2<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="antibiotic_sensitivity_sheet_entry_2"
                                        placeholder="Enter Antibiotic Sensitivity Sheet Entry 2" required>
                                    <div class="invalid-feedback">
                                        Please enter Antibiotic Sensitivity Sheet Entry 2
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Mdro Screening Admission Result<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mdro_screening_admission_result"
                                        placeholder="Enter Mdro Screening Admission Result" required>
                                    <div class="invalid-feedback">
                                        Please enter Mdro Screening Admission Result
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Usg Abdomen Done On<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="first_usg_abdomen_done_on"
                                        placeholder="Enter First Usg Abdomen Done On" required>
                                    <div class="invalid-feedback">
                                        Please enter First Usg Abdomen Done On
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Usg Abdomen Findings<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="usg_abdomen_findings"
                                        placeholder="Enter Usg Abdomen Findings" required>
                                    <div class="invalid-feedback">
                                        Please enter Usg Abdomen Findings
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">First Chest Xray Done On<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="first_chest_xray_done_on"
                                        placeholder="Enter First Chest Xray Done On" required>
                                    <div class="invalid-feedback">
                                        Please enter First Chest Xray Done On
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Chest Xray Findings<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="chest_xray_findings"
                                        placeholder="Enter Chest Xray Findings" required>
                                    <div class="invalid-feedback">
                                        Please enter Chest Xray Findings
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pet Ct Done On<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pet_ct_done_on"
                                        placeholder="Enter Pet Ct Done On" required>
                                    <div class="invalid-feedback">
                                        Please enter Pet Ct Done On
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pet Ct Findings<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pet_ct_findings"
                                        placeholder="Enter Pet Ct Findings" required>
                                    <div class="invalid-feedback">
                                        Please enter Pet Ct Findings
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day3 Hemat Biochem Values<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="day3_hemat_biochem_values"
                                        placeholder="Enter Day3 Hemat Biochem Values" required>
                                    <div class="invalid-feedback">
                                        Please enter Day3 Hemat Biochem Values
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Day5 Hemat Biochem Values<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="day5_hemat_biochem_values"
                                        placeholder="Enter Day5 Hemat Biochem Values" required>
                                    <div class="invalid-feedback">
                                        Please enter Day5 Hemat Biochem Values
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Repeat Chest Xray Dates<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="repeat_chest_xray_dates"
                                        placeholder="Enter Repeat Chest Xray Dates" required>
                                    <div class="invalid-feedback">
                                        Please select Repeat Chest Xray Dates
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Chest Xray Followup Findings<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="chest_xray_followup_findings"
                                        placeholder="Enter Chest Xray Followup Findings" required>
                                    <div class="invalid-feedback">
                                        Please enter Chest Xray Followup Findings
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pleural Tapping Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="pleural_tapping_date"
                                        placeholder="Enter Pleural Tapping Date" required>
                                    <div class="invalid-feedback">
                                        Please select Pleural Tapping Date
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Pleural Fluid Culture Results<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pleural_fluid_culture_results"
                                        placeholder="Enter Pleural Fluid Culture Results" required>
                                    <div class="invalid-feedback">
                                        Please enter Pleural Fluid Culture Results
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotic Change Day<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="antibiotic_change_day"
                                        placeholder="Enter Antibiotic Change Day" required>
                                    <div class="invalid-feedback">
                                        Please enter Antibiotic Change Day
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Antibiotics Changed To<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="antibiotics_changed_to"
                                        placeholder="Enter Antibiotics Changed To" required>
                                    <div class="invalid-feedback">
                                        Please enter Antibiotics Changed To
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days Empirical Antibiotic Therapy<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="days_empirical_antibiotic_therapy"
                                        placeholder="Enter Days Empirical Antibiotic Therapy" required>
                                    <div class="invalid-feedback">
                                        Please enter Days Empirical Antibiotic Therapy
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days Definitive Antibiotic Therapy<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="days_definitive_antibiotic_therapy"
                                        placeholder="Enter Days Definitive Antibiotic Therapy" required>
                                    <div class="invalid-feedback">
                                        Please enter Days Definitive Antibiotic Therapy
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient Outcome Day 7<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="patient_outcome_day_7"
                                        placeholder="Enter Patient Outcome Day 7" required>
                                    <div class="invalid-feedback">
                                        Please enter Patient Outcome Day 7
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient Outcome Day 14<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="patient_outcome_day_14"
                                        placeholder="Enter Patient Outcome Day 14" required>
                                    <div class="invalid-feedback">
                                        Please enter Patient Outcome Day 14
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient Outcome Day 21<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="patient_outcome_day_21"
                                        placeholder="Enter Patient Outcome Day 21" required>
                                    <div class="invalid-feedback">
                                        Please enter Patient Outcome Day 21
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Patient Outcome Day 28<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="patient_outcome_day_28"
                                        placeholder="Enter Patient Outcome Day 28" required>
                                    <div class="invalid-feedback">
                                        Please enter Patient Outcome Day 28
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Source Established<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="source_established"
                                        placeholder="Enter Source Established" required>
                                    <div class="invalid-feedback">
                                        Please enter Source Established
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Source Established Where<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="source_established_where"
                                        placeholder="Enter Source Established Where" required>
                                    <div class="invalid-feedback">
                                        Please enter Source Established Where
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days Icu Hospitalization<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="days_icu_hospitalization"
                                        placeholder="Enter Days Icu Hospitalization" required>
                                    <div class="invalid-feedback">
                                        Please enter Days Icu Hospitalization
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Days Ward Hospitalization<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="days_ward_hospitalization"
                                        placeholder="Enter Days Ward Hospitalization" required>
                                    <div class="invalid-feedback">
                                        Please enter Days Ward Hospitalization
                                    </div>
                                </div>

                                <div class="mb-3 col-lg-6 col-12">
                                    <label class="form-label mb-0">Final Diagnosis <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="final_diagnosis"
                                        placeholder="Enter Final Diagnosis" required>
                                    <div class="invalid-feedback">
                                        Please enter Final Diagnosis
                                    </div>
                                </div>

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
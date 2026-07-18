 <div class="patient-card">
                                <h3 class="page-title mb-0 pt-3 pb-0">
                                    <span class="step-no">1</span>
                                    Patient Registration - Basic Details
                                </h3>

                                <div class="card-body pt-3 pb-3">

                                    <div class="row">

                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Hospital code</label>
                                            <input class="form-control" type="text" name="hospital_code"
                                                value="{{ old('hospital_code', $patient->hospital_code ?? '') }}" placeholder="Enter Hospital code">
                                            <div class="invalid-feedback">
                                                Please enter Hospital code
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">UHID/Rgen No.</label>
                                            <input class="form-control" type="text" name="uhid"
                                                value="{{ old('uhid', $patient->uhid ?? '') }}" placeholder="Enter UHID/Rgen No.">
                                            <div class="invalid-feedback">
                                                Please enter UHID/Rgen No.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Date of Admission</label>
                                            <input class="form-control" type="date" name="date_of_admission"
                                                value="{{ old('date_of_admission', $patient->date_of_admission ?? '') }}" placeholder="dd-mm-yyyy">
                                            <div class="invalid-feedback">
                                                Please enter Date of Admission
                                            </div>
                                        </div>


                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Time of Presentation</label>
                                            <input class="form-control" type="time" name="time_of_presentation"
                                                value="{{ old('time_of_presentation', $patient->time_of_presentation ?? '') }}" placeholder="Enter time of presentation">

                                            <div class="invalid-feedback">
                                                Please enter time of presentation.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Age</label>
                                            <input class="form-control" type="text" name="age" placeholder="Enter age"
                                                value="{{ old('age', $patient->age ?? '') }}"
                                                oninput="this.value=this.value.replace(/[^0-9]/g,'')">

                                            <div class="invalid-feedback">
                                                Please enter age.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Sex</label>
                                                <select class="js-example-placeholder-multiple col-sm-12" name="sex">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Chief complaints</label>
                                            <textarea class="form-control" name="chief_complaints"
                                                placeholder="Enter chief complaints">{{ old('chief_complaints', $patient->chief_complaints ?? '') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please enter age.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Diagnosis</label>
                                            <input class="form-control" type="text" name="diagnosis"
                                                value="{{ old('diagnosis', $patient->diagnosis ?? '') }}" placeholder="Enter diagnosis">

                                            <div class="invalid-feedback">
                                                Please enter diagnosis.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Symptom Duration</label>
                                                <select class="js-example-placeholder-multiple col-sm-12" name="symptom_duration">
                                                    <option value=">15days (3weeks)">>15days (3weeks)</option>
                                                    <option value="1 week">1 week</option>
                                                    <option value="3 days">3 days</option>
                                                    <option value=">1 month">>1 month</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <div class="mb-0">
                                                <label class="col-form-label mb-0 pb-0 pt-0">Comorbidities(CC INDEX)</label>
                                                <select class="js-example-placeholder-multiple col-sm-12" name="comorbidities_cc_index">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value=">5">>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Any comorbidity (<5 years)</label>
                                                    <input class="form-control" type="text" name="comorbidity_less_5_years"
                                                        value="{{ old('comorbidity_less_5_years', $patient->comorbidity_less_5_years ?? '') }}" placeholder="Enter any comorbidity (<5 years)">

                                                    <div class="invalid-feedback">
                                                        Please enter any comorbidity (<5 years). </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Previously ill requiring admission
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="previously_ill_last_3_months"
                                                            value="{{ old('previously_ill_last_3_months', $patient->previously_ill_last_3_months ?? '') }}" placeholder="Enter previously ill requiring admission last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter previously ill requiring admission last 3 months?
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Previously received any antibiotic
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="prev_antibiotic_last_3_months"
                                                            value="{{ old('prev_antibiotic_last_3_months', $patient->prev_antibiotic_last_3_months ?? '') }}" placeholder="Enter previously received any antibiotic last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter Previously received any antibiotic last 3 months?
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Initital probable sepsis diagnosis
                                                            mentioned in
                                                            file</label>
                                                        <input class="form-control" type="text" name="initial_probable_sepsis_diagnosis"
                                                            value="{{ old('initial_probable_sepsis_diagnosis', $patient->initial_probable_sepsis_diagnosis ?? '') }}" placeholder="Enter initital probable sepsis diagnosis mentioned in file">

                                                        <div class="invalid-feedback">
                                                            Please enter initital probable sepsis diagnosis mentioned in
                                                            file
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Direct admission here or referred
                                                            here?</label>
                                                        <input class="form-control" type="text" name="direct_or_referred"
                                                            value="{{ old('direct_or_referred', $patient->direct_or_referred ?? '') }}" placeholder="Enter direct admission here or referred here?">

                                                        <div class="invalid-feedback">
                                                            Please enter direct admission here or referred here?
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="text-end">

                                            <button type="submit" class="btn btn-success me-2" name="save_progress" value="true"><i class="fa fa-save"></i> Save Progress</button>
                                                <button type="button" class="btn btn-primary" onclick="nextStep()">

                                                Next →

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            
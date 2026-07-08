 <div class="patient-card">
                                <h3 class="page-title mb-0 pt-3 pb-0">
                                    <span class="step-no">1</span>
                                    Patient Registration - Basic Details
                                </h3>

                                <div class="card-body pt-3 pb-3">

                                    <div class="row">

                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Hospital code</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter Hospital code">
                                            <div class="invalid-feedback">
                                                Please enter Hospital code
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">UHID/Rgen No.</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter UHID/Rgen No.">
                                            <div class="invalid-feedback">
                                                Please enter UHID/Rgen No.
                                            </div>
                                        </div>
                                       <div class="mb-3 col-lg-4 col-12">
    <label class="form-label mb-0">Date of Admission</label>
    <input class="form-control"
           type="date"
           id="date_admission"
           name="Date_admission"
           >

    <div class="invalid-feedback">
        Please enter Date of Admission.
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
                                            <input class="form-control" type="text" name="Diagnosis"
                                                placeholder="Enter diagnosis">

                                            <div class="invalid-feedback">
                                                Please enter diagnosis.
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
    <label for="symptom_duration" class="form-label mb-0">
        Symptom Duration
    </label>
    <input type="text"
           class="form-control"
           id="symptom_duration"
           name="symptom_duration"
           placeholder="Enter symptom duration"
           >

    <div class="invalid-feedback">
        Please enter symptom duration.
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
                                                        <label class="form-label mb-0">Previously ill requiring admission
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter previously ill requiring admission last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter previously ill requiring admission last 3 months?
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Previously received any antibiotic
                                                            last 3
                                                            months?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter previously received any antibiotic last 3 months?">

                                                        <div class="invalid-feedback">
                                                            Please enter Previously received any antibiotic last 3 months?
                                                        </div>
                                                    </div>
                                                   <div class="mb-3 col-lg-4 col-12">
    <label class="form-label mb-0">
        Initial Probable Sepsis Diagnosis Mentioned in File
    </label>

    <select class="form-select"
            name="initial_probable_sepsis_diagnosis"
            >
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <div class="invalid-feedback">
        Please select Yes or No.
    </div>
</div>
                                                    <div class="mb-3 col-lg-4 col-12">
                                                        <label class="form-label mb-0">Direct admission here or referred
                                                            here?</label>
                                                        <input class="form-control" type="text" name="comorbidity"
                                                            placeholder="Enter direct admission here or referred here?">

                                                        <div class="invalid-feedback">
                                                            Please enter direct admission here or referred here?
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="text-end">

                                            <button type="button" class="btn btn-primary" onclick="nextStep()">

                                                Next →

                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>
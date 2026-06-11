@extends('layouts.app')

<style>
    .new-color {
        color: #1E3A8A;
    }

    .bbr-10 {
        border-radius: 10px;
    }

    .border-bottom {
        border-bottom: 1px solid #af9c55 !important;
    }

    .h145 {
        height: 145px;
    }

    .accordion-button:not(.collapsed) {
        color: #ffffff !important;
        background-color: #1e3a8a !important;
    }

    .price-carousel::after {
        background: #1e3a8a !important;
    }

    .img-fluid1 {
        width: 30% !important;
    }

    .new-bg-color {
        background: white;
        border-radius: 100%;

    }

    .testimonial-carousel .owl-dot.active {
        background-color: #1e3a8a !important;
    }
    .new-card {
        width: 10%;
        height: 10%;
    }
    .hero-header {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        overflow: hidden;
    }

    .hero-header::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(14,44,76,0.55);
        backdrop-filter: blur(2px);
        z-index: 0;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-search-box {
        background: #ffffff;
        border-radius: 10px;
        padding: 8px;
        display: flex;
        gap: 8px;
        align-items: center;
        box-shadow: 0 6px 18px rgba(16,24,40,0.12);
    }

    .hero-search-box .form-control,
    .hero-search-box .form-select {
        border: none;
        box-shadow: none;
        height: calc(2.25rem + 12px);
    }

    .hero-search-btn {
        background: linear-gradient(180deg,#0556d3,#0b63d8);
        color: #fff;
        border: none;
        padding: 10px 22px;
        border-radius: 8px;
    }

    .popular-chip {
        background: rgba(255,255,255,0.15);
        color: #fff;
        border-radius: 20px;
        padding: 6px 12px;
        display: inline-block;
        margin-right: .5rem;
        margin-bottom: .5rem;
    }
    .hero-header {
    background: url(../img/hero.png) top right no-repeat;
    background-size: cover;
    height: auto !important;
}
.input-group{
    width: 65% !important;
}
.text-white-50 {
    color: #ffffffe6 !important;
}

</style>
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header" style="background-image: url({{ asset('frontend/img/hero.jpg') }});">
        <div class="container-fuild py-5 hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                        style="border-color: #ffc10770 !important;border-radius:10px">Welcome To PAR-BHARGAVI</h5>
                    <h1 class="display-1 text-white mb-3">Hospital Data Directory</h1>
                    <p class="text-white-50 mb-4 text-white" style="color: #ffffff !important;">Explore, compare and access verified data on hospitals across India for better healthcare decisions.</p>

                    <div class="d-flex w-100 mb-3">
                        <div class="flex-grow-1 hero-search-box">
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0"><i class="fa fa-search text-secondary"></i></span>
                                <input type="search" class="form-control form-control-lg" placeholder="Search Hospital Name, City or State">
                            </div>
                            <select class="form-select form-select-lg ms-2" style="max-width:220px;">
                                <option>All States / UT</option>
                            </select>
                            <button class="btn hero-search-btn ms-2 text-white">Search <i class="fa fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>

                    <div>
                        <small class="text-white-50" style="color: #ffffff !important;">Popular Searches:</small>
                        <div class="mt-2">
                            <span class="popular-chip">Top 100 Hospitals</span>
                            <span class="popular-chip">NABH Accredited</span>
                            <span class="popular-chip">Government Hospitals</span>
                            <span class="popular-chip">ICU Beds Data</span>
                            <span class="popular-chip">Private Hospitals</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-center text-lg-end mb-4 mb-lg-0">
                    <img src="{{ asset('frontend/img/newimage-removebg-preview.png') }}" alt="dashboard" class="img-fluid rounded shadow" style="max-height:360px; object-fit:contain;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="ResearchStudies">
        <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{asset('frontend/img/aboutnew.png')}}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 bbr-10 new-color">
                            Research Studies</h5>
                        <h1 class="display-4">RESEARCH & CLINICAL STUDIES<br>Committed To Medical Innovation And Patient
                            Care</h1>
                    </div>
                    <p>Our research programs at <b>PAR-BHARGAVI</b> are designed to support medical advancement and improve
                        community health. By conducting ethical and impactful clinical studies, we aim to discover better
                        treatment methods and contribute to the future of healthcare excellence.</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-file-alt text-primary new-color mb-3"></i>
                                <h6 class="mb-0">Indian<small class="d-block text-primary new-color">Articles</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-globe text-primary new-color mb-3"></i>
                                <h6 class="mb-0">International<small class="d-block text-primary new-color">Articles</small>
                                </h6>
                            </div>
                        </div>
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-heartbeat text-primary new-color mb-3"></i>
                                <h6 class="mb-0">Survival Sepsis <small
                                        class="d-block text-primary new-color">Campaign</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-ambulance text-primary new-color mb-3"></i>
                                <h6 class="mb-0">IDSA<small class="d-block text-primary new-color">Guidelines</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-ambulance text-primary new-color mb-3"></i>
                                <h6 class="mb-0">BSAC<small class="d-block text-primary new-color">Guidelines</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-2 col-6">
                            <div class="bg-light text-center rounded-circle py-4 h145">
                                <i class="fa fa-3x fa-ambulance text-primary new-color mb-3"></i>
                                <h6 class="mb-0">Others<small class="d-block text-primary new-color"></small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Resources Start -->
    <div class="container-fluid py-5 bg-light" id="resources">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 bbr-10 new-color">Resources</h5>
                <h1 class="display-4">Healthcare Resources & Educational Materials</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-file-pdf fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">Guidelines</h4>
                        </div>
                        <p class="text-muted mb-3">Access comprehensive clinical guidelines for sepsis management and treatment protocols.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-book fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">Research Papers</h4>
                        </div>
                        <p class="text-muted mb-3">Browse our collection of peer-reviewed research papers and clinical studies on sepsis.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-users fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">Patient Education</h4>
                        </div>
                        <p class="text-muted mb-3">Educational materials for patients and families to understand sepsis and prevention.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-video fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">Video Tutorials</h4>
                        </div>
                        <p class="text-muted mb-3">Watch educational videos from medical experts on sepsis recognition and treatment.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-download fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">Downloads</h4>
                        </div>
                        <p class="text-muted mb-3">Download brochures, fact sheets, and informational materials for offline use.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded shadow-sm h-100 p-4 transition-all hover-shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 new-card">
                                <i class="fa fa-link fa-2x text-primary new-color fs-3"></i>
                            </div>
                            <h4 class="mb-0">External Links</h4>
                        </div>
                        <p class="text-muted mb-3">Curated links to trusted healthcare organizations and sepsis resources.</p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Resources End -->

    <!-- About Sepsis Accordion Start -->
    <div class="container-fluid py-5" id="aboutsepsis">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5" style="max-width: auto;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 new-color bbr-10">About Sepsis
                </h5>
                <h1 class="display-4">Public Information on Sepsis</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="sepsisAccordion">
                        <!-- What is Sepsis -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-question-circle me-2 text-primary"></i>
                                    What is Sepsis?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#sepsisAccordion">
                                <div class="accordion-body">
                                    <p class="mb-2 text-dark">Sepsis is a life-threatening medical emergency that happens
                                        when the body’s response to an infection damages its own tissues and organs.</p>
                                    <p class="mb-2 text-dark">It can start from infections such as:</p>
                                    <ul class="list-unstyled">
                                        <li class="text-dark mb-2"><i
                                                class="fa fa-check-circle text-primary me-2"></i>Pneumonia</li>
                                        <li class="text-dark mb-2"><i
                                                class="fa fa-check-circle text-primary me-2"></i>Urinary tract infections
                                        </li>
                                        <li class="text-dark mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Skin
                                            infections</li>
                                        <li class="text-dark mb-2"><i
                                                class="fa fa-check-circle text-primary me-2"></i>Abdominal infections</li>
                                    </ul>
                                    <p class="mb-2 text-dark">When the infection spreads, the immune system reacts
                                        aggressively, which can lead to:</p>
                                    <ul class="list-unstyled">
                                        <li class="text-dark mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Organ
                                            failure</li>
                                        <li class="text-dark mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Low
                                            blood pressure</li>
                                        <li class="text-dark mb-2"><i
                                                class="fa fa-check-circle text-primary me-2"></i>Septic shock</li>
                                        <li class="text-dark mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Death
                                            if not treated quickly</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Signs and Symptoms -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-exclamation-triangle me-2 text-primary"></i>
                                    Causes
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#sepsisAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>High fever or
                                            very low body temperature</li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Heart rate
                                            higher than 90 beats per minute</li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Rapid breathing
                                            (more than 20 breaths per minute)</li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Confusion or
                                            disorientation</li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Extreme pain or
                                            discomfort</li>
                                        <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i>Sweaty or
                                            clammy skin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                    <i class="fa fa-vial me-2 text-primary"></i>
                                    Tests
                                </button>
                            </h2>

                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#sepsisAccordion">

                                <div class="accordion-body">
                                    <ul class="list-unstyled">

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Blood tests to detect infection
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Urine tests for bacterial infection
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Chest X-ray to identify lung infection
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            CT scan or ultrasound imaging
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Oxygen level and blood pressure monitoring
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Culture tests to identify bacteria or viruses
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                                    <i class="fa fa-medkit me-2 text-primary"></i>
                                    Treatment
                                </button>
                            </h2>

                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#sepsisAccordion">

                                <div class="accordion-body">
                                    <ul class="list-unstyled">

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Early administration of antibiotics
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Intravenous (IV) fluids for hydration
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Oxygen therapy and breathing support
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Blood pressure monitoring and medications
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Intensive care support for severe cases
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-primary me-2"></i>
                                            Treatment of the underlying infection source
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                                    <i class="fa fa-heartbeat me-2 text-primary"></i>
                                    Do’s & Don’ts
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#sepsisAccordion">

                                <div class="accordion-body">

                                    <h6 class="fw-bold text-success mb-3">Do’s</h6>

                                    <ul class="list-unstyled mb-4">

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-success me-2"></i>
                                            Seek immediate medical attention for infection symptoms
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-success me-2"></i>
                                            Maintain proper hygiene and wound care
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-success me-2"></i>
                                            Follow prescribed medications regularly
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-success me-2"></i>
                                            Monitor fever, breathing, and blood pressure
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-check-circle text-success me-2"></i>
                                            Keep regular follow-up with healthcare professionals
                                        </li>

                                    </ul>

                                    <h6 class="fw-bold text-danger mb-3">Don’ts</h6>

                                    <ul class="list-unstyled">

                                        <li class="mb-2">
                                            <i class="fa fa-times-circle text-danger me-2"></i>
                                            Do not ignore signs of severe infection
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-times-circle text-danger me-2"></i>
                                            Avoid self-medication without doctor advice
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-times-circle text-danger me-2"></i>
                                            Do not delay emergency treatment
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-times-circle text-danger me-2"></i>
                                            Avoid unhygienic conditions and untreated wounds
                                        </li>

                                        <li class="mb-2">
                                            <i class="fa fa-times-circle text-danger me-2"></i>
                                            Do not stop antibiotics without medical guidance
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Sepsis Accordion End -->
    


    <!-- Appointment Start -->
    <div class="container-fluid my-5 py-5" id="jointheregistry" style="background-color: #1e3a8a;">
        <div class="container-fluid py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5  bbr-10">Join the
                            Registry</h5>
                        <h1 class="display-4 text-white">Be A Part Of Our Healthcare Mission</h1>
                    </div>
                    <p class="text-white mb-5">Join the PAR-BHARGAVI Registry to support better healthcare awareness,
                        research studies, and patient care initiatives. Our mission is to create a healthier community
                        through early detection, medical education, and advanced healthcare services. Together, we can
                        improve lives by promoting quality treatment, compassionate care, and medical excellence for every
                        family.</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="#!">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Join Today</h1>
                        <form id="joinForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6 d-flex flex-column align-items-start">
                                    <label for="name" class="ms-1 text-start"><b>Do you have hospital records saying
                                            diagnosis as sepsis? <span class="text-danger">*</span></b></label>
                                    <div class="d-flex gap-4 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sepsis_diagnosis"
                                                id="sepsis_yes" value="1" required>
                                            <label class="form-check-label" for="sepsis_yes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sepsis_diagnosis"
                                                id="sepsis_no" value="2">
                                            <label class="form-check-label" for="sepsis_no">No</label>
                                        </div>
                                        <div class="invalid-feedback">Please select an option.</div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-column align-items-start">
                                    <label for="name" class="ms-1 text-start"><b>Are you consenting to share then with our
                                            research team <span class="text-danger">*</span></b></label>
                                    <div class="d-flex gap-4 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="consent_share"
                                                id="consent_yes" value="1" required>
                                            <label class="form-check-label" for="consent_yes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="consent_share"
                                                id="consent_no" value="2">
                                            <label class="form-check-label" for="consent_no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 d-flex flex-column align-items-start">
                                    <label for="name" class="ms-1"><b>Name <span class="text-danger">*</span></b></label>
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        id="userName" name="name" required style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-column align-items-start">
                                    <label for="email" class="ms-1"><b>Email <span class="text-danger">*</span></b></label>
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        id="userEmail" name="email" required style="height: 55px;">
                                </div>

                                <div class="d-flex flex-column ">
                                    <button class="btn btn-primary  py-2" type="submit">Join Today</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5" id="participatinghospitals">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 bbr-10 new-color">Participating
                    Hospitals</h5>
                <h1 class="display-4"> Trusted Healthcare Partners & Medical Institutions</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('frontend/img/victoryhospital.png')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <div class="text-center d-flex flex-column align-items-center">

                                <img src="{{asset('frontend/img/miniLogo.jpg')}}" alt=""
                                    class="img-fluid1 new-bg-color rounded-top" width="50%">


                                <h3 class="text-white">Victory Hospital</h3>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('frontend/img/kimshospital.png')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <div class="text-center d-flex flex-column align-items-center">

                                <img src="{{asset('frontend/img/miniLogo.jpg')}}" alt=""
                                    class="img-fluid1 new-bg-color rounded-top" width="50%">


                                <h3 class="text-white">MS Ramiah Memorial</h3>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('frontend/img/victoryhospital.png')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <div class="text-center d-flex flex-column align-items-center">

                                <img src="{{asset('frontend/img/miniLogo.jpg')}}" alt=""
                                    class="img-fluid1 new-bg-color rounded-top" width="50%">


                                <h3 class="text-white">MS Ramiah Memorial</h3>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('frontend/img/victoryhospital.png')}}" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                            style="background: rgba(29, 42, 77, .8);">
                            <div class="text-center d-flex flex-column align-items-center">
                                <img src="{{asset('frontend/img/miniLogo.jpg')}}" alt=""
                                    class="img-fluid1 new-bg-color rounded-top" width="50%">
                                <h3 class="text-white">MS Ramiah Memorial</h3>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->





    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5" id="testimonial-1">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 bbr-10 new-color">Testimonial
                </h5>
                <h1 class="display-4">Patients Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="https://www.clipartmax.com/png/full/144-1442578_flat-person-icon-download-dummy-man.png"
                                    alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary" style="color:#1e3a8a !important"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Sagar</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="https://www.clipartmax.com/png/full/144-1442578_flat-person-icon-download-dummy-man.png"
                                    alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary" style="color:#1e3a8a !important"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Test</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="https://www.clipartmax.com/png/full/144-1442578_flat-person-icon-download-dummy-man.png"
                                    alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary" style="color:#1e3a8a !important"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Sagar</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        } else {
                            event.preventDefault()
                            event.stopPropagation()

                            Swal.fire({
                                title: 'Thank You!',
                                text: 'Thank you for registering with PAR-BHARGAVI. Our healthcare team will contact you shortly.',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#1e3a8a'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    form.reset()
                                    form.classList.remove('was-validated')
                                }
                            })
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

@endsection
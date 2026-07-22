@extends('admin.layout.app')
@section('title') Dashboard @endsection
@section('style')

<link rel="stylesheet" href="{{ asset('frontend/css/dashboard.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
@section('content')

<div class="dashboard-page">

    <!-- ===================== TOP TOOLBAR ===================== -->

    <div class="dashboard-toolbar">

    <!-- Left Space -->
    <div class="toolbar-left"></div>

    <!-- Center -->
    <div class="toolbar-center">

        <div class="toolbar-date">
            <i class="fas fa-calendar-alt"></i>
            <input type="text"
                   id="daterange"
                   value="01 May 2025 - 31 May 2025"
                   readonly>
        </div>

        <button class="toolbar-btn">
            <i class="fas fa-download"></i>
            Download Report
        </button>

    </div>

    <!-- Right -->
    <div class="toolbar-right">

        <div class="last-updated">
            <span>Last Updated:</span>
            <strong>31 May 2025 10:30 AM</strong>
        </div>

        <button class="refresh-btn" id="refreshDashboard">
            <i class="fas fa-sync-alt"></i>
        </button>

    </div>

</div>
 <!-- ================= FILTERS ================= -->
    <div class="dashboard-filter-card">

    <div class="dashboard-filter-grid">

        <div class="filter-box">
            <label><i class="bi bi-hospital"></i> Hospital</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-building"></i> ICU Type</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-calendar3"></i> Date Range</label>
            <input type="date" class="form-control">
        </div>

        <div class="filter-box">
            <label><i class="bi bi-gender-ambiguous"></i> Gender</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-person"></i> Age Group</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-heart-pulse"></i> Outcome</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-bug"></i> Organism</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-shield-check"></i> MDRO Status</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-activity"></i> SOFA Score</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-capsule"></i> Antibiotic</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-box">
            <label><i class="bi bi-heartbreak"></i> Organ Dysfunction</label>
            <select class="form-select">
                <option>All</option>
            </select>
        </div>

        <div class="filter-buttons">

            <button class="btn btn-primary">
                <i class="bi bi-funnel"></i>
                Apply
            </button>

            <button class="btn btn-light">
                <i class="bi bi-arrow-clockwise"></i>
                
            </button>

        </div>

    </div>

</div>
        <!-- =========================================================
     COMPACT KPI CARDS
     8 CARDS / 4 PER ROW
========================================================= -->

<div class="dashboard-kpi-grid">

    <div class="dashboard-kpi-card kpi-blue">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-users"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Total Patients</span>
            <span class="dashboard-kpi-value">512</span>
            <span class="dashboard-kpi-info">
                <i class="fas fa-arrow-up"></i>100%
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-green">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-procedures"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Active ICU Patients</span>
            <span class="dashboard-kpi-value">178</span>
            <span class="dashboard-kpi-info">
                <i class="fas fa-arrow-up"></i>34.77%
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-red">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-check-circle"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Discharged Patients</span>
            <span class="dashboard-kpi-value">276</span>
            <span class="dashboard-kpi-info">
                <i class="fas fa-arrow-up"></i>53.91%
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-orange">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-heartbeat"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Deaths</span>
            <span class="dashboard-kpi-value">58</span>
            <span class="dashboard-kpi-info">
                <i class="fas fa-arrow-up"></i>11.33%
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-purple">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-percent"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Mortality Rate</span>
            <span class="dashboard-kpi-value">11.33%</span>
            <span class="dashboard-kpi-info">
                Deaths / Total
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-cyan">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-user"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Average Age</span>
            <span class="dashboard-kpi-value">57.6</span>
            <span class="dashboard-kpi-info">
                Years
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-pink">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-venus-mars"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Male : Female</span>
            <span class="dashboard-kpi-value">312 : 200</span>
            <span class="dashboard-kpi-info">
                60.94% : 39.06%
            </span>
        </div>
    </div>

    <div class="dashboard-kpi-card kpi-dark">
        <div class="dashboard-kpi-icon">
            <i class="fas fa-calendar-alt"></i>
        </div>

        <div class="dashboard-kpi-content">
            <span class="dashboard-kpi-label">Avg Length of Stay</span>
            <span class="dashboard-kpi-value">7.6</span>
            <span class="dashboard-kpi-info">
                Days
            </span>
        </div>
    </div>

</div>

           
            <!-- ===================== CHART SECTION row 1===================== -->


<!-- =======================
DASHBOARD ANALYTICS ROW
======================= -->

<div class="analytics-grid">

    <!-- Admissions Trend -->

    <div class="analytics-card analytics-wide">

        <div class="card-head">

            <h6>ADMISSIONS TREND</h6>

            <select class="trend-select">
                <option>Daily</option>
            </select>

        </div>

        <canvas id="admissionChart"></canvas>

    </div>


    <!-- Gender -->

    <div class="analytics-card">

        <h6>GENDER DISTRIBUTION</h6>

        <div class="chart-flex">

            <div class="pie-wrap">

                <canvas id="genderChart"></canvas>

                <div class="chart-center">

                    <strong>512</strong>

                    <span>Total</span>

                </div>

            </div>

            <div class="legend-list">

                <div>

                    <span class="dot blue"></span>

                    Male

                    <strong>312 (60.94%)</strong>

                </div>

                <div>

                    <span class="dot pink"></span>

                    Female

                    <strong>200 (39.06%)</strong>

                </div>

            </div>

        </div>

    </div>


    <!-- Age -->

    <div class="analytics-card">

        <h6>AGE DISTRIBUTION</h6>

        <canvas id="ageChart"></canvas>

    </div>


    <!-- Outcome -->

    <div class="analytics-card">

        <h6>OUTCOME DISTRIBUTION</h6>

        <div class="chart-flex">

            <div class="pie-wrap">

                <canvas id="outcomeChart"></canvas>

                <div class="chart-center">

                    <strong>512</strong>

                    <span>Total</span>

                </div>

            </div>

            <div class="legend-list">

                <div>

                    <span class="dot green"></span>

                    Improved

                    <strong>172 (33.59%)</strong>

                </div>

                <div>

                    <span class="dot blue"></span>

                    Discharged

                    <strong>276 (53.91%)</strong>

                </div>

                <div>

                    <span class="dot orange"></span>

                    Referred

                    <strong>6 (1.17%)</strong>

                </div>

                <div>

                    <span class="dot red"></span>

                    Expired

                    <strong>58 (11.33%)</strong>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="clinical-section">

    <!-- Sepsis -->
    <div class="dashboard-card sepsis-card">

        <h5 class="section-title">SEPSIS CLASSIFICATION</h5>

                <div class="sepsis-grid">

                    <div class="sepsis-box">
                        <h6>SIRS CRITERIA</h6>
                        <h2>362</h2>
                        <p>(70.70%)</p>
                    </div>

                    <div class="sepsis-box green">
                        <h6>SEPSIS</h6>
                        <h2>244</h2>
                        <p>(47.66%)</p>
                    </div>

                    <div class="sepsis-box orange">
                        <h6>SEVERE SEPSIS</h6>
                        <h2>134</h2>
                        <p>(26.17%)</p>
                    </div>

                    <div class="sepsis-box red">
                        <h6>SEPTIC SHOCK</h6>
                        <h2>86</h2>
                        <p>(16.80%)</p>
                    </div>

                </div>

    </div>

            <!-- ================= Clinical Overview ================= -->

    <div class="dashboard-card clinical-card">

        <h5 class="section-title">
            CLINICAL OVERVIEW
        </h5>

        <div class="clinical-grid">


                    <!-- Card 1 -->

                    <div class="clinical-box">

                        <small>AVG SOFA SCORE</small>

                        <h2>6.8</h2>

                        <small>Average</small>

                        <canvas id="sofaSpark"></canvas>

                    </div>

                    <!-- Card 2 -->

                    <div class="clinical-box">

                        <small>SOFA SCORE &gt; 10</small>

                        <h2>92</h2>

                        <small>(17.97%)</small>

                        <canvas id="sofaHighSpark"></canvas>

                    </div>

                    <!-- Card 3 -->

                    <div class="clinical-box">

                        <small>AVG LACTATE</small>

                        <h2>2.8</h2>

                        <small>mmol/L</small>

                        <canvas id="lactateSpark"></canvas>

                    </div>

                    <!-- Card 4 -->

                    <div class="clinical-box">

                        <small>LACTATE &gt; 4</small>

                        <h2>74</h2>

                        <small>(14.45%)</small>

                        <canvas id="lactateHighSpark"></canvas>

                    </div>

                </div>

            </div>

            <!-- ================= ORGAN DYSFUNCTION ================= -->

  <div class="dashboard-card organ-card">

        <div class="card-header-custom">

            <div>

                <h5>ORGAN DYSFUNCTION</h5>

                <small>(No. of Patients)</small>

            </div>

        </div>

        <canvas id="organChart"></canvas>

    </div>

</div>

            <!-- ==================== SECOND ANALYTICS ROW ==================== -->


            <div class="sepsis-next-grid">

                <!-- =====================================================
         SOURCE OF INFECTION
    ====================================================== -->

                <div class="sepsis-next-card">

                    <div class="sepsis-next-title">
                        SOURCE OF INFECTION
                    </div>

                    <div class="infection-chart-area">

                        <div class="infection-donut">

                            <canvas id="infectionSourceChart"></canvas>

                        </div>

                        <div class="infection-legend">

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-blue"></span>
                                <span>Lung</span>
                                <strong>176 (34.38%)</strong>
                            </div>

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-teal"></span>
                                <span>Abdomen</span>
                                <strong>98 (19.14%)</strong>
                            </div>

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-red"></span>
                                <span>Blood</span>
                                <strong>82 (16.02%)</strong>
                            </div>

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-orange"></span>
                                <span>Urinary</span>
                                <strong>64 (12.50%)</strong>
                            </div>

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-purple"></span>
                                <span>Skin / Soft Tissue</span>
                                <strong>48 (9.38%)</strong>
                            </div>

                            <div class="infection-legend-item">
                                <span class="infection-dot infection-gray"></span>
                                <span>Others</span>
                                <strong>44 (8.59%)</strong>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- =====================================================
         CULTURE RESULTS
    ====================================================== -->

                <div class="sepsis-next-card">

                    <div class="sepsis-next-title">
                        CULTURE RESULTS
                    </div>

                    <div class="culture-result-list">

                        <div class="culture-result-row">

                            <div class="culture-result-icon culture-red">
                                <i class="fa fa-droplet"></i>
                            </div>

                            <div class="culture-result-name">
                                Blood Culture Positive
                            </div>

                            <div class="culture-result-value">
                                <strong>124</strong>
                                <small>(24.22%)</small>
                            </div>

                        </div>


                        <div class="culture-result-row">

                            <div class="culture-result-icon culture-yellow">
                                <i class="fa fa-droplet"></i>
                            </div>

                            <div class="culture-result-name">
                                Urine Culture Positive
                            </div>

                            <div class="culture-result-value">
                                <strong>96</strong>
                                <small>(18.75%)</small>
                            </div>

                        </div>


                        <div class="culture-result-row">

                            <div class="culture-result-icon culture-green">
                                <i class="fa fa-lungs"></i>
                            </div>

                            <div class="culture-result-name">
                                Sputum Culture Positive
                            </div>

                            <div class="culture-result-value">
                                <strong>88</strong>
                                <small>(17.19%)</small>
                            </div>

                        </div>


                        <div class="culture-result-row">

                            <div class="culture-result-icon culture-purple">
                                <i class="fa fa-flask"></i>
                            </div>

                            <div class="culture-result-name">
                                Other Specimens Positive
                            </div>

                            <div class="culture-result-value">
                                <strong>64</strong>
                                <small>(12.50%)</small>
                            </div>

                        </div>


                        <div class="culture-result-row">

                            <div class="culture-result-icon culture-gray">
                                <i class="fa fa-xmark"></i>
                            </div>

                            <div class="culture-result-name">
                                Culture Negative
                            </div>

                            <div class="culture-result-value">
                                <strong>140</strong>
                                <small>(27.34%)</small>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- =====================================================
         TOP ORGANISMS
    ====================================================== -->

                <div class="sepsis-next-card">

                    <div class="sepsis-next-title">
                        TOP ORGANISMS
                    </div>

                    <div class="organism-chart-wrapper">

                        <canvas id="topOrganismsChart"></canvas>

                    </div>

                </div>


                <!-- =====================================================
         ANTIBIOTIC USAGE
    ====================================================== -->

                <div class="sepsis-next-card">

                    <div class="sepsis-next-title">
                        ANTIBIOTIC USAGE
                    </div>

                    <!-- Antibiotic KPI boxes -->

                    <div class="antibiotic-kpi-grid">

                        <div class="antibiotic-kpi green-kpi">

                            <small>≤ 1 Hr Antibiotics</small>

                            <strong>268</strong>

                            <span>(52.34%)</span>

                        </div>


                        <div class="antibiotic-kpi blue-kpi">

                            <small>Broad Spectrum</small>

                            <strong>276</strong>

                            <span>(53.91%)</span>

                        </div>


                        <div class="antibiotic-kpi orange-kpi">

                            <small>Escalated</small>

                            <strong>94</strong>

                            <span>(18.36%)</span>

                        </div>


                        <div class="antibiotic-kpi purple-kpi">

                            <small>De-escalated</small>

                            <strong>122</strong>

                            <span>(23.83%)</span>

                        </div>

                    </div>


                    <!-- Prescribed Antibiotics -->

                    <div class="antibiotic-subtitle">

                        TOP PRESCRIBED ANTIBIOTICS

                    </div>

                    <div class="antibiotic-chart-wrapper">

                        <canvas id="antibioticChart"></canvas>

                    </div>

                </div>

            </div>

            <!-- =========================================================
     FINAL DASHBOARD SECTION
     2 CARDS PER ROW
========================================================= -->

            <div class="sepsis-bottom-grid">


                <!-- =====================================================
         LABORATORY TRENDS
    ====================================================== -->

                <div class="sepsis-bottom-card">

                    <div class="sepsis-bottom-title">

                        LABORATORY TRENDS

                        <span>(Average Values)</span>

                    </div>


                    <!-- Chart -->

                    <div class="lab-trend-chart">

                        <canvas id="laboratoryTrendChart"></canvas>

                    </div>

                </div>


                <!-- =====================================================
         OUTCOME SUMMARY
    ====================================================== -->

                <div class="sepsis-bottom-card">

                    <div class="sepsis-bottom-title">

                        OUTCOME SUMMARY

                    </div>


                    <div class="outcome-summary-layout">


                        <!-- Doughnut -->

                        <div class="outcome-summary-chart">

                            <canvas id="outcomeSummaryChart"></canvas>

                        </div>


                        <!-- Legend -->

                        <div class="outcome-summary-legend">


                            <div class="outcome-summary-item">

                                <span class="outcome-summary-dot outcome-green"></span>

                                <div>

                                    <strong>Improved</strong>

                                    <small>172 (33.59%)</small>

                                </div>

                            </div>


                            <div class="outcome-summary-item">

                                <span class="outcome-summary-dot outcome-blue"></span>

                                <div>

                                    <strong>Discharged</strong>

                                    <small>276 (53.91%)</small>

                                </div>

                            </div>


                            <div class="outcome-summary-item">

                                <span class="outcome-summary-dot outcome-orange"></span>

                                <div>

                                    <strong>Referred</strong>

                                    <small>6 (1.17%)</small>

                                </div>

                            </div>


                            <div class="outcome-summary-item">

                                <span class="outcome-summary-dot outcome-red"></span>

                                <div>

                                    <strong>Expired</strong>

                                    <small>58 (11.33%)</small>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>


                <!-- =====================================================
         PATIENT JOURNEY
    ====================================================== -->

                <div class="sepsis-bottom-card">

                    <div class="sepsis-bottom-title">

                        PATIENT JOURNEY

                        <span>(Average Times)</span>

                    </div>


                    <!-- Journey Icons -->

                    <div class="patient-journey-flow">


                        <div class="journey-step">

                            <div class="journey-icon journey-blue">

                                <i class="fa fa-user"></i>

                            </div>

                            <span>Admission</span>

                        </div>


                        <div class="journey-arrow">

                            <i class="fa fa-arrow-right"></i>

                        </div>


                        <div class="journey-step">

                            <div class="journey-icon journey-green">

                                <i class="fa fa-clipboard-list"></i>

                            </div>

                            <span>Diagnosis</span>

                        </div>


                        <div class="journey-arrow">

                            <i class="fa fa-arrow-right"></i>

                        </div>


                        <div class="journey-step">

                            <div class="journey-icon journey-orange">

                                <i class="fa fa-flask"></i>

                            </div>

                            <span>Culture Sent</span>

                        </div>


                        <div class="journey-arrow">

                            <i class="fa fa-arrow-right"></i>

                        </div>


                        <div class="journey-step">

                            <div class="journey-icon journey-purple">

                                <i class="fa fa-pills"></i>

                            </div>

                            <span>Antibiotics<br>Started</span>

                        </div>


                        <div class="journey-arrow">

                            <i class="fa fa-arrow-right"></i>

                        </div>


                        <div class="journey-step">

                            <div class="journey-icon journey-red">

                                <i class="fa fa-heart-pulse"></i>

                            </div>

                            <span>Outcome</span>

                        </div>


                    </div>


                    <!-- Journey Time Cards -->

                    <div class="journey-time-grid">


                        <div class="journey-time-card">

                            <strong>1.2</strong>

                            <small>Days</small>

                            <span>

                                Admission to<br>

                                Diagnosis

                            </span>

                        </div>


                        <div class="journey-time-card">

                            <strong>2.6</strong>

                            <small>Hours</small>

                            <span>

                                Diagnosis to<br>

                                Antibiotics

                            </span>

                        </div>


                        <div class="journey-time-card">

                            <strong>1.8</strong>

                            <small>Days</small>

                            <span>

                                Culture to<br>

                                Report

                            </span>

                        </div>


                        <div class="journey-time-card">

                            <strong>7.6</strong>

                            <small>Days</small>

                            <span>

                                ICU Length<br>

                                of Stay

                            </span>

                        </div>


                    </div>

                </div>


                <!-- =====================================================
         HOSPITAL WISE PATIENTS
    ====================================================== -->

                <div class="sepsis-bottom-card">

                    <div class="sepsis-bottom-title">

                        HOSPITAL WISE PATIENTS

                    </div>


                    <div class="hospital-chart-wrapper">

                        <canvas id="hospitalWiseChart"></canvas>

                    </div>

                </div>


            </div>

        </main>

  

</div>


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('frontend/js/dashboard.js') }}"></script>

@endsection
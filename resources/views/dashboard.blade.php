

@extends('admin.layout.app')
@section('title') Dashboard @endsection
@section('style')

 <style>
    


        .dashboard {
                padding: 0px 25px;
        }



        /* header */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }


        .header h2 {
            font-weight: 700;
        }



        .card-box {

            background: white;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid #edf0f6;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);

            height: 100%;

        }




        /* cards */

        .icon {

            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;

        }


        .blue {
            background: #e8edff;
            color: #3867ff;
        }


        .green {
            background: #e5fff4;
            color: #18b77a;
        }


        .orange {
            background: #fff1dd;
            color: #ff9b21;
        }


        .pink {
            background: #ffe7ef;
            color: #ff4d88;
        }



        .title {
            font-size: 15px;
        }


        .number {

            font-size: 24px;
            font-weight: 700;

        }


        .up {

            font-size: 12px;
            color: #16b36a;

        }





        canvas {

            width: 100% !important;
            max-height: 220px;

        }




        .chart-card {

            min-height: 300px;

        }




        .activity {

            display: flex;
            gap: 12px;
            margin-bottom: 20px;

        }


        .activity-icon {

            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #edf4ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3165ff;
            flex-shrink: 0;

        }



        .table-responsive {

            overflow-x: auto;

        }



        table {

            min-width: 600px;

        }


        .status {

            background: #eaffdf;
            color: #18a45c;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;

        }






        /* RESPONSIVE */


        @media(max-width:992px) {


            .dashboard {
                padding: 15px;
            }


        }



        @media(max-width:768px) {


            .header {

                flex-direction: column;
                align-items: flex-start;

            }



            .card-box {

                padding: 15px;

            }


            .number {

                font-size: 20px;

            }


            .chart-card {

                min-height: auto;

            }


        }



        @media(max-width:576px) {


            .dashboard {

                padding: 10px;

            }


            .row {

                --bs-gutter-x: 12px;

            }


            .icon {

                width: 38px;
                height: 38px;
                font-size: 15px;

            }



            .card-box {

                border-radius: 12px;

            }



            h2 {

                font-size: 22px;

            }



        }
        .table-responsive{
    overflow-x:auto;
    scrollbar-width: thin;          /* Firefox */
    scrollbar-color: #b8c2d8 transparent;
}


/* Chrome, Edge, Safari */

.table-responsive::-webkit-scrollbar{
    height:5px;   /* horizontal scrollbar height */
}


.table-responsive::-webkit-scrollbar-track{
    background:transparent;
}


.table-responsive::-webkit-scrollbar-thumb{
    background:#b8c2d8;
    border-radius:20px;
}


.table-responsive::-webkit-scrollbar-thumb:hover{
    background:#7d8aa8;
}
    </style>


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
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"> Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


   <div class="dashboard">


        <!-- TOP CARDS -->


        <div class="row g-3">



            <div class="col-12 col-sm-6 col-xl-4">

                <div class="card-box">


                    <div class="d-flex gap-3">


                        <div class="icon blue">
                            <i class="fa fa-users"></i>
                        </div>


                        <div>

                            <div class="title">
                               <b> Total Patients</b>
                            </div>


                            <div class="number">
                                1,248
                            </div>


                            <div class="up">
                                +12.5% from last month ↑
                            </div>


                        </div>


                    </div>


                    <canvas id="mini1"></canvas>


                </div>

            </div>







            <div class="col-12 col-sm-6 col-xl-4">

                <div class="card-box">


                    <div class="d-flex gap-3">

                        <div class="icon green">
                            <i class="fa fa-user-doctor"></i>
                        </div>


                        <div>

                            <div class="title">
                                <b>Total Hospital</b>
                            </div>

                            <div class="number">
                                86
                            </div>


                            <div class="up">
                                +8.3% from last month ↑
                            </div>

                        </div>


                    </div>


                    <canvas id="mini2"></canvas>


                </div>

            </div>







            <div class="col-12 col-sm-6 col-xl-4">

                <div class="card-box">


                    <div class="d-flex gap-3">

                        <div class="icon orange">
                            <i class="fa fa-calendar"></i>
                        </div>


                        <div>

                            <div class="title">
                                <b>Total Registered Hospitals</b>
                            </div>

                            <div class="number">
                                64
                            </div>


                            <div class="up">
                                +15.2% yesterday ↑
                            </div>


                        </div>


                    </div>


                    <canvas id="mini3"></canvas>


                </div>

            </div>






           



        </div>









        <!-- CHART ROW -->


        <div class="row g-3 mt-1">



            <div class="col-12 col-xl-6">

                <div class="card-box chart-card">

                    <h6><b>Patients Overview</b></h6>

                    <canvas id="line"></canvas>

                </div>


            </div>






            <div class="col-12 col-md-6 col-xl-3">

                <div class="card-box chart-card">


                    <h6><b>Patient by Gender</b></h6>


                    <canvas id="donut"></canvas>


                </div>


            </div>






            <div class="col-12 col-md-6 col-xl-3">


                <div class="card-box chart-card">


                    <h6><b>Latest Activities</b></h6>



                    <div class="activity">

                        <div class="activity-icon">
                            <i class="fa fa-user"></i>
                        </div>

                        <div>

                            <b>New patient John Doe</b>

                            <br>

                            <small>Registered successfully</small>

                        </div>

                    </div>





                    <div class="activity">

                        <div class="activity-icon">
                            <i class="fa fa-calendar"></i>
                        </div>


                        <div>

                            <b>Appointment scheduled</b>

                            <br>

                            <small>With Dr Smith</small>

                        </div>


                    </div>





                    <div class="activity">

                        <div class="activity-icon">
                            <i class="fa fa-flask"></i>
                        </div>


                        <div>

                            <b>Lab test completed</b>

                            <br>

                            <small>Blood Test #BT1245</small>

                        </div>

                    </div>




                </div>


            </div>


        </div>









        <!-- TABLES -->


        <div class="row g-3 mt-1 mb-4">



            <div class="col-12 col-xl-12">


                <div class="card-box">


                    <h6><b>Recent Patients</b></h6>


                    <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center align-middle" id="data-source-1"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th style="width:5%">Sl.No</th>
                                <th style="white-space:nowrap">Patient Name</th>
                                <th style="white-space:nowrap">Age</th>
                                <th style="white-space:nowrap">Gander</th>
                                <th style="white-space:nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                             <tr>

                                <td>PT001248</td>
                                <td>John Doe</td>
                                <td>34</td>
                                <td>Male</td>
                                <td>
                                    <span class="status">Active</span>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>


                </div>


            </div>



        </div>



    </div>

@endsection

@section('script')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>


        function mini(id, color) {


            new Chart(document.getElementById(id), {

                type: "line",

                data: {

                    labels: [1, 2, 3, 4, 5, 6],

                    datasets: [{

                        data: [4, 8, 5, 9, 6, 10],

                        borderColor: color,

                        tension: .4,

                        pointRadius: 0

                    }]

                },


                options: {

                    plugins: {
                        legend: {
                            display: false
                        }
                    },

                    scales: {

                        x: {
                            display: false
                        },

                        y: {
                            display: false
                        }

                    }

                }


            })


        }


        mini("mini1", "#4267ff");
        mini("mini2", "#16b77a");
        mini("mini3", "#ff9d22");
        mini("mini4", "#ff4d88");





        new Chart(line, {

            type: "line",

            data: {

                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],

                datasets: [{

                    data: [32, 50, 68, 45, 86, 62, 91],

                    borderColor: "#3265ff",

                    fill: true,

                    tension: .3

                }]

            },

            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }

        });






        new Chart(donut, {

            type: "doughnut",

            data: {

                labels: ["Male", "Female"],

                datasets: [{

                    data: [652, 596]

                }]

            },

            options: {

                cutout: "65%",

                plugins: {

                    legend: {

                        position: "right"

                    }

                }

            }

        });


    </script>
@endsection









//backup of new dashboard
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

        <div>

            <h2 class="dashboard-heading">
                Sepsis Surveillance Dashboard
            </h2>

            <p class="dashboard-subtitle">
                Real-time Clinical Analytics
            </p>

        </div>

        <div class="toolbar-actions">

            <input type="date" class="form-control">

            <button class="btn btn-primary">

                <i class="fa fa-download"></i>

                Export

            </button>

            <button class="btn btn-outline-primary">

                <i class="fa fa-rotate-right"></i>

            </button>

        </div>

    </div>

    <!-- ===================== MAIN GRID ===================== -->

    <div class="dashboard-grid">

        <!-- ================= FILTERS ================= -->

        <aside class="filter-panel">

            <div class="panel-card">

                <h5 class="panel-title">

                    Dashboard Filters

                </h5>

                <div class="mb-3">

                    <label class="form-label">

                        Hospital

                    </label>

                    <select class="form-select">

                        <option>All Hospitals</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        ICU

                    </label>

                    <select class="form-select">

                        <option>All ICU</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Gender

                    </label>

                    <select class="form-select">

                        <option>All</option>

                        <option>Male</option>

                        <option>Female</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Age Group

                    </label>

                    <select class="form-select">

                        <option>All</option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Date Range

                    </label>

                    <input type="date" class="form-control">

                </div>

                <button class="btn btn-primary w-100">

                    Apply Filters

                </button>

            </div>

        </aside>

        <!-- ================= CONTENT ================= -->

        <main class="dashboard-content">

        <!-- =========================================================
     COMPACT KPI CARDS
     8 CARDS / 4 PER ROW
========================================================= -->

<div class="dashboard-kpi-grid">

    <!-- 1. Total Patients -->
    <div class="dashboard-kpi-card kpi-blue">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-users"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Total Patients
            </span>

            <strong class="dashboard-kpi-value">
               454
            </strong>

            <small class="dashboard-kpi-info">
                <i class="fa fa-arrow-up"></i>
                100% 
            </small>

        </div>

    </div>


    <!-- 2. ICU Patients -->
    <div class="dashboard-kpi-card kpi-green">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-bed"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Active ICU Patients
            </span>

            <strong class="dashboard-kpi-value">
                178
            </strong>

            <small class="dashboard-kpi-info">
                <i class="fa fa-arrow-up"></i>
                32.77%
            </small>

        </div>

    </div>


    <!-- 3. Critical -->
    <div class="dashboard-kpi-card kpi-orange">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-heart-pulse"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Discharged Patients
            </span>

            <strong class="dashboard-kpi-value">
                276
            </strong>

            <small class="dashboard-kpi-info">
                53.91%
            </small>

        </div>

    </div>


    <!-- 4. Discharged -->
    <div class="dashboard-kpi-card kpi-red">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-user-check"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Deaths
            </span>

            <strong class="dashboard-kpi-value">
                58
            </strong>

            <small class="dashboard-kpi-info">
               11.33%
            </small>

        </div>

    </div>


    <!-- 5. Male -->
    <div class="dashboard-kpi-card kpi-cyan">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-mars"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Mortality Rate
            </span>

            <strong class="dashboard-kpi-value">
                11.33%
            </strong>

            <small class="dashboard-kpi-info">
                Deaths/Total
            </small>

        </div>

    </div>


    <!-- 6. Female -->
    <div class="dashboard-kpi-card kpi-pink">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-venus"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Average Age
            </span>

            <strong class="dashboard-kpi-value">
                57.6
            </strong>

            <small class="dashboard-kpi-info">
                Years
            </small>

        </div>

    </div>


    <!-- 7. Average Stay -->
    <div class="dashboard-kpi-card kpi-purple">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-clock"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
             Male:Female
            </span>

            <strong class="dashboard-kpi-value">
               312:200
            </strong>

            <small class="dashboard-kpi-info">
               60.94%:39.06%
            </small>

        </div>

    </div>


    <!-- 8. Hospitals -->
    <div class="dashboard-kpi-card kpi-dark">

        <div class="dashboard-kpi-icon">
            <i class="fa fa-hospital"></i>
        </div>

        <div class="dashboard-kpi-content">

            <span class="dashboard-kpi-label">
                Average Length of Stay
            </span>

            <strong class="dashboard-kpi-value">
                7.6
            </strong>

            <small class="dashboard-kpi-info">
                Days
            </small>

        </div>

    </div>

</div>

            <!-- KPI GRID -->

            <!-- <div class="kpi-grid">

                <div class="kpi-card blue">
                    <div class="kpi-top">
                        <div class="kpi-icon"><i class="fa fa-users"></i></div>
                        <span class="trend up">+8.5%</span>
                    </div>

                    <div class="kpi-value">12,548</div>
                    <div class="kpi-title">Total Patients</div>
                    <div class="kpi-footer">
                        <small>Updated Today</small>
                    </div>
                </div>

                <div class="kpi-card green">
                    <div class="kpi-top">
                        <div class="kpi-icon"><i class="fa fa-bed"></i></div>
                        <span class="trend up">+3%</span>
                    </div>

                    <div class="kpi-value">356</div>
                    <div class="kpi-title">ICU Patients</div>
                    <div class="kpi-footer">
                        <small>Currently Admitted</small>
                    </div>
                </div>

                <div class="kpi-card orange">
                    <div class="kpi-top">
                        <div class="kpi-icon"><i class="fa fa-heart-pulse"></i></div>
                        <span class="trend down">-2%</span>
                    </div>

                    <div class="kpi-value">92</div>
                    <div class="kpi-title">Critical Cases</div>
                    <div class="kpi-footer">
                        <small>SOFA ≥ 8</small>
                    </div>
                </div>

                <div class="kpi-card red">
                    <div class="kpi-top">
                        <div class="kpi-icon"><i class="fa fa-user-check"></i></div>
                        <span class="trend up">+12%</span>
                    </div>

                    <div class="kpi-value">804</div>
                    <div class="kpi-title">Recovered</div>
                    <div class="kpi-footer">
                        <small>Discharged</small>
                    </div>
                </div>

            </div> -->
            <!-- FIRST ROW -->

            <!-- ===================== CHART SECTION ===================== -->

            <div class="analytics-grid">

                <!-- Admission Trend -->
                <div class="dashboard-card card-lg">

                    <div class="card-header-custom">
                        <div>
                            <h5>Admission Trend</h5>
                            <small>Monthly Admissions</small>
                        </div>

                        <button class="btn btn-light btn-sm">
                            Monthly
                        </button>
                    </div>

                    <canvas id="admissionChart"></canvas>

                </div>

                <!-- Gender -->
                <div class="dashboard-card">

                    <div class="card-header-custom">
                        <div>
                            <h5>Gender Distribution</h5>
                            <small>Current Patients</small>
                        </div>
                    </div>

                    <canvas id="genderChart"></canvas>

                </div>

                <!-- Age -->
                <div class="dashboard-card">

                    <div class="card-header-custom">
                        <div>
                            <h5>Age Group</h5>
                            <small>Distribution</small>
                        </div>
                    </div>

                    <canvas id="ageChart"></canvas>

                </div>

                <!-- Outcome -->
                <div class="dashboard-card">

                    <div class="card-header-custom">
                        <div>
                            <h5>Patient Outcome</h5>
                            <small>Overall Status</small>
                        </div>
                    </div>

                    <canvas id="outcomeChart"></canvas>

                </div>



            </div>


            <div class="dashboard-card">

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

            <div class="dashboard-card">

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

            <div class="dashboard-card">

                <div class="card-header-custom">

                    <div>

                        <h5>ORGAN DYSFUNCTION</h5>

                        <small>(No. of Patients)</small>

                    </div>

                </div>

                <canvas id="organChart"></canvas>

            </div>

            <!-- ==================== SECOND ANALYTICS ROW ==================== -->

            <!-- =========================================================
     NEXT ANALYTICS SECTION
     2 CARDS PER ROW
========================================================= -->

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

</div>


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('frontend/js/dashboard.js') }}"></script>

@endsection
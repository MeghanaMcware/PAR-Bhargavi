

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

<style>
    /* ===========================
   DASHBOARD LAYOUT
=========================== */

    .dashboard-page {
        padding: 20px;
        background: #f5f7fb;
        min-height: 100vh;
    }

    .dashboard-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        gap: 20px;
    }

    .dashboard-heading {
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }

    .dashboard-subtitle {
        color: #6b7280;
        margin-top: 6px;
    }

    .toolbar-actions {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .toolbar-actions input {
        width: 180px;
    }

    /* ===========================
   MAIN GRID
=========================== */

    .dashboard-grid {

        display: grid;

        grid-template-columns: 280px minmax(0, 1fr);

        gap: 22px;

        align-items: start;

    }

    /* ===========================
   FILTER PANEL
=========================== */

    .filter-panel {

        position: sticky;

        top: 90px;

    }

    .panel-card {

        background: #fff;

        border-radius: 18px;

        padding: 22px;

        box-shadow: 0 10px 25px rgba(0, 0, 0, .05);

    }

    .panel-title {

        font-weight: 700;

        margin-bottom: 20px;

    }

    /* ===========================
   RIGHT CONTENT
=========================== */

    .dashboard-content {

        display: flex;

        flex-direction: column;

        gap: 22px;

        min-width: 0;

    }
/* 
    .kpi-grid {

        display: grid;

        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));

        gap: 20px;

    }

    .kpi-card {

        border-radius: 18px;

        padding: 22px;

        color: #fff;

        position: relative;

        overflow: hidden;

        min-height: 150px;

        box-shadow: 0 10px 25px rgba(0, 0, 0, .12);

        transition: .3s;

    }

    .kpi-card:hover {

        transform: translateY(-6px);

    }

    .blue {

        background: linear-gradient(135deg, #2563eb, #60a5fa);

    }

    .green {

        background: linear-gradient(135deg, #16a34a, #4ade80);

    }

    .orange {

        background: linear-gradient(135deg, #ea580c, #fbbf24);

    }

    .red {

        background: linear-gradient(135deg, #dc2626, #f87171);

    }

    .kpi-top {

        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 25px;

    }

    .kpi-icon {

        width: 55px;

        height: 55px;

        border-radius: 50%;

        background: rgba(255, 255, 255, .2);

        display: flex;

        justify-content: center;

        align-items: center;

        font-size: 24px;

    }

    .kpi-value {

        font-size: 34px;

        font-weight: 700;

        margin-bottom: 6px;

    }

    .kpi-title {

        font-size: 16px;

        font-weight: 600;

    }

    .kpi-footer {

        margin-top: 15px;

        opacity: .9;

    }

    .trend {

        background: rgba(255, 255, 255, .2);

        padding: 4px 10px;

        border-radius: 20px;

        font-size: 13px;

    }

    .up {

        color: #d1fae5;

    }

    .down {

        color: #fee2e2;

    } */




        /* =========================================================
   COMPACT DASHBOARD KPI SECTION
   UNIQUE CLASSES - DOES NOT AFFECT OTHER SECTIONS
========================================================= */

.dashboard-kpi-grid {

    display: grid;

    grid-template-columns: repeat(4, minmax(0, 1fr));

    gap: 15px;

    width: 100%;

    margin-bottom: 20px;

}


/* =========================================================
   KPI CARD
========================================================= */

.dashboard-kpi-card {

    min-width: 0;

    min-height: 105px;

    padding: 16px;

    border-radius: 14px;

    display: flex;

    align-items: center;

    gap: 13px;

    color: #ffffff;

    position: relative;

    overflow: hidden;

    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);

    transition: all 0.25s ease;

}


/* Hover */

.dashboard-kpi-card:hover {

    transform: translateY(-3px);

    box-shadow: 0 9px 20px rgba(0, 0, 0, 0.12);

}


/* =========================================================
   KPI ICON
========================================================= */

.dashboard-kpi-icon {

    width: 44px;

    height: 44px;

    min-width: 44px;

    border-radius: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 19px;

    background: rgba(255, 255, 255, 0.20);

    border: 1px solid rgba(255, 255, 255, 0.15);

}


/* =========================================================
   KPI CONTENT
========================================================= */

.dashboard-kpi-content {

    min-width: 0;

    display: flex;

    flex-direction: column;

    justify-content: center;

}


.dashboard-kpi-label {

    display: block;

    font-size: 11px;

    font-weight: 500;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

    opacity: 0.95;

    margin-bottom: 3px;

}


.dashboard-kpi-value {

    display: block;

    font-size: 25px;

    line-height: 1.1;

    font-weight: 700;

    margin-bottom: 4px;

}


.dashboard-kpi-info {

    display: block;

    font-size: 9px;

    font-weight: 500;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

    opacity: 0.85;

}


.dashboard-kpi-info i {

    margin-right: 3px;

}


/* =========================================================
   KPI COLORS
========================================================= */

.kpi-blue {

    background: linear-gradient(
        135deg,
        #2563eb,
        #3b82f6
    );

}


.kpi-green {

    background: linear-gradient(
        135deg,
        #16a34a,
        #22c55e
    );

}


.kpi-orange {

    background: linear-gradient(
        135deg,
        #ea580c,
        #f97316
    );

}


.kpi-red {

    background: linear-gradient(
        135deg,
        #dc2626,
        #ef4444
    );

}


.kpi-cyan {

    background: linear-gradient(
        135deg,
        #0891b2,
        #06b6d4
    );

}


.kpi-pink {

    background: linear-gradient(
        135deg,
        #db2777,
        #ec4899
    );

}


.kpi-purple {

    background: linear-gradient(
        135deg,
        #7c3aed,
        #8b5cf6
    );

}


.kpi-dark {

    background: linear-gradient(
        135deg,
        #374151,
        #4b5563
    );

}


/* =========================================================
   RESPONSIVE - LARGE DESKTOP
========================================================= */

@media (max-width: 1400px) {

    .dashboard-kpi-grid {

        grid-template-columns: repeat(4, minmax(0, 1fr));

        gap: 12px;

    }

    .dashboard-kpi-card {

        padding: 14px;

    }

    .dashboard-kpi-icon {

        width: 40px;

        height: 40px;

        min-width: 40px;

        font-size: 17px;

    }

    .dashboard-kpi-value {

        font-size: 22px;

    }

}


/* =========================================================
   RESPONSIVE - TABLET / LAPTOP
========================================================= */

@media (max-width: 1100px) {

    .dashboard-kpi-grid {

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 15px;

    }

    .dashboard-kpi-card {

        min-height: 100px;

    }

}


/* =========================================================
   RESPONSIVE - MOBILE
========================================================= */

@media (max-width: 600px) {

    .dashboard-kpi-grid {

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 10px;

    }

    .dashboard-kpi-card {

        min-height: 92px;

        padding: 12px;

        gap: 9px;

        border-radius: 11px;

    }

    .dashboard-kpi-icon {

        width: 36px;

        height: 36px;

        min-width: 36px;

        border-radius: 9px;

        font-size: 15px;

    }

    .dashboard-kpi-label {

        font-size: 9px;

    }

    .dashboard-kpi-value {

        font-size: 20px;

    }

    .dashboard-kpi-info {

        font-size: 8px;

    }

}


/* =========================================================
   RESPONSIVE - VERY SMALL MOBILE
========================================================= */

@media (max-width: 380px) {

    .dashboard-kpi-grid {

        grid-template-columns: 1fr;

    }

    .dashboard-kpi-card {

        min-height: 85px;

    }

}

    /* ======================
   ANALYTICS GRID
======================*/

    .analytics-grid {

        display: grid;

        grid-template-columns: 2fr 1fr;

        gap: 20px;

    }

    /* .card-lg{

grid-row:span 2;

} */

    .analytics-grid>.dashboard-card {

        background: #fff;

        border-radius: 18px;

        padding: 20px;

        box-shadow: 0 10px 20px rgba(0, 0, 0, .05);

    }

    .card-header-custom {

        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 20px;

    }

    .card-header-custom h5 {

        margin: 0;

        font-size: 18px;

        font-weight: 700;

    }

    .card-header-custom small {

        color: #6b7280;

    }

    .analytics-grid canvas {

        width: 100% !important;

        height: 260px !important;

    }

    @media(max-width:992px) {

        .analytics-grid {

            grid-template-columns: 1fr;

        }

        .card-lg {

            grid-row: auto;

        }

    }

    .chart-card {

        height: 360px;

    }

    .chart-card canvas {

        width: 100% !important;

        height: 290px !important;

    }

    .sepsis-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
        margin-top: 15px;
    }

    .sepsis-box {
        background: #fff;
        border: 1px solid #e9eef7;
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, .05);
    }

    .sepsis-box h6 {
        font-size: 12px;
        font-weight: 700;
        color: #2563eb;
        margin-bottom: 10px;
    }

    .sepsis-box h2 {
        font-size: 34px;
        font-weight: 700;
        margin: 0;
        color: #2563eb;
    }

    .sepsis-box p {
        margin-top: 6px;
        font-size: 13px;
        font-weight: 600;
        color: #2563eb;
    }

    .sepsis-box.green h6,
    .sepsis-box.green h2,
    .sepsis-box.green p {
        color: #16a34a;
    }

    .sepsis-box.orange h6,
    .sepsis-box.orange h2,
    .sepsis-box.orange p {
        color: #ea580c;
    }

    .sepsis-box.red h6,
    .sepsis-box.red h2,
    .sepsis-box.red p {
        color: #dc2626;
    }

    /* ================= Clinical Overview ================= */

    .clinical-grid {

        display: grid;

        grid-template-columns: repeat(4, 1fr);

        gap: 15px;

        margin-top: 18px;

    }

    .clinical-box {

        background: #fff;

        border: 1px solid #e7edf6;

        border-radius: 12px;

        padding: 15px;

        text-align: center;

        box-shadow: 0 3px 8px rgba(0, 0, 0, .05);

    }

    .clinical-box small {

        display: block;

        font-size: 12px;

        font-weight: 600;

        color: #64748b;

        margin-bottom: 10px;

    }

    .clinical-box h2 {

        font-size: 36px;

        font-weight: 700;

        margin-bottom: 5px;

        color: #4f46e5;

    }

    .clinical-box canvas {

        height: 45px !important;

        margin-top: 10px;

    }

    @media(max-width:1200px) {

        .clinical-grid {

            grid-template-columns: repeat(2, 1fr);

        }

    }

    @media(max-width:768px) {

        .clinical-grid {

            grid-template-columns: 1fr;

        }

    }

    /* ======================
ORGAN CARD
====================== */

    .organ-card {

        height: 340px;

    }

    #organChart {

        width: 100% !important;

        height: 260px !important;

    }


    /* =========================================================
   NEXT 4 ANALYTICS CARDS
   UNIQUE CLASS NAMES
========================================================= */

    .sepsis-next-grid {

        display: grid;

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 20px;

        margin-top: 20px;

        width: 100%;

    }


    /* =========================================================
   CARD
========================================================= */

    .sepsis-next-card {

        background: #ffffff;

        border: 1px solid #edf0f5;

        border-radius: 14px;

        padding: 18px;

        min-width: 0;

        overflow: hidden;

        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);

    }


    /* =========================================================
   TITLE
========================================================= */

    .sepsis-next-title {

        font-size: 13px;

        font-weight: 700;

        color: #172554;

        margin-bottom: 18px;

        text-transform: uppercase;

    }


    /* =========================================================
   SOURCE OF INFECTION
========================================================= */

    .infection-chart-area {

        display: grid;

        grid-template-columns: 45% 55%;

        align-items: center;

        gap: 10px;

        min-height: 260px;

    }

    .infection-donut {

        width: 100%;

        height: 230px;

        position: relative;

    }

    .infection-donut canvas {

        width: 100% !important;

        height: 100% !important;

    }


    .infection-legend {

        display: flex;

        flex-direction: column;

        gap: 13px;

    }


    .infection-legend-item {

        display: grid;

        grid-template-columns: 12px minmax(0, 1fr) auto;

        align-items: center;

        gap: 8px;

        font-size: 11px;

        color: #374151;

    }


    .infection-legend-item strong {

        font-size: 10px;

        color: #111827;

        white-space: nowrap;

    }


    .infection-dot {

        width: 10px;

        height: 10px;

        border-radius: 2px;

        display: block;

    }


    .infection-blue {
        background: #2878e8;
    }

    .infection-teal {
        background: #18a7a2;
    }

    .infection-red {
        background: #ef476f;
    }

    .infection-orange {
        background: #f59e0b;
    }

    .infection-purple {
        background: #8b5cf6;
    }

    .infection-gray {
        background: #94a3b8;
    }


    /* =========================================================
   CULTURE RESULTS
========================================================= */

    .culture-result-list {

        display: flex;

        flex-direction: column;

        gap: 7px;

    }


    .culture-result-row {

        display: grid;

        grid-template-columns: 34px minmax(0, 1fr) auto;

        align-items: center;

        gap: 10px;

        padding: 9px 5px;

        border-bottom: 1px solid #f1f3f6;

    }


    .culture-result-row:last-child {

        border-bottom: none;

    }


    .culture-result-icon {

        width: 28px;

        height: 28px;

        border-radius: 50%;

        display: flex;

        justify-content: center;

        align-items: center;

        font-size: 13px;

    }


    .culture-result-name {

        font-size: 12px;

        color: #374151;

    }


    .culture-result-value {

        display: flex;

        flex-direction: column;

        align-items: flex-end;

    }


    .culture-result-value strong {

        font-size: 12px;

        color: #111827;

    }


    .culture-result-value small {

        font-size: 10px;

        color: #64748b;

    }


    .culture-red {

        color: #dc2626;

        background: #fee2e2;

    }


    .culture-yellow {

        color: #d97706;

        background: #fef3c7;

    }


    .culture-green {

        color: #16a34a;

        background: #dcfce7;

    }


    .culture-purple {

        color: #7c3aed;

        background: #ede9fe;

    }


    .culture-gray {

        color: #64748b;

        background: #e2e8f0;

    }


    /* =========================================================
   TOP ORGANISMS
========================================================= */

    .organism-chart-wrapper {

        width: 100%;

        height: 270px;

        position: relative;

    }


    .organism-chart-wrapper canvas {

        width: 100% !important;

        height: 100% !important;

    }


    /* =========================================================
   ANTIBIOTIC USAGE
========================================================= */

    .antibiotic-kpi-grid {

        display: grid;

        grid-template-columns: repeat(4, minmax(0, 1fr));

        gap: 8px;

    }


    .antibiotic-kpi {

        border: 1px solid #e5e7eb;

        border-radius: 9px;

        padding: 10px 5px;

        text-align: center;

        min-width: 0;

    }


    .antibiotic-kpi small {

        display: block;

        font-size: 9px;

        white-space: nowrap;

        overflow: hidden;

        text-overflow: ellipsis;

    }


    .antibiotic-kpi strong {

        display: block;

        font-size: 20px;

        margin-top: 5px;

    }


    .antibiotic-kpi span {

        display: block;

        font-size: 9px;

        margin-top: 3px;

    }


    .green-kpi small,
    .green-kpi strong,
    .green-kpi span {

        color: #16a34a;

    }


    .blue-kpi small,
    .blue-kpi strong,
    .blue-kpi span {

        color: #2563eb;

    }


    .orange-kpi small,
    .orange-kpi strong,
    .orange-kpi span {

        color: #ea580c;

    }


    .purple-kpi small,
    .purple-kpi strong,
    .purple-kpi span {

        color: #7c3aed;

    }


    .antibiotic-subtitle {

        font-size: 11px;

        font-weight: 700;

        color: #172554;

        margin-top: 18px;

        margin-bottom: 5px;

    }


    .antibiotic-chart-wrapper {

        width: 100%;

        height: 190px;

        position: relative;

    }


    .antibiotic-chart-wrapper canvas {

        width: 100% !important;

        height: 100% !important;

    }


    /* =========================================================
   RESPONSIVE
========================================================= */


    /* Tablet */

    @media (max-width: 1100px) {

        .sepsis-next-grid {

            grid-template-columns: repeat(2, minmax(0, 1fr));

        }

        .infection-chart-area {

            grid-template-columns: 1fr;

        }

        .infection-donut {

            height: 200px;

            max-width: 220px;

            margin: auto;

        }

        .infection-legend {

            gap: 9px;

        }

    }


    /* Mobile */

    @media (max-width: 768px) {

        .sepsis-next-grid {

            grid-template-columns: 1fr;

            gap: 16px;

        }

        .sepsis-next-card {

            padding: 15px;

        }

        .infection-chart-area {

            grid-template-columns: 1fr;

        }

        .infection-donut {

            height: 220px;

        }

        .antibiotic-kpi-grid {

            grid-template-columns: repeat(2, 1fr);

            gap: 10px;

        }

    }


    /* Small Mobile */

    @media (max-width: 480px) {

        .sepsis-next-card {

            padding: 12px;

        }

        .infection-legend-item {

            font-size: 10px;

        }

        .infection-legend-item strong {

            font-size: 9px;

        }

        .culture-result-name {

            font-size: 11px;

        }

        .antibiotic-kpi-grid {

            grid-template-columns: 1fr 1fr;

        }

    }


    /* =========================================================
   FINAL 4 DASHBOARD CARDS
========================================================= */

    .sepsis-bottom-grid {

        display: grid;

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 20px;

        margin-top: 20px;

        width: 100%;

    }


    /* =========================================================
   CARD
========================================================= */

    .sepsis-bottom-card {

        background: #ffffff;

        border: 1px solid #edf0f5;

        border-radius: 14px;

        padding: 18px;

        min-width: 0;

        overflow: hidden;

        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);

    }


    /* =========================================================
   TITLE
========================================================= */

    .sepsis-bottom-title {

        font-size: 13px;

        font-weight: 700;

        color: #172554;

        margin-bottom: 18px;

    }


    .sepsis-bottom-title span {

        font-size: 11px;

        font-weight: 500;

        color: #64748b;

    }


    /* =========================================================
   LABORATORY TRENDS
========================================================= */

    .lab-trend-chart {

        width: 100%;

        height: 300px;

        position: relative;

    }


    .lab-trend-chart canvas {

        width: 100% !important;

        height: 100% !important;

    }


    /* =========================================================
   OUTCOME SUMMARY
========================================================= */

    .outcome-summary-layout {

        display: grid;

        grid-template-columns: 48% 52%;

        align-items: center;

        min-height: 280px;

    }


    .outcome-summary-chart {

        height: 240px;

        width: 100%;

        position: relative;

    }


    .outcome-summary-chart canvas {

        width: 100% !important;

        height: 100% !important;

    }


    .outcome-summary-legend {

        display: flex;

        flex-direction: column;

        gap: 20px;

    }


    .outcome-summary-item {

        display: flex;

        align-items: center;

        gap: 10px;

    }


    .outcome-summary-dot {

        width: 12px;

        height: 12px;

        border-radius: 50%;

        flex-shrink: 0;

    }


    .outcome-summary-item div {

        display: flex;

        flex-direction: column;

        gap: 3px;

    }


    .outcome-summary-item strong {

        font-size: 12px;

        color: #374151;

    }


    .outcome-summary-item small {

        font-size: 10px;

        color: #64748b;

    }


    .outcome-green {

        background: #22a447;

    }


    .outcome-blue {

        background: #2878e8;

    }


    .outcome-orange {

        background: #f59e0b;

    }


    .outcome-red {

        background: #ef3b3b;

    }


    /* =========================================================
   PATIENT JOURNEY
========================================================= */

    .patient-journey-flow {

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 5px;

        margin: 25px 0;

    }


    .journey-step {

        display: flex;

        flex-direction: column;

        align-items: center;

        text-align: center;

        min-width: 55px;

    }


    .journey-icon {

        width: 42px;

        height: 42px;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 20px;

        margin-bottom: 8px;

    }


    .journey-step span {

        font-size: 9px;

        color: #374151;

        line-height: 1.3;

    }


    .journey-arrow {

        color: #64748b;

        font-size: 16px;

    }


    .journey-blue {

        color: #2878e8;

        background: #eaf2ff;

    }


    .journey-green {

        color: #22a447;

        background: #eaf8ef;

    }


    .journey-orange {

        color: #ea580c;

        background: #fff2e8;

    }


    .journey-purple {

        color: #7c3aed;

        background: #f1edff;

    }


    .journey-red {

        color: #dc2626;

        background: #feecec;

    }


    /* =========================================================
   JOURNEY TIME CARDS
========================================================= */

    .journey-time-grid {

        display: grid;

        grid-template-columns: repeat(4, minmax(0, 1fr));

        gap: 10px;

    }


    .journey-time-card {

        border: 1px solid #e5e7eb;

        border-radius: 10px;

        padding: 12px 5px;

        text-align: center;

        min-width: 0;

    }


    .journey-time-card strong {

        display: block;

        font-size: 22px;

        color: #111827;

    }


    .journey-time-card small {

        display: block;

        font-size: 10px;

        color: #64748b;

        margin-bottom: 10px;

    }


    .journey-time-card span {

        display: block;

        font-size: 9px;

        font-weight: 600;

        line-height: 1.4;

        color: #374151;

    }


    /* =========================================================
   HOSPITAL WISE PATIENTS
========================================================= */

    .hospital-chart-wrapper {

        width: 100%;

        height: 300px;

        position: relative;

    }


    .hospital-chart-wrapper canvas {

        width: 100% !important;

        height: 100% !important;

    }


    /* =========================================================
   RESPONSIVE - TABLET
========================================================= */

    @media (max-width: 1100px) {

        .sepsis-bottom-grid {

            grid-template-columns: repeat(2, minmax(0, 1fr));

        }


        .outcome-summary-layout {

            grid-template-columns: 1fr;

            gap: 10px;

        }


        .outcome-summary-chart {

            height: 220px;

        }


        .outcome-summary-legend {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 12px;

        }


        .patient-journey-flow {

            overflow-x: auto;

            justify-content: flex-start;

            padding-bottom: 8px;

        }


        .journey-step {

            flex-shrink: 0;

        }


        .journey-arrow {

            flex-shrink: 0;

        }

    }


    /* =========================================================
   RESPONSIVE - MOBILE
========================================================= */

    @media (max-width: 768px) {

        .sepsis-bottom-grid {

            grid-template-columns: 1fr;

            gap: 16px;

        }


        .sepsis-bottom-card {

            padding: 15px;

        }


        .outcome-summary-layout {

            grid-template-columns: 1fr;

        }


        .outcome-summary-chart {

            height: 220px;

        }


        .outcome-summary-legend {

            grid-template-columns: 1fr 1fr;

        }


        .journey-time-grid {

            grid-template-columns: repeat(2, 1fr);

        }

    }


    /* =========================================================
   RESPONSIVE - SMALL MOBILE
========================================================= */

    @media (max-width: 480px) {

        .sepsis-bottom-card {

            padding: 12px;

        }


        .lab-trend-chart {

            height: 250px;

        }


        .hospital-chart-wrapper {

            height: 250px;

        }


        .outcome-summary-legend {

            grid-template-columns: 1fr;

        }


        .journey-time-grid {

            grid-template-columns: 1fr 1fr;

        }

    }
</style>


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
                1,248
            </strong>

            <small class="dashboard-kpi-info">
                <i class="fa fa-arrow-up"></i>
                12% from last month
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
                ICU Patients
            </span>

            <strong class="dashboard-kpi-value">
                352
            </strong>

            <small class="dashboard-kpi-info">
                <i class="fa fa-arrow-up"></i>
                8% from last month
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
                Critical
            </span>

            <strong class="dashboard-kpi-value">
                89
            </strong>

            <small class="dashboard-kpi-info">
                7% of total patients
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
                Discharged
            </span>

            <strong class="dashboard-kpi-value">
                804
            </strong>

            <small class="dashboard-kpi-info">
                64% of total patients
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
                Male Patients
            </span>

            <strong class="dashboard-kpi-value">
                652
            </strong>

            <small class="dashboard-kpi-info">
                52.2% of total
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
                Female Patients
            </span>

            <strong class="dashboard-kpi-value">
                596
            </strong>

            <small class="dashboard-kpi-info">
                47.8% of total
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
                Average Stay
            </span>

            <strong class="dashboard-kpi-value">
                7.4
            </strong>

            <small class="dashboard-kpi-info">
                Days
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
                Hospitals
            </span>

            <strong class="dashboard-kpi-value">
                42
            </strong>

            <small class="dashboard-kpi-info">
                Active Hospitals
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
<script>
    const admissionCtx = document.getElementById('admissionChart');

    if (admissionCtx) {
        new Chart(admissionCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Admissions',
                    data: [120, 150, 180, 160, 210, 240, 220],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37,99,235,0.15)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#2563eb'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }
</script>
<script>
    const genderCtx = document.getElementById('genderChart');

    if (genderCtx) {
        new Chart(genderCtx, {
            type: 'doughnut',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    data: [652, 596],
                    backgroundColor: [
                        '#2563eb',
                        '#ec4899'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }
</script>

<script>
    const ageCtx = document.getElementById('ageChart');

    if (ageCtx) {

        new Chart(ageCtx, {

            type: 'bar',

            data: {

                labels: [
                    '0-18',
                    '19-35',
                    '36-50',
                    '51-65',
                    '66+'
                ],

                datasets: [{

                    label: 'Patients',

                    data: [42, 128, 246, 318, 182],

                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#f59e0b',
                        '#ef4444',
                        '#8b5cf6'
                    ],

                    borderRadius: 8

                }]

            },

            options: {

                indexAxis: 'y',

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {
                        display: false
                    }

                },

                scales: {

                    x: {
                        grid: {
                            display: false
                        }
                    },

                    y: {
                        grid: {
                            display: false
                        }
                    }

                }

            }

        });

    }
</script>
<script>
    const outcomeCtx = document.getElementById('outcomeChart');

    if (outcomeCtx) {

        new Chart(outcomeCtx, {

            type: 'doughnut',

            data: {

                labels: [
                    'Recovered',
                    'Critical',
                    'Expired',
                    'Transferred'
                ],

                datasets: [{

                    data: [804, 89, 68, 122],

                    backgroundColor: [

                        '#10b981',

                        '#f59e0b',

                        '#ef4444',

                        '#3b82f6'

                    ],

                    borderWidth: 0

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                cutout: '70%',

                plugins: {

                    legend: {

                        position: 'bottom',

                        labels: {

                            boxWidth: 12,

                            padding: 15

                        }

                    }

                }

            }

        });

    }
</script>

<script>
    function sparkline(id, color, data) {

        const ctx = document.getElementById(id);

        if (!ctx) return;

        new Chart(ctx, {

            type: 'line',

            data: {

                labels: ['', '', '', '', '', '', '', '', ''],

                datasets: [{

                    data: data,

                    borderColor: color,

                    borderWidth: 2,

                    fill: false,

                    pointRadius: 0,

                    tension: .45

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {
                        display: false
                    },

                    tooltip: {
                        enabled: false
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

        });

    }

    sparkline(
        'sofaSpark',
        '#6d28d9',
        [4, 8, 5, 10, 7, 12, 9, 11, 8]
    );

    sparkline(
        'sofaHighSpark',
        '#5b21b6',
        [2, 5, 4, 7, 6, 8, 7, 9, 8]
    );

    sparkline(
        'lactateSpark',
        '#0891b2',
        [1, 2, 2.4, 2.2, 2.9, 2.5, 3.2, 2.8]
    );

    sparkline(
        'lactateHighSpark',
        '#dc2626',
        [1, 3, 2, 4, 3, 5, 4, 6]
    );
</script>
<script>
    const organCtx = document.getElementById('organChart');

    if (organCtx) {

        new Chart(organCtx, {

            type: 'bar',

            data: {

                labels: [

                    'Respiratory',

                    'Renal',

                    'Cardiac',

                    'Hematology',

                    'Metabolic'

                ],

                datasets: [{

                    data: [328, 249, 198, 176, 132],

                    backgroundColor: '#7c3aed',

                    borderRadius: 8,

                    barThickness: 16

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                indexAxis: 'y',

                plugins: {

                    legend: {
                        display: false
                    }

                },

                scales: {

                    x: {

                        beginAtZero: true,

                        grid: {

                            color: '#ececec'

                        }

                    },

                    y: {

                        grid: {

                            display: false

                        }

                    }

                }

            }

        });

    }
</script>

<script>
    const infectionSourceCtx =
        document.getElementById('infectionSourceChart');

    if (infectionSourceCtx) {

        new Chart(infectionSourceCtx, {

            type: 'doughnut',

            data: {

                labels: [
                    'Lung',
                    'Abdomen',
                    'Blood',
                    'Urinary',
                    'Skin / Soft Tissue',
                    'Others'
                ],

                datasets: [{

                    data: [
                        176,
                        98,
                        82,
                        64,
                        48,
                        44
                    ],

                    backgroundColor: [

                        '#2878e8',
                        '#18a7a2',
                        '#ef476f',
                        '#f59e0b',
                        '#8b5cf6',
                        '#94a3b8'

                    ],

                    borderWidth: 2,

                    borderColor: '#ffffff'

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                cutout: '52%',

                plugins: {

                    legend: {

                        display: false

                    },

                    tooltip: {

                        callbacks: {

                            label: function(context) {

                                return context.label +
                                    ': ' +
                                    context.raw;

                            }

                        }

                    }

                }

            }

        });

    }
</script>

<script>
    const topOrganismsCtx =
        document.getElementById('topOrganismsChart');

    if (topOrganismsCtx) {

        new Chart(topOrganismsCtx, {

            type: 'bar',

            data: {

                labels: [

                    'E. coli',

                    'Klebsiella spp.',

                    'Pseudomonas spp.',

                    'Acinetobacter spp.',

                    'Staphylococcus aureus',

                    'Enterococcus spp.',

                    'Candida spp.'

                ],

                datasets: [{

                    data: [

                        92,

                        78,

                        64,

                        54,

                        48,

                        28,

                        24

                    ],

                    backgroundColor: '#299b4a',

                    borderRadius: 2,

                    barThickness: 13

                }]

            },

            options: {

                indexAxis: 'y',

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {

                        display: false

                    }

                },

                scales: {

                    x: {

                        beginAtZero: true,

                        max: 100,

                        ticks: {

                            font: {

                                size: 9

                            }

                        }

                    },

                    y: {

                        ticks: {

                            font: {

                                size: 9

                            }

                        },

                        grid: {

                            display: false

                        }

                    }

                }

            }

        });

    }
</script>

<script>
    const antibioticCtx =
        document.getElementById('antibioticChart');

    if (antibioticCtx) {

        new Chart(antibioticCtx, {

            type: 'bar',

            data: {

                labels: [

                    'Meropenem',

                    'Piperacillin-Tazobactam',

                    'Ceftriaxone',

                    'Vancomycin',

                    'Colistin',

                    'Linezolid'

                ],

                datasets: [{

                    data: [

                        186,

                        148,

                        104,

                        86,

                        58,

                        46

                    ],

                    backgroundColor: '#2878e8',

                    borderRadius: 2,

                    barThickness: 11

                }]

            },

            options: {

                indexAxis: 'y',

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {

                        display: false

                    }

                },

                scales: {

                    x: {

                        beginAtZero: true,

                        max: 200,

                        ticks: {

                            font: {

                                size: 9

                            }

                        }

                    },

                    y: {

                        ticks: {

                            font: {

                                size: 9

                            }

                        },

                        grid: {

                            display: false

                        }

                    }

                }

            }

        });

    }
</script>
<script>
    const laboratoryTrendCtx =
        document.getElementById('laboratoryTrendChart');

    if (laboratoryTrendCtx) {

        new Chart(laboratoryTrendCtx, {

            type: 'line',

            data: {

                labels: [

                    '01 May',
                    '06 May',
                    '11 May',
                    '16 May',
                    '21 May',
                    '26 May',
                    '31 May'

                ],

                datasets: [

                    {

                        label: 'Lactate (mmol/L)',

                        data: [
                            2.6,
                            2.8,
                            3.1,
                            2.9,
                            2.7,
                            2.5,
                            2.4
                        ],

                        borderColor: '#2878e8',

                        backgroundColor: 'transparent',

                        tension: 0.35,

                        pointRadius: 4,

                        pointBackgroundColor: '#2878e8',

                        borderWidth: 2

                    },

                    {

                        label: 'CRP (mg/L)',

                        data: [
                            86,
                            92,
                            110,
                            98,
                            88,
                            76,
                            70
                        ],

                        borderColor: '#22a447',

                        backgroundColor: 'transparent',

                        tension: 0.35,

                        pointRadius: 4,

                        pointBackgroundColor: '#22a447',

                        borderWidth: 2

                    },

                    {

                        label: 'Procalcitonin (ng/mL)',

                        data: [
                            1.8,
                            2.1,
                            2.3,
                            2.0,
                            1.9,
                            1.6,
                            1.4
                        ],

                        borderColor: '#ef3b3b',

                        backgroundColor: 'transparent',

                        tension: 0.35,

                        pointRadius: 4,

                        pointBackgroundColor: '#ef3b3b',

                        borderWidth: 2

                    }

                ]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                interaction: {

                    mode: 'index',

                    intersect: false

                },

                plugins: {

                    legend: {

                        position: 'top',

                        align: 'start',

                        labels: {

                            boxWidth: 10,

                            font: {

                                size: 10

                            }

                        }

                    }

                },

                scales: {

                    x: {

                        grid: {

                            display: false

                        },

                        ticks: {

                            font: {

                                size: 9

                            }

                        }

                    },

                    y: {

                        beginAtZero: true,

                        ticks: {

                            font: {

                                size: 9

                            }

                        }

                    }

                }

            }

        });

    }
</script>
<script>
    const outcomeSummaryCtx =
        document.getElementById('outcomeSummaryChart');

    if (outcomeSummaryCtx) {

        new Chart(outcomeSummaryCtx, {

            type: 'doughnut',

            data: {

                labels: [

                    'Improved',

                    'Discharged',

                    'Referred',

                    'Expired'

                ],

                datasets: [{

                    data: [

                        172,

                        276,

                        6,

                        58

                    ],

                    backgroundColor: [

                        '#22a447',

                        '#2878e8',

                        '#f59e0b',

                        '#ef3b3b'

                    ],

                    borderColor: '#ffffff',

                    borderWidth: 2

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                cutout: '55%',

                plugins: {

                    legend: {

                        display: false

                    }

                }

            }

        });

    }
</script>

<script>
    const hospitalWiseCtx =
        document.getElementById('hospitalWiseChart');

    if (hospitalWiseCtx) {

        new Chart(hospitalWiseCtx, {

            type: 'bar',

            data: {

                labels: [

                    'Hospital A',

                    'Hospital B',

                    'Hospital C',

                    'Hospital D',

                    'Hospital E'

                ],

                datasets: [{

                    label: 'Patients',

                    data: [

                        156,

                        128,

                        98,

                        76,

                        54

                    ],

                    backgroundColor: '#2878e8',

                    borderRadius: 2,

                    barThickness: 18

                }]

            },

            options: {

                indexAxis: 'y',

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {

                        display: false

                    }

                },

                scales: {

                    x: {

                        beginAtZero: true,

                        max: 200,

                        ticks: {

                            font: {

                                size: 9

                            }

                        }

                    },

                    y: {

                        grid: {

                            display: false

                        },

                        ticks: {

                            font: {

                                size: 10

                            }

                        }

                    }

                }

            }

        });

    }
</script>

@endsection
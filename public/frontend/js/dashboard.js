
/*==========================
CENTER TEXT
==========================*/
const centerText = {

    id: 'centerText',

    beforeDraw(chart) {

        const {ctx} = chart;

        const meta = chart.getDatasetMeta(0);

        if(!meta.data.length) return;

        const x = meta.data[0].x;
        const y = meta.data[0].y;

        ctx.save();

        ctx.textAlign = "center";
        ctx.textBaseline = "middle";

        ctx.fillStyle = "#111827";
        ctx.font = "700 40px Inter";
        ctx.fillText("512", x, y - 10);

        ctx.fillStyle = "#6b7280";
        ctx.font = "500 16px Inter";
        ctx.fillText("Total", x, y + 22);

        ctx.restore();
    }

};

/*==========================
Admissions
==========================*/
new Chart(document.getElementById("admissionChart"),{

type:'line',

data:{

labels:['01 May','03','05','07','09','11','13','15','17','19','21','23','25','27','29','31'],

datasets:[{

data:[30,22,33,15,22,34,22,45,33,21,24,44,31,26,16,30],

borderColor:'#2F6EF3',

backgroundColor:'rgba(47,110,243,.12)',

fill:true,

tension:.45,

pointRadius:4,

pointBackgroundColor:'#2F6EF3'

}]

},

options:{

plugins:{legend:false},

scales:{

y:{beginAtZero:true},

x:{grid:{display:false}}

}

}

});

/*==========================
Gender
==========================*/
new Chart(document.getElementById("genderChart"),{

type:'doughnut',

data:{

labels:['Male','Female'],

datasets:[{

data:[312,200],

backgroundColor:['#2F6EF3','#FF4C93'],

borderWidth:0

}]

},

options:{

cutout:'68%',

plugins:{legend:false}

}

});


/*======================================
AGE DISTRIBUTION
======================================*/

const ageCtx = document.getElementById("ageChart");

new Chart(ageCtx, {

    type: "bar",

    data: {

        labels: [
            "0-18",
            "19-30",
            "31-40",
            "41-50",
            "51-60",
            "61-70",
            "71-80",
            ">80"
        ],

        datasets: [{

            data: [12,24,47,82,112,126,78,31],

            backgroundColor: "#2F6EF3",

            borderRadius: 8,

            borderSkipped: false,

            barThickness: 34

        }]

    },

    options: {

        responsive: true,

        maintainAspectRatio: false,

        layout:{
            padding:{
                top:20
            }
        },

        plugins: {

            legend: {
                display: false
            },

            tooltip: {
                enabled: true
            }

        },

        scales: {

            x: {

                title:{
                    display:true,
                    text:"Age Group",
                    color:"#334155",
                    font:{
                        size:14,
                        weight:"bold"
                    },
                    padding:10
                },

                grid:{
                    display:false
                },

                ticks:{

                    color:"#475569",

                    font:{
                        size:13,
                        weight:"600"
                    }

                }

            },

            y: {

                beginAtZero:true,

                max:140,

                title:{
                    display:true,
                    text:"Number of Patients",
                    color:"#334155",
                    font:{
                        size:14,
                        weight:"bold"
                    },
                    padding:10
                },

                ticks:{

                    stepSize:20,

                    color:"#64748B",

                    font:{
                        size:12,
                        weight:"600"
                    }

                },

                grid:{
                    color:"#E5E7EB",
                    drawBorder:false
                }

            }

        }

    },

    plugins:[{

        id:"valueLabels",

        afterDatasetsDraw(chart){

            const {ctx}=chart;

            const meta=chart.getDatasetMeta(0);

            meta.data.forEach((bar,index)=>{

                ctx.save();

                ctx.fillStyle="#111827";

                ctx.font="bold 12px Arial";

                ctx.textAlign="center";

                ctx.textBaseline="bottom";

                ctx.fillText(

                    chart.data.datasets[0].data[index],

                    bar.x,

                    bar.y-8

                );

                ctx.restore();

            });

        }

    }]

});
/*==========================
Outcome
==========================*/
new Chart(document.getElementById("outcomeChart"),{

type:'doughnut',

data:{

labels:['Improved','Discharged','Referred','Expired'],

datasets:[{

data:[172,276,6,58],

backgroundColor:[

'#2CB34A',

'#2F6EF3',

'#F59E0B',

'#EF4444'

],

borderWidth:0

}]

},

options:{

cutout:'68%',

plugins:{legend:false}

}

});




    

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





    new Chart(document.getElementById("organChart"),{

type:"bar",

data:{

labels:[
"Respiratory",
"Renal",
"Cardiac",
"Hematology",
"Metabolic"
],

datasets:[{

data:[328,249,198,176,132],

backgroundColor:"#7C3AED",

borderRadius:8,

barThickness:16

}]

},

options:{

responsive:true,

maintainAspectRatio:false,

indexAxis:"y",

plugins:{

legend:{display:false}

},

scales:{

x:{

beginAtZero:true,

max:400,

ticks:{
stepSize:100
},

grid:{
color:"#E5E7EB"
}

},

y:{

grid:{
display:false
},

ticks:{

color:"#374151",

font:{
size:12,
weight:"600"
}

}

}

}

},

plugins:[{

id:"values",

afterDatasetsDraw(chart){

const {ctx}=chart;

const meta=chart.getDatasetMeta(0);

meta.data.forEach((bar,i)=>{

ctx.fillStyle="#111827";

ctx.font="600 12px Arial";

ctx.fillText(

chart.data.datasets[0].data[i],

bar.x+8,

bar.y+4

);

});

}

}]

});



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
            data: [176,98,82,64,48,44],

            backgroundColor:[
                '#2F6EF3',
                '#13B5B1',
                '#FF3E70',
                '#F59E0B',
                '#8B5CF6',
                '#A8B7C9'
            ],

            borderWidth:2,
            borderColor:'#fff',
            hoverOffset:6
        }]
    },

    options:{

        responsive:true,
        maintainAspectRatio:false,

        cutout:'42%',

        animation:{
            duration:1200
        },

        plugins:{
            legend:false
        }

    }

});

    }


const topOrganismsCtx=document.getElementById("topOrganismsChart");

if(topOrganismsCtx){

new Chart(topOrganismsCtx,{

type:'bar',

data:{

labels:[
'E. coli',
'Klebsiella spp.',
'Pseudomonas spp.',
'Acinetobacter spp.',
'Staphylococcus aureus',
'Enterococcus spp.',
'Candida spp.'
],

datasets:[{

data:[92,78,64,54,48,28,24],

backgroundColor:'#2CB34A',

borderRadius:3,

barThickness:14,
clip:false

}]

},

options:{

indexAxis:'y',

responsive:true,

maintainAspectRatio:false,

plugins:{
legend:false
},

layout:{
padding:{
 top: 20,
        right: 50,
        left: 10,
        bottom: 10
}
},

scales:{

    x:{

        beginAtZero:true,

        max:100,

        offset:false,

        grid:{
            color:"#E5E7EB"
        },

        ticks:{
            stepSize:20,

            color:"#374151",

            font:{
                size:13,
                weight:"700"
            }
        }

    },

    y:{

        offset:false,

        grid:{
            display:false
        },

        ticks:{
            color:"#111827",

            crossAlign:"near",

            padding:2,

            font:{
                size:13,
                weight:"700"
            }
        }

    }

}

},

plugins:[{

id:'labels',

afterDatasetsDraw(chart){

const{ctx}=chart;

const values=[

'92 (17.97%)',
'78 (15.23%)',
'64 (12.50%)',
'54 (10.55%)',
'48 (9.38%)',
'28 (5.47%)',
'24 (4.69%)'

];

chart.getDatasetMeta(0).data.forEach((bar,index)=>{

ctx.save();

ctx.fillStyle="#374151";

ctx.font="600 10px Inter";
ctx.textAlign="left";

ctx.textBaseline="middle";

ctx.fillText(values[index], bar.x + 10,
    bar.y + 1);

ctx.restore();

});

}

}]

});

}


    const antibioticCtx =
        document.getElementById('antibioticChart');

    if (antibioticCtx) {

        new Chart(antibioticCtx,{

type:'bar',

data:{

labels:[
'Meropenem',
'Piperacillin-Tazobactam',
'Ceftriaxone',
'Vancomycin',
'Colistin',
'Linezolid'
],

datasets:[{

data:[
186,
148,
104,
86,
58,
46
],

backgroundColor:'#2F6EF3',

borderRadius:3,

barThickness:11

}]

},

options:{

indexAxis:'y',

responsive:true,

maintainAspectRatio:false,

plugins:{

legend:false

},

scales:{

x:{

beginAtZero:true,

max:240,

ticks:{

stepSize:50

},

grid:{

color:'#ECEFF5'

}

},

y:{

grid:{

display:false

}

}

}

},

plugins:[{

id:'labels',

afterDatasetsDraw(chart){

const{

ctx

}=chart;

const meta=chart.getDatasetMeta(0);

const total=512;

meta.data.forEach((bar,index)=>{

const value=chart.data.datasets[0].data[index];

const percent=((value/total)*100).toFixed(2);

ctx.save();

ctx.fillStyle='#111827';

ctx.font='600 10px Inter';

ctx.fillText(

value+' ('+percent+'%)',

bar.x+8,

bar.y+3

);

ctx.restore();

});

}

}]

});
    }





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

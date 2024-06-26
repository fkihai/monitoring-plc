'use strict';

/* Chart.js docs: https://www.chartjs.org/ */

// CHART
window.chartColors = {
	green: '#75c181',
	blue: '#5b99ea',
	gray: '#a9b5c9',
	text: '#252930',
	border: '#e7e9ed'
};

// Function to create line chart config
function createLineChartConfig(labels, datasets) {
    return {
        type: 'line',
        data: {
            labels: labels,
            datasets: datasets
        },
        options: {
            responsive: true,
            legend: {
                display: true,
                position: 'bottom',
                align: 'start'
            },
            maintainAspectRatio: false,

            tooltip: {
                enabled: false
            },
            hover: {
                mode: null
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        drawBorder: false,
                        color: window.chartColors.border
                    },
                    scaleLabel: {
                        display: false
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        drawBorder: false,
                        color: window.chartColors.border
                    },
                    scaleLabel: {
                        display: false
                    },
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(value, index, values) {
                            return value.toLocaleString();
                        }
                    }
                }]
            }
        }
    };
}

const rpmDatasets = [
    {
        label: 'Turbo',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: "rgba(117,193,129, 0.8)",
        data: window.turboRPM.slice().reverse()
    },
    {
        label: 'Speed',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(255, 99, 132)',
        data: window.speedRPM.slice().reverse()
    },
    {
        label: 'Speed Ref',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(110, 99, 132)',
        data: window.speedRefRPM.slice().reverse()
    },
    {
        label: 'Load',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(10, 99, 132)',
        data: window.loadRPM.slice().reverse()
    }
];

const pressureDatasets = [
    {
        label: 'Air Charge',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: "rgb(117, 193, 129)", // Green
        data: window.airChargePress.slice().reverse()
    },
    {
        label: 'Fuel Oil',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(255, 99, 132)', // Red
        data: window.fuelOilPress.slice().reverse()
    },
    {
        label: 'lt Water',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(110, 99, 132)', // Purple
        data: window.ltWaterPress.slice().reverse()
    },
    {
        label: 'ht Water',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(10, 99, 132)', // Blue
        data: window.htWaterPress.slice().reverse()
    },
    {
        label: 'Crankcase',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(255, 159, 64)', // Orange
        data: window.crankcasePress.slice().reverse()
    },
    {
        label: 'Air Start',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(75, 192, 192)', // Teal
        data: window.airStartPress.slice().reverse()
    },
    {
        label: 'Lube Oil',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(54, 162, 235)', // Light Blue
        data: window.lubeOilPress.slice().reverse()
    }
];
const tempDatasets = [
    {
        label: 'Air Charge',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: "rgb(117, 193, 129)", // Green
        data: window.airChargeTemp.slice().reverse()
    },
    {
        label: 'Fuel Oil',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(255, 99, 132)', // Red
        data: window.fuelOilTemp.slice().reverse()
    },
    {
        label: 'lt Water',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(110, 99, 132)', // Purple
        data: window.ltWaterTemp.slice().reverse()
    },
    {
        label: 'ht Water',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(10, 99, 132)', // Blue
        data: window.htWaterTemp.slice().reverse()
    },
    {
        label: 'Lube Oil',
        backgroundColor: "rgba(255, 255, 255, 0.10)",
        borderColor: 'rgb(54, 162, 235)', // Light Blue
        data: window.lubeOilTemp.slice().reverse()
    }
];

const labels = Array.from({ length: window.turboRPM.length }, (v, i) => i + 1);

const rpmLineChartConfig = createLineChartConfig(labels, rpmDatasets);
const pressureLineChartConfig = createLineChartConfig(labels, pressureDatasets);
const tempLineChartConfig = createLineChartConfig(labels, tempDatasets);

// Generate charts on load
window.addEventListener('load', function(){
	var lineChart = document.getElementById('chart-line-rpm').getContext('2d');
	window.myLine = new Chart(lineChart, rpmLineChartConfig);
	var lineChart = document.getElementById('chart-line-pressure').getContext('2d');
	window.myLine = new Chart(lineChart, pressureLineChartConfig);
	var lineChart = document.getElementById('chart-line-temp').getContext('2d');
	window.myLine = new Chart(lineChart, tempLineChartConfig);
});


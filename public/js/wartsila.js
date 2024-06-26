
var lengthState  =  window.turboRPM.length;

function parseDateTime(dateTimeString) {
    // Create a new Date object using the provided string
    const parsedDate = new Date(dateTimeString);

    // Check if the Date object is valid (parsing successful)
    if (parsedDate.toString() !== "Invalid Date") {
        // Extract and format the desired components
        const year = parsedDate.getFullYear();
        const month = parsedDate.getMonth() + 1; // Adjust month index (0-based to 1-based)
        const day = parsedDate.getDate();
        const hour = parsedDate.getHours();
        const minute = parsedDate.getMinutes();
        const second = parsedDate.getSeconds();

        // Example formatting (adjust as needed)
        const formattedDateTime = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}:${second.toString().padStart(2, '0')}`;

        return formattedDateTime;
    } else {
        // Handle invalid datetime string
        console.error("Invalid datetime format. Expected format: YYYY-MM-DDTHH:mm:ss.sssZ");
        return null;
    }
}

 $(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url: '/realtime-wartsila',
            type: 'GET',
            success: function(data) {
                $('#_dbTime').text(parseDateTime(data.data._dbTime));
                $('#turboRPM').text(data.data.turboRPM);
                $('#speedRPM').text(data.data.speedRPM);
                $('#speedRefRPM').text(data.data.speedRefRPM);
                $('#loadRPM').text(data.data.loadRPM);
                $('#fuelOilPress').text(data.data.fuelOilPress);
                $('#fuelOilTemp').text(data.data.fuelOilTemp);
                $('#ltWaterPress').text(data.data.ltWaterPress);
                $('#ltWaterTemp').text(data.data.ltWaterTemp);
                $('#htWaterPress').text(data.data.htWaterPress);
                $('#htWaterTemp').text(data.data.htWaterTemp);
                $('#lubeOilPress').text(data.data.lubeOilPress);
                $('#lubeOilTemp').text(data.data.lubeOilTemp);
                $('#airChargePress').text(data.data.airChargePress);
                $('#airChargeTemp').text(data.data.airChargeTemp);
                $('#airStartPress').text(data.data.airStartPress);
                $('#crankcasePress').text(data.data.crankcasePress);

                if(lengthState != data.stateDataLength.length){
                    rpmChart(data);
                    pressureChart(data);
                    tempChart(data);
                    lengthState = data.stateDataLength.length;
                }
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: " + error);
            }
        });
    }, 1000); // 60000 milliseconds = 1 minute
});

function rpmChart(data){
    const lineChartElement = document.getElementById('chart-line-rpm');
    let rpmChart = new Chart(lineChartElement.getContext('2d'), rpmLineChartConfig);
    rpmChart.data.datasets[0].data = data.turboRPM.slice().reverse();
    rpmChart.data.datasets[1].data = data.speedRPM.slice().reverse();
    rpmChart.data.datasets[2].data = data.speedRefRPM.slice().reverse();
    rpmChart.data.datasets[3].data = data.loadRPM.slice().reverse();
    rpmChart.data.labels = Array.from({ length: data.turboRPM.length }, (v, i) => i + 1);
    rpmChart.update();
}
function pressureChart(data){
    const lineChartElement = document.getElementById('chart-line-pressure');
    let pressureChart = new Chart(lineChartElement.getContext('2d'), pressureLineChartConfig);
    pressureChart.data.datasets[0].data = data.airChargePress.slice().reverse();
    pressureChart.data.datasets[1].data = data.fuelOilPress.slice().reverse();
    pressureChart.data.datasets[2].data = data.ltWaterPress.slice().reverse();
    pressureChart.data.datasets[3].data = data.htWaterPress.slice().reverse();
    pressureChart.data.datasets[4].data = data.crankcasePress.slice().reverse();
    pressureChart.data.datasets[5].data = data.airStartPress.slice().reverse();
    pressureChart.data.datasets[6].data = data.lubeOilPress.slice().reverse();
    pressureChart.data.labels = Array.from({ length: data.airChargePress.length }, (v, i) => i + 1);
    pressureChart.update();
}
function tempChart(data){
    const lineChartElement = document.getElementById('chart-line-temp');
    let tempChart = new Chart(lineChartElement.getContext('2d'), tempLineChartConfig);
    tempChart.data.datasets[0].data = data.airChargeTemp.slice().reverse();
    tempChart.data.datasets[1].data = data.fuelOilTemp.slice().reverse();
    tempChart.data.datasets[2].data = data.ltWaterTemp.slice().reverse();
    tempChart.data.datasets[3].data = data.htWaterTemp.slice().reverse();
    tempChart.data.datasets[4].data = data.lubeOilTemp.slice().reverse();
    tempChart.data.labels = Array.from({ length: data.airChargeTemp.length }, (v, i) => i + 1);
    tempChart.update();
}


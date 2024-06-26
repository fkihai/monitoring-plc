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

function setWaterLevel(level, idName) {
    if (level < 0) level = 0;
    if (level > 15) level = 15;

    const percentage = (level / 15) * 100;
    document.getElementById(idName).style.height = percentage + '%';
}


$(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url: '/realtime-cargo',
            type: 'GET',
            success: function(data) {
                // one
                $('#_dbTime').text(parseDateTime(data._dbTime));
                $('#ullageTkP').text(data.ullageTkP);
                $('#avgTmpTkP').text(`${data.avgTmpTkP}\u00B0 C`);
                $('#ullageCot6P').text(data.ullageCot6P);
                $('#avgTmpCot6P').text(`${data.avgTmpCot6P}\u00B0 C`);
                $('#ullageCot5P').text(data.ullageCot5P);
                $('#avgTmpCot5P').text(`${data.avgTmpCot5P}\u00B0 C`);
                $('#ullageCot4P').text(data.ullageCot4P);
                $('#avgTmpCot4P').text(`${data.avgTmpCot4P}\u00B0 C`);
                $('#ullageCot3P').text(data.ullageCot3P);
                $('#avgTmpCot3P').text(`${data.avgTmpCot3P}\u00B0 C`);
                $('#ullageCot2P').text(data.ullageCot2P);
                $('#avgTmpCot2P').text(`${data.avgTmpCot2P}\u00B0 C`);
                $('#ullageCot1P').text(data.ullageCot1P);
                $('#avgTmpCot1P').text(`${data.avgTmpCot1P}\u00B0 C`);

                $('#ullageTkS').text(data.ullageTkS);
                $('#avgTmpTkS').text(`${data.avgTmpTkS}\u00B0 C`);
                $('#ullageCot6S').text(data.ullageCot6S);
                $('#avgTmpCot6S').text(`${data.avgTmpCot6S}\u00B0 C`);
                $('#ullageCot5S').text(data.ullageCot5S);
                $('#avgTmpCot5S').text(`${data.avgTmpCot5S}\u00B0 C`);
                $('#ullageCot4S').text(data.ullageCot4S);
                $('#avgTmpCot4S').text(`${data.avgTmpCot4S}\u00B0 C`);
                $('#ullageCot3S').text(data.ullageCot3S);
                $('#avgTmpCot3S').text(`${data.avgTmpCot3S}\u00B0 C`);
                $('#ullageCot2S').text(data.ullageCot2S);
                $('#avgTmpCot2S').text(`${data.avgTmpCot2S}\u00B0 C`);
                $('#ullageCot1S').text(data.ullageCot1S);
                $('#avgTmpCot1S').text(`${data.avgTmpCot1S}\u00B0 C`);

                // waterlevel
                setWaterLevel(data.ullageTkP,'waterLevelOne');
                setWaterLevel(data.ullageCot6P,'waterLevelTwo');
                setWaterLevel(data.ullageCot5P,'waterLevelThree');
                setWaterLevel(data.ullageCot4P,'waterLevelFour');
                setWaterLevel(data.ullageCot3P,'waterLevelFive');
                setWaterLevel(data.ullageCot2P,'waterLevelSix');
                setWaterLevel(data.ullageCot1P,'waterLevelSeven');
                setWaterLevel(data.ullageTkS,'waterLevelEight');
                setWaterLevel(data.ullageCot6S,'waterLevelNine');
                setWaterLevel(data.ullageCot5S,'waterLevelTen');
                setWaterLevel(data.ullageCot4S,'waterLevelEleven');
                setWaterLevel(data.ullageCot3S,'waterLevelTwelve');
                setWaterLevel(data.ullageCot2S,'waterLevelThirteen');
                setWaterLevel(data.ullageCot1S,'waterLevelFourteen');

            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: " + error);
            }
        });
    }, 1000); // 1000 milliseconds = 1 seconds
});

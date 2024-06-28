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
            url: '/realtime-engine',
            type: 'GET',
            success: function(data) {
                // one
                $('#_dbTime').text(parseDateTime(data._dbTime));
                $('#ea1').text(data.ea1);
                $('#ea2').text(data.ea2);
                $('#ea3').text(data.ea3);
                $('#ea4').text(data.ea4);
                $('#ea5').text(data.ea5);
                $('#ea6').text(data.ea6);

                $('#la1').text(data.la1);
                $('#la2').text(data.la2);
                $('#la3').text(data.la3);
                $('#la4').text(data.la4);
                $('#la5').text(data.la5);
                $('#la6').text(data.la6);


                $('#ba1').text(data.ba1);
                $('#ba2').text(data.ba2);
                $('#ba3').text(data.ba3);
                $('#ba4').text(data.ba4);
                $('#ba5').text(data.ba5);
                $('#ba6').text(data.ba6);

                $('#engineSpeed').text(data.engineSpeed);
                $('#crankcase').text(data.crankcase);
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: " + error);
            }
        });
    }, 1000); // 1000 milliseconds = 1 seconds
});

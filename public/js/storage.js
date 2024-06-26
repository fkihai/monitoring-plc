function setWaterLevel(level, idName) {
    level = level / 1000; // convet mm to m
    if (level < 0) level = 0;
    if (level > 10) level = 10;
    const percentage = (level / 10) * 100;
    document.getElementById(idName).style.height = percentage + '%';
}


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
            url: '/realtime-storage',
            type: 'GET',
            success: function(data) {
                // one
                $('#_dbTime').text(parseDateTime(data.data4._dbTime));
                $('#heightOfCPO1').text(data.data1.heightOfCPO);
                $('#tStorageOneWhen0M').text(`${data.data1.tStorageWhen0M}\u00B0 C`);
                $('#tStorageOneWhen1M').text(`${data.data1.tStorageWhen1M}\u00B0 C`);
                $('#tStorageOneWhen2M').text(`${data.data1.tStorageWhen2M}\u00B0 C`);
                $('#tStorageOneWhen3M').text(`${data.data1.tStorageWhen3M}\u00B0 C`);
                $('#tStorageOneWhen4M').text(`${data.data1.tStorageWhen4M}\u00B0 C`);
                $('#tStorageOneWhen5M').text(`${data.data1.tStorageWhen5M}\u00B0 C`)
                $('#tStorageOneWhen6M').text(`${data.data1.tStorageWhen6M}\u00B0 C`);
                $('#tStorageOneWhen7M').text(`${data.data1.tStorageWhen7M}\u00B0 C`);
                $('#factorKoreksiOne').text(data.data1.factorKoreksi);
                $('#densityOne').text(data.data1.density);
                $('#EstimasiStokOne').text(data.data1.EstimasiStok);
                // two
                $('#heightOfCPO2').text(data.data2.heightOfCPO);
                $('#tStorageTwoWhen0M').text(`${data.data2.tStorageWhen0M}\u00B0 C`);
                $('#tStorageTwoWhen1M').text(`${data.data2.tStorageWhen1M}\u00B0 C`);
                $('#tStorageTwoWhen2M').text(`${data.data2.tStorageWhen2M}\u00B0 C`);
                $('#tStorageTwoWhen3M').text(`${data.data2.tStorageWhen3M}\u00B0 C`);
                $('#tStorageTwoWhen4M').text(`${data.data2.tStorageWhen4M}\u00B0 C`);
                $('#tStorageTwoWhen5M').text(`${data.data2.tStorageWhen5M}\u00B0 C`)
                $('#tStorageTwoWhen6M').text(`${data.data2.tStorageWhen6M}\u00B0 C`);
                $('#tStorageTwoWhen7M').text(`${data.data2.tStorageWhen7M}\u00B0 C`);
                $('#factorKoreksiTwo').text(data.data2.factorKoreksi);
                $('#densityTwo').text(data.data2.density);
                $('#EstimasiStokTwo').text(data.data2.EstimasiStok);
                // three
                $('#heightOfCPO3').text(data.data3.heightOfCPO);
                $('#tStorageThreeWhen0M').text(`${data.data3.tStorageWhen0M}\u00B0 C`);
                $('#tStorageThreeWhen1M').text(`${data.data3.tStorageWhen1M}\u00B0 C`);
                $('#tStorageThreeWhen2M').text(`${data.data3.tStorageWhen2M}\u00B0 C`);
                $('#tStorageThreeWhen3M').text(`${data.data3.tStorageWhen3M}\u00B0 C`);
                $('#tStorageThreeWhen4M').text(`${data.data3.tStorageWhen4M}\u00B0 C`);
                $('#tStorageThreeWhen5M').text(`${data.data3.tStorageWhen5M}\u00B0 C`)
                $('#tStorageThreeWhen6M').text(`${data.data3.tStorageWhen6M}\u00B0 C`);
                $('#tStorageThreeWhen7M').text(`${data.data3.tStorageWhen7M}\u00B0 C`);
                $('#factorKoreksiThree').text(data.data3.factorKoreksi);
                $('#densityThree').text(data.data3.density);
                $('#EstimasiStokThree').text(data.data3.EstimasiStok);
                // three
                $('#heightOfCPO4').text(data.data4.heightOfCPO);
                $('#tStorageFourWhen0M').text(`${data.data4.tStorageWhen0M}\u00B0 C`);
                $('#tStorageFourWhen1M').text(`${data.data4.tStorageWhen1M}\u00B0 C`);
                $('#tStorageFourWhen2M').text(`${data.data4.tStorageWhen2M}\u00B0 C`);
                $('#tStorageFourWhen3M').text(`${data.data4.tStorageWhen3M}\u00B0 C`);
                $('#tStorageFourWhen4M').text(`${data.data4.tStorageWhen4M}\u00B0 C`);
                $('#tStorageFourWhen5M').text(`${data.data4.tStorageWhen5M}\u00B0 C`)
                $('#tStorageFourWhen6M').text(`${data.data4.tStorageWhen6M}\u00B0 C`);
                $('#tStorageFourWhen7M').text(`${data.data4.tStorageWhen7M}\u00B0 C`);
                $('#factorKoreksiFour').text(data.data4.factorKoreksi);
                $('#densityFour').text(data.data4.density);
                $('#EstimasiStokFour').text(data.data4.EstimasiStok);

                // waterlevel
                setWaterLevel(data.data1.heightOfCPO,'waterLevelOne');
                setWaterLevel(data.data2.heightOfCPO,'waterLevelTwo');
                setWaterLevel(data.data3.heightOfCPO,'waterLevelThree');
                setWaterLevel(data.data4.heightOfCPO,'waterLevelFour');

            },
            error: function(xhr, status, error) {
                console.error("Error fetching data: " + error);
            }
        });
    }, 1000); // 1000 milliseconds = 1 seconds
});

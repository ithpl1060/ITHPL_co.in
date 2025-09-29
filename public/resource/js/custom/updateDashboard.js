const reasonField = document.getElementById("reasonField");

$("#status").change(function () {
    var status = this.value;
    if (status === '2' || status === '1') {
        console.log(status);
        reasonField.style.display = "none";
    } else {
        reasonField.style.display = "block";
    }
    console.log("Type of statusId:", typeof status)

});

var statusId = $('#status').val();
console.log('statusId:', statusId);
function checkStatus() {
    if (statusId === '1' || statusId === '2') {
        // Hide the field if status is 1 or 2
        reasonField.style.display = "none";
    } else {
        // Show the field for all other statuses
        reasonField.style.display = "block";
    }
}
checkStatus();
// console.log($('#id').val());

var empId = empdetails.id;
var rqstId = $('#id').val();


getIsEditable();

function getIsEditable() {
    $.ajax({
        url: '/super/rqst_dept/' + empId + '/' + rqstId, // Replace with your API endpoint or route
        type: 'GET',
        success: function (response) {
            console.log('Response:', response); // Debug the response
            if (response.data) {
                const data = response.data;

                console.log('editable:', data.isEditable);
                if (data.isEditable == 0) {
                    const statusDropdown = document.getElementById('status');

                    // Apply read-only behavior
                    statusDropdown.setAttribute('readonly', true); // Custom marker (not functional for <select>)
                    statusDropdown.style.pointerEvents = 'none'; // Disable mouse interaction
                    statusDropdown.style.backgroundColor = '#e9ecef'; // Optional: Make it visually appear disabled

                    // Debugging values
                    console.log('Dropdown value:', statusDropdown.value);
                    console.log('jQuery value:', $('#status').val());
                }



                // Populate fields

            } else {
                alert('Error: No EDITABLE data found.');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
            console.error('Response:', xhr.responseText);
            alert('Error fetching EDITABLE details.');
        }
    });
}



// Fade out the message after 5 seconds (5000 milliseconds)
setTimeout(function () {
    $('#flashMessage').fadeOut();
}, 5000);


console.log('fileLocation1:', $('#fileLocation').val());

document.getElementById('downloadLink').addEventListener('click', function () {
    // Get the JSON string from the hidden input and parse it into an array
    const fileLocation = $('#fileLocation').val();

    // Check if fileLocation is valid and contains data
    if (!fileLocation || fileLocation === '[]') {
        console.log('No file locations available');
        showError('File not Uploaded. Please try again later.');
        return; // Exit the function if no data is available
    }

    const files = JSON.parse(fileLocation);  // Parse the string into an array
    console.log('fileLocation:', files);

    // Clean up escaped slashes, add a forward slash at the beginning, and trigger downloads
    files.forEach(file => {
        const cleanPath = '/' + file.replace(/\\/g, ''); // Add '/' before file and remove extra backslashes
        const link = document.createElement('a'); // Create a temporary <a> element
        link.href = cleanPath; // Set the cleaned path as href
        link.download = cleanPath.split('/').pop(); // Extract file name for download
        document.body.appendChild(link); // Append link to DOM
        link.click(); // Programmatically click the link
        document.body.removeChild(link); // Remove link from DOM after click
        console.log('fileLocation:', link);
    });
});


// Function to display the error message
function showError(message) {
    const errorMsg = document.getElementById('errorMsg');
    errorMsg.textContent = message; // Set custom error message
    errorMsg.style.display = 'block'; // Show error message

    // Fade out the error message after 5 seconds
    setTimeout(function () {
        $('#errorMsg').fadeOut();
    }, 3000);
}



// Function to trigger the file download
// function triggerDownload(fileUrl) {
//     // Create a temporary anchor element to trigger the download
//     const link = document.createElement('a');
//     link.href = fileUrl;
//     link.download = ''; // Ensure the file is downloaded (without opening)

//     // Append the link to the body and simulate a click to download
//     document.body.appendChild(link);
//     link.click();

//     // Clean up by removing the link element
//     document.body.removeChild(link);
// }
console.log(empdetails.id);



// function downloadAllFiles(fileLocation) {
//     // Check if fileLocation is valid and contains data
//     if (!fileLocation || fileLocation === '[]') {
//         console.log('No file locations available');
//         showError('File not found. Please try again later.');
//         return; // Exit the function if no data is available
//     }

//     const files = JSON.parse(fileLocation);  // Parse the string into an array
//     console.log('fileLocation:', files);

//     // Clean up escaped slashes, add a forward slash at the beginning, and trigger downloads
//     files.forEach(file => {
//         const cleanPath = '/' + file.replace(/\\/g, ''); // Add '/' before file and remove extra backslashes
//         const link = document.createElement('a'); // Create a temporary <a> element
//         link.href = cleanPath; // Set the cleaned path as href
//         link.download = cleanPath.split('/').pop(); // Extract file name for download
//         document.body.appendChild(link); // Append link to DOM
//         link.click(); // Programmatically click the link
//         document.body.removeChild(link); // Remove link from DOM after click
//         console.log('fileLocation:', link);
//     });
// }

function downloadAllFiles(files) {


    // Parse JSON string into an array if necessary
    if (typeof files === 'string') {
        try {
            files = JSON.parse(files);
        } catch (e) {
            alert('Invalid file list provided.');
            return;
        }
    }
    // Check if the array is empty
    if (Array.isArray(files) && files.length === 0) {
        console.log('file:', files);
        swal("Error!", 'No Data Found!!!', "error");
        // alert('The file list is empty.');
        return;
    }

    if (!Array.isArray(files)) {
        alert('No valid files to download.');
        return;
    }

    files.forEach(file => {
        // Construct the file URL (adjust the path as needed)
        const fileUrl = `/${file}`; // Replace '/path_to_files/' with your actual file base path

        // Create an invisible link element
        const link = document.createElement('a');
        link.href = fileUrl;
        link.download = file.split('/').pop(); // Extract filename for download
        document.body.appendChild(link);

        // Trigger the download
        link.click();

        // Clean up
        document.body.removeChild(link);
    });
}


$('#requestTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        // url: '/super/fetchRequests',
        url: '/super/fetchApprovedRequest',
        type: 'POST'
    },
    columns: [
        {
            data: null,
            render: function (data, type, row, meta) {
                return meta.row + 1 + meta.settings._iDisplayStart;
            },
            orderable: false // Serial number column is not sortable
        },
        // {
        //     data: 'id'
        // },
        {
            data: 'requesterId'
        },
        {
            data: 'requester_name'
        },
        {
            data: 'requestDate'
        },
        {
            data: 'budgetReq'
        },
        {
            data: 'eventDate'
        },
        {
            data: 'status'
        },
        {
            data: 'action'
        }
    ],
    order: [
        [0, 'desc']
    ] // Default sorting on 'requestDate' column
});

let managerList = new Map();
let lineManagerList = new Map();
let req_line_manager = $('#req_line_manager').val()
let managerId;
let empId = empdetails.id;

document.getElementById('fileUpload').addEventListener('change', function (e) {
    const fileInput = e.target;
    const label = fileInput.nextElementSibling; // The label element
    const files = fileInput.files;

    if (files.length === 0) {
        label.textContent = 'Choose files'; // Default text when no file is selected
    } else {
        const fileNames = Array.from(files).map(file => file.name).join(', ');
        label.textContent = fileNames; // Display selected file names
    }
});

// Array to hold selected files
// let selectedFiles = [];

// // File input event listener
// document.getElementById('fileUpload').addEventListener('change', function (e) {
//     const fileInput = e.target;
//     const label = fileInput.nextElementSibling; // The label element
//     const newFiles = Array.from(fileInput.files);

//     // Append new files to the existing array
//     selectedFiles = [...selectedFiles, ...newFiles];

//     // Update label text with all selected file names
//     if (selectedFiles.length === 0) {
//         label.textContent = 'Choose files'; // Default text when no file is selected
//     } else {
//         const fileNames = selectedFiles.map(file => file.name).join(', ');
//         label.textContent = fileNames; // Display all selected file names
//     }

//     // Clear the file input to allow selecting the same file again if needed
//     fileInput.value = '';
// });



getManagerById(req_line_manager);

function getManagerById(req_line_manager) {
    console.log('reqlinemana:', req_line_manager);

    $.ajax({

        // url: base_url + 'super/get_lineManager/' + req_line_manager,
        url: base_url + 'super/get_manager/' + req_line_manager,

        type: 'GET',

        async: false,

        headers: {
            "Authorization": etoken
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {
                console.log('list:', response.data.manager);

                managerId = response.data.manager;

            }

        }

    });
}


$("#req_line_manager").change(function () {
    req_line_manager = this.value;
    getManagerById(req_line_manager);
    getManager();
});

function getManager() {
    $.ajax({

        url: base_url + 'super/get_manager',

        type: 'GET',

        async: false,

        headers: {
            "Authorization": etoken
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.lenght != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        managerList.set(response.data[i].id, response.data[i]);
                    }
                    setManagerDropdown(managerList);
                }

            }

        }

    });
}


getManager();

function setManagerDropdown(list) {
    console.log('manager list:', list);


    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    // for (let k of list.keys()) {
    //     let manager = list.get(k);


    //     options += `<option value="` + manager.id + `">` + manager.name + `</option>`;
    // }
    for (let k of list.keys()) {
        let manager = list.get(k);

        // Check if the current manager ID matches the managerId to set as selected
        let selected = manager.id === managerId ? 'selected' : '';

        options += `<option value="${manager.id}" ${selected}>${manager.name}</option>`;
    }

    $('#manager').html(options);

}


// console.log('req_line_manager:', $('#req_line_manager').val());


$("#hospitalName").change(function () {
    var hospitalId = this.value;
    $('#branch').prop('disabled', false).html(''); // Clear and enable dropdown
    $.ajax({
        url: base_url + 'super/getBranch/' + hospitalId + '/' + empId,
        type: 'GET',
        async: false,
        headers: {
            "Authorization": etoken
        },
        dataType: 'json',
        success: function (response) {
            let option = '<option value="" disabled selected hidden>Please choose...</option>'; // Default option

            if (response.status == 200) {
                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        option += `<option value="${response.data[i].id}">${response.data[i].branchName} - ${response.data[i].location}</option>`;
                    }
                } else {
                    option += '<option value="" disabled>No branches available</option>'; // No branches fallback
                }
            } else {
                option += '<option value="" disabled>No branches available</option>'; // Error message
            }

            $('#branch').html(option); // Update dropdown with new options
        },
        error: function () {
            // Handle server or connection errors
            $('#branch')
                .html('<option value="" disabled>Error fetching data. Please check your connection.</option>')
                .prop('disabled', true); // Disable dropdown in case of failure
        }
    });
});
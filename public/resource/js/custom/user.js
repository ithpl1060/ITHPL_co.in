let roleList = new Map();
let officeBranchList = new Map();
let stateList = new Map();
let employeeList = new Map();
let divisionList = new Map();
let managerList = new Map();

function getEmployeeRoleList() {
    $.ajax({

        url: base_url + 'role',

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
                        roleList.set(response.data[i].id, response.data[i]);
                    }
                    setEmployeeRoleDropdown(roleList);
                }

            }

        }

    });
}


getEmployeeRoleList();

function setEmployeeRoleDropdown(list) {
    console.log('role list:', list);


    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    // for (let k of list.keys()) {

    //     let role = list.get(k);

    //     options += `<option value="` + role.id + `">` + role.role + `</option>`;

    // }

    for (let k of list.keys()) {
        let role = list.get(k);

        // Check if the role is not 'Department'
        if (role.role !== 'Department' && role.role !== 'Admin') {
            options += `<option value="` + role.id + `">` + role.role + `</option>`;
        }
    }



    $('#role_id').html(options);

}



$("#role_id").change(function () {
    var roleid = this.value;
    $('#profile_id').html('');
    $.ajax({

        url: base_url + 'profileByRole/' + roleid,

        type: 'GET',

        async: false,

        headers: {
            "Authorization": etoken
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {
                // let option = '<option value="" disabled selected hidden>Please Choose...</option>';

                if (response.data.lenght != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        if (response.data[i].is_active == 1) {
                            // option += `<option value="${response.data[i].profile_id}" selected>${response.data[i].profile}</option>`;
                            $('#profile_id').val(response.data[i].profile_id);
                        }
                    }

                }

                // $('#profile_id').prop('disabled', false);


            }

        }

    });
});



console.log('This is working');
function getOfficeBranchList() {

    $.ajax({

        url: base_url + 'officeBranchDtl',

        type: 'GET',

        async: false,

        headers: {
            "Authorization": etoken
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        officeBranchList.set(response.data[i].id, response.data[i]);
                    }
                    console.log('officeBranchList:', officeBranchList);
                    setEmployeeBranchDropdown(officeBranchList);

                }

            }
            else {
                console.log(response.status);
            }

        }

    });
}

getOfficeBranchList();

function setEmployeeBranchDropdown(list) {

    console.log('branchList:', list);

    // var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let branch = list.get(k);
        // console.log('branchId:', branch.id);
        $('#office_branch_id').val(branch.id);
        // console.log('branchId:', $('#office_branch_id').val());

        // options += `<option value="` + branch.id + `" selected>` + branch.office_name + `</option>`;


    }


    // $('#office_branch_id').html(options);

}

function getEmployeeStateList() {
    $.ajax({

        url: base_url + 'get_state',

        type: 'GET',

        async: false,

        headers: {
            "Authorization": etoken
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        stateList.set(response.data[i].id, response.data[i]);
                    }
                    // console.log('countryList:',countryList);

                    setEmployeeStateListDropdown(stateList);
                }

            }

        }

    });
}
getEmployeeStateList();


function setEmployeeStateListDropdown(list) {
    console.log('list:', list);

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let state = list.get(k);
        // console.log('state:', state.state);

        options += `<option value="` + state.id + `">` + state.state + `</option>`;
        // options += `<option value="${state.id}">${state.state}</option>`;


    }


    $('#state_id').html(options);
    // $('#state_id').html(options).trigger('change'); // Update and trigger redraw

}

// $("#state_id").change(function () {
//     var stateId = this.value;
//     $('#city_id').html('');
//     $.ajax({

//         url: base_url + ' statecity/' + stateId,

//         type: 'GET',

//         async: false,

//         headers: {
//             "Authorization": etoken
//         },

//         dataType: 'json',

//         success: function (response) {


//             if (response.status == 200) {
//                 let option = '<option value="" disabled selected hidden>Please Choose...</option>';
//                 if (response.data.length != 0) {
//                     for (var i = 0; i < response.data.length; i++) {
//                         option += `<option value="${response.data[i].city_id}">${response.data[i].city}</option>`;
//                     }


//                 }
//                 $('#city_id').html(option);
//                 $('#city_id').prop('disabled', false);
//             }

//         }

//     });
// });

$("#state_id").change(function () {
    var stateId = this.value;

    // If stateId is empty, do not make the AJAX call
    if (!stateId) {
        $('#city_id').html('<option value="" disabled selected hidden>Please Choose...</option>');
        $('#city_id').prop('disabled', true); // Disable the city dropdown
        return;
    }

    $('#city_id').html(''); // Clear the city dropdown before making the AJAX call
    $.ajax({
        url: base_url + ' statecity/' + stateId,
        type: 'GET',
        async: false,
        headers: {
            "Authorization": etoken
        },
        dataType: 'json',
        success: function (response) {
            if (response.status == 200) {
                let option = '<option value="" disabled selected hidden>Please Choose...</option>';
                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        option += `<option value="${response.data[i].city_id}">${response.data[i].city}</option>`;
                    }
                }
                $('#city_id').html(option);
                $('#city_id').prop('disabled', false); // Enable the city dropdown
            }
        }
    });
});



$('#addEmployeeForm').on('submit', function (e) {

    e.preventDefault();
    var createdBy;

    createdBy = empdetails.id;
    var profile_id = $('#profile_id').val();
    // var office_branch_id = $('#office_branch_id').val();
    var defaultSrc = $('#otherdpre').attr('src'); // Get the default image src
    // console.log(office_branch_id);

    // return;
    var returnVal = $("#addEmployeeForm").valid();
    var formdata = new FormData(this);

    formdata.append("created_by", createdBy);
    formdata.append("profile_id", profile_id);
    // formdata.append("office_branch_id", office_branch_id);
    // console.log('profile_id:', $('#profile_id').val());
    formdata.append("default_image", defaultSrc);

    if (returnVal) {
        $.ajax({

            url: base_url + 'employee',

            type: 'POST',

            headers: {
                "Authorization": etoken
            },

            data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
                if (response.status == 200) {
                    $('#addEmployeeModal').modal('toggle');

                    let id = response.data.id;

                    if (employeeList.has(id)) {

                        employeeList.delete(id);

                    }
                    employeeList.set(id, response.data);

                    // setEmployeeList(employeeList);
                    swal("Good job!", response.message, "success");
                    setTimeout(
                        $(location).attr('href', base_url + 'admin/employee'),
                        8000
                    )

                } else {

                    swal("Error!", response.message, "error");
                    // setTimeout(
                    //     $(location).attr('href', base_url + 'admin/employee'),
                    //     8000
                    // )

                }

            }

        });
    }
});


$('#addEmployeeBtn').click(function () {
    $('#addEmployeeModal').modal('toggle');
    $("#addEmployeeForm").trigger("reset");
    $('#id').val('');
    // $('.error').text('');
    $("#passwordData").show();
    $('#otherdpre').attr('src', '');
    // $('#otherdpre').attr('src', base_url + 'resource/images/avatar-custom.jpg');
    let newSrc = base_url + 'resource/images/avatar-custom.jpg';
    // console.log("Setting src for #otherdpre to:", newSrc);
    $('#otherdpre').attr('src', newSrc)
    // setEmployeeStateListDropdown(stateList);
    // $('#state_id').html('');
    $('#state_id').val('').trigger('change'); // Reset the state dropdown
    $('#city_id').val('').trigger('change'); // Reset the state dropdown
    $('#city_id').prop('disabled', true);
    // $('#divisionId').html('');
    // $('#manager').html('');

});



function updateEmployee(employeeId) {
    $.ajax({
        url: '/all_employee', // Replace with your API endpoint or route
        type: 'POST',
        data: { id: employeeId },
        success: function (response) {
            console.log('Response:', response); // Debug the response
            if (response.data) {
                const data = response.data;
                $("#addEmployeeForm").trigger("reset");
                $('#addEmployeeModal').modal('toggle');

                // Populate fields

                $('#otherdpre').attr('src', base_url + 'resource/images/avatar-custom.jpg');
                (data.profile_image != null) ? $('#otherdpre').attr('src', base_url + data.profile_image.replace(/\\/g, '/')) : '';

                $('#id').val(data.id);
                $('#requesterId').val(data.requesterId);
                $('#name').val(data.name);
                // $('#office_branch_id').val(data.office_branch_id).change();
                $('#office_branch_id').val(data.office_branch_id);
                $('#role_id').val(data.role_id).change();
                // $('#profile_id').val(data.profile_id).change();
                $('#profile_id').val(data.profile_id);
                $('#email_id').val(data.email_id);
                // $('#is_active').val(data.is_active);

                // $('#country_id').val(data.country_id).change();
                $('#state_id').val(data.state_id).change();
                $('#city_id').val(data.city_id).change();
                // $('#country').val(data.country);
                // $('#state').val(data.state);
                // $('#city').val(data.city);
                $('#gender').val(data.gender).change();
                $('#divisionId').val(data.divisionId).change();
                $('#aadhar_no').val(data.aadhar_no);
                $('#pancard').val(data.pancard);
                $('#password').val(data.password);
                $('#confirm_password').val(data.password);
                $('#manager').val(data.manager);
                $('#contact_number1').val(data.contact_number1);
                // $('#contact_number2').val(data.contact_number2);
                $('#email_id').val(data.email_id);
                $('#address').val(data.address);
                $('#pincode').val(data.pincode);
                $('#dob').val(data.dob);

                if (data.is_active == 0) {
                    $("#active").prop("checked", false);
                    $("#inactive").prop("checked", true);
                }
                if (data.is_verified == 1) {
                    $("#is_verified").prop("checked", true);
                }

                // Show the modal
                // $('#addEmployeeBtn').modal('show');
            } else {
                alert('Error: No employee data found.');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
            console.error('Response:', xhr.responseText);
            alert('Error fetching employee details.');
        }
    });
}

function getDivision() {
    $.ajax({

        url: base_url + 'division',

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
                        divisionList.set(response.data[i].id, response.data[i]);
                    }
                    console.log('divisionList:', divisionList);
                    setDivisionDropdown(divisionList);

                }

            }

        }

    });
}

getDivision();

function setDivisionDropdown(list) {

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let division = list.get(k);

        options += `<option value="` + division.id + `">` + division.division + `</option>`;


    }


    $('#divisionId').html(options);

}

function getManager() {
    $.ajax({

        url: base_url + 'get_manager',

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
                    console.log('managerList:', managerList);
                    setManagerDropdown(managerList);

                }

            }

        }

    });
}

getManager();

function setManagerDropdown(list) {
    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let manager = list.get(k);

        options += `<option value="` + manager.id + `">` + manager.name + `</option>`;


    }


    $('#manager').html(options);
}







$('#employeesTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchEmployees',
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
            data: 'name'
        },
        {
            data: 'role'
        },
        {
            data: 'division'
        },
        {
            data: 'status'
        },
        {
            data: 'action'
        }
    ],
    order: [
        // [1, 'asc']
        [0, 'desc']
    ], // Default sorting on 'name' column
});
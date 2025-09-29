let roleList = new Map();
let profileList = new Map();
let userList = new Map();


$('#addUserBtn').click(function () {
    $('#addUserModal').modal('toggle');
    $("#addUserForm").trigger("reset");
    $('#id').val('');
    // $('.error').text('');
});

$('#addUserForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#addUserForm").valid();
    var tenant_id = empdetails.tenant_id;
    // var own_by = empdetails.tenant_id;
    var formdata = new FormData(this);
    formdata.append("tenant_id", tenant_id);
    formdata.append("own_by", tenant_id);

    if (returnVal) {
        $.ajax({
            url: base_url + 'user_signup',
            type: 'POST',
            headers: {
                "Authorization": token
            },
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.status === 200) {
                    swal("Success!", response.message, "success").then(() => {
                        window.location.reload();
                    });
                } else {
                    // Handle non-200 but successful request
                    swal("Oops!", response.message, "error");
                }
            },
            error: function (xhr) {
                if (xhr.status === 409) {
                    let errorResponse = xhr.responseJSON;
                    let errorMessages = '';

                    for (const key in errorResponse.errors) {
                        if (errorResponse.errors.hasOwnProperty(key)) {
                            errorMessages += `• ${errorResponse.errors[key]}\n`;
                        }
                    }

                    swal("Validation Error", errorMessages, "error");
                } else {

                    swal("Server Error", xhr.responseJSON.message, "error");
                    // swal("Server Error", "Something went wrong!", "error");
                }
            }
        });
    }
});

console.log('own_by:', empdetails.tenant_id);
console.log('created_by:', empdetails.created_by);
console.log('updated_by:', empdetails.updated_by);




function getRoleList() {
    $.ajax({

        url: base_url + 'role',

        type: 'GET',

        async: false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.lenght != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        roleList.set(response.data[i].id, response.data[i]);
                    }

                }

            }

        }

    });
}
getRoleList();
setRoleDropdown(roleList);

function setRoleDropdown(list) {

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let role = list.get(k);

        options += `<option value="${role.id}">${role.display_name}</option>`;


    }


    $('#role_id').html(options);

}


function getProfileList() {
    $.ajax({

        url: base_url + 'profile',

        type: 'GET',

        async: false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.lenght != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        profileList.set(response.data[i].profile_id, response.data[i]);
                    }

                }

            }

        }

    });
}
getProfileList();
setProfileDropdown(profileList);

function setProfileDropdown(list) {

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let profile = list.get(k);

        options += `<option value="${profile.profile_id}">${profile.profile_name}</option>`;


    }


    $('#profile_id').html(options);

}


function updateUser(id) {
    console.log('Update:', id);

    $.ajax({

        url: base_url + 'user/' + id,

        type: 'GET',

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {

                    setUser(response.data);

                }

            }

        }

    });


}

function setUser(data) {
    console.log('userData:', data);

    $('#uid').val('');
    $('#uFirst_name').val('');
    $('#uLast_name').val('');
    $('#uContact').val('');
    $('#uRole_id').val('');
    $('#uProfile_id').val('');

    $('#uid').val(data.id);
    $('#uFirst_name').val(data.first_name);
    $('#uLast_name').val(data.last_name);
    $('#uContact').val(data.contact);
    (data.is_active == 1) ? $("#uActive").attr('checked', 'checked') : $("#uInactive").attr('checked', 'checked');

    // $('#uRole_id').val(data.role_id);
    // $('#uProfile_id').val(data.profile_id);
    // $('#uRole_id').val(data.role_id).change();

    // $('#updateUserModal').modal('toggle');
    setRoleNProfile(data.tenant_id);
}
 
function setRoleNProfile(tenantId) {
    $.ajax({

        url: base_url + 'user/' + id,

        type: 'GET',

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {

                    setUser(response.data);

                }

            }

        }

    });
}

function deleteUser(id) {
    console.log('Deleted id:', id);
    $.ajax({
        url: base_url + 'user/' + id,
        type: 'delete',
        // headers: {
        //     "Authorization": etoken
        // },
        dataType: 'json',
        success: function (response) {
            if (response.status == 200) {

                swal("Good job!", response.message, "success").then(() => {
                    window.location.reload(); // Reload after SweetAlert confirmation
                });

            } else {
                swal("Error!", response.message, "error");

            }
        }
    });

}

// console.log('empdetails:', profileData.record_access);





$('#userTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchUsers',
        type: 'POST',
        data: function (d) {
            // Add your custom ID to the request
            d.own_by = empdetails.own_by; // Replace 123 with your actual ID or dynamic variable
            d.record_access = profileRecord.record_access;   // Example: from session or global JS
        }
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
            data: 'email'
        },
        {
            data: 'name'
        },
        {
            data: 'contact'
        },
        {
            data: 'is_active'
        },
        {
            data: 'created_at'
        },
        {
            data: 'action'
        },

    ],
    order: [
        // [1, 'asc']
        [0, 'desc']
    ], // Default sorting on 'name' column
});
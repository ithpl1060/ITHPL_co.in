console.log('users');


$('#addUsersBtn').click(function () {
    $('#addUserModal').modal('toggle');
    $("#addUserForm").trigger("reset");
    $('#id').val('');
});

$('#addUserForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#addUserForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({
            url: base_url + 'signUP',
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
                } else if (xhr.status === 403) {
                    // ✅ Handle user limit error
                    swal("Limit Reached", xhr.responseJSON.message, "warning");
                } else {
                    // Generic error fallback
                    swal("Server Error", xhr.responseJSON?.message || "Something went wrong!", "error");
                }
            }
        });
    }
});



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
    $('#uEmail').val('');

    $('#uid').val(data.id);
    $('#uFirst_name').val(data.first_name);
    $('#uLast_name').val(data.last_name);
    $('#uContact').val(data.contact);
    $('#uEmail').val(data.email);

    $('#updateUserModal').modal('show');
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


$('#updateUserForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#updateUserForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({
            url: base_url + 'user_update',
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

        });
    }
});



function deleteUser(id) {
    console.log('Deleted id:', id);
    $.ajax({
        url: base_url + 'user/' + id,
        type: 'delete',
        dataType: 'json',
        success: function (response) {
            if (response.status == 200) {

                swal("Good job!", response.message, "success").then(() => {
                    window.location.reload(); // Reload after SweetAlert confirmation
                });

            } else {
                swal("Error!", response.message, "error");

            }
        },
        error: function (xhr) {
            if (xhr.status === 403) {
                swal("Access Denied", xhr.responseJSON.message, "error");
            } else {
                swal("Error", "Something went wrong!", "error");
            }
        }

    });

}


function changePassword(id) {
    console.log('id:', id);

    $('#pId').val('');

    $('#pId').val(id);
    $('#changePasswordModal').modal('show');

}

$('#changePasswordForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#changePasswordForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({
            url: base_url + 'change_password', // adjust route if needed
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.message) {
                    swal("Success", response.message, "success");
                    window.location.reload();
                } else {
                    swal("Success", "Password updated successfully1.", "success");
                    window.location.reload();
                }
            },
            error: function (xhr) {
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    swal("Error", xhr.responseJSON.message, "error");
                } else {
                    swal("Error", "Something went wrong.", "error");
                }
            }
        });
    }
});


$('#UsersTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchUsers',
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
        {
            data: 'name'
        },
        {
            data: 'email'
        },
        {
            data: 'contact'
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
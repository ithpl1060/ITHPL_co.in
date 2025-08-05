
let roleList = new Map();


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
// setRoleList(roleList);
// function setRoleList(list) {

//     $('#roleTable').dataTable().fnDestroy();
//     $('#roleList').empty();
//     var tblData = '', badge, status;

//     for (let k of list.keys()) {

//         let role = list.get(k);

//         tblData += `
//                 <tr>
//                         <td>` + role.id + `</td>
//                         <td>` + role.name + `</td>
//                         <td>` + role.display_name + `</td>
//                         <td> <a href="#" onclick="updateTabDetails(` + role.id + `)" title="Update Tab" ><i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a> </td>
//                 </tr>
//                 `;
//     }

//     $('#roleList').html(tblData);
//     $('#roleTable').DataTable();
// }


$('#addRoleForm').on('submit', function (e) {

    e.preventDefault();

    var returnVal = $("#addRoleForm").valid();
    var formdata = new FormData(this);
    if (returnVal) {
        $.ajax({

            url: base_url + 'role',

            type: 'POST',

            headers: {
                "Authorization": token
            },

            data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
                console.log(response);
                if (response.status == 200) {

                    //     $('#addRoleModal').modal('toggle');
                    //     swal("Good job!", response.message, "success");

                    // let id=response.data.id;

                    //  if(roleList.has(id)){
                    //     roleList.delete(id);   
                    //  }
                    //  roleList.set(id, response.data);
                    //  setRoleList(roleList);

                    //  setTimeout(
                    //     $(location).attr('href',base_url+' superRole'),
                    //      8000
                    //      )
                    swal("Good job!", response.message, "success").then(() => {
                        window.location.reload(); // Reload after SweetAlert confirmation
                    });
                } else {

                    swal("Good job!", response.message, "error");

                }

            }

        });
    }
});



$('#addRoleBtn').click(function () {
    $('#addRoleModal').modal('toggle');
    $("#addRoleForm").trigger("reset");
    $('#id').val('');
    $('#display_name').val('');
    $('.error').text('');
    // setIconDropdown(iconList);
    // $("#iconMirror").removeAttr('class');
    // $('#is_subtab').prop('checked',false);
});



function updateRoleDetails(id) {
    let role = roleList.get(id.toString());
    //clear all fields
    $('#id').val('');
    $('#name').val('');
    $('#display_name').val('');
    $('.error').text('');
    //set details
    $('#id').val(role.id);
    $('#name').val(role.name);
    $('#display_name').val(role.display_name);
    $('#addRoleModal').modal('toggle');
}


function deleteRoleDetails(id) {
    // console.log(id);

    $.ajax({
        url: base_url + 'role/' + id,
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


$('#roleTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchRoles',
        type: 'POST'
    },
    columns: [
        // {
        //     data: null,
        //     render: function (data, type, row, meta) {
        //         return meta.row + 1 + meta.settings._iDisplayStart;
        //     },
        //     orderable: false // Serial number column is not sortable
        // },
        {
            data: 'id'
        },
        {
            data: 'name'
        },
        {
            data: 'display_name'
        },
        {
            data: 'action'
        }
    ],
    order: [
        // [1, 'asc']
        [1, 'desc']
    ], // Default sorting on 'name' column
});




//import activityValidation script
var activityValidation = document.createElement('script');
activityValidation.src = base_url + 'resource/js/custom/activityValidation.js';
activityValidation.setAttribute("type", "text/javascript");
document.head.appendChild(activityValidation);
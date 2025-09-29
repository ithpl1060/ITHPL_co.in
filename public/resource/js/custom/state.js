console.log('state');

$('#addStateForm').on('submit', function (e) {

    e.preventDefault();

    // var country_id = $('#country_id').val();


    var returnVal = $("#addStateForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({

            url: base_url + 'state',

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

                    swal("Good job!", response.message, "success");
                    setTimeout(
                        $(location).attr('href', base_url + 'admin/state'),
                        8000
                    )

                } else {

                    swal("Error!", response.message, "error");
                    // setTimeout(
                    //     $(location).attr('href', base_url + 'admin/event'),
                    //     8000
                    // )

                }

            }

        });
    }
});


function updateState(id) {
    $.ajax({
        url: '/get_state/' + id, // Replace with your API endpoint or route
        type: 'GET',
        // data: { id: hospitalId },
        success: function (response) {
            console.log('Response:', response); // Debug the response
            if (response.data) {
                const data = response.data;
                $('#addStateModal').modal('toggle');
                $("#addStateForm").trigger("reset");

                // Populate fields

                $('#id').val(data.id);
                $('#state').val(data.state);


                // Show the modal
                // $('#addEmployeeBtn').modal('show');
            } else {
                alert('Error: No event data found.');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', status, error);
            console.error('Response:', xhr.responseText);
            alert('Error fetching event details.');
        }
    });
}


function deleteState(id) {

    const confirmation = confirm("Are you sure you want to delete this State?");
    if (!confirmation) {
        return; // Exit the function if the user cancels
    }

    $.ajax({

        url: base_url + 'state/' + id,

        type: 'DELETE',

        headers: {
            "Authorization": etoken
        },

        cache: false,

        contentType: false,

        processData: false,

        dataType: 'json',

        success: function (response) {
            if (response.status == 200) {
                // $('#addHospitalModal').modal('toggle');

                swal("Good job!", response.message, "success");
                setTimeout(
                    $(location).attr('href', base_url + 'admin/state'),
                    8000
                )

            } else {

                swal("Error!", response.message, "error");
                setTimeout(
                    $(location).attr('href', base_url + 'admin/state'),
                    8000
                )

            }

        }

    });
}



$('#addStateBtn').click(function () {
    $('#addStateModal').modal('toggle');
    $("#addStateForm").trigger("reset");
    $('#id').val('');
    $('#state').val('');
    $('#country_id').val('');
    $('#is_active').val('');


});



// $('#stateTable').DataTable({
//     processing: true,
//     serverSide: true,
//     ajax: {
//         url: '/ fetchStates',
//         type: 'POST'
//     },
//     columns: [
//         {
//             data: null,
//             render: function (data, type, row, meta) {
//                 return meta.row + 1 + meta.settings._iDisplayStart;
//             },
//             orderable: false // Serial number column is not sortable
//         },
//         // {
//         //     data: 'id'
//         // },
//         {
//             data: 'state'
//         },
//         // {
//         //     data: 'role'
//         // },
//         // {
//         //     data: 'division'
//         // },
//         // {
//         //     data: 'status'
//         // },
//         {
//             data: 'action'
//         }
//     ],
//     order: [
//         [1, 'asc']
//         // [0, 'desc']
//     ], // Default sorting on 'name' column
// });


$('#stateTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchStates',
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
            data: 'state',
            orderable: true // State column is sortable
        },
        {
            data: 'action',
            orderable: false // Action column is not sortable
        }
    ],
    order: [
        [0, 'desc'] // Internally sorting by ID column
    ],
    pageLength: 10, // Default number of rows per page
    lengthMenu: [10, 25, 50, 100], // Options for rows per page

    // Set column width
    columnDefs: [
        {
            targets: 0, // Target the first column (Serial No. column)
            width: '50px' // Set width to 50px
        },
        {
            targets: 1, // Target the second column (State column)
            width: '200px' // Set width to 200px
        },
        {
            targets: 2, // Target the third column (Action column)
            width: '100px' // Set width to 100px
        }
    ]
});

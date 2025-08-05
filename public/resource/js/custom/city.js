console.log('city');
let stateList = new Map();

$('#addCityForm').on('submit', function (e) {

    e.preventDefault();

    // var country_id = $('#country_id').val();


    var returnVal = $("#addCityForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({

            url: base_url + 'super/city',

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
                        $(location).attr('href', base_url + 'admin/city'),
                        8000
                    )

                } else {

                    swal("Error!", response.message, "error");
                    // setTimeout(
                    //     $(location).attr('href', base_url + 'admin/city'),
                    //     8000
                    // )

                }

            }

        });
    }
});


function updateCity(id) {
    $.ajax({
        url: '/super/get_city/' + id, // Replace with your API endpoint or route
        type: 'GET',
        // data: { id: hospitalId },
        success: function (response) {
            console.log('Response:', response); // Debug the response
            if (response.data) {
                const data = response.data;
                $('#addCityModal').modal('toggle');
                $("#addCityForm").trigger("reset");

                // Populate fields

                $('#id').val(data.id);
                // $('#country_id').val(data.country_id);
                $('#state_id').val(data.state_id).change();;
                $('#city').val(data.city);


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


function deleteCity(id) {

    const confirmation = confirm("Are you sure you want to delete this City?");
    if (!confirmation) {
        return; // Exit the function if the user cancels
    }

    $.ajax({

        url: base_url + 'super/city/' + id,

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
                    $(location).attr('href', base_url + 'admin/city'),
                    8000
                )

            } else {

                swal("Error!", response.message, "error");
                setTimeout(
                    $(location).attr('href', base_url + 'admin/city'),
                    8000
                )

            }

        }

    });
}



$('#addCityBtn').click(function () {
    // Reset the modal
    $('#addCityModal').modal('toggle');
    $("#addCityForm").trigger("reset");

    // Clear specific fields
    $('#id').val('');            // Reset hidden input for ID
    $('#state_id').val('').trigger('change'); // Reset the state dropdown
    $('#city').val('');          // Reset the city input field
});




function getEmployeeStateList() {
    $.ajax({

        url: base_url + 'super/get_state',

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
        console.log('state:', state.state);

        options += `<option value="` + state.id + `">` + state.state + `</option>`;
        // options += `<option value="${state.id}">${state.state}</option>`;


    }


    $('#state_id').html(options);
    // $('#state_id').html(options).trigger('change'); // Update and trigger redraw

}





$('#cityTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/super/fetchCities',
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
            data: 'city',
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
    // columnDefs: [
    //     {
    //         targets: 0, // Target the first column (Serial No. column)
    //         width: '50px' // Set width to 50px
    //     },
    //     {
    //         targets: 1, // Target the second column (State column)
    //         width: '200px' // Set width to 200px
    //     },
    //     {
    //         targets: 2, // Target the third column (Action column)
    //         width: '100px' // Set width to 100px
    //     }
    // ]
});

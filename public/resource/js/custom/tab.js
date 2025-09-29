
let tabList = new Map();

console.log('run');


function getTabList() {
    $.ajax({

        url: base_url + 'tab',

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
                        tabList.set(response.data[i].id, response.data[i]);
                    }

                }

            }

        }

    });
}
getTabList();

$('#addTabForm').on('submit', function (e) {

    e.preventDefault();

    var returnVal = $("#addTabForm").valid();
    var formdata = new FormData(this);
    console.log(formdata);
    if (returnVal) {
        $.ajax({

            url: base_url + 'tab',

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
                if (response.status == 200) {

                    swal("Good job!", response.message, "success").then(() => {
                        window.location.reload(); // Reload after SweetAlert confirmation
                    });
                } else {
                    swal("Good job!", response.message, "error");
                    // setTimeout(
                    //     $(location).attr('href', base_url + ' superTab'),
                    //     8000
                    // )

                }

            }

        });
    }
});



$('#addTabBtn').click(function () {
    $('#addTabModal').modal('toggle');
    $("#addTabForm").trigger("reset");
    $('#id').val('');
    $('.error').text('');
    setIconDropdown(iconList);
    $("#iconMirror").removeAttr('class');
    $('#is_subtab').prop('checked', false);
});

function updateTabDetails(id) {
    let tab = tabList.get(id.toString());
    console.log(tab);
    //clear all fields
    $('#id').val('');
    $('#tab_name').val('');
    $("#active").attr('checked', false);
    $("#inactive").attr('checked', false);
    $('.error').text('');
    //set details
    $('#id').val(tab.id);
    $('#tab_name').val(tab.tab_name);

    (tab.is_active == 1) ? $("#active").attr('checked', 'checked') : $("#inactive").attr('checked', 'checked');
    (tab.is_subtab == 1) ? $("#is_subtab").attr('checked', true) : $("#is_subtab").attr('checked', false);
    $('#icon_id').val(tab.icon_id).change();
    $('#addTabModal').modal('toggle');
}

let iconList = new Map();

function getIconList() {
    $.ajax({

        url: base_url + 'icon',

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
                        iconList.set(response.data[i].id, response.data[i]);
                    }

                }

            }

        }

    });
}
getIconList();

function setIconDropdown(list) {

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';

    for (let k of list.keys()) {

        let icon = list.get(k);

        options += `<option value="${icon.id}">${icon.icon_title}</option>`;


    }


    $('#icon_id').html(options);

}

setIconDropdown(iconList);


$('#icon_id').change(function () {
    let icon = iconList.get(this.value);
    $("#iconMirror").removeAttr('class');
    $('#iconMirror').addClass(icon.icon);
});




$('#tabTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/fetchTabs',
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
            data: 'tab_name'
        },
        {
            data: 'icon_title'
        },
        {
            data: 'is_active'
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
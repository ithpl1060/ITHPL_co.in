console.log('seo');

$('#addSeoBtn').click(function () {
    $(location).attr('href', base_url + 'seo/create');
});

$(document).ready(function () {
    $('#seoTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'fetchSeo', // Adjust this if your route group uses a prefix
            type: 'POST'
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1 + meta.settings._iDisplayStart;
                },
                orderable: false
            },
            { data: 'page_slug' },
            { data: 'meta_title' },
            { data: 'url_path' },
            { data: 'meta_description' },
            { data: 'meta_keywords' },
            { data: 'action', orderable: false, searchable: false }
        ],
        order: [[0, 'desc']]
    });
});



function updateSeoDetails(id) {
    console.log(id);
    $(location).attr('href', base_url + 'seo/update/' + id);

}


function deleteSeoDetails(id) {
    console.log(id);
    $.ajax({

        url: base_url + 'seo/' + id,

        type: 'DELETE',

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
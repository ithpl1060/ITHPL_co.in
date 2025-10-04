

$('#addCategoryBtn').click(function () {
    $(location).attr('href', base_url + 'blog/create');
});

$(document).ready(function () {
     $('#categoryList').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-category', // Adjust this if your route group uses a prefix
            type: 'GET'
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1 + meta.settings._iDisplayStart;
                },
                orderable: false
            },
            { data: 'name' },
            { data: 'slug' },
            { data: 'action', orderable: false, searchable: false },
            {
                data: 'id',
                render: function (data, type, row) {
                    return `
                        <button class="btn-view" data-id="${data.id}">View</button>
                        <button class="btn-edit" data-id="${data.id}">Edit</button>
                        <button class="btn-delete" data-id="${data.id}">Delete</button>
                    `;
                }
            }
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
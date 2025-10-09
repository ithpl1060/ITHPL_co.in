// Redirect to Create Category page
$('#addCategoryBtn').click(function () {
    window.location.href = base_url + 'blog/category/create';
});

$(document).ready(function () {
    $('#categoryTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-category', // Adjust this if your route uses a prefix
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
            { data: 'name' },
            { data: 'slug' },
            {data: 'is_active',
                render: function (data, type, row) {
                    //console.log('Data='+data)
                    //return data;
                    if(data === '1'){
                        return `<span class="badge bg-success text-white rounded-pill px-5 py-5" style="border-radius: 50px;">
                                Active
                                </span>`;
                    }else{
                        return `<span class="badge bg-red text-white rounded-pill px-5 py-5 style="border-radius: 60px;">
                                Inactive
                                </span>`;
                    }
                }
            },
            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data, type, row,meta) {
                    return `
                        <a href="javascript:void(0);" onclick="viewCategoryDetails(${data})" title="View Category">
                    <i class="fa fa-eye" style="font-size: 20px;"></i></a> &nbsp;
                    <a href="javascript:void(0);" onclick="updateCategoryDetails(${data})" title="Update Category ">
                    <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a>
                    `;
                    
                }
            }
        ],
        order: [[0, 'desc']]
    });
});


function viewCategoryDetails(id) {
    console.log(id);
    $(location).attr('href', base_url + 'blog/category/update/' + id);

}


function updateCategoryDetails(id) {
    console.log(id);
    alert('update id:'+id)  
    // $.ajax({

    //     url: base_url + 'seo/' + id,

    //     type: 'DELETE',

    //     dataType: 'json',

    //     success: function (response) {
    //         if (response.status == 200) {

    //             swal("Good job!", response.message, "success").then(() => {
    //                 window.location.reload(); // Reload after SweetAlert confirmation
    //             });

    //         } else {
    //             swal("Error!", response.message, "error");

    //         }
    //     }

    // });

}
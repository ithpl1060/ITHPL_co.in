// Redirect to Create Category page
$('#addCategoryBtn').click(function () {
    window.location.href = base_url + 'blog/category/create-category';
});

$(document).ready(function () {
    $('#categoryList').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-category', // Adjust this if your route uses a prefix
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
            {data: 'is_active',
                // render: function (data, type, row) {
                //     if(data.is_active){
                //         return 'Active';
                //     }else{}
                //     return 'Inactive';
                // }
            },
            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data, type, row,meta) {
                    // return `
                    //     <a href="javascript:void(0);" onclick="viewCategoryDetails(${data})" title="View Category">
                    // <i class="fa fa-eye" style="font-size: 20px;"></i></a> &nbsp;
                    // <a href="javascript:void(0);" onclick="updateCategoryDetails(${data})" title="Update Category ">
                    // <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a>
                    // `;
                    return 1;
                }
            }
        ],
        order: [[0, 'desc']]
    });
});



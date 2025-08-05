let brandList = new Map();

//Add Brand Btn script -----------------------------------------------------------------
$('#addCategoryBtn').click(function () {
    $('#addCategoryModal').modal('toggle');
    $("#addCategoryForm").trigger("reset");
    $('#id').val('');
    $('.error').text('');
});

//Submit Brand Btn script

$('#addCategoryForm').on('submit', function (e) {

    e.preventDefault();

    var returnVal = $("#addCategoryForm").valid();
    var formdata = new FormData(this);
    if (returnVal) {
        $.ajax({

            url: base_url+'super/category_api',

            type: 'POST',

           data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
                if (response.status == 200) {
                    $('#addCategoryModal').modal('toggle');
                    let id=response.data.CategoryId ;
                  
                 if(brandList.has(id)){
                    brandList.delete(id);
                 }
                 brandList.set(id, response.data);
                 setBrandList(brandList);

                     
                     swal("Good job!", response.msg, "success");
                     setTimeout(
                        $(location).attr('href',base_url+'super/category_master'),
                         8000
                         )

                } else {

                    swal("Good job!", response.msg, "error");
                    setTimeout(
                        $(location).attr('href',base_url+'super/category_master'),
                         8000
                         )

                }

            }

        });
    }
});
//Set BrandList ---------------------------------------------------
function setBrandList(list) {

    $('#categoryTable').dataTable().fnDestroy();
    $('#categoryList').empty();
    var tblData = '',status;
    // var index=1;
    for (let k of list.keys()) {
        
        let category = list.get(k);

        switch (category.status) {
            case '1':
                status = '<span class="badge badge-pill badge-success">Active</span>';
                break;

            case '0':
                status = '<span class="badge badge-pill badge-danger">Inactive</span>';
                break;
        }
                
        tblData += `
                <tr>
                        <td>${category.CategoryId}</td>
                        <td>${category.CategoryName}</td>
                        <td>${category.	Disc}</td>
                        <td>`+ status +`</td>
                        <td> 
                            <a href="#" onclick="updateBrandDetails(${category.CategoryId})" title="Update Brand" ><i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a> 
                            <a href="#" onclick="deleteCategoryDetails(${category.CategoryId})" title="Delete Category" ><i class="mdi mdi-delete-circle" style="font-size: 20px;"></i></a> 
                        </td>
                </tr>
                `;
    }
    
    $('#categoryList').html(tblData);
    $('#categoryTable').DataTable();
}

function deleteCategoryDetails(id){
    console.log(id);

    $.ajax({
        url: base_url + 'super/category_delete/' + id,
        type: 'delete',
        headers: {
            "Authorization": etoken
        },
        dataType: 'json',
        success: function (response) {
            if (response.status == 200) {
                swal("Good job!", response.msg, "success");
                setTimeout(
                    $(location).attr('href', base_url + 'super/category_master'),
                 4000)
            } else {
                swal("Good job!", response.msg, "error");
                setTimeout(
                    $(location).attr('href', base_url + 'super/category_master'),
                 4000)
            }
        }
    });
}

function getBrandList() {
    $.ajax({

        url:  base_url+'super/category_api',

        type: 'GET',

        async:false,

        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {

                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        brandList.set(response.data[i].CategoryId, response.data[i]);
                    }
                    setBrandList(brandList);
                }

            } else {
                // If there is no data or an error occurred
                var tableBody = $('#categoryList');
                var noDataRow = '<tr><td colspan="6" style="text-align: center;">No data available</td></tr>';
                tableBody.append(noDataRow);
            }

            console.log(brandList);

        }

    });
}
getBrandList();
// Updte Brand Details----------------------------------------------------------------------------------------
function updateBrandDetails(id) {
    let brand = brandList.get(id.toString());
    //clear all fields
    $('#id').val('');
    $('#categoryName').val('');
    $('#Disc').val('');
    
    $('.error').text('');
    //set details
    $('#id').val(brand.CategoryId);
    $('#categoryName').val(brand.CategoryName);
    $('#Disc').val(brand.Disc);
    (brand.status == 1) ? $("#active").attr('checked', 'checked') : $("#inactive").attr('checked', 'checked');

    $('#addCategoryModal').modal('toggle');
}


//import categoryValidation script
var categoryValidation = document.createElement('script');
categoryValidation.src = base_url + 'resource/js/custom/categoryValidation.js';
categoryValidation.setAttribute("type", "text/javascript");
document.head.appendChild(categoryValidation);

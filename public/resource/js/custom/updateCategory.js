
$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/category');
})

function getCategory(id) {

    $.ajax({

        url: base_url + 'get-category/' + id,

        type: 'GET',

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {

                    setCategory(response.data);

                }

            }

        }

    });
}
getCategory(id);

function setCategory(data) {
    console.log('data:', data);
    $('#id').val('');
    $('#category').val('');
    $('#slug').val('');
    $('#checkbox_1').val('');
    
    $('#id').val(data.id);
    $('#category').val(data.name).attr('readonly', true);
    $('#slug').val(data.slug).attr('readonly', true);
   
    if(data.is_active === '1'){
        $('#checkbox_1').prop('checked', true).attr('readonly', true);
        
    }else{
         $('#checkbox_1').prop('checked', false).attr('readonly', true);
    }
}


$('#addSeoForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#addSeoForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({
            url: base_url + 'seo',
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
                        // window.location.reload();
                        $(location).attr('href', base_url + 'seo');
                    });
                } else {
                    // Handle non-200 but successful request
                    swal("Oops!", response.message, "error");
                }
            },
        });
    }
});

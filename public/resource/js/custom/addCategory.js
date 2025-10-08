// console.log('addCategory');

$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/category');
})


$('#addCategoryForm').on('submit', function (e) {
    e.preventDefault();
    var isActive = 0;
    if ($('.isActive').is(':checked')) {
        isActive = 1;
    }
    var returnVal = $("#addCategoryForm").valid();
    var formdata = new FormData(this);
     formdata.is_active = isActive;

    if (returnVal) {
        $.ajax({
            url: base_url + 'category',
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
                        $(location).attr('href', base_url + 'blog/category');
                    });
                } else {
                    // Handle non-200 but successful request
                    swal("Oops!", response.message, "error");
                }
            },
        });
    }
});


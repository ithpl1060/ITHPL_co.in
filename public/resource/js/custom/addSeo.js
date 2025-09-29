console.log('addSeo');

$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'seo');
})


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


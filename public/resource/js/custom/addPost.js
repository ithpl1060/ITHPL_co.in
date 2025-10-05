// console.log('addpost');

$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/post');
})


$('#addPostForm').on('submit', function (e) {
    e.preventDefault();

    var returnVal = $("#addPostForm").valid();
    var formdata = new FormData(this);

    if (returnVal) {
        $.ajax({
            url: base_url + 'post',
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
                        $(location).attr('href', base_url + 'blog/post');
                    });
                } else {
                    // Handle non-200 but successful request
                    swal("Oops!", response.message, "error");
                }
            },
        });
    }
});


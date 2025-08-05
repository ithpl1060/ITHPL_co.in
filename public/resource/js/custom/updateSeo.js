console.log(id);
$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'seo');
})

function getSeo(id) {

    $.ajax({

        url: base_url + 'get_seo/' + id,

        type: 'GET',

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {

                    setSeo(response.data);

                }

            }

        }

    });
}
getSeo(id);

function setSeo(data) {
    console.log('data:', data);
    $('#id').val('');
    $('#pageSlug').val('');
    $('#title').val('');
    $('#urlPath').val('');
    $('#desc').val('');
    $('#keywords').val('');

    $('#id').val(data.id);
    $('#pageSlug').val(data.page_slug);
    $('#title').val(data.meta_title);
    $('#urlPath').val(data.url_path);
    $('#desc').val(data.meta_description);
    $('#keywords').val(data.meta_keywords);
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

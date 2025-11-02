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
    const fileInput = document.getElementById('icon_image');

    if (fileInput.files.length === 0) {
        swal("Oops!", "Please Select the Image...", "error");
    } else {
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
    }
});

// --------------------
// Auto-generate slug
// --------------------
$('#category').on('keyup', function () {
    let slug = $(this).val()
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-');
    $('#slug').val(slug);
});

function loadFile(event, targetId) {
    const output = document.getElementById(targetId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src); // Free memory
    }
}

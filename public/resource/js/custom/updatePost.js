
$(function () {
    "use strict";
    CKEDITOR.replace('post_content')
    CKEDITOR.replace('post_highlight_content')
    //$('#post_content').wysihtml5();		
    // $('#post_highlight_content').wysihtml5();		

});

function getCategory() {

    $.ajax({
        url: base_url + 'get-category/' + 0,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setCategory(response.data);
            }
        },
        error: function () {
            swal("Error", "Unable to fetch category data.", "error");
        }


    });

    function setCategory(data) {
        // Empty existing options except first
        $('#category_id').find('option:not(:first)').remove();

        // Loop through response and append options
        $.each(data, function (index, category) {

            if (category.is_active === '1') {
                $('#category_id').append(
                    $('<option>', {
                        value: category.id,
                        text: category.name
                    })
                );
            }
        });
    }
}
getCategory();

function loadFile(event, targetId) {
    const output = document.getElementById(targetId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src); // Free memory
    }
}
// Cancel button → Go back to category list
$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/post');
})

function getPostById(id) {
    $.ajax({
        url: base_url + 'get-post/' + id,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setPost(response.data);
            } else {
                swal("Error", "Category not found.", "error");
            }
        },
        error: function () {
            swal("Error", "Unable to fetch category data.", "error");
        }
    });
}

// Initialize: Load the category info for this ID
getPostById(id);

// --------------------
// Set form data
// --------------------
function setPost(data) {
    //console.log('Fetched Category:', data);
    $('#id').val(data.id);
    $('#otherdpre').attr('src', base_url + data.img_url);
    $('#title').val(data.title);
    $('#slug').val(data.slug);

    $('#category_id').val(data.category_id);

    $('#status').val(data.status);
    //ckeditor
    $('#post_highlight_content').val(data.highlight_text);
    $('#post_content').val(data.body);

    if (data.is_popular == 1 || data.is_popular === '1') {
        $('#checkbox_1').prop('checked', true);
    } else {
        $('#checkbox_1').prop('checked', false);
    }
}

// --------------------
// Update Category (Submit Form)
// --------------------
$('#addPostForm').on('submit', function (e) {
    e.preventDefault();
    var isPopular = 0;
    if ($('#checkbox_1').is(':checked')) {
        isPopular = 1;
    }
    const post_content = CKEDITOR.instances.post_content.getData();
    const post_highlight_content = CKEDITOR.instances.post_highlight_content.getData();
    var returnVal = $("#addPostForm").valid();
    var formdata = new FormData(this);
    formdata.append("popular",isPopular);
    formdata.append("empId", empData.id);
    formdata.append("postId", empData.id);
    formdata.append("post_highlight_content", post_highlight_content);
    formdata.append("post_content", post_content);
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
                        //$(location).attr('href', base_url + 'blog/post111');
                    });
                } else {
                    // Handle non-200 but successful request
                    swal("Oops!", response.message, "error");
                }
            },
        });
    }
});

// --------------------
// Auto-generate slug
// --------------------
// $('#category').on('keyup', function () {
//     let slug = $(this).val()
//         .toLowerCase()
//         .trim()
//         .replace(/[^a-z0-9\s-]/g, '')
//         .replace(/\s+/g, '-');
//     $('#slug').val(slug);
// });

// --------------------
// Form Validation
// --------------------
$("#addPostForm").validate({
    rules: {
        name: { required: true },
        slug: { required: true }
    },
    messages: {
        name: "Please enter category name",
        slug: "Please enter slug"
    }
});

$('#title').on('keyup', function () {
    let slug = $(this).val()
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-');
    $('#slug').val(slug);
});
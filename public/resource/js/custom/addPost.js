
$(function () {
    "use strict";
    CKEDITOR.replace('post_content')
    CKEDITOR.replace('post_highlight_content')
   	//$('#post_content').wysihtml5();		
   	// $('#post_highlight_content').wysihtml5();		
	
  });

$(document).ready(function () {

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
});

function loadFile(event, targetId) {
    const output = document.getElementById(targetId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src); // Free memory
    }
}

$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/post');
})


$('#addPostForm').on('submit', function (e) {
    e.preventDefault();
    const post_content = CKEDITOR.instances.post_content.getData();
    const post_highlight_content = CKEDITOR.instances.post_highlight_content.getData();
    var returnVal = $("#addPostForm").valid();
    var formdata = new FormData(this);
        formdata.append("empId",empData.id);
        formdata.append("post_highlight_content",post_highlight_content);
        formdata.append("post_content",post_content);
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

$('#title').on('keyup', function () {
    let slug = $(this).val()
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-');
    $('#slug').val(slug);
});
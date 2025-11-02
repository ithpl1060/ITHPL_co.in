$(function () {
    "use strict";

    // Initialize CKEditor first
    CKEDITOR.replace('post_content');
    CKEDITOR.replace('post_highlight_content');

    // Wait for both editors to be ready
    const waitForEditors = () => {
        return new Promise((resolve) => {
            const checkReady = setInterval(() => {
                if (CKEDITOR.instances.post_content && CKEDITOR.instances.post_highlight_content) {
                    clearInterval(checkReady);
                    resolve();
                }
            }, 200);
        });
    };

    // Load categories
    function getCategory() {
        return $.ajax({
            url: base_url + 'get-category/0',
            type: 'GET',
            dataType: 'json'
        }).then(function (response) {
            if (response.status === 200 && response.data) {
                setCategory(response.data);
            } else {
                swal("Error", "No categories found.", "error");
            }
        }).catch(function () {
            swal("Error", "Unable to fetch category data.", "error");
        });
    }

    function setCategory(data) {
        const $category = $('#category_id');
        $category.find('option:not(:first)').remove();

        $.each(data, function (index, category) {
            if (category.is_active === '1') {
                $category.append(
                    $('<option>', {
                        value: category.id,
                        text: category.name
                    })
                );
            }
        });
    }

    // Load post data
    function getPostById(id) {
        return $.ajax({
            url: base_url + 'get-post/' + id,
            type: 'GET',
            dataType: 'json'
        }).then(function (response) {
            if (response.status === 200 && response.data) {
                setPost(response.data);
            } else {
                swal("Error", "Post not found.", "error");
            }
        }).catch(function () {
            swal("Error", "Unable to fetch post data.", "error");
        });
    }

    // Set post form fields
    function setPost(data) {
        $('#id').val(data.id);
        $('#otherdpre').attr('src', base_url + data.img_url);
        $('#title').val(data.title);
        $('#slug').val(data.slug);
        $('#category_id').val(data.category_id);
        $('#status').val(data.status);

        // Use CKEditor API instead of jQuery .html()
        CKEDITOR.instances.post_highlight_content.setData(data.highlight_text || '');
        CKEDITOR.instances.post_content.setData(data.body || '');

        $('#checkbox_1').prop('checked', data.is_popular == 1);
    }

    // Handle image preview
    window.loadFile = function (event, targetId) {
        const output = document.getElementById(targetId);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src);
        };
    };

    // Cancel → go back
    $('#cancelBtn').click(function () {
        $(location).attr('href', base_url + 'blog/post');
    });

    // Initialize everything in sequence
    (async function init() {
        await waitForEditors();
        await getCategory();
        await getPostById(id); // assumes global id exists
    })();

    // Submit handler
    $('#addPostForm').on('submit', function (e) {
        e.preventDefault();

        const isPopular = $('#checkbox_1').is(':checked') ? 1 : 0;
        const post_content = CKEDITOR.instances.post_content.getData();
        const post_highlight_content = CKEDITOR.instances.post_highlight_content.getData();

        if (!$("#addPostForm").valid()) return;

        const formdata = new FormData(this);
        formdata.append("popular", isPopular);
        formdata.append("empId", empData.id);
        formdata.append("postId", empData.id);
        formdata.append("post_highlight_content", post_highlight_content);
        formdata.append("post_content", post_content);

        $.ajax({
            url: base_url + 'post',
            type: 'POST',
            headers: { "Authorization": token },
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (response) {
                if (response.status === 200) {
                    swal("Success!", response.message, "success").then(() => {
                        $(location).attr('href', base_url + 'blog/post');
                    });
                } else {
                    swal("Oops!", response.message, "error");
                }
            },
            error: function () {
                swal("Error", "Failed to update post.", "error");
            }
        });
    });

    // Form validation
    $("#addPostForm").validate({
        rules: {
            title: { required: true },
            slug: { required: true }
        },
        messages: {
            title: "Please enter post title",
            slug: "Please enter slug"
        }
    });

    // Auto-generate slug from title
    $('#title').on('keyup', function () {
        let slug = $(this).val()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-');
        $('#slug').val(slug);
    });
});

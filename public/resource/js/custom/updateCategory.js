

// Cancel button → Go back to category list
$('#cancelBtn').click(function () {
    $(location).attr('href', base_url + 'blog/category');
});

// --------------------
// Fetch category data
// --------------------
function updateCategory(id) {
    $.ajax({
        url: base_url + 'get-category/' + id,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.status === 200 && response.data) {
                setCategory(response.data);
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
updateCategory(id);

// --------------------
// Set form data
// --------------------
function setCategory(data) {
    console.log('Fetched Category:', data);
    $('#id').val(data.id);
    $('#category').val(data.name);
    $('#slug').val(data.slug);

    if (data.is_active == 1 || data.is_active === '1') {
        $('#checkbox_1').prop('checked', true);
    } else {
        $('#checkbox_1').prop('checked', false);
    }
}

// --------------------
// Update Category (Submit Form)
// --------------------
$('#UpdateCategoryForm').on('submit', function (e) {
    e.preventDefault();

    const isValid = $("#UpdateCategoryForm").valid(); // Optional, if using jQuery Validate
    if (!isValid) return;

    const categoryId = $('#id').val();
    const formData = new FormData(this);

    $.ajax({
        url: base_url + 'update-category/' + categoryId,   // ✅ correct endpoint
        type: 'POST',
        headers: { "Authorization": token },
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (response) {
            if (response.status === 200) {
                swal("Success!", response.message, "success").then(() => {
                    $(location).attr('href', base_url + 'blog/category'); // ✅ correct redirect
                });
            } else {
                swal("Oops!", response.message, "error");
            }
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
            swal("Error!", "Something went wrong during update.", "error");
        }
    });
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

// --------------------
// Form Validation
// --------------------
$("#UpdateCategoryForm").validate({
    rules: {
        name: { required: true },
        slug: { required: true }
    },
    messages: {
        name: "Please enter category name",
        slug: "Please enter slug"
    }
});

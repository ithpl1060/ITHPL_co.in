// Redirect to Create post page
$('#addPostBtn').click(function () {
    window.location.href = base_url + 'blog/post/create-post';
});

$(document).ready(function () {
    $('#postsList').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-post', // Adjust this if your route uses a prefix
            type: 'GET'
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1 + meta.settings._iDisplayStart;
                },
                orderable: false
            },
            { data: 'title' },
            { data: 'slug' },
            { data: 'status' },
            { data: 'created_at' },
            { data: 'update_at' },
            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button class="btn-view" data-id="${data}">View</button>
                        <button class="btn-edit" data-id="${data}">Edit</button>
                        <button class="btn-edit" data-id="${data}">Delete</button>
                    `;
                }
            }
        ],
        order: [[0, 'desc']]
    });
});


// -------------------- post Functions --------------------

// Redirect to post Update page
// function updatepostDetails(id) {
//     console.log('Updating post ID:', id);
//     window.location.href = base_url + 'post/update/' + id;
// }

// Delete post record
// function deletepostDetails(id) {
//     console.log('Deleting post ID:', id);

//     $.ajax({
//         url: base_url + 'post/' + id,
//         type: 'DELETE',
//         dataType: 'json',
//         success: function (response) {
//             if (response.status === 200) {
//                 swal("Good job!", response.message, "success").then(() => {
//                     window.location.reload(); // Reload after SweetAlert confirmation
//                 });
//             } else {
//                 swal("Error!", response.message, "error");
//             }
//         },
//         error: function (xhr, status, error) {
//             console.error('AJAX Error:', error);
//             swal("Error!", "Something went wrong while deleting.", "error");
//         }
//     });
// }
// View Button (optional — only if you plan to create a view page)
$('#postList').on('click', '.btn-view', function () {
    const id = $(this).data('id');
    console.log('Viewing post ID:', id);
    window.location.href = base_url + 'blog/view/' + id; // only works if you add this route
});

// Edit Button
$('#postList').on('click', '.btn-edit', function () {
    const id = $(this).data('id');
    console.log('Editing post ID:', id);
    window.location.href = base_url + 'blog/updatepost/' + id;
});


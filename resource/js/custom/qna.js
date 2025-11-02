// Redirect to Create Q&A page
$('#addQnaBtn').click(function () {
    window.location.href = base_url + 'blog/qna/create';
});

$(document).ready(function () {

    // Initialize DataTable
    const qnaTable = $('#qnaList').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-qna',
            type: 'POST',
            error: function (xhr, error, thrown) {
                console.log("Ajax Error:", xhr.responseText);
            }
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1 + meta.settings._iDisplayStart;
                },
                orderable: false
            },
            { data: 'post' }, // You can replace with post title via server-side join
            { data: 'question' },
            { data: 'answer' },
            {
                data: 'status',
                render: function (data) {
                    if (data === 'Published') {
                        return `<span class="badge bg-success text-white rounded-pill px-3 py-2">${data}</span>`;
                    } else {
                        return `<span class="badge bg-warning text-white rounded-pill px-3 py-2">${data}</span>`;
                    }
                }
            },
            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data) {
                    return `<a href="javascript:void(0);" class="edit-qna" data-id="${data}" title="Update Q&A">
                                <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i>
                            </a>`;
                }
            }
        ],
        order: [[0, 'desc']]
    });

    // Delegate click for dynamic edit buttons
    $(document).on('click', '.edit-qna', function () {
        const id = $(this).data('id');
        updateQnaDetails(id);
    });
});

// Redirect to update page
function updateQnaDetails(id) {
    window.location.href = base_url + 'blog/qna/update/' + id;
}

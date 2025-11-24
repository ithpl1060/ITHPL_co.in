console.log('mail');



$(document).ready(function () {
    $('#mailTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: 'fetchMail', // server-side endpoint for mails
            type: 'POST'
        },
        columns: [
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + 1 + meta.settings._iDisplayStart;
                },
                orderable: false
            },
            { data: 'email' },
            {data : 'source_page'},
            { data: 'created_at' }
        ],
        order: [[0, 'desc']]
    });
});




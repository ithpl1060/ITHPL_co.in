// Redirect to Create post page
$('#addPostBtn').click(function () {
    window.location.href = base_url + 'blog/post/create';
});

$(document).ready(function () {
    $('#postsList').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'get-post', // Adjust this if your route uses a prefix
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
            { data: 'title' },
            { data: 'category' },
            { data: 'slug' },
            {
                data: 'status',
                render: function (data, type, row) {
                    // console.log('Data='+data)
                    //return data;
                    if (data === 'published') {
                        return `<span class="badge bg-success text-white rounded-pill px-5 py-5" style="border-radius: 50px;">
                                ${data}
                                </span>`;
                    } else {
                        return `<span class="badge bg-warning  text-white rounded-pill px-5 py-5 style="border-radius: 60px;">
                                ${data}
                                </span>`;
                    }
                }
            },
            { data: 'created_by' },
            {
                data: 'created_at',
                render: function (data, type, row) {
                    const date = new Date(data);
                    // Get parts
                    const day = date.getDate();
                    const month = date.toLocaleString('en-US', { month: 'short' }).toUpperCase();
                    const year = date.getFullYear();

                    // Format time in 12-hour format
                    const hours = date.getHours() % 12 || 12; // convert to 12h format
                    const minutes = String(date.getMinutes()).padStart(2, '0');
                    const ampm = date.getHours() >= 12 ? 'PM' : 'AM';

                    // Combine all
                    const formattedDateTime = `${day} ${month} ${year}, ${hours}:${minutes} ${ampm}`;
                    return formattedDateTime;
                }
            },
            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    console.log('dta:'+data)
                    return `<a href="javascript:void(0);" onclick="updatePostDetails(${data})" title="Update Category ">
                    <i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a>`;
                }
            }
        ],
        order: [[0, 'desc']]
    });
});



function updatePostDetails(id) {

    $(location).attr('href', base_url + 'blog/post/update/' + id);

}
$(document).ready(function () {
    // Determine Base URL
    var baseUrl = (typeof base_url !== 'undefined' ? base_url : window.location.origin + '/');
    if (!baseUrl.endsWith('/')) {
        baseUrl += '/';
    }

    // Load initial stats
    loadAppleLeadStats();

    // Initialize DataTable
    var table = $('#appleLeadsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        dom: "<'row mb-3'<'col-md-6 d-flex align-items-center'B><'col-md-6 text-right'f>>rt<'row mt-3'<'col-md-5'i><'col-md-7'p>>",
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o mr-1"></i> Excel',
                className: 'btn btn-sm btn-outline-success mr-1',
                title: 'Apple_Product_Leads_Report',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-file-text-o mr-1"></i> CSV',
                className: 'btn btn-sm btn-outline-info mr-1',
                title: 'Apple_Product_Leads_Report',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf-o mr-1"></i> PDF',
                className: 'btn btn-sm btn-outline-danger mr-1',
                title: 'Apple Product Leads Report',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print mr-1"></i> Print',
                className: 'btn btn-sm btn-outline-secondary mr-1',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            },
            {
                extend: 'copy',
                text: '<i class="fa fa-copy mr-1"></i> Copy',
                className: 'btn btn-sm btn-outline-dark mr-1',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                }
            }
        ],
        ajax: {
            url: baseUrl + 'fetchAppleLeads',
            type: 'POST',
            error: function (xhr, error, thrown) {
                console.error('DataTables error:', error, thrown);
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
            {
                data: 'full_name',
                render: function (data) {
                    return '<strong>' + (data || '-') + '</strong>';
                }
            },
            {
                data: 'phone',
                render: function (data) {
                    return data ? '<a href="tel:' + data + '" class="text-primary font-weight-500"><i class="fa fa-phone mr-1"></i>' + data + '</a>' : '-';
                }
            },
            {
                data: 'work_email',
                render: function (data) {
                    return data ? '<a href="mailto:' + data + '" class="text-dark"><i class="fa fa-envelope-o mr-1"></i>' + data + '</a>' : '-';
                }
            },
            { data: 'company_name' },
            {
                data: 'product_name',
                render: function (data) {
                    return data && data !== '-' ? '<span class="badge badge-primary">' + data + '</span>' : '-';
                }
            },
            {
                data: 'specs_summary',
                render: function (data) {
                    if (!data || data === '-') return '-';
                    // Truncate long specs to 40 chars
                    var truncated = data.length > 40 ? data.substring(0, 40) + '…' : data;
                    return '<small title="' + data + '">' + truncated + '</small>';
                }
            },
            { data: 'fleet_qty' },
            { data: 'city' },
            {
                data: 'ref_id',
                render: function (data) {
                    return data && data !== '-' ? '<code class="text-dark">' + data + '</code>' : '-';
                }
            },
            { data: 'created_at' },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ],
        order: [[10, 'desc']]
    });

    // Refresh Table Button
    $('#btnRefreshAppleTable').on('click', function () {
        table.ajax.reload(null, false);
        loadAppleLeadStats();
    });

    // Function to load summary statistics
    function loadAppleLeadStats() {
        $.ajax({
            url: baseUrl + 'getAppleLeadStats',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                if (res && res.status === 200 && res.data) {
                    $('#statAppleTotalLeads').text(res.data.total);
                    $('#statAppleTodayLeads').text(res.data.today);
                    $('#statAppleMonthLeads').text(res.data.this_month);
                }
            },
            error: function () {
                console.log('Could not fetch Apple lead stats');
            }
        });
    }

    // View Apple Lead Details in Modal
    $('#appleLeadsTable').on('click', '.view-apple-lead-btn', function () {
        var leadId = $(this).data('id');
        if (!leadId) return;

        $.ajax({
            url: baseUrl + 'apple-lead/' + leadId,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                if (res && res.status === 200 && res.data) {
                    var d = res.data;
                    $('#appleLeadFullName').text(d.full_name || '-');
                    $('#appleLeadPhone').html(d.phone ? '<a href="tel:' + d.phone + '">' + d.phone + '</a>' : '-');
                    $('#appleLeadWorkEmail').html(d.work_email ? '<a href="mailto:' + d.work_email + '">' + d.work_email + '</a>' : '-');
                    $('#appleLeadCity').text(d.city || '-');
                    $('#appleLeadCompanyName').text(d.company_name || '-');
                    $('#appleLeadFleetQty').text(d.fleet_qty || '-');
                    $('#appleLeadGstin').text(d.gstin || '-');
                    $('#appleLeadRefId').text(d.ref_id || '-');
                    $('#appleLeadProductName').text(d.product_name || '-');
                    $('#appleLeadSpecsSummary').text(d.specs_summary || '-');
                    $('#appleLeadDeploymentServices').text(d.deployment_services || '-');
                    $('#appleLeadNotes').text(d.notes || '-');
                    $('#appleLeadSourcePage').text(d.source_page || 'apple_product');
                    $('#appleLeadIpAddress').text(d.ip_address || '-');
                    $('#appleLeadCreatedAt').text(d.created_at || '-');
                    $('#appleLeadUserAgent').text(d.user_agent || '-');

                    $('#modalViewAppleLead').modal('show');
                } else {
                    swal('Error', 'Unable to fetch lead details.', 'error');
                }
            },
            error: function () {
                swal('Error', 'An error occurred while loading lead information.', 'error');
            }
        });
    });

    // Delete Apple Lead Handler
    $('#appleLeadsTable').on('click', '.delete-apple-lead-btn', function () {
        var leadId = $(this).data('id');
        if (!leadId) return;

        swal({
            title: "Delete Lead Entry?",
            text: "Are you sure you want to permanently delete this Apple lead submission?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: baseUrl + 'apple-lead/' + leadId,
                type: 'DELETE',
                dataType: 'json',
                success: function (res) {
                    if (res && res.status === 200) {
                        swal("Deleted!", "Lead entry has been removed.", "success");
                        table.ajax.reload(null, false);
                        loadAppleLeadStats();
                    } else {
                        swal("Error", res.message || "Failed to delete lead.", "error");
                    }
                },
                error: function () {
                    swal("Error", "Server error while deleting lead.", "error");
                }
            });
        });
    });
});

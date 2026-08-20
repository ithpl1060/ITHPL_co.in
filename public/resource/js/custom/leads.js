$(document).ready(function () {
    // Determine Base URL
    var baseUrl = (typeof base_url !== 'undefined' ? base_url : window.location.origin + '/');
    if (!baseUrl.endsWith('/')) {
        baseUrl += '/';
    }

    // Load initial stats
    loadLeadStats();

    // Initialize DataTable
    var table = $('#leadsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        dom: "<'row mb-3'<'col-md-6 d-flex align-items-center'B><'col-md-6 text-right'f>>rt<'row mt-3'<'col-md-5'i><'col-md-7'p>>",
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o mr-1"></i> Excel',
                className: 'btn btn-sm btn-outline-success mr-1',
                title: 'HP_AI_PCs_Leads_Report',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-file-text-o mr-1"></i> CSV',
                className: 'btn btn-sm btn-outline-info mr-1',
                title: 'HP_AI_PCs_Leads_Report',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf-o mr-1"></i> PDF',
                className: 'btn btn-sm btn-outline-danger mr-1',
                title: 'HP AI PCs Leads Report',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print mr-1"></i> Print',
                className: 'btn btn-sm btn-outline-secondary mr-1',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            },
            {
                extend: 'copy',
                text: '<i class="fa fa-copy mr-1"></i> Copy',
                className: 'btn btn-sm btn-outline-dark mr-1',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
                }
            }
        ],
        ajax: {
            url: baseUrl + 'fetchLeads',
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
                data: 'mobile_number',
                render: function (data) {
                    return data ? '<a href="tel:' + data + '" class="text-primary font-weight-500"><i class="fa fa-phone mr-1"></i>' + data + '</a>' : '-';
                }
            },
            {
                data: 'business_email',
                render: function (data) {
                    return data ? '<a href="mailto:' + data + '" class="text-dark"><i class="fa fa-envelope-o mr-1"></i>' + data + '</a>' : '-';
                }
            },
            { data: 'company_name' },
            { data: 'designation' },
            { data: 'city' },
            { data: 'consent_processing' },
            { data: 'consent_marketing' },
            { data: 'created_at' },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ],
        order: [[9, 'desc']]
    });

    // Refresh Table Button
    $('#btnRefreshTable').on('click', function () {
        table.ajax.reload(null, false);
        loadLeadStats();
    });

    // Function to load summary statistics
    function loadLeadStats() {
        $.ajax({
            url: baseUrl + 'getLeadStats',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                if (res && res.status === 200 && res.data) {
                    $('#statTotalLeads').text(res.data.total);
                    $('#statTodayLeads').text(res.data.today);
                    $('#statMonthLeads').text(res.data.this_month);
                }
            },
            error: function () {
                console.log('Could not fetch lead stats');
            }
        });
    }

    // View Lead Details in Modal
    $('#leadsTable').on('click', '.view-lead-btn', function () {
        var leadId = $(this).data('id');
        if (!leadId) return;

        $.ajax({
            url: baseUrl + 'lead/' + leadId,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                if (res && res.status === 200 && res.data) {
                    var d = res.data;
                    $('#leadFullName').text(d.full_name || '-');
                    $('#leadMobileNumber').html(d.mobile_number ? '<a href="tel:' + d.mobile_number + '">' + d.mobile_number + '</a>' : '-');
                    $('#leadBusinessEmail').html(d.business_email ? '<a href="mailto:' + d.business_email + '">' + d.business_email + '</a>' : '-');
                    $('#leadCity').text(d.city || '-');
                    $('#leadCompanyName').text(d.company_name || '-');
                    $('#leadDesignation').text(d.designation || '-');
                    $('#leadSourcePage').text(d.source_page || 'hpaipcs');
                    $('#leadCreatedAt').text(d.created_at || '-');

                    $('#leadConsentProcessing').html(d.consent_processing == 1 ? '<span class="badge badge-success">Accepted (Yes)</span>' : '<span class="badge badge-secondary">No</span>');
                    $('#leadConsentMarketing').html(d.consent_marketing == 1 ? '<span class="badge badge-info">Agreed (Yes)</span>' : '<span class="badge badge-secondary">No</span>');
                    $('#leadIpAddress').text(d.ip_address || '-');
                    $('#leadUserAgent').text(d.user_agent || '-');

                    $('#modalViewLead').modal('show');
                } else {
                    swal('Error', 'Unable to fetch lead details.', 'error');
                }
            },
            error: function () {
                swal('Error', 'An error occurred while loading lead information.', 'error');
            }
        });
    });

    // Delete Lead Handler
    $('#leadsTable').on('click', '.delete-lead-btn', function () {
        var leadId = $(this).data('id');
        if (!leadId) return;

        swal({
            title: "Delete Lead Entry?",
            text: "Are you sure you want to permanently delete this lead submission?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: baseUrl + 'lead/' + leadId,
                type: 'DELETE',
                dataType: 'json',
                success: function (res) {
                    if (res && res.status === 200) {
                        swal("Deleted!", "Lead entry has been removed.", "success");
                        table.ajax.reload(null, false);
                        loadLeadStats();
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

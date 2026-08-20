<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            HP AI PCs - Leads & Instant Access Submissions
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">HP AI Leads</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Stat KPI Cards Row -->
        <div class="row">
            <div class="col-xl-4 col-md-6 col-12">
                <div class="box box-body bg-primary">
                    <div class="flexbox">
                        <span class="fa fa-users font-size-40"></span>
                        <div class="text-right">
                            <h3 class="font-weight-600 mb-0" id="statTotalLeads">--</h3>
                            <span>Total Leads Captured</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="box box-body bg-success">
                    <div class="flexbox">
                        <span class="fa fa-calendar-check-o font-size-40"></span>
                        <div class="text-right">
                            <h3 class="font-weight-600 mb-0" id="statTodayLeads">--</h3>
                            <span>Leads Received Today</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        <span class="fa fa-calendar font-size-40"></span>
                        <div class="text-right">
                            <h3 class="font-weight-600 mb-0" id="statMonthLeads">--</h3>
                            <span>Leads This Month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between align-items-center">
                <h3 class="box-title"><i class="fa fa-list mr-2"></i> HP AI PCs Lead Submissions</h3>

                <div class="box-controls pull-right d-flex align-items-center">
                    <a href="<?= base_url('exportLeads') ?>" class="btn btn-success btn-sm mr-2" id="btnExportExcel" title="Download Complete Excel / CSV Report">
                        <i class="fa fa-file-excel-o mr-1"></i> Export to Excel (.csv)
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm mr-2" id="btnRefreshTable" title="Refresh Table">
                        <i class="fa fa-refresh mr-1"></i> Refresh
                    </button>
                    <ul class="box-controls" style="display:inline-flex; list-style:none; margin:0; padding:0;">
                        <li><a class="box-btn-slide" href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                    </ul>
                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive">
                    <table id="leadsTable" class="table table-bordered table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Full Name</th>
                                <th>Mobile Number</th>
                                <th>Business Email</th>
                                <th>Company</th>
                                <th>Designation</th>
                                <th>City</th>
                                <th>Processing Consent</th>
                                <th>Marketing Consent</th>
                                <th>Submitted Date</th>
                                <th style="width: 80px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Server-side populated -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Mobile Number</th>
                                <th>Business Email</th>
                                <th>Company</th>
                                <th>Designation</th>
                                <th>City</th>
                                <th>Processing Consent</th>
                                <th>Marketing Consent</th>
                                <th>Submitted Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

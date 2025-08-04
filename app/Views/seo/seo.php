<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SEO
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('seo') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li class="breadcrumb-item"><a href="#">Master</a></li>-->
            <!-- <li class="breadcrumb-item active">Master</li> -->
            <li class="breadcrumb-item active">SEO</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">SEO List</h3>

                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
                <!--table start-->
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border box-controls pull-right">
                            <button type="button" class="btn btn-primary" id="addSeoBtn">Add</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="seoTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SR NO</th>
                                            <th>PAGE SLUG</th>
                                            <th>TITLE</th>
                                            <th>URL PATH</th>
                                            <th>DESCRIPTION</th>
                                            <th>KEYWORDS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="seoList">

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SR NO</th>
                                            <th>PAGE SLUG</th>
                                            <th>TITLE</th>
                                            <th>URL PATH</th>
                                            <th>DESCRIPTION</th>
                                            <th>KEYWORDS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!--table end-->

            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
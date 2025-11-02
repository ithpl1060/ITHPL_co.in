<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Q&A
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/qna') ?>">
                    <i class="fa fa-question-circle-o"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Blogs</a>
            </li>
            <li class="breadcrumb-item active">Q&A</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Q&A List:</h3>

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
                            <button type="button" class="btn btn-primary" id="addQnaBtn">New</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="qnaList" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>POST</th>
                                            <th>QUESTION</th>
                                            <th>ANSWER</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody id="qnaListBody">
                                        <!-- Data will be dynamically populated here -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>POST</th>
                                            <th>QUESTION</th>
                                            <th>ANSWER</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
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

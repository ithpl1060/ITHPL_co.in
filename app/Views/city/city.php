<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            City
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li class="breadcrumb-item"><a href="#">Master</a></li>-->
            <!-- <li class="breadcrumb-item active">Location</li> -->
            <li class="breadcrumb-item active">City</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">City List</h3>

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
                        <!-- <div class="box-header with-border box-controls pull-right"> -->

                        <!--<div class="box-controls pull-right">-->
                        <!--<button id="row-count" class="btn btn-xs btn-primary">Row count</button>-->
                        <!-- <button type="button" class="btn btn-primary" id="addStateBtn">Add State</button> -->
                        <!--</div>-->
                        <!-- </div> -->
                        <div class="box-header with-border box-controls pull-right">

                            <button type="button"
                                class="btn btn-lg"
                                id="addCityBtn"
                                style="padding: 3px 30px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.2s; background-color: #007bff; color: white; border: none;"
                                data-toggle="modal"
                                data-target="#addCityModal"
                                onmouseover="this.style.transform='scale(1.05)'; this.style.backgroundColor='#0056b3';"
                                onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#007bff';">
                                + New
                            </button>
                            <!--</div>-->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="cityTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cityList">

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Action</th>
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
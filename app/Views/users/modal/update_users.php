<div class="modal fade bs-example-modal-lg" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form start-->
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">User Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form" id="updateUserForm" method="post">
                    <div class="box-body">

                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><span class="error">*</span>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="uFirst_name" name="uFirst_name">
                                    <input type="hidden" class="form-control" id="uid" name="uid">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" id="uLast_name" name="uLast_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" placeholder="Enter Contact" id="uContact" name="uContact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><span class="error">*</span>Email Id</label>
                                    <input type="email" class="form-control" placeholder="Email id" name="uEmail" id="uEmail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
                <!--form end-->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
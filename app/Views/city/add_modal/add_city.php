<div class="modal fade bs-example-modal-lg" id="addCityModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form start-->
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">City Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form" id="addCityForm" method="post">
                    <div class="box-body">
                        <h4 class="box-title text-info"><i class="fa fa-map-marker mr-15"></i> City Info </h4>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><span class="error">*</span>State</label>
                                    <select class="form-control select2" name="state_id" id="state_id" style="width:100%;" required>

                                    </select>
                                    <input type="hidden" class="form-control" id="id" name="id">
                                    <input type="hidden" class="form-control" id="country_id" name="country_id" value="1">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><span class="error">*</span>Enter City</label>
                                    <input type="text" class="form-control" placeholder="Enter City" id="city" name="city" required>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-right">
                        <!-- <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button> -->

                        <button type="submit" class="btn btn-outline-primary">
                            <i class="ti-save-alt"></i> Save
                        </button>
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
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
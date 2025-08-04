<div class="modal fade bs-example-modal-lg" id="viewReqModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--form start-->
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Details</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form class="form" id="viewRequestForm" method="post">
                    <!-- <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Requested ID</label>
                                    <p class="text-muted" id="requestId">ID001</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Requester Name</label>
                                    <p class="text-muted" id="requester_name">Jane Smith</p>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Request</label>
                                    <p class="text-muted" id="requestDate">01/11/2024</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Requester Division</label>
                                    <p class="text-muted" id="requester_division">DIV A</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <p class="text-muted" id="eventDate">15/12/2024</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Budget Required</label>
                                    <p class="text-muted" id="budgetReq">$5000</p>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Req Line Manager</label>
                                    <p class="text-muted" id="req_line_manager">Manager</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="d-flex align-items-center">
                                        <p class="text-muted" id="status">Pending</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sales Head</label>
                                    <p class="text-muted" id="salesHead">Smith</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Approved Amount</label>
                                    <p class="text-muted" id="aprAmt">$4500</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Business Head</label>
                                    <p class="text-muted" id="busiHead">Sr. Manager</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Event</label>
                                    <p class="text-muted" id="eventId">Event 1</p>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sr. Manager</label>
                                    <p class="text-muted" id="manager">David</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Management Team</label>
                                    <p class="text-muted" id="cip">Management Team 1</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Finance Team</label>
                                    <p class="text-muted" id="cip">Finance Team 1</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Management Team</label>
                                    <p class="text-muted" id="cip">Management Team 2</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sales HR Team</label>
                                    <p class="text-muted" id="cip">Sales HR Team 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Event Description</label>
                                    <p class="text-muted" id="eventDesc">This is a sample event description.</p>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div> -->


                    <div class="box-body">
                        <table style="clear: both" class="table table-bordered table-striped" id="user">
                            <tbody>
                                <tr>
                                    <td class="w-p30">Simple text field</td>
                                    <td><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                                </tr>
                                <tr>
                                    <td>Empty text field, required</td>
                                    <td>
                                        <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Select, local array, custom display</td>
                                    <td>
                                        <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Select, error while loading</td>
                                    <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                                </tr>
                                <tr>
                                    <td>Combodate</td>
                                    <td>
                                        <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textarea, buttons below</td>
                                    <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="modal-footer text-right">
                        <button type="button" class="btn waves-effect text-left text-white"
                            style="background: linear-gradient(145deg, #b0b0b0, #8e8e8e);"
                            data-dismiss="modal">Cancel</button>

                        <button type="button" class="btn btn-success" onclick="window.print();">
                            <i class="fa fa-print"></i> Print
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
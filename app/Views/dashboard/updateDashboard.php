<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Requests
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Requests</li>
        </ol>
    </section>

    <!-- </?php print_r($requestData['fileUpload']); exit;?> -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-- <h2 class="box-title">UserName</h2><br> -->
                <h4 class="box-title">Requests</h4>

                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
                <form class="form" id="addRequestForm" method="post" action="/super/manager_request" enctype="multipart/form-data">
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-12">
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger" id="flashMessage" style="max-width: 100%; width: auto;">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Requester Id</label>
                                    <input type="text" class="form-control" placeholder="Requester Id" id="requesterId" name="requesterId" value="<?= esc($requestData['requesterId']) ?>" disabled>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of Request</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="requestDate"
                                        name="requestDate"
                                        value="<?= esc($requestData['requestDate']) ?>" disabled>
                                    <!-- </?php print_r($requestData['approvalStage']+1);  exit;?> -->

                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= esc($requestData['id']) ?>">
                                    <input type="hidden" class="form-control" id="empId" name="empId" value="<?= esc($requestData['empId']) ?>">
                                    <input type="hidden" class="form-control" id="approvalStage" name="approvalStage" value="<?= esc($requestData['approvalStage'] + 1) ?>">
                                    <input type="hidden" class="form-control" id="manager" name="manager" value="<?= esc($requestData['manager']) ?>">
                                    <input type="hidden" class="form-control" id="created_at" name="created_at" value="<?= esc($requestData['created_at']) ?>">
                                    <input type="hidden" class="form-control" id="fileLocation" name="fileLocation" value="<?= esc($requestData['fileUpload']) ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Requester Name</label>
                                    <input type="text" class="form-control" placeholder="Requester Name" id="requester_name" name="requester_name" value="<?= esc($requestData['requester_name']) ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Budget Required</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="budgetReq"
                                        name="budgetReq"
                                        placeholder="Enter Budget"
                                        value="<?= esc($requestData['budgetReq']) ?>"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input type="date" class="form-control" id="eventDate" name="eventDate" value="<?= esc($requestData['eventDate']) ?>" required disabled>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Approved Amount</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="approvedAmt"
                                        name="approvedAmt"
                                        placeholder="Enter Approved Amount"
                                        value="<?= esc($requestData['approvedAmt']) ?>"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hospital Name</label>
                                    <select class="form-control" name="hospitalName" id="hospitalName" style="width:100%;" disabled>
                                        <option value="" selected disabled>Please choose...</option>
                                        <?php if (!empty($hospitals)): ?>
                                            <?php foreach ($hospitals as $hospital): ?>
                                                <option
                                                    value="<?= esc($hospital['id']) ?>"
                                                    <?= $hospital['id'] == $requestData['hospitalName'] ? 'selected' : '' ?>>
                                                    <?= esc($hospital['hospitalName']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <option value="" disabled>No hospitals available</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Branch</label>
                                    <select class="form-control" name="branch" id="branch" style="width:100%;" disabled>
                                        <option value="" selected disabled>Please choose...</option>
                                        <?php if (!empty($branches)): ?>
                                            <?php foreach ($branches as $branch): ?>
                                                <option
                                                    value="<?= esc($branch['id']) ?>"
                                                    <?= $branch['id'] == $requestData['branch'] ? 'selected' : '' ?>>
                                                    <?= esc($branch['branchName']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <option value="" disabled>No branches available</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CIP</label>
                                    <input type="text" class="form-control" id="cip" name="cip" placeholder="Enter CIP" value="<?= esc($requestData['cip']) ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Existing Business</label>
                                    <input type="text" class="form-control" id="existBusiness" name="existBusiness" placeholder="Existing Business" value="<?= esc($requestData['existBusiness']) ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Expected Business</label>
                                    <input type="text" class="form-control" id="expectBusiness" name="expectBusiness" placeholder="Expected Business" value="<?= esc($requestData['expectBusiness']) ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Event Description</label>
                                    <textarea
                                        class="form-control"
                                        name="eventDesc"
                                        id="eventDesc"
                                        placeholder="Enter Event Description"
                                        rows="3" disabled><?= esc($requestData['eventDesc'] ?? '') ?>
                                    </textarea>

                                </div>
                            </div>

                            <div class="col-md-4" id="reasonField">
                                <div class="form-group">
                                    <label>Event Reason</label>
                                    <textarea
                                        class="form-control"
                                        name="reason"
                                        id="reason"
                                        placeholder="Enter Reason"
                                        rows="3"><?= esc($requestData['reason'] ?? '') ?></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div id="errorMsg" class="alert alert-danger" style="display: none;">
                                    File not found. Please try again later.
                                </div>
                            </div> -->


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><span class="error">*</span>Status</label>
                                    <select class="form-control" name="status" id="status" style="width:100%;" required>
                                        <option value="1" <?= empty($requestData['status']) ? 'selected' : '' ?>>Please Choose...</option>
                                        <option value="2" <?= (isset($requestData['status']) && $requestData['status'] == 2) ? 'selected' : '' ?>>Approved</option>
                                        <option value="4" <?= (isset($requestData['status']) && $requestData['status'] == 4) ? 'selected' : '' ?>>Resend</option>
                                        <option value="0" <?= (isset($requestData['status']) && $requestData['status'] == 0) ? 'selected' : '' ?>>Canceled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div id="errorMsg" class="alert alert-danger" style="max-width: 100%; width: auto; display: none;">
                                    File not Uploaded. Please try again later.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer text-right">
                        <!-- Cancel Button -->

                        <!-- Save Button -->
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="ti-save-alt"></i> Save
                        </button>
                        <button type="button"
                            class="btn btn-danger waves-effect text-left"
                            onclick="window.location.href='/approvalRequests';">Cancel</button>
                        <!-- <a href="</?= base_url($requestData['fileUpload'] ?? '') ?>"
                            id="downloadLink"
                            target="_blank"
                            class="btn btn-outline-primary"
                            download>
                            Download
                        </a> -->



                        <a id="downloadLink"
                            target="_blank"
                            class="btn btn-outline-primary"
                            download>
                            Download
                        </a>




                    </div>


                </form>

            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
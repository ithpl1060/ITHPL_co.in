<div id="changePasswordModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <div class="modal-header justify-content-center border-bottom-0">
                <h5 class="modal-title font-weight-bold mb-0" id="myModalLabel">Change Password</h5>
            </div>
            <div class="modal-body text-center px-4 py-4">

                <form id="changePasswordForm" method="post">
                    <div class="form-group mb-4">
                        <label class="font-weight-semibold mb-2">
                            <span class="text-danger">*</span> New Password
                        </label>
                        <input type="password" class="form-control rounded-pill text-center" placeholder="Enter New Password" id="uPassword" name="uPassword" style="font-size: 15px;">
                        <input type="hidden" id="pId" name="pId">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block rounded-pill py-2" style="font-weight: 500;">
                        <i class="ti-save-alt mr-1"></i> Save Password
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

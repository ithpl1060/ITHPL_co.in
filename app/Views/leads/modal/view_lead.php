<!-- View Lead Details Modal -->
<div class="modal fade" id="modalViewLead" tabindex="-1" role="dialog" aria-labelledby="modalViewLeadTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="modalViewLeadTitle">
                    <i class="fa fa-user-circle mr-2"></i> Lead Details
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <!-- Personal & Contact Info -->
                    <div class="col-md-6 mb-3">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-address-card-o mr-1"></i> Contact Information
                        </h6>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th style="width: 40%;" class="text-muted">Full Name:</th>
                                <td id="leadFullName" class="font-weight-600">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Mobile Number:</th>
                                <td id="leadMobileNumber">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Business Email:</th>
                                <td id="leadBusinessEmail">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">City:</th>
                                <td id="leadCity">-</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Professional / Company Info -->
                    <div class="col-md-6 mb-3">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-building-o mr-1"></i> Professional Details
                        </h6>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th style="width: 40%;" class="text-muted">Company Name:</th>
                                <td id="leadCompanyName" class="font-weight-600">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Designation:</th>
                                <td id="leadDesignation">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Source Page:</th>
                                <td id="leadSourcePage">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Submission Date:</th>
                                <td id="leadCreatedAt">-</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mt-2">
                    <!-- Consents & Compliance -->
                    <div class="col-12">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-shield mr-1"></i> Consent & Metadata
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Data Processing Consent:</small>
                                    <span id="leadConsentProcessing">-</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Marketing Communications Consent:</small>
                                    <span id="leadConsentMarketing">-</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light">
                                    <small class="text-muted d-block">IP Address:</small>
                                    <span id="leadIpAddress" class="text-monospace">-</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light">
                                    <small class="text-muted d-block">Browser / User Agent:</small>
                                    <span id="leadUserAgent" class="text-break small text-muted">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Apple Lead Details Modal -->
<div class="modal fade" id="modalViewAppleLead" tabindex="-1" role="dialog" aria-labelledby="modalViewAppleLeadTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="modalViewAppleLeadTitle">
                    <i class="fa fa-apple mr-2"></i> Apple Product Lead Details
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
                                <td id="appleLeadFullName" class="font-weight-600">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Phone:</th>
                                <td id="appleLeadPhone">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Work Email:</th>
                                <td id="appleLeadWorkEmail">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">City:</th>
                                <td id="appleLeadCity">-</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Professional / Company Info -->
                    <div class="col-md-6 mb-3">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-building-o mr-1"></i> Company & Order Details
                        </h6>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <th style="width: 40%;" class="text-muted">Company Name:</th>
                                <td id="appleLeadCompanyName" class="font-weight-600">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Fleet Qty:</th>
                                <td id="appleLeadFleetQty">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">GSTIN:</th>
                                <td id="appleLeadGstin">-</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Ref ID:</th>
                                <td id="appleLeadRefId" class="text-monospace font-weight-600">-</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row mt-2">
                    <!-- Product & Specs -->
                    <div class="col-12 mb-3">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-cube mr-1"></i> Product & Configuration
                        </h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Product:</small>
                                    <span id="appleLeadProductName" class="font-weight-600">-</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Specifications:</small>
                                    <span id="appleLeadSpecsSummary">-</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Deployment Services:</small>
                                    <span id="appleLeadDeploymentServices">-</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Notes / Requirements:</small>
                                    <span id="appleLeadNotes">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <!-- Metadata -->
                    <div class="col-12">
                        <h6 class="text-primary font-weight-bold mb-3 border-bottom pb-2">
                            <i class="fa fa-shield mr-1"></i> Source & Metadata
                        </h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Source Page:</small>
                                    <span id="appleLeadSourcePage">-</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">IP Address:</small>
                                    <span id="appleLeadIpAddress" class="text-monospace">-</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-2 border rounded bg-light mb-2">
                                    <small class="text-muted d-block">Submission Date:</small>
                                    <span id="appleLeadCreatedAt">-</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="p-2 border rounded bg-light">
                                    <small class="text-muted d-block">Browser / User Agent:</small>
                                    <span id="appleLeadUserAgent" class="text-break small text-muted">-</span>
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

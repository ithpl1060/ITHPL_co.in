<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Q&A</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/qna') ?>"><i class="fa fa-comments"></i> Home</a>
            </li>
            <li class="breadcrumb-item active">Create Q&A</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Q&A Details</h4>
                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>

            <div class="box-body">
                <form id="addQnaForm" method="post">
                    <div class="box-body">
                        <div class="row g-3">
                            <!-- Post ID -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="post_id" class="form-label">Select Post:</label>
                                    <select class="form-control" id="post_id" name="post_id" required>
                                        <option value="">-- Select Post --</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status" class="form-label">Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Question -->
                            <div class="form-group">
                                <label for="question" class="form-label">
                                    <span style="color:red">*</span> Question:
                                </label>
                                <textarea class="form-control" id="question" name="question" rows="4"
                                    placeholder="Enter your question..." required></textarea>
                                <small id="questionCharCount" class="form-text text-muted">0 characters</small>
                            </div>

                            <!-- Answer -->
                            <div class="form-group">
                                <label for="answer" class="form-label">
                                    <span style="color:red">*</span> Answer:
                                </label>
                                <textarea class="form-control" id="answer" name="answer" rows="6"
                                    placeholder="Write the answer..." required></textarea>
                                <small id="answerCharCount" class="form-text text-muted">0 characters</small>
                            </div>

                        </div>
                    </div>

                    <!-- buttons -->
                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-danger" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Category
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/category') ?>">
                    <i class="fa fa-vcard-o"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Blogs</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/category') ?>">Category</a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Category Details</h4>

                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
                <form class="form" id="addCategoryForm" method="post" enctype="multipart/form-data">

                    <div class="box-body">
                        <hr class="my-15">
                        <div class="row">
                            <!-- Category image -->
                          <div class="col-md-4">
                                <div class="form-group text-center">
                                    <label for="icon_image" class="form-label">Image Preview...</label><br>

                                    <!-- Image Preview -->
                                    <img
                                        src="<?php echo base_url('resource/images/icon_sample.png'); ?>"
                                        alt="Image Preview..."
                                        id="iconfile"
                                        style="width: 100px;height: 100px;object-fit: cover; border-radius: 10%;" />

                                    <!-- Custom Upload Link -->
                                    <p>
                                        <label for="icon_image" style="cursor: pointer;" class="h6 text-primary">
                                            <u>Upload...</u>
                                        </label>
                                    </p>

                                    <!-- Hidden File Input -->
                                    <input
                                        type="file"
                                        class="form-control-file"
                                        name="icon_image"
                                        id="icon_image"
                                        style="display: none;"
                                        accept="image/*"
                                        onchange="loadFile(event, 'iconfile')"
                                         />
                                </div>
                            </div>
                            <!-- Category image end -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category" class="form-label required"><span
                                            style="color:red;font-weight: bold;">*</span>Enter Category:</label>
                                    <input type="text" class="form-control" placeholder="Enter Category" id="category"
                                        name="category" required>
                                    <input type="hidden" class="form-control" id="id" name="id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slug" class="form-label required">Enter Slug:</label>
                                    <input type="text" class="form-control" placeholder="Enter Slug" id="slug"
                                        name="slug">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                          
									<input type="checkbox" id="checkbox_1" class="isActive"  value="1" name="is_active">
									<label for="checkbox_1">Active</label>
								</div>
                            </div>
                            
                        </div>

                    </div>

                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-danger waves-effect text-left"
                            id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
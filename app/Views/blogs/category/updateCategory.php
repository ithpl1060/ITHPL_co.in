<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>Update Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/category') ?>">
                    <i class="fa fa-dashboard"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Blogs</a></li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/category') ?>">Category</a>
            </li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Update Category Details</h4>
                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>

            <div class="box-body">
                <form class="form" id="UpdateCategoryForm" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <hr class="my-15">
                        <div class="row">
                            <!-- Category Name -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category" class="form-label required">
                                        <span style="color:red;font-weight:bold;">*</span> Enter Category:
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Category" id="category"
                                        name="category" required>
                                    <input type="hidden" id="id" name="id">
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slug" class="form-label required">Enter Slug:</label>
                                    <input type="text" class="form-control" placeholder="Enter Slug" id="slug"
                                        name="slug">
                                </div>
                            </div>

                            <!-- Active Checkbox -->
                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <input type="checkbox" id="checkbox_1" class="isActive" name="is_active" value="1">
                                    <label for="checkbox_1">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-danger waves-effect text-left" id="cancelBtn">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


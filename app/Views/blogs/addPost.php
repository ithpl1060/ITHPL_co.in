<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Post
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/post') ?>">
                    <i class="fa fa-vcard-o"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Blogs</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('blog/post') ?>">post</a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Post Details</h4>
                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>

            <div class="box-body">
                <form class="form" id="addPostForm" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <hr class="my-15">
                        <div class="row g-3">

                            <!-- Title -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="form-label">
                                        <span style="color:red;font-weight:bold;">*</span> Enter Post Title:
                                    </label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter post title" required>
                                    <input type="hidden" id="id" name="id">
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slug" class="form-label">Slug:</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Enter slug (optional)">
                                </div>
                            </div>

                            <!-- 🖼️ Blog Image Upload -->
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="form-label">Blog Image:</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    <small class="text-muted">Allowed formats: JPG, PNG, JPEG. Max size: 2MB.</small>
                                </div>
                            </div> -->

                            <!-- 🔍 Preview -->
                            <!-- <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <label class="form-label d-block">Preview:</label>
                                    <img id="preview" src="<?= base_url('public/images/placeholder.png') ?>"
                                        alt="Preview" class="img-thumbnail shadow-sm"
                                        style="max-width: 220px; border-radius: 10px;">
                                </div>
                            </div> -->


                            <!-- Category -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id" class="form-label">Select Category:</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        <option value="1">Technology</option>
                                        <option value="2">Business</option>
                                        <option value="3">Lifestyle</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status" class="form-label">Status:</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body" class="form-label">Post Content:</label>
                                    <textarea class="form-control" id="body" name="body" rows="5"
                                        placeholder="Write your post here..."></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- button -->
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
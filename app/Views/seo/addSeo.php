<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SEO
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> -->
            <li class="breadcrumb-item"><a href="<?= base_url('seo') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">SEO</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">SEO Details</h4>

                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
                <form class="form" id="addSeoForm" method="post">

                    <div class="box-body">
                        <hr class="my-15">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pageSlug" class="form-label required">Page Slug:</label>
                                    <input type="text" class="form-control" placeholder="Enter Page Slug" id="pageSlug" name="pageSlug">
                                    <input type="hidden" class="form-control" id="id" name="id">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="title" class="form-label required">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="urlPath" class="form-label required">URL Path</label>
                                    <input type="text" class="form-control" placeholder="Enter Url Path" id="urlPath" name="urlPath">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea
                                        class="form-control"
                                        name="desc"
                                        id="desc"
                                        placeholder="Enter Description"
                                        rows="3"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <textarea
                                        class="form-control"
                                        name="keywords"
                                        id="keywords"
                                        placeholder="Enter Keywords"
                                        rows="3"></textarea>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer text-right">
                        <button type="button" class="btn btn-danger waves-effect text-left" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header nav-small-cap">PERSONAL</li>

            <li id="userMenu" style="display:none;">
                <a href="<?php echo base_url('users'); ?>">
                    <i class="fa fa-user"></i> <span>Users</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('seo'); ?>">
                    <i class="fa fa-circle-o"></i> <span>SEO</span>
                </a>
            </li>

            <!-- New Blogs Dropdown -->
           <li class="treeview">
          <a href="#">
            <i class="fa fa-vcard-o"></i> <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('blog/category'); ?>"><i class="fa fa-circle-thin"></i>Category</a></li>
            <li><a href="<?php echo base_url('blog/post'); ?>"><i class="fa fa-circle-thin"></i>Post</a></li>
            <li><a href="<?php echo base_url('blog/qna'); ?>"><i class="fa fa-circle-thin"></i>Q&A</a></li>
           
          </ul>
        </li>

        </ul>
    </section>
</aside>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Quản trị</li>
            <li class="active treeview">
                <a href="<?php echo base_url('admin')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i>
                    <span> Bài viết</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/articles_manager')?>"><i class="fa fa-circle-o"></i> Danh sách bài đăng</a></li>
                    <li><a href="<?php echo base_url('admin/add_article')?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-video-o"></i>
                    <span>Video</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/videos_manager')?>"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                    <li><a href="<?php echo base_url('admin/add_video')?>"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-users"></i> <span>Người dùng</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/users_manager')?>"><i class="fa fa-circle-o"></i> Danh sách </a></li>
                    <li><a href="<?php echo base_url('admin/add_user')?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-ticket"></i> <span> Bán vé </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/tickets_manager')?>"><i class="fa fa-circle-o"></i> Danh sách </a></li>
                    <li><a href="<?php echo base_url('admin/add_ticket')?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                    <li><a href="<?php echo base_url('admin/deal_manager')?>"><i class="fa fa-circle-o"></i> Giao dịch </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-futbol-o"></i> <span> Trận thi đấu </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/matchs_manager')?>"><i class="fa fa-circle-o"></i> Lịch thi đấu </a></li>
                    <li><a href="<?php echo base_url('admin/add_match')?>"><i class="fa fa-circle-o"></i> Dữ liệu đội bóng </a></li>
                </ul>
            </li>
            <li class="header">Website</li>
            <li><a href="<?php echo base_url()?>">
                    <i class="fa fa-circle-o text-red"></i> <span>Trang chủ</span>
                </a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
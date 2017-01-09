<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Quản Lý Vé</li>
            <li class="active treeview">
                <a href="<?php echo base_url('admin')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                </a>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-ticket"></i> <span> Bán vé </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('ticketmanager/tickets_manager')?>"><i class="fa fa-circle-o"></i> Danh sách </a></li>
                    <li><a href="<?php echo base_url('ticketmanager/add_ticket')?>"><i class="fa fa-circle-o"></i> Thêm mới </a></li>
                    <li><a href="<?php echo base_url('ticketmanager/deal_manager')?>"><i class="fa fa-circle-o"></i> Giao dịch </a></li>
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
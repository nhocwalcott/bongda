<?php $this->load->view('backend/templates/header')?>
    <!-- Left side column. contains the logo and sidebar -->
<?php if(check_admin()):?>
    <?php $this->load->view('backend/templates/leftside')?>
<?php endif;?>
<?php if(check_TicketManager()):?>
    <?php $this->load->view('backend/templates/leftside2')?>
<?php endif;?>
<?php if(check_ArticleManager()):?>
    <?php $this->load->view('backend/templates/leftside3')?>
<?php endif;?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách Video
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Quản lý Video </h3>
                            <div class="box-tools" style="margin-right: 40px;">
                                <a href="<?php echo base_url('admin/add_video')?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-fw fa-user-plus"></i> Thêm video
                                </a>
                            </div>
                        </div><!-- /.box-header -->
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th><center>Clip</center></th>
                                <th><center>Ngày đăng</center></th>
                                <th><center>Đăng bởi</center></th>
                                <th><center>Xoá</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list_videos as $video) { ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url('view/video').'/'.$video->alias; ?>" target="_blank">
                                            <?php echo $video->title; ?>
                                        </a>
                                    </td>
                                    <td><center><?php echo $video->post_on ?></center></td>
                                    <td><center><?php echo $video->username ?></center></td>
                                    <td>
                                        <center><a class="btn btn-danger"
                                                   href="<?php echo base_url('admin/delete_article/') . '/' . $video->alias ?>" onclick="return confirm('Are you sure?');">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a></center>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                        <!-- phân trang -->
                        <div class="row">
                            <div class="pull-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>
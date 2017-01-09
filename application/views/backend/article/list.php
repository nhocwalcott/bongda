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
                Danh sách bài viết
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách bài viết </h3>
                            <div class="box-tools" style="margin-right: 40px;">
                                <a href="<?php echo base_url('admin/add_user')?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-fw fa-user-plus"></i> Tạo bài viết
                                </a>
                            </div>
                        </div><!-- /.box-header -->
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th width="60%"><center>Bài viết</center></th>
                                    <th width="15%"><center>Ngày đăng</center></th>
                                    <th width="15%"><center>Đăng bởi</center></th>
                                    <th width="5%"><center>Sửa</center></th>
                                    <th width="5%"><center>Xoá</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list_articles as $article) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url('view/article/' . $article->alias); ?>" target="_blank">
                                                <?php echo $article->title ?>
                                            </a>
                                        </td>
                                        <td><center><?php echo $article->post_on ?></center></td>
                                        <td>
                                            <center><?php echo $article->username ?></center>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn btn-primary"
                                                   href="<?php echo base_url('admin/edit_article/' . $article->alias); ?>">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn btn-danger"
                                                   href="<?php echo base_url('admin/delete_article/' . $article->alias); ?>" onclick="return confirm('Are you sure?');">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </center>
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
                            </div>


                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>
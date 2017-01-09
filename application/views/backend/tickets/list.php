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
                Danh sách vé
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách vé </h3>
                            <div class="box-tools" style="margin-right: 40px;">
                                <a href="<?php echo base_url('admin/add_ticket')?>" class="btn btn-sm btn-success">
                                    <i class="fa fa-fw fa-user-plus"></i> Thêm vé
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

                                <th width="30%"><center>Ten ve</center></th>
                                <th width="50%"><center>Title</center></th>
                                <th width="10%"><center>Giá</center></th>
                                <th width="5%"><center>Sửa</center></th>
                                <th width="5%"><center>Xoá</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list_tickets as $ticket) { ?>
                                <tr>
                                    <td>
                                        <?php echo $ticket['name'] ?></a>
                                    </td>
                                    <td><center><?php echo $ticket['title']?></center></td>
                                    <td><center><?php echo $ticket['price']?></center></td>


                                    <td>
                                        <center>
                                            <a class="btn btn-primary"
                                               href="<?php echo base_url()."admin/edit_ticket/".$ticket['id'] ;?>">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a class="btn btn-danger"
                                               href="<?php echo base_url()."admin/delete_ticket/".$ticket['id']; ?>" onclick="return confirm('Are you sure?');">
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
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>
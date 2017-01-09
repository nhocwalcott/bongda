
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
                Danh sách đặt hàng
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách khách đặt vé </h3>

                        </div><!-- /.box-header -->
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th width="20%"><center>STT</center></th>
                                <th width="20%"><center>Ten khách hàng</center></th>
                                <th width="15%"><center>email</center></th>
                                <th width="15%"><center>Số ĐT</center></th>
                                <th width="15%"><center>Địa chỉ</center></th>

                                <th width="5%"><center>Mã vé đặt mua</center></th>
                                <th width="10%"><center>Số lượng</center></th>
                                <th width="10%"><center>Thành tiền</center></th>
                                <th width="10%"><center>Hủy đơn hàng</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            <?php foreach ($list_order as $ticket) {
                                ?>
                                <?php $i = $i+1; ?>
                                <tr>
                                    <td>
                                        <?php echo $i ?></a>
                                    </td>
                                    <td>
                                        <?php echo $ticket['name'] ?></a>
                                    </td>
                                    <td><center><?php echo $ticket['email']?></center></td>
                                    <td><center><?php echo $ticket['phone']?></center></td>
                                    <td><center><?php echo $ticket['address']?></center></td>
                                    <td><center><?php echo $ticket['productid']?></center></td>
                                    <td><center><?php echo $ticket['quantity']?></center></td>
                                    <td><center><?php echo $ticket['price']?></center></td>

                                    <td>
                                        <center>
                                            <a class="btn btn-danger"
                                               href="<?php echo base_url()."admin/delete_deal/".$i; ?>" onclick="return confirm('Are you sure?');">
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
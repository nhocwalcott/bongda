

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
            Quản lí các trận thi đấu
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới trận đấu</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <!-- Hiển thị nếu thành công -->
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    }
                    ?>

                    <!-- Hiển thị nếu nhập dữ liệu lỗi -->
                    <?php echo validation_errors(); ?>
                    <form enctype="multipart/form-data" action="" method="post" autocomplete="off">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="username">match_name</label>
                                <input type="text" class="form-control" id="match_name" placeholder="match_name"
                                       name="match_name" value="<?php echo set_value('match_name');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">date</label>
                                <input type="text" class="form-control" id="date" placeholder="date"
                                       name="date" value="<?php echo set_value('date');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">month</label>
                                <input type="text" class="form-control" id="month" placeholder="month"
                                       name="month" value="<?php echo set_value('month');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">year</label>
                                <input type="text" class="form-control" id="year" placeholder="year"
                                       name="year" value="<?php echo set_value('year');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">team1</label>
<!--                                <form action="--><?php //echo base_url();?><!--admin/add_match" method="post">-->
<!--                                    <select name = 'doi1'>-->
<!--                                        <option value="Real Madrid">Real Madrid</option>-->
<!--                                        <option value="Barcelona">Barcelona</option>-->
<!--                                        <option value="Sevilla">Sevilla</option>-->
<!--                                        <option value="Ath Madrid">Ath Madrid</option>-->
<!--                                        <option value="Merida">Merida</option>-->
<!--                                        <option value="Ath Bilbao">Ath Bilbao</option>-->
<!--                                        <option value="Betis">Betis</option>-->
<!--                                        <option value="Celta">Celta</option>-->
<!--                                        <option value="Espanol">Espanol</option>-->
<!--                                        <option value="Osasuna">Osasuna</option>-->
<!--                                        <option value="Valencia">Valencia</option>-->
<!--                                        <option value="Sevilla">Sevilla</option>-->
<!--                                    </select>-->
<!--                                    <input type="submit" name="submit" value="Go"/>-->
<!--                                </form>-->
                                <input type="text" class="form-control" id="team1" placeholder="team1"
                                       name="team1" value="<?php echo set_value('team1');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">team2</label>
                                <input type="text" class="form-control" id="team2" placeholder="team2"
                                       name="team2" value="<?php echo set_value('team2');?>">
                            </div>
                            <div class="form-group">
                                <label for="username">description</label>
                                <input type="text" class="form-control" id="description" placeholder="description"
                                       name="description" value="<?php echo set_value('description');?>">
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <a href="<?php echo base_url('admin/matchs_manager')?>" class="btn btn-warning">
                                Quay lại
                            </a>
                            <button type="submit" class="btn btn-success pull-right">Tạo mới</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>
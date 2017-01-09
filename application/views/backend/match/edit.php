/**
 * Created by PhpStorm.
 * User: DoNguyetAnh
 * Date: 12/17/2016
 * Time: 9:22 AM
 */
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
                Danh sách các trận thi đấu
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chỉnh sửa thông tin trận đấu</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <!-- Hiển thị nếu nhập dữ liệu lỗi -->
                        <?php echo validation_errors(); ?>
                        <form enctype="multipart/form-data" action="" method="post" autocomplete="off">
                            <div class="box-body">
                                <?php $match = $match[0];?>
                                <div class="form-group">
                                    <label for="username">match_name</label>
                                    <input type="text" class="form-control" id="match_name" placeholder="match_name"
                                           name="match_name" value="<?php if(isset($match['match_name'])) echo $match['match_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">date</label>
                                    <input type="text" class="form-control" id="date" placeholder="date"
                                           name="date" value="<?php if(isset($match['date'])) echo $match['date']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">month</label>
                                    <input type="text" class="form-control" id="month" placeholder="month"
                                           name="month" value="<?php if(isset($match['month'])) echo $match['month']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">year</label>
                                    <input type="text" class="form-control" id="year" placeholder="year"
                                           name="year" value="<?php if(isset($match['year'])) echo $match['year']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">team1</label>
                                    <input type="text" class="form-control" id="team1" placeholder="team1"
                                           name="team1" value="<?php if(isset($match['team1'])) echo $match['team1']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">team2</label>
                                    <input type="text" class="form-control" id="team2" placeholder="team2"
                                           name="team2" value="<?php if(isset($match['team2'])) echo $match['team2']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">description</label>
                                    <input type="text" class="form-control" id="description" placeholder="description"
                                           name="description" value="<?php if(isset($match['description'])) echo $match['description']; ?>">
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <a href="<?php echo base_url('admin/matchs_manager')?>" class="btn btn-warning">
                                    Quay lại
                                </a>
                                <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
<?php $this->load->view('backend/templates/footer')?>
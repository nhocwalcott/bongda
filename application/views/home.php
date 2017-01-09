
<div class="col-md-12">

    <!-- hiển thị các bài viết -->
    <?php
    $mount_articles = sizeof($list_articles);
    for ($i = 0; $i < ($mount_articles + 2) / 3; $i++) {
        ?>
        <div class = "row">
            <?php
            for ($j = 0; $j < 3; $j++) {
                if (isset($list_articles[$i * 3 + $j])) { ?>
                    <div class="col-md-4">
                        <div class="main_inner">
                            <div class="row">
                                <h3><?php echo $list_articles[$i * 3 + $j]->title; ?></h3>
                            </div>
                            <div class="row">
                                <img src="<?php echo $list_articles[$i * 3 + $j]->image ?>" class="img-thumbnail">
                            </div>
                            <div class="row">
                                <?php echo $list_articles[$i * 3 + $j]->description; ?>
                                <br>
                                <a href="<?php echo base_url('view/article/' . $list_articles[$i * 3 + $j]->alias); ?>" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-4"></div>
                    <?php
                }
            }
            ?>
        </div>
    <?php } ?>

</div>

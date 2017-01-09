
<!-- slide bar -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo base_url('assets/images/slide1.jpg'); ?>" alt="Anh 1">
            <div class="carousel-caption">
                Chào mừng các bạn đã đến với Laliga.
            </div>
        </div>

        <div class="item">
            <img src="<?php echo base_url('assets/images/slide2.jpg')?>" alt="Anh 2">
            <div class="carousel-caption">
                Chào đón các bạn đến với chảo lửa Premer League.
            </div>
        </div>
        <div class="item">
            <img src="<?php echo base_url('assets/images/slide3.jpg')?>" alt="Anh 3">
            <div class="carousel-caption">
                Thành Phố Của Những Giấc Mơ Chào Đón Các Bạn.
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left">
        </span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

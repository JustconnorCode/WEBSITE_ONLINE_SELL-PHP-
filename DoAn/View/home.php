<div class="pt-5 m-0">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $hh = new ThucAnGioiThieu();
            $i = 1;
            $result = $hh->getCarouselHome();
            while ($set = $result->fetch()) {
            ?>
                <?php
                if ($i == 1) {
                ?>
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <?php
                }
                ?>
                <?php
                if ($i > 1) {
                ?>
                    <li data-target="#carouselId" data-slide-to="<?php echo $i ?>"></li>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $hh = new ThucAnGioiThieu();
            $i = 1;
            $result = $hh->getCarouselHome();
            while ($set = $result->fetch()) {
            ?>
                <?php
                if ($i == 1) {
                ?>
                    <div class="carousel-item active">
                        <img src="./content/picture/<?php echo $set['hinhcs'] ?>" alt="First slide">
                    </div>
                <?php
                }
                ?>
                <?php
                if ($i > 1) {
                ?>
                    <div class="carousel-item ">
                        <img src="./content/picture/<?php echo $set['hinhcs'] ?>" alt="<?php echo $i ?> slide">
                    </div>
                <?php
                }
                ?>
                <!-- <div class="carousel-item">
                    <img src="" alt="Third slide">
                </div> -->
            <?php
                $i++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div style="background-color: #D8D8D8;" class="p-5 m-0">
    <div class="row">
        <h1 class="vn bg-dark">VIETNAMESE FOOD</h1>
        <p class="slogan bg-light">“Ẩm thực Việt Nam - nơi hòa quyện của hương vị, màu sắc và tình yêu quê hương. Mỗi
            món
            ăn là một câu
            chuyện, một bản giao hưởng của văn hóa và con người Việt Nam.”</p>
    </div>
    <div class="container">
        <?php
        $hh = new ThucAnGioiThieu();
        $result = $hh->getThucAnGioiThieu();
        while ($set = $result->fetch()) {
        ?>
            <?php
            if ($set['magt'] % 2 != 0) {
            ?>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-3 col-sm-3 p-0 bg-light">
                        <img src="./Content/picture/<?php echo $set['hinhgt'] ?>" alt="">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 p-0 bg-light">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="tenta"><?php echo $set['tengt'] ?></h1>
                            </div>
                            <div class="col-12" style="width: 100%;">
                                <p class="motata">
                                    <span style="margin-right: 50px;"></span><?php echo $set['motagt'] ?>
                                </p>
                            </div>
                            <div class="col-12">
                                <a href="<?php
                                            if ($set['magt'] == 1) {
                                                echo "index.php?action=thucan&act=1&page=1";
                                            }
                                            if ($set['magt'] == 2) {
                                                echo "index.php?action=thucan&act=2&page=1";
                                            }
                                            if ($set['magt'] == 3) {
                                                echo "index.php?action=thucan&act=3&page=1";
                                            }
                                            if ($set['magt'] == 4) {
                                                echo "index.php?action=thucan&act=4&page=1";
                                            }
                                            ?>" class="xemthem">Xem thêm >>></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            if ($set['magt'] % 2 == 0) {
            ?>
                <div class="row mt-5">
                    <div class="col-lg-9 col-md-9 col-sm-9 p-0 bg-dark">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="tenta1"><?php echo $set['tengt'] ?></h1>
                            </div>
                            <div class="col-12" style="width: 100%;">
                                <p class="motata1">
                                    <span style="margin-right: 50px;"></span><?php echo $set['motagt'] ?>
                                </p>
                            </div>
                            <div class="col-12">
                                <a href="<?php
                                            if ($set['magt'] == 1) {
                                                echo "index.php?action=thucan&act=1page=1";
                                            }
                                            if ($set['magt'] == 2) {
                                                echo "index.php?action=thucan&act=2&page=1";
                                            }
                                            if ($set['magt'] == 3) {
                                                echo "index.php?action=thucan&act=3&page=1";
                                            }
                                            if ($set['magt'] == 4) {
                                                echo "index.php?action=thucan&act=4&page=1";
                                            }
                                            ?>" class="xemthem1">Xem thêm >>></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 pl-1 bg-dark">
                        <img src="./Content/picture/<?php echo $set['hinhgt'] ?>" alt="">
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        }
        ?>
    </div>
</div>
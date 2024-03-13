<?php

$sp = new ThucAnGioiThieu;
$count = 0;
if ($_GET['act'] == 1) {
    $count = $sp->getMonChinh()->rowCount();
}
if ($_GET['act'] == 2) {
    $count = $sp->getMonCanh()->rowCount();
}
if ($_GET['act'] == 3) {
    $count = $sp->getMonTrangMieng()->rowCount();
}
if ($_GET['act'] == 4) {
    $count = $sp->getNuoc()->rowCount();
}

$limit = 4;
$trang = new page();
$page = $trang->findPage($count, $limit);
$start = $trang->findStart($limit);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<div id="perloader"></div>
<div class="pt-5 m-0">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $hh = new ThucAnGioiThieu();
            $i = 1;
            if (isset($_GET['action'])) {
                if (isset($_GET['act'])) {
                    if ($_GET['act'] == "1") {
                        $result = $hh->getCarouselMonChinh();
                    }
                    if ($_GET['act'] == "2") {
                        $result = $hh->getCarouselMonCanh();
                    }
                    if ($_GET['act'] == "3") {
                        $result = $hh->getCarouselMonTrangMieng();
                    }
                    if ($_GET['act'] == "4") {
                        $result = $hh->getCarouselNuoc();
                    }
                }
            }
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
            if (isset($_GET['action'])) {
                if (isset($_GET['act'])) {
                    if ($_GET['act'] == "1") {
                        $result = $hh->getCarouselMonChinh();
                    }
                    if ($_GET['act'] == "2") {
                        $result = $hh->getCarouselMonCanh();
                    }
                    if ($_GET['act'] == "3") {
                        $result = $hh->getCarouselMonTrangMieng();
                    }
                    if ($_GET['act'] == "4") {
                        $result = $hh->getCarouselNuoc();
                    }
                }
            }
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
    <div class="container">
        <form class="" action="index.php?action=search" method="post">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-1 mr-0 p-0" style="text-align: right;">
                            <button class="search-button" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-11 ml-0 p-0" style="text-align: left;">
                            <input type="text" placeholder="Tìm kiếm" name="namesearch" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
        <?php
        $hh = new ThucAnGioiThieu();
        if (isset($_GET['action'])) {
            if (isset($_GET['act'])) {
                if ($_GET['act'] == "1") {
                    $p = 1;
                    $result = $hh->getMonChinhall($start, $limit);
                }
                if ($_GET['act'] == "2") {
                    $p = 2;
                    $result = $hh->getMonCanhall($start, $limit);
                }
                if ($_GET['act'] == "3") {
                    $p = 3;
                    $result = $hh->getMonTrangMiengall($start, $limit);
                }
                if ($_GET['act'] == "4") {
                    $p = 4;
                    $result = $hh->getNuocall($start, $limit);
                }
            }
        }
        $i = 0;
        while ($set = $result->fetch()) {
            if ($i == 0) {
        ?>
                <div class="row">
                    <h1 class="vn " <?php
                                    if ($_GET['act'] == "1") {
                                        echo 'style="background-color: black;"';
                                    }
                                    if ($_GET['act'] == "2") {
                                        echo 'style="background-color: #ABB194;"';
                                    }
                                    if ($_GET['act'] == "3") {
                                        echo 'style="background-color: #A48972;"';
                                    }
                                    if ($_GET['act'] == "4") {
                                        echo 'style="background-color: #9EBBC5;"';
                                    }
                                    ?>><?php echo $set['tengt'] ?></h1> <br>
                    <p class="slogan " <?php
                                        if ($_GET['act'] == "1") {
                                            echo 'style="background-color: white;"';
                                        }
                                        if ($_GET['act'] == "2") {
                                            echo 'style="background-color: #F2E2BE;"';
                                        }
                                        if ($_GET['act'] == "3") {
                                            echo 'style="background-color: #E7D6C2;"';
                                        }
                                        if ($_GET['act'] == "4") {
                                            echo 'style="background-color: white;"';
                                        }
                                        ?>><?php echo $set['motagt'] ?></p>
                </div>
            <?php
            }
            ?>
            <?php
            if ($set['hidden'] == 0) {
            ?>
                <?php
                if ($set['mata'] % 2 != 0) {
                ?>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-md-3 col-sm-3 p-0 " <?php
                                                                        if ($_GET['act'] == "1") {
                                                                            echo 'style="background-color: white;"';
                                                                        }
                                                                        if ($_GET['act'] == "2") {
                                                                            echo 'style="background-color: #F2E2BE;"';
                                                                        }
                                                                        if ($_GET['act'] == "3") {
                                                                            echo 'style="background-color: #E7D6C2;"';
                                                                        }
                                                                        if ($_GET['act'] == "4") {
                                                                            echo 'style="background-color: white;"';
                                                                        }
                                                                        ?>>
                            <img src="./Content/picture/<?php echo $set['hinhta'] ?>" alt="">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 p-0" <?php
                                                                    if ($_GET['act'] == "1") {
                                                                        echo 'style="background-color: white;"';
                                                                    }
                                                                    if ($_GET['act'] == "2") {
                                                                        echo 'style="background-color: #F2E2BE;"';
                                                                    }
                                                                    if ($_GET['act'] == "3") {
                                                                        echo 'style="background-color: #E7D6C2;"';
                                                                    }
                                                                    if ($_GET['act'] == "4") {
                                                                        echo 'style="background-color: white;"';
                                                                    }
                                                                    ?>>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="tenta"><?php echo $set['tenta'] ?></h1>
                                </div>
                                <div class="col-12" style="width: 100%;">
                                    <p class="motata">
                                        <span style="margin-right: 50px;"></span><?php echo $set['motata'] ?>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <a href="index.php?action=thucan&act=<?php echo $set['maloaita'] ?>&id=<?php echo $set['mata'] ?>" class="xemthem">Xem thêm >>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($set['mata'] % 2 == 0) {
                ?>
                    <div class="row mt-5">
                        <div class="col-lg-9 col-md-9 col-sm-9 p-0 " <?php
                                                                        if ($_GET['act'] == "1") {
                                                                            echo 'style="background-color: black;"';
                                                                        }
                                                                        if ($_GET['act'] == "2") {
                                                                            echo 'style="background-color: #ABB194;"';
                                                                        }
                                                                        if ($_GET['act'] == "3") {
                                                                            echo 'style="background-color: #A48972;"';
                                                                        }
                                                                        if ($_GET['act'] == "4") {
                                                                            echo 'style="background-color: #9EBBC5;"';
                                                                        }
                                                                        ?>>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="tenta1"><?php echo $set['tenta'] ?></h1>
                                </div>
                                <div class="col-12" style="width: 100%;">
                                    <p class="motata1">
                                        <span style="margin-right: 50px;"></span><?php echo $set['motata'] ?>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <a href="index.php?action=thucan&act=<?php echo $set['maloaita'] ?>&id=<?php echo $set['mata'] ?>" class="xemthem1">Xem thêm >>></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 pl-1" <?php
                                                                        if ($_GET['act'] == "1") {
                                                                            echo 'style="background-color: black;"';
                                                                        }
                                                                        if ($_GET['act'] == "2") {
                                                                            echo 'style="background-color: #ABB194;"';
                                                                        }
                                                                        if ($_GET['act'] == "3") {
                                                                            echo 'style="background-color: #A48972;"';
                                                                        }
                                                                        if ($_GET['act'] == "4") {
                                                                            echo 'style="background-color: #9EBBC5;"';
                                                                        }
                                                                        ?>>
                            <img src="./Content/picture/<?php echo $set['hinhta'] ?>" alt="">
                        </div>
                    </div>
        <?php
                }
            }
            $i++;
        }
        ?>
    </div>
</div>
<div style="background-color: #D8D8D8;display: flex; justify-content: center; align-items: center; height: 200px;" class="p-5 ">
    <ul class="pagination">
        <?php if ($_GET['page'] != 1 && $_GET['page'] != 2  && $page > 1) : ?>
            <li><a href="index.php?action=thucan&act=<?php echo $p ?>&page=1">
                    <Button>Trang đầu</Button> </a>
            </li>
        <?php endif; ?>
        <?php if ($_GET['page'] != 1  && $page > 1) : ?>
            <li><a href="index.php?action=thucan&act=<?php echo $p ?>&page=<?php echo $_GET['page'] - 1; ?>">
                    <Button><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></Button></a>
            </li>
        <?php endif; ?>
        <?php
        for ($i = 1; $i <= $page; $i++) :
        ?>
            <li>
                <a href="index.php?action=thucan&act=<?php echo $p ?>&page=<?php echo $i; ?>"><Button style="<?php if ($i == $_GET['page']) echo "background-color:#383c44;color:white" ?>"><?php echo $i; ?></Button></a>
            </li>
        <?php
        endfor;
        ?>
        <?php if ($_GET['page'] != $page && $page > 1) : ?>
            <li><a href="index.php?action=thucan&act=<?php echo $p ?>&page=<?php echo $_GET['page'] + 1; ?>"><Button><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></Button></a>
            </li>
        <?php endif; ?>
        <?php if ($_GET['page'] != $page && $_GET['page'] != $page - 1 && $page > 1) : ?>
            <li><a href="index.php?action=thucan&act=<?php echo $p ?>&page=<?php echo $page; ?>"><Button>Trang
                        cuối</Button></a>
            </li>
        <?php endif; ?>
    </ul>
</div>
<script>
    var loader = document.getElementById('perloader');
    window.addEventListener('load', function() {
        loader.style.display = 'none';
    })
</script>
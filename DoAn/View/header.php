<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
    <!-- <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId"> -->
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active mr-5">
            <a class="nav-link menu" href="index.php"><span style="color: white;">Trang chủ</span></a>
        </li>
        <li class="nav-item dropdown mr-5">
            <a class="nav-link dropdown-toggle menu" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: white;">Thực đơn</span></a>
            <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownId">
                <?php
                $hh = new ThucAnGioiThieu();
                $result = $hh->getMenu();
                $mc = 0;
                $mca = 0;
                $mtm = 0;
                $n = 0;
                ?>
                <div class="row">
                    <div class="col-3">
                        <?php
                        while ($set = $result->fetch()) {
                            if ($set['maloaitamenu'] == 1) {
                        ?>

                                <?php
                                if ($mc < 1) {
                                ?>
                                    <h1>Món chính</h1>
                                <?php
                                }
                                ?>
                                <a class="dropdown-item" href="#">
                                    <?php echo $set['tentamenu'] ?>
                                </a>
                            <?php
                                $mc++;
                            }
                            ?>
                        <?php
                        };
                        ?>
                    </div>
                    <div class="col-3">
                        <?php
                        while ($set = $result->fetch()) {
                            if ($set['maloaitamenu'] == 1) {
                        ?>
                                <?php
                                if ($mca < 1) {
                                ?>
                                    <h1>Món Canh</h1>
                                <?php
                                }
                                ?>
                                <a class="dropdown-item" href="#">
                                    <?php echo $set['tentamenu'] ?>
                                </a>
                            <?php
                                $mca++;
                            }
                            ?>
                        <?php
                        };
                        ?>
                    </div>
                    <div class="col-3">
                        <?php
                        while ($set = $result->fetch()) {
                            if ($set['maloaitamenu'] == 3) {
                        ?>
                                <?php
                                if ($mtm < 1) {
                                ?>
                                    <h1>Món tráng miệng</h1>
                                <?php
                                }
                                ?>
                                <a class="dropdown-item" href="#">
                                    <?php echo $set['tentamenu'] ?>
                                </a>
                            <?php
                                $mtm++;
                            }
                            ?>
                        <?php
                        };
                        ?>
                    </div>
                    <div class="col-3">
                        <?php
                        while ($set = $result->fetch()) {
                            if ($set['maloaitamenu'] == 4) {
                        ?>
                                <?php
                                if ($n < 1) {
                                ?>
                                    <h1>Nước</h1>
                                <?php
                                }
                                ?>
                                <a class="dropdown-item" href="#">
                                    <?php echo $set['tentamenu'] ?>
                                </a>
                            <?php
                                $n++;
                            }
                            ?>
                        <?php
                        };
                        ?>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item active mr-5">
            <a class="nav-link menu" href="#ttlh"><span style="color: white;">Thông tin</span></a>
        </li>
        <li class="nav-item active mr-5">
            <a class="nav-link menu" href="#ttlh"><span style="color: white;">Liên hệ</span></a>
        </li>
        <?php
        if (isset($_SESSION['makh']) && isset($_SESSION['email'])) {
            echo '
            <div class="ml-5 mr-5"></div>
        <div class="ml-5 mr-5"></div>
        <div class="ml-5 mr-5"></div>
        <div class="ml-5 mr-5"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">' . $_SESSION['tenkh'] . '</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="index.php?action=forget&act=change"><span class="mr-3 ml-1">|</span>Thay đổi mật khẩu</span></a>
                    <a class="dropdown-item" href="index.php?action=login&act=logout" ><span class="mr-3 ml-1">|</span>Đăng xuất</span></a>
                    </div>
                </li>
                <li class="nav-item active mr-3 ml-3">
            <a class="nav-link menu" href="index.php?action=cart"><span style="color: white;"><Button><i class="fa fa-cart-plus" aria-hidden="true"></i></Button></span></a>
        </li>
            ';
        } else {
            echo '
        <div class="ml-5 mr-5"></div>
<div class="ml-5 mr-5"></div>
<div class="ml-5 mr-5"></div>
<div class="ml-5 mr-5"></div>
<li class="nav-item active mr-0 ml-5 pr-0">
    <a class="nav-link menu" href="index.php?action=signin"><span style="color: white;">Đăng ký</span></a>
</li>
<li class="nav-item active mr-5 pl-0 ml-0">
    <a class="nav-link menu" href="index.php?action=login"><span style="color: white;">Đăng nhập</span></a>
</li>
        ';
        }
        ?>
    </ul>
    </div>
</nav>
<div class="table-responsive">
    <?php
    if (!isset($_SESSION['makh'])) :
        echo '<script>alert("Bạn phải đăng nhập")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
    ?>
    <?php
    else :
    ?>
        <form action="" method="post">
            <table class="table table-bordered" border="0">
                <?php
                if (isset($_SESSION['masohd'])) {
                    $mashd = $_SESSION['masohd'];
                    $hd = new hoadon();
                    $khhd = $hd->getkhachhanghoadon($mashd);
                    $tenkh = $khhd['tenkh'];
                    $dc = $khhd['diachi'];
                    $sodt = $khhd['sodienthoai'];
                    $ngay = $khhd['ngaydat'];
                ?>
                    <tr>
                        <td colspan="4">
                            <h2 style="color: red;">HÓA ĐƠN</h2>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Số Hóa đơn: <?php echo $mashd; ?></td>
                        <td colspan="2"> Ngày lập: <?php echo $ngay; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Họ và tên:</td>
                        <td colspan="2"> <?php echo $tenkh; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Địa chỉ: </td>
                        <td colspan="2"><?php echo $dc; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Số điện thoại: </td>
                        <td colspan="2"><?php echo $sodt; ?></td>
                    </tr>
            </table>
            <!-- Thông tin sản phầm -->
            <table class="table table-bordered">
                <thead>
                    <tr class="table-dark">
                        <th>Số TT</th>
                        <th>Món</th>
                        <th>Ghi chú</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $j = 0;
                    $sp = $hd->gethanghoaDH($mashd);
                    while ($set = $sp->fetch()) {
                        $j++
                    ?>
                        <tr>
                            <td><?php echo $j; ?></td>
                            <td scope="row" style="width: 90px; height: 140px;"><?php echo $set['tenta']; ?><img src="./Content/picture/<?php echo $set['hinhta'] ?>" alt="" style="height: 100%; width: 100%;"></td>
                            <td><?php echo $set['ghichu']; ?></td>
                            <td><?php echo $set['giata']; ?></td>
                            <td><?php echo $set['soluongmua']; ?>
                            <td><?php echo $set['thanhtien']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3">
                            <b>Tổng Tiền</b>
                        </td>
                        <td style="float: right;">
                            <b><?php $sp = $hd->total($mashd);
                                echo $sp['tongtien']; ?> <sup><u>đ</u></sup></b>
                        </td>

                    </tr>
                </tbody>
            <?php
                }
            ?>
            </table>
        </form>
    <?php
    endif;
    ?>

</div>
</div>
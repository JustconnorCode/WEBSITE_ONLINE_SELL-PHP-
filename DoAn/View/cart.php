<div id="perloader"></div>
<div style="background-color: #D8D8D8;">
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

    ?>
    <div class="container" style="background-color: white;">
        <h1 class="carttitle">Giỏ hàng</h1>
        <table class="table">
            <tbody>
                <?php
                    foreach ($_SESSION['cart'] as $key => $item) {
                    ?>
                <tr>
                    <form action="" method="get">
                        <td scope="row" style="width: 90px; height: 140px;"><img
                                src="./Content/picture/<?php echo $item['hinh'] ?>" alt=""
                                style="height: 100%; width: 100%;"></td>
                        <td style="width: 30px; height: 140px;"></td>
                        <td class="cartmota"><?php echo $item['name'] ?></td>
                        <td style="width: 30px; height: 140px;"></td>
                        <td class="cartmota"><input disabled class="cartmota mr-2" type="text" name="" id=""
                                value="<?php echo $item['ghichu'] ?>" style="border: none; width: 155px; "
                                maxlength="20">
                        </td>
                        <td style="width: 30px; height: 140px;"></td>
                        <td class="cartmota">Giá: <?php echo number_format($item['cost']) ?></td>
                        <td style="width: 30px; height: 140px; "></td>
                        <td class="cartmota">Số lượng: <a
                                href="index.php?action=cart&act=add&soluong=<?php echo $item['qty'] ?>&index=<?php echo $key ?>"
                                style="color: black;">+</a>
                            <?php echo $item['qty'] ?> <a
                                href="index.php?action=cart&act=minus&soluong=<?php echo $item['qty'] ?>&index=<?php echo $key ?>"
                                style="color: black;">-</a></td>
                        <td style="width: 30px; height: 14px;"></td>
                        <td class="cartmota">Tổng tiền: <?php echo number_format($item['total']) ?></td>
                        <td style="width: 30px; height: 14px;"></td>
                        <td class="cartmota"><a href="index.php?action=cart&act=delete&id=<?php echo $item['mahh']  ?>"
                                style="color: white;"><button type="button" class="btn btn-danger m-0"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                    </form>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3">
                        <a href="index.php?action=thanhtoan" style="color: black;"><button type="button"
                                class="btn btn-dark">Mua</button></a>
                        <a href="index.php?action=cart&act=deleteAll" style="color: white;"><button type="button"
                                class="btn btn-dark"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                    </td>
                    <td colspan="10" style="text-align: right;">Thành tiền: <?php $gh = new cart();
                                                                                echo $gh->total();
                                                                                ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    } else {
    ?>
    <h1 class="carttitle">Hãy lấp đầy chiếc bụng đói của bạn!</h1>
    <?php
    }
    ?>
</div>
<script>
var loader = document.getElementById('perloader');
window.addEventListener('load', function() {
    loader.style.display = 'none';
})
</script>
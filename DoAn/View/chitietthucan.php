<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hh = new ThucAnGioiThieu();
    $sp = $hh->getThucAn($id);
    $tenta = $sp['tenta'];
    $motata = $sp['motata'];
    $giata = $sp['giata'];
    $hinhta = $sp['hinhta'];
}
?>
<div id="perloader"></div>
<div style="background-color: #D8D8D8;" class="p-5 m-0">
    <div class="container">
        <form action="index.php?action=cart&act=cart_action" method="post">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-3 col-sm-3 p-0  bg-white">
                    <img src="./Content/picture/<?php echo $hinhta ?>" alt="">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 p-0  bg-white">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="tenta">
                                <?php echo $tenta ?>
                            </h1>
                        </div>
                        <div class="col-12" style="width: 100%;">
                            <p class="motata">
                                <span style="margin-right: 50px;"><?php echo $motata ?></span>
                            </p>
                        </div>
                        <div class="col-7 pl-5">
                            <div class="motatact">
                                <label for="" class="">Số lượng</label>
                                <input min=1 type="number" name="soluong" id="" style="width: 20%;" class="mb-4" value="1"><br>
                                <label for="">Ghi chú</label>
                                <input type="text" name="ghichu" maxlength="20">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                            </div>
                        </div>
                        <div class="col-5">
                            <h1 class="giata">
                                Giá: <?php echo number_format($giata) ?>đ
                            </h1>
                            <button type="submit" class="btn btn-dark">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var loader = document.getElementById('perloader');
    window.addEventListener('load', function() {
        loader.style.display = 'none';
    })
</script>
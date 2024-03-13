<?php
if (isset($_GET['id'])) {
  $mata = $_GET['id'];
  $hh = new thucan();
  $kq = $hh->getthucanID($mata);
  $ten = $kq['tenta'];
  $maloai = $kq['maloaita'];
  $mota = $kq['motata'];
  $gia = $kq['giata'];
  $hinh = $kq['hinhta'];
}
?>
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
    <?php
    $ac = 1;
    if (isset($_GET['action'])) {
      if (isset($_GET['act']) && $_GET['act'] == 'add_thucan') {
        $ac = 1;
      } else {
        $ac = 2;
      }
    }
    ?>
    <?php
    if ($ac == 1) {
      echo '<form action="index.php?action=thucan&act=insert_action" method="post" enctype="multipart/form-data">';
    } else {
      echo '<form action="index.php?action=thucan&act=update_action" method="post" enctype="multipart/form-data">';
    }
    ?>
    <h1 style="text-align: center; margin-top: 20px;">Thêm món ăn</h1>
    <table class="table table-striped" style="border: 0px;">
      <tr hidden>
        <td>Mã thức ăn</td>
        <td><input required type="text" class="form-control" name="mata" value="<?php if (isset($mata)) echo $mata; ?>" maxlength="100px" readonly></td>
      </tr>
      <tr>
        <td>Tên thức ăn</td>
        <td> <input required type="text" class="form-control" name="tenta" value="<?php if (isset($ten)) echo $ten; ?>" />
        </td>
      </tr>
      <tr>
        <td>Hình</td>
        <td> <input required type="file" class="form-control" name="hinhta" value="<?php if (isset($hinh)) echo $hinh; ?>" />
        </td>
      </tr>

      <tr>
        <td>Mã loại</td>
        <td>
          <select name="maloaita" class="form-control" style="width:150px;" required>
            <?php
            if ($ac == 1) {
            ?>
              <option value="1">Món chính</option>
              <option value="2">Món canh</option>
              <option value="3">Món tráng miệng</option>
              <option value="4">Nước</option>
              <?php
            } else {
              $selectLoai = -1;
              if (isset($maloai) && $maloai != -1) {
                $selectLoai = $maloai;
              }
              $loai = new loai();
              $result = $loai->getLoai();
              while ($set = $result->fetch()) :
              ?>
                <option value="<?php echo $set['maloaita'] ?>" <?php if ($selectLoai == $set['maloaita']) echo 'selected'; ?>>
                  <?php
                  switch ($set['maloaita']) {
                    case '1':
                      echo "Món chính";
                      break;
                    case '2':
                      echo "Món phụ";
                      break;
                    case '3':
                      echo "Món canh";
                      break;
                    default:
                      echo "Nước";
                      break;
                  }
                  ?>
                </option>
            <?php
              endwhile;
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input required type="text" class="form-control" value="<?php if (isset($mota)) echo $mota; ?>" name="motata">
        </td>
      </tr>
      <tr>
        <td>Giá</td>
        <td><input required type="number" class="form-con  trol" value="<?php if (isset($gia)) echo $gia; ?>" name="giata">
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <button type="submit" class="btn btn-success" style="width: 100%;"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
        </td>
      </tr>

    </table>
    </form>
  </div>
  <div class="col-3"></div>
</div>
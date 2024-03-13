<?php
if (isset($_GET['id'])) {
    $idnv = $_GET['id'];
    $hh = new nhanvien();
    $kq = $hh->getnhanvienID($idnv);
    $hoten = $kq['hoten'];
    $dia = $kq['dia'];
    $username = $kq['username'];
    $role = $kq['role'];
    $matkhau = $kq['matkhau'];
}
?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <?php
        $ac = 1;
        if (isset($_GET['action'])) {
            if (isset($_GET['act']) && $_GET['act'] == 'add_nhanvien') {
                $ac = 1;
            } else {
                $ac = 2;
            }
        }
        ?>
        <?php
        if ($ac == 1) {
            echo '<form action="index.php?action=thucan&act=addnhanvien_action" method="post" enctype="multipart/form-data">';
        } else {
            echo '<form action="index.php?action=thucan&act=updatenhanvien_action" method="post" enctype="multipart/form-data">';
        }
        ?>
        <h1 style="text-align: center; margin-top: 20px;">Thêm nhân viên</h1>
        <table class="table table-striped" style="border: 0px;">
            <tr hidden>
                <td>Mã nhân viên</td>
                <td><input required type="text" class="form-control" name="idnv" value="<?php if (isset($idnv)) echo $idnv; ?>" maxlength="100px" readonly></td>
            </tr>
            <tr>
                <td>Tên nhân viên</td>
                <td> <input required type="text" class="form-control" name="hoten" value="<?php if (isset($hoten)) echo $hoten; ?>" />
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td> <input required type="text" class="form-control" name="dia" value="<?php if (isset($dia)) echo $dia; ?>" />
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input required type="text" class="form-control" value="<?php if (isset($username)) echo $username; ?>" name="username">
                </td>
            </tr>
            <?php
            if ($_SESSION['role'] == 1) {
            ?>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input required type="text" class="form-control" value="<?php if (isset($matkhau)) echo $matkhau; ?>" name="matkhau">
                    </td>
                </tr>
            <?php
            } else {
            ?>
                <tr hidden>
                    <td>Mật khẩu</td>
                    <td><input type="text" class="form-control" value="<?php if (isset($matkhau)) echo $matkhau; ?>" name="matkhau">
                    </td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>Vị trí</td>
                <td>
                    <select name="role" class="form-control" style="width:150px;">
                        <?php
                        if ($ac == 1) {
                        ?>
                            <option value="1">Admin</option>
                            <option value="2">Quản lý</option>
                            <option value="3">Nhân viên</option>
                            <?php
                        } else {
                            $selectLoai = -1;
                            if (isset($maloai) && $maloai != -1) {
                                $selectLoai = $maloai;
                            }
                            $loai = new loai();
                            $result = $loai->getLoaiNV();
                            while ($set = $result->fetch()) :
                            ?>
                                <option value="<?php if (isset($role)) echo $role; ?>" <?php if ($selectLoai == $set['role']) echo 'selected'; ?>>
                                    <?php
                                    switch ($set['role']) {
                                        case 1:
                                            echo "Admin";
                                            break;
                                        case 2:
                                            echo "Quản lý";
                                            break;
                                        default:
                                            echo "Nhân viên";
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
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="btn btn-success" style="width: 100%;"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
                </td>
            </tr>

        </table>
        </form>
    </div>
    <div class="col-3"></div>
</div>
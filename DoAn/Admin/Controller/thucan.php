<?php
$act = "thucan";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'trang_chinh';
        echo '<meta http-equiv=refresh content="0;url=../index.php?"/>';
        break;
    case 'thucan':
        include_once "./View/thucan.php";
        break;

    case 'add_thucan':
        include_once "./View/editthucan.php";
        break;
    case 'insert_action':
        // kiểm tra và nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mata = $_POST['mata'];
            $tenta = $_POST['tenta'];
            $hinhta = $_FILES['hinhta']['name'];
            $maloaita = $_POST['maloaita'];
            $motata = $_POST['motata'];
            $giata = $_POST['giata'];
            // dem thông tin insert vao database
            $hh = new thucan();
            $check = $hh->insertthucan($tenta, $hinhta, $maloaita, $motata, $giata);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            };
        }
        break;
    case 'update_thucan':
        include_once "./View/editthucan.php";
        break;
    case "update_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mata = $_POST['mata'];
            $tenta = $_POST['tenta'];
            $maloaita = $_POST['maloaita'];
            $hinhta = $_FILES['hinhta']['name'];
            $motata = $_POST['motata'];
            $giata = $_POST['giata'];
            // dem thông tin update vao database
            $hh = new thucan();
            $kt = $hh->updatethucan($mata, $tenta, $hinhta, $maloaita, $motata, $giata);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'hidden_thucan':
        $mata = $_GET['id'];
        $hh = new thucan();
        $kt = $hh->hiddenthucan($mata);
        if ($kt !== false) {
            echo '<script> alert("Dữ liệu đã bị vô hiệu hóa thành công")</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
        } else {
            echo '<script> alert("Dữ liệu đã bị vô hiệu hóa không thành công")</script>';
        }
        break;
    case 'add_nhanvien':
        include_once "./View/editnhanvien.php";
        break;
    case 'addnhanvien_action':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idnv = $_POST['idnv'];
            $hoten = $_POST['hoten'];
            $dia = $_POST['dia'];
            $username = $_POST['username'];
            $matkhau = $_POST['matkhau'];
            $role = $_POST['role'];
            // dem thông tin insert vao database
            $hh = new nhanvien();
            $check = $hh->insertnhanvien($hoten, $dia, $username, $matkhau, $role);
            if ($check !== false) {
                echo '<script> alert("Thêm nhân viên thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
            } else {
                echo '<script> alert("Thêm nhân viên không thành công")</script>';
            };
        }
        break;
    case 'update_nhanvien':
        include_once "./View/editnhanvien.php";
        break;
    case 'updatenhanvien_action':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idnv = $_POST['idnv'];
            $hoten = $_POST['hoten'];
            $username = $_POST['username'];
            $dia = $_POST['dia'];
            $matkhau = $_POST['matkhau'];
            $role = $_POST['role'];
            // dem thông tin update vao database
            $hh = new nhanvien();
            $kt = $hh->updatenhanvien_action($idnv, $hoten, $username, $dia, $matkhau, $role);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
    case "delete_nhavien":
        $id = $_GET['id'];
        $hh = new nhanvien();
        $kt =  $hh->delete_nhavien($id);
        if ($kt !== false) {
            echo '<script> alert("Nhân viên đã bị xóa")</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
        } else {
            echo '<script> alert("Không xóa được nhân viên")</script>';
        }
        break;
    case "ban":
        $id = $_GET['id'];
        $hh = new khachhang();
        $kt =  $hh->bankhachhang($id);
        if ($kt !== false) {
            echo '<script> alert("Xóa tài khoảng khách hàng thành công")</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
        } else {
            echo '<script> alert("Xóa tài khoảng khác hàng thất bại dữ liệu ko thành công")</script>';
        }
        break;
    case "silent":
        $id = $_GET['id'];
        $hh = new khachhang();
        $kt =  $hh->silentkhachhang($id);
        if ($kt !== false) {
            echo '<script> alert("Cấm tài khoảng khách hàng thành công")</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=thucan"/>';
        } else {
            echo '<script> alert("Cấm tài khoảng khác hàng thất bại")</script>';
        }
        break;
}

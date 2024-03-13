<?php
class cart
{
    // phương thức thêm thông tin vào trong gio hàng
    function addCart($id, $ghichu, $soluong)
    {
        // thiếu hình,thiếu tên, thiếu đơn giá.Từ id truy vấn ngược lại
        $sp = new ThucAnGioiThieu();
        $idsp = $sp->getHangHoaId($id);
        $tensp = $idsp['tenta'];
        $dongia = $idsp['giata'];
        $img = $idsp['hinhta'];
        $total = (int)$soluong * $dongia;
        // vì giở hàng là mảng lưu trữ nhiều đối tượng có thuộc tính giống nhau nên tạo tối tượng
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['mahh'] == $id) {
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['qty'];
                $ghichu = $_SESSION['cart'][$key]['ghichu'] . ',' . $ghichu;
                $this->update($key, $soluong, $ghichu);
            }
        }
        if ($flag == false) {
            $item = array(
                'mahh' => $id,
                'hinh' => $img,
                'name' => $tensp,
                'ghichu' => $ghichu,
                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,
            );
            // đem tối tượng đưa vào giỏ hàng a[]
            $_SESSION['cart'][] = $item;
        }
    }
    function total()
    {
        $tong = 0;
        foreach ($_SESSION['cart'] as $item) {
            $tong += $item['total'];
        }
        return number_format($tong);
    }
    function update($index, $soluong, $ghichu)
    {
        $_SESSION['cart'][$index]['qty'] = $soluong;
        $_SESSION['cart'][$index]['ghichu'] = $ghichu;
        $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
        $_SESSION['cart'][$index]['total'] = $total_new;
    }
    function delete($id)
    {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $id) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
    function add($soluong, $index)
    {
        ++$soluong;
        $_SESSION['cart'][$index]['qty'] = $soluong;
        $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
        $_SESSION['cart'][$index]['total'] = $total_new;
    }
    function minus($soluong, $index)
    {
        --$soluong;
        if ($soluong == 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['qty'] = $soluong;
            $total_new = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
            $_SESSION['cart'][$index]['total'] = $total_new;
        }
    }
    function deleteAll()
    {
        unset($_SESSION['cart']);
    }
}

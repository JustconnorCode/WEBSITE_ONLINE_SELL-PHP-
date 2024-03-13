<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect;
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(masohd,makh,ngaydat, tongtien) values (Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $sohd = $db->getInstance($select);
        return $sohd[0];
    }
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $ghichu, $thanhtien)
    {
        $db = new connect;
        $query = "insert into cthoadon(masohd,mahh,soluongmua,ghichu,thanhtien, tinhtrang) values($masohd,$mahh,$soluongmua,'$ghichu',$thanhtien,0)";
        $db->exec($query);
    }
    function updateHoaDon($masohd, $makh, $tongtien)
    {
        $db = new connect;
        $query = "update hoadon set tongtien=$tongtien where masohd=$masohd and makh=$makh";
        $db->exec($query);
    }
    function getkhachhanghoadon($masohd)
    {
        $db = new connect();
        $select = "Select a.masohd,b.tenkh,b.diachi,b.sodienthoai,a.ngaydat from hoadon a, khachhang b where a.makh = b.makh and masohd = $masohd";
        $result = $db->getInstance($select);
        return $result; // lấy đc dữ liệu
    }
    function gethanghoaDH($masohd)
    {
        $db = new connect();
        $select = "SELECT b.soluongmua,b.ghichu,b.thanhtien,c.tenta,c.giata,c.hinhta FROM hoadon a,cthoadon b,thucan c WHERE a.masohd = b.masohd and a.masohd = $masohd and c.mata = b.mahh";
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function total($masohd)
    {
        $db = new connect();
        $select = "SELECT Distinct a.tongtien FROM hoadon a,cthoadon b,thucan c WHERE a.masohd = b.masohd and a.masohd = $masohd  and c.mata = b.mahh";
        $result = $db->getInstance($select);
        return $result; // lấy đc dữ liệu
    }
}

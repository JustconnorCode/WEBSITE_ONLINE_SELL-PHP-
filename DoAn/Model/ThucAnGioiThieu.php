<?php
class ThucAnGioiThieu
{
    // thuộc tính
    // hàm tạo
    //phương thức lấy về 8 sản phẩm mới nhất
    function getThucAnGioiThieu()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT magt, tengt, hinhgt, maloaigt, motagt
        FROM GioiThieu
        --  where a.mahh=b.idhanghoa and c.Idmau=b.idmau and a.giamgia != 0 ORDER by a.mahh DESC limit 4
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    // thuộc tính
    // hàm tạo
    //phương thức lấy về 8 sản phẩm mới nhất

    function getMonChinhall($start, $limit)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt,a.hidden
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 1 ORDER by a.mata DESC limit " . $start . "," . $limit;
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getMonChinh()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 1";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }

    function getMonCanh()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 2 
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getMonCanhall($start, $limit)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt ,a.hidden
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 2 ORDER by a.mata DESC limit " . $start . "," . $limit;
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getMonTrangMieng()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 3 
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getMonTrangMiengall($start, $limit)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt, a.hidden
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 3 ORDER by a.mata DESC limit " . $start . "," . $limit;
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getNuoc()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 4
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getNuocall($start, $limit)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT a.mata, a.tenta, a.hinhta, a.maloaita, a.motata, b.tengt, b.motagt,a.hidden
        FROM ThucAn a inner join GioiThieu b on a.maloaita = b.magt
       where a.maloaita = 4 ORDER by a.mata DESC limit " . $start . "," . $limit;
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getCarouselHome()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT macs, hinhcs, maloaics
        FROM Carousel
        where maloaics = 0
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getCarouselMonChinh()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT macs, hinhcs, maloaics
        FROM Carousel
        where maloaics = 1
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getCarouselMonCanh()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT macs, hinhcs, maloaics
        FROM Carousel
        where maloaics = 2
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getCarouselMonTrangMieng()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT macs, hinhcs, maloaics
        FROM Carousel
        where maloaics = 3
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getCarouselNuoc()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT macs, hinhcs, maloaics
        FROM Carousel
        where maloaics = 4
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getThucAn($id)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT tenta,motata,giata,hinhta
        FROM ThucAn
        where mata = $id
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getInstance($select);
        return $result; // lấy đc dữ liệu
    }
    function getMenu()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT mamenu,tentamenu,maloaitamenu
        FROM Menu
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
    function getHangHoaId($id)
    {
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT tenta,giata,hinhta
        FROM ThucAn
        where mata = $id
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getInstance($select);
        return $result; // lấy đc dữ liệu
    }
    function getSearching($tenta)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();
        // b2: viết câu truy vấn
        $select = "SELECT mata,tenta,motata,giata,hinhta,maloaita
        FROM ThucAn
        where tenta like '%$tenta%'
         ";
        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result; // lấy đc dữ liệu
    }
}

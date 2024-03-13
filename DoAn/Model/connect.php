<?php
class connect
{
	// thuộc tính
	var $db = null;
	// hàm tạo được gọi khi tạo 1 đối tượng
	public function __construct()
	{
		// kết nối với database
		$dsn = 'mysql:host=localhost;dbname=doan';
		// có user
		$user = 'root';
		$pass = ''; // nếu xài xampp và wampp thì bỏ trống
		// kết nối
		try {
			$this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			// echo "Kết nối thành công";
		} catch (\Throwable $th) {
			throw $th;
			echo "Kết nối thất bại";
		}
	}

	// phương thức lấy về là nhiều row hay 1 table
	// query để thực hiện câu lệnh select
	function getList($select) // select * from hanghoa
	{
		$result = $this->db->query($select); //select * from hanghoa order by mahh DESC limit 8
		return $result;
	}
	// phương thức lấy về 1 row
	function getInstance($select)
	{
		$result = $this->db->query($select);
		// nhưng do chỉ có 1 row nên thực hiện fetch dữ liệu luôn
		$result = $result->fetch();
		return $result; // mảng
	}
	// để thực hiện câu lệnh insert, update, delete thì ai làm? exec
	function exec($query)
	{
		$result = $this->db->exec($query); // $this->db->exec(insert into hanghoa...)
		return $result;
	}
	// để dữ liệu an toàn prepare
	function execp($query)
	{
		$statement = $this->db->prepare($query);
		return $statement;
	}
}

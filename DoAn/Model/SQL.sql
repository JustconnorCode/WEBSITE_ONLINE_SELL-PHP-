-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 07:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `macs` int(11) NOT NULL,
  `hinhcs` varchar(100) NOT NULL,
  `maloaics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`macs`, `hinhcs`, `maloaics`) VALUES
(1, 'WELCOME.png', 0),
(2, 'CHRISMAS.png', 0),
(3, 'NEWYEAR.png', 0),
(4, 'VALENTINE.png', 0),
(5, 'MONCHINH.png', 1),
(6, 'MONCANH.png', 2),
(7, 'MONTRANGMIENG.png', 3),
(8, 'NUOC.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(255) DEFAULT NULL,
  `mahh` int(255) DEFAULT NULL,
  `soluongmua` int(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `thanhtien` int(255) NOT NULL,
  `tinhtrang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `ghichu`, `thanhtien`, `tinhtrang`) VALUES
(1, 14, 1, '', 100000, 0),
(3, 14, 1, 'không ớt', 100000, 0),
(4, 16, 1, '', 70000, 0),
(5, 16, 2, 'không đắng', 140000, 0),
(6, 10, 1, '', 100000, 0),
(7, 14, 1, 'vdv', 100000, 0),
(7, 13, 1, 'vvc', 100000, 0),
(33, 14, 1, '', 100000, 0),
(33, 13, 1, '', 100000, 0),
(36, 13, 1, '', 100000, 0),
(38, 13, 1, '', 100000, 0),
(39, 14, 1, '', 100000, 0),
(40, 14, 1, '', 100000, 0),
(53, 14, 1, '', 100000, 0),
(54, 14, 1, '', 100000, 0),
(55, 14, 1, '', 100000, 0),
(56, 14, 1, 'Ko ăn', 100000, 0),
(57, 14, 2, ',', 200000, 0),
(58, 14, 2, '', 200000, 0),
(58, 16, 1, '', 70000, 0),
(59, 14, 1, '', 100000, 0),
(60, 14, 1, 'dsds', 100000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `magt` int(11) NOT NULL,
  `tengt` varchar(60) NOT NULL,
  `hinhgt` varchar(60) NOT NULL,
  `maloaigt` int(11) NOT NULL,
  `motagt` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`magt`, `tengt`, `hinhgt`, `maloaigt`, `motagt`) VALUES
(1, 'Món Chính', 'PHO.jpg', 1, 'Ẩm thực Việt Nam là một trong những nền ẩm thực phong phú và đa dạng nhất thế giới. Được ảnh hưởng bởi nhiều nền văn hóa khác nhau, ẩm thực Việt Nam mang hương vị đặc trưng của vùng nhiệt đới, với sự kết hợp hài hòa giữa các nguyên liệu tươi ngon, gia vị đậm đà và cách chế biến cầu kỳ. Những món ăn Việt Nam không chỉ là món ăn, mà còn là một nét đẹp văn hóa của đất nước Việt Nam.'),
(2, 'Món Canh', 'CANHCHUA.jpg', 2, 'Canh là một món ăn không thể thiếu trong bữa cơm của người Việt Nam. Canh có thể được nấu từ nhiều loại nguyên liệu khác nhau, từ rau củ quả, thịt, cá, hải sản,... Mỗi loại canh đều có hương vị riêng, mang đậm bản sắc ẩm thực Việt Nam. Canh là một món ăn không thể thiếu trong bữa cơm của người Việt Nam. Mỗi loại canh đều có hương vị riêng, mang đậm bản sắc ẩm thực Việt Nam.'),
(3, 'Món Tráng Miệng', 'CHE3MAU.jpg', 3, 'Món tráng miệng ở Việt Nam vô cùng đa dạng, từ các món truyền thống đến các món hiện đại. Món tráng miệng ở Việt Nam không chỉ ngon miệng, mà còn mang đậm bản sắc văn hóa của đất nước. Món tráng miệng Việt Nam đã góp phần làm nên sự đa dạng và phong phú của ẩm thực Việt Nam.'),
(4, 'Nước', 'SINHTODAUTAM.jpg', 4, 'Việt Nam là một đất nước có khí hậu nhiệt đới gió mùa, với mùa hè nóng bức và mùa đông mát mẻ. Chính vì vậy, các loại nước uống mát của thiên nhiên Việt Nam luôn được người dân ưa chuộng. Cung cấp cho cơ thể nhiều vitamin và khoáng chất cần thiết, giúp thanh lọc cơ thể và tăng cường sức khỏe.');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(255) NOT NULL,
  `makh` int(255) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 2, '2024-01-17', 100000),
(2, 2, '2024-01-17', 0),
(3, 2, '2024-01-17', 100000),
(4, 2, '2024-01-17', 70000),
(5, 2, '2024-01-17', 140000),
(6, 2, '2024-01-17', 100000),
(7, 2, '2024-01-23', 200000),
(8, 2, '2024-01-23', 0),
(9, 2, '2024-01-23', 0),
(10, 2, '2024-01-23', 0),
(11, 2, '2024-01-23', 0),
(12, 2, '2024-01-23', 0),
(13, 2, '2024-01-23', 0),
(14, 2, '2024-01-23', 0),
(15, 2, '2024-01-23', 0),
(16, 2, '2024-01-23', 0),
(17, 2, '2024-01-23', 0),
(18, 2, '2024-01-23', 0),
(19, 2, '2024-01-23', 0),
(20, 2, '2024-01-23', 0),
(21, 2, '2024-01-23', 0),
(22, 2, '2024-01-23', 0),
(23, 2, '2024-01-23', 0),
(24, 2, '2024-01-23', 0),
(25, 2, '2024-01-23', 0),
(26, 2, '2024-01-23', 0),
(27, 2, '2024-01-23', 0),
(28, 2, '2024-01-23', 0),
(29, 2, '2024-01-23', 0),
(30, 2, '2024-01-23', 0),
(31, 2, '2024-01-23', 0),
(32, 2, '2024-01-23', 0),
(33, 2, '2024-01-23', 200000),
(34, 2, '2024-01-23', 0),
(35, 2, '2024-01-23', 0),
(36, 2, '2024-01-23', 100000),
(37, 2, '2024-01-23', 0),
(38, 2, '2024-01-23', 100000),
(39, 2, '2024-01-23', 100000),
(40, 3, '2024-01-23', 100000),
(41, 3, '2024-01-23', 0),
(42, 3, '2024-01-23', 0),
(43, 3, '2024-01-23', 0),
(44, 3, '2024-01-23', 0),
(45, 3, '2024-01-23', 0),
(46, 3, '2024-01-23', 0),
(47, 3, '2024-01-23', 0),
(48, 3, '2024-01-23', 0),
(49, 3, '2024-01-23', 0),
(50, 3, '2024-01-23', 0),
(51, 3, '2024-01-23', 0),
(52, 3, '2024-01-23', 0),
(53, 3, '2024-01-23', 100000),
(54, 3, '2024-01-23', 100000),
(55, 3, '2024-01-23', 100000),
(56, 7, '2024-02-21', 100000),
(57, 7, '2024-02-21', 200000),
(58, 8, '2024-02-21', 270000),
(59, 17, '2024-03-07', 100000),
(60, 17, '2024-03-07', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(255) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `cam` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `cam`) VALUES
(13, 'Tấn', 'tan', '49ca298bc4acc6a0b728f5f765f23368', 'nguyentan382004@gmail.com', '12 trần đình thảo', '113', 0),
(15, 'ten', 'test', '7f77650c02d1783a4f321e54183e05c0', 'test@gmail.com', '12 trần đình thảo', '113', 0),
(17, 'Tấn', 'test4', '73ca0a2b580a6c9eeeb1d29f3042630d', 'test4@gmail.com', '12 trần đình thảo', '113', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mamenu` int(11) NOT NULL,
  `tentamenu` varchar(100) NOT NULL,
  `maloaitamenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mamenu`, `tentamenu`, `maloaitamenu`) VALUES
(1, 'Phở', 1),
(2, 'Bún bò huế', 1),
(3, 'Bánh mì', 1),
(4, 'Bánh xèo', 1),
(5, 'Thịt kho hột vịt', 1),
(6, 'Bò né', 1),
(7, 'Xôi', 1),
(8, 'Bánh khọt', 1),
(9, 'Bò kho', 1),
(10, 'Bún chả', 1),
(11, 'Chả giò', 1),
(12, 'Cơm cháy', 1),
(13, 'Cơm tấm', 1),
(14, 'Gỏi cuốn', 1),
(15, 'Canh chua', 2),
(16, 'Canh khổ qua', 2),
(17, 'Bánh gia lợn', 3),
(18, 'Chè ba màu', 3),
(19, 'Chè trôi nước', 3),
(20, 'Budweiser', 4),
(21, 'Sưa chua vị quất', 4),
(22, 'Coke', 4),
(23, 'Pesi', 4),
(24, 'Sprite', 4),
(25, 'Corona', 4),
(26, 'Heineken', 4),
(27, 'Sinh tố chuối', 4),
(28, 'Sinh tố dâu', 4),
(29, 'Sinh tố dâu tầm', 4),
(30, 'Sinh tố back berry', 4),
(31, 'Soda chach', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`, `role`) VALUES
(1, 'tan', 'hcming', 'tan', '123', 1),
(3, 'anh', 'hcm', 'anh1', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `thucan`
--

CREATE TABLE `thucan` (
  `mata` int(11) NOT NULL,
  `tenta` varchar(60) NOT NULL,
  `hinhta` varchar(100) NOT NULL,
  `maloaita` int(11) NOT NULL,
  `motata` varchar(2000) NOT NULL,
  `giata` int(100) NOT NULL,
  `hidden` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thucan`
--

INSERT INTO `thucan` (`mata`, `tenta`, `hinhta`, `maloaita`, `motata`, `giata`, `hidden`) VALUES
(1, 'Phở', 'PHO.jpg', 1, 'Phở có hương vị thơm ngon, hấp dẫn, với nước dùng trong, ngọt thanh, bánh phở mềm, thịt bò hoặc thịt gà mềm, thơm, rau thơm và gia vị tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(2, 'Bún bò huế', 'BUNBO.jpg', 1, 'Bún bò Huế là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với nước dùng đậm đà, ngọt thanh, sợi bún mềm, thịt bò mềm, thơm, rau sống tươi mát và các loại gia vị đặc trưng tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(3, 'Bánh mì', 'BANHMI.jpg', 1, 'Bánh mì là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với vỏ bánh giòn rụm, nhân bánh mềm, thơm, có thể có nhân thịt, trứng, pate, chả lụa, rau củ,... tùy theo sở thích của người ăn.', 100000, 0),
(4, 'Bánh xèo', 'BANHXEO.JPG', 1, 'Bánh xèo là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với lớp vỏ giòn rụm, nhân bánh có tôm, thịt, giá đỗ, rau sống,... chấm với nước chấm chua ngọt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(5, 'Thịt kho hột vịt', 'THITKHOHOTVIT.jpg', 1, 'Thịt kho hột vịt là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với thịt lợn mềm, thơm, trứng vịt béo ngậy, nước kho ngọt thanh, đậm đà, ăn kèm với cơm trắng rất đưa cơm.', 100000, 0),
(6, 'Bò né', 'BONE.jpg', 1, 'Bò né là một món ăn đặc trưng của Việt Nam, có hương vị thơm ngon, hấp dẫn với thịt bò mềm, thơm, được tẩm ướp gia vị đậm đà, xào với hành tây, cà chua, trứng ốp la, ăn kèm với bánh mì, nước tương, tương ớt,... tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(7, 'Xôi', 'XOI.jpg', 1, 'Xôi mặn là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với hạt xôi dẻo, mềm, thơm, ăn kèm với thịt kho, trứng rán, dưa chuột, hành khô, nước chấm chua ngọt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(8, 'Bánh khọt', 'BANHKHOT.jpg', 1, 'Bánh khọt là một món ăn truyền thống của miền Nam Việt Nam, có hương vị thơm ngon, hấp dẫn với lớp bột mỏng, giòn rụm, nhân bánh có tôm, thịt, giá đỗ, rau sống,... chấm với nước chấm chua ngọt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(9, 'Bò kho', 'BOKHO.jpg', 1, 'Bò kho là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với thịt bò mềm, thơm, được tẩm ướp gia vị đậm đà, nấu với nước dừa, cà chua, hành tây, sả, gừng,... tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(10, 'Bún chả', 'BUNCHA.jpg', 1, 'Bún chả là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với những miếng thịt nướng vàng ươm, mềm, thơm, được ăn kèm với bún, rau sống, nước chấm chua ngọt, tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(11, 'Chả giò', 'CHAGIO.jpg', 1, 'Chả giò là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với lớp vỏ bánh tráng mỏng, giòn, nhân bánh có tôm, thịt, mộc nhĩ, nấm hương,... được chiên vàng giòn, ăn kèm với nước chấm chua ngọt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(12, 'Cơm cháy', 'COMCHAY.jpg', 1, 'Cơm cháy là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với những miếng cơm cháy vàng giòn, thơm, ăn kèm với nước sốt đặc biệt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(13, 'Cơm tấm', 'COMTAM.jpg', 1, 'Cơm tấm là một món ăn truyền thống của miền Nam Việt Nam, có hương vị thơm ngon, hấp dẫn với những miếng cơm tấm dẻo, mềm, được ăn kèm với sườn nướng, thịt kho, trứng ốp la, đồ chua, rau sống,... tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(14, 'Gỏi cuốn', 'GOICUON.jpg', 1, 'Gỏi cuốn là một món ăn truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với những miếng bánh tráng mỏng, được cuốn với các loại rau, thịt, tôm,... chấm với nước chấm chua ngọt tạo nên hương vị đặc trưng của món ăn.', 100000, 0),
(15, 'Canh chua', 'CANHCHUA.jpg', 2, 'Canh chua là một món ăn truyền thống của Việt Nam, có hương vị chua chua, ngọt ngọt, thanh mát, được nấu từ các loại rau củ như cà chua, dứa, dưa chuột,... ăn kèm với cá, tôm, thịt,... tạo nên hương vị đặc trưng của món ăn.', 70000, 0),
(16, 'Canh khổ qua', 'CANHKHOQUA.jpg', 2, 'Canh khổ qua là một món ăn truyền thống của Việt Nam, có hương vị thanh mát, ngọt dịu, được nấu từ khổ qua, thịt nạc, tôm,... tạo nên hương vị đặc trưng của món ăn.', 70000, 0),
(17, 'Bánh gia lợn', 'BANHGIALON.jpg', 3, 'Bánh gia lợn là một loại bánh truyền thống của người Việt Nam, được làm từ bột gạo, đường, nước cốt dừa và đậu xanh. Bánh có hình dạng tròn, màu vàng nhạt, vỏ bánh giòn tan, nhân bánh bùi béo và thơm ngon. ', 30000, 0),
(18, 'Chè ba màu', 'CHE3MAU.jpg', 3, 'Chè 3 màu là một món ăn vặt truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với những viên chè được làm từ bột nếp, đậu xanh, đậu đỏ,... được nấu với nước cốt dừa, đường tạo nên hương vị đặc trưng của món ăn.', 30000, 0),
(19, 'Chè trôi nước', 'CHETROINUOC.jpg', 3, 'Chè trôi nước là một món ăn vặt truyền thống của Việt Nam, có hương vị thơm ngon, hấp dẫn với những viên chè được làm từ bột nếp, nhân đậu xanh, dừa,... được nấu với nước đường tạo nên hương vị đặc trưng của món ăn.', 30000, 0),
(20, 'Budweiser', 'BEER.jpg', 4, 'Beer Budweiser là một loại bia lager có nguồn gốc từ Mỹ, nổi tiếng với hương vị đậm đà của mạch nha và lúa mạch. Bia Budweiser có hàm lượng cồn trung bình và thường được biết đến với màu vàng đậm và hương vị sảng khoái.', 30000, 0),
(21, 'Sữa chua việt quất', 'SUACHUVIQUAT.jpg', 4, 'Sữa chua vị quất là một loại sữa chua pha chế có hương vị từ quả quất, thường có hương thơm đặc trưng và vị chua ngọt dịu, tạo cảm giác sảng khoái khi thưởng thức.', 30000, 0),
(22, 'Coke', 'COKE.jpg', 4, 'Coca-Cola, thường được gọi là Coke, là một thương hiệu đồ uống có gas nổi tiếng trên toàn thế giới, có vị ngọt, hương cola đặc trưng và là một trong những loại đồ uống phổ biến nhất trên thế giới.', 30000, 0),
(23, 'Pepsi', 'PESI.jpg', 4, 'Pepsi có hương vị ngọt ngào, hơi chua, với vị cola đặc trưng. Nó được nhiều người yêu thích vì hương vị thơm ngon và dễ uống.', 30000, 0),
(24, 'Sprite', 'SPRITE.jpg', 4, 'Sprite là một loại nước giải khát có ga, vị chanh-lime, mát lạnh, sảng khoái, không chứa caffeine, được nhiều người yêu thích trên toàn thế giới.', 30000, 0),
(25, 'Corona', 'CORONA.jpg', 4, 'Bia Corona là một loại bia ngon và phổ biến có nguồn gốc từ México. Bia này thường được phục vụ với lát chanh và có hương vị nhẹ nhàng, sảng khoái, thích hợp để thưởng thức trong những dịp vui chơi hoặc ngày nắng nóng.', 30000, 0),
(26, 'Heineken', 'HEINEKEN.jpg', 4, 'Heineken là một thương hiệu bia lớn đến từ Hà Lan, nổi tiếng trên toàn thế giới. Bia Heineken có hương vị đặc trưng, nhẹ nhàng, và thường được biết đến với lon màu xanh lá cây có in chữ đỏ truyền thống.', 30000, 0),
(27, 'Sinh tố chuối', 'SINHTOCHUOI.jpg', 4, 'Sinh tố chuối là một thức uống thơm ngon, bổ dưỡng, rất thích hợp để thưởng thức vào những ngày hè nắng nóng.', 30000, 0),
(28, 'Sinh tố dâu', 'SINHTODAU.jpg', 4, 'Sinh tố dâu là một loại đồ uống thơm ngon, bổ dưỡng, được nhiều người yêu thích. Nó được làm từ dâu tây, sữa tươi, sữa chua và một ít đường hoặc mật ong. Sinh tố dâu có hương vị ngọt ngào, chua nhẹ, thơm mùi dâu tây, rất dễ uống.', 30000, 0),
(29, 'Sinh tố dâu tầm', 'SINHTODAUTAM.jpg', 4, 'Sinh tố dâu tằm là một loại đồ uống thơm ngon, bổ dưỡng, được nhiều người yêu thích. Nó được làm từ dâu tằm, sữa tươi, sữa chua và một ít đường hoặc mật ong. Sinh tố dâu tằm có hương vị chua ngọt, thơm mùi dâu tằm, rất dễ uống.', 30000, 0),
(30, 'Sinh tố back berry', 'SINHTOVIQUAT.jpg', 4, 'Sinh tố black berry là một loại sinh tố thơm ngon, bổ dưỡng, được làm từ quả mâm xôi đen. Quả mâm xôi đen có vị chua ngọt, thơm mùi mâm xôi đen, rất dễ uống.', 30000, 0),
(31, 'Soda chanh', 'SODA.jpg', 4, 'Soda chanh là một loại thức uống giải khát phổ biến ở Việt Nam. Nó được làm từ nước soda, nước cốt chanh, đường và đá viên. Soda chanh có vị chua ngọt, mát lạnh, rất dễ uống.', 30000, 0),
(38, '1', 'BOKHO.jpg', 2, '1', 123, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`macs`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`magt`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mamenu`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Indexes for table `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`mata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `mata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

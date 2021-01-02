-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 03:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tni_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `rid`, `name`, `price`, `img`) VALUES
(1, 1, 'green tea', 15, 'images/greentea.jpg'),
(2, 1, 'water', 7, 'images/water.jpg'),
(3, 1, 'ไก่ทอด', 10, 'images/Fried_chicken.jpg'),
(4, 1, 'ไส้กรอกทอด', 5, 'images/Fried_sausage.jpg'),
(5, 1, 'ชาเย็น', 15, 'images/thai_tea.jpg'),
(6, 1, 'โอวันตินเย็น', 15, 'images/Ovaltine.jpg'),
(7, 1, 'น้ำแดงโซดา', 15, 'images/Red_soda.jpg'),
(8, 1, 'โกโก้เย็น', 15, 'images/cocoa.jpg'),
(9, 1, 'น้ำเขียวโซดา', 15, 'images/Soda_green.jpg'),
(10, 3, 'ข้าวราดแกง 1 อย่าง', 25, 'images/Rice_and_curry.jpg'),
(11, 3, 'ข้าวราดแกง 2 อย่าง', 30, 'images/Rice_and_curry1.jpg'),
(12, 3, 'ข้าวราดแกง 3 อย่าง', 35, 'images/Rice_and_curry2.jpg'),
(13, 3, 'ก๋วยเตี๋ยวหมูแดง', 30, 'images/Red_pork_noodles.jpg'),
(14, 2, 'เฟรนฟราย', 15, 'images/French_fries.jpg'),
(15, 2, 'ข้าวมันไก่ต้ม', 30, 'images/chicken_rice.jpg'),
(16, 2, 'ข้าวมันไก่ทอด', 30, 'images/rice_with_chicken_fried.jpg'),
(17, 1, 'กาแฟเย็น', 15, 'images/Coffee.jpg'),
(18, 1, 'นมเย็น', 15, 'images/thai_tea.jpg'),
(19, 1, 'แซนวิช', 10, 'images/sandwich.jpg'),
(20, 1, 'บราวนี่', 20, 'images/Brownies.jpg'),
(21, 4, 'ข้าวผัด', 30, 'images/fried_rice.jpg'),
(22, 4, 'ผัดมาม่า', 30, 'images/Fried_mama.jpg'),
(23, 4, 'ผัดกระเพรา ไข่ดาว', 35, 'images/Stir_basil.jpg'),
(24, 4, 'สุกี้', 30, 'images/hot_pot.jpg'),
(25, 4, 'ข้าวหมูกระเทียม', 30, 'images/Garlic_pork_rice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `open_date` int(1) NOT NULL,
  `close_date` int(1) NOT NULL,
  `desp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `res_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `name`, `open_time`, `close_time`, `open_date`, `close_date`, `desp`, `cate`, `res_img`) VALUES
(1, 'PB Drink & Icecream', '06:30:00', '17:00:00', 0, 6, 'ร้านนํ้า มีทุกนํ้า อร่อยทุกนํ้า เเละ ไก่รสเด็ด เเป้งน้อย', 'ร้านนํ้า', 'images/pb_res.jpg'),
(2, 'ร้านไก่ทอด', '06:20:00', '16:00:00', 1, 6, 'ไก่ทอดกรอบรสเด็ดที่มีสโลเเกนชวนซี๊ดที่มุมปากว่า \" ทานวันนี้เผ็ดยันพรุ่งนี้เช้า\" เป็นร้านไก่ทอดบริการส่งเดลิเวอร์รี่ไม่ว่าจะให้ไปส่งที่บ้านหรือที่ทำงานก็ตามไปเสิร์ฟความอร่อยให้เพื่อนๆ ได้ฟินกับความกรอบอร่อยของไก่ทอดสูตรเด็ดของร้านที่มีจุดเด่นจากการหมักจนเข', 'ร้านอาหาร', 'images/chicken_res.jpg'),
(3, 'ร้านก๋วยเตี๋ยว', '06:30:00', '15:00:00', 1, 6, 'ร้านก๋วยเตี๋ยวเจ้าเด็ดเเห่ง สถาบันเทคโนโลยีไทยญี่ปุ่นกับ นํ้สซูปรสเด็ด ', 'ร้านอาหาร', 'images/noodle_res.jpg'),
(4, 'ร้านอาหารตามสั่ง', '06:15:00', '15:00:00', 1, 6, 'ร้านอาหารตามสั่ง อร่อย จัดจ้าน ', 'ร้านอาหาร', 'images/food_res.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `desp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `desp`, `uid`, `rating`, `rid`) VALUES
(1, 'ร้านน้ำ pb มีน้ำให้เลือกเยอะดี', 1, 4, 1),
(2, 'สุกี้ให้เยอะมาก', 12, 4, 4),
(3, 'ข้าวแกงถูกจังครับ', 11, 4, 3),
(4, 'ข้าวผัดอร่อยมาก', 12, 4, 4),
(5, 'ขนมอร่อยมาก', 11, 4, 1),
(6, 'ข้าวแกงอร่อยมากครับ', 13, 4, 3),
(7, 'ก๋วยเตี๋ยวให้เยอะมากครับ', 12, 4, 3),
(8, 'น้ำมีให้ซื้อเยอะดีครับ', 10, 4, 1),
(9, 'ร้านข้าวแกงมีแกงให้ซื้อมากเลยครับ', 1, 4, 3),
(10, 'ร้านไก่ทอด มีไก่ให้เลือกซื้อเยอะดีครับ', 1, 4, 2),
(11, 'มีเมนูเยอะหน่อยๆ', 12, 3, 4),
(12, 'ผัดกะเพรามีถั่วงอก !!!', 11, 3, 4),
(13, 'ผัดมาม่าให้น้อยมาก', 13, 3, 4),
(14, 'มีแกงให้เลือกเยอะๆหน่อย', 13, 3, 3),
(15, 'ไก่ทอดมีเยอะหน่อย', 13, 3, 2),
(16, 'คนขายไม่สนใจลูกค้า', 11, 3, 1),
(17, 'สั่งน้ำแล้วทำช้าจัง', 11, 3, 1),
(18, 'ข้าวมันไก่เหนียวจัง', 13, 2, 2),
(19, 'สนใจลูกค้าหน่อย', 11, 2, 1),
(20, 'ก๋วยเตี๋ยวให้น้อยจัง', 12, 3, 3),
(21, 'asdasd', 2, 4, 1),
(22, 'asdxcvdfg', 3, 5, 4),
(23, '', 3, 1, 1),
(24, 'dsfsdfdsf', 0, 2, 4),
(25, 'dfgdfgdfgdfgdfgdfg', 0, 5, 4),
(26, 'weera', 2, 2, 2),
(27, 'Test', 3, 5, 2),
(28, 'อร่อยจังเลยยยยยยยย', 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `user`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'root', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'poom', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'pp', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

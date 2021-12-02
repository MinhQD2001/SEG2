-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 02, 2021 lúc 03:40 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `final_seg2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `firstName`, `lastName`, `phone`, `email`, `address`, `information`, `date_created`) VALUES
(6, 'dsaf', 'asdf', 'asdf', 'nhat25@gmail.com', 'fasd', 'asdf', '2021-12-02 12:36:58'),
(7, 'dasf', 'asdf', 'adfd', 'quangdo2000@gmail.com', 'asdf', 'asdfads', '2021-12-02 14:07:23'),
(8, 'asd', 'asd', '0936305120', 'asdsadasd@asd', 'asd', 'sadasd', '2021-12-02 22:18:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_item`
--

DROP TABLE IF EXISTS `bill_item`;
CREATE TABLE IF NOT EXISTS `bill_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billID` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0',
  `billID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `userID`, `productID`, `quantity`, `date_created`, `status`, `billID`) VALUES
(32, 7, 1, 5, '2021-12-02 12:36:46', 2, 6),
(33, 7, 4, 3, '2021-12-02 13:37:04', 2, 7),
(34, 7, 1, 2, '2021-12-02 14:07:00', 2, 7),
(35, 7, 2, 1, '2021-12-02 14:07:08', 2, 7),
(36, 7, 1, 1, '2021-12-02 14:08:58', 0, NULL),
(37, 7, 4, 1, '2021-12-02 15:09:38', 0, NULL),
(38, 10, 1, 1, '2021-12-02 22:18:18', 2, 8),
(39, 10, 2, 1, '2021-12-02 22:18:23', 2, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Computer', 'https://f51-zpg.zdn.vn/9034500808923565390/cc5831aaf8c933976ad8.jpg'),
(2, 'Tablet', 'https://f41-zpg.zdn.vn/578486546222822239/1375a90b6c69a737fe78.jpg'),
(3, 'Drone & Camera', 'https://f42-zpg.zdn.vn/4775575540781477673/84bd09d3ceb005ee5ca1.jpg'),
(4, 'Audio', 'https://f53-zpg.zdn.vn/22429382608754329/e2676e189f7a54240d6b.jpg'),
(5, 'Mobile', 'https://f51-zpg.zdn.vn/3823744618258217738/d740f01e327df923a06c.jpg'),
(6, 'T.V & Cinema', 'https://f41-zpg.zdn.vn/8898347919529828730/da572e6fd60d1d53441c.jpg'),
(7, 'Wearable Tech', 'https://f18-zpg.zdn.vn/3602282687136771306/2c120ccff8ad33f36abc.jpg'),
(8, 'Sale', 'https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX41397013.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_provider` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`id_provider`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `id_provider`, `name`, `price`, `description`, `date_created`, `post_img`, `quantity`, `hide`) VALUES
(1, 5, 'iPhone 12', 22490000, 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', '2021-11-06 09:20:52', 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-new-2-600x600.jpg', 20, 0),
(2, 6, 'iPhone 13 Pro Max', 33990000, 'iPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2021-11-06 09:23:20', 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-silver-600x600.jpg', 25, 0),
(3, 7, 'Samsung Galaxy Z Flip3 5G', 24990000, 'Trong sự kiện Galaxy Unpacked hồi 11/8, Samsung đã chính thức trình làng mẫu điện thoại màn hình gập thế hệ mới mang tên Galaxy Z Flip3 5G 128GB. Đây là một siêu phẩm với màn hình gập dạng vỏ sò cùng nhiều điểm cải tiến và thông số ấn tượng, sản phẩm chắc chắn sẽ thu hút được rất nhiều sự quan tâm của người dùng, đặc biệt là phái nữ.', '2021-11-06 09:26:05', 'https://cdn.tgdd.vn/Products/Images/42/229949/samsung-galaxy-z-flip-3-cream-1-600x600.jpg', 30, 0),
(4, 6, 'Samsung Galaxy Z Fold3 5G', 44990000, 'Galaxy Z Fold3 5G đánh dấu bước tiến mới của Samsung trong phân khúc điện thoại gập cao cấp khi được cải tiến về độ bền cùng những nâng cấp đáng giá về cấu hình hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột phá cho người dùng.', '2021-11-06 09:27:44', 'https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-green-1-600x600.jpg', 15, 0),
(5, 5, 'iPhone XR', 13000000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 08:06:18', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(6, 7, 'Samsung Galaxy A20 4G', 4290000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:36:22', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(7, 5, 'Samsung Galaxy A20 4G', 4290000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:36:47', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(8, 6, 'Samsung Galaxy A20 4G 2132132', 4290000000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:39:20', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(9, 7, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 08:42:39', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(10, 7, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 08:44:51', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(11, 5, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 09:10:14', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(12, 5, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 09:12:53', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(13, 6, 'iPhone XR', 200000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 09:17:46', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 10, 0),
(14, 6, 'iPhone 13 Mini', 20990000, 'iPhone 13 mini được Apple ra mắt với hàng loạt nâng cấp về cấu hình và các tính năng hữu ích, lại có thiết kế vừa vặn. Chiếc điện thoại này hứa hẹn là một thiết bị hoàn hảo hướng tới những khách hàng thích sự nhỏ gọn nhưng vẫn giữ được sự mạnh mẽ bên trong.', '2021-11-09 10:30:19', 'https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-midnight-1-600x600.jpg', 14, 0),
(15, 6, 'Xiaomi 11T 5G ', 20000000, 'dsafadsfasfdsfdsdsfasfdasfdsaf', '2021-11-09 10:35:51', 'https://cdn.tgdd.vn/Products/Images/42/248218/xiaomi-11t-pro-blue-1-600x600.jpg', 30, 0),
(16, 5, 'iPhone XR', 20000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 13:18:43', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(17, 7, 'iPhone XR', 20000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 13:20:46', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(18, 7, 'Filco Keyboard50', 50, 'dsfasdfdfdasfdsafdasfdsaf', '2021-11-29 20:04:42', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 2, 0),
(20, 7, 'alo', 100, 'ddasfasdfdasfdsafxczjvhgzxcuiovygh aorgfhbwerkjlfg', '2021-12-01 19:12:17', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRYYGBgZGhgYGhoaGBoYGhoYGRgZGhkYGBocIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzYrJCs0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALEBHQMBIgACEQEDEQH/', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id_product`, `id_category`) VALUES
(1, 1),
(2, 1),
(4, 1),
(4, 4),
(17, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `role` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `addr`, `phone`, `dob`, `role`, `date_created`, `img`) VALUES
(1, 'Tech Store', 'techstore@gmail.com', '$2y$10$B9BdNkXlsnsXLkeCQc3zG.CUT4cpmVSAWuHG3RRl47X9ryvnHOQ/q', NULL, NULL, NULL, 3, '2021-11-30 14:30:13', NULL),
(5, 'Admin', 'admin@gmail.com', '$2y$10$9uNewMJbCT7NZtI/Wj2nFu7ni12hmlyps1HbXiDpaJYlzTThIU2Sm', NULL, NULL, NULL, 3, '2021-11-26 22:25:27', NULL),
(6, 'nhat', 'nhat25@gmail.com', '$2y$10$Mse1N72KzcG0I5qJ1YWzm.n8L86cK4JSIweKcHqhcsYcyUi7zKUdO', NULL, NULL, NULL, 3, '2021-11-27 14:28:16', NULL),
(7, 'Quang', 'quangdo2000@gmail.com', '$2y$10$tHZf/Qyl6ZnW/GpfVtfySOLiIHVePxzlZuP3yckMTwufDTydzIP7G', NULL, NULL, NULL, 3, '2021-11-29 14:09:33', NULL),
(9, 'NKLuyen', 'nkluyen123@gmail.com', '$2y$10$BQRPoQL8szUBs3NfVlv2C.3Vl1dcoI.y8rYH/DN/q9otn4YMW7g2q', NULL, NULL, NULL, 3, '2021-12-02 22:12:12', NULL),
(10, 'Coftbred', 'coftbred123@gmail.com', '$2y$10$eXQ4nqOSHLWt3o1Upq662O9xwWJ1NrhI.VSBO80qzXfjkBnZ.We/O', NULL, NULL, NULL, 3, '2021-12-02 22:16:44', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wish_list`
--

DROP TABLE IF EXISTS `wish_list`;
CREATE TABLE IF NOT EXISTS `wish_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wish_list`
--

INSERT INTO `wish_list` (`id`, `userID`, `productID`) VALUES
(15, 7, 1),
(17, 7, 2),
(18, 7, 17),
(21, 7, 4),
(22, 7, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 04:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_seg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_product`, `quantity`, `date_created`) VALUES
(4, 4, 16, 1, '2021-11-17 10:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Computer'),
(2, 'Tablet'),
(3, 'Drone & Camera'),
(4, 'Audio'),
(5, 'Mobile'),
(6, 'T.V & Cinema'),
(7, 'Wearable Tech');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_provider` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `post_img` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_provider`, `name`, `price`, `description`, `date_created`, `post_img`, `quantity`, `hide`) VALUES
(1, 1, 'iPhone 12', 22490000, 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', '2021-11-06 09:20:52', 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-do-new-2-600x600.jpg', 20, 0),
(2, 1, 'iPhone 13 Pro Max', 33990000, 'iPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2021-11-06 09:23:20', 'https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-silver-600x600.jpg', 25, 0),
(3, 2, 'Samsung Galaxy Z Flip3 5G', 24990000, 'Trong sự kiện Galaxy Unpacked hồi 11/8, Samsung đã chính thức trình làng mẫu điện thoại màn hình gập thế hệ mới mang tên Galaxy Z Flip3 5G 128GB. Đây là một siêu phẩm với màn hình gập dạng vỏ sò cùng nhiều điểm cải tiến và thông số ấn tượng, sản phẩm chắc chắn sẽ thu hút được rất nhiều sự quan tâm của người dùng, đặc biệt là phái nữ.', '2021-11-06 09:26:05', 'https://cdn.tgdd.vn/Products/Images/42/229949/samsung-galaxy-z-flip-3-cream-1-600x600.jpg', 30, 0),
(4, 3, 'Samsung Galaxy Z Fold3 5G', 44990000, 'Galaxy Z Fold3 5G đánh dấu bước tiến mới của Samsung trong phân khúc điện thoại gập cao cấp khi được cải tiến về độ bền cùng những nâng cấp đáng giá về cấu hình hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột phá cho người dùng.', '2021-11-06 09:27:44', 'https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-green-1-600x600.jpg', 15, 0),
(5, 0, 'iPhone XR', 13000000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 08:06:18', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(6, 0, 'Samsung Galaxy A20 4G', 4290000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:36:22', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(7, 0, 'Samsung Galaxy A20 4G', 4290000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:36:47', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(8, 0, 'Samsung Galaxy A20 4G 2132132', 4290000000, 'amsung chính thức cho ra mắt chiếc điện thoại Galaxy A12, là phiên bản kế nhiệm của Galaxy A11 trước đó. Đối với phiên bản mới, hãng ưu ái cải tiến cụm camera và viên pin cho dung lượng xuất sắc.', '2021-11-09 08:39:20', 'https://cdn.tgdd.vn/Products/Images/42/228151/samsung-galaxy-a12-xanh-600x600-1-600x600.jpg', 25, 0),
(9, 0, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 08:42:39', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(10, 4, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 08:44:51', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(11, 4, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 09:10:14', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(12, 4, 'Xiaomi 11T 5G 128GB', 10490000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn. ', '2021-11-09 09:12:53', 'https://cdn.tgdd.vn/Products/Images/42/248293/xiaomi-11t-white-1-2-600x600.jpg', 20, 0),
(13, 4, 'iPhone XR', 200000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 09:17:46', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 10, 0),
(14, 4, 'iPhone 13 Mini', 20990000, 'iPhone 13 mini được Apple ra mắt với hàng loạt nâng cấp về cấu hình và các tính năng hữu ích, lại có thiết kế vừa vặn. Chiếc điện thoại này hứa hẹn là một thiết bị hoàn hảo hướng tới những khách hàng thích sự nhỏ gọn nhưng vẫn giữ được sự mạnh mẽ bên trong.', '2021-11-09 10:30:19', 'https://cdn.tgdd.vn/Products/Images/42/236780/iphone-13-mini-midnight-1-600x600.jpg', 14, 0),
(15, 4, 'Xiaomi 11T 5G ', 20000000, 'dsafadsfasfdsfdsdsfasfdasfdsaf', '2021-11-09 10:35:51', 'https://cdn.tgdd.vn/Products/Images/42/248218/xiaomi-11t-pro-blue-1-600x600.jpg', 30, 0),
(16, 4, 'iPhone XR', 20000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 13:18:43', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(17, 4, 'iPhone XR', 20000, 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', '2021-11-09 13:20:46', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 20, 0),
(18, 7, 'Filco Keyboard50', 50, 'dsfasdfdfdasfdsafdasfdsaf', '2021-11-29 20:04:42', 'https://cdn.tgdd.vn/Products/Images/42/190325/iphone-xr-hopmoi-den-600x600-2-600x600.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id_product`, `id_category`) VALUES
(1, 1),
(2, 1),
(4, 1),
(4, 4),
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `addr` text NOT NULL,
  `dob` date NOT NULL,
  `role` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `addr`, `dob`, `role`, `date_created`, `img`) VALUES
(5, 'Admin', 'admin@gmail.com', '$2y$10$9uNewMJbCT7NZtI/Wj2nFu7ni12hmlyps1HbXiDpaJYlzTThIU2Sm', '', '', '0000-00-00', 3, '2021-11-26 22:25:27', NULL),
(6, 'nhat', 'nhat25@gmail.com', '$2y$10$Mse1N72KzcG0I5qJ1YWzm.n8L86cK4JSIweKcHqhcsYcyUi7zKUdO', '', '', '0000-00-00', 3, '2021-11-27 14:28:16', NULL),
(7, 'Quang', 'quangdo2000@gmail.com', '$2y$10$tHZf/Qyl6ZnW/GpfVtfySOLiIHVePxzlZuP3yckMTwufDTydzIP7G', '', '', '0000-00-00', 3, '2021-11-29 14:09:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`,`id_provider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

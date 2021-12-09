-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 06:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `firstName`, `lastName`, `phone`, `email`, `address`, `information`, `date_created`) VALUES
(16, '', '', '', '', '', '', '2021-12-09 10:44:10'),
(15, 'sad', 'ád', 'qưe', 'asd@gmail.com', 'ád', 'qưeqwe', '2021-12-08 20:41:10'),
(13, 'ádf', 'adsf', 'adsf', 'adf@gmai.com', 'adsf', 'adsf', '2021-12-08 20:39:45'),
(14, 'ádf', 'adsf', 'adsf', 'adf@gmai.com', 'adsf', 'adsf', '2021-12-08 20:40:35'),
(11, '', '', '', '', '', '', '2021-12-07 22:54:49'),
(12, '', '', '', '', '', '', '2021-12-07 22:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0,
  `billID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userID`, `productID`, `quantity`, `date_created`, `status`, `billID`) VALUES
(55, 11, 8, 1, '2021-12-09 10:53:10', 0, NULL),
(54, 11, 3, 1, '2021-12-09 10:52:42', 0, NULL),
(53, 11, 21, 1, '2021-12-09 10:52:34', 0, NULL),
(50, 11, 81, 1, '2021-12-09 10:44:04', 2, 16),
(48, 7, 3, 1, '2021-12-08 20:40:58', 2, 15),
(47, 7, 2, 1, '2021-12-08 20:39:27', 2, 13),
(46, 1, 2, 4, '2021-12-08 20:09:10', 0, NULL),
(45, 7, 70, 1, '2021-12-07 22:55:11', 2, 12),
(44, 7, 2, 1, '2021-12-07 22:54:44', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_provider` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `post_img` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_provider`, `name`, `price`, `description`, `date_created`, `post_img`, `quantity`, `hide`) VALUES
(1, 1, 'Laptop Acer Gaming Nitro 5 Eagle AN515-57-720A NH.QEQSV.004 (Core™ i7-11800H | 8GB | 512GB | RTX 3050 Ti 4GB | 15.6 inch FHD | Win 11)', 1500, 'CPU: Intel® Core™ i7-11800H (upto 4.60 GHz, 24MB)\r\nRAM: 8GB DDR4 3200MHz \r\nComputer hard drive: 512GB PCIe NVMe SSD (2TB SSD PCIe Gen3, 8 Gb/s, NVMe & 2TB HDD 2.5-inch 5400 RPM)\r\nVGA: NVIDIA® GeForce RTX 3050 Ti 4GB GDDR6\r\nScreen: 15.6 inch FHD(1920 x 1080) IPS 144Hz SlimBezel Acer ComfyView LED-backlit\r\nPin: 4-cell, 57.5 Wh\r\nWeight: 2.2 kg\r\nOS: Windows 11 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39874_61165_laptop_acer_gaming_aspire_7_a715_42g_r6zr_nhqaysv003_den_2021_16.jpg', 10, 2),
(2, 1, 'Laptop1 Dell Latitude 5520 42LT552000 (Core i7-1185G7 | 8GB | 256GB | Intel Iris Xe | 15.6 inch FHD | Ubuntu Linux)', 1300, 'CPU: AMD Ryzen™ 9-5900HS (3.0GHz up to 4.6GHz, 16M Cache)\r\nRAM: 16GB(8GB + 8GB) [On board] DDR4 3200MHz\r\nComputer hard drive: 1TB SSD M.2 NVMe PCIe\r\nVGA: NVIDIA® GeForce® RTX 3050 Ti 4GB GDDR6\r\nScreen: 14.0 inch WQHD (2560 x 1440) 16:9, IPS 120Hz, 100% DCI-P3\r\nPin: 4-cell, 76WHrs\r\nWeight: 1.70 Kg\r\nColor: Eclipse Gray AniMe Matrix version\r\nOS: Windows 10 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39304_20651_laptop_dell_latitude_5520_42lt552000_1.jpg', 10, 1),
(3, 1, 'Laptop Gaming MSI Bravo 15 B5DD 264VN (Ryzen 7-5800H | 8GB | 512GB | RX 5500M 4GB | 15.6 inch FHD | Win 11)', 1130, 'CPU: AMD Ryzen 7-5800H (3.2GHz Up to 4.4GHz, 16MB)\r\nRAM: 8GB(8GBx1)DDR4 3200MHz (2 khe, tối đa 64GB)\r\nComputer hard drive: 512GB NVMe PCIe Gen3x4 SSD\r\nVGA: AMD Radeon RX 5500M 4GB GDDR6\r\nScreen: 15.6 inch FHD (1920*1080), 144Hz 45%NTSC IPS-Level\r\nPin: 3 cell, 52Whr\r\nWeight: 1.96 kg\r\nColor: Black\r\nOS: Windows 11 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39519_product_1621751089660757a2ea3f377b8062e5402d3484be.png', 10, 1),
(4, 1, 'Laptop Dell Mobile Precision 3561 (Core i7-11850H | 16GB | 256GB | T600 4GB | 15.6 inch FHD | Ubuntu Linux)', 1050, 'CPU: Intel Core i7-11850H (upto 4.80 GHz, 24 MB)\r\nRAM: 16GB (1 x 16GB) DDR4 3200Mhz (2 khe)\r\nComputer hard drive: 256GB M.2 Gen 3 PCIe x4 NVMe SSD\r\nVGA: NVIDIA T600 4GB GDDR6\r\nScreen: 15.6 inch FHD (1920x1080) 250 nit, WVA, 45% NTSC,60Hz, Non-Touch\r\nPin: 4 Cell, 64Whr\r\nWeight: 1.79 kg\r\nColor: Black\r\nOS: Ubuntu Linux 20.04', '2021-12-07', 'https://anphat.com.vn/media/product/39341_dell_x2cnd_precision_3561_g11_i7_11800h_1652898.jpg', 10, 1),
(5, 1, 'Laptop Asus Vivobook X515EA-BQ1006T (Core i3-1115G4 | 4GB | 512GB | Intel UHD | 15.6-inch FHD | Win 10)', 850, 'CPU: Intel® Core™ i3-1115G4 (upto 4.10GHz, 6MB)\r\nRAM: 4GB DDR4 + 1slot\r\nComputer hard drive: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nVGA: Intel® UHD Graphics\r\nScreen: 15.6-inch FHD (1920 x 1080) 16:9, IPS\r\nPin: 2-cell, 37WHrs\r\nWeight: 1.80 kg\r\nColor: Silver\r\nOS: Windows 10 Home', '2021-12-07', 'https://anphat.com.vn/media/product/38779_37081_36960_637502180353670464_asus_vivobook_x515_print_bac_1.jpg', 5, 1),
(6, 1, 'Laptop Gaming Acer Predator Helios 300 PH315-54-75YD NH.QC2SV.002 (Core i7-11800H | 16GB | 512GB | RTX 3060 6GB | 15.6 inch QHD | Win 10)', 1790, 'CPU: Intel® Core™ i7-11800H (upto 4.60 GHz, 24MB)\r\nRAM: 16GB (8GB x 2) DDR4 3200MHz \r\nComputer hard drive: 512GB PCIe NVMe SSD\r\nVGA: NVIDIA® GeForce RTX 3060 6GB GDDR6\r\nMàn hình: 15.6 inch QHD (2560 x1440) IPS 165Hz SlimBezel, 300 nits, 165Hz,Acer ComfyView LED-backlit TFT LCD\r\nPin: 4-cell, 59 Wh\r\nWeight: 2.3 kg\r\nColor: Black\r\nOS: Windows 10 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39035_60433_laptop_acer_gaming_predator_helios_300_ph315_54_75yd_nhqc2sv002_den_2021_4.png', 10, 1),
(7, 1, 'Laptop Acer Aspire 5 Acer Aspire 5 A514-54-5127 NX.A28SV.007 (Core™ i5-1135G7 | 8GB | 512GB | Intel® Iris® Xe | 14 inch FHD | Win 11)', 750, 'CPU: Intel® Core™ i5-1135G7 (upto 4.20 GHz, 8MB)\r\nRAM: 8GB (4GB onboard + 4GB So-dim) DDR4 2666Hz \r\nComputer hard drive: 512GB PCIe NVMe SSD (2 TB HDD 1 TB SSD PCIe Gen3 8 Gb/s up to 4 lanes, NVMe)\r\nVGA: Intel® Iris® Xe Graphics\r\nScreen: 14 inch FHD(1920 x 1080) Acer ComfyView™ IPS LED LCD, 60Hz, ComfyView™ LCD\r\nPin: 3Cell, 48Wh\r\nWeight: 1.46 kg\r\nColor: Pure Silver\r\nOS: Windows 11 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39873_61620_laptop_acer_aspire_a514_54_20.jpg', 8, 1),
(8, 1, 'Laptop ASUS Vivobook 15 R565EA-UH31T (Core i3-1115G4 | 4GB | 128GB SSD | 15.6 inch FHD | Win 10)', 820, 'CPU: Intel Core i3-1115G4 (Upto 4.10 GHz, 6MB)\r\nRAM: 4GB DDR4 2666MHz\r\nComputer hard drive: 128GB SSD M.2 2280\r\nVGA: Intel UHD Graphics\r\nScreen: 15.6 FullHD (1920 x 1080)\r\nOS: Windows 10 Home', '2021-12-07', 'https://anphat.com.vn/media/product/39982_1000123883.jpg', 14, 1),
(9, 1, 'Laptop HP 15s-fq2602TU 4B6D3PA (Core i5-1135G7 | 8GB | 256GB | Intel Iris Xe | 15.6 inch HD | Win 10)', 1100, 'CPU: Intel® Core™ i5-1135G7 (upto 4.20GHz, 8MB)\r\nRAM: 8GB(2 x 4GB) DDR4 3200MHz( 2 khe)\r\nComputer hard drive: 256GB PCIe® NVMe™ M.2 SSD\r\nVGA: Intel® Iris Xe Graphics\r\nScreen: 15.6 inch diagonal, HD (1366 x 768), micro-edge, BrightView, 250 nits, 45% NTSC\r\nPin: 3-cell, 41 Wh Li-ion\r\nWeight: 1.7 kg\r\nColor: silver\r\nOS: Windows 10 Home', '2021-12-07', 'https://anphat.com.vn/media/product/38261_', 5, 1),
(10, 1, 'Laptop Gaming Lenovo Legion 5 15ACH6H 82JU00MMVN (AMD R5 5600H | 16GB | 512GB | RTX 3060 | 15.6 inch FHD | Win 10)', 1950, 'CPU: AMD Ryzen R5 5600H (3.3GHz Up to 4.2GHz)\r\nRAM: 16GB (2x 8GB SO-DIMM DDR4-3200) Up to 32GB DDR4-3200 offering\r\nComputer hard drive: 512GB SSD M.2 2280 PCIe 3.0x4 NVMe.\r\nVGA: NVIDIA GeForce RTX 3060 6GB GDDR6, Boost Clock 1425 / 1702MHz, TGP 130W\r\nScreen: 15.6\" WQHD (2560x1440) IPS 300nits Anti-glare, 165Hz, 100% sRGB, Dolby Vision, Free-Sync, G-Sync, DC dimmer\r\nPin: 4cell 80Wh\r\nWeight: 2.4 kg\r\nColor: Phantom Blue\r\nOS: Windows 11 Home', '2021-12-07', 'https://anphat.com.vn/media/product/40011_laptop_gaming_lenovo_legion_5_15ach6h_82ju00mmvn_1.jpg', 8, 1),
(11, 1, 'iPad Pro 12.9 2021 M1 Wi-Fi 128GB Silver', 1200, 'Chip: Apple M1\r\nRAM: 8GB\r\nCapacity: 128GB\r\nScreen: 12.9 inches Liquid Retina XDR mini-LED LCD, 120Hz, HDR10\r\nWi-Fi; Bluetooth 5.0, A2DP, LE\r\nOperating system: iPadOS', '2021-12-07', 'https://anphat.com.vn/media/product/37800_ipad_pro_12_9_inch__silver_27cd924598c44d238f63015f575f343a_master.jpg', 5, 1),
(12, 1, 'iPad Pro 12.9 2021 M1 Wi‑Fi 128GB Space Grey (MHNF3ZA/A)', 1350, 'Chip: Apple M1\r\nRAM: 8GB\r\nCapacity: 128GB\r\nScreen: 12.9 inches Liquid Retina XDR mini-LED LCD, 120Hz, HDR10\r\nWi-Fi; Bluetooth 5.0, A2DP, LE\r\nOperating system: iPadOS', '2021-12-07', 'https://anphat.com.vn/media/product/37799_ipad_pro_12_9_inch__space_grey_f4513f3cf8d041309c45c922442e28eb_master.jpg', 9, 1),
(13, 1, 'iPad Pro 11 2021 M1 Wi‑Fi + Cellular 2TB Silver (MHWF3ZA/A)', 2000, 'Chip: Apple M1\r\nRAM capacity: 6GB\r\nInternal Memory: 2TB\r\nScreen: 11 inches IPS LCD, 120Hz\r\nWi-Fi + 5G, Bluetooth 5.0\r\nOperating System: iPadOS', '2021-12-07', 'https://anphat.com.vn/media/product/37798_43318_ipad_pro_11_2021_silver_ha1.jpg', 4, 1),
(14, 1, 'iPad Pro 12.9 2021 M1 Wi‑Fi + Cellular 2TB Silver (MHRE3ZA/A)', 2390, 'Chip: Apple M1\r\nCapacity: 2TB\r\nDisplay: 12.9 inches Liquid Retina XDR mini-LED LCD, 120Hz, HDR10\r\nWi-Fi + 5G, Bluetooth 5.0, A2DP, LE, EDR\r\nSIM support: 1 Nano SIM or 1 eSIM\r\nOperating system: iPadOS 14.5', '2021-12-07', 'https://anphat.com.vn/media/product/37840_ipad_pro_12_9_inch__silver_27cd924598c44d238f63015f575f343a_master.jpg', 7, 1),
(15, 1, 'Lenovo Tab M10 - FHD Plus TB-X606X ZA5V0362VN', 400, 'CPU: MediaTek Helio P22T (8C, 4x A53 @2.3GHz + 4x A53 @1.8GHz) Memory: 4GB Soldered LPDDR4x + 64GB (eMCP4x, eMMC) Screen: 10.3 inch FHD (1920x1200) TDDI 330nits - touch Connection: 11a/b/g/n/ac, 1x1 + BT5.0 Camera: Front 5.0MP / Rear 8.0MP Battery: Integrated 5000mAh (Min.) / 5100mAh (Typ.) Weight: 460 g Color: Iron Gray OS: Android 9', '2021-12-07', 'https://anphat.com.vn/media/product/39224_tab_m10_fhd_plus_2nd_gen_ct1_02.png', 5, 1),
(16, 1, 'iPad Air 4 10.9-inch (2020) Wi-Fi 64GB - Rose Gold (MYFP2ZA/A)', 600, 'Chip: A14 Bionic chip 64‑bit architecture\r\nCapacity: 64GB\r\nDisplay: Liquid Retina 10.9-inch LED‑backlit Multi‑Touch IPS\r\nConnectivity: Wi-Fi, Bluetooth 5.0', '2021-12-07', 'https://anphat.com.vn/media/product/35790_thumb650_apple_ipad_air_2020_4th_gen_wifi_rose_gold_1.jpg', 12, 1),
(17, 1, 'Wacom Cintiq Pro 13 Inch Have Touch computer drawing board DTH-1320/AK2-CX', 500, 'Wacom Cintiq Pro 13 Inch Have Touch DTH-1320 - Black\r\nCintiq Pro 13 Touch drawing board\r\n13\" multi-touch screen\r\nFull HD screen resolution\r\nColor accuracy reaches 87% Adobe RGB standard\r\nNew Pro Pen 2\r\nAchieves 4X the pressure and accuracy of Wacom Pro Pen, detects ±60° of tilt, no \"lag\"', '2021-12-07', 'https://anphat.com.vn/media/product/27787_27787_91iooy1phil__sl1500_.jpg', 9, 1),
(18, 1, 'iPad Air 4 10.9-inch (2020) Wi-Fi 64GB - Space Grey (MYFM2ZA/A) ', 2100, 'Chip: A14 Bionic chip 64‑bit architecture\r\nCapacity: 64GB\r\nDisplay: Liquid Retina 10.9-inch LED‑backlit Multi‑Touch IPS\r\nConnectivity: Wi-Fi, Bluetooth 5.0\r\nOperating system: iPadOS 14', '2021-12-07', 'https://anphat.com.vn/media/product/35788_10047756_may_tinh_bang_ipad_air_10_9_inch_wifi_64gb_myfm2za_a_xam_2020_1.jpg', 4, 1),
(19, 1, 'iPad 10.2 inch gen 8th 2020 Wi-Fi + Cellular 32GB - Space Grey (MYMH2ZA/A)', 700, 'Chip: A12 Bionic chip with 64-bit architecture\r\nCapacity: 32GB\r\nSIM Card:Nano‑SIM (supports Apple SIM), eSIM\r\nDisplay: Retina 10.2-inch Multi-Touch, IPS technology\r\nWi-Fi + 4G LTE, Bluetooth 4.2\r\nColor: Space Grey\r\nOperating system: iPadOS 14 ', '2021-12-07', 'https://anphat.com.vn/media/product/35683_10047750_may_tinh_bang_ipad_10_2_inch_wifi_cellular_32gb_mymh2za_a_xam_2020_1.jpg', 8, 1),
(20, 1, 'iPad Air 4 10.9-inch (2020) Wi-Fi + Cellular 64GB - Green (MYH12ZA/A)', 850, 'Chip: Apple A14 Bionic\r\nCapacity: 64GB\r\nDisplay: 10.9 inches (2360 x 1640 pixels), LED, IPS\r\nConnectivity: Wi-Fi, Bluetooth 5.0\r\nSim slot: 1 Sim (Nano SIM, eSIM)\r\nOperating system: iPadOS 14', '2021-12-07', 'https://anphat.com.vn/media/product/35802_thumb650_apple_ipad_air_2020_4th_gen_wifi_cellular_green_1.jpg', 3, 1),
(21, 1, 'DJI Mini SE Drone', 450, 'MPN:	\r\n5224715	\r\nColour:	Grey\r\nManufacturer Warranty:	12 Months(AU)	\r\nModel:	DJI Mini SE\r\nType:	Ready to Fly Drone	\r\nUPC:	6941565903822', '2021-12-07', 'https://i.ebayimg.com/images/g/ukIAAOSwRY1hW8Lz/s-l1600.jpg', 2, 1),
(22, 1, 'DJI FPV 4k Drone Combo - Black/Grey ', 1790, 'Brand DJI\r\nMPNCP.FP.00000004.01\r\nUPC0190021029521\r\nModelFPV 4k\r\neBay Product ID (ePID)13045510234\r\nMaximum Control Range13123 ft (4000 m)\r\nMaximum Flight Time20 min\r\nCamera FeaturesWide Angle Lens, 4K HD Video Recording\r\nTypeDrone\r\nConnectivityRemote Control, App Controller', '2021-12-07', 'https://i.ebayimg.com/images/g/ZIYAAOSwk5FheDpx/s-l640.jpg', 3, 1),
(23, 1, 'DJI Air 2S Fly More Combo Drone Quadcopter', 1500, 'Product Identifiers\r\nBrandDJI\r\nMPNCPMA0000034601\r\nGTIN0190021036581\r\nUPC0190021036581\r\nModelDJI Air 2S\r\neBay Product ID (ePID)4045815622\r\nProduct Key Features\r\nMaximum Flight Time31 min\r\nConnectivityRemote Control\r\nMaximum Control Range12KM\r\nCamera Features4K HD Video Recording\r\nTypeQuadcopter\r\nDimensions\r\nItem Weight1.31lbs.', '2021-12-07', 'https://thereal.buydig.com/get_pimage100.phtml?source=1&typeid=678430&sku=E1DJIAIR2SFMC', 2, 1),
(24, 1, 'Yuneec Mantis Q 4K Foldable Drone Yunmqus - Black', 300, 'Product Identifiers\r\nBrandYuneec\r\nMPNYUNMQUS\r\nEan0817206022794\r\nGTIN0817206022794\r\nUPC0817206022794\r\nModelYuneec Mantis Q\r\neBay Product ID (ePID)26030526886\r\nProduct Key Features\r\nMaximum Flight Time33 min\r\nConnectivityRemote Control, App Controller, Wi-Fi Connection\r\nMaximum Control Range4921 ft (1500 m)\r\nCamera FeaturesWide Angle Lens, Yes, 1080p HD Video Recording, 2.7K HD Video Recording, 720p HD Video Recording, 4K HD Video Recording\r\nTypeReady to Fly Drone\r\nDimensions\r\nItem Weight16.9 Oz', '2021-12-07', 'https://i.ebayimg.com/images/g/-HYAAOSwTwRf9IFa/s-l640.jpg', 1, 1),
(25, 1, '4DRC F9 2021 RC Drone GPS 4K HD Dual Camera 5G WIFI FPV Brushless Motor Foldable', 110, 'Material:	ABS / Electronic Components	\r\nColor:	Silver\r\nModel Grade:	Hobby Grade	\r\nFuel Type:	Electric\r\nAge Level:	17 Years & Up, 12-16 Years	\r\nCustom Bundle:	No\r\nModified Item:	No	\r\nAircraft Type:	6 Axis\r\nAltitude Hold:	Yes	\r\nApp:	Yes\r\nCamera: 2PC, 4K HD (Front) and 1080P (Rear), 6K	\r\nFOV:	110° Wide Angle', '2021-12-07', 'https://i.ebayimg.com/images/g/nM4AAOSwGMNhX2ae/s-l1600.jpg', 2, 1),
(26, 1, 'Drone Landing Pad Day Night Launch Helipad For DJI Mavic Pro Zoom Drone Parking', 100, 'Brand:	MM Electronicles\r\nMPN:	Does Not Apply	\r\nType:	Landing Gear Extension\r\nCompatible Brand:	Universal	\r\nCustom Bundle:	No\r\nModified Item:	No', '2021-12-07', 'https://i.ebayimg.com/images/g/IyQAAOSwHSRhS5~t/s-l1600.jpg', 4, 1),
(27, 1, 'JJRC X16 GPS Drone 5G WiFi FPV 6K HD Camera 2-Axis Gimbal Foldable RC Quadcopte', 210, 'Required Assembly:	Ready to Go/RTR/RTF (All included)\r\nModel:	X17	\r\nMPN:	Does Not Apply\r\nModel Grade:	Toy Grade	\r\nBrand:	JJRC\r\nType:	Quadcopter	\r\nFeatures: First Person Visual (FPV), Foldable, With Camera, With GPS', '2021-12-07', 'https://i.ebayimg.com/images/g/DxAAAOSwCyphhUuv/s-l1600.png', 2, 1),
(28, 1, 'GPS Positioning WIFI FPV 2.4G-1080P/5G-4K HD Foldable RC Camera Drone', 310, 'Brand: Unbranded\r\nMPN:	Does Not Apply', '2021-12-07', 'https://i.ebayimg.com/images/g/d3UAAOSwwINhOy2J/s-l1600.jpg', 3, 1),
(29, 1, 'Foldable RC Drone 4k HD WIFI FPV Drone Dual Camera Quadcopter Aircraft 2021 New', 150, 'Brand:	Unbranded\r\nFeatures:	Foldable	\r\nMPN:	Does Not Apply\r\nType:	Quadcopter', '2021-12-07', 'https://i.ebayimg.com/images/g/PCkAAOSwoxRhZSZp/s-l1600.jpg', 1, 1),
(30, 1, 'New S608 Pro GPS Drone 4k 6K HD Dual Camera 5G WIFI FPV Foldable RC Quadcopter', 175, 'Maximum Control Range: 10500 ft (3200 m)	\r\nMaximum Flight Time:	30 min\r\nBrand:	Unbranded	\r\nManufacturer Warranty:	15 days\r\nConnectivity: App Controller, Remote Control, Wi-Fi Connection', '2021-12-07', 'https://i.ebayimg.com/images/g/oo0AAOSwXYNhCD1e/s-l1600.jpg', 3, 1),
(31, 1, 'Creative Metallix Plus bluetooth speaker', 75, 'Battery life: 24h\r\nIPX5 . water resistant\r\nspeaker power 20W\r\nBluetooth: 5.0\r\nFrequency response 70 Hz ~ 20 kHz', '2021-12-07', 'https://anphat.com.vn/media/product/39290_55183_loa_bluetooth_creative_metallix_plus__3_.jpg', 15, 1),
(32, 1, 'Creative Sound BlasterX Katana 7.1 RGB LED Speaker', 60, 'Comes with LED control, effects, connections...\r\n- Bluetooth 4.2 . signal\r\n- Connection: 3.5mm jack/Bluetooth/USB/Optical\r\n- 75W RMS power (up to 150W)\r\n- 3 Amplifies\r\nSound BlasterX Acoustic Engine Lite technology\r\n- Frequency: 40Hz-20kHz\r\n- Remote Control\r\n-Dimensions/Weights\r\n  + 60 x 600 x 79.0mm/ 1.5kg\r\n  + 333 x 130 x 299 mm/4kg\r\n- Color: Black metal case - scratched aluminum\r\n- There is a beautiful down-drop RGB LED', '2021-12-07', 'https://anphat.com.vn/media/product/29302_d1db1f1bd6f4306080d5b183154fa4fa.jpg', 10, 1),
(33, 1, 'Logitech Speaker Z213 2.1', 45, 'Total watts (RMS): 14W\r\nSubwoofer: 4W\r\nSatellite speakers: 2 x 1.5W\r\n3.5mm input jack: 1\r\nHeadphone jack: 1\r\nControl buttons: Power and audio control buttons on the wired controller; bass control on the back of the subwoofer', '2021-12-07', 'https://anphat.com.vn/media/product/24442_loa_logitech_z213_1.png', 6, 1),
(34, 1, 'Logitech Z607 5.1 Surround Sound SPEAKER with Bluetooth', 1100, 'Subwoofer: 25 W RMS\r\nTotal Watt (RMS): 160 W Peak/80 W RMS\r\nSatellite speakers: 55 W RMS (total)\r\nBluetooth 4.2: 1\r\nRCA to RCA wire: 3\r\nWire 3.5 mm to RCA: 1\r\nSD card reader: 1\r\nUSB port: 1FM radio: yes\r\nRemote control: 1', '2021-12-07', 'https://anphat.com.vn/media/product/29634_z607_merida_pdp__1_.png', 20, 1),
(35, 1, 'Bluetooth Jabra Speak 510 MS', 820, 'Connect to a computer using a USB port\r\nConnect via bluetooth\r\nLoud speakerphone\r\nWide omnidirectional mic\r\nTouch control buttons\r\nMeeting equipment for 2-4 people', '2021-12-07', 'https://anphat.com.vn/media/product/32853_51425_jabra_speak_510_uc__2_.jpg', 12, 1),
(36, 1, 'Mini XGiMi MoGo Pro Plus', 1200, '- Brightness: 300 ANSI Lumens\r\n- Contrast: 5000:1\r\n- Weight: 0.9kgs\r\n- Resolution: 1920x1080p, support 4K.\r\n- Projection distance: 0.6-5m\r\n- LED light\r\n- OS: Android9.0\r\nProjection capacity: 76 inches at 2.0 meters (Upto 300 inches)\r\n- Adjust Keystone: +/-40 for horizontal and vertical\r\n- Speaker: Harman/Kardon\r\n- Battery Capacity: 10400mAh,\r\n- Up to 4K resolution, 3840x2160p', '2021-12-07', 'https://anphat.com.vn/media/product/38357_mogo_pro_plus.jpeg', 5, 1),
(37, 1, 'Logitech Speaker Mini Z120', 720, '- 3.5mm input jack: 1\r\n- USB cable for power supply: 1\r\n- Height x Width x Length: 110 mm x 90 mm x 88 mm\r\n- Weight: 0.25kg', '2021-12-07', 'https://anphat.com.vn/media/product/26080_loa_logitech_mini_z120_1.png', 22, 1),
(38, 1, 'MicroLab TMN-9BT 2.1\" computer speaker', 250, '- Design: 2.1 . Speaker System\r\n- Connection: RCA (input) / RCA (output) / USB (flash disk) / SD (card) / Bluetooth (audio)\r\n- Functions: Volume Control / Bass Control\r\n- Power: 40W RMS', '2021-12-07', 'https://anphat.com.vn/media/product/39160_326630_257838img3482.jpg', 12, 1),
(39, 1, 'SoundMax R-600 bluetooth wireless portable speaker', 120, 'Input compatible 2.1/5.1 2.0\r\nSound Adjustment Yes\r\n10W total power (RMS)\r\nFrequency Response 50Hz ~ 20KHz\r\nS/N noise compression ratio >60dB\r\nDimensions (WxDxH,mm) 165 x 98 x 80 (mm)\r\nCharging source: USB DC 5V', '2021-12-07', 'https://anphat.com.vn/media/product/36524_r600_hinh_l_n.jpg', 8, 1),
(40, 1, 'Computer Speaker SOUNDMAX SB-206', 210, 'Computer Speaker SOUNDMAX SB-206 Support playing music via bluetooth, USB, memory card, AUX\r\nUp to 4 hours of music playback time\r\nCompact design allows you to take it with you wherever you go\r\nExtremely impressive sound quality compared to appearance', '2021-12-07', 'https://anphat.com.vn/media/product/30868_sb_206.jpg', 6, 1),
(41, 1, 'iPhone 13 Pro Max - 128GB - Gold', 2200, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39051_iphone_13_pro_max_gold_select.png', 18, 1),
(42, 1, 'iPhone 13 Pro Max - 256GB - Graphite', 2500, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39053_', 22, 1),
(43, 1, 'iPhone 13 Pro Max - 512GB - Silver', 2500, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39058_', 30, 1),
(44, 1, 'iPhone 13 Pro Max - 256GB - Blue', 2450, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39056_', 12, 1),
(45, 1, 'iPhone 13 Pro Max - 128GB - Sierra Blue', 2150, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39052_iphone_13_pro_max_blue_select.png', 21, 1),
(46, 1, 'iPhone 13 Pro Max - 256GB - Gold', 2100, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39055_', 11, 1),
(47, 1, 'iPhone 13 Pro Max - 256GB - Silver', 2250, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39054_', 18, 1),
(48, 1, 'iPhone 13 Pro Max - 128GB - Graphite', 1950, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39049_iphone_13_pro_max_graphite_select.png', 18, 1),
(49, 1, 'iPhone 13 Pro Max - 128GB - Silver', 2950, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39050_iphone_13_pro_max_silver_select.png', 15, 1),
(50, 1, 'iPhone 13 Pro Max - 128GB - Gold', 2200, 'Screen: 6.7 inches OLED LTPO, 120Hz, 2778 x 1284\r\nRear camera: Wide-angle camera: 12MP, ƒ/1.5/ Super wide-angle camera: 12MP, ƒ/1.8/ Telephoto camera: 12MP, /2.8\r\nFront camera: 12MP, /2.2\r\nCPU: Apple A15\r\nMemory: 128GB\r\nRAM: 6GB\r\nOperating System: iOS15', '2021-12-07', 'https://anphat.com.vn/media/product/39051_iphone_13_pro_max_gold_select.png', 18, 1),
(51, 1, 'TIVI SONY SMART 4K KD-65X7000F 65inch', 2500, 'S- Type of TV: Smart TV basic, 65 inch\r\n- Resolution: Ultra HD 4K\r\n- Operating system: Linux\r\n- Available apps: Youtube, Netflix, Web Browser, VEWD Store\r\n- Apps that can be downloaded: FPT Play, Nhaccuatui, Zing TV, Zing Mp3, Fim+\r\n- Smart remote: Unusable\r\n- Internet connection: LAN port, Wifi\r\n- HDMI port: 3 ports\r\n- USB ports: 3 ports', '2021-12-07', 'https://anphat.com.vn/media/product/28549_tivi_sony_kd_65x7000f_2_2_org.jpg', 17, 1),
(52, 1, 'Tivi Sony Smart KD-75X8500E 4K 75 inch', 2900, '- Dimensions: 75 inches\r\n- Resolution: 4K UHD\r\n- Category: Smart TV\r\n- Audio technology: ClearAudio+, simulated surround sound, supports dolby audio formas', '2021-12-07', 'https://anphat.com.vn/media/product/25865_tivi_sony_smart_kd_75x8500e_4k_75_inch_1.jpg', 27, 1),
(53, 1, 'Tivi Ultra HD LG 65\' 65UC970T 3D, Smart TV', 2900, 'Built-in DVB-T2 . Digital Receiver\r\n- Screen size 65 inches\r\n- ULTRA HD resolution (3840 x 2160)\r\n- 178/178 . viewing angle\r\n- Dynamic MCI scan frequency 1000 Hz\r\n- Image technology: Tru ULTRA HD Engine Pro, Contrast Optimizer, Resolution Upscaling Plus, Dynamic Scanning, Image Noise Reduction, Tru Color Generator, Image clarity enhancement, Color enhancement\r\n- Sound Technology 4K Surround Sound Technology, Stereo Sound\r\n- USB connection (3), HDMI connection (4)\r\n- Built-in LAN and Wifi internet connection', '2021-12-07', 'https://anphat.com.vn/media/product/16372_0_tivi_ultra_hd_lg_65___65uc970t_3d__smart_tv.jpg', 14, 1),
(54, 1, 'Tivi Ultra HD LG 79\' 79UB980T 3D, Smart TV', 5900, 'Built-in DVBT2 . Digital TV Decoder\r\n- Type: 79-inch 3D 4K TV - MCI refresh rate 800Hz (TruMotion 200Hz)\r\n- 4K (3840 x 2160) resolution ~ 8 million pixels\r\n- Tru-ULTRA HD Engine Pro image technology\r\n- ULTRA surround sound technology, Multi-dimensional sound system\r\n- Realistic 4K Visuals with Perfect 4K IPS Display\r\n- Smart, friendly WEBOS operating system\r\n- Internet TV, built-in Wifi - Connection: HDMI(4), USB(3)', '2021-12-07', 'https://anphat.com.vn/media/product/16371_0_tivi_ultra_hd_lg_79___79ub980t_3d__smart_tv.jpg', 15, 1),
(55, 1, 'Tivi LED 3D Smart TV 65 inch Samsung UA65H7000', 3900, '3D LED screen : 65 inches\r\nResolution: Full HD 1920 x 1080\r\nScan Frequency : 800Hz ( CMR )\r\nBuilt-in DVB-T2 . digital receiver', '2021-12-07', 'https://anphat.com.vn/media/product/16327_0_tivi_led_3d_smart_tv_65_inch_samsung_ua65h7000.jpg', 15, 1),
(56, 1, 'Tivi LED Smart TV 46 inch Samsung UA46H5303', 2590, 'Built-in DVB-T2 . receiver\r\nFull HD resolution: 1920x1080\r\nScan frequency: 120 Hz\r\nConnection: 2HDMI port, 2USB to watch movies, Wireless LAN\r\nSpeaker power: 10W x 2\r\nSMART TV, 12mm thin bezel', '2021-12-07', 'https://anphat.com.vn/media/product/16361_0_tivi_led_smart_tv_46_inch_samsung_ua46h5303.jpg', 17, 1),
(57, 1, 'Tivi LED 3D Smart TV 46 inch Samsung UA46H7000', 1190, 'Built-in digital receiver DVB-T2\r\n- 46 inch screen size - 3D Cinema technology\r\n- Resolution: Full HD 1920 x 1080\r\n- CMR 800 HZ Clear Motion Index\r\n- 178/178 . viewing angle\r\n- Wide Color Enhancer Plus image technology\r\n- Dolby Digital sound technology\r\n- Smart interface Smart Hub\r\n- Smart control\r\n- Internet TV - Built-in Wifi\r\n- HDMI, Component, AV, USB connection portsl', '2021-12-07', 'https://anphat.com.vn/media/product/16360_0_tivi_led_3d_smart_tv_46_inch_samsung_ua46h7000.jpg', 10, 1),
(58, 1, 'Tivi LED 3D Smart TV 55 inch Samsung UA55HU9000K', 3190, 'Resolution: 3840 x 2160\r\nScan frequency: 1200 Hz\r\nConnection: 2HDMI port, 1USB to watch movies\r\nDVB T-2 . Digital Receiver', '2021-12-07', 'https://anphat.com.vn/media/product/16330_0_tivi_led_3d_smart_tv_55_inch_samsung_ua55hu9000k.jpg', 14, 1),
(59, 1, 'Tivi Ultra HD LG 55UB820T 55\' Smart TV', 2890, '- Screen size 55 inches\r\n- ULTRA HD resolution (3840 x 2160)\r\n- 178/178 . viewing angle\r\n- Dynamic MCI scan frequency 900 Hz\r\n- Image technology Tru ULTRA HD Engine (URSA9)\r\n- Ultra surround sound\r\n- USB connection (3), HDMI connection (3)\r\n- Built-in LAN and Wifi internet connection', '2021-12-07', 'https://anphat.com.vn/media/product/16515_tivi_ultra_hd_lg_55ub820t_55___smart_tv.jpg', 19, 1),
(60, 1, 'Tivi Ultra HD LG 49UB850T 49\' 3D Smart TV', 1190, '- Screen size 49 inches\r\n- ULTRA HD resolution (3840 x 2160)\r\n- 178/178 . viewing angle\r\n- Scan frequency 100 Hz\r\n- Tru ULTRA HD Engine image technology, Image noise reduction, Tru Color Generator, Image clarity enhancement, Color enhancement\r\n- Sound Technology 4K Surround Sound Technology, Stereo Sound\r\n- 2M Pix camera support\r\n- USB connection (3), HDMI connection (4)\r\n- Built-in LAN and Wifi internet connection', '2021-12-07', 'https://anphat.com.vn/media/product/16516_tivi_ultra_hd_lg_49ub850t_49___3d_smart_tv.jpg', 8, 1),
(61, 1, 'Apple Watch Series 6 GPS, 44mm Space Gray Aluminium Case with Black Sport Band - Regular', 1500, 'Always-On Retina LTPO OLED display, 1000 nits.Ion-X glass.\r\nGPS and GPS + Cellular models.\r\nS6 SiP with 64-bit dual-core processor; Chip W3; Chip U1.\r\nWater resistant 50 meters.\r\n32GB capacity.', '2021-12-07', 'https://anphat.com.vn/media/product/37038_screenshot_7.png', 9, 1),
(62, 1, 'Apple Watch Series 6 GPS, 44mm Gold Aluminium Case with Pink Sand Sport Band - Regular', 1500, 'Always-On Retina LTPO OLED display, 1000 nits.Ion-X glass.\r\nS6 SiP with 64-bit dual-core processor; Chip W3; Chip U1.\r\nWater resistant 50 meters.\r\n32GB.', '2021-12-07', 'https://anphat.com.vn/media/product/37037_screenshot_3.png', 5, 1),
(63, 1, 'Apple Watch Series 6 GPS, 44mm Silver Aluminium Case with White Sport Band - Regular', 1500, 'Always-On Retina LTPO OLED display, 1000 nits.Ion-X glass.\r\nGPS and GPS + Cellular models.\r\nS6 SiP with 64-bit dual-core processor; Chip W3; Chip U1.\r\nWater resistant 50 meters.\r\n32GB capacity.', '2021-12-07', 'https://anphat.com.vn/media/product/37028_screenshot_7.png', 16, 1),
(64, 1, 'Apple Watch Series 6 GPS, 40mm (PRODUCT)RED Aluminium Case with (PRODUCT)RED Sport Band - Regular', 1500, 'Always-On Retina LTPO OLED display, 1000 nits.Ion-X glass.\r\nGPS and GPS + Cellular models.\r\nS6 SiP with 64-bit dual-core processor; Chip W3; Chip U1.\r\nWater resistant 50 meters.\r\n32GB capacity.', '2021-12-07', 'https://anphat.com.vn/media/product/37025_screenshot_4.png', 16, 1),
(65, 1, ' Razer Nabu Watch Standard Edition ', 890, '12 months battery life using replaceable coin cell battery (CR2032)\r\nHourly time signal\r\n1/100 second stopwatch\r\nMeasuring capacity: 23:59\"59.99\"\r\nMeasuring modes: Elapsed time, split time\r\nCountdown Timer\r\nMeasuring unit: 1 second\r\nFull Auto Calendar\r\n12/24 hour formats\r\n3 multi-function alarms (Daily or weekly repeats).', '2021-12-07', 'https://anphat.com.vn/media/product/19590_nabu_watch_std_02_wm.png', 7, 1),
(66, 1, 'Corsair HS70 Bluetooth Headphone', 250, 'Corsair HS70 Bluetooth Headset\r\nBluetooth wireless headphones\r\nSupports both conventional wired connections via 3.5mm . jack\r\nFrequency response 20 - 20000Hz\r\nMulti-device support.', '2021-12-07', 'https://anphat.com.vn/media/product/35771_corsair_hs70_bluetooth__1_.png', 6, 1),
(67, 1, 'DareU EH745 7.1 RGB Headphone', 200, 'DareU EH745 7.1 RGB Headphones\r\n50mm diameter driver for great sound quality\r\nSupport virtual 7.1\r\nSuper soft foam ear cushions\r\nFrequency response 20 - 20,000 Hz\r\nBuilt-in high quality microphone\r\nUSB Jack\r\nCompatible with many devices', '2021-12-07', 'https://anphat.com.vn/media/product/37417_dareu_eh745__1_.jpg', 13, 1),
(68, 1, 'Razer BlackShark V2 X Headphone', 290, 'Razer BlackShark V2 Headset X\r\n50 mm . Razer™ Triforce driver\r\nRazer™ HyperClear Cardioid Mic . Technology\r\nVery light weight\r\nCommon 3.5mm connection', '2021-12-07', 'https://anphat.com.vn/media/product/34512_razer_blackshark_v2_x__1_.png', 7, 1),
(69, 1, 'DareU EH925s Queen Pink 7.1 RGB Headphone', 160, '16.8 million colors RGB LED\r\nDriver: 53mm\r\nEffects: emulator 7.1\r\nConnection: USB\r\nEar cushions: soft leather\r\nHeadband: metal\r\nFrequency Range: 20Hz-20KHz\r\nWire: 2.0m', '2021-12-07', 'https://anphat.com.vn/media/product/35214_dareu_eh925s_pink__1_.jpg', 19, 1),
(70, 1, 'E-Dra EH412 Pro 7.1 RGB Pink Headphone', 210, 'Fake fill 7.1\r\n16.8 million colors RGB LED\r\nConvenient USB connection\r\nThe case combines luxurious aluminum material', '2021-12-07', 'https://anphat.com.vn/media/product/37718_e_dra_eh410_pro_rgb_pink__1_.png', 9, 1),
(71, 7, 'Laptop MacBook Pro 14 M1 Pro 2021 8-core CPU/16GB/512GB/14-core GPU (MKGR3SA/A)', 2000, 'Apple M1 Pro là phiên bản kế nhiệm của con chip Apple M1 với tiến trình 5 nm, tích hợp 8 lõi CPU với 6 lõi hiệu suất cao và 2 lõi tiết kiệm điện mang đến cho bạn một hiệu suất làm việc cực kỳ cao với tốc độ xử lý nhanh chóng nhanh hơn 70% và hiệu năng tăng 1.7 lần so với các thế hệ tiền nhiệm đồng thời tiết kiệm một lượng điện năng đáng kể để kéo dài thời lượng pin hơn.\r\n\r\nDễ dàng chinh phục các tác vụ khắt khe nhất như chỉnh sửa ảnh với độ phân giải cao, thiết kế đồ họa 2D, 3D, render video chuyên nghiệp trên các ứng dụng của nhà Adobe như Photoshop, Illustrator, Premiere,... nhanh hơn gấp 2 lần so với chip Apple M1 và gấp 7 lần so với các chip đồ họa tích hợp 8 lõi phổ biến hiện nay nhờ vào 14 nhân GPU mạnh mẽ.\r\n\r\nĐa nhiệm mượt mà hơn bao giờ hết với bộ nhớ RAM 16 GB cho phép bạn hàng chục cửa sổ hay các layer đồ họa cùng lúc mà không xảy ra hiện tượng lag, giật, giải quyết khối lượng công việc “nặng đô” một cách nhanh chóng và ấn tượng.', '2021-12-09', 'https://cdn.tgdd.vn/Products/Images/44/253581/Slider/vi-vn-apple-pro-14-m1-pro-2021-8-core-cpu-16gb-12.jpg', 20, 0),
(81, 11, 'iPhone XR', 1200, 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', '2021-12-09', 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-trang-1-1-org.jpg', 18, 1),
(82, 7, 'MacBook Pro 14 M1 Pro 2021 8-core CPU/16GB/512GB/14-core GPU (MKGR3SA/A) ', 2000, 'Đa nhiệm mượt mà hơn bao giờ hết với bộ nhớ RAM 16 GB cho phép bạn hàng chục cửa sổ hay các layer đồ họa cùng lúc mà không xảy ra hiện tượng lag, giật, giải quyết khối lượng công việc “nặng đô” một cách nhanh chóng và ấn tượng.', '2021-12-09', 'https://cdn.tgdd.vn/Products/Images/44/253581/macbook-pro-14-m1-pro-2021-bac-1.jpg', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id_product`, `id_category`) VALUES
(2, 1),
(4, 1),
(6, 1),
(8, 1),
(10, 1),
(20, 2),
(18, 2),
(16, 2),
(14, 2),
(12, 2),
(9, 1),
(7, 1),
(5, 1),
(3, 1),
(1, 1),
(19, 2),
(17, 2),
(15, 2),
(13, 2),
(11, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 6),
(52, 6),
(53, 6),
(54, 6),
(55, 6),
(56, 6),
(57, 6),
(58, 6),
(59, 6),
(60, 6),
(61, 7),
(62, 7),
(63, 7),
(64, 7),
(65, 7),
(66, 7),
(67, 7),
(68, 7),
(69, 7),
(70, 7),
(82, 1),
(81, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request_role`
--

CREATE TABLE `request_role` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `adminID` int(11) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `roleBefore` int(11) NOT NULL,
  `roleAfter` int(11) DEFAULT NULL,
  `date_checked` datetime DEFAULT NULL,
  `checked` tinyint(1) DEFAULT 0,
  `requiredRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_role`
--

INSERT INTO `request_role` (`id`, `userID`, `adminID`, `date_created`, `roleBefore`, `roleAfter`, `date_checked`, `checked`, `requiredRole`) VALUES
(6, 7, 5, '2021-12-09 09:52:04', 3, 2, NULL, 1, 2),
(7, 1, 5, '2021-12-09 09:52:22', 2, 2, NULL, 1, 3),
(8, 7, 5, '2021-12-09 09:55:44', 3, 3, NULL, 1, 2),
(9, 1, 5, '2021-12-09 09:56:08', 2, 2, NULL, 1, 3),
(10, 7, 5, '2021-12-09 09:57:43', 3, 2, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `addr`, `phone`, `dob`, `role`, `date_created`, `img`, `information`) VALUES
(1, 'Tech Store', 'techstore@gmail.com', '$2y$10$B9BdNkXlsnsXLkeCQc3zG.CUT4cpmVSAWuHG3RRl47X9ryvnHOQ/q', NULL, NULL, NULL, 2, '2021-11-30 14:30:13', NULL, NULL),
(5, 'Admin', 'admin@gmail.com', '$2y$10$9uNewMJbCT7NZtI/Wj2nFu7ni12hmlyps1HbXiDpaJYlzTThIU2Sm', NULL, NULL, NULL, 0, '2021-11-26 22:25:27', NULL, NULL),
(6, 'nhat', 'nhat25@gmail.com', '$2y$10$Mse1N72KzcG0I5qJ1YWzm.n8L86cK4JSIweKcHqhcsYcyUi7zKUdO', NULL, NULL, NULL, 3, '2021-11-27 14:28:16', NULL, NULL),
(7, 'Quang12', 'quangdo2000@gmail.com', '$2y$10$tHZf/Qyl6ZnW/GpfVtfySOLiIHVePxzlZuP3yckMTwufDTydzIP7G', '1014/32 CMT8', '0961147504', '2001-02-20', 2, '2021-11-29 14:09:33', NULL, ' 12321321321321123'),
(9, 'NKLuyen', 'nkluyen123@gmail.com', '$2y$10$BQRPoQL8szUBs3NfVlv2C.3Vl1dcoI.y8rYH/DN/q9otn4YMW7g2q', NULL, NULL, NULL, 3, '2021-12-02 22:12:12', NULL, NULL),
(10, 'Coftbred', 'coftbred123@gmail.com', '$2y$10$eXQ4nqOSHLWt3o1Upq662O9xwWJ1NrhI.VSBO80qzXfjkBnZ.We/O', NULL, NULL, NULL, 3, '2021-12-02 22:16:44', NULL, NULL),
(11, 'Manager', 'manager@gmail.com', '$2y$10$RCbWhL17u.5guNZ1lZ5J0.Cpev54mw1bFV236D1BXLJy9vhzJJR7m', NULL, NULL, NULL, 1, '2021-12-09 08:15:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id`, `userID`, `productID`) VALUES
(15, 7, 1),
(17, 7, 2),
(18, 7, 17),
(21, 7, 4),
(22, 7, 7),
(23, 11, 82),
(24, 11, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_role`
--
ALTER TABLE `request_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `request_role`
--
ALTER TABLE `request_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

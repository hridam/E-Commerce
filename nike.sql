-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 06:42 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `nike`
--

DROP TABLE IF EXISTS `nike`;
CREATE TABLE IF NOT EXISTS `nike` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Opening_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pic_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pic_2` text NOT NULL,
  `pic_3` text NOT NULL,
  `pic_4` text NOT NULL,
  `Price` double NOT NULL,
  `Description_1` text NOT NULL,
  `Description_2` text NOT NULL,
  `Color` varchar(255) NOT NULL,
  `Available` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Shipping_Area` varchar(255) NOT NULL,
  `Shipping_Fee` varchar(255) NOT NULL,
  `Qty` bigint NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nike`
--

INSERT INTO `nike` (`ID`, `Name`, `Opening_image`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `Price`, `Description_1`, `Description_2`, `Color`, `Available`, `Category`, `Shipping_Area`, `Shipping_Fee`, `Qty`) VALUES
(1, 'Hridam Dhimal', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(2, 'Hridam Dhimal', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', '', 2000, '', '', '', '', '', '', '', 0),
(3, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(4, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(5, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(6, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(7, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(8, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', '', '', '', 0, '', '', '', '', '', '', '', 0),
(9, 'Nike Air Force 1 07', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/ce466524-f10a-48e0-b8d6-36fbc1b854bf/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/45d92467-e35a-4944-8d76-a0666b492c47/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/b42e34e6-f16a-4d83-9919-93810b318f7d/air-force-1-07-shoe-tnM0q0.png', 20000, '', '', 'White', 'In Stock', 'Nike Shoes', 'All Over Nepal ', '500', 5),
(10, 'Nike Air Force 1 07', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/f66a08b9-211c-43fe-a0cc-d04a732bdc63/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/ce466524-f10a-48e0-b8d6-36fbc1b854bf/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/45d92467-e35a-4944-8d76-a0666b492c47/air-force-1-07-shoe-tnM0q0.png', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/b42e34e6-f16a-4d83-9919-93810b318f7d/air-force-1-07-shoe-tnM0q0.png', 2000, '', '', 'White', 'In Stock', 'Nike Shoes', 'All Over Nepal ', '500', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

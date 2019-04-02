-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2019 at 11:22 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BidIt`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1517246319);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_1_product`
--

CREATE TABLE `tbl_bid_1_product` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bid` float NOT NULL,
  `create_ts` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_1_product`
--

INSERT INTO `tbl_bid_1_product` (`id`, `customer_id`, `bid`, `create_ts`) VALUES
(1, 1, 1, '2019-01-16 08:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_bid_transaction`
--

CREATE TABLE `tbl_bid_bid_transaction` (
  `id` int(10) NOT NULL,
  `msisdn` varchar(12) DEFAULT NULL,
  `bid_value` int(5) NOT NULL,
  `wallet_id` varchar(10) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = purchas, 2 = bid',
  `customer_id` varchar(10) NOT NULL,
  `balance` int(5) DEFAULT NULL,
  `product_id` varchar(10) DEFAULT NULL,
  `create_ts` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_bid_transaction`
--

INSERT INTO `tbl_bid_bid_transaction` (`id`, `msisdn`, `bid_value`, `wallet_id`, `type`, `customer_id`, `balance`, `product_id`, `create_ts`) VALUES
(1, '94717071207', 3, '1', 1, '1', 826, '1', '2018-12-30 01:38:57'),
(2, '94717071207', 10, '1', 1, '1', 836, '2', '2018-12-30 01:39:26'),
(3, '94715906788', 20, '2', 1, '2', 99, '3', '2018-12-30 01:44:56'),
(4, '94715906788', 20, '2', 1, '2', 119, '3', '2018-12-30 01:45:09'),
(5, '94715906788', 20, '2', 1, '2', 139, '3', '2018-12-30 01:57:00'),
(6, '94715906788', 3, '2', 1, '2', 142, '1', '2018-12-30 07:20:05'),
(7, '94715906788', 3, '2', 1, '2', 145, '1', '2018-12-30 07:20:18'),
(8, '94715906788', 3, '2', 1, '2', 148, '1', '2018-12-30 07:20:31'),
(9, '94715906788', 20, '2', 1, '2', 168, '3', '2018-12-30 07:28:33'),
(10, '94715906788', 10, '2', 2, '2', 178, '2', '2018-12-30 07:28:44'),
(11, '94715906788', 10, '2', 1, '2', 188, '2', '2018-12-30 07:28:54'),
(12, '94715906788', 10, '2', 1, '2', 198, '2', '2018-12-30 07:29:10'),
(13, '94717071207', 3, '1', 1, '1', 839, '1', '2018-12-31 15:53:22'),
(14, '94717071207', 3, '1', 1, '1', 842, '1', '2018-12-31 15:53:37'),
(15, '94717071207', 3, '1', 1, '1', 845, '1', '2018-12-31 15:55:44'),
(16, '94717071207', 3, '1', 2, '1', 848, '1', '2018-12-31 15:55:56'),
(17, '94717071207', 3, '1', 1, '1', 851, '1', '2018-12-31 16:59:44'),
(18, '94717071210', 10, '7', 1, '14', 12, '2', '2018-12-31 17:02:05'),
(19, '94717071210', 20, '7', 1, '14', 32, '3', '2019-01-05 17:02:21'),
(20, '94717071207', 3, '1', 1, '1', 854, '1', '2019-01-06 08:28:47'),
(21, '94717071207', 3, '1', 1, '1', 857, '1', '2019-01-07 21:25:39'),
(22, '94717071207', 3, '1', 2, '1', 860, '1', '2019-01-07 21:26:03'),
(23, '94717071207', 3, '1', 2, '1', 863, '1', '2019-01-07 21:45:02'),
(24, '94715906788', 10, '2', 1, '2', 208, '2', '2019-01-09 11:32:20'),
(25, '94717071207', 5, '1', 2, '1', 863, '1', '2019-01-09 20:35:22'),
(26, '94717071207', 5, '1', 2, '1', 863, '1', '2019-01-09 20:35:47'),
(27, '94717071207', 20, '1', 2, '1', 863, '1', '2019-01-09 20:36:20'),
(28, '94717071207', 5, '1', 2, '1', 1725, '1', '2019-01-09 20:38:20'),
(29, '94717071207', 50, '1', 2, '1', 1724, '1', '2019-01-09 20:38:34'),
(30, '94717071207', 5, '1', 2, '1', 1723, '1', '2019-01-09 20:39:13'),
(31, '94717071207', 40, '1', 2, '1', 1722, '1', '2019-01-09 20:39:33'),
(32, '94717071207', 10, '1', 2, '1', 1721, '1', '2019-01-09 20:43:53'),
(33, '94717071207', 20, '1', 2, '1', 1720, '1', '2019-01-09 20:44:27'),
(34, '94717071207', 20, '1', 2, '1', 1719, '1', '2019-01-09 20:45:53'),
(35, '94717071207', 50, '1', 2, '1', 1725, '1', '2019-01-09 20:49:26'),
(36, '94717071207', 20, '1', 2, '1', 1724, '1', '2019-01-09 20:51:02'),
(37, '94717071207', 10, '1', 2, '1', 862, '1', '2019-01-09 20:51:37'),
(38, '94717071207', 20, '1', 2, '1', 862, '1', '2019-01-09 20:51:51'),
(39, '94717071207', 10, '1', 2, '1', 861, '1', '2019-01-09 20:56:05'),
(40, '94717071207', 10, '1', 2, '1', 860, '1', '2019-01-09 20:56:17'),
(41, '94717071207', 10, '1', 2, '1', 859, '1', '2019-01-09 20:56:20'),
(42, '94717071207', 3, '1', 1, '1', 3, '1', '2019-01-09 21:11:40'),
(43, '94717071207', 5, '1', 2, '1', 2, '1', '2019-01-09 21:11:55'),
(44, '94717071207', 5, '1', 2, '1', 1, '1', '2019-01-09 21:12:00'),
(45, '94717071207', 10, '1', 2, '1', 0, '1', '2019-01-09 21:12:04'),
(46, '94717071207', 20, '1', 1, '1', 20, '3', '2019-01-09 21:31:38'),
(47, '94717071207', 50, '1', 2, '1', 19, '1', '2019-01-09 21:31:49'),
(48, '94717071207', 10, '1', 2, '1', 18, '1', '2019-01-09 21:32:23'),
(49, '94717071207', 10, '1', 2, '1', 17, '1', '2019-01-09 21:32:23'),
(50, '94717071207', 5, '1', 2, '1', 16, '1', '2019-01-09 21:32:38'),
(51, '94717071207', 5, '1', 2, '1', 15, '1', '2019-01-09 21:32:38'),
(52, '94717071207', 5, '1', 2, '1', 14, '1', '2019-01-09 21:43:53'),
(53, '94717071207', 5, '1', 2, '1', 15, '1', '2019-01-09 21:44:26'),
(54, '94717071207', 40, '1', 2, '1', 14, '1', '2019-01-09 21:44:35'),
(55, '94717071207', 10, '1', 2, '1', 13, '1', '2019-01-09 21:44:57'),
(56, '94715906789', 80, '5', 2, '12', 1, '1', '2019-01-10 23:37:20'),
(57, '94715906789', 50, '5', 2, '12', 0, '1', '2019-01-10 23:38:43'),
(58, '94715906789', 3, '5', 1, '12', 3, '1', '2019-01-10 23:39:41'),
(59, '94715906789', 30, '5', 2, '12', 2, '1', '2019-01-10 23:39:49'),
(60, '94717071207', 3, '1', 1, '1', 16, '1', '2019-01-13 21:16:25'),
(61, '94717071207', 3, '1', 1, '1', 19, '1', '2019-01-13 21:25:26'),
(62, '94717071207', 3, '1', 1, '1', 22, '1', '2019-01-13 21:47:59'),
(63, '94717071207', 20, '1', 1, '1', 42, '3', '2019-01-13 21:48:10'),
(64, '94715906788', 3, '2', 1, '2', 211, '1', '2019-01-13 21:48:59'),
(65, '94715906788', 3, '2', 1, '2', 214, '1', '2019-01-13 21:58:22'),
(66, '94715906788', 3, '2', 1, '2', 217, '1', '2019-01-13 21:58:34'),
(67, '94717071207', 15, '1', 2, '1', 42, '1', '2019-01-13 23:22:09'),
(68, '94715906788', 45, '2', 2, '2', 218, '1', '2019-01-15 14:16:42'),
(69, '94717071207', 3, '1', 1, '1', 45, '1', '2019-01-15 14:20:36'),
(70, '94717071207', 5, '1', 2, '1', 44, '4', '2019-01-15 19:22:11'),
(71, '94715906788', 10, '2', 2, '2', 217, '4', '2019-01-15 19:33:35'),
(72, '94715906788', 5, '2', 2, '2', 216, '4', '2019-01-15 19:47:15'),
(73, '94715906788', 10, '2', 2, '2', 215, '4', '2019-01-15 20:04:47'),
(74, '94717071207', 10, '1', 2, '1', 43, '4', '2019-01-15 20:04:56'),
(75, '94715906788', 5, '2', 2, '2', 214, '4', '2019-01-15 20:05:19'),
(76, '94717071207', 5, '1', 2, '1', 42, '4', '2019-01-15 20:07:27'),
(77, '94717071207', 60, '1', 2, '1', 41, '4', '2019-01-15 20:07:35'),
(78, '94717071207', 5, '1', 2, '1', 40, '4', '2019-01-15 20:07:41'),
(79, '94715906788', 5, '2', 2, '2', 213, '5', '2019-01-15 20:29:58'),
(80, '94715906788', 50, '2', 2, '2', 212, '4', '2019-01-15 22:34:23'),
(81, '94715906788', 10, '2', 2, '2', 211, '6', '2019-01-15 23:37:20'),
(82, '94715906788', 10, '2', 2, '2', 210, '6', '2019-01-15 23:37:27'),
(83, '94717071207', 25, '1', 2, '1', 39, '6', '2019-01-15 23:37:40'),
(84, '94717071207', 10, '1', 2, '1', 38, '6', '2019-01-15 23:37:46'),
(85, '94717071207', 25, '1', 2, '1', 37, '6', '2019-01-15 23:50:10'),
(86, '94717979218', 50, '14', 2, '23', 1, '5', '2019-01-16 14:02:36'),
(87, '94717979218', 40, '14', 2, '23', 0, '5', '2019-01-16 14:02:42'),
(88, '94717979218', 3, '14', 1, '23', 3, '1', '2019-01-16 14:02:54'),
(89, '94717979218', 50, '14', 2, '23', 2, '5', '2019-01-16 14:03:00'),
(90, '94717979218', 50, '14', 2, '23', 1, '5', '2019-01-16 14:03:04'),
(91, '94717979218', 40, '14', 2, '23', 0, '5', '2019-01-16 14:03:09'),
(92, '94717979218', 3, '14', 1, '23', 3, '1', '2019-01-16 14:32:26'),
(93, '94717979218', 25, '14', 2, '23', 2, '5', '2019-01-16 14:32:38'),
(94, '94717979218', 30, '14', 2, '23', 1, '5', '2019-01-16 14:32:43'),
(95, '94717979218', 5, '14', 2, '23', 0, '5', '2019-01-16 14:32:51'),
(96, '94777337045', 10, '15', 2, '24', 1, '5', '2019-01-16 15:28:24'),
(97, '94777337045', 50, '15', 2, '24', 0, '5', '2019-01-16 15:28:42'),
(98, '94717979218', 3, '14', 1, '23', 3, '1', '2019-01-16 17:30:59'),
(99, '94717979218', 10, '14', 1, '23', 13, '2', '2019-01-16 17:31:40'),
(100, '94717979218', 50, '14', 2, '23', 12, '5', '2019-01-16 17:32:02'),
(101, '94717979218', 56000, '14', 2, '23', 11, '5', '2019-01-17 11:13:08'),
(102, '94717979218', 555, '14', 2, '23', 10, '5', '2019-01-17 11:13:52'),
(103, '94717979218', 65555, '14', 2, '23', 9, '5', '2019-01-17 11:13:56'),
(104, '94717979218', 135256, '14', 2, '23', 8, '5', '2019-01-17 11:14:02'),
(105, '94717979218', 89985, '14', 2, '23', 7, '5', '2019-01-17 11:14:08'),
(106, '94717979218', 15655, '14', 2, '23', 6, '5', '2019-01-17 11:14:14'),
(107, '94717979218', 568838, '14', 2, '23', 5, '5', '2019-01-17 11:14:22'),
(108, '94717979218', 6666, '14', 2, '23', 4, '5', '2019-01-17 11:14:47'),
(109, '94717979218', 86868, '14', 2, '23', 3, '5', '2019-01-17 11:14:51'),
(110, '94717979218', 323535, '14', 2, '23', 2, '5', '2019-01-17 11:14:56'),
(111, '94717979218', 656868, '14', 2, '23', 1, '5', '2019-01-17 11:15:01'),
(112, '94717979218', 8686865, '14', 2, '23', 0, '5', '2019-01-17 11:15:05'),
(113, '94717979218', 3, '14', 1, '23', 3, '1', '2019-01-17 11:15:44'),
(114, '94717979218', 6888, '14', 2, '23', 2, '5', '2019-01-17 11:15:50'),
(115, '94717071207', 59000, '1', 2, '1', 36, '5', '2019-01-17 15:55:40'),
(116, '94717071207', 58888, '1', 2, '1', 35, '5', '2019-01-17 15:55:49'),
(117, '94717979218', 255555, '14', 2, '23', 1, '5', '2019-01-17 15:55:50'),
(118, '94717979218', 558555, '14', 2, '23', 0, '5', '2019-01-17 15:55:58'),
(119, '94717071207', 5689865, '1', 2, '1', 34, '5', '2019-01-17 15:55:59'),
(120, '94717979218', 20, '14', 1, '23', 20, '3', '2019-01-18 06:38:24'),
(121, '94717979218', 20, '14', 1, '23', 40, '3', '2019-01-18 06:38:36'),
(122, '94715906788', 304500, '2', 2, '2', 209, '5', '2019-01-18 21:20:45'),
(123, '94715906788', 350000, '2', 2, '2', 208, '5', '2019-01-18 21:22:09'),
(124, '94715906788', 2900, '2', 2, '2', 207, '5', '2019-01-19 08:25:43'),
(125, '94717979218', 10, '14', 1, '23', 50, '2', '2019-01-29 16:36:29'),
(126, '94717071207', 3, '1', 1, '1', 37, '1', '2019-03-03 20:35:51'),
(127, '94717071207', 1234211, '1', 2, '1', 36, '7', '2019-04-02 10:43:01'),
(128, '94717071207', 323000, '1', 2, '1', 35, '7', '2019-04-02 11:16:31'),
(129, '94717071207', 3, '1', 1, '1', 38, '1', '2019-04-02 11:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_config`
--

CREATE TABLE `tbl_bid_config` (
  `id` int(5) NOT NULL,
  `config` varchar(40) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_packages`
--

CREATE TABLE `tbl_bid_packages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `bids` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(150) DEFAULT '/bid/data/images/bidpacks/bidpack.jpg',
  `create_ts` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_ts` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_packages`
--

INSERT INTO `tbl_bid_packages` (`id`, `name`, `price`, `bids`, `status`, `image`, `create_ts`, `update_ts`) VALUES
(1, '3-Pack Saver', 20, 3, 1, '/bid/data/images/bidpacks/package1.png', '2018-12-29 22:08:02', '2018-12-29 22:40:26'),
(2, '10-Pack Saver', 65, 10, 1, '/bid/data/images/bidpacks/package2.png', '2018-12-29 22:09:16', '2018-12-29 22:40:30'),
(3, '20-Pack Saver', 120, 20, 1, '/bid/data/images/bidpacks/package3.png', '2018-12-29 22:09:16', '2018-12-29 22:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_product`
--

CREATE TABLE `tbl_bid_product` (
  `id` int(10) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(140) NOT NULL,
  `price` float NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `winner_id` int(5) DEFAULT '0',
  `winner_bid` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-queue,1-active,2-end,3-winner selected,4-disable/pause',
  `create_ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_ts` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_product`
--

INSERT INTO `tbl_bid_product` (`id`, `name`, `description`, `image`, `price`, `start_date`, `end_date`, `winner_id`, `winner_bid`, `status`, `create_ts`, `update_ts`) VALUES
(1, 'iPhone X', 'sale', '/bid/data/images/bidproducts/iphonex.jpeg', 1000, '2019-01-12 23:00:00', '2019-01-14 22:51:10', 0, 2, 3, '2018-12-30 13:40:59', '2019-01-15 21:54:53'),
(2, 'Note 9', '', '/bid/data/images/bidproducts/note9.png', 800, '2018-12-25 00:00:00', '2018-12-26 00:00:00', 1, 10, 3, '2018-12-30 11:19:08', '2019-01-15 21:55:38'),
(3, 'Poco F1', '', '/bid/data/images/bidproducts/f1.png', 3000, '2019-01-08 00:00:00', '2019-01-08 00:00:00', 2, 5, 3, '2019-01-09 17:16:18', '2019-01-15 21:55:35'),
(4, 'Mac Pro', 'mac workstation', '/bid/data/images/bidproducts/macWork.png', 6000, '2019-01-15 23:37:00', '2019-01-15 23:52:59', 2, 50, 3, '2019-01-15 18:03:09', '2019-03-03 19:35:01'),
(5, 'Mac Book Pro', 'mac', '/bid/data/images/bidproducts/macPro.png', 480000, '2019-03-04 21:19:05', '2019-03-21 20:20:50', 0, NULL, 0, '2019-01-18 15:48:59', '2019-04-02 10:26:41'),
(6, 'Playstation 4', 'playstaion', '/bid/data/images/bidproducts/ps4.png', 55000, '2019-03-01 21:30:10', '2019-03-02 22:35:00', 0, NULL, 3, '2019-03-15 15:01:31', '2019-03-03 21:36:54'),
(7, 'Huawei Matebook 13', 'Huawei Matebook 13', '/bid/data/images/bidproducts/mate.png', 320000, '2019-04-01 00:00:00', '2019-04-03 00:00:00', 0, NULL, 1, '2019-04-01 16:05:31', '2019-04-02 10:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_subscriber`
--

CREATE TABLE `tbl_bid_subscriber` (
  `id` int(8) NOT NULL,
  `msisdn` varchar(15) NOT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `chanel` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=web, 2=ussd, 3=sms, 4 = mobile app, 5 = unknown',
  `propic` varchar(140) DEFAULT '/bid/data/images/propusr/propic.jpeg',
  `create_ts` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_ts` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_subscriber`
--

INSERT INTO `tbl_bid_subscriber` (`id`, `msisdn`, `nic`, `name`, `email`, `status`, `chanel`, `propic`, `create_ts`, `update_ts`) VALUES
(0, '-', NULL, '-', NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-15 16:02:59', '2019-01-15 16:03:49'),
(1, '94717071207', '930982890V', 'Kash', NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-20 22:57:14', '2019-01-15 17:52:10'),
(2, '94715906788', NULL, 'Saku', NULL, 0, 1, '/bid/data/images/propusr/SarcMom.jpg', '2018-12-29 21:19:43', '2019-03-03 21:13:02'),
(10, '94717071206', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-30 22:32:29', '2018-12-30 22:35:27'),
(11, '94717071208', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-30 22:37:01', '2018-12-30 22:37:01'),
(12, '94715906789', NULL, NULL, NULL, 0, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-30 22:39:41', '2019-01-10 23:38:58'),
(13, '94717071209', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-31 17:00:16', '2018-12-31 17:00:16'),
(14, '94717071210', NULL, 'Test', NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2018-12-31 17:01:41', '2018-12-31 17:01:53'),
(15, '94717071207', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-09 19:18:11', '2019-01-09 19:18:11'),
(16, '94717071207', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-09 19:18:52', '2019-01-09 19:18:52'),
(17, '94717071207', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-09 19:19:56', '2019-01-09 19:19:56'),
(18, '94717071207', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-09 19:23:11', '2019-01-09 19:23:11'),
(19, '94717071207', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-09 19:23:33', '2019-01-09 19:23:33'),
(21, '94717071218', NULL, NULL, NULL, 2, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-16 06:07:54', '2019-01-16 06:07:54'),
(22, '94717079218', NULL, NULL, NULL, 2, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-16 06:08:02', '2019-01-16 06:08:02'),
(23, '94717979218', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-16 06:08:57', '2019-01-18 06:38:47'),
(24, '94777337045', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-01-16 15:27:37', '2019-01-16 15:44:43'),
(25, '9471715906788', NULL, NULL, NULL, 1, 1, '/bid/data/images/propusr/propic.jpeg', '2019-03-03 20:06:00', '2019-03-03 20:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bid_wallet`
--

CREATE TABLE `tbl_bid_wallet` (
  `id` int(10) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `bid_balance` int(11) NOT NULL,
  `daily_bid_balance` int(5) NOT NULL DEFAULT '0',
  `daily_bid_balance_stauts` tinyint(1) NOT NULL DEFAULT '0',
  `expire` datetime DEFAULT NULL,
  `create_ts` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_ts` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bid_wallet`
--

INSERT INTO `tbl_bid_wallet` (`id`, `cust_id`, `bid_balance`, `daily_bid_balance`, `daily_bid_balance_stauts`, `expire`, `create_ts`, `update_ts`) VALUES
(1, 1, 38, 0, 1, NULL, '2018-12-20 22:50:31', '2019-04-02 11:20:23'),
(2, 2, 207, 0, 0, '2018-12-31 00:00:00', '2018-12-29 21:21:13', '2019-01-19 08:25:43'),
(3, 10, 2, 0, 0, NULL, '2018-12-30 22:32:29', '2018-12-30 22:32:29'),
(4, 11, 2, 0, 0, NULL, '2018-12-30 22:37:01', '2018-12-30 22:37:01'),
(5, 12, 2, 0, 0, NULL, '2018-12-30 22:39:41', '2019-01-10 23:39:49'),
(6, 13, 2, 0, 0, NULL, '2018-12-31 17:00:16', '2018-12-31 17:00:16'),
(7, 14, 32, 0, 0, NULL, '2018-12-31 17:01:41', '2018-12-31 17:02:20'),
(8, 16, 2, 0, 0, NULL, '2019-01-09 19:18:52', '2019-01-09 19:18:52'),
(9, 17, 2, 0, 0, NULL, '2019-01-09 19:19:56', '2019-01-09 19:19:56'),
(10, 18, 2, 0, 0, NULL, '2019-01-09 19:23:11', '2019-01-09 19:23:11'),
(11, 19, 2, 0, 0, NULL, '2019-01-09 19:23:33', '2019-01-09 19:23:33'),
(12, 21, 2, 0, 0, NULL, '2019-01-16 06:07:54', '2019-01-16 11:37:54'),
(13, 22, 2, 0, 0, NULL, '2019-01-16 06:08:02', '2019-01-16 11:38:02'),
(14, 23, 50, 0, 1, NULL, '2019-01-16 06:08:57', '2019-01-29 16:36:29'),
(15, 24, 0, 0, 1, NULL, '2019-01-16 15:27:37', '2019-01-16 15:44:43'),
(16, 25, 4, 0, 1, NULL, '2019-03-03 20:06:00', '2019-03-03 20:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` text NOT NULL,
  `authKey` varchar(12) NOT NULL,
  `accessToken` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_bid_1_product`
--
ALTER TABLE `tbl_bid_1_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bid_bid_transaction`
--
ALTER TABLE `tbl_bid_bid_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BIDTRANS_CUST` (`customer_id`),
  ADD KEY `FK_BIDTRANS_PRODUCT` (`product_id`),
  ADD KEY `FK_BIDTRANS_WALLET` (`wallet_id`);

--
-- Indexes for table `tbl_bid_config`
--
ALTER TABLE `tbl_bid_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bid_packages`
--
ALTER TABLE `tbl_bid_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bid_product`
--
ALTER TABLE `tbl_bid_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bid_subscriber`
--
ALTER TABLE `tbl_bid_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bid_wallet`
--
ALTER TABLE `tbl_bid_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_WALLET_SUBSCRIBER` (`cust_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bid_1_product`
--
ALTER TABLE `tbl_bid_1_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_bid_bid_transaction`
--
ALTER TABLE `tbl_bid_bid_transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `tbl_bid_config`
--
ALTER TABLE `tbl_bid_config`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_bid_packages`
--
ALTER TABLE `tbl_bid_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_bid_product`
--
ALTER TABLE `tbl_bid_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_bid_subscriber`
--
ALTER TABLE `tbl_bid_subscriber`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_bid_wallet`
--
ALTER TABLE `tbl_bid_wallet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bid_wallet`
--
ALTER TABLE `tbl_bid_wallet`
  ADD CONSTRAINT `FK_WALLET_SUBSCRIBER` FOREIGN KEY (`cust_id`) REFERENCES `tbl_bid_subscriber` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

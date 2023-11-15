-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 02:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anns`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `BRANCH_ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL,
  `BARANGAY` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`BRANCH_ID`, `COMPANY_NAME`, `LOCATION_ID`, `PHONE_NUMBER`, `BARANGAY`) VALUES
(12, 'Anns Home Main Branch', 115, '(043) 980 7', ''),
(20, 'Anns Home P.Burgos Branch', 169, '(043) 984 6', ''),
(21, 'Anns Home SM Batangas Branch', 170, '(043) 984 6', ''),
(22, 'Anns Home Bauan Branch', 171, '(043) 980 7', ''),
(23, 'Anns Home Kumintang Branch', 172, '(043) 984 6', ''),
(24, 'Anns Home Main Branch Cashier', 115, '09876543211', 'Bolbok');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CNAME`) VALUES
(1, 'Whole Cakes'),
(2, 'Cookies'),
(3, 'Cupcakes'),
(4, 'Pastries'),
(5, 'Mini Cakes'),
(6, 'Slice Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUST_ID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `NAME`, `PHONE_NUMBER`) VALUES
(11, 'A Walk in Customer Main Store', ''),
(12, 'A Walk in Customer SM Batangas', ''),
(13, 'A Walk in Customer Bauan Branch', ''),
(14, 'A Walk in Customer Kumintang Branch', ''),
(15, 'A Walk in Customer P.Burgos Branch', ''),
(16, 'Facebook Online Order', ''),
(17, 'FoodPanda Delivery', ''),
(18, 'Maxim Delivery', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL,
  `JOB_ID` int(11) DEFAULT NULL,
  `HIRED_DATE` varchar(50) NOT NULL,
  `LOCATION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER`, `EMAIL`, `PHONE_NUMBER`, `JOB_ID`, `HIRED_DATE`, `LOCATION_ID`) VALUES
(1, 'Anns', 'Home', 'Female', 'annshome01@gmail.com', '09123456789', 1, '2022-11-01', 113),
(2, 'Bauan', 'Branch', 'Female', 'bauanbranch@gmail.com', '(043) 980 7', 2, '2020-04-12', 167),
(3, 'Kumintang', 'Branch', 'Female', 'kumintangbranch@gmail.com', '(043) 984 6', 2, '2020-02-06', 173),
(5, 'SM Batangas', 'Branch', 'Female', 'smbatangasbranch@gmail.com', '0439846907', 2, '2020-06-19', 175),
(7, 'P.Burgos', 'Branch', 'Female', 'pburgosbranch@gmail.com', '0439846908', 2, '2020-06-23', 177),
(9, 'Main', 'Branch', 'Female', 'annshome1@gmail.com', '91827437383', 2, '2022-11-23', 179);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JOB_ID` int(11) NOT NULL,
  `JOB_TITLE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JOB_ID`, `JOB_TITLE`) VALUES
(1, 'Manager'),
(2, 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` int(11) NOT NULL,
  `PROVINCE` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL,
  `BARANGAY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LOCATION_ID`, `PROVINCE`, `CITY`, `BARANGAY`) VALUES
(111, 'Negros Occidental', 'Bacolod City', ''),
(112, 'Negros Occidental', 'Bacolod City', ''),
(113, 'Batangas', 'Batangas', ''),
(114, 'Negros Occidental', 'Himamaylan', ''),
(115, 'Batangas', 'Batangas City', 'Bolbok'),
(116, 'Negros Occidental', 'Isabella', ''),
(126, 'Negros Occidental', 'Binalbagan', ''),
(130, 'Cebu', 'Bogo City', ''),
(131, 'Negros Occidental', 'Himamaylan', ''),
(132, 'Negros', 'Jupiter', ''),
(133, 'Aincrad', 'Floor 91', ''),
(134, 'negros', 'binalbagan', ''),
(135, 'hehe', 'tehee', ''),
(136, 'PLANET YEKOK', 'KOKEY', ''),
(137, 'Camiguin', 'Catarman', ''),
(138, 'Camiguin', 'Catarman', ''),
(139, 'Negros Occidental', 'Binalbagan', ''),
(140, 'Batangas', 'Lemery', ''),
(141, 'Capiz', 'Panay', ''),
(142, 'Camarines Norte', 'Labo', ''),
(143, 'Camarines Norte', 'Labo', ''),
(144, 'Camarines Norte', 'Labo', ''),
(145, 'Camarines Norte', 'Labo', ''),
(146, 'Capiz', 'Pilar', ''),
(147, 'Negros Occidental', 'Moises Padilla', ''),
(148, 'a', 'a', ''),
(149, '1', '1', ''),
(150, 'Negros Occidental', 'Himamaylan', ''),
(151, 'Masbate', 'Mandaon', ''),
(152, 'Aklanas', 'Madalagsasa', ''),
(153, 'Batangas', 'Mabini', ''),
(154, 'Bataan', 'Morong', ''),
(155, 'Batangas', 'Bauan', 'Poblacion'),
(156, 'Batangas', 'Bauan', ''),
(157, 'Camarines Norte', 'Labo', ''),
(158, 'Negros Occidental', 'Binalbagan', ''),
(159, 'Batangas', 'Bauan', 'Poblacion'),
(160, 'Batangas', 'Batangas', 'Bolbok'),
(161, 'Batangas', 'Batangas', 'Kumintang Ibaba'),
(162, 'Batangas', 'Batangas City', ''),
(163, 'Batangas', 'Batangas City', ''),
(164, 'Batangas', 'Batangas City', ''),
(165, 'Batangas', 'Batangas City', ''),
(166, 'Batangas', 'Bauan', 'Poblacion'),
(167, 'Batangas', 'Bauan', ''),
(168, 'Batangas', 'Batangas City', ''),
(169, 'Batangas', 'Batangas City', 'P. Burgos St.'),
(170, 'Batangas', 'Batangas City', 'Pallocan West'),
(171, 'Batangas', 'Bauan', 'San Deigo St.'),
(172, 'Batangas', 'Batangas City', 'National Road'),
(173, 'Batangas', 'Batangas City', ''),
(174, 'Batangas', 'Batangas City', ''),
(175, 'Batangas', 'Batangas City', ''),
(176, 'Batangas', 'Batangas City', ''),
(177, 'Batangas', 'Batangas City', ''),
(178, 'Batangas', 'Batangas City', ''),
(179, 'Batangas', 'Batangas City', ''),
(180, 'Camarines Norte', 'Talisay', ''),
(181, 'Abra', 'Langiden', 'a'),
(182, 'Abra', 'Bangued', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`FIRST_NAME`, `LAST_NAME`, `LOCATION_ID`, `EMAIL`, `PHONE_NUMBER`) VALUES
('Anns', 'Home', 113, 'annshome@gmail.com', '09124033805');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(20) DEFAULT NULL,
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `QTY_STOCK` int(50) DEFAULT NULL,
  `PRICE` int(50) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) DEFAULT NULL,
  `DATE_STOCK_IN` varchar(50) NOT NULL,
  `PRO_IMG` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `DESCRIPTION`, `QTY_STOCK`, `PRICE`, `CATEGORY_ID`, `BRANCH_ID`, `DATE_STOCK_IN`, `PRO_IMG`) VALUES
(41, 'MB-01', 'Red Velvet Cake (Whole Cake)', '3 layers of red velvety cake and creamcheese frosting (9 rnd).\r\n', 42, 680, 1, 12, '2022-11-30', 'annshome.png'),
(42, 'MB-02', 'Banana Layers (Whole cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (9 rnd).\r\n', 38, 550, 1, 12, '2022-11-30', 'annshome.png'),
(43, 'MB-03', 'Yema Cake (Whole Cake)', 'Soft moist sponge cake w/ not too sweet yema frosting, topped w/ grated cheese\r\n', 18, 575, 1, 12, '2022-11-17', 'annshome.png'),
(44, 'MB-04', 'Carrot Cake (Whole Cake)', 'Two layers of moist carrot cake with cream cheese frosting (9rnd).\r\n', 550, 815, 1, 12, '2022-11-27', 'annshome.png'),
(46, 'MB-05', 'Boston Cream Cake', 'Moist Vanilla sponge cake with whipped cream frosting, topped with dark choco ganache.', 495, 560, 1, 12, '2022-12-08', 'annshome.png'),
(48, 'BB-02', 'Banana Layers (Whole cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (9 rnd).\r\n', 0, 550, 1, 22, '2022-11-27', 'annshome.png'),
(49, 'MB-06', 'Caramel Cake', 'Simply vanilla sponge cake with caramel frosting, but not too sweet.', 498, 580, 1, 12, '2022-11-27', 'annshome.png'),
(50, 'BB-03', 'Tiramisu (Whole Cake)', '4 layers of sponge cake, brushed with coffee brandy & creamcheese. Dusted with cocoa powder & the sides covered with almonds (9 rnd).\r\n', 0, 425, 1, 22, '2022-11-27', 'annshome.png'),
(51, 'MB-07', 'Coco Pandan Cake', 'Moist pandan sponge cake lasyered with cream cheese frosting.', 500, 720, 1, 12, '2022-12-28', 'annshome.png'),
(52, 'BB-04', 'Banana Layers (Mini cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (7 rnd).\r\n', 12, 290, 5, 22, '2022-11-27', 'annshome.png'),
(53, 'MB-08', 'Fudge Chocolate Caramel Cake', 'Moist chocolate cake filled with caramel custard with fudge chocolate frosting.', 491, 670, 1, 12, '2022-11-28', 'annshome.png'),
(54, 'BB-05', 'Boston Cream Cake (Mini cake)', 'Moist vanilla sponge cake with whipped cream frosting, topped with dark chocolate ganache (7 rnd).\r\n', 9, 290, 5, 22, '2022-11-27', 'annshome.png'),
(55, 'MB-09', 'Mango Cream Cake', 'Moist sponge with a layer of mango mousse, frosted with whipped cream. (available only during mango season or special orders.)', 500, 850, 1, 12, '2022-11-29', 'annshome.png'),
(56, 'BB-06', 'Caramel Cake(Mini Cake)', 'Simply vanilla sponge cake with caramel frosting, but not too sweet (7 rnd).\r\n', 10, 290, 5, 22, '2022-11-27', 'annshome.png'),
(57, 'MB-10', 'Matcha Cake', 'Matcha flavored sponge cake frosted with chocolate ganache with matcha buttercream topping.', 500, 680, 1, 12, '2022-11-29', 'annshome.png'),
(58, 'MB-11', 'Mochaccino', 'Layers of Moist chocolate coffee cake, and mocha cream cheese frosting.', 500, 798, 1, 12, '2022-11-29', 'annshome.png'),
(59, 'MB-12', 'Nelusko', 'Soft moist mocha sponge cake with mocha buttercream frosting topped with crushed almond pralines', 200, 700, 1, 12, '2022-11-29', 'annshome.png'),
(60, 'MB-13', 'Salted Caramel Cake', '1 layer of sponge cake base with salted caramel frosting and piped buttercream.', 200, 575, 1, 12, '2022-11-29', 'annshome.png'),
(61, 'MB-14', 'Strawberry Cream Cake', 'Sponge cake base with strawberry cream cheese filling, frosted with whipped cream and strawberry syrup drizzle.', 200, 835, 1, 12, '2022-11-29', 'annshome.png'),
(62, 'MB-15', 'Tiramisu', '4 layers of sponge cakes, brushed with coffee brandy and cream chees. Dusted with cocoa powder and the sides covered with almond.', 200, 625, 1, 12, '2022-11-26', 'annshome.png'),
(63, 'MB-16', 'Triple Chocolate Mousse Cake', 'Moist dark chocolate cake bottom, followed by milk chocolate mousse, topped with white chocolate mousse.', 200, 710, 1, 12, '2022-11-29', 'annshome.png'),
(64, 'MB-17', 'Tabliya Cake', 'cake with frosting made from pure unprocessed tabliyang mabini.', 200, 798, 1, 12, '2022-11-29', 'annshome.png'),
(65, 'MB-18', 'Ube Cake', 'Moist ubs sponge cake filled with cream cheese, frosted with ube buttercream, topped with toasted sweetened coconut.', 192, 775, 1, 12, '2022-11-29', 'annshome.png'),
(66, 'MB-19', 'Vanilla Cloud Cake', 'Vanilla Sunshine cake filled with custard filling and torched swiss mirangue frosting', 197, 520, 1, 12, '2022-11-29', 'annshome.png'),
(67, 'MB-20', 'Macaroons Whole Box', 'Moist chewy coconut macaroons.', 190, 185, 4, 12, '2022-11-29', 'annshome.png'),
(68, 'MB-21', 'Macaroons Half Box', 'Moist chewy coconut macaroons.', 198, 125, 4, 12, '2022-11-29', 'annshome.png'),
(69, 'MB-22', 'Macaroons Pouch', 'Moist chewy coconut macaroons', 137, 58, 4, 12, '2022-11-29', 'annshome.png'),
(70, 'MB-23', 'Chocolate Chip Cookies (Big Pouch', 'Cookies filled with chocolate morsels', 84, 80, 2, 12, '2022-11-29', 'annshome.png'),
(71, 'MB-24', 'Chocolate Chip Cookies (Pouch)', 'Cookies loaded with chocolate morsels.', 200, 50, 2, 12, '2022-11-29', 'annshome.png'),
(72, 'MB-25', 'Lengua Thins', 'Melts in your mouth than lengua de gato.', 188, 78, 2, 22, '2022-11-28', 'annshome.png'),
(73, 'KB-01', 'Banana Layers (Mini Cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (7 rnd).\r\n', 50, 290, 5, 23, '2022-12-06', 'annshome.png'),
(74, 'BB-07', 'Carrot Cake (Slice)', 'Two layers of moist carrot cake with cream cheese frosting (Slice).\r\n', 30, 88, 6, 22, '2022-11-27', 'annshome.png'),
(75, 'BB-08', 'Fudge Chocolate Caramel Cake (Slice)', 'Moist chocolate cake filled with caramel custard with fudge chocolate frosting (Slice).\r\n', 20, 65, 6, 22, '2022-11-27', 'annshome.png'),
(76, 'KB-02', 'Boston Creme (Mini Cake)', 'Moist vanilla sponge cake with whipped cream frosting, topped with dark chocolate ganache (7 rnd).', 25, 290, 5, 23, '2022-12-06', 'annshome.png'),
(77, 'BB-09', 'Red Velvet Cake (Whole Cake)', '3 layers of red velvety cake and creamcheese frosting (9 rnd).\r\n', 26, 70, 6, 22, '2022-11-27', 'annshome.png'),
(78, 'KB-03', 'Caramel Cake (Mini Cakes)', 'Simply vanilla sponge cake with caramel frosting, but not too sweet (7 rnd).\r\n', 40, 290, 5, 23, '2022-12-06', 'annshome.png'),
(79, 'BB-10', 'Oatmeal Cookie Crisp (Big Pouch 12 pcs)', 'Melt in your mouth thin de gato\r\n', 7, 48, 2, 22, '2022-11-27', 'annshome.png'),
(80, 'KB-04', 'Tiramisu (Whole Cake)', '4 layers of sponge cake, brushed with coffee brandy & creamcheese. Dusted with cocoa powder & the sides covered with almonds (9 rnd).\r\n', 60, 425, 1, 23, '2022-12-06', 'annshome.png'),
(81, 'PB-01', 'Red Velvet Cake (Whole Cake)', '3 layers of red velvety cake and creamcheese frosting (9 rnd).\r\n', 20, 680, 1, 20, '2022-12-02', 'annshome.png'),
(82, 'PB-02', 'Banana Layers (Whole cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (9 rnd).\r\n', 24, 550, 1, 20, '2022-12-02', 'annshome.png'),
(83, 'KB-05', 'Salted Caramel Cake (Whole Cake)', '1 layer of sponge cake base, with salted caramel frosting and piped buttercream flowers (7 rnd).\r\n', 35, 295, 1, 23, '2022-12-06', 'annshome.png'),
(84, 'PB-03', 'Tiramisu (Whole Cake)', '4 layers of sponge cake, brushed with coffee brandy & creamcheese. Dusted with cocoa powder & the sides covered with almonds (9 rnd).\r\n', 9, 425, 1, 20, '2022-12-02', 'annshome.png'),
(85, 'PB-04', 'Banana Layers (Mini cake)', 'Moist Banana Cake with dark chocolate ganache and walnuts (7 rnd).\r\n', 30, 290, 5, 20, '2022-12-02', 'annshome.png'),
(86, 'KB-06', 'Vanilla Cloud Cake (Whole Cake)', 'Vanilla sunshine cake with custard filling & torched swiss meringue frosting (9 rnd).\r\n', 55, 270, 1, 23, '2022-12-06', 'annshome.png'),
(87, 'PB-05', 'Boston Cream Cake (Mini cake)', 'Moist vanilla sponge cake with whipped cream frosting, topped with dark chocolate ganache (7 rnd).\r\n', 30, 290, 5, 20, '2022-12-02', 'annshome.png'),
(88, 'KB-07', 'Oatmeal Cookie', 'Crisp oatmeal cookies\r\n', 85, 75, 2, 23, '2022-12-07', 'annshome.png'),
(89, 'PB-06', 'Caramel Cake(Mini Cake)', 'Simply vanilla sponge cake with caramel frosting, but not too sweet (7 rnd).\r\n', 30, 290, 5, 20, '2022-12-02', 'annshome.png'),
(90, 'KB-08', 'Chocolate Chips Cookies ', 'Cookies loaded with chocolate morsels\r\n', 20, 80, 2, 23, '2022-12-07', 'annshome.png'),
(91, 'PB-07', 'Carrot Cake (Slice)', 'Two layers of moist carrot cake with cream cheese frosting (Slice).\r\n', 30, 88, 6, 20, '2022-12-02', 'annshome.png'),
(92, 'KB-09', 'Butterscotch Squares', 'Moist chewy butterscotch squares bites\r\n', 50, 80, 2, 23, '2022-12-08', 'annshome.png'),
(93, 'PB-08', 'Fudge Chocolate Caramel Cake (Slice)', 'Moist chocolate cake filled with caramel custard with fudge chocolate frosting (Slice).\r\n', 20, 65, 6, 20, '2022-12-02', 'annshome.png'),
(94, 'KB-10', 'Carrot Cake (Whole Cake)', 'Two layers of moist carrot cake with cream cheese frosting (9rnd).\r\n', 65, 88, 5, 23, '2022-12-07', 'annshome.png'),
(95, 'PB-09', 'Red Velvet Cake (Slice)', '5 layers of red velvety cake and creamcheese frosting (Slice).\r\n', 30, 70, 6, 20, '2022-12-02', 'annshome.png'),
(96, 'SM-01', 'Nelusko (Whole Cake)', 'Soft moist mocha sponge cake with mocha buttercream frosting topped with crushed almond pralines (9 rnd)\r\n', 34, 700, 1, 21, '2022-12-08', 'annshome.png'),
(97, 'PB-10', 'Oatmeal Cookie Crisp(Big Pouch 12 pcs)', 'Melt in your mouth thin de gato\r\n', 50, 48, 6, 20, '2022-12-02', 'annshome.png'),
(98, 'SM-02', 'Salted Caramel Cake (Whole Cake)', '1 layer of sponge cake base, with salted caramel frosting and piped buttercream flowers (7 rnd).\r\n', 49, 575, 1, 21, '2022-12-07', 'annshome.png'),
(99, 'SM-03', 'Coco Pandan Cake (Whole Cake)', 'Moist pandan sponge cake layeres with creamcheese frosting, topped with pandan jelly, lined with toasted sweatened coconut (9 rnd).\r\n', 44, 720, 1, 21, '2022-12-07', 'annshome.png'),
(100, 'SM-04', 'Coco Pandan Cake (Mini Cake)', 'Moist pandan sponge cake layeres with creamcheese frosting, topped with pandan jelly, lined with toasted sweatened coconut (7 rnd).\r\n', 50, 375, 5, 21, '2022-12-07', 'annshome.png'),
(101, 'SM-05', 'Fudge Chocolate Caramel Cake (Mini Cake)', 'Moist chocolate cake filled with caramel custard with fudge chocolate frosting (7rnd).\r\n', 23, 350, 5, 21, '2022-12-08', 'annshome.png'),
(102, 'SM-06', 'Chocolate Chips Cookies  ', 'Cookies loaded with chocolate morsels\r\n', 25, 80, 2, 21, '2022-12-06', 'annshome.png'),
(103, 'SM-07', 'Oatmeal Cookie Crisp ', 'Crisp oatmeal cookies\r\n', 70, 75, 2, 21, '2022-12-07', 'annshome.png'),
(104, 'SM-08', 'Butterscotch Squares', 'Moist chewy butterscotch squares bites\r\n', 40, 95, 2, 21, '2022-12-08', 'annshome.png'),
(105, 'SM-09', 'Caramel Cake  (Mini Cake)', 'Simply vanilla sponge cake with caramel frosting, but not too sweet (7 rnd).\r\n', 12, 298, 5, 21, '2022-12-08', 'annshome.png'),
(106, 'SM-10', 'Carrot Cake (Mini Cake)', 'Two layers of moist carrot cake with cream cheese frosting (7rnd).\r\n', 55, 430, 5, 21, '2022-12-07', 'annshome.png'),
(107, 'MB-26', 'Oatmeal Cookies Crisp', 'Crisp oatmeal cookies.', 90, 75, 2, 12, '2022-11-29', 'annshome.png'),
(108, 'MB-27', 'Bittersweet Brownies', 'Moist chewy brownies made with bittersweet chocolate', 184, 258, 4, 12, '2022-11-29', 'annshome.png'),
(109, 'MB-28', 'Brownie Cheesecake Bites (Whole Box)', 'Moist bittersweet brownies and marbled cheesecake top layer', 191, 250, 4, 12, '2022-11-28', 'annshome.png'),
(110, 'MB-29', 'Brownie Smores (Whole Box)`', 'Fudge brownie topped with sugar-frebe marshmallows', 200, 330, 4, 12, '2022-11-29', 'annshome.png'),
(111, 'MB-30', 'Butterscotch Squares (Whole Box)', 'Moist chewy butterscotch squares bites.', 177, 185, 4, 12, '2022-11-28', 'annshome.png'),
(112, 'MB-31', 'Capuccino Bars (Whole Box)', 'Three layered bar of fudge brownie, cream cheese, and melted chocolate.', 92, 445, 4, 12, '2022-11-29', 'annshome.png'),
(113, 'MB-32', 'Choco Mint Glazed Brownies (Whole Box)', 'Fudge brownies with choco mint glazed.', 149, 330, 4, 12, '2022-11-30', 'annshome.png'),
(114, 'MB-33', 'Food for the goods (Whole Box)', 'Bland brownies with dates and nuts.', 61, 340, 4, 12, '2022-11-29', 'annshome.png'),
(115, 'MB-34', 'Red Velvet Cheesecake Bars (Whole Box)', '-', 58, 375, 4, 12, '2022-11-28', 'annshome.png'),
(116, 'MB-35', 'Red Velvet Cheesecake Bars (HalfBox)', '-', 65, 195, 4, 12, '2022-11-29', 'annshome.png'),
(117, 'MB-36', 'Red Velvet Cheesecake Bars (Small Box)', '-', 70, 70, 4, 12, '2022-11-29', 'annshome.png'),
(118, 'MB-37', 'Revel Bars (Whole Box)', '-', 0, 305, 6, 12, '2022-11-27', 'annshome.png'),
(119, 'MB-38', 'Cream Puffs (20 pcs.)', '-', 70, 295, 4, 12, '2022-11-29', 'annshome.png'),
(120, 'MB-39', 'Profiteroles (20 pcs.)', '-', 70, 790, 4, 12, '2022-11-28', 'annshome.png'),
(121, 'MB-40', 'Peaches and Cream (single)', '-', 70, 70, 4, 12, '2022-11-28', 'annshome.png'),
(122, 'MB-41', 'Blueberry Cheesecake (8x8)', 'No bake', 70, 735, 4, 12, '2022-11-28', 'annshome.png'),
(123, 'MB-42', 'Blueberry Cheesecake (Small Box)', '-', 70, 98, 4, 12, '2022-11-30', 'annshome.png'),
(124, 'MB-43', 'Strawberry Cheesecake (8x8)', '-', 70, 760, 4, 12, '2022-11-30', 'annshome.png'),
(125, 'MB-44', 'Mango Cheesecake (8x8)', '-', 70, 760, 4, 12, '2022-11-29', 'annshome.png'),
(126, 'MB-45', 'Baked Blueberry Cheesecake (8x8)', '-', 70, 815, 4, 12, '2022-11-29', 'annshome.png'),
(127, 'MB-46', 'Baked Oreo Cheesecake (8x8)', '-', 70, 810, 4, 12, '2022-11-28', 'annshome.png'),
(128, 'MB-47', 'Baked Oreo Cheesecake (2pcs)', '-', 70, 105, 4, 12, '2022-11-29', 'annshome.png'),
(129, 'MB-48', 'Banana Loaf Cake', '-', 70, 140, 5, 12, '2022-11-28', 'annshome.png'),
(130, 'MB-49', 'Carrot Loaf Cake', '-', 70, 235, 4, 12, '2022-11-29', 'annshome.png'),
(131, 'MB-50', 'Chocolate Loaf Cake', '-', 70, 155, 4, 12, '2022-11-29', 'annshome.png'),
(132, 'MB-51', 'Carrot Cake (Slice)', '-', 70, 88, 6, 12, '2022-11-29', 'annshome.png'),
(133, 'MB-52', 'Fudge Chocolate Caramel Cake (Slice)', '-', 100, 65, 6, 12, '2022-11-29', 'annshome.png'),
(134, 'MB-53', 'Red Velvet Cake (Slice)', '-', 100, 70, 6, 12, '2022-11-28', 'annshome.png'),
(135, 'MB-54', 'Banana Layers (Mini)', '-', 100, 290, 5, 12, '2022-11-28', 'annshome.png'),
(136, 'MB-55', 'Boston Cream Cake (Mini)', '-', 100, 290, 5, 12, '2022-11-28', 'annshome.png'),
(137, 'MB-56', 'Caramel Cake (Mini)', '-', 100, 298, 5, 12, '2022-11-29', 'annshome.png'),
(138, 'MB-57', 'Carrot Cake (Mini)', '-', 100, 430, 5, 12, '2022-11-29', 'annshome.png'),
(139, 'MB-58', 'Coco Pandan Cake (Mini)', '-', 100, 375, 5, 12, '2022-11-28', 'annshome.png'),
(140, 'MB-59', 'Fudge Chocolate Caramel Cake (Mini)', '-', 100, 350, 5, 12, '2022-11-28', 'annshome.png'),
(141, 'MB-60', 'Mango Cream Cake (Mini)', '-', 100, 440, 1, 12, '2022-11-28', 'annshome.png'),
(142, 'MB-61', 'Matcha Cake (Mini)', '-', 100, 418, 5, 12, '2022-11-28', 'annshome.png'),
(143, 'MB-62', 'Mochaccino (Mini)', '-', 100, 418, 5, 12, '2022-11-28', 'annshome.png'),
(144, 'MB-63', 'Nelusko (Mini)', '-', 100, 370, 5, 12, '2022-11-28', 'annshome.png'),
(145, 'MB-64', 'Red Velvet Cake (mini)', '-', 100, 350, 5, 12, '2022-11-28', 'annshome.png'),
(146, 'MB-65', 'Salted Caramel Cake (Mini)', '-', 100, 295, 5, 12, '2022-11-29', 'annshome.png'),
(147, 'MB-66', 'Strawberry Cream Cake', '-', 100, 430, 5, 12, '2022-11-29', 'annshome.png'),
(148, 'MB-67', 'Tiramisu', '-', 100, 425, 5, 12, '2022-11-29', 'annshome.png'),
(149, 'MB-68', 'Triple Chocolate Mousse Cake (Mini)', '-', 100, 375, 5, 12, '2022-11-29', 'annshome.png'),
(150, 'BB-01', 'Red Velvet Cake (Whole)', '-', 0, 680, 1, 22, '2022-11-30', 'annshome.png'),
(151, 'MB-70', 'Choco Mint Brownie (small box)', '-', 10, 55, 4, 12, '2022-11-30', 'annshome.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TRANS_ID` int(50) NOT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `NUMOFITEMS` varchar(250) NOT NULL,
  `SUBTOTAL` varchar(50) NOT NULL,
  `LESSVAT` varchar(50) NOT NULL,
  `NETVAT` varchar(50) NOT NULL,
  `ADDVAT` varchar(50) NOT NULL,
  `GRANDTOTAL` varchar(250) NOT NULL,
  `CASH` varchar(250) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL,
  `T_DATE` date NOT NULL DEFAULT current_timestamp(),
  `BRANCH_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `CASH`, `DATE`, `TRANS_D_ID`, `T_DATE`, `BRANCH_ID`) VALUES
(1, NULL, '1', '2,720.00', '291.43', '2,428.57', '291.43', '2,720.00', '2720', '2022-11-27', '1219152701', '2022-12-19', 12),
(2, NULL, '1', '1,650.00', '176.79', '1,473.21', '176.79', '1,650.00', '1650', '2022-11-27', '1219152948', '2022-12-19', 12),
(3, NULL, '1', '575.00', '61.61', '513.39', '61.61', '575.00', '575', '2022-11-27', '1219153005', '2022-12-19', 12),
(4, NULL, '1', '3,260.00', '349.29', '2,910.71', '349.29', '3,260.00', '3260', '2022-11-27', '1219153022', '2022-12-19', 12),
(5, NULL, '1', '1,120.00', '120.00', '1,000.00', '120.00', '1,120.00', '1120', '2022-11-27', '1219153038', '2022-12-19', 12),
(6, NULL, '1', '2,900.00', '310.71', '2,589.29', '310.71', '2,900.00', '2900', '2022-11-27', '1219153103', '2022-12-19', 12),
(7, NULL, '1', '1,450.00', '155.36', '1,294.64', '155.36', '1,450.00', '1450', '2022-11-27', '1219153122', '2022-12-19', 12),
(8, NULL, '1', '894.00', '95.79', '798.21', '95.79', '894.00', '894', '2022-11-27', '1219153144', '2022-12-19', 12),
(9, NULL, '1', '2,150.00', '230.36', '1,919.64', '230.36', '2,150.00', '2150', '2022-11-27', '1219153205', '2022-12-19', 12),
(10, NULL, '1', '2,100.00', '225.00', '1,875.00', '225.00', '2,100.00', '2100', '2022-11-27', '1219153232', '2022-12-19', 12),
(11, NULL, '1', '1,672.00', '179.14', '1,492.86', '179.14', '1,672.00', '1672', '2022-11-27', '1219153259', '2022-12-19', 12),
(12, NULL, '1', '780.00', '83.57', '696.43', '83.57', '780.00', '780', '2022-11-27', '1219153327', '2022-12-19', 12),
(13, NULL, '1', '1,750.00', '187.50', '1,562.50', '187.50', '1,750.00', '1750', '2022-11-27', '1219153341', '2022-12-19', 12),
(14, NULL, '1', '1,450.00', '155.36', '1,294.64', '155.36', '1,450.00', '1450', '2022-11-27', '1219153418', '2022-12-19', 12),
(15, NULL, '1', '258.00', '27.64', '230.36', '27.64', '258.00', '258', '2022-11-27', '1219153515', '2022-12-19', 12),
(16, NULL, '1', '750.00', '80.36', '669.64', '80.36', '750.00', '750', '2022-11-27', '1219153600', '2022-12-19', 12),
(17, NULL, '1', '250.00', '26.79', '223.21', '26.79', '250.00', '250', '2022-11-27', '1219153625', '2022-12-19', 12),
(18, NULL, '1', '2,400.00', '257.14', '2,142.86', '257.14', '2,400.00', '2400', '2022-11-27', '1219153735', '2022-12-19', 12),
(19, NULL, '1', '2,040.00', '218.57', '1,821.43', '218.57', '2,040.00', '2040', '2022-11-27', '1219154124', '2022-12-19', 22),
(20, NULL, '1', '1,275.00', '136.61', '1,138.39', '136.61', '1,275.00', '1275', '2022-11-27', '1219154226', '2022-12-19', 22),
(21, NULL, '1', '2,320.00', '248.57', '2,071.43', '248.57', '2,320.00', '2320', '2022-11-27', '1219154319', '2022-12-19', 22),
(22, NULL, '1', '1,450.00', '155.36', '1,294.64', '155.36', '1,450.00', '1450', '2022-11-27', '1219154553', '2022-12-19', 22),
(23, NULL, '1', '870.00', '93.21', '776.79', '93.21', '870.00', '870', '2022-11-27', '1219154746', '2022-12-19', 22),
(24, NULL, '1', '1,320.00', '141.43', '1,178.57', '141.43', '1,320.00', '1320', '2022-11-27', '1219154806', '2022-12-19', 22),
(25, NULL, '1', '650.00', '69.64', '580.36', '69.64', '650.00', '650', '2022-11-27', '1219154824', '2022-12-19', 22),
(26, NULL, '1', '1,330.00', '142.50', '1,187.50', '142.50', '1,330.00', '1330', '2022-11-27', '1219154844', '2022-12-19', 22),
(27, NULL, '1', '480.00', '51.43', '428.57', '51.43', '480.00', '480', '2022-11-27', '1219154912', '2022-12-19', 22),
(28, NULL, '1', '780.00', '83.57', '696.43', '83.57', '780.00', '780', '2022-11-27', '1219154935', '2022-12-19', 22),
(29, NULL, '1', '2,125.00', '227.68', '1,897.32', '227.68', '2,125.00', '2125', '2022-11-27', '1219155157', '2022-12-19', 23),
(30, NULL, '1', '2,360.00', '252.86', '2,107.14', '252.86', '2,360.00', '2360', '2022-11-27', '1219155221', '2022-12-19', 23),
(31, NULL, '1', '810.00', '86.79', '723.21', '86.79', '810.00', '810', '2022-11-27', '1219155236', '2022-12-19', 23),
(32, NULL, '1', '1,875.00', '200.89', '1,674.11', '200.89', '1,875.00', '1875', '2022-11-27', '1219155250', '2022-12-19', 23),
(33, NULL, '1', '400.00', '42.86', '357.14', '42.86', '400.00', '400', '2022-11-27', '1219155301', '2022-12-19', 23),
(34, NULL, '1', '1,200.00', '128.57', '1,071.43', '128.57', '1,200.00', '1200', '2022-11-27', '1219155313', '2022-12-19', 23),
(35, NULL, '1', '440.00', '47.14', '392.86', '47.14', '440.00', '440', '2022-11-27', '1219155346', '2022-12-19', 23),
(36, NULL, '3', '8,990.00', '963.21', '8,026.79', '963.21', '8,990.00', '8990', '2022-11-27', '1219155420', '2022-12-19', 23),
(37, NULL, '1', '10,200.00', '1,092.86', '9,107.14', '1,092.86', '10,200.00', '10200', '2022-11-27', '1219155620', '2022-12-19', 20),
(38, NULL, '1', '1,650.00', '176.79', '1,473.21', '176.79', '1,650.00', '1650', '2022-11-27', '1219155637', '2022-12-19', 20),
(39, NULL, '1', '2,100.00', '225.00', '1,875.00', '225.00', '2,100.00', '2100', '2022-11-27', '1219160005', '2022-12-19', 21),
(40, NULL, '1', '1,725.00', '184.82', '1,540.18', '184.82', '1,725.00', '1725', '2022-11-27', '1219160022', '2022-12-19', 21),
(41, NULL, '1', '1,440.00', '154.29', '1,285.71', '154.29', '1,440.00', '1440', '2022-11-27', '1219160034', '2022-12-19', 21),
(42, NULL, '1', '1,040.00', '111.43', '928.57', '111.43', '1,040.00', '1040', '2022-11-27', '1219160046', '2022-12-19', 21),
(43, NULL, '1', '375.00', '40.18', '334.82', '40.18', '375.00', '375', '2022-11-27', '1219160058', '2022-12-19', 21),
(44, NULL, '1', '1,900.00', '203.57', '1,696.43', '203.57', '1,900.00', '1900', '2022-11-27', '1219160109', '2022-12-19', 21),
(45, NULL, '1', '750.00', '80.36', '669.64', '80.36', '750.00', '750', '2022-11-27', '1219160121', '2022-12-19', 21),
(46, NULL, '1', '1,290.00', '138.21', '1,151.79', '138.21', '1,290.00', '1290', '2022-11-27', '1219160135', '2022-12-19', 21),
(47, NULL, '1', '596.00', '63.86', '532.14', '63.86', '596.00', '596', '2022-11-27', '1219160151', '2022-12-19', 21),
(48, NULL, '1', '5,440.00', '582.86', '4,857.14', '582.86', '5,440.00', '5440', '2022-12-05', '1219160755', '2022-12-19', 12),
(49, NULL, '1', '3,850.00', '412.50', '3,437.50', '412.50', '3,850.00', '3850', '2022-12-05', '1219160812', '2022-12-19', 12),
(50, NULL, '1', '1,150.00', '123.21', '1,026.79', '123.21', '1,150.00', '1150', '2022-12-05', '1219160830', '2022-12-19', 12),
(51, NULL, '1', '4,250.00', '455.36', '3,794.64', '455.36', '4,250.00', '4250', '2022-12-05', '1219160850', '2022-12-19', 12),
(52, NULL, '1', '1,540.00', '165.00', '1,375.00', '165.00', '1,540.00', '1540', '2022-12-05', '1219160906', '2022-12-19', 12),
(53, NULL, '1', '2,320.00', '248.57', '2,071.43', '248.57', '2,320.00', '2320', '2022-12-05', '1219160925', '2022-12-19', 12),
(54, NULL, '1', '1,788.00', '191.57', '1,596.43', '191.57', '1,788.00', '1788', '2022-12-05', '1219161002', '2022-12-19', 12),
(55, NULL, '1', '860.00', '92.14', '767.86', '92.14', '860.00', '860', '2022-12-05', '1219161025', '2022-12-19', 12),
(56, NULL, '1', '1,672.00', '179.14', '1,492.86', '179.14', '1,672.00', '1672', '2022-12-05', '1219161045', '2022-12-19', 12),
(57, NULL, '1', '1,300.00', '139.29', '1,160.71', '139.29', '1,300.00', '1300', '2022-12-05', '1219161105', '2022-12-19', 12),
(58, NULL, '1', '1,050.00', '112.50', '937.50', '112.50', '1,050.00', '1050', '2022-12-05', '1219161117', '2022-12-19', 12),
(59, NULL, '1', '1,450.00', '155.36', '1,294.64', '155.36', '1,450.00', '1450', '2022-12-05', '1219161143', '2022-12-19', 12),
(60, NULL, '1', '800.00', '85.71', '714.29', '85.71', '800.00', '800', '2022-12-05', '1219161217', '2022-12-19', 12),
(61, NULL, '1', '1,275.00', '136.61', '1,138.39', '136.61', '1,275.00', '1275', '2022-12-05', '1219161232', '2022-12-19', 12),
(62, NULL, '1', '1,650.00', '176.79', '1,473.21', '176.79', '1,650.00', '1650', '2022-12-05', '1219161249', '2022-12-19', 12),
(63, NULL, '1', '1,020.00', '109.29', '910.71', '109.29', '1,020.00', '1020', '2022-12-05', '1219161307', '2022-12-19', 12),
(64, NULL, '1', '1,500.00', '160.71', '1,339.29', '160.71', '1,500.00', '1500', '2022-12-05', '1219161326', '2022-12-19', 12),
(65, NULL, '1', '875.00', '93.75', '781.25', '93.75', '875.00', '875', '2022-12-05', '1219161341', '2022-12-19', 12),
(66, NULL, '1', '516.00', '55.29', '460.71', '55.29', '516.00', '516', '2022-12-05', '1219161355', '2022-12-19', 12),
(67, NULL, '1', '640.00', '68.57', '571.43', '68.57', '640.00', '640', '2022-12-05', '1219161408', '2022-12-19', 12),
(68, NULL, '1', '2,720.00', '291.43', '2,428.57', '291.43', '2,720.00', '2720', '2022-12-05', '1219162133', '2022-12-19', 22),
(69, NULL, '1', '850.00', '91.07', '758.93', '91.07', '850.00', '850', '2022-12-05', '1219162144', '2022-12-19', 22),
(70, NULL, '1', '1,560.00', '167.14', '1,392.86', '167.14', '1,560.00', '1560', '2022-12-05', '1219162201', '2022-12-19', 22),
(71, NULL, '1', '580.00', '62.14', '517.86', '62.14', '580.00', '580', '2022-12-05', '1219162214', '2022-12-19', 22),
(72, NULL, '1', '290.00', '31.07', '258.93', '31.07', '290.00', '300', '2022-12-05', '1219162225', '2022-12-19', 22),
(73, NULL, '1', '870.00', '93.21', '776.79', '93.21', '870.00', '870', '2022-12-05', '1219162235', '2022-12-19', 22),
(74, NULL, '1', '440.00', '47.14', '392.86', '47.14', '440.00', '440', '2022-12-05', '1219162246', '2022-12-19', 22),
(75, NULL, '1', '325.00', '34.82', '290.18', '34.82', '325.00', '325', '2022-12-05', '1219162257', '2022-12-19', 22),
(76, NULL, '1', '140.00', '15.00', '125.00', '15.00', '140.00', '140', '2022-12-05', '1219162309', '2022-12-19', 22),
(77, NULL, '1', '1,700.00', '182.14', '1,517.86', '182.14', '1,700.00', '1700', '2022-12-05', '1219162623', '2022-12-19', 23),
(78, NULL, '1', '1,475.00', '158.04', '1,316.96', '158.04', '1,475.00', '1475', '2022-12-05', '1219162811', '2022-12-19', 23),
(79, NULL, '1', '810.00', '86.79', '723.21', '86.79', '810.00', '810', '2022-12-05', '1219162827', '2022-12-19', 23),
(80, NULL, '1', '300.00', '32.14', '267.86', '32.14', '300.00', '300', '2022-12-05', '1219162840', '2022-12-19', 23),
(81, NULL, '1', '720.00', '77.14', '642.86', '77.14', '720.00', '720', '2022-12-05', '1219162855', '2022-12-19', 23),
(82, NULL, '1', '480.00', '51.43', '428.57', '51.43', '480.00', '480', '2022-12-05', '1219162909', '2022-12-19', 23),
(83, NULL, '1', '580.00', '62.14', '517.86', '62.14', '580.00', '580', '2022-12-05', '1219162921', '2022-12-19', 23),
(84, NULL, '1', '870.00', '93.21', '776.79', '93.21', '870.00', '870', '2022-12-05', '1219162935', '2022-12-19', 23),
(85, NULL, '1', '290.00', '31.07', '258.93', '31.07', '290.00', '290', '2022-12-05', '1219162947', '2022-12-19', 23),
(86, NULL, '1', '6,800.00', '728.57', '6,071.43', '728.57', '6,800.00', '6800', '2022-12-05', '1219163140', '2022-12-19', 20),
(87, NULL, '1', '4,250.00', '455.36', '3,794.64', '455.36', '4,250.00', '4250', '2022-12-05', '1219163227', '2022-12-19', 20),
(88, NULL, '1', '2,100.00', '225.00', '1,875.00', '225.00', '2,100.00', '2100', '2022-12-05', '1219163317', '2022-12-19', 21),
(89, NULL, '1', '2,875.00', '308.04', '2,566.96', '308.04', '2,875.00', '2875', '2022-12-05', '1219163329', '2022-12-19', 21),
(90, NULL, '1', '2,160.00', '231.43', '1,928.57', '231.43', '2,160.00', '2160', '2022-12-05', '1219163347', '2022-12-19', 21),
(91, NULL, '1', '960.00', '102.86', '857.14', '102.86', '960.00', '960', '2022-12-05', '1219163358', '2022-12-19', 21),
(92, NULL, '1', '600.00', '64.29', '535.71', '64.29', '600.00', '600', '2022-12-05', '1219163409', '2022-12-19', 21),
(93, NULL, '1', '475.00', '50.89', '424.11', '50.89', '475.00', '475', '2022-12-05', '1219163419', '2022-12-19', 21),
(94, NULL, '1', '1,500.00', '160.71', '1,339.29', '160.71', '1,500.00', '1500', '2022-12-05', '1219163434', '2022-12-19', 21),
(95, NULL, '1', '1,490.00', '159.64', '1,330.36', '159.64', '1,490.00', '1490', '2022-12-05', '1219163446', '2022-12-19', 21),
(96, NULL, '1', '1,290.00', '138.21', '1,151.79', '138.21', '1,290.00', '1290', '2022-12-05', '1219163458', '2022-12-19', 21),
(97, NULL, '1', '2,550.00', '273.21', '2,276.79', '273.21', '2550', '2600', '2022-12-29', '122971042', '2022-12-29', 22),
(98, NULL, '1', '425.00', '45.54', '379.46', '45.54', '425', '500', '2022-12-29', '122971948', '2022-12-29', 22),
(99, NULL, '1', '48.00', '5.14', '42.86', '5.14', '48', '50', '2022-12-29', '122972037', '2022-12-29', 22),
(100, NULL, '1', '680.00', '72.86', '607.14', '72.86', '680', '700', '2022-12-30', '123010510', '2022-12-30', 22),
(101, NULL, '1', '850.00', '91.07', '758.93', '91.07', '850', '1000', '<br />\r\n<b>Notice</b>:  Undefined variable: today ', '123012625', '2022-12-30', 22),
(102, NULL, '1', '850.00', '91.07', '758.93', '91.07', '850', '1000', '<br />\r\n<b>Notice</b>:  Undefined variable: today ', '123012700', '2022-12-30', 22),
(103, NULL, '1', '425.00', '45.54', '379.46', '45.54', '425', '500', '<br />\r\n<b>Notice</b>:  Undefined variable: today ', '123012745', '2022-12-30', 22),
(104, NULL, '1', '48.00', '5.14', '42.86', '5.14', '48', '50', '<br />\r\n<b>Notice</b>:  Undefined variable: today ', '123013005', '2022-12-30', 22),
(105, NULL, '1', '156.00', '16.71', '139.29', '16.71', '156', '200', '2022-12-30', '123013327', '2022-12-30', 22),
(106, NULL, '1', '48.00', '5.14', '42.86', '5.14', '48', '50', '2023-01-20', '0120132128', '2023-01-20', 22),
(107, NULL, '1', '1,360.00', '145.71', '1,214.29', '145.71', '1360', '2000', '2023-05-23', '052322326', '2023-05-23', 20),
(108, NULL, '1', '2,720.00', '291.43', '2,428.57', '291.43', '2720', '3000', '2023-05-23', '052322749', '2023-05-23', 20),
(109, NULL, '1', '1,100.00', '117.86', '982.14', '117.86', '1100', '2000', '2023-05-23', '052323006', '2023-05-23', 20),
(110, NULL, '1', '425.00', '45.54', '379.46', '45.54', '425', '500', '2023-05-23', '052323244', '2023-05-23', 20),
(111, NULL, '1', '550.00', '58.93', '491.07', '58.93', '550', '600', '2023-05-23', '052323556', '2023-05-23', 20);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `ID` int(11) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL,
  `PRODUCTS` varchar(250) NOT NULL,
  `QTY` varchar(250) NOT NULL,
  `PRICE` varchar(250) NOT NULL,
  `EMPLOYEE` varchar(250) NOT NULL,
  `ROLE` varchar(250) NOT NULL,
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `GRANDTOTAL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`, `EMPLOYEE`, `ROLE`, `DATE`, `GRANDTOTAL`) VALUES
(277, '1219152701', 'Red Velvet Cake (Whole Cake)', '4', '680', 'Main', 'Cashier', '2022-11-27', '2,720.00'),
(278, '1219152948', 'Banana Layers (Whole cake)', '3', '550', 'Main', 'Cashier', '2022-11-27', '1,650.00'),
(279, '1219153005', 'Yema Cake (Whole Cake)', '1', '575', 'Main', 'Cashier', '2022-11-27', '575.00'),
(280, '1219153022', 'Carrot Cake (Whole Cake)', '4', '815', 'Main', 'Cashier', '2022-11-27', '3,260.00'),
(281, '1219153038', 'Boston Cream Cake', '2', '560', 'Main', 'Cashier', '2022-11-27', '1,120.00'),
(282, '1219153103', 'Banana Layers (Mini)', '10', '290', 'Main', 'Cashier', '2022-11-27', '2,900.00'),
(283, '1219153122', 'Boston Cream Cake (Mini)', '5', '290', 'Main', 'Cashier', '2022-11-27', '1,450.00'),
(284, '1219153144', 'Caramel Cake (Mini)', '3', '298', 'Main', 'Cashier', '2022-11-27', '894.00'),
(285, '1219153205', 'Carrot Cake (Mini)', '5', '430', 'Main', 'Cashier', '2022-11-27', '2,150.00'),
(286, '1219153232', 'Fudge Chocolate Caramel Cake (Mini)', '6', '350', 'Main', 'Cashier', '2022-11-27', '2,100.00'),
(287, '1219153259', 'Carrot Cake (Slice)', '19', '88', 'Main', 'Cashier', '2022-11-27', '1,672.00'),
(288, '1219153327', 'Fudge Chocolate Caramel Cake (Slice)', '12', '65', 'Main', 'Cashier', '2022-11-27', '780.00'),
(289, '1219153341', 'Red Velvet Cake (Slice)', '25', '70', 'Main', 'Cashier', '2022-11-27', '1,750.00'),
(290, '1219153418', 'Macaroons Pouch', '25', '58', 'Main', 'Cashier', '2022-11-27', '1,450.00'),
(291, '1219153515', 'Bittersweet Brownies', '1', '258', 'Main', 'Cashier', '2022-11-27', '258.00'),
(292, '1219153600', 'Brownie Cheesecake Bites (Whole Box)', '3', '250', 'Main', 'Cashier', '2022-11-27', '750.00'),
(293, '1219153625', 'Macaroons Half Box', '2', '125', 'Main', 'Cashier', '2022-11-27', '250.00'),
(294, '1219153735', 'Chocolate Chip Cookies (Big Pouch', '30', '80', 'Main', 'Cashier', '2022-11-27', '2,400.00'),
(295, '1219154124', 'Red Velvet Cake (Whole)', '3', '680', 'Bauan', 'Cashier', '2022-11-27', '2,040.00'),
(296, '1219154226', 'Tiramisu (Whole Cake)', '3', '425', 'Bauan', 'Cashier', '2022-11-27', '1,275.00'),
(297, '1219154319', 'Banana Layers (Mini cake)', '8', '290', 'Bauan', 'Cashier', '2022-11-27', '2,320.00'),
(298, '1219154553', 'Boston Cream Cake (Mini cake)', '5', '290', 'Bauan', 'Cashier', '2022-11-27', '1,450.00'),
(299, '1219154746', 'Caramel Cake(Mini Cake)', '3', '290', 'Bauan', 'Cashier', '2022-11-27', '870.00'),
(300, '1219154806', 'Carrot Cake (Slice)', '15', '88', 'Bauan', 'Cashier', '2022-11-27', '1,320.00'),
(301, '1219154824', 'Fudge Chocolate Caramel Cake (Slice)', '10', '65', 'Bauan', 'Cashier', '2022-11-27', '650.00'),
(302, '1219154844', 'Red Velvet Cake (Whole Cake)', '19', '70', 'Bauan', 'Cashier', '2022-11-27', '1,330.00'),
(303, '1219154912', 'Oatmeal Cookie Crisp (Big Pouch 12 pcs)', '10', '48', 'Bauan', 'Cashier', '2022-11-27', '480.00'),
(304, '1219154935', 'Lengua Thins', '10', '78', 'Bauan', 'Cashier', '2022-11-27', '780.00'),
(305, '1219155157', 'Tiramisu (Whole Cake)', '5', '425', 'Kumintang', 'Cashier', '2022-11-27', '2,125.00'),
(306, '1219155221', 'Salted Caramel Cake (Whole Cake)', '8', '295', 'Kumintang', 'Cashier', '2022-11-27', '2,360.00'),
(307, '1219155236', 'Vanilla Cloud Cake (Whole Cake)', '3', '270', 'Kumintang', 'Cashier', '2022-11-27', '810.00'),
(308, '1219155250', 'Oatmeal Cookie', '25', '75', 'Kumintang', 'Cashier', '2022-11-27', '1,875.00'),
(309, '1219155301', 'Chocolate Chips Cookies ', '5', '80', 'Kumintang', 'Cashier', '2022-11-27', '400.00'),
(310, '1219155313', 'Butterscotch Squares', '15', '80', 'Kumintang', 'Cashier', '2022-11-27', '1,200.00'),
(311, '1219155346', 'Carrot Cake (Whole Cake)', '5', '88', 'Kumintang', 'Cashier', '2022-11-27', '440.00'),
(312, '1219155420', 'Banana Layers (Mini Cake)', '10', '290', 'Kumintang', 'Cashier', '2022-11-27', '8,990.00'),
(313, '1219155420', 'Boston Creme (Mini Cake)', '8', '290', 'Kumintang', 'Cashier', '2022-11-27', '8,990.00'),
(314, '1219155420', 'Caramel Cake (Mini Cakes)', '13', '290', 'Kumintang', 'Cashier', '2022-11-27', '8,990.00'),
(315, '1219155620', 'Red Velvet Cake (Whole Cake)', '15', '680', 'P.Burgos', 'Cashier', '2022-11-27', '10,200.00'),
(316, '1219155637', 'Banana Layers (Whole cake)', '3', '550', 'P.Burgos', 'Cashier', '2022-11-27', '1,650.00'),
(317, '1219160005', 'Nelusko (Whole Cake)', '3', '700', 'SM Batangas', 'Cashier', '2022-11-27', '2,100.00'),
(318, '1219160022', 'Salted Caramel Cake (Whole Cake)', '3', '575', 'SM Batangas', 'Cashier', '2022-11-27', '1,725.00'),
(319, '1219160034', 'Coco Pandan Cake (Whole Cake)', '2', '720', 'SM Batangas', 'Cashier', '2022-11-27', '1,440.00'),
(320, '1219160046', 'Chocolate Chips Cookies  ', '13', '80', 'SM Batangas', 'Cashier', '2022-11-27', '1,040.00'),
(321, '1219160058', 'Oatmeal Cookie Crisp ', '5', '75', 'SM Batangas', 'Cashier', '2022-11-27', '375.00'),
(322, '1219160109', 'Butterscotch Squares', '20', '95', 'SM Batangas', 'Cashier', '2022-11-27', '1,900.00'),
(323, '1219160121', 'Coco Pandan Cake (Mini Cake)', '2', '375', 'SM Batangas', 'Cashier', '2022-11-27', '750.00'),
(324, '1219160135', 'Carrot Cake (Mini Cake)', '3', '430', 'SM Batangas', 'Cashier', '2022-11-27', '1,290.00'),
(325, '1219160151', 'Caramel Cake  (Mini Cake)', '2', '298', 'SM Batangas', 'Cashier', '2022-11-27', '596.00'),
(326, '1219160755', 'Red Velvet Cake (Whole Cake)', '8', '680', 'Main', 'Cashier', '2022-12-05', '5,440.00'),
(327, '1219160812', 'Banana Layers (Whole cake)', '7', '550', 'Main', 'Cashier', '2022-12-05', '3,850.00'),
(328, '1219160830', 'Yema Cake (Whole Cake)', '2', '575', 'Main', 'Cashier', '2022-12-05', '1,150.00'),
(329, '1219160850', 'Mango Cream Cake', '5', '850', 'Main', 'Cashier', '2022-12-05', '4,250.00'),
(330, '1219160906', 'Banana Loaf Cake', '11', '140', 'Main', 'Cashier', '2022-12-05', '1,540.00'),
(331, '1219160925', 'Boston Cream Cake (Mini)', '8', '290', 'Main', 'Cashier', '2022-12-05', '2,320.00'),
(332, '1219161002', 'Caramel Cake (Mini)', '6', '298', 'Main', 'Cashier', '2022-12-05', '1,788.00'),
(333, '1219161025', 'Carrot Cake (Mini)', '2', '430', 'Main', 'Cashier', '2022-12-05', '860.00'),
(334, '1219161045', 'Carrot Cake (Slice)', '19', '88', 'Main', 'Cashier', '2022-12-05', '1,672.00'),
(335, '1219161105', 'Fudge Chocolate Caramel Cake (Slice)', '20', '65', 'Main', 'Cashier', '2022-12-05', '1,300.00'),
(336, '1219161117', 'Red Velvet Cake (Slice)', '15', '70', 'Main', 'Cashier', '2022-12-05', '1,050.00'),
(337, '1219161143', 'Macaroons Pouch', '25', '58', 'Main', 'Cashier', '2022-12-05', '1,450.00'),
(338, '1219161217', 'Chocolate Chip Cookies (Pouch)', '16', '50', 'Main', 'Cashier', '2022-12-05', '800.00'),
(339, '1219161232', 'Oatmeal Cookies Crisp', '17', '75', 'Main', 'Cashier', '2022-12-05', '1,275.00'),
(340, '1219161249', 'Choco Mint Glazed Brownies (Whole Box)', '5', '330', 'Main', 'Cashier', '2022-12-05', '1,650.00'),
(341, '1219161307', 'Food for the goods (Whole Box)', '3', '340', 'Main', 'Cashier', '2022-12-05', '1,020.00'),
(342, '1219161326', 'Red Velvet Cheesecake Bars (Whole Box)', '4', '375', 'Main', 'Cashier', '2022-12-05', '1,500.00'),
(343, '1219161341', 'Macaroons Half Box', '7', '125', 'Main', 'Cashier', '2022-12-05', '875.00'),
(344, '1219161355', 'Bittersweet Brownies', '2', '258', 'Main', 'Cashier', '2022-12-05', '516.00'),
(345, '1219161408', 'Chocolate Chip Cookies (Big Pouch', '8', '80', 'Main', 'Cashier', '2022-12-05', '640.00'),
(346, '1219162133', 'Red Velvet Cake (Whole)', '4', '680', 'Bauan', 'Cashier', '2022-12-05', '2,720.00'),
(347, '1219162144', 'Tiramisu (Whole Cake)', '2', '425', 'Bauan', 'Cashier', '2022-12-05', '850.00'),
(348, '1219162201', 'Lengua Thins', '20', '78', 'Bauan', 'Cashier', '2022-12-05', '1,560.00'),
(349, '1219162214', 'Banana Layers (Mini cake)', '2', '290', 'Bauan', 'Cashier', '2022-12-05', '580.00'),
(350, '1219162225', 'Boston Cream Cake (Mini cake)', '1', '290', 'Bauan', 'Cashier', '2022-12-05', '290.00'),
(351, '1219162235', 'Caramel Cake(Mini Cake)', '3', '290', 'Bauan', 'Cashier', '2022-12-05', '870.00'),
(352, '1219162246', 'Carrot Cake (Slice)', '5', '88', 'Bauan', 'Cashier', '2022-12-05', '440.00'),
(353, '1219162257', 'Fudge Chocolate Caramel Cake (Slice)', '5', '65', 'Bauan', 'Cashier', '2022-12-05', '325.00'),
(354, '1219162309', 'Red Velvet Cake (Whole Cake)', '2', '70', 'Bauan', 'Cashier', '2022-12-05', '140.00'),
(355, '1219162623', 'Tiramisu (Whole Cake)', '4', '425', 'Kumintang', 'Cashier', '2022-12-05', '1,700.00'),
(356, '1219162811', 'Salted Caramel Cake (Whole Cake)', '5', '295', 'Kumintang', 'Cashier', '2022-12-05', '1,475.00'),
(357, '1219162827', 'Vanilla Cloud Cake (Whole Cake)', '3', '270', 'Kumintang', 'Cashier', '2022-12-05', '810.00'),
(358, '1219162840', 'Oatmeal Cookie', '4', '75', 'Kumintang', 'Cashier', '2022-12-05', '300.00'),
(359, '1219162855', 'Chocolate Chips Cookies ', '9', '80', 'Kumintang', 'Cashier', '2022-12-05', '720.00'),
(360, '1219162909', 'Butterscotch Squares', '6', '80', 'Kumintang', 'Cashier', '2022-12-05', '480.00'),
(361, '1219162921', 'Banana Layers (Mini Cake)', '2', '290', 'Kumintang', 'Cashier', '2022-12-05', '580.00'),
(362, '1219162935', 'Boston Creme (Mini Cake)', '3', '290', 'Kumintang', 'Cashier', '2022-12-05', '870.00'),
(363, '1219162947', 'Caramel Cake (Mini Cakes)', '1', '290', 'Kumintang', 'Cashier', '2022-12-05', '290.00'),
(364, '1219163140', 'Red Velvet Cake (Whole Cake)', '10', '680', 'P.Burgos', 'Cashier', '2022-12-05', '6,800.00'),
(365, '1219163227', 'Tiramisu (Whole Cake)', '10', '425', 'P.Burgos', 'Cashier', '2022-12-05', '4,250.00'),
(366, '1219163317', 'Nelusko (Whole Cake)', '3', '700', 'SM Batangas', 'Cashier', '2022-12-05', '2,100.00'),
(367, '1219163329', 'Salted Caramel Cake (Whole Cake)', '5', '575', 'SM Batangas', 'Cashier', '2022-12-05', '2,875.00'),
(368, '1219163347', 'Coco Pandan Cake (Whole Cake)', '3', '720', 'SM Batangas', 'Cashier', '2022-12-05', '2,160.00'),
(369, '1219163358', 'Chocolate Chips Cookies  ', '12', '80', 'SM Batangas', 'Cashier', '2022-12-05', '960.00'),
(370, '1219163409', 'Oatmeal Cookie Crisp ', '8', '75', 'SM Batangas', 'Cashier', '2022-12-05', '600.00'),
(371, '1219163419', 'Butterscotch Squares', '5', '95', 'SM Batangas', 'Cashier', '2022-12-05', '475.00'),
(372, '1219163434', 'Coco Pandan Cake (Mini Cake)', '4', '375', 'SM Batangas', 'Cashier', '2022-12-05', '1,500.00'),
(373, '1219163446', 'Caramel Cake  (Mini Cake)', '5', '298', 'SM Batangas', 'Cashier', '2022-12-05', '1,490.00'),
(374, '1219163458', 'Carrot Cake (Mini Cake)', '3', '430', 'SM Batangas', 'Cashier', '2022-12-05', '1,290.00'),
(375, '122971042', 'Tiramisu (Whole Cake)', '6', '425', 'Bauan', 'Cashier', '2022-12-29', '2550'),
(376, '122971948', 'Tiramisu (Whole Cake)', '1', '425', 'Bauan', 'Cashier', '2022-12-29', '425'),
(377, '122972037', 'Oatmeal Cookie Crisp (Big Pouch 12 pcs)', '1', '48', 'Bauan', 'Cashier', '2022-12-29', '48'),
(378, '123010510', 'Red Velvet Cake (Whole)', '1', '680', 'Bauan', 'Cashier', '2022-12-30', '680'),
(379, '123012625', 'Tiramisu (Whole Cake)', '2', '425', 'Bauan', 'Cashier', '2022-12-30', '850'),
(380, '123012700', 'Tiramisu (Whole Cake)', '2', '425', 'Bauan', 'Cashier', '2022-12-30', '850'),
(381, '123012745', 'Tiramisu (Whole Cake)', '1', '425', 'Bauan', 'Cashier', '2022-12-30', '425'),
(382, '123013005', 'Oatmeal Cookie Crisp (Big Pouch 12 pcs)', '1', '48', 'Bauan', 'Cashier', '2022-12-30', '48'),
(383, '123013327', 'Lengua Thins', '2', '78', 'Bauan', 'Cashier', '2022-12-30', '156'),
(384, '0120132128', 'Oatmeal Cookie Crisp (Big Pouch 12 pcs)', '1', '48', 'Bauan', 'Cashier', '2023-01-20', '48'),
(385, '052322326', 'Red Velvet Cake (Whole Cake)', '2', '680', 'P.Burgos', 'Cashier', '2023-05-23', '1360'),
(386, '052322749', 'Red Velvet Cake (Whole Cake)', '4', '680', 'P.Burgos', 'Cashier', '2023-05-23', '2720'),
(387, '052323006', 'Banana Layers (Whole cake)', '2', '550', 'P.Burgos', 'Cashier', '2023-05-23', '1100'),
(388, '052323244', 'Tiramisu (Whole Cake)', '1', '425', 'P.Burgos', 'Cashier', '2023-05-23', '425'),
(389, '052323556', 'Banana Layers (Whole cake)', '1', '550', 'P.Burgos', 'Cashier', '2023-05-23', '550');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`TYPE_ID`, `TYPE`) VALUES
(1, 'Admin'),
(2, 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `TYPE_ID` int(11) DEFAULT NULL,
  `BRANCH_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `EMPLOYEE_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`, `BRANCH_ID`) VALUES
(1, 1, 'AnnsHome', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 12),
(2, 2, 'Cashier_Bauan', 'dd50bccc48844bf390a855cbd2119843f2e13c4c', 2, 22),
(3, 3, 'Cashier_Kumintang', '32ce40b5f2bd8469fab07ef38edb272310924fb1', 2, 23),
(4, 5, 'Cashier_SMBatangas', '8123244aef55227f2aaf4895811aeb9306176cf8', 2, 21),
(5, 7, 'Cashier_PBurgos', '83994b06b1054c0b4e42f25052ec7f653d7d41d6', 2, 20),
(6, 9, 'Cashier_AnnsHome', '26399698749f9ee9ac77c520af8d59b90aa38106', 2, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`BRANCH_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD UNIQUE KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`),
  ADD UNIQUE KEY `PHONE_NUMBER` (`PHONE_NUMBER`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`),
  ADD KEY `JOB_ID` (`JOB_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JOB_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD UNIQUE KEY `PHONE_NUMBER` (`PHONE_NUMBER`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `product_ibfk_1` (`CATEGORY_ID`),
  ADD KEY `product_ibfk_2` (`BRANCH_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `TRANS_DETAIL_ID` (`TRANS_D_ID`),
  ADD KEY `transaction_ibfk_3` (`CUST_ID`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TRANS_D_ID` (`TRANS_D_ID`) USING BTREE,
  ADD KEY `GRANDTOTAL` (`GRANDTOTAL`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE_ID` (`TYPE_ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`),
  ADD KEY `BRANCH_ID` (`BRANCH_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LOCATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANS_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`JOB_ID`) REFERENCES `job` (`JOB_ID`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branches` (`BRANCH_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`TYPE_ID`) REFERENCES `type` (`TYPE_ID`),
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

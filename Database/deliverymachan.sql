-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 11:51 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliverymachan`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminloginarea`
--

CREATE TABLE `adminloginarea` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(800) NOT NULL,
  `adminPassword` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminloginarea`
--

INSERT INTO `adminloginarea` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'Reyaz', 'Reyaz1234');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cities_id` int(11) NOT NULL,
  `cities_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_id`, `cities_name`) VALUES
(1, 'Peradeniya '),
(2, 'Katugastota '),
(3, 'Madawala '),
(4, 'Kandy '),
(5, 'Menikhinna '),
(6, 'Akurana '),
(7, 'Digana');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(800) NOT NULL,
  `last_name` varchar(800) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email` varchar(800) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(800) NOT NULL,
  `notes` text NOT NULL,
  `paymentMethod` varchar(500) NOT NULL,
  `nameOnCart` varchar(800) NOT NULL,
  `cardNumber` int(11) NOT NULL,
  `expire_month` int(11) NOT NULL,
  `expire_year` int(11) NOT NULL,
  `CCV` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `orderedDate` varchar(200) NOT NULL,
  `orderedTime` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customer_id`, `first_name`, `last_name`, `contact_number`, `email`, `address`, `city`, `notes`, `paymentMethod`, `nameOnCart`, `cardNumber`, `expire_month`, `expire_year`, `CCV`, `latitude`, `longitude`, `orderedDate`, `orderedTime`, `status`) VALUES
(1, 'Bmideen', 'bathurdeen', 653655736, 'ijasdeen23@gmail.com', 'asasdasd', 'Katugastota', 'cash', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '', '2018-08-05 17:36:13', 'pending'),
(2, 'Bmideen', 'bathurdeen', 653655736, 'ijasdeen23@gmail.com', 'asasdasd', 'Madawala', 'asdasd', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(3, 'Bmideen', 'bathurdeen', 653655736, 'ijasdeen23@gmail.com', 'asasdasd', 'Madawala', 'asdasd', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', 'Sun Aug 05 2018 18:06:25 GMT+0530 (Sri Lanka Standard Time)', 'pending'),
(4, 'Bmideen', 'bathurdeen', 653655736, 'ijasdeen23@gmail.com', 'asasdasd', 'Katugastota', '', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '6:08 PM', 'pending'),
(5, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', 'I need the cash change', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '6:34 PM', 'pending'),
(6, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', 'Cash change', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '6:47 PM', 'pending'),
(7, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', 'cash change', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '7:45 PM', 'pending'),
(8, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', 'cash change', 'creditCard', 'Ijas', 65445654, 13, 2014, 333, 6.901608599999999, 80.0087746, '', '', 'completed'),
(9, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', 'cash change', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '8:07 PM', 'pending'),
(10, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Menikhinna', 'Cash change', 'creditCard', 'Ijas', 5656454, 12, 2014, 333, 6.901608599999999, 80.0087746, '08/05/2018', '8:15 PM', 'completed'),
(11, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', 'sad', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '8:24 PM', 'pending'),
(12, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'creditCard', 'Ijas', 2147483647, 12, 3014, 13, 6.901608599999999, 80.0087746, '08/05/2018', '8:27 PM', 'completed'),
(13, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', '', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/05/2018', '8:30 PM', 'pending'),
(14, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', 'Cash change', 'paywithCash', '', 0, 0, 0, 0, 7.2392704000000005, 81.8511872, '08/06/2018', '11:22 AM', 'pending'),
(15, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'paywithCash', '', 0, 0, 0, 0, 7.2392704000000005, 81.8511872, '08/06/2018', '11:45 AM', 'pending'),
(16, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'paywithCash', '', 0, 0, 0, 0, 7.2392704000000005, 81.8511872, '08/06/2018', '11:50 AM', 'pending'),
(17, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', '', 'paywithCash', '', 0, 0, 0, 0, 6.8867616, 79.9187142, '08/06/2018', '6:16 PM', 'pending'),
(18, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', '', 'paywithCash', '', 0, 0, 0, 0, 6.8867616, 79.9187142, '08/06/2018', '6:20 PM', 'pending'),
(19, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Akurana', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(20, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(21, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', 'cash change', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(22, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'paywithCash', '', 0, 0, 0, 0, 7.3065333, 80.6274609, '08/07/2018', '1:48 PM', 'pending'),
(23, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', '', 'paywithCash', '', 0, 0, 0, 0, 7.306555299999999, 80.6274734, '08/07/2018', '2:58 PM', 'pending'),
(24, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', 'cash change', 'paywithCash', '', 0, 0, 0, 0, 7.3065563, 80.6274615, '08/08/2018', '4:27 PM', 'pending'),
(25, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', 'Cash change', 'paywithCash', '', 0, 0, 0, 0, 7.3064843999999995, 80.62745129999999, '08/08/2018', '4:41 PM', 'pending'),
(26, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'paywithCash', '', 0, 0, 0, 0, 7.3064843999999995, 80.62745129999999, '08/08/2018', '4:50 PM', 'pending'),
(27, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', '', 'paywithCash', '', 0, 0, 0, 0, 7.3064843999999995, 80.62745129999999, '08/08/2018', '5:24 PM', 'pending'),
(28, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Kandy', '', 'paywithCash', '', 0, 0, 0, 0, 7.3064843999999995, 80.62745129999999, '08/08/2018', '5:25 PM', 'pending'),
(29, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Menikhinna', '', 'paywithCash', '', 0, 0, 0, 0, 7.758409100000001, 80.1875065, '08/08/2018', '5:50 PM', 'pending'),
(30, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', 'Cash change', 'paywithCash', '', 0, 0, 0, 0, 6.901608599999999, 80.0087746, '08/08/2018', '8:13 PM', 'pending'),
(31, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Akurana', '', 'paywithCash', '', 0, 0, 0, 0, 7.306409599999999, 80.6273274, '08/08/2018', '9:20 PM', 'pending'),
(32, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Akurana', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306393, 80.627309, '08/09/2018', '6:29 AM', 'pending'),
(33, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064743000000005, 80.6274619, '08/09/2018', '10:09 AM', 'pending'),
(34, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Menikhinna', '', 'Paid with cash', '', 0, 0, 0, 0, 6.885183199999999, 79.9138153, '08/09/2018', '10:16 AM', 'pending'),
(35, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', 'cash change', 'Paid with cash', '', 0, 0, 0, 0, 6.885183199999999, 79.9138153, '08/09/2018', '10:21 AM', 'pending'),
(36, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', '', 'Paid with cash', '', 0, 0, 0, 0, 6.885183199999999, 79.9138153, '08/09/2018', '10:27 AM', 'pending'),
(37, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306389899999999, 80.6273049, '08/09/2018', '10:29 AM', 'pending'),
(38, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Madawala', 'cash change', 'Paid with cash', '', 0, 0, 0, 0, 6.885183199999999, 79.9138153, '08/09/2018', '10:37 AM', 'pending'),
(39, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Akurana', '', 'Paid with cash', '', 0, 0, 0, 0, 1, 1, '08/09/2018', '2:57 PM', 'pending'),
(40, 'Ias', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Kandy', 'Peradeniya', '', 'Paid with cash', '', 0, 0, 0, 0, 1, 1, '08/11/2018', '7:02 PM', 'pending'),
(41, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Madawala', 'Cash change', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(42, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Madawala', 'Cash change', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(43, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064957999999995, 80.6275393, '08/14/2018', '9:47 PM', 'pending'),
(44, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Akurana', 'cash change', 'Paid with cash', '', 0, 0, 0, 0, 7.3064871, 80.62752619999999, '08/14/2018', '9:51 PM', 'pending'),
(45, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(46, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306477300000001, 0, '08/15/2018', '9:40 AM', 'pending'),
(47, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Madawala', 'Cash change', 'Paid with cash', '', 0, 0, 0, 0, 7.3064732999999995, 80.6274696, '08/15/2018', '10:12 AM', 'pending'),
(48, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306467, 80.6274734, '08/15/2018', '10:14 AM', 'pending'),
(49, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Kandy', 'Cash change', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(50, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Madawala', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(51, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Madawala', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(52, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064473, 80.627366, '08/15/2018', '11:50 AM', 'pending'),
(53, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Akurana', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(54, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Madawala', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(55, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Menikhinna', '', 'creditCard', 'Ijas deen', 2147483647, 13, 2014, 333, 6.901608599999999, 80.0087746, '08/15/2018', '12:21 PM', 'completed'),
(56, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'My permanant address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306445399999999, 80.62741129999999, '08/15/2018', '12:25 PM', 'pending'),
(57, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.256499600000001, 80.7214417, '08/16/2018', '12:10 AM', 'pending'),
(58, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.256499600000001, 80.7214417, '08/16/2018', '12:17 AM', 'pending'),
(59, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306492999999999, 80.6275242, '08/16/2018', '6:41 AM', 'pending'),
(60, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064868999999995, 80.6275075, '08/16/2018', '6:44 AM', 'pending'),
(61, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306388999999999, 80.6273281, '08/16/2018', '6:59 AM', 'pending'),
(62, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Menikhinna', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306379799999998, 80.62733329999999, '08/16/2018', '7:02 AM', 'pending'),
(63, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(64, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Menikhinna', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064846, 80.62751659999999, '08/16/2018', '9:13 AM', 'pending'),
(65, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Digana', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306485400000001, 80.6274995, '08/16/2018', '9:16 AM', 'pending'),
(66, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064128, 80.6273326, '08/16/2018', '9:19 AM', 'pending'),
(67, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064404000000005, 80.62733790000001, '08/16/2018', '9:22 AM', 'pending'),
(68, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.873053999999999, 80.77179699999999, '08/16/2018', '9:23 AM', 'pending'),
(69, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064559, 80.6273622, '08/16/2018', '11:00 AM', 'pending'),
(70, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306510899999999, 80.6275124, '08/16/2018', '7:14 PM', 'pending'),
(71, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064999, 80.62750129999999, '08/16/2018', '7:15 PM', 'pending'),
(72, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Akurana', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064949, 80.6275173, '08/16/2018', '7:21 PM', 'pending'),
(73, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Digana', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(74, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Peradeniya', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(75, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Peradeniya', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(76, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(77, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306497199999999, 80.62752379999999, '08/16/2018', '9:37 PM', 'pending'),
(78, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(79, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306498399999999, 80.62746279999999, '08/17/2018', '11:08 AM', 'pending'),
(80, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306498399999999, 80.62746279999999, '08/17/2018', '11:10 AM', 'pending'),
(81, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306498399999999, 80.62746279999999, '08/17/2018', '11:12 AM', 'pending'),
(82, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(83, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Peradeniya', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(84, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Peradeniya', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306490999999999, 80.62750609999999, '08/17/2018', '11:29 AM', 'pending'),
(85, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(86, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(87, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 'pending'),
(88, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306495600000001, 80.6275209, '08/17/2018', '4:18 PM', 'pending'),
(89, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Menikhinna', '', 'Paid with cash', '', 0, 0, 0, 0, 7.306485400000001, 80.6274562, '08/17/2018', '5:57 PM', 'pending'),
(90, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Madawala', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064963999999994, 80.62746059999999, '08/17/2018', '6:08 PM', 'pending'),
(91, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Katugastota', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064828, 80.627454, '08/17/2018', '6:13 PM', 'pending'),
(92, 'Ijas', 'Deen', 758953142, 'ijasdeen23@gmail.com', 'My permanat address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064808, 80.6274353, '08/17/2018', '6:43 PM', 'pending'),
(93, 'Ijas', 'deen', 758953142, 'ijasdeen23@gmail.com', 'Permanant address', 'Kandy', '', 'Paid with cash', '', 0, 0, 0, 0, 7.3064709, 80.6273259, '08/18/2018', '9:17 PM', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `locationpicker`
--

CREATE TABLE `locationpicker` (
  `id` int(11) NOT NULL,
  `latitute` double NOT NULL,
  `longitute` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationpicker`
--

INSERT INTO `locationpicker` (`id`, `latitute`, `longitute`) VALUES
(1, 6.901115, 79.8584553);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productPrice` double NOT NULL,
  `category` varchar(500) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `restaurant_id`, `productName`, `productPrice`, `category`, `product_image`, `description`) VALUES
(1, 1, 'PLAIN DOSA', 135, 'Dosa', 'plainDosai.jpg', 'Plain dosa for light hunger '),
(2, 1, 'GHEE DOSA', 215, 'Dosa', 'gheedosa.jpg', 'The batter is then ladled onto a hot tava (griddle) greased with oil '),
(3, 1, 'PAPER DOSA ', 215, 'Dosa', 'papperdosa.jpg', 'Dosa with paper, specially for hot-eaters'),
(4, 1, 'MASALA DOSA', 265, 'Dosa', 'masalaDosa.jpg', 'Indian type masala dosa'),
(5, 1, 'CHEESE ONION DOSA', 465, 'Dosa', 'cheeseOnionDosa.jpg', 'cheese onion dosa with light oil '),
(6, 1, 'CHEESE ONION MASALA DOSA', 515, 'Dosa', 'CheeseOnionMasalaDosa.jpg', 'Cheese onion masala dosa with different types of curry'),
(7, 1, 'MUSHROOM MASALA DOSA', 615, 'Dosa', 'mashroomMasalaDosa.jpg', 'Mashroom masala dosa by Heat oil, fry onions, ginger garlic paste and added the mushroom'),
(8, 1, 'ONION DOSA', 235, 'Dosa', 'onionDosa.jpg', 'Mixed of the rice flour and rava with some water'),
(9, 1, 'UTTAPAM', 115, 'Dosa', 'uttappam.jpg', 'Uttapam is a dosa-like dish from South India made by cooking '),
(10, 1, 'ONION UTTA PAM', 215, 'Dosa', 'onionUttappam.jpg', 'Onion uttappam made of onions, carrots, coriander leaves'),
(11, 1, 'IDLI SET', 135, 'IDLI', 'idliset.jpg', 'Idli set with different types of curries for breakfast to dinner'),
(12, 1, 'VEG FRIED RICE', 175, 'RICE', 'vegFriedRice.jpg', 'Veg fried rice, made of pure vegetables, perfect choice for vegetarians'),
(13, 1, 'CHAPATHI SET ', 175, 'NORTH INDIAN', 'chapatiSet.jpg', 'Chapathi set with different type of non veg and veg curries'),
(14, 1, 'POORI SET  W/POTATO KIMA', 175, 'NORTH INDIAN', 'pooriset.jpg', 'Indain poori set with potato Kima '),
(15, 1, 'ULUNDU VADA', 65, 'EXTRAS', 'ulunduVada.jpg', 'Ulundu vada with various types of curries for evening short eats'),
(16, 1, 'DAL VADA\r\n', 55, 'EXTRAS', 'dalvada.jpg', 'Dal wada as short-eats for evening hangouts. '),
(20, 10, 'BARACUED PORK SPARE RIBS', 1615, 'STARTERS & APPITIZERS', 'baracued.jpg', 'PORK MADE WITH SPICY'),
(21, 10, 'BATTER FRIED BANY CORNS', 865, 'STARTERS & APPITIZERS', 'BATTER FRIED BANY CORN.JPG', 'BATTER WITH FRIED CORN'),
(22, 10, 'BATTERD PRAWNS', 790, 'STARTERS & APPITIZERS', 'BATTERD PRAWNS.jpg', 'BATTER WITH PRAWNS'),
(23, 10, 'CHICKEN SPRING ROLLS', 790, 'STARTERS & APPITIZERS', 'CHICKEN SPRING ROLLS.jpg', 'CHICKEN FILLED WITH SPRING ROLLS '),
(24, 10, 'DEVILLED CASHEW NUTS', 715, 'STARTERS & APPITIZERS', 'DEVILLED CASHEW NUTS.jpg', 'SALTIZED DEVILLED CASHEWS'),
(25, 10, 'PRAWN CRACKERS', 415, 'STARTERS & APPITIZERS', 'PRAW CRACKERS.jpg', 'PRAWN'),
(26, 10, 'SESAME PRAWN TOAST', 865, 'STARTERS & APPITIZERS', 'SESAME PRAWN TOAST.jpg', 'TOASTED PRAWNS'),
(27, 10, 'VEGETALE SPRING ROLLS', 590, 'STARTERS & APPITIZERS', 'VEGETALE SPRING ROLLS.jpg', 'spring rolls filled with vegetables'),
(28, 10, 'chicken mushroom & vermicelli (large)', 990, 'soups', 'chicken mushroom & vermicelli.jpg', 'musroom & chicke mixed vercimelli'),
(29, 10, 'chicken mushroom & vermicelli (small)', 640, 'soups', 'chicken mushroom & vermicelli.jpg', 'mushroom & chicken mixed vermicelli'),
(30, 10, 'chicken & sweet corn (large)', 1290, 'soups', 'chicken & sweet corn (large).jpg', 'chicken & sweet corn soup'),
(31, 10, 'chicken & sweet corn (small)', 840, 'soups', 'chicken & sweet corn (large).jpg', 'chicken & sweet corn soup'),
(32, 10, 'crab combination', 1390, 'soups', 'crab combination.jpg', 'crabs styled food'),
(33, 10, 'crab combination (small)', 940, 'soups', 'crab combination.jpg', 'crabs styled food'),
(34, 10, 'crab mushroom & vercimelli', 1240, 'soups', 'crab mushroom.jpg', 'crab mushroom& vercimelli soups'),
(35, 10, 'hot & sour (large)', 1090, 'soups', 'hot and sour soup.jpg', 'hot & sour soup'),
(36, 10, 'hot & sour (small)', 740, 'soups', 'hot and sour soup.jpg', 'hot & sour soup'),
(37, 10, 'prawn & cucumber clear soup', 890, 'soups', 'prawn & cucumber.jpg', 'clear soup with prawn + cucumber'),
(38, 10, 'prawn & cucumber clear soup (small)', 590, 'soups', 'prawn & cucumber.jpg', 'clear soup with prawn + cucumber'),
(39, 10, 'prawn tom yum (large)', 1140, 'soups', 'prawn tom yum.jpg', 'prawn tom yum (chineese)'),
(40, 10, 'prawn tom yum (small)', 740, 'soups', 'prawn tom yum.jpg', 'prawn tom yum (chineese)'),
(41, 10, 'seafood tom yum', 1190, 'soups', 'tom yum seafood.jpg', 'tom yum seafood styled soup'),
(42, 10, 'seafood tom yum (small)', 740, 'soups', 'tom yum seafood.jpg', 'tom yum seafood styled soup'),
(43, 10, 'seafood with bean curd ( large)', 1240, 'soups', 'seafood with bean curd 2.jpg', 'seafood + bean curd soup'),
(44, 10, 'seafood with bean curd (small)', 840, 'soups', 'seafood with bean curd 2.jpg', 'seafood with bean curd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `regUserId` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeredrestaurant`
--

CREATE TABLE `registeredrestaurant` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(800) NOT NULL,
  `adminPassword` varchar(800) NOT NULL,
  `openKeyCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredrestaurant`
--

INSERT INTO `registeredrestaurant` (`adminId`, `adminName`, `adminPassword`, `openKeyCode`) VALUES
(1, 'AdminFoodBowl56', 'FoodBowl4433', 15698745);

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE `registereduser` (
  `regUserId` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `lastName` varchar(800) NOT NULL,
  `mobNumber` int(11) NOT NULL,
  `permanantAddress` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `password` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`regUserId`, `name`, `lastName`, `mobNumber`, `permanantAddress`, `email`, `password`) VALUES
(1, 'Ijas', 'deen', 758953142, 'Permanant address', 'ijasdeen23@gmail.com', '44b1a51f693c63f8eddd457d02a220df');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(800) NOT NULL,
  `restaurant_location` varchar(800) NOT NULL,
  `restaurant_bannerPic` varchar(800) NOT NULL,
  `restaurant_cuisinePic` varchar(800) NOT NULL,
  `restaurant_type` varchar(200) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `restaurant_location`, `restaurant_bannerPic`, `restaurant_cuisinePic`, `restaurant_type`, `opening_time`, `closing_time`) VALUES
(1, 'Balaji dosai', ' 135 D.S Senanayake Veediya, Kandy 20000', 'balagi.png', 'blaji%20restaurant.jpg', 'Indian / Srilankan', '07:30:00', '09:30:00'),
(2, 'Sam\'s Chinese Restaurant', ' No:6, Kotugodella Veediya, Kandy, Sri lanka ', 'SAMS%20%20CHINES.png', 'sams%20chinese.jpg', 'Srilankan / Chinese', '09:00:00', '09:30:00'),
(3, 'Dinomore', '35 Newtownards Road, Belfast, BT4. ', 'DINERMO.png', 'dinomore.jpg', ' Fast foods', '07:00:00', '09:00:00'),
(4, 'Slightly Chilled Lounge Bar and Restaurant', 'No 29a Anagarika | Dharmapala,Mawatha, Kandy 101010 ', 'SLIGHTLY%20CHILLED.png', 'slightly-chilled-lounge.jpg', 'Chinese / Bar / European', '11:00:00', '11:00:00'),
(5, 'New flower song restaurant', '281 DS Senanayake Veediya, Kandy 20000', 'newFloserSongBanner.jpg', 'new%20flower%20song.jpg', ' Chinese / Thai', '10:00:00', '11:00:00'),
(6, 'Cafe Aroma Inn', 'Colombo St, Kandy', 'Cafe%20Aroma%20InnBanner.jpg', 'chinese-food-takeout.jpg', 'Restaurant / Hotel', '06:00:00', '10:00:00'),
(7, 'History Restaurant', '27/A Anagarika Dharmapala Mawatha, Kandy 20000', 'historyRestaurantBanner.jpg', 'historyRestaurantCuisine.jpg', ' Indian / Srilankan ', '00:00:00', '00:00:00'),
(8, 'The Empire Cafe', 'Temple St, Kandy', 'empireCafeBanner.jpg', 'empireCafe.jpg', 'Restaurant ', '08:30:00', '08:30:00'),
(9, 'Cafe Divine Street', '139 Colombo St, Kandy 20000', 'Cafe%20Aroma%20InnBanner.jpg', 'divineStreetBannerCuisine.jpg', 'Restaurant / Hotel ', '10:00:00', '09:00:00'),
(10, 'jasmine song restaurant', ' 169, E L Senanayake Veediya, Kandy, Central Province 20000', 'JasminBanner.jpg', 'jasminCuisine.jpg', 'Indian / Srilankan ', '11:00:00', '10:00:00'),
(11, 'The Garden Cafe', '139 Colombo St, Kandy 20000', 'jasminCuisine.jpg', 'JasminBanner.jpg', 'Srilankan / Indian ', '08:00:00', '11:00:00'),
(12, 'Sri Ramya Restaurant', 'Sri Dalada Veediya, Kandy 20000', 'SiriRamayaBanner.jpg', 'SiriRamyaCuisine.jpg', 'Restaurant / Fast foods', '08:00:00', '08:00:00'),
(13, 'Food Bowl', 'No 50,Dalada veediya kandy', 'foodBowlBanner.jpeg', 'foodBowlCuisine.jpg', 'Indain / Srilankan', '08:00:00', '05:00:00'),
(14, 'Red Chillies', 'No, 74A,Asgiriya, Kandy', 'redChilliBanner.jpeg', 'redChillieCuisine.jpeg', 'Eastern / Western / Chinese Cuisine ', '10:00:00', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscribers_id` int(11) NOT NULL,
  `subscribers_email` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscribers_id`, `subscribers_email`) VALUES
(1, 'asdasd@gmail.com'),
(2, 'Ijasdeen23@gmail.com'),
(3, 'ijasdeen23@gmail.com'),
(4, 'asdsd@gmail.com'),
(5, 'asdasd@gmail.com'),
(6, 'fdfdg@gmail.com'),
(7, 'djasdeen23@gmail.com'),
(8, 'fd@gmail.com'),
(9, 'wwwfd@gmail.com'),
(10, 'adasd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `workers_firstName` varchar(800) NOT NULL,
  `workers_lastName` varchar(800) NOT NULL,
  `workers_mobile` int(11) NOT NULL,
  `workers_email` varchar(800) NOT NULL,
  `workers_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminloginarea`
--
ALTER TABLE `adminloginarea`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cities_id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `locationpicker`
--
ALTER TABLE `locationpicker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `registeredrestaurant`
--
ALTER TABLE `registeredrestaurant`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `registereduser`
--
ALTER TABLE `registereduser`
  ADD PRIMARY KEY (`regUserId`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscribers_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminloginarea`
--
ALTER TABLE `adminloginarea`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `locationpicker`
--
ALTER TABLE `locationpicker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registeredrestaurant`
--
ALTER TABLE `registeredrestaurant`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registereduser`
--
ALTER TABLE `registereduser`
  MODIFY `regUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscribers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 12:10 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion2basket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `acid` int(10) NOT NULL,
  `acategory` varchar(200) NOT NULL,
  `acdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`acid`, `acategory`, `acdate`) VALUES
(17, 'Women', '2019-08-04 16:42:41'),
(18, 'kid', '2019-08-04 17:17:38'),
(19, 'MAN', '2019-08-04 19:55:19'),
(20, 'kid', '2019-08-05 00:31:42'),
(21, 'KID', '2019-08-05 01:07:09'),
(22, 'Shoe', '2019-08-05 01:16:54'),
(23, 'Shoe', '2019-08-07 00:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buy`
--

CREATE TABLE `tbl_buy` (
  `buyid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `buydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buy`
--

INSERT INTO `tbl_buy` (`buyid`, `pid`, `rid`, `email`, `qty`, `buydate`) VALUES
(1, 7, 2, 'vikash1234@gmail.com', '', '2019-08-06 13:53:40'),
(2, 8, 2, 'vikash1234@gmail.com', '', '2019-08-06 13:54:42'),
(3, 8, 2, 'vikash1234@gmail.com', '', '2019-08-06 13:55:47'),
(4, 7, 2, 'vikash1234@gmail.com', '', '2019-08-06 13:55:52'),
(5, 9, 3, 'shital1233@gmail.com', '', '2019-08-07 01:23:47'),
(6, 9, 3, 'shital1233@gmail.com', '', '2019-08-07 01:24:06'),
(7, 9, 3, 'shital1233@gmail.com', '', '2019-08-07 14:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `rid` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cartdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `pid`, `rid`, `email`, `cartdate`) VALUES
(1, 7, 3, 'shital1233@gmail.com', '2019-08-07 14:26:03'),
(2, 9, 3, 'shital1233@gmail.com', '2019-08-07 14:26:22'),
(3, 9, 3, 'shital1233@gmail.com', '2019-08-07 14:27:24'),
(4, 9, 2, 'vikash1234@gmail.com', '2019-08-07 14:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cid` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cmobile` varchar(15) NOT NULL,
  `cmsg` longtext NOT NULL,
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cid`, `cname`, `cemail`, `cmobile`, `cmsg`, `cdate`) VALUES
(2, 'Vikash Kesarwani', 'vikashraj8173@gmail.com', '8303624848', 'ghjkhfgkhlb figklk fjfvhnb', '2019-07-30 16:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `acid` int(10) NOT NULL,
  `atid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmodel` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pmrp` varchar(100) NOT NULL,
  `psize` varchar(100) NOT NULL,
  `pcolor` varchar(100) NOT NULL,
  `pdescripition` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `pquantity` varchar(100) NOT NULL,
  `pdiscount` varchar(100) NOT NULL,
  `pdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`acid`, `atid`, `pid`, `pname`, `pmodel`, `pprice`, `pmrp`, `psize`, `pcolor`, `pdescripition`, `pimage`, `pquantity`, `pdiscount`, `pdate`) VALUES
(20, 4, 7, 'petter england', 'T-shirt', '1199', '1499', '538818', 'black', 'Good Quality', 't2.png', '1', '299', '2019-08-05 00:00:00'),
(23, 9, 9, 'Casual shoes', 'sp09', '499', '599', '15881', 'black', 'Nice', 'b1657f680d185b50193166dfbdf9f424.jpg', '5', '20', '2019-08-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `rid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`rid`, `name`, `email`, `mobile`, `password`, `cpassword`, `gender`, `address`, `pic`, `date`) VALUES
(2, 'Vikash', 'vikash1234@gmail.com', '8876594212', '1234', '1234', 'on', 'Allahabad', '', '2019-08-02 11:38:52'),
(3, 'UGGU', 'shital1233@gmail.com', '1223526', '123', '12345', 'on', 'ALLAHABAD', '', '2019-08-02 12:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slid` int(10) NOT NULL,
  `text` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `atid` int(10) NOT NULL,
  `acid` int(10) NOT NULL,
  `addtype` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`atid`, `acid`, `addtype`, `date`) VALUES
(3, 19, 'tshirt', '2019-08-04 19:55:42'),
(4, 20, 'jeans', '2019-08-05 00:31:59'),
(6, 15, 'tshirt', '2019-08-06 08:55:54'),
(7, 17, 'tshirt', '2019-08-06 11:41:02'),
(8, 0, '', '2019-08-06 11:45:03'),
(9, 23, 'sparx', '2019-08-07 00:32:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_buy`
--
ALTER TABLE `tbl_buy`
  ADD PRIMARY KEY (`buyid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slid`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`atid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `acid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_buy`
--
ALTER TABLE `tbl_buy`
  MODIFY `buyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `atid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

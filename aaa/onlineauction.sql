-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 06:58 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineauction`
--
CREATE DATABASE IF NOT EXISTS `onlineauction` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onlineauction`;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pimage` varchar(255) NOT NULL,
  `pcat` varchar(200) NOT NULL,
  `pname` varchar(70) NOT NULL,
  `minbid` int(50) NOT NULL,
  `bidendtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `pimage`, `pcat`, `pname`, `minbid`, `bidendtime`) VALUES
(19, 'product_image/1f734bf393e262301290cc3735ef8b06royal.jpg', 'Bike', 'Royal Enfield', 400000, '2018-08-23'),
(20, 'product_image/fb32eb7fd2e2164a83808dd89c463627car2.jpg', 'Car', 'Hyundai i20', 1880000, '2018-08-15'),
(22, 'product_image/f62c76438310fe2056c754d044cbf2bdbike5.jpg', 'Bike', 'Honda dirt', 4000000, '2018-08-31'),
(23, 'product_image/ddcac775b5c85cfd68f2c8845a406c12jew1.jpg', 'Jwellery', 'Tanish Bangels', 100000, '2018-08-29'),
(24, 'product_image/5bb8c82bd4a1acfe18432d28edbb5761jew2.jpg', 'Jwellery', 'Necklace', 150000, '2018-08-31'),
(25, 'product_image/9441e20781e5067e734523ab1d4322d1watch1.jpg', 'Watch', 'Fossil ', 20000, '2018-08-22'),
(26, 'product_image/2b7e0e75c58834e4d937696497bac1c8car1.png', 'Car', 'Maruti suzuki', 300000, '2018-08-23'),
(27, '<br />\r\n<b>Notice</b>:  Undefined variable: pimage in <b>C:xampphtdocsaaaaddbid.php</b> on line <b>83</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: pcat in <b>C:xampphtdocsaaaaddbid.php</b> on line <b>84</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: pname in <b>C:xampphtdocsa', 0, '0000-00-00'),
(28, 'product_image/fb32eb7fd2e2164a83808dd89c463627car2.jpg', 'Car', 'Hyundai i20', 1880000, '2018-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `type`) VALUES
(1, 'Car'),
(2, 'Bike'),
(3, 'Watch'),
(4, 'Jwellery');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pimage` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `minbid` varchar(256) NOT NULL,
  `bidendtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pimage`, `pcat`, `pname`, `minbid`, `bidendtime`) VALUES
(26, 'product_image/fb32eb7fd2e2164a83808dd89c463627car2.jpg', 'Car', 'Hyundai i20', '1880000', '2018-08-15'),
(27, 'product_image/f62c76438310fe2056c754d044cbf2bdbike5.jpg', 'Bike', 'Honda dirt', '4000000', '2018-08-31'),
(28, 'product_image/99787c876b0ccf481d8d0a64b8f9c1bdwatch 4.jpeg', 'Watch', 'Rado', '30000', '2018-08-30'),
(29, 'product_image/ddcac775b5c85cfd68f2c8845a406c12jew1.jpg', 'Jwellery', 'Tanish Bangels', '100000', '2018-08-29'),
(30, 'product_image/5bb8c82bd4a1acfe18432d28edbb5761jew2.jpg', 'Jwellery', 'Necklace', '150000', '2018-08-31'),
(31, 'product_image/9441e20781e5067e734523ab1d4322d1watch1.jpg', 'Watch', 'Fossil ', '20000', '2018-08-22'),
(32, 'product_image/2b7e0e75c58834e4d937696497bac1c8car1.png', 'Car', 'Maruti suzuki', '300000', '2018-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `citzn_number` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `citzn_number`, `firstname`, `lastname`, `email`, `contact`, `address`, `username`, `password`) VALUES
(1, 99989898, 'amit', 'adhikari', 'adhikariamit52@gmail.com', 2147483647, 'tinkune', 'Amit', '1a2b3c'),
(2, 99989898, 'anjeela', 'tandukar', 'amit@gmail.com', 2147483647, 'putalisadak', 'ngu', 'lkio'),
(3, 99989898, 'Amit', 'adhikari', 'adhikariamit52@gmail.com', 2147483647, 'tinkune', 'amit2', 'fhgfgfhf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `citizenship_no` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `citizenship_no`, `pimage`, `firstname`, `lastname`, `address`, `contact_no`, `email_address`, `username`, `password`, `usertype`) VALUES
(2, 'r', 'r', 'tandukar', 'putalisadak', '', '5643568455', 's@ghd.com', 'amit', '8956', 0),
(3, 'product_image/52dfa2650a19e3486cfcd523e2436cefConflict-Resolution.jpg', '9878789797987', 'asasa', 'hijkl', 'lolltar', '9849937681', 'adhikariamit52@gmail.com', 'amit', 'sddsdsd', 0),
(4, 'product_image/7fafdbe6b2f36385504c0bce8e0c80d8IMG_5001.jpg', '874679785467456754', 'asiem', 'xtha', 'putalisadak', '9876543666', 'kjhgfx@gmail.com', 'qaz', 'dfff', 0),
(6, 'product_image/d1f011381bee426c815e1929e3afa298Screenshot (115).png', '5763547', 'Amit', 'Adhikari', 'tinkune', '9849937681', 'adhikariamit52@gmail.com', 'amit', 'sdaer', 0),
(7, 'product_image/fc9fb114580bdeca80b6face222f2b1cC360_2016-07-02-14-43-52-961.jpg', '87654', 'amit', 'adhikari', 'lolltar', '9849937681', 'adhikariamit52@gmail.com', 'hgfhgfhgfh', 'hhgjgjhgjhghj', 0),
(8, 'product_image/141a207f4019d2c210fad975d8f53debConflict-Resolution.jpg', '6465465464', 'anjeela', 'lolkumar', 'lolltar', '9849937681', 'poikjhweb@pkljh.com', 'amit', 'nbvnbvnbvbn', 0),
(10, 'product_image/ba17646df6d980bdfc66fbb90e117d57startform.PNG', 'deepa', 'sharma', 'kapan', '973465', 'deepasharma@gmail.com', 'deepa', 'sharma', ' ', 0),
(11, '', '', '', '', '', '', '', 'admin', 'admin', 1),
(12, 'product_image/0fda71fe938c0e06a5ceeac9fd0b2263startform.PNG', 'amit', 'adhikari', 'kapan', '973465', 'admin@localhost.com', 'amit', 'amit', ' ', 0),
(13, 'product_image/844a983679d536a1eb414fbc7f85d31astartform.PNG', 'amit', 'sharma', 'kapan', '973465', 'admin@localhost.com', 'suman', 'suman', ' ', 0),
(14, '1234', 'product_image/3b4864524f62330151162d932c71e5a7startform.PNG', 'deepa', 'adhikari', 'kapan', '973465', 'deepasharma@gmail.com', 'admin', '123456', 0),
(15, '123', 'product_image/b8967c55e1701f52d8b70dbdda3a6155startform.PNG', 'deepa', 'sharma', 'kapan', '973465', 'admin@localhost.com', 'suman', 'suman', 0),
(16, '1234', 'product_image/de22ae47f0a407e98e43cb3185963e06111.jpg', 'kapan', 'kapan', 'kapan', '973465', 'kapan@gmail.com', 'kapan', 'kaoan', 0),
(17, '8456846512', 'product_image/9755f5f457720e7ec1c00f19b5b0dcdbbike2.JPG', 'deepa', 'sharma', 'kapan', '973465', 'deepasharma@gmail.com', 'deepa', 'sharma', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

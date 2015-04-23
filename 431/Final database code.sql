-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2014 at 08:07 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test6`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `a_id` int(11) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `apartment` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_made`
--

CREATE TABLE IF NOT EXISTS `bid_made` (
  `bm_id` int(11) NOT NULL,
  `item_made_id` int(11) NOT NULL,
  `b_time` datetime DEFAULT NULL,
  PRIMARY KEY (`bm_id`,`item_made_id`),
  UNIQUE KEY `bid_made` (`bm_id`,`item_made_id`,`b_time`),
  KEY `bid_made_fk1` (`item_made_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid_posted`
--

CREATE TABLE IF NOT EXISTS `bid_posted` (
  `bp_id` int(11) NOT NULL,
  `item_posted_id` int(11) NOT NULL,
  `b_time` datetime DEFAULT NULL,
  `b_amount` float DEFAULT NULL,
  PRIMARY KEY (`bp_id`,`item_posted_id`),
  UNIQUE KEY `bid_posted` (`bp_id`,`item_posted_id`,`b_time`),
  KEY `bid_posted_fk1` (`item_posted_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cu_id` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  PRIMARY KEY (`cu_id`,`ci_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `i_id` int(11) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `subcategory1` varchar(20) DEFAULT NULL,
  `subcategory2` varchar(20) DEFAULT NULL,
  `subcategory3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL UNIQUE,
  `email` varchar(30) NOT NULL,
  `pointofcontact` varchar(30) NOT NULL,
  `c_address` varchar(50) DEFAULT NULL,
  `c_category` varchar(20) DEFAULT NULL,
  `c_phone` int(16) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE IF NOT EXISTS `individual` (
  `iu_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `about_you` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`iu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(40) NOT NULL,
  `color` varchar(15) DEFAULT NULL,
  `deadline` date NOT NULL,
  `description` varchar(160) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `pict` varchar(50) DEFAULT NULL,
  `bide_price` varchar(10) NOT NULL,
  `available` int(1) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aorder`
--

CREATE TABLE IF NOT EXISTS `aorder` (
  `o_id`  int(11) NOT NULL AUTO_INCREMENT,
  `ou_id` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `oi_id` int(11) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `u_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `ex_date` date NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `statename` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `zipcode` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `payment_fk1` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone_no`
--

CREATE TABLE IF NOT EXISTS `phone_no` (
  `p_id` int(11) NOT NULL,
  `phone_no` char(16) DEFAULT NULL,
  PRIMARY KEY (`phone_no`, `p_id` )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `priv_company`
--

CREATE TABLE IF NOT EXISTS `priv_company` (
  `p_id` int(11) NOT NULL,
  `name_of_user` varchar(30) DEFAULT NULL,
  `surname_of_user` varchar(30) DEFAULT NULL,
  `c_username` varchar(30) NOT NULL,
  `password` char(20) NOT NULL,
  PRIMARY KEY (`p_id`,`c_username`),
  UNIQUE KEY `priv_company` (`p_id`,`c_username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `priv_user`
--

CREATE TABLE IF NOT EXISTS `priv_user` (
  `pu_id` int(11) NOT NULL,
  `i_username` varchar(30) NOT NULL UNIQUE,
  `password` char(20) NOT NULL,
  PRIMARY KEY (`pu_id`),
  UNIQUE KEY `priv_user` (`pu_id`,`i_username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `r_comment` varchar(160) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`rating_id`,`item_id`),
  KEY `rating_fk2` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_fk` FOREIGN KEY (`a_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;

--
-- Constraints for table `bid_made`
--
ALTER TABLE `bid_made`
  ADD CONSTRAINT `bid_made_fk1` FOREIGN KEY (`item_made_id`) REFERENCES `bid_posted` (`item_posted_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_made_fk2` FOREIGN KEY (`bm_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;

--
-- Constraints for table `bid_posted`
--
ALTER TABLE `bid_posted`
  ADD CONSTRAINT `bid_posted_fk1` FOREIGN KEY (`item_posted_id`) REFERENCES `item` (`i_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_posted_fk2` FOREIGN KEY (`bp_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_fk1` FOREIGN KEY (`ci_id`) REFERENCES `item` (`i_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_fk2` FOREIGN KEY (`cu_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;
  
--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`i_id`) REFERENCES `item` (`i_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`c_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `individual`
--
ALTER TABLE `individual`
  ADD CONSTRAINT `individual_fk` FOREIGN KEY (`iu_id`) REFERENCES `user` (`u_id`);
  
--
-- Constraints for table `aorder`
--
ALTER TABLE `aorder`
  ADD CONSTRAINT `aorder_fk1` FOREIGN KEY (`os_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aorder_fk2` FOREIGN KEY (`ou_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;
  
--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_fk1` FOREIGN KEY (`a_id`) REFERENCES `address` (`a_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_fk2` FOREIGN KEY (`u_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;

--
-- Constraints for table `phone_no`
--
ALTER TABLE `phone_no`
  ADD CONSTRAINT `phone_no_fk` FOREIGN KEY (`p_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;

--
-- Constraints for table `priv_company`
--
ALTER TABLE `priv_company`
  ADD CONSTRAINT `priv_company_fk` FOREIGN KEY (`p_id`) REFERENCES `company` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `priv_user`
--
ALTER TABLE `priv_user`
  ADD CONSTRAINT `priv_user_fk` FOREIGN KEY (`pu_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_fk1` FOREIGN KEY (`rating_id`) REFERENCES `individual` (`iu_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_fk2` FOREIGN KEY (`item_id`) REFERENCES `item` (`i_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

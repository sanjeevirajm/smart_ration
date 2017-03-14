-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 07:23 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5944071_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `card_no` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `id` int(4) NOT NULL,
  `ward_no` bigint(8) NOT NULL,
  `shop_no` bigint(10) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `rice` tinyint(1) NOT NULL,
  `sugar` tinyint(1) NOT NULL,
  `wheat` tinyint(1) NOT NULL,
  `maida` tinyint(1) NOT NULL,
  `rava` tinyint(1) NOT NULL,
  `atta` tinyint(1) NOT NULL,
  `kerosene` tinyint(1) NOT NULL,
  `oil` tinyint(1) NOT NULL,
  `message` longtext COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` VALUES('26/G/0230600', 1, 1, 1001, 9898989801, 'Rajesh', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `public_data`
--

CREATE TABLE `public_data` (
  `card_no` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `id` int(4) NOT NULL,
  `ward_no` int(4) DEFAULT NULL,
  `shop_no` bigint(10) DEFAULT NULL,
  `name` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `public_data`
--

INSERT INTO `public_data` VALUES('26/G/0230600', 1, 1, 1001, 'Rajesh');
INSERT INTO `public_data` VALUES('26/G/0230601', 2, 1, 1001, 'Bala');
INSERT INTO `public_data` VALUES('26/G/0230602', 3, 1, 1001, 'Gopal');
INSERT INTO `public_data` VALUES('26/G/0230700', 101, 3, 1001, 'Saravanan');
INSERT INTO `public_data` VALUES('26/G/0231500', 1, 1, 1002, 'Murugan');
INSERT INTO `public_data` VALUES('26/G/0231501', 2, 1, 1002, 'Siva');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `id` bigint(10) NOT NULL,
  `password` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `ward_no` int(4) NOT NULL,
  `shop_no` bigint(10) NOT NULL,
  `location` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `shopkeeper`
--


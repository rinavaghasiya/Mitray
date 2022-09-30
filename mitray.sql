-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 12:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitray`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `catimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `catimage`, `created_at`, `updated_at`) VALUES
(1, 'Lehengas', '1649411508blue-lehnga.jpg', '2022-04-05 07:08:44', NULL),
(2, 'Skirts', '1649411754skin_Skirts.jpg', '2022-04-05 07:10:44', NULL),
(3, 'Sarees', '1649227793.jpg', '2022-04-05 07:11:11', NULL),
(8, 'Gown', '1649419802gown.jpg', '2022-04-08 12:08:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'reena patel', 'patelreena172@gmail.com', '9685747485', 'hello how are you', '2022-04-09 06:22:35', NULL),
(3, 'hina patel', 'suniljakabari@gmail.com', '9685747485', 'hello,\r\nhii how are you...', '2022-04-09 06:45:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Reena', 'Vaghasiya', 'patelreena172@gmail.com', 'reena123', '0', '2022-04-07 12:39:22', NULL),
(2, 'Dhara', 'Vaghasiya', 'dhara12@gmail.com', 'dhara123', '1', '2022-04-08 04:40:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `cretaed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cid`, `title`, `price`, `description`, `pimage`, `cretaed_at`, `updated_at`) VALUES
(1, 3, 'Red Saree', 2000, '<p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Fabric :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Pure CHINON SIFFON SILK</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Work :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">New Gota Patti Work And 9 Mm Mirror Work And New Letest Siroski Border</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>BLOUSE :</b> Chinon Siffon (Unstitched)&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">40 Inch</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>LENGTH :</b> 5:50 MTR SAREE AND 0:80 BLOUSE&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Elastic</span></p>', '1649227793.jpg', '2022-04-05 13:07:12', '2022-04-07 06:22:51'),
(2, 2, 'hello', 550, '<p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Lehenga Fabric :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Jequard Banarasi Silk</span></p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Waist :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">SUPPORTED UP TO 44<br></span><b>Legnth :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">42<br></span><b>Flair :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">4.5 Meter (Umbrella Style)<br></span><b>Weight :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">0.730 Kg<br></span><b>Dupatta Fabric :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Net With Lace</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Dupatta Length :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">2.3 Mtr</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Blouse :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Jequard Banarasi Silk ( 1 Mtr Unstitched )</span></p>', '1649222935.jpg', '2022-04-06 04:46:45', '2022-04-07 00:55:05'),
(3, 1, 'Bandhani Lehenga Choli', 1800, '<p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Lehenga Fabric :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Vaishali Silk</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Lehenga Work :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Printed Fabric With Gota Patti And Tassels Work</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Waist :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">SUPPORTED UP TO 42</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Legnth :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">41</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Flair :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">4.3 Meter (Flaired Style)</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Weight :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">1.93 Kg</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Dupatta Fabric :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Maslin Silk</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Dupatta Length :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">1 Mtr</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Blouse :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Vaishali Silk,Printed Fabric With Gota Patti And Tassels Work,1 Meter</span></p>', '1649313013blue-lehnga.jpg', '2022-04-07 06:30:13', NULL),
(4, 1, 'aaa', 500, '<p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; outline-style: initial !important; outline-width: 0px !important;\"><span style=\"background-color: rgb(255, 255, 0);\">Lehenga Fabric :</span><span style=\"background-color: rgb(234, 234, 234);\">&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Vaishali Silk</span></span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Lehenga Work :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Printed Fabric With Gota Patti And Tassels Work</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Waist :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">SUPPORTED UP TO 42</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Legnth :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">41</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Flair :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">4.3 Meter (Flaired Style)</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Weight :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">1.93 Kg</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Dupatta Fabric :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Maslin Silk</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Dupatta Length :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">1 Mtr</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\">Blouse :&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Vaishali Silk,Printed Fabric With Gota Patti And Tassels Work,1 Meter</span></p>', '1649316482redsaree.jpg', '2022-04-07 07:28:02', NULL),
(5, 3, 'NIHARIKA SARE', 1800, '<p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Fabric :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">ROYAL VICHITRA SILK</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Work :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">4:50 Mtr Full Work In Saree &amp; Sequins,Coding And Thread Multi Work And Havy Work Border &amp; All Over Saree With Pallu Latkan</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>BLOUSE :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Banglore Silk Bottle Green With Sequins And Dori With Zari Work ( Unstitched Blouse)</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>LENGTH :</b> 5:50 Mtr Saree And 1 Mtr Blouse&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Elastic</span></p>', '1649419008catsaree.jpg', '2022-04-08 11:56:48', NULL),
(6, 2, 'Designer Skirt', 450, '<p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Skirt Fabric :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Heavy Cotton Reyon With Digital Print - Super Quality</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Waist :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">It Has 36 To 44 Inch Waist With Stretchable Waist (Customer Can Adjust 30 To 44) With Hand Made Heavy Tassels. It Has 36 To 44 Inch Waist With Stretchable Waist (Customer Can Adjust 30 To 44) With Hand Made Heavy Tassels.</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Skirt Closer :&nbsp;</b><span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">Elastic</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Flair :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">4.25 Meter</span></p><p itemprop=\"brand\" class=\"product-single__vendor\" style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; color: rgb(102, 102, 102); letter-spacing: 0.2px; line-height: 24px; text-transform: capitalize; font-family: Poppins; background-color: rgb(234, 234, 234); outline-style: initial !important; outline-width: 0px !important;\"><b>Weight :</b>&nbsp;<span style=\"margin-left: 10px; outline-style: initial !important; outline-width: 0px !important;\">0.650 Kg</span></p>', '1649419129skin_Skirts.jpg', '2022-04-08 11:58:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `productimg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `pid`, `productimg`, `created_at`, `updated_at`) VALUES
(1, 1, '1649478820front.png', '2022-04-09 04:33:40', NULL),
(2, 1, '1649478828back.png', '2022-04-09 04:33:48', NULL),
(3, 1, '1649499133gown.jpg', '2022-04-09 10:12:14', NULL),
(4, 1, '1649499142catsaree.jpg', '2022-04-09 10:12:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

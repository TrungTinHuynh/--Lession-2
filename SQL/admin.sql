-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 07:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'category 1'),
(2, 'category 2'),
(3, 'category 3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `image_product` varchar(255) NOT NULL,
  `id_cate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `image_product`, `id_cate`) VALUES
(1, 'product 1', '<i class=\"fa fa-solid fa-image\"></i>', 1),
(2, 'Product 2', '<i class=\"fa fa-solid fa-image\"></i>', 1),
(3, 'Product 3', '<i class=\"fa fa-solid fa-image\"></i>', 1),
(4, 'Product 4', '<i class=\"fa fa-solid fa-image\"></i>', 2),
(5, 'Product 5', '<i class=\"fa fa-solid fa-image\"></i>', 2),
(6, 'Product 6', '<i class=\"fa fa-solid fa-image\"></i>', 2),
(7, 'Product 7', '<i class=\"fa fa-solid fa-image\"></i>', 1),
(8, 'Product 8', '<i class=\"fa fa-solid fa-image\"></i>', 3),
(9, 'Product 9', '<i class=\"fa fa-solid fa-image\"></i>', 3),
(10, 'Product 10', '<i class=\"fa fa-solid fa-image\"></i>', 3),
(11, 'Product 11', '<i class=\"fa fa-solid fa-image\"></i>', 2),
(12, 'Product 12', '<i class=\"fa fa-solid fa-image\"></i>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `connect` (`id_cate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `connect` FOREIGN KEY (`id_cate`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

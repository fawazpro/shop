-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` tinytext NOT NULL,
  `customer_email` tinytext NOT NULL,
  `customer_phone` varchar(12) NOT NULL,
  `orders` longtext NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(128) NOT NULL,
  `product_code` varchar(128) NOT NULL,
  `product_name` mediumtext NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` mediumtext NOT NULL,
  `product_size` varchar(12) NOT NULL,
  `product_description` varchar(2000) NOT NULL,
  `product_tag` tinytext NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_promo` int(11) NOT NULL,
  `product_sales` int(11) NOT NULL,
  `product_color` tinytext NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(128) NOT NULL,
  `store_fullname` varchar(128) NOT NULL,
  `store_description` text,
  `store_logo` text NOT NULL,
  `store_cloudinaryapi` text NOT NULL,
  `store_cloudinarysec` text NOT NULL,
  `store_password` text NOT NULL,
  `store_banner` text,
  `store_desktop_banner` text NOT NULL,
  `store_banner_desc` text,
  `store_desktop_banner_desc` text,
  `store_color` tinytext,
  `store_phone` varchar(12) NOT NULL,
  `store_address` text NOT NULL,
  `store_email` text NOT NULL,
  `store_bank` text NOT NULL,
  `store_accname` text NOT NULL,
  `store_accnumber` text NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext NOT NULL,
  `password` text NOT NULL,
  `clearance` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `email`, `password`, `clearance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'fg@co.uk',	'162d15a0c695fc8cf15dc1993a627e676194f59e',	27,	'2020-10-10 08:08:45',	'2020-10-17 12:33:54',	'0000-00-00 00:00:00');

-- 2020-10-17 17:35:23

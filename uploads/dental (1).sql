-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 07:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `first_name`, `last_name`, `email`, `password`, `ctime`, `mtime`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` enum('NEW','ACCEPTED','DECLINED') DEFAULT 'NEW',
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `message` text,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `status`, `name`, `phone`, `email`, `date`, `message`, `ctime`, `mtime`) VALUES
(3, 'ACCEPTED', 'dsadas', '54646556', 'dsadas@dsadas', 2147483647, 'jkdskdsakjkdaskjdasjkldkjlaskjldkljaskldadjakdlkas', NULL, 1492506330),
(4, 'NEW', 'dsadsadasda', 'sdasdasdas', 'dasdasdasdasdas', 2147483647, 'jkdsakkdkjlaskjdkjlasjkdaskjlkldakjlkjldakjldjasjkldklasdasjlk', NULL, NULL),
(5, 'NEW', 'dsadas', '04/24/2017', 'das@gmail.com', 4, NULL, 1493048865, 1493048865),
(6, 'NEW', 'dsadasd', 'asdas', 'dasdas@dasdas', 4, NULL, 1493048933, 1493048933),
(7, 'NEW', 'dsadas', 'dsa', 'dasdas@dasdas', 1493157600, NULL, 1493049584, 1493049584),
(8, 'NEW', 'dsadas', '1231421', 'dsadsa@dasdasdas', 1493157600, 'jdadasdjklasjkldjlas', 1493049735, 1493049735);

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) UNSIGNED NOT NULL,
  `blog_category_id` int(11) UNSIGNED DEFAULT NULL,
  `administrator_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `leed` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) DEFAULT '0',
  `status` enum('ACTIVE','INACTIVE','DRAFT') COLLATE utf8_unicode_ci DEFAULT 'DRAFT',
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `blog_category_id`, `administrator_id`, `title`, `url`, `leed`, `text`, `image`, `thumb_image`, `date`, `show_on_homepage`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(7, 6, 1, 'Lorem Ipsum141', 'lorem-ipsum141', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum141.jpg', 'lorem-ipsum141.jpg', 1491902041, 1, '', 'dasdasaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 2, 1491902041, 1493254734),
(8, 9, 1, 'Lorem Ipsum1', 'lorem-ipsum1', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum1.jpg', 'lorem-ipsum1.jpg', 1492510239, 1, '', 'adasdas adasdas adasdas', 'adasdas adasdas adasdas', 'adasdas adasdas adasdas', NULL, 1492510239, 1493254266),
(9, 7, 1, 'Lorem Ipsum11', 'lorem-ipsum11', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum11.jpg', 'lorem-ipsum11.jpg', 1493126810, 0, '', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', NULL, 1493126810, 1493254453),
(10, 7, 1, 'Lorem Ipsum12', 'lorem-ipsum12', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum12.jpg', 'lorem-ipsum12.jpg', 1493126829, 1, '', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', NULL, 1493126829, 1493254462),
(11, 7, 1, 'Lorem Ipsum13', 'lorem-ipsum13', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum13.jpg', 'lorem-ipsum13.jpg', 1493126858, 0, '', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', NULL, 1493126858, 1493254470),
(12, 7, 1, 'Lorem Ipsum14', 'lorem-ipsum14', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum14.jpg', 'lorem-ipsum14.jpg', 1493126882, 0, '', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', NULL, 1493126882, 1493254479),
(13, 7, 1, 'Lorem Ipsum15', 'lorem-ipsum15', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum15.jpg', 'lorem-ipsum15.jpg', 1493126903, 0, '', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', 'xdxdxdxdx xdxdxdxdx xdxdxdxdx', NULL, 1493126903, 1493254499),
(14, 9, 1, 'Lorem Ipsum2', 'lorem-ipsum2', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum2.jpg', 'lorem-ipsum2.jpg', 1493207990, 0, '', 'dasd as das das', 'dasd as das das', 'dasd as das das', NULL, 1493207990, 1493254274),
(15, 9, 1, 'Lorem Ipsum3', 'lorem-ipsum3', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum3.jpg', 'lorem-ipsum3.jpg', 1493208072, 0, '', '', '', '', NULL, 1493208072, 1493254284),
(16, 9, 1, 'Lorem Ipsum4', 'lorem-ipsum4', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum4.jpg', 'lorem-ipsum4.jpg', 1493208146, 0, '', '', '', '', NULL, 1493208146, 1493254293),
(17, 9, 1, 'Lorem Ipsum5', 'lorem-ipsum5', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum5.jpg', 'lorem-ipsum5.jpg', 1493208194, 0, '', '', '', '', NULL, 1493208194, 1493254302),
(18, 9, 1, 'Lorem Ipsum6', 'lorem-ipsum6', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum6.jpg', 'lorem-ipsum6.jpg', 1493208948, 0, '', 'dasda sdasda dsadsa', 'dasda sdasda dsadsa', 'dasda sdasda dsadsa', NULL, 1493208948, 1493254319),
(19, 9, 1, 'Lorem Ipsum7', 'lorem-ipsum7', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum7.jpg', 'lorem-ipsum7.jpg', 1493209027, 0, 'ACTIVE', 'neki article ', 'neki article neki article neki article neki article neki article neki article neki article neki arti', 'neki article neki article neki article neki article neki article ', NULL, 1493209027, 1493254317),
(20, 6, 1, 'Lorem Ipsum2', 'lorem-ipsum2', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum2.jpg', 'lorem-ipsum2.jpg', 1493254797, 0, '', 'SEO Title', 'seok', 'SEO keywords', NULL, 1493254797, 1493254797),
(21, 6, 1, 'Lorem Ipsum21', 'lorem-ipsum21', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum21.jpg', 'lorem-ipsum21.jpg', 1493254889, 0, '', 'asd', 'asd', 'asd', NULL, 1493254889, 1493254889),
(22, 6, 1, 'Lorem Ipsum23', 'lorem-ipsum23', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum23.jpg', 'lorem-ipsum23.jpg', 1493254964, 0, '', '', '', '', NULL, 1493254964, 1493254964);
INSERT INTO `blog_article` (`id`, `blog_category_id`, `administrator_id`, `title`, `url`, `leed`, `text`, `image`, `thumb_image`, `date`, `show_on_homepage`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(23, 6, 1, 'Lorem Ipsum24', 'lorem-ipsum24', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum24.jpg', 'lorem-ipsum24.jpg', 1493254995, 0, '', 'asd', '', '', NULL, 1493254995, 1493254995),
(24, 6, 1, 'Lorem Ipsum225', 'lorem-ipsum225', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum225.jpg', 'lorem-ipsum225.jpg', 1493255018, 0, '', '', '', '', NULL, 1493255018, 1493255018),
(25, 6, 1, 'Lorem Ipsum26', 'lorem-ipsum26', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum26.jpg', 'lorem-ipsum26.jpg', 1493255034, 0, '', '', '', '', NULL, 1493255034, 1493255034);

-- --------------------------------------------------------

--
-- Table structure for table `blog_article_tag`
--

CREATE TABLE `blog_article_tag` (
  `id` int(11) UNSIGNED NOT NULL,
  `blog_article_id` int(11) UNSIGNED DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_article_tag`
--

INSERT INTO `blog_article_tag` (`id`, `blog_article_id`, `tag`, `ctime`, `mtime`) VALUES
(1, 17, 'sunce', 1493208194, 1493208194),
(2, 17, 'nebo', 1493208194, 1493208194),
(3, 17, 'zvezde', 1493208194, 1493208194),
(4, 17, 'livada', 1493208194, 1493208194),
(5, 18, 'sunce', 1493208948, 1493208948),
(6, 18, 'nebo', 1493208948, 1493208948),
(7, 18, 'zvezde', 1493208948, 1493208948),
(8, 18, 'livada', 1493208948, 1493208948),
(9, 18, 'okean', 1493208948, 1493208948),
(10, 19, 'zvezde', 1493209027, 1493209027),
(11, 19, 'lepota', 1493209027, 1493209027),
(12, 19, 'istina', 1493209027, 1493209027),
(13, 19, 'letnjihit', 1493209027, 1493209027),
(14, 20, 'lepo', 1493254797, 1493254797),
(15, 20, 'radno', 1493254797, 1493254797),
(16, 20, 'beli', 1493254797, 1493254797),
(17, 21, 'asd', 1493254889, 1493254889),
(18, 22, 'doktori', 1493254964, 1493254964),
(19, 22, 'doktorka', 1493254964, 1493254964),
(20, 22, 'aznimljivosti', 1493254964, 1493254964),
(21, 23, 'zanimljivosti', 1493254995, 1493254995),
(22, 23, 'radost', 1493254995, 1493254995),
(23, 23, 'deca', 1493254995, 1493254995),
(24, 24, 'jeftino', 1493255018, 1493255018),
(25, 24, 'akcija', 1493255018, 1493255018),
(26, 24, 'nestoNovo', 1493255018, 1493255018),
(27, 25, 'sunce', 1493255034, 1493255034);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(244) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `title`, `url`, `image`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(6, 'dasdas', 'dasdas', NULL, 'dasdasdas', 'dsadas', 'dsadasd', 'dsadas', 2, 1491816685, 1492268741),
(7, 'asddasaaaa', 'asddasaaaa', NULL, 'Descriptionaaa', 'SEO Titleaaa', 'SEO Descriptionaaa', 'SEO keywordsaaa', 1, 1491816786, 1491817197),
(8, 'asdasd', 'asdasd', 'asdasd.png', 'dasdasdasd', 'dsadasdas', 'dasdasdas', 'dsadasdas', NULL, 1492268654, 1492592332),
(9, 'a', 'a', '', '', '', '', '', NULL, 1492510215, 1492510223);

-- --------------------------------------------------------

--
-- Table structure for table `call_to_action`
--

CREATE TABLE `call_to_action` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `icon` varchar(100) DEFAULT NULL,
  `button1_text` varchar(100) DEFAULT NULL,
  `button1_url` varchar(255) DEFAULT NULL,
  `button2_text` varchar(100) DEFAULT NULL,
  `button2_url` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `call_to_action`
--

INSERT INTO `call_to_action` (`id`, `title`, `text`, `icon`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `ctime`, `mtime`) VALUES
(1, 'asdasdas', '', 'asdasdas.png', 'asdasd', 'asdasdas', 'dasdasdas', 'dasdasdas', 1492084169, 1492261650);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `total` decimal(18,2) DEFAULT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `billing_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_home_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_home_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_zip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `total`, `viewed`, `billing_name`, `billing_street`, `billing_home_number`, `billing_city`, `billing_zip`, `billing_phone`, `shipping_name`, `shipping_street`, `shipping_home_number`, `shipping_city`, `shipping_zip`, `shipping_phone`, `email`, `ip`, `comment`, `ctime`, `mtime`) VALUES
(1, 1, '11001.00', 1, 'billing name', 'billing strwwt', 'billing home number', 'billing city', 'billing zip', 'billing phone', 'shipping name', 'shipping street', 'shipping home number', 'shipping city', 'shipping zip', 'shipping phone', 'akoollcar@gmail,com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED DEFAULT NULL,
  `product_id` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `cart_id`, `product_id`, `quantity`, `price`, `ctime`, `mtime`) VALUES
(1, 1, 1, 2, '44222.00', NULL, NULL),
(2, 1, 2, 2, '11111.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `leed` varchar(255) DEFAULT NULL,
  `text` text,
  `image` varchar(100) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `url`, `title`, `leed`, `text`, `image`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `show_on_homepage`, `ctime`, `mtime`) VALUES
(2, 'lorem-ipsum6', 'Lorem Ipsum6', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum6.jpg', 'aaaaaaaaaaaLorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 1, 0, 1492269062, 1493302074),
(3, 'lorem-ipsum1', 'Lorem Ipsum1', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1, 1493051842, 1493302798),
(4, 'lorem-ipsum2', '  Lorem Ipsum2', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum2.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1, 1493051857, 1493302059),
(5, 'lorem-ipsum13', 'Lorem Ipsum13', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum13.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1, 1493051864, 1493302064),
(6, 'lorem-ipsum14', '  Lorem Ipsum14', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum14.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493051873, 1493302067),
(7, 'lorem-ipsum5', 'Lorem Ipsum5', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum5.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1, 1493051880, 1493302150);

-- --------------------------------------------------------

--
-- Table structure for table `department_staff`
--

CREATE TABLE `department_staff` (
  `id` int(11) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `leed` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `text` text,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_staff`
--

INSERT INTO `department_staff` (`id`, `department_id`, `title`, `url`, `profession`, `leed`, `image`, `facebook`, `twitter`, `google_plus`, `skype`, `text`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `show_on_homepage`, `ctime`, `mtime`) VALUES
(8, 2, 'Lorem Ipsum2', 'lorem-ipsum2', '', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum2.jpg', '', '', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 1, 0, 1492274749, 1493302819),
(9, 2, 'Lorem Ipsum1', 'lorem-ipsum1', 'newq newq', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum1.jpg', 'f', 't', 'g', 's', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1, 1493052994, 1493302813),
(10, 2, 'Lorem Ipsum9', 'lorem-ipsum9', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum9.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.facebook.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302794, 1493302794),
(11, 2, 'Lorem Ipsum3', 'lorem-ipsum3', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum3.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302825, 1493302825),
(12, 2, 'Lorem Ipsum4', 'lorem-ipsum4', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum4.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302828, 1493302828),
(13, 2, 'Lorem Ipsum5', 'lorem-ipsum5', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum5.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302833, 1493302833),
(14, 2, 'Lorem Ipsum6', 'lorem-ipsum6', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum6.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302837, 1493302837),
(15, 2, 'Lorem Ipsum7', 'lorem-ipsum7', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum7.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302843, 1493302843),
(16, 2, 'Lorem Ipsum8', 'lorem-ipsum8', 'Doctor Dentist', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum8.jpg', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.twitter.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 0, 1493302850, 1493302850);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `display_order`, `ctime`, `mtime`) VALUES
(1, 'xxxx', '<p>dasdas das ads asasd dasaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', 1, 1492769957, 1492770493);

-- --------------------------------------------------------

--
-- Table structure for table `flip_box`
--

CREATE TABLE `flip_box` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `button_text` varchar(100) DEFAULT NULL,
  `button_url` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT '',
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `footer_group`
--

CREATE TABLE `footer_group` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `show_title` tinyint(1) DEFAULT '1',
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_group`
--

INSERT INTO `footer_group` (`id`, `title`, `show_title`, `display_order`, `ctime`, `mtime`) VALUES
(1, 'asdsad', 1, 2, NULL, NULL),
(2, '', 0, 1, NULL, NULL),
(3, 'asdasdas', 0, 3, 1491924574, 1491924574);

-- --------------------------------------------------------

--
-- Table structure for table `footer_link`
--

CREATE TABLE `footer_link` (
  `id` int(11) UNSIGNED NOT NULL,
  `footer_group_id` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `new_tab` tinyint(1) DEFAULT '1',
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_link`
--

INSERT INTO `footer_link` (`id`, `footer_group_id`, `title`, `url`, `new_tab`, `display_order`, `ctime`, `mtime`) VALUES
(1, 2, 'asdds', 'zzzzzzzzzzzzzzzzzzz', 0, 1, NULL, NULL),
(2, 2, 'ddddd', '', 1, 2, NULL, NULL),
(3, 2, 'dsadasd', 'dsadasdasd', 0, 3, 1491924594, 1491924594);

-- --------------------------------------------------------

--
-- Table structure for table `fun_fact`
--

CREATE TABLE `fun_fact` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fun_fact`
--

INSERT INTO `fun_fact` (`id`, `title`, `number`, `icon`, `display_order`, `ctime`, `mtime`) VALUES
(4, 'dsadas', 123, 'dsadas.png', NULL, 1492526354, 1492526354),
(5, 'dsa', 0, '', NULL, 1492772212, 1492772212);

-- --------------------------------------------------------

--
-- Table structure for table `html_box`
--

CREATE TABLE `html_box` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `html_box`
--

INSERT INTO `html_box` (`id`, `title`, `text`, `image`, `display_order`, `ctime`, `mtime`) VALUES
(1, 'Lorem Ipsum1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', 'Lorem Ipsum1.jpg', NULL, 1493108538, 1493302261),
(2, 'Lorem Ipsum2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', 'Lorem Ipsum2.jpg', NULL, 1493108554, 1493302265),
(3, 'Lorem Ipsum 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', 'Lorem Ipsum 3.jpg', NULL, 1493108587, 1493302270);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `first_name`, `last_name`, `email`, `ctime`, `mtime`) VALUES
(3, 'luak', 'luakluak', 'luak@luak', 1491902863, 1491902863),
(4, 'dsadasd', 'dsadasddsadasd', 'dsadasd@dsadasd', 1491902863, 1491902863);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` enum('STATIC','ABOUT','CONTACT') DEFAULT 'STATIC',
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` longtext,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `type`, `title`, `url`, `text`, `seo_title`, `seo_description`, `seo_keywords`, `ctime`, `mtime`) VALUES
(1, 'STATIC', 'dsadasdaaaa', 'dsadasdaaaa', '<p>dsadsadasaaaaaa</p>\r\n', 'dsadsaaaaa', 'dasdasdaaaaaaaa', 'asdasdasaaaa', 1491991039, 1491991050);

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` text,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `title`, `url`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(5, 'dasdsa', 'dasdsa', 'asdasdsa', 'dsadsadsa', 'dasdasdas', 'dasdasd', NULL, 1492292363, 1492292363),
(7, 'galerija 2', 'galerija-2', '<p>dsa</p>\r\n', '', '', '', NULL, 1492804829, 1492804829);

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery_image`
--

CREATE TABLE `photo_gallery_image` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo_gallery_id` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo_gallery_image`
--

INSERT INTO `photo_gallery_image` (`id`, `photo_gallery_id`, `title`, `image`, `display_order`, `ctime`, `mtime`) VALUES
(5, 5, 'dasdsa', 'dasdsa.jpg', NULL, 1492528347, 1493255093),
(6, 5, 'dsadasdsa', 'dsadasdsa.jpg', NULL, 1492804800, 1493255099),
(7, 5, 'dsadas', 'dsadas.jpg', NULL, 1492804807, 1493255103),
(8, 7, 'dsd', 'dsd.jpg', NULL, 1492804836, 1493255060),
(9, 7, 'dsadsa', 'dsadsa.jpg', NULL, 1492804841, 1493255063),
(10, 7, 'dsadsa', 'dsadsa.jpg', NULL, 1492804849, 1493255069);

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`id`, `title`, `text`, `price`, `image`, `display_order`, `show_on_homepage`, `ctime`, `mtime`) VALUES
(1, 'Lorem Ipsum5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', '31323', 'Lorem Ipsum5.jpg', 2, 0, 1492023320, 1493302418),
(2, 'Lorem Ipsum1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', '1234', 'Lorem Ipsum1.jpg', NULL, 1, 1493056318, 1493302389),
(3, 'Lorem Ipsum2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', '3213', 'Lorem Ipsum2.jpg', NULL, 1, 1493056332, 1493302395),
(4, 'Lorem Ipsum13', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', '421421', 'Lorem Ipsum13.jpg', NULL, 1, 1493056344, 1493302402),
(5, 'Lorem Ipsum14', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', '3213', 'Lorem Ipsum14.jpg', NULL, 1, 1493056355, 1493302410);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_category_id` int(11) UNSIGNED NOT NULL,
  `product_manufacturer_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ime produkta',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price` decimal(14,2) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `seo_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_on_sale` tinyint(1) DEFAULT '0',
  `is_new` tinyint(1) DEFAULT '0',
  `is_popular` tinyint(1) DEFAULT '0',
  `is_recommended` tinyint(1) DEFAULT '0',
  `status` enum('ACTIVE','INACTIVE','DRAFT','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(15) NOT NULL,
  `mtime` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category_id`, `product_manufacturer_id`, `title`, `url`, `price`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `image`, `image1`, `image2`, `image3`, `image4`, `image5`, `is_on_sale`, `is_new`, `is_popular`, `is_recommended`, `status`, `display_order`, `ctime`, `mtime`) VALUES
(1, 5, 2, 'Lorem Ipsum2', 'title', '123321.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'SEO TitleLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'SEO DescriptionLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'SEO keywordsLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'title.jpg', '', 'title-2.jpg', 'title-3.png', 'title-4.jpg', 'title-5.png', 1, 1, 1, 1, 'ACTIVE', 1, 1491985446, 1493308945),
(2, 5, 4, 'Lorem Ipsum3', 'dasdasdas', '3213.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'aadasdLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'dasdasdas.jpg', 'dasdasdas-1.jpg', '', 'dasdasdas-3.jpg', '', '', 1, 1, 1, 1, 'ACTIVE', 2, 1491989151, 1493308955),
(8, 5, 4, 'Lorem Ipsum1', 'lorem-ipsum1', '13321.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum1.jpg', 'lorem-ipsum1-1.jpg', 'lorem-ipsum1-2.jpg', '', '', '', 1, 1, 1, 1, 'ACTIVE', NULL, 1493308935, 1493308935),
(9, 6, 4, 'Lorem Ipsum4', 'lorem-ipsum4', '12332.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum4.jpg', 'lorem-ipsum4-1.jpg', 'lorem-ipsum4-2.jpg', '', '', '', 1, 1, 1, 1, 'ACTIVE', NULL, 1493308968, 1493308968),
(10, 6, 4, 'Lorem Ipsum5', 'lorem-ipsum5', '3221.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum5.jpg', 'lorem-ipsum5-1.jpg', 'lorem-ipsum5-2.jpg', '', '', '', 1, 1, 1, 1, 'ACTIVE', NULL, 1493308986, 1493308986),
(11, 6, 4, 'Lorem Ipsum6', 'lorem-ipsum6', '185.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum6.jpg', 'lorem-ipsum6-1.jpg', 'lorem-ipsum6-2.jpg', 'lorem-ipsum6-3.jpg', '', '', 1, 1, 1, 1, 'ACTIVE', NULL, 1493309003, 1493309003),
(12, 5, 4, 'Lorem Ipsum7', 'lorem-ipsum7', '333.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum7.jpg', 'lorem-ipsum7-1.jpg', 'lorem-ipsum7-2.jpg', 'lorem-ipsum7-3.jpg', '', '', 1, 1, 1, 1, 'ACTIVE', NULL, 1493309019, 1493309019),
(14, 10, 4, 'Lorem Ipsum 132 Ipsum ', 'lorem-ipsum-132-ipsum', '321.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum.jpg', 'lorem-ipsum-132-ipsum-1.jpg', 'lorem-ipsum-132-ipsum-2.jpg', '', '', '', 0, 1, 0, 1, 'ACTIVE', NULL, 1493314091, 1493314091),
(15, 15, 4, 'Lorem Ipsum 132 Ipsum 1', 'lorem-ipsum-132-ipsum-1', '321.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-1.jpg', 'lorem-ipsum-132-ipsum-1-1.jpg', 'lorem-ipsum-132-ipsum-1-2.jpg', '', '', '', 0, 0, 1, 0, 'ACTIVE', NULL, 1493314116, 1493314116),
(16, 11, 4, 'Lorem Ipsum 132 Ipsum 2', 'lorem-ipsum-132-ipsum-2', '154.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-2.jpg', 'lorem-ipsum-132-ipsum-2-1.jpg', 'lorem-ipsum-132-ipsum-2-2.jpg', '', '', '', 0, 1, 0, 0, 'ACTIVE', NULL, 1493314139, 1493314139),
(17, 12, 4, 'Lorem Ipsum 132 Ipsum 3', 'lorem-ipsum-132-ipsum-3', '157.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-3.jpg', 'lorem-ipsum-132-ipsum-3-1.jpg', 'lorem-ipsum-132-ipsum-3-2.jpg', '', '', '', 0, 1, 0, 0, 'ACTIVE', NULL, 1493314169, 1493314169),
(18, 5, 4, 'Lorem Ipsum 132 Ipsum 4', 'lorem-ipsum-132-ipsum-4', '174.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-4.jpg', 'lorem-ipsum-132-ipsum-4-1.jpg', '', '', '', '', 0, 0, 1, 0, 'ACTIVE', NULL, 1493314187, 1493314187),
(19, 7, 4, 'Lorem Ipsum 132 Ipsum 5', 'lorem-ipsum-132-ipsum-5', '41.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-5.jpg', 'lorem-ipsum-132-ipsum-5-1.jpg', 'lorem-ipsum-132-ipsum-5-2.jpg', '', '', '', 1, 0, 0, 0, 'ACTIVE', NULL, 1493314217, 1493314217),
(20, 5, 4, 'Lorem Ipsum 132 Ipsum 6', 'lorem-ipsum-132-ipsum-6', '1115.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-6.jpg', 'lorem-ipsum-132-ipsum-6-1.jpg', 'lorem-ipsum-132-ipsum-6-2.jpg', '', '', '', 0, 1, 1, 1, 'ACTIVE', NULL, 1493314236, 1493314236),
(21, 13, 4, 'Lorem Ipsum 132 Ipsum 7', 'lorem-ipsum-132-ipsum-7', '1441.00', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'lorem-ipsum-132-ipsum-7.jpg', 'lorem-ipsum-132-ipsum-7-1.jpg', 'lorem-ipsum-132-ipsum-7-2.jpg', 'lorem-ipsum-132-ipsum-7-3.jpg', '', '', 0, 0, 1, 0, 'ACTIVE', NULL, 1493314258, 1493314258);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_child` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Kategorija',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/index.php',
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `seo_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `parent_id`, `has_child`, `title`, `url`, `description`, `image`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(4, 0, 1, 'Lorem Ipsum1', 'asddsadas', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'asddsadasaaaa-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 1, 1491917298, 1491917298),
(5, 0, 0, 'Lorem Ipsum2', 'asdsadasd', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'asdsadasdxxxxxx-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 2, 1491917418, 1491917418),
(6, 4, 0, 'Lorem Ipsum 2245', 'asddas', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'asddas-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'asdsadasdLorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 1, 1491919349, 1491919349),
(7, 0, 0, 'Lorem Ipsum3', 'lorem-ipsum3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum3-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313555, 1493313555),
(8, 0, 1, 'Lorem Ipsum4', 'lorem-ipsum4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum4-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313561, 1493313561),
(9, 0, 0, 'Lorem Ipsum5', 'lorem-ipsum5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum5-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313564, 1493313564),
(10, 0, 0, 'Lorem Ipsum6', 'lorem-ipsum6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum6-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313572, 1493313572),
(11, 4, 0, 'Lorem Ipsum 3345', 'lorem-ipsum-3345', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum-3345-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313689, 1493313689),
(12, 4, 0, 'Lorem Ipsum 445', 'lorem-ipsum-445', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum-445-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313696, 1493313696),
(13, 8, 0, 'Lorem Ipsum 23', 'lorem-ipsum-23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum-23-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313800, 1493313800),
(14, 8, 0, 'Lorem Ipsum 234', 'lorem-ipsum-234', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum-234-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313803, 1493313803),
(15, 8, 0, 'Lorem Ipsum 25', 'lorem-ipsum-25', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ullamcorper dui, ac condimentum justo. Etiam nec quam enim. Aenean feugiat massa sit amet ipsum gravida hendrerit. Maecenas fermentum enim et ante interdum, et rutrum neque cursus. Aliquam porttitor ante in diam aliquam mollis. Nam mollis orci orci, vel pellentesque ante tempus mattis. Nam turpis est, eleifend vel tincidunt at, ultricies et enim. Phasellus tincidunt, nisi ac hendrerit sagittis, enim erat fringilla neque, non imperdiet augue lectus quis libero. Aliquam non ullamcorper lacus, eget fringilla neque.</p>\r\n\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 'lorem-ipsum-25-1.jpg', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum', NULL, 1493313810, 1493313810);

-- --------------------------------------------------------

--
-- Table structure for table `product_manufacturer`
--

CREATE TABLE `product_manufacturer` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'manufacturer',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `show_on_homepage` tinyint(1) DEFAULT '0',
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_manufacturer`
--

INSERT INTO `product_manufacturer` (`id`, `title`, `url`, `image`, `description`, `show_on_homepage`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(2, 'aaaaa', 'aaaaa', 'aaaaa.png', '<p>aaaaaa</p>\r\n', 0, 'dsadasdasd', 'dsadasdas', 'dsadasdas', 2, NULL, 1492510478),
(4, 'dsadasdasaaaa', 'dsadasdas', '', '<p>dsadasdasdasdsa</p>\r\n', 0, '', 'dsadasds', 'dsadsadsa', NULL, 1491922570, 1492597712),
(5, 'dsadsa', 'dsadsa', NULL, '', 1, '', '', '', NULL, 1492597700, 1492597700);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `param_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `param_value` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `param_name`, `param_value`) VALUES
(1, 'address', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'phone', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'map_coordinates', '44.816638, 20.508325'),
(4, 'skype', 'aaaaaaaaaaaaaaaaaaaaaa'),
(5, 'site_email', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'copyright_text', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(7, 'site_title', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(8, 'site_description', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(9, 'site_keywords', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(10, 'facebook', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(11, 'instagram', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(12, 'google', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(21, 'pinterest', 'aaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `show_on_homepage`, `ctime`, `mtime`) VALUES
(2, 'aaaaaaaaaaaaaaaaaaaaa', 1, 1492340897, 1493058367),
(3, 'asdasdasdas', 0, 1492340900, 1492340900),
(4, 'neki', 0, 1493058428, 1493058428),
(5, 'neki drugi', 0, 1493058439, 1493058439);

-- --------------------------------------------------------

--
-- Table structure for table `slider_slide`
--

CREATE TABLE `slider_slide` (
  `id` int(11) UNSIGNED NOT NULL,
  `slider_id` int(11) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `url` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_slide`
--

INSERT INTO `slider_slide` (`id`, `slider_id`, `image`, `title`, `text`, `url`, `display_order`, `ctime`, `mtime`) VALUES
(1, 2, 'slide-4.jpg', 'Slide 4', '<p>Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4Slide 4</p>\r\n', '/dsa/dsa/d/as/d/as', 1, 1492341038, 1493254100),
(2, 2, 'slide-1.jpg', 'Slide 1', '<p>Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1Slide 1</p>\r\n', '//////////////////////////////////////////////////', NULL, 1493060179, 1493254077),
(3, 2, 'slide-2.jpg', 'Slide 2', '<p>Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2Slide 2&nbsp;</p>\r\n', '//////////////////', NULL, 1493060188, 1493254086),
(4, 2, 'slide-3.jpg', 'Slide 3', '<p>Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3</p>\r\n', '///////////////Slide 2', NULL, 1493060196, 1493254093);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  `person` varchar(255) DEFAULT NULL,
  `person_profession` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `text`, `person`, `person_profession`, `image`, `display_order`, `ctime`, `mtime`, `show_on_homepage`) VALUES
(5, '<p>dsad sdasds dsadasdasdsdsa das sds ad asd asdsdsadasdasd &nbsp;sadas &nbsp;dasdsdsad sdas sdsadasdasdsdsa &nbsp;sdasd sd sadasdasdsdsadasdasdsd sadasdasdsdsada sd &nbsp;sdsdsada sdasds dsadasdasdsdsadasdas dsdsadas dasdsd &nbsp;adasda sdsdsadas d asdsd &nbsp; &nbsp;dasdasdsd &nbsp;sadasdasdsdsadasdasd sdsada s dasdsdsa dasd sdsadasdasds sada dasdsdsadasdasdsdsadasdasdsdsada s dasdsdsadasdasdsdsa dasdasdsdsadasdasdsds &nbsp; &nbsp;sdasdsdsadasdasdsdsadasda sdsdsada dasdsdsad asdas dsadasdasdsd', 'qwe', 'dsadasdasds', 'qwe.png', NULL, 1492511332, 1493064944, 1),
(6, '<p>dsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd asdsad asd asd as</p>\r\n', 'dsad asd asd as', 'dsad asd asd as', 'dsad asd asd as.png', NULL, 1492802917, 1493064988, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `home_number`, `zip`, `city`, `country`, `phone`, `ip`, `is_active`, `ctime`, `mtime`) VALUES
(1, 'Luka', 'Brajkovic', 'akool@gmail.com', '202cb962ac59075b964b07152d234b70', 'asdasdasd', '011122112', '11000', 'dasdasda', 'srb', '065', '11111111111111111', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` text,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(100) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `title`, `url`, `description`, `seo_title`, `seo_description`, `seo_keywords`, `display_order`, `ctime`, `mtime`) VALUES
(3, 'dasdas', 'dasdas', '', '', '', '', NULL, 1492521857, 1492521857),
(4, 'aa', 'aa', '', '', '', '', NULL, 1492771665, 1492771665);

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery_video`
--

CREATE TABLE `video_gallery_video` (
  `id` int(11) UNSIGNED NOT NULL,
  `video_gallery_id` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `video_type` enum('YOUTUBE','VIMEO') DEFAULT 'YOUTUBE',
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_gallery_video`
--

INSERT INTO `video_gallery_video` (`id`, `video_gallery_id`, `title`, `video_url`, `video_type`, `display_order`, `ctime`, `mtime`) VALUES
(1, 3, 'dssdas', 'dasdas', 'YOUTUBE', NULL, 1492601851, 1492601851),
(2, 3, 'a', '', 'YOUTUBE', NULL, 1492771672, 1492771672);

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `id` int(11) UNSIGNED NOT NULL,
  `monday` varchar(100) DEFAULT NULL,
  `tuesday` varchar(100) DEFAULT NULL,
  `wednesday` varchar(100) DEFAULT NULL,
  `thursday` varchar(100) DEFAULT NULL,
  `friday` varchar(100) DEFAULT NULL,
  `saturday` varchar(100) DEFAULT NULL,
  `sunday` varchar(100) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `ctime`, `mtime`) VALUES
(1, 'dsadsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'asdsadaaaaaaaaaaaaaaaaaaaaaaaaaa', 'dasdasaaaaaaaaaaaaaaaaaaaaaaaaaa', 'dasdsaaaaaaaaaaaaaaaaaaaaaaaa', 'dasdasaaaaaaaaaaaaaaaaa', 'dsadsaaaaaaaaaaaaaaaaaaaaaa', 'dsadasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UX_adm_email` (`email`),
  ADD KEY `IX_adm_pass` (`password`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ba_bc` (`blog_category_id`),
  ADD KEY `FK_ba_admin` (`administrator_id`);

--
-- Indexes for table `blog_article_tag`
--
ALTER TABLE `blog_article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bat_ba` (`blog_article_id`),
  ADD KEY `IX_ba_tag` (`tag`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_to_action`
--
ALTER TABLE `call_to_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cart_user` (`user_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ci_cart` (`cart_id`),
  ADD KEY `FK_ci_prod` (`product_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_staff`
--
ALTER TABLE `department_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ds_dep` (`department_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flip_box`
--
ALTER TABLE `flip_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_group`
--
ALTER TABLE `footer_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link`
--
ALTER TABLE `footer_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_fl_fg` (`footer_group_id`);

--
-- Indexes for table `fun_fact`
--
ALTER TABLE `fun_fact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_box`
--
ALTER TABLE `html_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallery_image`
--
ALTER TABLE `photo_gallery_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_pgi_pg` (`photo_gallery_id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_prod_pc` (`product_category_id`),
  ADD KEY `FK_prod_pm` (`product_manufacturer_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `product_manufacturer`
--
ALTER TABLE `product_manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_sett_name` (`param_name`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_slide`
--
ALTER TABLE `slider_slide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_slide_slider` (`slider_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UX_user_email` (`email`),
  ADD KEY `IX_user_email_pass` (`email`,`password`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery_video`
--
ALTER TABLE `video_gallery_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_vgv_vg` (`video_gallery_id`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `blog_article_tag`
--
ALTER TABLE `blog_article_tag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `call_to_action`
--
ALTER TABLE `call_to_action`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `department_staff`
--
ALTER TABLE `department_staff`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `flip_box`
--
ALTER TABLE `flip_box`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `footer_group`
--
ALTER TABLE `footer_group`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `footer_link`
--
ALTER TABLE `footer_link`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fun_fact`
--
ALTER TABLE `fun_fact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `html_box`
--
ALTER TABLE `html_box`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `photo_gallery_image`
--
ALTER TABLE `photo_gallery_image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_manufacturer`
--
ALTER TABLE `product_manufacturer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider_slide`
--
ALTER TABLE `slider_slide`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `video_gallery_video`
--
ALTER TABLE `video_gallery_video`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `working_hours`
--
ALTER TABLE `working_hours`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD CONSTRAINT `FK_ba_admin` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`id`),
  ADD CONSTRAINT `FK_ba_bc` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`);

--
-- Constraints for table `blog_article_tag`
--
ALTER TABLE `blog_article_tag`
  ADD CONSTRAINT `FK_bat_ba` FOREIGN KEY (`blog_article_id`) REFERENCES `blog_article` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `FK_ci_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `FK_ci_prod` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `department_staff`
--
ALTER TABLE `department_staff`
  ADD CONSTRAINT `FK_ds_dep` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `footer_link`
--
ALTER TABLE `footer_link`
  ADD CONSTRAINT `FK_fl_fg` FOREIGN KEY (`footer_group_id`) REFERENCES `footer_group` (`id`);

--
-- Constraints for table `photo_gallery_image`
--
ALTER TABLE `photo_gallery_image`
  ADD CONSTRAINT `FK_pgi_pg` FOREIGN KEY (`photo_gallery_id`) REFERENCES `photo_gallery` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_prod_pc` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`),
  ADD CONSTRAINT `FK_prod_pm` FOREIGN KEY (`product_manufacturer_id`) REFERENCES `product_manufacturer` (`id`);

--
-- Constraints for table `slider_slide`
--
ALTER TABLE `slider_slide`
  ADD CONSTRAINT `FK_slide_slider` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`);

--
-- Constraints for table `video_gallery_video`
--
ALTER TABLE `video_gallery_video`
  ADD CONSTRAINT `FK_vgv_vg` FOREIGN KEY (`video_gallery_id`) REFERENCES `video_gallery` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

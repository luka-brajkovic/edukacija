-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 04:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
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
(26, 10, 1, 'Lorem Ipsum1', 'lorem-ipsum1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum1.jpg', 'lorem-ipsum1.jpg', 1494972540, 0, '', '', '', '', NULL, 1494972540, 1494972540),
(27, 10, 1, 'Lorem Ipsum2', 'lorem-ipsum2', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum2.jpg', 'lorem-ipsum2.jpg', 1494972542, 0, '', '', '', '', NULL, 1494972542, 1494972542),
(28, 11, 1, 'Lorem Ipsum3', 'lorem-ipsum3', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum3.jpg', 'lorem-ipsum3.jpg', 1494972544, 0, '', '', '', '', NULL, 1494972544, 1494972544),
(29, 11, 1, 'Lorem Ipsum4', 'lorem-ipsum4', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum4.jpg', 'lorem-ipsum4.jpg', 1494972547, 0, '', '', '', '', NULL, 1494972547, 1494972547),
(30, 12, 1, 'Lorem Ipsum5', 'lorem-ipsum5', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum5.jpg', 'lorem-ipsum5.jpg', 1494972548, 0, '', '', '', '', NULL, 1494972548, 1494972548),
(31, 12, 1, 'Lorem Ipsum6', 'lorem-ipsum6', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repella</p>\r\n', 'lorem-ipsum6.jpg', 'lorem-ipsum6.jpg', 1494972550, 0, '', '', '', '', NULL, 1494972550, 1494972550);

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
(7, 26, 'sunce', NULL, NULL),
(8, 26, 'mesec', NULL, NULL),
(9, 27, 'istina', NULL, NULL),
(10, 27, 'mesec', NULL, NULL),
(11, 28, 'sunce', NULL, NULL),
(12, 28, 'patike', NULL, NULL),
(13, 29, 'istina', NULL, NULL),
(14, 29, 'pogled', NULL, NULL),
(15, 30, 'kototamopeva', NULL, NULL),
(16, 30, 'muzika', NULL, NULL),
(17, 31, 'nocvestica', NULL, NULL),
(18, NULL, 'sesiri', NULL, NULL);

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
(10, 'Najavljujemo', 'najavljujemo', NULL, '', '', '', '', NULL, 1494972265, 1494972265),
(11, 'Poslednje aktivnosti', 'poslednje-aktivnosti', NULL, '', '', '', '', NULL, 1494972266, 1494972266),
(12, 'NAJNOVIJE VESTI', 'najnovije-vesti', NULL, '', '', '', '', NULL, 1494972268, 1494972268);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `leed` text,
  `text` text,
  `image` varchar(255) DEFAULT NULL,
  `live_video_url` varchar(255) DEFAULT NULL,
  `live_start_date` datetime NOT NULL,
  `live_end_date` datetime NOT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `files` text,
  `is_public` tinyint(1) NOT NULL,
  `number_of_tries_per_user` int(11) NOT NULL,
  `success_percentage` float NOT NULL,
  `display_order` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `url`, `leed`, `text`, `image`, `live_video_url`, `live_start_date`, `live_end_date`, `video_url`, `files`, `is_public`, `number_of_tries_per_user`, `success_percentage`, `display_order`, `ctime`, `mtime`) VALUES
(1, 'dsadasaaaad', 'title', 'Leed', '<p>dsadasdsaaaaad</p>\r\n', 'title.jpg', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 0, 0, 0, 6, 1494928714, 1495547207),
(4, 'Lorem Ipsum1', 'lorem-ipsum1', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p>\r\n', 'lorem-ipsum1.jpg', 'http://localhost/edukacija/edukacija/uploads/Motivational short video - How to succeed - cartoon.mp4', '2017-05-17 12:53:00', '2017-05-27 23:00:00', 'http://localhost/edukacija/edukacija/uploads/Motivational short video - How to succeed - cartoon.mp4', 'amalgam-pistolen-145 mm.jpg,dental (1).sql', 1, 3, 52, 2, 1495018621, 1495541428),
(5, 'Lorem Ipsum2', 'lorem-ipsum2', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p>\r\n', 'lorem-ipsum2.jpg', 'http://localhost/edukacija/edukacija/uploads/Motivational short video - How to succeed - cartoon.mp4', '2017-05-17 12:53:00', '2017-05-17 12:30:00', '', NULL, 0, 0, 0, 3, 1495018630, 1495018630),
(6, 'Lorem Ipsum3', 'lorem-ipsum3', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p>\r\n', 'lorem-ipsum3.jpg', 'http://localhost/edukacija/edukacija/uploads/Motivational short video - How to succeed - cartoon.mp4', '2017-11-23 01:00:00', '2018-01-17 01:00:00', 'https://www.youtube.com/', NULL, 1, 0, 0, 4, 1495018636, 1495197470),
(7, 'Lorem Ipsum4', 'lorem-ipsum4', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p>\r\n', 'lorem-ipsum4.jpg', 'http://localhost/edukacija/edukacija/uploads/Motivational short video - How to succeed - cartoon.mp4', '2017-05-17 12:53:00', '2017-06-17 12:53:00', 'https://www.youtube.com/', NULL, 0, 0, 0, 5, 1495018642, 1495018642),
(8, 'Lorem Ipsum5', 'lorem-ipsum5', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></p>\r\n', 'lorem-ipsum5.jpg', '', '2017-05-17 12:53:00', '2017-06-17 05:00:00', 'https://www.youtube.com/', NULL, 1, 0, 0, 1, 1495018651, 1495197475);

-- --------------------------------------------------------

--
-- Table structure for table `course_question`
--

CREATE TABLE `course_question` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `text` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `display_order` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_question`
--

INSERT INTO `course_question` (`id`, `course_id`, `title`, `text`, `active`, `display_order`, `ctime`, `mtime`) VALUES
(1, 4, 'dsadasdsadsa', '<p>dsadasdsadsadsa</p>\r\n', 1, 1, 1495544195, 1495794361),
(2, 4, 'asd', '<p>text</p>\r\n', 0, 3, 1495544292, 1495544292),
(3, 4, 'dsadasdas', '<p>dasdasdas</p>\r\n', 1, 2, 1495642446, 1495797232);

-- --------------------------------------------------------

--
-- Table structure for table `course_question_answer`
--

CREATE TABLE `course_question_answer` (
  `id` int(11) NOT NULL,
  `course_question_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `is_correct_answer` tinyint(1) NOT NULL,
  `display_order` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_question_answer`
--

INSERT INTO `course_question_answer` (`id`, `course_question_id`, `text`, `is_correct_answer`, `display_order`, `ctime`, `mtime`) VALUES
(7, 2, 'dsadasdas\r\n', 0, 1, 1495639563, 1495722183),
(11, 2, 'dasdasdas\n', 0, 2, 1495645084, 1495645084),
(12, 3, 'asd\r\n', 1, 0, 1495716268, 1495797277),
(13, 3, 'dsa\r\n', 0, 0, 1495716285, 1495797272),
(14, 3, 'das\n', 0, 0, 1495716289, 1495722162),
(15, 1, '123\r\n', 1, 0, 1495716314, 1495797240),
(16, 1, '123\r\n', 0, 0, 1495716318, 1495718512),
(17, 1, 'dasdadas', 0, 0, 1495717705, 1495717705);

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `ctime`, `mtime`) VALUES
(29, 4, 8, 1495529540, 1495529540),
(30, 4, 7, 1495529541, 1495529541),
(31, 4, 1, 1495529541, 1495529541),
(32, 4, 6, 1495529541, 1495529541),
(33, 6, 1, 1495531433, 1495531433);

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
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', 1, 1492769957, 1493379522),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379516, 1493379516),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379525, 1493379525),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379527, 1493379527),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379528, 1493379528),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379529, 1493379529),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere.', '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut eget arcu neque. Proin tempus maximus metus, aliquam posuere mauris commodo non. Phasellus sed venenatis nisl, eget viverra tortor. Nunc a laoreet tellus. Nulla tempus vitae arcu non vestibulum. Sed posuere euismod leo, id semper velit posuere nec. Curabitur dignissim, nulla quis mollis tristique, nisl sapien viverra mauris, ut posuere eros nulla nec nulla.</p>\r\n\r\n<p>Donec purus orci, condimentum sed dignissim porttitor, ullamcorper ut elit. Fusce sit amet semper ligula. Donec vitae vehicula nunc, non efficitur ante. Curabitur fringilla justo vitae sapien auctor facilisis. Nulla facilisi. Etiam a mi leo. Quisque et diam congue, rutrum enim sed, mollis augue. In feugiat nunc porta lacus blandit aliquam a a enim. Proin eleifend nibh et congue fringilla. Fusce efficitur enim non nulla ultrices rutrum.</p>\r\n\r\n<p>Sed sit amet nibh vel arcu finibus fermentum. Praesent mattis metus odio, vitae fermentum ligula molestie eu. Integer iaculis eleifend massa et consequat. Morbi blandit urna eget faucibus luctus. Quisque in tristique urna. Morbi dignissim luctus turpis eget ultricies. Nulla et eros hendrerit, auctor ante id, hendrerit arcu.</p>\r\n\r\n<p>Duis sollicitudin nisi tristique sem commodo placerat. Vivamus malesuada vel lectus quis tincidunt. Sed interdum sapien vel luctus molestie. Fusce nec condimentum leo. Cras maximus ante vel felis finibus aliquam. Pellentesque elementum massa ac nulla tincidunt suscipit. Aenean semper ullamcorper enim nec porta. Vestibulum non euismod magna. Maecenas imperdiet mi sit amet ligula pretium, et laoreet eros scelerisque. Nullam tempus semper sem dignissim accumsan. Curabitur lacinia aliquet mi, a laoreet sem gravida a. Vestibulum auctor mi tellus, tempor mattis orci ultricies at. Pellentesque pretium dolor sed sapien feugiat sagittis. Praesent commodo a purus ut feugiat. Nam tincidunt pellentesque nisi, porta malesuada est malesuada vitae.</p>\r\n', NULL, 1493379530, 1493379530);

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
(1, 'Lorem Ipsum 1', 123, 'F128', 1, 1493927703, 1495139837),
(2, 'Lorem Ipsum 2', 2500, 'F11B', 3, 1493927750, 1495139845),
(3, 'Lorem Ipsum3', 441, 'F118', 2, 1493927758, 1495139842),
(4, 'Lorem Ipsum 4', 9393, 'F11D ', 4, 1493927786, 1495139848);

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
(3, 'Lorem Ipsum 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', 'Lorem Ipsum 3.jpg', NULL, 1493108587, 1493302270),
(4, 'Lorem Ipsum 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem. Quisque dolor tortor, pretium dictum libero non, tempor pretium erat. Donec tincidunt sapien eget consequat posuere. Duis vel ulla', 'Lorem Ipsum 4.jpg', NULL, 1493917194, 1493917194),
(5, 'Lorem Ipsum 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', '', NULL, 1493917199, 1493917199),
(6, 'Lorem Ipsum 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', '', NULL, 1493917201, 1493917201),
(7, 'Lorem Ipsum 7', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', '', NULL, 1493917203, 1493917203);

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
(5, 'STATIC', 'Cilj', 'cilj', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ullamcorper luctus posuere. Pellentesque venenatis suscipit nunc, sed imperdiet erat lacinia ac. Morbi maximus metus sed risus interdum mattis. Proin accumsan lorem dui, at aliquam lacus volutpat a. Sed feugiat accumsan ex, pharetra dapibus magna consequat at. Nulla varius lectus nibh, nec faucibus ex blandit in. Nullam pulvinar convallis nisi suscipit rhoncus. Duis sed elit et sem sagittis blandit ut non urna. Sed placerat convallis turpis. Duis sed odio mauris. Pellentesque sodales nisl ac mauris dapibus pellentesque. Curabitur varius nisi quis purus porttitor, eget placerat mauris consequat. Aenean faucibus mi sodales augue suscipit, vel venenatis purus vehicula. Donec ac nisl id sapien tincidunt fringilla in in sem.</p>\r\n\r\n<p>Pellentesque dignissim metus ac ex sagittis, eget lobortis justo consectetur. Integer in pulvinar velit. In eu augue porttitor, vestibulum enim et, rhoncus dui. Sed suscipit congue magna. Curabitur feugiat magna vitae mi congue cursus ut a orci. Pellentesque in nibh ante. Curabitur at efficitur sapien. Aenean eu ante nisl. Nam congue ligula nec nunc dictum, a ullamcorper enim iaculis. Curabitur velit nulla, sodales a arcu at, volutpat varius lectus. Fusce ac ornare sapien. Phasellus vestibulum, libero ac cursus varius, ipsum massa dictum velit, ut facilisis ligula orci id eros. Aenean scelerisque in lacus id tincidunt.</p>\r\n\r\n<p>Curabitur interdum nisl nibh, a euismod ligula sodales eget. Phasellus varius massa a eleifend tempus. Sed ullamcorper purus vitae quam porttitor, a elementum quam vehicula. Sed condimentum purus id enim ullamcorper, ut faucibus mauris placerat. Aliquam cursus maximus elit, eget consectetur ipsum volutpat sed. Ut interdum eget nisl eu imperdiet. Duis consequat dui erat. In iaculis erat eget eros vulputate ultrices. Vivamus risus justo, tristique a pretium at, porta et velit. Fusce sem ex, vestibulum sit amet tempor at, ornare et ante. Nunc et mauris vel ante dapibus interdum et a erat. Morbi sit amet tortor sollicitudin, tristique nulla ut, condimentum orci. Sed ac ligula a urna consequat vehicula vitae condimentum lacus.</p>\r\n\r\n<p>Suspendisse eu leo suscipit, tristique eros ac, dapibus odio. Praesent et porta mi. Nulla ac dictum est, elementum imperdiet sem. In ac interdum diam. Phasellus tempor tortor sed efficitur hendrerit. Maecenas pellentesque rhoncus elementum. Aenean eu imperdiet lacus. Cras volutpat leo sed orci semper aliquet. Aenean non ligula lacus. Donec consequat ante ac elit tempus, vel volutpat libero auctor. Integer aliquam, erat ac malesuada dignissim, lacus orci ultrices eros, a tincidunt ipsum erat at enim.</p>\r\n\r\n<p>Proin dictum tristique suscipit. Nullam malesuada leo sed porttitor mattis. Pellentesque posuere, justo sit amet cursus elementum, lacus ligula condimentum turpis, ut ultrices neque leo vel lectus. Donec leo tellus, bibendum non felis ac, tempor pharetra orci. Suspendisse pharetra neque vitae purus rutrum, ac posuere nulla convallis. Etiam venenatis quis odio sit amet malesuada. Quisque eget venenatis magna. Donec semper, orci a volutpat fermentum, dui tortor posuere diam, a dignissim massa leo ac ante. Aenean mollis et lorem eget vestibulum. Ut in varius lacus, id auctor lectus. Maecenas id efficitur velit. Proin ac efficitur lacus. Donec gravida tincidunt massa nec rhoncus. Suspendisse quis commodo ipsum. Duis bibendum vestibulum consectetur.</p>\r\n', '', '', '', 1495138880, 1495138880),
(6, 'STATIC', 'Statut', 'statut', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ullamcorper luctus posuere. Pellentesque venenatis suscipit nunc, sed imperdiet erat lacinia ac. Morbi maximus metus sed risus interdum mattis. Proin accumsan lorem dui, at aliquam lacus volutpat a. Sed feugiat accumsan ex, pharetra dapibus magna consequat at. Nulla varius lectus nibh, nec faucibus ex blandit in. Nullam pulvinar convallis nisi suscipit rhoncus. Duis sed elit et sem sagittis blandit ut non urna. Sed placerat convallis turpis. Duis sed odio mauris. Pellentesque sodales nisl ac mauris dapibus pellentesque. Curabitur varius nisi quis purus porttitor, eget placerat mauris consequat. Aenean faucibus mi sodales augue suscipit, vel venenatis purus vehicula. Donec ac nisl id sapien tincidunt fringilla in in sem.</p>\r\n\r\n<p>Pellentesque dignissim metus ac ex sagittis, eget lobortis justo consectetur. Integer in pulvinar velit. In eu augue porttitor, vestibulum enim et, rhoncus dui. Sed suscipit congue magna. Curabitur feugiat magna vitae mi congue cursus ut a orci. Pellentesque in nibh ante. Curabitur at efficitur sapien. Aenean eu ante nisl. Nam congue ligula nec nunc dictum, a ullamcorper enim iaculis. Curabitur velit nulla, sodales a arcu at, volutpat varius lectus. Fusce ac ornare sapien. Phasellus vestibulum, libero ac cursus varius, ipsum massa dictum velit, ut facilisis ligula orci id eros. Aenean scelerisque in lacus id tincidunt.</p>\r\n\r\n<p>Curabitur interdum nisl nibh, a euismod ligula sodales eget. Phasellus varius massa a eleifend tempus. Sed ullamcorper purus vitae quam porttitor, a elementum quam vehicula. Sed condimentum purus id enim ullamcorper, ut faucibus mauris placerat. Aliquam cursus maximus elit, eget consectetur ipsum volutpat sed. Ut interdum eget nisl eu imperdiet. Duis consequat dui erat. In iaculis erat eget eros vulputate ultrices. Vivamus risus justo, tristique a pretium at, porta et velit. Fusce sem ex, vestibulum sit amet tempor at, ornare et ante. Nunc et mauris vel ante dapibus interdum et a erat. Morbi sit amet tortor sollicitudin, tristique nulla ut, condimentum orci. Sed ac ligula a urna consequat vehicula vitae condimentum lacus.</p>\r\n\r\n<p>Suspendisse eu leo suscipit, tristique eros ac, dapibus odio. Praesent et porta mi. Nulla ac dictum est, elementum imperdiet sem. In ac interdum diam. Phasellus tempor tortor sed efficitur hendrerit. Maecenas pellentesque rhoncus elementum. Aenean eu imperdiet lacus. Cras volutpat leo sed orci semper aliquet. Aenean non ligula lacus. Donec consequat ante ac elit tempus, vel volutpat libero auctor. Integer aliquam, erat ac malesuada dignissim, lacus orci ultrices eros, a tincidunt ipsum erat at enim.</p>\r\n\r\n<p>Proin dictum tristique suscipit. Nullam malesuada leo sed porttitor mattis. Pellentesque posuere, justo sit amet cursus elementum, lacus ligula condimentum turpis, ut ultrices neque leo vel lectus. Donec leo tellus, bibendum non felis ac, tempor pharetra orci. Suspendisse pharetra neque vitae purus rutrum, ac posuere nulla convallis. Etiam venenatis quis odio sit amet malesuada. Quisque eget venenatis magna. Donec semper, orci a volutpat fermentum, dui tortor posuere diam, a dignissim massa leo ac ante. Aenean mollis et lorem eget vestibulum. Ut in varius lacus, id auctor lectus. Maecenas id efficitur velit. Proin ac efficitur lacus. Donec gravida tincidunt massa nec rhoncus. Suspendisse quis commodo ipsum. Duis bibendum vestibulum consectetur.</p>\r\n', '', '', '', 1495138883, 1495138883),
(7, 'STATIC', 'Istorijat', 'istorijat', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ullamcorper luctus posuere. Pellentesque venenatis suscipit nunc, sed imperdiet erat lacinia ac. Morbi maximus metus sed risus interdum mattis. Proin accumsan lorem dui, at aliquam lacus volutpat a. Sed feugiat accumsan ex, pharetra dapibus magna consequat at. Nulla varius lectus nibh, nec faucibus ex blandit in. Nullam pulvinar convallis nisi suscipit rhoncus. Duis sed elit et sem sagittis blandit ut non urna. Sed placerat convallis turpis. Duis sed odio mauris. Pellentesque sodales nisl ac mauris dapibus pellentesque. Curabitur varius nisi quis purus porttitor, eget placerat mauris consequat. Aenean faucibus mi sodales augue suscipit, vel venenatis purus vehicula. Donec ac nisl id sapien tincidunt fringilla in in sem.</p>\r\n\r\n<p>Pellentesque dignissim metus ac ex sagittis, eget lobortis justo consectetur. Integer in pulvinar velit. In eu augue porttitor, vestibulum enim et, rhoncus dui. Sed suscipit congue magna. Curabitur feugiat magna vitae mi congue cursus ut a orci. Pellentesque in nibh ante. Curabitur at efficitur sapien. Aenean eu ante nisl. Nam congue ligula nec nunc dictum, a ullamcorper enim iaculis. Curabitur velit nulla, sodales a arcu at, volutpat varius lectus. Fusce ac ornare sapien. Phasellus vestibulum, libero ac cursus varius, ipsum massa dictum velit, ut facilisis ligula orci id eros. Aenean scelerisque in lacus id tincidunt.</p>\r\n\r\n<p>Curabitur interdum nisl nibh, a euismod ligula sodales eget. Phasellus varius massa a eleifend tempus. Sed ullamcorper purus vitae quam porttitor, a elementum quam vehicula. Sed condimentum purus id enim ullamcorper, ut faucibus mauris placerat. Aliquam cursus maximus elit, eget consectetur ipsum volutpat sed. Ut interdum eget nisl eu imperdiet. Duis consequat dui erat. In iaculis erat eget eros vulputate ultrices. Vivamus risus justo, tristique a pretium at, porta et velit. Fusce sem ex, vestibulum sit amet tempor at, ornare et ante. Nunc et mauris vel ante dapibus interdum et a erat. Morbi sit amet tortor sollicitudin, tristique nulla ut, condimentum orci. Sed ac ligula a urna consequat vehicula vitae condimentum lacus.</p>\r\n\r\n<p>Suspendisse eu leo suscipit, tristique eros ac, dapibus odio. Praesent et porta mi. Nulla ac dictum est, elementum imperdiet sem. In ac interdum diam. Phasellus tempor tortor sed efficitur hendrerit. Maecenas pellentesque rhoncus elementum. Aenean eu imperdiet lacus. Cras volutpat leo sed orci semper aliquet. Aenean non ligula lacus. Donec consequat ante ac elit tempus, vel volutpat libero auctor. Integer aliquam, erat ac malesuada dignissim, lacus orci ultrices eros, a tincidunt ipsum erat at enim.</p>\r\n\r\n<p>Proin dictum tristique suscipit. Nullam malesuada leo sed porttitor mattis. Pellentesque posuere, justo sit amet cursus elementum, lacus ligula condimentum turpis, ut ultrices neque leo vel lectus. Donec leo tellus, bibendum non felis ac, tempor pharetra orci. Suspendisse pharetra neque vitae purus rutrum, ac posuere nulla convallis. Etiam venenatis quis odio sit amet malesuada. Quisque eget venenatis magna. Donec semper, orci a volutpat fermentum, dui tortor posuere diam, a dignissim massa leo ac ante. Aenean mollis et lorem eget vestibulum. Ut in varius lacus, id auctor lectus. Maecenas id efficitur velit. Proin ac efficitur lacus. Donec gravida tincidunt massa nec rhoncus. Suspendisse quis commodo ipsum. Duis bibendum vestibulum consectetur.</p>\r\n', '', '', '', 1495138885, 1495138885),
(8, 'STATIC', 'O nama', 'o-nama', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ullamcorper luctus posuere. Pellentesque venenatis suscipit nunc, sed imperdiet erat lacinia ac. Morbi maximus metus sed risus interdum mattis. Proin accumsan lorem dui, at aliquam lacus volutpat a. Sed feugiat accumsan ex, pharetra dapibus magna consequat at. Nulla varius lectus nibh, nec faucibus ex blandit in. Nullam pulvinar convallis nisi suscipit rhoncus. Duis sed elit et sem sagittis blandit ut non urna. Sed placerat convallis turpis. Duis sed odio mauris. Pellentesque sodales nisl ac mauris dapibus pellentesque. Curabitur varius nisi quis purus porttitor, eget placerat mauris consequat. Aenean faucibus mi sodales augue suscipit, vel venenatis purus vehicula. Donec ac nisl id sapien tincidunt fringilla in in sem.</p>\r\n\r\n<p>Pellentesque dignissim metus ac ex sagittis, eget lobortis justo consectetur. Integer in pulvinar velit. In eu augue porttitor, vestibulum enim et, rhoncus dui. Sed suscipit congue magna. Curabitur feugiat magna vitae mi congue cursus ut a orci. Pellentesque in nibh ante. Curabitur at efficitur sapien. Aenean eu ante nisl. Nam congue ligula nec nunc dictum, a ullamcorper enim iaculis. Curabitur velit nulla, sodales a arcu at, volutpat varius lectus. Fusce ac ornare sapien. Phasellus vestibulum, libero ac cursus varius, ipsum massa dictum velit, ut facilisis ligula orci id eros. Aenean scelerisque in lacus id tincidunt.</p>\r\n\r\n<p>Curabitur interdum nisl nibh, a euismod ligula sodales eget. Phasellus varius massa a eleifend tempus. Sed ullamcorper purus vitae quam porttitor, a elementum quam vehicula. Sed condimentum purus id enim ullamcorper, ut faucibus mauris placerat. Aliquam cursus maximus elit, eget consectetur ipsum volutpat sed. Ut interdum eget nisl eu imperdiet. Duis consequat dui erat. In iaculis erat eget eros vulputate ultrices. Vivamus risus justo, tristique a pretium at, porta et velit. Fusce sem ex, vestibulum sit amet tempor at, ornare et ante. Nunc et mauris vel ante dapibus interdum et a erat. Morbi sit amet tortor sollicitudin, tristique nulla ut, condimentum orci. Sed ac ligula a urna consequat vehicula vitae condimentum lacus.</p>\r\n\r\n<p>Suspendisse eu leo suscipit, tristique eros ac, dapibus odio. Praesent et porta mi. Nulla ac dictum est, elementum imperdiet sem. In ac interdum diam. Phasellus tempor tortor sed efficitur hendrerit. Maecenas pellentesque rhoncus elementum. Aenean eu imperdiet lacus. Cras volutpat leo sed orci semper aliquet. Aenean non ligula lacus. Donec consequat ante ac elit tempus, vel volutpat libero auctor. Integer aliquam, erat ac malesuada dignissim, lacus orci ultrices eros, a tincidunt ipsum erat at enim.</p>\r\n\r\n<p>Proin dictum tristique suscipit. Nullam malesuada leo sed porttitor mattis. Pellentesque posuere, justo sit amet cursus elementum, lacus ligula condimentum turpis, ut ultrices neque leo vel lectus. Donec leo tellus, bibendum non felis ac, tempor pharetra orci. Suspendisse pharetra neque vitae purus rutrum, ac posuere nulla convallis. Etiam venenatis quis odio sit amet malesuada. Quisque eget venenatis magna. Donec semper, orci a volutpat fermentum, dui tortor posuere diam, a dignissim massa leo ac ante. Aenean mollis et lorem eget vestibulum. Ut in varius lacus, id auctor lectus. Maecenas id efficitur velit. Proin ac efficitur lacus. Donec gravida tincidunt massa nec rhoncus. Suspendisse quis commodo ipsum. Duis bibendum vestibulum consectetur.</p>\r\n', '', '', '', 1495138887, 1495138887),
(9, 'STATIC', 'MEDJUNARODNA SARADNJA', 'medjunarodna-saradnja', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ullamcorper luctus posuere. Pellentesque venenatis suscipit nunc, sed imperdiet erat lacinia ac. Morbi maximus metus sed risus interdum mattis. Proin accumsan lorem dui, at aliquam lacus volutpat a. Sed feugiat accumsan ex, pharetra dapibus magna consequat at. Nulla varius lectus nibh, nec faucibus ex blandit in. Nullam pulvinar convallis nisi suscipit rhoncus. Duis sed elit et sem sagittis blandit ut non urna. Sed placerat convallis turpis. Duis sed odio mauris. Pellentesque sodales nisl ac mauris dapibus pellentesque. Curabitur varius nisi quis purus porttitor, eget placerat mauris consequat. Aenean faucibus mi sodales augue suscipit, vel venenatis purus vehicula. Donec ac nisl id sapien tincidunt fringilla in in sem.</p>\r\n\r\n<p>Pellentesque dignissim metus ac ex sagittis, eget lobortis justo consectetur. Integer in pulvinar velit. In eu augue porttitor, vestibulum enim et, rhoncus dui. Sed suscipit congue magna. Curabitur feugiat magna vitae mi congue cursus ut a orci. Pellentesque in nibh ante. Curabitur at efficitur sapien. Aenean eu ante nisl. Nam congue ligula nec nunc dictum, a ullamcorper enim iaculis. Curabitur velit nulla, sodales a arcu at, volutpat varius lectus. Fusce ac ornare sapien. Phasellus vestibulum, libero ac cursus varius, ipsum massa dictum velit, ut facilisis ligula orci id eros. Aenean scelerisque in lacus id tincidunt.</p>\r\n\r\n<p>Curabitur interdum nisl nibh, a euismod ligula sodales eget. Phasellus varius massa a eleifend tempus. Sed ullamcorper purus vitae quam porttitor, a elementum quam vehicula. Sed condimentum purus id enim ullamcorper, ut faucibus mauris placerat. Aliquam cursus maximus elit, eget consectetur ipsum volutpat sed. Ut interdum eget nisl eu imperdiet. Duis consequat dui erat. In iaculis erat eget eros vulputate ultrices. Vivamus risus justo, tristique a pretium at, porta et velit. Fusce sem ex, vestibulum sit amet tempor at, ornare et ante. Nunc et mauris vel ante dapibus interdum et a erat. Morbi sit amet tortor sollicitudin, tristique nulla ut, condimentum orci. Sed ac ligula a urna consequat vehicula vitae condimentum lacus.</p>\r\n\r\n<p>Suspendisse eu leo suscipit, tristique eros ac, dapibus odio. Praesent et porta mi. Nulla ac dictum est, elementum imperdiet sem. In ac interdum diam. Phasellus tempor tortor sed efficitur hendrerit. Maecenas pellentesque rhoncus elementum. Aenean eu imperdiet lacus. Cras volutpat leo sed orci semper aliquet. Aenean non ligula lacus. Donec consequat ante ac elit tempus, vel volutpat libero auctor. Integer aliquam, erat ac malesuada dignissim, lacus orci ultrices eros, a tincidunt ipsum erat at enim.</p>\r\n\r\n<p>Proin dictum tristique suscipit. Nullam malesuada leo sed porttitor mattis. Pellentesque posuere, justo sit amet cursus elementum, lacus ligula condimentum turpis, ut ultrices neque leo vel lectus. Donec leo tellus, bibendum non felis ac, tempor pharetra orci. Suspendisse pharetra neque vitae purus rutrum, ac posuere nulla convallis. Etiam venenatis quis odio sit amet malesuada. Quisque eget venenatis magna. Donec semper, orci a volutpat fermentum, dui tortor posuere diam, a dignissim massa leo ac ante. Aenean mollis et lorem eget vestibulum. Ut in varius lacus, id auctor lectus. Maecenas id efficitur velit. Proin ac efficitur lacus. Donec gravida tincidunt massa nec rhoncus. Suspendisse quis commodo ipsum. Duis bibendum vestibulum consectetur.</p>\r\n', '', '', '', 1495200759, 1495200759);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `leed` text,
  `text` text,
  `image` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `title`, `url`, `leed`, `text`, `image`, `date`, `display_order`, `ctime`, `mtime`) VALUES
(2, 'Lorem Ipsum 1', 'lorem-ipsum-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 1.jpg', '2017-05-26 11:12:00', NULL, 1495185273, 1495186014),
(3, 'Lorem Ipsum 2', 'lorem-ipsum-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 2.jpg', '2017-05-22 11:12:00', NULL, 1495185281, 1495186022),
(4, 'Lorem Ipsum3', 'lorem-ipsum3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum3.jpg', '2017-05-23 11:12:00', NULL, 1495185285, 1495186028),
(5, 'Lorem Ipsum 4', 'lorem-ipsum-4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 4.jpg', '2017-05-25 11:12:00', NULL, 1495185289, 1495186035),
(6, 'Lorem Ipsum 5', 'lorem-ipsum-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 5.jpg', '2017-05-30 11:12:00', NULL, 1495185294, 1495186043),
(7, 'Lorem Ipsum 6', 'lorem-ipsum-6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 6.jpg', '2017-05-24 11:12:00', NULL, 1495185298, 1495186052),
(8, 'Lorem Ipsum 7', 'lorem-ipsum-7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.', '<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac bibendum elit. Duis a mauris fringilla, laoreet erat ut, mattis turpis. Aenean suscipit, tellus pretium luctus maximus, diam mauris vehicula sem, et vulputate ligula augue varius diam. Integer sit amet arcu et metus congue condimentum. Nulla mauris magna, condimentum et interdum eget, faucibus non nunc. Donec condimentum egestas facilisis. Curabitur ipsum eros, consequat ac nibh quis, tincidunt eleifend mauris. Donec vel mauris ac diam accumsan ultricies. Nam sodales urna nec feugiat imperdiet. Sed bibendum porttitor lectus, bibendum fringilla lacus tincidunt sodales.</p>\r\n\r\n<p style=\"text-align:justify\">Nulla volutpat at tellus eget pharetra. Nunc dignissim eu nisl eget rhoncus. Suspendisse euismod maximus ex vel imperdiet. Pellentesque mi urna, posuere sed tempor eget, dignissim at enim. Vestibulum dignissim sapien ut bibendum vestibulum. Sed placerat, ante ut scelerisque suscipit, orci est dictum diam, a ultrices orci risus at diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut laoreet arcu ligula, a mattis mauris consectetur vel. Duis consequat quam et vulputate imperdiet. Vivamus ut arcu ac felis dictum mattis. Maecenas interdum neque ex, ac molestie arcu tincidunt eu. Suspendisse potenti. Suspendisse sit amet pulvinar lorem. Morbi id lorem augue. Mauris sed molestie est. Ut quam lacus, cursus at pellentesque at, ultricies vel purus.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas justo nibh, dignissim non luctus ut, tempus ut lorem. Aenean facilisis nisi eget mi lacinia, sit amet iaculis ipsum tincidunt. Nunc elit turpis, laoreet a lectus finibus, fringilla scelerisque dui. Ut imperdiet, ante eu faucibus sollicitudin, turpis felis sollicitudin mauris, vel interdum tortor erat sed nisi. Donec bibendum orci nisl, non euismod massa dapibus a. Vivamus nec facilisis erat, ac volutpat risus. Donec fermentum pretium libero sit amet iaculis. Phasellus mattis eros risus, ut viverra odio fermentum ac. Mauris sit amet sodales risus. In mollis neque sagittis, dapibus nunc nec, posuere ante. Donec in augue sapien. Curabitur nec blandit metus. Quisque volutpat venenatis maximus. Phasellus non ligula ut urna congue vestibulum aliquam vitae lorem. Fusce dictum tincidunt nibh, ut aliquam purus ullamcorper a. Curabitur volutpat ut purus sed volutpat.</p>\r\n\r\n<p style=\"text-align:justify\">Praesent sagittis velit quis odio commodo, et fermentum leo consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod turpis in convallis. Nulla quis auctor risus. Proin ultrices molestie est et facilisis. Phasellus lacinia lectus elementum aliquet aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p style=\"text-align:justify\">Nam facilisis aliquet quam. In ut fringilla neque. Suspendisse eu pellentesque augue. Vivamus fringilla magna vel ex ullamcorper malesuada. Cras scelerisque aliquet viverra. Integer a ligula faucibus est venenatis semper a in quam. Vivamus tincidunt velit sed ullamcorper dapibus. Nullam id metus quis nibh efficitur posuere. Ut et sagittis odio. Nullam ut velit mollis, maximus augue sed, condimentum elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pulvinar sem sed maximus rhoncus.</p>\r\n', 'Lorem Ipsum 7.jpg', '2017-05-26 11:12:00', NULL, 1495185308, 1495186061);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text,
  `image` varchar(255) NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `text`, `image`, `display_order`, `ctime`, `mtime`) VALUES
(3, 'Lorem Ipsum 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'tooth', NULL, 1493979210, 1493979210),
(4, 'Lorem Ipsum 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'teeth-protection', NULL, 1493979312, 1493979312),
(5, 'Lorem Ipsum 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'root', NULL, 1493979316, 1493979316),
(6, 'Lorem Ipsum 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'amalgam ', NULL, 1493979320, 1493979320),
(7, 'Lorem Ipsum 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'tooth', NULL, 1493979323, 1493979323),
(8, 'Lorem Ipsum 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ex in nunc tempus gravida condimentum sed lorem.</p>\r\n', 'teeth-protection', NULL, 1493979327, 1493979327);

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
(1, 'address', 'zdravka celara 149'),
(2, 'phone', '065/25551552'),
(3, 'map_coordinates', '44.816638, 20.508325'),
(4, 'skype', '@dkkdsk'),
(5, 'site_email', 'luka.brajkovic.123.14@ict.edu.rs'),
(6, 'copyright_text', 'SiteThis'),
(7, 'site_title', 'Site Title'),
(8, 'site_description', 'Site Description'),
(9, 'site_keywords', 'site keywords'),
(10, 'facebook', 'www.facebook.com'),
(11, 'instagram', 'www.instagram.com'),
(12, 'google', 'www.google.com'),
(21, 'pinterest', 'www.pinterest.com');

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
(4, 2, 'slide-3.jpg', 'Slide 3', '<p>Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3Slide 3</p>\r\n', '///////////////Slide 2', NULL, 1493060196, 1493254093);

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
(1, 'Luka', 'Brajkovic', 'akool@gmail.com', '202cb962ac59075b964b07152d234b70', 'asdasdasd', '011122112', '11000', 'dasdasda', 'srb', '065', '11111111111111111', 1, NULL, NULL),
(6, 'akooll', 'akak', 'akoollcar@gmail.com', 'bec170723ab9c6edef68f03efd40da96', 'sda', 'sda', 'sad', 'das', 'dsa', 'dsa', '127.0.0.1', 1, 1493375174, 1493377772),
(7, 'dasdas', 'dasdas', '', '202cb962ac59075b964b07152d234b70', '', NULL, '', '', '', '', '::1', 0, 1495482881, 1495482881),
(8, 'aaaaaaaaaaa', 'dddddddddddddd', 'kadskdsa@gmail.com', '202cb962ac59075b964b07152d234b70', '', NULL, '', '', '', '', '::1', 0, 1495482954, 1495482954),
(9, 'asdasd', 'asdasd', '1@1', '202cb962ac59075b964b07152d234b70', '', NULL, '', '', '', '', '::1', 0, 1495797365, 1495797365),
(10, '123', '123', '123', '202cb962ac59075b964b07152d234b70', '', NULL, '', '', '', '', '::1', 0, 1495797432, 1495797432);

-- --------------------------------------------------------

--
-- Table structure for table `user_course_answers`
--

CREATE TABLE `user_course_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `course_question_id` int(11) NOT NULL,
  `user_course_attending_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course_answers`
--

INSERT INTO `user_course_answers` (`id`, `user_id`, `course_question_id`, `user_course_attending_id`, `answer`, `is_correct`, `ctime`, `mtime`) VALUES
(35, 1, 2, 15, 'dsadasdas\r\n', 0, 1495790552, 1495790552),
(36, 1, 3, 15, 'asd\n', 0, 1495790552, 1495790552),
(37, 1, 1, 15, '123\n', 0, 1495790552, 1495790552),
(38, 1, 3, 16, 'asd\r\n', 1, 1495797289, 1495797289),
(39, 1, 1, 16, '123\r\n', 1, 1495797289, 1495797289),
(40, 9, 3, 17, 'asd\r\n', 1, 1495797392, 1495797392),
(41, 9, 1, 17, '123\r\n', 1, 1495797392, 1495797392),
(42, 9, 3, 18, 'das\n', 0, 1495797408, 1495797408),
(43, 9, 1, 18, 'dasdadas', 0, 1495797408, 1495797408),
(44, 10, 3, 19, 'das\n', 0, 1495797450, 1495797450),
(45, 10, 1, 19, '123\r\n', 1, 1495797450, 1495797450);

-- --------------------------------------------------------

--
-- Table structure for table `user_course_attending`
--

CREATE TABLE `user_course_attending` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `is_pass` tinyint(1) NOT NULL,
  `number_of_questions` int(11) NOT NULL,
  `number_of_correct_anwers` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `mtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course_attending`
--

INSERT INTO `user_course_attending` (`id`, `user_id`, `course_id`, `is_pass`, `number_of_questions`, `number_of_correct_anwers`, `ctime`, `mtime`) VALUES
(15, 1, 4, 0, 3, 0, 1495790552, 1495790552),
(16, 1, 4, 1, 2, 2, 1495797289, 1495797289),
(17, 9, 4, 1, 2, 2, 1495797392, 1495797392),
(18, 9, 4, 0, 2, 0, 1495797408, 1495797408),
(19, 10, 4, 0, 2, 1, 1495797450, 1495797450);

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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_question`
--
ALTER TABLE `course_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course_question_answer`
--
ALTER TABLE `course_question_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_question_id` (`course_question_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
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
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UX_user_email` (`email`),
  ADD KEY `IX_user_email_pass` (`email`,`password`);

--
-- Indexes for table `user_course_answers`
--
ALTER TABLE `user_course_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_question_id` (`course_question_id`),
  ADD KEY `course_attending_id` (`user_course_attending_id`);

--
-- Indexes for table `user_course_attending`
--
ALTER TABLE `user_course_attending`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_course_id_3` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `blog_article_tag`
--
ALTER TABLE `blog_article_tag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course_question`
--
ALTER TABLE `course_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course_question_answer`
--
ALTER TABLE `course_question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `html_box`
--
ALTER TABLE `html_box`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_course_answers`
--
ALTER TABLE `user_course_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user_course_attending`
--
ALTER TABLE `user_course_attending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
-- Constraints for table `course_question`
--
ALTER TABLE `course_question`
  ADD CONSTRAINT `FK_course_id_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `course_question_answer`
--
ALTER TABLE `course_question_answer`
  ADD CONSTRAINT `FK_course_question_id` FOREIGN KEY (`course_question_id`) REFERENCES `course_question` (`id`);

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `Fk_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `Fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `footer_link`
--
ALTER TABLE `footer_link`
  ADD CONSTRAINT `FK_fl_fg` FOREIGN KEY (`footer_group_id`) REFERENCES `footer_group` (`id`);

--
-- Constraints for table `slider_slide`
--
ALTER TABLE `slider_slide`
  ADD CONSTRAINT `FK_slide_slider` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`);

--
-- Constraints for table `user_course_answers`
--
ALTER TABLE `user_course_answers`
  ADD CONSTRAINT `FK_attending_id` FOREIGN KEY (`user_course_attending_id`) REFERENCES `user_course_attending` (`id`),
  ADD CONSTRAINT `FK_course_question_id_1` FOREIGN KEY (`course_question_id`) REFERENCES `course_question` (`id`),
  ADD CONSTRAINT `FK_user_id_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_course_attending`
--
ALTER TABLE `user_course_attending`
  ADD CONSTRAINT `FK_course_id_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

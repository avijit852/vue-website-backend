-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creativewebdesigndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `askmsg`
--

CREATE TABLE `askmsg` (
  `id` int(11) NOT NULL,
  `askquery_id` int(11) DEFAULT NULL,
  `askmsg_msg` text DEFAULT NULL,
  `askmsg_reply` text DEFAULT NULL,
  `askmsg_isreply` varchar(1) NOT NULL DEFAULT 'N',
  `created_at` datetime NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askmsg`
--

INSERT INTO `askmsg` (`id`, `askquery_id`, `askmsg_msg`, `askmsg_reply`, `askmsg_isreply`, `created_at`, `status`) VALUES
(1, 1, 'There are many people call the developer as a doctor ? ', '', 'N', '2020-06-29 05:36:04', 'Y'),
(2, 1, 'There are many people call the develop', '', 'N', '2020-06-29 05:37:28', 'Y'),
(3, 1, 'nice one think', '', 'N', '2020-06-29 05:38:53', 'Y'),
(4, 2, 'There is some message ', '', 'N', '2020-06-29 05:40:07', 'Y'),
(5, 3, 'This is my some type of demo', '', 'N', '2020-06-29 09:08:11', 'Y'),
(6, 4, 'dvdvdscdsc', '', 'N', '2020-06-29 09:09:40', 'Y'),
(7, 2, 'There is some message ', '', 'N', '2020-06-29 11:19:21', 'Y'),
(8, 4, 'dsfsdfs', '', 'N', '2020-06-29 11:39:45', 'Y'),
(9, 5, 'dfgdg', '', 'N', '2020-06-29 14:17:54', 'Y'),
(10, 6, 'dgddvdv', '', 'N', '2020-06-29 14:27:37', 'Y'),
(11, 7, 'sdgfsdfvzscsdfv xdvdsasZc', '', 'N', '2020-06-29 14:30:39', 'Y'),
(12, 8, 'fbfdvd sdsdds', '', 'N', '2020-06-29 14:31:44', 'Y'),
(13, 9, 'dvzdx  dfbdvsc', '', 'N', '2020-06-29 14:33:09', 'Y'),
(14, 5, 'xcbxc', '', 'N', '2020-06-29 15:15:18', 'Y'),
(15, 5, 'xcbxc', '', 'N', '2020-06-29 15:15:19', 'Y'),
(16, 10, 'This is my day', '', 'N', '2020-06-29 15:18:48', 'Y'),
(17, 5, 'zxvdv', '', 'N', '2020-06-29 15:19:25', 'Y'),
(18, 3, 'zdvxdv', '', 'N', '2020-06-29 15:19:40', 'Y'),
(19, 1, 'i send one projects', '', 'N', '2020-07-01 05:14:18', 'Y'),
(20, 11, 'This is my very first projects', '', 'N', '2020-07-04 15:45:19', 'Y'),
(21, 12, 'demo testing ', '', 'N', '2020-07-05 19:29:35', 'Y'),
(22, 13, 'sdgbskcvshdsguy', '', 'N', '2020-07-08 11:35:13', 'Y'),
(23, 13, 'ahvdjashvdasdsjvdsvdj', '', 'N', '2020-07-08 11:36:26', 'Y'),
(24, 13, 'ahvdjashvdasdsjvdsvdj', '', 'N', '2020-07-08 11:36:26', 'Y'),
(25, 13, 'ahvdjashvdasdsjvdsvdj', '', 'N', '2020-07-08 11:36:27', 'Y'),
(26, 14, 'this is some msg', '', 'N', '2020-07-12 12:14:46', 'Y'),
(27, 14, 'dfgdfvdvdsc', '', 'N', '2020-07-12 12:16:34', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `askquery`
--

CREATE TABLE `askquery` (
  `id` int(11) NOT NULL,
  `askquery_name` varchar(255) DEFAULT NULL,
  `askquery_email` varchar(255) DEFAULT NULL,
  `askquery_phone` varchar(13) DEFAULT NULL,
  `askquery_iscomplete` varchar(1) DEFAULT 'N',
  `created_at` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askquery`
--

INSERT INTO `askquery` (`id`, `askquery_name`, `askquery_email`, `askquery_phone`, `askquery_iscomplete`, `created_at`, `status`) VALUES
(1, 'avijit', 'avijit@gmail.com', '9985788810', 'Y', '2020-06-29 05:36:00', 'Y'),
(2, 'avijit', 'raju@gmail.com', '9985788810', 'Y', '2020-06-29 05:39:00', 'Y'),
(3, 'arun', 'arun@gmail.com', '9874859687', 'Y', '2020-06-29 09:08:00', 'Y'),
(4, 'taruni', 'taruni@gamil.com', '9874859575', 'Y', '2020-06-29 09:09:00', 'Y'),
(5, 'anju', 'ajnu@gmail.com', '9874152634', 'Y', '2020-06-29 14:17:00', 'Y'),
(6, 'demo', 'demo@gmail.com', '9874152634', 'Y', '2020-06-29 14:27:00', 'Y'),
(7, 'testing', 'testing@gmail.com', '9874859678', 'Y', '2020-06-29 14:30:00', 'Y'),
(8, 'raju nath', 'rajusa@gmail.com', '9874859675', 'Y', '2020-06-29 14:31:00', 'Y'),
(9, 'taruna', 'trn@gmail.com', '9874152638', 'Y', '2020-06-29 14:33:00', 'Y'),
(10, 'testing ', 'test@gmail.com', '9874859685', 'Y', '2020-06-29 15:18:00', 'Y'),
(11, 'Avijit Das ', 'avijitd852@gmail.com', '8293918520', 'Y', '2020-07-04 15:45:00', 'Y'),
(12, 'rimpa', 'rimpa@gmail.com', '9874858974', 'Y', '2020-07-05 19:29:00', 'Y'),
(13, 'pritam das', 'pritam@gamil.com', '9889616498', 'Y', '2020-07-08 11:34:00', 'Y'),
(14, 'raju ram', 'rajuraj@gmail.com', '9874857818', 'Y', '2020-07-12 12:14:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogs_slug` varchar(255) DEFAULT NULL,
  `blogs_title` varchar(255) DEFAULT NULL,
  `blogs_date` date DEFAULT NULL,
  `blogs_image` varchar(255) DEFAULT NULL,
  `blogs_short_description` text DEFAULT NULL,
  `blogs_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogs_slug`, `blogs_title`, `blogs_date`, `blogs_image`, `blogs_short_description`, `blogs_description`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 'Lorem412-_*&ipsum412-_*&dolor412-_*&sit412-_*&amet.', 'Lorem ipsum dolor sit amet.', '2020-06-25', '1593190743_30_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</font></span></h6>', '2020-06-26 18:59:00', '2020-06-26 18:59:00', 1, 'N'),
(2, '', 'Lorem ipsum dolor sit amet', '2020-06-29', '1593228248_37_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</font></span></h6>', '2020-06-27 05:24:00', '2020-07-27 17:44:00', 1, 'Y'),
(3, 'Lorem427-_*&ipsum427-_*&dolor427-_*&sit427-_*&amet.', 'Lorem ipsum dolor sit amet.', '2020-06-10', '1593228325_44_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span><br></p>', '2020-06-27 05:25:00', '2020-06-27 05:25:00', 1, 'Y'),
(4, 'Lorem550-_*&ipsum550-_*&dolor550-_*&sit550-_*&amet.', 'Lorem ipsum dolor sit amet.', '2020-06-20', '1593228412_87_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<h6 style=\"text-align: center;\"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</font></span></h6>', '2020-06-27 05:26:00', '2020-06-27 05:26:00', 1, 'Y'),
(5, 'Lorem245-_*&ipsum245-_*&dolor245-_*&sit245-_*&amet.', 'Lorem ipsum dolor sit amet.', '2020-03-11', '1593228473_72_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</font></span></h6>', '2020-06-27 05:27:00', '2020-06-27 05:27:00', 1, 'Y'),
(6, 'Lorem587-_*&ipsum587-_*&dolor587-_*&sit587-_*&amet.', 'Lorem ipsum dolor sit amet.', '2020-05-27', '1593228534_73_video1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</font></span></h6>', '2020-06-27 05:28:00', '2020-06-27 05:28:00', 1, 'Y'),
(7, 'Lorem802-_*&ipsum802-_*&dolor802-_*&sit802-_*&amet,802-_*&consectetur802-_*&adipiscing802-_*&elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2020-06-18', '1593245934_91_blgbigimg.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra. Aenean placerat ligula id odio ornare condimentum. Suspendisse at ultricies diam. Nulla cursus odio tortor, in dignissim arcu suscipit et.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</font></span></h6>', '2020-06-27 10:18:00', '2020-06-27 10:18:00', NULL, 'Y'),
(8, 'Lorem647-_*&ipsum647-_*&dolor647-_*&sit647-_*&amet,647-_*&consectetur647-_*&adipiscing647-_*&elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2020-06-20', '1593246035_70_blgbigimg2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare pulvinar viverra. Aenean placerat ligula id odio ornare condimentum. Suspendisse at ultricies diam. Nulla cursus odio tortor, in dignissim arcu suscipit et.', '<h6 style=\"text-align: center; \"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\"><font face=\"Verdana\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</font></span></h6>', '2020-06-27 10:20:00', '2020-06-27 10:20:00', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` int(11) NOT NULL,
  `cd_name` varchar(150) NOT NULL,
  `cd_email` varchar(150) DEFAULT NULL,
  `cd_phone` varchar(13) DEFAULT NULL,
  `cd_sub` varchar(255) DEFAULT NULL,
  `cd_message` text DEFAULT NULL,
  `cd_reply` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `cd_name`, `cd_email`, `cd_phone`, `cd_sub`, `cd_message`, `cd_reply`, `created_at`, `status`) VALUES
(1, 'Avjit', 'avijitd@gmail.com', '9894848974', 'service', 'This is testinng service', NULL, '2020-07-12 13:35:09', 'Y'),
(2, 'raju nath', 'raju@gmail.com', '9874859675', 'vxvxv', 'vbxvxvvv', NULL, '2020-07-12 13:56:44', 'Y'),
(3, 'debu das', 'dedas@gmail.com', '9941616116', 'demo', 'skdcbksanckjsab', NULL, '2020-07-12 13:57:28', 'Y'),
(4, 'avijit', 'avijitd@gmail.com', '9874859678', 'nothing', 'texting msg', NULL, NULL, 'Y'),
(5, 'Avjit', 'avijitd@gmail.com', '9894848974', 'service', 'This is testinng service', NULL, '2020-07-16 18:28:45', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `metadetails`
--

CREATE TABLE `metadetails` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `page_slug` varchar(150) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `page_slug`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', 'home-page', 'home-page', 'Creative web-development', 'this is meta description for home page', 'Y', '2020-07-14 05:46:59', '2020-07-29 17:31:00'),
(2, 'about', 'about-page', 'about-page', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin purus eros, dictum sit amet nisi gravida, mollis rhoncus ligula. Donec eu arcu ipsum. Sed a magna ut lorem faucibus euismod et sed urna. Maecenas lectus purus, porttitor quis diam sollicitudin, laoreet eleifend magna.', 'Y', '2020-08-04 05:51:17', '2020-08-04 05:51:17'),
(3, 'service', 'service-page', 'service-page', 'service keyword', 'service description', 'Y', '2020-08-04 05:52:22', '2020-08-04 05:52:22'),
(4, 'portfolio', 'portfolio-page', 'portfolio-page', 'portfolio keyword', 'portfolio description', 'Y', '2020-08-04 05:53:06', '2020-08-04 05:53:06'),
(5, 'blogs', 'blogs-page', 'blogs-page', 'blog keyword', 'blog description', 'Y', '2020-08-04 05:53:37', '2020-08-04 05:53:37'),
(6, 'feedback', 'feedback-page', 'feedback-page', 'feedback keyword', 'feedback description', 'Y', '2020-08-04 05:54:13', '2020-08-04 05:54:13'),
(7, 'reach', 'reach992-_*&us-page', 'reach us-page', 'reach us keyword', 'reach us description', 'Y', '2020-08-04 05:55:13', '2020-08-04 05:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `page_details`
--

CREATE TABLE `page_details` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `page_heading` varchar(255) DEFAULT NULL,
  `page_tagline` varchar(255) DEFAULT NULL,
  `page_short_description` text DEFAULT NULL,
  `page_description` text DEFAULT NULL,
  `page_image` varchar(255) DEFAULT NULL,
  `page_banner` varchar(255) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_details`
--

INSERT INTO `page_details` (`id`, `page_id`, `page_heading`, `page_tagline`, `page_short_description`, `page_description`, `page_image`, `page_banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'testing heading', 'testing tagnile', 'Demo short description', 'Demo Description part of home', '1594739757_61_slider3.jpg', '1594739757_29_slider1.jpg', 'Y', '2020-07-14 17:15:57', '2020-07-30 05:58:00'),
(2, 2, 'ABOUT US', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin purus eros, dictum sit amet nisi gravida, mollis rhoncus ligula. Donec eu arcu ipsum. Sed a magna ut lorem faucibus euismod et sed urna.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin purus eros, dictum sit amet nisi gravida, mollis rhoncus ligula. Donec eu arcu ipsum. Sed a magna ut lorem faucibus euismod et sed urna. Maecenas lectus purus, porttitor quis diam sollicitudin, laoreet eleifend magna. Vestibulum rutrum eros non velit efficitur laoreet.\r\n\r\nVivamus pellentesque tincidunt ante. Donec sollicitudin porttitor massa nec accumsan. Duis nec placerat odio, sodales commodo felis. Proin pharetra tempor vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tincidunt augue est, id volutpat quam consectetur sit amet.', '1596513529_95_about.png', '1596513529_37_slider3.jpg', 'Y', '2020-08-04 05:58:49', '2020-08-04 05:58:49'),
(3, 4, 'portfolio', 'portfolio tagline', 'portfolio short desc', 'portfolio description', '1596693315_52_slider4.jpg', '1596693315_24_blgbigimg2.jpg', 'Y', '2020-08-06 07:55:15', '2020-08-06 07:55:15'),
(4, 3, 'service heading', 'service tagline', 'service short description', 'service description', '1596693436_26_slider6.png', '1596693436_30_slider5.jpg', 'Y', '2020-08-06 07:57:16', '2020-08-06 07:57:16'),
(5, 5, 'blogs', 'blogs demo tagline', 'blog demo short desc', 'blog demo description', '1596693494_68_video1.jpg', '1596693494_46_slider3.jpg', 'Y', '2020-08-06 07:58:14', '2020-08-06 07:58:14'),
(6, 6, 'feedback', 'feedback tagline', 'feedback short desc', 'feedback description', '1596693581_17_blgbigimg2.jpg', '1596693581_80_video1.jpg', 'Y', '2020-08-06 07:59:41', '2020-08-06 07:59:41'),
(7, 7, 'contact us', 'contact tagline', 'contact short desc', 'contact description', '1596693638_31_slider5.jpg', '1596693638_83_blgbigimg.jpg', 'Y', '2020-08-06 08:00:38', '2020-08-06 08:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `portfolio_slug` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `portfolio_image` varchar(255) DEFAULT NULL,
  `portfolio_short_description` text DEFAULT NULL,
  `portfolio_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT 'Y',
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_slug`, `portfolio_title`, `portfolio_image`, `portfolio_short_description`, `portfolio_description`, `created_at`, `updated_at`, `status`, `created_by`) VALUES
(1, 'Lorem155-_*&ipsum155-_*&dolor155-_*&sit155-_*&amet', 'Lorem ipsum dolor sit amet', '1593067853_30_abt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia suscipit odio, sit amet pretium dolor lacinia sit amet.', '<h6 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</span></h6>', '2020-06-25 08:50:00', '2020-06-25 08:50:00', 'N', 1),
(2, 'Lorem146-_*&ipsum146-_*&dolor146-_*&sit146-_*&amet', 'Lorem ipsum dolor sit amet', '1593068183_69_abt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia suscipit odio, sit amet pretium dolor lacinia sit amet.', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span><br></p>', '2020-06-25 08:56:00', '2020-06-25 08:56:00', 'Y', 1),
(3, 'Lorem967-_*&ipsum967-_*&dolor967-_*&sit967-_*&amet', 'Lorem ipsum dolor sit amet', '1593068227_36_abt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia suscipit odio, sit amet pretium dolor lacinia sit amet.', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span><br></p>', '2020-06-25 08:57:00', '2020-06-25 08:57:00', 'Y', 1),
(4, 'Lorem204-_*&ipsum204-_*&dolor204-_*&sit204-_*&amet', 'Lorem ipsum dolor sit amet', '1593068271_66_abt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia suscipit odio, sit amet pretium dolor lacinia sit amet.', '<h6><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</span></h6>', '2020-06-25 08:57:00', '2020-06-25 08:57:00', 'Y', 1),
(5, 'Lorem907-_*&ipsum907-_*&dolor907-_*&sit907-_*&amet', 'Lorem ipsum dolor sit amet', '1593970559_21_abt.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<h6><b><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></b></h6>', '2020-07-05 19:35:00', '2020-07-05 19:35:00', 'N', 1),
(6, 'Lorem152-_*&ipsum152-_*&dolor152-_*&sit152-_*&amet', 'Lorem ipsum dolor sit amet', '1593970756_96_abt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia suscipit odio, sit amet pretium dolor lacinia sit amet.', '<p><b><font face=\"Verdana\"><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: justify;\">Lorem Ipsum</span><span style=\"font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></font></b><br></p>', '2020-07-05 19:39:00', '2020-08-04 13:46:00', 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_slug` varchar(255) DEFAULT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `service_short_discription` text DEFAULT NULL,
  `service_description` text DEFAULT NULL,
  `service_image` varchar(255) DEFAULT NULL,
  `service_bg_icon` varchar(255) DEFAULT NULL,
  `service_icon` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT 'Y',
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_slug`, `service_title`, `service_short_discription`, `service_description`, `service_image`, `service_bg_icon`, `service_icon`, `created_at`, `updated_at`, `status`, `created_by`) VALUES
(1, 'Web208-_*&Design', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<h3 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></h3>', '1593019165_88_sri1.png', '1593019165_58_sri1.jpg', '1593019165_52_sri1.png', '2020-06-24 19:19:00', '2020-08-01 15:38:00', 'Y', 1),
(2, 'Online650-_*&Marketing', 'Online Marketing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<h3 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></h3>', '1593019208_64_sri2.png', '1593019208_27_sri2.jpg', '1593019208_49_sri2.png', '2020-06-24 19:20:00', '2020-08-01 08:47:00', 'Y', 1),
(3, 'Web218-_*&&218-_*&Email218-_*&Hosting', 'Web & Email Hosting', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<h3 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></h3>', '1593019239_5_sri3.png', '1593019239_74_sri3.jpg', '1593019239_44_sri3.png', '2020-06-24 19:20:00', '2020-08-01 08:47:00', 'Y', 1),
(4, 'Ecommerce', 'Ecommerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<h3 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></h3>', '1593019271_98_sri4.png', '1593019271_19_sri4.jpg', '1593019271_64_sri4.png', '2020-06-24 19:21:00', '2020-08-01 08:48:00', 'Y', 1),
(5, 'Web293-_*&Design', 'Web Design', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,', '<h3 style=\"text-align: center; \"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></h3>', '1595708656_31_slider5.jpg', '1595525346_77_sri1.jpg', '1595525346_64_sri1.png', '2020-07-23 19:29:00', '2020-08-01 15:50:00', 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_description` text DEFAULT NULL,
  `slider_img` varchar(255) DEFAULT NULL,
  `slider_ulr` varchar(255) DEFAULT NULL,
  `slider_position` int(11) DEFAULT 0 COMMENT 'no any position=0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_description`, `slider_img`, `slider_ulr`, `slider_position`, `created_at`, `updated_at`, `created_by`, `status`) VALUES
(1, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '1596124271_15_slider1.jpg', '', 2, '2020-06-30 18:42:00', '2020-07-30 17:51:00', 1, 'Y'),
(2, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ', '1593535467_73_slider5.jpg', '', 1, '2020-06-30 18:44:00', '2020-06-30 18:44:00', 1, 'Y'),
(3, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1596302778_31_Webapplicationvswebsite.jpg', '', 3, '2020-06-30 18:44:00', '2020-08-01 19:26:00', 1, 'Y'),
(4, 'Where does it come from?', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with demo:', '1594747352_11_slider2.jpg', '', 4, '2020-07-14 19:22:00', '2020-07-30 06:44:00', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `device_id` int(11) DEFAULT NULL,
  `is_admin` varchar(1) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'Y',
  `user_type` varchar(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `googleplus_id` varchar(255) DEFAULT NULL,
  `linkedin_id` varchar(255) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `last_activity_date` date DEFAULT NULL,
  `last_activity_by` int(11) DEFAULT NULL,
  `last_activity` date DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `otp_verification` int(1) NOT NULL DEFAULT 0,
  `is_logged_in` varchar(1) NOT NULL DEFAULT 'N',
  `logged_in_at` datetime DEFAULT NULL,
  `logged_out_at` datetime DEFAULT NULL,
  `warning_level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `email`, `password`, `name`, `device_id`, `is_admin`, `status`, `user_type`, `created_by`, `modified_user_id`, `user_image`, `date_modified`, `date_entered`, `facebook_id`, `googleplus_id`, `linkedin_id`, `deleted`, `last_activity_date`, `last_activity_by`, `last_activity`, `phone`, `otp`, `otp_verification`, `is_logged_in`, `logged_in_at`, `logged_out_at`, `warning_level`) VALUES
(1, NULL, 'admin@gmail.com', 'e1d1cc22ee676416038572d84733e30f66f6f506', 'admin', NULL, 'Y', 'Y', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'N', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `askmsg`
--
ALTER TABLE `askmsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `askquery`
--
ALTER TABLE `askquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metadetails`
--
ALTER TABLE `metadetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_details`
--
ALTER TABLE `page_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `askmsg`
--
ALTER TABLE `askmsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `askquery`
--
ALTER TABLE `askquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `metadetails`
--
ALTER TABLE `metadetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page_details`
--
ALTER TABLE `page_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

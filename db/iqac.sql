-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 10:09 AM
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
-- Database: `iqac`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievments`
--

CREATE TABLE `achievments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `hide_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `hide_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `title`, `image1`, `image2`, `date`, `description`, `quote`, `created_at`, `hide_key`) VALUES
(2, 'sad', 'image/activity/act-3(2)3.jpg', 'image/activity/act-61.jpg', '09/20/2018', 'fdsfadaf', 'fadsfadfa', '18-10-04 11:10:34', 1),
(3, 'fsdf', 'image/activity/act-4.jpg', 'image/activity/act-2.jpg', '10/24/2018', 'fdsfds', 'fsadf', '18-10-04 11:10:53', 1),
(4, 'fdsf', 'image/activity/act-5(2).jpg', 'image/activity/act-6(2).jpg', '10/10/2018', 'fdsf', 'fdsf', '18-10-04 11:10:02', 1),
(5, 'fdsf', 'image/activity/act-32.jpg', 'image/activity/act-6(2)1.jpg', '10/04/2018', '<div class=\"f hJND5c TbwUpd\" xss=removed><cite class=\"iUh30\" xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</cite><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.com/search?ei=6Yu2W4muKpH39QPHu5r4DQ&q=php+month+name+form+database&oq=php+month+name+form+database&gs_l=psy-ab.3...39855.47616.0.47795.29.29.0.0.0.0.155.2762.0j24.25.0..2..0...1.1.64.psy-ab..4.23.2621.6..0j35i39k1j0i67k1j0i131k1j0i131i67k1j0i20i263k1j0i22i30k1j33i22i29i30k1j0i13k1j0i13i30k1j0i8i13i30k1j33i10i21k1.119.ylZeLuFKoSw#\" id=\"am-b1\" aria-label=\"Result options\" aria-expanded=\"false\" aria-haspopup=\"true\" role=\"button\" jsaction=\"m.tdd;keydown:m.hbke;keypress:m.mskpe\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQ7B0wAXoECAgQAg\" xss=removed><span class=\"mn-dwn-arw\" xss=removed></span></a><div class=\"action-menu-panel ab_dropdown\" role=\"menu\" tabindex=\"-1\" jsaction=\"keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQqR8wAXoECAgQAw\" xss=removed><ol xss=removed><li class=\"action-menu-item ab_dropdownitem\" role=\"menuitem\" xss=removed><a class=\"fl\" href=\"https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk?=bd\" ping=\"/url?sa=t&source=web&rct=j&url=https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk&gl=bd&ved=2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQIDABegQICBAE\" xss=removed></a></li></ol></div></div></div><span class=\"st\" xss=removed><span class=\"f\" xss=removed>Aug 17, 2018 - </span>MySQL <span xss=removed>MONTHNAME</span>() returns the full name of the month for a given date. ... MongoDB Quiz; <span xss=removed>Form</span> Template; <span xss=removed>Forms</span> Template; Slides; Slides Presentation ... initial-scale=1\"> &lt;title&gt;example-<span xss=removed>monthname</span>-function - <span xss=removed>php</span> mysql examples ... $<wbr>dbh = new PDO(\"mysql:host=$hostname;dbname=$<span xss=removed>db</span>\", $username, ..</span><div><span class=\"st\" xss=removed><div class=\"f hJND5c TbwUpd\" xss=removed><cite class=\"iUh30\" xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</cite><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.com/search?ei=6Yu2W4muKpH39QPHu5r4DQ&q=php+month+name+form+database&oq=php+month+name+form+database&gs_l=psy-ab.3...39855.47616.0.47795.29.29.0.0.0.0.155.2762.0j24.25.0..2..0...1.1.64.psy-ab..4.23.2621.6..0j35i39k1j0i67k1j0i131k1j0i131i67k1j0i20i263k1j0i22i30k1j33i22i29i30k1j0i13k1j0i13i30k1j0i8i13i30k1j33i10i21k1.119.ylZeLuFKoSw#\" id=\"am-b1\" aria-label=\"Result options\" aria-expanded=\"false\" aria-haspopup=\"true\" role=\"button\" jsaction=\"m.tdd;keydown:m.hbke;keypress:m.mskpe\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQ7B0wAXoECAgQAg\" xss=removed><span class=\"mn-dwn-arw\" xss=removed></span></a><div class=\"action-menu-panel ab_dropdown\" role=\"menu\" tabindex=\"-1\" jsaction=\"keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQqR8wAXoECAgQAw\" xss=removed><ol xss=removed><li class=\"action-menu-item ab_dropdownitem\" role=\"menuitem\" xss=removed><a class=\"fl\" href=\"https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk?=bd\" ping=\"/url?sa=t&source=web&rct=j&url=https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk&gl=bd&ved=2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQIDABegQICBAE\" xss=removed></a></li></ol></div></div></div><span class=\"st\" xss=removed><span class=\"f\" xss=removed>Aug 17, 2018 - </span>MySQL <span xss=removed>MONTHNAME</span>() returns the full name of the month for a given date. ... MongoDB Quiz; <span xss=removed>Form</span> Template; <span xss=removed>Forms</span> Template; Slides; Slides Presentation ... initial-scale=1\"> &lt;title&gt;example-<span xss=removed>monthname</span>-function - <span xss=removed>php</span> mysql examples ... $<wbr>dbh = new PDO(\"mysql:host=$hostname;dbname=$<span xss=removed>db</span>\", $username, ..</span></span></div>', '<div class=\"f hJND5c TbwUpd\" xss=removed><cite class=\"iUh30\" xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</cite><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.', '18-10-05 12:10:56', 1),
(6, 'fdsf', 'image/activity/act-3(2)4.jpg', 'image/activity/act-6(2)2.jpg', '09/20/2018', '<div class=\"f hJND5c TbwUpd\" xss=removed><cite class=\"iUh30\" xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</cite><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.com/search?ei=6Yu2W4muKpH39QPHu5r4DQ&q=php+month+name+form+database&oq=php+month+name+form+database&gs_l=psy-ab.3...39855.47616.0.47795.29.29.0.0.0.0.155.2762.0j24.25.0..2..0...1.1.64.psy-ab..4.23.2621.6..0j35i39k1j0i67k1j0i131k1j0i131i67k1j0i20i263k1j0i22i30k1j33i22i29i30k1j0i13k1j0i13i30k1j0i8i13i30k1j33i10i21k1.119.ylZeLuFKoSw#\" id=\"am-b1\" aria-label=\"Result options\" aria-expanded=\"false\" aria-haspopup=\"true\" role=\"button\" jsaction=\"m.tdd;keydown:m.hbke;keypress:m.mskpe\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQ7B0wAXoECAgQAg\" xss=removed><span class=\"mn-dwn-arw\" xss=removed></span></a><div class=\"action-menu-panel ab_dropdown\" role=\"menu\" tabindex=\"-1\" jsaction=\"keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQqR8wAXoECAgQAw\" xss=removed><ol xss=removed><li class=\"action-menu-item ab_dropdownitem\" role=\"menuitem\" xss=removed><a class=\"fl\" href=\"https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk?=bd\" ping=\"/url?sa=t&source=web&rct=j&url=https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk&gl=bd&ved=2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQIDABegQICBAE\" xss=removed></a></li></ol></div></div></div><span class=\"st\" xss=removed><span class=\"f\" xss=removed>Aug 17, 2018 - </span>MySQL <span xss=removed>MONTHNAME</span>() returns the full name of the month for a given date. ... MongoDB Quiz; <span xss=removed>Form</span> Template; <span xss=removed>Forms</span> Template; Slides; Slides Presentation ... initial-scale=1\"> &lt;title&gt;example-<span xss=removed>monthname</span>-function - <span xss=removed>php</span> mysql examples <span xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</span><div class=\"f hJND5c TbwUpd\" xss=removed><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.com/search?ei=6Yu2W4muKpH39QPHu5r4DQ&q=php+month+name+form+database&oq=php+month+name+form+database&gs_l=psy-ab.3...39855.47616.0.47795.29.29.0.0.0.0.155.2762.0j24.25.0..2..0...1.1.64.psy-ab..4.23.2621.6..0j35i39k1j0i67k1j0i131k1j0i131i67k1j0i20i263k1j0i22i30k1j33i22i29i30k1j0i13k1j0i13i30k1j0i8i13i30k1j33i10i21k1.119.ylZeLuFKoSw#\" id=\"am-b1\" aria-label=\"Result options\" aria-expanded=\"false\" aria-haspopup=\"true\" role=\"button\" jsaction=\"m.tdd;keydown:m.hbke;keypress:m.mskpe\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQ7B0wAXoECAgQAg\" xss=removed><span class=\"mn-dwn-arw\" xss=removed></span></a><div class=\"action-menu-panel ab_dropdown\" role=\"menu\" tabindex=\"-1\" jsaction=\"keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue\" data-ved=\"2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQqR8wAXoECAgQAw\" xss=removed><ol xss=removed><li class=\"action-menu-item ab_dropdownitem\" role=\"menuitem\" xss=removed><a class=\"fl\" href=\"https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk?=bd\" ping=\"/url?sa=t&source=web&rct=j&url=https://webcache.googleusercontent.com/search?q=cache:GDcwQ7OYPKUJ:https://www.w3resource.com/mysql/date-and-time-functions/mysql-monthname-function.php+&cd=2&hl=en&ct=clnk&gl=bd&ved=2ahUKEwiJtb2a4-3dAhWKf30KHZfvCuoQIDABegQICBAE\" xss=removed></a></li></ol></div></div></div><span class=\"st\" xss=removed><span class=\"f\" xss=removed>Aug 17, 2018 - </span>MySQL <span xss=removed>MONTHNAME</span>() returns the full name of the month for a given date. ... MongoDB Quiz; <span xss=removed>Form</span> Template; <span xss=removed>Forms</span> Template; Slides; Slides Presentation ... initial-scale=1\"> &lt;title&gt;example-<span xss=removed>monthname</span>-function - <span xss=removed>php</span> mysql examples ... $<wbr>dbh = new PDO(\"mysql:host=$hostname;dbname=$<span xss=removed>db</span>\", $username, ..</span>... $<wbr>dbh = new PDO(\"mysql:host=$hostname;dbname=$<span xss=removed>db</span>\", $username, ..</span>', '<div class=\"f hJND5c TbwUpd\" xss=removed><cite class=\"iUh30\" xss=removed>https://www.w3resource.com/mysql/date-and-time.../mysql-monthname-function.php</cite><div class=\"action-menu ab_ctl\" xss=removed><a class=\"GHDvEf ab_button\" href=\"https://www.google.', '18-10-05 12:10:16', 1),
(7, 'dsfsad', 'image/activity/act-3(2)5.jpg', 'image/activity/act-6(2)3.jpg', '10/24/2018', 'fsdfd', 'fdsfdfa', '18-10-05 12:10:34', 1),
(8, 'fsdfda', 'image/activity/act-5.jpg', '', '10/10/2018', 'dfadsfds', 'fdsfa', '18-10-05 12:10:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_role`) VALUES
(1, 'saad', '786saadman@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'shihab', 'shihab@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'joshim', 'joshim@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(6, 'amin', 'amin@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `hide_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `title`, `description`, `file`, `created_at`, `hide_key`) VALUES
(1, '', '', '', '18-10-05 01:10:40', 1),
(4, 'dsf', 'fdsf', 'fileChapter-3.pdf', '18-10-05 02:10:21', 0),
(5, 'fds', 'The notice', 'file/Chapter-31.pdf', '18-10-05 02:10:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `hide_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `image`, `description`, `details`, `date`, `created_at`, `hide_key`) VALUES
(2, 'Workshop/training on Business Research Methods: How to write a research proposal', 'image/event/slider-1.jpg', '<span xss=\"removed\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</span>', '', '', '18-10-04 07:10:50', 1),
(3, 'Workshop/training on Business Research Methods: How to write a research proposal', 'image/event/slider-3.jpg', '<span xss=removed>Venue :</span><span xss=removed></span><p xss=removed>Virtual Class-Room, Administrative building (Ground Flore), CoU</p><span xss=removed>Date of Performance:</span><span xss=removed></span><p xss=removed>06/08/ 2018</p><span xss=removed>Chief Guest :</span><p xss=removed>Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p><span xss=removed>Resource Persons :</span><p xss=removed>Prof. Dr. Salleh ABD Rashid , Director for Sustainable leadership Academic Center University Sain, Malayasia<br xss=removed>Prof. Dr. KKDS Ranaweera, Department of Food Science and Technology, University of Sri Jayewardenepura, Nugegoda,Sri Lanka.</p><span xss=removed>Chair :</span><p xss=removed>Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC, Comilla University</p><span xss=removed>Link :</span><a href=\"http://localhost/iqac/main/iqac_final/upcoming-events\" xss=removed>Text goes here</a>', '<span xss=removed>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</span>', '', '18-10-04 07:10:09', 1),
(4, 'ffsdfadsf', 'image/event/slide-21.jpg', 'dfdsfdsf', 'dsfads', '', '18-10-04 07:10:40', 0),
(5, 'fadsfs', 'image/event/slider-31.jpg', 'fdsfa', 'fdafad', '', '18-10-04 07:10:03', 0),
(6, 'Workshop/training on Teaching-Learning and Assessment (Tertiary Pedagogy).', '', '<span xss=removed>Venue :</span><span xss=removed></span><p xss=removed>Virtual Class-Room, Administrative building (Ground Flore), CoU</p><span xss=removed>Date of Performance:</span><span xss=removed></span><p xss=removed>06/08/ 2018</p><span xss=removed>Chief Guest :</span><p xss=removed>Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p><span xss=removed>Resource Persons :</span><p xss=removed>Prof. Dr. Salleh ABD Rashid , Director for Sustainable leadership Academic Center University Sain, Malayasia<br xss=removed>Prof. Dr. KKDS Ranaweera, Department of Food Science and Technology, University of Sri Jayewardenepura, Nugegoda,Sri Lanka.</p><span xss=removed>Chair :</span><p xss=removed>Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC, Comilla University</p>', '<span xss=removed>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante</span>', '', '18-10-04 10:10:06', 1),
(7, 'fadsf', '', 'fdafads', 'fsdf', '', '18-10-04 10:10:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `idn` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `view_key` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`idn`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `view_key`, `id`) VALUES
(0, 'CHANEL IMAN', '786saadman@gmail.com', 'dsf', 'fdsf', 'dsf', '18-10-05 03:10:25', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Virtual workshop', 'This is the virtual workshop', 'image/gallery/slider-2.jpg', '18-10-04 06:10:42', ''),
(2, 'virtual workshop2', 'This is another virtual workshop', 'image/gallery/glry-2.jpg', '18-10-04 04:10:03', ''),
(3, 'Iqac workshop', '<span xss=removed>Nice </span><b><u>workshop </u></b>by iqac', 'image/gallery/glry-3.jpg', '18-10-04 04:10:40', ''),
(4, 'Meeting', 'Meeting with VC sir', 'image/gallery/glry-4.jpg', '18-10-04 04:10:03', ''),
(5, 'good', 'Nice meeting', 'image/gallery/glry-5.jpg', '18-10-04 04:10:22', ''),
(6, 'workshop last', '<span xss=\"removed\">Venue :</span><span xss=\"removed\"></span><p xss=\"removed\">Virtual Class-Room, Administrative building (Ground Flore), CoU</p><span xss=\"removed\">Date of Performance:</span><span xss=\"removed\"></span><p xss=\"removed\">06/08/ 2018</p><span xss=\"removed\">Chief Guest :</span><p xss=\"removed\">Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p><span xss=\"removed\">Chair :</span><p xss=\"removed\">Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC, Comilla University</p>', 'image/gallery/glry-61.jpg', '18-10-04 04:10:57', ''),
(8, 'Workshop on Graphics', '<span xss=\"removed\"><b>Venue :</b></span><span xss=\"removed\"></span><p xss=\"removed\">Virtual Class-Room, Administrative building (Ground Flore), CoU</p><span xss=\"removed\"><b>Date of Performance:</b></span><span xss=\"removed\"></span><p xss=\"removed\">06/08/ 2018</p><span xss=\"removed\">Chief Guest :</span><p xss=\"removed\">Professor Dr. Emran Kabir Chowdhury, Honorable Vice-Chancellor, Comilla University</p><span xss=\"removed\">Chair :</span><p xss=\"removed\">Professor Dr. Mohammad Sayadur Rahaman, Director, IQAC, Comilla University</p>', 'image/gallery/glry-53.jpg', '18-10-04 06:10:33', ''),
(9, 'dfsd', 'dsfdsfsd', 'image/gallery/glry-32.jpg', '18-10-04 06:10:02', '');

-- --------------------------------------------------------

--
-- Table structure for table `resource_person`
--

CREATE TABLE `resource_person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `hide_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_person`
--

INSERT INTO `resource_person` (`id`, `name`, `company`, `quote`, `image`, `created_at`, `hide_key`) VALUES
(1, 'CHANEL IMAN', ' PINTEREST', '<span xss=removed>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</span>', 'image/resource_person/act-1(2)5.jpg', '18-10-05 12:10:37', 1),
(2, 'CHANEL IMAN', ' PINTEREST', '<span xss=removed>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</span>', 'image/resource_person/act-3(2).jpg', '18-10-05 12:10:51', 1),
(3, 'good', 'yes', '', 'image/resource_person/act-1(2)6.jpg', '18-10-05 12:10:16', 1),
(4, 'CHANEL IMAN', ' PINTEREST', '<span xss=removed>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</span>', 'image/resource_person/act-6(2).jpg', '18-10-05 12:10:09', 0),
(5, 'CHANEL IMAN', ' PINTEREST', '<span xss=removed>Uniquely repurpose global web services rather than intermandated core competencies. Competently impact leveraged strategic theme areas without market-driven information.</span>', 'image/resource_person/act-4.jpg', '18-10-05 12:10:20', 0),
(6, 'saad', 'it', 'Initiative and creative. This is perfect.', 'image/resource_person/act-3.jpg', '18-10-05 12:10:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `created_at`) VALUES
(1, 'Workshop on Teaching-Learning and Assessment Techniques', 'image/slider/slider-21.jpg', '18-10-04 06:10:09'),
(2, 'Workshop/training on Survey Methods, Data Entry and Analysis', 'image/slider/slider-1.jpg', '18-10-04 06:10:46'),
(3, 'Workshop/training on Workshop on Data Management and Report Writing and EPR Facing', 'image/slider/slider-3.jpg', '18-10-04 06:10:11'),
(4, 'Workshop/training on Teaching-Learning and Assessment (Tertiary Pedagogy)', 'image/slider/slide-2.jpg', '18-10-04 06:10:30'),
(5, 'Workshop/training on Teaching-Learning and Assessment (Tertiary Pedagogy)', 'image/slider/slide-1.jpg', '18-10-04 06:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievments`
--
ALTER TABLE `achievments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_person`
--
ALTER TABLE `resource_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievments`
--
ALTER TABLE `achievments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resource_person`
--
ALTER TABLE `resource_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 11:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ski_resorts`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficulty`
--

CREATE TABLE `difficulty` (
  `difficulty_id` int(11) NOT NULL,
  `difficulty_level` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `difficulty`
--

INSERT INTO `difficulty` (`difficulty_id`, `difficulty_level`) VALUES
(1, 'green'),
(2, 'blue'),
(3, 'black/blue'),
(4, 'black'),
(5, 'terrain park'),
(6, 'double black');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `hashed_password` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `first_name`, `last_name`, `email`, `state_id`, `hashed_password`, `is_admin`, `date_joined`) VALUES
(1, 'member', 'general', 'member', 'genmember@gmail.com', 27, '$2y$10$5tNaRE7/tj/R7MnfFR5ZAehGnhg3CIbmtumY/mbn5m/XsENvxAPrm', 0),
(2, 'admin', 'admin', 'member', 'adminmember@gmail.com', 27, '$2y$10$3XxHly4RE2XZiDTtGPff.Ow33mgTa3yE7SfZyw0S5hr7jg3qz3quG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `resort_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `caption` varchar(255) DEFAULT NULL,
  `media_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `resort_id`, `member_id`, `date_posted`, `caption`, `media_url`) VALUES
(4, 2, 26, '2023-04-14 17:22:52', 'Sugar Mountain view from top', 'IMG-64398bec34afe4.98953884.jpg'),
(5, 2, 26, '2023-04-14 18:54:39', 'Enjoying the mountain today!', 'IMG-6439a16fb8a594.85543613.jpg'),
(7, 1, 11, '2023-04-26 02:07:30', 'test', 'IMG-64488762cccdf8.11974762.jpg'),
(8, 2, 11, '2023-04-26 02:07:51', 'test', 'IMG-644887778f2562.03871426.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_category`
--

CREATE TABLE `pricing_category` (
  `pricing_category_id` int(11) NOT NULL,
  `pricing_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing_category`
--

INSERT INTO `pricing_category` (`pricing_category_id`, `pricing_category`) VALUES
(1, 'Adult half-day weekday'),
(2, 'Adult half-day weekend'),
(3, 'Adult full-day weekday'),
(4, 'Adult full-day weekend'),
(5, 'Adult night weekday'),
(6, 'Adult night weekend'),
(7, 'Adult special weekday'),
(8, 'Adult special weekend'),
(9, 'Junior half-day weekday'),
(10, 'Junior half-day weekend'),
(11, 'Junior full-day weekday'),
(12, 'Junior full-day weekend'),
(13, 'Junior night weekday'),
(14, 'Junior night weekend'),
(15, 'Junior special weekday'),
(16, 'Junior special weekend'),
(17, 'Adult half-day ski rental weekday'),
(18, 'Adult half-day ski rental weekend'),
(19, 'Adult full-day ski rental weekday'),
(20, 'Adult full-day ski rental weekend'),
(21, 'Adult night ski rental weekday'),
(22, 'Adult night ski rental weekend'),
(23, 'Adult special ski rental price weekday'),
(24, 'Adult special ski rental price weekend'),
(25, 'Junior half-day ski rental weekday'),
(26, 'Junior half-day ski rental weekend'),
(27, 'Junior full-day ski rental weekday'),
(28, 'Junior full-day ski rental weekend'),
(29, 'Junior night ski rental weekday'),
(30, 'Junior night ski rental weekend'),
(31, 'Junior special ski rental weekday'),
(32, 'Junior special ski rental weekend'),
(33, 'Adult half-day snowboard rental weekday'),
(34, 'Adult half-day snowboard rental weekend'),
(35, 'Adult full-day snowboard rental weekday'),
(36, 'Adult full-day snowboard rental weekend'),
(37, 'Adult night snowboard rental weekday'),
(38, 'Adult night snowboard rental weekend'),
(39, 'Adult special snowboard rental price weekday'),
(40, 'Adult special snowboard rental price weekend'),
(41, 'Junior half-day snowboard rental weekday'),
(42, 'Junior half-day snowboard rental weekend'),
(43, 'Junior full-day snowboard rental weekday'),
(44, 'Junior full-day snowboard rental weekend'),
(45, 'Junior night snowboard rental weekday'),
(46, 'Junior night snowboard rental weekend'),
(47, 'Junior special snowboard rental weekday'),
(48, 'Junior special snowboard rental weekend');

-- --------------------------------------------------------

--
-- Table structure for table `resort`
--

CREATE TABLE `resort` (
  `resort_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `resort_name` varchar(25) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip` char(5) DEFAULT NULL,
  `opening_hour_weekday` varchar(7) DEFAULT NULL,
  `closing_hour_weekday` varchar(7) DEFAULT NULL,
  `opening_hour_weekend` varchar(7) DEFAULT NULL,
  `closing_hour_weekend` varchar(7) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `has_lessons` tinyint(1) DEFAULT NULL,
  `trail_number` int(2) NOT NULL,
  `trail_map_url` varchar(255) DEFAULT NULL,
  `half_day_time` varchar(50) DEFAULT NULL,
  `full_day_time` varchar(60) DEFAULT NULL,
  `night_time` varchar(20) DEFAULT NULL,
  `special_time` varchar(130) DEFAULT NULL,
  `junior_age` varchar(20) DEFAULT NULL,
  `adult_age` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resort`
--

INSERT INTO `resort` (`resort_id`, `state_id`, `resort_name`, `address`, `city`, `zip`, `opening_hour_weekday`, `closing_hour_weekday`, `opening_hour_weekend`, `closing_hour_weekend`, `phone`, `description`, `has_lessons`, `trail_number`, `trail_map_url`, `half_day_time`, `full_day_time`, `night_time`, `special_time`, `junior_age`, `adult_age`) VALUES
(1, 27, 'Cataloochie Ski Area', '1080 Ski Lodge Rd', 'Maggie Valley', '28751', '9:00am', '10:00', '8:30am', '10:00pm', '8289260285', 'Cataloochie Ski Area is located in Maggie Valley, North Carolina. There is a total of 18 trails (8 green, 7 blue, 2 black, and 1 terrain park). While there are more options for beginner and intermediate riders, there is something for skiers and snowboarders of all skill levels. We offer narrow and wide trails that twist and turn throughout the mountain.\r\n\r\nSki and snowboard rentals are offered on site. The ski and ride center offers lessons, both private and group lessons. Prices vary for lessons and rentals depending on length of time and lesson type. We offer discounts for groups of 15 riders and more. We do not have snow tubing on site, however Tube World is just at the bottom of the mountain where you can go snow tubing.\r\n\r\nWe offer a cafÃ© and bar onsite in the lodge where you can relax between runs, get a meal or snack and a drink, and spend time with your group. We also have a shop onsite where you can purchase equipment and apparel for your winter activities.', 1, 18, 'https://cataloochee.com/wp-content/uploads/2022/11/2014-15-Trail_Map1-1.jpg', '4 hours', '6 hours', '5:00 - close', 'Upgrade to a night ticket at 5pm for a discounted price', '5 years - 12 years', '13+'),
(2, 27, 'Sugar Mountain Resort', '1009 Sugar Mountain Drive', 'Sugar Mountain', '28604', '9:00am', '10:00pm', '9:00am', '10:00pm', '8288984521', 'Sugar Mountain Ski Resort is located in Sugar Mountain, North Carolina. There is a total of 21 trails (8 green, 7 blue, 1 blue/black,  2 black, 1 double black, and 1 terrain park). The mountain is large and spread out with mostly wide trails and a few narrow trails. \r\nSki and snowboard rentals are offered on site, with many more shops close by that also offer rentals. Lessons are available on site for all ages. You can schedule private or group lessons. We also offer ice skating and snow tubing on site. Snowshoeing tours are available Monday, Wednesday, Friday, and Saturday. Childcare is available for parents who wish to head to the mountain without their children.\r\nThere are several restaurants close by for guests to enjoy and we also offer a cafÃ© on site where you can pick up snacks or meals or just relax and take a break from the mountain. There is a full bar for guests who are 21+ to hang out and relax before, during, or after enjoying the mountain. There is a shop on site for you to purchase souvenirâ€™s and equipment.', 1, 20, 'http://skisugar.com/wp-content/uploads/2022/10/WinterTrailmap2022.jpg', '12:30pm - 4:30 pm', '9:00am - 4:30pm or 12:30pm - 4:30pm and 6:00pm - 10:00pm', '6:00pm - 10:00pm', 'No special time available at this time.', '5 years - 11 years', '12+'),
(3, 27, 'Beech Mountain Resort', '1007 Beech Mountain Pkwy', 'Beech Mountain', '28604', '9:00am', '9:00pm', '9:00am', '10:00pm', '8283872011', 'Beech Mountain Resort is located in Beech Mountain, North Carolina. There is a total of 17 trails (3 green, 6 blue, 4 black, 3 terrain parks). There are a few trails for beginners, but many more for intermediate and advanced riders. The terrain parks are a great place for those riders to learn, practice, and show off tricks.\r\nRentals for skiers and snowboarders are offered on site along with lessons. Lessons are available for all ages and can be either private or with a group. Group rates are offered for groups of 15 or more with a reservation. Snow tubing is offered onsite which is great for those kids who are too small or not interested in skiing or snowboarding on the mountain.\r\nVisit the sky bar at the top of the mountain for a snack or drink and enjoy a beautiful view form 5,506 feet. Other dining options on the mountain include Beech Tree Bar and Grille and View Haus. These are excellent options to take a break from the mountain and indulge in some delicious food before getting back out to the slopes. There are many more dining options that are off site but close by.', 1, 17, 'https://beechmountainresort.b-cdn.net/wp-content/uploads/2022/11/beech-trail-map-22-23.jpg', '9:00am - 1:00pm or 1:00 - 5:00pm', '9:00am - 5:00pm or 1:00pm - close', '5:00pm - close', 'All day 9:00am - close', '5 years - 12 years', '13 years - 64 years'),
(4, 27, 'Appalachian Ski Mtn', '940 Ski Mountain Rd', 'Blowing Rock', '28605', '9:00am', '10:00pm', '9:00am', '12:00am', '8282957828', 'Appalachian Ski MTN is located in Blowing Rock, North Carolina just 15 minutes from Appalachian State University. There is a total of 12 trails (3 green, 3 blue, 3 black, and 3 terrain parks). The mountain is great for skiers and snowboarders of all ages and skill levels as there are a few trails for each level.\r\nSki and snowboard rentals are offered onsite. Clothing for the mountain such as snow bibs, jackets, gloves, and goggles can also be rented onsite. Along with skiing and snowboarding, ice skating is also offered at App Ski MTN. We offer moonlight skating sessions for ice skating on New Yearâ€™s Eve every year. We also offer midnight blast sessions for skiing and snowboarding every Friday and Saturday night and holidays. Lessons are offered to beginner and intermediate riders and can be taken privately or with a group.\r\nThere is one restaurant on site which is open for breakfast, lunch, and dinner. It is a great location to take a break from the slopes and refuel before getting back out there. There are also almost 100 options for dining within 10 minutes of the resort to choose from so there is bound to be something that interests your group.', 1, 12, 'https://appskimtn.com/wp-content/uploads/2023/03/ASM-Trail-Map-2023-web-1313x1536.jpg', '9:00am - 5:00pm', '9:00am - close', '5:00pm - 10:00pm', 'Friday and Saturday nights - midnight blast - 5:00pm - 12:00am. Friday and Saturday nights - half night session - 8:30pm - 12:00am', '6 years - 12 years', '13 years - 59 years'),
(5, 27, 'Wolf Ridge Ski Resort', '578 Valley View Cir', 'Mars Hill', '28754', '9:00am', '10:00pm', '9:00am', '10:00pm', '8286894111', 'Wolf Ridge Ski Resort is located in Mars Hill, North Carolina. About 30 minutes from Asheville. There are a total of 15 trails on the mountain (4 green, 9 blue, and 2 black). Wolf Ridge is a family-oriented resort with trails for riders of all skill levels to enjoy. \r\nSki and snowboard rentals or available onsite along with helmet, snow bib, and locker rentals. Group and private lessons are available for ages 5 and up. Snow tubing is offered close by, but not onsite Wolf Ridge.\r\nThe Lodge Pizzeria is available onsite to take a break from the mountain and get some food and drinks. The pizzeria has many options including salads, wings, burgers, pizzas, and desserts so there is something for everyone.', 1, 15, 'https://skiwolfridgenc.com/wp-content/uploads/2022/04/Trail_Map.jpg', '1:00pm - 4:30pm', '9:00am - 4:30pm or 1:00pm - 10:00pm', '6:00pm - 10:00pm', 'All day 9:00am - 10:00pm', '5 years - 17 years', '18 years - 64 years'),
(7, NULL, 'Other', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resort_pricing`
--

CREATE TABLE `resort_pricing` (
  `pricing_id` int(11) NOT NULL,
  `resort_id` int(11) DEFAULT NULL,
  `pricing_category_id` int(11) DEFAULT NULL,
  `price` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resort_pricing`
--

INSERT INTO `resort_pricing` (`pricing_id`, `resort_id`, `pricing_category_id`, `price`) VALUES
(1, 1, 1, '$39'),
(2, 1, 2, '$64'),
(3, 1, 3, '$49'),
(4, 1, 4, '$79'),
(5, 1, 5, '$37'),
(6, 1, 6, '$44'),
(7, 1, 7, '$14'),
(8, 1, 8, '$19'),
(9, 1, 9, '$28'),
(10, 1, 10, '$51'),
(11, 1, 11, '$39'),
(12, 1, 12, '$59'),
(13, 1, 13, '$27'),
(14, 1, 14, '$37'),
(15, 1, 15, '$14'),
(16, 1, 16, '$19'),
(17, 1, 17, '$37'),
(18, 1, 18, '$37'),
(19, 1, 19, '$37'),
(20, 1, 20, '$37'),
(21, 1, 21, '$37'),
(22, 1, 22, '$37'),
(23, 1, 23, '$37'),
(24, 1, 24, '$37'),
(25, 1, 25, '$31'),
(26, 1, 26, '$31'),
(27, 1, 27, '$31'),
(28, 1, 28, '$31'),
(29, 1, 29, '$31'),
(30, 1, 30, '$31'),
(31, 1, 31, '$31'),
(32, 1, 32, '$31'),
(33, 1, 33, '$37'),
(34, 1, 34, '$37'),
(35, 1, 35, '$37'),
(36, 1, 36, '$37'),
(37, 1, 37, '$37'),
(38, 1, 38, '$37'),
(39, 1, 39, '$37'),
(40, 1, 40, '$37'),
(41, 1, 41, '$31'),
(42, 1, 42, '$31'),
(43, 1, 43, '$31'),
(44, 1, 44, '$31'),
(45, 1, 45, '$31'),
(46, 1, 46, '$31'),
(47, 1, 47, '$31'),
(48, 1, 48, '$31'),
(49, 2, 1, '$40'),
(50, 2, 2, '$66'),
(51, 2, 3, '$50'),
(52, 2, 4, '$84'),
(53, 2, 5, '$34'),
(54, 2, 6, '$46'),
(55, 2, 9, '$28'),
(56, 2, 10, '$47'),
(57, 2, 11, '$40'),
(58, 2, 12, '$59'),
(59, 2, 13, '$28'),
(60, 2, 14, '$38'),
(61, 2, 17, '$25'),
(62, 2, 18, '$34'),
(63, 2, 19, '$30'),
(64, 2, 20, '$40'),
(65, 2, 21, '$25'),
(66, 2, 22, '$34'),
(67, 2, 25, '$17'),
(68, 2, 26, '$26'),
(69, 2, 27, '$22'),
(70, 2, 28, '$30'),
(71, 2, 29, '$17'),
(72, 2, 30, '$26'),
(73, 2, 33, '$34'),
(74, 2, 34, '$38'),
(75, 2, 35, '$46'),
(76, 2, 36, '$52'),
(77, 2, 37, '$34'),
(78, 2, 38, '$38'),
(79, 2, 41, '$34'),
(80, 2, 42, '$38'),
(81, 2, 43, '$46'),
(82, 2, 44, '$52'),
(83, 2, 45, '$34'),
(84, 2, 46, '$38'),
(85, 3, 1, '$38'),
(86, 3, 2, '$60'),
(87, 3, 3, '$48'),
(88, 3, 4, '$79'),
(89, 3, 5, '$33'),
(90, 3, 6, '$45'),
(91, 3, 7, '$60'),
(92, 3, 8, '$91'),
(93, 3, 9, '$28'),
(94, 3, 10, '$47'),
(95, 3, 11, '$38'),
(96, 3, 12, '$59'),
(97, 3, 13, '$26'),
(98, 3, 14, '$37'),
(99, 3, 15, '$48'),
(100, 3, 16, '$71'),
(101, 3, 17, '$29'),
(102, 3, 18, '$29'),
(103, 3, 19, '$35'),
(104, 3, 20, '$35'),
(105, 3, 21, '$29'),
(106, 3, 22, '$29'),
(107, 3, 23, '$35'),
(108, 3, 24, '$35'),
(109, 3, 25, '$23'),
(110, 3, 26, '$23'),
(111, 3, 27, '$29'),
(112, 3, 28, '$29'),
(113, 3, 29, '$23'),
(114, 3, 30, '$23'),
(115, 3, 31, '$29'),
(116, 3, 32, '$29'),
(117, 3, 33, '$29'),
(118, 3, 34, '$29'),
(119, 3, 35, '$35'),
(120, 3, 36, '$35'),
(121, 3, 37, '$29'),
(122, 3, 38, '$29'),
(123, 3, 39, '$35'),
(124, 3, 40, '$35'),
(125, 3, 41, '$23'),
(126, 3, 42, '$23'),
(127, 3, 43, '$29'),
(128, 3, 44, '$29'),
(129, 3, 45, '$23'),
(130, 3, 46, '$23'),
(131, 3, 47, '$29'),
(132, 3, 48, '$29'),
(133, 4, 1, '$46'),
(134, 4, 2, '$71'),
(135, 4, 3, '$54'),
(136, 4, 4, '$79'),
(137, 4, 5, '$31'),
(138, 4, 6, '$41'),
(139, 4, 8, '$31 / $28'),
(140, 4, 9, '$35'),
(141, 4, 10, '$51'),
(142, 4, 11, '$41'),
(143, 4, 12, '$58'),
(144, 4, 13, '$24'),
(145, 4, 14, '$31'),
(146, 4, 16, '$31 / $28'),
(147, 4, 17, '$27'),
(148, 4, 18, '$35'),
(149, 4, 19, '$30'),
(150, 4, 20, '$39'),
(151, 4, 21, '$22'),
(152, 4, 22, '$27'),
(153, 4, 24, '$27 / $24'),
(154, 4, 25, '$19'),
(155, 4, 26, '$26'),
(156, 4, 27, '$22'),
(157, 4, 28, '$29'),
(158, 4, 29, '$16'),
(159, 4, 30, '$21'),
(160, 4, 32, '$21 / $17'),
(161, 4, 33, '$37'),
(162, 4, 34, '$42'),
(163, 4, 35, '$40'),
(164, 4, 36, '$45'),
(165, 4, 37, '$29'),
(166, 4, 38, '$32'),
(167, 4, 40, '$32 / $25'),
(168, 4, 41, '$37'),
(169, 4, 42, '$42'),
(170, 4, 43, '$40'),
(171, 4, 44, '$45'),
(172, 4, 45, '$29'),
(173, 4, 46, '$32'),
(174, 4, 48, '$32 / $25'),
(175, 5, 1, '$37'),
(176, 5, 2, '$62'),
(177, 5, 3, '$47'),
(178, 5, 4, '$76'),
(179, 5, 5, '$35'),
(180, 5, 6, '$42'),
(181, 5, 7, '$57'),
(182, 5, 8, '$92'),
(183, 5, 9, '$27'),
(184, 5, 10, '$47'),
(185, 5, 11, '$37'),
(186, 5, 12, '$56'),
(187, 5, 13, '$25'),
(188, 5, 14, '$35'),
(189, 5, 15, '$47'),
(190, 5, 16, '$72'),
(191, 5, 17, '$34'),
(192, 5, 18, '$34'),
(193, 5, 19, '$34'),
(194, 5, 20, '$34'),
(195, 5, 21, '$34'),
(196, 5, 22, '$34'),
(197, 5, 23, '$34'),
(198, 5, 24, '$34'),
(199, 5, 25, '$34'),
(200, 5, 26, '$34'),
(201, 5, 27, '$34'),
(202, 5, 28, '$34'),
(203, 5, 29, '$34'),
(204, 5, 30, '$34'),
(205, 5, 31, '$34'),
(206, 5, 32, '$34'),
(207, 5, 33, '$36'),
(208, 5, 34, '$36'),
(209, 5, 35, '$36'),
(210, 5, 36, '$36'),
(211, 5, 37, '$36'),
(212, 5, 38, '$36'),
(213, 5, 39, '$36'),
(214, 5, 40, '$36'),
(215, 5, 41, '$36'),
(216, 5, 42, '$36'),
(217, 5, 43, '$36'),
(218, 5, 44, '$36'),
(219, 5, 45, '$36'),
(220, 5, 46, '$36'),
(221, 5, 47, '$36'),
(222, 5, 48, '$36');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `resort_id` int(11) DEFAULT NULL,
  `restaurant_name` varchar(50) DEFAULT NULL,
  `restaurant_type_id` int(11) DEFAULT NULL,
  `restaurant_description` varchar(600) DEFAULT NULL,
  `is_on_site` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_type`
--

CREATE TABLE `restaurant_type` (
  `restaurant_type_id` int(11) NOT NULL,
  `restaurant_type_name` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `resort_id` int(11) DEFAULT NULL,
  `review_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_abbreviation` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_abbreviation`) VALUES
(1, 'AK'),
(2, 'AL'),
(3, 'AR'),
(4, 'AZ'),
(5, 'CA'),
(6, 'CO'),
(7, 'CT'),
(8, 'DE'),
(9, 'FL'),
(10, 'GA'),
(11, 'HI'),
(12, 'IA'),
(13, 'ID'),
(14, 'IL'),
(15, 'IN'),
(16, 'KS'),
(17, 'KY'),
(18, 'LA'),
(19, 'MA'),
(20, 'MD'),
(21, 'ME'),
(22, 'MI'),
(23, 'MN'),
(24, 'MO'),
(25, 'MS'),
(26, 'MT'),
(27, 'NC'),
(28, 'ND'),
(29, 'NE'),
(30, 'NH'),
(31, 'NJ'),
(32, 'NM'),
(33, 'NV'),
(34, 'NY'),
(35, 'OH'),
(36, 'OK'),
(37, 'OR'),
(38, 'PA'),
(39, 'RI'),
(40, 'SC'),
(41, 'SD'),
(42, 'TN'),
(43, 'TX'),
(44, 'UT'),
(45, 'VA'),
(46, 'VT'),
(47, 'WA'),
(48, 'WI'),
(49, 'WV'),
(50, 'WY');

-- --------------------------------------------------------

--
-- Table structure for table `trail`
--

CREATE TABLE `trail` (
  `trail_id` int(11) NOT NULL,
  `resort_id` int(11) DEFAULT NULL,
  `difficulty_id` int(11) DEFAULT NULL,
  `trail_name` varchar(25) DEFAULT NULL,
  `is_open` tinyint(1) DEFAULT NULL,
  `trail_video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trail`
--

INSERT INTO `trail` (`trail_id`, `resort_id`, `difficulty_id`, `trail_name`, `is_open`, `trail_video_url`) VALUES
(1, 1, 1, 'Wolf Creek Hollow', 0, NULL),
(2, 1, 1, 'Beginners Luck', 0, NULL),
(3, 1, 1, 'Over Easy', 0, NULL),
(4, 1, 1, 'Upper Over Easy', 0, NULL),
(5, 1, 1, 'Rabbit Hill', 0, NULL),
(6, 1, 1, 'Easy Way', 0, NULL),
(7, 1, 1, 'Turkey Trot', 0, NULL),
(8, 1, 1, 'Upper Turkey Trot', 0, NULL),
(9, 1, 2, 'Lower Omigosh', 0, NULL),
(10, 1, 2, 'Richards Run', 0, NULL),
(11, 1, 2, 'Short N Sweet', 0, NULL),
(12, 1, 2, 'Wild Cat Glade', 0, NULL),
(13, 1, 2, 'Rock Island Run', 0, NULL),
(14, 1, 2, 'Lower Snowbird', 0, NULL),
(15, 1, 2, 'Upper Snowbird', 0, NULL),
(16, 1, 4, 'Alley Cat', 0, NULL),
(17, 1, 4, 'Upper Omigosh', 0, NULL),
(18, 1, 5, 'Cat Cage Terrain Park', 0, NULL),
(19, 2, 1, 'Ski School Yard', 0, NULL),
(20, 2, 1, 'Magic Carpet Area', 0, NULL),
(21, 2, 1, 'Tiny Tim/Connection', 0, NULL),
(22, 2, 1, 'Little Nell', 0, NULL),
(23, 2, 1, 'Easy Street', 0, NULL),
(24, 2, 1, 'Easy Street Extension', 0, NULL),
(25, 2, 1, 'Crossover', 0, NULL),
(26, 2, 1, 'Lower Flying Mile', 0, NULL),
(27, 2, 2, 'Sugar Bear', 0, NULL),
(28, 2, 2, 'Omas Meadow', 0, NULL),
(29, 2, 2, 'Big Birch', 0, NULL),
(30, 2, 2, 'Sugar Slalom', 0, NULL),
(31, 2, 2, 'Upper Flying Mile', 0, NULL),
(32, 2, 2, 'Switchback', 0, NULL),
(33, 2, 2, 'Northridge', 0, NULL),
(34, 2, 5, 'Terrain Park', 0, NULL),
(35, 2, 3, 'Gunthers Way', 0, NULL),
(36, 2, 4, 'Tom Terrific', 0, NULL),
(37, 2, 4, 'Boulder Dash', 0, NULL),
(38, 2, 6, 'Whoopdedoo', 0, NULL),
(39, 3, 1, 'Carolina Caribbean', 0, NULL),
(40, 3, 1, 'Play Yard', 0, NULL),
(41, 3, 1, 'Freestyle', 0, NULL),
(42, 3, 2, 'West Bowl', 0, NULL),
(43, 3, 2, 'Crossover', 0, NULL),
(44, 3, 2, 'Lower Robins Run', 0, NULL),
(45, 3, 2, 'Upper Robins Run', 0, NULL),
(46, 3, 2, 'Crossway', 0, NULL),
(47, 3, 2, 'Lower Shawneehaw', 0, NULL),
(48, 3, 2, 'Upper Shawneehaw', 0, NULL),
(49, 3, 4, 'Lower White Lightning', 0, NULL),
(50, 3, 4, 'Upper White Lightning', 0, NULL),
(51, 3, 4, 'Lower Southern Star', 0, NULL),
(52, 3, 4, 'Upper Southern Star', 0, NULL),
(53, 3, 5, 'Lower Powder Bowl', 0, NULL),
(54, 3, 5, 'Upper Powder Bowl', 0, NULL),
(55, 3, 5, 'Meadows', 0, NULL),
(56, 4, 1, 'Appaltizer', 0, NULL),
(57, 4, 1, 'Candied Appal', 0, NULL),
(58, 4, 1, 'Averys Appal', 0, NULL),
(59, 4, 2, 'Strudel', 0, NULL),
(60, 4, 2, 'Lower Big Appal', 0, NULL),
(61, 4, 2, 'Orchard Run', 0, NULL),
(62, 4, 4, 'Upper Big Appal', 0, NULL),
(63, 4, 4, 'Thin Slice', 0, NULL),
(64, 4, 4, 'Hard Core', 0, NULL),
(65, 4, 5, 'Appaljack', 0, NULL),
(66, 4, 5, 'Appal Jam', 0, NULL),
(67, 4, 5, 'AppalTop', 0, NULL),
(68, 5, 1, 'Wolf Club', 0, NULL),
(69, 5, 1, 'Goin South', 0, NULL),
(70, 5, 1, 'Broadway', 0, NULL),
(71, 5, 1, 'Eagle', 0, NULL),
(72, 5, 2, 'Lower Streak', 0, NULL),
(73, 5, 2, 'Whistling Dixie', 0, NULL),
(74, 5, 2, 'Powder Hill', 0, NULL),
(75, 5, 2, 'Midway', 0, NULL),
(76, 5, 2, 'View Finder', 0, NULL),
(77, 5, 2, 'Howling', 0, NULL),
(78, 5, 2, 'Timber Wolf', 0, NULL),
(79, 5, 2, 'Way Out', 0, NULL),
(80, 5, 2, 'Side Slip', 0, NULL),
(81, 5, 4, 'Upper Streak', 0, NULL),
(82, 5, 4, 'The Bowl', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`difficulty_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `resort_id` (`resort_id`);

--
-- Indexes for table `pricing_category`
--
ALTER TABLE `pricing_category`
  ADD PRIMARY KEY (`pricing_category_id`);

--
-- Indexes for table `resort`
--
ALTER TABLE `resort`
  ADD PRIMARY KEY (`resort_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `resort_pricing`
--
ALTER TABLE `resort_pricing`
  ADD PRIMARY KEY (`pricing_id`),
  ADD KEY `resort_id` (`resort_id`),
  ADD KEY `pricing_category_id` (`pricing_category_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `resort_id` (`resort_id`),
  ADD KEY `restaurant_type_id` (`restaurant_type_id`);

--
-- Indexes for table `restaurant_type`
--
ALTER TABLE `restaurant_type`
  ADD PRIMARY KEY (`restaurant_type_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `resort_id` (`resort_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `trail`
--
ALTER TABLE `trail`
  ADD PRIMARY KEY (`trail_id`),
  ADD KEY `resort_id` (`resort_id`),
  ADD KEY `difficulty_id` (`difficulty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `difficulty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pricing_category`
--
ALTER TABLE `pricing_category`
  MODIFY `pricing_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `resort`
--
ALTER TABLE `resort`
  MODIFY `resort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resort_pricing`
--
ALTER TABLE `resort_pricing`
  MODIFY `pricing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurant_type`
--
ALTER TABLE `restaurant_type`
  MODIFY `restaurant_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `trail`
--
ALTER TABLE `trail`
  MODIFY `trail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`resort_id`) REFERENCES `resort` (`resort_id`);

--
-- Constraints for table `resort`
--
ALTER TABLE `resort`
  ADD CONSTRAINT `resort_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `resort_pricing`
--
ALTER TABLE `resort_pricing`
  ADD CONSTRAINT `resort_pricing_ibfk_1` FOREIGN KEY (`resort_id`) REFERENCES `resort` (`resort_id`),
  ADD CONSTRAINT `resort_pricing_ibfk_2` FOREIGN KEY (`pricing_category_id`) REFERENCES `pricing_category` (`pricing_category_id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`resort_id`) REFERENCES `resort` (`resort_id`),
  ADD CONSTRAINT `restaurant_ibfk_2` FOREIGN KEY (`restaurant_type_id`) REFERENCES `restaurant_type` (`restaurant_type_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`resort_id`) REFERENCES `resort` (`resort_id`);

--
-- Constraints for table `trail`
--
ALTER TABLE `trail`
  ADD CONSTRAINT `trail_ibfk_1` FOREIGN KEY (`resort_id`) REFERENCES `resort` (`resort_id`),
  ADD CONSTRAINT `trail_ibfk_2` FOREIGN KEY (`difficulty_id`) REFERENCES `difficulty` (`difficulty_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2021 at 08:13 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopkinsvita`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_sellers`
--

CREATE TABLE `best_sellers` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `product_id`) VALUES
(2, 11),
(3, 46),
(4, 32),
(5, 15),
(6, 47);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `description`) VALUES
(1, 'VCLX', 'vclx.png', 'TextEdit is a text editor that comes preinstalled on your Mac.\r\n                    It allows everyone to be able to write documents,\r\n                    similar to Pages or Microsoft Word.\r\n                    TextEdit is a text editor that comes preinstalled on your Mac.\r\n                    It allows everyone to be able to write documents,\r\n                    similar to Pages or Microsoft Word.'),
(2, 'Hopkinsvita', 'hopkinsvita.png', 'TextEdit is a text editor that comes preinstalled on your Mac.\r\n                    It allows everyone to be able to write documents,\r\n                    similar to Pages or Microsoft Word.\r\n                    TextEdit is a text editor that comes preinstalled on your Mac.\r\n                    It allows everyone to be able to write documents,\r\n                    similar to Pages or Microsoft Word.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `cover`) VALUES
(1, 'Vitamins', 'Vitamins Allow Your Body to Grow and Develop. They Also Play Important Roles in Bodily Functions Such as Metabolism, Immunity and Digestion. The Best Way to Meet Your Vitamin Needs is to Eat a Balanced Diet Containing a Variety of Foods. If You Can\'t Meet Your Needs through Food Alone, You May Require Dietary Supplements.', 'c8.jpg'),
(2, 'Diet', 'Healthy Eating Has Many Advantages for a Healthy Life and a Life Free of Diseases. Combining a Balanced Diet with Physical Activity Will Help Further in Maintaining a Healthy Lifestyle. Exercise Daily, Eat the Right Kinds of Food, Stay Clean, and You Will Feel Good Automatically.', 'c1.jpg'),
(3, 'Oils', 'Natural Oils Are Characterized by The Fact That They Do Not Contain Chemicals, Also That It Has a Role in Maintaining the Beauty and Health of the Body. It is Used to Treat Skin, Scalp and Hair Problems and to Improve Nails and Dry skin.', 'c2.jpg'),
(4, 'Natural Flora', 'Probiotics are Nutritional Supplements of Living Bacteria or Yeasts, Believed to Be Healthy for the Human Body. These Treatments Are Always Recommended by Some Physicians and Are Often Recommended by Dietitians after Taking a Course of Antibiotic Therapy.', 'c5.jpg'),
(5, 'Anti-oxidants', 'The Importance of Anti-Oxidants for Your Body is Based on Its Active Role in Strengthening the Immune System, Which Reduces the Risk of Diseases and Enhancing the Body’s Ability to Fight Them. \r\nIn Addition to the Positive Changes It Causes in Age - Related Blood Vessels. And The Elderly Who Are Taking It Reduce Their Aging Symptoms by an Equivalent of 15 to 20 years within 6 Weeks.', 'c6.jpg'),
(6, 'Minerals', 'Just like vitamins, Minerals Help Your Body Grow, Develop and Stay Healthy. Minerals Perform Various Vital operations, Including Keeping Your Bones, Muscles, Heart and Brain. Daily Intakes of Several Minerals Are Necessary for The Continued Basic Functioning of the Human Body.', 'c9.jpg'),
(7, 'Tonics', 'Many Studies Have Confirmed That Food Directly Affects an Individual’s sexual Health. In Fact, Promoting the Sexual Desire Isn’t Difficult but All It Takes is to Include Some Foods in Your Diet and The Use of Some Natural Sexual Tonics. The Principle of the Functioning of These Drugs is to Expand the Blood Vessels, Which Facilitates Erection and Solves the Problems of Impotence.', 'c3.jpg'),
(8, 'Baby Foods', 'Children Grow Rapidly and Move from One Stage to Another, Especially When They Begin to Active, Move and Learn. So, Parents Should Pay Attention to The Best Healthy Foods for Them and Choose the Most Useful and Rich Food Products with All the Nutritional Values.', 'c7.jpg'),
(9, 'Cereals', 'Cereal Is a Delicious Way to Get Your Kid Breakfast. Just Pour the Cereal, Add Milk and Your Kid Favorite Fresh Fruit, and There He/She Will Have the Healthiest Breakfast Rich in the Nutritional Values He/she Needs to Complete the Day Actively and Joyfully.', 'c4.jpg'),
(10, 'Vitamin Water', 'Stay hydrated while you enhance your water drinking experience with the vitamins and electrolytes in the many flavors of vitamin water.', 'Vitamin Water.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `component` varchar(191) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `daily_value` varchar(50) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `component`, `amount`, `daily_value`, `product_id`) VALUES
(1, 'Vitamin C (Ascorbic Acid)', '150 mg', '250%', 81),
(2, 'Thiamine (as Thiamine HCl)', '100 mg', '6,666%', 81),
(3, 'Riboflavin', '20 mg', '1,176%', 81),
(4, 'Niacin', '25 mg', '125%', 81),
(5, 'Vitamin B6 (as Pyridoxine HCl)', '0.4 mg', '20%', 81),
(6, 'Vitamin B12 (as Cyanocobalamin)', '15 mcg', '250%', 81),
(7, 'Biotin', '30 mcg', '10%', 81),
(8, 'Pantothenic Acid (as Calcium-D-Pantothenate)', '5.5 mg', '55%', 81),
(9, 'Vitamin B12 (as Cyanocobalamin)', '1000 mcg', '16,667%', 77),
(10, 'Stevia Leaf Extract', '1.2 mg', NULL, 77),
(11, 'Vitamin D (as Cholecal ciferol)', '800 IU', 'Value', 78),
(12, 'Calcium (as Calcium Carbonate)', '600 mg', '60%', 78),
(13, 'Vitamina A', '1500mcg', '167%', 9),
(14, 'Vitamina D', '400 IU/ 10 mcg', '50%', 9),
(15, 'Vitamina A', '1500mcg', '167%', 8),
(16, 'Vitamina D', '400 IU/ 10 mcg', '50%', 8),
(17, 'Vitamin E', '267mg', '1780%', 10),
(18, 'biotin', '5000mcg', '1667%', 21),
(19, 'calcium', '113 mg', '11%', 21),
(20, 'Vitamin E', '10 IU', '33%', 30),
(21, 'natural coenzyme Q10', '125 mg', '*', 30),
(22, 'Vitamina C', '1000 mg', '1660%', 76),
(23, 'calcium', '120 mg', '12 %', 76),
(24, 'Calories', '17g', NULL, 119),
(25, 'Total carbohydrate', '4 g', '1%', 119),
(26, 'sugars', '4 g', NULL, 119),
(27, 'Folic Acid', '800 mcg', '200%', 119),
(28, 'Calories', '10', '1%', 2),
(29, 'Total Fat', '1g', '2%', 2),
(30, 'cholestrol', '0mg', NULL, 2),
(31, 'Fish Oil', '1000 mg', '**', 2),
(32, 'Total Omega-3 Fatty Acids', '300mg', '**', 2),
(33, 'Calories', '15', NULL, 4),
(34, 'Total Fat', '1.5 g', '2%', 4),
(35, 'saturated Fat', '0.5 g', '3%', 4),
(36, 'cholestrol', '10 mg', '3%', 4),
(37, 'Fish Oil', '1200 mg', '***', 4),
(38, 'Calories', '15', NULL, 3),
(39, 'Total Fat', '1.5 g', '3%', 3),
(40, 'saturated Fat', '0.5 g', '3%', 3),
(41, 'cholestrol', '10 mg', '3%', 3),
(42, 'Fish Oil', '1.2 g', '***', 3),
(43, 'Calories', '15', NULL, 6),
(44, 'cholestrol', '10 mg', '3%', 6),
(45, 'Fish Oil', '1.2 g', '***', 6),
(46, 'saturated Fat', '0.5 g', '3%', 6),
(47, 'Total Fat', '1.5 g', '3%', 6),
(48, 'Calories', '15', NULL, 7),
(49, 'cholestrol', '10 mg', '3%', 7),
(50, 'Fish Oil', '1.2 g', '***', 7),
(51, 'saturated Fat', '0.5 g', '3%', 7),
(52, 'Total Fat', '1.5 g', '3%', 7),
(53, 'Calories', '15', NULL, 5),
(54, 'Total Fat', '1.5 g', '3%', 5),
(55, 'cholestrol', '10 mg', '3%', 5),
(56, 'Fish Oil', '1.2 g', '***', 5),
(57, 'saturated Fat', '0.5 g', '3%', 5),
(58, 'Calories', '10', NULL, 17),
(59, 'Total Fat', '1 g', '2%', 17),
(61, 'polyunsaturated', '0.5 g', NULL, 17),
(62, 'Vitamin E', '1 IU', '2%', 17),
(63, 'Organic flaxseed oil', '1000 mg', '*', 17),
(64, 'omega-3', '500 mg', NULL, 17),
(65, 'Lineolic Acid', '120 mg', '*', 17),
(66, 'oliec Acid', '120 mg', '*', 17),
(67, 'Antarctic Krill oil', '1500 mg', '**', 23),
(68, 'DHA', '135 mg', '**', 23),
(69, 'EPA', '225 MG', '**', 23),
(70, 'Phospholipids', '630 mg', '**', 23),
(71, 'Astaxanthin', '2000 mcg', '**', 23),
(72, 'Antarctic Krill oil', '1500 mg', '**', 24),
(73, 'Astaxanthin', '2000 mcg', '**', 24),
(74, 'DHA', '135 mg', '**', 24),
(75, 'EPA', '225 mg', '**', 24),
(76, 'Phospholipids', '630 mg', '**', 24),
(77, 'Antarctic Krill oil', '1500 mg', '**', 22),
(78, 'Astaxanthin', '2000 mcg', '**', 22),
(79, 'DHA', '135 mg', '**', 22),
(80, 'EPA', '225 mg', '**', 22),
(81, 'Phospholipids', '630 mg', '**', 22),
(82, 'Calories', '10', NULL, 29),
(83, 'Total Fat', '1 g', '2%', 29),
(84, 'Calories', '20', NULL, 35),
(85, 'Total Fat', '2 g', '3%', 35),
(86, 'saturated Fat', '0.5 g', '3%', 35),
(87, 'polyunsaturated', '0.5 g', '**', 35),
(88, 'cholestrol', '15 mg', '5 %', 35),
(89, '100% Natural salamon', '2000 mg', '**', 35),
(90, 'omega-3 Fatty Acids', '600 mg', '**', 35),
(91, 'DHA', '220 mg', '**', 35),
(92, 'EPA', '180 mg', '**', 35),
(93, '100% Natural salamon', '2000 mg', '**', 36),
(94, 'Calories', '20', NULL, 36),
(95, 'cholestrol', '15 mg', '5 %', 36),
(96, 'DHA', '220 mg', '**', 36),
(97, 'EPA', '180 mg', '**', 36),
(98, 'omega-3 Fatty Acids', '600 mg', '**', 36),
(99, 'polyunsaturated', '0.5 g', '**', 36),
(100, 'saturated Fat', '0.5 g', '3%', 36),
(101, 'Total Fat', '2 g', '3%', 36),
(102, 'Total Fat', '2 g', '3%', 63),
(103, 'Calories', '20', NULL, 63),
(104, 'saturated Fat', '0.5 g', '3%', 63),
(105, 'Monounsaturated', '0.5 g', '*', 63),
(106, 'polyunsaturated', '1 g', '*', 63),
(107, 'protein', '1 g', '2%', 63),
(108, 'pumpkin seed oil', '2 g', '*', 63),
(109, 'Calories', '20', NULL, 62),
(110, 'Monounsaturated', '0.5 g', '*', 62),
(111, 'polyunsaturated', '1 g', '*', 62),
(112, 'protein', '1 g', '2%', 62),
(113, 'pumpkin seed oil', '2 g', '*', 62),
(114, 'Calories', '10', NULL, 75),
(115, 'Total Fat', '1 g', '2%', 75),
(116, 'saturated Fat', '1 g', '4%', 75),
(117, 'trans fat', '0 g', '*', 75),
(118, 'Calories', '10', NULL, 74),
(119, 'saturated Fat', '1 g', '4%', 74),
(120, 'Total Fat', '1 g', '2%', 74),
(121, 'trans fat', '0 g', '*', 74),
(122, 'magnesium', '400 mg', '100 %', 18),
(123, 'Total carbohydrate', '1 g', '1%', 18),
(124, 'Dietary Fiber', '1 g', '4%', 18),
(125, 'calcium', '200 mg', '15%', 79),
(126, 'Iodine', '150mcg', '100 %', 79),
(127, 'magnesium', '200 mg', '48%', 79),
(128, 'Zinc', '20 mg', '182%', 79),
(129, 'selenium', '150 mcg', '273%', 79),
(130, 'Copper', '2 mg', '222%', 79),
(131, 'manganese', '2 mg', '87%', 79),
(132, 'Chromium', '200 mcg', '571%', 79),
(133, 'Potassium', '150 mg', '3%', 79),
(134, 'Boron', '2 mg', '*', 79),
(135, 'Vitamina A', '2500 IU', '50%', 80),
(136, 'Vitamin C', '75 mg', '125%', 80),
(137, 'Vitamin D3', '200 IU', '50%', 80),
(138, 'Vitamin E', '35 IU', '117%', 80),
(139, 'Folic Acid', '400 mcg', '100 %', 80),
(140, 'calcium', '700 mg', '70%', 80),
(141, 'Iodine', '150 mcg', '100 %', 80),
(142, 'magnesium', '350 mg', '88%', 80),
(143, 'Zinc', '15 mg', '100 %', 80),
(144, 'Copper', '1 mg', '100 %', 80),
(145, 'manganese', '2 mg', '100 %', 80),
(146, 'Boron', '3 mg', '*', 80),
(147, 'Chromium', '100 mcg', '83%', 80),
(148, 'Total Bifido Probiotic Culture', '9 biliions', '***', 19),
(149, 'Total Lacto Probiotic Cultures', '6 billions', '***', 19),
(150, 'Total Bifido/Lacto Culture', '15 billions', '***', 19),
(151, 'Total Bifido Probiotic Culture', '9 biliions', '**', 20),
(152, 'Total Lacto Probiotic Cultures', '6 billions', '***', 20),
(153, 'Total Bifido/Lacto Culture', '15 billions', '***', 20),
(154, 'propriety Blend', '750 mg', '*', 12),
(155, 'BioPerine Black Pepper Extract', '5 mg', '*', 12),
(156, 'propriety Blend', '750 mg', '*', 13),
(157, 'BioPerine Black Pepper Extract', '5 mg', '*', 13),
(158, 'propriety Blend', '750 mg', '*', 11),
(159, 'BioPerine Black Pepper Extract', '5 mg', '*', 11),
(160, 'Turmeric', '600 mg', '*', 15),
(161, 'Curcuminoids', '50 mg', '**', 15),
(162, 'BioPerine', '5 mg', '**', 15),
(163, 'Turmeric', '600 mg', '**', 16),
(164, 'Curcuminoids', '50 mg', '**', 16),
(165, 'BioPerine', '5 mg', '**', 16),
(166, 'Turmeric', '600 mg', '**', 14),
(167, 'Curcuminoids', '50 mg', '**', 14),
(168, 'BioPerine', '5 mg', '**', 14),
(169, 'Vitamin A', '195 IU', '4%', 31),
(170, 'Vitamin E', '30 IU', '100 %', 31),
(171, 'AstaPure Astaxanthin', '12 mg', '*', 31),
(172, 'Lutein', '249 mcg', '*', 31),
(173, 'Natural Astaxanthin', '10 mg', '*', 33),
(174, 'Calories', '5', NULL, 33),
(175, 'Natural Astaxanthin', '10 mg', '**', 32),
(176, 'Calories', '5', NULL, 32),
(177, 'Biotina (ca D-biotina)', '600 mcg', '2000 %', 37),
(178, 'Acid alfa-lipoic (Acid tioctic)', '600 mg', '*', 37),
(179, 'Vitamin E', '100 IU', '333%', 38),
(180, 'Vitamin B-6', '10 mg', '500%', 38),
(181, 'Folic Acid', '400 mcg', '100 %', 38),
(182, 'Vitamin B-12', '400 mcg', '6.667%', 38),
(183, 'Chromium', '200 mcg', '167%', 38),
(184, 'Acetyl-L-Carnitine', '600 mg', '*', 38),
(185, 'Phosphatidylserine', '300mg', '*', 38),
(186, 'phosphatidylcholine', '250 mg', '*', 38),
(187, 'Rhodiola', '200 mg', '*', 38),
(189, 'Alpha Lipoic Acid', '60 mg', '*', 38),
(190, 'Total Fat', '1 g', '2%', 38),
(191, 'Phytoceramides', '350 mg', '*', 58),
(192, 'Vitamin A', '5000 IU', '100 %', 58),
(193, 'Vitamin C', '60 mg', '100 %', 58),
(194, 'Vitamina D', '400 IU', '100 %', 58),
(195, 'Vitamin E', '30 IU', '100 %', 58),
(196, 'Phytoceramides', '350 mg', '*', 59),
(197, 'Vitamin A', '5000 IU', '100 %', 59),
(198, 'Vitamin C', '60 mg', '100 %', 59),
(199, 'Vitamina D', '400 IU', '100 %', 59),
(200, 'Vitamin E', '30 IU', '100 %', 59),
(201, 'Total Fat', '1.5 g', '2%', 34),
(202, 'cholestrol', '10 mg', '3%', 34),
(203, 'Sodium', '0 mg', '0%', 34),
(204, 'Total carbohydrate', '0 g', '0%', 34),
(205, 'protein', '7 g', '14 %', 34),
(206, 'Total carbohydrate', '1 g', '<1%', 47),
(207, 'Panax Ginseng', '1000 mg', '*', 47),
(208, 'Total carbohydrate', '1 g', '<1%', 46),
(209, 'Penax Ginseng', '1000 mg', '*', 46),
(210, 'Calories', '10', NULL, 52),
(211, 'Total Fat', '1 g', '2%', 52),
(212, 'cholestrol', '5 mg', '2%', 52),
(213, 'Vitamina D', '500 IU', '125%', 52),
(214, 'Krill and Fish oil omega-3 Blend', '1000 mg', NULL, 52),
(215, 'omega-3 Fatty Acids', '420 mg', '*', 52),
(216, 'EPA', '210 mg', '*', 52),
(217, 'DHA', '130 mg', '*', 52),
(218, 'Other omega-3 Fatty Acids', '80 mg', '*', 52),
(219, 'Total phospholipids', '200 mg', '*', 52),
(220, 'Natural Astaxanthin', '500 mcg', '*', 52),
(221, 'Total carbohydrate', '1 g', '0%*', 53),
(222, 'Total sugars', '1 g', '*', 53),
(223, 'Maca', '500 mg', '*', 53),
(224, 'Niacin', '50 mg', '250%', 54),
(225, 'Zinc', '26 mg', '173%', 54),
(226, 'Maca', '333 mg', NULL, 54),
(227, 'Catuaba', '83 mg', '*', 54),
(228, 'calcium', '80 mg', '6%', 55),
(229, 'Melatonin', '5 mg', '*', 55),
(230, 'Moringa', '600 mg', '*', 56),
(231, 'Total Fat', '0g', '0%', 57),
(232, 'cholestrol', '0 mg', '0%', 57),
(233, 'Total carbohydrate', '5 g', '2%', 57),
(234, 'Dietary Fiber', '2 g', '8%', 57),
(235, 'Total sugars', '4 g', NULL, 57),
(236, 'protein', '1 g', '*', 57),
(237, 'Vitamina D', '0 mcg', '0%', 57),
(238, 'calcium', '40 mg', '4%', 57),
(239, 'Iron', '0.4 mg', '2%', 57),
(240, 'Potassium', '130 mg', '2%', 57),
(241, 'Saffron Extract', '88.5 mg', '**', 61),
(242, 'White Mulberry Extract', '500 mg', '**', 68),
(243, 'propriety Formula', '1340 mg', '*', 28),
(244, 'propriety Formula', '1340 mg', '*', 27),
(245, 'Forskolin', '250 mg', '*', 42),
(246, 'Forskolin', '250 mg', '*', 43),
(247, 'Forskolin', '250 mg', '*', 40),
(248, 'Forskolin', '250 mg', '*', 41),
(249, 'Green Coffee', '800 mg', '**', 45),
(250, 'ChloroGenic Acids', '400 mg', NULL, 45),
(251, 'ChloroGenic Acids', '400 mg', NULL, 44),
(252, 'Green Coffee', '800 mg', '**', 44),
(253, 'Chromium', '100 mcg', '286%', 50),
(254, 'Garcinia Cambogia', '800 mg', '**', 50),
(255, 'Chromium', '100 mcg', '286%', 51),
(256, 'Garcinia Cambogia', '800 mg', '**', 51),
(257, 'Chromium', '100 mcg', '286%', 48),
(258, 'Garcinia Cambogia', '800 mg', '**', 48),
(259, 'Chromium', '100 mcg', '286%', 49),
(260, 'Garcinia Cambogia', '800 mg', '**', 49),
(261, 'Calories', '10', NULL, 60),
(262, 'Total carbohydrate', '<1g', '<1%', 60),
(263, 'protein', '2 g', '4%', 60),
(264, 'Organic spiruling', '3000 mg', '*', 60),
(265, 'Raspberry Ketone', '500 mg', '*', 65),
(266, 'Raspberry Ketone', '500 mg', '*', 64),
(267, 'Raspberry Ketone', '500 mg', '**', 66),
(268, 'African Mango', '300 mg', '**', 66),
(269, 'propriety Formula', '400 mg', '**', 66),
(270, 'White Kidney Bean', '500 mg', '*', 67),
(271, 'Calories', '15', NULL, 69),
(272, 'Total Fat', '1.5 g', '*', 69),
(273, 'CLA', '1250 mg', '*', 69),
(274, 'Calories', '15', NULL, 70),
(275, 'CLA', '1250 mg', '*', 70),
(276, 'Total Fat', '1.5 g', '*', 70),
(277, 'Non -GMO safflower oil', '1500 mg', '**', 72),
(278, 'Non -GMO safflower oil', '1500 mg', '**', 71),
(279, 'Chlorella 600mg', '1200 mg', '**', 73),
(280, 'propriety Formula', '1600 mg', '**', 26),
(281, 'propriety Formula', '1600 mg', '**', 25);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL,
  `big_image` varchar(50) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `has_details` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `description`, `image`, `big_image`, `brand_id`, `category_id`, `has_details`) VALUES
(2, 'Fish Oil Omega 3 1000mg 18/12, 60 ct', 'HVFO264', '1000mg/serving, 500mg/capsule, 360/240, softgels, 60-count, 200cc - white bottle', 'HVFO264.png', 'HVFO264_big.png', 1, 3, 1),
(3, 'Fish Oil Omega 3 1200mg 40/20, 60 ct', 'HVFO265', '2400mg, 800/400, Lemon flavor, softgels, 60-count, 200cc - white bottle', 'HVFO265.png', 'HVFO265_big.png', 1, 3, 1),
(4, 'Fish Oil Omega 3 1200mg 40/20, 180 ct', 'HVFO266', '2400mg, 800/400, Lemon flavor, softgels, 180-count, 500cc - white bottle', 'HVFO266.png', 'HVFO266_big.png', 1, 3, 1),
(5, 'Fish Oil Omega 3 1250mg 40/30, 60 ct', 'HVFO267', '400/300 1250mg/capsule, 800/600, 2500mg/serving, softgel, 60-count, 200cc white bottle', 'HVFO267.png', 'HVFO267_big.png', 1, 3, 1),
(6, 'Fish Oil Omega 3 1250mg 40/30, 120 ct', 'HVFO268', 'Omega-3 1200 mg 40/20, lemon flavor, softgels, 120-count, 400cc white bottle', 'HVFO268.png', 'HVFO268_big.png', 1, 3, 1),
(7, 'Fish Oil Omega 3 1250mg 40/30, 180 ct', 'HVFO269', '400/300 1250mg/capsule, softgel, 180-count, 500cc light amber bottle (black cap)', 'HVFO269.png', 'HVFO269_big.png', 1, 3, 1),
(8, 'Vitamin D3 5000 IU Softgel, 60 ct', 'HVVD825', '5000IU/serving, 5000IU/capsule, softgels, 60-count, 200cc white bottle', 'HVVD825.png', 'HVVD825_big.png', 1, 1, 1),
(9, 'Vitamin D3 5000 IU Softgel, 180 ct', 'HVVD826', '5000IU/serving, 5000IU/capsule, softgels, 180-count, 400cc white bottle', 'HVVD826.png', 'HVVD826_big.png', 1, 1, 1),
(10, 'Vitamin E 400 IU Softgel, 60 ct', 'HVVE654', '400IU/serving, 400IU/capsule, softgel, 60-count, 200cc white bottle', 'HVVE654.png', 'HVVE654_big.png', 1, 1, 1),
(11, 'Turmeric 750mg w/2.5mg BioPerine, 60 ct', 'HVVT589', '750mg Turmeric, 2.5mg Bioperine, veggie caps, 60-count, 200cc white bottle', 'HVVT589.png', 'HVVT589_big.png', 1, 5, 1),
(12, 'Turmeric 750mg w/2.5mg BioPerine, 120 ct', 'HVVT590', '750mg Turmeric, 2.5mg BioPerine, veggie caps, 120-count, 250cc white bottle', 'HVVT590.png', 'HVVT590_big.png', 1, 5, 1),
(13, 'Turmeric 750mg w/2.5mg BioPerine, 180 ct', 'HVVT591', '750mg Turmeric, 2.5mg Bioperine, veggie caps, 180-count,  400cc white bottle', 'HVVT591.png', 'HVVT591_big.png', 1, 5, 1),
(14, 'Turmeric 600mg w/2.5mg BioPerine, 60 ct', 'HVVT592', '600mg Turmeric, 2.5mg Bioperine, veggie caps, 60-count, 200cc white bottle', 'HVVT592.png', 'HVVT592_big.png', 1, 5, 1),
(15, 'Turmeric 600mg w/2.5mg BioPerine, 120 ct', 'HVVT593', '600mg Turmeric, 2.5mg Bioperine, veggie caps, 120-count, 250cc white bottle', 'HVVT593.png', 'HVVT593_big.png', 1, 5, 1),
(16, 'Turmeric 600mg w/2.5mg BioPerine, 180 ct', 'HVVT594', '600mg Turmeric, 2.5mg Bioperine, veggie caps, 180-count, 400cc white bottle', 'HVVT594.png', 'HVVT594_big.png', 1, 5, 1),
(17, 'Flaxseed Oil 1000mg, 60 ct', 'HVFO753', '1000mg/serving, 1000mg/capsule, softgels, 60-count, 200cc white bottle', 'HVFO753.png', 'HVFO753_big.png', 1, 3, 1),
(18, 'Magnesium Glycerinate, 180 ct', 'HVVM111', '200mg/tablet, 400mg/serving, tablet, 180-count, 500cc white bottle', 'HVVM111.png', 'HVVM111_big.png', 1, 6, 0),
(19, 'Probiotics 15 Billion, 60 ct', 'HVVP123', '15 billion, veggie caps, 60-count, 200cc white bottle', 'HVVP123.png', 'HVVP123_big.png', 1, 4, 1),
(20, 'Probiotics 15 Billion, 90 ct', 'HVVP124', '15 billion, veggie caps, 90-count, 200cc white bottle', 'HVVP124.png', 'HVVP124_big.png', 1, 4, 0),
(21, 'Biotin 5000 IU, 60 ct', 'HVVB321', '5000mcg, veggie caps, 60-count, 200cc white bottle', 'HVVB321.png', 'HVVB321_big.png', 1, 1, 1),
(22, 'Antarctic Krill Oil - Lemon, 60 ct', 'HVKO456', '500mg/capsule, 1000mg/serving, lemon flavor, softgels, 60-count, 200cc white bottle', 'HVKO456.png', 'HVKO456_big.png', 1, 3, 1),
(23, 'Antarctic Krill Oil - Lemon, 120 ct', 'HVKO457', '500mg/capsule, 1000mg/serving, lemon flavor, softgels, 120-count, 250cc white bottle', 'HVKO457.png', 'HVKO457_big.png', 1, 3, 1),
(24, 'Antarctic Krill Oil - Lemon, 180 ct', 'HVKO458', '500mg/capsule, 1000mg/serving, lemon flavor, softgels, 180-count, 400cc white bottle', 'HVKO458.png', 'HVKO458_big.png', 1, 3, 1),
(25, 'Detox 1600mg (Exclusive Formula), 60 ct', 'HVDD147', '1600mg, veggie caps, 60-count, 200cc white bottle', 'HVDD147.png', 'HVDD147_big.png', 1, 2, 1),
(26, 'Detox 1600mg (Exclusive Formula), 180 ct', 'HVDD148', '800mg/capsule, 1600mg/serving, veggie caps, 180-count, 400cc white bottle', 'HVDD148.png', 'HVDD148_big.png', 1, 2, 1),
(27, 'Diet Super Blend (Exclusive Formula), 60 ct', 'HVVD789', 'gelatin capsules, 60-count, 200cc white bottle', 'HVVD789.png', 'HVVD789_big.png', 1, 2, 1),
(28, 'Diet Super Blend (Exclusive Formula), 120 ct', 'HVVD790', 'veggie capsules, 120-count, 300cc white bottle', 'HVVD790.png', 'HVVD790_big.png', 1, 2, 1),
(29, 'Fermented Cod Liver, 180 ct', 'HVVL001', '400mg/capsule, veggie capsule, 180-count, 500cc white bottle', 'HVVL001.png', 'HVVL001_big.png', 1, 3, 1),
(30, 'Co Q10 100mg, 60 ct', 'HVVV496', '100mg/serving, 100mg/capsule, softgels, 60-count, 200cc white bottle', 'HVVV496.png', 'HVVV496_big.png', 1, 1, 1),
(31, 'Astaxanthin 4mg, 60 ct', 'HVVA458', '4mg, softgel, 60-count, 200cc white bottle', 'HVVA458.png', 'HVVA458_big.png', 1, 5, 1),
(32, 'Astaxanthin 10mg, 60 ct', 'HVVA459', '10mg, softgel, 60-count, 200cc white bottle', 'HVVA459.png', 'HVVA459_big.png', 1, 5, 1),
(33, 'Astaxanthin 10mg, 120 ct', 'HVVA460', '10mg, softgel, 120-count, 250cc white bottle', 'HVVA460.png', 'HVVA460_big.png', 1, 5, 1),
(34, 'Argentinian Beef Liver, 180 ct', 'HVBL452', '750mg/capsule, Argentina Grass Fed Desiccated Beef Liver, 180-count, 500cc white bottle', 'HVBL452.png', 'HVBL452_big.png', 1, 7, 1),
(35, 'Alaskan Salmon Oil 1000, 60 ct', 'HVSO100', '1000mg/capsule, 2000mg/serving, softgel, 60-count, 200cc white bottle', 'HVSO100.png', 'HVSO100_big.png', 1, 3, 1),
(36, 'Alaskan Salmon Oil 1000mg, 120 ct', 'HVSO101', '1000mg/capsule, 2000mg/serving, softgel, 120-count, 300cc white bottle', 'HVSO101.png', 'HVSO101_big.png', 1, 3, 1),
(37, 'Alpha Lipoid Acid 600mg, 60 ct', 'HVLA951', '600mg/capsule, veggie caps, 60-count, 200cc dark amber bottle, black cap', 'HVLA951.png', 'HVLA951_big.png', 1, 5, 1),
(38, 'Brain Health (Exclusive Formula), 60 ct', 'HVBH444', 'veggie caps, 60-count, 200cc white bottle', 'HVBH444.png', 'HVBH444_big.png', 1, 5, 1),
(40, 'Forskolin 250mg w/20%, 60 ct', 'HVVF195', '250mg, with 20%, veggie caps, 60-count, 200cc white bottle', 'HVVF195.png', 'HVVF195_big.png', 1, 2, 1),
(41, 'Forskolin 250mg w/20%, 90 ct', 'HVVF196', '250mg, with 20%, veggie caps, 90-count, 200cc white bottle', 'HVVF196.png', 'HVVF196_big.png', 1, 2, 1),
(42, 'Forskolin 250mg w/20%, 120 ct', 'HVVF197', '250mg, with 20%, veggie caps, 120-count, 250cc white bottle', 'HVVF197.png', 'HVVF197_big.png', 1, 2, 1),
(43, 'Forskolin 250mg w/20%, 180 ct', 'HVVF198', '250mg, with 20%, veggie caps, 180-count, 400cc white bottle', 'HVVF198.png', 'HVVF198_big.png', 1, 2, 1),
(44, 'Green Coffee 800 mg w/GCA, 60 ct', 'HVGC001', '800mg, veggie caps, 60-count, 200cc white bottle', 'HVGC001.png', 'HVGC001_big.png', 1, 2, 1),
(45, 'Green Coffee 800 mg w/GCA, 180 ct', 'HVGC002', '180 count, veggie caps, 300cc white bottle', 'HVGC002.png', 'HVGC002_big.png', 1, 2, 1),
(46, 'Panax Ginseng 500mg, 90 ct', 'HVPG620', '1000mg/serving, 500mg/capsule, veggie caps, 90-count, 200cc white bottle', 'HVPG620.png', 'HVPG620_big.png', 1, 7, 0),
(47, 'Panax Ginseng 500mg, 180 ct', 'HVPG621', '1000mg/serving, 500mg/capsule, veggie caps, 180-count, 400cc white bottle', 'HVPG621.png', 'HVPG621_big.png', 1, 7, 1),
(48, 'Garcinia Cambogia 800 mg 70% HCA, 60 ct', 'HVGC973', '1600mg, 70% HCA, veggie caps, 60-count, 200cc white bottle', 'HVGC973.png', 'HVGC973_big.png', 1, 2, 1),
(49, 'Garcinia Cambogia 800 mg 70% HCA, 90 ct', 'HVGC974', '1600mg, 70% HCA, veggie caps, 90-count, 200cc white bottle', 'HVGC974.png', 'HVGC974_big.png', 1, 2, 1),
(50, 'Garcinia Cambogia 800 mg 70% HCA, 120 ct', 'HVGC975', '1600mg, 70% HCA, veggie caps, 120-count,  250cc white bottle', 'HVGC975.png', 'HVGC975_big.png', 1, 2, 1),
(51, 'Garcinia Cambogia 800 mg 70% HCA, 180 ct', 'HVGC976', '1600mg, 70% HCA, veggie caps, 180-count, 400cc white bottle', 'HVGC976.png', 'HVGC976_big.png', 1, 2, 1),
(52, 'Krill / Omega 500mg Blend, 60 ct', 'HVOO289', '500mg/capsule, 1000mg/serving, softgel, 60-count, 200cc white bottle', 'HVOO289.png', 'HVOO289_big.png', 1, 7, 1),
(53, 'Maca 500mg, 90 c', 'HVVM973', '500mg/serving, 500mg/capsules, veggie caps, 90-count, 200cc white bottle', 'HVVM973.png', 'HVVM973_big.png', 1, 7, 1),
(54, 'Male 1500mg, 60 ct', 'HVMM103', '1500mg/serving, 750mg/capsule, capsules, 60-count, 200cc white bottle', 'HVMM103.png', 'HVMM103_big.png', 1, 7, 1),
(55, 'Melatonin 5mg, 60 ct', 'HVVM975', '5mg/serving, 5mg/capsule, veggie cap, 60-count, 200cc white bottle', 'HVVM975.png', 'HVVM975_big.png', 1, 7, 1),
(56, 'Moringa 600mg, 180 ct', 'HVVM195', '600mg/capsule, 1200mg/serving, veggie caps, 180-count,  500cc white bottle', 'HVVM195.png', 'HVVM195_big.png', 1, 7, 1),
(57, 'Organic Black Maca, 180 ct', 'HVOB100', '500mg/capsule, veggie capsule, 180-count, 500cc white bottle', 'HVOB100.png', 'HVOB100_big.png', 1, 7, 1),
(58, 'Phytoceramides 350mg (Gluten Free), 30 ct', 'HVVP719', '350mg, veggie caps, 30-count, 200cc white bottle', 'HVVP719.png', 'HVVP719_big.png', 1, 5, 1),
(59, 'Phytoceramides 350mg (Gluten Free), 90 ct', 'HVVP720', '350mg, veggie caps, 90-count, 200cc white bottle', 'HVVP720.png', 'HVVP720_big.png', 1, 5, 1),
(60, 'Spirulina 500mg (Organic), 180 ct', 'HVVP100', '500mg/capsule, 500mg/serving, organic, veggie caps, 180-count, 400cc white bottle', 'HVVP100.png', 'HVVP100_big.png', 1, 2, 1),
(61, 'Saffron Extract, 60 ct', 'HVVS973', '88.25mg, veggie caps, 60-count, 200cc white bottle', 'HVVS973.png', 'HVVS973_big.png', 1, 7, 1),
(62, 'Pumpkin Seed Oil 1000mg, 60 ct', 'HVPS441', '1000mg/capsule, 2000mg/serving, softgels, 60-count, 200cc white bottle', 'HVPS441.png', 'HVPS441_big.png', 1, 3, 1),
(63, 'Pumpkin Seed Oil 1000mg, 180 ct', 'HVPS442', '1000mg/capsule, 2000mg/serving, softgels, 180-count, 400cc white bottle', 'HVPS442.png', 'HVPS442_big.png', 1, 3, 1),
(64, 'Raspberry Ketone (Pure) 500mg, 60 ct', 'HVRK167', '1000mg, veggie caps, 60-count, 200cc white bottle', 'HVRK167.png', 'HVRK167_big.png', 1, 2, 1),
(65, 'Raspberry Ketone (Pure) 500mg, 180 ct', 'HVRK168', '1000mg, veggie caps, 180-count, 500cc white bottle', 'HVRK168.png', 'HVRK168_big.png', 1, 2, 1),
(66, 'Raspberry Ketone Complex 1200mg, 60 ct', 'HVRK169', '1,200 mg, veggie caps, 60 count, 200cc white bottle', 'HVRK169.png', 'HVRK169_big.png', 1, 2, 1),
(67, 'White Kidney Bean 500mg, 90 ct', 'HVWK999', '500mg/capsule, 1000mg/serving, veggie caps, 90-count, 200cc white bottle', 'HVWK999.png', 'HVWK999_big.png', 1, 2, 1),
(68, 'White Mulberry Extract, 60 ct', 'HVWK1000', '60 count, veggie caps,  200cc white bottle', 'HVWK1000.png', 'HVWK1000_big.png', 1, 7, 1),
(69, 'CLA 1250mg 80%, 120 ct', 'HVVC555', '1250mg/capsule, 1250mg/serving, 80%, softgel, 120-count, 400cc white bottle', 'HVVC555.png', 'HVVC555_big.png', 1, 2, 1),
(70, 'CLA 1250mg 80%, 180 ct', 'HVVC556', '1250mg/capsule, 1250mg/serving, 80%, softgel, 180-count, 500cc white bottle', 'HVVC556.png', 'HVVC556_big.png', 1, 2, 1),
(71, 'CLA 1500mg 80%, 60 ct', 'HVVC557', '1500mg/capsule, 1500mg/serving, softgel, 60-count, 200cc white bottle', 'HVVC557.png', 'HVVC557_big.png', 1, 2, 1),
(72, 'CLA 1500mg 80%, 120 ct', 'HVVC558', '1500mg/capsule, 1500mg/serving, softgel, 120-count, 250cc white bottle', 'HVVC558.png', 'HVVC558_big.png', 1, 2, 1),
(73, 'Chlorella 600mg (Organic), 180 ct', 'HVVC798', '600mg/capsule, 1200mg/serving, organic, veggie caps, 180-count, 400cc white bottle', 'HVVC798.png', 'HVVC798_big.png', 1, 2, 1),
(74, 'Coconut Oil 1000mg (Organic), 60 ct', 'HVCO112', '1000mg, softgel, 60-count,  200cc white bottle', 'HVCO112.png', 'HVCO112_big.png', 1, 3, 1),
(75, 'Coconut Oil 1000mg (Organic), 120 ct', 'HVCO113', '1000mg/capsule, 2000mg/serving, softgel, 120-count, 400cc white bottle', 'HVCO113.png', 'HVCO113_big.png', 1, 3, 1),
(76, 'C-1000mg', 'HVVC101', '1000mg/tablet.', 'HVVC101.png', 'HVVC101_big.png', 1, 1, 1),
(77, 'B12 1000mcg chewable tabs', 'HVVB125', 'Supports energy metabolism, healthy nervous system and normal formation of blood cells.', 'HVVB125.png', 'HVVB125_big.png', 1, 1, 1),
(78, 'Vitamin D  with Calcium', 'HVVC150', 'Promotes Healthy bones, joints and muscles. Vitamin D3 is to help  maximize calcium absorption.', 'HVVC150.png', 'HVVC150_big.png', 1, 1, 1),
(79, 'Mineral Complex', 'HVMC182', 'Mineral Complex', 'HVMC182.png', 'HVMC182_big.png', 1, 6, 0),
(80, 'Total Calcium Complex', 'HVTC106', 'Total Calcium Complex', 'HVTC106.png', 'HVTC106_big.png', 1, 6, 0),
(81, 'B Complex Tablets', 'HVBC465', 'For Healthy nervous system functions, boost the immune system and  Antioxidant support.', 'HVBC465.png', 'HVBC465_big.png', 1, 1, 1),
(87, 'Apple & Mango Jar', 'HBA003', 'Apple & Mango Jar', 'HBA003.png', NULL, 2, 8, 0),
(88, 'Apple Jar', 'HBA001', 'Apple Jar', 'Apple Jar.png', NULL, 2, 8, 0),
(89, 'Banana & Pineapple Jar', 'HBB003', 'Banana & Pineapple Jar', 'Banana & Pineapple Jar.png', NULL, 2, 8, 0),
(90, 'Banana Jar', 'HBB001', 'Banana Jar', 'Banana Jar.png', NULL, 2, 8, 0),
(91, 'Beef Jar', 'HBBE001', 'Beef Jar', 'Beef Jar.png', NULL, 2, 8, 0),
(92, 'Broccoli & Rice Jar', 'HBBR001', 'Broccoli & Rice Jar', 'Broccoli & Rice Jar.png', NULL, 2, 8, 0),
(93, 'Butternut Jar', 'HBBU001', 'Butternut Jar', 'butternut Jar.png', NULL, 2, 8, 0),
(94, 'Carrot & Potato & Beef Jar', 'HBC005', 'Carrot & Potato & Beef Jar', 'Carrot & Potato & Beef Jar.png', NULL, 2, 8, 0),
(95, 'Carrot & Potato Jar', 'HBC003', 'Carrot & Potato Jar', 'Carrot & Potato Jar.png', NULL, 2, 8, 0),
(96, 'Carrot Jar', 'HBC001', 'Carrot Jar', 'Carrot Jar.png', NULL, 2, 8, 0),
(97, 'Chicken Jar', 'HBCH001', 'Chicken Jar', 'Chicken Jar.png', NULL, 2, 8, 0),
(98, 'Guava & Pear Jar', 'HBG001', 'Guava & Pear Jar', 'Guava & Pear Jar.png', NULL, 2, 8, 0),
(99, 'Mixed Vegetables & Rice Jar', 'HBV003', 'Mixed Vegetables & Rice Jar', 'Mixed Vegetables & Rice Jar.png', NULL, 2, 8, 0),
(103, 'Mixed Vegetables Jar', 'HBV001', 'Mixed Vegetables Jar', 'Mixed Vegetables Jar.png', NULL, 2, 8, 0),
(104, 'Parsnip Jar', 'HBPA001', 'Parsnip Jar', 'Parsnip Jar.png', NULL, 2, 8, 0),
(105, 'Peach Jar', 'HBP001', 'Peach Jar', 'Peach Jar.png', NULL, 2, 8, 0),
(106, 'Pear Jar', 'HBP003', 'Pear Jar', 'Pear Jar.png', NULL, 2, 8, 0),
(107, 'Potato & Peas & Zucchini Jar', 'HBP005', 'Potato & Peas & Zucchini Jar', 'Potato & Peas & Zucchini Jar.png', NULL, 2, 8, 0),
(108, 'Potato & Pumpkin & Zucchini Jar', 'HBPO003', 'Potato & Pumpkin & Zucchini Jar', 'Potato & Pumpkin & Zucchini Jar.png', NULL, 2, 8, 0),
(109, 'Potato & Spinach Jar', 'HBPO001', 'Potato & Spinach Jar', 'Potato & Spinach Jar.png', NULL, 2, 8, 0),
(113, 'CEREAL With Banana', 'HCB001', 'CEREAL With Banana', 'HCB001.png', NULL, 2, 9, 0),
(114, 'CEREAL With  Appel', 'HCA001', 'CEREAL With  Appel', 'HCA001.png', NULL, 2, 9, 0),
(115, 'CEREAL With Fruits', 'HCF001', 'CEREAL With Fruits', 'HCF001.png', NULL, 2, 9, 0),
(116, 'CEREAL With Rice', 'HCR001', 'CEREAL With Rice', 'HCR001.png', NULL, 2, 9, 0),
(117, 'CEREAL With Honey', 'HCH001', 'CEREAL With Honey', 'HCH001.png', NULL, 2, 9, 0),
(118, 'CEREAL Wheat  With Milk', 'HCW001', 'CEREAL Wheat  With Milk', 'HCW001.png', NULL, 2, 9, 0),
(119, 'Folic Acid with DHA tablets', 'HVFA111', 'Folic Acid with DHA tablets', 'HVFA111.png', 'HVFA111_big.png', 1, 1, 1),
(120, 'Açai & Blueberry & Pomegranate Bottle', 'VWA001', 'Açai & Blueberry & Pomegranate Bottle', 'VWA001.png', 'VWA001_big.png', 1, 10, 0),
(121, 'Dragon Fruit Bottle', 'VWD011', 'Dragon Fruit Bottle', 'VWD001.png', 'VWD001_big.png', 1, 10, 0),
(122, 'Fruits Bottle', 'VWF003', 'Fruits Bottle', 'VWF001.png', 'VWF001_big.png', 1, 10, 0),
(123, 'Kiwi & Strawberry Bottle', 'VWK015', 'Kiwi & Strawberry Bottle', 'VWK001.png', 'VWK001_big.png', 1, 10, 0),
(124, 'Lemon Bottle', 'VWL005', 'Lemon Bottle', 'VWL001.png', 'VWL001_big.png', 1, 10, 0),
(125, 'Mixed Berry Bottle', 'VWB019', 'Mixed Berry Bottle', 'VWB001.png', 'VWB001_big.png', 1, 10, 0),
(126, 'Orange Bottle', 'VWO021', 'Orange Bottle', 'VWO001.png', 'VWO001_big.png', 1, 10, 0),
(127, 'Pineapple & Coconut Bottle', 'VWP013', 'Pineapple & Coconut Bottle', 'VWP001.png', 'VWP001_big.png', 1, 10, 0),
(128, 'Strawberry & Lemon Bottle', 'VWS017', 'Strawberry & Lemon Bottle', 'VWS001.png', 'VWS001_big.png', 1, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `serving_size` varchar(50) DEFAULT NULL,
  `serving_per_container` varchar(50) DEFAULT NULL,
  `shelf_life` varchar(50) DEFAULT NULL,
  `other_ingredients` text,
  `how_to_take` text,
  `warnings` text,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `serving_size`, `serving_per_container`, `shelf_life`, `other_ingredients`, `how_to_take`, `warnings`, `notes`) VALUES
(1, 81, '1 Tablet', '180', '2 years.', 'Stearic Acid, Microcrystalline Cellulose, Dicalcium Phosphate, Magnesium  Stearate, Croscarmellose Sodium, Silicon Dioxide, Pharmaceutical Glaze  (Shellac, Povidone).', 'For adults take 1 (one) tablet daily with food.', 'Keep bottle out of reach of children. Store in cool and dry room.  Do not use if seal under cap is broken or missing.', 'These statements have not been evaluated by the Food and Drug  Administration. This product is not intended to diagnose, treat, cure or  prevent any disease.'),
(2, 77, '1 Tablet', '60', '2 years', 'Sorbitol, Crospovidone, Microcrystalline Cellulose,  Natural Flavors,  Stearic Acid, Magnesium Stearate, Silicon Dioxide.', 'For adults take 1 (one) daily, place tablet under tongue for 30 seconds before swallowing.', 'Consult with your physician if you are pregnant, nursing, or are taking any other medications. If any adverse reaction occurs, consult with your physician. Keep bottle out of reach of children. Store in cool and dry room. Do not use if seal under cap is broken or missing.', 'These statements have not been evaluated by the Food and Drug  Administration. This product is not intended to diagnose, treat, cure or  prevent any disease.'),
(3, 78, '1 Tablet', '180', '2 years.', 'Stearic Acid, Microcrystalline Cellulose, Dicalcium Phosphate,  Croscarmellose Sodium, Magnesium Stearate, Silicon Dioxide, Pharmaceutical Glaze (Shellac, Povidone).', 'For adults take 1 (one) per day unless it is directed by your  doctor. Take it with food or as directed by your doctor. Not be used by  Children. Store in cool and dry room.', 'As with any other dietary supplement, if you are taking  medication, pregnant, or nursing consult your physician before use. Do not  use if seal under cap is broken or missing.', 'These statements have not been evaluated by the Food and Drug  Administration. This product is not intended to diagnose, treat, cure or  prevent any disease.'),
(4, 21, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(5, 76, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(6, 30, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(7, 8, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(8, 9, '1', '180', '2 years.', NULL, NULL, NULL, NULL),
(9, 10, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(10, 119, '1', '60', '2 years.', NULL, NULL, NULL, NULL),
(11, 34, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(12, 47, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(13, 52, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(14, 53, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(15, 54, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(16, 55, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(17, 56, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(18, 57, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(19, 61, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(20, 68, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(21, 11, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(22, 12, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(23, 13, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(24, 14, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(25, 15, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(26, 16, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(27, 31, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(28, 32, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(29, 33, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(30, 37, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(31, 38, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(32, 58, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(33, 59, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(34, 19, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(35, 2, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(36, 3, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(37, 4, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(38, 5, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(39, 6, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(40, 7, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(41, 17, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(42, 22, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(43, 23, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(44, 24, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(45, 29, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(46, 35, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(47, 36, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(48, 62, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(49, 63, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(50, 74, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(51, 75, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(52, 25, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(53, 26, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(54, 27, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(55, 28, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(56, 40, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(57, 41, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(58, 42, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(59, 43, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(60, 44, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(61, 45, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(62, 48, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(63, 49, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(64, 50, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(65, 51, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(66, 60, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(67, 64, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(68, 65, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(69, 66, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(70, 67, NULL, '90', NULL, NULL, NULL, NULL, NULL),
(71, 69, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(72, 70, NULL, '180', NULL, NULL, NULL, NULL, NULL),
(73, 71, NULL, '60', NULL, NULL, NULL, NULL, NULL),
(74, 72, NULL, '120', NULL, NULL, NULL, NULL, NULL),
(75, 73, NULL, '180', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hanan Hasan', 'hanan@mail.com', NULL, '$2y$10$2JAO0SuzF84xBlAbPQqT2uDiYpJ8YkwFdoXUplDzgONpJJ8vL3hzy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_sellers`
--
ALTER TABLE `best_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

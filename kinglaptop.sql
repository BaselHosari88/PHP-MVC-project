-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 11:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinglaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `picture`, `description`, `imgname`) VALUES
(1, 'macbook', 'image/categories/mac-1.jpg', 'Een roeitrainer is een fitnessapparaat waarmee je het hele lichaam traint. Met een roeitrainer, ook wel roeitoestel of roeimachine, genoemd, boots je de roeibeweging op het water na. Je hebt daarbij voornamelijk je armen, benen en rugspieren nodig, waardoor het een complete workout is. Roeiapparaten zijn er in vele soorten en prijsklassen. ', 'macbooks'),
(2, 'gaming', 'image/categories/gaming-1.jpg', 'Een crosstrainer is een fitnessapparaat waarmee je jouw hele lichaam traint. Je maakt namelijk een beweging met zowel je benen als je armen. Daarnaast train je ook de spieren in je core (buik en onderrug), borst, rug en schouders. Zowel in sportscholen als bij thuisgebruik zijn crosstrainers (ook wel elliptical machine genoemd) al geruime tijd een van de populairste fitnessapparaten.', 'gaming-laptops'),
(3, 'home', 'image/categories/home-1.jpg', '\r\nEen hometrainer is het meest bekende fitnessapparaat voor thuisgebruik en staat ook wel bekend als fitness fiets. Wat is er nu prettiger dan thuis op je gemak te kunnen werken aan je conditie? Met een hometrainer kun je eenvoudig meerdere spiergroepen trainen en je uithoudingsvermogen verbeteren. Daarnaast bepaal je zelf het tempo, het trainingsniveau en het tijdstip van je training.', 'home-laptops'),
(4, 'hp', 'image/categories/hp-1.jpg', 'Een loopband is een veelzijdig fitnessapparaat. Een loopband wordt gebruikt om conditie te verbeteren en vetpercentage te verlagen, maar kan ook ingezet worden voor revalidatie. Het voordeel van een loopband is dat je thuis kunt trainen wanneer het jou uitkomt. Heb je er genoeg van om ‘s avonds in het donker of door weer en wind te lopen, of zou je je spieren, pezen en botten willen ontlasten tijdens het (hard)lopen? Dan is een loopband voor jou de beste oplossing!', 'hp-laptops');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(5, 'mashoft Leso gaming', 'image/categories/gaming-laptops/gaming-1.jpg', 'mooi i like it I\'ll buy it it is amazingdesing', 2),
(6, 'ganing 2225', 'image/categories/gaming-laptops/gaming-2.jpg', 'Brave laptop', 2),
(7, 'Soopat 5522', 'image/categories/gaming-laptops/gaming-3.jpg', ' and slim goed', 2),
(8, 'ganing 2225', 'image/categories/gaming-laptops/gaming-4.jpg', 'your Choose', 2),
(9, 'mashoft Leso home', 'image/categories/home-laptops/home-1.jpg', 'powerful laptop', 3),
(10, 'home 2225', 'image/categories/home-laptops/home-2.jpg', 'slim laptop', 3),
(11, 'home 222a5', 'image/categories/home-laptops/home-3.jpg', 'slim laptop', 3),
(12, 'ganing 2225', 'image/categories/home-laptops/home-4.jpg', 'Brave laptop', 3),
(14, 'hp 2225', 'image/categories/hp-laptops/hp-2.jpg', 'Brave', 4),
(15, 'homeschot 5522', 'image/categories/hp-laptops/hp-3.jpg', 'Brave', 4),
(29, 'mashoft Leso gaming', 'image/categories/gaming-laptops/gaming-1.jpg', 'mooi desing', 1),
(74, 'mashoft Leso gaming', 'image/categories/gaming-laptops/gaming-1.jpg', 'mooi desing', 1),
(75, 'ganing 2225', 'image/categories/gaming-laptops/gaming-2.jpg', 'Brave laptop', 2),
(76, 'Soopat 5522', 'image/categories/gaming-laptops/gaming-3.jpg', ' and slim goed', 3),
(77, 'ganing 2225', 'image/categories/gaming-laptops/gaming-4.jpg', 'your Choose', 4),
(78, 'mashoft Leso home', 'image/categories/home-laptops/home-1.jpg', 'powerful laptop', 1),
(79, 'home 2225', 'image/categories/home-laptops/home-2.jpg', 'slim laptop', 2),
(80, 'home 222a5', 'image/categories/home-laptops/home-3.jpg', 'slim laptop', 3),
(81, 'ganing 2225', 'image/categories/home-laptops/home-4.jpg', 'Brave laptop', 4),
(82, 'hp 2225', 'image/categories/hp-laptops/hp-2.jpg', 'Brave', 1),
(83, 'homeschot 5522', 'image/categories/hp-laptops/hp-3.jpg', 'Brave', 2),
(84, 'mashoft Leso gaming', 'image/categories/gaming-laptops/gaming-1.jpg', 'mooi desing', 3),
(85, 'hp 2225', 'image/categories/hp-laptops/hp-1.jpg', 'Brave', 4),
(86, 'homeschot 5522', 'image/categories/hp-laptops/hp-2.jpg', 'Brave', 4),
(87, 'mashoft Leso gaming', 'image/categories/gaming-laptops/gaming-2.jpg', 'mooi desing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `stars` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `date`, `description`, `stars`, `user_id`, `product_id`) VALUES
(2, '2022-11-21', 'super better!', '5', 2, 2),
(4, '2022-11-10', ' ooohhh super  is de beste ', '5', 3, 4),
(5, '2022-11-21', ' is better! I like it ', '5', 2, 5),
(6, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 6),
(7, '2022-11-10', ' is de beste laptop', '5', 3, 7),
(8, '2022-11-21', ' is better!', '5', 2, 8),
(9, '2022-11-22', 'super', '5', 1, 9),
(10, '2022-11-10', 'is de beste telefoon!', '5', 3, 10),
(11, '2022-11-21', ' is better!', '5', 2, 11),
(12, '2022-11-22', 'super werkt!', '5', 1, 12),
(13, '2022-11-10', ' is de beste laptop!', '5', 3, 13),
(14, '2022-11-21', 'oooohhhhhhhh is better!', '5', 2, 14),
(15, '2022-11-22', 'super werkt!', '5', 1, 15),
(16, '2022-11-10', 'is de beste laptop!', '5', 3, 16),
(17, '2022-11-21', ' is better!', '5', 2, 17),
(18, '2022-11-22', 'I like it it is werkt!', '5', 1, 18),
(19, '2022-11-10', ' is de beste laptop!', '5', 3, 19),
(20, '2022-11-21', 'Super  is better!', '5', 2, 20),
(21, '2022-11-22', 'super werkt!', '5', 1, 21),
(22, '2022-11-10', 'mooi laptop is de beste !', '5', 3, 22),
(23, '2022-11-21', 'waw waw waw is better!', '5', 2, 23),
(24, '2022-11-22', 'super werkt!', '5', 1, 24),
(25, '2022-11-10', ' is de beste laptop', '5', 3, 25),
(26, '2022-11-21', 'Iphone 13 is better!', '5', 2, 2),
(27, '2022-11-22', 'comments werkt!', '5', 1, 3),
(28, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 4),
(29, '2022-11-21', 'Iphone 13 is better!', '5', 2, 5),
(30, '2022-11-22', 'comments werkt!', '5', 1, 6),
(31, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 7),
(32, '2022-11-21', 'Iphone 13 is better!', '5', 2, 8),
(33, '2022-11-22', 'comments werkt!', '5', 1, 9),
(34, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 10),
(35, '2022-11-21', 'Iphone 13 is better!', '5', 2, 12),
(36, '2022-11-22', 'comments werkt!', '5', 1, 13),
(37, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 14),
(38, '2022-11-21', 'Iphone 13 is better!', '5', 2, 15),
(39, '2022-11-22', 'comments werkt!', '5', 1, 16),
(40, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 17),
(41, '2022-11-21', 'Iphone 13 is better!', '5', 2, 18),
(42, '2022-11-22', 'comments werkt!', '5', 1, 19),
(43, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 11),
(44, '2022-11-21', 'Iphone 13 is better!', '5', 2, 11),
(45, '2022-11-22', 'comments werkt!', '5', 1, 12),
(46, '2022-11-10', 'Iphone 14 is de beste telefoon!', '5', 3, 20),
(47, '2022-11-21', 'Iphone 13 is better!', '5', 2, 19),
(48, '2022-11-22', 'comments werkt!', '5', 1, 21),
(49, '2022-11-10', ' is de beste laptop ', '5', 3, 1),
(50, '2022-11-21', 'super better!', '5', 2, 2),
(51, '2022-11-22', 'comments werkt i like it so much!', '5', 1, 3),
(52, '2022-11-10', ' ooohhh super  is de beste ', '5', 3, 4),
(53, '2022-11-21', ' is better! I like it ', '5', 2, 5),
(54, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 6),
(55, '2022-11-10', ' is de beste laptop', '5', 3, 7),
(56, '2022-11-21', ' is better!', '5', 2, 8),
(57, '2022-11-22', 'super', '5', 1, 9),
(58, '2022-11-10', 'is de beste telefoon!', '5', 3, 10),
(59, '2022-11-21', ' is better!', '5', 2, 11),
(60, '2022-11-22', 'super werkt!', '5', 1, 12),
(61, '2022-11-10', ' is de beste laptop!', '5', 3, 13),
(62, '2022-11-21', 'oooohhhhhhhh is better!', '5', 2, 14),
(63, '2022-11-22', 'super werkt!', '5', 1, 15),
(64, '2022-11-10', 'is de beste laptop!', '5', 3, 16),
(65, '2022-11-21', ' is better!', '5', 2, 17),
(66, '2022-11-22', 'I like it it is werkt!', '5', 1, 18),
(67, '2022-11-10', ' is de beste laptop!', '5', 3, 19),
(68, '2022-11-21', 'Super  is better!', '5', 2, 20),
(69, '2022-11-22', 'super werkt!', '5', 1, 21),
(70, '2022-11-10', 'mooi laptop is de beste !', '5', 3, 22),
(71, '2022-11-21', 'waw waw waw is better!', '5', 2, 23),
(72, '2022-11-22', 'super werkt!', '5', 1, 24),
(73, '2022-11-10', ' is de beste laptop', '5', 3, 25),
(74, '2022-11-21', 'super better!', '5', 2, 2),
(75, '2022-11-10', ' ooohhh super  is de beste ', '5', 3, 4),
(76, '2022-11-21', ' is better! I like it ', '5', 2, 5),
(77, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 6),
(78, '2022-11-10', ' is de beste laptop', '5', 3, 7),
(79, '2022-11-21', ' is better!', '5', 2, 8),
(80, '2022-11-22', 'super', '5', 1, 9),
(81, '2022-11-21', 'super better!', '5', 5, 5),
(82, '2022-11-10', ' ooohhh super  is de beste ', '5', 3, 4),
(83, '2022-11-21', ' is better! I like it ', '5', 2, 5),
(84, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 6),
(85, '2022-11-10', ' is de beste laptop', '5', 3, 7),
(86, '2022-11-21', 'super better! i like this laptop', '55555', 2, 2),
(87, '2022-11-10', ' ooohhh super  is de beste ggggggggggg', '5', 3, 4),
(88, '2022-11-21', ' is better! I like it ', '5', 2, 5),
(89, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 6),
(90, '2022-11-21', 'super better! Ik Like i like it I\'ll buy it it is amazing', '5', 2, 2),
(91, '2022-11-10', ' ooohhh super  is de beste  i like it I\'ll buy it it is amazing', '5', 3, 4),
(92, '2022-11-21', ' is better! I like it  i like it I\'ll buy it it is amazing', '5', 4, 5),
(93, '2022-11-22', 'oooh waaaaw werkt super! i like it I\'ll buy it it is amazing', '5', 5, 6),
(94, '2022-11-10', ' is de beste laptopi like it I\'ll buy it it is amazing', '5', 6, 7),
(95, '2022-11-21', ' is better! i like it I\'ll buy it it is amazing', '5', 8, 8),
(96, '2022-11-22', 'super', '5', 1, 9),
(97, '2022-11-10', 'is de beste telefoon! i like it I\'ll buy it it is amazing', '5', 7, 10),
(98, '2022-11-21', ' is better!', '5', 2, 11),
(99, '2022-11-22', 'super werkt! i like it I\'ll buy it it is amazing', '5', 9, 12),
(100, '2022-11-10', ' is de beste laptop! i like it I\'ll buy it it is amazing', '5', 10, 13),
(101, '2022-11-21', 'oooohhhhhhhh is better! i like it I\'ll buy it it is amazing', '5', 11, 14),
(102, '2022-11-22', 'super werkt! i like it I\'ll buy it it is amazing', '5', 12, 15),
(103, '2022-11-10', 'is de beste laptop! i like it I\'ll buy it it is amazing', '5', 13, 16),
(104, '2022-11-21', ' is better! i like it I\'ll buy it it is amazing', '5', 14, 17),
(105, '2022-11-22', 'I like it it is werkt! i like it I\'ll buy it it is amazing', '5', 15, 18),
(106, '2022-11-10', ' is de beste laptop! i like it I\'ll buy it it is amazing', '5', 16, 19),
(107, '2022-11-21', 'Super  is better! i like it I\'ll buy it it is amazing', '5', 17, 20),
(108, '2022-11-22', 'super werkt! i like it I\'ll buy it it is amazing', '5', 18, 21),
(109, '2022-11-10', 'mooi laptop is de beste ! i like it I\'ll buy it it is amazing', '5', 19, 22),
(110, '2022-11-21', 'waw waw waw is better! i like it I\'ll buy it it is amazing', '5', 20, 23),
(111, '2022-11-22', 'super werkt! i like it I\'ll buy it it is amazing', '5', 20, 24),
(112, '2022-11-10', ' is de beste laptop i like it I\'ll buy it it is amazing', '5', 21, 25),
(113, '2022-11-21', 'Iphone 13 is better! i like it I\'ll buy it it is amazing', '5', 22, 2),
(114, '2022-11-22', 'comments werkt! i like it I\'ll buy it it is amazing', '5', 23, 3),
(115, '2022-11-21', 'super better!', '5', 2, 5),
(116, '2022-11-10', ' ooohhh super  is de beste ', '5', 3, 6),
(117, '2022-11-21', ' is better! I like it ', '5', 2, 7),
(118, '2022-11-22', 'oooh waaaaw werkt super!', '5', 1, 8),
(119, '2022-11-10', ' is de beste laptop', '5', 3, 9),
(120, '2022-11-21', ' is better!', '5', 2, 10),
(121, '2022-11-22', 'super', '5', 1, 11),
(122, '2022-11-10', 'is de beste telefoon!', '5', 3, 12),
(123, '2022-11-21', ' is better!', '5', 2, 14),
(124, '2022-11-22', 'super werkt!', '5', 1, 15),
(125, '2022-11-10', ' is de beste laptop!', '5', 3, 29),
(126, '2022-11-21', 'oooohhhhhhhh is better!', '5', 2, 74),
(127, '2022-11-22', 'super werkt!', '5', 1, 75),
(128, '2022-11-10', 'is de beste laptop!', '5', 3, 76),
(129, '2022-11-21', ' is better!', '5', 2, 77),
(130, '2022-11-22', 'I like it it is werkt!', '5', 1, 78),
(131, '2022-11-10', ' is de beste laptop!', '5', 3, 79),
(132, '2022-11-21', 'Super  is better!', '5', 2, 80),
(133, '2022-11-22', 'super werkt!', '5', 1, 81),
(134, '2022-11-10', 'mooi laptop is de beste !', '5', 3, 82),
(135, '2022-11-21', 'waw waw waw is better!', '5', 2, 83),
(136, '2022-11-22', 'super werkt!', '5', 1, 84),
(137, '2022-11-10', ' is de beste laptop', '5', 3, 85),
(138, '2022-11-21', 'Iphone 13 is better!', '5', 2, 86),
(139, '2022-11-22', 'comments werkt!', '5', 1, 87);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'test@gmail.com', 'test', 'Bassel', 'Hosari', 'MEMBER'),
(2, 'a@gmail.com', '1', 'Basel', 'Hosari', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_comment` (`user_id`),
  ADD KEY `apparatuur_review` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

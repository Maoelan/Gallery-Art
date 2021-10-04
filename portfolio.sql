-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 02:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`) VALUES
(1, 'Yudi'),
(2, 'Azhari');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `gallery_name` varchar(50) DEFAULT NULL,
  `gallery_desc` varchar(255) DEFAULT NULL,
  `types_id` int(11) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`, `gallery_name`, `gallery_desc`, `types_id`, `artist_id`) VALUES
(3, 'bulksplash-axellvak-EtASwnZ8Gzg.jpg', 'Forestry', 'gallery_desc', 1, 10),
(4, 'bulksplash-chrisstenger-7mPt_fhB6M0.jpg', 'teste', 'gallery_desc', 1, 10),
(6, 'bulksplash-billow926-jR8YGPIN6jA.jpg', 'gradial', 'gallery_desc', 1, 10),
(7, 'bulksplash-receqtryaki-csIGIxfh8yU.jpg', 'resta resae ganda', 'gallery_descfsa assdasa', 1, 10),
(8, 'bulksplash-aud_kat-N56xTRzHYhQ.jpg', 'fastes', 'gallery_desc', 1, 10),
(9, 'bulksplash-alfaz_-Y2bGS2mR4pY.jpg', 'faras', 'gallery_desc', 1, 10),
(10, 'bulksplash-andrewtneel-VOWTncHBCes.jpg', 'fassdtes', 'gallery_desc', 1, 10),
(13, 'bulksplash-brittaniburns--_aToeHOfYM.jpg', 'asdfasf', 'adsfdasf', 1, 10),
(15, 'bulksplash-solenfeyissa-tnTNRVGOSRY.jpg', 'asdasd', 'gallery_desc', 2, 9),
(17, 'bulksplash-levimeirclancy-jdIT3puximI.jpg', 'fafafa', 'fafafa', 1, 10),
(18, 'bulksplash-fakurian-E8Ufcyxz514.jpg', 'kalsdjas', 'lkasdja', 1, 10),
(19, 'bulksplash-fakurian-E8Ufcyxz514.jpg', 'kalsdjas', 'lkasdja', 1, 10),
(21, 'bulksplash-pawel_czerwinski-mag3PBDzaDs.jpg', 'teste', 'adsfadsf', 1, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_view`
-- (See below for the actual view)
--
CREATE TABLE `gallery_view` (
`gallery_id` int(11)
,`gallery_name` varchar(50)
,`gallery_image` varchar(255)
,`gallery_desc` varchar(255)
,`types_id` int(11)
,`types_name` varchar(50)
,`artist_id` int(11)
,`artist_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `types_id` int(11) NOT NULL,
  `types_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`types_id`, `types_name`) VALUES
(1, 'Painting'),
(2, 'Abstract');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(50) DEFAULT NULL,
  `users_pass` varchar(255) DEFAULT NULL,
  `users_alias` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_pass`, `users_alias`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `gallery_view`
--
DROP TABLE IF EXISTS `gallery_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gallery_view`  AS SELECT `a`.`gallery_id` AS `gallery_id`, `a`.`gallery_name` AS `gallery_name`, `a`.`gallery_image` AS `gallery_image`, `a`.`gallery_desc` AS `gallery_desc`, `c`.`types_id` AS `types_id`, `c`.`types_name` AS `types_name`, `b`.`artist_id` AS `artist_id`, `b`.`artist_name` AS `artist_name` FROM ((`gallery` `a` join `artist` `b` on(`a`.`artist_id` = `b`.`artist_id`)) join `types` `c` on(`a`.`types_id` = `c`.`types_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `types_id` (`types_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

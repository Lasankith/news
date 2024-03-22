-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('abc@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `arttbl`
--

CREATE TABLE `arttbl` (
  `artID` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `status` int(20) NOT NULL,
  `imagepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arttbl`
--

INSERT INTO `arttbl` (`artID`, `email`, `fullName`, `date`, `topic`, `status`, `imagepath`) VALUES
(5, 'mahesha@gmail.com', 'Samanali perera', '2023/04/01', 'GrassHopper', 1, 'Arts/images.jpeg'),
(6, 'kamal@gmail.com', 'sadun perera', '2/2/2022', 'Mother', 1, 'Arts/SC437905_Homepage_Banner_16x9_V1.jpg'),
(7, 'kamal@gmail.com', 'Jayathilaka perera', '7/5/2023', 'sea', 1, 'Arts/_110477019_dsc_1128.jpg'),
(8, 'kamal@gmail.com', 'manohari kalpana', '3/04/2023', 'beach', 1, 'Arts/images (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `infotbl`
--

CREATE TABLE `infotbl` (
  `email` varchar(500) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `imagepath` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `status` int(20) NOT NULL,
  `infoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infotbl`
--

INSERT INTO `infotbl` (`email`, `topic`, `des`, `imagepath`, `location`, `time`, `status`, `infoID`) VALUES
('mahesha@gmail.com', 'Mississippi ', 'Mississippi’s Hy Stor Energy could soon make the Magnolia State one of the nation’s biggest “green” hydrogen hubs. According to CleanTechnica, the company submitted its Mississippi Clean Hydrogen Hub (MCHH) proposal to the Department of Energy. If approved, Hy Stor could receive up to $1 billion in federal government funding to produce environmentally friendly hydrogen fuel.', 'informations/download (3).jpeg', 'Kandy,srilanka', '5.00 AM', 1, 4),
('kamal@gmail.com', 'Sri Lankan Elephant', 'The Sri Lankan subspecies is the largest and also the darkest of the Asian elephants, with patches of depigmentation—areas with no skin color—on its ears, face, trunk and belly. Once found throughout the tear-shaped island at the bottom of India’s southern tip, these elephants are now being pushed into smaller areas as development activities clear forests and disrupt their ancient migratory routes', 'informations/_110477019_dsc_1128.jpg', 'kandy', '06.00 PM', 1, 5),
('abc@gmail.com', 'abcefgh', 'Fastest mammal on land, the cheetah can reach speeds of 60 or perhaps even 70 miles (97 or 113 kilometers) an hour over short distances. It usually chases its prey at only about half that speed, however. After a chase, a cheetah needs half an hour to catch its breath before it can eat.\r\n\r\n', 'informations/thumb_720_450_dreamstime_m_84192769.jpg', 'a', '12.00', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `newstbl`
--

CREATE TABLE `newstbl` (
  `newsID` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `topic` varchar(2500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `imagepath` varchar(5000) NOT NULL,
  `location` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newstbl`
--

INSERT INTO `newstbl` (`newsID`, `email`, `topic`, `description`, `imagepath`, `location`, `time`, `status`) VALUES
(7, 'mahesha@gmail.com', 'Goodbye to American Century', 'Not so long ago, political analysts were speaking of the “G-2”—that is, of a potential working alliance between the United States and China aimed at managing global problems for their mutual benefit. Such a collaborative twosome was seen as potentially even more powerful than the G-7 group of leading Western economies. ', 'uploads/download.jpeg', 'in china', '21.00 PM', 1),
(8, 'mahesha@gmail.com', 'Breakfast with Chad', 'It was time to try something like group therapy with Chad, not because things had broken down, but because we were beginning to build some awareness of what was contributing to the irritating moments of frustration that quite naturally occur in any serious dialogue.', 'uploads/download (1).jpeg', 'In sri Lanka', '10.05 PM', 1),
(9, 'mahesha@gmail.com', 'Big Tech Subsidiaries You Should Know About Looker', 'Looker is a data analytics software developed in 2011 and purchased by Alphabet in early 2020. It allows users to simplify their data stream and more easily understand how to improve their business model. Why is that significant, though? You may ask.', 'uploads/Google-buys-Looker-960x546.jpg', 'India', '9.00 AM', 1),
(10, 'mahesha@gmail.com', 'Combining AI And Blockchain Could Change The World', 'Artificial Intelligence and Blockchain are two technologies that have captured the public’s attention over the last few years. Despite this, their applications are vastly different. Blockchain is a fantastic way to save information. Artificial Intelligence is a highly efficient time saver that can automate complicated processes, among other applications. ', 'uploads/download (2).jpeg', '', '', 1),
(11, 'kamal@gmail.com', 'We can rectify the mistakes of the past', 'President Ranil Wickremesinghe, during a meeting with Ministry Secretaries and Provincial Chief Secretaries, expressed confidence that the proper implementation of the government’s policy program would lead to economic prosperity surpassing the goals set by the International Monetary Fund.', 'uploads/9871fbe23277c58ed3d941041e24bc4a_XL.jpg', 'Srilanka', '9.39 PM', 1),
(13, 'abc@gmail.com', 'abc', '										Kentucky Attorney General Daniel Cameron touted his endorsement from Donald Trump as an honor, reasserting his steadfast loyalty to the former president while campaigning for governor after a civil jury found the ex-president liable for sexually abusing an advice columnist nearly three decades ago.-										', 'uploads/a.jpeg', 'a', '10.00 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`, `comment`, `comment_time`) VALUES
(16, 'Mahesha Madugalle', 'This is amazing web page', '2023-05-22 16:04:39'),
(17, 'manohari', 'this is beautiful news site', '2023-05-22 16:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `password` varchar(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `job` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`password`, `email`, `fullName`, `age`, `address`, `gender`, `job`) VALUES
('123456', 'abc@gmail.com', 'abc', '20', 'abc', 'female', 'abc'),
('kamal', 'kamal@gmail.com', 'KamalPerera', '34', '9, waligalla Rd,Gampaha', 'Male', 'Assistant Manager  '),
('mahesha', 'mahesha@gmail.com', 'MaheshaMadugalle', '23', '6/1 meegammana wattegama', 'female', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `arttbl`
--
ALTER TABLE `arttbl`
  ADD PRIMARY KEY (`artID`);

--
-- Indexes for table `infotbl`
--
ALTER TABLE `infotbl`
  ADD PRIMARY KEY (`infoID`);

--
-- Indexes for table `newstbl`
--
ALTER TABLE `newstbl`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arttbl`
--
ALTER TABLE `arttbl`
  MODIFY `artID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `infotbl`
--
ALTER TABLE `infotbl`
  MODIFY `infoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newstbl`
--
ALTER TABLE `newstbl`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

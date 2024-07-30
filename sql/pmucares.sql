-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 12:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

-- CREATE DATABASE pmuCares;
-- USE pmuCares;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmucares`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `link_to_post` varchar(255) NOT NULL,
  `link_to_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `date`, `author`, `category`, `link_to_post`, `link_to_image`) VALUES
(1, 'Goa Codes 2024 – Phase I : Lead School Level', '2024-03-28', 'Cares-Goa', 'NEWS', '#', 'img/blogs/Goa_Codes.jpeg'),
(2, 'PMU DTE stall at Global Tech Summit, Goa. PMU specially designed STEAM products and resource content were on display', '2024-03-28', 'Cares-Goa', 'NEWS', '#', 'img/blogs/GlobalTech_1.jpeg'),
(3, 'MoU signing between PMU-CARES DTE and BITS Pilani towards collaborative Research agreement', '2024-03-28', 'Cares-Goa', 'NEWS', '#', 'img/blogs/MoU_1.jpeg'),
(4, 'Project Director Dr. Vijay Borges served as one of the panellists at Global Tech Summit, Goa. Session titled “Future Proofing the Workforce”', '2024-03-28', 'Cares-Goa', 'NEWS', '#', 'img/blogs/GlobalTech_2.jpeg'),
(5, 'PMU – CARES at DIDAC-INDIA in Bangalore', '2023-11-01', 'Cares-Goa', 'NEWS', '#', 'img/blogs/CARES-PMU-at-DIDACIndia-Main.jpg'),
(6, 'PMU – CARES at Quest2Learn Conference in Bangalore', '2023-11-01', 'Cares-Goa', 'NEWS', '#', 'img/blogs/PMU-CARES-at-Quest2Learn-Conference-in-Bangalore-Main.jpg'),
(7, 'Blender-Nation-Thon State Level', '2023-11-01', 'Cares-Goa', 'NEWS', '#', 'img/blogs/Blender-Nation-Thon-CARES-PMU-2.jpg'),
(8, 'Blender-Nation-Thon-Taluka Level', '2023-11-01', 'Cares-Goa', 'NEWS', '#', 'img/blogs/Blender-Nation-Thon-TalukaLevel-13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pmucares_album`
--

CREATE TABLE `pmucares_album` (
  `albumid` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `adesc` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `col_id` int(5) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmucares_album`
--

INSERT INTO `pmucares_album` (`albumid`, `name`, `adesc`, `image`, `date`, `status`, `col_id`, `category`) VALUES
(1, 'PAPER FANCY DRESS COMPETITION', 'PMU Cares hosted a Paper Fancy Dress Competition where students showcased their creativity by making costumes out of paper. It was an event full of fun and imagination.', 'section1-cover.jpg', '2024-06-21 10:00:00', 'process', 1, 'competition'),
(2, 'ONLINE VIDEO CONFERENCES', 'PMU Cares organized several online video conferences to keep the community connected and engaged. These conferences covered a wide range of topics and allowed for meaningful discussions.', 'section2-cover.jpg', '2024-06-21 10:30:00', 'process', 2, 'conference'),
(3, 'OFFLINE SESSIONS', 'Offline sessions at PMU Cares provided an opportunity for face-to-face interactions and hands-on learning experiences. These sessions were instrumental in fostering a deeper understanding of various subjects.', 'section3-cover.jpg', '2024-06-21 11:00:00', 'process', 3, 'session'),
(4, 'INAUGURATION CEREMONY', 'The inauguration ceremony at PMU Cares marked the beginning of a new chapter. The event was attended by dignitaries and well-wishers, and it set the tone for the institution\'s future endeavors.', 'section4-cover.jpg', '2024-06-21 11:30:00', 'process', 4, 'ceremony');

-- --------------------------------------------------------

--
-- Table structure for table `pmucares_gallery`
--

CREATE TABLE `pmucares_gallery` (
  `gid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `gimages` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmucares_gallery`
--

INSERT INTO `pmucares_gallery` (`gid`, `aid`, `gname`, `gimages`, `date`, `status`) VALUES
(1, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:01:00', 'process'),
(2, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:01:30', 'process'),
(3, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:02:00', 'process'),
(4, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:02:30', 'process'),
(5, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:03:00', 'process'),
(6, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:31:00', 'process'),
(7, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:31:30', 'process'),
(8, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:32:00', 'process'),
(9, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:32:30', 'process'),
(10, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:33:00', 'process'),
(11, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:01:00', 'process'),
(12, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:01:30', 'process'),
(13, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:02:00', 'process'),
(14, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:02:30', 'process'),
(15, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:03:00', 'process'),
(16, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:31:00', 'process'),
(17, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:31:30', 'process'),
(18, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:32:00', 'process'),
(19, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:32:30', 'process'),
(20, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:33:00', 'process'),
(21, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:04:00', 'process'),
(22, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:34:00', 'process'),
(23, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:04:00', 'process'),
(24, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:34:00', 'process'),
(25, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:05:00', 'process'),
(26, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:06:00', 'process'),
(27, 1, 'PAPER FANCY DRESS COMPETITION', 'section1-cover.jpg', '2024-06-21 10:07:00', 'process'),
(28, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:35:00', 'process'),
(29, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:36:00', 'process'),
(30, 2, 'ONLINE VIDEO CONFERENCES', 'section2-cover.jpg', '2024-06-21 10:37:00', 'process'),
(31, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:05:00', 'process'),
(32, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:06:00', 'process'),
(33, 3, 'OFFLINE SESSIONS', 'section3-cover.jpg', '2024-06-21 11:07:00', 'process'),
(34, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:35:00', 'process'),
(35, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:36:00', 'process'),
(36, 4, 'INAUGURATION CEREMONY', 'section4-cover.jpg', '2024-06-21 11:37:00', 'process');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

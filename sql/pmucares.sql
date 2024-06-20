-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 09:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

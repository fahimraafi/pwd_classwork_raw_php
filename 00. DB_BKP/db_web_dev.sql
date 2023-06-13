-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 12:36 PM
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
-- Database: `db_web_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_category` varchar(200) NOT NULL,
  `portfolio_title` varchar(200) NOT NULL,
  `portfolio_image` varchar(200) NOT NULL,
  `portfolio_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `portfolio_category`, `portfolio_title`, `portfolio_image`, `portfolio_status`) VALUES
(7, 'Placeat sit rem und', 'Beatae architecto po', '20230612_1686593124.jpg', 'active'),
(9, 'Eos dolor reprehende', 'Tempore voluptas li', '20230612_1686594529.jpg', 'active'),
(10, 'Web Design', 'WordPress Design', '20230612_1686594591.jpg', 'active'),
(11, 'Digital Marketing', 'SEO', '20230612_1686594632.jpg', 'active'),
(12, 'Video Editing', 'Motion Graphics Projects', '20230613_1686636480.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_description` text NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `service_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_icon`, `service_status`) VALUES
(1, 'Web Design', 'Web design is the process of creating and designing the visual appearance and layout of websites.', 'fa fa-users', 'active'),
(2, 'Web Dev', 'Web development requires continuous learning and adaptation to keep up with evolving technologies, security practices, and industry standards. ', 'fa fa-star', 'active'),
(3, 'Digital Marketing', ' Digital marketing refers to the strategic use of various digital channels and tactics to promote products, services, or brands and reach a target audience. ', 'fa fa-facebook', 'deactive'),
(4, 'Search Engine Optimization', 'SEO, or Search Engine Optimization, is the practice of optimizing a website and its content to improve its visibility and rankings in search engine results pages (SERPs).', 'fa fa-google', 'active'),
(5, 'Graphics Design', 'Graphic design is the art and practice of creating visual content using various elements such as typography, colors, illustrations, and images. ', 'fa fa-pen-nib', 'active'),
(6, 'Video Editing', 'Video editing is the process of manipulating and rearranging video footage to create a cohesive and visually appealing final product.', 'fa fa-magnet', 'active'),
(7, 'Lead Generation', ' Lead generation is the process of identifying and attracting potential customers or leads for a business with the goal of converting them into paying customers.', 'fa-solid fa-magne', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `profile_photo` varchar(200) NOT NULL DEFAULT 'default_photo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`, `profile_photo`) VALUES
(2, 'Raafa', 'hewewir@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(3, 'Isadora Figueroa', 'dono@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(4, 'Fahim', 'korurom@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(5, 'Yoko Garner', 'widogox@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(6, 'Barry Pruitt', 'vuduwiqad@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(7, 'Brian Manning', 'fywomyf@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(8, 'Felicia Chambers', 'sebop@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(9, 'Gareth Keith', 'xoci@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(10, 'Callie Parrish', 'zyko@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(11, 'Larissa Valentine', 'rusi@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(12, 'Fahim', 'fahim@yahoo.com', 'admin123', 'default_photo.png'),
(13, 'Cally Sweet', 'juxizote@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(14, 'Uma Rivers', 'fewy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(15, 'Kelsey Mcfadden', 'pipehi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(16, 'uddin', 'email@example', 'password', 'default_photo.png'),
(17, 'Chase Kramer', 'lujohi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(18, 'Renee Sherman', 'legaj@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(19, 'Iona Barnes', 'punirij@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(20, 'Wilma Grant', 'jolaridonu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(21, 'Jane Davis', 'sosipo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(22, 'Allen Gilliam', 'becuralig@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(23, 'Halee Kirkland', 'temewu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(25, 'Daquan Peck', 'cejemubin@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(26, 'Davis Owens', 'finali@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(27, 'Audra Marshall', 'pilecurid@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(28, 'Yeo Adkins', 'gifipasi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(29, 'Liberty Carlson', 'vopahejut@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(32, 'Armando Rodriguez', 'gyrova@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(41, 'Ratul', 'Ratul@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'default_photo.png'),
(42, 'Sabbir', 'sabbir@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'default_photo.png'),
(43, 'Hunter Gamble', 'rynibefy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(44, 'Fritz Espinoza', 'zybarodu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(45, 'Fritz Espinoza', 'zybarodu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(56, 'Fahim Uddin Raafi', 'b@c.com', '493fe62001e5f0321d0a6bbbf12a562e', '56.jpg'),
(61, 'The Boss Raafi', 'd@e.com', 'F@him122333', '61.jpg'),
(62, 'Ana De Armas', 'ana@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '62.jpg'),
(63, 'Fahim Uddin Raafi', 'x@z.com', 'R@@fi122333', '63.jpg'),
(64, 'Md. Fahim Uddin Raafi', 'e@f.com', '493fe62001e5f0321d0a6bbbf12a562e', 'default_photo.png'),
(65, 'Fahim Uddin Raafi', 'i@j.com', '493fe62001e5f0321d0a6bbbf12a562e', '65.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 12:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_njaah`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE `log_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `Uname` varchar(15) NOT NULL,
  `Pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_admin`
--

INSERT INTO `log_admin` (`admin_id`, `admin_name`, `Uname`, `Pass`) VALUES
(1, 'ryan', 'ry123', 'r12345');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `Te_number` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ph_number` int(11) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`Te_number`, `Username`, `F_name`, `L_name`, `Email`, `Ph_number`, `pass`) VALUES
(4, 'r12', 'ريان', 'حنتول', 'ryan-055@outlook.com', 555555555, '112233');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_courses`
--

CREATE TABLE `trainee_courses` (
  `num_t` int(5) NOT NULL,
  `Te_num` int(12) NOT NULL,
  `C_num` int(12) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee_courses`
--

INSERT INTO `trainee_courses` (`num_t`, `Te_num`, `C_num`, `C_name`, `F_name`, `L_name`) VALUES
(5, 4, 4, 'الشبكات', 'ريان', 'حنتول'),
(6, 4, 1, 'لغة بايثون', 'ريان', 'حنتول');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `T_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ph_number` int(11) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `Years_Exp` varchar(30) NOT NULL,
  `T_certificates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`T_id`, `Username`, `F_name`, `L_name`, `Email`, `Ph_number`, `pass`, `Years_Exp`, `T_certificates`) VALUES
(4, 't12', 'تركي', 'الحماد', 'turki@gmail.com', 555555555, '112233', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_courses`
--

CREATE TABLE `t_courses` (
  `C_number` int(11) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `D_time` varchar(20) NOT NULL,
  `C_date` date NOT NULL,
  `S_time` time NOT NULL,
  `E_time` time NOT NULL,
  `Requirements_name` varchar(50) NOT NULL,
  `lec_courses` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `file_course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_courses`
--

INSERT INTO `t_courses` (`C_number`, `C_name`, `content`, `D_time`, `C_date`, `S_time`, `E_time`, `Requirements_name`, `lec_courses`, `price`, `file_course`) VALUES
(1, 'لغة بايثون', 'https://www.youtube.com/embed/h3VCQjyaLws', '7 دقائق', '0000-00-00', '00:00:00', '00:00:00', '', 'تركي', 0, 'أسباب مهمة لتعلم لغة البايثون.pdf'),
(2, 'مقدمة في التصميم', 'https://www.youtube.com/embed/UD02WP5VIaA', '18 دقيقة', '0000-00-00', '00:00:00', '00:00:00', 'شهادة ثانوية', 'تركي', 0, ''),
(3, 'البرمجة', 'https://www.youtube-nocookie.com/embed/9QC-PFHo8Yw', '6 دقائق', '0000-00-00', '00:00:00', '00:00:00', 'لابتوب', 'تركي', 0, ''),
(4, 'الشبكات', 'https://www.youtube-nocookie.com/embed/LzgX7qeOeQ4', '6 دقائق ونصف', '0000-00-00', '00:00:00', '00:00:00', '', 'تركي', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`Te_number`);

--
-- Indexes for table `trainee_courses`
--
ALTER TABLE `trainee_courses`
  ADD PRIMARY KEY (`num_t`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `t_courses`
--
ALTER TABLE `t_courses`
  ADD PRIMARY KEY (`C_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `Te_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainee_courses`
--
ALTER TABLE `trainee_courses`
  MODIFY `num_t` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

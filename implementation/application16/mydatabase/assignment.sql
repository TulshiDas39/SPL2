-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 08:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `title` text,
  `description` text,
  `format` text,
  `file` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `group_id`, `title`, `description`, `format`, `file`, `date`, `user_id`) VALUES
(1, 6, 'first', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.pdf .ppt .txt', NULL, '2018-04-28 02:00:00', NULL),
(2, 6, 'second', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.exe', NULL, '0000-00-00 00:00:00', NULL),
(3, 6, 'third', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.java', NULL, '0000-00-00 00:00:00', NULL),
(4, 6, 'fourth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.c cpp', NULL, '0000-00-00 00:00:00', NULL),
(5, 6, 'fifth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '.pdf', '2018-04-28 00:00:00', NULL),
(6, 6, 'sixth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.pdf', '/folder/a.pdf', '2018-04-28 00:00:00', NULL),
(7, 6, 'seventh', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.txt', NULL, '2018-04-28 00:00:00', NULL),
(8, 6, 'eight', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.pdf', NULL, '2018-04-28 09:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `FKuser_ID` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `FKuser_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

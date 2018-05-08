-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 08:46 AM
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
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `post_id` int(11) NOT NULL,
  `assignment_no` int(11) NOT NULL,
  `format` text,
  `due` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`post_id`, `assignment_no`, `format`, `due`) VALUES
(13, 1, '.java', '2018-05-01 00:00:00'),
(14, 2, '.cpp .java', '2018-05-01 00:00:00'),
(15, 3, '.phf .cpp', '2018-05-02 00:00:00'),
(16, 4, '.php', '2018-05-01 00:00:00'),
(17, 5, '.java .php', '2018-05-03 00:00:00'),
(18, 6, '.csv', '2018-05-03 00:00:00'),
(19, 7, '.txt', '2018-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `assignment_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `user_id`, `subject`, `section`, `code`, `assignment_count`) VALUES
(1, 1, 'Object Oriented Programming1', '3rd semister, IIT,DuU', 'sldkf32', 0),
(2, 3, 'Object Oriented Programming2', '4rth semister,IIT,DU', 'sadii21', 0),
(3, 1, 'Parallel Computing', '5th semister,IIT,DU', 'saldkf56', 0),
(4, 1, 'Design Patterin', '5th semister,IIT,DU', 'afkl45', 0),
(5, 1, 'Software Project Labe2', '5th semister, IIT,DU', 'skj23', 0),
(6, 1, 'Database Management System2', '5th semister,IIT,DU', 'skdf34', 8),
(7, 4, 'Structure Programming', '1st Semister,IIT,DU', 'fsldk23', 0),
(8, 2, 'Descrete Math', '1st Semister, IIT,DU', 'asjkd96', 0),
(9, 3, 'Math', '2nd Semister, IIT, DU', 'sssfdk34', 0),
(10, 1, 'Software Engineering', '2nd Semister,IIT,DU', 'lsdkf23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `user_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`) VALUES
(16, 'first title', 'I have created first title in this post'),
(17, 'second', 'this is my second post'),
(18, 'third', 'This is my third title for learning'),
(19, 'fourth value', 'This is my fourth title for learining'),
(20, 'fifth title', 'this is my fifth title for learning'),
(21, 'sixth title', 'this is my sixth title for learning'),
(22, 'seventh title', 'this is my seventh title for learning'),
(23, 'eight title', 'this is my eight th title for learning'),
(24, 'nine title', 'this my nine th title'),
(25, 'ten', 'this is my tenth title for learning'),
(26, 'eleventh title', 'this is my eleventh title for my learning\r\nthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningtthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learninghis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learningthis is my eleventh title for my learning'),
(27, 'twelve title', 'this is my twelve title for learning'),
(28, 'thirteen title', 'this is my thirteen title for learning'),
(29, 'fourteen tltle', 'this is fourteen title for learining'),
(30, 'fifteen title', 'this is my fifteen title for learning'),
(31, '16', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(32, '17', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(33, '18', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(34, '19', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(35, '20', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(36, '21', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(37, '22', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph'),
(38, '23', 'this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph this is paragraph  this is paragraph this is paragraph this is paragraph this is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraphthis is paragraph');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `title` text,
  `description` text,
  `file` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `group_id`, `title`, `description`, `file`, `date`, `user_id`, `type`) VALUES
(1, 6, 'first', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '2018-04-28 02:00:00', 1, 0),
(2, 6, 'second', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '0000-00-00 00:00:00', 1, 0),
(3, 6, 'third', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '0000-00-00 00:00:00', 1, 0),
(4, 6, 'fourth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '0000-00-00 00:00:00', 1, 0),
(5, 6, 'fifth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '.pdf', '2018-04-28 00:00:00', 1, 0),
(6, 6, 'sixth', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', '/folder/a.pdf', '2018-04-28 00:00:00', 1, 0),
(7, 6, 'seventh', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '2018-04-28 00:00:00', 1, 0),
(8, 6, 'eight', 'slkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl kslkfa;lksf ;alk a;lk a;lsk a;slk a;lsk ja;sl ka;l a;l ka;slk;lka; ;la;slka;l kja;sl ja;slkfj ;sla ; ;asf j;l ;al ;asf j;asl k', NULL, '2018-04-28 09:00:00', 1, 0),
(9, 1, 'title', 'asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf', NULL, '2018-04-29 13:44:08', 1, 0),
(10, 1, 'title', 'asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf', NULL, '2018-04-29 13:44:08', 1, 0),
(11, 1, 'tile', 'asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf\r\nasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf', NULL, '2018-04-29 13:52:36', 4, 0),
(12, 1, 'title', 'asdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf\r\nasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awfasdfasdafdgf ajkfa;skfdj ;alk ;lka ;aklj;alskja;slka;lskj;slk ja;slkdfja;sl kj;lsk j;awf', NULL, '2018-04-29 13:52:36', 4, 0),
(13, 6, 'ass 1', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:21:27', 2, 1),
(14, 6, 'ass 2', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:21:28', 2, 1),
(15, 6, 'ass 3', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:24:21', 2, 1),
(16, 6, 'ass 4', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:24:22', 2, 1),
(17, 6, 'ass 5', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:25:47', 2, 1),
(18, 6, 'ass 6', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:25:48', 2, 1),
(19, 6, 'ass 7', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:26:36', 2, 1),
(20, 6, 'ass 8', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:26:37', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_group`
--

CREATE TABLE `student_group` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_group`
--

INSERT INTO `student_group` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`user_id`, `post_id`, `date_time`, `file`) VALUES
(5, 13, '2018-05-02 12:25:58', 'abc;'),
(5, 14, '2018-05-02 12:26:30', 'abcd;'),
(5, 15, '2018-05-02 12:26:57', 'bcs;'),
(5, 16, '2018-05-02 12:27:17', 'dda;'),
(5, 17, '2018-05-02 12:28:41', 'had;'),
(5, 18, '2018-05-02 12:29:05', 'daca;'),
(5, 20, '2018-05-02 12:31:06', 'adfasdfa;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `FirstName`, `LastName`, `email`, `type`, `phone_number`, `password`) VALUES
(1, 'Tulshi', 'Das', 'tulshidas37@gmail.com', 'i', '01857580099', 'pass123'),
(2, 'Maloy ', 'Sarkar', 'bsse0811@iit.du.ac.bd', 'i', '01857580099', 'pass123'),
(3, 'Saisab ', 'Saha', 'bsse0817@iit.du.ac.bd', 'i', '01957580099', 'pass123'),
(4, 'Chinmoy ', 'Acharjee', 'bsse0819@iit.du.ac.bd', 'i', '01657580099', 'pass123'),
(5, 'Tahlil', NULL, 'bsse0803@iit.du.ac.bd', 's', '01988820881', 'pass123'),
(6, 'Shihab', NULL, 'bsse0822@iit.du.ac.bd', 's', '01688820881', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `assignment_no` (`assignment_no`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `FKuser_ID` (`user_id`);

--
-- Indexes for table `student_group`
--
ALTER TABLE `student_group`
  ADD PRIMARY KEY (`group_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`user_id`,`date_time`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `FKpost_IDs` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `FKpost_ID` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FKuser_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

--
-- Constraints for table `student_group`
--
ALTER TABLE `student_group`
  ADD CONSTRAINT `FK_group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`),
  ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `FK_user_ids` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FKpost_IDs` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

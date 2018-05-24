-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 01:04 PM
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
(13, 1, 'pdf|txt|ppt', '2018-05-01 00:00:00'),
(14, 2, 'cpp|java', '2018-05-01 00:00:00'),
(15, 3, 'pdf|txt', '2018-05-02 00:00:00'),
(16, 4, 'pdf', '2018-05-01 00:00:00'),
(17, 5, 'java|php', '2018-05-03 00:00:00'),
(18, 6, 'csv', '2018-05-03 00:00:00'),
(19, 7, 'txt|c|cpp', '2018-05-01 00:00:00'),
(20, 8, 'pdf|php|txt', '2018-05-15 00:00:00');

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
  `assignment_count` int(11) NOT NULL DEFAULT '0',
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `user_id`, `subject`, `section`, `code`, `assignment_count`, `year`) VALUES
(1, 1, 'Object Oriented Programming1', '3rd semister, IIT,DuU', 'sldkf32', 0, 2015),
(2, 3, 'Object Oriented Programming2', '4rth semister,IIT,DU', 'sadii21', 0, 2018),
(3, 1, 'Parallel Computing', '5th semister,IIT,DU', 'saldkf56', 0, 2018),
(4, 1, 'Design Patterin', '5th semister,IIT,DU', 'afkl45', 0, 2018),
(5, 1, 'Software Project Labe2', '5th semister, IIT,DU', 'skj23', 0, 2018),
(6, 1, 'Database Management System2', '5th semister,IIT,DU', 'skdf34', 8, 2018),
(7, 4, 'Structure Programming', '1st Semister,IIT,DU', 'fsldk23', 0, 2018),
(8, 2, 'Descrete Math', '1st Semister, IIT,DU', 'asjkd96', 0, 2017),
(9, 3, 'Math', '2nd Semister, IIT, DU', 'sssfdk34', 0, 2017),
(10, 1, 'Software Engineering', '2nd Semister,IIT,DU', 'lsdkf23', 0, 2017),
(11, 1, 'Structure Programming', '1st semister, IIT ,DU', 'asdk45', 0, 2017),
(12, 1, 'MATH', '1st semister,IIT DU', 'askd12', 0, 2017),
(13, 1, 'Descrete MATH', '1st semister,IIT,DU', 'ad67skd', 0, 2015),
(14, 1, 'Software Engineering', '1st semister, IIT, DU', 'a;sdkj23', 0, 2017);

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
(20, 6, 'ass 8', 'this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment this is a assignment ', NULL, '2018-05-01 17:26:37', 2, 1),
(21, 6, 'Web Technology', 'this must to for all of you\r\nother wise you can\'t pass the exam.', NULL, '2018-05-14 16:18:40', 1, 0),
(22, 6, 'to test', 'I am testing if post is stored successfully or not', NULL, '2018-05-14 18:18:15', 1, 0),
(23, 6, 'testing', 'i am testing', NULL, '2018-05-14 18:19:50', 1, 0),
(24, 6, 'Testing hid of form window', 'this a description this a description this a description this a description this a description aslkfjalsk jalkfj', '0', '2018-05-14 18:27:44', 1, 0),
(25, 6, 'testing one more', 'this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post this is post \r\nthis is post \r\nthis is post \r\nthis is post ', '0', '2018-05-14 18:29:51', 1, 0),
(26, 6, 'asdf', 'asdfasdfasdfasdfasdf', '0', '2018-05-14 18:38:14', 1, 0),
(27, 6, 'asfasdfa;ksdfalkdfjlk', 'asdifjalskdfjalksdfjlkrjoierf;lkj akf; ilalifja ;ljao;iefja;ij ;a;isfj', '0', '2018-05-14 18:40:19', 1, 0),
(28, 6, 'preappend data testing', 'description description description description description description description description description description description description \r\ndescription \r\ndescription \r\ndescription \r\ndescription \r\ndescription \r\ndescription \r\ndescription \r\ndescription ', '0', '2018-05-14 18:45:39', 1, 0),
(29, 6, 'error chatched ', 'fine worked fine worked fine worked fine worked fine worked v fine workedfine workedfine worked\r\nfine worked\r\nfine worked\r\nfine worked', '0', '2018-05-14 21:58:04', 1, 0),
(30, 6, 'my post', 'this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post this is my post\r\nthis is my post\r\n this is my post\r\n this is my post\r\n this is my post\r\nthis is my post', '0', '2018-05-16 14:34:23', 1, 0),
(31, 6, 'attachmet test', 'this post is testing attachment this post is testing attachment this post is testing attachment this post is testing attachment this post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\nv\r\nthis post is testing attachment \r\nthis post is testing attachment \r\nthis post is testing attachment \r\n', '0', '2018-05-16 16:05:00', 1, 0),
(32, 6, 'testing attachment', 'attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment attachment ', '0', '2018-05-16 16:10:08', 1, 0),
(33, 6, 'testing attachment', 'attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on attachment test is going on ', 'files/posts/38ddb5477b2cc8f1c4064156b5588127.pdf|posterfinalfinalfinal.pdf', '2018-05-16 16:15:39', 1, 0),
(34, 6, 'testing', 'hello world hello world hello world hello world hello world hello world hello world hello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world hello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world ', '0', '2018-05-16 16:36:20', 1, 0),
(35, 6, 'test form reset', 'hello world hello world hello world hello world hello world hello world hello world hello world \r\nhello world hello world hello world hello world hello world hello world hello world hello world \r\nhello world hello world hello world hello world hello world hello world hello world hello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world hello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world \r\nhello world ', 'files/posts/da47912b2716783a3e97456d23fce616.pdf|untitled.pdf', '2018-05-16 16:42:24', 1, 0),
(36, 6, 'test', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world ', 'files/posts/8399456a0330e2bb3123f0aa7681b928.pdf|myperfectresume_com (1).pdf', '2018-05-16 17:01:43', 1, 0),
(37, 6, 'test', 'hello world hello worldhello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world ', 'files/posts/5d847f2ef0d230e9743a944804cabfea.jpg|162-Steely-150x150.jpg', '2018-05-16 17:03:58', 1, 0),
(38, 6, 'test', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world ', 'files/posts/a6131f5081789203a5d72de014f71ed5.pdf|Finalize Resume - My Perfect Resume.pdf', '2018-05-16 17:06:24', 1, 0),
(39, 6, 'testing', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world ', 'files/posts/81849eb838ea35d671eb2ffd15dec851.pdf|Finding Minimum Cut in a Graph.pdf', '2018-05-16 17:11:21', 1, 0),
(40, 6, 'test', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world ', 'files/posts/43baf0a0c698978fd5dc37adfa6d3cae.pdf|Nimai&Kaji.pdf', '2018-05-16 17:12:51', 1, 0),
(42, 6, 'sdf', 'asf', 'files/posts/4787c50de1bd8e99ad252752aaefa30e.pdf|pu1473410272.pdf', '2018-05-16 18:11:29', 1, 0),
(43, 6, 'asdfasdf', 'asdf', 'files/posts/458b15a273a371147d4b18df41f39f56.htm|watch_2.htm', '2018-05-16 18:12:58', 1, 0),
(44, 6, 'sdgas', 'asdgasd', 'files/posts/90cf19508e3ec6c12c5c8f6d7fb240db|playlist(1)', '2018-05-16 18:16:45', 1, 0),
(45, 6, 'asdf', 'asdfasdgasdg', 'files/posts/53dca4a0fee1af0c8f175f1ee4f63866.htm|9wzdncrfj254.htm', '2018-05-16 18:18:48', 1, 0),
(46, 6, 'a;lsdkfjalk', 'as;lkdfjaslkdf', 'files/posts/121dbc09eb7103740bf71530ed013c29.pdf|cpp_tutorial.pdf', '2018-05-16 18:20:36', 1, 0),
(47, 6, 'dfgsgfs', 'sdgfsfgsdfg sd sdfg sdfgsdfgdhsdg sdgsdfgsd dsfgshsdg asdfsfgdg', '0', '2018-05-16 19:45:15', 1, 0),
(48, 6, 'asdfasfdsdfg', 'asdfasfdsdfg asdfasfdsd asdfasfdsdfgasdfasfdsdfgasdfasfdsdfgasdfasfdsdfgasdfasfdsdfg asdfasfdsdfgfg', '0', '2018-05-16 19:49:34', 1, 0),
(49, 6, 'as;kdfjslkdjfgshlkdjf', 'sdkfjg;sdkjf;askj ;alks aksdfja sdklfja alkdjf kaj', '0', '2018-05-16 19:50:50', 1, 0),
(50, 6, 'test', 'to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test to test ', 'files/posts/149ec175b8e9ce316ff4961eb963b133.txt|PHP Bangla Tutorial Part 27 String Functions htmlentities and implode (Description).txt', '2018-05-17 00:56:50', 1, 0);

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
  `path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`user_id`, `post_id`, `date_time`, `path`, `file_name`) VALUES
(5, 13, '2018-05-02 12:25:58', 'abc;', ''),
(5, 14, '2018-05-02 12:26:30', 'abcd;', ''),
(5, 15, '2018-05-02 12:26:57', 'bcs;', ''),
(5, 16, '2018-05-02 12:27:17', 'dda;', ''),
(5, 17, '2018-05-02 12:28:41', 'had;', ''),
(5, 18, '2018-05-02 12:29:05', 'daca;', ''),
(5, 20, '2018-05-02 12:31:06', 'adfasdfa;', ''),
(5, 20, '2018-05-09 03:33:28', 'files/submissions/f83c3cd2fa13eefbe39bcb2421db10fe.zip', 'test.zip'),
(5, 20, '2018-05-09 03:39:59', 'files/submissions/1a3ead27be6342acb6e32a1cecfe3998.zip', 'magnal_arati.zip'),
(5, 19, '2018-05-09 11:37:57', 'files/submissions/849db99581c035c04521a38733b37d47.zip', 'test.zip'),
(5, 16, '2018-05-09 11:58:51', 'files/submissions/34fecc149e035aa5651559f1589e8aeb.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:03:15', 'files/submissions/b680430d95af180b9d630df592943797.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:22:54', 'files/submissions/7a793b9662e84f7543bd29ca4cedf65d.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:34:13', 'files/submissions/4f88f2286ebccf83c4b4406f670392cb.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:50:37', 'files/submissions/f6d6dd3ac9960bec8e3851978b0e18ba.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:51:25', 'files/submissions/1ec3b7d64aa9d40a256075152059d25a.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 12:53:01', 'files/submissions/51402db1fb84fe160b9fd14dd189d3e5.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 13:01:50', 'files/submissions/826b32bf3672ebe33c140fd506216fd6.zip', 'magnal_arati (2).zip'),
(5, 16, '2018-05-09 13:16:54', 'files/submissions/c9d39a0bc00cf2854a9226c97e7dc894.zip', 'magnal_arati (2).zip'),
(5, 19, '2018-05-09 14:37:25', 'files/submissions/800cb0937b127c65ca2ffaace6d6cba1.zip', 'test.zip'),
(5, 19, '2018-05-09 14:39:40', 'files/submissions/10a0dc64e139dc9f0703d480fdee9c5c.zip', 'test.zip'),
(5, 19, '2018-05-09 14:40:16', 'files/submissions/1f8b1f7092dce2c7024a002f96560332.zip', 't.zip'),
(5, 20, '2018-05-09 14:41:04', 'files/submissions/796004f5ff3e52c5a621fa04d3fb8e1a.zip', 't.zip'),
(5, 20, '2018-05-09 14:43:27', 'files/submissions/196378f41f460c50f6d91ee96b05a76c.zip', 't.zip'),
(5, 20, '2018-05-09 14:49:01', 'files/submissions/ecccdc40fdf5e02f54c9d5b072e46ce8.zip', 't.zip'),
(5, 20, '2018-05-09 15:05:54', 'files/submissions/57d005345fe73ffc2490318307c374d6.zip', 't.zip'),
(5, 20, '2018-05-09 23:15:20', 'files/submissions/ea3ee55bcaddbd8ccbef60bff3970f19.zip', 'ass20.zip'),
(6, 13, '2018-05-07 17:52:55', 'uploads/t.txt', 'myfile.txt');

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
  MODIFY `assignment_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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

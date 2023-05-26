-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2021 at 06:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userId`, `userName`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`) VALUES
(5, 'admin', 'devvignesh77@gmail.com', 'dfssdfgdfgdgfd'),
(7, 'admin', 'devvignesh77@gmail.com', 'dfssdfgdfgdgfd'),
(10, 'admin', 'devvignesh77@gmail.com', 'dcwae'),
(11, 'admin', 'devvignesh77@gmail.com', 'dcwae'),
(12, 'admin', 'devvignesh77@gmail.com', 'ascs'),
(13, 'admin', 'devvignesh77@gmail.com', 'ascs'),
(14, 'sshitech', 'devvignesh77@gmail.com', 'fdssadgas'),
(15, 'sshitech', 'devvignesh77@gmail.com', 'fdssadgas'),
(16, 'admin', 'devvignesh77@gmail.com', 'eafds'),
(17, 'admin', 'admin@admin.com', 'dsasffafa'),
(18, 'sshitech', 'anuj.lpu1@gmail.com', 'assd'),
(19, 'sshitech', 'anuj.lpu1@gmail.com', 'assd'),
(20, 'vignesh', 'devvignesh77@gmail.com', 'sdffgddggfd'),
(21, 'admin', 'devvignesh77@gmail.com', 'zvcvzv'),
(22, 'teja', 'anuj.lpu1@gmail.com', 'dfhjgjklky'),
(23, 'CHANNA', 'devvignesh77@gmail.com', 'DFDSDHSEHTWARKFDS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cshort` varchar(100) NOT NULL,
  `cfull` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cshort`, `cfull`) VALUES
(12, 'css', 'computer science '),
(16, 'cs', 'computer science'),
(21, 'cs', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `sid` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`sid`, `course_code`, `course_name`, `credits`) VALUES
(2, '15cd23', 'xx', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `cid` int(11) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `dept_sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, 'vignesh', 'devvignesh77@gmail.com', '9740698090', 'excellent', 'asasd'),
(2, 'vignesh', 'devvignesh77@gmail.com', '9740698090', 'excellent', 'asasd'),
(3, 'vignesh', 'devvignesh77@gmail.com', '9740698090', 'excellent', 'asasd'),
(4, 'as', '', '', 'excellent', 'dsS'),
(5, '', '', '', 'excellent', 'asasd'),
(6, '', '', '', 'excellent', 'fgdnd'),
(7, '', '', '', 'excellent', 'fgdnd'),
(8, '', '', '', 'excellent', 'JSDHHDS'),
(9, '', '', '', 'excellent', 'ssa'),
(10, '', '', '', 'excellent', 'ssa'),
(11, 'vignesh', 'devvignesh77@gmail.com', '9740698090', 'excellent', 'vsavsvbns'),
(12, 'vignesh', 'devvignesh77@gmail.com', '9740698090', 'excellent', 'vsavsvbns'),
(13, '', '', '', 'excellent', 'sdfasd'),
(14, '', '', '', 'poor', 'wewfe'),
(15, '', '', '', 'poor', 'dfhfhjh'),
(16, '', '', '', 'excellent', 'JLK;K'),
(17, '', '', '', 'excellent', 's'),
(18, '', '', '', 'excellent', 's');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sid` int(11) NOT NULL,
  `stname` varchar(50) NOT NULL,
  `stusn` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `s1in` int(50) NOT NULL,
  `s1ex` int(50) NOT NULL,
  `s1tot` int(50) NOT NULL,
  `s1gr` varchar(50) NOT NULL,
  `s2in` int(50) NOT NULL,
  `s2ex` int(50) NOT NULL,
  `s2tot` int(50) NOT NULL,
  `s2gr` varchar(50) NOT NULL,
  `s3in` int(50) NOT NULL,
  `s3ex` int(50) NOT NULL,
  `s3tot` int(50) NOT NULL,
  `s3gr` varchar(50) NOT NULL,
  `s4in` int(50) NOT NULL,
  `s4ex` int(50) NOT NULL,
  `s4tot` int(50) NOT NULL,
  `s4gr` varchar(50) NOT NULL,
  `s5in` int(50) NOT NULL,
  `s5ex` int(50) NOT NULL,
  `s5tot` int(50) NOT NULL,
  `s5gr` varchar(50) NOT NULL,
  `s6in` int(50) NOT NULL,
  `s6ex` int(50) NOT NULL,
  `s6tot` int(50) NOT NULL,
  `s6gr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sid`, `stname`, `stusn`, `sem`, `s1in`, `s1ex`, `s1tot`, `s1gr`, `s2in`, `s2ex`, `s2tot`, `s2gr`, `s3in`, `s3ex`, `s3tot`, `s3gr`, `s4in`, `s4ex`, `s4tot`, `s4gr`, `s5in`, `s5ex`, `s5tot`, `s5gr`, `s6in`, `s6ex`, `s6tot`, `s6gr`) VALUES
(2, 'subash  v', '364cs17013', 2, 12, 34, 46, 'P', 23, 34, 57, 'P', 12, 34, 46, 'P', 23, 34, 57, 'P', 23, 34, 57, 'P', 11, 34, 45, 'F'),
(3, 'subash  ', '364cs17005', 5, 31, 34, 65, 'P', 31, 34, 65, 'P', 31, 34, 65, 'P', 23, 34, 57, 'P', 31, 34, 65, 'P', 11, 34, 45, 'F'),
(4, 'vignesh', '364cs17033', 6, 23, 32, 55, 'P', 32, 32, 64, 'P', 32, 32, 64, 'P', 32, 32, 64, 'P', 32, 28, 60, 'P', 32, 28, 60, 'P'),
(7, 'vignesh v', '364cs17031', 6, 23, 27, 50, 'F', 32, 33, 65, 'P', 34, 34, 68, 'P', 34, 25, 59, 'F', 43, 43, 86, 'P', 54, 47, 101, 'P'),
(8, 'vignesh', '364cs17033', 5, 32, 23, 55, 'F', 23, 12, 35, 'F', 32, 23, 55, 'F', 23, 23, 46, 'F', 23, 34, 57, 'P', 34, 23, 57, 'F'),
(9, 'subash  ', '364cs17002', 6, 23, 37, 60, 'P', 23, 34, 57, 'P', 23, 34, 57, 'P', 32, 43, 75, 'P', 23, 34, 57, 'P', 23, 54, 77, 'P'),
(11, 'teja', '364cs17028', 6, 23, 34, 57, 'P', 34, 35, 69, 'P', 34, 54, 88, 'P', 5, 65, 70, 'F', 45, 76, 121, 'P', 56, 65, 121, 'P'),
(12, 'yashu', '364cs17035', 6, 12, 23, 35, 'F', 12, 23, 35, 'F', 23, 23, 46, 'F', 23, 23, 46, 'F', 23, 23, 46, 'F', 23, 23, 46, 'F'),
(13, 'kamali', '1234567890', 6, 23, 35, 58, 'P', 23, 44, 67, 'P', 34, 77, 111, 'P', 22, 88, 110, 'P', 34, 88, 122, 'P', 56, 99, 155, 'P'),
(14, 'G CHANNA BASAVA', '1RV20IS400', 6, 20, 40, 60, 'P', 11, 45, 56, 'F', 19, 90, 109, 'P', 20, 120, 140, 'P', 21, 43, 64, 'P', 32, 54, 86, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` int(5) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcontact` varchar(15) NOT NULL,
  `department` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `usn`, `first_name`, `middle_name`, `last_name`, `age`, `gender`, `dob`, `city`, `pcontact`, `department`, `semester`, `email`, `address`, `image`) VALUES
(43, '364cs17033', 'vignesh v', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '9740698090', 'computer science', 6, '', '', '4.jpg'),
(46, '364cs1', 'admin', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '123456', 'computer science', 3, '', '', 'avatar.png'),
(49, '364', 'vignesh dhev', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '0000', 'department', 2, '', '', '2.jpg'),
(53, '1', 'gansha', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '77777', 'department', 77, '', '', '5.png'),
(54, '364cs17035', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '335', 'department', 1, '', '', '4.jpg'),
(56, '364cs17030', 'dhev', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '000000', 'department', 2, '', '', 'avatar5.png'),
(58, '3', 'vignesh v', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '97406980', 'computer science', 2, '', '', 'img.png'),
(59, '08', 'subash ', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '888', 'computer science', 6, '', '', '3.jpg'),
(61, '00', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '121', 'computer science', 1, '', '', 'avatar04.png'),
(66, '88', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '84', 'Apparel Design and Fabrication Technology', 6, '', '', '2.jpg'),
(67, '11', 'vignesh dhev', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '9740698', 'Apparel Design and Fabrication Technology', 6, '', '', '4.jpg'),
(68, '112', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '`', 'Computer Science and Engineering', 6, '', '', '1.jpg'),
(70, '7', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '21', 'Computer Science and Engineering', 6, '', '', 'avatar04.png'),
(74, '1rv20is405', 'vignesh', NULL, NULL, 0, '', '0000-00-00', 'BANGALORE URBAN', '0987654321', 'Information Science and Engineering', 5, '', '', '3.jpg'),
(75, '123', 'Vijayraj', '', '', 31, 'Male', '2000-07-07', 'BANGALORE URBAN', '0987654390', 'Information Science and Engineering', 6, 'ndbhalerao91@gmail.com', '962 6th cross maruthi badavane weavers colony bg-road', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `studentid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`studentid`, `username`, `password`) VALUES
(1, 'vignesh', 'c4055e3a20b6b3af3d10590ea446ef6c'),
(2, 'channa', 'be646e785b2e55ad6840f4d2167db5a2');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(100) NOT NULL,
  `cshort` varchar(50) NOT NULL,
  `cfull` varchar(100) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `cshort`, `cfull`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(6, 'cs', 'mechnical', 'pp', 'Nn', 'vv', 'g', 'q', 'w'),
(8, 'cs', 'computer science 5', 'q', 'Nn', 'vv', 'g', 'q', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`sid`,`course_code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`usn`),
  ADD UNIQUE KEY `pcontact` (`pcontact`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

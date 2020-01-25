-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 12:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `coursename` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`coursename`, `department`) VALUES
('et', 'fghjkl'),
('python', 'cse'),
('php', 'cse'),
('ML', 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `addnotice`
--

CREATE TABLE `addnotice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `beginningdate` date NOT NULL,
  `author` varchar(20) NOT NULL,
  `endingdate` date NOT NULL,
  `description` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnotice`
--

INSERT INTO `addnotice` (`notice_id`, `title`, `beginningdate`, `author`, `endingdate`, `description`, `semester`) VALUES
(1, 'Exam Declaration', '2020-01-09', 'Gaana', '2020-01-10', 'rdtfyg fydstyuh gfxd', ''),
(2, 'Holidays', '2020-01-02', 'amitha', '2020-01-16', 'erystgrsfdx', ''),
(3, 'Vacation', '2020-01-01', 'Amitha', '2020-01-16', 'due to climate chang', ''),
(4, 'Vacation', '2020-01-01', 'Amitha', '2020-01-16', 'due to climate chang', ''),
(5, 'Vacation', '2020-01-01', 'Amitha', '2020-01-16', 'due to climate chang', ''),
(6, 'Vacation', '2020-01-01', 'Amitha', '2020-01-16', 'due to climate chang', ''),
(7, 'Vacation', '2020-01-01', 'Amitha', '2020-01-16', 'due to climate chang', ''),
(8, 'series', '2020-01-01', 'Amitha', '2020-01-08', '2nd series examinati', 's1');

-- --------------------------------------------------------

--
-- Table structure for table `addsubject`
--

CREATE TABLE `addsubject` (
  `subject_id` int(11) NOT NULL,
  `course` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `subjectname` varchar(10) NOT NULL,
  `subjectcode` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubject`
--

INSERT INTO `addsubject` (`subject_id`, `course`, `department`, `subjectname`, `subjectcode`, `semester`, `credit`) VALUES
(1, 'Btech', 'CSE', 'DAA', 'r409', 's4', 9);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'amitha', 'amitha');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `resid` int(11) NOT NULL,
  `registerno` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `course` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `result` varchar(10) NOT NULL,
  `credit` int(11) NOT NULL,
  `totalgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`resid`, `registerno`, `std_id`, `course`, `name`, `subject`, `result`, `credit`, `totalgpa`) VALUES
(3, 4, 4, 'bfghg', 'hgvb', 'dsfgh', 'ghf', 100, 100),
(10, 10, 10, 'btech', 'bini', 'physics', 'A+', 3, 99);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `department` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` year(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `regno`, `name`, `mobile`, `department`, `course`, `email`, `semester`, `year`, `username`, `password`) VALUES
(12, 34, 'asad', 986543211, 'cs', 'sxs', 'sxs@gg', '', 2020, 'zxzx', '1234567'),
(12, 34, 'asad', 986543211, 'cs', 'sxs', 'sxs@gg', '', 2020, 'zxzx', '1234567'),
(10, 10, 'bini', 987654321, 'cse', 'btech', 'bini@gmail.com', '', 2015, 'bini', 'bini'),
(0, 0, '', 0, 'jsd2', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'jsd2', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'fsdgbgsf', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'gfhgnhj', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'gfhgnhj', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'gfhnghb', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'igfuydthgr', '', '', '', 0000, '', ''),
(0, 0, '', 0, 'we', '', '', '', 0000, '', ''),
(5, 5, 'anju', 8765432, 'cse', 'btech', 'bini@gmail.com', '', 2015, 'anju', 'anju'),
(29, 29, 'vani', 951753852, 'cse', 'btech', 'bini@gmail.com', 's1', 2019, 'vani', 'vani'),
(13, 13, 'jasmine', 2147483647, 'eee', 'btech', 'bini@gmail.com', 's1', 2020, 'jasmine', 'jasmine'),
(0, 16, '16', 2147483647, 'cse', 'btech', 'bini@gmail.com', 's8', 2020, 'joncey', 'joncey');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`) VALUES
('superuser', '123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` date NOT NULL,
  `department` varchar(10) NOT NULL,
  `hour1` varchar(10) NOT NULL,
  `hour2` varchar(10) NOT NULL,
  `hour3` varchar(10) NOT NULL,
  `hour4` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `department`, `hour1`, `hour2`, `hour3`, `hour4`, `semester`, `admin_id`) VALUES
('2020-01-03', 'cse', 'physics', 'chemistry', 'maths', 'malayalam', 's1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnotice`
--
ALTER TABLE `addnotice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `addsubject`
--
ALTER TABLE `addsubject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`resid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnotice`
--
ALTER TABLE `addnotice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addsubject`
--
ALTER TABLE `addsubject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `resid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

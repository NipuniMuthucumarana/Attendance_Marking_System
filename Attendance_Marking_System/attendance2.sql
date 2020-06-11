-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 08:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark_attendance`
--

CREATE TABLE `mark_attendance` (
  `STU_TOTAL` int(11) NOT NULL,
  `STUDENT_ID` int(11) NOT NULL,
  `FINGERPRINT_ID` varchar(50) NOT NULL,
  `SUBJECT_ID` varchar(10) NOT NULL,
  `DAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark_attendance`
--

INSERT INTO `mark_attendance` (`STU_TOTAL`, `STUDENT_ID`, `FINGERPRINT_ID`, `SUBJECT_ID`, `DAY`) VALUES
(1, 1001, 'abc1', 'CO223', '2019-09-10'),
(2, 1002, 'abc2', 'CO223', '2019-09-10'),
(3, 1003, 'abc3', 'CO223', '2019-09-10'),
(4, 1004, 'abc4', 'CO223', '2019-09-10'),
(5, 1001, 'abc1', 'CO223', '2019-09-11'),
(6, 1001, 'abc1', 'CO223', '2019-09-12'),
(7, 1002, 'abc2', 'CO223', '2019-09-12'),
(8, 1001, 'abc1', 'CO223', '2019-09-13'),
(9, 1002, 'abc2', 'CO223', '2019-09-13'),
(10, 1001, 'abc1', 'CO221', '2019-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `FINGERPRINT_ID` varchar(50) NOT NULL,
  `STUDENT_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CONTACT_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FINGERPRINT_ID`, `STUDENT_ID`, `NAME`, `ADDRESS`, `EMAIL`, `CONTACT_NO`) VALUES
('abc1', 1001, 'Krishan', 'NO:23,Temple Road, KAndy', 'krishan123@gmail.com', 712589427),
('abc2', 1002, 'Hasitha', 'No:62, Hospital Road, Hambantota', 'hasitha@gmail.com', 779458751),
('abc3', 1003, 'Sajini', 'No:259, Hakmana Road, Matara', 'sajini@gmail.com', 715297863),
('abc5', 1005, 'Sansala', 'No:21, Station Road, Galle', 'sansala@gmail.com', 715824962),
('abc6', 1006, 'shjr', 'sdhjtttt', 'rtfy@gmail.com', 774587878);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TEACHER_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `SUBJECT_ID` varchar(10) NOT NULL,
  `DAY` date NOT NULL,
  `TIME_SLOT` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TEACHER_ID`, `NAME`, `SUBJECT_ID`, `DAY`, `TIME_SLOT`) VALUES
(4521, 'Kamalanath Samarakoon', 'CO325', '2019-09-10', '11:00:00.120000'),
(4522, 'Isuru Navinne', 'CO321', '2019-09-10', '09:00:00.000000'),
(4523, 'Roshan Ragel', 'CO224', '2019-09-10', '10:00:00.000000'),
(4525, 'Asitha Bandaranayake', 'CO323', '2019-09-11', '14:00:00.000000'),
(4526, 'sagd', 'CO321', '2019-09-12', '13:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher2`
--

CREATE TABLE `teacher2` (
  `FINGERPRINT_ID` varchar(50) NOT NULL,
  `TEACHER_ID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CONTACT_NO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher2`
--

INSERT INTO `teacher2` (`FINGERPRINT_ID`, `TEACHER_ID`, `NAME`, `ADDRESS`, `EMAIL`, `CONTACT_NO`) VALUES
('xyz1', '4521', 'Kamalanath Samarakoon', 'No:21, Station Road, Kandy', 'ks@gmail.com', 774598269),
('xyz2', '4522', 'Isuru Navinne', 'No:56, Temple Road, Colombo', 'in@gmail.com', 715894783),
('xyz4', '4524', 'fjhgkhyt', 'drjk', 'dyu@gmail.com', 774598854),
('xyz5', '4530', 'adsf', 'sfdg', '245fcfc97499c3d738b37aaead400c30', 714586927);

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`USERNAME`, `PASSWORD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`USERNAME`, `PASSWORD`) VALUES
('teacher', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark_attendance`
--
ALTER TABLE `mark_attendance`
  ADD PRIMARY KEY (`STU_TOTAL`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TEACHER_ID`);

--
-- Indexes for table `teacher2`
--
ALTER TABLE `teacher2`
  ADD PRIMARY KEY (`TEACHER_ID`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`PASSWORD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mark_attendance`
--
ALTER TABLE `mark_attendance`
  MODIFY `STU_TOTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TEACHER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4527;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

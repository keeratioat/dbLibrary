-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2020 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorName` varchar(45) NOT NULL,
  `Tel` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorName`, `Tel`, `email`) VALUES
('kata praditwong', '0844444444', 'kata@su.ac.th'),
('suchitra adulkasem', '0899999999', 'adulkasem_s@su.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(20) NOT NULL,
  `bookName` varchar(45) NOT NULL,
  `authorName` varchar(45) NOT NULL,
  `printTime` int(20) NOT NULL,
  `publisherName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `bookName`, `authorName`, `printTime`, `publisherName`) VALUES
('9786162820403', 'Database Systems', 'suchitra adulkasem', 2, 'ท้อป'),
('9786164403093', 'Machine Learning', 'kata praditwong', 1, 'โรงพิมพ์มหาวิทยาลัยศิลปากร'),
('9786164409514', 'Discrete Computational Structure', 'kata praditwong', 1, 'โรงพิมพ์มหาวิทยาลัยศิลปากร'),
('9786164972100', 'Analysis And Design Of Algorithms', 'kata praditwong', 1, 'โรงพิมพ์มหาวิทยาลัยศิลปากร'),
('9789749742648', 'Operating Systems', 'suchitra adulkasem', 1, 'โปรวิชั่น');

-- --------------------------------------------------------

--
-- Table structure for table `borrowandreturnbook`
--

CREATE TABLE `borrowandreturnbook` (
  `ISBN` varchar(20) NOT NULL,
  `borrowBook` date NOT NULL,
  `returnBook` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `idMember` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowandreturnbook`
--

INSERT INTO `borrowandreturnbook` (`ISBN`, `borrowBook`, `returnBook`, `status`, `idMember`) VALUES
('9789749742648', '2020-02-01', '2020-02-04', 'ON SHELVES', 'A001'),
('9786162820403', '2020-02-03', '2020-02-04', 'ON SHELVES', 'A002');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` varchar(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `Tel` varchar(11) NOT NULL,
  `Address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `name`, `lastName`, `Tel`, `Address`) VALUES
('A001', 'keerati', 'lertwiriyachai', '0812345678', 'Bangkok'),
('A002', 'prayuth', 'chan-o-cha', '094444112', 'Parliament');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherName` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherName`, `Address`) VALUES
('ท้อป', 'Bangkok'),
('โปรวิชั่น', 'Bangkok'),
('โรงพิมพ์มหาวิทยาลัยศิลปากร', 'Nakornpathom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorName`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `publisherName` (`publisherName`),
  ADD KEY `authorName` (`authorName`);

--
-- Indexes for table `borrowandreturnbook`
--
ALTER TABLE `borrowandreturnbook`
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `idMember` (`idMember`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`publisherName`) REFERENCES `publisher` (`publisherName`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`authorName`) REFERENCES `author` (`authorName`);

--
-- Constraints for table `borrowandreturnbook`
--
ALTER TABLE `borrowandreturnbook`
  ADD CONSTRAINT `borrowandreturnbook_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`),
  ADD CONSTRAINT `borrowandreturnbook_ibfk_2` FOREIGN KEY (`idMember`) REFERENCES `member` (`idMember`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

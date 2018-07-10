-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 04:02 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int(100) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `d_address` varchar(100) NOT NULL,
  `d_phone` varchar(15) NOT NULL,
  `d_img` varchar(255) NOT NULL,
  `d_department` varchar(100) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_address`, `d_phone`, `d_img`, `d_department`) VALUES
(8, 'Dr.Yadav Bhatta ', 'Lalitpur', '9813645632', '../doc_image/image_2016-11-28-15-30-31_583c3f8720332.jpg', 'Cardiology'),
(9, 'Dr. Jyotindra Sharma ', 'Bhaktapur', '98431361463', '../doc_image/image_2016-11-28-15-32-15_583c3fef3edec.jpg', 'Cardiothoracic & Vascular Surgery'),
(10, 'Dr. Sandeep Raj Pandey', 'Samakhusi', '9841256483', '../doc_image/image_2016-11-28-15-33-39_583c4043c0848.jpg', 'Vascular & Endoascular Surgery)'),
(11, ' Dr. Pankaj Jalan ', 'Balkhu', '9851236548', '../doc_image/image_2016-11-28-15-35-41_583c40bd3192b.jpg', 'Deputy Director- Medical Services'),
(12, ' Dr. Rajiv Jha ', 'Bafal', '9841236548', '../doc_image/image_2016-11-28-15-37-01_583c410da3793.jpg', 'Neurosurgery & Neurology'),
(13, 'Dr. Madhu Ghimire ', 'Kalimati', '9860002531', '../doc_image/image_2016-11-28-15-38-25_583c416161440.jpg', 'Gastroenterology/Hepatobilliary'),
(14, ' Dr. Neeraj Joshi ', 'Teku', '9813564123', '../doc_image/image_2016-11-28-15-39-22_583c419aaa468.jpg', 'Gastroenterology/Hepatobilliary'),
(15, ' Dr. Achala Vaidya ', 'Tripureswor', '9813654123', '../doc_image/image_2016-11-28-15-40-30_583c41debf75e.jpg', 'Obst. Gynaecology'),
(16, ' Dr. B. Srivastava ', 'Ratnapark', '9813456829', '../doc_image/image_2016-11-28-15-41-37_583c42216d270.jpg', 'Chest Physician'),
(17, 'Dr. Neeraj Shrestha ', 'Jamal', '9843124563', '../doc_image/image_2016-11-28-15-42-33_583c42591622b.jpg', 'Orthopedic Surgery'),
(18, ' Dr. Bandana Pandey ', 'New Buspark', '9843214569', '../doc_image/image_2016-11-28-15-46-17_583c433973d31.jpg', 'General Practitioner'),
(19, 'Dr. Milesh Jung Sijapati ', 'Baneswor', '9860002145', '../doc_image/image_2016-11-28-15-47-19_583c437785a76.jpg', 'Physician'),
(20, ' Dr. Prakash Chaudhary ', 'Koteswor', '9813456789', '../doc_image/image_2016-11-28-15-48-21_583c43b581ac4.jpg', 'General Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `n_id` int(100) NOT NULL AUTO_INCREMENT,
  `n_name` varchar(100) NOT NULL,
  `n_address` varchar(100) NOT NULL,
  `n_phone` varchar(15) NOT NULL,
  `n_img` varchar(255) NOT NULL,
  `n_shift` varchar(100) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`n_id`, `n_name`, `n_address`, `n_phone`, `n_img`, `n_shift`) VALUES
(5, 'rita kc', 'kalanki', '9813614665', '../nor_image/image_2016-11-25-11-28-59_5838126b23477.jpg', 'Night'),
(6, 'Durga Adhikari', 'Macheygau', '9813980757', '../nor_image/image_2016-11-25-11-29-40_583812946abdd.jpg', 'Day'),
(7, 'Rita Khadka', 'Teku', '9813465879', '../nor_image/image_2016-11-30-10-43-14_583e9f3242c5e.jpg', 'Day');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_phone` varchar(15) NOT NULL,
  `p_sex` varchar(10) NOT NULL,
  `p_birthdate` varchar(10) NOT NULL,
  `p_age` varchar(100) NOT NULL,
  `p_bloodgroup` varchar(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_address`, `p_phone`, `p_sex`, `p_birthdate`, `p_age`, `p_bloodgroup`) VALUES
(4, 'Sudip karmacharya', 'kalanki', '9813614665', 'Male', '2051-02-27', '23', 'O +ve'),
(5, 'kishan', 'kalanki', '9843260270', 'Male', '2053-8-24', '20', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(100) NOT NULL AUTO_INCREMENT,
  `reg_fN` varchar(100) NOT NULL,
  `reg_mN` varchar(100) NOT NULL,
  `reg_lN` varchar(50) NOT NULL,
  `reg_address` varchar(100) NOT NULL,
  `reg_contact` varchar(100) NOT NULL,
  `reg_un` varchar(100) NOT NULL,
  `reg_up` varchar(100) NOT NULL,
  `reg_type` varchar(100) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `reg_fN`, `reg_mN`, `reg_lN`, `reg_address`, `reg_contact`, `reg_un`, `reg_up`, `reg_type`) VALUES
(3, 'Sudip', '', 'Karmacharya', 'Kalanki-14', '9813614665', 'sudip', '550bbf0991fd493d1afaa2bdd246af6a', '2'),
(4, '   ', '   ', '   ', ' ', ' ', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(6, 'kishan', '', 'khadka', 'Kalanki-14', '9843260270', 'kishan', 'ce89334715e7401b509f8cff4afb2c4c', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

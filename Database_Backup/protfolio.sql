-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2019 at 12:59 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protfolio`
--
CREATE DATABASE IF NOT EXISTS `protfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `protfolio`;

DELIMITER $$
--
-- Procedures
--

DROP PROCEDURE IF EXISTS `CreateProject`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `CreateProject` (IN `name` VARCHAR(50), IN `description` TEXT, IN `startDate` DATE, IN `endDate` DATE)  BEGIN
    INSERT INTO projects(project_name, project_description, date_started,date_ended)
    VALUES(name, description, startDate, endDate);
END$$

DROP PROCEDURE IF EXISTS `GetAllProjects`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllProjects` ()  BEGIN
    SELECT 
        project_name,
        project_description,
        date_started,
        date_ended
    FROM
        projects
    ORDER BY date_started;    
END$$

DROP PROCEDURE IF EXISTS `GetProjects`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetProjects` ()  BEGIN
    SELECT 
        *
    FROM
        projects
    ORDER BY 
    	date_started;    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `project_ID` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_description` text NOT NULL,
  `date_started` date NOT NULL,
  `date_ended` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_ID`, `project_name`, `project_description`, `date_started`, `date_ended`) VALUES
(12, 'Project 1', 'This is Project 1\'s description', '2014-00-00', '2015-00-00'),
(13, 'Project 2', 'This is Project 2\'s description', '2015-00-00', '2016-00-00'),
(14, 'Project 3', 'This is Project 3\'s description', '2016-00-00', '2017-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_ID`),
  ADD UNIQUE KEY `project_name` (`project_name`),
  ADD KEY `project_ID` (`project_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

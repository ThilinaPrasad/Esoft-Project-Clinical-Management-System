-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 01:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenway_medicals`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `schedule_id`, `patient_id`, `appointment_no`) VALUES
(1, 1, 41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_details`
--

CREATE TABLE `diagnosis_details` (
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `description` varchar(800) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `medLicenceNo` varchar(50) NOT NULL,
  `speciality` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `medLicenceNo`, `speciality`) VALUES
(40, 'MD-05-Spec', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` int(4) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `appointments` int(3) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doctor_id`, `start_date`, `start_time`, `end_date`, `end_time`, `appointments`, `createdDate`) VALUES
(1, 40, '02/01/2019', '20:40', '02/01/2019', '22:00', 10, '2019-02-01 15:11:42');

-- --------------------------------------------------------

--
-- Stand-in structure for view `doc_app_pay`
-- (See below for the actual view)
--
CREATE TABLE `doc_app_pay` (
`pay_id` int(11)
,`value` int(11)
,`app_id` int(11)
,`sch_id` int(4)
,`doctor_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `bloodType` varchar(4) NOT NULL,
  `weight` int(4) NOT NULL,
  `height` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `bloodType`, `weight`, `height`) VALUES
(41, 'O-', 90, 177),
(44, 'O-', 90, 177),
(45, 'O-', 90, 177),
(46, 'O-', 90, 177),
(47, 'O-', 90, 177),
(48, 'O-', 90, 177),
(49, 'O-', 90, 177),
(50, 'O-', 90, 177);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `value`, `appointment_id`, `createdDate`) VALUES
(1, 10, 1, '2019-03-01 15:13:52'),
(2, 10, 1, '2019-02-02 15:13:52'),
(3, 10, 1, '2019-02-03 15:13:52'),
(4, 10, 1, '2019-02-03 15:13:52'),
(5, 10, 1, '2019-02-01 15:13:52'),
(6, 10, 1, '2019-02-02 15:13:52'),
(7, 10, 1, '2019-02-03 15:13:52'),
(8, 10, 1, '2019-02-03 15:13:52'),
(9, 10, 1, '2019-02-03 15:13:52'),
(10, 10, 1, '2019-02-03 15:13:52'),
(11, 10, 1, '2019-02-04 15:13:52'),
(12, 10, 1, '2019-02-05 15:13:52'),
(13, 10, 1, '2019-02-06 15:13:52'),
(14, 10, 1, '2019-02-07 15:13:52'),
(15, 10, 1, '2019-02-08 15:13:52'),
(16, 10, 1, '2019-02-09 15:13:52'),
(17, 10, 1, '2019-02-10 15:13:52'),
(18, 10, 1, '2019-02-11 15:13:52'),
(19, 10, 1, '2019-02-12 15:13:52'),
(20, 10, 1, '2019-02-13 15:13:52'),
(21, 10, 1, '2019-02-14 15:13:52'),
(22, 10, 1, '2019-02-15 15:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `bday` varchar(12) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `street` varchar(150) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `type` int(11) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `sname`, `gender`, `bday`, `nic`, `street`, `zipCode`, `city`, `country`, `email`, `telephone`, `type`, `password`) VALUES
(39, 'Admin', 'Kenway', 'Male', '01/25/1995', '95024533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Srilanka', 'admin@kenway.com', '0716485403', 4, '$2y$10$YdBOGue.4lbglKlVGrTXnO3jvfG0sUF74jJdH80qPKtd8o330zpdu'),
(40, 'Doctor', 'member', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'doctor@kenway.com', '0716485403', 2, '$2y$10$fOVOoO885BWBMEYY9B1blOU43zQsjcdrJn7Bl53UhEF4I3ZyC3tfm'),
(41, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(43, 'Staff', 'member', 'Male', '02/02/2019', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'AAA', 'staff@kenway.com', '0912267288', 3, '$2y$10$5hepOwmTAR2I.NmN5HSQZO868J.QrnvXCv3.eOmqMT.9T1HMiWHm.'),
(44, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(45, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(46, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(47, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(48, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(49, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi'),
(50, 'Patient', 'Me', 'Male', '01/25/1995', '950253533v', 'University of Moratuwa', '10400', 'Moratuwa', 'Sri Lanka', 'patient@kenway.com', '0912267288', 1, '$2y$10$3N7DwA61Enln7joMfR5PXefWnaegNP9H8ZslYpOWAdHdtjPloCqHi');

-- --------------------------------------------------------

--
-- Structure for view `doc_app_pay`
--
DROP TABLE IF EXISTS `doc_app_pay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doc_app_pay`  AS  select `payments`.`id` AS `pay_id`,`payments`.`value` AS `value`,`appointment`.`id` AS `app_id`,`doctor_schedules`.`id` AS `sch_id`,`doctor_schedules`.`doctor_id` AS `doctor_id` from ((`payments` left join `appointment` on((`payments`.`appointment_id` = `appointment`.`id`))) left join `doctor_schedules` on((`appointment`.`schedule_id` = `doctor_schedules`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_app` (`schedule_id`),
  ADD KEY `patient_app` (`patient_id`);

--
-- Indexes for table `diagnosis_details`
--
ALTER TABLE `diagnosis_details`
  ADD PRIMARY KEY (`doctor_id`,`patient_id`,`date`),
  ADD KEY `patient_diagnosis` (`patient_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_schedule` (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `app_pay` (`appointment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `patient_app` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_app` FOREIGN KEY (`schedule_id`) REFERENCES `doctor_schedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosis_details`
--
ALTER TABLE `diagnosis_details`
  ADD CONSTRAINT `doctor_diagnosis` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_diagnosis` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `user_doctor` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `doctor_schedule` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `user_patient` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `app_pay` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

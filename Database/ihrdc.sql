-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2019 at 01:53 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `ihrdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Name` text NOT NULL,
  `Course_ID` text NOT NULL,
  `Discipline` text NOT NULL,
  `Course_Type` text NOT NULL,
  `Course_Duration` text NOT NULL,
  `Course_Objectives` text NOT NULL,
  `Course_Outline` text NOT NULL,
  `Provider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Name`, `Course_ID`, `Discipline`, `Course_Type`, `Course_Duration`, `Course_Objectives`, `Course_Outline`, `Provider`) VALUES
('Project Manager Professional', '1', '3 year working for company', 'PMP', '3 month', 'Know About PMP', 'N/A', 'PMI'),
('Certificaed Scrum Master', '2', '1 year working for company', 'CSM', '1 month', 'Know About Scrum', 'N/A', 'Scrum.org');

-- --------------------------------------------------------

--
-- Table structure for table `perfomance_objective`
--

CREATE TABLE `perfomance_objective` (
  `Email` text NOT NULL,
  `Date` text NOT NULL,
  `Month` text NOT NULL,
  `Year` text NOT NULL,
  `Must_Do_1` text NOT NULL,
  `Must_Do_2` text NOT NULL,
  `Must_Do_3` text NOT NULL,
  `Must_Do_4` text NOT NULL,
  `Must_Do_5` text NOT NULL,
  `Must_Do_6` text NOT NULL,
  `Must_Do_7` text NOT NULL,
  `Must_Do_8` text NOT NULL,
  `Must_Do_9` text NOT NULL,
  `Must_Do_10` text NOT NULL,
  `Should_Do_1` text NOT NULL,
  `Should_Do_2` text NOT NULL,
  `Could_Do_1` text NOT NULL,
  `Criteria_for_Success` text NOT NULL,
  `Action_Plan` text NOT NULL,
  `Archieved` tinyint(1) NOT NULL,
  `Comments_on_Results` text NOT NULL,
  `Monthly_Rating` text NOT NULL,
  `Annual_Rating` text NOT NULL,
  `Monthly_Performance_Appraisal` text NOT NULL,
  `Annual_Performance_Appraisal` text NOT NULL,
  `Submit_to_Supervisor_for_Appraisal` text NOT NULL,
  `Supervisor_Approval` tinyint(1) NOT NULL,
  `Target_Winning_Behavioral_Competencies` text NOT NULL,
  `Target_Winning_Technical_Competencies` text NOT NULL,
  `Development_Activities` text NOT NULL,
  `Timeframe` text NOT NULL,
  `Expected_Outcomes` text NOT NULL,
  `Line_Manager_Signature` text NOT NULL,
  `Employee_Signature` text NOT NULL,
  `HR_Signature` text NOT NULL,
  `Award_Certificate` text NOT NULL,
  `Discipline_Action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `First_Name` text NOT NULL,
  `Middle_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Sex` text NOT NULL,
  `DOB` date NOT NULL,
  `ID_Card` text NOT NULL,
  `Nationality` text NOT NULL,
  `Background` text NOT NULL,
  `Education` text NOT NULL,
  `Date_Of_Hire` date NOT NULL,
  `Job_Title` text NOT NULL,
  `Email` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Staff_Number` text NOT NULL,
  `Labor_Contact_Type` text NOT NULL,
  `Labor_Contact_Number` text NOT NULL,
  `Labor_Contact_Effective_Date` date NOT NULL,
  `Date_In_Current_Job_Title` date NOT NULL,
  `In_Charge_Of_Training` tinyint(1) NOT NULL,
  `Internal_Trainer` tinyint(1) NOT NULL,
  `Training_Discipline` text NOT NULL,
  `Foreign_Language_Proficiency` text NOT NULL,
  `Working_Location` text NOT NULL,
  `Department` text NOT NULL,
  `Supervisor_Name` text NOT NULL,
  `Supervisor_Email` text NOT NULL,
  `Supervisor_Job_Title` text NOT NULL,
  `Staff_Role_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`First_Name`, `Middle_Name`, `Last_Name`, `Sex`, `DOB`, `ID_Card`, `Nationality`, `Background`, `Education`, `Date_Of_Hire`, `Job_Title`, `Email`, `Phone_Number`, `Staff_Number`, `Labor_Contact_Type`, `Labor_Contact_Number`, `Labor_Contact_Effective_Date`, `Date_In_Current_Job_Title`, `In_Charge_Of_Training`, `Internal_Trainer`, `Training_Discipline`, `Foreign_Language_Proficiency`, `Working_Location`, `Department`, `Supervisor_Name`, `Supervisor_Email`, `Supervisor_Job_Title`, `Staff_Role_ID`) VALUES
('Nguyen', 'Thanh', 'An', 'Nam', '2019-09-09', '215117897', 'Viet Nam', 'IT', 'HCMUS', '2019-12-01', 'CEO', 'sale@pfs-software.com', '0979868429', '234234', '3 years', '42342', '2019-12-02', '2019-12-02', 1, 1, 'N/A', 'Eng. Fr, Rusia', 'HCM', 'PFS-Software', 'Thuc', 'thuc@gmail.com', 'Director', 4),
('Nguyen', 'Thanh', 'An 1', 'Nam', '2019-12-01', '323342', 'Viet Nam', 'IT', 'HCMUS', '2019-12-02', 'IT', 'mail@mail.com', '0988776767', '332123', '2 years', '5453455', '2019-12-09', '2019-12-10', 1, 1, 'N/A', 'Eng', 'HCM', 'PFS-Software', 'Nguyen Thanh An 4', 'sale@pfs-software.com', 'CEO', 1),
('Nguyen', 'Thanh', 'An 2', 'Nam', '2019-12-01', '323342', 'Viet Nam', 'IT', 'HCMUS', '2019-12-02', 'IT', 'mail@mail.com', '0988776767', '222222', '2 years', '5453455', '2019-12-09', '2019-12-10', 1, 1, 'N/A', 'Eng', 'HCM', 'PFS-Software', 'Nguyen Thanh An 4', 'sale@pfs-software.com', 'CEO', 2),
('Nguyen', 'Thanh', 'An 3', 'Nam', '2019-12-01', '323342', 'Viet Nam', 'IT', 'HCMUS', '2019-12-02', 'IT', 'mail@mail.com', '0988776767', '333333', '2 years', '5453455', '2019-12-09', '2019-12-10', 1, 1, 'N/A', 'Eng', 'HCM', 'PFS-Software', 'Nguyen Thanh An 4', 'sale@pfs-software.com', 'CEO', 3),
('Nguyen', 'Thanh', 'An 5', 'Nam', '2019-12-01', '323342', 'Viet Nam', 'IT', 'HCMUS', '2019-12-02', 'IT', 'mail@mail.com', '0988776767', '555555', '2 years', '5453455', '2019-12-09', '2019-12-10', 1, 1, 'N/A', 'Eng', 'HCM', 'PFS-Software', 'Nguyen Thanh An 4', 'sale@pfs-software.com', 'CEO', 5);

-- --------------------------------------------------------

--
-- Table structure for table `role_group`
--

CREATE TABLE `role_group` (
  `roleID` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_group`
--

INSERT INTO `role_group` (`roleID`, `description`) VALUES
(1, 'Employees'),
(2, 'Supervisors'),
(3, 'Department Managers'),
(4, 'BOD'),
(5, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `training_record`
--

CREATE TABLE `training_record` (
  `Staff_Number` text NOT NULL,
  `Course_ID` text NOT NULL,
  `Training_Purpose` text NOT NULL,
  `Training_Type` text NOT NULL,
  `Training_Time_From` date NOT NULL,
  `Training_Time_To` date NOT NULL,
  `Training_Location` text NOT NULL,
  `Course_Fee` int(11) NOT NULL,
  `Traveling_Cost` int(11) NOT NULL,
  `Accommodation_Cost` int(11) NOT NULL,
  `Training_Approval_Status` tinyint(1) NOT NULL,
  `Training_Progress` text NOT NULL,
  `Assigned_by` text NOT NULL,
  `Training_Budget_Resources` text NOT NULL,
  `Training_Assignment_Number` text NOT NULL,
  `Training_Assignment_Date` date NOT NULL,
  `Training_Cost_Estimation_Number` int(11) NOT NULL,
  `Training_Cost_Estimation_Date` date NOT NULL,
  `Training_Cost_for_ReFund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_record`
--

INSERT INTO `training_record` (`Staff_Number`, `Course_ID`, `Training_Purpose`, `Training_Type`, `Training_Time_From`, `Training_Time_To`, `Training_Location`, `Course_Fee`, `Traveling_Cost`, `Accommodation_Cost`, `Training_Approval_Status`, `Training_Progress`, `Assigned_by`, `Training_Budget_Resources`, `Training_Assignment_Number`, `Training_Assignment_Date`, `Training_Cost_Estimation_Number`, `Training_Cost_Estimation_Date`, `Training_Cost_for_ReFund`) VALUES
('234234', '12345', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'Hhhhh', 12345, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('332123', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'HCM', 700, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'PPPPPP', 123, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'KKKKKK', 908899, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'QQQQQQ', 66666, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'YYYYYYY', 77777, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'VVVVVVV', 222222, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'TTTTTTTT', 222222, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'DDDDDDD', 999999, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'TTTTTTT', 66666, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Project Manager Professional', 'Know About PMP', 'PMP', '2019-12-09', '2019-12-31', 'AAAAAA', 88888, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Project Manager Professional', 'Know About PMP', 'PMP', '2019-12-09', '2019-12-31', 'BBBBBB', 22222, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Project Manager Professional', 'Know About PMP', 'PMP', '2019-12-09', '2019-12-31', 'CCCCCCC', 33333, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('333333', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'VVVV', 44444, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('234234', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'VN', 1234, 0, 0, 1, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1),
('332123', 'Certificaed Scrum Master', 'Know About Scrum', 'CSM', '2019-12-09', '2019-12-31', 'Viet Nam', 200, 0, 0, 0, 'N/A', 'N/A', 'N/A', 'N/A', '2019-12-31', 1, '2019-12-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  `UserID` int(11) NOT NULL,
  `StaffNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `Password`, `UserID`, `StaffNumber`) VALUES
('annt', '1234', 1, '234234'),
('tame', '123', 3, ''),
('phongtm', '123', 4, ''),
('annt', '1231', 5, '332123'),
('annt', '1232', 6, '222222'),
('annt', '1233', 7, '333333'),
('annt', '1235', 8, '555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 04:12 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobstalk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_applied_job`
--

CREATE TABLE `applicant_applied_job` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `job_id` varchar(55) NOT NULL,
  `application_status` enum('approved','inprocess','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_careers`
--

CREATE TABLE `applicant_careers` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `job_start` varchar(30) NOT NULL,
  `job_end` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_contact_information`
--

CREATE TABLE `applicant_contact_information` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `municipality` varchar(20) NOT NULL,
  `brgy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education`
--

CREATE TABLE `applicant_education` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `course` varchar(150) NOT NULL,
  `school_name` varchar(150) NOT NULL,
  `school_year_start` varchar(5) NOT NULL,
  `school_year_end` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_objective`
--

CREATE TABLE `applicant_objective` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `objective` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_personal_information`
--

CREATE TABLE `applicant_personal_information` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `civil_status` varchar(25) NOT NULL,
  `language` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_skills`
--

CREATE TABLE `applicant_skills` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role` enum('admin','employer','applicant') NOT NULL,
  `status` enum('pending','verified','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_applied_job`
--
ALTER TABLE `applicant_applied_job`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_careers`
--
ALTER TABLE `applicant_careers`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_contact_information`
--
ALTER TABLE `applicant_contact_information`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_education`
--
ALTER TABLE `applicant_education`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_objective`
--
ALTER TABLE `applicant_objective`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_personal_information`
--
ALTER TABLE `applicant_personal_information`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_applied_job`
--
ALTER TABLE `applicant_applied_job`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_careers`
--
ALTER TABLE `applicant_careers`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_contact_information`
--
ALTER TABLE `applicant_contact_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_education`
--
ALTER TABLE `applicant_education`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_objective`
--
ALTER TABLE `applicant_objective`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_personal_information`
--
ALTER TABLE `applicant_personal_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
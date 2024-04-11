-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 08, 2023 at 05:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(15) NOT NULL,
  `refer_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `witdh` varchar(100) NOT NULL,
  `muac` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `subvillage` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `ayushmancard` varchar(100) NOT NULL,
  `abhacard` varchar(100) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `refer_name`, `other_name`, `date`, `name`, `mobile`, `age`, `sex`, `height`, `witdh`, `muac`, `village`, `subvillage`, `address`, `ayushmancard`, `abhacard`, `complain`, `remarks`, `status`) VALUES
(1, 'consultation name', 'consultation other name', 'consultation date', 'consultation name', 'consultation mobile', 'consultation age', 'consultation sex', 'consultation height', 'consultation width', 'consultation muac', 'consultation village', 'consultation subvillage', 'consultation address', 'consultation ayushmancard', 'consultation abhacard', 'consultation complain', 'consultation remark', 'Complete'),
(3, 'doctor chirag', 'otherr persone is chirag', '02-12-2023', 'bhavesh', '6354127547', '22', 'Male', '55', '56', 'muac number', 'Goladhar', 'Goladhar', 'Outside', '22051', '12110009', 'complain resoner fopr no', 'remark is not', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `country_tb`
--

CREATE TABLE `country_tb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_tb`
--

INSERT INTO `country_tb` (`cid`, `cname`) VALUES
(1, 'Majevadi 1'),
(2, 'Majevadi 2'),
(3, 'Goladhar'),
(4, 'Zalansar');

-- --------------------------------------------------------

--
-- Table structure for table `deptlist`
--

CREATE TABLE `deptlist` (
  `id` int(15) NOT NULL,
  `departmentname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deptlist`
--

INSERT INTO `deptlist` (`id`, `departmentname`) VALUES
(4, 'CHO'),
(9, 'MPHW'),
(10, 'FHW'),
(11, 'ASHA'),
(12, 'PrivatePractitioner'),
(13, 'Volunteer'),
(14, 'PreConsultation');

-- --------------------------------------------------------

--
-- Table structure for table `idsp_list`
--

CREATE TABLE `idsp_list` (
  `id` int(11) NOT NULL,
  `idsp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idsp_list`
--

INSERT INTO `idsp_list` (`id`, `idsp_name`) VALUES
(11, 'Acute Diarrhoeal Disease (including acute gastroenteritis)'),
(12, 'Bacillary Dysentery'),
(13, 'Viral Hepatitis'),
(14, 'Enteric Fever'),
(15, 'Malaria'),
(16, 'Dengue / DHF / DSS'),
(17, 'Chikungunya'),
(18, 'Acute Encephalitis Syndrome'),
(19, 'Meningitis'),
(20, 'Measles'),
(21, 'Diphtheria'),
(22, 'Pertussis');

-- --------------------------------------------------------

--
-- Table structure for table `ipd`
--

CREATE TABLE `ipd` (
  `id` int(15) NOT NULL,
  `refer_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `witdh` varchar(100) NOT NULL,
  `muac` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `subvillage` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `ayushmancard` varchar(100) NOT NULL,
  `abhacard` varchar(100) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipd`
--

INSERT INTO `ipd` (`id`, `refer_name`, `other_name`, `date`, `name`, `mobile`, `age`, `sex`, `height`, `witdh`, `muac`, `village`, `subvillage`, `address`, `ayushmancard`, `abhacard`, `complain`, `remarks`, `status`) VALUES
(4, 'doctor bhavesh', 'other ipd name is bhavesh', '20/12/2023', 'ipd demo name', '1234567890', '31', 'male', '65', '76', 'muac number', 'junagadh', 'junagadh', 'junagadh', 'ayu no', 'abha no', 'com no', 'rem no', 'Pending'),
(6, '', '', '02-12-2023', 'prajapati bhavesh', '5252', '31', 'male', '23', '7', '5252', 'junagadh', 'junagadh', 'junagadh', 'no ayu card', 'no abhacard', 'no', 'no remark', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `madicine_list`
--

CREATE TABLE `madicine_list` (
  `id` int(11) NOT NULL,
  `madicine_name` varchar(255) NOT NULL,
  `rout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `madicine_list`
--

INSERT INTO `madicine_list` (`id`, `madicine_name`, `rout`) VALUES
(13, 'Tablet Acyclovir  200 mg', 'Oral'),
(14, 'Tablet Albendazole  400 mg', 'Oral'),
(15, 'Tablet Alprazolam  0.25 mg', 'Oral'),
(16, 'Tablet Amitriptyline  HCL  25 mg', 'Oral'),
(17, 'Tablet Amlodipine  5 mg', 'Oral'),
(18, 'Tablet Amlodipine 10 mg', 'Oral'),
(19, 'Tablet Amoxycillin  And Potassium Clavulanate 625 mg', 'Oral'),
(20, 'Capsules Amoxycillin 500 mg', 'Oral'),
(21, 'Capsules Amoxycillin Capsules 250 mg', 'Oral'),
(22, 'Tablet Amoxycillin  Trihydrate Dispersible  125 mg', 'Oral'),
(23, 'Tablet Ascorbic  Acid  500 mg (Chewable)', 'Oral'),
(24, 'Tablet Atenolol  50 mg', 'Oral'),
(25, 'Injection Adrenaline Bitartrate  1 mg/ml , 1 ml Ampoule', 'IM/IV/SC/ID'),
(26, 'Injection Amikacin Sulphate 500 mg', 'IM/IV/SC/ID'),
(27, 'Injection Amikacin Sulphate 100 mg', 'IM/IV/SC/ID'),
(28, 'Injection Amoxycillin & Clavuanic Acid.1.2 gm', 'IM/IV/SC/ID'),
(29, 'Injection Amoxycillin & Clavuanic Acid  300 mg', 'IM/IV/SC/ID'),
(31, 'Injection Anti D (RHO) Immunoglobulin Human  300 mcg (Liquid)', 'IM/IV/SC/ID');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_station`
--

CREATE TABLE `nursing_station` (
  `id` int(15) NOT NULL,
  `refer_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `witdh` varchar(100) NOT NULL,
  `muac` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `subvillage` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `ayushmancard` varchar(100) NOT NULL,
  `abhacard` varchar(100) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `remarks` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nursing_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursing_station`
--

INSERT INTO `nursing_station` (`id`, `refer_name`, `other_name`, `date`, `name`, `mobile`, `age`, `sex`, `height`, `witdh`, `muac`, `village`, `subvillage`, `address`, `ayushmancard`, `abhacard`, `complain`, `remarks`, `status`, `nursing_id`) VALUES
(7, '', '', '06-12-2023', 'bhavesh', '6354127547', '12', 'Male', '55', '56', '', 'Goladhar', 'Goladhar', 'Outside', 'q22051', '12110009', '546', '34', 'Complate', '40'),
(8, '', '', '06-12-2023', 'chandegra bhavesh jagdish bhai', '6354127547', '22', 'Male', '162', '45', 'dfs', 'Majevadi 1', 'Majevadi 1', 'Local', 'AYU439467962', 'ABHA41678631', '', 'sdfsdf', 'Complate', '41'),
(9, '', '', '06-12-2023', 'cbxncvbxcv', 'bcvxbxvc', 'bxcvbxcv', 'bcxvb', 'bcxvbvcx', 'xcvbvcxbcvxb', 'vcxbcvx', 'bcxvbcvxb', 'bcvxbvcxb', 'xcvbcxvbxcvbxcv', 'vcxbvcxb', 'vcxbcvbxc', 'cvbcxv', 'bvxcbcvxbcxvb', 'Complate', '42'),
(12, '', '', '06-12-2023', 'dsfgd', 'sdfg', 'gfsgg', 'gsdfgdsfg', 'gdsfg', 'gsdfgsdf', 'sdfgsdf', 'dfgsdfg', 'gsdfg', 'sdfgsdfg', 'sdfgsdfgdfs', 'gsdfg', 'sdfgsdfg', 'sdfgsdfgd', 'Pending', '0'),
(13, '', '', '06-12-2023', 'bhavesh', '6354127547', '12', 'Male', '55', '56', '25', 'Goladhar', 'Goladhar', 'Outside', 'q22051', '12110009', 'diabities', 'fndjsgnjk', 'Complate', '45'),
(14, '', '', '07-12-2023 12:14:43 PM', 'chirag', '6354127547', '67', 'male', '23', '23', 'B', '23', '23', 'local', '23', '23', 'ILB', 'BIL', 'Complate', '46'),
(15, '', '', '07-12-2023 12:16:12 PM', 'DFGDF', 'DFGFD', 'GDFGFD', 'DFG', 'FGDG', 'GDFG', 'DFGFD', 'DFGD', 'DFG', 'DFGF', 'GFDG', 'DFGDFG', 'GFDGFDG', 'DFG', 'Pending', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_station_pending`
--

CREATE TABLE `nursing_station_pending` (
  `id` int(15) NOT NULL,
  `consultation` varchar(200) NOT NULL,
  `temp` varchar(200) NOT NULL,
  `pulse` varchar(200) NOT NULL,
  `spO2` varchar(200) NOT NULL,
  `Hypertension` varchar(200) NOT NULL,
  `bp` varchar(200) NOT NULL,
  `Daibetis` varchar(200) NOT NULL,
  `past` varchar(200) NOT NULL,
  `Personal` varchar(200) NOT NULL,
  `Family` varchar(200) NOT NULL,
  `General` varchar(200) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `Ayurvedic` varchar(100) NOT NULL,
  `Homeopathic` varchar(100) NOT NULL,
  `ANC` varchar(100) NOT NULL,
  `PNC` varchar(100) NOT NULL,
  `Camp` varchar(100) NOT NULL,
  `Relative` varchar(100) NOT NULL,
  `Certificate` varchar(100) NOT NULL,
  `Emergency` varchar(100) NOT NULL,
  `Immunization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursing_station_pending`
--

INSERT INTO `nursing_station_pending` (`id`, `consultation`, `temp`, `pulse`, `spO2`, `Hypertension`, `bp`, `Daibetis`, `past`, `Personal`, `Family`, `General`, `doctor`, `Ayurvedic`, `Homeopathic`, `ANC`, `PNC`, `Camp`, `Relative`, `Certificate`, `Emergency`, `Immunization`) VALUES
(40, 'Yes', '12weqe', '123', '', 'No', '12343412', 'No', '', '', '', 'General', 'hello', '', '', '', '', '', '', '', '', ''),
(41, 'No', 'ftyty', 'rty', '', 'No', '', 'No', '', '', '', 'General', 'doctor chirag', 'Ayurvedic', 'Homeopathic', 'ANC', 'PNC', 'Camp', 'Relative', 'Certificate', 'Emergency', 'Immunization'),
(42, 'Yes', 'fgsddfgsdfgsg1234', 'gdsfgdsfgdsfgsdgsggsdf', 'dfgdsfgdsfgdfsggsdfgsdgsdfg', 'No', 'fsdfgsdfgsdfgsdf', 'No', 'dsfgdfsgdfsgdsf', 'gsdfgsdgsd', 'fgsdfgfdsgdfsgdsfgdfsg', 'General', 'doctor chirag', 'Ayurvedic', 'Homeopathic', 'ANC', 'PNC', 'Camp', 'Relative', 'Certificate', 'Emergency', 'Immunization'),
(43, 'Yes', 'temp', 'pulse', 'spO2', 'Yes', 'bp', 'Yes', 'past', 'personal', 'family', 'General', 'doctor bhavesh', 'Ayurvedic', 'Homeopathic', 'ANC', 'PNC', 'Camp', 'Relative', 'Certificate', 'Emergency', 'Immunization'),
(44, 'Yes', '12qweqweqwewqeqweqwewqeqweqwe', 'pulse name ', 'spO2 name', 'Yes', 'bp Name', 'Yes', 'Past History', 'Personal History', 'Family History', 'General', 'doctor bhavesh', 'Ayurvedic', '', '', 'PNC', 'Camp', '', '', 'Emergency', 'Immunization'),
(45, 'No', '10', '154', '20', 'No', '87', 'No', 'na', 'NA', 'na', 'General', 'doctor chirag', 'Ayurvedic', '', '', '', '', '', '', 'Emergency', ''),
(46, 'Yes', 'lnadsl', 'naln', 'lasl', 'Yes', 'asnd', 'Yes', 'no', 'no', 'no', 'General', 'doctor bhavesh', 'Ayurvedic', 'Homeopathic', 'ANC', '', '', '', '', 'Emergency', 'Immunization');

-- --------------------------------------------------------

--
-- Table structure for table `other_list`
--

CREATE TABLE `other_list` (
  `id` int(11) NOT NULL,
  `other_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_list`
--

INSERT INTO `other_list` (`id`, `other_name`) VALUES
(6, 'DM (New/Old)'),
(7, 'HT (New/Old)'),
(8, 'Hyperlipidemia New/Old)'),
(9, 'Cancer (New/Old)'),
(10, 'AEFI'),
(11, 'UTI'),
(12, 'Dental Problem'),
(13, 'Ear Problem'),
(14, 'Piles - Fissure'),
(15, 'Honey Bee Bite'),
(16, 'Menstrual Problem'),
(17, 'Conjuctivitis');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `subvillage` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ayushmancard` varchar(100) NOT NULL,
  `abhacard` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `sex`, `mobile`, `height`, `width`, `village`, `subvillage`, `address`, `ayushmancard`, `abhacard`) VALUES
(27, 'bhavesh', '12', 'Male', '6354127547', '55', '56', 'Goladhar', 'Goladhar', 'Outside', 'q22051', '12110009'),
(28, 'chirag', '34', 'MALE', '63579879789', '789', '789', 'Majevadi-1', 'Majevadi_1', 'local', '', ''),
(29, '1', '45', 'Male', '1', '1', '1', 'Zalansar', 'Zalansar', 'Local', '', ''),
(30, 'chirag', '67', 'male', '6354127547', '23', '23', '23', '23', 'local', '23', '23'),
(31, 'chandegra bhavesh jagdish bhai', '22', 'Male', '6354127547', '162', '45', 'Majevadi 1', 'Majevadi 1', 'Local', 'AYU439467962', 'ABHA41678631');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(15) NOT NULL,
  `refer_name` varchar(200) NOT NULL,
  `refer_department` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `witdh` varchar(100) NOT NULL,
  `muac` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `subvillage` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `ayushmancard` varchar(100) NOT NULL,
  `abhacard` varchar(100) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `refer_name`, `refer_department`, `other_name`, `date`, `name`, `mobile`, `age`, `sex`, `height`, `witdh`, `muac`, `village`, `subvillage`, `address`, `ayushmancard`, `abhacard`, `complain`, `remarks`) VALUES
(1, '', '', '', '10-10-2023', 'BHAVESH', '6354127547', '22', 'MALE', '22', '50', '2285282852', 'QWE', 'QWE', 'ASDDADS', '12312321', '123132321', 'CDASDADS', 'DASDASD'),
(4, '', '', '', '23-11-2023', 'bhavesh', '', '22', 'Male', '55', '56', '9090', 'Goladhar', 'Goladhar', 'Outside', '22051', '12110009', '9090', '9090'),
(6, '', '', '', '23-11-2023', '6354127547', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'chirag', 'asha', 'mark', '26-11-2023', 'mark', '1234567890', '12', 'male', '12', '12', '12', 'majevadi 1', 'majedadi 1', 'local', '12', '23', '12', '12'),
(17, '', '', '', '02-12-2023', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `state_tb`
--

CREATE TABLE `state_tb` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tb`
--

INSERT INTO `state_tb` (`sid`, `sname`, `country`) VALUES
(1, 'Majevadi 1', 1),
(7, 'Majevadi 2', 2),
(8, 'Goladhar', 3),
(14, 'Zalansar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms_list`
--

CREATE TABLE `symptoms_list` (
  `id` int(11) NOT NULL,
  `symptoms_name` varchar(255) NOT NULL,
  `symptoms_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms_list`
--

INSERT INTO `symptoms_list` (`id`, `symptoms_name`, `symptoms_remark`) VALUES
(25, 'Cough', 'Remark'),
(26, 'Cold', 'Remark'),
(27, 'Fever', 'Remark'),
(28, 'Rigor', 'Remark'),
(29, 'Breathlessness', 'Remark'),
(30, 'Sore throat', 'Remark'),
(31, 'Injury', 'Remark'),
(32, 'Itching', 'Remark'),
(33, 'Toothache', 'Remark'),
(34, 'Weakness', 'Remark'),
(35, 'Numbness', 'Remark'),
(36, 'Headache', 'Remark');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `sub_village` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile_number`, `password`, `department`, `village`, `sub_village`) VALUES
(13, 'chirag', 'asha', 'asha', 'asha', 'kkkk', 'sad'),
(20, 'pre', 'pre', 'pre', 'PreConsultation', 'Majevadi 2', 'Majevadi 2'),
(21, 'doctor bhavesh', '636363', '6363', 'doctor', 'er', 'er'),
(22, 'doctor chirag', '8585', '8585', 'doctor', 'qw', 'qw'),
(23, 'bhavesh', 'admin', 'admin', 'admin', 'majevadi 1', 'majevadi 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_tb`
--
ALTER TABLE `country_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deptlist`
--
ALTER TABLE `deptlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idsp_list`
--
ALTER TABLE `idsp_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipd`
--
ALTER TABLE `ipd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madicine_list`
--
ALTER TABLE `madicine_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursing_station`
--
ALTER TABLE `nursing_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursing_station_pending`
--
ALTER TABLE `nursing_station_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_list`
--
ALTER TABLE `other_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tb`
--
ALTER TABLE `state_tb`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `symptoms_list`
--
ALTER TABLE `symptoms_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country_tb`
--
ALTER TABLE `country_tb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deptlist`
--
ALTER TABLE `deptlist`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `idsp_list`
--
ALTER TABLE `idsp_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ipd`
--
ALTER TABLE `ipd`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `madicine_list`
--
ALTER TABLE `madicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nursing_station`
--
ALTER TABLE `nursing_station`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nursing_station_pending`
--
ALTER TABLE `nursing_station_pending`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `other_list`
--
ALTER TABLE `other_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state_tb`
--
ALTER TABLE `state_tb`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `symptoms_list`
--
ALTER TABLE `symptoms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 08:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `authoritylogin`
--

CREATE TABLE `authoritylogin` (
  `EmployeeId` varchar(150) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authoritylogin`
--

INSERT INTO `authoritylogin` (`EmployeeId`, `Password`) VALUES
('Sakib112', 'hello'),
('Monir441', 'Bondor'),
('orko', 'orko');

-- --------------------------------------------------------

--
-- Table structure for table `comdetails`
--

CREATE TABLE `comdetails` (
  `companyname` varchar(250) NOT NULL,
  `license_number` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `id` int(255) NOT NULL,
  `number_of_ship` int(255) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `typesofgood` varchar(250) NOT NULL,
  `whichcomgoodload` varchar(250) NOT NULL,
  `dateandtime` varchar(250) NOT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `Finalrequest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comdetails`
--

INSERT INTO `comdetails` (`companyname`, `license_number`, `details`, `id`, `number_of_ship`, `email`, `typesofgood`, `whichcomgoodload`, `dateandtime`, `status`, `Finalrequest`) VALUES
('mehediship', '20dblport', 'two worker', 54, 10, 'pgupta202301@bscse.uiu.ac.bd', 'laptop', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Rejected', ''),
('ctgshipcorporation', '5512ctgport', 'two worker are work there', 88, 14, 'guptajiking778@gmail.com', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('ctgshipport', '7845ctgship', 'two worker are there', 89, 25, 'pgupta202301@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('barishalship', '6565barictg', 'two ore three', 90, 45, 'pgupta202301@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Pending', ''),
('ctgship', '4545ldport', 'two worker', 91, 12, 'pgupta202301@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Pending', ''),
('Sakibshiping', '7852pop', 'two', 92, 12, 'pgupta202301@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Nazmulship', '458525ship', 'two', 93, 78, 'nhoda201224@gmail.com', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('arcoshiping', '201410arcoship', 'there are two worker is here they are in ship', 94, 8, 'parco201410@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Ryan Computer', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Jishanship', '4525jishanship', 'threr are two worker for clerarence', 95, 14, 'rahadulislamjishan@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Ctgshiping Center', '4585shipport', 'hello\r\n', 96, 14, 'mehedih5271@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Ctgship', '45852ship', 'hello', 97, 25, 'mehedih5271@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Corporateship', '512515ship', 'We are reach after 15 hour ', 98, 14, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Pending', ''),
('dblseaship', '1252ship', 'hi', 99, 45, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Pending', ''),
('Shantishiping', '121245ship', 'there two worker work here', 100, 18, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('ShantiShiping', '7575ship', 'there are two employee', 101, 14, 'mehedih5271@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Arcoship', '451547arcoship', 'there are two employee for work here', 102, 15, 'arcodatta1847@gmailcom', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('arcoshiping', '451575ship', 'hello\r\n', 103, 12, 'arcodatt1847@gmailcom', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('arcoshiping', '4515ship100', 'hello', 104, 18, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Saifship', '123qwe', 'hello', 105, 15, 'schowdhury201223@bscse.uiu.ac.bd', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('eveningship', '7815eveningship', ' two employee are work here', 106, 15, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reaching time30oct 11am', 'Accepted', ''),
('Dbl Group', '4525dbl', 'okay', 107, 12, 'guptajiking778@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('Ahasanship', '12ahasan12', 'hello', 108, 15, 'tanziddipto@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('abcd', '222ship', 'hello', 109, 12, 'pritamjitu222@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('dbl', '1234shipdbl', 'hello', 111, 12, 'pritamjitu222@gmail.com', 'laptop and Graphics Card', 'Ryan Computer,Startech', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('hi', '11ship12', 'hello', 112, 11, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Accepted', ''),
('arcoshiping', '1245asd', 'hello', 113, 12, 'jitugupta2241@gmail.com', 'laptop and Graphics Card', 'Startech, Thamura Electronics', 'it started 28 oct sunday at 9.30am and reching time30oct 11am', 'Rejected', ''),
('', '', '', 114, 0, '', '', '', '', 'Pending', ''),
('Cargo', '654654657nbgn', 'hola', 115, 45, '', '', '', '', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_details` text NOT NULL,
  `profile_image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `company_name`, `company_details`, `profile_image_url`, `created_at`) VALUES
(1, 'Jituship', 'hello', 'C:xampphtdocslogss/uploads/IMG_0268 copy(2).jpg', '2023-08-26 06:13:51'),
(2, 'Jituship', 'helloo\r\n', 'C:xampphtdocslogss/uploads/IMG_0268 copy(2).jpg', '2023-08-26 06:19:38'),
(3, 'Jituship', 'hi', 'C:xampphtdocslogssuploadsIMG_0268 copy(2).jpg', '2023-08-26 06:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `folder_path` varchar(255) NOT NULL,
  `time_stamp` datetime NOT NULL,
  `license_number` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finalrequest`
--

CREATE TABLE `finalrequest` (
  `license_number` varchar(250) NOT NULL,
  `Finalrequest` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `Registeredship` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalrequest`
--

INSERT INTO `finalrequest` (`license_number`, `Finalrequest`, `id`, `Registeredship`) VALUES
('1125ship', 'Request for Final Clearance', 5, ''),
('55f45ctg', 'Request for Final Clearance', 6, ''),
('55f45ctg', 'Request for Final Clearance', 7, ''),
('5512ctgport', 'Request for Final Clearance', 8, ''),
('5512ctgport', 'Request for Final Clearance', 9, ''),
('458525ship', 'Request for Final Clearance', 10, ''),
('201410arcoship', 'Request for Final Clearance', 11, ''),
('4525jishanship', 'Request for Final Clearance', 12, ''),
('5512ctgport', 'Request for Final Clearance', 13, ''),
('121245ship', 'Request for Final Clearance', 14, ''),
('7575ship', 'Request for Final Clearance', 15, ''),
('7575ship', 'Request for Final Clearance', 16, ''),
('4515ship100', 'Request for Final Clearance', 17, ''),
('451547arcoship', 'Request for Final Clearance', 18, ''),
('4515ship100', 'Request for Final Clearance', 19, ''),
('451575ship', 'Request for Final Clearance', 20, ''),
('451547arcoship', 'Request for Final Clearance', 21, ''),
('123qwe', 'Request for Final Clearance', 22, ''),
('7815eveningship', 'Request for Final Clearance', 23, ''),
('7852pop', 'Request for Final Clearance', 24, ''),
('7852pop', 'Request for Final Clearance', 25, ''),
('7852pop', 'Request for Final Clearance', 26, ''),
('4525dbl', 'Request for Final Clearance', 27, ''),
('12ahasan12', 'Request for Final Clearance', 28, ''),
('12ahasan12', 'Request for Final Clearance', 29, ''),
('12ahasan12', 'Request for Final Clearance', 30, ''),
('12ahasan12', 'Request for Final Clearance', 31, ''),
('12ahasan12', 'Request for Final Clearance', 32, ''),
('12ahasan12', 'Request for Final Clearance', 33, ''),
('12ahasan12', 'Request for Final Clearance', 34, ''),
('12ahasan12', 'Request for Final Clearance', 35, ''),
('12ahasan12', 'Request for Final Clearance', 36, ''),
('7845ctgship', 'Request for Final Clearance', 37, ''),
('222ship', 'Request for Final Clearance', 38, ''),
('1234shipdbl', 'Request for Final Clearance', 39, ''),
('12ahasan12', 'Request for Final Clearance', 40, ''),
('4525jishanship', 'Request for Final Clearance', 41, ''),
('123qwe', 'Request for Final Clearance', 42, ''),
('1234shipdbl', 'Request for Final Clearance', 43, ''),
('4525dbl', 'Request for Final Clearance', 44, ''),
('1234shipdbl', 'Request for Final Clearance', 45, ''),
('4525dbl', 'Request for Final Clearance', 46, ''),
('12ahasan12', 'Request for Final Clearance', 47, ''),
('4585shipport', 'Request for Final Clearance', 48, ''),
('4585shipport', 'Request for Final Clearance', 49, 'Registered Ship'),
('4585shipport', 'Request for Final Clearance', 50, 'Registered Ship'),
('11ship12', 'Request for Final Clearance', 51, 'Registered Ship'),
('11ship12', 'Request for Final Clearance', 52, 'Registered Ship');

-- --------------------------------------------------------

--
-- Table structure for table `joinn`
--

CREATE TABLE `joinn` (
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joinn`
--

INSERT INTO `joinn` (`email`, `password`) VALUES
('abcd@gmail.com', '1234'),
('xyz@gmail.com', '0123'),
('arco@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `shipmenttime`
--

CREATE TABLE `shipmenttime` (
  `id` int(11) NOT NULL,
  `Companyname` varchar(255) DEFAULT NULL,
  `license_number` varchar(255) NOT NULL,
  `shipmenttime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipmenttime`
--

INSERT INTO `shipmenttime` (`id`, `Companyname`, `license_number`, `shipmenttime`) VALUES
(56, 'mehediship', '	 5512ctgport', '25/12/2023'),
(57, '', '1234shipdbl', '12/20/23'),
(58, 'dblship', '1234shipdbl', '12/20/2023');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(250) NOT NULL,
  `Company` varchar(300) NOT NULL,
  `email` varchar(350) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Company`, `email`, `password`) VALUES
(53, 'Arcoport', 'jitugupta2241@gmail.com', '1234aa'),
(59, 'abcde', 'parco201410@bscse.uiu.ac.bd', '1234'),
(65, 'dbl', 'pritamjitu222@gmail.com', '1234'),
(66, 'hello', 'jitugupta2241@gmail.com', '1234as'),
(67, 'dgjtgjf', 'nhoda24@gmailcom', '1234hh'),
(68, 'Arco Ship', 'arco@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comdetails`
--
ALTER TABLE `comdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_number` (`license_number`),
  ADD UNIQUE KEY `license_number_2` (`license_number`);

--
-- Indexes for table `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalrequest`
--
ALTER TABLE `finalrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipmenttime`
--
ALTER TABLE `shipmenttime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comdetails`
--
ALTER TABLE `comdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `finalrequest`
--
ALTER TABLE `finalrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `shipmenttime`
--
ALTER TABLE `shipmenttime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

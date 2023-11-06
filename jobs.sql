-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: May 28, 2023 at 12:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `years_of_experience` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL,
  `job` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `country`, `birth_date`, `salary`, `email`, `phone_number`, `years_of_experience`, `gender`, `img_path`, `job`) VALUES
(1, 'Dhananjay Preet', 'Canada, USA', '0000-00-00', '2500.00', 'test2@Gmail.Com', '855 606 8472', 5, 'Male', 'assets/img/team-1.jpg', 'Developer'),
(5, 'Elaine W. Cook', 'Canada, USA', NULL, '1500.00', 'test@mail.com', '855 606 8473', 3, 'Female', 'assets/img/team-2.jpg', 'Sr. Team Leader'),
(6, 'Raymond H. Cato', 'Canada, USA', NULL, '1850.00', 'Test3@Gmail.Com', '855 606 8475', 4, 'Male', 'assets/img/team-3.jpg', 'UI/UX Designer'),
(7, 'Virginia R. McCain', 'Canada, USA', NULL, '2350.00', 'Test4@Gmail.Com', '855 606 8479', 4, 'Male', 'assets/img/team-13.jpg', 'Laravel Developer'),
(8, 'Virginia A. Greer', 'India', NULL, '1900.00', 'Test4@Gmail.Com', '855 606 8433', 6, 'Male', 'assets/img/team-5.jpg', 'Shopify Developer'),
(9, 'Elvira J. Reese', 'Canada, USA', NULL, '2500.00', 'Test6@Gmail.Com', '855 606 8411', 6, 'Female', 'assets/img/team-6.jpg', 'Front-End Developer'),
(10, 'Stella Beauregard', 'Canada, USA', NULL, '1600.00', 'Test7@Gmail.Com', '855 606 8231', 3, 'Male', 'assets/img/team-7.jpg', 'WordPress Developer'),
(11, 'Carol M. Thompson', 'Canada, USA', NULL, '1400.00', 'Test8@Gmail.Com', '855 606 8412', 2, 'Female', 'assets/img/team-8.jpg', 'Jr. Content Writer'),
(12, 'Wanda D. Smith', 'Canada, USA', NULL, '2600.00', 'Test9@Gmail.Com', '855 606 8476', 6, 'Male', 'assets/img/team-9.jpg', 'Sr. PHP Developer');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `job_type` varchar(20) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `is_urgent` tinyint(1) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `salary`, `job_type`, `is_featured`, `is_urgent`, `img_path`, `location`, `company`) VALUES
(1, 'Technical Content Writer', '80.00', 'Full Time', 1, 0, 'assets/img/l-3.png', 'London, UK', 'Shopify'),
(2, 'Front-End Developer', '50.00', 'Enternship', 1, 1, 'assets/img/l-4.png', 'Canada, USA', 'Deezroo'),
(3, 'Expert Team Leader', '80.00', 'Part Time', 1, 0, 'assets/img/l-5.png', 'Denver, USA', 'Photoshop'),
(4, 'New Shopify Developer', '90.00', 'Part Time', 1, 0, 'assets/img/l-6.png', 'California, USA', 'Firefox'),
(5, 'Sr. Magento Developer', '80.00', 'Full Time', 1, 1, 'assets/img/l-7.png', 'Canada, USA', 'Air BNB'),
(6, 'Jr. PHP Developer', '5.00', 'Enternship', 1, 1, 'assets/img/l-1.png', 'Tunisia', NULL),
(7, 'Jr. PHP Developer', '6.00', 'Freelancer', 1, 0, 'assets/img/l-2.png', 'Tunisia', NULL),
(8, 'Jr. Laravel Developer', '4.20', 'Full Time', 1, 0, 'assets/img/l-4.png', 'Tunisia', NULL),
(9, 'Sr. UI/UX Designer', '4.00', 'Freelancer', 1, 0, 'assets/img/l-5.png', 'Tunisia', NULL),
(10, 'Java & Python Developer', '2.00', 'Part Time', 1, 1, 'assets/img/l-6.png', 'Tunisia', NULL),
(11, 'Sr. Code Ignetor Developer', '5.00', 'Full Time', 1, 0, 'assets/img/l-7.png', 'Tunisia', NULL),
(12, 'Sr. Magento Developer', '3.20', 'Enternship', 1, 1, 'assets/img/l-8.png', 'Tunisia', NULL),
(13, 'Data Project Manager', '10.00', 'Part Time', 1, 1, 'assets/img/l-9.png', 'Tunisia', NULL),
(14, 'HTML5 To WordPress Developer', '8.00', 'Full Time', 1, 0, 'assets/img/l-10.png', 'Tunisia', NULL),
(15, 'Jr. Content Writer', '4.00', 'Part Time', 0, 1, 'assets/img/l-11.png', 'Tunisia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `name`, `email`, `password`, `createdAt`, `phone_number`) VALUES
(1, 'Mohamed Ben Jdira', 'mohamedbenjdira3@gmail.com', '$2y$10$/6lWOpuetAGrFuffnrcIZOABL0Tfr92/U0RN2kFUcmuoaLBpQUjWm', '2023-05-16 16:46:07', '50508475'),
(10, 'Ulises Kilback', 'oDuBuque@hotmail.com', '$2y$10$hnq4iIqvRCadEFCoCbiG/ee.J6tWZrjmW2qk86D49o1akHRsxhUNy', '2023-05-19 15:51:07', '975-800-9349'),
(11, 'Elisha Fritsch', 'Juliana.Keeling@Rippin.com', '$2y$10$brJTBE4iPb1jLmsKTQcoN.nuKJxpmAX62RX0X8Vs.Lz5XPwEq6kL2', '2023-05-19 15:51:07', '1-326-533-5147'),
(12, 'Alexander Leffler II', 'Jaime94@Reynolds.com', '$2y$10$8RtHQFznJyJWrhHPluPNOOVVfI2/lbeGeyPbA7sXMRKrSqWKjJoNq', '2023-05-19 15:51:25', '074.622.8719x942'),
(13, 'Dejah Hilpert', 'Elias26@Gibson.com', '$2y$10$MRIvYx.FVcN44dqIqB9KS.A.pyeeGAbTpw1LWDX1qLCtEZa6M8NDa', '2023-05-19 15:51:25', '293-147-8556'),
(14, 'Max Lehner', 'Orn.Jerrold@Labadie.org', '$2y$10$tINvY8V8U.LsvSJU3pcRxOOd1WCD3F5KudOQ7RPlzmTh53zyD4GmS', '2023-05-19 15:51:25', '(037)976-8008'),
(15, 'Marcelle Daugherty', 'Vladimir18@yahoo.com', '$2y$10$i5s4BM5J2w8HJWBzGLSC7.NXz4VUz1mS24FwRvnMZBqyOS8kRAm5.', '2023-05-19 15:51:25', '(798)252-1805'),
(16, 'Dayna Ernser', 'Bartoletti.Corrine@Koss.com', '$2y$10$1JtdcUPvVJd2Z6fC8tJYz.gkZkyrye0FMh0kZ3rTKqXF.DRF3DC1.', '2023-05-19 15:51:25', '03381323576'),
(17, 'Eduardo Jacobi III', 'Gage.Simonis@Tremblay.com', '$2y$10$ix5v9oJ1gPmhc0ZXQJ32cu7CcbUEz6TJiN9G8r9ESEk1t7Znw9nf6', '2023-05-19 15:51:26', '1-214-440-1109x88750'),
(18, 'Ms. Zelda Gerlach', 'Tillman.Jerrell@Wyman.net', '$2y$10$JaBC6B7W1gy0rCfCbtONm.xuMrZC8/Gq/02tiACD4HkaVBfsvt.Eq', '2023-05-19 15:51:26', '619-287-3159'),
(19, 'Myrl Little', 'Bridie.Mayer@hotmail.com', '$2y$10$3ZLF2iYPQ/bGwrp9OL9HLemZ0bptVbI5avsgpMXfcaZO/kvX.jA0e', '2023-05-19 15:51:26', '1-560-825-8353'),
(20, 'Onie Zemlak', 'hThiel@yahoo.com', '$2y$10$i6xOTKVm3olO5vy4ba5B5uE8.g4Y35zkjfyJWnSkRcWMPGD1ngv3q', '2023-05-19 15:51:26', '323.466.0638'),
(21, 'Antwan Heller', 'Cleveland.Johnston@Treutel.org', '$2y$10$kMZFK2YLm0M69KzYofuDduBgPmo18E2bQlb02iDBdYCj4Wnh7gBnW', '2023-05-19 15:51:26', '320.573.6042x3486'),
(22, 'Prof. Mable Franecki IV', 'sJenkins@Padberg.com', '$2y$10$CsZorCg4QtmZXP3M1f5DteiDwCZknQIUWmO511D5CAHKn.ypO7C7a', '2023-05-19 15:51:26', '011-241-2417'),
(23, 'Mrs. Belle Cormier Jr.', 'Morar.Sincere@Rutherford.com', '$2y$10$kgj.z14PCqr6TI0pFK3OR.v1GH7YC34itBpNPoiOCKo51sKr6U6QS', '2023-05-19 15:51:26', '898.491.8822x5330'),
(24, 'Miss Mireya Hermiston Sr.', 'Josephine.Leuschke@hotmail.com', '$2y$10$qOufFnd9lSgFGCAosrLT4OyDesi0.aVAsR.NG2lDRaucX8m/rux1K', '2023-05-19 15:51:26', '429-414-9208x714'),
(25, 'Selina Harvey DDS', 'Stanton.Ford@hotmail.com', '$2y$10$FS9g4siSWmH.55npZniMVur0EPcDOPhYe0K2qOiHKJRouENNMIpOu', '2023-05-19 15:51:26', '053-985-8735x7023'),
(26, 'Ansel Zulauf', 'Kristoffer.Wilkinson@hotmail.com', '$2y$10$g0qwlPM.hkE9zXMZciQ9/erSV67QnSpHWHN4E1c8fr0getHxaZqIS', '2023-05-19 15:51:26', '(859)392-2291'),
(27, 'Mable Emard', 'Lilyan.Wyman@Krajcik.org', '$2y$10$ESpvQLYD7b3kd5JWF8of9.Afei9Oef2ytc42oVdT3dtMfFUJGTx3i', '2023-05-19 15:51:27', '758-582-5851'),
(28, 'Hannah Schamberger III', 'Brakus.Shakira@hotmail.com', '$2y$10$JkHmwG5lNYI4Vs.PTu132uKZvitPdruqxf9Fo6dIcJr3knGwaMRWq', '2023-05-19 15:51:27', '584-908-5722x82494'),
(29, 'Lura Franecki', 'Bartoletti.Jerrold@hotmail.com', '$2y$10$glVyzlzmt2gsAAsEFqc7x.F76z9UoZyz8VHkzTOAzcguV/1JlWmlm', '2023-05-19 15:51:27', '888-924-1006x92443'),
(30, 'Crystel Nicolas', 'Reichert.Mabelle@hotmail.com', '$2y$10$G/oGrsscbkOWzXg/WBn6YuBaZchfbuJlHXXCPlaYw4qgbFmlj45Kq', '2023-05-19 15:51:27', '1-957-484-7758'),
(31, 'Prof. Harrison Pfeffer', 'Edyth63@Muller.com', '$2y$10$.j4AErF3Awjk.pgpd0P.B.3GvzY9twIdMl.KsjmjMWXr/lLq7wApC', '2023-05-19 15:51:27', '129-244-8294x51554'),
(32, 'Prof. Adan Hahn', 'dReinger@Reichert.com', '$2y$10$z9zPs6.zemaiF1kXDVJ.3u5qL5Ra3DNOfDAC1WqXIvV8aCTUWPhjC', '2023-05-19 15:51:27', '1-933-686-8175x45163'),
(33, 'Theo Bernhard', 'rWiza@yahoo.com', '$2y$10$KOrGGDR9MHsVkArMLMEiBOqVcAp3WSBkCn1vV/yx6ui/aFR.sFAca', '2023-05-19 15:51:27', '07870279417'),
(34, 'Prof. Pearlie Emard Sr.', 'kJacobs@Kozey.com', '$2y$10$hzZHPo.XP6q9aJaJZoKaEOZ0bpJ4qrgAZYT3nvXBENRL7cOCoSH.6', '2023-05-19 15:51:28', '(360)228-2176x23872'),
(35, 'Dr. Natalie Medhurst', 'mNikolaus@hotmail.com', '$2y$10$t/ei7CUNkpC.9lEzdzniDOCd3s7v3D50kdmcxjnpGAtzVPglvsG8K', '2023-05-19 15:51:28', '931.835.4902'),
(36, 'Nettie Dach', 'Arnaldo.Gorczany@hotmail.com', '$2y$10$6uJEhC5rLoP4uPuh3OxGjun6JV4RIPqqnb2rzcllDmqmT7j2AC.x.', '2023-05-19 15:51:28', '427.634.3130'),
(37, 'Danyka Hahn V', 'Frami.Sim@yahoo.com', '$2y$10$rpzJ2cCteI5unAJtU/JyDucKZmNO1xpmHukSBodDy6gPVTts3P78.', '2023-05-19 15:51:28', '770.677.6364x79932'),
(38, 'Morris VonRueden PhD', 'Maude.Schuppe@yahoo.com', '$2y$10$8ac7dmhcxSFHoDW8YLXj7OEN4H1wnfFt/IcuwAmwViAVv68nKs/Mi', '2023-05-19 15:51:28', '168-816-5078x63597'),
(39, 'Dr. Rocio Oberbrunner Sr.', 'Gaylord.Lura@Morissette.com', '$2y$10$9anUXXKGX6ePaaMAqf0ZWuNUuqnnbnYS0D3sgtULtaigDOlyDkuVe', '2023-05-19 15:51:28', '(653)190-6190x799'),
(40, 'Landen McGlynn', 'Wilma.King@hotmail.com', '$2y$10$naQ6UKWydIfLVjzekyJKdOlIwQhSEMVhUXNJo/ZMq8/WSQ1mLP3kS', '2023-05-19 15:51:28', '1-862-405-3132'),
(41, 'Iva McDermott', 'Deondre.Waelchi@Gusikowski.net', '$2y$10$6OeO0rxEoYNf2C.YWVDPOeVIEM6HDVh3CZMFD8NeXf6M2kV.zuX1y', '2023-05-19 15:51:28', '1-547-396-8892'),
(42, 'Cale Bruen DVM', 'Rice.Esther@Jakubowski.com', '$2y$10$3hCgsI3ytl8jY36sttFPneTHywqrp0QysI7ZvWCCZRgT4ASlI95qK', '2023-05-19 15:51:28', '06873860429'),
(43, 'Nona Olson', 'Bud00@Pagac.org', '$2y$10$IMudYNbd9QrhNZvfpFXn8.hdpG.dpk0FvT0s86D0Tge6H./OXiRjO', '2023-05-19 15:51:28', '+75(8)1088201648'),
(44, 'Mrs. Elna Gorczany', 'qVon@Pfannerstill.info', '$2y$10$SUeAzXiJ.exrb8PQQ605teijvd0oSIklyDkg4y0Ey7pbT/NG1jk3G', '2023-05-19 15:51:29', '(749)601-8189'),
(45, 'Damon Schiller V', 'bRomaguera@gmail.com', '$2y$10$j1Shts.a0N2TUBS5UQFJY.40I8U7zav8.zKMfxy3QFvi2hS2QfUqS', '2023-05-19 15:51:29', '320.062.1880x6523'),
(46, 'Marianna Kemmer', 'gKemmer@yahoo.com', '$2y$10$jhQX1bEcMoJy9z18SvTEH.RY07LQG2cRuMEgnvJPWZRyMR1xQGmgS', '2023-05-19 15:51:29', '272.108.7697x03173'),
(47, 'Rick Langosh', 'Percy63@Lemke.com', '$2y$10$c4GACBqJCMzyQteUglcyLePb8pW3sxm9UWsAqntmcniBnWHCAuTDO', '2023-05-19 15:51:29', '108-468-5326x397'),
(48, 'Adriana Pacocha III', 'Modesto.Nicolas@hotmail.com', '$2y$10$vAJpzZ2Rb8b1bgNLMxHehuOXqHiQUTK7EgTOXTNYuKMDU8XcXFjLG', '2023-05-19 15:51:29', '140-115-3019x93658'),
(49, 'Kelvin Turner', 'Max.Hudson@Kutch.com', '$2y$10$emrp3ALdm2mckBVczPq6.Od0os5at5F52dYOoLE7vwVPLi5hkDUvq', '2023-05-19 15:51:29', '(192)863-9113'),
(50, 'Dr. Tod Bahringer Jr.', 'Fanny21@hotmail.com', '$2y$10$f9U4/eOpzEoeGFj15ukGx.uTyog9lcaGmGRkTSZwNVL1zKm1bN.my', '2023-05-19 15:51:29', '316.232.3382'),
(51, 'Noble Halvorson', 'Nichole89@Kilback.com', '$2y$10$/IEPYStTTribxl1ON2BpUeNodbOUgbpVnTQKI.j5hNd2zU6OYWLK.', '2023-05-19 15:51:29', '921-257-9857'),
(52, 'Greta Boehm', 'tCremin@VonRueden.com', '$2y$10$9jjQgjWWDUxp22cFAEQGxOGbPrIQGgNc1hhRDTb.ozMIMtInes4CC', '2023-05-19 15:51:30', '846-644-5954x7164'),
(53, 'Lesley Yost', 'Hayes.Kamille@Heathcote.com', '$2y$10$L81Yhxb5/94LgR.pY9FpkuJcbfhoLEM2eFmvhGaxnGmiZ/marHkuW', '2023-05-19 15:51:30', '06205976973'),
(54, 'Jammie Medhurst', 'xHammes@hotmail.com', '$2y$10$ERz6aTS/m9qH1js1DdiHNODbmFNiT39ikeEdRksntv1sFrWTjVHmC', '2023-05-19 15:51:30', '105-795-2249'),
(55, 'Baby Fay', 'Lee17@Thiel.biz', '$2y$10$yvtZCuR8u6nUflUrXtfw..3GECsTakjIlBZRjwVGl3RnmEyG4HDcK', '2023-05-19 15:51:30', '829-949-9519x394'),
(56, 'Eda Metz', 'Angelina86@hotmail.com', '$2y$10$NM3aNh3Aa..dBG3cLZFMo.SKSWTWxUDG/KP0RZ/V4zZjD8r2L8xGy', '2023-05-19 15:51:30', '00056811162'),
(57, 'Damon Kautzer', 'Little.Clotilde@yahoo.com', '$2y$10$cRuqTs22JE6BlWB/QrfOI.Xkdpae984B4Oeduv8CLh4nwrQYF9bMC', '2023-05-19 15:51:30', '760-485-2918x6691'),
(58, 'Jamil Bradtke', 'gKihn@hotmail.com', '$2y$10$LY7Fm3ZuM7AQeqLmERQite.jwZvLq9PfmXWLeQKOGAx3f4.8GvR6O', '2023-05-19 15:51:30', '166-812-8394x8117'),
(59, 'Mrs. Antonetta Heidenreich', 'Lessie28@gmail.com', '$2y$10$Ht5vJNbEAB7LgvVWdICbLetDTbxUyaK9rFkPc./k3P1j7lQSTiHde', '2023-05-19 15:51:30', '1-228-901-9663'),
(60, 'Dr. Sigurd Becker', 'Zoie.Stroman@yahoo.com', '$2y$10$05RdRNxQDygxo/87lPNZT.Pk/UIxxFSzZ25MFyP3Eg.D1a0nk8wXC', '2023-05-19 15:51:30', '(243)493-8317'),
(61, 'Isac Pouros', 'qDicki@Kutch.biz', '$2y$10$saewmn1QXcWZuKtDMuvy0e4.vB.GABQbIMl0NZms.F7uQZA0V4ONK', '2023-05-19 15:51:30', '(588)138-2617x856'),
(62, 'Eli Reichert', 'Ankunding.Donnell@yahoo.com', '$2y$10$GvKqLpgP5r8QIEBLvV95leECtEGuO2I1MoAmXvm0vyIJI8mo7jkS.', '2023-05-19 15:51:31', '09851175125'),
(63, 'Alice Raynor', 'Wellington62@Schuster.info', '$2y$10$7EpO7RMztXFWUsVP3x0SyumdlUOEExBwbxeXPYh5TX84y1ByBbZJa', '2023-05-19 15:51:31', '737.457.8294'),
(64, 'Dr. Coy Beahan', 'dMcKenzie@gmail.com', '$2y$10$Xlvz9ZNqnWdG8YnckEcMQe3MMOaclg6ngnmwqsafGnC4j2PE8z.WS', '2023-05-19 15:51:31', '1-172-908-1443x59858'),
(65, 'Golden Lang', 'zKrajcik@yahoo.com', '$2y$10$YJAml.dsIuWcYRMdc4W3KuyHFhIECyR1bEo3yRt0Tm3oFSlmeKz/i', '2023-05-19 15:51:31', '054.818.4358x177'),
(66, 'Mathilde Hartmann', 'dKessler@Ferry.net', '$2y$10$DnsmIlbYPq1gQ5Z8lAeVZ.pn190UW93NwMyp8dWsqVgj0bBDUVQ7K', '2023-05-19 15:51:31', '072-903-9337x49590'),
(67, 'Dr. Everette Wuckert IV', 'Dakota.Orn@Bahringer.net', '$2y$10$Y1v3Tjk3M0jTPJ4c9K78gOr4gEJki6kolSDozATkG1hPH2ju7LuIW', '2023-05-19 15:51:31', '651-818-2791x7543'),
(68, 'Muhammad Jones IV', 'Borer.Carson@hotmail.com', '$2y$10$/V1TlgVPP9dwwelDe00hi.iEmeYINHI.axd6XsyfpXXF.UEGoj5LC', '2023-05-19 15:51:31', '1-122-973-7962'),
(69, 'Aracely Stiedemann', 'Luettgen.Rosalee@Renner.com', '$2y$10$TXOxr.2Pi/cGFSxmZIskpuVZbFfE44cfcKmJuQ7NO8l6LaIlgPBCK', '2023-05-19 15:51:31', '(454)541-1247'),
(70, 'Derrick Schuppe', 'Nathanial.Hauck@Walsh.com', '$2y$10$il1i4AFGAjzIFgqdDSDIBetU1PIyWKVvbakqV/5tM91FFHH0Iw1C.', '2023-05-19 15:51:31', '280.988.4388'),
(71, 'Rowland Willms', 'Rohan.Amani@hotmail.com', '$2y$10$jyy8xr0H07vcos4FqarYmuBzgQDwj2Kghoyo9NMTW/969.bAYtWAS', '2023-05-19 15:51:31', '1-438-268-0041'),
(72, 'Rodolfo Borer', 'lMurazik@gmail.com', '$2y$10$NDGWKFWeNdbLenF8.DTs9eN7cKcPfnlSiUrLeSZbsSINqgFTmcDVW', '2023-05-19 15:51:32', '1-716-325-7490x520'),
(73, 'Jessika Will V', 'Trystan71@Greenfelder.com', '$2y$10$YaF1r4or6aCqeS0LtaSFoOCUOpV9Ny/5FiTHrQvD7Fac.XWeFD3WK', '2023-05-19 15:51:32', '(449)678-2366x446'),
(74, 'Laisha Glover', 'lHansen@Kuhic.com', '$2y$10$2DrGIaafDy71R/nBu6psPe0pXZAuOYwJ4NQBkcmV6DRqGac/jHNJC', '2023-05-19 15:51:32', '647-500-6896x9634'),
(75, 'Prof. Daryl Reichert', 'Rogahn.Cecil@Sipes.info', '$2y$10$RDPwOY1THKniA2hUIswUweK8t/pn8awGwKotqwrzNJx3.1TA7qw9W', '2023-05-19 15:51:32', '(544)995-9502'),
(76, 'Percival Bergnaum', 'Corbin.Strosin@gmail.com', '$2y$10$4lYAlNcMdpiBwsaGmxz.xe2.GH9NN0J1pGxukoOhUMHF.Sl6wTdDi', '2023-05-19 15:51:32', '+70(1)2870284972'),
(77, 'Katelynn Kertzmann', 'Green.Kay@Barrows.org', '$2y$10$lBfxUkw3pQoMrk7yXP89XuXx.BCqpx/0moz9Y9q7qYVpRnNSE4vrS', '2023-05-19 15:51:32', '1-817-143-1125x33496'),
(78, 'Ms. Pat Hintz', 'Eryn.Bosco@yahoo.com', '$2y$10$ZuHKrCXv6wYiJMGGqYklmujHdz0Fl/OEdPtkHxbzPzxced.WJqef6', '2023-05-19 15:51:32', '(727)610-1213'),
(79, 'Mr. Sigrid Bednar', 'Sophie00@gmail.com', '$2y$10$5T3qTTHuFsI7AFTuYrlVGuazOL1zKjymeOdop/PZ47nrq82aaj8e6', '2023-05-19 15:51:32', '+94(4)0208933431'),
(80, 'Bernita Spencer', 'Davin88@Conroy.org', '$2y$10$wNGzWj6MT2WuwdK5Im8ZXuwlzTWPD.ZM71MxsKGThVcldYRnsHZ2u', '2023-05-19 15:51:32', '1-843-088-5084x949'),
(81, 'Demarcus Bartoletti', 'rBlick@Bergstrom.biz', '$2y$10$hZC/Yy/WNBX03YBRJsCHG.aYseGMxoPHppoliUCGqrHob.U1qbTBi', '2023-05-19 15:51:32', '438.516.7538x98829'),
(82, 'Prof. Vita Schaefer DDS', 'Buford28@gmail.com', '$2y$10$eKpE7kSecE5OzqgF0PCJCe5E9LTvScJpg2MYBn4fT9HDR2KFliB9.', '2023-05-19 15:51:32', '+40(4)1771174647'),
(83, 'Tess Wilderman', 'tLesch@yahoo.com', '$2y$10$Qn/qKBDiQ86nMf7Ad9NmNullAV/jL8DDv6BxF3YFjmqgYvhZefvdm', '2023-05-19 15:51:33', '238.285.9160x4642'),
(84, 'Desiree Dooley', 'Johanna55@gmail.com', '$2y$10$/h7M97GSIcH8VT24EdXu.u.KJFZotTkmNSYUjf7KH1y3giMwPTOoy', '2023-05-19 15:51:33', '02972680142'),
(85, 'Prof. Breana Homenick', 'Carlee47@gmail.com', '$2y$10$TTw6fXo5vIw/BUnJHtjwAuS/HieCNIjJq8SvU8KKCfpPaQLmDTxD2', '2023-05-19 15:51:33', '817.543.4788x78378'),
(86, 'Ms. Elza Auer DVM', 'Gilbert.Gislason@gmail.com', '$2y$10$RXBOttJ1dfre12a9l45SPOLYVCs6HY5iUI4ug/.P0ZZWpm77oQZXG', '2023-05-19 15:51:33', '508-218-6170x51679'),
(87, 'Cicero Schaefer', 'Nikolaus.Newell@yahoo.com', '$2y$10$NIZIOU90RDLlGxjcB44khuHVXCla64m1P1n0AzmeS8.lfQqidQX5C', '2023-05-19 15:51:33', '(380)098-0785'),
(88, 'Daron Greenfelder', 'xBauch@hotmail.com', '$2y$10$ovQt.Nhf.KLJAshBgj8Eqekey3aJIa8PpHxfn7qznVibo3Yfh8wcC', '2023-05-19 15:51:33', '04206963948'),
(89, 'Hal Brakus', 'Cassandra.Mueller@hotmail.com', '$2y$10$kirQrgiZeXDijrt9wo9JxeBe48SauRg/Npb5PEZm4a3kVq9iH63Lu', '2023-05-19 15:51:33', '(896)896-1924x815'),
(90, 'Mack Hammes', 'bConsidine@Volkman.com', '$2y$10$lo8o190XdG87XHptzxvuBOo8EHjzcWMtfiqzde4Zw23lQSvurRohW', '2023-05-19 15:51:33', '853-355-7166'),
(91, 'Dayna Bruen I', 'Kirlin.Taya@yahoo.com', '$2y$10$mum4J3yGAXnFHS1ejPGQAeHwahEpc45z3G3sUhdjGBJtxF3tzaT4S', '2023-05-19 15:51:33', '833.709.9975'),
(92, 'Amani Morissette', 'Kathlyn.Kovacek@yahoo.com', '$2y$10$FYp5CTxIk6YHDc2O.fkqiOZhr9Aq63oTWuVH/ACbQDmX72S7xQALC', '2023-05-19 15:51:34', '1-290-544-9623x4350'),
(93, 'Marianna Harvey I', 'Kristy.Rosenbaum@Leannon.com', '$2y$10$ocsCuhw03NQZkLaJTfYELOjauYrpJYKkyYLLzPL6WemjUH.k5Qrhy', '2023-05-19 15:51:34', '03028024139'),
(94, 'Mr. Felix Lynch', 'Kayley.Swaniawski@hotmail.com', '$2y$10$FlW1M7AL9rJvrA09.kXhY.15QigmmvgcUZB3YeMMZlg2La6zqmt1S', '2023-05-19 15:51:34', '07685590634'),
(95, 'Dr. Dejuan Batz', 'dBashirian@Dicki.com', '$2y$10$1uiUvW9RK/.OoLzrKQY1leiBvnDzqdb1zT1mglW4W8RKzQhXO7qJm', '2023-05-19 15:51:34', '697.362.0886x44456'),
(96, 'Eriberto Pfannerstill', 'kLabadie@hotmail.com', '$2y$10$WestNjtWlj5h9HPrpYn3Cuv8KlRTkUqI1jWK4unzmfSU0kkgnb8VC', '2023-05-19 15:51:34', '157-123-2816'),
(97, 'Miss Pansy Stracke', 'Deven17@Bins.net', '$2y$10$grgvoMhfFb4doUBLYk/XjOy.YgoBBJmW/zyD15DBcZZaiDgorJ/Uu', '2023-05-19 15:51:34', '1-414-130-3653x53007'),
(98, 'Dr. Elbert Weber', 'Nienow.Odell@Collier.biz', '$2y$10$zBknX5qc8xeDOwcYhsX.3OjiBpnVOokHhjmk4cdaqacaFr.xw285q', '2023-05-19 15:51:34', '185-128-0483x607'),
(99, 'Eden Bogisich', 'Ahmad70@yahoo.com', '$2y$10$pQGEkhxJlo2eneVJOOnDOuUtsA84SR4fPIPepsKJ0N/sZ1R4qBTf2', '2023-05-19 15:51:34', '468-833-4573x85300'),
(100, 'Gerard Hammes', 'Terry16@Ritchie.com', '$2y$10$ZeByayTvseDKSqi3jvWBBev44oszU/4MpJaS3jBGbdvQu0zIVBYpi', '2023-05-19 15:51:34', '957-220-8679x39048'),
(101, 'Maya Kuphal', 'oQuigley@Streich.net', '$2y$10$szHuGUyVibn.jc2crwH.VOV.W32Ulsxy./tzIGX7OIvZPhnxKIyB6', '2023-05-19 15:51:34', '345.852.1423x3594'),
(102, 'Axel Shields PhD', 'Reinger.Jazlyn@Schroeder.com', '$2y$10$ROpSDD1e914rrpE8PEFTOuR5R6AgzuoCSKDMykROarjib/Z12pBS.', '2023-05-19 15:51:35', '523-461-7262x71411'),
(103, 'Tamia Steuber', 'gRuecker@hotmail.com', '$2y$10$ac/nHHpw58zvccAaPEdljO1/jGH2vUKXAZq6jEUD.lHFLTrLXTbBm', '2023-05-19 15:51:35', '+91(6)4896070459'),
(104, 'Prof. Ansley Lebsack', 'aBailey@gmail.com', '$2y$10$5J50aWOwpEvylHlnHT06dueiIiRPw2uwcxWh.Fo0xcpIUDmsA654e', '2023-05-19 15:51:35', '395-228-1832x23152'),
(105, 'Sharon Hansen Jr.', 'Macie.Sporer@gmail.com', '$2y$10$g6xvPWoyIGdkY6vjrTu60uRdDeQMtWjSsf02AKHa1H0NBMxSKY2MO', '2023-05-19 15:51:35', '1-306-271-3681x4320'),
(106, 'Dr. Odell Sanford MD', 'Orn.Krystel@Kiehn.org', '$2y$10$FsH/9NV56K3x9YNN7GMCXeJq0ICR7EBhzLqsihK0Svdf/nwO8jJ6G', '2023-05-19 15:51:36', '386-346-6033x87115'),
(107, 'Daphne Will', 'Kendrick86@hotmail.com', '$2y$10$bQKXxwTBe8kCio2LufH0p.NX9XUoa943MdKh5pQ2ldW0NphTfAfMG', '2023-05-19 15:51:38', '214-851-2061'),
(108, 'Mrs. Ariane Veum', 'mHintz@Donnelly.com', '$2y$10$doUoA/uA4l3zxq4b0umBT.eR1hOogfEf.dS/tmUnYXji5Xw76zeJe', '2023-05-19 15:51:39', '1-304-166-7684'),
(109, 'Jarrett Carroll', 'Grant.Paris@yahoo.com', '$2y$10$poVmYCT7EhHX1bdvBxPANeSg034hNyfVOjhS8OetadVPExg1AYRw2', '2023-05-19 15:51:39', '193.086.1141'),
(110, 'Rami Toubib', 'rami@mail.com', '$2y$10$1i.5iB.lbM8IaIFRjPrqIuca6vDX/FRNka24Gea4s3iC8/s0DVSCe', '2023-05-27 10:34:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

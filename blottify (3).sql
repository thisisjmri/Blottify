-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blottify`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(255) NOT NULL,
  `barangay_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `barangay_name`) VALUES
(1, 'Apokon'),
(2, 'Bincungan'),
(3, 'Busaon'),
(4, 'Canocotan'),
(5, 'Cuambogan'),
(6, 'La Filipina'),
(7, 'Liboganon'),
(8, 'Madaum'),
(9, 'Magdum'),
(10, 'Magugpo Poblacion'),
(11, 'Magugpo East'),
(12, 'Magugpo North'),
(13, 'Magugpo South'),
(14, 'Magugpo West'),
(15, 'Mankilam'),
(16, 'New Balamban'),
(17, 'Nueva Fuerza'),
(18, 'Pagsabangan'),
(19, 'Pandapan'),
(20, 'San Agustin'),
(21, 'San Isidro'),
(22, 'San Miguel'),
(23, 'Visayan Village');

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(255) NOT NULL,
  `type_incident` int(255) NOT NULL,
  `copyfor` varchar(255) NOT NULL,
  `dt_reported` datetime NOT NULL,
  `dt_incident` datetime NOT NULL,
  `place_incident` varchar(255) NOT NULL,
  `brgy_incident` int(255) NOT NULL,
  `a_lastname` varchar(255) NOT NULL,
  `a_firstname` varchar(255) NOT NULL,
  `a_middlename` varchar(255) NOT NULL,
  `a_nickname` varchar(255) NOT NULL,
  `a_citizenship` varchar(255) NOT NULL,
  `a_sex` varchar(255) NOT NULL,
  `a_civil` varchar(255) NOT NULL,
  `a_bday` date NOT NULL,
  `a_age` int(255) NOT NULL,
  `a_pob` varchar(255) NOT NULL,
  `a_mobilephone` bigint(255) NOT NULL,
  `a_currentadd` varchar(255) NOT NULL,
  `a_currentvill` varchar(255) NOT NULL,
  `a_currentbrgy` varchar(255) NOT NULL,
  `a_currentcity` varchar(255) NOT NULL,
  `a_currentprov` varchar(255) NOT NULL,
  `a_otheradd` varchar(255) NOT NULL,
  `a_othervill` varchar(255) NOT NULL,
  `a_otherbrgy` varchar(255) NOT NULL,
  `a_othercity` varchar(255) NOT NULL,
  `a_otherprov` varchar(255) NOT NULL,
  `a_occupation` varchar(255) NOT NULL,
  `a_idcard` varchar(255) NOT NULL,
  `b_lastname` varchar(255) NOT NULL,
  `b_firstname` varchar(255) NOT NULL,
  `b_middlename` varchar(255) NOT NULL,
  `b_nickname` varchar(255) NOT NULL,
  `b_citizenship` varchar(255) NOT NULL,
  `b_sex` varchar(255) NOT NULL,
  `b_civil` varchar(255) NOT NULL,
  `b_bday` date NOT NULL,
  `b_age` int(255) NOT NULL,
  `b_pob` varchar(255) NOT NULL,
  `b_mobilephone` bigint(255) NOT NULL,
  `b_currentadd` varchar(255) NOT NULL,
  `b_currentvill` varchar(255) NOT NULL,
  `b_currentbrgy` varchar(255) NOT NULL,
  `b_currentcity` varchar(255) NOT NULL,
  `b_currentprov` varchar(255) NOT NULL,
  `b_otheradd` varchar(255) NOT NULL,
  `b_othervill` varchar(255) NOT NULL,
  `b_otherbrgy` varchar(255) NOT NULL,
  `b_othercity` varchar(255) NOT NULL,
  `b_otherprov` varchar(255) NOT NULL,
  `b_occupation` varchar(255) NOT NULL,
  `b_relation` varchar(255) NOT NULL,
  `b_influence` varchar(255) NOT NULL,
  `c_lastname` varchar(255) NOT NULL,
  `c_firstname` varchar(255) NOT NULL,
  `c_middlename` varchar(255) NOT NULL,
  `c_nickname` varchar(255) NOT NULL,
  `c_citizenship` varchar(255) NOT NULL,
  `c_sex` varchar(255) NOT NULL,
  `c_civil` varchar(255) NOT NULL,
  `c_bday` date NOT NULL,
  `c_age` int(255) NOT NULL,
  `c_pob` varchar(255) NOT NULL,
  `c_mobilephone` bigint(255) NOT NULL,
  `c_currentadd` varchar(255) NOT NULL,
  `c_currentvill` varchar(255) NOT NULL,
  `c_currentbrgy` varchar(255) NOT NULL,
  `c_currentcity` varchar(255) NOT NULL,
  `c_currentprov` varchar(255) NOT NULL,
  `c_otheradd` varchar(255) NOT NULL,
  `c_othervill` varchar(255) NOT NULL,
  `c_otherbrgy` varchar(255) NOT NULL,
  `c_othercity` varchar(255) NOT NULL,
  `c_otherprov` varchar(255) NOT NULL,
  `c_occupation` varchar(255) NOT NULL,
  `c_workadd` varchar(255) NOT NULL,
  `d_narrative` text NOT NULL,
  `d_policeuser` bigint(255) NOT NULL,
  `station_id` int(255) NOT NULL,
  `remarks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `type_incident`, `copyfor`, `dt_reported`, `dt_incident`, `place_incident`, `brgy_incident`, `a_lastname`, `a_firstname`, `a_middlename`, `a_nickname`, `a_citizenship`, `a_sex`, `a_civil`, `a_bday`, `a_age`, `a_pob`, `a_mobilephone`, `a_currentadd`, `a_currentvill`, `a_currentbrgy`, `a_currentcity`, `a_currentprov`, `a_otheradd`, `a_othervill`, `a_otherbrgy`, `a_othercity`, `a_otherprov`, `a_occupation`, `a_idcard`, `b_lastname`, `b_firstname`, `b_middlename`, `b_nickname`, `b_citizenship`, `b_sex`, `b_civil`, `b_bday`, `b_age`, `b_pob`, `b_mobilephone`, `b_currentadd`, `b_currentvill`, `b_currentbrgy`, `b_currentcity`, `b_currentprov`, `b_otheradd`, `b_othervill`, `b_otherbrgy`, `b_othercity`, `b_otherprov`, `b_occupation`, `b_relation`, `b_influence`, `c_lastname`, `c_firstname`, `c_middlename`, `c_nickname`, `c_citizenship`, `c_sex`, `c_civil`, `c_bday`, `c_age`, `c_pob`, `c_mobilephone`, `c_currentadd`, `c_currentvill`, `c_currentbrgy`, `c_currentcity`, `c_currentprov`, `c_otheradd`, `c_othervill`, `c_otherbrgy`, `c_othercity`, `c_otherprov`, `c_occupation`, `c_workadd`, `d_narrative`, `d_policeuser`, `station_id`, `remarks`) VALUES
(1, 1, 'a', '2023-03-03 11:57:00', '2023-03-02 11:57:00', '0', 1, 'a', 'a', 'a', 'a', 'a', 'Male', 'Single', '2023-03-01', 19, 'a', 9876543210, 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'Male', 'Single', '2023-03-07', 20, 'a', 2147483647, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'NO', 'a', 'a', 'a', 'a', 'a', 'Male', 'Single', '2023-03-02', 18, 'a', 912828282, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1, 1, 0),
(2, 1, 'Women\'s Desk', '2023-03-03 15:35:00', '2023-03-03 15:35:00', 'Block 8, Lot 6, Velasco Urban', 16, 'Daquil', 'Jocelyn', 'Capuyan', 'Cecel', 'Filipino', 'Female', 'Single', '2023-03-03', 19, 'Monteiro\'s Well Family Clinic, Visayan Village, Tagum City', 9918228336, 'Block 8 Lot 6', 'Velasco Urban', 'Canocotan', 'Tagum City', 'Davao del Norte', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Information Technology Officer', 'Philhealth ID', 'Angga', 'Johndy Bryll', 'Butihen', 'Jandi', 'Filipino', 'Male', 'Divorced', '2023-03-03', 18, 'Davao Regional Medical Center', 9093660607, 'Acacia Street', 'Purok 28-B Kawayanan', 'Apokon', 'Tagum City', 'Davao del Norte', 'Block 13 Lot 19 Acacia Street', 'Bermudez Plains', 'Apokon', 'Tagum City', 'Davao del Norte', 'Chief Executive Officer', 'Classmate/Friend', 'Drugs, Alcohol', 'Mejorada', 'Emmanuela', 'Ibiernas', 'Elai', 'British', 'Female', 'Single', '2023-03-08', 18, 'Medical Mission Group of Hospital Health Organization', 9123456789, 'Almaciga Street', 'Purok 28-C Kawayanan', 'Apokon', 'Tagum City', 'Davao del Norte', 'Block 8 Lot 16', 'Esmeralda Homes', 'Apokon', 'Tagum City', 'Davao del Norte', 'Only Fans Manager', 'Timog Coop C', 'Once upon a time there was an old mother pig who had three little pigs and not enough food to feed them. So when they were old enough, she sent them out into the world to seek their fortunes.\n\nThe first little pig was very lazy. He didn\'t want to work at all and he built his house out of straw. The second little pig worked a little bit harder but he was somewhat lazy too and he built his house out of sticks. Then, they sang and danced and played together the rest of the day.\n\nThe third little pig worked hard all day and built his house with bricks. It was a sturdy house complete with a fine fireplace and chimney. It looked like it could withstand the strongest winds.\n\nThe next day, a wolf happened to pass by the lane where the three little pigs lived; and he saw the straw house, and he smelled the pig inside. He thought the pig would make a mighty fine meal and his mouth began to water.\n\nSo he knocked on the door and said:\n\n  Little pig! Little pig!\n  Let me in! Let me in!\nBut the little pig saw the wolf\'s big paws through the keyhole, so he answered back:\n\n  No! No! No! \n  Not by the hairs on my chinny chin chin!\n\nThen the wolf showed his teeth and said:\n\n  Then I\'ll huff \n  and I\'ll puff \n  and I\'ll blow your house down.\nSo he huffed and he puffed and he blew the house down! The wolf opened his jaws very wide and bit down as hard as he could, but the first little pig escaped and ran away to hide with the second little pig.\n\nThe wolf continued down the lane and he passed by the second house made of sticks; and he saw the house, and he smelled the pigs inside, and his mouth began to water as he thought about the fine dinner they would make.\n\nSo he knocked on the door and said:\n\n  Little pigs! Little pigs!\n  Let me in! Let me in!\n\nBut the little pigs saw the wolf\'s pointy ears through the keyhole, so they answered back:\n\n  No! No! No!\n  Not by the hairs on our chinny chin chin!\nSo the wolf showed his teeth and said:\n\n  Then I\'ll huff \n  and I\'ll puff \n  and I\'ll blow your house down!\nSo he huffed and he puffed and he blew the house down! The wolf was greedy and he tried to catch both pigs at once, but he was too greedy and got neither! His big jaws clamped down on nothing but air and the two little pigs scrambled away as fast as their little hooves would carry them.\n\nThe wolf chased them down the lane and he almost caught them. But they made it to the brick house and slammed the door closed before the wolf could catch them. The three little pigs they were very frightened, they knew the wolf wanted to eat them. And that was very, very true. The wolf hadn\'t eaten all day and he had worked up a large appetite chasing the pigs around and now he could smell all three of them inside and he knew that the three little pigs would make a lovely feast.\n\nSo the wolf knocked on the door and said:\n\n  Little pigs! Little pigs!\n  Let me in! Let me in!\nBut the little pigs saw the wolf\'s narrow eyes through the keyhole, so they answered back:\n\n  No! No! No! \n  Not by the hairs on our chinny chin chin!\nSo the wolf showed his teeth and said:\n\n  Then I\'ll huff \n  and I\'ll puff \n  and I\'ll blow your house down.\nWell! he huffed and he puffed. He puffed and he huffed. And he huffed, huffed, and he puffed, puffed; but he could not blow the house down. At last, he was so out of breath that he couldn\'t huff and he couldn\'t puff anymore. So he stopped to rest and thought a bit.\n\nBut this was too much. The wolf danced about with rage and swore he would come down the chimney and eat up the little pig for his supper. But while he was climbing on to the roof the little pig made up a blazing fire and put on a big pot full of water to boil. Then, just as the wolf was coming down the chimney, the little piggy pulled off the lid, and plop! in fell the wolf into the scalding water.\n\nSo the little piggy put on the cover again, boiled the wolf up, and the three little pigs ate him for supper.', 18667582641541129, 2, 1),
(3, 1, 'Women\'s Desk', '2023-03-07 18:31:00', '2023-03-07 18:32:00', 'Bermudez Plains', 1, 'Angga', 'Johndy Bryll', 'B.', 'Jandi', 'Filipino', 'Male', 'Single', '2000-12-19', 22, 'Davao Regional Medical Center', 9093660607, 'Block 13 Lot 19', 'Bermudez Plains', 'Apokon', 'Tagum', 'Davao del Norte', 'Purok 28-B', 'kawayanan', 'Madaum', 'Tagum', 'Davao del Norte', 'Chief Executive Officer of Tesla', 'Drivers License', 'Andales', 'Jomari', 'Obra', 'Mari', 'Filipino', 'Male', 'Married', '2000-02-10', 23, 'New Corella', 9876543210, 'Blk 16 Lot 7', 'asd', 'Cuambogan', 'Tagum', 'Davao del Norte', 'Blk 12 Lot 9', 'sda', 'Pagsabangan', 'Tagum', 'Davao del Norte', 'Super Senior Developer at Siblings', 'Homie', 'NO', 'Mejorada', 'Emmanuela', 'Ibiernas', 'Ella', 'Filipino', 'Female', 'Married', '2001-06-13', 21, 'Regan', 987654321, 'Purok 28-B', 'kawayanan', 'Madaum', 'Tagum', 'Davao del Norte', 'Purok 23-C', 'kawayanan', 'Madaum', 'Tagum', 'Davao del Norte', 'Senior Manager at Starlink', 'Saturn', 'iyahang gikawat ang tiktok shoes ni ella nya ako ang gisugo ni ella nga ipa blotter si dales', 18667582641541129, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `id` int(255) NOT NULL,
  `crime_name` varchar(255) NOT NULL,
  `crime_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `crime_name`, `crime_color`) VALUES
(1, 'Theft', '#FFA500'),
(2, 'Lost', '#00c800'),
(3, 'Murder', '#006aff'),
(4, 'Arson', '#FF00FF'),
(5, 'Rape', '#e62c2c'),
(6, 'Homicide', '#d16f0d');

-- --------------------------------------------------------

--
-- Table structure for table `logger`
--

CREATE TABLE `logger` (
  `id` int(255) NOT NULL,
  `user_id` bigint(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logger`
--

INSERT INTO `logger` (`id`, `user_id`, `activity`, `date_time`) VALUES
(1, 1, 'LOGGED IN', '2023-02-20 22:25:16'),
(3, 1, 'LOGGED IN', '2023-02-21 08:59:36'),
(5, 1, 'LOGGED IN', '2023-02-21 09:10:53'),
(6, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:19:56'),
(7, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:33:06'),
(8, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:34:23'),
(9, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:43:36'),
(10, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:47:46'),
(11, 2820953641929179412, 'LOGGED IN', '2023-02-21 09:50:41'),
(12, 2820953641929179412, 'LOGGED IN', '2023-02-21 10:16:43'),
(13, 2820953641929179412, 'LOGGED IN', '2023-02-21 10:44:01'),
(14, 2820953641929179412, 'LOGGED IN', '2023-02-22 08:04:23'),
(15, 2820953641929179412, 'LOGGED IN', '2023-02-22 08:10:58'),
(16, 2820953641929179412, 'LOGGED IN', '2023-02-22 10:09:58'),
(17, 2820953641929179412, 'LOGGED IN', '2023-02-22 10:42:03'),
(18, 2820953641929179412, 'LOGGED IN', '2023-02-22 11:47:04'),
(19, 2820953641929179412, 'LOGGED IN', '2023-02-22 11:49:09'),
(20, 2820953641929179412, 'LOGGED IN', '2023-02-22 11:55:48'),
(21, 2820953641929179412, 'LOGGED IN', '2023-02-22 14:24:34'),
(22, 2820953641929179412, 'LOGGED IN', '2023-02-23 13:39:52'),
(23, 2820953641929179412, 'LOGGED IN', '2023-02-23 14:11:19'),
(24, 1, 'LOGGED IN', '2023-02-23 14:13:25'),
(25, 1, 'LOGGED IN', '2023-02-27 11:36:35'),
(26, 1, '1 added Busaon Sub Station', '2023-02-27 12:17:30'),
(27, 2820953641929179412, 'LOGGED IN', '2023-02-28 09:15:40'),
(28, 2820953641929179412, 'LOGGED IN', '2023-02-28 10:22:20'),
(29, 2820953641929179412, 'LOGGED IN', '2023-02-28 13:54:59'),
(30, 2820953641929179412, 'LOGGED IN', '2023-02-28 13:58:27'),
(31, 2820953641929179412, 'LOGGED IN', '2023-02-28 14:12:58'),
(32, 1, 'LOGGED IN', '2023-02-28 14:16:07'),
(33, 2820953641929179412, 'LOGGED IN', '2023-02-28 16:29:57'),
(34, 1, 'LOGGED IN', '2023-02-28 16:55:57'),
(35, 2820953641929179412, 'LOGGED IN', '2023-03-01 10:47:04'),
(36, 2820953641929179412, 'LOGGED IN', '2023-03-01 17:05:42'),
(37, 2820953641929179412, 'LOGGED IN', '2023-03-03 09:42:15'),
(38, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:07:54'),
(39, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:16:24'),
(40, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:17:35'),
(41, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:39:57'),
(42, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:44:05'),
(43, 2820953641929179412, 'LOGGED IN', '2023-03-03 10:58:51'),
(44, 2820953641929179412, 'LOGGED IN', '2023-03-03 11:57:08'),
(45, 2820953641929179412, 'LOGGED IN', '2023-03-03 12:35:55'),
(46, 2820953641929179412, 'LOGGED IN', '2023-03-03 12:41:37'),
(47, 2820953641929179412, 'LOGGED IN', '2023-03-03 12:45:58'),
(48, 2820953641929179412, 'LOGGED IN', '2023-03-03 14:28:46'),
(49, 2820953641929179412, 'LOGGED IN', '2023-03-03 14:48:55'),
(50, 2820953641929179412, 'LOGGED IN', '2023-03-03 14:53:32'),
(51, 2820953641929179412, 'LOGGED IN', '2023-03-03 14:57:36'),
(52, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:00:41'),
(53, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:05:36'),
(54, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:10:04'),
(55, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:11:12'),
(56, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:14:04'),
(57, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:15:05'),
(58, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:26:27'),
(59, 2820953641929179412, 'LOGGED IN', '2023-03-03 15:34:54'),
(60, 2820953641929179412, 'LOGGED IN', '2023-03-04 19:53:39'),
(61, 1, 'LOGGED IN', '2023-03-06 16:39:39'),
(62, 2820953641929179412, 'LOGGED IN', '2023-03-07 22:56:35'),
(63, 2820953641929179412, 'LOGGED IN', '2023-03-08 09:36:41'),
(64, 2820953641929179412, 'LOGGED IN', '2023-03-08 09:48:54'),
(65, 2820953641929179412, 'LOGGED IN', '2023-03-08 10:52:44'),
(66, 2820953641929179412, 'LOGGED IN', '2023-03-08 12:14:52'),
(67, 2820953641929179412, 'LOGGED IN', '2023-03-08 16:01:40'),
(68, 4695007010721237392, 'LOGGED IN', '2023-03-09 15:58:42'),
(69, 4695007010721237392, 'LOGGED IN', '2023-03-09 16:18:33'),
(70, 4695007010721237392, 'LOGGED IN', '2023-03-09 16:23:07'),
(71, 4695007010721237392, 'LOGGED IN', '2023-03-09 17:11:01'),
(72, 4695007010721237392, 'LOGGED IN', '2023-03-10 11:02:45'),
(73, 4695007010721237392, 'LOGGED IN', '2023-03-10 12:05:39'),
(74, 4695007010721237392, 'LOGGED IN', '2023-03-10 13:30:39'),
(75, 4695007010721237392, 'LOGGED IN', '2023-03-10 14:47:31'),
(76, 1, 'LOGGED IN', '2023-03-10 14:56:19'),
(77, 18667582641541129, 'LOGGED IN', '2023-03-10 15:08:33'),
(78, 4695007010721237392, 'LOGGED IN', '2023-03-10 15:32:35'),
(79, 18667582641541129, 'LOGGED IN', '2023-03-10 15:33:02'),
(80, 4695007010721237392, 'LOGGED IN', '2023-03-10 15:33:56'),
(81, 4695007010721237392, 'LOGGED IN', '2023-03-10 16:42:58'),
(82, 4695007010721237392, 'LOGGED IN', '2023-03-10 16:43:55'),
(83, 18667582641541129, 'LOGGED IN', '2023-03-10 16:44:07'),
(84, 4695007010721237392, 'LOGGED IN', '2023-03-10 20:51:00'),
(85, 18667582641541129, 'LOGGED IN', '2023-03-10 21:02:29'),
(86, 2820953641929179412, 'LOGGED IN', '2023-03-10 22:31:35'),
(87, 4695007010721237392, 'LOGGED IN', '2023-03-11 09:20:25'),
(88, 18667582641541129, 'LOGGED IN', '2023-03-11 09:21:04'),
(89, 4695007010721237392, 'LOGGED IN', '2023-03-11 10:35:44'),
(90, 4695007010721237392, 'LOGGED IN', '2023-03-11 10:55:32'),
(91, 2820953641929179412, 'logged in.', '2023-03-13 09:27:57'),
(92, 18667582641541129, 'logged in.', '2023-03-13 09:28:27'),
(93, 2820953641929179412, 'logged in.', '2023-03-13 09:29:17'),
(94, 18667582641541129, 'logged in.', '2023-03-13 09:47:44'),
(95, 18667582641541129, 'logged in.', '2023-03-13 10:12:14'),
(96, 4695007010721237392, 'logged in.', '2023-03-13 10:15:20'),
(97, 18667582641541129, 'logged in.', '2023-03-13 10:18:26'),
(98, 4695007010721237392, 'logged in.', '2023-03-13 10:48:31'),
(99, 18667582641541129, 'logged in.', '2023-03-13 10:49:18'),
(100, 4695007010721237392, 'logged in.', '2023-03-13 12:44:50'),
(101, 18667582641541129, 'logged in.', '2023-03-13 12:45:52'),
(102, 18667582641541129, 'logged in.', '2023-03-13 12:53:34'),
(103, 18667582641541129, 'logged in.', '2023-03-13 13:07:53'),
(104, 4695007010721237392, 'logged in.', '2023-03-13 13:18:36'),
(105, 18667582641541129, 'logged in.', '2023-03-13 13:20:05'),
(106, 18667582641541129, 'logged in.', '2023-03-13 13:59:46'),
(107, 18667582641541129, 'logged in.', '2023-03-13 14:05:39'),
(108, 4695007010721237392, 'logged in.', '2023-03-14 11:16:31'),
(109, 18667582641541129, 'logged in.', '2023-03-14 11:45:22'),
(110, 18667582641541129, 'logged in.', '2023-03-14 11:49:09'),
(111, 18667582641541129, 'logged in.', '2023-03-14 13:04:08'),
(112, 1, 'logged in.', '2023-03-14 13:24:45'),
(113, 4695007010721237392, 'logged in.', '2023-03-14 14:15:02'),
(114, 4695007010721237392, 'logged in.', '2023-03-14 15:52:16'),
(115, 4695007010721237392, 'logged in.', '2023-03-14 15:53:53'),
(116, 4695007010721237392, 'logged in.', '2023-03-14 15:59:58'),
(117, 4695007010721237392, 'logged in.', '2023-03-15 09:40:14'),
(118, 4695007010721237392, 'logged in.', '2023-03-15 09:40:26'),
(119, 4695007010721237392, 'logged in.', '2023-03-15 09:40:35'),
(120, 18667582641541129, 'logged in.', '2023-03-15 09:40:53'),
(121, 4695007010721237392, 'logged in.', '2023-03-15 09:45:23'),
(122, 18667582641541129, 'logged in.', '2023-03-15 09:59:32'),
(123, 4695007010721237392, 'logged in.', '2023-03-15 09:59:50'),
(124, 4695007010721237392, 'logged in.', '2023-03-15 10:00:05'),
(125, 4695007010721237392, 'logged in.', '2023-03-15 10:24:39'),
(126, 18667582641541129, 'logged in.', '2023-03-15 10:24:54'),
(127, 18667582641541129, 'logged in.', '2023-03-15 10:25:17'),
(128, 4695007010721237392, 'logged in.', '2023-03-15 10:25:27'),
(129, 4695007010721237392, 'logged in.', '2023-03-15 11:58:08'),
(130, 4695007010721237392, 'logged in.', '2023-03-15 13:50:43'),
(131, 4695007010721237392, 'logged in.', '2023-03-15 13:57:31'),
(132, 18667582641541129, 'logged in.', '2023-03-15 13:57:41'),
(133, 4695007010721237392, 'logged in.', '2023-03-15 13:58:53'),
(134, 4695007010721237392, 'logged in.', '2023-03-15 14:03:35'),
(135, 4695007010721237392, 'logged in.', '2023-03-16 09:41:55'),
(136, 4695007010721237392, 'logged in.', '2023-03-16 09:47:36'),
(137, 4695007010721237392, 'logged in.', '2023-03-16 09:51:03'),
(138, 4695007010721237392, 'logged in.', '2023-03-16 10:43:02'),
(139, 4695007010721237392, 'logged in.', '2023-03-16 16:20:17'),
(140, 4695007010721237392, 'logged in.', '2023-03-17 09:58:41'),
(141, 1, 'logged in.', '2023-03-17 14:35:10'),
(142, 1, 'logged in.', '2023-03-17 14:41:11'),
(143, 4695007010721237392, 'logged in.', '2023-03-17 14:43:26'),
(144, 4695007010721237392, 'logged in.', '2023-03-17 14:56:02'),
(145, 4695007010721237392, 'logged in.', '2023-03-17 15:04:16'),
(146, 4695007010721237392, 'logged in.', '2023-03-17 15:20:08'),
(147, 4695007010721237392, 'logged in.', '2023-03-17 15:25:50'),
(148, 18667582641541129, 'logged in.', '2023-03-17 15:33:10'),
(149, 18667582641541129, 'logged in.', '2023-03-17 15:34:03'),
(150, 4695007010721237392, 'logged in.', '2023-03-17 16:14:42'),
(151, 4695007010721237392, 'logged in.', '2023-03-17 16:48:36'),
(152, 18667582641541129, 'logged in.', '2023-03-17 16:53:06'),
(153, 18667582641541129, 'logged in.', '2023-03-17 16:57:58'),
(154, 18667582641541129, 'logged in.', '2023-03-17 16:59:12'),
(155, 18667582641541129, 'logged in.', '2023-03-17 17:05:52'),
(156, 4695007010721237392, 'logged in.', '2023-03-17 17:07:41'),
(157, 18667582641541129, 'logged in.', '2023-03-17 17:25:33'),
(158, 18667582641541129, 'logged in.', '2023-03-17 17:26:15'),
(159, 18667582641541129, 'logged in.', '2023-03-17 17:26:41'),
(160, 18667582641541129, 'logged in.', '2023-03-17 17:28:51'),
(161, 2820953641929179412, 'logged in.', '2023-03-17 17:30:38'),
(162, 18667582641541129, 'logged in.', '2023-03-17 17:31:07'),
(163, 18667582641541129, 'logged in.', '2023-03-17 17:33:03'),
(164, 4695007010721237392, 'logged in.', '2023-03-17 17:33:45'),
(165, 18667582641541129, 'logged in.', '2023-03-17 21:41:30'),
(166, 18667582641541129, 'logged in.', '2023-03-17 21:46:50'),
(167, 18667582641541129, 'logged in.', '2023-03-17 21:47:20'),
(168, 4695007010721237392, 'logged in.', '2023-03-17 21:47:51'),
(169, 18667582641541129, 'logged in.', '2023-03-17 21:50:58'),
(170, 4695007010721237392, 'logged in.', '2023-03-17 21:53:28'),
(171, 4695007010721237392, 'logged in.', '2023-03-17 22:01:06'),
(172, 4695007010721237392, 'logged in.', '2023-03-17 22:17:03'),
(173, 4695007010721237392, 'logged in.', '2023-03-18 08:46:47'),
(174, 4695007010721237392, 'logged in.', '2023-03-18 09:07:02'),
(175, 4695007010721237392, 'logged in.', '2023-03-18 09:10:09'),
(176, 4695007010721237392, 'added a station: asd', '2023-03-18 09:12:44'),
(177, 18667582641541129, 'logged in.', '2023-03-18 09:40:27'),
(178, 4695007010721237392, 'logged in.', '2023-03-18 09:51:46'),
(179, 18667582641541129, 'logged in.', '2023-03-18 10:01:55'),
(180, 4695007010721237392, 'logged in.', '2023-03-18 11:15:34'),
(181, 18667582641541129, 'logged in.', '2023-03-18 11:54:55'),
(182, 18667582641541129, 'logged in.', '2023-03-18 12:10:17'),
(183, 18667582641541129, 'logged in.', '2023-03-18 14:02:32'),
(184, 4695007010721237392, 'logged in.', '2023-03-18 16:42:01'),
(185, 18667582641541129, 'logged in.', '2023-03-18 21:53:39'),
(186, 4695007010721237392, 'logged in.', '2023-03-21 10:22:26'),
(187, 4695007010721237392, 'logged in.', '2023-03-21 10:22:34'),
(188, 18667582641541129, 'logged in.', '2023-03-21 13:36:55'),
(189, 18667582641541129, 'logged in.', '2023-03-21 13:38:31'),
(190, 18667582641541129, 'logged in.', '2023-03-21 13:42:01'),
(191, 18667582641541129, 'logged in.', '2023-03-21 13:42:36'),
(192, 18667582641541129, 'logged in.', '2023-03-21 13:43:21'),
(193, 2820953641929179412, 'logged in.', '2023-03-22 08:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `case_id` int(255) NOT NULL,
  `user_id` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(255) NOT NULL,
  `station_name` varchar(255) NOT NULL,
  `station_location` varchar(255) NOT NULL,
  `station_type` varchar(255) NOT NULL,
  `station_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `station_name`, `station_location`, `station_type`, `station_number`) VALUES
(1, 'Tagum City Police Station', 'Tipaz, Tagum City', 'Main Station', '09876543210'),
(2, 'La Filipina Sub Station', 'La Filipina, Tagum City', 'Sub Station', '09876543210'),
(3, 'Pagsabangan Sub Station', 'Pagsabangan, Tagum City', 'Sub Station', '09876543210'),
(4, 'Busaon Sub Station', 'asdasdas', 'Sub Station', '09876543210'),
(5, 'asd', 'asd', '', '09123123123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `indexfinger` varchar(4000) DEFAULT NULL,
  `middlefinger` varchar(4000) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `station_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `indexfinger`, `middlefinger`, `password`, `station_id`, `firstname`, `middlename`, `lastname`, `bday`, `email`, `contact`, `sex`, `status`, `type`, `rank`, `image`) VALUES
(1, 'admin', 'Jocelyn Capuyan Daquil', 'APh-Acgq43NcwEE3CatxsO4UVZJfjZJgrNw1qG_kDK64lvCtNW9onp_9M58x1Kl3eSEquIb12EesfrWJHrNVrvNWX10zzJFtntmfkFm-hRCoRxxQlNnEj6T4kpAicdp0bMjmW3CZK0mKTmTasAHzQhmG4NA12CFCiyOLObzn7n2bREUqsCwEDZWdscl6vMrsl-GEm5edrC-5zKYej5QDGeFNi9FbN4ZBobF-Pq9KX5nlQKkHKruh5j_aS38_QykoJwWHj7zClKxxo7Favqrl1Dw59IGx4U3cE3izBTbhOdUzdqKc3qxTNsF-sgAFlsT2SEhMo1nmjB29uzVc5XnRSA0fWsyQVf0I5u6BUhOC694fi98pwmagTRwJ1hCD1OFsRrT0oPiM3shzOUMc_gKwvYtBgzEgB79m8ROSWnGxRlbNBpdNs70OFK382yKBh0g-u0lxYirLnM74WjiUrMQnKkSc29nRdEkm_jhPHyDWP0CNUNbaDbI8yYC6eyIfcpVc7udvAPhjAcgq43NcwEE3CatxcM8UVZIutadX9ABaPt4F4DeF6qwV9GX0cqJGvlTMMoMnqlcQ2wWsxckOeqAeMPPBvhlFp1zyUHY4Wd5hHVftEwi6JIP1O4BZJz4VO7UVO4A8KQIgF6j3NekXacxUqbV6cOxDnsRDTQuCHkCto8YQh1C3SqqFgNs1d2cUHF9ZRyCUq0Da6MYarFZW7yb3LC0Ox9VvwAuXpydVmTieLwuMEQleft55itYW0nOCHtmT9NTyC4qU2GrAev0EnHQo-DVhxWUsP2jFu0b_FB7GLiH5CAX5sjHv67WxndQSR4GJL82m6o8PRC2BVp8s21W-3fqeW_t8hEvfMW4upiheizlK6g5yK235vzVDy9ChV3w9F-_1OusxUdi1x3Qoq2AMWXxGlEONEHVztyIUuRGZk_wUlYDf1Gm68rSAzJMbFnQLXbs3mnDxEzvcj5W5GhwDRchBXKpmkP1l9BNvAPgzAcgq43NcwEE3CatxsNcUVZLT6dmDg6qcA9WIISF5WnpZhTFAmhYRzH0U32n7PeNHGUMr0B3Up2DzkNaK_ToslQQDrMwebAdxNWwI6EckCfbIMP6XFclfv5FG2tb-9vbIfPw0GeMSzWzqrQcwLgui50ld0ayHg_sTPnQvxi1uDsrKufQGJlvPBuIiOoPIqw586oUObVOcMEz-YfVuNX9-z0dRArZ4Z_hK6cVFeJVsUnd1ZwFhcn1PkdB5HQxJG180pe8ETSvgsqVmV2AG7cJewJubYey3-HVwVHW_5fvOgm1HL1W2yG7qHECw6Jkged8DZEjJoVzwWfQ8aq6RhN7WwaiIfmOeobw2nYy3FY6Oynmg5FCUk1a58Gb686hWRF9NglP0cuFBeNaACh6NVtfcPR7feeNvAOh_Acgq43NcwEE3CatxMPsUVZIiDEcb3lK5PVUoZF2Lz9-5zFlrj1j3O9H5bBBCrrgxMBk9JgpjmzdsyVOcP2X83PXoZQzPEsfu-QX831gym8POC1CB5pk1dXB8CD3Z3RRjBEmXxbYK4eWqTb8CTNtbcZFp-aEyRzAT086PTc1AsSG4SuQtZv-UEWpNMBGuFdqbTIFDmWfTrvHkuzVYMWak-yD4pn4wMViuN3xb4hjOYEmN4xd079D3SU41QY2MHbAyMKC-TCmU-1J4Id6C6CZSkcG0cA744E1D83Aoo001RrJtRc_IlOkJWVEujlMgvTobBGlI-sycYqw8ajOUmEEoS8B1YcSJqN0gqWKGf1nAYNR4RsV-uRo6WTB30LNEgvIrWrPN2I3yst3KclcKkB1Vq2hIMCEdt6iIj85Dw1_zRR0xqDbJDJSTuPigKAVKeVbCQQ6KlhyTumuxK2Cr95kminmDAcWaElMOwKevIvbtxlqZDX-CtCyy3M73hcOoF2mibwAIfAFYPX8AAFDl_189fwAAQYiGehVWAAAQ5wFYPX8AAIigAVg9fwAA8HsBWD1_AADwggFYPX8AAIDl_189fwAAe4iGehVWAACIoAFYPX8AAPB7AVg9fwAAEOcBWD1_AADwggFYPX8AALDl_189fwAAb7dyehVWAACIoAFYPX8AANh7AVg9fwAA4OX_Xz1_AADwewFYPX8AAODl_189fwAAr6KGehVWAACIoAFYPX8AANh7AVg9fwAAMIABWD1_AAA', 'APiBAcgq43NcwEE3CatxcPEUVZI5T17QKWIfOC4Qc4zfF4GLUC1Ie3nKUuGr4looQziSEhc7FnqprPTAmrqMV00MU6Wh45uw17xGhJ46DKmHsVNq5Q9UExmjrTBHLoblAbs5FDWL1cgCgwE1STHJgXFmwsLoT0VWYepD3F8f4fHiV11kXSX51wlwxDBVMwCvYXTOPbtQHz1xMklBOMkMU--1JJNKb77hKXABbgdY0lR01YcG_bSjZGq3mgCGdQxx1hhxO9ntr6gkw7f_UNRLYLHFb-1A2xoYwMiCdlsqm1ir8tDnoa_ifcrgDOrdBlSBZdST9NpU_GFEQtkUcDzb0dn-OGi-egnRIDKJxeTmQkr9s0nZQmDRHxpqwooPxQx53mibkfhuXTsAS06qMXKBsXCXxBUq1iQjOg7vdUD9T6ZIEFjf3Pgfr7f77m6nT1GVeXAC5UxSMj-wKhVPHl-Tt1FopPLHDIsRusXFUzmcqrHL4j9Xd8VToAHxDiz55v_FgSHl0p1vAPgSAcgq43NcwEE3CatxcMUUVZKR09umoPW4KogEHcrHjkFFm0uHVMGmJONst08AuU99j6s7Y8NXUqaZh6KPU-A26JrxbxywrKq7Hap7DHvXv8VdoaZfybkya0K59zkWGWMl8BT8DPshLMxfJzhy5cvHLpVYK6ReMWKpKPg20o4JduzG0Rf0XCpKUi_pQqdVQNbLGxzprSwuLLiCTqN94eKgx6v_F1Qs6ppB-OFrfVwqu5KsjXO97fdXPLL6QUhWv_GcqJRd4yPNC8CAnzubPgNhTQrmX-FXCtONjhP4Kh5fO0QzMed_Tb9OayimWxS5mZ4OqmUK_VUjS9ofuPY_YORDFCLe_gJZehW3AadIMG9fBKwzcwNvAPhPAcgq43NcwEE3Catx8PcUVZKkIUZFjts0HQuELkTNQaRo8K9OrVhSy621MJpZBjSpIBS90QvkXD03rgjXGiI0fFiFtIKM2wCL50yPIhl91BvqSBQbRdiH6cxxEXp8-BP6aiNTki33W3pfUi-lneE7LOY5-wq67s6P8cNWLk1qYMxtNnPqQjr_hPhzh7rSqBGtVYnLQ5gEkdb0NS-3ANwaFEx41UyWcZ3F0Jjqm0LXGuRpEQqqhSCEzrZzc8FBgSyt4_Jzh4aQDhnX_WQm00KhfFEMN8JmEhfhhAyxCJAZNn3hBYHlRsoHoAjCFRLG5XtBKxmNgq31buv2wD-RFTtDjkOUMlZq_EXITU84_vAE_ekVQ-yg7kmQ8_a-YrxaGhEoNY3efRjiHGj0EBCa8M_TztO9EFuhEcNsZBccfZ_UhjthGe8QEDnnV9nfqS4Uk0mtbwDoPgHIKuNzXMBBNwmrcTDAFFWSFTlSSEkBDRVv6xz-me3Dhz15wJrfQRrLOSA1rGAPZouH6NxfjRjJS3Fm9UDf-RcJGMU2odFVieIfnRGE3_heCQI6xicyWaDuRuDj4OfePPbG49ETT_DAofQyvzJqD7heTvTpluIfJ-Y6X6Zvq5_6Lts-1S2kmNrvayc9CT4Yg74F9Ms0pQBQwFif2SeZLizzXT1PXmpXLmr0Z_skxm-dgcNnaJBYRUXdjAgOSMYIT3U4q4b-yeXaVjDxJXaNQc3J5TPgKpSAOwynadhF9uQrh1dZydXGwn8qhcFuKuPIKeAFRdKieq6a5tYIY3CkLjAH_GmNKYhdGiTSCN4Vysxti2giyHaaLJRY8i9pkilGGjG7fBM3P8d9WgMRLrC87Iv6h-kyPoChZGXASW3zGl9vPX8AAKCg4W09fwAAIKQAUD1_AACkV0t6FVYAAPDUf189fwAA43aGehVWAACIpQBQPX8AAAiBAFA9fwAAkEUBWD1_AADQiwBQPX8AACDVf189fwAAb7dyehVWAACIpQBQPX8AAPCAAFA9fwAAHR8AAEoAAAAIgQBQPX8AAFDVf189fwAAQYiGehVWAACQRQFYPX8AAIilAFA9fwAA8IAAUD1_AADwhwBQPX8AAIDVf189fwAAe4iGehVWAACIpQBQPX8AAPCAAFA9fwAAkEUBWD1_AADwhwBQPX8AALDVf189fwAAb7dyehVWAACIpQBQPX8AANiAAFA9fwAA4NV_Xz1_AADwgABQPX8AAODVf189fwAAr6KGehVWAACIpQBQPX8AANiAAFA9fwAAMIUAUD1_AAA', 'nrdYXVoqcx+ST04oX4fbkw==:VGhpcyBpcyBwYXNzd29yZA==', 1, 'Jocelyn', 'Capuyan', 'Daquil', '0000-00-00', 'jcdaquil@usep.edu.ph', '', 'Female', 'ACTIVE', 'ADMIN', 'Regional Director, PRO 11', 'nezuko.jpg'),
(141837717209115, 'admin1', 'Bryll B Angga', '', '', 'Rji1Kfs1kRDY1YSoB+8s2g==:ZZRsuKcbWPt7xGfR+VHXTQ==', 1, 'Bryll', 'B', 'Angga', '2000-12-19', 'jbbangga@usep.edu.ph', '90182765432', 'Male', 'ACTIVE', 'ADMIN', 'Regional Director, PRO 11', 'bruce-mars.jpg'),
(9852311922279177, 'qqq', 'Emmanuela Ibiernas Mejorada', 'APiBAcgq43NcwEE3CatxsE8VVZIGa1ipsrxSyuWXE48fsRUpk1-Ba7cEloYVhnL2NNlvmbSTv2g1o95pONqgMNEmDZ45mUbz3c5OySYaRC9ZNz05-5R3fRYjhIN9LqRtcuygcs4KNZIhsUP7lFVQN8KU7iJdPpu4337n1_fYVrZQskj687kY0O-_aqla_D2OPJPXdrhIkxQRjzuAx13je5wTCrf4XHdlqZSMatrhXRqHW9FELSUFagKg4ynhPAIMkeUJxb9n6hhNXbxALMf4-dTHONh-QFHeVW4eMsDNyCVbraaNddZ5ea8v2sUk8p4l4cgPTgn9n2qIyMQzaZgjE2CjrPMJ6_PdHRA559I7tL-8mFZHP343O033dDdoajympWxIDQIOp_a3aayj5FVQH3B9QtiWy2JkYQ0POUbYZkjvH9wRp1JvlIGfSglb279H85Yla3Ct0aGIyB6xiALSufibAdaSw5TL5GGwGrfjDjoS1e3UsrLoAcWfrfETOMwFDBXUxINvAPiBAcgq43NcwEE3CatxsF4VVZIEUqMlfGRTSg9JFKoArCNBhUJSjpUzr7YY4MsGug_AoGrN3gWTX_yItwvzaBqa1z6BQkYHIPrp-WiBpK6eOTdlDIQlB0Nb6kWSxfdYuQ6rtQYszS0TD7w0iPuxK5WibQH_TCdI0C5rdwCy3ktMKfGV20JK0YoBdtn-ioi8xlRtMCj6ZJClxc82srwEpI37NEH36GrDStnjU_tY1jKS1OnlEsRU3QxU8OjUEK0a-1U-BLj36MYWOkM6kyadB1lf_4N-P-WDYDWnJ4a-uQ5f099HQS8M77LHOq6szbRoj8OqEc5wwkEqSwJxUfDT-1BjwYMnNqCeTr0dx28G05quuiK2ukKdUc618xjvV2nAir2lhqSBQZd-eNEGMQM7Ctzrcks_2-d7CW4waP-SDPr3-h3e5kz7qoHgyemg1uKkjiZolMFSzE9oSHxV4uh63rj3ANyDCKU-YTboyjMMbYbx6zVmT1KpHr5Y5_ryQQWBRDyd9-ZvAPiBAcgq43NcwEE3CatxsEIVVZJfE9djeUsns5P81-PvKI2Nd9BsACMNNTfUOdR8qifHbSQLBczU_Pz9ox0ScvAb9COzhQ249oa-gqxinqaz2UcJsXYXTTYqZx7dlDU09SEifJ9_levSx7NZOPDWFRSTo4oIaGP2KF8L-n98igpCc5czfrlEZ-s5GlRtli8cEK6gnNP2IdsPTw-k0ZJRJ0zWGdrUlF7DnuuQzH1rzoPBfEHVHpCOb6N6IRzj6D_yRz2XiMTSvlCYGK4sOuUFRqJ4MaoOTbNbkKZTQIXrsRUsQiwq93H9AfElFMRj2fNOq47X7E1rDqVSFvSZjo6IhCEsH6tUxu1Lwyj25zzQl6npBLk80Gh2TPIKdwDuh02jGUnnJCr_s2fyysIjLH9hVyahkoDQBUaLFCxNZTmf_JanatRmNHtuhESM2Uyte9ClTm1X34Qvb2sG0a-eIGQUeKT2nqQ6PZZOFhrqHE5sYTcVCWVJAIHe8z7lW7iRo9cxCIGtaXRvAOh_Acgq43NcwEE3CatxcEUVVZJqoqxJJG0dxlgIxHbREy_wNaP8RR3O8bXv3Mq5Xt2r_GyTGqovX1_dZSJMsaGy3Xy-4PMD4tZhCu91Gx-wHRifUHEYGNQXp47VX6356VhzgZLtj01-fHajd73GejKxIoefBYB5IzDHMRK1QpPOqcSoj4vMjaADtnHgVoYzltIJf6QFGbWGq3b2Vccnlhh5GvoCVT1PNg9jjdyXbB4OW7q8gyW-naXmwRiP52x9Ekeph4eeBNlepKBGD-hu2CH0W-DVpXK6vDWcHI_Ojf3Dft56fmmIUhodBPKLIHig5xlstkTGaM1w_g4jUKCTOV1m5wlRC_WOoNhu6j_8lopwe9UHSkyjBwMqzErVQuzyaEJP1ef9t1wxb0dd0aB8WUdqtkyfVSlYRcCKAm2LhYGvTGJORQMjyQ7BHHYZ2rWBivd2lbT6hO0yW_CrUG4d-jb_NXAere4fRQMeMCd7DRbgL4qIIqN11st6QpjZltggQqwGbwAAbxcoB3FVAACI-gB8fn8AANjVAHx-fwAA4JWEmX5_AADw1QB8fn8AAOCVhJl-fwAArwI8B3FVAACI-gB8fn8AANjVAHx-fwAAMNoAfH5_AAA', 'APiBAcgq43NcwEE3CatxMLMUVZI9cWddAsnqFdHc0xEQGaofl67JvNPizxYt-gKqAHj3rVXD3_YD7BfqhPBjrjYbepdzXWzEPUl46a1vNyhW8znhtbot0o-5Z3r92vMQ7Phx2_cW6UOYg06vsnwWF8dkY2XiVlUZxAg7ZVihwwUsGkbByD45kWVzqqKobpliQc4dGNZGKnH8KY3x7zQs6khi9fgYMxCRfRR8c9Jd-LRy7QSu3DRyLApZFcFfn9NnzsyNRwHfVtqOFbeBQ-xXzI-a6hIOB2E7L0SNXvJiK2vkHoet3VgUYXiNOePe3ymRUPBiCxOkOi-IorQD3FEORbYlkRSd6Hhszfdxu2s182evF3qhKJb9jblB0li-8D2jFA8vDXMGBd0gTeGFeenQHbCk8aarbcLMoii3qRFYxH3QlVLUJddAC_R-KV9kBTv0uyBdZ5jml9yvRoA4Fltk2WEDNgf2A9pYbAgR9ve66Zt-_07Iz6-F2J-4L1NIgRq-Y8YWHd5vAPh-Acgq43NcwEE3CatxcFkVVZJ7d7w2o2PxEZD8CahaIMgVlFFN_DesWVsvUuZJbsIE_kqznr33UUMUMvqPHH2UPwBWHIoS1qQpKYi9YCYJxBaaUulAbOffz3ikXCSEw_19aLVLOqODpzulu65kIKnOQaJohItAb0IcXgZtPsEud7KMRNN9bNuwZ9c1Q0UjhlXNQS8PDLAp78lPirb1esAzHhcJAX4noyPLw8xPHM5sC9JRqkcA1TMxetk6Wf0EvYDCznXy0BXTlJyao7U_yuQIrnIvQJ3p8A3-sAZoW7pOV9HSaaewTFHDwlVoJaMSlAYlQ_88PGBytlH7abMUEGZHsz_QJd3WoM1rteYP2t4J8YCZk5aXeJVhrtE0EfJ2Ej7ycTSw6Xi5DHHnyU5i_iIu_DUR3sHzHB1ODvS9-cJzVOorT0AalhInLCOk0o7jZHnUTBRwP-1vYq5R1v93iwgDNtKYyr_46MMT6rVh11U86kpVTfmngk_Vs_acwNtHfiVvAPiBAcgq43NcwEE3CatxMEQVVZJUKkGMJhnb_O3p4CEiwVhQJ1p1z3GRDh5su0oLH6Sd_oTjUUhn5pb5V-pVNoiJM7tpbbTYot5dIgMz8vpPy5-1rGgB_XGIuefUgdoPt615YGqwMBWVKRAQyWD0wqm1LmO_fjXXFOcOfS-aonMoPxQLCnuYVaUZ7KpoED9NcXJzjIP9j3A0CJ79emjPS7ThtwgOQChNoDOXxGt9TT90OTdWnKWq3_sRd9By_5CG6bPAP6l3wen1omFyml47R0kmC-V93BgFKcu6q7tIILOD6RkodsQAvYeq8oytp9LUfTYSjcKtIRqN1EaNNzro5v3cg_FzUYQE6d7gJcpPJRSoJX6sVyb1KocDYH-Ta6QynuuwzAWE2TXvm7feJARwj5BytmQRMw5PbVRV2wGfXYBwmFQIhSPF16W-odqQt-v6vTAUaKNRjkbwU7Bn0CTxnWzggmDdlHFLK4rWzcpkQ9FOxrLEAZAaSEyH6YF0_9S2vzjzMPZvAOiAAcgq43NcwEE3CatxsF0VVZIlaoWdb67HBE-63BOOvvX4QgJEltZASMQX_JMlLUuX9ujtCoyHCMjeGrSY0vgFpTAd549SzVNxB9WRbuVStQYNckeqBMxxjqQxaIbp48uS-2ZAmYz_ojWkjrFQVYUO5ergfDWDH5oInb7S2aUrn6npQ0imN_4ba83RsBgHyrq39M-uXNPwJ7i_sY47zOovHAKo-yqcdgCrd4TIhu_Apqjslvea6_QkAsfOWeYQwvYjIAM9nFLBQ8I_ly4sVTRVdR-mqjTC7uRGmneJ0RUQkhfGxPZ9y2uCPVgrpuTTxukw9gEhSKBN_PNSnoW5cehshhYxgOyeO8MmvM0soWU8_Nu794VcZ6j77WAAlcBPELcTwgXpmZZVnX2tGAHiPqKu0Vu7-9nPWGYipgPd8bfiUeCLH8p_Hu4v2s4EOvAdYm68OnpfAdVNEIMShmIPhwqVN9IlL_hnnSO1s7M7yofJHlV2xOebKOA0FjpRzX8cvzKSNm9-fwAAbxcoB3FVAACI-gB8fn8AANjVAHx-fwAA4JWEmX5_AADw1QB8fn8AAOCVhJl-fwAArwI8B3FVAACI-gB8fn8AANjVAHx-fwAAMNoAfH5_AAA', 'LjfsejxRysCjMYzeD3lvhw==:zfrYQHiKw+HErMneP4QrTA==', 3, 'Emmanuela', 'Ibiernas', 'Mejorada', '2001-06-13', 'eimejorada@usep.edu.ph', '9012837465', 'Female', 'ACTIVE', '', 'Regional Director, PRO 11', 'bruce-mars.jpg'),
(18667582641541129, 'asd', 'asd asd ads', 'APh-Acgq43NcwEE3CatxsOQUVZIa8RaR_eEbHnQa6bi_-bueb-0goajrze2x5cl9fMWr_piRx53KmvFIG4j5wxKOOyQHWYqYVxMVR9897XcJkX1dKBsuov6W4Wfg6Q-aD0qtH8p4C5yh5QGVsV3xsIEIhmo1Sm_RMsewW5Ne4cCRWsB0M5Gaw0Qn2lB6mT37L3NzROFbY1rfN-FUg7Zcgp0FImuB3qtopkTOC14OYemvg94RCm5wk52MPhdn-rOzB9M4I82C2v6Q9z8ReX7cgE2aNCuZsI_5BFYSBWZKYRDlJZ4fOYtUJTQSkRuLYwJ8H0kkUmDbz3EcWVHO66OOUNDZCbABnWgEWxV8D_y9mPW7rT2jVBTM6Atj0ds8iFeB01Funuq6ToGbGb1O0I3cU5lWKeyy6xWc1xEuizqaaitOklw5yNIrShEDTnzusgbE8MHCkwVZxmm1WaA0B1xezYiUbD6OqPhhexDvprIN_SOBjxYQWoYFpeL5L7-ku82nKatvAPh-Acgq43NcwEE3CatxcJkUVZK29lxGZAjurpYYRjaXDv9QUdAJJ0SAO_dR9Wwg_n9-gekDCWn0jScpNfKpMO89Hw50lRkreHN8eNsN0riq-HlJOVl0Aq1xX7bgQ-pmk7Y8KADXvPePlCv2r-gR5cFltkhn2wezWPo0tsHu6mWiliOXiS2w_FFM-KRxi4tAbImmXeVzOa2btypo3Twxjcp0jNMYu5Q0PU6yPrNzWLRAa8TUkKoPSlClh9G9SDOpB2VfiCWryqAYbPi6lFqqybSfEZLrfyKb3MKMKFW0efJHcqxUhNI78e0aq8RCwAnZ5uCf6PEF9n7DKmjd-eQs2S2vg62IkYEAPzyAUkOgNJNlWUxw1rIQsx7vRDkFUwgUHscAgEmeoi1aeuSZ_19cooqbpCBMQkNvlh8sDmEygOUhVW2_TiFYoFyI6L0auL9dZKBj0-exP4wYtrW8LNPEEdrjoFvdTt-dRXB3Gkd0w1cDxYPVTIO1Y5BS_o_x0lRCoPVvAPiAAcgq43NcwEE3CatxMEsVVZIWLTgQhQny5hzh_xnyJ8Je3oPAGewzWEKmTU0m8XNu66QimyfYYNS4fuhm7_6Ve4ImdxfPIczgZ1VvT7F5RugTXMXdmhD9MfMSIAW4wvfc2UTvjUi2mF9-LLIChU4ZQmdi_Pdei_pH4NZ2U30Hl6TdA525Y372PxE3nmrfdHedHNBJw5CDzsceMAxzU6hajqqN4Y687F8nDpjFKsaLAPpYFOd8IH2_2WGUcIuzxbGzHDAqEwYfvRaWPGa3l9ma8erVbQd3oDstRzW8s6GkP3kL1a48XCNj1rFfTFBymLOblVILgcm3mj9EnKAZYAh3ETwE6iVaC4aAhnaje4l0Wh6VxTTE2V9SN8et_sP3BqRsaj3DS39AGynB9JAVHJogFQ9lAim028MedfGi5YEIxkMSAstGoONdFZpAHAyuz9XVB3m7C9CZfZ6QOS3NB7xwMS1Imv9QW2Bq6vT14nAcu9uuJn-o1w8-Rya8i1jMneNPdW8A6CkByCrjc1zAQTcJq3EwxhRVkpoyQk8G_Dw2hngSkxZFwz_8hl6rxubFue9qdJ2P0u33Km_kMJH6YQ2qUi14Hkl523UXAR5NAhExIhoLQONKZSA_s2DlPsHF0nozjnyrICtatI0CDOjntTCOnU1z7fEbK15N7mVW4V5R3RD-5oQqU5GQEtcWWs3e8aagwDtF8_QYjkRq5ZKtOidq-IMjorUPjFWsD9sqWxqbCvIXqXRA2rfNRyDFtge7VWGCC0QaTPmU2n192DecW3ba8C7XxBAoe-4XTqw_cWExqSh_NEPEQJkgKqvOtnlxJAqzeUdELykJMQY7E2bkfxgCXqaVFmGVWwNHlAULF30hURvQxzJopJfF-w3S9AjqPc-1Lo5A_dcYMM5H6P1miZO_b4gVEURWAADQP5kSRFYAAEixAfCKfwAAsIwB8Ip_AACwkwHwin8AAIC1cgaLfwAAe4gVEURWAABIsQHwin8AALCMAfCKfwAA0D-ZEkRWAACwkwHwin8AALC1cgaLfwAAb7cBEURWAABIsQHwin8AAJiMAfCKfwAA4LVyBot_AACwjAHwin8AAOC1cgaLfwAAr6IVEURWAABIsQHwin8AAJiMAfCKfwAA8JAB8Ip_AAA', 'APiAAcgq43NcwEE3CatxsLEUVZK5CmHni2PjyJIumZwMrNNzIUxZH-0fIP8oe_JE-7OEAHS-_fjKhfxct8I7b_vHWIjoBkH9kQ4xTat-bEhZDDvvcBvf2rxX8eYFySSBJnJZn0RpiefVpiXj0v-7apMrmBt9uISq6Ri9cWwRb_udGFkWUyYU2WoEwu7AXeXTCyhuMVoJeGYpdWMfBORV90md3F8g82QAiMdxUBiatNoTcdStNOM03-LE7UY_HkPOvbmz0ZGcPouvC0kZ5yEomi6o7QOrgaGUYHeuwbOVR4lt7X9PvqcSHEiij8J6t4oFxyvHlI9Ka2vRNDQv2QxW2e5V6YDuhwcmy7blkDXSOrziLq5gU6AqmHL92zGdUDnSPlUalxc-A3lyOXt87_54q5Kz4C3zm5IoqwCeUGDyybR_iIosFky8QZI2SC-DfbbXPd_iVNUoE1nAexvhyq-L98jn2vNtaf8HBX8cRO7hLovuyXGkDOfL1THk9jqsWKNEQmU3Dm8A-IAByCrjc1zAQTcJq3FwThVVkl1-2yJFJlR3WGP11ADAVTx_pjtQkTYegJ04x7DufAh9icpkWelnI0UuWGHYDrNBWHWr13F7LzNlsk0y_SVPZchAYp2Va5tD7Mn2HYsMvC-WVo910-E4mM6B8LgDZlROMKi4h_Nv73XsOIng4Bs-fwB5VH1-NkOLJ1tILvL412AcY6XuWrczhu7rrzBYW0lzMzz85YDXaYpM-jaWC3BWqDnJYusTjO47gZy4u5Gjybzukn0O4PKcSC6asjgPwJpPukqVR1tmgeWpuZa4htNw9ZPvWuqzjEZPEYDTf6ma0pFn5Ga1DwjkGOTyQrutBRn6Xt1frdBfhOaavMtwarP5-HtOyhT_4PDtgY_IVimBadAKB6shRpHMWNGeECUuKc8qozunYhKL0e_BNa8IZmydJNJTOzpI2Jjg6LQ6fpuhBql17It-PFDjU-FGZL1_l8NX6SZcgGwHfSZSi-NI0D1LSPfIzre9a0wY6w-lLpmWMXnVbwD4fgHIKuNzXMBBNwmrcXC3FFWSegYyP1_muuWjYPum5Cw3_kV8V2mYoKJgzM7y1v_FYmKUVt4H8lyartqUODAcoeLZtuo6-Yse4cV1xrCkTmLD8wF4vDFe9aheOF6Su4Qsuq5-zKigDiCAIKdA4EcoQ0fP-IZIbMJqbo-Fn937kHswgp0LxlA__oa22NyyM7Ky-pk5Q6dFSEN0G-P8QcRHoO4p1JugWidJMNmdyViCYd2w1TR-ml7TxzfB_Q_2bCimP7v1PgVRtEKlLdZYqMvtr_Lo0KBlCTxE36LLzdMYKgeP7_W1rcldlSSgjKjZUSiXSXDA0PdJCSVY0cicMOy6ZmNK2b_CNIGP7Bcz3oR-UGbKx7lgFTX-kwtE3k1Ou1Cc_0QqbXxOpn8xJAZzRLPjWPV85difVru-3Up6GUAlW_Tefap2wbQTtWC_-yLdpy815n0ZHhrIWuBa-4vkh5aEo7gZprKzj1j-bBl_dT6HjtUlApVYS84sfOY2k4oAzqHfbwDogQHIKuNzXMBBNwmrcfBNFVWSurwy3ac7z9pyf9BBzNNBZFrB0nvEeWFnKnnxuNVAOQpiN1l_TUihM8yNJWIzMXkEeXsCX1s0aEAIvydSuYftb03Dcll3m0f3Q_M2FWHRQkYj6BJZ4K0rE5PTtI01M_99RGipi8uVxnfzBqL-VmOU57O-9D8MVTP4J_d15HgSg0RKWkrR2q9jqiYU6ULp8nf9gscEzyV0n8vEJsoFnfx99FqDyQoZa0VJjI0LHmWtOUY2n2lgSeC4t-C2o-K3-Z0k0Ap7yVrvYshemUoFnpPyPDlQBkyRC2Gu3-bT6aEXALfYIzOcfK_kPBYJGM9JPUPgAfMKVK_dQQrdfI8ayiZX9GgV4z09KLkZaN_JC_AU36lS1fwFnjT2qqCAJqyXs8GdNgqmOd6yeYmZOA9uJKnfHBMN_Ci6MsDDGWyn9Bp2dm7CVFKb8G2pDNVoBQz8lUxMz2SRxPhzWEUaaqBwYgRrqoxoYwkLwgzJtPjIjBzGP7A4bwWLfwAAb7cBEURWAACIIgH0in8AANj9APSKfwAA4KXyBYt_AADw_QD0in8AAOCl8gWLfwAAr6IVEURWAACIIgH0in8AANj9APSKfwAAMAIB9Ip_AAA', 'EJ2/hcFMoAIxDH1fcFIAQQ==:9rGAJeFQvDjzh6GpJVzUMQ==', 1, 'asd', 'asd', 'ads', '2000-12-19', 'bsittagum2021@gmail.com', '9012837737', 'Male', 'ACTIVE', 'USER', 'Regional Director, PRO 11', 'nezuko.jpg'),
(163853897123315712, 'qwe', 'qwe qwe qwe', NULL, NULL, 'EJKCIbW4iP8iV27Q+4cXlw==:TqbvjAg7CzxeETunfpA0Cw==', 1, 'qwe', 'qwe', 'qwe', '2000-12-19', 'qwe@gmail.com', '09123123123', 'Male', 'ACTIVE', 'USER', 'Regional Director, PRO 11', ''),
(396879738911736320, 'aa', 'Jomari Obra Andales', 'APh-Acgq43NcwEE5wquU_UQc_kSKdd4y-wzsewcIVrQtr4AwlNLlpGSPhMCRKZd8fT3VJcRqrKre9lKCGPEpqA8zaL1mtW3tlU8ityGvvqcTIkIVjuxQTVtYe8iP2mOJJgCLHoxukvZIcYbLWF9qYHPOC27CI1KET7_JbvCQ0hUPSqG-QUV6sa_nK9NGyjb05kwT7pfeGFfDlW5whRIMNEpFj6eq62K5B37Byv2uPQDNq5qaON-VMwwTiNZx7AOsSTc8yEYk8bL8_3jciws4FCxoh_2rgHBRnOMyKtaaJVnvaanRGgmAFzfXiel45BfUPbE436HT59atJRTcW9FR7w0oVZHA64rLx4oenh_Vky68ooZx0x0HGrivhrANliyYIunlPd7iOk1A0RYAqXOqpcDVhmc1kN3XBIExPWE96MwRnSH_k2ju8-sOllImWMdQAtKq5v92XrV9nWeF5eNy_uUV6MfI-170Kedgc1tPzuQUktI_RZ4EDUDYQBfKn9un0_NvAPiAAcgq43NcwEE3CatxcJcUVZKTqCXd2Yw3uQUQHOrM96UuncbKWH0XQalJixyVBrABs_StDl7_qnhIRmQQJwXvYFp2-DWUnlxrt0cJ_E09thMx_AjJVVqiIQc1A75K92Fq4rMPLfKgR7pt8K9vnTzUrMxuYXNGAnQK6ZTT4vh4WyQweK9xlgBRLc23gm0o0HsD2Zuh3uRORGePvkuyajH5Wml-HbkjVr15Rij6R6Z2gsTtzargHGNuljiUoDW9UDcOVwhxSlJV3gHJ9erTzQHthXoSnVLZbBwFiKw4PqEQxze2kwrtRpI28FPk8QJ1UD2NsWe1OYsOBZJcRyp1AjoC7P_LYJX6RvsBhmFoVCBTPh89PS4oG6uCdw9VTNWAmLGTsXT03pBbXzjFBobxcy0Mewy6kwdrTfBom8Dm0NVR_TedOxYs8J4udZ3ShWjLM_LWlbhxwBkR7KmpOjH_cisRH87SRZg1Otqh6xGftrjv3r501PERYZKTCtlnAfYJAZdY_m8A-H8ByCrjc1zAQTisPg8T9LHGdgF38gGKICQvipdkGseYM5fUiZw5H7P9_W2cEsazH9ry2rbUmMaMyQumUHKsjSEOXZFMGP8deN0JmJH5VpkeEwcHVv5-SW4zqt0Rtkyblj10jiUMGu6A3InVAbmzsjQJlpqr14wlBDUASkyCz6JrMVevhU94RPNBKklwYRU3wBkYpAJnT2Q4Fc5yr_uVd9kb9tgX98B_Q11F_yA191-5glUjSOUkw01lldrbqVBj2GY9WQozfS3JiM18A0s-H8EeXxkIjqpA_dGMh51fM7PURsBTpNRRcOjKn3Gy0AQwD2h_NC5HoeVK0YgVmeDCTknNdrafV4A5JoDRCRXSmqSQn0TGWJ3Gk-MF6N1N7_oaNGlXpcZx7d7X7g7IjtAq1HazndFv0anxiL3ZNr9SrGG_pZ3xwMdVM_IkfFkiszmhi69tjopuQARrksnIF5RrAzs-QSt180HAeYTjDeVaGrtl_Ct8zm1zzZIQqAZZPt7Nn0BvAOh-Acgq43NcwEE3CatxsI4UVZJFMiciTazM9JO2gTm6DIDx3pE-mOQqlKHqdgucIsQWBXdsSBpQkBVmmr-2CTp5K2ZYWpsgLLvITo43bAr5g0CPLk0ad3pb0E0LaJmnWUuFHTrXJ4FnmyTX_WEPJNBWMGjPkQ1bRBcs0WimTLkX_-f1JngKOnTGMJ_Ggu-_jTZIFVsBPoktZNsENNOEw8UrUVD7NKs08N3bitbWkbxIl5cqfCQK26u8xdzNo0S7PSB_J8OB1vi5guJZqIO360H0qMi3WOSdwxAW9zbG0KGAw_-Rhjg-kjWngKNFHd_DnroXdhwcqkK5z5Dbh2c-6MWWXZTIkfI7xx2kp8Gx7hfXoxQ8l70nD97oiJOT_5CB4CB7pXn-zfiMoHQS1wKkdWOMPn-DfjMLHDVl1Pdv7dpWq4aB12wz4XiFb_TrGgnfEqJFJ6QdCbt4o0UN-byLyp64uXPnqE7FHl8VN7tgORIuZfpL0XfIqkBBIuGoye1jqr5vALDVf28GfwAAb1cwgbRVAAAIdAFgBn8AAFhPAWAGfwAA4NV_bwZ_AABwTwFgBn8AAODVf28GfwAAr0JEgbRVAAAIdAFgBn8AAFhPAWAGfwAAsFMBYAZ_AAA', 'APiAAcgq43NcwEE3CatxcK4UVZIDYml8s_wgnxCDwgWVXLhQyoEiI5Vx5Xv_epN614WdGA-fsiziGehCHucX7tjSodiB54smWrcawzr5QmK3RgC8j-ZmYkeYzKGfSIpvxZWjqqQWw6No3zAFtkQ31tFUDL73MaPw-SEXgQBDIgoIxnA5SOyd4i2WgV4N_e6hc54MjHzy3nzuwwbobxh0OSgTIBYiuwmKw6yrwZ8BgJ4uYqHqhjTHcU3vkioNoWHdx6-oRNo6UZLGsPJzulNPtjyOtL9iCu5YsHCI15WqJ4mj0qxMdHhxzY_Mk9isyJ5zItImJLJJLi2yB9EDWsf08ysuZTaxy611a6REP8JP9z6LF9RKhgQa8NSZRfYn6XmgZ0AL6xDO04nadzZDpDvF2m84eVOf194vkH5VMsfWcbFsbv5ro452mvP_vdxxSqqanUvzMJUbLfk4_BRM-epu6oS-E9nHgpz3Z7CKbBvtRScIr5DsHWDEHITTMLfIJmmIu0pEmW8A-H8ByCrjc1zAQTcJq3FwshRVkt7pMrb08G_WwlKNTn2OuUtbhrf7VUWOeBEEmHnI2hBfuWZ-DDgpLljIwtGQ4yTAJiMQJgcSBQWxh122-z52lP3cBxZjWMFKhsRBwlgkJLk6bXloubl6rcjL0XAIpOsTp-J6o7FuIxw6GuK8By1FcT6ChiXQuzKwIvNWZSsd0U7-X07JA6DTa0XB0o5XO7cCrLWGib3PL8ue37YzlJtFQpfgpLBdl7m4L9LnB-azwJeaT4tDx7_QsMvFIWFa4JU2hQxrlDdgqTQ0krFBzwp87LpIe9eQS4e8Qe_Rasb9z-gyW3m7Gf4H9YKPC7U6GxKeSU8U7kcKg_VXln4WNHrzGNB7k50gw3YfWT13BheOu44DsI8l6Y4NomnrWB4UqEIXx4qAbqnX51n_IcNJCUz_o_K2IHmmnPOEGJGij0yJfjLZCpHKGpN4nOGzlFTwdp6JdhCTqI0d_NmCNUT-_izi-nrBpEo4PT7hWk9Fgg_mKzxvAPh_Acgq43NcwEE3CatxcLIUVZLe6hQE8u2nXgxzYI3Nct15o8bdNgNAPho7idGqW5y889sOW1ohPMKfowwkgq4Y16-hWQhm5RzY5WRKzbtlCVR0uh1g9IPfVS1fcwqSw4W3vKZ_6Ps4TVKeR3ot1nh1KMva91a9VMLi6knQG0lZeNet1Lni5SlBcbHfPuAQi9Q5bAB0lasfmG5Nm80Bb0NVyLDswaUlluv2XsynjTvVPemBXq_tpruvScKfEOGgt3TAsG9SK4lgvINq81Idu1V3kACVrF0VVO_acLfWPe5DcAgO1qvoWl83n1uHQCOwa-w0k5jGqscGLVJqVKoW0k4sqdm7XF9hFHXb5QwJ1Se4pSkNhIGkKjqhY6woi25wD_JSpLFtJYIMPhBqdzskTJVcW3iMAUP6FJHAmFcC5xKk4niXuem3iWgxVrpyZOIrL7gJwvXfTBoJAzTi0XKfTk77u15HEyIdix7ic-gIqnO-fh_PpRQqowz0YW3z7Vazw9gobwDofgHIKuNzXMBBNwmrcfC7FFWSaHntfPCslJI23bcPiY9FDTmN_ynFCi47r6pDnrs4el3yriokJGxFsnpYZLDzq0TOTho8KCJD8UDmrNUyQpReakF_bQLrXa0YRLhmavo3hH1qfEcmRV-O9ttRhgoRiv39MPO4rvGjZsj41iTyqaUgBXsPWbRmtwtEnaMWBrqjMfK60U1V837XvyudT5kK8VOPL3i5Q4kGEU0rXOOuPe7x_CWSiafbLIZcj0pIsXoy129hFUTa5sy8EDi1OmkFW_CrkMhtiYDZAdOpTnEPIyHuwMhjFavtIOBNPwzhXaJrKMnndlctIDtKNOC63XMOC5z0-SFU-cnhZ-1Rz5--K-gkHtZGnRo_GLKzw-6ks2ZDscVhKRwrcmgal2wzfrU20_rsi0-1luQoNYLaPsZGzcSw7oNmTJQ6j606uEntfPdI7hqb-mSzyzKDVoaqs-606cqJ9MTRmhyphs5He4RnBUGyICSuXrZkIBhTF85_h5ocb7DVf28GfwAAb1cwgbRVAAAIdAFgBn8AAFhPAWAGfwAA4NV_bwZ_AABwTwFgBn8AAODVf28GfwAAr0JEgbRVAAAIdAFgBn8AAFhPAWAGfwAAsFMBYAZ_AAA', 'dfPl9uPMstq7Vq2drvvvcg==:eD73l0bjnRzx6/nNvqO7eA==', 3, 'Jomari', 'Obra', 'Andales', '2000-02-10', 'bsittagum2021@gmail.com', '9012837465', 'Male', 'INACTIVE', '', 'Regional Director, PRO 11', 'bruce-mars.jpg'),
(2820953641929179412, 'a', 'Cel Daquil', 'APh_Acgq43NcwEE3Catx8PAUVZKQ5zhgrX4fu9-J9mQb8GNXVKzXfrx1Vb6V_yeVlfPwNMyZ05n_LAjrZngt3iOCOl3IHUH6r3wwj6DlkDmHL6we47C4OWm4pQxi8xdN_cUsPKygIb-W6vNO0H_gGcol3GzAuHJ18ggJYQsGrakAfu3vNNtsyaIqxGlpuLnhO0sKA7QSeaK_yNr8aTOU8wARxpDwMuUkH_yyZ4tPMVis1oSoJnONOp6ERdqMinO95jU4llpKl7uAfaIy1toxI-pY7_5TMaqm_5zs8uDAsG88bXyaie3WfxgBr3etnmT8Cx6Bv7Dxyuz8-rX_VsM1oEnIMutWSX5a4XTGj0AO-lXicEul-q517l6XRxL9cXxbtsFvFuS9ecZZ5HGxFwiB-1VxAHPldkQaJrxqYbnBRneCY1gg-oSM-OBRt-NLYZLQ6dQE7fbYBl7vNZmwY38N9oDQMMBa2Mv52t0AYQ_CjlajogOCzMhQ7fm3fe-0sIGD_uiFbwD4fgHIKuNzXMBBJahR8bjn97HefoATVZov6AVbqgo6l4t8wNjo04t1VlZHrKfOgXM2BKkZQzdqT0uxeJgFahqdZ9UFNo0FxOowp2MiEQCXYmtNW-tJzJB14R0q5gem0L5noULWI5i2Hotwp_tmLDdw7uPYNUHaL1kpBbXlpg7AVH5g2AfXtTuo4ZPVBcMIlIVIF1tbsVONBqYLndO6M1q942jS4VCKHRi895-no0wdvjtXMM6GgDk6pc5WFv60yms629XaHTTF_ZTeLhMJErgzUJRhpRiEjMK-vTq5r394yHlxWBaCFCtdwD-KeI7BrcWEjV1zLfLzPiA1XVqWqQAPd_elMhm2qhP5CBA_cC36-g4wHXtnl4ULg7aIarf9daShDK57ZCKNzwayevRa1Z0GHhfSQ6IpUWcoeVXxPEfx7pZbkvMQKasddpFVFNYvPtKbrBVCXwCRa1uTFRdafXdEShMb6BU2ExJLSbY9cBQWuloDVRTNjrDoRsVAgh76x-SSbwD4fgHIKuNzXMBBNwmrcXCKFFWSTtUUjqebr45aK50ZANc2MZbLjYwPwh7r7kKK48ncrk2hWnoFDN4YtgUKv-l06Dw6UfkzGUqgMf2ij6yHIKMMkqYZXBiPQsva1xuWpQtnGCoXYoXwkxA1uYYeF3_KISpCgdpUnZG-avCOa1Xo6KHJ5rQid4-BvOk_dC9jPd9kEE43VDeKT2j4JBfTmalQC-PBwx00G0b5NqFAYU-1cCVxsSOulyH2W16CB-puNNokAB1-qGsRjMyNl6rO7B_yFpqdY_AmZ3HaNeZps2XRA0MlA3Nf65-fRSSZi7e9DMdwzyx8eMIzN_nLEStdxwS8K5vZ7tsij_1HyD-Mdg3TED7T-bXO1qsgwmNrdomij-QMD2yvVwTBtUiVIl_KlWR2WAGI2abR-cnPMxHK5jI9O2383LZp1censQX_FRaFlfsAWApMDzG8xcA1PCWDOeV__8LkTGR1B7wAJe807yAsSZsyBtSW490elGmX92uwMP-nbwDogAHIKuNzXMBBNwmrcXCoFFWSytDPKks5Qhd9U2_uFHEghRn17LtyLvkVL8R7o_4kkx11NO_bHewr3ZV7zgk7BH3c2BwUuUfzh1Sfqh6WbwGSJWco4T6F9E9NjezAEKauWt3rt1ZwCJdHcK-5q7R1tsTmymsRs0ARMio-cS78pL0hwhShEU1ec6vD76I6xg9J-94nR3EQvXrc2dpvkTjj8SfVMUk44toGOYZYrLWOAWB_4wTBF_h_yUjw2VACnV8G0JcVCMD6RWF9cZxt0CC_RYeDmqv7QV2tfKhhnK9hmqk4Jv6Z_KLqx2p1a12WE1z9V2ECiQBesxF85k9muKq8bBoqhfA7MFY3XhGlHcQ9UKVsiJA8TBWVizM6oWJJf6N1Fbs23QVy7uSllJDeR_tp3espLlXvn6PuE8iW6DxGxwtG52Yvx7UcnW_iQMEGej8yNT6N03InaxOifkRvlEvCaPD0zDzE6uWEkfPMAJgEI9euA-lUjAv-JKDzQO6X4vQZqkZvALDVf28GfwAAb1cwgbRVAABI_QBgBn8AAJjYAGAGfwAA4NV_bwZ_AACw2ABgBn8AAODVf28GfwAAr0JEgbRVAABI_QBgBn8AAJjYAGAGfwAA8NwAYAZ_AAA', 'APh_Acgq43NcwEE3CatxsPcUVZKkeF774JJxWIq0F6Uqr_Y0G5bZKsaZ74k8kWHrI2TxpXGuOOst-6j-IwMKbr9s4Je1ThtwTFHxsNAhMo73EscdVz33A_g8XSS2k4413lAIcfoMn_BDrMWX3AifDtok13lMTxCx_ZObyHpsOusLIC10axTeDRxtUHAGoJBwoFguct_t_o2-ovHSl8c8r3L_USMNEtEy6ncv96A7xEXb8ADMb2-izOozrzkiL8ACwz49Sa-l8CNGU4E1R1zX3uomYu0qq6ywo-iTIdB9o8c8c1ZS7a7QGmIcppNjg6PI9gpNvpSuoD1DLK8ohZQEBXDcfHtSjFfO5qwht0fhJcHIETa4UAXhfedYLRAIl9mFOddqmBP24CMAX2RoZYngF14e-B8v1ZiQ7XpoMxOOnWltLSlGn0_6xeL08NCp5crOCkTOqslcBg5yxizv2G1qTJx5c4GRRZ3tddLD6iX3N8pG94ksXnL3pcXR5B5rDWr8rq_GbwD4fgHIKuNzXMBBNwmrcXDVFFWSnd_1aGjsZO70xPJrq4jlrqa4vWObPPLSneJriIrJud3SUGyCpJrP5hPgLWDw0PRcmqM-p15ZYW2kaM6K_V1v0YCZv5pODljqNgzS7bRqbvNQvYNxhx2jSTHrp_yeN7UbL_tyx-4jaAPQDGxKihNTFpLob3CwZwXARnrS3_-SedD5KPo2FLbanDGIGlkNMqxAC26Q30i1gb7J1fhQm1f6J95F58_njbHEIVf14x7AyFppsZJpDRQp1MCkUz551df9U_dvlaIsCG-CwYHtTKNY-BUj20lv-LLRqjVXOKnfFGKUVXo_qIuw426cZ2KNfovT2f3JZyJPpvGaOZVi_tybL_WRsrblWHuvbz5s1vT-r-S1bnKQLqkzfRPlG_9-8RDrc-GEPmv5mgZGIimU64mjE5e0T55WnNDqlYG7bFTk7mH4rqeJNHKRqgrZbXJUTVv21XLIl1OXHnNUAK0gVC3Wj-sRbHJvjjL8VDKqJPdybwD4fwHIKuNzXMBBNwmrcfCPFFWSwlDl-n9qkQy_30XXSb8dI6xuU6uLFUCSHDOlk8OPxasq3dk0S_S2m_IegptpAH5ZvXthcn1m0M6rik7BNNARKQ44autDJ74At92Ml0Vqtn8pxUXmts15L5lck2Nl6korRpYudYBLO9jTWlK2ItinWbsOGbhw_pxR9dmdfqe2j9FWHbb-f5rmn_rnADcIV5b3hD23iiNrK951ZNK6sF2UJiNqhxSy9CLygHu4nBa54bGkhn_UH5SitHQj_CvuF992skaNlMnjH6VH9G2kjr1LVpCFmmYgRRxwoyCS94oHVJagEL58yGb1Q1iPFPtgHVXGoxdT9NidQGomORhJeIxB8maIlHRiHct7vD3fjJvkL6oKEZp-Y-70TlIVww9EGLNtC-QFvWKJKbCJdXv_C0q00Mgq6swzHBENr-karCniDAbPC7ikNKWErd4j4jv8AlnbDborg12Zjgeu9PnktFJxDwd_5OS8AdCUcqfn86SalG8A6IEByCrjc1zAQTisPg-T_7HGdooLlQ-wmTrhd3_3KVmDaeE3HdyKVPizQoNhJ3rLdwm8hGdBWY4Kk5Dhmo24Gi5dj5p65o-ATJ5Zx4q7-Rwmq3YtwR8r6TslcGgqNeah4pCatNa4uJ0WemS1uP8iG_sZNtC7SjSO1ulC_CHyaua6p5txAyjywK8MnPQFjhsrbt76pXvVx83j7AcS_U7rzqJpqaqRyChueMyUuWISd-aSIDlmcQKuPwR3ffGbL8oJfkwrRxYm2BZFiszcfbW-gy-E-K_XZMPuc_EmwHonx-wiJfhLwLXHQsHIjaTRb2MfKHmZDNarxIjGbj0LwJ4GrAH3EPQ2SetpLvBylIUnNraFAThXgJGVUT2BII53TsM5xB1lX_k_hVb-BZzz4B-BRIZMqnDhKkWo9E6Mts5dEndKPPOlW4qeU3xpEi6OC__ERs2n4zrTgHitv1w--I8bdMBRV4ZomyDC5a6QhRcxo2IL28G4PPOPHLaUWUcbb_1EThQS3W_l_28GfwAAb1cwgbRVAACIDgFoBn8AANjpAGgGfwAA4OX_bwZ_AADw6QBoBn8AAODl_28GfwAAr0JEgbRVAACIDgFoBn8AANjpAGgGfwAAMO4AaAZ_AAA', 'cWajlcLF/3500/vgmUqCTw==:3sFZj88QJqfgzXe+6kb1FQ==', 2, '\"C///,,---el\'$\n\n\n<br /><br />', 'A', 'A', '2001-02-02', 'khaylpisonet14@gmail.com', '9012837465', 'Female', 'ACTIVE', 'USER', 'Regional Director, PRO 11', 'bruce-mars.jpg'),
(4695007010721237392, 'aaa', 'Johndy Bryll Butihen Angga', 'APh_Acgq43NcwEE3CatxsLYUVZIgmyjsl87FyyO5cO3RDHWRzKd53_5HraoBjbXjpNI9JrrGRHM7GbyioIY6peVOz4E2cKw6Gl-yTslY-jFTX2IemtXIto44ehZa5DwwpZBgmtWxUzX-gbt14VsDEf2Os8kUq9xigGF8g33pKIpLg_8mvmAJ4TFZuceYVaYawBFFouOu3DdBkEul6LZxJP0R7C3UrxBJJf5GBRye6ebSI8fUn1bTcNFlOQgxYrVHnYaTCbVUnmRoin13v5BffatU_Qb_DheJk8kvOJI8_oBBrH-z0tqnwnTEH61P5gce-w4AcXVzQh_83gTGV1PV1SoiERANNDs5s83EAJwY9cafiHVmJi6QPEd0USLtBIynUNjF9e04s4hdGTsXfKXt3QblnvWYMe5muU4Z37l-fla2VOTl8LQhjWRubLA8CAlxfJiO8CGUtZUExSZQVyt2BM62sOnsXNdQauxQRdRJ_rkHyqpSpBLhWpz0IOnURcQXxMvVbwD4gAHIKuNzXMBBNwmrcTBaFVWSMNqpjXd2OlSLND2W6gsqSqXFcHpnoERbY3vAEF-Ov59IBDrW8mZY7RBKONZxBugdUmJPTG_HmFNhsyimaeDq3m9FKKvDu8i3WE_DfGgld090F-l5kwqgR2ZuBwjgBociVT4w1ilN5bFXv-3FpoNGPxVcLLWYALNELT4BH8r2q_xjgHH5SnElpH8Svbrk7Cq3qBlV4zbHNvJ_NWNu8qpnU_U8GM8tJYuDUYNJdxgzo3sJkLRW5a-oIgw8mJIf_zlFJ4KOqmqMhl3ILUT-f_N7t6MAnScC_zSSQv1_egBSsVXN9QXR9oEio8N6pMVexasLGGN9y_I70Eai1wGUnnhvoiF9-IUTldUP01DN-2-XdDYVLArwnF-ix7ZOurZ0skRY8mWLGSLhnPqHBpiJZXlbK675hv3tqmM0OssFscH6FVYREKPU6oo7GJa_nfnw45wq4zoyV86iphJnYofo8DvZHc7-mw_Ob1HBLQLgwC3oytBvAPiBAcgq43NcwEE3Catx8FgVVZKtbKAlDNaK-W5mF9RJ_05VLcTHT6dfXtfaQLLPjJM-8dyAdxEja5rr4hAbaYcINFfgFVqpJxBF9K_Bz1KBdpoFtx_fyub2TInBU4xpYpDiPmqmvj0WvnYAY5Z8nsaC7zbQyG3irF4WhFCw8tCa08SF5_VYbRvarLFnKM_b9s-meLBTLSqvlUZcmUo5rh-8mlkbbo7DPR0Nj4BhmIprKPcCA6_kYdlY0PqyDhL0cBMmty31gjEo5KQ9KuHLsXenTCsT3J_isfK_3Jt9d6Iip83T5DQZAp0YARuso_RxxTP7PkAT4r-1Q1ge5QukorEq-jhrX6g8RoGR0O0Y0Wl7ICZ3EXmOgTuoD2wAOFPBu1FT1xfr19OA_M6YkHkMwK_6eZcoUw9DxPug2qsMUQ8jQMJhpU0cHMW0EHvHbO-aw4pQ6gfHUrwRNFn3ewQ5QayGWevUDn_pVnVwGTWVGJN6VVSc8Fp_Ko-Rmf1SyTk-hsWyBSFvAOh-Acgq43NcwEE3Catx8FgVVZKsap6lBsHFTNL25zfM3s99mzTloYBjO1kA_o2BvrodbxIImrKUePdOnJk9DytbA-JWZ3qq76datqOgYOwolSxC1nadbohOXxfftHd3OUoG0N7_vNoO6E_jSBCFGluI4MVkebFYzWULOu59OsaUnI9ZZ3fHg1dCpHGEj9qsjpfmwFQpF85kqSdrQFvmJupdEEzkVbd6qtCKuP1SCfAhBMvbMvWwJxzFPb0v-E3ti0HbXOqJUCxHq7xaWeoJEhpH1ZSoyAMv55wrZ1MEGj_LIA6QBylnMeiLqCZPhQdsGfvQqH2toEptQMPvYZGoHSBhZ6QgmIrXTGM5dlY9x5IMXkzYRJNPajwgEHv-sJdbn6d-a4pAOhmQ0vFqCZ_adaZMXGCt4yPI9NF-HpBHanM6XtqDr8rQXV7v6YMGA-b1oDLycr0wwHxCihOyHc5pzy6gnE2C6GVo2pSWx3MXIgSNtbQogcMUVKRh809sKKm6splvvfmofwAAb7fbSQVWAABIOwDoqH8AAJgWAOiofwAA4JW9-ah_AACwFgDoqH8AAOCVvfmofwAAr6LvSQVWAABIOwDoqH8AAJgWAOiofwAA8BoA6Kh_AAA', 'APiBAcgq43NcwEE3Catx8EkVVZKpCUVgbywClOut1f1Sw9kokWJN985o123015qerC642jXQv4f4ORSNWQ8p363b4Ds70p_ws7RtrX4qqwZM0kTk77cNWi64eoDZabIODquPrI6VtFAPR3ZMRxmOTp4_4EssvYI6dV-hfVonw0_ARgWdF6VFc0Fe7jhE9p0pXYc8Kscc6mNaUdWZgY-sG8-9mk6zC2Ntnm_47XQA4guFcNjYK5Ubnpluag21_t0OXPyW3_ElXLf3viCdtzX2qSpkfXZLpxLip9pi1CGWXvVzPa93vpx5RMg0ae3kkKqrMRDuh5pi2gZVDJRhw3GwGL99uFEBLUA_Ted5W8p0IZblCC8rO2MBRq_AqvZnvjgjl0orMUKsCznv-EkHNCEpWkjFBbvBG3Dqk5IaxbYTohNRdkS6Qf-Yt3G04diRzJBGD2ntIuv3TnrYQ0Ff1W9yFbo8L9NFXxjUvFKgfziZk0M3GNRTsi6AwDounndTS7--UQkZh4RvAPh-Acgq43NcwEE3CatxMEUVVZJgJlJPCr4TwDr5He4J0SlBt9K1-20TKAckUgtqARwOYcsKi13EEj5QxRvtWBJY4lLCBTw_uYsq9CCDIMBbNEnwoW6tH1eGtdD0yOxmdc1sXV_Rgqy9h6gKWGHuLtwwzB6dNDXx2nQwJGqigzFjfF50QPjKLbX2v9SbyX34uvKYFAlNWmGpMFKfARtUu4EupQeCm7Twx9VMP8uvbaf-mWYfp-yj_Giv7nzv-vfFBr4j7WkyiBKREjYdsR5FVNTdOZV6FSUMiDAT8WMQc3_OmnWKdforxHprXUuNFKblZ2zL5nuH1KFV8dAA5VaH4oprtnfFqk4s5JY9t5qSPq8QLyECuDXoEp1VlR-QYAA4VlB1SkJr44bbFaaoBIvJBLTPWOnbXpzArMLJHT3RqI5naFJLoUg96_mKdcs_GzzaBwboduas_bMbQjKOeDvs_0m8RJSQG8A0VYp6WSgvv8VgO2gp2iCa4Ot86XY9kcWySgtvAPiBAcgq43NcwEE3CatxMFgVVZKNdxsdtbmNIFPK3ireH2EsEsWLYH3Z5h10_bxuj5rkV-YfPOUf0UnbJjpp4DKnwE8lLqJyWvnYDxY3HjNlbsYjoy5C47JUoHHl-kRoEZu_UQN8xnShEIHaZ6wpZ0ss2zjNdsAcEbhsMCYJi_383Vqp-3leMGJriv59qDc9w1UiqNll8NZFnD1_8D54Ve7PZv1xMmVRt_2SnD0letdb3NKwYfmKjQcLnT0gq9cSVDfJb_13esaM9BjEmpNM_yqFAwDYFyS9m3MUKD_nJrERvUBhDzxcw_tqwrCIL8lftF_XIxJrUtxfnpVTmQmCDHHwssrMeucvIUqf0Vl5FdPvY0uRoe_hK4SDSMC4z8DtMiddS_92MRhQcS8LINJyEvL0j3m9oGU6VLFtN2OJSHIYLGgV1jIYOjONGHptPU1rMk8iO7ZD12ffb6qCh6pjCUEejtymh2MXaL1hLme9gtPHRsWhkWkw9zmjupPB9xuB_Nz2b-RvAOiBAcgq43NcwEE3CatxMEMVVZIw0LR7tbHSn7ag4eGtGXtnqREZq-xIcSaIgZj3cL4O7mgGje_BwTyaN8ZwoaQtDp5mETCPqsVTNuVJqSrEGGvGIcLRg6ZYEglhYizhohw_MfeUbz7rseoVZbVg5vJ5MNK1w4SsglVDqv36S3Epooa5kNyx8o86mcOOWuyen1BUM76hnriGEScUiObxItGIjxEAjh96wZns8KgCsLjJCq_mtrfNWXRts0SdwpUCOYnLe19V3AFQMdnpOW2PUV8ogeyoFoGwrj6Eh2GgYvDqNmRIIS8rFJX7edC68HR7Ry7wVSCJhRqPPTxckYrIIieF6YXv8ygVBASFjWXzT5oHxvEuWAxcNdnmRr3wkDts-1UARy1EbRiJSYvcZcFcsFxdg1Nc_TAj_w1FpGNIMrr3rizQp-ZBCNCjD6GIZbF-MsZBlHSvmRLklXnf2DAR5HubRjDtBk-WS_qHvO2Mj8NuF72Zz5fPlG1n7psaJikLmhkJr0dvfwAAb7fbSQVWAADItgHkqH8AABiSAeSofwAA4KU9-qh_AAAwkgHkqH8AAOClPfqofwAAr6LvSQVWAADItgHkqH8AABiSAeSofwAAcJYB5Kh_AAA', '0iWJhvP/bWTC470/vwx+BA==:TAYkeU8yW/DZDezmEqFYMQ==', 1, 'Johndy Bryll', 'Butihen', 'Angga', '2000-12-19', 'anggajohndy08@gmail.com', '9012873645', 'Male', 'ACTIVE', 'ADMIN', 'Regional Director, PRO 11', 'nezuko.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logger`
--
ALTER TABLE `logger`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

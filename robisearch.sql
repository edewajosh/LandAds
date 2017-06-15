-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 01:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robisearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(5, 'florence wamaitha.jpg', 'Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.Hello world.'),
(6, 'jan-koum-3.jpg', 'Jan Kuom Father of whatsapp.Jan Kuom Father of whatsapp.Jan Kuom Father of whatsapp.Jan Kuom Father of whatsapp.Jan Kuom Father of whatsapp.Jan Kuom Father of whatsapp.'),
(7, 'samgikandi.jpeg', 'This is a reknown entreprenuer based in Nairobi.This is a reknown entreprenuer based in Nairobi.This is a reknown entreprenuer based in Nairobi.This is a reknown entreprenuer based in Nairobi.'),
(8, 'churchil.jpg', 'Churchil is King of comemdy in AFrica.Churchil is King of comemdy in AFrica.Churchil is King of comemdy in AFrica.Churchil is King of comemdy in AFrica.Churchil is King of comemdy in AFrica.Churchil is King of comemdy in AFrica.'),
(11, 'waren.jpg', 'hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.hello guys.'),
(13, 'josh.png', 'IT student interning at Robisearch Limited. Passionate about software engineering and big data enthusiast. He loves innovation and hacking through things to find sokutions pressing the society.'),
(14, 'IMG_2023-300x224.jpg', 'egfrdhrdssaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `idNumber` int(15) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `surname`, `lastName`, `idNumber`, `phoneNumber`, `email`, `pass_word`) VALUES
(1, 'Joshua', 'Edewa', 'Ejakait', 33116196, 718368592, 'joshedewa@gmail.com', 'edewa3218'),
(2, 'Jesse', 'Kimotho', 'Njunguna', 33200165, 735685471, 'jessekimotho@gmail.com', 'goldminer'),
(4, 'Jamleck', 'Kamau', 'Ngeno', 3345412, 700002564, 'kamau@example.com', 'brotherniko'),
(5, 'John', 'Doe', 'Kelly', 3345418, 700222564, 'johndoe@example.com', 'foodie'),
(6, 'Clarkson', 'Doe', 'Kelly', 33575418, 700243564, 'kelly@example.com', '$1$mn/.1x1.$e/yi0j1F2J3e3YCj77VJL0'),
(8, 'Allan', 'Olav', 'Walker', 25547489, 726243564, 'walker@example.com', '5dd030ef21773f71224f13aabbf6542812441647115f1c10eee5fe6d29294f32'),
(9, 'ken', 'joe', 'jim', 54215611, 712547896, 'edewa.joshua', 'bf7cedfd6c32bdfbf74eec461a3337a0edc16e8d3c41213f5d2625aeb4379af1'),
(10, 'Brad', 'Traversy', 'Brad', 34672311, 714576238, 'edewa.joshua@students.jkuat.ac.ke', 'bc48d5dc1cb205c236b960a78fb7f022d6075deed0504deeed619e64a7411aa8'),
(11, 'Brad', 'Traversy', 'Brad', 34672311, 714576238, 'edewa.joshua@students.jkuat.ac.ke', 'fa20136f6f01c9dc0ad0aaabb77b334ebc48a6d27c389182df0b5861f4b14033'),
(12, 'Brady', 'Traversy', 'Brad', 34212311, 714572738, 'johnkim@test.com', '009b3f72ffa23c0ca6f6cc231c9d22d055c7dc4c66511ccba73d10b428d9fed3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

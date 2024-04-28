-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 04, 2022 at 12:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemx`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `chemical_name` varchar(200) NOT NULL,
  `chemical_requirment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `number`, `chemical_name`, `chemical_requirment`) VALUES
('hemil', 'hdcnsc@knks.cs', '123456789', 'sx  xx ', 'cxcx'),
('hemi', 'bvccz@fbfn.cvb', '45678', '1234', '4567'),
('hemi', 'bvccz@fbfn.cvb', '45678', '1234', '4567'),
('dsadfbg', 'dvfbgnhng@dfghn.fdsa', 'csxb', 'cvghnngbfvd', 'vfgfbhfd'),
('dfdf', 'fsd@fbgffdv.gfb', 'b1234', 'd', 'fd'),
('a', 'h@h.com', 'scj', 'nins', 'inds'),
('h', 'h@c.v', 'h', 'h', 'h'),
('c', 'h@h.v', 'c', 'c', 'c'),
('h', 'h@h.j', 'gfhm', 'cv', 'vb'),
('hemki', 'fghfd@df.fgn', '1234567890', 'yfdsd', 'ghdfgdsfad'),
('hemul', 'fgnn@bd.hm', '123456789', 'dhfghjh', 'ghjh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(35) NOT NULL,
  `u_name` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_name`, `password`) VALUES
(1, 'h', 'h'),
(1, 'h', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Featured` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `dayago` varchar(120) NOT NULL,
  `discrip` varchar(350) NOT NULL,
  `warranty` varchar(120) NOT NULL,
  `complbox` varchar(120) NOT NULL,
  `location` varchar(120) NOT NULL,
  `SRC` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Featured`, `name`, `dayago`, `discrip`, `warranty`, `complbox`, `location`, `SRC`) VALUES
('Featured Gold', 'Benzo Quinone ', '0 days ago', 'a yellow crystalline water-soluble unsaturated ketone manufactured from aniline and used in the production of dyestuffs.Formula:C6H4O2 & quinone & cyclohexadiene-1,4-quinone', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/Benzoquinones.png'),
('Featured Premium', 'Formaldehyde', '3', 'Formaldehyde is a naturally occurring organic compound with the formula CH2O (H−CHO). The pure compound is a pungent-smelling colourless gas that polymerises spontaneously', 'Efficiency:85%', 'Min:35 tons', 'Gujarat, India', '/project/icons/fal.png'),
('Featured Platinum ', 'Sodium bicarbonate', '8', 'commonly known as baking soda or bicarbonate of soda, is a chemical compound with the formula NaHCO₃. It is a salt composed of a sodium cation and a bicarbonate anion.', 'Efficiency:95%', 'Min:15 tons', 'Gujarat ,India', '/project/icons/sb.png'),
('Featured Premium', 'Sulfuric Acid (H2SO4)', '4 day ago', 'Sulfuric acid is the most commonly-produced industrial chemical in the world. Its primary industrial use is to make phosphoric acid which is a main ingredient in most chemical fertilizers.', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/h2so4.jpg'),
('Featured Premium', 'Ethylene (C2H4)', '4 day ago', 'Over 150 million tons of ethylene is produced every year, more than any other organic compound. Its demand can be attributed in large part to advancements in polymer', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/C2H4.jpg'),
('Featured Premium', 'Sodium Hydroxide', '4 day ago', 'Sodium Hydroxide is an inorganic compound vital to many industries. It’s used for industrial applications ranging from paper production to textile development to cleaning agent', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/naoh.jpg'),
('Featured Premium', 'Propylene (C3H6)', '4 day ago', 'Also known as propene and/or methyl ethylene, propylene is an organic gas compound. It’s a natural byproduct of the fermentation process, making it an important chemical compound', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/pp.jpg'),
('Featured Premium', 'Nitrogen (N2)', '4 day ago', 'Hundreds of millions of tons nitrogen gas are produced each year. When combined with hydrogen, nitrogen produces ammonia, itself a crucial industrial chemical.', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/n2.jpg'),
('Featured Gold', 'Benzo Quinone ', '0 days ago', 'a yellow crystalline water-soluble unsaturated ketone manufactured from aniline and used in the production of dyestuffs.Formula:C6H4O2 & quinone & cyclohexadiene-1,4-quinone', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/Benzoquinones.png'),
('Featured Premium', 'Formaldehyde', '3', 'Formaldehyde is a naturally occurring organic compound with the formula CH2O (H−CHO). The pure compound is a pungent-smelling colourless gas that polymerises spontaneously', 'Efficiency:85%', 'Min:35 tons', 'Gujarat, India', '/project/icons/fal.png'),
('Featured Platinum ', 'Sodium bicarbonate', '8', 'commonly known as baking soda or bicarbonate of soda, is a chemical compound with the formula NaHCO₃. It is a salt composed of a sodium cation and a bicarbonate anion.', 'Efficiency:95%', 'Min:15 tons', 'Gujarat ,India', '/project/icons/sb.png'),
('Featured Premium', 'Sulfuric Acid (H2SO4)', '4 day ago', 'Sulfuric acid is the most commonly-produced industrial chemical in the world. Its primary industrial use is to make phosphoric acid which is a main ingredient in most chemical fertilizers.', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/h2so4.jpg'),
('Featured Premium', 'Ethylene (C2H4)', '4 day ago', 'Over 150 million tons of ethylene is produced every year, more than any other organic compound. Its demand can be attributed in large part to advancements in polymer', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/C2H4.jpg'),
('Featured Premium', 'Sodium Hydroxide', '4 day ago', 'Sodium Hydroxide is an inorganic compound vital to many industries. It’s used for industrial applications ranging from paper production to textile development to cleaning agent', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/naoh.jpg'),
('Featured Premium', 'Propylene (C3H6)', '4 day ago', 'Also known as propene and/or methyl ethylene, propylene is an organic gas compound. It’s a natural byproduct of the fermentation process, making it an important chemical compound', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/pp.jpg'),
('Featured Premium', 'Nitrogen (N2)', '4 day ago', 'Hundreds of millions of tons nitrogen gas are produced each year. When combined with hydrogen, nitrogen produces ammonia, itself a crucial industrial chemical.', 'Efficiency:25%', 'Min:25 tons', 'Gujarat, India', '/project/icons/n2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `u_id` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `username`, `password`, `u_id`) VALUES
('', '', '', 0),
('bnvbvv', 'bbvcx@fnghm.fgn', 'nggnfngfng', 0),
('hem', 'gefffffff@s.vhj', '', 0),
('h', 'h@h', 'h', 0),
('h', 'h@hh', 'h', 0),
('h@hhhhh', 'h@hh.gg', 'ngngngng', 0),
('ngn', 'ngh@bdbs.g', '', 0),
('romit ghevariya', 'romitghevariya4@gmail.com', 'r', 0),
('romit ghevariya', 'romitghevariya4@gmaill.com', 'r', 0),
('bvncvn', 'vb@dxf.cgn', '', 0),
('nvbcv', 'vdcsc@rdb.vg', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 12:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashim`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_billing`
--

CREATE TABLE `ci_billing` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `landmark` varchar(40) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_billing`
--

INSERT INTO `ci_billing` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `landmark`, `pincode`, `phone`, `order_id`, `status`, `user_id`) VALUES
(39, 'TECH', 'Rhino', 'vixomo1426@sejkt.com', 'kollamkollamkollam', 'chennai', 'kollam', 691010, '8286289870', 14, 1, 2),
(40, 'infotec', '1990', 'infotec1990@gmail.com', 'infotec palace, infosis-123, carebian p o, Uganda.', 'fuji island', 'coconut tree', 10007, '0000000007', 15, 1, 10),
(41, 'TECH', 'Rhino', 'vixomo1426@sejkt.com', 'kollam', 'chennai', 'kollam', 691010, '8286289870', 16, 1, 2),
(42, 'TECH', 'Rhino', 'wedesa1370@vreagles.com', 'kollamkollamkollam', 'chennai', 'kollam', 10007, '8286289870', 17, 1, 2),
(43, 'tech', 'rhino', 'tech@gmail.com', 'infotec palace, infosis-123, carebian p o, Uganda.', 'kollam', 'kollam', 691020, '1234567890', 51411, 1, 2),
(44, 'techi', 'rhino', 'farmer@gmail.com', 'kollam kollam', 'kollam', 'kollam', 691020, '1234567894', 51412, 1, 2),
(45, 'aaaa', 'bbbbb', 'tech998@gmail.com', 'Kuravankonam Ambalamukku Rd, Kuravankonam, Thiruvananthapuram, Kerala 695003', 'kollam', 'Thiruvananthapuram', 691020, '6234567890', 51413, 1, 2),
(46, 'admin', 'bbbbb', 'farmer@gmail.com', 'Kuravankonam Ambalamukku Rd, Kuravankonam, Thiruvananthapuram, Kerala 695003', 'kollam', 'kollam', 691020, '6234567890', 51414, 1, 2),
(47, 'qeewer', 'qwer', 'tech4321.in@gmail.com', 'kollam kollam', 'kollam', 'Thiruvananthapuram', 466475, '1234567890', 51415, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_cart`
--

CREATE TABLE `ci_cart` (
  `cart_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `nos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_cart`
--

INSERT INTO `ci_cart` (`cart_id`, `user`, `product_id`, `status`, `nos`) VALUES
(1, 2, 3, 0, 0),
(2, 2, 6, 2, 1),
(3, 2, 2, 2, 10),
(4, 2, 5, 0, 0),
(5, 2, 1, 2, 7),
(6, 2, 4, 2, 2),
(7, 2, 9, 0, 0),
(8, 2, 11, 2, 1),
(9, 2, 9, 0, 0),
(10, 8, 3, 1, 3),
(11, 8, 2, 1, 1),
(12, 10, 1, 2, 1),
(13, 2, 9, 2, 1),
(14, 2, 5, 2, 1),
(15, 2, 9, 2, 1),
(16, 2, 5, 2, 1),
(17, 2, 2, 2, 1),
(18, 2, 1, 2, 1),
(19, 2, 2, 2, 1),
(20, 2, 4, 2, 1),
(21, 2, 9, 2, 1),
(22, 2, 9, 2, 2),
(23, 2, 2, 0, 0),
(24, 2, 3, 0, 0),
(25, 2, 2, 0, 0),
(26, 2, 5, 2, 3),
(27, 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci_category`
--

CREATE TABLE `ci_category` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_category`
--

INSERT INTO `ci_category` (`id`, `title`) VALUES
(1, 'car'),
(2, 'motorsport'),
(3, 'Pant'),
(4, 'Formal Shirts '),
(5, 'T-Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `ci_items`
--

CREATE TABLE `ci_items` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `price` float NOT NULL,
  `image` text NOT NULL,
  `quantity` int(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_items`
--

INSERT INTO `ci_items` (`id`, `title`, `discription`, `price`, `image`, `quantity`, `category_id`, `delete_status`) VALUES
(1, 'car', 'good', 15000, 'ea3b1b1c60c429b96ff6f382af1527c4.jpg', 13, 1, 0),
(2, 'motorsport', 'power of v12', 3666, '6b9cf475b6f2b9169b7602dd008bf8fd.jpg', 4, 2, 0),
(3, 'Pant', 'style', 300, '725bf5b9d9184b34508150e189c82844.jpg', 45, 3, 0),
(4, 'Formal Shirts ', ' Buy Mens Formal Shirts Online ...', 400, 'fa3425036c4ba38b26f7aab2dd92503b.jpg', 58, 4, 0),
(5, 'T-Shirts', 'T-shirts for Men (Upto 30% Off) ', 500, '50071aaf352cdaad34d57f96c2f246ec.jpg', 87, 5, 0),
(9, 'Chinos', 'Lorem ipsum dolor sitamet consectetuer ', 350, 'dff842495f7bccac447b4b8769d75da9.jpg', 197, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_order`
--

CREATE TABLE `ci_order` (
  `order_id` int(11) NOT NULL,
  `order_user` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_order`
--

INSERT INTO `ci_order` (`order_id`, `order_user`, `amount`, `status`, `order_date`) VALUES
(51415, 2, '31500', 1, '2021-08-25 16:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `ci_order_details`
--

CREATE TABLE `ci_order_details` (
  `id` int(11) NOT NULL,
  `order_idd` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `nu` int(11) NOT NULL,
  `pr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_order_details`
--

INSERT INTO `ci_order_details` (`id`, `order_idd`, `user_id`, `item_id`, `nu`, `pr`) VALUES
(42, 51415, 2, 1, 2, 30000),
(43, 51415, 2, 5, 3, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('gujs4shtkjugvc4nh627he2vd024rmeo', '::1', 1629879422, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393837393137383b69647c733a313a2233223b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2230223b726f6c655f6465737c733a353a2261646d696e223b),
('nj75uo7vcp08qseldl08dgdlg8mi6km7', '::1', 1629879739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393837393439303b69647c733a313a2233223b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2230223b726f6c655f6465737c733a353a2261646d696e223b),
('7b3avbbmud9gcfuclpb2q3csmf2ltr01', '::1', 1629880242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838303130343b69647c733a313a2233223b656d61696c7c733a31353a2261646d696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2230223b726f6c655f6465737c733a353a2261646d696e223b),
('r88sml7j3fjhpp7417bpsct0i3p5d2qb', '::1', 1629880837, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838303537333b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('qa692jcssklctl3reskdiaf477ofroai', '::1', 1629881131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838303839383b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('o7fcj88150l2oct1j9cq8dpddqea8d3j', '::1', 1629881498, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838313231333b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('khc1lbcm8gn95inpbjcfm86k7a0ejq2a', '::1', 1629881641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838313538363b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('of17j96t9o2g8mfith9l3qi4lkjnmhn4', '::1', 1629885151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838343835313b),
('mle75u1hoi4jkb2nbpld9gac2a1ksham', '::1', 1629885419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838353135323b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('ivu0267hnlqdcldprlf5buv0v6vceebm', '::1', 1629885718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838353538343b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('kjtb6ociutq1b2q58qlpesb5e5r3jmha', '::1', 1629886020, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838353836363b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('pb9lpa031jgj81em9c78ie6ccc3ld6sk', '::1', 1629887157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838363935353b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('kj1gpltd5akl1kpj1rnbgro9ercvovl9', '::1', 1629887389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838373236313b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('t43v50leu39srmpla3sidvqiu9gf46m9', '::1', 1629887916, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838373634343b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('rapb7vom4qmrrgic0vuold75jlno6uda', '::1', 1629888430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838383136373b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('8nh48olat5rn0qtsn0v5cj5g0pa1mgfn', '::1', 1629888693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838383534323b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b),
('3tdk612pbt460d2jca94bvl0v86mo7iq', '::1', 1629889035, 0x5f5f63695f6c6173745f726567656e65726174657c693a313632393838383834333b69647c733a313a2232223b656d61696c7c733a32313a2274656368343332312e696e40676d61696c2e636f6d223b6c6f676765645f696e7c623a313b726f6c657c733a313a2231223b726f6c655f6465737c733a343a2275736572223b);

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `level` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `email`, `password`, `first_name`, `last_name`, `level`) VALUES
(1, 'tech123.in@gmail.com', '$2y$10$K4hMfprT7h9ZE1VzeFfC7OlxVOAZ6u3ZWvDTDR0cVjO8IkHizp6tG', 'TECH', 'Rhino', 1),
(2, 'tech4321.in@gmail.com', '$2y$10$K4hMfprT7h9ZE1VzeFfC7OlxVOAZ6u3ZWvDTDR0cVjO8IkHizp6tG', 'qwerty', 'Rhino', 1),
(3, 'admin@gmail.com', '$2y$10$K4hMfprT7h9ZE1VzeFfC7OlxVOAZ6u3ZWvDTDR0cVjO8IkHizp6tG', 'admin', 'admin', 0),
(6, 'tech@gmail.com', '$2y$10$4AxhFR1OJzIkMZ.xutUj2u/C3bldNGrl57jX8ESI45NC2Er5Xp50q', 'tech', 'rhino', 1),
(10, 'infotec1990@gmail.com', '$2y$10$VQfUd6doqI37FIHDd9pBt.Te63sC.tZXuqu9ZkKX79J/gFqSoNJKG', 'appukuttan', 'tampi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_billing`
--
ALTER TABLE `ci_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_cart`
--
ALTER TABLE `ci_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `ci_category`
--
ALTER TABLE `ci_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_items`
--
ALTER TABLE `ci_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_order`
--
ALTER TABLE `ci_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ci_order_details`
--
ALTER TABLE `ci_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_billing`
--
ALTER TABLE `ci_billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ci_cart`
--
ALTER TABLE `ci_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ci_category`
--
ALTER TABLE `ci_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ci_items`
--
ALTER TABLE `ci_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ci_order`
--
ALTER TABLE `ci_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51416;

--
-- AUTO_INCREMENT for table `ci_order_details`
--
ALTER TABLE `ci_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

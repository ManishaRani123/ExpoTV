-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2021 at 10:20 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eeadvent_expo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `displayTitle` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `shortDescription` varchar(255) NOT NULL,
  `icon_image` varchar(255) NOT NULL,
  `featuredImage` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `isFeatured` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `name`, `displayTitle`, `slug`, `shortDescription`, `icon_image`, `featuredImage`, `isActive`, `isFeatured`) VALUES
(1, 'Kitchen', 'Kitchen', 'kitchen', '', 'kitchen.png', 'kitchen.jpg', 1, 1),
(2, 'Home Appliances', 'Home Appliances', 'home-appliances', '', 'home-appliances.png', 'home-appliances.jpg', 1, 1),
(3, 'Flooring', 'Flooring', 'flooring', '', 'flooring.png', 'flooring.jpg', 1, 1),
(4, 'Window & Doors', 'Window & Doors', 'window-and-doors', '', 'windows-doors.png', 'window-and-doors.jpg', 1, 1),
(5, 'Bedroom', 'Bedroom', 'bedroom', '', 'bedroom.png', 'bedroom.jpg', 1, 1),
(6, 'Finance and Legal Services', 'Finance and Legal Services', 'finance-legal-services', '', 'finance-legal-services.png', 'financial-and-legal-services.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exhibitor_profile`
--

CREATE TABLE `exhibitor_profile` (
  `exhibitorid` int(11) NOT NULL,
  `listingType` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `shortdescription` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `focalperson` varchar(255) NOT NULL,
  `orgemail` varchar(255) NOT NULL,
  `orgphone` varchar(255) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `yourposition` varchar(255) NOT NULL,
  `fulladdress` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleMapIframe` varchar(500) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `isFeatured` tinyint(1) NOT NULL DEFAULT '1',
  `isVerified` tinyint(1) NOT NULL DEFAULT '0',
  `establisheddate` date NOT NULL,
  `profile_coverImg` varchar(255) NOT NULL,
  `profile_logo` varchar(255) NOT NULL,
  `contactPerson_Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exhibitor_profile`
--

INSERT INTO `exhibitor_profile` (`exhibitorid`, `listingType`, `slug`, `shortdescription`, `description`, `focalperson`, `orgemail`, `orgphone`, `orgname`, `quote`, `yourposition`, `fulladdress`, `postalcode`, `website`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `googleMapIframe`, `userid`, `categoryid`, `isActive`, `isFeatured`, `isVerified`, `establisheddate`, `profile_coverImg`, `profile_logo`, `contactPerson_Img`) VALUES
(1, 'Organization', 'powerfinance', 'PowerFinance consultants are not just brokers, we are your Finance Strategists.', 'The current economic climate is proving to be the best time for borrowers to obtain the lowest interest rates ever offered. \r\n\r\nMany borrowers are still paying too much interest because they have not had their loan reviewed recently. \r\n\r\nHaving access to information about lenders\' policies, interest rates, and fees enables us to compare their current loans and save them thousands of dollars every year.\r\n\r\nWe encourage borrowers to reach out for a phone chat so we can advise them if a loan with a lower interest rate is available to them. With 4 year fixed rates now as low as 1.89%  and cashback incentives of up to $4,000 for refinances, every home loan borrower should be talking with us.\r\n\r\n\r\nIf saving thousands of dollars each year is important to you, then call us now for an obligation-free chat. 0411 369 958\r\n', 'Joseph Claire', 'contact@powerfinance.com', '0411 369 958\r\n\r\n', 'Powerfinance', 'The Right Loan Makes All The Difference', 'Marketing Manager', 'New South Wales, Sydney, 2196,', '2120', 'www.powerfinance.com', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54875.24055089478!2d76.7508579533216!3d30.726761932228868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fedb2d3da9405%3A0xaecad931f1a39595!2sICICI%20Bank%20Sector%2034%2C%20Chandigarh%20-%20Branch%20%26%20ATM!5e0!3m2!1sen!2sin!4v1611821871299!5m2!1sen!2sin\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 6, 1, 1, 1, '2021-01-01', '1628314107.jpg', '1628317812.jpg', '1628313331.jpg'),
(2, 'Organization', 'marsden-park-home', 'At Marsden Park Home, we’re responding to the changing environment and at this time we will be open 10am to 5pm daily. Some stores are operating alternate hours while others have temporarily closed.', 'At Marsden Park Home, we’re responding to the changing environment and at this time we will be open 10am to 5pm daily. Some stores are operating alternate hours while others have temporarily closed.\r\n\r\nPlease check here for details by retailer.\r\n\r\n The safety of our customers, retail partners, and team are our first priority and we want you to know that our retailers are practicing safe social distancing measures within their stores.\r\n\r\n We remain committed to keeping you informed through our website as further changes affect our Centre community.\r\n\r\nIf you’re looking for information about stores that remain open for walk-in trade, please click here. \r\n\r\nIf you’re looking for information about stores that are trading via online direct delivery, click and collect, by appointment, or by phone order with either contactless pick-up or delivery, please click here. \r\n\r\nIn compliance with Government and Health Authority advice on social distancing, and in response to customer needs at this time – many services have changed. This includes the closure of gathering spaces like playgrounds, rest areas, and eating areas, and reducing access to public amenities during certain times.', 'Kathrine Claire', 'contact@marsdenparkhome.com.au', '+61 2 9634 1116', 'Marsden Park Home', 'Continuing To Provide Products and Services For our Local Community', 'Sales Manager', '9 Hollinsworth Rd, Marsden Park NSW 2765, Australia', '2120', 'http://marsdenparkhome.com.au', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.5763682747756!2d150.83822361481992!3d-33.71990921877712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129bf23010b129%3A0x29b6970911a7653c!2sMarsden%20Park%20Home!5e0!3m2!1sen!2snp!4v1628303339753!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 2, 3, 1, 1, 1, '2021-01-01', '1628316822.jpg', '1628316674.jpg', '1628313331.jpg'),
(3, 'Organization', 'mortgage-choice-sydney', 'Gerry Grant and Sally Tian are your local Sydney CBD mortgage brokers that can help you find the best home, car or personal loan for you needs.', 'We are known for our extensive lending and financial knowledge, our commitment to our clients, and our ability to find our clients the best loan for their needs.\r\n\r\nWhat makes our service different is that we focus on you, our client. We meet you at a time and place that is convenient to you, we do all we can to help make applying for your home loan easy.\r\n\r\nOur team of home loan experts take the time to listen to your situation and needs, getting to know you and your family, and learning about your future financial goals. We then offer you various solutions that suit your needs, that will support and help you reach your long-term financial plan.', 'Gerry', 'info@mortgagechoice.com.au', '0416 078 089', 'Mortgage Choice Sydney', 'Your trusted home loan experts and mortgage brokers based in the heart of Sydney CBD', 'Sales Manager', 'QUEEN VICTORIA BUILDING, NSW 2000', '2120', 'http://mortgagechoice.com.au', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.879940294674!2d151.20661901442136!3d-33.866984880656716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae4038bcf939%3A0x12d56d4183165a08!2sMortgage%20Choice%20Sydney!5e0!3m2!1sen!2snp!4v1628322048176!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, 6, 1, 1, 0, '2021-01-01', '1628326623.jpg', '1628326456.jpg', '1628313331.jpg'),
(4, 'Organization', 'ascent-blinds', 'Accent Blinds are specialist in Plantation Shutters, Roller Blinds, Roman Blinds, Vertical Blinds, Panel Glides, Timber and Aluminium Venetians, Curtains and Awnings.', 'Accent Blinds are specialist in Plantation Shutters, Roller Blinds, Roman Blinds, Vertical Blinds, Panel Glides, Timber and Aluminium Venetians, Curtains and Awnings. We offer a free in-home measure and quote, contact us today at info@www.accentblinds.com.au and we’ll bring our showroom to you. We service all of Sydney, Hunter Valley and Newcastle.', 'Gerry', 'info@accentblinds.com.au', '+61 8 9301 2919', 'Accent Blinds', 'ADD SOME ACCENT VALUE TO YOUR HOME', 'Managing Director', ' New South Wales, Seven Hills, 2147, 163 Prospect Hwy\r\n\r\n', '2120', 'http://accentblinds.com.au', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.879940294674!2d151.20661901442136!3d-33.866984880656716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae4038bcf939%3A0x12d56d4183165a08!2sMortgage%20Choice%20Sydney!5e0!3m2!1sen!2snp!4v1628322048176!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, 4, 1, 1, 1, '2021-01-01', '1628326263.jpg', '1628326214.jpg', '1628313331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `shortdescription` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categoryid` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `zipcode` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `username`, `email`, `password`, `profilepic`, `title`, `phone`, `address`, `city`, `state`, `country`, `isactive`, `zipcode`, `about`, `facebook`) VALUES
(1, 'Nishan Aryal', 'aryalnishan@gmail.com', 'aryalnishan@gmail.com', 'Nepal@123', 'nishan-aryal.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '', '', ''),
(2, 'Asmita Pandey', 'itsmeasmitapandey@gmail.com', 'itsmeasmitapandey@gmail.com', 'Nepal@123', 'asmita-pandey.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `exhibitor_profile`
--
ALTER TABLE `exhibitor_profile`
  ADD PRIMARY KEY (`exhibitorid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exhibitor_profile`
--
ALTER TABLE `exhibitor_profile`
  MODIFY `exhibitorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exhibitor_profile`
--
ALTER TABLE `exhibitor_profile`
  ADD CONSTRAINT `exhibitor_profile_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `exhibitor_profile_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

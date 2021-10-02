-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 09:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kbr_companies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `address_id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address_type` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `name`, `phone`, `fax`, `email`, `website`, `address_type`) VALUES
(1, 'Name', 'Phone', 'Fax', 'Email', 'Website', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date_time`, `admin_status`) VALUES
(1, 'Developer', 'admin@me.com', '111111', '2016-09-22 09:21:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(2) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `message`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sapien arcu, vestibulum ac lorem lobortis, porta mattis ante. Etiam lacinia cursus varius. In hac habitasse platea dictumst. Nunc vitae lorem sed enim cursus congue. Sed dignissim ante in ligula pulvinar.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `news_image_0` varchar(200) NOT NULL,
  `news_image_1` varchar(200) NOT NULL,
  `news_image_2` varchar(200) NOT NULL,
  `news_image_3` varchar(200) NOT NULL,
  `news_image_4` varchar(200) NOT NULL,
  `news_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news`, `news_image_0`, `news_image_1`, `news_image_2`, `news_image_3`, `news_image_4`, `news_date`) VALUES
(3, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut erat eget arcu venenatis dignissim sed at velit. Quisque gravida ante et leo egestas tristique. Maecenas consequat ac massa at viverra. Praesent eu purus et justo aliquam molestie vel et velit. Integer lacus quam, elementum quis bibendum eget, semper eu augue. Cras at ornare lacus. Sed congue, erat quis lacinia facilisis, est purus vestibulum nisl, lacinia varius nulla nisl et quam. Vivamus ut mauris lacus. Nullam eu massa tellus. Duis vulputate, nulla sit amet pellentesque egestas, nulla nisl porta urna, nec accumsan orci est non lorem. Nunc vitae elementum mi, ut elementum enim. Curabitur venenatis pulvinar libero et pretium. Duis pretium elit vitae arcu tempus, posuere pretium massa dapibus. Integer interdum fermentum dolor, id lobortis risus molestie vel. Morbi bibendum gravida neque, nec ultricies sem lacinia sit amet. Vivamus nisi velit, vulputate ac massa et, scelerisque luctus tellus. Fusce vitae accumsan odio. Donec facilisis, dolor et elementum aliquet, tellus tortor blandit arcu, eu semper erat risus ut quam. Etiam at nulla at diam ultrices mollis ut sit amet turpis. Duis euismod, leo ac volutpat scelerisque, dui velit mattis lectus, eget sollicitudin nisl enim eget sem. Aenean luctus velit et orci rutrum rhoncus. Integer rhoncus maximus fermentum. Praesent fringilla tincidunt eros vitae varius.', 'upload_image/news_image_0/1_thumb.jpg', 'upload_image/news_image_1/2_thumb.jpg', '', '', '', '22 October 2016'),
(4, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut erat eget arcu venenatis dignissim sed at velit. Quisque gravida ante et leo egestas tristique. Maecenas consequat ac massa at viverra. Praesent eu purus et justo aliquam molestie vel et velit. Integer lacus quam, elementum quis bibendum eget, semper eu augue. Cras at ornare lacus. Sed congue, erat quis lacinia facilisis, est purus vestibulum nisl, lacinia varius nulla nisl et quam. Vivamus ut mauris lacus. Nullam eu massa tellus. Duis vulputate, nulla sit amet pellentesque egestas, nulla nisl porta urna, nec accumsan orci est non lorem. Nunc vitae elementum mi, ut elementum enim. Curabitur venenatis pulvinar libero et pretium. Duis pretium elit vitae arcu tempus, posuere pretium massa dapibus. Integer interdum fermentum dolor, id lobortis risus molestie vel. Morbi bibendum gravida neque, nec ultricies sem lacinia sit amet. Vivamus nisi velit, vulputate ac massa et, scelerisque luctus tellus. Fusce vitae accumsan odio. Donec facilisis, dolor et elementum aliquet, tellus tortor blandit arcu, eu semper erat risus ut quam. Etiam at nulla at diam ultrices mollis ut sit amet turpis. Duis euismod, leo ac volutpat scelerisque, dui velit mattis lectus, eget sollicitudin nisl enim eget sem. Aenean luctus velit et orci rutrum rhoncus. Integer rhoncus maximus fermentum. Praesent fringilla tincidunt eros vitae varius.', 'upload_image/news_image_0/2_thumb.jpg', 'upload_image/news_image_1/1_thumb.jpg', '', '', '', '22 October 2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(2) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_image` varchar(200) NOT NULL,
  `project_summery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`project_id`, `project_name`, `project_image`, `project_summery`) VALUES
(1, 'Lorem ipsum dolor sit amet.', 'upload_image/project_image/fgfg_(1)_thumb.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut erat eget arcu venenatis dignissim sed at velit. Quisque gravida ante et leo egestas tristique. Maecenas consequat ac massa at viverra. Praesent eu purus et justo aliquam molestie vel et velit. Integer lacus quam, elementum quis bibendum eget, semper eu augue. Cras at ornare lacus. Sed congue, erat quis lacinia facilisis, est purus vestibulum nisl, lacinia varius nulla nisl et quam. Vivamus ut mauris lacus. Nullam eu massa tellus. Duis vulputate, nulla sit amet pellentesque egestas, nulla nisl porta urna, nec accumsan orci est non lorem.\n\nNunc vitae elementum mi, ut elementum enim. Curabitur venenatis pulvinar libero et pretium. Duis pretium elit vitae arcu tempus, posuere pretium massa dapibus. Integer interdum fermentum dolor, id lobortis risus molestie vel. Morbi bibendum gravida neque, nec ultricies sem lacinia sit amet. Vivamus nisi velit, vulputate ac massa et, scelerisque luctus tellus. Fusce vitae accumsan odio. Donec facilisis, dolor et elementum aliquet, tellus tortor blandit arcu, eu semper erat risus ut quam. Etiam at nulla at diam ultrices mollis ut sit amet turpis. Duis euismod, leo ac volutpat scelerisque, dui velit mattis lectus, eget sollicitudin nisl enim eget sem. Aenean luctus velit et orci rutrum rhoncus. Integer rhoncus maximus fermentum. Praesent fringilla tincidunt eros vitae varius.'),
(2, 'Lorem ipsum dolor sit amet.', 'upload_image/project_image/im-1_thumb.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut erat eget arcu venenatis dignissim sed at velit. Quisque gravida ante et leo egestas tristique. Maecenas consequat ac massa at viverra. Praesent eu purus et justo aliquam molestie vel et velit. Integer lacus quam, elementum quis bibendum eget, semper eu augue. Cras at ornare lacus. Sed congue, erat quis lacinia facilisis, est purus vestibulum nisl, lacinia varius nulla nisl et quam. Vivamus ut mauris lacus. Nullam eu massa tellus. Duis vulputate, nulla sit amet pellentesque egestas, nulla nisl porta urna, nec accumsan orci est non lorem.\n\nNunc vitae elementum mi, ut elementum enim. Curabitur venenatis pulvinar libero et pretium. Duis pretium elit vitae arcu tempus, posuere pretium massa dapibus. Integer interdum fermentum dolor, id lobortis risus molestie vel. Morbi bibendum gravida neque, nec ultricies sem lacinia sit amet. Vivamus nisi velit, vulputate ac massa et, scelerisque luctus tellus. Fusce vitae accumsan odio. Donec facilisis, dolor et elementum aliquet, tellus tortor blandit arcu, eu semper erat risus ut quam. Etiam at nulla at diam ultrices mollis ut sit amet turpis. Duis euismod, leo ac volutpat scelerisque, dui velit mattis lectus, eget sollicitudin nisl enim eget sem. Aenean luctus velit et orci rutrum rhoncus. Integer rhoncus maximus fermentum. Praesent fringilla tincidunt eros vitae varius.'),
(3, 'Lorem ipsum dolor sit amet.', 'upload_image/project_image/im-3_thumb.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut erat eget arcu venenatis dignissim sed at velit. Quisque gravida ante et leo egestas tristique. Maecenas consequat ac massa at viverra. Praesent eu purus et justo aliquam molestie vel et velit. Integer lacus quam, elementum quis bibendum eget, semper eu augue. Cras at ornare lacus. Sed congue, erat quis lacinia facilisis, est purus vestibulum nisl, lacinia varius nulla nisl et quam. Vivamus ut mauris lacus. Nullam eu massa tellus. Duis vulputate, nulla sit amet pellentesque egestas, nulla nisl porta urna, nec accumsan orci est non lorem.\n\nNunc vitae elementum mi, ut elementum enim. Curabitur venenatis pulvinar libero et pretium. Duis pretium elit vitae arcu tempus, posuere pretium massa dapibus. Integer interdum fermentum dolor, id lobortis risus molestie vel. Morbi bibendum gravida neque, nec ultricies sem lacinia sit amet. Vivamus nisi velit, vulputate ac massa et, scelerisque luctus tellus. Fusce vitae accumsan odio. Donec facilisis, dolor et elementum aliquet, tellus tortor blandit arcu, eu semper erat risus ut quam. Etiam at nulla at diam ultrices mollis ut sit amet turpis. Duis euismod, leo ac volutpat scelerisque, dui velit mattis lectus, eget sollicitudin nisl enim eget sem. Aenean luctus velit et orci rutrum rhoncus. Integer rhoncus maximus fermentum. Praesent fringilla tincidunt eros vitae varius.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `slide_id` int(2) NOT NULL,
  `slide_text` varchar(200) NOT NULL,
  `slide_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`slide_id`, `slide_text`, `slide_image`) VALUES
(1, 'Upcoming Project', 'upload_image/slide_image/b-1_thumb.jpg'),
(2, 'Upcoming Project', 'upload_image/slide_image/b-2_thumb.jpg'),
(3, 'Ongoing Project', 'upload_image/slide_image/fgfg_(1)_thumb.jpg'),
(4, 'Ongoing Project', 'upload_image/slide_image/fgfg_(2)_thumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `slide_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

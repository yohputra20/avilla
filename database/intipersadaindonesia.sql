-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 07:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intipersadaindonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fdelete` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `fdelete`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'fasfsa', '<p>asfsdfds</p>', 1, '2020-01-16 11:52:55', '', '2020-01-16 11:53:03', ''),
(2, 'fasfasfsd', '<p>fasdfadsfdsf</p>', 1, '2020-01-16 13:47:09', '', '2020-01-16 13:48:16', ''),
(3, 'ABOUT', '<p><span style="font-size: 10pt; font-family: Arial; font-style: normal;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;BA Princeton; Economics \\nMasters in Fine Art Otis College \\nWorked in New York Gallery World \\nAsst to boutique hotelier Ian Schraeger \\nWorked for Getty furniture designer Roy McMakin \\nOne time Hotel owner: Hotel Oloffson, Port-au-Prince, \\nHaiti (Hotel from Graham Greene book, The Comedians) \\nwhich still exists. \\nAll custom furniture and interior design for producer \\nBarry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house \\nworking under Larry Totah.&quot;}" data-sheets-userformat="{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}">BA Princeton; Economics <br />Masters in Fine Art Otis College <br />Worked in New York Gallery World <br />Asst to boutique hotelier Ian Schraeger <br />Worked for Getty furniture designer Roy McMakin <br />One time Hotel owner: Hotel Oloffson, Port-au-Prince, <br />Haiti (Hotel from Graham Greene book, The Comedians) <br />which still exists. <br />All custom furniture and interior design for producer <br />Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house <br />working under Larry Totah.</span></p>', 1, '2020-01-16 16:41:01', '', '2020-01-16 19:47:00', ''),
(4, 'ABOUT BLAIR TOWNSEND', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', 1, '2020-01-17 01:39:38', '', '2020-01-20 14:11:54', ''),
(5, 'About', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', 1, '2020-01-20 14:16:21', '', '2020-01-21 09:08:11', ''),
(6, 'ABOUT BLAIR TOWNSEND', '<ul>\r\n<li>BA Princeton; Economics</li>\r\n<li>Masters in Fine Art Otis College</li>\r\n<li style="text-align: justify;">Worked in New York gallery scene</li>\r\n<li>Asst to boutique hotelier Ian Schraeger</li>\r\n<li>Worked for Getty furniture designer Roy McMakin</li>\r\n<li>One time Hotel owner: Hotel Oloffson, Port-au-Prince, Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</li>\r\n<li>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</li>\r\n</ul>', 0, '2020-01-21 09:08:57', '', '2020-02-27 07:49:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'Blair310', 'f44b03dff5c03c5d7aaf130bf2613d8b', '2020-01-06 00:00:00', '', '2020-01-06 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

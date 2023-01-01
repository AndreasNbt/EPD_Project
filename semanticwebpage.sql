-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 05:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semanticwebpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ID`, `Date`, `Subject`, `Content`) VALUES
(1, '2022-10-25', 'Αναβολή επόμενης διάλεξης', 'Η διάλεξη της 27/10 αναβάλλεται λόγω προσωπικού κωλύματος του διδάσκοντα. Θα υπάρξει περαιτέρω ενημέρωση σχετικά με την αναπλήρωση της.'),
(2, '2022-11-18', 'Ανακοίνωση πρώτης εργασίας', 'Ανακοινώθηκε στην σελίδα <a class=\"teal link\" href=\"homework.php\">Εργασίες</a> η πρώτη εργασία του μαθήματος.'),
(3, '2022-12-20', 'Ανακοίνωση δεύτερης εργασίας', 'Ανακοινώθηκε στην σελίδα <a class=\"teal link\"; href=\"homework.php\">Εργασίες</a> η δεύτερη εργασία του μαθήματος.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

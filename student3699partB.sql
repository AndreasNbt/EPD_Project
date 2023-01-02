-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 08:58 PM
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
-- Database: `student3699partb`
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
(2, '2022-12-18', 'Ανακοίνωση 1ης εργασίας', 'Ανακοινώθηκε στην σελίδα <a class=\"teal link\" href=\"homework.php\">Εργασίες</a> η πρώτη εργασία του μαθήματος.');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `ID` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Filepath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`ID`, `Title`, `Description`, `Filepath`) VALUES
(1, 'Διαφάνειες RDFS', 'Διαφάνειες που χρησιμοποιήθηκαν στις διαλέξεις για την RDFS', 'Files/RDF_Schema.pdf'),
(2, 'Διαφάνειες SPARQL', 'Διαφάνειες που χρησιμοποιήθηκαν στις διαλέξεις που μιλήσαμε για SPARQL.', 'Files/SPARQL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `Goals` text NOT NULL,
  `Filepath` varchar(50) NOT NULL,
  `Deliverables` text NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `Goals`, `Filepath`, `Deliverables`, `Deadline`) VALUES
(1, '<li>Καλύτερη κατανόηση των εννοιών που παρουσιάστηκαν στις διαλέξεις.</li>\r\n                                        <li>Κατασκευή μιας πρώτης οντολογίας με RDFS με χρήση όλων των βασικών εννοιών της (classes, properties...)</li>\r\n                                        <li>Χρήση SPARQL για την κατασκευή ερωτημάτων πάνω στην οντολογία</li>\r\n\r\n', 'Files/Project1.docx', '<li>Σύντομη γραπτή αναφορά σε Word όπου περιγράφετε την διαδικασία υλοποίησης της οντολογίας σας.</li>\r\n                                        <li>Το αρχείο της οντολογίας.</li>\r\n                                        <li>Τα SPARQL ερωτήματα που χρησιμοποιήσατε μαζί με τα αντίστοιχα αποτελέσματα.</li>\r\n', '2022-12-01'),
(2, '<li>Επέκταση της οντολογίας της 1ης εργασίας με τη χρήση της OWL.</li>\r\n                                    <li>Κατανόηση και σωστή χρήση των εκφραστικών δυνατοτήτων που παρέχει η OWL</li>\r\n\r\n', 'Files/Project2.docx', '<li>Σύντομη γραπτή αναφορά σε Word όπου περιγράφετε την διαδικασία επέκτασης της οντολογίας σας και το πως αξιοποιήσατε τις επιπλέον δυνατότητες που παρέχει η OWL σε σχέση με την RDFS.</li>\r\n                                    <li>Το αρχείο της οντολογίας.</li>', '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Loginame` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Loginame`, `Password`, `Role`) VALUES
(1, 'Andreas', 'Nalmpantis', 'andreasn@csd.auth.gr', 'andreas123', 'Student'),
(2, 'Alexandros', 'Kyriakou', 'alexkyriakou@csd.auth.gr', 'alex123', 'Student'),
(3, 'Georgios', 'Meditskos', 'georgiosmeditskos@csd.auth.gr', 'george123', 'Tutor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

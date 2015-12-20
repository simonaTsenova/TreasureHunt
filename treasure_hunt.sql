-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 10:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `treasure_hunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_cities`
--

CREATE TABLE IF NOT EXISTS `n_cities` (
  `city` varchar(150) NOT NULL,
  `week` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  PRIMARY KEY (`city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `n_question_points`
--

CREATE TABLE IF NOT EXISTS `n_question_points` (
  `try` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`try`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n_question_points`
--

INSERT INTO `n_question_points` (`try`, `points`) VALUES
(1, 15),
(2, 11),
(3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `n_trace_points`
--

CREATE TABLE IF NOT EXISTS `n_trace_points` (
  `try` tinyint(4) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n_trace_points`
--

INSERT INTO `n_trace_points` (`try`, `points`) VALUES
(1, 5),
(2, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `complexity` int(11) NOT NULL,
  `category` tinyint(4) NOT NULL DEFAULT '1',
  `question` text NOT NULL,
  `week` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `complexity`, `category`, `question`, `week`, `points`) VALUES
(3, 0, 1, 'Take a screen shot of you walking through virtual map and finding in what colour is New York Polytechnic school gaming lab wall!', 12, 0),
(4, 0, 1, 'Take a trip in the Louvre. Get to the lower grownd floor. Installed in the eastern wing is the Egyptian Antiquities gallery. Take a team picture is front of the Sphinx.', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
  `question_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `answer` varchar(400) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `feedback` text NOT NULL,
  `answer_date` datetime NOT NULL,
  `feedback_date` datetime NOT NULL,
  KEY `question_id` (`question_id`),
  KEY `team_id` (`team_id`),
  KEY `answer` (`answer`(255))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `points` int(11) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `moto` text NOT NULL,
  PRIMARY KEY (`team_id`),
  KEY `user_id` (`user_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `user_id`, `teacher_id`, `status`, `points`, `picture`, `moto`) VALUES
(1, 2, 1, 1, 0, '', 'dfsfdsfds'),
(2, 4, 2, 1, 0, '', 'gjehwfewef');

-- --------------------------------------------------------

--
-- Table structure for table `traces`
--

CREATE TABLE IF NOT EXISTS `traces` (
  `trace_id` int(11) NOT NULL AUTO_INCREMENT,
  `trace` text NOT NULL,
  `answer` varchar(500) NOT NULL,
  `week` int(11) NOT NULL,
  `trace_number` int(11) NOT NULL,
  PRIMARY KEY (`trace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `traces`
--

INSERT INTO `traces` (`trace_id`, `trace`, `answer`, `week`, `trace_number`) VALUES
(1, 'This city is called ', 'New York', 12, 3),
(6, 'Sabrina the cat fell 32 stories from a skyscraper and easily survived, as do most cats that fall from skyscrapers, especially those that fell more than several stories. Not so for humans. In which city that happened?', 'New York', 12, 2),
(7, 'This is the city that people call a Fashion Capital and not just a mall. It''s in Europe and is also known not just as a city but the "City of Love".', 'Paris', 2, 1),
(9, 'This is the city that is also known as the capital of the country of The King of the Sun.', 'Paris', 2, 2),
(10, 'The next problem which will lead you to the treasure is hidden in the city situated on the island. This city has an "eye" that carries the name of this city. It is a giant Ferris Wheel situated on the South Bank of the River that divides the city into two parts.', 'London', 3, 1),
(12, 'This eye is also known as the Millennium Wheel.	', 'London', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trace_answers`
--

CREATE TABLE IF NOT EXISTS `trace_answers` (
  `trace_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `points` int(11) NOT NULL,
  `answer_date` datetime NOT NULL,
  KEY `trace_id` (`trace_id`),
  KEY `team_id` (`team_id`),
  KEY `answer` (`answer`),
  KEY `is_correct` (`is_correct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `role`) VALUES
(1, 'seni_mz@abv.bg', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
(3, 'sharo@abv.bg', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(4, 'simonatsenova17@gmail.com', 'simona', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

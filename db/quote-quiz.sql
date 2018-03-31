-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.29-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for quote-quiz
CREATE DATABASE IF NOT EXISTS `quote-quiz` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `quote-quiz`;

-- Dumping structure for table quote-quiz.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(225) CHARACTER SET latin1 NOT NULL,
  `answer` varchar(225) CHARACTER SET latin1 NOT NULL,
  `answer_2` varchar(225) CHARACTER SET latin1 NOT NULL,
  `answer_correct` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_answers` (`question`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Dumping data for table quote-quiz.questions: ~21 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT IGNORE INTO `questions` (`id`, `question`, `answer`, `answer_2`, `answer_correct`) VALUES
	(1, 'I’M LOVIN’ IT', 'KFC', 'Android', 'Mcdonalds'),
	(5, 'CAN YOU FEEL THE LOVE TONIGHT', 'Michael Jackson', 'Elvis Presley', 'Elton John'),
	(8, 'Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe', 'Thomas Edison', 'Galileo Galilei', 'Albert Einstein'),
	(9, 'MISTER GORBACHEV TEAR DOWN THIS WALL.', 'Joseph Stalin', 'Winston Churchill', 'Ronald Reagan'),
	(11, 'Be yourself; everyone else is already taken', 'Malcolm X', 'Eleanor Roosevelt', 'Oscar Wilde'),
	(12, 'Simplicity is the key to brilliance', 'Jet Li', 'Jackie Chan', 'Bruce Lee'),
	(13, 'Do one thing every day that scares you', 'George Bush', 'Barack Obama', 'Eleanor Roosevelt'),
	(14, 'Impossible is a word to be found only in the dictionary of fools', 'Adolf Hitler', 'Julius Caesar', 'Napoleon Bonaparte'),
	(15, 'If you tell the truth, you don\'t have to remember anything', 'Eleanor Roosevelt', 'Oscar Wilde', 'Mark Twain'),
	(16, 'Live as if you were to die tomorrow. Learn as if you were to live forever', 'William Shakespeare', 'Martin Luther King', 'Mahatma Gandhi'),
	(17, 'The fool doth think he is wise, but the wise man knows himself to be a fool.', 'Oscar Wilde', 'Mark Twain', 'William Shakespeare'),
	(18, 'I never met a man I didn’t like', 'Jimmy Stewart', ' Winston Churchill', 'Will Rogers'),
	(19, 'Be kind whenever possible. It is always possible', 'Muhammed Ali', 'Mahatma Gandhi', 'Dalai Lama'),
	(20, 'That’s one small step for a man, one giant leap for mankind', ' Buzz Aldrin', 'Richard Nixon', 'Neil Armstrong'),
	(21, 'Insanity: doing the same thing over and over again and expecting different results', 'Stephen Hawking', ' Bill Gates', 'Albert Einstein'),
	(22, 'A penny saved is a penny earned', 'Nelson Rockefeller', 'Thomas Jefferson', 'Benjamin Franklin'),
	(23, 'Don’t cry because it’s over, smile because it happened', ' Shell Silverstein', ' Steve Martin', ' Dr. Seuss'),
	(24, 'The only thing we have to fear is fear itself', 'Richard M. Nixon', ' John F. Kennedy', 'Franklin D Roosevelt'),
	(25, 'You must be the change you wish to see in the world', 'Theodore Roosevelt', 'Benjamin Franklin', 'Mahatma Ghandi'),
	(26, 'Age is an issue of mind over matter. If you don’t mind, it doesn’t matter', 'Abraham Lincoln', 'Jimmy Carter', 'Mark Twain'),
	(27, 'Darkness cannot drive out darkness; only light can do that. Hate cannot drive out hate, only love can do that', ' Dalai Lama', 'Pope John Paul II', ' Martin Luther King, Jr.');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for table quote-quiz.quizzes
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL DEFAULT '0',
  `duration` time NOT NULL DEFAULT '00:00:00',
  `player` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table quote-quiz.quizzes: ~9 rows (approximately)
/*!40000 ALTER TABLE `quizzes` DISABLE KEYS */;
INSERT IGNORE INTO `quizzes` (`id`, `score`, `duration`, `player`) VALUES
	(1, 3, '00:30:00', 'Rosen'),
	(2, 3, '00:00:50', 'Koko'),
	(3, 3, '00:01:00', '123'),
	(4, 1, '00:06:00', 'asd'),
	(5, 2, '01:32:00', 'Hris'),
	(6, 2, '00:01:59', 'Real'),
	(7, 4, '00:00:10', 'Ivancho'),
	(8, 9, '00:00:44', 'Hristian Kanev'),
	(9, 5, '00:00:17', 'Rosen'),
	(10, 8, '00:00:18', 'Petq');
/*!40000 ALTER TABLE `quizzes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

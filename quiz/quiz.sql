-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 04:51 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `category_id`) VALUES
(1, 'Where did India play its 1st one day international match?', 'Lords', 'Headingley', 'Taunton', 'The Oval', '2', 1),
(2, 'Who was the 1st ODI captain for India?\r\n', 'Ajit Wadekar ', 'Bishen Singh Bedi', 'Nawab Pataudi', 'Vinoo Mankad ', '1', 1),
(3, 'Who has made the Fastest Test century in Test Cricket ?\r\n\r\n\r\n\r\n', 'Sachin Tendulkar', ' Sahid Afridi', ' Virender Sehwag', 'Vivian Richards', '4', 1),
(4, 'Which Bowler had the Best figures in a Test Match ?\r\n\r\n\r\n\r\n\r\n', 'Muttiah Muralitharan', 'Bob Massie', 'Jim Laker', 'George Lohmann', '3', 1),
(5, 'Which team has the Largest successful run chase record in ODIs ?\r\n\r\n\r\n\r\n\r\n', 'England', 'South Africa', 'Australia', 'India', '2', 1),
(6, 'What does HTML stand for?\r\n\r\n	\r\n	\r\n	', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Highly Text Markup Language', '1', 2),
(7, 'Who is making the Web standards?\r\n\r\n	\r\n	\r\n	\r\n	\r\n', 'Microsoft', 'Google', 'The World Wide Web Consortium', 'Mozilla', '3', 2),
(8, 'What is the correct HTML for creating a hyperlink?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;a name=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a&gt;http://smarttutorials.net&lt;/a&gt;', '&lt;a url=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a href=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '4', 2),
(9, 'What is the HTML element to bold a text?\r\n\r\n\r\n\r\n\r\n', '&lt;b&gt;', '&lt;bold&gt;', '&lt;wide&gt;', '&lt;big&gt;', '1', 2),
(10, 'What is the HTML tag for a link?\r\n\r\n\r\n\r\n\r\n', '&lt;link&gt;', '&lt;ref&gt;', '&lt;a&gt;', '&lt;hper&gt;', '3', 2),
(11, 'What does CSS stand for?\r\n\r\n	\r\n	\r\n	\r\n	', 'Creative Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', '4', 4),
(12, 'Where in an HTML document is the correct place to refer to an external style sheet?\r\n\r\n	\r\n	\r\n	\r\n	', 'In the &lt;body&gt; section ', 'At the end of the document', 'At the top of the document', 'In the &lt;head&gt; section ', '4', 4),
(13, 'Which HTML tag is used to define an internal style sheet?\r\n\r\n	\r\n	\r\n	', '&lt;script&gt;', '&lt;css&gt;', '&lt;style&gt;', '&lt;link&gt;', '3', 4),
(14, 'Which is the correct CSS syntax?\r\n\r\n	\r\n	\r\n	\r\n	', 'body:color=black;', '{body;color:black;}', 'body {color: black;}', '{body:color=black;}', '3', 4),
(15, 'Which property is used to change the background color?\r\n\r\n	\r\n	\r\n	', 'background-color', 'color', 'bgcolor', 'bg-color', '1', 4),
(16, 'What does PHP stand for?\r\n\r\n	\r\n	\r\n	', ' PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Personal Home Page', 'Private Home Page', '1', 3),
(17, 'PHP server scripts are surrounded by delimiters, which?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;?php&gt;...&lt;/?&gt;', '&lt;?php ... ?&gt;', '&lt;script&gt;...&lt;/script&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '2', 3),
(18, 'How do you write \"Hello World\" in PHP\r\n\r\n	\r\n	\r\n	', '&quot;Hello World&quot;', 'echo &quot;Hello World&quot;', 'Document.Write(&quot;Hello World&quot;);', 'print_f(&quot;Hello World&quot;);', '2', 3),
(19, ' Which of the following is the way to create comments in PHP?\r\n\r\n\r\n	\r\n	\r\n	', '// commented code to end of line', '/* commented code here */', '# commented code to end of line', 'all of the above - correct', '4', 3),
(20, 'What is the correct way to end a PHP statement?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;/php&gt;', '.', ';', 'New line', '3', 3),
(21, 'abc3', '1', '3', '4', '5', '2', 2),
(22, 'who is the best player in football?', 'ronaldo', 'messi', 'neymar', 'thiga silva', 'b', 0),
(23, 'html hull form', 'hyper text', '1', '2', '3', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_users`
--

CREATE TABLE `quiz_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_users`
--

INSERT INTO `quiz_users` (`id`, `user_name`, `score`, `category_id`) VALUES
(109, 'abc', 1, 2),
(110, 'SRINU', 1, 1),
(111, 'SRINU', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_users`
--
ALTER TABLE `quiz_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quiz_users`
--
ALTER TABLE `quiz_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

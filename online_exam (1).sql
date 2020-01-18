-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 08:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(70) NOT NULL,
  `emai` varchar(70) NOT NULL,
  `m_num` varchar(70) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `emai`, `m_num`, `id`) VALUES
('Nitin Palehcha', 'nitinpalecha32@gmail.com', '8386817332', 8604);

-- --------------------------------------------------------

--
-- Table structure for table `esam`
--

CREATE TABLE `esam` (
  `e_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esam`
--

INSERT INTO `esam` (`e_id`, `subject`) VALUES
('104', 'C_PROGRAMMING'),
('105', 'JAVA'),
('102', 'PHP'),
('103', 'PYTHON');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_name` varchar(50) NOT NULL,
  `t_subject` varchar(50) NOT NULL,
  `m_number` varchar(50) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_name`, `t_subject`, `m_number`, `f_id`) VALUES
('nitin palecha', 'C Programming', '8386817332', 101),
('Zahid ', 'python', '8877669900', 102),
('Bhavin', 'C++', '9624850313', 103),
('RITESH', 'C++', '8386817332', 104),
('abc', 'java', '2111111111', 105);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` varchar(30) NOT NULL,
  `u_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `u_pass`) VALUES
('nitin123', '1234'),
('nitinpalecha', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `qus_bank`
--

CREATE TABLE `qus_bank` (
  `e_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `q_no` varchar(50) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `correct` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qus_bank`
--

INSERT INTO `qus_bank` (`e_id`, `subject`, `q_no`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
('102', 'PHP', '1', 'What does PHP stand for? i) Personal Home Page ii)', 'Both (i) and (ii)', 'Both (ii) and (iv)', 'Only (ii)', 'Both (i) and (iii)', 'Both (i) and (ii)'),
('102', 'PHP', '2', 'Who is the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', ' List Barely', 'Rasmus Lerdorf'),
('102', 'PHP', '3', 'PHP files have a default file extension of.', '.html', '.xml', '.php', '.ph', '.php'),
('102', 'PHP', '4', 'A PHP script should start with ___ and end with __', '< php >', '< ? php ?>', '< ? ? >', '< ?php ? >', '< ?php ? >'),
('102', 'PHP', '5', 'Which of the looping statements is/are supported b', '(i) and (ii)', '(i), (ii) and (iii)', 'All of the mentioned', 'None of the mentioned', 'All of the mentioned'),
('102', 'PHP', '6', 'Which of the following is/are a PHP code editor? d', 'Only (iv)', 'All of the mentioned.', '(i), (ii) and (iii)', 'Only (iii)', 'All of the mentioned.'),
('102', 'PHP', '7', 'Which of the following must be installed on your c', 'All of the mentioned', 'Only (ii)', '(ii) and (iii)', '(ii), (iii) and (iv)', '(ii), (iii) and (iv)'),
('102', 'PHP', '8', 'Which version of PHP introduced Try/catch Exceptio', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 'PHP 5'),
('102', 'PHP', '9', 'We can use ___ to comment a single line? i) /? ii)', 'Only (ii)', '(i), (iii) and (iv)', '(ii), (iii) and (iv)', 'Both (ii) and (iv)', '(ii), (iii) and (iv)'),
('102', 'PHP', '10', 'Which of the below symbols is a newline character?', '\r', '\n', '/n', '/r', '\n'),
('103', 'PYTHON', '1', 'What is the output of the following program :  print \"Hello World\"[::-1]', 'dlroW olleH', 'Hello Worl', 'd', 'Error', 'dlroW olleH'),
('103', 'PYTHON', '2', 'Given a function that does not return any value, what value is shown when executed at the shell?', 'None', 'int', 'bool', 'void', 'None'),
('103', 'PYTHON', '3', 'Which module in Python supports regular expressions?', 're', 'regex', 'pyregex', 'None of the above', 're'),
('103', 'PYTHON', '4', 'Which of the following is not a complex number?', 'k = 2 + 3j', 'k = complex(2, 3)', 'k = 2 + 3l', 'k = 2 + 3J', 'k = 2 + 3l'),
('103', 'PYTHON', '5', 'What does ~~~~~~5 evaluate to?', '+5', '-11', '+11', '-5', '+5'),
('103', 'PYTHON', '6', 'Given a string s = â€œWelcomeâ€, which of the following code is incorrect?', 'print s[0]', 'print s.lower()', 'print s.lower()', 'print s.strip()', 'print s.lower()'),
('103', 'PYTHON', '7', '________ is a simple but incomplete version of a function.', 'Stub', 'Function', 'A function developed using bottom-up approach', 'A function developed using top-down approach', 'Stub'),
('103', 'PYTHON', '8', 'To start Python from the command prompt, use the command ______', 'execute python', 'go python', 'python', 'run python', 'python'),
('103', 'PYTHON', '9', 'Which of the following is correct about Python?', 'It supports automatic garbage collection', 'It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java', 'Both of the above', 'None of the above', 'Both of the above'),
('103', 'PYTHON', '10', 'What is called when a function is defined inside a class?', 'Module', 'Class', 'Another Function', 'Method', 'Method'),
('104', 'C_PROGRAMMING', '1', 'The C language is.', 'A context sensitive language', 'A regular language', 'A context free language', 'A context language', 'A context sensitive language'),
('104', 'C_PROGRAMMING', '2', 'Which of the following best describes C language', 'C is a low level language', 'C is a high level language with features that support low level programming', 'C is a high level language', 'C is a very high level language', 'C is a high level language with features that support low level programming'),
('104', 'C_PROGRAMMING', '3', '#include <stdio.h> int main() {     int a[][3] = {1, 2, 3, 4, 5, 6};     int (*ptr)[3] = a;     printf(\"%d %d \", (*ptr)[1], (*ptr)[2]);     ++ptr;     printf(\"%d %dn\", (*ptr)[1], (*ptr)[2]);     return 0; }', '2 3 5 6', '2 3 4 5', '4 5 0 0', 'none of the above', '2 3 5 6'),
('104', 'C_PROGRAMMING', '4', 'Which of the following true about FILE *fp', 'FILE is a keyword in C for representing files and fp is a variable of FILE type.', 'FILE is a structure and fp is a pointer to the structure of FILE type', 'FILE is a stream', 'FILE is a buffered stream', 'FILE is a structure and fp is a pointer to the structure of FILE type'),
('104', 'C_PROGRAMMING', '5', 'When fopen() is not able to open a file, it returns', 'EOF', 'NULL', 'Runtime Error', 'Compiler Dependent', 'NULL'),
('104', 'C_PROGRAMMING', '6', 'As per C language standard, which of the followings is/are not keyword(s)? Pick the best statement. auto make main sizeof elseif', 'None of the above is keywords in C.', 'NULL', 'Runtime Error', 'Compiler Dependent', 'NULL'),
('104', 'C_PROGRAMMING', '7', 'getc() returns EOF when', 'End of files is reached', 'When getc() fails to read a character', 'Both of the above', 'None of the above', 'Both of the above'),
('104', 'C_PROGRAMMING', '8', 'In fopen(), the open mode \"wx\" is sometimes preferred \"w\" because. 1) Use of wx is more efficient. 2) If w is used, old contents of file are erased and a new empty file is created. When wx is used, fopen() returns NULL if file already exists.', 'Only 1', 'Only 2', 'Both 1 and 2', 'Neither 1 nor 2', 'Only 2'),
('104', 'C_PROGRAMMING', '9', 'Heap allocation is required for languages', 'that support recursion', 'that support dynamic data structures', 'that use dynamic scope rules', 'none of the above', 'that support dynamic data structures'),
('104', 'C_PROGRAMMING', '10', 'Which of the following has the compilation error in C?', 'int n = 17;', 'char c = 99;', 'float f = (float)99.32', '#include', '#include');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `class` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `per` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `s_id`, `cor`, `class`, `sem`, `marks`, `subject`, `per`) VALUES
(8, '1011', '4', 'M.C.A', '3rd', 40, 'PHP', '40'),
(16, '1012', '6', 'M.COM', '3rd', 60, 'PYTHON', '60');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `s_name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `s_class` varchar(50) NOT NULL,
  `s_sem` varchar(50) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`s_name`, `f_name`, `s_class`, `s_sem`, `s_id`) VALUES
('nitin', 'c.p', 'M.C.A', '3rd', 1008),
('Kuldeep Samar', 'Bhagawati Samar', 'B.C.A', '2nd', 1009),
('Bhavesh Sharma', 'Ramesh Sharma', 'M.C.A', '2nd', 1010),
('zahid', 'abc', 'M.C.A', '3rd', 1011),
('jeet', 'jeet papa', 'M.COM', '3rd', 1012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esam`
--
ALTER TABLE `esam`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8605;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

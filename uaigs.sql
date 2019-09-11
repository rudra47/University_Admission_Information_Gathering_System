-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 09:25 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaigs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `discription` text NOT NULL,
  `roll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `name`, `age`, `dateOfBirth`, `gender`, `email`, `phone`, `username`, `password`, `discription`, `roll_id`) VALUES
(6, 'Nayem Islam', 21, '1/1/1995', 'Male', 'nayem@gmail.com', '0123457861', 'nayem1', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 2),
(7, 'Soru Vau', 24, '24', 'Male', 'sohrwardi@gmail.com', '0178945612', 'soru1', 'e10adc3949ba59abbe56e057f20f883e', '  author  ', 3),
(8, 'Rudra Sen', 22, '27-12-1995', 'Male', 'rudra@gmail.com', '01738201055', 'rudra1', 'c4ca4238a0b923820dcc509a6f75849b', 'hello gdfjah agfjdah gyufhhda', 1),
(9, 'Asadur Zaman', 25, '14-11-1994', 'Male', 'asadur.diu33@gmail.com', '01741640233', 'Asadur', 'c4ca4238a0b923820dcc509a6f75849b', 'Hi i am Asadur ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminroll`
--

CREATE TABLE `adminroll` (
  `roll_id` int(11) NOT NULL,
  `roll_name` varchar(100) DEFAULT NULL,
  `roll_decription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminroll`
--

INSERT INTO `adminroll` (`roll_id`, `roll_name`, `roll_decription`) VALUES
(1, 'Super Admin', ''),
(2, 'Admin\r\n', ''),
(3, 'Author', ''),
(4, 'Editor', '');

-- --------------------------------------------------------

--
-- Table structure for table `arts_requirments`
--

CREATE TABLE `arts_requirments` (
  `arts_id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `hsc_result` varchar(10) DEFAULT NULL,
  `hsc_out_res` varchar(10) DEFAULT NULL,
  `ssc_res` varchar(10) DEFAULT NULL,
  `ssc_out_res` varchar(10) DEFAULT NULL,
  `hsc_ssc_total` varchar(10) DEFAULT NULL,
  `hsc_ssc_out_res` varchar(10) DEFAULT NULL,
  `ssc_year` int(11) DEFAULT NULL,
  `hsc_year` int(11) DEFAULT NULL,
  `unit_name` varchar(10) DEFAULT NULL,
  `unit_subject` varchar(10) NOT NULL,
  `hsc_bangla` varchar(10) DEFAULT NULL,
  `hsc_english` varchar(10) DEFAULT NULL,
  `hsc_ict` varchar(10) DEFAULT NULL,
  `hsc_arts_etihas` varchar(10) DEFAULT NULL,
  `hsc_arts_pouronity` varchar(10) DEFAULT NULL,
  `hsc_arts_SoScience` varchar(10) DEFAULT NULL,
  `hsc_arts_sowork` varchar(10) DEFAULT NULL,
  `hsc_arts_economy` varchar(10) DEFAULT NULL,
  `hsc_arts_juktibidda` varchar(10) DEFAULT NULL,
  `hsc_arts_isletihas` varchar(10) DEFAULT NULL,
  `hsc_arts_islstudy` varchar(10) DEFAULT NULL,
  `subject_total` varchar(10) NOT NULL,
  `up_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arts_requirments`
--

INSERT INTO `arts_requirments` (`arts_id`, `uni_id`, `hsc_result`, `hsc_out_res`, `ssc_res`, `ssc_out_res`, `hsc_ssc_total`, `hsc_ssc_out_res`, `ssc_year`, `hsc_year`, `unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_arts_etihas`, `hsc_arts_pouronity`, `hsc_arts_SoScience`, `hsc_arts_sowork`, `hsc_arts_economy`, `hsc_arts_juktibidda`, `hsc_arts_isletihas`, `hsc_arts_islstudy`, `subject_total`, `up_time`) VALUES
(1, 9, '3.0', '2.50', '3.0', '2.50', '6.0', NULL, 2015, 2017, 'D', 'kjdhcvdj a', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', 'NULL', 'NULL', 'NULL', '0', 0),
(2, 9, '2.50', '3.00', '2.50', '2.25', '5.00', NULL, 2015, 2017, 'A', 'kjdhcvdj a', '2.25', '2.25', '2.25', '2.25', '2.25', '2.25', '2.25', '2.25', '2.25', 'NULL', 'NULL', '0', 0),
(3, 8, '2.50', '2.25', '3.00', '2.75', '5.50', '5.50', 2015, 2017, 'A', 'kjdhcvdj a', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', 'NULL', 'NULL', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comm_requirements`
--

CREATE TABLE `comm_requirements` (
  `comm_id` int(10) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `hsc_res` varchar(10) NOT NULL,
  `hsc_out_res` varchar(10) NOT NULL,
  `ssc_res` varchar(10) NOT NULL,
  `ssc_out_res` varchar(10) NOT NULL,
  `ssc_hsc_total_res` varchar(10) NOT NULL,
  `ssc_hsc_total_out_res` varchar(10) NOT NULL,
  `hsc_year` varchar(10) NOT NULL,
  `ssc_year` varchar(10) NOT NULL,
  `unit_name` varchar(10) NOT NULL,
  `unit_subject` varchar(10) NOT NULL,
  `hsc_bangla` varchar(10) NOT NULL,
  `hsc_english` varchar(10) NOT NULL,
  `hsc_ict` varchar(10) NOT NULL,
  `hsc_buss_bebosthapona` varchar(10) NOT NULL,
  `hsc_buss_accounting` varchar(10) NOT NULL,
  `hsc_buss_finance` varchar(10) NOT NULL,
  `hsc_buss_biponon` varchar(10) NOT NULL,
  `hsc_buss_islam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comm_requirements`
--

INSERT INTO `comm_requirements` (`comm_id`, `uni_id`, `hsc_res`, `hsc_out_res`, `ssc_res`, `ssc_out_res`, `ssc_hsc_total_res`, `ssc_hsc_total_out_res`, `hsc_year`, `ssc_year`, `unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_buss_bebosthapona`, `hsc_buss_accounting`, `hsc_buss_finance`, `hsc_buss_biponon`, `hsc_buss_islam`) VALUES
(4, 8, '3.00', '2.50', '3.50', '3.00', '6.00', '', '2016', '2014', 'B', 'ayutfa akj', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50', '2.50');

-- --------------------------------------------------------

--
-- Table structure for table `contuct_us`
--

CREATE TABLE `contuct_us` (
  `conus_id` int(11) NOT NULL,
  `conus_name` varchar(50) NOT NULL,
  `conus_email` int(50) NOT NULL,
  `conus_massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contuct_us`
--

INSERT INTO `contuct_us` (`conus_id`, `conus_name`, `conus_email`, `conus_massage`) VALUES
(1, 'Rudra Sen', 0, ' hdhbdb d'),
(2, 'Rudra Sen', 0, ' dvfsghfnnh fjfjfh'),
(3, 'Rudra Sen', 0, ''),
(4, 'Mamun', 0, 'hello  ');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `not_id` int(20) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `not_notice` text NOT NULL,
  `not_description` text NOT NULL,
  `not_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`not_id`, `uni_id`, `not_notice`, `not_description`, `not_path`) VALUES
(1, 1, 'BUTEX A unit result published ', 'dhaka univarsity A unit result published  ', 'file-1511931339-27ce19eaa38806a5eb2035f1f2a98e09.'),
(2, 2, 'Buet', 'kjhgfkjshvg klsj;sgusligjmo;s oigjf kvnh;ji dfvnds lvk dfhbdnibvsfvnuivhfivnfvf', 'file-1511936047-e3a4319bc10063852c504b5613965892.'),
(3, 12, 'Dhaka University \'KA\' unit addmission notice', '', '1513227573.pdf'),
(4, 2, 'Notice for Undergraduate Admission steps into BUET', '', 'Notice_291017.pdf'),
(5, 4, 'CUET List of Admitted Students and their Obtained Department according to Merit (Merit Position:1-3800)', '', 'Admitted_List_1_3800_21_12_2017.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `science_requirement`
--

CREATE TABLE `science_requirement` (
  `science_id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `hsc_result` varchar(6) NOT NULL,
  `hsc_out_res` varchar(6) DEFAULT NULL,
  `ssc_res` varchar(6) DEFAULT NULL,
  `ssc_out_res` varchar(6) DEFAULT NULL,
  `hsc_ssc_total` varchar(6) DEFAULT NULL,
  `hsc_ssc_out_res` varchar(6) DEFAULT NULL,
  `ssc_year` int(11) NOT NULL,
  `hsc_year` int(11) NOT NULL,
  `unit_name` varchar(5) NOT NULL,
  `unit_subject` text NOT NULL,
  `hsc_bangla` varchar(10) DEFAULT NULL,
  `hsc_english` varchar(10) DEFAULT NULL,
  `hsc_ict` varchar(10) DEFAULT NULL,
  `hsc_chemistry` varchar(10) DEFAULT NULL,
  `hsc_physics` varchar(10) DEFAULT NULL,
  `hsc_math` varchar(10) DEFAULT NULL,
  `hsc_biology` varchar(10) DEFAULT NULL,
  `hsc_comp` varchar(10) DEFAULT NULL,
  `subject_total` varchar(6) NOT NULL,
  `up_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `science_requirement`
--

INSERT INTO `science_requirement` (`science_id`, `uni_id`, `hsc_result`, `hsc_out_res`, `ssc_res`, `ssc_out_res`, `hsc_ssc_total`, `hsc_ssc_out_res`, `ssc_year`, `hsc_year`, `unit_name`, `unit_subject`, `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_chemistry`, `hsc_physics`, `hsc_math`, `hsc_biology`, `hsc_comp`, `subject_total`, `up_time`) VALUES
(4, 12, '3.0', '3.0', '3.5', '3.0', '8.0', '7.0', 2014, 2016, 'A', 'CSE, EEE, ETE', '3.0', '3.0', '3.0', '3.0', '3.0', '3.0', '', '3.0', '', 0),
(5, 12, '3.5', '3.0', '3.5', '3.0', '8', '', 2014, 2016, 'D', 'Biology, Law', '4.0', '3.0', '3.0', '3.0', '3.0', '3.0', '3.0', '', '', 0),
(7, 12, '3.0', '2.5', '3.0', '2.5', '10', '', 2014, 2017, 'F', 'Sculpture , Crafts, History ', '0', '0', '0', '0', '0', '0', '3.0', '', '', 0),
(8, 1, '4.5', '4.5', '4.5', '', '8.0', '', 2014, 2016, 'Texti', '01. B. Sc. in Textile Engineering (Yarn)       02. B. Sc. in Textile Engineering (Fabric)       03. B. Sc. in Textile Engineering (Wet Process)       04. B. Sc. in Textile Engineering (Apparel)', '', '4.00', '', '5.00', '5.00', '5.00', '', '', '', 0),
(9, 11, '3.00', '', '3.00', '', '', '7.00', 2013, 2016, 'C', 'Unit C : Business administration, Economic, Bangla, Social work, 		     English, Public administration, History and Bangladesh Studies ', '', '', '', '', '', '', '', '', '', 0),
(10, 3, '4.00', '', '4.00', '', '9.00', '', 2013, 2016, 'Engin', 'Civil Engineering  130 seats Computer Science and Engineering- 130 seats Electrical and Electronic Engineering-, 130 seats Electronics and Telecommunication Engineering- 30 seats  Mechanical Engineering-, 30 seats Petroleum and Mining Engineering -30 seats Civil and water Resources Engineering, 30 seats Mechatronics  Industrial Engineering- 30 seats Architecture -30 seats Urban and Regional Planning- 30 seats', '', '', '', '4.00', '4.00', '4.00', '4.00', '', '', 0),
(11, 13, '3.00', '', '3.00', '', '7.00', '', 2013, 2013, 'A', '1.Computer science and engineering  60        2.Electrical and Electronics Engineering.  60   	  3.Applied Physics and Communication Engineering   50        4. Applied chemistry and chemical engineering  60', '', '', '', '', '', '', '', '', '', 0),
(12, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2016, '  B', 'Chemistry    70 seats Physics   95 seats Environmental Science & Disaster Management  195 seats', '', '', '', '', '', '', '', '', '', 0),
(13, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2016, 'C', 'Pharmacy  50 seats     Biotechnology  and Genetic engineering   80 seats     Bio chemistry and Molecular Engineering   80 seats', '', '', '', '', '', '', '', '', '', 0),
(14, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2017, 'D', 'English 10 seats      Benglai 15 seats', '', '', '', '', '', '', '', '', '', 0),
(15, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2017, 'E', '      Social Science  100 All group combined      Public Administration 90  All group combined      International Relation 100  All group combined       Economics 30', '', '', '', '', '', '', '', '', '', 0),
(16, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2016, 'F', 'Management studies 15 seats     Accounting Information System  15 seats     Marketing:  22 seats', '', '', '', '', '', '', '', '', '', 0),
(17, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2016, 'G', 'Law: 100 all group combined', '', '', '', '', '', '', '', '', '', 0),
(18, 13, '3.00', '', '3.00', '', '6.5', '', 2013, 2017, 'H', 'Agriculture  195  all group combined', '', '', '', '', '', '', '', '', '', 0),
(20, 3, '3.00', '', '3.00', '', '7.00', '', 2014, 2016, 'Food', 'Veterinary  medicine 91 seats         Food science and technology 71 seats         Fisheries   56 seats', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_group`
--

CREATE TABLE `student_group` (
  `group_id` int(11) NOT NULL,
  `hsc_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_group`
--

INSERT INTO `student_group` (`group_id`, `hsc_group`) VALUES
(1, 'Science'),
(2, 'Arts'),
(3, 'Commers');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_email` varchar(50) NOT NULL,
  `stu_father` varchar(50) NOT NULL,
  `stu_mother` varchar(50) NOT NULL,
  `stu_school` varchar(100) NOT NULL,
  `stu_college` varchar(100) NOT NULL,
  `stu_username` varchar(10) NOT NULL,
  `group_id` int(11) NOT NULL,
  `stu_password` varchar(40) NOT NULL,
  `stu_gender` varchar(10) NOT NULL,
  `stu_photo` varchar(150) DEFAULT NULL,
  `hsc_regno` varchar(20) DEFAULT NULL,
  `hsc_roll` varchar(20) DEFAULT NULL,
  `hsc_total_gpa` varchar(6) DEFAULT NULL,
  `out_fourth_gpa` varchar(6) DEFAULT NULL,
  `ssc_gpa` varchar(6) DEFAULT NULL,
  `ssc_out_gpa` varchar(6) DEFAULT NULL,
  `ssc_hsc_gpa` varchar(6) NOT NULL DEFAULT '0',
  `hsc_bangla` varchar(6) DEFAULT NULL,
  `hsc_english` varchar(6) DEFAULT NULL,
  `hsc_chem` varchar(6) DEFAULT NULL,
  `hsc_phy` varchar(6) DEFAULT NULL,
  `hsc_math` varchar(6) DEFAULT NULL,
  `hsc_bio` varchar(6) DEFAULT NULL,
  `hsc_computer` varchar(6) DEFAULT NULL,
  `hsc_his` varchar(6) DEFAULT NULL,
  `hsc_pouroniti` varchar(6) DEFAULT NULL,
  `hsc_SoScience` varchar(6) DEFAULT NULL,
  `hsc_SoWork` varchar(6) DEFAULT NULL,
  `hsc_eco` varchar(6) DEFAULT NULL,
  `hsc_logic` varchar(6) DEFAULT NULL,
  `hsc_IsHis` varchar(6) DEFAULT NULL,
  `hsc_IsStudy` varchar(6) DEFAULT NULL,
  `com_bebosa` varchar(6) DEFAULT NULL,
  `com_accounting` varchar(6) DEFAULT NULL,
  `com_finance` varchar(6) DEFAULT NULL,
  `com_production` varchar(6) DEFAULT NULL,
  `com_islam` varchar(6) DEFAULT NULL,
  `hsc_ict` varchar(6) DEFAULT NULL,
  `hsc_year` int(11) DEFAULT NULL,
  `ssc_year` int(11) NOT NULL,
  `stu_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stu_id`, `stu_name`, `stu_email`, `stu_father`, `stu_mother`, `stu_school`, `stu_college`, `stu_username`, `group_id`, `stu_password`, `stu_gender`, `stu_photo`, `hsc_regno`, `hsc_roll`, `hsc_total_gpa`, `out_fourth_gpa`, `ssc_gpa`, `ssc_out_gpa`, `ssc_hsc_gpa`, `hsc_bangla`, `hsc_english`, `hsc_chem`, `hsc_phy`, `hsc_math`, `hsc_bio`, `hsc_computer`, `hsc_his`, `hsc_pouroniti`, `hsc_SoScience`, `hsc_SoWork`, `hsc_eco`, `hsc_logic`, `hsc_IsHis`, `hsc_IsStudy`, `com_bebosa`, `com_accounting`, `com_finance`, `com_production`, `com_islam`, `hsc_ict`, `hsc_year`, `ssc_year`, `stu_time`) VALUES
(1, 'Ethereal World', 'rudra@gmail.com', 'Noni Gopal Sen', 'Runu Rani Das', 'Panchagarh BP Govt High School', 'Kholahati Cant. Public School and College', 'rudra1', 1, 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'student-1514136820-adc89400575a3d45bd7311434f3b1c76.jpg', '123', '654321', '4.50', '4.00', '4.75', '4.30', '9.25', '4.00', '4.50', '3.50', '3.50', '3.50', '', '3.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '4.5', 2017, 2015, '0000-00-00 00:00:00'),
(2, 'Asadur Zaman', 'asad@gmail.com', '', '', '', '', '', 2, 'c4ca4238a0b923820dcc509a6f75849b', 'male', '0', '7410', '54321', '5.00', '4.50', '2.50', '2.25', '9.03', '5.00', '5.00', '', '', '', '', '', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', '0', '0', '', '', '', '', '', '5.00', 2017, 2015, '0000-00-00 00:00:00'),
(15, 'Soru', 'soru@gmail.com', '', '', '', '', '', 1, 'c4ca4238a0b923820dcc509a6f75849b', 'female', '0', '123654', '12345678', '4.00', '3.50', '2.50', '2.25', '6.50', '3.50', '3.50', '3.50', '3.50', '3.65', '', '4.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '5.00', 2017, 2015, '0000-00-00 00:00:00'),
(18, 'Naim Islam', 'naim@gmail.com', '', '', '', '', '', 1, 'c4ca4238a0b923820dcc509a6f75849b', 'female', '0', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '0000-00-00 00:00:00'),
(19, 'Sanjib', 'sanju@gmail.com', '', '', '', '', '', 3, 'c4ca4238a0b923820dcc509a6f75849b', 'male', '0', '852741', '741852', '5.00', '4.50', '4.00', '3.50', '9.00', '5.00', '5.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', 2017, 2014, '0000-00-00 00:00:00'),
(20, 'Asadur Zaman', 'asadur31@gmail.com', 'Abdus Sattar', 'Tajkera BEgum', 'Bishwanathpur High school and college', 'Bishwanathpur High school and college', 'Asadur31', 1, 'c4ca4238a0b923820dcc509a6f75849b', 'male', NULL, '107884', '117848', '5.00', '4.63', '4.60', '4.00', '9.6', '4.00', '4.00', '4.00', '5.00', '5.00', '4.00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4.5', 2016, 2014, '0000-00-00 00:00:00'),
(24, 'Rudra Sen', 'asd@gmail.com', '', '', '', '', '', 1, 'c4ca4238a0b923820dcc509a6f75849b', '1', 'student-1514225119-518bab842cd9fe961babcfcb04457dae.', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `universitycategory`
--

CREATE TABLE `universitycategory` (
  `uniCat_id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitycategory`
--

INSERT INTO `universitycategory` (`uniCat_id`, `categoryName`) VALUES
(1, 'Engineering'),
(2, 'University '),
(3, 'Science and Technology '),
(4, 'Agricultural'),
(5, 'Islamic');

-- --------------------------------------------------------

--
-- Table structure for table `uniwebsitelink`
--

CREATE TABLE `uniwebsitelink` (
  `uni_id` int(11) NOT NULL,
  `uniCat_id` int(11) NOT NULL,
  `university_name` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniwebsitelink`
--

INSERT INTO `uniwebsitelink` (`uni_id`, `uniCat_id`, `university_name`, `link`, `file`) VALUES
(1, 1, 'Bangladesh University of Textiles (BUTEX)', 'http://www.butex.edu.bd/', 'user-1505021787-52376.jpg'),
(2, 1, 'Bangladesh University of Engineering and Technology', 'http://www.buet.ac.bd/', 'user-1505021918-98354.jpg'),
(3, 1, 'Chittagong University of Engineering & Technology', 'http://www.cuet.ac.bd/', 'user-1505021994-12774.png'),
(4, 1, 'Khulna University of Engineering & Technology', 'http://www.kuet.ac.bd/', 'user-1505022069-18346.png'),
(5, 1, 'Rajshahi University of Engineering & Technology', 'http://www.ruet.ac.bd/', 'user-1505022132-53099.png'),
(6, 5, 'Islamic University of Technology (IUT)', 'http://www.iutoic-dhaka.edu/', 'user-1505022432-57545.png'),
(7, 5, 'Islamic Arabic University', 'http://iau.edu.bd/', 'user-1505022541-57509.png'),
(8, 4, 'Sher-e-Bangla Agricultural University', 'http://sau.edu.bd/', 'user-1505022701-62727.jpg'),
(9, 4, 'Bangladesh Agricultural University', 'http://www.bau.edu.bd/', 'user-1505022837-21735.png'),
(10, 3, 'Jessore University of Science & Technology', 'http://just.edu.bd/', 'user-1505023045-97561.jpg'),
(11, 3, 'Pabna University of Science & Technology', 'http://www.pust.ac.bd/', 'user-1505023165-95607.jpg'),
(12, 2, 'University of Dhaka (DU)', 'http://www.du.ac.bd/', 'user-1505123853-71369.jpg'),
(13, 3, 'Bangabandhu Sheikh Mujibur Rahman Science & Technology University, Gopalganj', 'https://www.bsmrstu.edu.bd/b/index.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_hsc_result`
--

CREATE TABLE `user_hsc_result` (
  `hsc_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `hsc_regId` varchar(20) NOT NULL,
  `hsc_roll` varchar(20) NOT NULL,
  `board_id` int(11) NOT NULL,
  `hsc_year` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `total_gpa` varchar(10) NOT NULL,
  `out_forthsubGpa` varchar(10) NOT NULL,
  `hsc_bangla` varchar(11) NOT NULL,
  `hsc_english` varchar(11) NOT NULL,
  `hsc_ict` varchar(11) NOT NULL,
  `hsc_chemistry` varchar(11) NOT NULL,
  `hsc_physics` varchar(11) NOT NULL,
  `hsc_math` varchar(11) NOT NULL,
  `hsc_biology` varchar(11) NOT NULL,
  `hsc_comp` varchar(6) NOT NULL,
  `hsc_arts_History` varchar(11) NOT NULL,
  `hsc_arts_Municipality` varchar(11) NOT NULL,
  `hsc_arts_SoScience` varchar(11) NOT NULL,
  `hsc_arts_SoWork` varchar(11) NOT NULL,
  `hsc_arts_Economy` varchar(11) NOT NULL,
  `hsc_arts_jukti` varchar(11) NOT NULL,
  `hsc_arts_islEtihas` varchar(11) NOT NULL,
  `hsc_arts_islStudy` varchar(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_hsc_result`
--

INSERT INTO `user_hsc_result` (`hsc_id`, `user_name`, `hsc_regId`, `hsc_roll`, `board_id`, `hsc_year`, `group_id`, `gender`, `total_gpa`, `out_forthsubGpa`, `hsc_bangla`, `hsc_english`, `hsc_ict`, `hsc_chemistry`, `hsc_physics`, `hsc_math`, `hsc_biology`, `hsc_comp`, `hsc_arts_History`, `hsc_arts_Municipality`, `hsc_arts_SoScience`, `hsc_arts_SoWork`, `hsc_arts_Economy`, `hsc_arts_jukti`, `hsc_arts_islEtihas`, `hsc_arts_islStudy`, `time`) VALUES
(1, 'Rudra', '12101', '14101', 1, 2017, 1, 'Male', '4.93', '4.75', '5.00', '5.00', '5.00', '4.50', '4.75', '5.00', '5.00', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'Soru', '12102', '15101', 1, 2015, 2, 'Male', '5.00', '5.00', '5.00', '5.00', '5.00', '', '', '', '', '', '5.00', '', '5.00', '', '5.00', '', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `adminroll`
--
ALTER TABLE `adminroll`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indexes for table `arts_requirments`
--
ALTER TABLE `arts_requirments`
  ADD PRIMARY KEY (`arts_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `comm_requirements`
--
ALTER TABLE `comm_requirements`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `contuct_us`
--
ALTER TABLE `contuct_us`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`not_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `science_requirement`
--
ALTER TABLE `science_requirement`
  ADD PRIMARY KEY (`science_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `student_group`
--
ALTER TABLE `student_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `stu_email` (`stu_email`),
  ADD UNIQUE KEY `hsc_roll` (`hsc_roll`),
  ADD UNIQUE KEY `hsc_regno` (`hsc_regno`),
  ADD KEY `hsc_group` (`group_id`);

--
-- Indexes for table `universitycategory`
--
ALTER TABLE `universitycategory`
  ADD PRIMARY KEY (`uniCat_id`);

--
-- Indexes for table `uniwebsitelink`
--
ALTER TABLE `uniwebsitelink`
  ADD PRIMARY KEY (`uni_id`),
  ADD KEY `uniCat_id` (`uniCat_id`);

--
-- Indexes for table `user_hsc_result`
--
ALTER TABLE `user_hsc_result`
  ADD PRIMARY KEY (`hsc_id`),
  ADD UNIQUE KEY `hsc_regId` (`hsc_regId`),
  ADD KEY `board_id` (`board_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminroll`
--
ALTER TABLE `adminroll`
  MODIFY `roll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `arts_requirments`
--
ALTER TABLE `arts_requirments`
  MODIFY `arts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comm_requirements`
--
ALTER TABLE `comm_requirements`
  MODIFY `comm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contuct_us`
--
ALTER TABLE `contuct_us`
  MODIFY `conus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `not_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `science_requirement`
--
ALTER TABLE `science_requirement`
  MODIFY `science_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student_group`
--
ALTER TABLE `student_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `universitycategory`
--
ALTER TABLE `universitycategory`
  MODIFY `uniCat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uniwebsitelink`
--
ALTER TABLE `uniwebsitelink`
  MODIFY `uni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_hsc_result`
--
ALTER TABLE `user_hsc_result`
  MODIFY `hsc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arts_requirments`
--
ALTER TABLE `arts_requirments`
  ADD CONSTRAINT `arts_requirments_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `uniwebsitelink` (`uni_id`);

--
-- Constraints for table `comm_requirements`
--
ALTER TABLE `comm_requirements`
  ADD CONSTRAINT `comm_requirements_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `uniwebsitelink` (`uni_id`);

--
-- Constraints for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD CONSTRAINT `notice_board_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `uniwebsitelink` (`uni_id`);

--
-- Constraints for table `science_requirement`
--
ALTER TABLE `science_requirement`
  ADD CONSTRAINT `science_requirement_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `uniwebsitelink` (`uni_id`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `student_group` (`group_id`);

--
-- Constraints for table `uniwebsitelink`
--
ALTER TABLE `uniwebsitelink`
  ADD CONSTRAINT `uniwebsitelink_ibfk_2` FOREIGN KEY (`uniCat_id`) REFERENCES `universitycategory` (`uniCat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

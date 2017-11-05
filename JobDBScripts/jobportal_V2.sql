-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 06:15 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Accounting'),
(2, 'Admin - Clerical'),
(3, 'Automotive'),
(4, 'Banking'),
(5, 'Construction'),
(6, 'Customer Service'),
(7, 'Design'),
(8, 'Distribution - Shipping'),
(9, 'Education'),
(10, 'Engineering'),
(11, 'Executive'),
(12, 'Finance'),
(13, 'General Business'),
(14, 'General Labor'),
(15, 'Health Care'),
(16, 'Hospitality - Hotel'),
(17, 'Human Resources'),
(18, 'Information Technology'),
(19, 'Installation - Maint - Repair'),
(20, 'Insurance'),
(21, 'Legal'),
(22, 'Legal Admin'),
(23, 'Management'),
(24, 'Manufacturing'),
(25, 'Marketing'),
(26, 'Media - Journalism  Photography'),
(27, 'Nonprofit - Social Services'),
(28, 'Nurse'),
(29, 'Pharmaceutical'),
(30, 'Purchasing - Procurement'),
(31, 'QA - Quality Control'),
(32, 'Real Estate'),
(33, 'Research'),
(34, 'Restaurant - Food Service'),
(35, 'Retail'),
(36, 'Sales'),
(37, 'Science'),
(38, 'Skilled Labor - Trades'),
(39, 'Transportation'),
(40, 'Veterinary Services'),
(41, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salary` double NOT NULL,
  `location` varchar(100) NOT NULL,
  `pdate` date NOT NULL,
  `edate` date NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cwebsite` varchar(200) NOT NULL,
  `cdescription` mediumtext NOT NULL,
  `clogo` varchar(500) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `applicationlink` varchar(500) NOT NULL,
  `jobimage` varchar(500) NOT NULL,
  `jobtags` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `key` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `nego` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `sub_id` int(11) NOT NULL ,
  `sub_name` varchar(500) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `sub_name`, `cat_id`) VALUES
(1, 'Accountant', 1),
(2, 'Account Clerk', 1),
(3, 'Accounting Assistant', 1),
(4, 'Auditor', 1),
(5, 'Banking Analyst', 1),
(6, 'Biller ', 1),
(7, 'Book Keeper', 1),
(8, 'Clerk', 1),
(9, 'Cost Accountant', 1),
(10, 'Data Collector', 1),
(11, 'Finance Assistant', 1),
(12, 'Financial Accountant', 1),
(13, 'Fund Accountant', 1),
(14, 'Internal Auditor', 1),
(15, 'IT Auditor', 1),
(16, 'Payment Processor', 1),
(17, 'Public Accountant', 1),
(18, 'Senior Accountant', 1),
(19, 'Tax Accountant', 1),
(20, 'Administration Assistant', 2),
(21, 'Administrative Coordinator', 2),
(22, 'Billing Manager', 2),
(23, 'Call Center Supervisor', 2),
(24, 'Computer Operator', 2),
(25, 'Coordinator', 2),
(26, 'Customer Service Manager', 2),
(27, 'Customer Service Supervisor', 2),
(28, 'Data Entry Clerk', 2),
(29, 'Executive Assistant', 2),
(30, 'File Clerk', 2),
(31, 'Front Desk Receptionist', 2),
(32, 'Mail Clerk', 2),
(33, 'Office Administrator', 2),
(34, 'Office Assistant', 2),
(35, 'Office Clerk', 2),
(36, 'Office Coordinator', 2),
(37, 'Office Manager', 2),
(38, 'Production Planner', 2),
(39, 'Secretar', 2),
(40, 'Automobile Mechanic', 3),
(41, 'Automobile Technician', 3),
(42, 'Automotive Mechanic', 3),
(43, 'Automotive Service Advisor', 3),
(44, 'Automotive Technician', 3),
(45, 'Auto Painter', 3),
(46, 'Auto Technician', 3),
(47, 'Diesel Technician', 3),
(48, 'Emission Specialist', 3),
(49, 'Bank Consultant   ', 4),
(50, 'Bank Officer   ', 4),
(51, 'Bank Teller   ', 4),
(52, 'Commercial Loan Officer   ', 4),
(53, 'Consumer Loan Officer   ', 4),
(54, 'Credit Counselor   ', 4),
(55, 'Financial Aid Counselor   ', 4),
(56, 'Financial Counselor   ', 4),
(57, 'Loan Administrator   ', 4),
(58, 'Loan Assistant   ', 4),
(59, 'Loan Auditor   ', 4),
(60, 'Personal Banker   ', 4),
(61, 'Post Closer   ', 4),
(62, 'Prime Broker   ', 4),
(63, 'Teller   ', 4),
(64, 'Other', 4),
(65, 'Builder', 5),
(66, 'Carpenter ', 5),
(67, 'Connector ', 5),
(68, 'Construction Manager   ', 5),
(69, 'Construction Project Manager   ', 5),
(70, 'Contractor', 5),
(71, 'Copper', 5),
(72, 'Electrician', 5),
(73, 'Equipment Operator   ', 5),
(74, 'Heavy Equipment Operator   ', 5),
(75, 'Home Inspector   ', 5),
(76, 'Installer ', 5),
(77, 'Ironworker', 5),
(78, 'Laborer ', 5),
(79, 'Mason', 5),
(80, 'Master Electrician   ', 5),
(81, 'Miner ', 5),
(82, 'Painter ', 5),
(83, 'Pipe Fitter   ', 5),
(84, 'Piper', 5),
(85, 'Pipe Welder   ', 5),
(86, 'Plumber', 5),
(87, 'Project Coordinator   ', 5),
(88, 'Project Manager   ', 5),
(89, 'Shooter', 5),
(90, 'Site Manager   ', 5),
(91, 'Sprinkler', 5),
(92, 'Superintendent  ', 5),
(93, 'Tinker  ', 5),
(94, 'Call Center Agent   ', 6),
(95, 'Customer Agent   ', 6),
(96, 'Financial Coordinator   ', 6),
(97, 'HR Associate   ', 6),
(98, 'Information Operator   ', 6),
(99, 'Service Advisor   ', 6),
(100, 'Service Provider   ', 6),
(101, 'Telemarketer', 6),
(102, 'Telephone Operator   ', 6),
(103, 'Advertising Designer ', 7),
(104, 'Architect', 7),
(105, 'Computer Graphic Designer   ', 7),
(106, 'Creative Designer   ', 7),
(107, 'Digital Artist   ', 7),
(108, 'Forms Designer   ', 7),
(109, 'Furniture Designer   ', 7),
(110, 'Home Designer   ', 7),
(111, 'Landscape Architect   ', 7),
(112, 'Multimedia Designer   ', 7),
(113, 'Package Designer   ', 7),
(114, 'Visualizer ', 7),
(115, 'Web/Graphic Designer   ', 7),
(116, 'Carrier', 8),
(117, 'Delivery Clerk   ', 8),
(118, 'Export Clerk   ', 8),
(119, 'Mail Messenger ', 8),
(120, 'Receiver ', 8),
(121, 'Service Operator   ', 8),
(122, 'Shipper', 8),
(123, 'Shipping Specialist   ', 8),
(124, 'Terminal Clerk   ', 8),
(125, 'Traffic Clerk   ', 8),
(126, 'Transportation Clerk  ', 8),
(127, 'Assistant Professor   ', 9),
(128, 'Assistant Teacher   ', 9),
(129, 'Dean', 9),
(130, 'Education Teacher   ', 9),
(131, 'High School Teacher   ', 9),
(132, 'Instructional Designer   ', 9),
(133, 'Instructor', 9),
(134, 'IT Instructor   ', 9),
(135, 'Justice', 9),
(136, 'Lab Assistant   ', 9),
(137, 'Librarian ', 9),
(138, 'Paraprofessional ', 9),
(139, 'Preschool Teacher', 9),
(140, 'Teacher ', 9),
(141, 'Teaching Assistant   ', 9),
(142, 'Tutor ', 9),
(143, 'University Professor   ', 9),
(144, 'Aeronautical Engineer   ', 10),
(145, 'Aerospace Engineer   ', 10),
(146, 'Biologist ', 10),
(147, 'Biomedical Engineer   ', 10),
(148, 'CAD', 10),
(149, 'Chemical Engineer   ', 10),
(150, 'City Engineer   ', 10),
(151, 'Civil Engineer   ', 10),
(152, 'Design Engineer', 10),
(153, 'Drafter', 10),
(154, 'Electrical Engineer   ', 10),
(155, 'Electronic Engineer   ', 10),
(156, 'Engineering Manager   ', 10),
(157, 'Environmental Engineer   ', 10),
(158, 'Field Engineer   ', 10),
(159, 'Land Surveyor   ', 10),
(160, 'Manufacturing Engineer   ', 10),
(161, 'Mechanical Engineer   ', 10),
(162, 'Medical Engineer   ', 10),
(163, 'Nuclear Engineer   ', 10),
(164, 'Petroleum Engineer   ', 10),
(165, 'Process Engineer   ', 10),
(166, 'Quality Engineer   ', 10),
(167, 'Quantity Surveyor ', 10),
(168, 'Structural Engineer   ', 10),
(169, 'Surveyor', 10),
(170, 'Business Executive   ', 11),
(171, 'CBO   ', 11),
(172, 'CEO', 11),
(173, '', 11),
(174, 'CFO', 11),
(175, 'COO', 11),
(176, 'Development Officer   ', 11),
(177, 'Director ', 11),
(178, 'Executive Administrator   ', 11),
(179, 'Executive Director   ', 11),
(180, 'Risk Management Director   ', 11),
(181, 'Sustainability Manager   ', 11),
(182, 'Top Executive   ', 11),
(183, 'Account Manager   ', 12),
(184, 'Advisor ', 12),
(185, 'Bank Manager   ', 12),
(186, 'Branch Manager   ', 12),
(187, 'Cost Accounting Manager   ', 12),
(188, 'Cost Analyst ', 12),
(189, 'Finance Manager   ', 12),
(190, 'Financial Officer   ', 12),
(191, 'Treasurer ', 12),
(192, 'Broker ', 13),
(193, 'Business Coordinator   ', 13),
(194, 'Business Development Specialist', 13),
(195, 'Business Planner   ', 13),
(196, 'Contract Coordinator   ', 13),
(197, 'Contract Specialist   ', 13),
(198, 'Customs Broker   ', 13),
(199, 'Logistician', 13),
(200, 'Personnel Security Specialist', 13),
(201, 'Planner', 13),
(202, 'Security Specialist   ', 13),
(203, 'Transportation Analyst   ', 13),
(204, 'Arborist', 14),
(205, 'Baby Sitter   ', 14),
(206, 'Breeder ', 14),
(207, 'Carpet Cleaner', 14),
(208, 'Childcare Assistant', 14),
(209, 'Cleaner', 14),
(210, 'Climber', 14),
(211, 'Farmer', 14),
(212, 'Farm Worker', 14),
(213, 'Fisherman ', 14),
(214, 'Food Inspector   ', 14),
(215, 'Gardener', 14),
(216, 'Grounds Keeper', 14),
(217, 'Hunter', 14),
(218, 'Keeper ', 14),
(219, 'Nanny', 14),
(220, 'Picker', 14),
(221, 'Planter', 14),
(222, 'Trimmer', 14),
(223, 'Window Cleaner', 14),
(224, 'Dentist', 15),
(225, 'Doctor ', 15),
(226, 'Lab Technician   ', 15),
(227, 'Medical Assistant   ', 15),
(228, 'Nurse Practitioner   ', 15),
(229, 'Occupational Therapist   ', 15),
(230, 'Physical Therapist   ', 15),
(231, 'Radiography Technician   ', 15),
(232, 'Radiologists', 15),
(233, 'Respiratory Therapist ', 15),
(234, 'Surgeon', 15),
(235, 'Therapist', 15),
(236, 'X Ray Technologist', 15),
(237, 'Actor', 16),
(238, 'Actress', 16),
(239, 'Assistant Producer', 16),
(240, 'Dancer', 16),
(241, 'Director of Music', 16),
(242, 'Event Planner', 16),
(243, 'Film Producer', 16),
(244, 'Hotel General Manager', 16),
(245, 'Music Director ', 16),
(246, 'Musician', 16),
(247, 'Music Producer', 16),
(248, 'Organist ', 16),
(249, 'Producer ', 16),
(250, 'Rock Star   ', 16),
(251, 'Runner', 16),
(252, 'Singer  ', 16),
(253, 'Travel Agent', 16),
(254, 'TV Producer', 16),
(255, 'Wedding Coordinator', 16),
(256, 'Executive Recruiter   ', 17),
(257, 'Facilitator', 17),
(258, 'Headhunter', 17),
(259, 'HR Assistant   ', 17),
(260, 'HR Director   ', 17),
(261, 'HR Generalist   ', 17),
(262, 'HR Manager   ', 17),
(263, 'HR Recruiter   ', 17),
(264, 'Interviewer', 17),
(265, 'IT Coordinator', 17),
(266, 'Job Recruiter   ', 17),
(267, 'Personnel Manager   ', 17),
(268, 'Personnel Officer   ', 17),
(269, 'Sales Trainer   ', 17),
(270, 'Technical Recruiter   ', 17),
(271, 'Training Manager   ', 17),
(272, 'Training Specialist', 17),
(273, 'Computer Engineer   ', 18),
(274, 'Computer Programmer   ', 18),
(275, 'Computer Scientist   ', 18),
(276, 'Computer Technician   ', 18),
(277, 'Developer', 18),
(278, 'Game Designer   ', 18),
(279, 'Game Tester   ', 18),
(280, 'IT Administrator   ', 18),
(281, 'IT Analyst   ', 18),
(282, 'IT Director   ', 18),
(283, 'IT Engineer   ', 18),
(284, 'IT Intern   ', 18),
(285, 'IT Manager   ', 18),
(286, 'IT Network Administrator   ', 18),
(287, 'IT Project Manager   ', 18),
(288, 'IT Specialist   ', 18),
(289, 'IT Technician   ', 18),
(290, 'IT Tech Support   ', 18),
(291, 'Java Developer   ', 18),
(292, 'Network Engineer   ', 18),
(293, 'Programmer   ', 18),
(294, 'Software Developer', 18),
(295, 'Software Engineer   ', 18),
(296, 'Web Designer   ', 18),
(297, 'Web Developer   ', 18),
(298, 'Aircraft Mechanic', 19),
(299, 'Biomedical Technician', 19),
(300, 'Diesel Mechanic', 19),
(301, 'Diver ', 19),
(302, 'Draper ', 19),
(303, 'HVAC Technician', 19),
(304, 'Liner', 19),
(305, 'Locksmith', 19),
(306, 'Maintenance Manager', 19),
(307, 'Repair Technician', 19),
(308, 'Rigger', 19),
(309, 'Splicer', 19),
(310, 'Tower Climber', 19),
(311, 'Transformer', 19),
(312, 'Vehicle Mechanic', 19),
(313, 'Agent', 20),
(314, 'Claim Adjuster   ', 20),
(315, 'Claims Representative', 20),
(316, 'Construction Estimator', 20),
(317, 'Cost Estimator', 20),
(318, 'Damage Appraiser', 20),
(319, 'Estimator', 20),
(320, 'Insurance Agent ', 20),
(321, 'Insurance Analyst ', 20),
(322, 'Insurance Broker', 20),
(323, 'Insurance Consultant', 20),
(324, 'Insurance Representative', 20),
(325, 'Insurance Sales Agent   ', 20),
(326, 'Insurance Specialist   ', 20),
(327, 'Life Insurance Agent   ', 20),
(328, 'Manager', 20),
(329, 'Medical Investigator', 20),
(330, 'Property Adjuster', 20),
(331, 'Property Claims Adjuster', 20),
(332, 'Sales Agent', 20),
(333, 'Underwriter', 20),
(334, 'Arbitrator ', 21),
(335, 'Associate Attorney', 21),
(336, 'Associate Counsel', 21),
(337, 'Consul', 21),
(338, 'Corporate Lawyer', 21),
(339, 'Counsel ', 21),
(340, 'General Counsel', 21),
(341, 'Hearing Officer', 21),
(342, 'Immigration Attorney', 21),
(343, 'Lawyer ', 21),
(344, 'Legal Advisor', 21),
(345, 'Judicial Clerk   ', 22),
(346, 'Law Clerk   ', 22),
(347, 'Law Secretary', 22),
(348, 'Legal Clerk', 22),
(349, 'Legal Secretary', 22),
(350, 'Legislative Aide', 22),
(351, 'Litigation Paralegal', 22),
(352, 'Municipal Clerk', 22),
(353, 'Registration Clerk', 22),
(354, 'Title Abstractor', 22),
(355, 'Business Administrator', 23),
(356, 'Business Analyst', 23),
(357, 'Business Manager', 23),
(358, 'Contract Manager', 23),
(359, 'General Manager', 23),
(360, 'Management Trainee', 23),
(361, 'Manager ', 23),
(362, 'Merchant', 23),
(363, 'Plant Manager ', 23),
(364, 'Production Manager', 23),
(365, 'Quality Manager', 23),
(366, 'Security Manager', 23),
(367, 'Service Manager', 23),
(368, 'Store Manager', 23),
(369, 'Supply Chain Manager', 23),
(370, 'Assembler', 24),
(371, 'Boiler Operator', 24),
(372, 'Buffer ', 24),
(373, 'Cake Decorator', 24),
(374, 'Chair ', 24),
(375, 'Dry Cleaner', 24),
(376, 'Fabricator', 24),
(377, 'Finisher ', 24),
(378, 'Fitter', 24),
(379, 'Helper', 24),
(380, 'Jeweller', 24),
(381, 'Machine Operator', 24),
(382, 'Machinist', 24),
(383, 'Plant Operator', 24),
(384, 'Power Operator', 24),
(385, 'Roller ', 24),
(386, 'Rubber', 24),
(387, 'SEAL', 24),
(388, 'Sewing', 24),
(389, 'Supervisor', 24),
(390, 'Tailor', 24),
(391, 'Wastewater Operator', 24),
(392, 'Water Operator', 24),
(393, 'Water Treatment Operator', 24),
(394, 'Welder ', 24),
(395, 'Winder', 24),
(396, 'Woodworker', 24),
(397, 'Advertising Manager', 25),
(398, 'Agency Manager', 25),
(399, 'Arts Manager', 25),
(400, 'Category Manager', 25),
(401, 'Demonstrator', 25),
(402, 'Events Manager', 25),
(403, 'Food Demonstrator', 25),
(404, 'Head of Marketing', 25),
(405, 'nvestor', 25),
(406, 'Lobbyist', 25),
(407, 'Marketer', 25),
(408, 'Marketing Manager', 25),
(409, 'Marketing Specialist', 25),
(410, 'Sales/Marketing Director', 25),
(411, 'Animator', 26),
(412, 'Artist  ', 26),
(413, 'Author ', 26),
(414, 'Cartoonist ', 26),
(415, 'Copy Writer', 26),
(416, 'Editor', 26),
(417, 'Fashion Designer', 26),
(418, 'Florist', 26),
(419, 'Illustrator  ', 26),
(420, 'Interpreter ', 26),
(421, 'Inventor ', 26),
(422, 'Journalist ', 26),
(423, 'Language Translator', 26),
(424, 'Linguist ', 26),
(425, 'Medical Writer', 26),
(426, 'Online Editor', 26),
(427, 'Photographer ', 26),
(428, 'Photojournalist', 26),
(429, 'Reporter ', 26),
(430, 'Sound Engineer', 26),
(431, 'Technical Writer ', 26),
(432, 'Translator', 26),
(433, 'Video Editor ', 26),
(434, 'Videographer', 26),
(435, 'Writer', 26),
(436, 'Adviser ', 27),
(437, 'Case Manager ', 27),
(438, 'Chaplain', 27),
(439, 'Counselor ', 27),
(440, 'Drug Counselor', 27),
(441, 'Health Educator ', 27),
(442, 'High School Coach', 27),
(443, 'House Sitter', 27),
(444, 'Mental Health ', 27),
(445, 'Organizer', 27),
(446, 'Program Manager', 27),
(447, 'Psychiatrist', 27),
(448, 'Psychologist ', 27),
(449, 'Aide', 28),
(450, 'Clinic Nurse', 28),
(451, 'Health Care Assistant', 28),
(452, 'Home Health Aide', 28),
(453, 'Home Health Nurse', 28),
(454, 'Hospital Assistant', 28),
(455, 'Hospital Medical Assistant', 28),
(456, 'Legal Nurse Consultant', 28),
(457, 'Mental Health Nurse', 28),
(458, 'Neonatal Nurse', 28),
(459, 'Office Nurse', 28),
(460, 'Pediatric Nurse', 28),
(461, 'School Nurse', 28),
(462, 'Sitter ', 28),
(463, 'Traveling Nurse', 28),
(464, 'Blend Technician ', 29),
(465, 'Clinical Pharmacist', 29),
(466, 'Eligibility Technician', 29),
(467, 'Inventory Technician', 29),
(468, 'Pharmacist', 29),
(469, 'Pharmacist Assistant', 29),
(470, 'Pharmacist Technician', 29),
(471, 'Registered Staff Pharmacist', 29),
(472, 'Retread Technician', 29),
(473, 'Staff Pharmacist', 29),
(474, 'Technician', 29),
(475, 'Buyer Assistant ', 30),
(476, 'Buyer', 30),
(477, 'Buyers'' Agent', 30),
(478, 'Commodity Manager', 30),
(479, 'Contracts Manager', 30),
(480, 'Jobber', 30),
(481, 'Merchandise Manager', 30),
(482, 'Print Buyer', 30),
(483, 'Procurement Agent', 30),
(484, 'Purchasing Agent ', 30),
(485, 'Purchasing Officer', 30),
(486, 'Sourcing Manager', 30),
(487, 'Time Buyer', 30),
(488, 'Auto Inspector', 31),
(489, 'Chemical Inspector', 31),
(490, 'Coroner', 31),
(491, 'Driver Examiner', 31),
(492, 'HR Officer', 31),
(493, 'Inspector', 31),
(494, 'Plans Examiner', 31),
(495, 'Sanitarian', 31),
(496, 'Water Inspector', 31),
(497, 'Appraiser ', 32),
(498, 'Assessor', 32),
(499, 'Housing Manager', 32),
(500, 'Land Agent', 32),
(501, 'Leasing Manager', 32),
(502, 'Property Manager', 32),
(503, 'Real Estate Agent', 32),
(504, 'Real Estate Broker', 32),
(505, 'Real Estate Investor', 32),
(506, 'Real Estate Manager', 32),
(507, 'Realtor', 32),
(508, 'Rental Manager', 32),
(509, 'Resident ', 32),
(510, 'Actuarial Assistant', 33),
(511, 'Assistant Research', 33),
(512, 'Assistant Scientist', 33),
(513, 'Biostatistician', 33),
(514, 'Health Data Analyst ', 33),
(515, 'Operations Analyst', 33),
(516, 'Policy Analyst', 33),
(517, 'Baker', 34),
(518, 'Bar Back', 34),
(519, 'Barista', 34),
(520, 'Baristas', 34),
(521, 'Bartender', 34),
(522, 'Bread Baker', 34),
(523, 'Brewer ', 34),
(524, 'Busser', 34),
(525, 'Butcher', 34),
(526, 'Chef', 34),
(527, 'Chopper', 34),
(528, 'Cook ', 34),
(529, 'Cutter', 34),
(530, 'Dish Washer', 34),
(531, 'Executive Chef', 34),
(532, 'Food Manager', 34),
(533, 'Food Server', 34),
(534, 'Food Service Worker', 34),
(535, 'Host', 34),
(536, 'Hostess', 34),
(537, 'Line Cook', 34),
(538, 'Meat cutter', 34),
(539, 'Pastry Chef', 34),
(540, 'Prep Cook', 34),
(541, 'Process Server', 34),
(542, 'Restaurant General Manager', 34),
(543, 'Restaurant Manager', 34),
(544, 'Restaurant Server', 34),
(545, 'Server', 34),
(546, 'Waiter', 34),
(547, 'Waitress', 34),
(548, 'Washer', 34),
(549, 'Assistant Manager', 35),
(550, 'Associate', 35),
(551, 'Auto Parts Manager', 35),
(552, 'Car Dealer', 35),
(553, 'Cashier ', 35),
(554, 'Fashion Buyer', 35),
(555, 'Order Filler', 35),
(556, 'Retail Buyer ', 35),
(557, 'Retail Cashier', 35),
(558, 'Retail Manager', 35),
(559, 'Salesman', 35),
(560, 'Sales Professional', 35),
(561, 'Shop Manager', 35),
(562, 'Stock Clerk', 35),
(563, 'Storekeeper', 35),
(564, 'Account Executive', 36),
(565, 'Account Representative', 36),
(566, 'Accounts Manager', 36),
(567, 'Area Sales Manager', 36),
(568, 'Distributor', 36),
(569, 'Newspaper Carrier', 36),
(570, 'Parts Manager', 36),
(571, 'Personal Shopper', 36),
(572, 'Product Engineer', 36),
(573, 'Regional Manager', 36),
(574, 'Representative', 36),
(575, 'Sales Account Manager', 36),
(576, 'Sales Engineer', 36),
(577, 'Sales Executive', 36),
(578, 'Sales Manager', 36),
(579, 'Anthropologist', 37),
(580, 'Archaeologist', 37),
(581, 'Astronomer ', 37),
(582, 'Botanist', 37),
(583, 'Chemist ', 37),
(584, 'Economists', 37),
(585, 'Food Scientist', 37),
(586, 'Medical Office Manager', 37),
(587, 'Nurse Manager', 37),
(588, 'Physicists ', 37),
(589, 'QA Analyst', 37),
(590, 'Scientist ', 37),
(591, 'Test Technician', 37),
(592, 'Binder', 38),
(593, 'Bindery', 38),
(594, 'Building Maintenance Engineer', 38),
(595, 'Building Maintenance Technician', 38),
(596, 'Compositor', 38),
(597, 'Digital Printer', 38),
(598, 'Directional Driller', 38),
(599, 'Driller', 38),
(600, 'Drill Operator', 38),
(601, 'Handy Man   ', 38),
(602, 'Machine Maintenance', 38),
(603, 'Machine Technician', 38),
(604, 'Oil Operator', 38),
(605, 'Printer', 38),
(606, 'Printer Technician', 38),
(607, 'Rig Operator', 38),
(608, 'Screen Printer ', 38),
(609, 'Typesetter', 38),
(610, 'Utility Worker', 38),
(611, 'Well Driller', 38),
(612, 'Wire line Operator', 38),
(613, 'Airline Attendant', 39),
(614, 'Air Traffic Controllers', 39),
(615, 'Bus Driver', 39),
(616, 'CDL Driver', 39),
(617, 'CDL Truck Driver', 39),
(618, 'Courier', 39),
(619, 'Crane Operator', 39),
(620, 'Deckhand', 39),
(621, 'Delivery Driver', 39),
(622, 'Dispatcher ', 39),
(623, 'Dock Worker', 39),
(624, 'Driver', 39),
(625, 'Helicopter Pilot', 39),
(626, 'Local Truck Driver', 39),
(627, 'Mate', 39),
(628, 'Packer', 39),
(629, 'Rider', 39),
(630, 'Route Driver', 39),
(631, 'School Bus Driver', 39),
(632, 'Ship Liner', 39),
(633, 'Transportation Manager ', 39),
(634, 'Truck Driver', 39),
(635, 'Warehouse Driver', 39),
(636, 'Animal Attendant', 40),
(637, 'Animal Groomer', 40),
(638, 'Animal Keeper', 40),
(639, 'Animal Physiologist', 40),
(640, 'Boarder', 40),
(641, 'Dog Bather', 40),
(642, 'Dog Groomer', 40),
(643, 'Dog Sitter', 40),
(644, 'Dog Walker', 40),
(645, 'Emergency Veterinarian', 40),
(646, 'Groom ', 40),
(647, 'Groomer', 40),
(648, 'Kennel Assistant ', 40),
(649, 'Kennel Worker', 40),
(650, 'Pet Groomer', 40),
(651, 'Pet Sitter', 40),
(652, 'Ring man', 40),
(653, 'Vet', 40),
(654, 'Veterinarian', 40),
(655, 'Veterinary Lab Tech', 40),
(656, 'Veterinary Technician', 40),
(657, 'Zoo Keeper', 40),
(658, 'Activity Assistant', 41),
(659, 'Aesthetician', 41),
(660, 'Archer ', 41),
(661, 'Athletic Trainers', 41),
(662, 'Barber', 41),
(663, 'College Coach', 41),
(664, 'Dog Trainer', 41),
(665, 'Dresser ', 41),
(666, 'Equestrian', 41),
(667, 'Esthetician', 41),
(668, 'Fitness Trainer', 41),
(669, 'Golf Coach', 41),
(670, 'Hairdresser', 41),
(671, 'Hair Stylist ', 41),
(672, 'Head Coach', 41),
(673, 'Jockey', 41),
(674, 'Make Up Artist', 41),
(675, 'Models ', 41),
(676, 'Personal Trainer', 41),
(677, 'Physical Instructor', 41),
(678, 'PowerBuilder ', 41),
(679, 'Referee', 41),
(680, 'Starter', 41),
(681, 'Swimming Coach ', 41),
(682, 'Tattoo Artist ', 41),
(683, 'Tennis Coach', 41),
(684, 'Timer', 41),
(685, 'Volleyball Coach', 41),
(686, 'Yoga Instructor', 41);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `random` longtext NOT NULL,
  `forget` int(200) NOT NULL,
  `icon` varchar(500) DEFAULT 'user_icons/icon1.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `random`, `forget`, `icon`) VALUES
(22, 'Lahiru', 'Karunanayake', 'lmbkarunanayake93@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '136472368', 0, 'user_icons/icon1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

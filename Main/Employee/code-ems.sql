CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  'code' varchar(255) not null,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, 'code', `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`) VALUES
(100, 'CT202404015', 'Siva Kumar', 'E', 'sivakumar@claidas.org', '1234', '1997-08-13', 'Male', '01919', 12121, 'Razarbagh', 'IT', 'Head', 'images/me.png'),
(101, 'CT202404015', 'Aravind', 'G', 'aravind@claidas.org', '1234', '1997-08-13', 'Male', '01919', 12121, 'Razarbagh', 'IT', 'Head', 'images/me.png'),
(102, 'CT202404015', 'Sathish', 'S', 'sathish@claidas.org', '1234', '2018-01-01', 'Male', '0202', 303, 'Ad_______', 'CSE', 'CSE', 'images/no.jpg'),
(103, 'CT202404015', 'Sriram', 'G', 'sriram@claidas.org', '1234', '1990-02-02', 'Male', '5252', 6262, 'Thames, UK', 'Creative', 'MSc', 'images/sw-google.png'),
(104, 'CT202404015', 'Dhivya', 'G', 'dhivya@claidas.org', '1234', '1971-12-01', 'Female', '9595', 5959, 'Chemsford, USA', 'Creative', 'MSc', 'images/test.jpg'),
(105, 'CT202404015', 'Bharath', 'B', 'bharath@claidas.org', '1234', '1971-06-28', 'Male', '8585', 5858, 'LA, USA', 'SpaceTech', 'BSc', 'images/330px-Elon_Musk_Royal_Society.jpg'),
(106, 'CT202404012','Pavan', 'A', 'pavanappana@claidas.org', '1234', '1990-02-02', 'Male', '7575', 5757, 'Underground, Dhaka', 'NetworkSecurity', 'MSc', 'images/hacker.png'),
(107, 'CT202404014','Pravallika ', 'V', 'pravallika@claidas.org', '1234', '1993-03-03', 'Female', '4545', 5454, 'USA', 'Defense ', 'MS', 'images/no.jpg'),
(108, 'CT202404011','Gowtham', ' K', 'gowtham@claidas.org', '1234', '1976-04-16', 'Male', '758758', 857857, 'USA', 'AI', 'PhD', 'images/download.jpeg'),
(109, 'CT202404008','Joy Vimal Raj', 'F D', 'joyvimalraj@claidas.org', '1234', '1985-01-01', 'Male', '852852', 258258, 'USA', 'AI', 'PhD', 'images/1-5.jpg'),
(110, 'CT202404010','MohaMmed Raiyan ', 'T A', 'mohammedrayan@claidas.org', '1234', '1965-09-18', 'Male', '147147', 741741, 'USA', 'NLP', 'PhD', 'images/download (1).jpeg'),
(111, 'CT202404009','Chathura', 'P', 'chathura@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(112, 'CT202404013','Sri Nithi', 'E', 'srinithi@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(113, 'CT202404018','Sharmila', 'M', 'sharmila@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(114, 'CT202404017','Aasha', 'G', 'aasha@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(115, 'CT202404016','Prakash', 'T', 'prakash@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(116, 'CT202404023','Sevagrahul', 'G G', 'sevagrahul@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(117, 'CT202404024','Gowtham', 'K E', 'gowthamke@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(118, 'CT202404021','Manikandan', 'S', 'manikandan@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(119, 'CT202404020','Santhosh Kumar', 'S', 'santhoshkumar@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(120, 'CT202404025','Kudiyarasu', 'P', 'kudiyarasu@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(121, 'CT202404022','Niramal Raj', 'S', 'nirmalraj@claidas.org', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(122, 'CT202404026','Sri Nithi', 'K', 'srinithik@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(123, 'CT202404027','Bavithra', 'G', 'bavithra@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(124, 'CT202404019','Sneha', 'S', 'snega@claidas.org', '1234', '2011-02-01', 'Female', '0187282', 112233, 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg');

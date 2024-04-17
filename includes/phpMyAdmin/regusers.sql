

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `Tech_fest_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `regusers` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clgname` varchar(255) DEFAULT NULL,
  `phn` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `evnt` varchar(255) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `regusers` (`id`,`name`, `email`, `clgname`,`phn`,`roll`, `evnt`) VALUES
(1, 'nithin', 'nitin@gmail.com', 'srm','1234556789','ap120110010092', 'coderace'),
(2, 'Ram', 'ram@gmail.com', 'vit','9849255880','ap20110010093','coderace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `regusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `regusers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


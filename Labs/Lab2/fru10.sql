
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `program` (
  `ProgramCode` varchar(10) NOT NULL,
  `ProgramName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `program` (`ProgramCode`, `ProgramName`) VALUES
('BS', 'Bachelor of Science'),
('IS', 'Information Systems');


CREATE TABLE `student` (
  `StudentNo` int(11) NOT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  `ProgramCode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `student` (`StudentNo`, `Firstname`, `Lastname`, `Gender`, `ContactNo`, `ProgramCode`) VALUES
(11111, 'James', 'Peter', 'Male', '71717171', 'BS'),
(22222, 'Peter', 'Mark', 'Male', '71727172', 'IS'),
(33333, 'Mary', 'John', 'Female', '71737173', 'BS'),
(44444, 'Belinda', 'Cain', 'Female', '71717271', 'IS');

ALTER TABLE `program`
  ADD PRIMARY KEY (`ProgramCode`);


ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentNo`),
  ADD KEY `ProgramCode` (`ProgramCode`);


ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ProgramCode`) REFERENCES `program` (`ProgramCode`);
COMMIT;


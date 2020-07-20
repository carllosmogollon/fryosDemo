CREATE DATABASE fryosdemo
--USE fryosdemo2;

CREATE TABLE `contacts` (
  `typeContact` varchar(15) NOT NULL,
  `idContact` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `emailaddress` varchar(70) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `cel` varchar(20) NOT NULL
)

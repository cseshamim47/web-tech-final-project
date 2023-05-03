-- Generation time: Wed, 26 Apr 2023 21:06:30 +0200
-- Host: localhost
-- DB name: blockchain
/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `publicKey` varchar(100) NOT NULL,
  `privateKey` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `profilePicture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` VALUES ('Ahmed Md Shamim ','shamim','123','darrkyshanto@gmail.com','Male','1998-04-26','cseshamim478123','cseshamim478000','0','Cp-04.jpg'),
('Shakil Ahmed','shakil','123asf.','shakil@123gmail.com','Male','1998-04-12','shakil123','shakil000','100011','profile.jpg'),
('Jessica Jessy','jessy','asdf','jessy@yahoo.com','Female','1998-04-20','jessy123','jessy000','1000','profile.jpg'),
('Messu','jesasdfsy','aa','asdf@yahoo.com','Other','1998-04-20','jesasdfsy123','jesasdfsy000','1000','profile.jpg'),
('asdfasdf','jeasdfsasdfsy','zz','aasdfsdf@yahoo.com','Other','1998-04-20','jeasdfsasdfsy123','jeasdfsasdfsy000','1000','profile.jpg'),
('asdasdffasdf','jeadsfasdfsasdfsy','pp','aasdasdfsdf@yahoo.com','Male','1998-04-20','jeadsfasdfsasdfsy123','jeadsfasdfsasdfsy000','1000','profile.jpg'); 




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


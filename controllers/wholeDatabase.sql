-- Generation time: Mon, 08 May 2023 23:25:38 +0200
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

DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balance` int(20) NOT NULL,
  `pin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `bank` VALUES ('shamim ahmed','shamim','9982194','123'),
('rabbi','rabbi','1000000','123'),
('Tanim','Tanim','1000000','123'),
('Mahfuz','Mahfuz','1000000','123'); 


DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cart` VALUES ('47','4','1','2023-05-03 08:05:18','2023-05-03 08:05:18'),
('53','1','1','2023-05-03 12:31:33','2023-05-03 12:31:33'),
('54','1','2','2023-05-03 12:31:35','2023-05-03 12:31:35'),
('55','1','1','2023-05-03 12:41:59','2023-05-03 12:41:59'),
('56','1','1','2023-05-03 12:51:01','2023-05-03 12:51:01'),
('57','1','1','2023-05-03 13:29:22','2023-05-03 13:29:22'),
('58','2','1','2023-05-03 13:29:24','2023-05-03 13:29:24'),
('59','4','1','2023-05-03 13:29:41','2023-05-03 13:29:41'),
('60','7','1','2023-05-03 13:29:44','2023-05-03 13:29:44'),
('61','7','2','2023-05-03 13:29:45','2023-05-03 13:29:45'),
('62','7','3','2023-05-03 13:29:45','2023-05-03 13:29:45'),
('63','7','4','2023-05-03 13:29:46','2023-05-03 13:29:46'); 


DROP TABLE IF EXISTS `deposite`;
CREATE TABLE `deposite` (
  `username` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `deposite` VALUES ('rabbi','123','510','0000-00-00 00:00:00'),
('shamim','1234','1024','0000-00-00 00:00:00'),
('rh','456','555','2023-04-27 13:20:55'),
('shamim','1234','1024','2023-04-27 13:21:33'),
('rabbi1','147','2028','2023-04-27 13:21:45'),
('rabbi','123','510','2023-04-27 16:18:52'),
('rabbi','123','123','2023-04-27 15:41:52'); 


DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO `faq` VALUES ('7','What is Bitcoin?','Bitcoin is a digital currency that allows for peer-to-peer transactions without the need for a centralized authority.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('8','How does Bitcoin work?','Bitcoin transactions are verified and processed by a decentralized network of computers using complex algorithms. Transactions are recorded on a public ledger called the blockchain.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('9','Who invented Bitcoin?','Bitcoin was invented by an anonymous person or group using the pseudonym Satoshi Nakamoto.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('10','How do I get Bitcoin?','You can get Bitcoin by buying it on a cryptocurrency exchange, accepting it as payment for goods or services, or mining it using specialized software and hardware.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('11','Is Bitcoin legal?','The legal status of Bitcoin varies by country. In some countries, it is legal to use Bitcoin as a form of payment or investment, while in others it is restricted or banned outright.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('12','How secure is Bitcoin?','Bitcoin is secured by advanced cryptographic algorithms and the decentralized network of computers that verify and process transactions. However, like any digital asset, it is vulnerable to hacking and theft if proper security measures are not taken.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('13','Can I lose my Bitcoin?','Yes, if you lose your private key or your Bitcoin is stolen, you can lose your Bitcoin permanently. It is important to take steps to secure your Bitcoin and store it in a secure wallet.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('14','What is blockchain?','Blockchain is a decentralized ledger that records all Bitcoin transactions in chronological order. Each block on the blockchain contains a list of transactions and a unique cryptographic signature, creating a secure and immutable record of all Bitcoin activity.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('15','What is a cryptocurrency wallet?','A cryptocurrency wallet is a digital wallet that allows you to store, send, and receive cryptocurrencies like Bitcoin. There are many different types of wallets, including hardware wallets, software wallets, and web wallets.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('16','How do I store my Bitcoin safely?','You can store your Bitcoin safely by using a secure wallet, keeping your private key secret, and taking other security measures like using two-factor authentication and avoiding public Wi-Fi networks.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('17','How do I sell Bitcoin?','You can sell Bitcoin on a cryptocurrency exchange or through a peer-to-peer marketplace. The process will vary depending on the platform you use.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('18','What are the fees for using Bitcoin?','The fees for using Bitcoin vary depending on the transaction size and the congestion of the network. Fees are paid to miners to incentivize them to verify and process transactions.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('19','Is Bitcoin a good investment?','Bitcoin has been highly volatile and its value has fluctuated widely over time. It is important to carefully consider the risks and potential rewards before investing in Bitcoin or any other cryptocurrency.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('20','How can I learn more about Bitcoin?','There are many resources available to learn more about Bitcoin, including online tutorials, forums, and books. It is also helpful to stay up-to-date on the latest news and developments in the industry.','2023-04-17 10:24:13','2023-04-17 10:24:13'),
('21','Test question 04','Test anasete4','2023-04-17 12:46:50','2023-04-17 12:46:50'),
('22','Test question 01','Test answer 01','2023-04-17 13:05:45','2023-04-17 13:05:45'),
('23','1231aaa','12aaaa','2023-05-03 09:17:18','2023-05-03 09:17:18'); 


DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `rating` int(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `feedback` VALUES ('2','123123'),
('4','123123'),
('2','123123'),
('3','hello'); 


DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

INSERT INTO `notifications` VALUES ('16','A large investment firm announces a major investment in a blockchain startup.','2023-04-19 11:16:03'),
('21','Bitcoin hits an all-time high, surpassing $100,000 USD per coin.','2023-05-03 12:36:17'),
('22','Ethereum announces the launch of Ethereum 2.0, which promises faster transaction times and lower fees.','2023-05-03 12:36:59'),
('23','Ripple is sued by the SEC for selling unregistered securities.','2023-05-03 12:37:14'),
('24',' major online retailer announces that it will begin accepting Bitcoin as payment','2023-05-03 12:37:29'),
('25','A new blockchain-based social media platform is launched, promising to protect user data and privacy.','2023-05-03 12:37:41'),
('26','asdf','2023-05-03 13:13:12'); 


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` VALUES ('1','chair','400.00'),
('2','Table ','400.00'),
('3','Key','400.00'),
('4','Books','500.00'),
('5','Watch','300.00'),
('6','Mobile ','500.00'),
('7','Bookself','800.00'),
('8','test p','1000.00'),
('9','chair','600.00'),
('10','juice','1.00'),
('11','Intel','500.00'),
('12','medicine','123.00'); 


DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `trxId` varchar(123) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`trxId`),
  UNIQUE KEY `trxId` (`trxId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaction` VALUES ('trx1682622168','shamim','shakil','123','2023-04-28 01:02:48'),
('trx1682622274','shamim','shakil','46','2023-04-28 01:04:34'),
('trx1682622353','Bank','shamim','100','2023-04-28 01:05:53'),
('trx1682650407','Bank','shamim','11','2023-04-28 08:53:27'),
('trx1682650430','shamim','rabbi','123','2023-04-28 08:53:50'),
('trx1682797443','shamim','shakil','100','2023-04-30 01:44:03'),
('trx1683079435','Bank','shamim','1000','2023-05-03 08:03:55'),
('trx1683079455','Bank','shamim','10000','2023-05-03 08:04:15'),
('trx1683079511','shamim','rabbi','8000','2023-05-03 08:05:11'),
('trx1683079629','Bank','shamim','1500','2023-05-03 08:07:09'),
('trx1683082679','Bank','shamim','555','2023-05-03 08:57:59'),
('trx1683084317','shamim','Tanim','520','2023-05-03 09:25:17'),
('trx1683085229','Bank','shamim','510','2023-05-03 09:40:29'),
('trx1683085279','Bank','shamim','100','2023-05-03 09:41:19'),
('trx1683085345','shamim','Tanim','500','2023-05-03 09:42:25'),
('trx1683085419','shamim','Tanim','3','2023-05-03 09:43:39'),
('trx1683085466','Bank','shamim','1000','2023-05-03 09:44:26'),
('trx1683096752','Bank','shamim','100','2023-05-03 12:52:32'),
('trx1683096779','Bank','shamim','100','2023-05-03 12:52:59'),
('trx1683096802','Bank','shamim','100','2023-05-03 12:53:22'),
('trx1683096833','Bank','shamim','730','2023-05-03 12:53:53'),
('trx1683098888','Bank','shamim','1000','2023-05-03 13:28:08'),
('trx1683098912','shamim','rabbi','1000','2023-05-03 13:28:32'),
('trx1683580795','shamim','shakil','100','2023-05-09 03:19:55'); 


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

INSERT INTO `user` VALUES ('Ahmed Md Shamim ..','shamim','123','darrkyshanto@gmail.com','Male','1998-04-26','cseshamim478123','cseshamim478000','660','Cp-04.jpg'),
('Shakil Ahmed','shakil','123','shakil@123gmail.com','Male','1998-04-12','shakil123','shakil000','356','profile.jpg'),
('Jessica Jessy','jessy','asdf','jessy@yahoo.com','Female','1998-04-20','jessy123','jessy000','1000','profile.jpg'),
('Messu','jesasdfsy','aa','asdf@yahoo.com','Other','1998-04-20','jesasdfsy123','jesasdfsy000','1000','profile.jpg'),
('asdfasdf','jeasdfsasdfsy','zz','aasdfsdf@yahoo.com','Other','1998-04-20','jeasdfsasdfsy123','jeasdfsasdfsy000','1000','profile.jpg'),
('asdasdffasdf','jeadsfasdfsasdfsy','pp','aasdasdfsdf@yahoo.com','Male','1998-04-20','jeadsfasdfsasdfsy123','jeadsfasdfsasdfsy000','1000','profile.jpg'),
('rabbi','rabbi','R@bbi123','r@gmail.com','Male','2000-05-08','rabbi123','rabbi000','10123','profile.jpg'),
('Md Kuddus Ali','kud','123Shamim.','kud@gmail.com','Male','1999-05-04','kud123','kud000','1000','profile.jpg'),
('Md Kuddus Ali','kudd','123Shamim.','kudd@gmail.com','Male','1999-05-04','kudd123','kudd000','1000','profile.jpg'),
('Md Kuddus Ali','kuddd','123Shamim.','kuddd@gmail.com','Male','1999-05-04','kuddd123','kuddd000','1000','profile.jpg'),
('Tanim','Tanim','Tanim1@','taifur123@gmail.com','Male','2000-12-03','Tanim123','Tanim000','1623','profile.jpg'); 


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` VALUES ('0','Tanim','$2y$10$64OF76wI9Y2CA3BYD1mYce8TzuD153k/Lr6fh9rBw1VW61LaVILgu','2023-04-06 10:36:29'),
('0','fahad','$2y$10$k1xv2qnQ8g5gXwUn2J.TgekQiWU3TTMsvwQsKwcXN3gaER/9zFpWe','2023-04-06 10:45:37'),
('0','Tanim1122','$2y$10$rqtAxjGJ0jsnxEX9slJJu.9jWpXeZgDVXO8AKhsenNYbz9meEpoXK','2023-04-10 04:51:58'),
('0','Tabib','$2y$10$Q6s1ly1NtaVbVXB3hZ5aHuQvx/QXWixPnTrlpgY.9yAagY2maO7Ue','2023-04-10 05:10:07'),
('0','Tanim11223','$2y$10$vI7TxLMJrioeIIg5CzWa6e8wh32ZEN3PwLw.gyVjZTEShW1hTvBuS','2023-04-10 15:00:14'); 




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


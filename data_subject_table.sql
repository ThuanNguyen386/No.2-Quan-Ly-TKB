CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `school_year` char(10) NOT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table cuoiky.subjects: ~6 rows (approximately)
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`id`, `name`, `avatar`, `description`, `school_year`, `updated`, `created`) VALUES
	(1, 'English', 'english.jpg', 'Ngoại ngữ', '2', '2022-01-04 00:38:19', '2021-12-30 23:08:43'),
	(2, 'Literature', 'literature.jpg', 'Mon van hoc', '3', '2021-12-30 23:11:41', '2021-12-30 23:11:41'),
	(3, 'Statistics', 'statistic.jpg', 'Xac suat', '3', '2021-12-30 23:11:41', '2021-12-30 23:11:41'),
	(4, 'Chemistry', 'chemistry.jpg', 'Mon hoa cho SV', '2', '2021-12-30 23:11:41', '2021-12-30 23:11:41'),
	(5, 'Web design', 'mathematics.jpg', 'Thiet ke web', '4', '2021-12-30 23:11:41', '2021-12-30 23:11:41');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;


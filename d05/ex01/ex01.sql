CREATE TABLE `db_ncoden`.`ft_table` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`login` varchar(8) NOT NULL DEFAULT 'toto',
	`groupe` ENUM('staff', 'student', 'other') NOT NULL,
	`date_de_creation` DATE NOT NULL,
	PRIMARY KEY (`id`)
)
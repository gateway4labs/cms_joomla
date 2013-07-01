DROP TABLE IF EXISTS `#__gateway4labs`;

CREATE TABLE IF NOT EXISTS `#__gateway4labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` varchar(200) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`lab_id`,`lab_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `#__gateway4labs_config`;

CREATE TABLE IF NOT EXISTS `#__gateway4labs_config` (
  `host` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`host`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `#__gateway4labs_config` (`host`, `user`, `password`) VALUES
('http://localhost:5000/labmanager/requests/', 'user', 'password');

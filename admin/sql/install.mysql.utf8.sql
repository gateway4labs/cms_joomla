DROP TABLE IF EXISTS `#__lms4labs_config`;

CREATE TABLE IF NOT EXISTS `#__lms4labs_config` (
  `host` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`host`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `#__lms4labs_config` (`host`, `user`, `password`) VALUES
('http://localhost:5000/labmanager/requests/', 'user', 'password');

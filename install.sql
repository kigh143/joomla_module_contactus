CREATE TABLE IF NOT EXISTS `#__mod_xaexiamail` (
  `id` int(10) NOT NULL  AUTO_INCREMENT,
   `name` varchar(150) NOT NULL,
   `email` varchar(150) NOT NULL,
   `message` text NOT NULL,
   `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



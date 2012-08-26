CREATE DATABASE ccpbtest;
USE ccpbtest;

CREATE USER 'ccpbtest'@'localhost' IDENTIFIED BY 'Dodger36';
GRANT ALL PRIVILEGES ON *.* TO 'ccpbtest'@'localhost' WITH GRANT OPTION;
CREATE USER 'ccpbtest'@'%' IDENTIFIED BY 'Dodger36';
GRANT ALL PRIVILEGES ON *.* TO 'ccpbtest'@'%' WITH GRANT OPTION;

CREATE TABLE `imageView` (
  `id` int(11) NOT NULL auto_increment,
  `imageOrder` tinyint(4) NOT NULL,
  `uRLImage` varchar(256) NOT NULL,
  `uRLLink` varchar(256) NOT NULL,
  `transition` varchar(32) NOT NULL,
  `isActive` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




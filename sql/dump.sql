CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `admins` (`id`, `username`, `nickname`, `created`, `modified`, `del_flg`, `status`, `password`)
VALUES
	(1, 'sample@samplehogehoge.com', 'sample', '2014-06-23 12:34:48', '2014-07-07 13:00:11', 0, 1, '3ceacd01301ddb4c8d458c9fb0575f524e4fc473');

CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(24) DEFAULT '',
  `foreign_key` int(11) NOT NULL,
  `photo_user` varchar(255) DEFAULT NULL,
  `photo_information` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `nickname` varchar(128) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `informations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(24) DEFAULT '',
  `foreign_key` int(11) NOT NULL,
  `photo_user` varchar(255) DEFAULT NULL,
  `photo_information` varchar(255) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `informations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  `del_flg` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `nickname` varchar(128) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `informations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` longtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `del_flg` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` tinyint(1) unsigned zerofill DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
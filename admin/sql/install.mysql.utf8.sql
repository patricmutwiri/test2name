DROP TABLE IF EXISTS `#__com_test2name`;

CREATE TABLE `#__com_test2name` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`asset_id` INT(10)     NOT NULL DEFAULT '0',
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL,
	`catid`	    int(11)    NOT NULL DEFAULT '0',
	`params`   VARCHAR(1024) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__com_test2name` (`greeting`) VALUES
('Hello World!'),
('Good bye World!');

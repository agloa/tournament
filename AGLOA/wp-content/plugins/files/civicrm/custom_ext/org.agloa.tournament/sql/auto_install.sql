DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
 `id` int(10) unsigned NOT NULL COMMENT 'Team ID',
 `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Internal name of record.',
 `title` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of record.',
 `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT 'Optional verbose description of the record.',
 `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this entry active?',
 `created_id` int(10) unsigned DEFAULT NULL COMMENT 'Who created record?',
 `modified_id` int(10) unsigned DEFAULT NULL COMMENT 'Who modified record?',
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

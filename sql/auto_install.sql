-- TODO unit test this script
-- TODO how to add prefix, e.g., agloa_ ?
-- TODO how to specify database name(s)
-- DROP DATABASE IF EXISTS `tournament_test`;
CREATE DATABASE IF NOT EXISTS `tournament_test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE tournament_test;

DROP TABLE IF EXISTS `tournament_sponsor`;
CREATE TABLE `tournament_sponsor` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `description` text COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='tournament_sponsor is modeled on civicrm_domain'
;

DROP TABLE IF EXISTS `age_group`;
CREATE TABLE `age_group` (
 `id` int(10) unsigned NOT NULL COMMENT 'maximum age for this group',
 `name` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
 `label` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'external display',
 `Description` text COLLATE utf8_unicode_ci COMMENT 'Full description of record. Text and html allowed. Displayed on built-in Information screens.',
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='modeled on civicrm_option_value'
;

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
 `id` int(10) unsigned NOT NULL COMMENT 'Unique Machine-readable  ID',
 `external_identifier` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Unique trusted external ID (generally from a legacy app/datasource). Particularly useful for deduping operations.',
 `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'First Name.',
 `middle_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Middle Name.',
 `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Last Name.',
 `prefix` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Prefix or Title for name (Ms, Mr...). ',
 `suffix` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Suffix for name (Jr, Sr...).',
 `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'M, F, etc.',
 `birth_date` date DEFAULT NULL COMMENT 'Date of birth',
 PRIMARY KEY (`id`),
 UNIQUE KEY `first_name` (`first_name`,`middle_name`,`last_name`,`prefix`,`suffix`,`gender`,`birth_date`),
 KEY `index_first_name` (`first_name`),
 KEY `index_last_name` (`last_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='modeled on civicrm_contact for players, coaches, etc.'
;

DROP FUNCTION IF EXISTS `age`;
CREATE FUNCTION `age` (
`p_birth_date` DATE
) RETURNS INT DETERMINISTIC NO SQL 
RETURN IF( p_birth_date >0, YEAR( CURDATE( ) ) - YEAR( p_birth_date ) , 0 ) ;
;

DROP FUNCTION IF EXISTS sort_name;
CREATE FUNCTION sort_name(`p_last_name` VARCHAR( 64 ) CHARSET utf8,`p_first_name` VARCHAR( 64 ) ) 
RETURNS VARCHAR( 220 ) CHARSET utf8 DETERMINISTIC NO SQL SQL SECURITY DEFINER 
RETURN CONCAT_WS(', ',p_last_name,p_first_name);
;

DROP FUNCTION IF EXISTS `display_name`;
CREATE FUNCTION `display_name` (
`p_last_name` VARCHAR( 64 ) CHARSET utf8,
`p_first_name` VARCHAR( 64 ) CHARSET utf8,
`p_middle_name` VARCHAR( 64 ) CHARSET utf8,
`p_prefix` VARCHAR( 10 ) CHARSET utf8,
`p_suffix` VARCHAR( 10 ) CHARSET utf8
) RETURNS VARCHAR( 220 ) CHARSET utf8 DETERMINISTIC NO SQL SQL SECURITY DEFINER 
RETURN REPLACE(TRIM(CONCAT_WS(' ',IFNULL(p_prefix,''),p_first_name,p_middle_name,p_last_name,IFNULL(p_suffix,''))),'  ',' ') ;
;

CREATE OR REPLACE VIEW `person_summary` AS
SELECT `id` , sort_name(
last_name, first_name
) AS sort_name, display_name(
last_name, first_name, middle_name, prefix, suffix
) AS display_name, age(
birth_date
) AS age
FROM `person` 
;

DROP TABLE IF EXISTS `scheduling_group`;
CREATE TABLE `scheduling_group` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `label` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `description` text COLLATE utf8_unicode_ci NOT NULL,
 `sponsor_org` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `region` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `label` (`label`),
 KEY `sponsor_org` (`sponsor_org`),
 CONSTRAINT `scheduling_group_ibfk_1` FOREIGN KEY (`sponsor_org`) REFERENCES `tournament_sponsor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='tournament participants are grouped for registration and scheduling'
;

DROP TABLE IF EXISTS `registration_group`;
CREATE TABLE `registration_group` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `label` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `description` text COLLATE utf8_unicode_ci NOT NULL,
 `scheduling_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Parent',
 PRIMARY KEY (`id`),
 UNIQUE KEY `label` (`label`),
 KEY `sponsor_org` (`scheduling_group`),
 CONSTRAINT `registration_group_ibfk_1` FOREIGN KEY (`scheduling_group`) REFERENCES `scheduling_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='tournament participants are grouped for registration and scheduling'
;

DROP TABLE IF EXISTS `registration_group_person` ;
CREATE TABLE `registration_group_person` (
 `registration_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'FK to egistration_group',
 `person` int(10) unsigned NOT NULL COMMENT 'FK to person',
 `status` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'Added' COMMENT 'status of person relative to membership in group',
 PRIMARY KEY (`registration_group`,`person`),
 KEY `person` (`person`),
 CONSTRAINT `registration_group_person_ibfk_1` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `registration_group_person_ibfk_2` FOREIGN KEY (`registration_group`) REFERENCES `registration_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tournament participants are grouped for registration and sch'
;

CREATE OR REPLACE VIEW `registration_group_people` AS 
select `rgp`.`registration_group` AS `group_id`,`rg`.`label` AS `group_name`,`rgp`.`person` AS `person_id`,`p`.`last_name` AS `last_name`,`p`.`first_name` AS `first_name`,`rgp`.`status` AS `status` 
from ((`registration_group_person` `rgp` join `registration_group` `rg` on((`rg`.`id` = `rgp`.`registration_group`))) join `person` `p` on((`p`.`id` = `rgp`.`person`))) 
order by `rg`.`label`
;

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
 `id` int(10) unsigned NOT NULL COMMENT 'Team ID',
 `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Internal name of record.',
 `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of record.',
 `description` text COLLATE utf8_unicode_ci COMMENT 'Optional verbose description of the record.',
 `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Is this entry active?',
-- `created_id` int(10) unsigned DEFAULT NULL COMMENT 'Who created record?',
--  `modified_id` int(10) unsigned DEFAULT NULL COMMENT 'Who modified record?',
 PRIMARY KEY (`id`),
 UNIQUE KEY `name` (`name`),
-- KEY `created_id` (`created_id`),
-- KEY `modified_id` (`modified_id`),
 KEY `name_2` (`name`)
-- CONSTRAINT `team_ibfk_1` FOREIGN KEY (`created_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
-- CONSTRAINT `team_ibfk_2` FOREIGN KEY (`modified_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
;

DROP TABLE IF EXISTS `scheduling_group_team`;
CREATE TABLE `scheduling_group_team` (
 `scheduling_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'FK to scheduling_group',
 `team` int(10) unsigned NOT NULL COMMENT 'FK to team',
 `status` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'Added' COMMENT 'status of person relative to membership in group',
 PRIMARY KEY (`scheduling_group`,`team`),
 KEY `status` (`status`),
 KEY `team` (`team`),
 CONSTRAINT `scheduling_group_team_ibfk_1` FOREIGN KEY (`scheduling_group`) REFERENCES `scheduling_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `scheduling_group_team_ibfk_2` FOREIGN KEY (`team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tournament participants are grouped for registration and sch'
;

DROP TABLE IF EXISTS `team_person`;
CREATE TABLE `team_person` (
 `team` int(10) unsigned NOT NULL,
 `person` int(10) unsigned NOT NULL,
 `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Player',
 KEY `role` (`role`),
 KEY `team` (`team`),
 KEY `person` (`person`),
 CONSTRAINT `team_person_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `team_person_ibfk_2` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT
;

CREATE OR REPLACE VIEW `scheduling_group_team_players` AS
SELECT s.scheduling_group, s.team, t.title, p.id, p.sort_name
FROM `scheduling_group_team` s
JOIN team t ON t.ID = s.team
JOIN team_person tp ON tp.team = s.team
JOIN person_summary p ON p.id = tp.person
ORDER BY s.scheduling_group
;

DROP TABLE IF EXISTS  `tournament`;
CREATE TABLE `tournament` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `description` text COLLATE utf8_unicode_ci NOT NULL,
 `sponsor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sponsor FK',
 PRIMARY KEY (`id`),
 KEY `tournament_sponsor_fk` (`sponsor`),
 CONSTRAINT `tournament_sponsor_fk` FOREIGN KEY (`sponsor`) REFERENCES `tournament_sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='Tournament is modeled on civicrm_event'
;

DROP TABLE IF EXISTS  `tournament_person` ;
CREATE TABLE `tournament_person` (
 `tournament` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `person` int(10) unsigned NOT NULL COMMENT 'FK to Person ID',
 `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'Registered' COMMENT 'Participant status',
 `primary_role` varchar(128) COLLATE utf8_unicode_ci DEFAULT 'Player' COMMENT 'role(s), e.g., player, coach, volunteer ID. Implicit FK to civicrm_option_value where option_group = participant_role.',
-- `registered_by` int(10) unsigned DEFAULT NULL,
-- `register_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'When did contact register for event?',
 PRIMARY KEY (`tournament`,`person`),
 KEY `index_status_id` (`status`),
 KEY `index_role_id` (`primary_role`),
 KEY `FK_civicrm_participant_contact_id` (`person`),
 KEY `FK_civicrm_participant_event_id` (`tournament`),
 -- KEY `registered_by` (`registered_by`),
 KEY `status` (`status`),
 KEY `primary_role` (`primary_role`),
 CONSTRAINT `tournament_person_ibfk_1` FOREIGN KEY (`tournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `tournament_person_ibfk_2` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
 -- CONSTRAINT `tournament_person_ibfk_3` FOREIGN KEY (`registered_by`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='register a person for a tournament'
;

CREATE OR REPLACE VIEW `registered_tournament_players` AS
SELECT tp.`tournament` , tp.`person` , p.sort_name, p.age FROM `tournament_person` tp JOIN person_summary p ON p.id = tp.person
WHERE `status` = 'Registered' AND `primary_role` = 'Player'
;

CREATE TABLE `tournament_team` (
 `tournament` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `team` int(10) unsigned NOT NULL COMMENT 'FK to Team ID',
 `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'Registered' COMMENT 'Participant status',
 PRIMARY KEY (`tournament`,`team`),
 KEY `index_status_id` (`status`),
 KEY `FK_civicrm_participant_contact_id` (`team`),
 KEY `FK_civicrm_participant_event_id` (`tournament`),
 KEY `status` (`status`),
 CONSTRAINT `tournament_team_ibfk_1` FOREIGN KEY (`tournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `tournament_team_ibfk_2` FOREIGN KEY (`team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='register a team for a tournament'
;

DROP TABLE IF EXISTS  `tournament_age_group` ;
CREATE TABLE `tournament_age_group` (
 `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `title` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
 `tournament` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tournament FK',
 `age_group` int(10) unsigned NOT NULL COMMENT 'age_group FK',
 PRIMARY KEY (`id`),
 UNIQUE KEY `tournament` (`tournament`,`age_group`),
 KEY `age_group_fk` (`age_group`),
 CONSTRAINT `age_group_fk` FOREIGN KEY (`age_group`) REFERENCES `age_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `tournament_fk` FOREIGN KEY (`tournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT COMMENT='modeled on civicrm_option_value'
;

CREATE OR REPLACE VIEW `eligible_tournament_age_group_players` AS
SELECT person, sort_name, a.id AS tournament_age_group FROM `registered_tournament_players` p
JOIN tournament_age_group a ON a.tournament = p.tournament
AND p.age <= 1+a.age_group
;

DROP TABLE IF EXISTS `competition_style`;
CREATE TABLE `competition_style` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `label` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='modeled on civicrm_option_value'
;

DROP TABLE IF EXISTS `competition_category`;
CREATE TABLE `competition_category` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `label` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='modeled on civicrm_option_value'
;

DROP TABLE IF EXISTS `competition_type`;
CREATE TABLE `competition_type` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `label` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, human readable identifier',
 `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
 `category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
 `style` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'e.g., match or medalist',
 `match_size` int(10) unsigned NOT NULL COMMENT 'How many players comprise a match?',
 `min_score` decimal(10,0) DEFAULT NULL,
 `max_score` decimal(10,0) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `category` (`category`),
 KEY `style` (`style`),
 CONSTRAINT `competition_type_ibfk_1` FOREIGN KEY (`category`) REFERENCES `competition_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `competition_type_ibfk_2` FOREIGN KEY (`style`) REFERENCES `competition_style` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT
;

DROP TABLE IF EXISTS `competition`;
CREATE TABLE `competition` (
 `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'unique, machine readable identifier',
 `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `title` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
 `description` text COLLATE utf8_unicode_ci,
 `nRounds` int(10) unsigned NOT NULL,
 `tournament_age_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'FK',
 PRIMARY KEY (`id`),
 UNIQUE KEY `tournament_age_group` (`tournament_age_group`,`type`),
 KEY `competition_type` (`type`),
 CONSTRAINT `competition_ibfk_1` FOREIGN KEY (`tournament_age_group`) REFERENCES `tournament_age_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `competition_type` FOREIGN KEY (`type`) REFERENCES `competition_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='which competitions does a tournament comprise'
;

DROP TABLE IF EXISTS `competition_person` ;
CREATE TABLE `competition_person` (
 `competition` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `person` int(10) unsigned NOT NULL COMMENT 'FK to person',
 `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Registered',
 `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Player',
 `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `source` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Source of this event registration.',
-- `registered_by_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Participant ID',
 PRIMARY KEY (`person`,`competition`),
 KEY `index_status_id` (`status`),
 KEY `index_role_id` (`role`),
 KEY `FK_civicrm_participant_contact_id` (`person`),
 KEY `FK_civicrm_participant_event_id` (`competition`),
-- KEY `FK_civicrm_participant_registered_by_id` (`registered_by_id`),
 CONSTRAINT `competition_person_ibfk_1` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `competition_person_ibfk_2` FOREIGN KEY (`competition`) REFERENCES `competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
-- CONSTRAINT `competition_person_ibfk_3` FOREIGN KEY (`registered_by_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='tournament registration kernel'
;

CREATE OR REPLACE VIEW `registered_competition_players` AS
SELECT `competition` , `person` FROM `competition_person`
WHERE `status` = 'Registered' AND `role` = 'Player'
;

-- Enforce unique competition per type, per person, per tournament
CREATE OR REPLACE VIEW `registered_tournament_competition_type_person` AS
SELECT t.tournament, c.type, `person` FROM `competition_person` cp
JOIN competition c ON cp.competition = c.id
JOIN tournament_age_group t ON t.id = c.tournament_age_group
WHERE `status` = 'Registered'
;

CREATE OR REPLACE VIEW  `eligible_competition_players` AS 
select `a`.`person` AS `person`,`a`.`sort_name` AS `sort_name`,`c`.`id` AS `competition` 
from (`eligible_tournament_age_group_players` `a` join `competition` `c` on((`c`.`tournament_age_group` = `a`.`tournament_age_group`)))
;

-- create a trigger that rejects inserts to competition_person that 
-- 1) aren't in eligible_competition_players or 
-- 2) are already registered for that tournament and competition type

DROP TRIGGER IF EXISTS `competition_person_before_insert`;

DELIMITER //
CREATE TRIGGER `competition_person_before_insert` BEFORE INSERT ON `competition_person`
FOR EACH ROW BEGIN 
  IF(SELECT COUNT( e.person ) FROM eligible_competition_players e WHERE e.person = NEW.person AND e.competition = NEW.competition ) = 0
    THEN BEGIN
      select CONCAT('Cannot add row to competition_person. Person: ', NEW.person, ' is not eligible for competition: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  ELSEIF(SELECT count(c.id) FROM registered_tournament_competition_type_person tctp JOIN competition c ON c.type = tctp.type WHERE person = NEW.person AND c.id = NEW.competition) > 0 
    THEN BEGIN
      select CONCAT('Cannot add row to competition_person. Person: ', NEW.person, ' is already registered for a competition like: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  END IF;

END;
//
delimiter ;

-- create a trigger that rejects updates to competition_person that 
-- 1) aren't in eligible_competition_players or 
-- 2) are already registered for that tournament and competition type
DROP TRIGGER IF EXISTS `competition_person_before_update`;

DELIMITER //
CREATE TRIGGER `competition_person_before_update` BEFORE UPDATE ON `competition_person`
FOR EACH ROW BEGIN 
  IF(SELECT COUNT( e.person ) FROM eligible_competition_players e WHERE e.person = NEW.person AND e.competition = NEW.competition ) = 0
    THEN BEGIN
      select CONCAT('Cannot update competition_person row. Person: ', NEW.person, ' is not eligible for competition: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = @messageText;
    END;
    -- Special exception: new.person = old.person and new.type = old.type is OK
  ELSE 
    BEGIN
      SELECT type FROM competition WHERE id = old.competition into @oldType;
      SELECT type FROM competition WHERE id = new.competition into @newType;
      IF (new.person != old.person || @oldType != @newType) 
        THEN BEGIN
          IF(SELECT count(c.id) FROM registered_tournament_competition_type_person tctp JOIN competition c ON c.type = tctp.type WHERE person = NEW.person AND c.id = NEW.competition) > 0 
            THEN BEGIN
              select CONCAT('Cannot update competition_person. Person: ', NEW.person, ' is already registered for a competition like: ', NEW.competition) into @messageText;
              SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = @messageText;
            END;
          END IF;
        END;      
      END IF ;     
    END;         
  END IF ;
END ;
//
delimiter ;

CREATE OR REPLACE VIEW `tournament_player_competition_set` AS
SELECT tournament, t.person, group_concat( c.`competition` ) AS competition_set
FROM registered_tournament_players t JOIN `competition_person` c ON c.person = t.person
GROUP BY tournament, person
;

CREATE OR REPLACE VIEW `registered_tournament_teams` AS
SELECT tournament,team FROM `tournament_team` WHERE `status` = 'Registered'
;

CREATE OR REPLACE VIEW `tournament_team_player_count` AS
SELECT tt.tournament, tt.team, count( teamp.person ) AS player_count
FROM `registered_tournament_teams` tt JOIN team_person teamp ON teamp.team = tt.team AND teamp.role = 'Player'
JOIN registered_tournament_players p ON p.tournament = tt.tournament AND p.person = teamp.person
GROUP BY tt.team
;

CREATE OR REPLACE VIEW `team_player_competition_count` AS
SELECT tt.team, cp.competition AS player_competition, count( cp.competition ) AS player_competition_count
FROM `registered_tournament_teams` tt JOIN team_person teamp ON teamp.team = tt.team
JOIN registered_competition_players cp ON cp.person = teamp.person JOIN competition c ON c.id = cp.competition
JOIN tournament_age_group a ON a.id = c.tournament_age_group AND a.tournament = tt.tournament
GROUP BY tt.team, cp.competition
;

CREATE TABLE `competition_team` (
 `competition` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `team` int(10) unsigned NOT NULL,
 PRIMARY KEY (`competition`,`team`),
 UNIQUE KEY `team` (`team`,`competition`),
 KEY `competition` (`competition`),
 CONSTRAINT `competition_team_ibfk_1` FOREIGN KEY (`team`) REFERENCES `tournament_team` (`team`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `competition_team_ibfk_2` FOREIGN KEY (`competition`) REFERENCES `competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='pure join table'
;

CREATE OR REPLACE VIEW `eligible_team_competitions` AS
SELECT t.tournament, t.team, t.player_count, c.player_competition AS competition
FROM `tournament_team_player_count` t JOIN team_player_competition_count c ON c.team = t.team
AND t.player_count = c.player_competition_count
LEFT JOIN competition_team ct on ct.competition = c.player_competition AND ct.team = t.team WHERE ct.competition IS NULL
;

-- Enforce unique competition per type, per team, per tournament
CREATE OR REPLACE VIEW `registered_tournament_competition_type_team` AS
SELECT t.tournament, c.type, `team` FROM `competition_team` ct
JOIN competition c ON ct.competition = c.id
JOIN tournament_age_group t ON t.id = c.tournament_age_group
;

-- create a trigger that rejects inserts to competition_team that 
-- 1) aren't in eligible_team_competitions or 
-- 2) are already registered for that tournament and competition type
-- 3) have players on teams already registered for that tournament and competition type

DROP TRIGGER IF EXISTS `competition_team_before_insert`;

DELIMITER //
CREATE TRIGGER `competition_team_before_insert` BEFORE INSERT ON `competition_team`
FOR EACH ROW BEGIN 
  IF(SELECT COUNT( e.team ) FROM eligible_team_competitions e WHERE e.team = NEW.team AND e.competition = NEW.competition ) = 0
    THEN BEGIN
      select CONCAT('Cannot add row to competition_team. Team: ', NEW.team, ' is not eligible for competition: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  ELSEIF(SELECT count(c.id) FROM registered_tournament_competition_type_team tctp JOIN competition c ON c.type = tctp.type WHERE team = NEW.team AND c.id = NEW.competition) > 0 
    THEN BEGIN
      select CONCAT('Cannot add row to competition_team. Team: ', NEW.team, ' is already registered for a competition like: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  END IF;

END;
//
delimiter ;

-- create a trigger that rejects updates to competition_team that 
-- 1) aren't in eligible_team_competitions or 
-- 2) are already registered for that tournament and competition type
-- 3) have players on teams already registered for that tournament and competition type

DROP TRIGGER IF EXISTS `competition_team_before_update`;

DELIMITER //
CREATE TRIGGER `competition_team_before_update` BEFORE UPDATE ON `competition_team`
FOR EACH ROW BEGIN 
  IF(SELECT COUNT( e.team ) FROM eligible_team_competitions e WHERE e.team = NEW.team AND e.competition = NEW.competition ) = 0
    THEN BEGIN
      select CONCAT('Cannot update competition_team. Team: ', NEW.team, ' is not eligible for competition: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  ELSEIF(SELECT count(c.id) FROM registered_tournament_competition_type_team tctp JOIN competition c ON c.type = tctp.type WHERE team = NEW.team AND c.id = NEW.competition) > 0 
    THEN BEGIN
      select CONCAT('Cannot update competition_team. Team: ', NEW.team, ' is already registered for a competition like: ', NEW.competition) into @messageText;
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = @messageText;
    END;
  END IF;

END;
//
delimiter ;

CREATE OR REPLACE VIEW `player_team_summary` AS
SELECT rcp.person AS player, p.sort_name, rcp.competition, ct.team, team.title FROM `registered_competition_players` rcp
RIGHT JOIN competition_team ct ON ct.competition = rcp.competition
JOIN person_summary p ON rcp.person = p.id JOIN team ON team.id = ct.team
ORDER BY `p`.`sort_name` ASC
;

/*
-- civicrm interface
DROP TABLE IF EXISTS `person_contact_xref`;
CREATE TABLE `person_contact_xref` (
 `person` int(10) unsigned NOT NULL,
 `contact` int(10) unsigned NOT NULL,
 PRIMARY KEY (`person`),
 KEY `contact` (`contact`),
 CONSTRAINT `person_contact_xref_ibfk_1` FOREIGN KEY (`contact`) REFERENCES `civicrm_contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `person_contact_xref_ibfk_2` FOREIGN KEY (`person`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Link person to CiviCRM individual'
;

DROP TRIGGER IF EXISTS `person_after_insert`;
CREATE TRIGGER `person_after_insert` AFTER INSERT ON `person`
FOR EACH ROW INSERT IGNORE INTO `person_contact_xref` ( person, contact )
SELECT `id` , `external_identifier` FROM `person` WHERE person.id = new.id
;

DROP TRIGGER IF EXISTS `person_after_update`;
CREATE TRIGGER `person_after_update` AFTER UPDATE ON `person` FOR EACH ROW UPDATE person_contact_xref
SET person_contact_xref.contact = new.external_identifier WHERE person_contact_xref.person = new.id
;

CREATE OR REPLACE VIEW `contact_ids_to_import` AS
SELECT c.id FROM `civicrm_contact` c LEFT JOIN person_contact_xref x ON c.id = x.contact
WHERE x.contact IS NULL
;

CREATE OR REPLACE VIEW `person_from_contact` AS 
select `c`.`id` AS `id`,`c`.`id` AS `external_identifier`,`c`.`first_name` AS `first_name`,`c`.`middle_name` AS `middle_name`,`c`.`last_name` AS `last_name`
,`prefix`.`label` AS `prefix`,`suffix`.`label` AS `suffix`,left(`gender`.`label`,1) AS `gender`
,`c`.`birth_date` AS `birth_date` 
from `civicrm_contact` `c` 
left join `civicrm_option_value` `prefix` on `prefix`.`value` = `c`.`prefix_id` and `prefix`.`option_group_id` = (SELECT id FROM individual_prefix_option_group)
left join `civicrm_option_value` `suffix` on `suffix`.`value` = `c`.`suffix_id` and `suffix`.`option_group_id` = (SELECT id FROM individual_suffix_option_group)
left join `civicrm_option_value` `gender` on `gender`.`value` = `c`.`gender_id` and `gender`.`option_group_id` = (SELECT id FROM gender_option_group)
where `c`.`first_name` is not null and `c`.`last_name` is not null
;

CREATE OR REPLACE VIEW `contacts_to_import` AS
select `pfc`.`id` AS `id`,`pfc`.`external_identifier` AS `external_identifier`,`pfc`.`first_name` AS `first_name`,`pfc`.`middle_name` AS `middle_name`,`pfc`.`last_name` AS `last_name`,`pfc`.`prefix` AS `prefix`,`pfc`.`suffix` AS `suffix`,`pfc`.`gender` AS `gender`,`pfc`.`birth_date` AS `birth_date` 
from (`person_from_contact` `pfc` join `contact_ids_to_import` `i` on((`pfc`.`id` = `i`.`id`)))
;

DROP PROCEDURE IF EXISTS `update_person_from_contact`;
delimiter //
CREATE PROCEDURE `update_person_from_contact`() DETERMINISTIC NO SQL SQL SECURITY DEFINER 
BEGIN
INSERT IGNORE INTO person( `id`, external_identifier, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `gender`, `birth_date` )
SELECT `id`,`id`, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `gender`, `birth_date` 
FROM `person_from_contact`;
UPDATE person p JOIN person_from_contact c ON p.id = c.id
SET p.first_name = c.first_name
, p.middle_name = c.middle_name
, p.last_name = c.last_name
, p.prefix = c.prefix
, p.suffix = c.suffix
, p.gender = c.gender
, p.birth_date = c.birth_date;
END
//
delimiter ;

CREATE OR REPLACE  VIEW `event_type_option_group` AS SELECT `id` FROM `civicrm_option_group` WHERE `name` = 'event_type' ;

CREATE OR REPLACE VIEW `event_type_value` AS
SELECT civicrm_option_value.value FROM `civicrm_option_value`
JOIN event_type_option_group ON event_type_option_group.id = option_group_id
WHERE name = 'Tournament'
;
 
DROP TABLE IF EXISTS `tournament_event_xref`;
CREATE TABLE `tournament_event_xref` (
 `tournament` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tournament FK',
 `event` int(10) unsigned NOT NULL COMMENT 'civicrm_event FK',
 PRIMARY KEY (`tournament`),
 KEY `event` (`event`),
 CONSTRAINT `tournament` FOREIGN KEY (`tournament`) REFERENCES `tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
;

CREATE OR REPLACE  VIEW `gender_option_group` AS SELECT `id` FROM `civicrm_option_group` WHERE `name` = 'gender' ;

CREATE OR REPLACE  VIEW `individual_prefix_option_group` AS SELECT `id` FROM `civicrm_option_group` WHERE `name` = 'individual_prefix' ;

CREATE OR REPLACE VIEW `individual_suffix_option_group` AS SELECT `id` FROM `civicrm_option_group` WHERE `name` = 'individual_suffix' ;

CREATE OR REPLACE VIEW `group_type_option_group` AS SELECT `id` FROM `civicrm_option_group` WHERE `name` = 'group_type' ;
 
CREATE OR REPLACE VIEW `sceduling_group_value` AS
SELECT civicrm_option_value.value FROM `civicrm_option_value`
JOIN group_type_option_group ON group_type_option_group.id = option_group_id
WHERE name = 'Scheduling Group'
;

DROP TABLE IF EXISTS `scheduling_group_xref`;
CREATE TABLE `scheduling_group_xref` (
 `scheduling_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'scheduling_group FK',
 `civicrm_group` int(10) unsigned NOT NULL COMMENT 'civicrm group FK',
 PRIMARY KEY (`scheduling_group`),
 KEY `event` (`civicrm_group`),
 CONSTRAINT `scheduling_group_xref_ibfk_1` FOREIGN KEY (`scheduling_group`) REFERENCES `scheduling_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `scheduling_group_xref_ibfk_2` FOREIGN KEY (`civicrm_group`) REFERENCES `civicrm_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT
;

CREATE OR REPLACE VIEW `civicrm_scheduling_groups` AS
SELECT `id` , `name` , `title` , `description`
FROM `civicrm_group` WHERE `group_type` LIKE CONCAT( '%', (SELECT value FROM `sceduling_group_value`), '%' ) 
;

CREATE OR REPLACE VIEW `unreferenced_civicrm_scheduling_groups` AS
SELECT c.`id` , c.`title` FROM `civicrm_scheduling_groups` c LEFT JOIN scheduling_group_xref x ON x.civicrm_group = c.id
WHERE x.scheduling_group IS NULL 
;

DROP PROCEDURE IF EXISTS `update_scheduling_groups`;
CREATE PROCEDURE `update_scheduling_groups` ( ) DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT IGNORE INTO scheduling_group_xref( scheduling_group, civicrm_group )
SELECT sg.`id` , cg.id FROM `scheduling_group` sg LEFT JOIN civicrm_scheduling_groups cg ON sg.label = cg.title
;

DROP TABLE IF EXISTS `registration_group_xref`;
CREATE TABLE `registration_group_xref` (
 `registration_group` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'registration_group FK',
 `civicrm_group` int(10) unsigned NOT NULL COMMENT 'civicrm group FK',
 PRIMARY KEY (`registration_group`),
 KEY `event` (`civicrm_group`),
 CONSTRAINT `registration_group_xref_ibfk_1` FOREIGN KEY (`registration_group`) REFERENCES `registration_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `registration_group_xref_ibfk_2` FOREIGN KEY (`civicrm_group`) REFERENCES `civicrm_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT
;

CREATE OR REPLACE VIEW `registration_group_value` AS
SELECT civicrm_option_value.value FROM `civicrm_option_value`
JOIN group_type_option_group ON group_type_option_group.id = option_group_id
WHERE name = 'Registration Group'
;

CREATE OR REPLACE VIEW `civicrm_registration_groups` AS
SELECT `id` , `name` , `title` , `description`
FROM `civicrm_group` WHERE `group_type` LIKE CONCAT( '%', (SELECT value FROM `registration_group_value`), '%' ) 
; 

CREATE OR REPLACE VIEW `unreferenced_civicrm_registration_groups` AS
SELECT c.`id` , c.`title` FROM `civicrm_registration_groups` c LEFT JOIN registration_group_xref x ON x.civicrm_group = c.id
WHERE x.registration_group IS NULL 
;

DROP PROCEDURE IF EXISTS `update_registration_groups`;
CREATE PROCEDURE `update_registration_groups`() NO SQL DETERMINISTIC
INSERT IGNORE INTO registration_group_xref( registration_group, civicrm_group )
SELECT rg.`id` , cg.id FROM `registration_group` rg LEFT JOIN civicrm_registration_groups cg ON rg.label = cg.title;
;

DROP PROCEDURE IF EXISTS `update_registration_group_person`;
CREATE PROCEDURE `update_registration_group_person` ( ) DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT IGNORE INTO `registration_group_person` ( registration_group, person )
SELECT rgx.registration_group, pcx.person
FROM `civicrm_group_contact` cgc
JOIN registration_group_xref rgx ON rgx.civicrm_group = cgc.`group_id`
JOIN person_contact_xref pcx ON pcx.person = cgc.`contact_id` 
;

DROP TABLE IF EXISTS `team_group_xref`;
CREATE TABLE `team_group_xref` (
 `team` int(10) unsigned NOT NULL COMMENT 'team FK',
 `civicrm_group` int(10) unsigned DEFAULT NULL COMMENT 'civicrm group FK',
 PRIMARY KEY (`team`),
 KEY `civicrm_group` (`civicrm_group`),
 CONSTRAINT `team_group_xref_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `team_group_xref_ibfk_2` FOREIGN KEY (`civicrm_group`) REFERENCES `civicrm_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='civicrm interface'
;

CREATE OR REPLACE VIEW `team_group_value` AS
SELECT civicrm_option_value.value FROM `civicrm_option_value`
JOIN group_type_option_group ON group_type_option_group.id = option_group_id
WHERE name = 'Team'
;

CREATE OR REPLACE VIEW `civicrm_team_groups` AS
SELECT `id` , `name` , `title` , `description`
FROM `civicrm_group` WHERE `group_type` LIKE CONCAT( '%', (SELECT value FROM `team_group_value`), '%' ) 
; 

CREATE OR REPLACE VIEW `unreferenced_civicrm_team_groups` AS
SELECT c.`id` , c.`title` FROM `civicrm_team_groups` c LEFT JOIN team_group_xref x ON x.civicrm_group = c.id
WHERE x.team IS NULL 
;

CREATE OR REPLACE VIEW `civicrm_participant_role_option_group` 
AS select `civicrm_option_group`.`id` AS `id`,`civicrm_option_group`.`name` AS `name`,`civicrm_option_group`.`title` AS `title`,`civicrm_option_group`.`description` AS `description` 
from `civicrm_option_group` where (`civicrm_option_group`.`title` = 'Participant Role')
;

CREATE OR REPLACE VIEW `civicrm_participant_roles`
AS SELECT v.value,v.name,v.label,v.description FROM `civicrm_participant_role_option_group` g JOIN civicrm_option_value v ON g.id = v.option_group_id
;

DROP PROCEDURE IF EXISTS `update_team_groups`;
DELIMITER //
CREATE PROCEDURE `update_team_groups`() NO SQL DETERMINISTIC
BEGIN
INSERT IGNORE INTO team(id,title,name,description) SELECT c.id,c.title,c.name,c.description FROM `civicrm_team_groups` c;
UPDATE team t JOIN civicrm_team_groups c ON t.id = c.id SET t.title = c.title, t.name = c.name;
INSERT IGNORE INTO team_group_xref( team, civicrm_group ) SELECT t.`id` , cg.id FROM `team` t JOIN civicrm_team_groups cg ON t.title = cg.title;
END
//
DELIMITER ;

DROP PROCEDURE IF EXISTS `update_scheduling_group_teams`;
CREATE PROCEDURE `update_scheduling_group_teams`() NO SQL DETERMINISTIC
INSERT IGNORE INTO scheduling_group_team(scheduling_group, team) 
SELECT x.scheduling_group, c.team FROM civicrm_scheduling_group_teams c
JOIN scheduling_group_xref x ON x.civicrm_group = c.scheduling_group
;

DROP PROCEDURE IF EXISTS `update_team_person`;
CREATE PROCEDURE `update_team_person` ( ) DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT IGNORE INTO `team_person` ( team, person )
SELECT gx.team, pcx.person
FROM `civicrm_group_contact` cgc
JOIN team_group_xref gx ON gx.civicrm_group = cgc.`group_id`
JOIN person_contact_xref pcx ON pcx.person = cgc.`contact_id` 
;

CREATE PROCEDURE `update_tournament_person` ( ) DETERMINISTIC NO SQL SQL SECURITY DEFINER INSERT IGNORE INTO tournament_person( tournament, person,
STATUS , primary_role )
SELECT tx.tournament, px.person, civicrm_participant_status_type.label, v.label
FROM `civicrm_participant`
JOIN tournament_event_xref tx ON tx.event = event_id
JOIN person_contact_xref px ON px.contact = contact_id
JOIN civicrm_participant_status_type ON status_id = civicrm_participant_status_type.id
JOIN civicrm_option_value v ON v.value = role_id
JOIN civicrm_option_group g ON g.id = v.option_group_id
WHERE g.name = 'participant_role'
;

DECLARE a CHAR(16);
DECLARE cur1 CURSOR FOR SELECT `column_name` FROM `civicrm_custom_field` f JOIN competition_type c ON f.label = c.name WHERE `custom_group_id` = @id;
SELECT id,table_name into @id,@table_name FROM `civicrm_custom_group` WHERE `name` LIKE 'Games_Registration';
  OPEN cur1;

  read_loop: LOOP
    FETCH cur1 INTO a;
    SELECT a FROM @table_name;
  END LOOP;

  CLOSE cur1;
  
-- SET @s = CONCAT('SELECT * FROM ', @table_name);
SET @s = CONCAT('SELECT * FROM ', @table_name);
PREPARE stmt3 FROM @s; 
EXECUTE stmt3;

/*

DROP TABLE IF EXISTS `sponsor_org_xref`;
CREATE TABLE `sponsor_org_xref` (
 `sponsor` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sponsor FK',
 `organization` int(10) unsigned DEFAULT '1' COMMENT 'civicrm organization FK',
 PRIMARY KEY (`sponsor`),
 KEY `event` (`organization`),
 CONSTRAINT `sponsor_fk` FOREIGN KEY (`sponsor`) REFERENCES `tournament_sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
;
 
CREATE OR REPLACE VIEW `person_to_contact`
 AS SELECT person.id, `first_name`, `middle_name`, `last_name`,individual_prefix.id as prefix_id,individual_suffix.id as suffix_id, gender.id as gender_id, `birth_date` FROM `person` 
LEFT JOIN civicrm_option_value gender ON left(gender.name,1) = person.gender AND gender.option_group_id = 
(SELECT id FROM gender_option_group)
LEFT JOIN civicrm_option_value individual_prefix ON individual_prefix.name = person.prefix AND individual_prefix.option_group_id = 
(SELECT id FROM individual_prefix_option_group)
LEFT JOIN civicrm_option_value individual_suffix ON individual_suffix.name = person.suffix AND individual_suffix.option_group_id = 
(SELECT id FROM individual_suffix_option_group);


CREATE OR REPLACE VIEW `teams_created_by` AS
SELECT team.`id` , `title` , `created_id` , sort_name
FROM `team`
JOIN person_summary p ON p.id = created_id
ORDER BY `team`.`created_id` ASC
;
CREATE OR REPLACE VIEW `scheduling_groups` AS SELECT `id`, `title`, `description`, `group_type` FROM `civicrm_group` WHERE `is_active` = 1 AND`group_type` 
LIKE concat(concat('%',(select `sceduling_group_value`.`value` from `agloa`.`sceduling_group_value`)),'%')

CREATE OR REPLACE VIEW `latest_active_tournament_participants` AS 
select `cp`.`id` AS `id`,`cp`.`contact_id` AS `contact_id`,`cc`.`sort_name` AS `sort_name`
,`cc`.`display_name` AS `display_name`,`cp`.`status_id` AS `status_id`,`cpst`.`label` AS `status`,`cp`.`role_id` AS `role_id`
,`pr`.`value_label` AS `role`,`cp`.`fee_level` AS `fee_level`,`cp`.`register_date` AS `register_date` 
from ((((`latest_active_tournament` `t` join `civicrm_participant` `cp` on((`cp`.`event_id` = `t`.`id`))) 
join `civicrm_contact` `cc` on((`cc`.`id` = `cp`.`contact_id`))) 
join `civicrm_participant_status_type` `cpst` on((`cpst`.`id` = `cp`.`status_id`))) 
join `participant_roles` `pr` on((`pr`.`value` = `cp`.`role_id`))) 
where ((`cp`.`is_test` = 0) and (`cc`.`is_deleted` = 0) and (not((`cpst`.`label` like 'Cancelled'))))
;

CREATE OR REPLACE VIEW `latest_active_tournament_players` AS 
select `latp`.`id` AS `id`,`latp`.`contact_id` AS `contact_id`,`latp`.`sort_name` AS `sort_name`,`latp`.`display_name` AS `display_name` 
from (`latest_active_tournament_participants` `latp` 
join `player_participant_role` `ppr` on((`latp`.`role_id` = `ppr`.`value`)))
;

CREATE OR REPLACE VIEW `latest_active_player_data` AS 
select `latp`.`id` AS `participant_id`,`latp`.`contact_id` AS `contact_id`,`latp`.`sort_name` AS `sort_name`,`pd`.`id` AS `id`,`pd`.`entity_id` AS `entity_id`
,`pd`.`equations_11` AS `equations_11`,`pd`.`on_sets_12` AS `on_sets_12`,`pd`.`linguishtik_13` AS `linguishtik_13`
,`pd`.`propaganda_14` AS `propaganda_14`,`pd`.`presidents_15` AS `presidents_15`,`pd`.`world_events_16` AS `world_events_16`
,`pd`.`wff_n_proof_17` AS `wff_n_proof_17`
,`pd`.`geocode_20` AS `geocode_20`,`pd`.`scheulding_code_28` AS `scheulding_code_28`
,`pd`.`current_events_56` AS `current_events_56` 
from (`latest_active_tournament_players` `latp` left join `player_data` `pd` on((`pd`.`entity_id` = `latp`.`id`)))
;

-- AGLOA customizations
CREATE OR REPLACE VIEW `this_year_agloa_tournament_players`
AS select `person`.`id` AS `id`,`person`.`sort_name` AS `name`, g.title registration_group,`games_registration`.`equations_11` AS `EQ`,`games_registration`.`on_sets_12` AS `OS`,`games_registration`.`linguishtik_13` AS `LING`,`games_registration`.`propaganda_14` AS `PROP`,`games_registration`.`presidents_15` AS `PRES`,`games_registration`.`world_events_16` AS `THEME`,`games_registration`.`current_events_56` AS `CE`,`games_registration`.`wff_n_proof_17` AS `WFF` from (((`agloa`.`civicrm_participant` `player` left join `agloa`.`civicrm_event` `tournament` on(((`tournament`.`id` = `player`.`event_id`) and (`tournament`.`is_template` = 0)))) left join `agloa`.`civicrm_contact` `person` on((`player`.`contact_id` = `person`.`id`))) left join `agloa`.`civicrm_value_games_registration_5` `games_registration` on((`games_registration`.`entity_id` = `player`.`id`)))
LEFT JOIN `active_registration_group_contacts` g ON g.contact_id = `person`.`id`
where ((`player`.`is_test` = 0) and (`person`.`is_deceased` = 0) and (`person`.`is_deleted` = 0) and (`player`.`role_id` regexp '[[:cntrl:]]*1[[:cntrl:]]*') and (`tournament`.`event_type_id` = 7) and (year(`tournament`.`start_date`) = year(curdate())))
;

CREATE OR REPLACE VIEW `this_year_agloa_tournament_competition_counts`
   AS SELECT 'EQ'    as competition_type, `EQ`    as age_group, COUNT(EQ)    as registered_players FROM `this_year_agloa_tournament_players` GROUP BY EQ    HAVING EQ != ''
UNION SELECT 'OS'    as competition_type, `OS`    as age_group, COUNT(OS)    as registered_players FROM `this_year_agloa_tournament_players` GROUP BY OS    HAVING OS != ''
UNION SELECT 'LING'  as competition_type, `LING`  as age_group, COUNT(LING)  as registered_players FROM `this_year_agloa_tournament_players` GROUP BY LING  HAVING LING != ''
UNION SELECT 'PROP'  as competition_type, `PROP`  as age_group, COUNT(PROP)  as registered_players FROM `this_year_agloa_tournament_players` GROUP BY PROP  HAVING PROP != ''
UNION SELECT 'PRES'  as competition_type, `PRES`  as age_group, COUNT(PRES)  as registered_players FROM `this_year_agloa_tournament_players` GROUP BY PRES  HAVING PRES != ''
UNION SELECT 'Theme' as competition_type, `Theme` as age_group, COUNT(Theme) as registered_players FROM `this_year_agloa_tournament_players` GROUP BY Theme HAVING Theme != ''
UNION SELECT 'CE'    as competition_type, `CE`    as age_group, COUNT(CE)    as registered_players FROM `this_year_agloa_tournament_players` GROUP BY CE    HAVING CE != ''
UNION SELECT 'WFF'   as competition_type, `WFF`   as age_group, COUNT(WFF)   as registered_players FROM `this_year_agloa_tournament_players` GROUP BY WFF   HAVING WFF != ''
;

CREATE OR REPLACE VIEW `this_year_agloa_participant_role`
AS select `contact_civireport`.`id` AS `id`,`contact_civireport`.`sort_name` AS `sort_name`,`r`.`label` AS `role` 
from (((`civicrm_participant` `participant_civireport` 
left join `civicrm_event` `event_civireport` on(((`event_civireport`.`id` = `participant_civireport`.`event_id`) and (`event_civireport`.`is_template` = 0)))) 
left join `civicrm_contact` `contact_civireport` on((`participant_civireport`.`contact_id` = `contact_civireport`.`id`))) 
join `civicrm_participant_roles` `r` on((`r`.`value` = `participant_civireport`.`role_id`))) 
where ((`participant_civireport`.`is_test` = 0) and (`contact_civireport`.`is_deceased` = 0) and (`contact_civireport`.`is_deleted` = 0) and ((`participant_civireport`.`status_id` <> 4) or isnull(`participant_civireport`.`status_id`)) and (year(`event_civireport`.`start_date`) = year(curdate()))) 
;

CREATE OR REPLACE VIEW `this_year_agloa_participant_role_grouped` 
AS SELECT p.id, p.sort_name as name, p.role, g.title registration_group 
FROM this_year_agloa_participant_role p 
LEFT JOIN `active_registration_group_contacts` g ON g.contact_id = p.id 
;

CREATE OR REPLACE VIEW `this_year_agloa_tournament_competition_team_counts` AS 
select `this_year_agloa_tournament_competition_counts`.`competition_type` AS `competition_type`
,`this_year_agloa_tournament_competition_counts`.`age_group` AS `age_group`,`this_year_agloa_tournament_competition_counts`.`registered_players` AS `registered_players`
,ceiling((`this_year_agloa_tournament_competition_counts`.`registered_players` / 5)) AS `teams` from `this_year_agloa_tournament_competition_counts`
;

CREATE OR REPLACE VIEW `this_year_agloa_tournament_competition_section_counts` AS 
select `this_year_agloa_tournament_competition_team_counts`.`competition_type` AS `competition_type`
,`this_year_agloa_tournament_competition_team_counts`.`age_group` AS `age_group`
,`this_year_agloa_tournament_competition_team_counts`.`teams` AS `teams`, s.sections, s.playoffteams,s.trophies,s.medals
from `this_year_agloa_tournament_competition_team_counts`
JOIN agloa_cube_sections_awards s ON s.teams = this_year_agloa_tournament_competition_team_counts.teams
;

CREATE OR REPLACE VIEW `this_year_agloa_tournament_player_competitions`
   AS SELECT `id`, `name`, registration_group, `EQ` as age_group, 'Equations' as competition_type FROM `this_year_agloa_tournament_players` WHERE `EQ` != ''
UNION SELECT `id`, `name`, registration_group, `OS` as age_group, 'On-Sets' as competition_type FROM `this_year_agloa_tournament_players` WHERE `OS` != ''
UNION SELECT `id`, `name`, registration_group, `LING` as age_group, 'LinguiSHTIK' as competition_type FROM `this_year_agloa_tournament_players` WHERE `LING` != ''
UNION SELECT `id`, `name`, registration_group, `PROP` as age_group, 'Propaganda' as competition_type FROM `this_year_agloa_tournament_players` WHERE `PROP` != ''
UNION SELECT `id`, `name`, registration_group, `PRES` as age_group, 'Presidents' as competition_type FROM `this_year_agloa_tournament_players` WHERE `PRES` != ''
UNION SELECT `id`, `name`, registration_group, `THEME` as age_group, 'Theme' as competition_type FROM `this_year_agloa_tournament_players` WHERE `THEME` != ''
UNION SELECT `id`, `name`, registration_group, `CE` as age_group, 'Current Events' as competition_type FROM `this_year_agloa_tournament_players` WHERE `CE` != ''
UNION SELECT `id`, `name`, registration_group, `WFF` as age_group, 'WFF ''N Proof' as competition_type FROM `this_year_agloa_tournament_players` WHERE `WFF` != ''
;

CREATE OR REPLACE VIEW `this_year_agloa_tournament_player_competitions_by_group` 
AS SELECT `registration_group`, `age_group`, `competition_type`, count(`id`) AS player_count
FROM `this_year_agloa_tournament_player_competitions` 
GROUP BY `registration_group`, `age_group`, `competition_type` 
;

CREATE OR REPLACE VIEW `this_year_agloa_participant_registration_group` 
AS select `contact_civireport`.`sort_name` AS `sort_name`,`contact_civireport`.`id` AS `id`,`participant_civireport`.`register_date` AS `register_date`,`g`.`title` AS `registration_group` 
from (((`civicrm_participant` `participant_civireport` 
left join `civicrm_event` `event_civireport` on(((`event_civireport`.`id` = `participant_civireport`.`event_id`) and (`event_civireport`.`is_template` = 0)))) 
left join `civicrm_contact` `contact_civireport` on((`participant_civireport`.`contact_id` = `contact_civireport`.`id`))) 
left join `active_registration_group_contacts` `g` on((`g`.`contact_id` = `contact_civireport`.`id`))) 
where ((`participant_civireport`.`is_test` = 0) and (`contact_civireport`.`is_deceased` = 0) and (`contact_civireport`.`is_deleted` = 0) and ((`participant_civireport`.`status_id` <> 4) or isnull(`participant_civireport`.`status_id`)) and (year(`event_civireport`.`start_date`) = year(curdate())))
;

CREATE OR REPLACE VIEW  `this_year_agloa_registration_group_counts` 
AS select `this_year_agloa_participant_registration_group`.`registration_group` AS `registration_group`,count(`this_year_agloa_participant_registration_group`.`registration_group`) AS `participant_count` 
from `this_year_agloa_participant_registration_group` 
group by `this_year_agloa_participant_registration_group`.`registration_group` 
order by `this_year_agloa_participant_registration_group`.`registration_group`
;

CREATE OR REPLACE VIEW `agloa_latest_active_player_data` AS 
select `latest_active_player_data`.`participant_id` AS `participant_id`,`latest_active_player_data`.`contact_id` AS `player_id`
,`latest_active_player_data`.`sort_name` AS `player_name`
,`latest_active_player_data`.`equations_11` AS `EQ`,`latest_active_player_data`.`on_sets_12` AS `OS`,`latest_active_player_data`.`linguishtik_13` AS `LI`,`latest_active_player_data`.`propaganda_14` AS `PROP`,`latest_active_player_data`.`presidents_15` AS `PREZ`,`latest_active_player_data`.`world_events_16` AS `WE`,`latest_active_player_data`.`wff_n_proof_17` AS `WFF`,`latest_active_player_data`.`current_events_56` AS `CE`,concat(if((`latest_active_player_data`.`equations_11` <> ''),left(`latest_active_player_data`.`equations_11`,1),'_'),if((`latest_active_player_data`.`on_sets_12` <> ''),left(`latest_active_player_data`.`on_sets_12`,1),'_'),if((`latest_active_player_data`.`linguishtik_13` <> ''),left(`latest_active_player_data`.`linguishtik_13`,1),'_'),if((`latest_active_player_data`.`propaganda_14` <> ''),left(`latest_active_player_data`.`propaganda_14`,1),'_'),if((`latest_active_player_data`.`presidents_15` <> ''),left(`latest_active_player_data`.`presidents_15`,1),'_'),if((`latest_active_player_data`.`world_events_16` <> ''),left(`latest_active_player_data`.`world_events_16`,1),'_'),if((`latest_active_player_data`.`wff_n_proof_17` <> ''),left(`latest_active_player_data`.`wff_n_proof_17`,1),'_'),if((`latest_active_player_data`.`current_events_56` <> ''),left(`latest_active_player_data`.`current_events_56`,1),'_')) AS `competition_key` from `latest_active_player_data`
;

CREATE OR REPLACE VIEW `player_competition_type` AS 
select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`equations_11`,'EQ') AS `competition`,'Equations' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`equations_11` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`on_sets_12`,'OS') AS `competition`,'On-Sets' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`on_sets_12` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`linguishtik_13`,'LI') AS `competition`,'LinguiSHTIK' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`linguishtik_13` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`propaganda_14`,'PROP') AS `competition`,'Propaganda' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`propaganda_14` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`presidents_15`,'PREZ') AS `competition`,'Presidents' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`presidents_15` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`world_events_16`,'WE') AS `competition`,'Theme' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`world_events_16` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`current_events_56`,'CE') AS `competition`,'Current Events' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`current_events_56` <> '') 
union select `latest_active_player_data`.`contact_id` AS `contact_id`,`latest_active_player_data`.`sort_name` AS `sort_name`,concat(`latest_active_player_data`.`wff_n_proof_17`,'WFF') AS `competition`,'Wff \'N Proof' AS `competition_type` from `latest_active_player_data` where (`latest_active_player_data`.`wff_n_proof_17` <> '')
;

CREATE OR REPLACE VIEW `player_competition_codes`
 AS SELECT `contact_id` as player_id
, CONCAT(sort_name,'(',IF(LENGTH(`equations_11`),'E','')
, IF(LENGTH(`on_sets_12`),'O','')
, IF(LENGTH(`linguishtik_13`),'L','')
, IF(LENGTH(`propaganda_14`),'P','')
, IF(LENGTH(`presidents_15`),'M','')
, IF(LENGTH(`world_events_16`),'A','')
, IF(LENGTH(`wff_n_proof_17`),'W','')
, IF(LENGTH(`current_events_56`),'C','')
       ,')'  ) AS competition_codes
FROM `latest_active_player_data`
;

CREATE OR REPLACE VIEW `team_player_key_codes` AS 
select `tp`.`team_id` AS `team`,`tp`.`contact_id` AS `player`,`pck`.`competition_codes` AS `key_code` 
from (`active_team_players` `tp` 
join `player_competition_codes` `pck` on((`tp`.`contact_id` = `pck`.`player_id`)))
;

CREATE OR REPLACE VIEW `EligibleTeamPlayerCodes` AS
SELECT Team, Player, registration_group, player_competition_codes.competition_codes
FROM `EligibleTeamPlayers`
JOIN player_competition_codes ON player_competition_codes.player_id = EligibleTeamPlayers.Player
;

CREATE OR REPLACE VIEW `team_group_contact` AS
SELECT `group_id` AS team, `contact_id` AS player
FROM `civicrm_group_contact`
JOIN team_group_ids ON team_group_ids.id = group_id
;

CREATE OR REPLACE VIEW `active_teams` AS 
select `cg`.`id` AS `id`,`cg`.`title` AS `title`,`cg`.`created_id` AS `created_id`
,(select `created`.`sort_name` from `civicrm_contact` `created` where (`created`.`id` = `cg`.`created_id`)) AS `created_by`
,`cg`.`modified_id` AS `modified_id`
,(select `created`.`sort_name` from `civicrm_contact` `created` where (`created`.`id` = `cg`.`modified_id`)) AS `modified_by` 
from (`civicrm_group` `cg` join `team_group_type` `tgt` on((`cg`.`group_type` = `tgt`.`value`))) where (`cg`.`is_active` > 0)
;

CREATE OR REPLACE VIEW `active_team_players` AS 
select `active_teams`.`id` AS `team_id`,`active_teams`.`title` AS `title`,`cgc`.`contact_id` AS `contact_id` 
from (`active_teams` join `civicrm_group_contact` `cgc` on((`active_teams`.`id` = `cgc`.`group_id`))) where (`cgc`.`status` = 'Added')
;

CREATE OR REPLACE VIEW `team_player_competition` AS 
select `tp`.`team_id` AS `team`,`tp`.`contact_id` AS `player`,`tc`.`competition` AS `competition` 
from (`active_team_players` `tp` 
join `agloa_active_team_competitions_pivoted` `tc` on((`tp`.`team_id` = `tc`.`team_id`)))
;

CREATE OR REPLACE VIEW PlayerCompetitionNullTeam AS
SELECT `pc`.`contact_id` AS `player` , `pc`.`competition` AS `competition`
FROM player_competition_type `pc`
LEFT JOIN `team_player_competition` `tpc` ON `pc`.`contact_id` = `tpc`.`player`
AND `pc`.`competition` = `tpc`.`competition` 
WHERE isnull( `tpc`.`player` ) 
;

CREATE OR REPLACE VIEW `active_group_contacts` AS 
select `civicrm_group_contact`.`group_id` AS `group_id`,`civicrm_group_contact`.`contact_id` AS `contact_id` 
from `civicrm_group_contact` 
where (`civicrm_group_contact`.`status` like 'Added')
;

CREATE OR REPLACE VIEW `active_registration_groups` AS 
select `ag`.`id` AS `id`,`ag`.`title` AS `title`,`ag`.`created_id` AS `created_id`,`ag`.`created_by` AS `created_by`,`ag`.`modified_id` AS `modified_id`
,`ag`.`modified_by` AS `modified_by`,`ag`.`group_type` AS `group_type` 
from (`active_groups` `ag` join `registration_group_type` on((`ag`.`group_type` like concat('%',`registration_group_type`.`value`,'%'))))
;

CREATE OR REPLACE VIEW  `active_registration_group_contacts` AS 
select `acg`.`group_id` AS `group_id`,`acg`.`contact_id` AS `contact_id`,`arg`.`id` AS `id`,`arg`.`title` AS `title`,`arg`.`created_id` AS `created_id`
,`arg`.`created_by` AS `created_by`,`arg`.`modified_id` AS `modified_id`,`arg`.`modified_by` AS `modified_by`,`arg`.`group_type` AS `group_type` 
from (`active_group_contacts` `acg` join `active_registration_groups` `arg` on((`arg`.`id` = `acg`.`group_id`)))
;

CREATE OR REPLACE VIEW `active_team_data` AS 
select `active_teams`.`id` AS `team_id`,`active_teams`.`title` AS `title`,`active_teams`.`created_id` AS `created_id`,`active_teams`.`created_by` AS `created_by`
,`active_teams`.`modified_id` AS `modified_id`,`active_teams`.`modified_by` AS `modified_by`,`argc`.`group_id` AS `registration_group_id`
,`argc`.`title` AS `registration_group`,`team_data`.`id` AS `id`,`team_data`.`entity_id` AS `entity_id`
,`team_data`.`equations_21` AS `equations_21`
,`team_data`.`on_sets_22` AS `on_sets_22`
,`team_data`.`linguishtik_23` AS `linguishtik_23`
,`team_data`.`propaganda_24` AS `propaganda_24`
,`team_data`.`presidents_25` AS `presidents_25`
,`team_data`.`world_events_26` AS `world_events_26`
,`team_data`.`wff_n_proof_27` AS `wff_n_proof_27`
,`team_data`.`district_equations_seed_29` AS `district_equations_seed_29`
,`team_data`.`league_equations_seed_30` AS `league_equations_seed_30`
,`team_data`.`district_on_sets_seed_31` AS `district_on_sets_seed_31`
,`team_data`.`league_on_sets_seed_32` AS `league_on_sets_seed_32`
,`team_data`.`district_linguishtik_seed_33` AS `district_linguishtik_seed_33`
,`team_data`.`league_linguishtik_seed_34` AS `league_linguishtik_seed_34`
,`team_data`.`district_wff_n_proof_seed_35` AS `district_wff_n_proof_seed_35`
,`team_data`.`league_wff_n_proof_seed_36` AS `league_wff_n_proof_seed_36`
,`team_data`.`current_events_74` AS `current_events_74`
,`team_data`.`equations_section_75` AS `equations_section_75`
,`team_data`.`on_sets_section_76` AS `on_sets_section_76`
,`team_data`.`linguishtik_section_77` AS `linguishtik_section_77`
,`team_data`.`wff_n_proof_section_78` AS `wff_n_proof_section_78` 
from ((`active_teams` left join `team_data` on((`active_teams`.`id` = `team_data`.`entity_id`))) 
left join `active_registration_group_contacts` `argc` on((`argc`.`contact_id` = `active_teams`.`created_id`)))
;

CREATE OR REPLACE VIEW `agloa_active_team_competitions` AS 
select `active_team_data`.`team_id` AS `team_id`,`active_team_data`.`title` AS `team_name`,`active_team_data`.`created_id` AS `created_id`,`active_team_data`.`created_by` AS `created_by`,`active_team_data`.`modified_id` AS `modified_id`,`active_team_data`.`modified_by` AS `modified_by`,`active_team_data`.`registration_group_id` AS `registration_group_id`,`active_team_data`.`registration_group` AS `registration_group`
,`active_team_data`.`equations_21` AS `EQ`
,`active_team_data`.`on_sets_22` AS `OS`
,`active_team_data`.`linguishtik_23` AS `LI`
,`active_team_data`.`propaganda_24` AS `PROP`
,`active_team_data`.`presidents_25` AS `PREZ`
,`active_team_data`.`world_events_26` AS `WE`
,`active_team_data`.`wff_n_proof_27` AS `WFF`
,`active_team_data`.`current_events_74` AS `CE`
,`active_team_data`.`district_equations_seed_29` AS `district_equations_seed`
,`active_team_data`.`league_equations_seed_30` AS `league_equations_seed`
,`active_team_data`.`district_on_sets_seed_31` AS `district_on_sets_seed`
,`active_team_data`.`league_on_sets_seed_32` AS `league_on_sets_seed`
,`active_team_data`.`district_linguishtik_seed_33` AS `district_linguishtik_seed`
,`active_team_data`.`league_linguishtik_seed_34` AS `league_linguishtik_seed`
,`active_team_data`.`district_wff_n_proof_seed_35` AS `district_wff_n_proof_seed`
,`active_team_data`.`league_wff_n_proof_seed_36` AS `league_wff_n_proof_seed`
,`active_team_data`.`equations_section_75` AS `equations_section`
,`active_team_data`.`on_sets_section_76` AS `on_sets_section`
,`active_team_data`.`linguishtik_section_77` AS `linguishtik_section`
,`active_team_data`.`wff_n_proof_section_78` AS `wff_n_proof_section`
,concat(if((`active_team_data`.`equations_21` <> ''),left(`active_team_data`.`equations_21`,1),'_')
,if((`active_team_data`.`on_sets_22` <> ''),left(`active_team_data`.`on_sets_22`,1),'_')
,if((`active_team_data`.`linguishtik_23` <> ''),left(`active_team_data`.`linguishtik_23`,1),'_')
,if((`active_team_data`.`propaganda_24` <> ''),left(`active_team_data`.`propaganda_24`,1),'_')
,if((`active_team_data`.`presidents_25` <> ''),left(`active_team_data`.`presidents_25`,1),'_')
,if((`active_team_data`.`world_events_26` <> ''),left(`active_team_data`.`world_events_26`,1),'_')
,if((`active_team_data`.`wff_n_proof_27` <> ''),left(`active_team_data`.`wff_n_proof_27`,1),'_')
,if((`active_team_data`.`current_events_74` <> ''),left(`active_team_data`.`current_events_74`,1),'_')) AS `competition_key` 
from `active_team_data`
;

CREATE OR REPLACE VIEW `agloa_active_team_competitions_pivoted` AS 
select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`EQ`,'EQ') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`EQ` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`OS`,'OS') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`OS` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`LI`,'LI') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`LI` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`PROP`,'PROP') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`PROP` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`PREZ`,'PREZ') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`PREZ` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`WE`,'WE') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`WE` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`CE`,'CE') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`CE` <> '') 
union select `agloa_active_team_competitions`.`team_id` AS `team_id`,concat(`agloa_active_team_competitions`.`WFF`,'WFF') AS `competition` from `agloa_active_team_competitions` where (`agloa_active_team_competitions`.`WFF` <> '')
;

CREATE OR REPLACE VIEW `EligibleTeamPlayerCompetitionMatching` AS 
select `t`.`team_id` AS `Team`,`p`.`player` AS `Player`,count(0) AS `nMatching` 
from (`agloa_active_team_competitions_pivoted` `t` 
join `PlayerCompetitionNullTeam` `p` on((`t`.`competition` = `p`.`competition`))) group by `t`.`team_id`,`p`.`player`
;

CREATE OR REPLACE VIEW `TeamCompetitionsCount` AS 
select `agloa_active_team_competitions_pivoted`.`team_id` AS `Team`, count(0) AS `competitions` from `agloa_active_team_competitions_pivoted` group by `agloa_active_team_competitions_pivoted`.`team_id`
;

CREATE OR REPLACE VIEW `EligibleTeamPlayers` AS 
select distinct `t`.`Team` AS `Team`,`tp`.`Player` AS `Player`,argc.group_id AS `registration_group`
-- ,`rg`.`scheduling_group` AS `scheduling_group` 
from ((((`EligibleTeamPlayerCompetitionMatching` `tp` 
join `TeamCompetitionsCount` `t` on((`tp`.`Team` = `t`.`Team`))) 
join `player_competition_type` `pc` on((`pc`.`contact_id` = `tp`.`Player`))) 
join active_registration_group_contacts argc ON argc.contact_id = `pc`.`contact_id`
join `agloa_active_team_competitions_pivoted` `tc` on((`tc`.`team_id` = `t`.`Team`))) 
join `active_registration_groups` `rg` on((argc.group_id = `rg`.`id`))) 
where (`tp`.`nMatching` = `t`.`competitions`)
;

CREATE OR REPLACE VIEW `team_group_ids` AS 
select `civicrm_group`.`id` AS `id` from `civicrm_group` where (`civicrm_group`.`group_type` like concat(concat('%',(select `team_group_value`.`value` from `team_group_value`)),'%'))
;

CREATE OR REPLACE VIEW `team_group_contact` AS 
select `civicrm_group_contact`.`group_id` AS `team`,`civicrm_group_contact`.`contact_id` AS `player` 
from (`civicrm_group_contact` join `team_group_ids` on((`team_group_ids`.`id` = `civicrm_group_contact`.`group_id`)))
;

CREATE OR REPLACE VIEW `latest_active_tourament_participant_line_items_group` AS select `latpli`.`id` AS `id`,`latpli`.`participant_id` AS `participant_id`,`latpli`.`contact_id` AS `contact_id`,`latpli`.`price_field` AS `price_field`,`latpli`.`qty` AS `qty`,`argc`.`title` AS `registration_group` from (`latest_active_tourament_participant_line_items` `latpli` join `active_registration_group_contacts` `argc` on((`argc`.`contact_id` = `latpli`.`contact_id`)))
;

CREATE OR REPLACE VIEW `latest_active_registration_group_line_items` AS select `latest_active_tourament_participant_line_items_group`.`registration_group` AS `registration_group`,`latest_active_tourament_participant_line_items_group`.`price_field` AS `price_field`,sum(`latest_active_tourament_participant_line_items_group`.`qty`) AS `qty` from `latest_active_tourament_participant_line_items_group` group by `latest_active_tourament_participant_line_items_group`.`registration_group`,`latest_active_tourament_participant_line_items_group`.`price_field`
;

CREATE OR REPLACE VIEW `registered_players_not_on_team` AS select `pct`.`contact_id` AS `contact_id`,`pct`.`sort_name` AS `sort_name`,`pct`.`competition` AS `competition`,`pct`.`competition_type` AS `competition_type`,`arcg`.`title` AS `registration_group` from (`player_competition_type` `pct` join `active_registration_group_contacts` `arcg` on((`arcg`.`contact_id` = `pct`.`contact_id`))) where (not(exists(select 1 from `agloa_active_team_player_competition` `aatpc` where ((`aatpc`.`contact_id` = `pct`.`contact_id`) and (`aatpc`.`competition_type` = `pct`.`competition_type`))))) order by `pct`.`competition`,`arcg`.`title`
;

CREATE OR REPLACE VIEW `agloa_orphaned_players` AS 
select distinct `alapd`.`player_id` AS `player_id`,`alapd`.`player_name` AS `player_name`,`alapd`.`competition_key` AS `competition_key`,
`rpnot`.`registration_group` AS `registration_group` 
from (`agloa_latest_active_player_data` `alapd` 
join `registered_players_not_on_team` `rpnot` on((`alapd`.`player_id` = `rpnot`.`contact_id`)))
;

CREATE OR REPLACE VIEW `agloa_game_division_count` AS select 'EQ' AS `game`,`agloa_latest_active_player_data`.`EQ` AS `division`,count(`agloa_latest_active_player_data`.`EQ`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`EQ` having (`agloa_latest_active_player_data`.`EQ` <> '') union select 'OS' AS `game`,`agloa_latest_active_player_data`.`OS` AS `division`,count(`agloa_latest_active_player_data`.`OS`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`OS` having (`agloa_latest_active_player_data`.`OS` <> '') union select 'LI' AS `game`,`agloa_latest_active_player_data`.`LI` AS `division`,count(`agloa_latest_active_player_data`.`LI`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`LI` having (`agloa_latest_active_player_data`.`LI` <> '') union select 'PROP' AS `game`,`agloa_latest_active_player_data`.`PROP` AS `division`,count(`agloa_latest_active_player_data`.`PROP`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`PROP` having (`agloa_latest_active_player_data`.`PROP` <> '') union select 'PREZ' AS `game`,`agloa_latest_active_player_data`.`PREZ` AS `division`,count(`agloa_latest_active_player_data`.`PREZ`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`PREZ` having (`agloa_latest_active_player_data`.`PREZ` <> '') union select 'Theme' AS `game`,`agloa_latest_active_player_data`.`WE` AS `division`,count(`agloa_latest_active_player_data`.`WE`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`WE` having (`agloa_latest_active_player_data`.`WE` <> '') union select 'CE' AS `game`,`agloa_latest_active_player_data`.`CE` AS `division`,count(`agloa_latest_active_player_data`.`CE`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`CE` having (`agloa_latest_active_player_data`.`CE` <> '') union select 'WFF' AS `game`,`agloa_latest_active_player_data`.`WFF` AS `division`,count(`agloa_latest_active_player_data`.`WFF`) AS `count` from `agloa_latest_active_player_data` group by `agloa_latest_active_player_data`.`WFF` having (`agloa_latest_active_player_data`.`WFF` <> '')
;

CREATE OR REPLACE VIEW  `latest_active_agloa_team_data` AS select `active_team_data`.`team_id` AS `team_id`,`active_team_data`.`title` AS `title`,`active_team_data`.`created_by` AS `created_by`,`active_team_data`.`modified_by` AS `modified_by`,`active_team_data`.`equations_21` AS `EQ`,`active_team_data`.`on_sets_22` AS `OS`,`active_team_data`.`linguishtik_23` AS `LI`,`active_team_data`.`propaganda_24` AS `PROP`,`active_team_data`.`presidents_25` AS `PREZ`,`active_team_data`.`world_events_26` AS `WE`,`active_team_data`.`wff_n_proof_27` AS `WFF`,`active_team_data`.`current_events_74` AS `CE` from `active_team_data`
;

CREATE OR REPLACE VIEW `agloa_active_team_competition_type` AS 
select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`EQ`,'EQ') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'EQ')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`EQ` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`OS`,'OS') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'OS')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`OS` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`LI`,'LI') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'Ling')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`LI` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`PROP`,'PROP') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'PROP')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`PROP` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`PREZ`,'PREZ') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'PREZ')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`PREZ` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`WE`,'WE') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'Theme')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`WE` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`CE`,'CE') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'CE')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`CE` <> '') union select `latest_active_agloa_team_data`.`team_id` AS `team_id`,concat(`latest_active_agloa_team_data`.`WFF`,'Wff') AS `competition`,(select `competition_type`.`name` from `competition_type` where (`competition_type`.`label` = 'Wff')) AS `competition_type` from `latest_active_agloa_team_data` where (`latest_active_agloa_team_data`.`WFF` <> '')
;

CREATE PROCEDURE `update_contact_from_person`() DETERMINISTIC NO SQL SQL SECURITY DEFINER 
INSERT INTO civicrm_contact(first_name, middle_name, last_name,prefix_id,suffix_id, gender_id, birth_date)
SELECT first_name, middle_name, last_name,prefix_id,suffix_id, gender_id, birth_date FROM person_to_contact;

delimiter //
CREATE PROCEDURE `Replace_Person`(IN `p_id` INT(10) UNSIGNED, IN `p_external_identifier` VARCHAR(64) CHARSET utf8, IN `p_first_name` VARCHAR(64) CHARSET utf8, IN `p_middle_name` VARCHAR(64) CHARSET utf8, IN `p_last_name` VARCHAR(64) CHARSET utf8, IN `p_prefix` VARCHAR(10) CHARSET utf8, IN `p_suffix` VARCHAR(10) CHARSET utf8, IN `p_gender` VARCHAR(10) CHARSET utf8, IN `p_birth_date` DATE)
    NO SQL
    DETERMINISTIC

BEGIN
SET @lv_id = IFNULL(p_id,(SELECT 1+MAX(ID) FROM person));
INSERT INTO `person` (`id`, `external_identifier`, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `gender`, `birth_date`) 
VALUES (@lv_id, p_external_identifier, p_first_name, p_middle_name, p_last_name, p_prefix, p_suffix, p_gender, p_birth_date);
END
//
delimiter ;

CREATE TRIGGER `civicrm_contact_after_insert` AFTER INSERT ON `civicrm_contact` FOR EACH ROW 
INSERT IGNORE INTO person( `id`, external_identifier, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `gender`, `birth_date` )
SELECT `id`,`id`, `first_name`, `middle_name`, `last_name`, `prefix`, `suffix`, `gender`, `birth_date` 
FROM `person_from_contact` WHERE person_from_contact.id = new.id;

CREATE TRIGGER `civicrm_contact_after_update` AFTER UPDATE ON `civicrm_contact` FOR EACH ROW 
UPDATE person JOIN person_from_contact ON person_from_contact.id = new.id 
SET person.first_name = person_from_contact.first_name
, person.middle_name = person_from_contact.middle_name
, person.last_name = person_from_contact.last_name
, person.prefix = person_from_contact.prefix
, person.suffix = person_from_contact.suffix
, person.gender = person_from_contact.gender
, person.birth_date = person_from_contact.birth_date
WHERE person.external_identifier = new.id;

CREATE  TRIGGER `civicrm_group_after_insert` AFTER INSERT ON `civicrm_group` FOR EACH ROW 
IF (new.group_type) LIKE CONCAT( CONCAT( '%', (SELECT value FROM sceduling_group_value) ) , '%' ) THEN
 INSERT IGNORE INTO scheduling_group(id, label, description, sponsor_org, region)
 VALUES (LEFT(new.title,20), new.title, new.description, (SELECT id FROM `tournament_sponsor` LIMIT 1), 'Combo');
END IF

*/
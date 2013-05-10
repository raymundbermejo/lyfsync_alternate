SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `lyfsync_database` DEFAULT CHARACTER SET latin1 ;
USE `lyfsync_database` ;

-- -----------------------------------------------------
-- Table `lyfsync_database`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`events` (
  `event_id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
  `event_title` VARCHAR(100) NOT NULL ,
  `event_description` VARCHAR(1000) NOT NULL ,
  `event_privacy` TINYINT(1) NOT NULL ,
  `event_venue` VARCHAR(200) NOT NULL ,
  `event_date` VARCHAR(50) NOT NULL ,
  `event_thumbnail` VARCHAR(200) NOT NULL ,
  `event_poster1` VARCHAR(200) NOT NULL ,
  `event_poster2` VARCHAR(200) NOT NULL ,
  `event_music` VARCHAR(200) NOT NULL ,
  `event_keywords` TEXT NOT NULL ,
  `event_link` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`event_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(16) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `gender` ENUM('Male','Female') NOT NULL ,
  `website` VARCHAR(255) NULL ,
  `country` VARCHAR(255) NULL ,
  `user_level` ENUM('Normal','Premium') NOT NULL DEFAULT 'Normal' ,
  `avatar` VARCHAR(255) NULL ,
  `user_ip` VARCHAR(255) NOT NULL ,
  `signup_date` DATETIME NOT NULL ,
  `lastlogin_date` DATETIME NOT NULL ,
  `notifcheck` DATETIME NOT NULL ,
  `active` ENUM('0','1') NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`user_id`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`users_security`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`users_security` (
  `id` INT NOT NULL ,
  `username` VARCHAR(16) NOT NULL ,
  `background` VARCHAR(255) NOT NULL ,
  `question` VARCHAR(255) NULL ,
  `answer` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`users_friends`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`users_friends` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user1` VARCHAR(16) NOT NULL ,
  `user2` VARCHAR(16) NOT NULL ,
  `datemade` DATETIME NOT NULL ,
  `acceptance` ENUM('0','1') NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`users_blocked`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`users_blocked` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `blocker` VARCHAR(16) NOT NULL ,
  `blockee` VARCHAR(16) NOT NULL ,
  `blockdate` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`photos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`photos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user` VARCHAR(16) NOT NULL ,
  `gallery` VARCHAR(16) NOT NULL ,
  `filename` VARCHAR(255) NOT NULL ,
  `description` VARCHAR(255) NULL ,
  `uploaddate` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`notifications`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`notifications` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user` VARCHAR(16) NOT NULL ,
  `initiator` VARCHAR(16) NOT NULL ,
  `app` VARCHAR(255) NOT NULL ,
  `note` VARCHAR(255) NOT NULL ,
  `did_read` ENUM('0','1') NOT NULL DEFAULT '0' ,
  `date_time` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lyfsync_database`.`status`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `lyfsync_database`.`status` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `osid` INT(11) NOT NULL ,
  `account_name` VARCHAR(16) NOT NULL ,
  `author` VARCHAR(16) NOT NULL ,
  `type` ENUM('a','b','c') NOT NULL ,
  `data` TEXT NOT NULL ,
  `postdate` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `lyfsync_database` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

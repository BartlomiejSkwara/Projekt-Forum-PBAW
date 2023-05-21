-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema forum
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema forum
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8;
USE `forum` ;

-- -----------------------------------------------------
-- Table `forum`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`user` ;

CREATE TABLE IF NOT EXISTS `forum`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(20) UNIQUE NOT NULL, 
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `role` VARCHAR(20) NOT NULL,
  `creation_data` DATETIME NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- -----------------------------------------------------
-- Table `forum`.`category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`category` ;

CREATE TABLE IF NOT EXISTS `forum`.`category` (
  `idcategory` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(90) NOT NULL,
  PRIMARY KEY (`idcategory`))
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- -----------------------------------------------------
-- Table `forum`.`thread`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`thread` ;

CREATE TABLE IF NOT EXISTS `forum`.`thread` (
  `idthread` INT NOT NULL AUTO_INCREMENT,
  `topic` VARCHAR(45) NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `update_date` DATETIME NOT NULL,
  `category_id` INT NOT NULL,
  `message_count` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`idthread`),
  INDEX `fk_thread_category1_idx` (`category_id` ASC) ,
  INDEX `fk_thread_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_thread_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `forum`.`category` (`idcategory`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_thread_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `forum`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- -----------------------------------------------------
-- Table `forum`.`message`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`message` ;

CREATE TABLE IF NOT EXISTS `forum`.`message` (
  `idmessage` INT NOT NULL AUTO_INCREMENT,
  `creation_date` DATETIME NOT NULL,
  `content` VARCHAR(180) NOT NULL,
  `thread_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`idmessage`),
  INDEX `fk_message_thread1_idx` (`thread_id` ASC) ,
  INDEX `fk_message_user1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_message_thread1`
    FOREIGN KEY (`thread_id`)
    REFERENCES `forum`.`thread` (`idthread`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_message_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `forum`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- -----------------------------------------------------
-- Table `forum`.`private_message`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`private_message` ;

CREATE TABLE IF NOT EXISTS `forum`.`private_message` (
  `idmessage` INT NOT NULL AUTO_INCREMENT,
  `creation_date` DATETIME NOT NULL,
  `content` VARCHAR(180) NOT NULL,
  `sender_id` INT NOT NULL,
  `receiver_id` INT NOT NULL,
  PRIMARY KEY (`idmessage`),
  INDEX `fk_message_user1_idx` (`sender_id` ASC) ,
  INDEX `fk_private_message_user1_idx` (`receiver_id` ASC) ,
  CONSTRAINT `fk_message_user10`
    FOREIGN KEY (`sender_id`)
    REFERENCES `forum`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_private_message_user1`
    FOREIGN KEY (`receiver_id`)
    REFERENCES `forum`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- -----------------------------------------------------
-- Table `forum`.`bookmark`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `forum`.`bookmark` ;

CREATE TABLE IF NOT EXISTS `forum`.`bookmark` (
  `user_id` INT NOT NULL,
  `message_id` INT NOT NULL,
  INDEX `fk_bookmark_user1_idx` (`user_id` ASC) ,
  INDEX `fk_bookmark_message1_idx` (`message_id` ASC) ,
  CONSTRAINT `fk_bookmark_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `forum`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_bookmark_message1`
    FOREIGN KEY (`message_id`)
    REFERENCES `forum`.`message` (`idmessage`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `role`, `creation_data`) VALUES (NULL, 'admin', 'admin', 'admin@interia.pl', 'admin', '2023-05-21 13:00:28.000000');
INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `role`, `creation_data`) VALUES (NULL, 'Krisent', '123', 'krisent@gmail.com', 'user', '2023-05-21 13:01:37.000000');
DROP DATABASE IF EXISTS location_voiture;
CREATE DATABASE IF NOT EXISTS location_voiture;

DROP TABLE IF EXISTS `location_voiture`.`users`;
CREATE TABLE `location_voiture`.`users` (
  `userNb` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `user_pwd` VARCHAR(45) NOT NULL,
  `user_email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userNb`));
  
  DROP TABLE IF EXISTS `location_voiture`.`automobiles`;
  CREATE TABLE `location_voiture`.`automobiles` (
  `id_auto` INT NOT NULL AUTO_INCREMENT,
  `class` VARCHAR(45) NULL,
  `make` VARCHAR(45) NULL,
  `model` VARCHAR(45) NULL,
  `doors_nb` INT NULL,
  `places_nb` INT NULL,
  `fuel` VARCHAR(45) NULL,
  `transmission` VARCHAR(45) NULL,
  `price` FLOAT NULL,
  `photos` VARCHAR(45) NULL,
  PRIMARY KEY (`id_auto`));
  
DROP TABLE IF EXISTS `location_voiture`.`reservations`;
CREATE TABLE `location_voiture`.`reservations` (
  `id_res` INT NOT NULL AUTO_INCREMENT,
  `userNb` INT NOT NULL,
  `id_auto` INT NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `assurance` TINYINT NOT NULL,
  PRIMARY KEY (`id_res`));
  
ALTER TABLE `location_voiture`.`reservations` 
ADD INDEX `userNb_idx` (`userNb` ASC) VISIBLE,
ADD INDEX `id_auto_idx` (`id_auto` ASC) VISIBLE;
;
ALTER TABLE `location_voiture`.`reservations` 
ADD CONSTRAINT `userNb`
  FOREIGN KEY (`userNb`)
  REFERENCES `location_voiture`.`users` (`userNb`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `id_auto`
  FOREIGN KEY (`id_auto`)
  REFERENCES `location_voiture`.`automobiles` (`id_auto`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
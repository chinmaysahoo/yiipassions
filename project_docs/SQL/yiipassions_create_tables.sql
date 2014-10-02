SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `yiipassions` ;
CREATE SCHEMA IF NOT EXISTS `yiipassions` DEFAULT CHARACTER SET utf8 ;
USE `yiipassions` ;

-- -----------------------------------------------------
-- Table `yiipassions`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`user` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `firstname` VARCHAR(50) NULL DEFAULT NULL,
  `lastname` VARCHAR(50) NULL DEFAULT NULL,
  `photoURL` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yiipassions`.`user_oauth`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`user_oauth` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`user_oauth` (
  `user_id` INT(11) NOT NULL,
  `provider` VARCHAR(45) NOT NULL,
  `identifier` VARCHAR(64) NOT NULL,
  `profile_cache` TEXT NULL DEFAULT NULL,
  `session_data` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`provider`, `identifier`),
  UNIQUE INDEX `unic_user_id_name` (`user_id` ASC, `provider` ASC),
  INDEX `oauth_user_id` (`user_id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yiipassions`.`user_passion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`user_passion` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`user_passion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `passion_text` VARCHAR(100) NULL,
  `user_id` INT NULL,
  `created_on` DATETIME NULL,
  `modified_on` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_user_passion_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_passions_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`global_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`global_tag` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`global_tag` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `global_tag_name` VARCHAR(255) NOT NULL,
  `tag_frequency` INT NULL DEFAULT 1,
  `created_on` DATETIME NULL,
  `modified_on` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`passion_todo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`passion_todo` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`passion_todo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `todo_name` VARCHAR(255) NOT NULL,
  `due_date` DATETIME NOT NULL,
  `repeat_cycle` VARCHAR(45) NULL,
  `todo_status` VARCHAR(45) NOT NULL,
  `created_on` DATETIME NULL,
  `modified_on` DATETIME NULL,
  `user_passion_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_passion_todo_user_passion_id_idx` (`user_passion_id` ASC),
  CONSTRAINT `fk_passion_todo_user_passion_id`
    FOREIGN KEY (`user_passion_id`)
    REFERENCES `yiipassions`.`user_passion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`post`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`post` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`post` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_content` LONGTEXT NOT NULL,
  `post_image_url` VARCHAR(255) NULL,
  `user_passion_id` INT NOT NULL,
  `created_on` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_user_passion_id_idx` (`user_passion_id` ASC),
  CONSTRAINT `fk_post_user_passion_id`
    FOREIGN KEY (`user_passion_id`)
    REFERENCES `yiipassions`.`user_passion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`post_unrelated`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`post_unrelated` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`post_unrelated` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_unrelated_post_id_idx` (`post_id` ASC),
  INDEX `fk_post_unrelated_user_id_idx` (`user_id` ASC),
  CONSTRAINT `fk_post_unrelated_post_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `yiipassions`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_unrelated_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`post_liked`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`post_liked` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`post_liked` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_liked_post_id_idx` (`post_id` ASC),
  INDEX `fk_post_liked_user_id_idx` (`user_id` ASC),
  CONSTRAINT `fk_post_liked_post_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `yiipassions`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_liked_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`post_comment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`post_comment` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`post_comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment_text` LONGTEXT NOT NULL,
  `comment_image_url` VARCHAR(255) NULL,
  `post_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_on` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_comment_post_id_idx` (`post_id` ASC),
  INDEX `fk_post_comment_user_id_idx` (`user_id` ASC),
  CONSTRAINT `fk_post_comment_post_id`
    FOREIGN KEY (`post_id`)
    REFERENCES `yiipassions`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_comment_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`comment_flagged`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`comment_flagged` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`comment_flagged` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_flagged_post_comment_id_idx` (`comment_id` ASC),
  INDEX `fk_comment_flagged_user_id_idx` (`user_id` ASC),
  CONSTRAINT `fk_comment_flagged_post_comment_id`
    FOREIGN KEY (`comment_id`)
    REFERENCES `yiipassions`.`post_comment` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_flagged_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`comment_liked`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`comment_liked` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`comment_liked` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_liked_post_comment_id_idx` (`comment_id` ASC),
  INDEX `fk_comment_liked_user_id_idx` (`user_id` ASC),
  CONSTRAINT `fk_comment_liked_post_comment_id`
    FOREIGN KEY (`comment_id`)
    REFERENCES `yiipassions`.`post_comment` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_liked_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `yiipassions`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`passion_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`passion_tag` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`passion_tag` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_passion_id` INT NOT NULL,
  `global_tag_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_passion_tag_user_passion_id_idx` (`user_passion_id` ASC),
  INDEX `fk_passion_tag_global_tag_id_idx` (`global_tag_id` ASC),
  CONSTRAINT `fk_passion_tag_user_passion_id`
    FOREIGN KEY (`user_passion_id`)
    REFERENCES `yiipassions`.`user_passion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_passion_tag_global_tag_id`
    FOREIGN KEY (`global_tag_id`)
    REFERENCES `yiipassions`.`global_tag` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiipassions`.`unsafe_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiipassions`.`unsafe_tag` ;

CREATE TABLE IF NOT EXISTS `yiipassions`.`unsafe_tag` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `unsafe_tag` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

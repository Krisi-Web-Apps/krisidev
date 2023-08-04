CREATE DATABASE IF NOT EXISTS `website-template-php`;

-- create table users.
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(75) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `city` VARCHAR(75) NULL,
  `fullname` VARCHAR(75) NOT NULL,
  `role_as` VARCHAR(20) NOT NULL DEFAULT 'user',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE (`email`)
) ENGINE = InnoDB;

-- create table sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `user_id` INT NOT NULL,
  `token` VARCHAR(1000) NOT NULL,
  `token_expiry` INT(11) NOT NULL,
  UNIQUE (`user_id`)
) ENGINE = InnoDB;

CREATE TABLE `pages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(75) NOT NULL,
  `meta_title` VARCHAR(120) NOT NULL,
  `meta_description` VARCHAR(200) NOT NULL,
  `meta_keywords` VARCHAR(1000) NOT NULL,
  `slug` VARCHAR(75) NOT NULL,
  `lang` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`slug`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `manage_page_content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NOT NULL,
  `text` LONGTEXT NOT NULL,
  `comment` LONGTEXT NULL,
  `page_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX (`name`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `email_messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `subject` VARCHAR(255) NOT NULL,
  `body` TEXT NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `city` VARCHAR(75) NOT NULL,
  `fullname` VARCHAR(75) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `layouts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `slug` VARCHAR(75) NOT NULL,
  `title` VARCHAR(75) NOT NULL,
  `location` VARCHAR(75) NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE (`slug`),
  UNIQUE (`title`),
  UNIQUE (`location`)
) ENGINE = InnoDB;

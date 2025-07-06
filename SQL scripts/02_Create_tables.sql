
USE vas_magician_db
;

SET foreign_key_checks = 0
;

/* Smazání tabulek, pokud existují */

DROP TABLE IF EXISTS `User` CASCADE;
DROP TABLE IF EXISTS `Blog` CASCADE;
DROP TABLE IF EXISTS `BlogPhoto` CASCADE;



/* Vytvoření tabulek */

CREATE TABLE `User` (
    `id` INT NOT NULL AUTO_INCREMENT,
    
    `username` NVARCHAR(100) NOT NULL,
    `password` NVARCHAR(255) NOT NULL,

	`remember_token` NVARCHAR(100) NULL,

    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    CONSTRAINT `PK_User` PRIMARY KEY (`id`)
);

CREATE TABLE `Blog` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` NVARCHAR(100) NOT NULL,
    `date` DATE NOT NULL,
    `location` NVARCHAR(100) NOT NULL,
    `location2` NVARCHAR(100) NOT NULL,
    `text` BLOB NOT NULL,
    `category_id` INT NOT NULL,

    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    CONSTRAINT `PK_Blog` PRIMARY KEY (`id`),
    CONSTRAINT `FK_Blog_category_id` FOREIGN KEY (`category_id`) REFERENCES `Category`(`id`) ON DELETE No Action ON UPDATE No Action
);

CREATE TABLE `BlogPhoto` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` NVARCHAR(100) NOT NULL,
    `original_name` NVARCHAR(255) NOT NULL,
    `data` LONGBLOB NOT NULL,
    `is_main_photo` BOOL NOT NULL,
    `blog_id` INT NOT NULL,

    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    CONSTRAINT `PK_BlogPhoto` PRIMARY KEY (`id`),
    CONSTRAINT `FK_BlogPhoto_blog_id` FOREIGN KEY (`blog_id`) REFERENCES `Blog`(`id`) ON DELETE No Action ON UPDATE No Action
);

CREATE TABLE `Category` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` NVARCHAR(100) NOT NULL,

    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NULL,
    CONSTRAINT `PK_Category` PRIMARY KEY (`id`)
);




SET FOREIGN_KEY_CHECKS=1
; 
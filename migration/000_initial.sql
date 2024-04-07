START TRANSACTION;

USE `website`;

CREATE TABLE IF NOT EXISTS `works` (
	`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(128) NOT NULL,
	`file_path` TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS `messages` (
	`id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`created_at` DATETIME NOT NULL DEFAULT NOW(),
	`text` TEXT NOT NULL
);

INSERT INTO works(`name`, `file_path`)
    VALUES ('img1', '/static/uploads/placeholder.jpg');
	
COMMIT;
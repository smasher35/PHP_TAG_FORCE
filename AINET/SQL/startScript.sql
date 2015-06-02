-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `approved_by` int(10) unsigned DEFAULT NULL,
  `replaces_id` int(10) unsigned DEFAULT NULL,
  `state` int(10) unsigned NOT NULL,
  `refusal_msg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `comments_project_id_foreign` (`project_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_approved_by_foreign` (`approved_by`),
  KEY `comments_replaces_id_foreign` (`replaces_id`),
  CONSTRAINT `comments_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  CONSTRAINT `comments_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `comments_replaces_id_foreign` FOREIGN KEY (`replaces_id`) REFERENCES `comments` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `institutions`;
CREATE TABLE `institutions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `institution_project`;
CREATE TABLE `institution_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `institution_id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `institution_project_institution_id_project_id_unique` (`institution_id`,`project_id`),
  KEY `institution_project_project_id_foreign` (`project_id`),
  CONSTRAINT `institution_project_institution_id_foreign` FOREIGN KEY (`institution_id`) REFERENCES `institutions` (`id`),
  CONSTRAINT `institution_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flags` smallint(6) NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `int_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `approved_by` int(10) unsigned NOT NULL,
  `replaces_id` int(10) unsigned DEFAULT NULL,
  `state` int(10) unsigned NOT NULL,
  `refusal_msg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `media_project_id_foreign` (`project_id`),
  KEY `media_created_by_foreign` (`created_by`),
  KEY `media_approved_by_foreign` (`approved_by`),
  KEY `media_replaces_id_foreign` (`replaces_id`),
  CONSTRAINT `media_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  CONSTRAINT `media_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `media_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `media_replaces_id_foreign` FOREIGN KEY (`replaces_id`) REFERENCES `media` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_01_000001_create_institutions_table',	1),
('2015_03_01_000002_create_tags_table',	1),
('2015_03_01_000010_create_users_table',	1),
('2015_03_01_000100_create_projects_table',	1),
('2015_03_01_001000_create_institution_project_table',	1),
('2015_03_01_002000_create_project_tag_table',	1),
('2015_03_01_003000_create_project_user_table',	1),
('2015_03_01_004000_create_media_table',	1),
('2015_03_01_005000_create_comments_table',	1);

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acronym` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_unicode_ci,
  `started_at` date NOT NULL,
  `finished_at` date DEFAULT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `updated_by` int(10) unsigned NOT NULL,
  `approved_by` int(10) unsigned  NULL,
  `used_software` text COLLATE utf8_unicode_ci,
  `used_hardware` text COLLATE utf8_unicode_ci,
  `observations` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_until` date NOT NULL,
  `replaces_id` int(10) unsigned DEFAULT NULL,
  `state` int(10) unsigned NOT NULL,
  `refusal_msg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `projects_created_by_foreign` (`created_by`),
  KEY `projects_updated_by_foreign` (`updated_by`),
  KEY `projects_approved_by_foreign` (`approved_by`),
  KEY `projects_replaces_id_foreign` (`replaces_id`),
  CONSTRAINT `projects_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  CONSTRAINT `projects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `projects_replaces_id_foreign` FOREIGN KEY (`replaces_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `projects_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `project_tag`;
CREATE TABLE `project_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `state` int(11) NOT NULL,
  `added_by` int(10) unsigned NOT NULL,
  `approved_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_tag_project_id_tag_id_unique` (`project_id`,`tag_id`),
  KEY `project_tag_tag_id_foreign` (`tag_id`),
  KEY `project_tag_added_by_foreign` (`added_by`),
  KEY `project_tag_approved_by_foreign` (`approved_by`),
  CONSTRAINT `project_tag_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`),
  CONSTRAINT `project_tag_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  CONSTRAINT `project_tag_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `project_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `project_user`;
CREATE TABLE `project_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `position` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_user_user_id_project_id_unique` (`user_id`,`project_id`),
  KEY `project_user_project_id_foreign` (`project_id`),
  CONSTRAINT `project_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `project_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution_id` int(10) unsigned NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flags` smallint(6) NOT NULL,
  `role` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_alt_email_unique` (`alt_email`),
  KEY `users_institution_id_foreign` (`institution_id`),
  CONSTRAINT `users_institution_id_foreign` FOREIGN KEY (`institution_id`) REFERENCES `institutions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- 2015-05-07 08:32:42


INSERT INTO institutions (name)
VALUES ("ESTG - Instituto Politécnico de Leiria"),("ESTM - Instituto Politécnico de Leiria"),("ESECS - Instituto Politécnico de Leiria"),("ESAD.CR - Instituto Politécnico de Leiria"),("ESSLei - Instituto Politécnico de Leiria");

INSERT INTO users (name, email, alt_email, password, institution_id, position, photo_url, profile_url, flags, role, remember_token, created_at, updated_at)
VALUES ("ruben", "2130664@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("paulo", "2130628@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("alfredo", "2130647@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("admin", "admin@my.ipleiria.pt", NULL, "admin", 1, "other", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("editor", "editor@my.ipleiria.pt", NULL, "editor", 1, "other", NULL, NULL, 1, 2, NULL, NOW(), NOW()),
("autor", "autor@my.ipleiria.pt", NULL, "autor", 1, "other", NULL, NULL, 1, 3, NULL, NOW(), NOW());

INSERT INTO projects (name, acronym, description, type, theme, keywords, started_at, finished_at, created_by, updated_by, approved_by, used_software, used_hardware, observations, featured_until, replaces_id, state, refusal_msg, deleted_at, created_at, updated_at)
VALUES ("Kano - The Computer Kit", "Kano", "Kano is a computer you build and code yourself. Lego simple, Raspberry Pi powerful, and hugely fun.", "hardware", "hardware", "hardware, computer, raspberry, pi2, linux", NOW(), NOW(), 6, 6, 1, "GNU/Linux", "RaspberiPi2, DIY Speaker, WiFi_Dongle", "Ships Free To Most Countries", NOW(), NULL, 1, NULL, NULL, NOW(), NOW()),
("Laravel", "Lar", "Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.", "software", "framework", "web, framework, php, bootstap html5", NOW(), NOW(), 5, 5, 5, "GNU/Linux, Windows MacOS", "PC, MAC", "a clean and classy framework for PHP web development", NOW(), NULL, 2, NULL, NULL, NOW(), NOW()),
("Multimedia Project", "MMP", "Multimedia promotional video, to promote our Computer Engineer Course at IPLeiria", "video", "multimedia", "multimedia, video, 3d, sound, image, vectorial, design", NOW(), NOW(), 1, 1, 1, "Blender3d, Inkscape, GIMP, Audacity, VSDC", "PC, MAC", "Nothing to show", NOW(), NULL, 2, NULL, NULL, NOW(), NOW()),
("By Invitation Only", "BIO", "Conference Agenda Viewer and Users Networking Provider", "android", "management", "BIO, conference, android, mobile, network", NOW(), NOW(), 1, 1, 1, "Android Studio", "PC, MAC", "Nothing to show", NOW(), NULL, 2, NULL, NULL, NOW(), NOW());
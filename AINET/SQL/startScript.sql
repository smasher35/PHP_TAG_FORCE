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

INSERT INTO `institutions` (`id`, `name`) VALUES
(1,	'Instituto Politécnico de Leiria'),
(2,	'Instituto Politécnico de Santarém'),
(3,	'Instituto Politécnico de Lisboa'),
(4,	'Instituto Politécnico do Porto'),
(5,	'Instituto Politécnico de Tomar'),
(6,	'Instituto Politécnico de Beja'),
(7,	'Universidade de Lisboa'),
(8,	'Universidade de Coimbra'),
(9,	'Universidade de Porto'),
(10,	'Universidade de Aveiro'),
(11,	'Universidade do Minho'),
(12,	'Universidade do Algarve'),
(13,	'Universidade da Beira Interior'),
(14,	'Centro de Investigação em Informática e Comunicações'),
(15,	'INESC'),
(16,	'Instituto de Telecomunicações');



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

INSERT INTO `projects` (`id`, `name`, `acronym`, `description`, `type`, `theme`, `keywords`, `started_at`, `finished_at`, `created_by`, `updated_by`, `approved_by`, `used_software`, `used_hardware`, `observations`, `featured_until`, `replaces_id`, `state`, `refusal_msg`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'Distributed actuating attitude',	'Diaa',	'Est iusto quis aut magnam in. Veniam inventore ab iste. Molestias voluptas numquam excepturi facilis perferendis accusamus voluptatem.',	'Officiis qui voluptatem error aut.',	'molestiae',	'veniam, maiores, non',	'2013-07-22',	'2015-02-01',	3,	11,	NULL,	NULL,	NULL,	'Iste ex maxime ut. Aut cumque itaque aut sit atque earum suscipit.',	NULL,	NULL,	0,	NULL,	NULL,	'2015-05-29 20:42:49',	'2015-05-29 20:42:49'),
(2,	'Switchable scalable frame',	'Ssf',	'Dicta est est aut consequatur repellat ipsum. Voluptas illo sed tenetur rerum modi illum vel. Vero suscipit aperiam veniam aperiam qui fugit. Qui rerum tenetur esse ad.\nNulla porro assumenda ea consequatur ut hic. Consequatur quibusdam asperiores debitis. Optio aut facere eos saepe eos ipsam. Nostrum minima aliquid rerum ab hic tempore accusantium.',	'Ad est rem consequatur dicta architecto.',	'ducimus',	'cupiditate, soluta, rerum, pariatur, deleniti',	'2014-05-08',	'2015-03-03',	9,	6,	NULL,	'Mozilla/5.0 (Windows; U; Windows NT 6.1) AppleWebKit/533.28.7 (KHTML, like Gecko) Version/5.0 Safari/533.28.7',	NULL,	NULL,	'2017-08-17',	NULL,	0,	NULL,	NULL,	'2015-05-29 20:42:49',	'2015-05-29 20:42:49'),
(3,	'Synergistic scalable projection',	'Ssp',	'Omnis maxime minus nulla dolor consequatur ut molestias. Est ratione repellat nihil impedit. Ut earum perferendis aut a tempore.\nUllam vel maxime sint qui facere porro. Ducimus qui perferendis non enim rem. Suscipit hic aperiam dicta est laboriosam earum.',	'Id et expedita.',	'totam',	'minima, perferendis, iure',	'2007-01-05',	NULL,	16,	6,	NULL,	'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/3.1)',	NULL,	NULL,	'2017-10-09',	NULL,	0,	NULL,	NULL,	'2015-05-29 20:42:49',	'2015-05-29 20:42:49'),
(4,	'Virtual exuding initiative',	'Viei',	'Omnis labore esse aut. Corrupti et atque error quia. Tenetur eos ratione molestias impedit vel consequatur quo vitae. Molestiae dolor ratione vel dolorem cum quia dolorum.',	'Voluptatem soluta voluptatem vel alias.',	'excepturi',	'sunt, id, exercitationem',	'2009-12-28',	'2010-07-22',	3,	9,	NULL,	NULL,	NULL,	'Dolor explicabo ut officiis aut aspernatur quae. Harum reprehenderit et sint eos quia.',	NULL,	NULL,	0,	NULL,	NULL,	'2015-05-29 20:42:49',	'2015-05-29 20:42:49'),
(5,	'Public-key coherent pricingstructure',	'Pucop',	'Omnis occaecati quo dolores sapiente iste et magni. Eos laborum possimus sit voluptates ipsam. Qui nesciunt est dolor. Ab sit architecto harum aut provident.',	'Quia ea ipsam ipsa laborum.',	'necessitatibus',	'voluptate, tenetur',	'2008-04-08',	NULL,	8,	16,	NULL,	'Mozilla/5.0 (Windows NT 4.0) AppleWebKit/5332 (KHTML, like Gecko) Chrome/37.0.815.0 Mobile Safari/5332',	NULL,	NULL,	'2017-05-14',	NULL,	0,	NULL,	NULL,	'2015-05-29 20:42:49',	'2015-05-29 20:42:49');


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

INSERT INTO `tags` (`id`, `tag`) VALUES
(1,	'Web'),
(2,	'Engenharia de Software'),
(3,	'Computação Móvel'),
(4,	'Cloud'),
(5,	'Segurança'),
(6,	'Programação'),
(7,	'Investigação'),
(8,	'Licenciatura'),
(9,	'Mestrado'),
(10,	'Curso de Especialização Tecnológica');


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



INSERT INTO users (name, email, alt_email, password, institution_id, position, photo_url, profile_url, flags, role, remember_token, created_at, updated_at)
VALUES ("ruben", "2130664@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("paulo", "2130628@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("alfredo", "2130647@my.ipleiria.pt", NULL, "admin", 1, "student", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("admin", "admin@my.ipleiria.pt", NULL, "admin", 1, "other", NULL, NULL, 1, 1, NULL, NOW(), NOW()),
("editor", "editor@my.ipleiria.pt", NULL, "editor", 1, "other", NULL, NULL, 1, 2, NULL, NOW(), NOW()),
("autor", "autor@my.ipleiria.pt", NULL, "autor", 1, "other", NULL, NULL, 1, 3, NULL, NOW(), NOW());

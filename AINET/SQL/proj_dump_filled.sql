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
(1, 'Instituto Politécnico de Leiria'),
(2, 'Instituto Politécnico de Santarém'),
(3, 'Instituto Politécnico de Lisboa'),
(4, 'Instituto Politécnico do Porto'),
(5, 'Instituto Politécnico de Tomar'),
(6, 'Instituto Politécnico de Beja'),
(7, 'Universidade de Lisboa'),
(8, 'Universidade de Coimbra'),
(9, 'Universidade de Porto'),
(10,    'Universidade de Aveiro'),
(11,    'Universidade do Minho'),
(12,    'Universidade do Algarve'),
(13,    'Universidade da Beira Interior'),
(14,    'Centro de Investigação em Informática e Comunicações'),
(15,    'INESC'),
(16,    'Instituto de Telecomunicações');

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

INSERT INTO `media` (`id`, `project_id`, `title`, `description`, `alt`, `flags`, `mime_type`, `ext_url`, `int_file`, `public_name`, `created_by`, `approved_by`, `replaces_id`, `state`, `refusal_msg`, `created_at`, `updated_at`) VALUES
(1, 1,  'Labore id ratione rem.',   'Ut accusamus sed eligendi.',   'A debitis dolorem sed.',   0,  'image/jpg',    NULL,   'projects/Munati0.jpg', 'projects/Munati0.jpg', 14, 13, NULL,   1,  NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(2, 5,  'Tenetur vel nobis voluptas eligendi.', 'Et ad sit atque dolore et et sed. Consectetur in aut ut ipsam molestiae vero.',    'Distinctio maiores consequatur.',  0,  'image/jpg',    NULL,   'projects/Adio1.jpg',   'projects/Adio1.jpg',   19, 10, NULL,   1,  NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(3, 2,  'Ut consequatur nihil laudantium et quo.',  'Ut eos rerum quisquam fuga.',  'Necessitatibus voluptatem ducimus architecto eum.',    0,  'image/jpg',    NULL,   'projects/Disco2.jpg',  'projects/Disco2.jpg',  19, 9,  NULL,   1,  NULL,   '2015-06-03 15:28:24',  '2015-06-03 15:28:24'),
(4, 5,  'Et rem impedit suscipit.', 'Labore et consequuntur voluptatem amet ipsum. Delectus id vel impedit sequi ipsum laudantium accusantium.',    'Quia adipisci est.',   0,  'image/jpg',    NULL,   'projects/Adio3.jpg',   'projects/Adio3.jpg',   3,  8,  NULL,   1,  NULL,   '2015-06-03 15:28:24',  '2015-06-03 15:28:24'),
(5, 5,  'Dignissimos atque officia.',   'Quasi ducimus repudiandae iure ut.',   'Corporis nam dolor sed.',  0,  'image/jpg',    NULL,   'projects/Adio4.jpg',   'projects/Adio4.jpg',   13, 17, NULL,   1,  NULL,   '2015-06-03 15:28:24',  '2015-06-03 15:28:24'),
(6, 2,  'Fuga eos asperiores qui.', 'Aut quia totam cupiditate sint cumque inventore. Quos enim reprehenderit magni. Beatae reiciendis rerum et laboriosam placeat magnam aperiam ut.', 'Blanditiis et voluptatem.',    0,  'image/jpg',    NULL,   'projects/Disco5.jpg',  'projects/Disco5.jpg',  20, 10, NULL,   1,  NULL,   '2015-06-03 15:28:24',  '2015-06-03 15:28:24'),
(7, 3,  'In labore repellat.',  'Unde unde animi accusantium aliquid numquam. Modi rem et doloribus dolorem.',  'Aperiam laboriosam ipsum quis exercitationem.',    0,  'image/jpg',    NULL,   'projects/Diss6.jpg',   'projects/Diss6.jpg',   13, 20, NULL,   1,  NULL,   '2015-06-03 15:28:24',  '2015-06-03 15:28:24'),
(8, 3,  'Nisi iure delectus.',  'Temporibus asperiores eveniet quo odio perferendis aliquam aut. Vel ab a sunt. Adipisci deleniti voluptas consequatur.',   'In nostrum quos ut consequatur.',  0,  'image/jpg',    NULL,   'projects/Diss7.jpg',   'projects/Diss7.jpg',   20, 15, NULL,   1,  NULL,   '2015-06-03 15:28:25',  '2015-06-03 15:28:25'),
(9, 4,  'Sed ut perferendis et voluptate.', 'Aut ea tenetur voluptatem rerum. Harum quas autem ullam officiis qui. Rerum architecto magnam hic. Qui esse omnis hic ad.',    'Eaque facere perferendis quia libero asperiores.', 0,  'image/jpg',    NULL,   'projects/Roowo8.jpg',  'projects/Roowo8.jpg',  7,  13, NULL,   1,  NULL,   '2015-06-03 15:28:25',  '2015-06-03 15:28:25'),
(10,    3,  'Temporibus fuga rerum aliquid.',   'Nisi et ratione laborum consequatur.', 'Est est et dolorum dolores.',  0,  'image/jpg',    NULL,   'projects/Diss9.jpg',   'projects/Diss9.jpg',   2,  19, NULL,   1,  NULL,   '2015-06-03 15:28:25',  '2015-06-03 15:28:25'),
(11,    3,  'Quaerat quam vel ipsam ut.',   'Odit sed nisi explicabo nihil velit. Itaque perferendis facere mollitia corporis consectetur earum in. Eveniet provident facilis expedita impedit deserunt.',  'Non dolorem cupiditate quis aliquam provident.',   0,  'image/jpg',    NULL,   'projects/Diss10.jpg',  'projects/Diss10.jpg',  7,  7,  NULL,   1,  NULL,   '2015-06-03 15:28:25',  '2015-06-03 15:28:25'),
(12,    4,  'Aut sed est odit.',    'Doloremque eum deserunt in tempore. Recusandae ex qui accusamus enim sed nihil facere sit.',   'Perspiciatis blanditiis vero sed.',    0,  'image/jpg',    NULL,   'projects/Roowo11.jpg', 'projects/Roowo11.jpg', 14, 12, NULL,   1,  NULL,   '2015-06-03 15:28:25',  '2015-06-03 15:28:25'),
(13,    4,  'Et quis fuga nobis.',  'Sed quidem consequatur voluptas eaque delectus quidem.',   'Odio dignissimos quia qui libero.',    0,  'image/jpg',    NULL,   'projects/Roowo12.jpg', 'projects/Roowo12.jpg', 9,  2,  NULL,   1,  NULL,   '2015-06-03 15:28:26',  '2015-06-03 15:28:26'),
(14,    1,  'Alias eius ea fugit qui molestiae.',   'Voluptas sequi natus quia dolorum fugiat. Minima omnis deserunt ipsam.',   'Repudiandae omnis et voluptatibus.',   0,  'image/jpg',    NULL,   'projects/Munati13.jpg',    'projects/Munati13.jpg',    11, 12, NULL,   1,  NULL,   '2015-06-03 15:28:26',  '2015-06-03 15:28:26'),
(15,    1,  'Eligendi alias aut et ut cupiditate.', 'Nobis quo voluptatem et accusantium.', 'Reiciendis aut quo maxime.',   0,  'image/jpg',    NULL,   'projects/Munati14.jpg',    'projects/Munati14.jpg',    11, 13, NULL,   1,  NULL,   '2015-06-03 15:28:26',  '2015-06-03 15:28:26'),
(16,    4,  'Optio exercitationem non ut.', 'Repudiandae eius at ut aspernatur tempore aut. Natus et hic vel eos. Esse fuga iure nihil modi quo rem fuga.', 'Est suscipit rerum autem rerum.',  0,  'image/jpg',    NULL,   'projects/Roowo15.jpg', 'projects/Roowo15.jpg', 7,  10, NULL,   1,  NULL,   '2015-06-03 15:28:26',  '2015-06-03 15:28:26'),
(17,    1,  'At laborum et eos.',   'Est itaque voluptates in consequatur sint. Mollitia illum necessitatibus placeat suscipit earum odit et. Nisi sed eum magni qui ut.',  'Numquam a non animi sed animi.',   0,  'image/jpg',    NULL,   'projects/Munati16.jpg',    'projects/Munati16.jpg',    2,  16, NULL,   1,  NULL,   '2015-06-03 15:28:26',  '2015-06-03 15:28:26'),
(18,    5,  'Quo sapiente perferendis atque occaecati.',    'Rerum corrupti veritatis voluptate.',  'Recusandae occaecati quia exercitationem dolor.',  0,  'image/jpg',    NULL,   'projects/Adio17.jpg',  'projects/Adio17.jpg',  15, 9,  NULL,   1,  NULL,   '2015-06-03 15:28:27',  '2015-06-03 15:28:27'),
(19,    1,  'Sit sed libero sed molestiae.',    'Accusantium sunt.',    'Deleniti cumque error eum.',   0,  'image/jpg',    NULL,   'projects/Munati18.jpg',    'projects/Munati18.jpg',    16, 17, NULL,   1,  NULL,   '2015-06-03 15:28:27',  '2015-06-03 15:28:27'),
(20,    3,  'Consequuntur et quo ipsam.',   'At sint est atque aliquid odio eum labore. Quis quam molestiae dolorum vitae.',    'Ipsam labore et.', 0,  'image/jpg',    NULL,   'projects/Diss19.jpg',  'projects/Diss19.jpg',  8,  5,  NULL,   1,  NULL,   '2015-06-03 15:28:27',  '2015-06-03 15:28:27');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
      `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_01_000001_create_institutions_table', 1),
('2015_03_01_000002_create_tags_table', 1),
('2015_03_01_000010_create_users_table',    1),
('2015_03_01_000100_create_projects_table', 1),
('2015_03_01_001000_create_institution_project_table',  1),
('2015_03_01_002000_create_project_tag_table',  1),
('2015_03_01_003000_create_project_user_table', 1),
('2015_03_01_004000_create_media_table',    1),
('2015_03_01_005000_create_comments_table', 1);

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
      `approved_by` int(10) unsigned DEFAULT NULL,
      `used_software` text COLLATE utf8_unicode_ci,
      `used_hardware` text COLLATE utf8_unicode_ci,
      `observations` text COLLATE utf8_unicode_ci,
      `featured_until` date DEFAULT NULL,
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
(1, 'Multi-layered national time-frame',    'Munati',   'Excepturi voluptas porro rerum ipsam. Assumenda suscipit optio occaecati illo et quis pariatur aut. Aspernatur porro qui aut.\nRepellendus molestiae excepturi quae dignissimos et. Voluptas aut quis ducimus et corrupti accusamus.', 'Amet eligendi perferendis maxime ut voluptatem.',  'et',   'reprehenderit, dignissimos, sunt, vel, cupiditate',    '2005-08-13',   NULL,   17, 17, NULL,   NULL,   NULL,   NULL,   '2016-12-31',   NULL,   0,  NULL,   NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(2, 'Distributed system-worthy contingency',    'Disco',    'Ipsum facilis odio est debitis fuga similique perspiciatis eveniet. Facilis ut ipsum quos est est aliquam ut.',    'Corrupti alias quas et officiis.', 'cumque',   'sint, numquam, vero',  '2005-09-14',   '2005-12-14',   7,  20, NULL,   NULL,   NULL,   'Minima ut perspiciatis aperiam temporibus.',   '2017-07-04',   NULL,   0,  NULL,   NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(3, 'Distributed static strategy',  'Diss', 'Autem et dolore esse. Tempore fugit quia in non. Omnis et fugit quis tempora vero sit.\nVoluptatibus quia animi qui perspiciatis. Quam sed debitis consequatur ipsam corporis. Eius vel similique fugiat consequatur eaque impedit deleniti dignissimos.', 'Est incidunt fugit culpa sint.',   'et',   'aut, non, porro, at, ducimus', '2012-07-26',   '2014-02-22',   16, 15, NULL,   'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_6_6 rv:6.0; sl-SI) AppleWebKit/535.45.5 (KHTML, like Gecko) Version/5.0 Safari/535.45.5',   NULL,   NULL,   '2017-03-26',   NULL,   0,  NULL,   NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(4, 'Robust optimizing workforce',  'Roowo',    'Quo atque temporibus sit voluptas repellendus. Impedit qui maiores aut consectetur. Amet impedit deserunt dicta et. Ipsam explicabo repellat aspernatur quo laborum.', 'Ipsam sunt cumque eos nisi voluptatibus.', 'deserunt', 'doloribus, similique, porro, ut, id',  '2013-05-25',   '2013-10-02',   3,  13, NULL,   'Opera/8.48 (X11; Linux x86_64; en-US) Presto/2.11.312 Version/11.00',  NULL,   NULL,   '2018-02-20',   NULL,   0,  NULL,   NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(5, 'Assimilated disintermediate opensystem',   'Adio', 'Dolores aliquam eveniet provident cum maiores et. Soluta vel aperiam vel aspernatur nemo accusamus tenetur. Nihil placeat deserunt a ut laboriosam. Cum voluptates sunt architecto excepturi recusandae repellat animi.',  'Tempora quidem nisi provident.',   'culpa',    'cupiditate, voluptates, eveniet, culpa, beatae',   '2005-09-20',   '2011-05-31',   3,  3,  NULL,   NULL,   NULL,   NULL,   '2016-12-25',   NULL,   0,  NULL,   NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23');

DROP TABLE IF EXISTS `project_tag`;
CREATE TABLE `project_tag` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `project_id` int(10) unsigned NOT NULL,
      `tag_id` int(10) unsigned NOT NULL,
      `state` int(11) NOT NULL,
      `added_by` int(10) unsigned NOT NULL,
      `approved_by` int(10) unsigned DEFAULT NULL,
      `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
      `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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

INSERT INTO `project_tag` (`id`, `project_id`, `tag_id`, `state`, `added_by`, `approved_by`, `created_at`, `updated_at`) VALUES
(1, 1,  6,  1,  3,  9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(2, 1,  2,  1,  3,  9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(3, 1,  5,  1,  9,  9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(4, 1,  8,  1,  19, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(5, 2,  7,  1,  13, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(6, 2,  8,  1,  3,  9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(7, 2,  9,  1,  14, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(8, 3,  4,  1,  11, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(9, 4,  1,  1,  14, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(10,    4,  8,  1,  10, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(11,    5,  10, 1,  20, 9,  '2015-06-03 15:28:23',  '2015-06-03 15:28:23');

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

INSERT INTO `project_user` (`id`, `user_id`, `project_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 11, 1,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(2, 10, 1,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(3, 16, 2,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(4, 11, 2,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(5, 7,  2,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(6, 20, 3,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(7, 16, 4,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(8, 7,  4,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(9, 8,  4,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00'),
(10,    14, 5,  0,  '0000-00-00 00:00:00',  '0000-00-00 00:00:00');

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'Web'),
(2, 'Engenharia de Software'),
(3, 'Computação Móvel'),
(4, 'Cloud'),
(5, 'Segurança'),
(6, 'Programação'),
(7, 'Investigação'),
(8, 'Licenciatura'),
(9, 'Mestrado'),
(10,    'Curso de Especialização Tecnológica');

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

INSERT INTO `users` (`id`, `name`, `email`, `alt_email`, `password`, `institution_id`, `position`, `photo_url`, `profile_url`, `flags`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Núria Rocha Leal', 'cleal@barros.org', NULL,   '$2y$10$69UcbctV1bjf9zLaSlBYTu7FckU1jA/x2guiZPQALf1n6Fy7wKtBO', 9,  'transition efficient relationships',   'cleal.jpg',    'http://domingues.info/voluptas-voluptatem-fugit-sed-optio.html',   0,  1,  NULL,   '2015-06-03 15:28:18',  '2015-06-03 15:28:18'),
(2, 'Bianca Mónica Jesus de Tavares',   'tavares.bianca@cardoso.com',   NULL,   '$2y$10$a27jZoRfVcdcRNT1Whehl.9Hb.Cy5RqQzXDr6vF44nYoxy/eyH/h2', 9,  'aggregate plug-and-play infomediaries',    'tavares.bianca.jpg',   'http://www.reis.info/',    0,  2,  NULL,   '2015-06-03 15:28:18',  '2015-06-03 15:28:18'),
(3, 'Gil Jorge de Monteiro',    'gil37@faria.com',  NULL,   '$2y$10$hmIbQVBLN5qAQrqsenn3f.sNpRVBHGLMSCKCVkPuJhReSZnCTdAbq', 13, 'cultivate compelling infrastructures', 'gil37.jpg',    'http://www.matias.com/',   0,  1,  NULL,   '2015-06-03 15:28:18',  '2015-06-03 15:28:18'),
(4, 'Joaquim Vicente Henriques de Guerreiro',   'joaquim.guerreiro@figueiredo.net', NULL,   '$2y$10$67JBMjQV6BcJLi1QZD5N.ujjmkKU7XWV.3CmRbWooNldhb8TfmCfO', 2,  'architect intuitive technologies', 'joaquim.guerreiro.jpg',    'http://soares.info/',  0,  1,  NULL,   '2015-06-03 15:28:18',  '2015-06-03 15:28:18'),
(5, 'Flávio Lopes', 'flavio63@ferreira.info',   NULL,   '$2y$10$wGN1H35buD7gEGdfgNQHB.QRhK7/aKDDM9nTosuJ9f/khiTPgv9QK', 1,  'redefine distributed mindshare',   'flavio63.jpg', 'http://ferreira.com/', 0,  1,  NULL,   '2015-06-03 15:28:19',  '2015-06-03 15:28:19'),
(6, 'Iara Vaz', 'pvaz@matos.com',   NULL,   '$2y$10$9No9ezEtKH3AhNCy/qt3zuy0cbeIRygcY3emLZ3e3yCwy8/tmqQ1O', 3,  'empower B2C portals',  'pvaz.jpg', 'http://jesus.com/aut-aspernatur-ipsum-aut-velit-illum-veniam.html',    0,  1,  NULL,   '2015-06-03 15:28:19',  '2015-06-03 15:28:19'),
(7, 'César Bernardo Faria', 'ifaria@valente.com',   NULL,   '$2y$10$et.byIrt1Bxb3KkWfj.11OnQC2MTaO5SFyTQf3jqPzOBOhtaW5pnu', 6,  'exploit intuitive networks',   'ifaria.jpg',   'http://pereira.org/illum-est-quasi-inventore-quia-iusto-numquam-eveniet.html', 0,  2,  NULL,   '2015-06-03 15:28:19',  '2015-06-03 15:28:19'),
(8, 'José Denis Amaral',    'jose.amaral@reis.com', 'amaral.jose@mendes.org',   '$2y$10$QIAGIEwim7cKjJMAgiAR8unPPoZvKg7UUhzvLHomevulHxCaWEVve', 6,  'scale 24/365 niches',  'jose.amaral.jpg',  'http://borges.com/et-provident-illum-omnis-ab-aut-rerum',  0,  2,  NULL,   '2015-06-03 15:28:20',  '2015-06-03 15:28:20'),
(9, 'Luciana Sousa de Moura',   'wmoura@almeida.com',   NULL,   '$2y$10$j.rSqbe2EqUY3o2koeYwSuzN/fQby1v8NQKvTwpqTlzekRf9fdqxa', 8,  'redefine transparent vortals', 'wmoura.jpg',   'http://www.vicente.com/est-numquam-est-autem-et',  0,  4,  NULL,   '2015-06-03 15:28:20',  '2015-06-03 15:28:20'),
(10,    'Érika Mia Soares Leal Abreu',  'erika.abreu@mota.net', NULL,   '$2y$10$RZ7Q0RqfETvSoEq/0mYogOhwHHQ9iYMCcfGwAOFduqcRdp2Th9Ek.', 1,  'cultivate cross-platform relationships',   'erika.abreu.jpg',  'http://www.esteves.com/sapiente-voluptas-rerum-enim-et-ducimus-consequatur',   0,  4,  NULL,   '2015-06-03 15:28:20',  '2015-06-03 15:28:20'),
(11,    'Rebeca Liliana de Miranda',    'miranda.rebeca@ribeiro.biz',   'rebeca18@pinheiro.org',    '$2y$10$lejDjZnnRPhvX4D8G3UVae28cgq6uu.Zob6ATtb0ktrxoYtSetpcG', 11, 'redefine back-end eyeballs',   'miranda.rebeca.jpg',   'http://vieira.biz/quo-et-qui-rerum-repudiandae',   0,  2,  NULL,   '2015-06-03 15:28:21',  '2015-06-03 15:28:21'),
(12,    'Filipe Guilherme de Martins',  'filipe67@soares.com',  NULL,   '$2y$10$MpSmh1P0wfR4Xt5YJO2UWeG171C/7xFMCQyOlzKt7t9FN6np69Tai', 10, 'syndicate 24/7 niches',    'filipe67.jpg', 'https://campos.com/quidem-ut-animi-et-autem-illo-dolores-quas.html',   0,  4,  NULL,   '2015-06-03 15:28:21',  '2015-06-03 15:28:21'),
(13,    'Vitória Machado Henriques',    'henriques.vitoria@mendes.com', NULL,   '$2y$10$hSYF0lY1iDT6Fi6DsVN44u7esUCjbJ/40hIn/Y8kwTJDLlaFPzbZq', 10, 'scale virtual applications',   'henriques.vitoria.jpg',    'http://silva.org/culpa-consequatur-maiores-suscipit-animi-iste-odit-autem',    0,  4,  NULL,   '2015-06-03 15:28:21',  '2015-06-03 15:28:21'),
(14,    'Nelson Lourenço Simões de Costa',  'costa.nelson@vicente.com', NULL,   '$2y$10$ROykyK8Ay4QUSbj/MdhZnOwu.95UOWUgfKXOaQ5fncgr13MIC3iNq', 7,  'whiteboard rich functionalities',  'costa.nelson.jpg', 'http://www.carvalho.com/tempore-reprehenderit-provident-sed-ullam',    0,  4,  NULL,   '2015-06-03 15:28:21',  '2015-06-03 15:28:21'),
(15,    'Mateus Alexandre Henriques Maia',  'mateus.maia@pires.com',    'wmaia@lima.org',   '$2y$10$vry9eTw//Ergr1L9PCPkfuHKHO6oNFkBRP9/nT.z/.KLfoAg9W3G.', 1,  'engineer impactful platforms', 'mateus.maia.jpg',  'http://www.monteiro.com/ipsam-libero-dolore-esse-iusto-ut-omnis.html', 0,  4,  NULL,   '2015-06-03 15:28:22',  '2015-06-03 15:28:22'),
(16,    'Vera Violeta de Azevedo',  'oazevedo@moura.net',   'azevedo.vera@nunes.com',   '$2y$10$ynNvWwNCeY.9ocS8h.YZ8./KOkcRyzaiqqK9L7hZlxoQJ3TNsqvea', 10, 'whiteboard compelling communities',    'oazevedo.jpg', 'http://costa.com/',    0,  4,  NULL,   '2015-06-03 15:28:22',  '2015-06-03 15:28:22'),
(17,    'Marta Diana Barbosa Morais',   'marta.morais@abreu.com',   'wmorais@paiva.com',    '$2y$10$DOJABTHU9RPDAP9jGZyjKuTrs8Y0Mghl2EtsPTFqaaB9oIMRR5Oh6', 5,  'envisioneer global initiatives',   'marta.morais.jpg', 'http://esteves.com/itaque-alias-quo-architecto-vel-velit-nihil-officiis.html', 0,  1,  NULL,   '2015-06-03 15:28:22',  '2015-06-03 15:28:22'),
(18,    'Teresa Teixeira de Oliveira',  'teresa87@brito.com',   NULL,   '$2y$10$jQxJXT6A3cuC0GWuuwZ4quRg8XiE9vl.U23.iIBvwurZ3ddQPYJoW', 1,  'envisioneer innovative e-business',    'teresa87.jpg', 'http://azevedo.com/commodi-vel-dolor-earum-officiis-omnis-natus',  0,  4,  NULL,   '2015-06-03 15:28:22',  '2015-06-03 15:28:22'),
(19,    'Diana Verónica Faria Cardoso', 'ecardoso@tavares.org', NULL,   '$2y$10$K1Ri7aFdwIyvqm8Dvsxe4Omeop1aJZybI4rRpViCEIXDDjIba8qN2', 8,  'deliver one-to-one functionalities',   'ecardoso.jpg', 'http://www.figueiredo.com/tenetur-natus-facilis-ut-repudiandae-minima-aspernatur-qui', 0,  1,  NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23'),
(20,    'Eva Tatiana Martins Fonseca',  'eva.fonseca@amaral.net',   NULL,   '$2y$10$5MvyVVXFr3BVzePKZ0mLH.fYn9WGNoQfSrrBV5aPa2ayZWDVKf7iS', 5,  'harness collaborative supply-chains',  'eva.fonseca.jpg',  'http://andrade.biz/velit-earum-sunt-similique-animi',  0,  1,  NULL,   '2015-06-03 15:28:23',  '2015-06-03 15:28:23');

-- 2015-06-03 15:37:36

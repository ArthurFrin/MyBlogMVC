-- Adminer 4.8.1 MySQL 8.0.40 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `articles` (`id`, `title`, `content`, `image_url`, `created_at`) VALUES
(1,	'techno',	'L\'intelligence artificielle a transformé de nombreux secteurs, de la santé à la finance. Cet article explore les dernières avancées dans ce domaine.',	'images/ia.jpg',	'2024-10-22 16:54:56'),
(2,	'Les bienfaits de la méditation',	'La méditation est devenue une pratique courante pour réduire le stress et améliorer le bien-être mental. Découvrez ses avantages et comment commencer.',	'images/meditation.jpg',	'2024-10-22 16:31:01'),
(3,	'Le réchauffement climatique et ses impacts',	'Le changement climatique est un problème mondial urgent. Cet article discute de ses impacts sur l\'environnement et les mesures pour le combattre.',	'images/climat.jpg',	'2024-10-22 16:31:04'),
(4,	'Voyager en solo : avantages et défis',	'Voyager seul peut être une expérience enrichissante et libératrice, mais présente également des défis uniques. Apprenez comment en tirer le meilleur parti.',	'images/voyage_solo.jpg',	'2024-10-22 16:31:09'),
(5,	'Les bases de l\'investissement en bourse',	'L\'investissement en bourse peut être intimidant pour les débutants. Ce guide vous présente les bases pour bien commencer.',	'images/bourse.jpg',	'2024-10-22 16:31:12'),
(6,	'Le rôle des réseaux sociaux dans le marketing',	'Les réseaux sociaux jouent un rôle crucial dans les stratégies de marketing modernes. Cet article explore comment les entreprises peuvent tirer parti de ces plateformes.',	'images/reseaux_sociaux.jpg',	'2024-10-22 16:31:15'),
(7,	'La révolution de la voiture électrique',	'Les voitures électriques gagnent en popularité grâce à leurs avantages écologiques. Cet article explore les dernières innovations dans ce secteur.',	'images/voiture_electrique.jpg',	'2024-10-22 16:31:20'),
(8,	'Apprendre une nouvelle langue : méthodes efficaces',	'Apprendre une nouvelle langue peut sembler difficile, mais avec les bonnes techniques, c\'est tout à fait faisable. Voici des conseils pour bien commencer.',	'images/apprentissage_langue.jpg',	'2024-10-22 16:31:23'),
(9,	'La photographie : astuces pour débutants',	'La photographie est un art accessible à tous. Découvrez quelques astuces simples pour améliorer vos clichés.',	'images/photographie.jpg',	'2024-10-22 16:31:27'),
(10,	'L\'impact du télétravail sur la productivité',	'Avec la montée du télétravail, de nombreuses études montrent son impact positif sur la productivité, mais cela pose également des défis pour la gestion du temps et de l\'équilibre travail-vie personnelle.',	'images/teletravail.jpg',	'2024-10-22 16:31:31');

-- 2024-10-22 18:26:00

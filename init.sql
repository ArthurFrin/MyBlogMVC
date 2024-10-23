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
(1, 'Tech AI', 'Artificial intelligence has transformed many sectors, from healthcare to finance. This article explores the latest advances in this field.', 'images/ia.jpg', '2024-10-22 16:54:56'), 
(2, 'Meditation Benefits', 'Meditation has become a common practice to reduce stress and improve mental well-being. Discover its advantages and how to get started.', 'images/meditation.jpg', '2024-10-22 16:31:01'), 
(3, 'Climate Change', 'Climate change is an urgent global issue. This article discusses its impacts on the environment and the measures to combat it.', 'images/climat.jpg', '2024-10-22 16:31:04'), 
(4, 'Solo Travel Challenges', 'Traveling alone can be a rewarding and liberating experience but also presents unique challenges. Learn how to make the most of it.', 'images/voyage_solo.jpg', '2024-10-22 16:31:09'), 
(5, 'Stock Market Investment', 'Investing in the stock market can be intimidating for beginners. This guide introduces you to the basics to get started well.', 'images/bourse.jpg', '2024-10-22 16:31:12'), 
(6, 'Social Media Role Marketing', 'Social media plays a crucial role in modern marketing strategies. This article explores how businesses can leverage these platforms.', 'images/reseaux_sociaux.jpg', '2024-10-22 16:31:15'), 
(7, 'Electric Car Revolution', 'Electric cars are gaining popularity due to their environmental advantages. This article explores the latest innovations in this sector.', 'images/voiture_electrique.jpg', '2024-10-22 16:31:20'), 
(8, 'Learning a New Language: Effective Methods', 'Learning a new language can seem challenging, but with the right techniques, it is entirely doable. Here are some tips to get started.', 'images/apprentissage_langue.jpg', '2024-10-22 16:31:23'), 
(9, 'Photography Tips', 'Photography is an art accessible to everyone. Discover some simple tips to improve your shots.', 'images/photographie.jpg', '2024-10-22 16:31:27'), 
(10, 'Impact of Remote Work', 'With the rise of remote work, numerous studies show its positive impact on productivity, but it also poses challenges for time management and work-life balance.', 'images/teletravail.jpg', '2024-10-22 16:31:31');
-- 2024-10-22 18:26:00

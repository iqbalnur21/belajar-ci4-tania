CREATE DATABASE IF NOT EXISTS `ci4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `ci4`;

DROP TABLE IF EXISTS `komik`;

CREATE TABLE `komik` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(255) NOT NULL,
  `slug` VARCHAR(255) NOT NULL,
  `penulis` VARCHAR(255) NOT NULL,
  `penerbit` VARCHAR(255) NOT NULL,
  `sampul` VARCHAR(255) NOT NULL,
  `sinopsis` TEXT DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `sinopsis`, `created_at`, `updated_at`) VALUES
(1, 'Ao Haru Ride', 'ao-haru-ride', 'Io Sakisaka', 'Shueisha', 'aoharuride.jpg', 'Kisah cinta masa muda yang rumit namun manis antara Futaba dan cinta pertamanya saat SMP, Kou.', NOW(), NOW()),
(2, 'Horimiya', 'horimiya', 'HERO & Daisuke Hagiwara', 'Square Enix', 'horimiya.jpg', 'Cerita romantis tentang dua siswa yang menyembunyikan kepribadian asli mereka di sekolah.', NOW(), NOW()),
(3, 'Kimi ni Todoke', 'kimi-ni-todoke', 'Karuho Shiina', 'Shueisha', 'kiminitodoke.jpg', 'Kisah menyentuh tentang Sawako, gadis pemalu yang sering disalahpahami, saat ia belajar berteman dan jatuh cinta.', NOW(), NOW()),
(4, 'Doraemon', 'doraemon', 'Fujiko F. Fujio', 'Shogakukan / Elex Media', 'doraemon.jpg', 'Kisah robot kucing dari abad ke-22 bernama Doraemon yang membantu Nobita Nobi dengan berbagai alat ajaib dari kantong ajaibnya.', NOW(), NOW()),
(5, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jump', 'naruto.jpg', 'Kisah tentang Naruto Uzumaki, seorang ninja yatim piatu yang bercita-cita menjadi Hokage, pemimpin desanya.', NOW(), NOW()),
(6, 'One Piece', 'one-piece', 'Eiichiro Oda', 'Shueisha', 'onepiece.jpg', 'Kisah petualangan Monkey D. Luffy dan krunya mengarungi Grand Line untuk menemukan harta karun One Piece.', NOW(), NOW());

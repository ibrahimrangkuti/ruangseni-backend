-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 08:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruang_seni`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'puisi', 'Puisi', 'Kategori Puisi', '2022-12-08 23:21:19', '2022-12-08 23:21:19'),
(3, 'seni-lukis', 'Seni Lukis', 'Kategori Seni Lukis', '2022-12-08 23:21:19', '2022-12-08 23:21:19'),
(4, 'cerpen', 'Cerpen', 'Kategori Cerpen', '2022-12-08 23:21:19', '2022-12-08 23:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` longtext NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `thumbnail`, `category_id`, `slug`, `title`, `description`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '1670569475_Frame 1 (1).png', 3, 'pentas-seni-enlima', 'Pentas Seni', '<p>Pentas seni adalah sebuah acara yang diadakan untuk menampilkan berbagai pertunjukan seni, seperti tari, musik, teater, atau bentuk seni lainnya. Pentas seni biasanya diadakan di sebuah panggung atau tempat yang memadai, dimana para penari, penyanyi, atau seniman lainnya dapat menampilkan karyanya. Pentas seni seringkali diadakan untuk menghibur masyarakat atau untuk memperingati suatu acara tertentu, seperti hari kemerdekaan atau hari guru. Pentas seni juga dapat menjadi salah satu cara bagi seniman untuk mengekspresikan dirinya dan menunjukkan kreativitasnya kepada masyarakat.</p>', '2022-12-09', '2022-12-13', '2022-12-09 00:04:35', '2022-12-09 00:13:47'),
(2, '1670569894_Frame 2.png', 1, 'puisi-hari-guru', 'Puisi Hari Guru', '<p>Hari Guru adalah sebuah peringatan yang diadakan setiap tanggal 25 November di Indonesia untuk menghormati dan mengakui jasa para guru dalam memajukan bangsa. Hari ini biasanya diperingati dengan berbagai kegiatan, seperti upacara bendera, pembagian penghargaan kepada guru-guru terbaik, dan lain-lain. Para guru biasanya juga akan menerima penghargaan atau hadiah dari pemerintah, sekolah, atau masyarakat sebagai bentuk apresiasi atas jasanya. Hari Guru merupakan salah satu hari yang penting bagi para pendidik, karena melalui hari ini mereka dapat merasakan pengakuan dan penghargaan atas usaha dan dedikasi mereka dalam mengajar.</p>', '2022-12-09', '2022-12-16', '2022-12-09 00:11:34', '2022-12-09 00:11:34'),
(3, '1670570511_Frame 3.png', 4, 'cerpen-hari-kemerdekaan', 'Cerpen Hari Kemerdekaan', '<p>Hari Kemerdekaan adalah hari yang sangat penting bagi bangsa Indonesia. Pada tanggal 17 Agustus 1945, Indonesia menyatakan kemerdekaan dari penjajahan Belanda setelah mempertahankannya selama lebih dari tiga puluh tahun. Setelah kemerdekaan dicapai, Indonesia mulai membangun pemerintahan negara yang merdeka, demokratis, dan adil. Pada hari ini, orang-orang Indonesia merayakan hari kemerdekaan dengan berbagai kegiatan, seperti bendera-bendera merah putih yang dikibarkan, upacara pemakaman bendera, dan lomba-lomba olahraga. Hari Kemerdekaan adalah momen yang tak terlupakan bagi bangsa Indonesia, dan merupakan simbol kebanggaan dan persatuan bangsa.</p>', '2022-12-09', '2022-12-16', '2022-12-09 00:21:51', '2022-12-09 00:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like_post`
--

CREATE TABLE `like_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_28_031944_create_posts_table', 1),
(6, '2022_09_28_032227_create_categories_table', 1),
(7, '2022_09_28_032306_create_events_table', 1),
(8, '2022_09_28_032436_create_event_participants_table', 1),
(9, '2022_09_28_032530_create_like_post_table', 1),
(10, '2022_09_28_032607_create_vote_post_table', 1),
(11, '2022_09_28_032904_add_foreign_keys_to_posts_table', 1),
(12, '2022_09_28_033146_add_foreign_keys_to_event_participants_table', 1),
(13, '2022_09_28_033400_add_foreign_keys_to_like_post_table', 1),
(14, '2022_09_28_033600_add_foreign_keys_to_vote_post_table', 1),
(15, '2022_10_19_024612_add_column_to_users_table', 1),
(16, '2022_11_07_213003_add_column_avatar_to_users_table', 1),
(17, '2022_11_07_213954_add_column_username_to_users_table', 1),
(18, '2022_11_07_220230_add_column_description_to_users_table', 1),
(19, '2022_11_09_064845_add_foreign_keys_to_events_table', 1),
(20, '2022_11_14_113322_create_visits_table', 1),
(21, '2022_11_21_034115_add_column_like_count_to_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `img_url` longtext NOT NULL,
  `is_join_event` int(11) NOT NULL DEFAULT 0,
  `status` enum('0','1','2') NOT NULL,
  `like_count` int(11) DEFAULT NULL,
  `vote_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `event_id`, `slug`, `title`, `body`, `img_url`, `is_join_event`, `status`, `like_count`, `vote_count`, `created_at`, `updated_at`) VALUES
(1, 2, 3, NULL, 'people-dancing-on-stage-with-blue-lights', 'People Dancing On Stage With Blue Lights', '<p>People Dancing on Stage with Blue Lights adalah sebuah karya seni yang menggambarkan sekelompok orang yang sedang menari di atas panggung dengan cahaya biru sebagai latar belakang. Karya ini mungkin menggambarkan sebuah pertunjukan tari atau musik, dimana para penari sedang mengekspresikan diri mereka melalui gerakan-gerakan yang indah dan menarik. Cahaya biru yang digunakan dalam karya ini mungkin bertujuan untuk menambah kesan misterius atau elegan pada pertunjukan tersebut. Karya ini dapat menjadi salah satu contoh bagaimana seni dapat menggabungkan gerakan, cahaya, dan musik untuk menciptakan suasana yang indah dan menghibur.</p>', 'images/1670567151.jpg', 0, '1', NULL, NULL, '2022-12-08 23:25:51', '2022-12-08 23:26:24'),
(2, 2, 3, NULL, 'black-and-silver-round-ball', 'Black And Silver Round Ball', '<p>Black and Silver Round Ball adalah sebuah karya seni yang menggambarkan bola berwarna hitam dan perak dengan bentuk bundar. Karya ini mungkin menggambarkan sebuah bola yang terbuat dari material logam atau plastik, dengan permukaan yang halus dan mengkilap. Bola tersebut mungkin digunakan untuk bermain atau hanya sebagai objek hiasan. Warna hitam dan perak yang digunakan dalam karya ini mungkin bertujuan untuk menambah kesan elegan atau mewah pada bola tersebut. Karya ini dapat menjadi salah satu contoh bagaimana seni dapat menggabungkan warna dan bentuk untuk menciptakan suatu objek yang indah dan menarik.</p>\r\n\r\n<p>&nbsp;</p>', 'images/1670567332.jpg', 0, '1', NULL, NULL, '2022-12-08 23:28:52', '2022-12-08 23:29:32'),
(3, 5, 3, NULL, 'silhouette-of-2-person-standing-on-the-ground-with-flowers', 'Silhouette Of 2 Person Standing On The Ground With Flowers', '<p>Silhouette of 2 Person Standing on the Ground with Flowers adalah sebuah karya seni yang menggambarkan siluet dua orang yang berdiri di tanah dengan bunga-bunga di sekitar mereka. Karya ini mungkin menggambarkan dua orang yang sedang berjalan di taman atau kebun, sambil menikmati keindahan alam sekitar. Bunga-bunga yang ada di sekitar mereka mungkin merupakan bagian dari taman tersebut atau dibawa oleh salah satu dari mereka. Siluet yang digunakan dalam karya ini mungkin bertujuan untuk memberikan kesan misterius atau menyegarkan pada orang-orang yang ada di dalamnya. Karya ini dapat menjadi salah satu contoh bagaimana seni dapat menggabungkan bentuk dan warna untuk menciptakan suasana yang indah dan menenangkan.</p>', 'images/1670567569.jpg', 0, '1', NULL, NULL, '2022-12-08 23:32:49', '2022-12-08 23:33:12'),
(4, 5, 3, NULL, 'blue-and-white-abstract-painting', 'Blue And White Abstract Painting', '<p>Blue and White Abstract Painting adalah sebuah karya seni abstrak yang menggambarkan sebuah lukisan berwarna biru dan putih. Karya ini mungkin menggambarkan sebuah lukisan yang tidak memiliki bentuk yang jelas, melainkan terdiri dari garis-garis, titik-titik, dan warna-warna yang acak. Lukisan tersebut mungkin dibuat dengan teknik mengabstraksikan suatu objek atau konsep menjadi bentuk-bentuk sederhana yang tidak mudah dikenali. Warna biru dan putih yang digunakan dalam karya ini mungkin bertujuan untuk memberikan kesan tenang dan damai pada lukisan tersebut. Karya ini dapat menjadi salah satu contoh bagaimana seni abstrak dapat menggabungkan warna dan bentuk untuk menciptakan suatu karya yang unik dan menarik.</p>', 'images/1670567718.jpg', 0, '1', NULL, NULL, '2022-12-08 23:35:18', '2022-12-08 23:35:35'),
(5, 3, 3, NULL, 'pink-yellow-and-blue-abstract-painting', 'Pink Yellow And Blue Abstract Painting', '<p>Pink, Yellow, and Blue Abstract Painting adalah sebuah karya seni abstrak yang menggambarkan sebuah lukisan berwarna pink, kuning, dan biru. Karya ini mungkin menggambarkan sebuah lukisan yang tidak memiliki bentuk yang jelas, melainkan terdiri dari garis-garis, titik-titik, dan warna-warna yang acak. Lukisan tersebut mungkin dibuat dengan teknik mengabstraksikan suatu objek atau konsep menjadi bentuk-bentuk sederhana yang tidak mudah dikenali. Warna pink, kuning, dan biru yang digunakan dalam karya ini mungkin bertujuan untuk memberikan kesan ceria dan menyenangkan pada lukisan tersebut. Karya ini dapat menjadi salah satu contoh bagaimana seni abstrak dapat menggabungkan warna dan bentuk untuk menciptakan suatu karya yang unik dan menarik.</p>', 'images/1670567828.jpg', 0, '1', NULL, NULL, '2022-12-08 23:37:08', '2022-12-08 23:37:47'),
(6, 3, 3, NULL, 'white-and-black-abstract-painting', 'White And Black Abstract Painting', '<p>White and Black Abstract Painting adalah sebuah karya seni abstrak yang menggambarkan sebuah lukisan berwarna putih dan hitam. Karya ini mungkin menggambarkan sebuah lukisan yang tidak memiliki bentuk yang jelas, melainkan terdiri dari garis-garis, titik-titik, dan warna-warna yang acak. Lukisan tersebut mungkin dibuat dengan teknik mengabstraksikan suatu objek atau konsep menjadi bentuk-bentuk sederhana yang tidak mudah dikenali. Warna putih dan hitam yang digunakan dalam karya ini mungkin bertujuan untuk memberikan kesan kontras dan mencolok pada lukisan tersebut. Karya ini dapat menjadi salah satu contoh bagaimana seni abstrak dapat menggabungkan warna dan bentuk untuk menciptakan suatu karya yang unik dan menarik.</p>', 'images/1670567950.jpg', 0, '1', NULL, NULL, '2022-12-08 23:39:10', '2022-12-08 23:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT 'avatar-1.png',
  `username` varchar(255) DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `role` enum('siswa','admin') NOT NULL DEFAULT 'siswa',
  `logged_in` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `username`, `nis`, `name`, `email`, `email_verified_at`, `password`, `class`, `role`, `logged_in`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'avatar-1.png', 'admin', NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$4PyuAyxZVNS3WhWc1B9Ei.VwHZ4uwOVHJC.g9AONxuZ8onpcB1ciO', NULL, 'admin', 1, NULL, '2022-12-08 23:21:18', '2022-12-09 00:03:00', NULL),
(2, 'avatar-1.png', 'Ibrahim', '123451', 'Ibrahim', 'ibrahim@gmail.com', NULL, '$2y$10$t.LBwhqg7Ep6mPUbEAMxKO9U1RxEDBgiSNnVya3YSPxmPxPKvCJz.', '11 RPL 1', 'siswa', 0, NULL, '2022-12-08 23:21:18', '2022-12-08 23:31:33', NULL),
(3, 'avatar-1.png', 'luqman', '123452', 'luqman', 'luqman@gmail.com', NULL, '$2y$10$cV3/GoAoUiBgcQFqlBybxuPww0h/5MCNgkG9dYJDdt8iZZFO5czlW', '11 RPL 1', 'siswa', 0, NULL, '2022-12-08 23:21:19', '2022-12-09 00:02:41', NULL),
(4, 'avatar-1.png', NULL, '123453', 'Akrom', 'akrom@gmail.com', NULL, '$2y$10$hwtU2.alzrzhDahBcxziJuUoQEz4M4.lMc.KtC555QHsSCO8UwBf.', '11 RPL 1', 'siswa', 0, NULL, '2022-12-08 23:21:19', '2022-12-08 23:21:19', NULL),
(5, 'avatar-1.png', 'farilseptian', '123454', 'Faril', 'faril@gmail.com', NULL, '$2y$10$SxzcLj6NDt9TCqmmEE5HfuTd9S5V/97pREm9eAjHiClMqgtB1Fdge', '11 RPL 1', 'siswa', 0, NULL, '2022-12-08 23:21:19', '2022-12-08 23:35:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primary_key` varchar(255) NOT NULL,
  `secondary_key` varchar(255) DEFAULT NULL,
  `score` bigint(20) UNSIGNED NOT NULL,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`list`)),
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `primary_key`, `secondary_key`, `score`, `list`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 'visits:posts_visits_day_total', NULL, 6, NULL, '2022-12-09 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(2, 'visits:posts_visits_day', '0', 0, NULL, '2022-12-09 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(3, 'visits:posts_visits_week_total', NULL, 6, NULL, '2022-12-11 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(4, 'visits:posts_visits_week', '0', 0, NULL, '2022-12-11 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(5, 'visits:posts_visits_month_total', NULL, 6, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(6, 'visits:posts_visits_month', '0', 0, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(7, 'visits:posts_visits_year_total', NULL, 6, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(8, 'visits:posts_visits_year', '0', 0, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(9, 'visits:posts_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-12-08 23:41:38', '2022-12-08 23:26:38', '2022-12-08 23:26:38'),
(10, 'visits:posts_visits', '1', 1, NULL, NULL, '2022-12-08 23:26:38', '2022-12-08 23:26:38'),
(11, 'visits:posts_visits_total', NULL, 6, NULL, NULL, '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(12, 'visits:posts_visits_referers:1', NULL, 1, NULL, NULL, '2022-12-08 23:26:38', '2022-12-08 23:26:38'),
(13, 'visits:posts_visits_day', '1', 1, NULL, '2022-12-09 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(14, 'visits:posts_visits_week', '1', 1, NULL, '2022-12-11 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(15, 'visits:posts_visits_month', '1', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(16, 'visits:posts_visits_year', '1', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:26:38', '2022-12-09 00:28:19'),
(17, 'visits:posts_visits_OSes:1', 'Windows', 1, NULL, NULL, '2022-12-08 23:26:38', '2022-12-08 23:26:38'),
(18, 'visits:posts_visits_languages:1', 'en', 1, NULL, NULL, '2022-12-08 23:26:38', '2022-12-08 23:26:38'),
(19, 'visits:posts_visits_recorded_ips:2:127.0.0.1', NULL, 1, NULL, '2022-12-08 23:44:49', '2022-12-08 23:29:49', '2022-12-08 23:29:49'),
(20, 'visits:posts_visits', '2', 1, NULL, NULL, '2022-12-08 23:29:49', '2022-12-08 23:29:49'),
(21, 'visits:posts_visits_referers:2', NULL, 1, NULL, NULL, '2022-12-08 23:29:49', '2022-12-08 23:29:49'),
(22, 'visits:posts_visits_day', '2', 1, NULL, '2022-12-09 17:00:00', '2022-12-08 23:29:49', '2022-12-09 00:28:19'),
(23, 'visits:posts_visits_week', '2', 1, NULL, '2022-12-11 17:00:00', '2022-12-08 23:29:49', '2022-12-09 00:28:19'),
(24, 'visits:posts_visits_month', '2', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:29:49', '2022-12-09 00:28:19'),
(25, 'visits:posts_visits_year', '2', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:29:49', '2022-12-09 00:28:19'),
(26, 'visits:posts_visits_OSes:2', 'Windows', 1, NULL, NULL, '2022-12-08 23:29:49', '2022-12-08 23:29:49'),
(27, 'visits:posts_visits_languages:2', 'en', 1, NULL, NULL, '2022-12-08 23:29:49', '2022-12-08 23:29:49'),
(28, 'visits:posts_visits_recorded_ips:3:127.0.0.1', NULL, 1, NULL, '2022-12-08 23:48:26', '2022-12-08 23:33:26', '2022-12-08 23:33:26'),
(29, 'visits:posts_visits', '3', 2, NULL, NULL, '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(30, 'visits:posts_visits_referers:3', NULL, 2, NULL, NULL, '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(31, 'visits:posts_visits_day', '3', 2, NULL, '2022-12-09 17:00:00', '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(32, 'visits:posts_visits_week', '3', 2, NULL, '2022-12-11 17:00:00', '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(33, 'visits:posts_visits_month', '3', 2, NULL, '2022-12-31 17:00:00', '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(34, 'visits:posts_visits_year', '3', 2, NULL, '2022-12-31 17:00:00', '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(35, 'visits:posts_visits_OSes:3', 'Windows', 2, NULL, NULL, '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(36, 'visits:posts_visits_languages:3', 'en', 2, NULL, NULL, '2022-12-08 23:33:26', '2022-12-09 00:28:19'),
(37, 'visits:posts_visits_recorded_ips:4:127.0.0.1', NULL, 1, NULL, '2022-12-08 23:50:45', '2022-12-08 23:35:45', '2022-12-08 23:35:45'),
(38, 'visits:posts_visits', '4', 1, NULL, NULL, '2022-12-08 23:35:45', '2022-12-08 23:35:45'),
(39, 'visits:posts_visits_referers:4', NULL, 1, NULL, NULL, '2022-12-08 23:35:45', '2022-12-08 23:35:45'),
(40, 'visits:posts_visits_day', '4', 1, NULL, '2022-12-09 17:00:00', '2022-12-08 23:35:45', '2022-12-09 00:28:19'),
(41, 'visits:posts_visits_week', '4', 1, NULL, '2022-12-11 17:00:00', '2022-12-08 23:35:45', '2022-12-09 00:28:19'),
(42, 'visits:posts_visits_month', '4', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:35:45', '2022-12-09 00:28:19'),
(43, 'visits:posts_visits_year', '4', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:35:45', '2022-12-09 00:28:19'),
(44, 'visits:posts_visits_OSes:4', 'Windows', 1, NULL, NULL, '2022-12-08 23:35:45', '2022-12-08 23:35:45'),
(45, 'visits:posts_visits_languages:4', 'en', 1, NULL, NULL, '2022-12-08 23:35:45', '2022-12-08 23:35:45'),
(46, 'visits:posts_visits_recorded_ips:5:127.0.0.1', NULL, 1, NULL, '2022-12-08 23:52:52', '2022-12-08 23:37:52', '2022-12-08 23:37:52'),
(47, 'visits:posts_visits', '5', 1, NULL, NULL, '2022-12-08 23:37:52', '2022-12-08 23:37:52'),
(48, 'visits:posts_visits_referers:5', NULL, 1, NULL, NULL, '2022-12-08 23:37:52', '2022-12-08 23:37:52'),
(49, 'visits:posts_visits_day', '5', 1, NULL, '2022-12-09 17:00:00', '2022-12-08 23:37:52', '2022-12-09 00:28:19'),
(50, 'visits:posts_visits_week', '5', 1, NULL, '2022-12-11 17:00:00', '2022-12-08 23:37:52', '2022-12-09 00:28:19'),
(51, 'visits:posts_visits_month', '5', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:37:52', '2022-12-09 00:28:19'),
(52, 'visits:posts_visits_year', '5', 1, NULL, '2022-12-31 17:00:00', '2022-12-08 23:37:52', '2022-12-09 00:28:19'),
(53, 'visits:posts_visits_OSes:5', 'Windows', 1, NULL, NULL, '2022-12-08 23:37:52', '2022-12-08 23:37:52'),
(54, 'visits:posts_visits_languages:5', 'en', 1, NULL, NULL, '2022-12-08 23:37:52', '2022-12-08 23:37:52'),
(55, 'visits:posts_visits_recorded_ips:3:127.0.0.1', NULL, 1, NULL, '2022-12-09 00:43:19', '2022-12-09 00:28:19', '2022-12-09 00:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `vote_post`
--

CREATE TABLE `vote_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_event_to_category` (`category_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_event_participant_to_event` (`event_id`),
  ADD KEY `fk_event_participant_to_post` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `like_post`
--
ALTER TABLE `like_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_like_post_to_post` (`post_id`),
  ADD KEY `fk_like_post_to_user` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_to_user` (`user_id`),
  ADD KEY `fk_post_to_category` (`category_id`),
  ADD KEY `fk_post_to_event` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nis_unique` (`nis`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visits_primary_key_secondary_key_unique` (`primary_key`,`secondary_key`);

--
-- Indexes for table `vote_post`
--
ALTER TABLE `vote_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vote_post_to_post` (`post_id`),
  ADD KEY `fk_vote_post_to_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like_post`
--
ALTER TABLE `like_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `vote_post`
--
ALTER TABLE `vote_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_event_to_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD CONSTRAINT `fk_event_participant_to_event` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_event_participant_to_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like_post`
--
ALTER TABLE `like_post`
  ADD CONSTRAINT `fk_like_post_to_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_like_post_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_post_to_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_post_to_event` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_post_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vote_post`
--
ALTER TABLE `vote_post`
  ADD CONSTRAINT `fk_vote_post_to_post` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vote_post_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

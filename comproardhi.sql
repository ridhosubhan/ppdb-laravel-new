-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2023 at 11:59 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comproardhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int UNSIGNED NOT NULL,
  `caption` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('PUBLISH','DRAFT') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `views` int DEFAULT NULL,
  `create_by` int NOT NULL,
  `update_by` int DEFAULT NULL,
  `delete_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `category`, `status`, `views`, `create_by`, `update_by`, `delete_by`, `created_at`, `updated_at`) VALUES
(14, 'Universitas Jenderal Achmad Yani Sosialisasikan PKM Tahun 2023', 'universitas-jenderal-achmad-yani-sosialisasikan-pkm-tahun-2023', '<p><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"height:129px; width:389px\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta rutrum velit in porta. Sed finibus, augue non vehicula rhoncus, tortor justo malesuada nulla, et luctus nisi turpis id tellus. Integer tincidunt ipsum sem, et facilisis ligula consectetur eget. Nullam quam arcu, rhoncus pharetra facilisis sodales, semper a arcu. Etiam et pellentesque eros. Nunc fringilla lectus porttitor risus varius, eget luctus sem ullamcorper. Donec nisi nunc, feugiat sed magna non, elementum aliquet justo. Fusce quis cursus libero, sed posuere lectus. Sed egestas tempor egestas.</p>\r\n\r\n<p>Ut tincidunt turpis nulla, non mattis eros consequat et. Fusce vel urna eget massa tincidunt hendrerit et ac tellus. Duis tincidunt a massa et egestas. Suspendisse et tempus lacus. Nam vitae sapien luctus tellus hendrerit ultricies. Mauris arcu libero, varius vitae condimentum ac, tristique et orci. Nunc et libero et velit pulvinar sodales in a libero.</p>\r\n\r\n<p>Sed ut ligula vel tortor volutpat facilisis eget a lacus. Pellentesque sed congue augue, sit amet iaculis elit. Sed viverra commodo fringilla. Quisque sollicitudin lorem et justo luctus, vitae consectetur leo sollicitudin. Suspendisse potenti. Donec in sollicitudin turpis. Sed ultricies, ipsum id maximus feugiat, sapien mi condimentum ante, vitae accumsan ligula nisi in sem. Sed ipsum nisi, pulvinar ac tempor eget, lobortis id risus. Fusce eu mi vitae eros semper semper. Nunc mattis neque a quam iaculis, vitae condimentum nunc tincidunt. Nam vitae nulla pharetra, suscipit lacus id, aliquam tortor. Maecenas porta pharetra elit at congue. Etiam quis dolor lobortis, finibus metus ac, sagittis est. Nam gravida neque lectus, non faucibus nunc condimentum quis. Curabitur tellus lacus, mollis et pellentesque luctus, faucibus ac lectus. Ut varius posuere tortor, et elementum libero fermentum sed.</p>\r\n\r\n<p>Maecenas consequat ante id lacus commodo, ac dictum odio varius. Sed in pellentesque leo. Morbi tristique mauris ut tristique lobortis. Nunc imperdiet pulvinar ante, eu dapibus dui ornare id. Praesent nec fermentum sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam at sapien purus. Nullam nibh eros, lobortis non pretium dictum, rhoncus a sem. Aenean et vulputate ipsum, et euismod massa. Maecenas mollis, mauris at feugiat dapibus, nunc mauris dignissim dui, ut sollicitudin eros purus eget libero.</p>\r\n\r\n<p>Mauris ligula nibh, accumsan nec magna sed, molestie varius erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent vulputate, tortor ut convallis faucibus, nulla ligula tempor quam, hendrerit aliquet lacus nisl ac tortor. Aenean sollicitudin arcu sit amet vulputate elementum. Morbi non leo at urna vestibulum euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus elementum quam metus, in rhoncus nulla vulputate ac. Maecenas mattis sem elit, sed vestibulum nulla euismod et.</p>', '[\"8\"]', 'PUBLISH', NULL, 1, NULL, NULL, '2023-02-23 19:49:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int UNSIGNED NOT NULL,
  `article_id` int UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`, `created_at`, `updated_at`) VALUES
(25, 14, 8, '2023-02-23 19:49:00', '2023-02-23 19:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` int NOT NULL,
  `update_by` int DEFAULT NULL,
  `delete_by` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `create_by`, `update_by`, `delete_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 'Uncategorized', 'uncategorized', 'Tidak ada kategori', 'category/JSqafK33S8O59wU6ctrxWOSQcOEtdIdRTxlSs7Qh.png', 1, NULL, NULL, NULL, '2023-02-23 19:45:05', '2023-02-23 19:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `job_position` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `workplace` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` int NOT NULL,
  `update_by` int DEFAULT NULL,
  `delete_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `job_position`, `workplace`, `image`, `content`, `create_by`, `update_by`, `delete_by`, `created_at`, `updated_at`) VALUES
(3, 'Will Yanto Syam', 'Staff Planning Production Control', 'PT. United Tractors Pandu Engineering', 'testimonial/GHiAS0Qc1RVNRJAy37x2ysdwUQqNUFwJDyxKtNct.jpg', 'Banyak pelajaran yang saya dapat saat berkuliah di Unjani', 1, NULL, NULL, '2023-01-20 07:45:32', '2023-01-20 07:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_visit_counter`
--

CREATE TABLE `home_visit_counter` (
  `id` int NOT NULL,
  `home_counter_visit` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_visit_counter`
--

INSERT INTO `home_visit_counter` (`id`, `home_counter_visit`, `created_at`, `updated_at`) VALUES
(1, 138, '0000-00-00 00:00:00', '2023-03-04 04:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_24_041055_create_visits_table', 2),
(6, '2023_01_24_043755_create_views_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int UNSIGNED NOT NULL,
  `no_registrasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pasfoto` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kk` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ktp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gelombang` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prodi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transkrip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ijazah` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `buktipembayaran` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('DAFTAR','DISETUJUI','DITOLAK') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` int DEFAULT NULL,
  `update_by` int DEFAULT NULL,
  `delete_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `no_registrasi`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pasfoto`, `kk`, `ktp`, `gelombang`, `prodi`, `transkrip`, `ijazah`, `buktipembayaran`, `email`, `status`, `create_by`, `update_by`, `delete_by`, `created_at`, `updated_at`) VALUES
(8, 'REG-0001', 'Dodo Sobarna', 'L', 'Bandung', '2023-01-17', 'Jalan Bandung', 'documents/gtOUQ7qyieqt2BxUEvVbzrIsubW8hGB47VO590a5.jpg', 'documents/CXj8knCnZX3bfrZEcXZtG82l2nZjiOUEckz0YbwC.jpg', 'documents/te19jNG4sVbWQSAm9MvUX22lR3cRASGREMUU0q7h.jpg', 'Gelombang pertama', 'Informatika', 'documents/VNxZXZ1ytSS6jbu9CVKMINWZE7jaPkyFOom7iOU6.pdf', 'documents/U1FClMqBFfV5X8gUouhZL9nYBNfskFQzLrefHw79.pdf', 'documents/bMQhc9CtvAVSOdDahR4LnE5jXeWcd0DAObM3w0Sa.pdf', 'dodo@gmail.com', 'DISETUJUI', NULL, NULL, NULL, '2023-01-17 06:06:25', '2023-01-19 05:40:21'),
(9, 'REG-0002', 'Didin Jaenudin', 'P', 'Bandung', '2023-01-19', 'Bandung Jalan', 'documents/gtOUQ7qyieqt2BxUEvVbzrIsubW8hGB47VO590a5.jpg', 'documents/CXj8knCnZX3bfrZEcXZtG82l2nZjiOUEckz0YbwC.jpg', 'documents/te19jNG4sVbWQSAm9MvUX22lR3cRASGREMUU0q7h.jpg', 'Gelombang pertama', 'Teknik Industri', 'documents/VNxZXZ1ytSS6jbu9CVKMINWZE7jaPkyFOom7iOU6.pdf', 'documents/U1FClMqBFfV5X8gUouhZL9nYBNfskFQzLrefHw79.pdf', 'documents/bMQhc9CtvAVSOdDahR4LnE5jXeWcd0DAObM3w0Sa.pdf', 'didin@gmail.com', 'DITOLAK', NULL, NULL, NULL, '2023-01-19 12:19:53', '2023-02-06 06:52:46'),
(10, 'REG-0003', 'Salim Ahmad', 'L', 'Bandung', '1990-01-19', 'Bandung', 'documents/YOHDqeVpPYZlxGzo4oOG1adSahaPdsGNF5rmvT8X.jpg', 'documents/wQHVm5RTgfNgXvGrlPPk7P2jb6nM7SSdaS4ZYZkS.png', 'documents/8wgVJXVz4TktJKVfExTBcieBIcIHArEKXEyWhkox.png', 'Gelombang pertama', 'Manajemen', 'documents/hBRXpGZ09KZj3YO7PX1BaRQMBe02GHrhZ0sTFzsN.pdf', 'documents/GMDcfFROb0O0bKt104pSRg2f5C79yAfRb8i0u9ko.pdf', 'documents/FkWm9RnaH1j6B0Ji704xJxJUwxJRQS4duZlXJvL9.png', 'salimahmadkedua@gmail.com', 'DISETUJUI', NULL, NULL, NULL, '2023-01-20 20:21:30', '2023-01-20 20:23:07'),
(11, 'REG-0004', 'Dadang Domen', 'L', 'Bandung', '2023-01-22', 'Bandung kuy', 'documents/veBRexCvO4JsoMuDtfqThJU8LdHyG1XtOT9sJI8Q.jpg', 'documents/x7NqVk2vXUCEtMSIs2X75scQkMEbA8eW7EWLWR20.png', 'documents/67C1AiBk6qk6AQOGN8PNs4MPcNZ9ELypz9a7EMP9.png', 'Gelombang pertama', 'Manajemen Proyek', 'documents/DQ5bsxjtsjn7ryiRuzOYz6f6dmmRRwZHXyzDPuIQ.pdf', 'documents/bG6aq8w2ZddGjVIWvdBYdRaGWTW8i3Z2lqURi6DG.pdf', 'documents/vxujxs5S8oNRMKgPoZxJ6TNPEaDq0GlLLxYsjCBy.jpg', 'dadangdomen@gmail.com', 'DAFTAR', NULL, NULL, NULL, '2023-01-21 20:40:49', '2023-01-21 20:40:49'),
(1000, 'REG-0005', 'Zainuddin Kocak Geming', 'L', 'Bandung', '2023-01-23', 'dadada', 'documents/KzxA9jU8qoaZXJK2fTn6qkQLg1IC1O3ZIqlf0vS7.jpg', 'documents/eZlRmhFpBCuzf5S1fuanJDhrhRQXNFBO88GxGRVH.jpg', 'documents/K5DjvBXuRX75pZTrkcnx4II2thHUse9v6kjPJ77l.png', 'Gelombang pertama', 'Manajemen Proyek', 'documents/LuLSjvUaLjGc3jjFWrZodBPgsyFNOb44T3VmIEmv.pdf', 'documents/azhl7UOplI2PuHhUmlJHZKZovxPefSSrskqFpQ3x.pdf', 'documents/uoABr5NeoIb4n3rwOnUduY6w16r5RDxYBV4jk6pg.jpg', 'zainuddin@gmail.com', 'DISETUJUI', NULL, NULL, NULL, '2023-01-23 06:34:54', '2023-01-23 06:34:54'),
(1001, 'REG-0006', 'Akbar', 'L', 'Bandung', '2023-02-01', 'bandung', 'documents/EZQDDrtuZ00tFUMKPqRXZtWVtttdI4TcYwtnEjAx.jpg', 'documents/ORbF5jqCmjlceXZ88c0ySJJaMnL3pRzWPg4vgA66.png', 'documents/NkQmw0tddFqA53gnIqR2tv9pAmtM3VEC1cOyNvsS.jpg', 'Gelombang pertama', 'Manajemen Rantai Pasok', 'documents/AIH3yi0RwcWA1NRvchtzLWBw0TdL5GVHe3RdYyUw.pdf', 'documents/CnszeUWuN8m7v8cCG0TYEFRcGhMuHVqwQraWy5oK.pdf', 'documents/ZhQVnqNTaTkvvXEKpGDns1hVoD7gq3CyhCon7QNt.jpg', 'akbar@gmail.com', 'DISETUJUI', NULL, NULL, NULL, '2023-02-01 07:00:32', '2023-02-01 07:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Aplikasi', 'admin', 'admin@gmail.com', NULL, '$2y$10$YpXY3jlH7xoPwOgG9jbAVelAotkHUJynVi6ilQ.AOPKrwuWNSUjdC', 'bw7wWW0qkNBzWhM340F8dCZ6r4JcuA5vHAx40ojoEp1tmwpTtZhRNcutPw7I', '2023-01-16 00:57:18', '2023-01-16 00:57:18'),
(4, 'Dodo', 'siswa', 'dodo@gmail.com', NULL, '$2y$10$MUB0QNQ9beZrS3l8736jsuwM3zRE7f7t4hlpSKJ6xXuP4kQtZg0..', NULL, '2023-01-17 06:06:25', '2023-01-17 06:06:25'),
(5, 'Salim Ahmad', 'siswa', 'salimahmadkedua@gmail.com', NULL, '$2y$10$BJaRYdS.qZl5Ll5fBTSoDekuDSjOyeZUjSnof5/.viCCxnoF2Qr0i', NULL, '2023-01-20 20:21:30', '2023-01-20 20:21:30'),
(6, 'Dadang Domen', 'siswa', 'dadangdomen@gmail.com', NULL, '$2y$10$c8MYuvDxUvSl0Yy8oQf8GOiPW4y9NehRJaUz./9icRSF6mYcOQA3W', NULL, '2023-01-21 20:12:11', '2023-01-21 20:12:11'),
(7, 'Zainuddin', 'siswa', 'zainuddin@gmail.com', NULL, '$2y$10$rkDOT/wzRuSufFBno1ltG.hWoYy3Onj5e1aQx1z8RPZo3PDStKENS', NULL, '2023-01-23 06:32:07', '2023-01-23 06:32:07'),
(8, 'Akbar', 'siswa', 'akbar@gmail.com', NULL, '$2y$10$YpXY3jlH7xoPwOgG9jbAVelAotkHUJynVi6ilQ.AOPKrwuWNSUjdC', NULL, '2023-02-01 06:59:13', '2023-02-01 06:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`),
  ADD KEY `article_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_visit_counter`
--
ALTER TABLE `home_visit_counter`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_visit_counter`
--
ALTER TABLE `home_visit_counter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

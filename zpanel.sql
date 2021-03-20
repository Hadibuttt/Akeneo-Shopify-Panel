-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 03:01 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zappos`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `primary_address` tinyint(1) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` bigint(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `primary_address`, `Name`, `address`, `city`, `state`, `zip`, `phone`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 'Hadi', '128 abc street near', 'Bawa g pindi', 'NV', 4, 56, '2021-01-17 06:55:15', '2021-02-20 16:03:56'),
(14, 13, 1, 'Hadi Butt', '128 near bank', 'Bawa g pindi ay', 'NV', 420000, 3322234556, '2021-01-17 07:08:02', '2021-01-17 07:15:20'),
(18, 16, 1, 'Raheel', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', 'Punjab', 44000, 3045260527, '2021-02-17 13:31:12', '2021-02-17 13:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logins`
--

CREATE TABLE `admin_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderPage` tinyint(1) NOT NULL,
  `ProductPage` tinyint(1) NOT NULL,
  `OrderDetailsPage` tinyint(1) NOT NULL,
  `AddProductPage` tinyint(1) NOT NULL,
  `UpdateProductPage` tinyint(1) NOT NULL,
  `CategoryPage` tinyint(1) NOT NULL,
  `AddCategoryPage` tinyint(1) NOT NULL,
  `UpdateCategoryPage` tinyint(1) NOT NULL,
  `CustomerPage` tinyint(1) NOT NULL,
  `AboutCustomerPage` tinyint(1) NOT NULL,
  `SubcategoryPage` tinyint(1) NOT NULL,
  `AddSubcategoryPage` tinyint(1) NOT NULL,
  `UpdateSubcategoryPage` tinyint(1) NOT NULL,
  `CollectionPage` tinyint(1) NOT NULL,
  `AddCollectionPage` tinyint(1) NOT NULL,
  `UpdateCollectionPage` tinyint(1) NOT NULL,
  `SettingsPage` tinyint(1) NOT NULL,
  `GeneralPage` tinyint(1) NOT NULL,
  `StaffAccountPage` tinyint(1) NOT NULL,
  `StaffAreaPage` tinyint(1) NOT NULL,
  `UpdateStaffAreaPage` tinyint(1) NOT NULL,
  `TaxPage` tinyint(1) NOT NULL,
  `PaymentPage` tinyint(1) NOT NULL,
  `NotificationPage` tinyint(1) NOT NULL,
  `TranslationPage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_logins`
--

INSERT INTO `admin_logins` (`id`, `email`, `password`, `f_name`, `l_name`, `OrderPage`, `ProductPage`, `OrderDetailsPage`, `AddProductPage`, `UpdateProductPage`, `CategoryPage`, `AddCategoryPage`, `UpdateCategoryPage`, `CustomerPage`, `AboutCustomerPage`, `SubcategoryPage`, `AddSubcategoryPage`, `UpdateSubcategoryPage`, `CollectionPage`, `AddCollectionPage`, `UpdateCollectionPage`, `SettingsPage`, `GeneralPage`, `StaffAccountPage`, `StaffAreaPage`, `UpdateStaffAreaPage`, `TaxPage`, `PaymentPage`, `NotificationPage`, `TranslationPage`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$QsKbV7CAddqnT50ahpaYDe58r/LOUeSLXQYJDSp6kEKMaC0lmhVvm', 'Admin', 'User', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2021-01-16 07:25:30', '2021-01-16 07:25:30'),
(3, 'admin@example.com', '$2y$10$GupWXjt1m1xmVA7DpvfTUeI/OfmDkBEoiCYj81bM7MX8O7zSAZZ8i', 'Hadi', 'Butt', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-01-16 08:35:00', '2021-03-20 08:52:25'),
(4, 'raheel69@gmail.com', '$2y$10$MwbKdFhyUhbmKM0FDBxLDeyhWh79YdnW.no6dvtyxB6BypcuXppdi', 'Raheel', 'Khan', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, '2021-02-13 05:52:05', '2021-02-13 05:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Testing', '2021-02-27 11:12:51', '2021-02-27 11:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`, `role_id`) VALUES
(24, 'Google', '/category/1', 0, 0, NULL, 4, 0, '2021-03-08 08:56:46', '2021-03-08 09:13:56', 0),
(25, 'GitHub', '/category/2', 24, 1, NULL, 4, 1, '2021-03-08 08:56:54', '2021-03-08 09:15:47', 0),
(26, 'Underwear', '/category/4', 27, 3, NULL, 4, 0, '2021-03-08 09:10:50', '2021-03-08 09:17:25', 0),
(27, 'Underwear', '/category/6', 25, 2, NULL, 4, 2, '2021-03-08 09:11:10', '2021-03-08 09:17:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_img`, `created_at`, `updated_at`) VALUES
(1, 'Men', '1.jpg', '2021-01-03 12:51:32', '2021-01-11 18:00:39'),
(2, 'Women', '1.jpg', '2021-01-03 12:51:32', NULL),
(3, 'Kids', '1.jpg', '2021-01-03 12:51:32', '2021-01-03 12:51:32'),
(4, 'Women Wear', '1.jpg', '2021-01-04 13:52:14', '2021-01-04 13:52:14'),
(6, 'Kids Wear', '1610586604.jpg', '2021-01-13 17:51:48', '2021-01-13 20:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `cat_items`
--

CREATE TABLE `cat_items` (
  `cat_item_id` bigint(20) UNSIGNED NOT NULL,
  `subcat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_item_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_item_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `SEOdescription` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOtitle` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_items`
--

INSERT INTO `cat_items` (`cat_item_id`, `subcat_id`, `cat_item_title`, `cat_item_img`, `created_at`, `updated_at`, `SEOdescription`, `SEOtitle`, `handle`) VALUES
(1, 1, 'Joggers', 'Image 1.png', '2021-01-03 12:51:32', '2021-02-03 07:26:41', 'Hadi', 'Hadi', 'Hadi'),
(2, 2, 'Lofers', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(3, 4, 'Blusher', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(4, 4, 'Eye Liner', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(5, 1, 'Converse', '1.jpg', '2021-01-05 15:14:55', '2021-01-05 15:14:55', 'Converse', 'Converse', 'Converse'),
(6, 3, 'Zara\'s Skirts', 'Image 1.png', '2021-01-05 15:17:19', '2021-02-03 07:27:50', 'Zara\'s Skirts', 'Zara\'s Skirts', 'Zara\'s Skirts'),
(7, 7, 'Pendent Earrings', '1610586941.jpg', '2021-01-13 20:15:41', '2021-01-13 20:15:41', 'Pendent Earrings', 'Pendent Earrings', 'Pendent Earrings'),
(8, 9, 'Umair', 'Image 1.png', '2021-02-13 04:08:48', '2021-02-13 04:08:48', 'Testing', 'Testing', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `cpages`
--

CREATE TABLE `cpages` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `SEOtitle` varchar(1024) DEFAULT NULL,
  `SEOdescription` varchar(1024) DEFAULT NULL,
  `SEOurl` varchar(1024) DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpages`
--

INSERT INTO `cpages` (`id`, `title`, `description`, `SEOtitle`, `SEOdescription`, `SEOurl`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Contact us', 'Contact Us', 'Contact Us', 'Contact Us', 1, '2021-02-01 11:13:51', NULL),
(2, 'Blog', '<p><strong>Blog1</strong></p>', 'Blog', 'Blog', 'Blog', 0, '2021-02-01 11:13:51', '2021-02-01 07:06:05'),
(3, 'About Us', '<p>About Us</p>', 'About Us', 'About Us', 'About Us', 0, '2021-02-01 11:13:51', '2021-02-01 07:05:26'),
(4, 'Report Us', '<h2><em>Report Us</em></h2>', 'Report Us', 'Report Us', 'Report Us', 0, '2021-02-01 07:48:37', '2021-02-01 07:48:57'),
(5, 'Donate Us', '<p>Donate Us</p>', 'Donate Us', 'Donate Us', 'Donate Us', 1, '2021-02-03 07:09:04', '2021-02-03 07:09:04'),
(7, 'Hadi', '<ol>\r\n	<li><s><em><strong>Testing</strong></em></s></li>\r\n	<li><s><em><strong>Testing</strong></em></s></li>\r\n	<li><s><em><strong>Testing</strong></em></s></li>\r\n</ol>', 'Testing', 'Testing', 'Testing', 0, '2021-02-13 04:27:49', '2021-02-13 04:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `ctimeline`
--

CREATE TABLE `ctimeline` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctimeline`
--

INSERT INTO `ctimeline` (`id`, `c_id`, `u_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 36, 1, 'My first comment', '2021-02-08 09:38:20', '2021-02-08 09:38:20'),
(5, 36, 1, 'My second comment', '2021-02-08 10:12:13', '2021-02-08 10:12:13'),
(6, 35, 1, 'Sugar Dad', '2021-02-08 10:13:48', '2021-02-08 10:13:48'),
(7, 35, 1, 'this is ABD', '2021-02-12 07:09:57', '2021-02-12 07:09:57'),
(8, 35, 1, 'hi', '2021-02-13 04:41:05', '2021-02-13 04:41:05'),
(9, 35, 1, 'Bad Dad', '2021-02-13 05:45:33', '2021-02-13 05:45:33'),
(10, 35, 1, 'Hash Dad', '2021-02-13 05:49:05', '2021-02-13 05:49:05'),
(11, 22, 1, 'hi', '2021-02-13 05:49:57', '2021-02-13 05:49:57'),
(12, 22, 1, 'Hash Dad', '2021-02-14 15:50:42', '2021-02-14 15:50:42'),
(13, 22, 1, 'Bad Dad', '2021-02-15 14:31:04', '2021-02-15 14:31:04'),
(14, 22, 1, 'hrllo', '2021-02-20 15:54:08', '2021-02-20 15:54:08'),
(15, 50, 1, 'My first comment', '2021-02-20 16:09:35', '2021-02-20 16:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_12_06_105223_categories_item', 1),
(6, '2020_12_06_121219_sub_categories', 1),
(7, '2020_12_06_122733_cat_item', 1),
(8, '2020_12_08_123315_products', 1),
(9, '2020_12_09_053140_create_carts_table', 1),
(10, '2020_12_09_072053_product_images', 1),
(11, '2020_12_09_072301_product_colors', 1),
(12, '2020_12_09_091539_product_sizes', 1),
(13, '2020_12_09_091613_product_widths', 1),
(14, '2020_12_18_190236_order', 1),
(15, '2020_12_18_190246_order_details', 1),
(16, '2020_12_18_190253_order_items', 1),
(17, '2020_12_19_082229_cart', 2),
(18, '2020_12_19_143603_create_carts_table', 3),
(19, '2020_12_03_025848_create_roles_table', 4),
(20, '2020_12_03_030253_create_role_user_table', 4),
(21, '2021_01_16_085640_staffarea', 5),
(22, '2021_01_16_090943_create_admin_logins_table', 6),
(23, '2020_12_12_102740_create_payments_table', 7),
(24, '2021_01_03_081459_view_count', 7),
(25, '2021_01_03_084544_reviews', 7),
(26, '2021_01_14_145513_addresses', 7),
(27, '2021_01_14_162642_payment', 8),
(28, '2017_08_11_073824_create_menus_wp_table', 9),
(29, '2017_08_11_074006_create_menu_items_wp_table', 9),
(30, '2019_01_05_293551_add-role-id-to-menu-items-table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Registration Successful!', 'Welcome to Zappos!', '2021-02-19 07:26:59', '2021-02-19 07:55:03'),
(4, 'Order Registered!', 'Your Order#1 has been successfully registered!', '2021-02-19 07:58:01', '2021-03-01 07:18:42'),
(6, 'Password Changed!', '<html></head></head><body><h1 style=\"color:red;\">Hello</h1></body></html>', '2021-03-02 11:58:34', '2021-03-02 11:58:34'),
(7, 'Order Canceled!', 'We are sorry to say that your order#21 has been canceled due to technical reasons!', '2021-03-02 12:19:29', '2021-03-02 12:19:29'),
(9, 'Order Refunded!', 'Your payment for order#21 has been successfully refunded!', '2021-03-02 12:25:42', '2021-03-02 12:25:42'),
(10, 'Order Edited!', 'Your Order#21 has been successfully edited!', '2021-03-02 12:44:50', '2021-03-02 12:44:50'),
(11, 'Order Confirmation!', 'Your order#21 has been confirmed and will be delivered in two or 3 working days.', '2021-03-02 12:44:50', '2021-03-02 12:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(22, 1, 1, '2020-12-21 08:03:54', '2020-12-21 08:03:54'),
(36, 13, 1, '2021-01-28 13:57:59', '2021-01-28 13:57:59'),
(39, 1, 1, '2021-02-13 06:32:24', '2021-02-13 06:32:24'),
(50, 16, 0, '2021-02-17 13:39:34', '2021-02-17 13:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(64) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `dmethod` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `name`, `email`, `address`, `phone`, `zip`, `city`, `state`, `created_at`, `updated_at`, `dmethod`, `note`, `order_total`) VALUES
(17, 22, 'Hadi', 'test@webkul.com', 'asdasd', 321325648, 0, 'DALLAS', 'TX', '2021-02-20 20:27:50', '2021-02-20 15:27:50', 'Local Delivery', NULL, NULL),
(19, 39, 'Hadi', 'test@webkul.com', 'asdasd', 321325648, 0, 'DALLAS', 'TX', '2021-03-04 11:36:26', '2020-12-21 08:26:20', 'Local Pickup', NULL, NULL),
(24, 36, 'Umair', 'admin@admin.com', '123 sbc s', 9822365413211, 89101, 'Las Vagas', 'Nevada', '2021-03-05 14:36:13', '2021-03-05 09:36:13', 'Local Pickup', 'Hell', NULL),
(30, 50, 'Raheel', 'raheel@raheel.com', 'Aasddasdfas', 3045260527, 44000, 'Rawalpindi', 'Punjab', '2021-03-04 12:42:23', '2021-02-17 13:39:34', 'Local Pickup', NULL, 34);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_title`, `product_image`, `product_color`, `product_size`, `product_price`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(13, 22, 'Shoes', '1.jpg', 'White', 'lg', 10, '2', 10, '2020-12-21 08:03:54', '2020-12-21 08:03:54'),
(14, 39, 'Nike Joggers', '1.jpg', 'White', 'lg', 11.5, '2', 23, '2020-12-21 08:05:04', '2020-12-21 08:05:04'),
(15, 39, 'Shoes', '1.jpg', 'White', 'lg', 22, '2', 44, '2020-12-21 08:26:20', '2020-12-21 08:26:20'),
(24, 36, 'Sleveless Skirts', '1.jpg', 'Breeze/Black', 'SM', 30, '1', 30, '2021-01-28 13:57:35', '2021-01-28 13:57:35'),
(25, 39, 'Sleveless Skirts', '1.jpg', 'Breeze/Black', 'SM', 30, '1', 23, '2021-01-28 13:57:59', '2021-01-28 13:57:59'),
(39, 50, 'Shoes', '1.jpg', 'Carrer Grey/Black', 'SM', 34, '1', 34, '2021-02-17 13:39:34', '2021-02-17 13:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `otimeline`
--

CREATE TABLE `otimeline` (
  `id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otimeline`
--

INSERT INTO `otimeline` (`id`, `o_id`, `u_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 36, 1, 'Bad Dad', '2021-02-08 10:05:21', '2021-02-08 10:05:21'),
(2, 35, 1, 'My first comment', '2021-02-08 10:09:13', '2021-02-08 10:09:13'),
(3, 36, 1, 'Hash Dad', '2021-02-08 10:12:35', '2021-02-08 10:12:35'),
(4, 22, 1, 'order recieved!', '2021-02-12 06:56:37', '2021-02-12 06:56:37'),
(5, 22, 1, 'Bad Dad', '2021-02-12 06:57:56', '2021-02-12 06:57:56'),
(6, 35, 1, 'Bad Dad', '2021-02-13 04:35:32', '2021-02-13 04:35:32'),
(7, 35, 1, 'sadd', '2021-02-13 04:51:19', '2021-02-13 04:51:19'),
(8, 36, 1, 'Bad Dad', '2021-03-05 08:35:28', '2021-03-05 08:35:28'),
(9, 39, 1, 'hrllo', '2021-03-05 09:33:12', '2021-03-05 09:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cardholder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `cardholder`, `card`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 12, 'Umair Malik', '1234156as4da98da', 'Jan', '2022', '2021-01-16 13:04:34', '2021-01-16 13:04:34'),
(2, 12, 'Hadi Butt', '131s2s5d46545', 'Fed', '2021', '2021-01-16 13:05:10', '2021-01-16 13:05:10'),
(3, 14, 'q231231355134', '123141341212', 'May', '2023', '2021-02-13 06:32:06', '2021-02-13 06:32:06'),
(4, 16, 'Raheel', '42342343243454', 'Sept', '2024', '2021-02-17 13:34:51', '2021-02-17 13:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_item_id` bigint(20) UNSIGNED NOT NULL,
  `pro_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOtitle` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOdesc` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOurl` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saleprice` int(11) NOT NULL,
  `purchaseprice` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `weight` float NOT NULL,
  `dimension` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `vendor` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_item_id`, `pro_title`, `pro_img`, `pro_price`, `created_at`, `updated_at`, `description`, `SEOtitle`, `SEOdesc`, `SEOurl`, `status`, `tags`, `saleprice`, `purchaseprice`, `tax`, `weight`, `dimension`, `barcode`, `stock`, `vendor`, `type`, `rating`) VALUES
(1, 1, 'Sleveless Skirts', 'product.png', 30.01, NULL, '2021-01-30 07:16:44', 'Skirt', 'Skirt', 'Skirt', 'Skirt', 'Active', 'Skirt', 23, 21, 9, 23.32, '22', '321F', 21, 'Outfitters', 'Women', 3),
(2, 3, 'Shoes', '1.jpg', 100.70, NULL, '2021-01-11 19:41:10', 'Shoes', 'Shoes', 'Shoes', 'Shoes', 'Disabled', 'Shoes', 19, 12, 21, 32.21, '56', '213V', 43, 'Gucci', 'Men', NULL),
(13, 4, 'Black Shoes', '1.jpg', 34.00, '2021-01-02 17:07:35', '2021-01-02 17:07:35', '<p>Kajal</p>', 'Kajal', '<p>Kajal</p>', 'Kajal', 'Archieved', 'Kajal', 32, 21, 21, 16.54, '32', '4324F', 32, 'Kylie Jenner', 'Women', NULL),
(14, 2, 'Nike Joggers', '1.jpg', 34.00, '2021-01-02 18:29:30', '2021-01-02 18:29:30', '<p>Nike Joggers</p>', 'Nike Joggers', '<p>Nike Joggers</p>', 'Nike Joggers', 'Disabled', 'Nike Joggers', 32, 21, 9, 16.54, '32', '4324F', 21, 'Nike', 'Women', NULL),
(33, 1, 'Diamond Earrings', '1610587216.jpg', 32.00, '2021-01-13 20:20:16', '2021-01-28 12:28:12', '<p>Diamond Earrings</p>', 'Diamond Earrings', '<p>Diamond Earrings</p>', 'Diamond Earrings', 'Active', 'Diamond Earrings', 32, 21, 9, 16.54, '32', '4324F', 45, 'Ali Jewelers', 'Women', 3),
(34, 1, '3M MicroTouch™ Chassis 1123988', '1610587905.jpg', 34.00, '2021-01-13 20:31:45', '2021-01-13 20:31:45', '<p>dsds</p>', 'sds', '<p>dsd</p>', 'sdsd', 'Active', 'dsd', 32, 21, 9, 16.54, '32', '4324F', 3, 'sdsd', 'dsd', NULL),
(35, 1, '3M MicroTouch™ Chassis 1123988', '1.jpg', 34.00, '2021-01-13 20:45:42', '2021-01-28 04:19:00', '<strong>sds</strong>', 'dff', '<p>dfdf</p>', 'dfd', 'Active', '434', 32, 21, 21, 16.54, '32', '4324F', 4, '3434', '3434', 2),
(37, 5, 'Ripped Shoes', 'Image 1.png', 34.00, '2021-02-03 07:17:52', '2021-02-03 07:17:52', '<p>Ripped Shoes</p>', 'Ripped Shoes', '<p>Ripped Shoes</p>', 'Ripped Shoes', 'Active', 'Men', 2, 21, 21, 16.54, '32', '4324F', 34, 'Converse', 'Men', NULL),
(38, 4, 'Lava Eyeliner', 'Image 1 - Copy.png', 32.00, '2021-02-03 07:23:45', '2021-02-03 07:23:45', '<p>Lava Eyeliner</p>', 'Lava Eyeliner', '<p>Lava Eyeliner</p>', 'Lava Eyeliner', 'Active', 'Makeup, Fashion', 2, 21, 21, 16.54, '32', '4324F', 32, 'Lava', 'Women', NULL),
(39, 6, 'Hadi', 'Image 1 - Copy.png', 34.00, '2021-02-13 04:22:08', '2021-02-13 04:25:23', '<ol>\r\n	<li><s><em><strong>tahhdsd</strong></em></s></li>\r\n	<li><s><em><strong>4wewqda</strong></em></s></li>\r\n	<li><em><strong>sfaasf</strong></em></li>\r\n</ol>', 'Testing', '<p>Testing</p>', 'Testing', 'Disabled', 'dfsfd', 32, 21, 9, 16.54, '32', '4324F', 43, 'rtert', 'rtert', NULL),
(40, 6, 'Mancy Nancy', 'MY DP.jfif', 34.00, '2021-03-05 09:54:32', '2021-03-05 09:54:32', '<p><em><strong>Mancy Nancy</strong></em></p>', 'Mancy Nancy', '<p>Mancy Nancy</p>', 'Mancy Nancy', 'Active', 'Mancy Nancy', 2, 21, 23, 16.54, '32', '4324F', 332, 'Mancy Nancy', 'Mancy Nancy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `color1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `img_id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `pro_img2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_img5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`img_id`, `pro_id`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_img5`) VALUES
(4, 29, 'C:\\xampp\\htdocs\\xampp\\Zappos-Admin-Panel\\public\\assets\\img\\1610577939.jpg', 'C:\\xampp\\htdocs\\xampp\\Zappos-Admin-Panel\\public\\assets\\img\\1610577939.jpg', 'C:\\xampp\\htdocs\\xampp\\Zappos-Admin-Panel\\public\\assets\\img\\1610577939.jpg', 'C:\\xampp\\htdocs\\xampp\\Zappos-Admin-Panel\\public\\assets\\img\\1610577939.jpg'),
(5, 30, '1610584871.jpg', '1610584871.jpg', '1610584871.jpg', '1610584871.jpg'),
(6, 31, '1610585044.jpg', '1610585044.jpg', '1610585044.jpg', '1610585044.jpg'),
(7, 32, '1610585497.jpg', '1610585497.jpg', '1610585497.jpg', '1610585497.jpg'),
(8, 33, '1610587217.jpg', '1610587217.jpg', '1610587217.jpg', '1610587217.jpg'),
(9, 34, 'jpg', 'jpg', 'jpg', 'jpg'),
(10, 35, '1610588742.jpg', '1610588742.jpg', '1610588742.jpg', '1610588743.jpg'),
(11, 1, 'product.png', 'women.png', 'product.png', 'product.png'),
(12, 38, 'Image 1 - Copy.png', 'Image 1 - Copy.png', 'Image 1 - Copy.png', 'Image 1 - Copy.png'),
(13, 39, 'Image 1 - Copy.png', 'Image 1 - Copy.png', 'Image 1 - Copy.png', 'Image 1 - Copy.png'),
(14, 40, 'MY DP.jfif', 'MY DP.jfif', 'MY DP.jfif', 'MY DP.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `size1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_widths`
--

CREATE TABLE `product_widths` (
  `width_id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `width1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usercity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rating`, `review`, `pic1`, `pic2`, `pic3`, `pic4`, `username`, `usercity`, `created_at`, `updated_at`) VALUES
(15, 12, 1, 3.5, 'good', 'product.png', 'product.png', 'product.png', 'product.png', 'Hadi Butt', NULL, '2021-01-28 03:49:12', '2021-01-28 03:49:12'),
(25, 12, 35, 5, 'good', 'product.png', 'product.png', 'product.png', 'product.png', 'Umair Malik', NULL, '2021-01-28 04:16:44', '2021-01-28 04:16:44'),
(26, 12, 35, 3, 'nice', 'product.png', 'product.png', 'product.png', 'product.png', 'Raheel Khan', NULL, '2021-01-28 04:19:00', '2021-01-28 04:19:00'),
(28, 12, 1, 5, 'Very Good Product', 'product.png', 'product.png', 'Image 1 - Copy.png', 'Image 1.png', 'Hadi Butt', 'Rawalpindi', '2021-01-28 04:38:02', '2021-01-28 04:38:02'),
(43, 12, 1, 4, 'good', 'Image 1 - Copy (5).png', 'Image 1 - Copy.png', 'Image 1.png', 'product.png', 'Hadi Butt', 'Rawalpindi', '2021-01-29 06:01:10', '2021-01-29 06:01:10'),
(44, 13, 1, 3.5, 'ggiood', 'Image 1 - Copy (2).png', 'Image 1 - Copy.png', 'Image 1.png', NULL, 'Hadi Butt', 'Rawalpindi', '2021-01-30 07:16:43', '2021-01-30 07:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-12-24 04:44:15', '2020-12-24 04:44:15'),
(2, 'moderator', '2020-12-24 04:44:15', '2020-12-24 04:44:15'),
(3, 'user', '2020-12-24 04:44:15', '2020-12-24 04:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL),
(2, 2, 5, NULL, NULL),
(3, 3, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffarea`
--

CREATE TABLE `staffarea` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `OrderPage` tinyint(1) NOT NULL,
  `ProductPage` tinyint(1) NOT NULL,
  `OrderDetailsPage` tinyint(1) NOT NULL,
  `AddProductPage` tinyint(1) NOT NULL,
  `UpdateProductPage` tinyint(1) NOT NULL,
  `CategoryPage` tinyint(1) NOT NULL,
  `AddCategory` tinyint(1) NOT NULL,
  `UpdateCategory` tinyint(1) NOT NULL,
  `CustomerPage` tinyint(1) NOT NULL,
  `AboutCustomerPage` tinyint(1) NOT NULL,
  `SubcategoryPage` tinyint(1) NOT NULL,
  `AddSubcategoryPage` tinyint(1) NOT NULL,
  `UpdateSubcategoryPage` tinyint(1) NOT NULL,
  `CollectionPage` tinyint(1) NOT NULL,
  `AddCollectionPage` tinyint(1) NOT NULL,
  `UpdateCollectionPage` tinyint(1) NOT NULL,
  `SettingsPage` tinyint(1) NOT NULL,
  `GeneralPage` tinyint(1) NOT NULL,
  `StaffAccountPage` tinyint(1) NOT NULL,
  `StaffAreaPage` tinyint(1) NOT NULL,
  `UpdateStaffAreaPage` tinyint(1) NOT NULL,
  `TaxPage` tinyint(1) NOT NULL,
  `PaymentPage` tinyint(1) NOT NULL,
  `NotificationPage` tinyint(1) NOT NULL,
  `TranslationPage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `StoreName` varchar(1024) NOT NULL,
  `StoreEmail` varchar(1024) NOT NULL,
  `SenderEmail` varchar(1024) NOT NULL,
  `StoreIndustry` varchar(1024) NOT NULL,
  `LegalName` varchar(1024) NOT NULL,
  `Phone` varchar(1024) NOT NULL,
  `Streets` varchar(1024) NOT NULL,
  `Apartment` varchar(1024) NOT NULL,
  `City` varchar(1024) NOT NULL,
  `ZipCode` varchar(1024) NOT NULL,
  `Country` varchar(1024) NOT NULL,
  `TimeZone` varchar(1024) NOT NULL,
  `UnitSystem` varchar(1024) NOT NULL,
  `WeightUnit` varchar(1024) NOT NULL,
  `Currency` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `StoreName`, `StoreEmail`, `SenderEmail`, `StoreIndustry`, `LegalName`, `Phone`, `Streets`, `Apartment`, `City`, `ZipCode`, `Country`, `TimeZone`, `UnitSystem`, `WeightUnit`, `Currency`) VALUES
(10, 'Zappos', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Pakistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD'),
(11, 'Zappo', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Afganistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD'),
(12, 'Zappos', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Afganistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD'),
(13, 'Zapp', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Afganistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD'),
(14, 'Zappo', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Afganistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD'),
(15, 'Zappos', 'hadibutt476@gmail.com', 'hadibutt476@gmail.com', 'clothing', 'Zappos', '03045260527', 'Airport Housing Society, Rawalpindi', 'Airport Housing Society, Rawalpindi', 'Rawalpindi', '44000', 'Afganistan', '+00:00', 'Imperial System', 'Kilo Gram(Kg)', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `subcat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `subcat_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `handle` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOdescription` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SEOtitle` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`subcat_id`, `cat_id`, `subcat_title`, `subcat_img`, `created_at`, `updated_at`, `handle`, `SEOdescription`, `SEOtitle`) VALUES
(1, 1, 'Shoes', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(2, 2, 'Skirts', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(3, 1, 'T-Shirt', '1.jpg', '2021-01-03 12:51:32', '2021-01-11 18:31:21', 'Hadi', 'Hadi', 'Hadi'),
(4, 2, 'Makeup', '1.jpg', '2021-01-03 12:51:32', NULL, 'Hadi', 'Hadi', 'Hadi'),
(5, 4, 'Panties', '1.jpg', '2021-01-04 16:03:23', '2021-01-04 16:03:23', 'Testing', 'Testing', 'Testing'),
(7, 6, 'Earrings', '1610586732.jpg', '2021-01-13 20:12:12', '2021-01-13 20:12:12', 'Earrings', 'Earrings', 'Earrings'),
(9, 12, 'Testing', 'Image 1.png', '2021-02-13 04:04:12', '2021-02-13 04:07:40', 'Testing', 'Testing', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `digital` varchar(1024) NOT NULL,
  `food` varchar(1024) NOT NULL,
  `nonfood` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `digital`, `food`, `nonfood`) VALUES
(1, '0', '9', '21'),
(2, '0.1', '9', '21'),
(3, '0', '9', '2'),
(4, '54', '93', '23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$YMPOHozYtT/fOPzUiAnm0OU9VQvrd4RT/aCpPSNGet/7VXIvOOeFO', 'Hadi Butt', '2021-02-01 10:01:24', '2021-03-02 07:37:35'),
(13, 'test@test.com', '$2y$10$7bo7SATKda8CKqBIzzY4BO2EHrOrRkTVjYJxlFkUjM3vpuDH1egLW', 'Zubair Qureshi', '2021-01-30 05:37:26', '2021-01-30 05:37:26'),
(15, 'test@zappos.com', '$2y$10$PfDi97i0RBOK2.KCUFe49ugMdF1R29pXjFTeL.QWOrdcB7YiVR4MC', 'Testing', '2021-02-14 15:57:09', '2021-02-14 15:57:09'),
(16, 'raheel@raheel.com', '$2y$10$URnIPT0HVzx5ClP7wzXvEO714jqxeUjnmsJJHAgMOZIsDUhVSxvKq', 'Raheel Khan', '2021-02-17 13:28:58', '2021-02-17 13:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 12, 14, '2021-01-29 11:27:33', '2021-01-29 11:27:33'),
(2, 12, 1, '2021-01-29 11:28:53', '2021-01-29 11:28:53'),
(3, 12, 14, '2021-01-29 11:35:04', '2021-01-29 11:35:04'),
(4, 12, 14, '2021-01-29 11:38:40', '2021-01-29 11:38:40'),
(5, 12, 1, '2021-01-30 05:15:50', '2021-01-30 05:15:50'),
(6, 12, 1, '2021-01-30 05:18:24', '2021-01-30 05:18:24'),
(7, 12, 14, '2021-01-30 05:19:23', '2021-01-30 05:19:23'),
(8, 12, 14, '2021-01-30 05:20:11', '2021-01-30 05:20:11'),
(9, 12, 14, '2021-01-30 05:20:39', '2021-01-30 05:20:39'),
(10, 12, 14, '2021-01-30 05:22:10', '2021-01-30 05:22:10'),
(11, 12, 14, '2021-01-30 05:32:44', '2021-01-30 05:32:44'),
(12, 12, 14, '2021-01-30 05:34:00', '2021-01-30 05:34:00'),
(13, 12, 14, '2021-01-30 05:34:56', '2021-01-30 05:34:56'),
(14, 12, 14, '2021-01-30 05:36:22', '2021-01-30 05:36:22'),
(15, 13, 1, '2021-01-30 05:41:05', '2021-01-30 05:41:05'),
(16, 12, 35, '2021-01-30 05:43:21', '2021-01-30 05:43:21'),
(17, 12, 35, '2021-01-30 05:44:46', '2021-01-30 05:44:46'),
(18, 12, 35, '2021-01-30 05:46:56', '2021-01-30 05:46:56'),
(19, 12, 14, '2021-01-30 05:47:20', '2021-01-30 05:47:20'),
(20, 12, 14, '2021-01-30 05:49:23', '2021-01-30 05:49:23'),
(21, 12, 14, '2021-01-30 05:49:43', '2021-01-30 05:49:43'),
(22, 12, 14, '2021-01-30 05:50:09', '2021-01-30 05:50:09'),
(23, 13, 35, '2021-01-30 05:52:52', '2021-01-30 05:52:52'),
(24, 13, 33, '2021-01-30 05:53:46', '2021-01-30 05:53:46'),
(25, 13, 1, '2021-01-30 06:25:24', '2021-01-30 06:25:24'),
(26, 13, 1, '2021-01-30 06:59:30', '2021-01-30 06:59:30'),
(27, 13, 1, '2021-01-30 07:01:29', '2021-01-30 07:01:29'),
(28, 13, 1, '2021-01-30 07:07:31', '2021-01-30 07:07:31'),
(29, 13, 1, '2021-01-30 07:10:00', '2021-01-30 07:10:00'),
(30, 13, 1, '2021-01-30 07:12:36', '2021-01-30 07:12:36'),
(31, 13, 1, '2021-01-30 07:13:52', '2021-01-30 07:13:52'),
(32, 13, 1, '2021-01-30 07:16:45', '2021-01-30 07:16:45'),
(33, 13, 1, '2021-01-30 07:19:14', '2021-01-30 07:19:14'),
(34, 13, 1, '2021-01-30 07:20:17', '2021-01-30 07:20:17'),
(35, 13, 1, '2021-01-30 07:21:10', '2021-01-30 07:21:10'),
(36, 13, 1, '2021-01-30 07:23:10', '2021-01-30 07:23:10'),
(37, 13, 1, '2021-01-30 07:23:47', '2021-01-30 07:23:47'),
(38, 13, 35, '2021-01-30 07:24:35', '2021-01-30 07:24:35'),
(39, 13, 35, '2021-01-30 07:25:17', '2021-01-30 07:25:17'),
(40, 13, 35, '2021-01-30 07:27:09', '2021-01-30 07:27:09'),
(41, 14, 37, '2021-02-12 08:00:22', '2021-02-12 08:00:22'),
(42, 14, 37, '2021-02-12 08:09:17', '2021-02-12 08:09:17'),
(43, 14, 37, '2021-02-12 08:10:55', '2021-02-12 08:10:55'),
(44, 14, 37, '2021-02-12 08:11:27', '2021-02-12 08:11:27'),
(45, 14, 37, '2021-02-12 08:11:37', '2021-02-12 08:11:37'),
(46, 14, 37, '2021-02-12 08:13:02', '2021-02-12 08:13:02'),
(47, 14, 37, '2021-02-12 08:13:10', '2021-02-12 08:13:10'),
(48, 14, 37, '2021-02-12 08:13:40', '2021-02-12 08:13:40'),
(49, 14, 37, '2021-02-12 08:13:43', '2021-02-12 08:13:43'),
(50, 14, 1, '2021-02-12 08:16:02', '2021-02-12 08:16:02'),
(51, 14, 1, '2021-02-12 08:19:41', '2021-02-12 08:19:41'),
(52, 14, 1, '2021-02-12 08:21:23', '2021-02-12 08:21:23'),
(53, 14, 35, '2021-02-12 08:21:25', '2021-02-12 08:21:25'),
(54, 14, 1, '2021-02-13 06:27:01', '2021-02-13 06:27:01'),
(55, 14, 1, '2021-02-13 06:29:39', '2021-02-13 06:29:39'),
(56, 14, 1, '2021-02-13 06:41:04', '2021-02-13 06:41:04'),
(57, 14, 1, '2021-02-13 08:27:01', '2021-02-13 08:27:01'),
(58, 14, 1, '2021-02-13 08:27:57', '2021-02-13 08:27:57'),
(59, 14, 1, '2021-02-13 08:29:03', '2021-02-13 08:29:03'),
(60, 14, 1, '2021-02-13 08:30:05', '2021-02-13 08:30:05'),
(61, 14, 1, '2021-02-13 08:31:01', '2021-02-13 08:31:01'),
(62, 14, 1, '2021-02-13 08:31:05', '2021-02-13 08:31:05'),
(63, 14, 1, '2021-02-13 08:35:09', '2021-02-13 08:35:09'),
(64, 14, 1, '2021-02-13 08:37:04', '2021-02-13 08:37:04'),
(65, 14, 1, '2021-02-13 08:38:34', '2021-02-13 08:38:34'),
(66, 14, 1, '2021-02-13 08:39:45', '2021-02-13 08:39:45'),
(67, 14, 1, '2021-02-13 08:41:54', '2021-02-13 08:41:54'),
(68, 14, 1, '2021-02-13 08:43:03', '2021-02-13 08:43:03'),
(69, 14, 1, '2021-02-13 08:45:50', '2021-02-13 08:45:50'),
(70, 14, 1, '2021-02-13 08:46:50', '2021-02-13 08:46:50'),
(71, 14, 1, '2021-02-13 08:47:17', '2021-02-13 08:47:17'),
(72, 14, 1, '2021-02-13 08:50:01', '2021-02-13 08:50:01'),
(73, 1, 1, '2021-02-17 12:19:46', '2021-02-17 12:19:46'),
(74, 1, 1, '2021-02-17 12:45:01', '2021-02-17 12:45:01'),
(75, 1, 35, '2021-02-17 12:52:11', '2021-02-17 12:52:11'),
(76, 1, 37, '2021-02-17 13:05:38', '2021-02-17 13:05:38'),
(77, 16, 35, '2021-02-17 13:32:21', '2021-02-17 13:32:21'),
(78, 1, 1, '2021-03-01 07:35:41', '2021-03-01 07:35:41'),
(79, 1, 100, '2021-03-01 07:36:02', '2021-03-01 07:36:02'),
(80, 1, 35, '2021-03-01 07:40:03', '2021-03-01 07:40:03'),
(81, 1, 35, '2021-03-01 07:48:52', '2021-03-01 07:48:52'),
(82, 1, 35, '2021-03-01 07:59:01', '2021-03-01 07:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_logins`
--
ALTER TABLE `admin_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_pro_id_foreign` (`pro_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cat_items`
--
ALTER TABLE `cat_items`
  ADD PRIMARY KEY (`cat_item_id`),
  ADD KEY `cat_items_subcat_id_foreign` (`subcat_id`);

--
-- Indexes for table `cpages`
--
ALTER TABLE `cpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctimeline`
--
ALTER TABLE `ctimeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otimeline`
--
ALTER TABLE `otimeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_item_id_foreign` (`cat_item_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`color_id`),
  ADD KEY `product_colors_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `product_images_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `product_sizes_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `product_widths`
--
ALTER TABLE `product_widths`
  ADD PRIMARY KEY (`width_id`),
  ADD KEY `product_widths_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffarea`
--
ALTER TABLE `staffarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `sub_categories_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_user_id_foreign` (`user_id`),
  ADD KEY `views_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_logins`
--
ALTER TABLE `admin_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cat_items`
--
ALTER TABLE `cat_items`
  MODIFY `cat_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cpages`
--
ALTER TABLE `cpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ctimeline`
--
ALTER TABLE `ctimeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `otimeline`
--
ALTER TABLE `otimeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `color_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `size_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_widths`
--
ALTER TABLE `product_widths`
  MODIFY `width_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffarea`
--
ALTER TABLE `staffarea`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `subcat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD CONSTRAINT `admin_menu_items_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `admin_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cat_items`
--
ALTER TABLE `cat_items`
  ADD CONSTRAINT `cat_items_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `sub_categories` (`subcat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

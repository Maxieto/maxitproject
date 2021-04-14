-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 06:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc_hyip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@site.com', 'admin', NULL, '5e416be3cf43c1581345763.jpg', '$2y$10$GmNdZfsrjLzsuwK3f8Woce6KWzm3KtRbL2gC5w1POh/Kf3SfTnMPO', NULL, NULL, '2020-02-10 14:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commission_logs`
--

CREATE TABLE `commission_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `who` int(11) DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(11,2) NOT NULL DEFAULT 0.00,
  `main_amo` decimal(18,2) DEFAULT 0.00,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_topics`
--

CREATE TABLE `contact_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `method_code` int(10) UNSIGNED NOT NULL,
  `amount` decimal(18,8) NOT NULL,
  `method_currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` decimal(18,8) NOT NULL,
  `rate` decimal(18,8) NOT NULL,
  `final_amo` decimal(18,8) DEFAULT 0.00000000,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `try` int(11) NOT NULL DEFAULT 0,
  `verify_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '	1=> confirm , 2 => pending, -2 => rejected	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_sms_templates`
--

CREATE TABLE `email_sms_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `act` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcodes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_status` tinyint(4) NOT NULL DEFAULT 1,
  `sms_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_sms_templates`
--

INSERT INTO `email_sms_templates` (`id`, `act`, `name`, `subj`, `email_body`, `sms_body`, `shortcodes`, `email_status`, `sms_status`, `created_at`, `updated_at`) VALUES
(1, 'ACCOUNT_RECOVERY_CODE', 'Account recovery code send', 'Account recovery code', 'Your account recovery code is: {{code}}', 'Your account recovery code is: {{code}}', '{\"code\":\"Recovery code\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(2, 'EVER_CODE', 'Email Verification code send', 'Please verify your email address', 'Your email verification code is: {{code}}', 'Your email verification code is: {{code}}', '{\"code\":\"Verification code\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(3, 'SVER_CODE', 'Phone Verification code send', 'Please verify your phone', 'Your phone verification code is: {{code}}', 'Your phone verification code is: {{code}}', '{\"code\":\"Verification code\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(4, 'PASS_RESET', 'Password reset email', 'You have changed your password', 'Your password has been changed successfully', 'Your password has been changed successfully', '{\"code\":\"Verification code\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(6, 'WITHDRAW_REQUEST', 'Withdraw Requested', 'Withdraw Request Send Successfully', '{{amount}} {{currency}}  withdraw requested by {{withdraw_method}}.  You will get {{method_amount}}  {{method_currency}}  in {{duration}}.  Trx: {{trx}}', '{{amount}} {{currency}} withdraw requested by {{withdraw_method}}. You will get {{method_amount}} {{method_currency}} in {{duration}}. Trx: {{trx}}', '{\"trx\":\"trx\",\"amount\":\"amount\",\"currency\":\"currency\",\"withdraw_method\":\"withdraw_method\",\"method_amount\":\"method_amount\",\"method_currency\":\"method_currency\",\"duration\":\"duration\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(11, '2fa', 'Two Factor Verification', 'Two Factor Verification', 'Google auhtentication {{action}} succeffully.<div><br></div><div>IP : {{ip}}</div><div><br></div><div>Browser: {{browser}}</div><div><br></div><div><span style=\"font-family: &quot;Open Sans&quot;, sans-serif;\">Time: {{time}}</span><br></div>', 'Google auhtentication {{action}} succeffully.\r\n\r\nIP : {{ip}}\r\n\r\nBrowser: {{browser}}\r\n\r\nTime: {{time}}', '{\"action\":\"action\",\"ip\":\"ip\",\"browser\":\"browser\",\"time\":\"time\"}', 1, 1, '2019-09-24 23:04:05', '2019-12-15 08:04:44'),
(13, 'WITHDRAW_APPROVE', 'Withdraw Request Confirm', 'Withdraw Request Confirm', 'Admin Approve Your  {{amount}} {{currency}}  withdraw request by {{method}}.  Transaction {{transaction}}', 'Admin Approve Your {{amount}} {{currency}} withdraw request by {{method}}. Transaction {{transaction}}', '{\"amount\":\"amount\",\"currency\":\"currency\",\"main_balance\":\"main_balance\",\"method\":\"method\",\"transaction\":\"transaction\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(14, 'WITHDRAW_REJECT', 'Withdraw Request refunded', 'Withdraw Request Cancel', 'Admin Rejected Your  {{amount}} {{currency}}  withdraw request. Your Main Balance  {{main_balance}}&nbsp;<span style=\"font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;{{method}}</span>&nbsp;, Transaction {{transaction}}', 'Admin Rejected Your {{amount}} {{currency}} withdraw request. Your Main Balance {{main_balance}}  {{method}} , Transaction {{transaction}}', '{\"amount\":\"Withdraw Amount\", \"method\":\"Method Name\",\"trx\":\"Transaction Number\"}', 1, 1, '2019-09-24 23:04:05', '2019-12-18 12:10:16'),
(15, 'DEPOSIT_PENDING', 'Manual deposit requested ', 'Payment Request Send Successfully', '{{amount}}  Deposit requested by {{method}}.     Charge: {{charge}} .   Trx: {{trx}}', '{{amount}} Deposit requested by {{method}}. Charge: {{charge}} . Trx: {{trx}}\r\nYour main Balance: {{new_balance}} {{currency}}\r\n\r\nTransaction {{transaction_id}}', '{\"trx\":\"trx\",\"amount\":\"amount\",\"method\":\"method\",\"charge\":\"charge\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(16, 'DEPOSIT_COMPLETE', 'Payment Successful', 'Payment Successfully', '{{amount}} {{currrency}} Deposit successfully by {{gateway_name}}<div><br></div><div>Your main Balance: {{new_balance}} {{currency}}</div><div><br></div><div>Transaction {{transaction_id}}</div>', '{{amount}} {{currrency}} Deposit successfully by {{gateway_name}}\r\n\r\nYour main Balance: {{new_balance}} {{currency}}\r\n\r\nTransaction {{transaction_id}}', '{\"amount\":\"amount\",\"currency\":\"currency\",\"gateway_currency\":\"gateway_currency\",\"gateway_name\":\"gateway_name\",\"new_balance\":\"new_balance\",\"transaction_id\":\"transaction ID\"}', 1, 1, '2019-09-24 23:04:05', '2019-09-24 23:58:46'),
(21, 'DEPOSIT_APPROVE', 'Manual Deposit Approved', 'Payment Approval Successful', 'Admin Approve Your  {{amount}} {{gateway_currency}}  payment request by {{gateway_name}} transaction : {{transaction}}', 'Admin Approve Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}} transaction : {{transaction}}', '{\"amount\":\"amount\",\"gateway_currency\":\"gateway_currency\",\"gateway_name\":\"gateway_name\",\"transaction\":\"transaction\"}', 1, 1, NULL, NULL),
(22, 'DEPOSIT_REJECT', 'Manual Deposit Rejected', 'Payment Request Cancel', 'Admin Rejected Your  {{amount}} {{gateway_currency}}  payment request by {{gateway_name}}', 'Admin Rejected Your {{amount}} {{gateway_currency}} payment request by {{gateway_name}}', '{\"amount\":\"amount\",\"gateway_currency\":\"gateway_currency\",\"gateway_name\":\"gateway_name\"}', 1, 1, NULL, NULL),
(23, 'INVESTMENT_PURCHASE', 'Investment Plan Purchase', 'Investment Plan Purchase', 'Congratulation, Successfully Invest complete. You invest  {{amount}} {{currency}}  And you will get {{interest_amount}} {{currency}} interest.', 'Congratulation, Successfully Invest complete. You invest  {{amount}} {{currency}}  And you will get {{interest_amount}} {{currency}} interest.', '{\"amount\":\"amount\",\"interest_amount\":\"interest amount\",\"trx\":\"transaction\",\"currency\":\"currency\"}', 1, 1, NULL, NULL),
(25, 'REFERRAL_COMMISSION', 'REFERRAL COMMISSION', 'REFERRAL COMMISSION', 'Congratulation, You you  {{amount}} {{currency}} interest And your main balance {{main_balance}} {{currency}} . {{level}} . Transaction {{trx}}', 'Congratulation, You you  {{amount}} {{currency}} interest And your main balance {{main_balance}} {{currency}} . {{level}} . Transaction {{trx}}', '{\"amount\":\"amount\",\"main_balance\":\"main balance\",\"trx\":\"transaction\",\"level\":\"level\",\"currency\":\"currency\"}', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_keys` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_values` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `data_keys`, `data_values`, `created_at`, `updated_at`) VALUES
(1, 'seo', '{\"keywords\":[\"hyip\",\"investment\",\"hyip investment\",\"bitcoin hyip\",\"hyip website\",\"hyip script\",\"php hyip\",\"hyip manager\",\"crypto hyip\",\"cryptocurrency hyip\",\"RockHYIP\"],\"description\":\"Are you looking for Complete, Secure, Responsive, Unique & Inovative HYIP Investment Script? RockHYIP is here to fullfill all your requirements. HYIP script which meets all your hyip & investment business needs. All-in-one Solution For Start your own investment program ! Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We are doing continuous improvements to make it more stable in long run. We are using the latest and advanced technology Where Security is our Primary concern.\",\"social_title\":\"RockHYIP\",\"social_description\":\"Are you looking for Complete, Secure, Responsive, Unique & Inovative HYIP Investment Script? RockHYIP is here to fullfill all your requirements. HYIP script which meets all your hyip & investment business needs. All-in-one Solution For Start your own investment program ! Our scripts are developed by our in-house Developers. We always produce secure, reliable, efficient and scalable script. We are doing continuous improvements to make it more stable in long run. We are using the latest and advanced technology Where Security is our Primary concern.\",\"image\":\"5e3edd14116501581178132.jpg\"}', '2019-09-24 23:04:05', '2020-02-10 14:44:24'),
(3, 'gauth', '{\"id\":\"DEMO\",\"secret\":\"DEMO\"}', '2019-09-24 23:04:05', '2019-09-24 23:04:05'),
(4, 'fauth', '{\"id\":\"DEMO\",\"secret\":\"DEMO\"}', '2019-09-24 23:04:05', '2019-09-24 23:04:05'),
(6, 'testimonial', '{\"author\":\"John Doe\",\"designation\":\"Designer @ Adobe\",\"quote\":\"Lorem ipsum dolor sit amet, Mattis vestibulum elit omnis metus, eu urna at facilisi lobortis elementum turpis, vel sed molestie, varius purus rhoncus, morbi vitae purus. Pellentesque magna sagittis spendisse dolores purus nec, eleifend bibendum libero, feugiat nunc urna erat adipiscing nec varius.\",\"image\":\"5e26a6bd8030a1579591357.jpg\"}', '2019-09-24 23:35:19', '2020-01-21 07:22:37'),
(7, 'social.item', '{\"title\":\"Skypee\",\"icon\":\"<i class=\\\"fab fa-skype\\\"><\\/i>\",\"url\":\"#\"}', '2019-09-24 23:53:31', '2020-02-10 14:46:53'),
(8, 'blog.post', '{\"title\":\"How to Register\",\"body\":\"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<br>\",\"image\":\"5dfdba23817f11576909347.jpg\"}', '2019-09-24 23:54:46', '2019-12-21 06:22:27'),
(9, 'blog.post', '{\"title\":\"Osamp - Multipurpose Tampleat\",\"body\":\"<p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(132, 132, 132); line-height: 1.7; font-family: Poppins, sans-serif;\\\">Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led.<\\/p><div><br><\\/div><div><div class=\\\"product-tab-wrapper mb-30\\\" style=\\\"margin-bottom: 30px; font-family: Poppins, sans-serif; font-size: 16px;\\\"><div class=\\\"tab-cont\\\" style=\\\"box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px; padding: 30px;\\\"><div class=\\\"tab-item\\\" data-tab=\\\"tab0\\\"><div class=\\\"product-item-features\\\"><span class=\\\"caption\\\" style=\\\"display: inline-block; font-size: 18px; color: rgb(69, 69, 69); line-height: 1.7; margin: 0px 0px 15px; font-weight: 600;\\\">Template Features<\\/span><ul class=\\\"template-features\\\" style=\\\"padding-left: 20px; list-style-type: disc;\\\"><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">How Random Is Random?<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">What Is \\\"Cryptographycally Secure?\\\"<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">What You\'ll Cover Here<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">PRNGs in Python<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">The Random Module<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">PRNGs for Arrays:numpy.random<\\/li><li style=\\\"font-size: 14px; color: rgb(132, 132, 132); line-height: 1.7; margin: 0px;\\\">CPRNGs in Python<\\/li><li><\\/li><\\/ul><\\/div><\\/div><\\/div><\\/div><\\/div>\",\"image\":\"5dfdba15b9e811576909333.jpg\"}', '2019-10-02 18:29:46', '2019-12-21 06:22:13'),
(11, 'social.item', '{\"title\":\"Linkedin\",\"icon\":\"<i class=\\\"fab fa-linkedin-in\\\"><\\/i>\",\"url\":\"#\"}', '2019-10-02 18:34:17', '2020-02-10 14:46:49'),
(12, 'social.item', '{\"title\":\"Youtbe\",\"icon\":\"<i class=\\\"fab fa-youtube\\\"><\\/i>\",\"url\":\"#\"}', '2019-10-02 18:37:00', '2020-02-10 14:46:45'),
(13, 'social.item', '{\"title\":\"Facebok\",\"icon\":\"<i class=\\\"fab fa-facebook\\\"><\\/i>\",\"url\":\"#\"}', '2019-10-02 18:38:36', '2020-02-10 14:46:36'),
(14, 'testimonial.title', '{\"title\":\"Testimonials\",\"subtitle\":\"Lose away off why half led have near bed. At engage simple father of period others excepts\"}', '2019-10-02 18:38:36', '2019-10-14 01:26:33'),
(15, 'testimonial', '{\"author\":\"ALEX\",\"designation\":\"CTO, TTCM\",\"quote\":\"Mattis vestibulum elit omnis metus, eu urna at facilisi lobortis elementum turpis, vel sed molestie, varius purus rhoncus, morbi vitae purus. Pellentesque magna sagittis spendisse dolores purus nec, eleifend bibendum libero, feugiat nunc urna erat adipiscing nec varius, vestibulum elit donec purus, sed dolor\",\"image\":\"5e26a6b3996711579591347.jpg\"}', '2019-10-14 01:34:14', '2020-01-21 07:22:27'),
(16, 'service.title', '{\"title\":\"Why Choose us\",\"subtitle\":\"Distinctio necessitatibus atque voluptatem nesciunt quae corporis. Omnis iste laudantium tenetur, temporibus ipsa nemo ullam.\"}', '2019-10-02 18:38:36', '2019-10-14 01:47:42'),
(17, 'service.item', '{\"title\":\"How to spend\",\"sub_title\":\"A better way to present your money using fully featured digital\",\"icon\":\"<i class=\\\"fas fa-money-bill\\\"><\\/i>\"}', '2019-10-14 01:48:45', '2019-10-14 01:48:45'),
(18, 'service.item', '{\"title\":\"Your website\",\"sub_title\":\"A better way to present your money using fully featured digital\",\"icon\":\"<i class=\\\"fas fa-helicopter\\\"><\\/i>\"}', '2019-10-14 01:49:04', '2019-10-14 01:49:04'),
(19, 'service.item', '{\"title\":\"Deposit\",\"sub_title\":\"A better way to present your money using fully featured digital\",\"icon\":\"<i class=\\\"fab fa-html5\\\"><\\/i>\"}', '2019-10-14 01:49:23', '2019-10-14 01:49:23'),
(21, 'howWork.title', '{\"title\":\"How It Work\",\"subtitle\":\"Lose away off why half led have near bed. At engage simple father of period others except\"}', '2019-10-02 18:38:36', '2019-10-14 02:23:14'),
(22, 'howWork.item', '{\"title\":\"Deposit\",\"sub_title\":\"Certainty listening no no behaviour existence assurance situation is. Because add why\",\"icon\":\"<i class=\\\"fas fa-money-check-alt\\\"><\\/i>\"}', '2019-10-14 02:21:18', '2019-10-14 02:46:31'),
(23, 'howWork.item', '{\"title\":\"Auto Trade\",\"sub_title\":\"Certainty listening no no behaviour existence assurance situation is. Because add why\",\"icon\":\"<i class=\\\"fab fa-autoprefixer\\\"><\\/i>\"}', '2019-10-14 02:21:42', '2019-10-14 02:45:10'),
(24, 'howWork.item', '{\"title\":\"Get Paid\",\"sub_title\":\"Certainty listening no no behaviour existence assurance situation is. Because add why\",\"icon\":\"<i class=\\\"fas fa-wallet\\\"><\\/i>\"}', '2019-10-14 02:21:54', '2019-10-14 02:46:12'),
(25, 'titles', '{\"mcm\":\"Market is closed now, you wont get any profit meanwhiles.\",\"bt1\":\"DEPOSIT, TRADE, EARN & ENJOY!\",\"bt2\":\"Automated Forex Trading Robot will Trade for you\",\"bt3\":\"Rem sint impedit similique, laborum laboriosam alias quis, harum animi odit odio vitae reiciendis enim. Magni amet est commodi possimus, blanditiis molestias\",\"video_url\":\"https:\\/\\/www.youtube.com\\/watch?v=OX7ZeF2cuJw\",\"video_image_url\":\"https:\\/\\/thesoftking.com\\/assets\\/images\\/we-can-develop-img.jpg\",\"pm\":\"Payment We Accept\",\"stnt\":\"Start Transection Now\",\"stns\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis vel alias cupiditate corrupti, consequuntur odit molestias nam totam incidunt? Esse quasi porro obcaecati dolore nam maxime eaque! Quo, quaerat laudantium?\",\"st\":\"Don\'t Miss Any Update\",\"sti\":\"We will never send spam\",\"ft\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dicta dignissimos enim reprehenderit minima\"}', '2019-10-14 02:21:54', '2019-10-14 02:46:12'),
(27, 'faq', '{\"title\":\"What is the main activity of Indice Investment and why did the holding create this project?\",\"body\":\"undertakes to use the personal data of Investors in accordance with the national principles of confidentiality provided in the Privacy Act, the National Privacy Principles and the Confidentiality Law.\\r\\n                            \\r\\n                                The company <strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\" <\\/strong>\"}', '2019-12-04 00:07:18', '2019-12-04 00:21:58'),
(28, 'faq', '{\"title\":\"How is cooperation with investors implemented?\",\"body\":\"<strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\" <\\/strong>undertakes to maintain complete confidentiality and protection of personal information about Investors and guarantees the security of the personal data of each User.\"}', '2019-12-04 00:10:56', '2019-12-04 00:22:43'),
(29, 'faq', '{\"title\":\"How much can an investor request for withdrawal?\",\"body\":\"<strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\" <\\/strong> has the right to use any information of the Clients in order to enforce this Agreement and\\/or to ensure the management and development of the Resource. The User has the right to personally verify compliance with all rules when <strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\" <\\/strong>  uses his personal data. The Client can make an appropriate request to the support. First of all the Company will use your personal data to inform the Investors (You) with all the news and services provided by <strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\", <\\/strong>  as well as with any other information regarding <strong> \\\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD\\\" <\\/strong> and your account.\"}', '2019-12-04 00:11:40', '2019-12-04 00:11:40'),
(30, 'faq', '{\"title\":\"How to become a Indice Investment partner?\",\"body\":\"Users\\u2019 personal information can also be used to identify and\\/or to prevent fraud, resolve any disputes, maintain business relations, optimize the work of the Resource. Your personal data will not be displayed anywhere, it will be used only by our company\'s employees for the above mentioned purposes.\"}', '2019-12-04 00:12:11', '2019-12-04 00:12:11'),
(31, 'faq', '{\"title\":\"How is cooperation with investors implemented?\",\"body\":\"You can change your personal information in the settings of your account. If you cannot change some parameters in your profile, it means that these parameters are fixed by the system for the security of your data. In that case, you should contact support.\"}', '2019-12-04 00:12:53', '2019-12-04 00:32:25'),
(32, 'rules', '{\"body\":\"It is a long established fact that a reader will be distracted by the \\r\\nread<b>able content of a page when looking at its layout. The point of \\r\\nusin<\\/b>g Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\nac<b><i><u>cident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal<\\/u><\\/i><\\/b> distribution\"}', '2019-12-04 01:13:14', '2020-02-10 14:48:33'),
(33, 'rules', '{\"body\":\"a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web !<br>\"}', '2019-12-04 01:13:40', '2020-02-10 14:49:14'),
(34, 'rules', '{\"body\":\"arch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking a<u><b>t its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'C<\\/b><\\/u>ontent here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\"}', '2019-12-04 01:16:27', '2020-02-10 14:48:58'),
(35, 'rules', '{\"body\":\"It is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\"}', '2019-12-04 01:16:57', '2020-02-10 14:48:03'),
(37, 'company_policy', '{\"title\":\"Privacy\",\"body\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\"}', '2019-12-04 01:32:52', '2019-12-05 04:05:11'),
(39, 'contact', '{\"title\":\"Contact With Us\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"email_address\":\"do-not-reply@thesoftking.com\",\"contact_details\":\"130 Hollister Church Rd, Palatka\",\"contact_number\":\"085 15800 000\",\"latitude\":\"23.8715532\",\"longitude\":\"90.3793906\",\"website_footer\":\"Revolutionary Money Making Platform!\"}', NULL, '2020-02-10 14:46:17'),
(40, 'blog.post', '{\"title\":\"INVESTMENT CORPORATE SITE\",\"body\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\",\"image\":\"5dfdba0b994621576909323.jpg\"}', '2019-12-21 06:01:55', '2020-02-10 13:18:44'),
(42, 'homecontent', '{\"title\":\"INDICE Investment\",\"featured_title\":\"Investment Plans\",\"site_information\":\"Indice Program\",\"transaction_title\":\"Latest Transaction\",\"details\":\"INDICE INTERNATIONAL INVESTMENT CORPORATE COMPANY LTD is a UK government certified International Corporate Investment Company. This company is available for all countries. We have currently run six investment plan.\",\"can_see_featured\":1,\"can_see_trx\":1,\"can_see_map\":1,\"can_see_info\":1,\"we_accept\":1,\"subscription_form\":1,\"image\":\"home01.png\",\"dragon\":\"dragon.png\",\"map\":\"map.png\"}', NULL, '2020-01-16 05:46:57'),
(43, 'testimonial', '{\"author\":\"Raihan BELA\",\"designation\":\"Coder, TSK\",\"quote\":\"Lorem ipsum dolor sit amet, Mattis vestibulum elit omnis metus, eu urna at facilisi lobortis elementum turpis, vel sed molestie, varius purus rhoncus, morbi vitae purus. Pellentesque magna sagittis spendisse dolores purus nec, eleifend bibendum libero, feugiat nunc urna erat adipiscing nec varius.\",\"image\":\"5e26a6a94fd461579591337.jpg\"}', '2020-01-21 07:14:41', '2020-01-21 07:22:17'),
(44, 'testimonial', '{\"author\":\"FAHAD FOYEEZ\",\"designation\":\"Coder, TSK\",\"quote\":\"Lorem ipsum dolor sit amet, Mattis vestibulum elit omnis metus, eu urna at facilisi lobortis elementum turpis, vel sed molestie, varius purus rhoncus, morbi vitae purus. Pellentesque magna sagittis spendisse dolores purus nec, eleifend bibendum libero, feugiat nunc urna erat adipiscing nec varius.\",\"image\":\"5e26a6968206d1579591318.jpg\"}', '2020-01-21 07:15:12', '2020-01-21 07:21:58'),
(45, 'testimonial', '{\"author\":\"RDOY RAZOAN\",\"designation\":\"Coder, TSK\",\"quote\":\"Lorem ipsum dolor sit amet, Mattis vestibulum elit omnis metus, eu urna at facilisi lobortis elementum turpis, vel sed molestie, varius purus rhoncus, morbi vitae purus. Pellentesque magna sagittis spendisse dolores purus nec, eleifend bibendum libero, feugiat nunc urna erat adipiscing nec varius.\",\"image\":\"5e26a68b4220e1579591307.jpg\"}', '2020-01-21 07:15:38', '2020-01-21 07:21:47'),
(47, 'blog.caption', '{\"title\":\"Latest News & Investment Tips\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 16:03:59'),
(48, 'testimonial.caption', '{\"title\":\"What People Says\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:56:20'),
(53, 'about.minimul', '{\"title\":\"ABOUT US\",\"details\":\"<p>Indice International Investment Corporate Company Limited is a legal investment company incorporated in the United Kingdom with headquarters in London. Any investor can easy to check the company registration details before making a decision on cooperation. For that, you should go to the CompaniesHouse website, the official registers of legal entities in the Great Britain. Then use either our company name \\u2013 \\u201cIndice International Investment Corporate Company Limited\\u201d or company registration number .<\\/p>\\r\\n                        <p>Indice International Investment Corporate Company Limited is a very experienced and promising organization in the field of trustee administration and long-haul ventures. The joining of distinctive systems and techniques add to income, gainful collaboration, and organized advancement. The most created territory of Indice International Investment Corporate Company Limited movement is multicurrency trading on the Forex market.<\\/p>\",\"commission_title\":\"15% Referral Commission\",\"commission_details\":\"Sodales integer. Eleifend elit hendrerit cras dui pretium. Vestibulum ut consectetuera hymenaeos tempor facilisi world class hyip investment.\",\"commission_link\":\"https:\\/\\/www.thesoftking.com\",\"investor_title\":\"Our Top Investor\",\"investor_details\":\"Sodales integer. Eleifend elit hendrerit cras dui pretium. Vestibulum ut consectetuera hymenaeos tempor facilisi world class hyip investment.\",\"statistics_title\":\"Our Statistics\",\"statistics_details\":\"Erat rhoncus, sem rhoncus mauris a, dolor ante viverra, a consequat pede condintum id ullam\",\"about\":\"about-minimul.png\"}', NULL, '2020-01-21 11:15:45'),
(54, 'homecontent2', '{\"title\":\"Investment Solutions\",\"plan_title\":\"Best Investment Platform\",\"plan_sub_title\":\"Sodales integer. Eleifend elit hendrerit cras dui pretium. Vestibulum ut consectetuera hymenaeos tempor facilisi world class hyip investment.\",\"invest_title\":\"Our Investment\",\"invest_sub_title\":\"Erat rhoncus, sem rhoncus mauris a, dolor ante viverra, a consequat pede condintum id ullamcorper pellentesque, viverra vestibulum nonummy.\",\"profit_title\":\"Profit Calculator\",\"profit_sub_title\":\"Sodales integer. Eleifend elit hendrerit cras dui pretium. Vestibulum ut consectetuera hymenaeos tempor facilisi world class hyip investment.\",\"trx_title\":\"Our Latest Transaction\",\"trx_sub_title\":\"Sodales integer. Eleifend elit hendrerit cras dui pretium. Vestibulum ut consectetuera hymenaeos tempor facilisi world class hyip investment.\",\"image\":\"banner01.png\",\"coin_image\":\"banner-coin.png\"}', NULL, '2020-01-22 12:38:23'),
(55, 'profit.caption', '{\"has_image\":\"1\",\"title\":\"How To Get Profit.\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"image\":\"5e27feeed243f1579679470.png\"}', NULL, '2020-02-08 15:56:17'),
(61, 'feature.caption', '{\"has_image\":\"1\",\"title\":\"Our Features\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"image\":\"5e28133aae42b1579684666.png\"}', NULL, '2020-02-08 15:56:25'),
(62, 'feature', '{\"title\":\"Protected Website\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"fas fa-globe-africa\\\"><\\/i>\"}', '2020-01-22 09:22:11', '2020-02-10 15:20:19'),
(63, 'feature', '{\"title\":\"Registered Company\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"fas fa-star-of-david\\\"><\\/i>\"}', '2020-01-22 09:23:43', '2020-02-10 15:20:05'),
(64, 'feature', '{\"title\":\"Strong Protection\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"fas fa-fingerprint\\\"><\\/i>\"}', '2020-01-22 09:23:54', '2020-02-10 15:19:45'),
(65, 'feature', '{\"title\":\"Comodo SSL\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"fas fa-lock\\\"><\\/i>\"}', '2020-01-22 09:24:04', '2020-02-10 15:19:35'),
(66, 'feature', '{\"title\":\"Quick Withdrawal\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"far fa-clock\\\"><\\/i>\"}', '2020-01-22 09:24:24', '2020-02-10 15:19:20'),
(67, 'feature', '{\"title\":\"Reliable\",\"short_details\":\"Egestas erat massa id ptesqueat eget mi et, nec dapibus i vivamus ultricies. laoreet erat eget\",\"icon\":\"<i class=\\\"fas fa-history\\\"><\\/i>\"}', '2020-01-22 09:24:54', '2020-02-09 13:00:04'),
(68, 'about.caption', '{\"title\":\"ABOUT US\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus consequuntur ducimus reprehenderit ullam aliquam nulla vitae laudantium assumenda tempore dolorem cupiditate numquam veritatis dicta eveniet hic quo rerum id vel! Totam sed porro doloremque ipsa ratione sit veniam perferendis expedita illo, magnam repellat necessitatibus quae nostrum at temporibus atque fugit placeat voluptatem cum, laboriosam, iusto fugiat. Perferendis maiores, sint.<br><br>\",\"video_link\":\"https:\\/\\/www.youtube.com\\/watch?v=GT6-H4BRyqQ\",\"about\":\"about-minimul.png\"}', NULL, '2020-02-08 15:56:22'),
(69, 'services.caption', '{\"title\":\"Reason To Choose Us\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-10 15:23:36'),
(70, 'faq.caption', '{\"title\":\"Frequently Asked Questions\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:58:56'),
(71, 'rules.caption', '{\"title\":\"Our  RULES & REGULATION\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-10 14:55:47'),
(72, 'latestTrx.caption', '{\"title\":\"Our Latest Transaction\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:56:15'),
(73, 'plan.caption', '{\"title\":\"Best Investment Plans\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:55:50'),
(74, 'weAccept.caption', '{\"title\":\"Payment We Accept\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-10 14:56:34'),
(75, 'subscribe.caption', '{\"title\":\"Subscribe Now\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 16:04:07'),
(76, 'callToAction.caption', '{\"title\":\"Join With Us\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"btn_link\":\"\\/register\",\"btn_name\":\"SIGN UP\"}', NULL, '2020-02-09 13:15:38'),
(77, 'banner.caption', '{\"title\":\"Revolutionary Money Making Platform!\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"about\":\"banner.png\"}', NULL, '2020-02-08 15:56:27'),
(78, 'calculation.caption', '{\"title\":\"Calculate Your Profit\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\",\"profit_cal\":\"profit_cal.png\"}', NULL, '2020-02-10 14:56:44'),
(80, 'team.caption', '{\"title\":\"Our Expert Team\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:57:32'),
(81, 'team', '{\"has_image\":\"1\",\"name\":\"Ronnie Area\",\"designation\":\"Project Manager\",\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"pinterest\":\"https:\\/\\/www.pinterest.com\\/\",\"image\":\"5e3ad6209d33e1580914208.jpg\"}', '2020-02-05 14:50:08', '2020-02-05 14:50:08'),
(82, 'team', '{\"has_image\":\"1\",\"name\":\"Batasha Api\",\"designation\":\"Cheif TTCM\",\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"pinterest\":\"https:\\/\\/www.pinterest.com\\/\",\"image\":\"5e3ba6ee8c90d1580967662.jpg\"}', '2020-02-06 05:41:02', '2020-02-06 05:41:02'),
(83, 'team', '{\"name\":\"Nispap Khalipa\",\"designation\":\"Designation\",\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"twitter\":\"https:\\/\\/twitter.com\\/\",\"pinterest\":\"https:\\/\\/www.pinterest.com\\/\",\"image\":\"5e3ba711925c41580967697.jpg\"}', '2020-02-06 05:41:37', '2020-02-10 14:57:45'),
(84, 'counter.caption', '{\"title\":\"Our Statistics\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:58:04'),
(92, 'investor.caption', '{\"title\":\"Our Top Investor\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:56:12'),
(93, 'statistics.caption', '{\"title\":\"Statistics Graph\",\"short_details\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, voluptatibus ing elit. Corporis, voluptatibus consequuntur ducimus!\"}', NULL, '2020-02-08 15:58:29'),
(94, 'profit', '{\"title\":\"Get Profit\",\"icon\":\"<i class=\\\"fas fa-wallet\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.\"}', '2020-02-09 10:07:38', '2020-02-10 15:25:07'),
(95, 'profit', '{\"title\":\"Invest Now\",\"icon\":\"<i class=\\\"fab fa-autoprefixer\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.\"}', '2020-02-09 10:09:04', '2020-02-10 15:33:01'),
(96, 'profit', '{\"title\":\"Choose Plan\",\"icon\":\"<i class=\\\"fas fa-align-justify\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy\"}', '2020-02-09 10:24:02', '2020-02-10 15:25:57'),
(97, 'profit', '{\"title\":\"Create Account\",\"icon\":\"<i class=\\\"fas fa-id-card\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy\"}', '2020-02-09 10:24:25', '2020-02-09 10:29:21'),
(99, 'services', '{\"title\":\"Profitable\",\"icon\":\"<i class=\\\"fas fa-wallet\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-09 11:16:34', '2020-02-10 15:22:10'),
(100, 'services', '{\"title\":\"Secure\",\"icon\":\"<i class=\\\"fas fa-lock\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-09 11:17:17', '2020-02-10 15:21:55'),
(101, 'services', '{\"title\":\"Certified\",\"icon\":\"<i class=\\\"far fa-file\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-09 11:17:33', '2020-02-10 15:21:40'),
(102, 'counter', '{\"title\":\"5000\",\"counter_digit\":\"5000\",\"subtitle\":\"Total User\",\"icon\":\"<i class=\\\"fas fa-users\\\"><\\/i>\"}', '2020-02-09 12:31:45', '2020-02-10 15:24:26'),
(103, 'counter', '{\"title\":\"20,000\",\"counter_digit\":\"20000\",\"subtitle\":\"Total Withdraw\",\"icon\":\"<i class=\\\"fas fa-university\\\"><\\/i>\"}', '2020-02-09 12:42:55', '2020-02-10 15:24:44'),
(104, 'counter', '{\"title\":\"50,000\",\"counter_digit\":\"50000\",\"subtitle\":\"Total Deposited\",\"icon\":\"<i class=\\\"fas fa-wallet\\\"><\\/i>\"}', '2020-02-09 12:43:43', '2020-02-10 15:24:36'),
(106, 'blog.post', '{\"has_image\":\"1\",\"title\":\"Hashpower for CryptoNight Users\",\"body\":\"<p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><div><p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><\\/div><div><br><\\/div>\",\"image\":\"5e41598753a7c1581341063.jpg\"}', '2020-02-10 13:24:23', '2020-02-10 13:24:23'),
(107, 'blog.post', '{\"has_image\":\"1\",\"title\":\"Hashpower for CryptoNight Users\",\"body\":\"<p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><div><p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><\\/div><div><br><\\/div>\",\"image\":\"5e41599bca3961581341083.jpg\"}', '2020-02-10 13:24:43', '2020-02-10 13:24:43'),
(108, 'blog.post', '{\"has_image\":\"1\",\"title\":\"Hashpower for CryptoNight Users\",\"body\":\"<p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><div><p style=\\\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\\\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<\\/p><\\/div><div><br><\\/div>\",\"image\":\"5e4159ab035f51581341099.jpg\"}', '2020-02-10 13:24:59', '2020-02-10 13:24:59'),
(109, 'company_policy', '{\"title\":\"TOS\",\"body\":\"It is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\\r\\n\\r\\nIt is a long established fact that a reader will be distracted by the \\r\\nreadable content of a page when looking at its layout. The point of \\r\\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \\r\\nletters, as opposed to using \'Content here, content here\', making it \\r\\nlook like readable English. Many desktop publishing packages and web \\r\\npage editors now use Lorem Ipsum as their default model text, and a \\r\\nsearch for \'lorem ipsum\' will uncover many web sites still in their \\r\\ninfancy. Various versions have evolved over the years, sometimes by \\r\\naccident, sometimes on purpose (injected humour and the like).\"}', '2020-02-10 14:47:31', '2020-02-10 14:47:31'),
(110, 'services', '{\"title\":\"Reliable\",\"icon\":\"<i class=\\\"fas fa-star-of-david\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-10 15:22:27', '2020-02-10 15:22:27'),
(111, 'services', '{\"title\":\"Crypto\",\"icon\":\"<i class=\\\"fab fa-bitcoin\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-10 15:22:55', '2020-02-10 15:22:55'),
(112, 'services', '{\"title\":\"Global\",\"icon\":\"<i class=\\\"fas fa-globe-africa\\\"><\\/i>\",\"short_details\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\"}', '2020-02-10 15:23:10', '2020-02-10 15:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `parameter_list` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supported_currencies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crypto` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: fiat currency, 1: crypto currency',
  `extra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `code`, `name`, `alias`, `image`, `status`, `parameter_list`, `supported_currencies`, `crypto`, `extra`, `description`, `created_at`, `updated_at`) VALUES
(1, 101, 'Paypal', 'Paypal', '5d985257a92911570263639.jpg', 1, '{\"paypal_email\":{\"title\":\"PayPal Email\",\"global\":true,\"value\":\"i@abir.com\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"$\"}', 0, NULL, 'PayPal allows customers to establish an account on its platform, which is connected to a user\'s credit card or checking account. PayPal is a fast, simple, and secure way to make a payment online.', '2019-09-14 13:14:22', '2019-10-06 18:24:54'),
(2, 102, 'Perfect Money', 'Perfect Money', '5d985267e2ee31570263655.jpg', 1, '{\"passphrase\":{\"title\":\"ALTERNATE PASSPHRASE\",\"global\":true,\"value\":\"6451561651551dfgdfhhth\"},\"wallet_id\":{\"title\":\"PM Wallet\",\"global\":false,\"value\":\"\"}}', '{\"USD\":\"$\",\"EUR\":\"\\u20ac\"}', 0, NULL, 'Paytm is largest mobile payments and commerce platform. It started with online mobile recharge and bill payments and has an online marketplace today. To keep things at ease, you can also use Paytm Wallet.', '2019-09-14 13:14:22', '2019-10-06 18:24:52'),
(3, 103, 'Stripe', 'Stripe', '5d98527da9ede1570263677.jpg', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_aat3tzBCCXXBkS4sxY3M8A1B\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_AU3G7doZ1sbdpJLj0NaozPBu\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, 'Stripe is a third-party payments processor built around a simple idea: make it easy for companies to do business online.', '2019-09-14 13:14:22', '2019-10-04 20:21:17'),
(4, 104, 'Skrill', 'Skrill', '5d985288936bd1570263688.jpg', 1, '{\"pay_to_email\":{\"title\":\"Skrill Email\",\"global\":true,\"value\":\"merchant@skrill.com\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"TheSoftKing\"}}', '{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"MAD\":\"MAD\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"SAR\":\"SAR\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TND\":\"TND\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\",\"COP\":\"COP\"}', 0, NULL, 'Skrill is one of the most popular electronic payment systems in the world. In addition to rapid processing of payments and low commissions, the system’s advantages include the ability to use credit cards. Making a deposit using Skrill is possible through a form in the Personal Account.', '2019-09-14 13:14:22', '2019-10-04 20:21:28'),
(5, 105, 'PayTM', 'PayTM', '5d9852b9c57da1570263737.jpg', 1, '{\"MID\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"DIY12386817555501617\"},\"merchant_key\":{\"title\":\"Merchant Key\",\"global\":true,\"value\":\"bKMfNxPPf_QdZppa\"},\"WEBSITE\":{\"title\":\"Paytm Website\",\"global\":true,\"value\":\"DIYtestingweb\"},\"INDUSTRY_TYPE_ID\":{\"title\":\"Industry Type\",\"global\":true,\"value\":\"Retail\"},\"CHANNEL_ID\":{\"title\":\"CHANNEL ID\",\"global\":true,\"value\":\"WEB\"},\"transaction_url\":{\"title\":\"Transaction URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction\"},\"transaction_status_url\":{\"title\":\"Transaction STATUS URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp\"}}', '{\"AUD\":\"AUD\",\"ARS\":\"ARS\",\"BDT\":\"BDT\",\"BRL\":\"BRL\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"GEL\":\"GEL\",\"GHS\":\"GHS\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"NGN\":\"NGN\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"UGX\":\"UGX\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"GBP\":\"GBP\",\"USD\":\"USD\",\"VND\":\"VND\",\"XOF\":\"XOF\"}', 0, NULL, 'Paytm is largest mobile payments and commerce platform. It started with online mobile recharge and bill payments and has an online marketplace today. To keep things at ease, you can also use Paytm Wallet.', '2019-09-14 13:14:22', '2019-10-04 20:22:17'),
(6, 106, 'Payeer', 'Payeer', '5d9852d61a60d1570263766.jpg', 1, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"866989763\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"7575\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"RUB\":\"RUB\"}', 0, '{\"status\":{\"title\": \"Status URL\",\"value\":\"ipn.g106\"}}', 'Payeer is one of the many e-wallets available for use on betting sites. As mentioned, the payment gateway allows deposits through various methods.', '2019-09-14 13:14:22', '2019-10-04 20:22:46'),
(7, 107, 'PayStack', 'PayStack', '5d9852ee227461570263790.jpg', 1, '{\"public_key\":{\"title\":\"Public key\",\"global\":true,\"value\":\"pk_test_3c9c87f51b13c15d99eb367ca6ebc52cc9eb1f33\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"sk_test_2a3f97a146ab5694801f993b60fcb81cd7254f12\"}}', '{\"USD\":\"USD\",\"NGN\":\"NGN\"}', 0, '{\"callback\":{\"title\": \"Callback URL\",\"value\":\"ipn.g107\"},\"webhook\":{\"title\": \"Webhook URL\",\"value\":\"ipn.g107\"}}\r\n', 'Paystack, a widely popular payment gateway for African business, facilitates to accept secure online payments. The payment gateway allows the businesses registered in Africa to accept the payments from global customers.', '2019-09-14 13:14:22', '2019-10-04 20:23:10'),
(8, 108, 'VoguePay', 'VoguePay', '5d9852faa21731570263802.jpg', 1, '{\"merchant_id\":{\"title\":\"MERCHANT ID\",\"global\":true,\"value\":\"demo\"}}', '{\"USD\":\"USD\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"ZAR\":\"ZAR\"}', 0, NULL, 'VoguePay is an online payment gateway allows site owners to receive payment for their goods and services on their website without any setup fee for both local and International payments', '2019-09-14 13:14:22', '2019-10-04 20:23:22'),
(9, 109, 'Flutterwave', 'Flutterwave', '5d9853f5ce5f61570264053.jpg', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"FLWPUBK_TEST-5d9bb05bba2c13aa6c7a1ec7d7526ba2-X\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"FLWSECK_TEST-2ac7b05b6b9fa8a423eb58241fd7bbb6-X\"},\"encryption_key\":{\"title\":\"Encryption Key\",\"global\":true,\"value\":\"FLWSECK_TEST32e13665a95a\"}}', '{\"KES\":\"KES\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"USD\":\"USD\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"UGX\":\"UGX\",\"TZS\":\"TZS\"}', 0, NULL, 'Its process credit card and local alternative payments, like mobile money and ACH, across Africa. They make it possible for global merchants to process payments like a local African company.', '2019-09-14 13:14:22', '2019-10-04 20:27:33'),
(10, 110, 'RazorPay', 'RazorPay', '5d9854adb0e101570264237.jpg', 1, '{\"key_id\":{\"title\":\"Key Id\",\"global\":true,\"value\":\"rzp_test_kiOtejPbRZU90E\"},\"key_secret\":{\"title\":\"Key Secret \",\"global\":true,\"value\":\"osRDebzEqbsE1kbyQJ4y0re7\"}}', '{\"INR\":\"INR\"}', 0, NULL, 'Razor’s payment gateway is one of the most ambitious in its sector. Razorpay allows online businesses to accept, process and disburse digital payments through several payment modes like debit cards, credit cards, net banking, UPI and prepaid digital wallets.', '2019-09-14 13:14:22', '2019-10-04 20:30:37'),
(11, 111, 'Stripe JS', 'Stripe JS', '5d9855a3c43381570264483.jpg', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_aat3tzBCCXXBkS4sxY3M8A1B\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_AU3G7doZ1sbdpJLj0NaozPBu\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, 'Stripe JS is a third-party payments processor built around a simple idea: make it easy for companies to do business online. It’s not just about processing credit cards. Stripe JS primarily targets developers with a suite of tools that make it nearly effortless to handle everything from in-app payments to marketplace transactions.', '2019-09-14 13:14:22', '2019-10-04 20:34:43'),
(12, 112, 'Instamojo', 'Instamojo', '5d9855d1485701570264529.png', 1, '{\"api_key\":{\"title\":\"API KEY\",\"global\":true,\"value\":\"test_2241633c3bc44a3de84a3b33969\"},\"auth_token\":{\"title\":\"Auth Token\",\"global\":true,\"value\":\"test_279f083f7bebefd35217feef22d\"},\"salt\":{\"title\":\"Salt\",\"global\":true,\"value\":\"19d38908eeff4f58b2ddda2c6d86ca25\"}}', '{\"INR\":\"INR\"}', 0, NULL, 'Instamojo Payment Gateway in PHP As for indian Payment Gateway. It provides many solutions like test environment and signup process also is simple.', '2019-09-14 13:14:22', '2019-10-04 20:35:29'),
(13, 501, 'Blockchain', 'Blockchain', '5d98566ba7b2b1570264683.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"8df2e5a0-3798-4b74-871d-973615b57e7b\"},\"xpub_code\":{\"title\":\"XPUB CODE\",\"global\":true,\"value\":\"xpub6CXLqfWXj1xgXe79nEQb3pv2E7TGD13pZgHceZKrQAxqXdrC2FaKuQhm5CYVGyNcHLhSdWau4eQvq3EDCyayvbKJvXa11MX9i2cHPugpt3G\"}}', '{\"BTC\":\"BTC\"}', 1, NULL, 'Blockchain has been able to give under banked groups access to money, allows people to make cross-border payments and uses smart contracts to act as a means towards faster and safer payment processing', '2019-09-14 13:14:22', '2019-10-04 20:38:03'),
(14, 502, 'Block.io', 'Block.io', '5d98580ee98ed1570265102.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":false,\"value\":\"1658-8015-2e5e-9afb\"},\"api_pin\":{\"title\":\"API PIN\",\"global\":true,\"value\":\"amarvai2020\"}}', '{\"BTC\":\"BTC\",\"LTC\":\"LTC\",\"DOGE\":\"DOGE\"}', 1, '{\"cron\":{\"title\": \"Cron URL\",\"value\":\"ipn.g502\"}}', 'This method provides exponentially higher security for your Wallets and applications than single-signature addresses. This way, you spend coins yourself, without trusting Block.io with your credentials.', '2019-09-14 13:14:22', '2020-01-20 17:38:07'),
(15, 503, 'CoinPayments', 'CoinPayments', '5d985d51661061570266449.jpg', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"7638eebaf4061b7f7cdfceb14046318bbdabf7e2f64944773d6550bd59f70274\"},\"private_key\":{\"title\":\"Private Key\",\"global\":true,\"value\":\"Cb6dee7af8Eb9E0D4123543E690dA3673294147A5Dc8e7a621B5d484a3803207\"},\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"93a1e014c4ad60a7980b4a7239673cb4\"}}', '{\"BTC\":\"Bitcoin\",\"BTC.LN\":\"Bitcoin (Lightning Network)\",\"LTC\":\"Litecoin\",\"CPS\":\"CPS Coin\",\"VLX\":\"Velas\",\"APL\":\"Apollo\",\"AYA\":\"Aryacoin\",\"BAD\":\"Badcoin\",\"BCD\":\"Bitcoin Diamond\",\"BCH\":\"Bitcoin Cash\",\"BCN\":\"Bytecoin\",\"BEAM\":\"BEAM\",\"BITB\":\"Bean Cash\",\"BLK\":\"BlackCoin\",\"BSV\":\"Bitcoin SV\",\"BTAD\":\"Bitcoin Adult\",\"BTG\":\"Bitcoin Gold\",\"BTT\":\"BitTorrent\",\"CLOAK\":\"CloakCoin\",\"CLUB\":\"ClubCoin\",\"CRW\":\"Crown\",\"CRYP\":\"CrypticCoin\",\"CRYT\":\"CryTrExCoin\",\"CURE\":\"CureCoin\",\"DASH\":\"DASH\",\"DCR\":\"Decred\",\"DEV\":\"DeviantCoin\",\"DGB\":\"DigiByte\",\"DOGE\":\"Dogecoin\",\"EBST\":\"eBoost\",\"EOS\":\"EOS\",\"ETC\":\"Ether Classic\",\"ETH\":\"Ethereum\",\"ETN\":\"Electroneum\",\"EUNO\":\"EUNO\",\"EXP\":\"EXP\",\"Expanse\":\"Expanse\",\"FLASH\":\"FLASH\",\"GAME\":\"GameCredits\",\"GLC\":\"Goldcoin\",\"GRS\":\"Groestlcoin\",\"KMD\":\"Komodo\",\"LOKI\":\"LOKI\",\"LSK\":\"LSK\",\"MAID\":\"MaidSafeCoin\",\"MUE\":\"MonetaryUnit\",\"NAV\":\"NAV Coin\",\"NEO\":\"NEO\",\"NMC\":\"Namecoin\",\"NVST\":\"NVO Token\",\"NXT\":\"NXT\",\"OMNI\":\"OMNI\",\"PINK\":\"PinkCoin\",\"PIVX\":\"PIVX\",\"POT\":\"PotCoin\",\"PPC\":\"Peercoin\",\"PROC\":\"ProCurrency\",\"PURA\":\"PURA\",\"QTUM\":\"QTUM\",\"RES\":\"Resistance\",\"RVN\":\"Ravencoin\",\"RVR\":\"RevolutionVR\",\"SBD\":\"Steem Dollars\",\"SMART\":\"SmartCash\",\"SOXAX\":\"SOXAX\",\"STEEM\":\"STEEM\",\"STRAT\":\"STRAT\",\"SYS\":\"Syscoin\",\"TPAY\":\"TokenPay\",\"TRIGGERS\":\"Triggers\",\"TRX\":\" TRON\",\"UBQ\":\"Ubiq\",\"UNIT\":\"UniversalCurrency\",\"USDT\":\"Tether USD (Omni Layer)\",\"VTC\":\"Vertcoin\",\"WAVES\":\"Waves\",\"XCP\":\"Counterparty\",\"XEM\":\"NEM\",\"XMR\":\"Monero\",\"XSN\":\"Stakenet\",\"XSR\":\"SucreCoin\",\"XVG\":\"VERGE\",\"XZC\":\"ZCoin\",\"ZEC\":\"ZCash\",\"ZEN\":\"Horizen\"}', 1, NULL, 'CoinPayments is a cloud wallet solution that offers an easy way to integrate a checkout system for numerous cryptocurrencies. Its website offers payment solutions for multiple crypto-currencies such as bitcoin and litecoin.', '2019-09-14 13:14:22', '2019-10-04 21:07:29'),
(16, 504, 'CoinPayments Fiat', 'CoinPayments Fiat', '5d985d5aef47b1570266458.jpg', 1, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"93a1e014c4ad60a7980b4a7239673cb4\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\"}', 0, NULL, 'This is the same gateway as CoinPayments but we used fiat currency as calculation currency.', '2019-09-14 13:14:22', '2019-10-04 21:07:39'),
(17, 505, 'Coingate', 'Coingate', '5d985d66805591570266470.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"Ba1VgPx6d437xLXGKCBkmwVCEw5kHzRJ6thbGo-N\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', 0, NULL, 'CoinGate Bitcoin Payment Processor is an online cryptocurrency platform that provides merchant services to businesses and individuals', '2019-09-14 13:14:22', '2019-10-04 21:07:50'),
(18, 506, 'Coinbase Commerce', 'Coinbase commerce', '5d985d7d8fcc91570266493.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"c47cd7df-d8e8-424b-a20a-\"},\"secret\":{\"title\":\"Webhook Shared Secret\",\"global\":true,\"value\":\"55871878-2c32-4f64-ab66-\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"JPY\":\"JPY\",\"GBP\":\"GBP\",\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CNY\":\"CNY\",\"SEK\":\"SEK\",\"NZD\":\"NZD\",\"MXN\":\"MXN\",\"SGD\":\"SGD\",\"HKD\":\"HKD\",\"NOK\":\"NOK\",\"KRW\":\"KRW\",\"TRY\":\"TRY\",\"RUB\":\"RUB\",\"INR\":\"INR\",\"BRL\":\"BRL\",\"ZAR\":\"ZAR\",\"AED\":\"AED\",\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"AMD\":\"AMD\",\"ANG\":\"ANG\",\"AOA\":\"AOA\",\"ARS\":\"ARS\",\"AWG\":\"AWG\",\"AZN\":\"AZN\",\"BAM\":\"BAM\",\"BBD\":\"BBD\",\"BDT\":\"BDT\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"BIF\":\"BIF\",\"BMD\":\"BMD\",\"BND\":\"BND\",\"BOB\":\"BOB\",\"BSD\":\"BSD\",\"BTN\":\"BTN\",\"BWP\":\"BWP\",\"BYN\":\"BYN\",\"BZD\":\"BZD\",\"CDF\":\"CDF\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"CVE\":\"CVE\",\"CZK\":\"CZK\",\"DJF\":\"DJF\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"DZD\":\"DZD\",\"EGP\":\"EGP\",\"ERN\":\"ERN\",\"ETB\":\"ETB\",\"FJD\":\"FJD\",\"FKP\":\"FKP\",\"GEL\":\"GEL\",\"GGP\":\"GGP\",\"GHS\":\"GHS\",\"GIP\":\"GIP\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"GTQ\":\"GTQ\",\"GYD\":\"GYD\",\"HNL\":\"HNL\",\"HRK\":\"HRK\",\"HTG\":\"HTG\",\"HUF\":\"HUF\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"IMP\":\"IMP\",\"IQD\":\"IQD\",\"IRR\":\"IRR\",\"ISK\":\"ISK\",\"JEP\":\"JEP\",\"JMD\":\"JMD\",\"JOD\":\"JOD\",\"KES\":\"KES\",\"KGS\":\"KGS\",\"KHR\":\"KHR\",\"KMF\":\"KMF\",\"KPW\":\"KPW\",\"KWD\":\"KWD\",\"KYD\":\"KYD\",\"KZT\":\"KZT\",\"LAK\":\"LAK\",\"LBP\":\"LBP\",\"LKR\":\"LKR\",\"LRD\":\"LRD\",\"LSL\":\"LSL\",\"LYD\":\"LYD\",\"MAD\":\"MAD\",\"MDL\":\"MDL\",\"MGA\":\"MGA\",\"MKD\":\"MKD\",\"MMK\":\"MMK\",\"MNT\":\"MNT\",\"MOP\":\"MOP\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MVR\":\"MVR\",\"MWK\":\"MWK\",\"MYR\":\"MYR\",\"MZN\":\"MZN\",\"NAD\":\"NAD\",\"NGN\":\"NGN\",\"NIO\":\"NIO\",\"NPR\":\"NPR\",\"OMR\":\"OMR\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PGK\":\"PGK\",\"PHP\":\"PHP\",\"PKR\":\"PKR\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"RWF\":\"RWF\",\"SAR\":\"SAR\",\"SBD\":\"SBD\",\"SCR\":\"SCR\",\"SDG\":\"SDG\",\"SHP\":\"SHP\",\"SLL\":\"SLL\",\"SOS\":\"SOS\",\"SRD\":\"SRD\",\"SSP\":\"SSP\",\"STD\":\"STD\",\"SVC\":\"SVC\",\"SYP\":\"SYP\",\"SZL\":\"SZL\",\"THB\":\"THB\",\"TJS\":\"TJS\",\"TMT\":\"TMT\",\"TND\":\"TND\",\"TOP\":\"TOP\",\"TTD\":\"TTD\",\"TWD\":\"TWD\",\"TZS\":\"TZS\",\"UAH\":\"UAH\",\"UGX\":\"UGX\",\"UYU\":\"UYU\",\"UZS\":\"UZS\",\"VEF\":\"VEF\",\"VND\":\"VND\",\"VUV\":\"VUV\",\"WST\":\"WST\",\"XAF\":\"XAF\",\"XAG\":\"XAG\",\"XAU\":\"XAU\",\"XCD\":\"XCD\",\"XDR\":\"XDR\",\"XOF\":\"XOF\",\"XPD\":\"XPD\",\"XPF\":\"XPF\",\"XPT\":\"XPT\",\"YER\":\"YER\",\"ZMW\":\"ZMW\",\"ZWL\":\"ZWL\"}\r\n\r\n', 0, '{\"endpoint\":{\"title\": \"Webhook Endpoint\",\"value\":\"ipn.g506\"}}', 'Coinbase Commerce allows merchants to accept cryptocurrency payments in Bitcoin, Bitcoin Cash, Ethereum and Litecoin.', '2019-09-14 13:14:22', '2019-10-04 21:56:10'),
(19, 1000, 'Manual Method', 'Manual Method', '5e415254befb91581339220.jpg', 1, '[]', '[]', 0, '{\"delay\":\"05-10 Minutes\",\"verify_image\":\"Screen Shot\"}', '<div style=\"text-align: center;\"><i><font size=\"5\">INSTRUCTION TO SEND THE MONEY MANUALLY&nbsp;</font></i></div><div style=\"text-align: center;\"><b><font size=\"5\">SET BT ADMIN&nbsp;</font></b></div>', '2019-12-17 05:35:57', '2020-02-10 12:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `gateway_currencies`
--

CREATE TABLE `gateway_currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_code` int(10) UNSIGNED NOT NULL,
  `min_amount` decimal(18,8) NOT NULL,
  `max_amount` decimal(18,8) NOT NULL,
  `percent_charge` decimal(8,4) NOT NULL DEFAULT 0.0000,
  `fixed_charge` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `rate` decimal(18,8) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency text',
  `cur_sym` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency symbol',
  `efrom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'email sent from',
  `etemp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'email template',
  `smsapi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'sms api',
  `bclr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Base Color',
  `sclr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Secondary Color',
  `ev` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'email verification, 0 - dont check, 1 - check',
  `en` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'email notification, 0 - dont send, 1 - send',
  `mail_config` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'email configuration',
  `sv` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'sms verication, 0 - dont check, 1 - check',
  `sn` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'sms notification, 0 - dont send, 1 - send',
  `social_login` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'social login',
  `reg` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'allow registration',
  `alert` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => none, 1 => iziToast, 2 => toaster',
  `active_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'active template folder name',
  `deposit_commission` tinyint(4) NOT NULL DEFAULT 1,
  `invest_commission` tinyint(4) NOT NULL DEFAULT 1,
  `invest_return_commission` tinyint(4) DEFAULT 1,
  `last_cron` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `sitename`, `cur_text`, `cur_sym`, `efrom`, `etemp`, `smsapi`, `bclr`, `sclr`, `ev`, `en`, `mail_config`, `sv`, `sn`, `social_login`, `reg`, `alert`, `active_template`, `deposit_commission`, `invest_commission`, `invest_return_commission`, `last_cron`, `created_at`, `updated_at`) VALUES
(1, 'RockHYIP', 'USD', '$', 'aoeasif@gmail.com', '<br style=\"font-family: Lato, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><br style=\"font-family: Lato, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><div class=\"contents\" style=\"font-family: Lato, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; max-width: 600px; margin: 0px auto; border: 2px solid rgb(0, 0, 54);\"><div class=\"header\" style=\"background-color: rgb(0, 0, 54); padding: 15px; text-align: center;\"><div class=\"logo\" style=\"width: 260px; margin: 0px auto;\"><img src=\"https://i.imgur.com/4NN55uD.png\" alt=\"THESOFTKING\" style=\"width: 260px;\">&nbsp;</div></div><div class=\"mailtext\" style=\"padding: 30px 15px; background-color: rgb(240, 248, 255); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; line-height: 26px;\">Hi {{name}},&nbsp;<br><br>{{message}}&nbsp;<br><br><br></div><div class=\"footer\" style=\"background-color: rgb(0, 0, 54); padding: 15px; text-align: center;\"><a href=\"https://thesoftking.com/\" style=\"color: rgb(255, 255, 255); background-color: rgb(46, 204, 113); padding: 10px 0px; margin: 10px; display: inline-block; width: 100px; text-transform: uppercase; font-weight: 600; border-radius: 4px;\">WEBSITE</a>&nbsp;<a href=\"https://thesoftking.com/products\" style=\"color: rgb(255, 255, 255); background-color: rgb(46, 204, 113); padding: 10px 0px; margin: 10px; display: inline-block; width: 100px; text-transform: uppercase; font-weight: 600; border-radius: 4px;\">PRODUCTS</a>&nbsp;<a href=\"https://thesoftking.com/contact\" style=\"color: rgb(255, 255, 255); background-color: rgb(46, 204, 113); padding: 10px 0px; margin: 10px; display: inline-block; width: 100px; text-transform: uppercase; font-weight: 600; border-radius: 4px;\">CONTACT</a></div><div class=\"footer\" style=\"background-color: rgb(0, 0, 54); padding: 15px; text-align: center; border-top: 1px solid rgba(255, 255, 255, 0.2);\"><span style=\"font-weight: bolder; color: rgb(255, 255, 255);\">© 2011 - 2020 THESOFTKING. All Rights Reserved.</span><p style=\"color: rgb(221, 221, 221);\">TheSoftKing\r\n is not partnered with any other company or person. We work as a team \r\nand do not have any reseller, distributor or partner!</p><div><br></div></div></div><table class=\"layout layout--no-gutter\" style=\"border-spacing: 0px; color: rgb(52, 73, 94); table-layout: fixed; margin-left: auto; margin-right: auto; overflow-wrap: break-word; word-break: break-word;\" align=\"center\"><tbody><tr></tr></tbody></table>', 'https://api.infobip.com/api/v3/sendsms/plain?user=*****&password=*****&sender=RockHYIP&SMSText={{message}}&GSM={{number}}&type=longSMS', 'f01313', '2ecc71', 0, 0, '{\"name\":\"php\"}', 0, 0, 0, 1, 1, 'minimal', 0, 0, 0, '2020-02-08 21:22:24', '2019-10-18 23:16:05', '2020-02-10 16:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `invests`
--

CREATE TABLE `invests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL DEFAULT 0.00,
  `interest` decimal(11,2) NOT NULL DEFAULT 0.00,
  `period` int(11) NOT NULL,
  `hours` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_rec_time` int(11) NOT NULL DEFAULT 0,
  `next_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_time` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `capital_status` tinyint(1) NOT NULL COMMENT '1 = YES & 0 = NO',
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_align` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: left to right text align, 1: right to left text align',
  `is_default` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not default language, 1: default language',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `icon`, `text_align`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', NULL, 0, 1, NULL, '2020-02-10 16:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `tempname`, `secs`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'home', 'templates.basic.', '[\"feature\",\"counter\",\"howToGetProfit\",\"plan\",\"calculation\",\"service\",\"transaction\",\"investor\",\"callToAction\",\"team\",\"faq\",\"testimonial\",\"weAccept\",\"blog\",\"subscribe\"]', '2020-02-10 14:30:52', '2020-02-10 15:38:11'),
(4, 'HOME', 'home', 'templates.minimal.', '[\"counter\",\"service\",\"howToGetProfit-dark\",\"plan\",\"calculation\",\"investor\",\"feature-dark\",\"transaction\",\"callToAction\",\"faq\",\"team\",\"testimonial-dark\",\"weAccept\",\"subscribe\",\"blog\"]', '2020-02-10 15:49:41', '2020-02-10 16:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_amount` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_status` int(11) NOT NULL COMMENT '1 = ''%'' / 0 =''currency''',
  `times` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `featured` tinyint(4) NOT NULL DEFAULT 0,
  `capital_back_status` int(11) NOT NULL,
  `lifetime_status` int(11) NOT NULL,
  `repeat_time` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `id` int(10) UNSIGNED NOT NULL,
  `act` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'object',
  `support` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'help section',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plugins`
--

INSERT INTO `plugins` (`id`, `act`, `name`, `description`, `image`, `script`, `shortcode`, `support`, `status`, `created_at`, `updated_at`) VALUES
(1, 'google-analytics', 'Google Analytics', 'Key location is shown bellow', 'google-analytics.png', '<script async src=\"https://www.googletagmanager.com/gtag/js?id={{app_key}}\"></script>\n                <script>\n                  window.dataLayer = window.dataLayer || [];\n                  function gtag(){dataLayer.push(arguments);}\n                  gtag(\"js\", new Date());\n                \n                  gtag(\"config\", \"{{app_key}}\");\n                </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"demo\"}}', 'ganalytics.png', 0, '2019-10-18 23:16:05', '2020-02-10 14:43:24'),
(2, 'tawk-chat', 'Tawk Chat', 'Key location is shown bellow', 'tawky_big.png', '<script>\n                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\n                        (function(){\n                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\n                        s1.async=true;\n                        s1.src=\"https://embed.tawk.to/{{app_key}}/default\";\n                        s1.charset=\"UTF-8\";\n                        s1.setAttribute(\"crossorigin\",\"*\");\n                        s0.parentNode.insertBefore(s1,s0);\n                        })();\n                    </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"demo\"}}', 'twak.png', 0, '2019-10-18 23:16:05', '2020-02-10 14:43:21'),
(3, 'google-recaptcha3', 'Google Recaptch 3', 'Key location is shown bellow', 'recaptcha3.png', '<script type=\"text/javascript\">\n\n                            var onloadCallback = function() {\n                                grecaptcha.render(\"recaptcha\", {\n                                    \"sitekey\" : \"{{sitekey}}\",\n                                    \"callback\": function(token) {\n                                        $(\"#recaptcha\").parents(\"form:first\").submit();\n                                    } \n                                });\n                            };\n                        </script>\n                        <script src=\"https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit\" async defer></script>', '{\"sitekey\":{\"title\":\"Site Key\",\"value\":\"6Ldy8bUUAAAAALn0JWsmdKYvOBuL18qExf1PczsJ\"}}', 'recaptcha.png', 0, '2019-10-18 23:16:05', '2020-02-09 16:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `percent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `level`, `percent`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '12', 1, '2019-12-21 05:51:17', '2019-12-21 05:51:17'),
(2, 2, '9', 1, '2019-12-21 05:51:17', '2019-12-21 05:51:17'),
(3, 3, '7', 1, '2019-12-21 05:51:17', '2019-12-21 05:51:17'),
(4, 4, '5', 1, '2019-12-21 05:51:17', '2019-12-21 05:51:17'),
(5, 5, '3.5', 1, '2019-12-21 05:51:17', '2019-12-21 05:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `support_message_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `supportticket_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_settings`
--

CREATE TABLE `time_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_settings`
--

INSERT INTO `time_settings` (`id`, `name`, `time`, `created_at`, `updated_at`) VALUES
(2, 'Hourly', '1', '2018-12-05 06:48:07', '2018-12-05 06:54:01'),
(3, 'Weekly', '168', '2018-12-05 06:54:31', '2020-02-10 14:35:09'),
(4, 'Daily', '24', '2018-12-05 06:54:43', '2019-12-18 13:00:47'),
(5, 'Monthly', '720', '2018-12-05 06:54:59', '2020-02-10 14:35:30'),
(6, 'Yearly', '8760', '2018-12-05 06:55:17', '2020-02-10 14:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `trxes`
--

CREATE TABLE `trxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT 0.00,
  `main_amo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` decimal(11,2) DEFAULT 0.00,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'contains full address',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: banned, 1: active',
  `ev` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: email unverified, 1: email verified',
  `sv` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: sms unverified, 1: sms verified',
  `ver_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'stores verification code',
  `ver_code_send_at` datetime DEFAULT NULL COMMENT 'verification send time',
  `ts` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: 2fa off, 1: 2fa on',
  `tv` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: 2fa unverified, 1: 2fa verified',
  `tsc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0.00000000',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(10) UNSIGNED NOT NULL,
  `method_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `wallet_id` int(11) DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(18,8) NOT NULL,
  `charge` decimal(18,8) NOT NULL,
  `delay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` decimal(18,8) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_amount` decimal(18,8) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '-1 = Default, 0 => pending, 1 => approved , 2 => reject	',
  `verify_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_methods`
--

CREATE TABLE `withdraw_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_limit` decimal(18,8) NOT NULL,
  `max_limit` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `delay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_charge` decimal(18,8) NOT NULL,
  `rate` decimal(18,8) NOT NULL,
  `percent_charge` decimal(5,2) NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_logs`
--
ALTER TABLE `commission_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_topics`
--
ALTER TABLE `contact_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_sms_templates`
--
ALTER TABLE `email_sms_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_sms_templates_act_unique` (`act`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frontends_key_index` (`data_keys`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gateways_code_unique` (`code`);

--
-- Indexes for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gateway_currencies_method_code_index` (`method_code`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invests`
--
ALTER TABLE `invests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plugins_act_unique` (`act`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_settings`
--
ALTER TABLE `time_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trxes`
--
ALTER TABLE `trxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `withdrawals_trx_unique` (`trx`);

--
-- Indexes for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commission_logs`
--
ALTER TABLE `commission_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_topics`
--
ALTER TABLE `contact_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_sms_templates`
--
ALTER TABLE `email_sms_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invests`
--
ALTER TABLE `invests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plugins`
--
ALTER TABLE `plugins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_settings`
--
ALTER TABLE `time_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trxes`
--
ALTER TABLE `trxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2025 at 07:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ithpl_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `highlight_text` text DEFAULT NULL,
  `body` text NOT NULL,
  `img_url` text DEFAULT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `highlight_text`, `body`, `img_url`, `status`, `created_at`, `update_at`, `created_by`, `updated_by`, `category_id`) VALUES
(5, 12, 'post0', 'slug0', NULL, '<p>dvsdvfdsvdffd  </p>', 'resource/blogs/1760096044_70b26d27fb220f2a8f78.png', 'draft', '2025-10-10 11:34:04', '2025-10-10 11:34:04', 12, NULL, 11),
(6, 12, 'How to Make Games More Attractive with New VR & AI Technology', '#ai', NULL, '<p>\nWe\'re now at a pivotal moment in our AI journey. Breakthroughs in \ngenerative AI are fundamentally changing how people interact with \ntechnology — and at Google, we\'ve been responsibly developing large \nlanguage models so we can safely bring them to our products. Today, \nwe\'re excited to share our early progress. Developers and businesses can\n now try new APIs and products that make it easy, safe and scalable to \nstart building with Google\'s best AI models through Google Cloud and a \nnew prototyping environment called MakerSuite. And in Google Workspace, \nwe\'re introducing new features that help people harness the power of \ngenerative AI to create, connect and collaborate.&nbsp;</p><ul><li><b>Ai</b></li><li><b>IOT</b></li><li><b>PHY</b></li><li><b><br></b></li></ul><p>\nMore than 3 billion people already benefit from AI-powered features in \nGoogle Workspace, whether it\'s using Smart Compose in Gmail or \nauto-generated summaries in Google Docs. Now, we\'re excited to take the \nnext step and bring a limited set of trusted testers a new set of \nfeatures that makes the process of writing even easier. In Gmail and \nGoogle Docs, you can simply type in a topic you\'d like to write about, \nand a draft will be instantly generated for you. So if you\'re a manager \nonboarding a new employee, Workspace saves you the time and effort \ninvolved in writing that first welcome message.\n                \n\n<br></p><br><br><br>', 'resource/blogs/1760096895_4b47d86b167b32b8966f.png', 'draft', '2025-10-10 11:48:15', '2025-10-10 11:48:48', 12, NULL, 11),
(7, 12, 'post1', 'slug0', '<p>hightlight  </p>', '<p>post content</p>', NULL, 'draft', '2025-10-10 13:29:47', '2025-10-10 14:39:24', 12, NULL, 11),
(8, 12, 'post02', 'slug02', '<p>\r\n<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries\r\n\r\n<br></p>', '<p>\n<div>\n<h2>&lt;h1 class=\"bg-success\"&gt;Why do we use it?&lt;/h1&gt;</h2>\n<p>It is a long established fact that a reader will be distracted by the\n readable content of a page when looking at its layout. The point of \nusing Lorem Ipsum is that it has a more-or-less normal distribution of \nletters, as opposed to using \'Content here, content here\', making it \nlook like readable English. Many desktop publishing packages and web \npage editors now use Lorem Ipsum as their default model text, and a \nsearch for \'lorem ipsum\' will uncover many web sites still in their \ninfancy. Various versions have evolved over the years, sometimes by \naccident, sometimes on purpose (injected humour and the like).</p>\n</div>\n\n<br></p>', 'resource/blogs/1760107444_4e2b256e983e749ca8ff.jpg', 'published', '2025-10-10 14:44:04', '2025-10-10 14:44:54', 12, NULL, 15),
(9, 12, 'test CKeditor post title', 'ckk slug', '', '', 'resource/blogs/1760108340_0f80412c806d21c84741.png', 'published', '2025-10-10 14:59:00', '2025-10-10 14:59:00', 12, NULL, 13),
(10, 12, 'ck plost 03', 'ckkslug03', '<p><strong><span style=\"background-color:#f1c40f\">Lorem Ipsum</span></strong><span style=\"background-color:#f1c40f\"> </span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500</p>\r\n', '<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n', 'resource/blogs/1760109144_42a56fadb23c6b34a032.jpg', 'published', '2025-10-10 15:12:24', '2025-10-10 15:12:24', 12, NULL, 13),
(11, 12, 'Title for post', '#slug for post', '<h1><span style=\"color:#9b59b6\"><strong><span style=\"background-color:#27ae60\">Lorem Ipsum</span></strong><span style=\"background-color:#27ae60\"> </span></span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,<img alt=\"smiley\" src=\"http://localhost:8080/resource/assets/vendor_components/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></h1>\r\n', '<div>\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n', 'resource/blogs/1760111841_86388af60f6025d9bfc5.png', 'published', '2025-10-10 15:57:21', '2025-10-10 15:57:21', 12, NULL, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_category` FOREIGN KEY (`category_id`) REFERENCES `post_category` (`id`),
  ADD CONSTRAINT `fk_posts_created` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_posts_updated` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_posts_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

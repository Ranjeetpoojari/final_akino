-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2024 at 03:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akinofoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_detail`
--

CREATE TABLE `activity_detail` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `Main_image` varchar(200) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `activity_date` date DEFAULT NULL,
  `is_active` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_detail`
--

INSERT INTO `activity_detail` (`id`, `title`, `slug`, `location`, `Main_image`, `description`, `activity_date`, `is_active`, `created_at`, `updated_at`) VALUES
(9, 'Stationery Donation Drive', 'stationery-donation-drive', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704452603IMG-20231120-WA0009.jpg', 'On November 19, 2023, Akinofoundation took a significant stride towards nurturing the educational journey of young minds. Our team was thrilled to conduct a Stationery Distribution initiative at Venue Zilla Parishad School Lendipada,\r\nBhatane Vasai, Dist. Palghar spreading smiles and fostering a love for learning.\r\nWith a commitment to enhancing educational opportunities, we provided essential stationery items, such as notebooks, pens, pencils, erasers, and more, to the eager students of Venue Zilla Parishad School. The joy and enthusiasm radiating from the students mirrored our belief that education is a powerful tool for change.\r\nAkinofoundation recognizes the pivotal role of education in shaping a brighter future. By ensuring access to basic learning tools, we aim to empower students to dream big and aspire for greatness.\r\nWe extend heartfelt gratitude to our donors and supporters whose unwavering generosity made this initiative possible. Together, we\'re sowing the seeds of knowledge and empowering the next generation.\r\nStay connected with Akinofoundation for updates on our ongoing initiatives as we continue our journey towards building a more inclusive and educated world.', '2023-11-19', 'active', '2024-01-05 05:33:23', '2024-01-05 05:33:23'),
(10, 'Orphanage Stationery Donation on Childrenday', 'orphanage-stationery-donation-on-childrenday-', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704453047akino_child_education6.jpg', 'In the spirit of compassion and a shared vision for a brighter future, Akinofoundation recently undertook a heartwarming initiative to bring joy and support to the children of [Name of Orphanage]. On [Date], our team had the privilege of conducting a Stationery Donation Drive, an effort aimed at empowering the young residents with the tools they need to explore the world of knowledge.\r\n\r\nThe smiles that lit up the faces of these remarkable children were both humbling and inspiring. Akinofoundation distributed a variety of stationery essentials, including notebooks, pens, pencils, coloring materials, and more, ensuring that each child has the resources to express themselves and engage in the joy of learning.\r\n\r\nEducation is a beacon of hope, and every child deserves the opportunity to embrace it wholeheartedly. Akinofoundation is proud to contribute to this cause by providing the means for these resilient youngsters to pursue their academic endeavors.\r\n\r\nOur sincere gratitude goes out to our compassionate donors and supporters who made this initiative possible. Your generosity is a testament to the collective commitment to making a positive impact on the lives of these children.\r\n\r\nAs we continue our mission to uplift communities, stay tuned for more updates on Akinofoundation\'s initiatives and the lasting impact we hope to create in the lives of those in need.\r\n\r\nTogether, we are fostering a future filled with possibilities and empowering these young hearts to dream big.', '2023-11-14', 'active', '2024-01-05 05:40:47', '2024-01-05 05:40:47'),
(11, 'Akinofoundation\'s Educational Empowerment: Stationery Drive for Underprivileged Schools', 'akinofoundation\'s-educational-empowerment:-stationery-drive-for-underprivileged-schools', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704453382akino_child_education5 (2).jpg', 'In our unwavering commitment to fostering accessible and quality education for all, Akinofoundation proudly presents the \"Educational Empowerment: Stationery Drive for Underprivileged Schools.\" This initiative reflects our belief that every child, regardless of their socio-economic background, deserves the tools to explore the world of learning.\r\n\r\nOur Stationery Drive specifically targets underprivileged schools, where resources may be limited. Through this endeavor, Akinofoundation aims to bridge the educational gap by providing essential stationery items such as notebooks, pens, pencils, and other supplies. By doing so, we aspire to create an inclusive learning environment, where every student has the opportunity to unleash their full potential.\r\n\r\nJoin us in making a difference in the lives of these young minds. Together, let\'s empower the next generation with the necessary resources to dream big and build a foundation for a brighter future. Stay connected with Akinofoundation as we continue to champion the cause of educational equality and empowerment.\r\n\r\nThank you to our supporters and donors who share in our vision of creating a world where education knows no bounds.', '2024-01-19', 'active', '2024-01-05 05:46:22', '2024-01-05 05:46:22'),
(12, 'Akinofoundation\'s Community Computer Labs Initiative\"', 'akinofoundation\'s-community-computer-labs-initiative\"', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704453667IMG-20231219-WA0025.jpg', 'Title: Akinofoundation\'s Community Computer Labs Initiative\r\n\r\nDescription:\r\n\r\nAt Akinofoundation, we believe that access to technology is a key enabler for educational and economic empowerment. Introducing our \"Community Computer Labs Initiative,\" a transformative project designed to bridge the digital divide and empower communities with the tools for success.\r\n\r\nIn an increasingly interconnected world, digital literacy is not just a skill but a necessity. Our initiative focuses on establishing fully-equipped computer labs in underserved communities, providing residents with the resources to enhance their technological skills and connect to a world of opportunities.\r\n\r\nAkinofoundation recognizes that these community computer labs are more than just spaces filled with machines; they are gateways to knowledge, skill development, and economic empowerment. From basic computer literacy to advanced coding and online learning, we aim to empower individuals of all ages to thrive in the digital age.\r\n\r\nJoin us on this journey of progress as we open doors to new possibilities for communities. A special thank you to our supporters and partners whose generosity fuels this initiative.\r\n\r\nStay tuned for updates on Akinofoundation\'s Community Computer Labs Initiative as we continue our mission to create lasting impacts and empower individuals through the transformative power of technology.', '2024-02-09', 'active', '2024-01-05 05:51:07', '2024-01-05 05:51:07'),
(13, 'Akinofoundation\'s Free Medical Camps', 'akinofoundation\'s-free-medical-camps', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704453850blooddonate.jpg', 'In our pursuit of promoting community well-being and fostering a healthier society, Akinofoundation is proud to introduce our \"Free Medical Camps\" initiative. Committed to ensuring access to healthcare for all, we bring medical services directly to communities in need.\r\n\r\nOur Free Medical Camps are a beacon of hope for those facing barriers to healthcare access. With a dedicated team of healthcare professionals, we provide essential medical services, consultations, check-ups, and distribute medications free of charge. The goal is to address immediate health concerns and empower individuals with the knowledge to lead healthier lives.\r\n\r\nAkinofoundation believes that good health is the foundation for a thriving community. Through these camps, we aim to reduce the burden of preventable illnesses, promote health education, and create a supportive environment for overall well-being.\r\n\r\nWe extend our heartfelt gratitude to the medical volunteers, partners, and donors whose unwavering support makes these camps possible. Together, we stand united in the belief that access to healthcare is a fundamental right that should know no barriers.\r\n\r\nStay connected with Akinofoundation as we continue to bring healing and hope to communities through our Free Medical Camps. Together, let\'s build a healthier and happier future.', '2023-12-22', 'active', '2024-01-05 05:54:10', '2024-01-05 05:54:10'),
(14, 'Akinofoundation\'s Disaster Relief Mission', '-akinofoundation\'s-disaster-relief-mission', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704531296WhatsApp Image 2023-09-13 at 18.23.52.jpg', 'In times of crisis, solidarity and swift action are essential. Akinofoundation stands at the forefront of compassion with our \"Disaster Relief Mission,\" a dedicated effort to provide immediate assistance and support to communities affected by natural disasters.\r\n\r\nNatural calamities can leave a trail of devastation in their wake, disrupting lives and communities. Akinofoundation\'s Disaster Relief Mission is a pledge to stand by those in need, offering critical aid such as emergency shelter, food supplies, clean water, medical assistance, and other essentials.\r\n\r\nOur highly trained disaster response teams work tirelessly to assess needs, coordinate logistics, and deliver aid promptly to affected areas. We believe in not only alleviating immediate suffering but also in aiding communities on the path to recovery and resilience.\r\n\r\nThis initiative is made possible through the generosity of our supporters, donors, and partners who share our commitment to making a positive impact in the face of adversity.\r\n\r\nStay connected with Akinofoundation for updates on our Disaster Relief Mission as we continue to stand united with communities in their times of greatest need. Together, we are a force for resilience and hope, rebuilding lives and communities one step at a time.', '2024-02-16', 'active', '2024-01-05 05:57:57', '2024-01-06 03:24:56'),
(15, 'Akinofoundation\'s Community Mural Project', 'akinofoundation\'s-community-mural-project', 'Venue Zilla Parishad School Lendipada, Bhatane Vasai, Dist. Palghar', '/activity/1704712778WhatsApp Image 2023-09-13 at 18.23.53.jpg', 'Coloring communities with creativity and inspiration, Akinofoundation proudly presents the \"Community Mural Project.\" More than just strokes of paint, this initiative is a celebration of art\'s transformative power to uplift spirits and foster a sense of unity.\r\n\r\nOur project brings together talented local artists and community members to co-create vibrant murals that tell stories, share messages of hope, and reflect the unique spirit of each neighborhood. Akinofoundation believes in the profound impact that public art can have on community identity and pride.\r\n\r\nThe Community Mural Project is not only about aesthetics; it\'s a catalyst for community engagement and empowerment. Through workshops and collaborative painting sessions, we aim to encourage self-expression, creativity, and a sense of ownership among residents.\r\n\r\nAkinofoundation extends its gratitude to the artists, volunteers, and community members who contribute their time and creativity to make this project a reality. Together, we are turning walls into canvases, fostering a sense of belonging, and leaving a lasting imprint of positivity on the places we call home.\r\n\r\nStay tuned for updates on Akinofoundation\'s Community Mural Project as we continue to color communities with the spirit of unity and artistic expression.', '2024-02-10', 'active', '2024-01-05 06:03:07', '2024-01-08 05:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `album_details`
--

CREATE TABLE `album_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album_details`
--

INSERT INTO `album_details` (`id`, `name`, `date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Education', '2022-10-12', 'active', '2023-09-09 08:59:28', '2023-09-30 20:12:35'),
(2, 'Women Empower', '2020-02-29', 'active', '2023-09-09 08:59:36', '2023-09-30 20:15:42'),
(3, 'Skill Development', NULL, 'active', '2023-09-09 08:59:43', '2023-09-13 20:13:17'),
(6, 'Old Age Home', '2023-09-12', 'active', '2023-09-13 19:06:50', '2023-09-30 20:19:01'),
(7, 'Health Care', NULL, 'active', '2023-09-13 19:50:30', '2023-09-30 20:10:33'),
(8, 'Disaster Management', NULL, 'active', '2023-09-13 20:16:15', '2023-09-13 20:28:05'),
(9, 'Durning Pandemic', '2020-04-28', 'active', '2023-09-13 20:31:21', '2023-09-30 20:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_detail`
--

CREATE TABLE `blogs_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `blogs` longtext DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_detail`
--

CREATE TABLE `blog_detail` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `slug` varchar(300) NOT NULL,
  `main_images` varchar(200) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `type` enum('blog') DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `blog_date` date DEFAULT NULL,
  `is_active` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_detail`
--

INSERT INTO `blog_detail` (`id`, `title`, `slug`, `main_images`, `content`, `type`, `views`, `blog_date`, `is_active`, `created_at`, `updated_at`) VALUES
(23, 'Dive into the heartwarming journey of Akinofoundation\'s stationery drive, making education accessible for underprivileged schools.', 'dive-into-the-heartwarming-journey-of-akinofoundation\'s-stationery-drive,-making-education-accessible-for-underprivileged-schools.', '/blog/1704456146g5.png', '<p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">In a world where education is the key to unlocking countless opportunities, Akinofoundation has embarked on a heartwarming journey, weaving dreams of knowledge and hope through its impactful Stationery Drive. This initiative is not just about providing pens, papers, and books; it\'s about illuminating the path to education for underprivileged schools.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Our blog invites you to dive deep into the heart of this endeavor, where every pencil distributed carries the weight of a brighter future. Through the Stationery Drive, Akinofoundation is making education accessible to schools where resources are often scarce, ensuring that no child is held back by the lack of basic learning tools.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Join us on this transformative journey as we explore the stories of schools touched by the magic of education. Through uplifting narratives and touching testimonials, discover the profound impact that a simple stationery item can have on a child\'s eagerness to learn.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">We\'ll share the challenges faced by these underprivileged schools and how Akinofoundation, hand in hand with supporters and donors, is turning obstacles into stepping stones. Together, we are creating a narrative of empowerment, one stationery kit at a time.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Get ready to be inspired by the resilience of students, the dedication of educators, and the unwavering commitment of Akinofoundation to light the path to education. Stay tuned for an emotional and empowering journey that showcases the incredible impact of a community coming together to make a difference in the lives of those who need it most.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This is not just a Stationery Drive; it\'s a beacon of hope, a catalyst for change, and a celebration of the belief that education has the power to transform lives. Welcome to the heartwarming story of Akinofoundation\'s Stationery Drive - where every pen marks a step towards a brighter future.</p><div><br></div>', 'blog', 12, '2024-01-26', 'active', '2024-01-05 06:32:26', '2024-01-05 06:32:26'),
(24, 'Explore how Akinofoundation is shaping the future with improved school infrastructure and facilities for brighter learning environments.', 'explore-how-akinofoundation-is-shaping-the-future-with-improved-school-infrastructure-and-facilities-for-brighter-learning-environments.', '/blog/1704456393image.png', '<p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Embark on a journey of transformation with Akinofoundation as we unveil the architectural marvels and visionary initiatives encompassed within our \"School Infrastructure Enhancement Project.\" In our dedication to shaping a future brimming with educational excellence, we\'re redefining the blueprint for brilliance in learning environments.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog is your exclusive pass into the heart of our project, where we\'re not just constructing buildings; we\'re building dreams. Discover how Akinofoundation is leaving an indelible mark on schools by improving infrastructure and facilities, creating spaces that inspire, nurture, and empower.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Through riveting narratives and immersive storytelling, we\'ll take you behind the scenes of the School Infrastructure Enhancement Project. Delve into the stories of schools that have undergone transformative makeovers, witnessing firsthand the impact of upgraded classrooms, modern amenities, and innovative learning spaces.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Akinofoundation believes that the physical environment plays a pivotal role in shaping the educational journey. Explore the thought process behind the project, from initial blueprints to the moment when a school\'s new chapter begins. Our commitment goes beyond bricks and mortar – it\'s about fostering an atmosphere where every student can thrive.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Join us as we shine a spotlight on the architects, builders, and visionaries who are bringing this project to life. Their dedication reflects the core values of Akinofoundation: a commitment to educational excellence and a belief in the power of enhanced infrastructure to elevate the learning experience.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog isn\'t just about buildings; it\'s a celebration of dreams taking shape, of brighter futures being built. Stay tuned as we uncover the impact of Akinofoundation\'s School Infrastructure Enhancement Project and how it\'s becoming a cornerstone for a generation that deserves the very best.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Welcome to the blueprint for brilliance – where Akinofoundation is not just constructing schools; we\'re constructing a future filled with endless possibilities.</p><div><br></div>', 'blog', 56, '2024-03-25', 'active', '2024-01-05 06:36:33', '2024-01-05 06:36:33'),
(25, 'Witness the touching story of Akinofoundation\'s support for orphanages, leaving a lasting impact on the lives of the children.', 'witness-the-touching-story-of-akinofoundation\'s-support-for-orphanages,-leaving-a-lasting-impact-on-the-lives-of-the-children.', '/blog/1704456664help.jpg', '<p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">In the tapestry of Akinofoundation\'s philanthropic endeavors, one initiative stands out as a beacon of love and compassion – our \"Orphanage Support Initiative.\" Join us as we invite you to witness the touching and heartfelt stories that unfold when Akinofoundation extends its support to orphanages, leaving an indelible impact on the lives of the children within.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog delves deep into the emotions and resilience found within these homes, where every child\'s story is a testament to the strength of the human spirit. Through narratives that touch the soul, we\'ll explore the journey of Akinofoundation as it becomes a pillar of support for these homes, bringing joy, hope, and a sense of belonging.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Discover the heartwarming tales of children finding solace, education, and love within the safe haven of these orphanages supported by Akinofoundation. From providing essential resources to creating environments conducive to growth, our initiative goes beyond charity – it\'s about building futures and mending hearts.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Meet the caregivers, volunteers, and, most importantly, the children who are the true heroes of this story. Their resilience and dreams are the driving force behind Akinofoundation\'s commitment to making a lasting impact.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Akinofoundation believes that every child deserves not only a roof over their heads but a place where they can dream, learn, and flourish. Through the Orphanage Support Initiative, we\'re striving to create homes filled with warmth, laughter, and the promise of a better tomorrow.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog is an invitation to witness the transformative power of kindness, where Akinofoundation becomes a catalyst for change in the lives of these remarkable children. Stay tuned as we unfold the pages of \"Hearts and Homes,\" showcasing the extraordinary impact that a community united by compassion can achieve.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Welcome to the heart-touching chronicle of Akinofoundation\'s Orphanage Support Initiative – where every child\'s story becomes a testament to the enduring power of love and hope.</p><div><br></div>', 'blog', 3, '2024-01-27', 'active', '2024-01-05 06:41:04', '2024-01-05 06:41:04');
INSERT INTO `blog_detail` (`id`, `title`, `slug`, `main_images`, `content`, `type`, `views`, `blog_date`, `is_active`, `created_at`, `updated_at`) VALUES
(26, 'Journey through the initiation of Akinofoundation\'s Community Computer Labs, empowering communities through technology and education.', 'journey-through-the-initiation-of-akinofoundation\'s-community-computer-labs,-empowering-communities-through-technology-and-education.', '/blog/1704457520childernsday.webp', '<p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Embark on a transformative journey with Akinofoundation as we unveil the cutting-edge chapters of progress written through our \"Community Computer Labs Initiative.\" This blog is your passport to witness the initiation of a digital revolution, where technology and education converge to empower communities in profound ways.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Step into the world of Akinofoundation\'s Community Computer Labs, where the keystrokes echo the aspirations of communities hungry for knowledge and progress. Through immersive narratives and empowering stories, we\'ll traverse the initiation phase, exploring how these labs become catalysts for change, bridging the digital divide one click at a time.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Akinofoundation firmly believes in the transformative power of technology, and the Community Computer Labs Initiative is our commitment to ensuring that no community is left behind in the digital era. Discover the intricacies of setting up these labs, from selecting locations to engaging communities in the learning process.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Meet the individuals, educators, and technology enthusiasts who are the driving force behind this initiative. Their passion for bridging the digital gap is shaping a future where every community member has the tools to navigate the digital landscape confidently.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog is not just about computers; it\'s about connectivity, empowerment, and the promise of a digitally literate future. Join us as we unfold the narrative of Akinofoundation\'s pursuit of knowledge equality, where every community, regardless of its size or location, has access to the digital resources needed to thrive.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Stay tuned for updates on the evolution of Akinofoundation\'s Community Computer Labs Initiative, as we continue to weave a story of empowerment, one byte at a time.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Welcome to the interconnected world of Akinofoundation\'s Community Computer Labs – where technology becomes the bridge that connects communities to a brighter future.</p>', 'blog', 4, '2024-03-21', 'active', '2024-01-05 06:55:20', '2024-01-05 06:55:20'),
(27, 'Immerse yourself in the vibrant world of Akinofoundation\'s Community Mural Project, where art becomes a medium for unity and expression.', 'immerse-yourself-in-the-vibrant-world-of-akinofoundation\'s-community-mural-project,-where-art-becomes-a-medium-for-unity-and-expression.', '/blog/1704457927WhatsApp Image 2023-09-13 at 17.42.53.jpg', '<p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Step into a world where every brushstroke tells a story, where walls become canvases of expression, and where unity is painted in vibrant hues. Akinofoundation proudly presents the \"Community Mural Project,\" a transformative initiative that transcends the boundaries of art, connecting communities through the universal language of creativity.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">In this blog, immerse yourself in the vibrant tapestry of Akinofoundation\'s Community Mural Project, where artists and community members come together to weave narratives of inspiration, hope, and unity. Discover the stories behind each mural, as we delve into the vision, creativity, and collaboration that breathe life into these public artworks.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Akinofoundation believes in the power of art to transcend barriers, fostering a sense of belonging and pride within communities. From the initial concept to the final stroke, witness how the Community Mural Project becomes a platform for self-expression, cultural celebration, and a celebration of diversity.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Meet the talented artists, the driving forces behind these murals, and the community members whose stories are told through art. Explore the neighborhoods transformed by color and creativity, where every mural reflects the unique spirit of the community it graces.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">This blog is not just about murals; it\'s about community engagement, empowerment, and the celebration of shared identities. Join us as we uncover the transformative impact of Akinofoundation\'s Community Mural Project, where art becomes a catalyst for unity and a medium for expressing the heart and soul of a community.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Stay tuned for updates on the ever-evolving canvas of Akinofoundation\'s Community Mural Project, where every brushstroke contributes to a masterpiece of unity and expression.</p><p style=\"border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\">Welcome to the vibrant world of community murals – where art becomes a powerful force connecting hearts and coloring lives.</p>', 'blog', 56, '2023-07-27', 'active', '2024-01-05 07:02:07', '2024-01-05 07:02:07'),
(28, 'User Step into the arena of Akinofoundation\'s sports development program, fostering unity and leadership among the youth through sports', 'user-step-into-the-arena-of-akinofoundation\'s-sports-development-program,-fostering-unity-and-leadership-among-the-youth-through-sports', '/blog/1704459028WhatsApp Image 2023-09-13 at 17.42.53.jpg', '<p style=\"font-weight: normal; border: 0px solid rgb(217, 217, 227); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(55, 65, 81); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space-collapse: preserve;\"></p><ol style=\"\"><li style=\"\">Lace up your metaphorical cleats and step onto the playing field of <b>Akinofoundation\'s</b> \"Youth Sports Development Program.\" In this blog, we invite you to witness the transformative power of sports as a catalyst for unity, leadership, and personal growth among the youth.</li><li style=\"font-weight: normal;\">As we delve into the heart of this program, discover how Akinofoundation is not just coaching games but nurturing essential life skills. From fostering teamwork on the field to instilling discipline and resilience, our sports development initiative goes beyond the scorecards, creating leaders for tomorrow.</li><li style=\"font-weight: normal;\">Meet the young athletes whose stories embody the spirit of determination and camaraderie cultivated through Akinofoundation\'s sports program. We\'ll explore how these experiences on the field become life lessons, shaping character and providing a platform for youth to discover their potential.</li><li style=\"font-weight: normal;\">Akinofoundation believes that sports have the power to break down barriers and unite communities. Through this program, we aim to empower the youth, fostering a sense of belonging and leadership that extends beyond the sports arena.</li><li style=\"font-weight: normal;\">This blog is more than a score recap; it\'s a celebration of the victories, big and small, that happen both on and off the field. Stay tuned for inspiring stories, interviews with coaches and players, and updates on the impact of Akinofoundation\'s Youth Sports Development Program.</li><li style=\"font-weight: normal;\">Welcome to the arena where sports aren\'t just a game but a transformative journey towards unity, leadership, and a brighter future for the youth.</li></ol><p style=\"font-weight: normal;\"></p><div style=\"font-weight: normal;\"><br></div>', 'blog', 12, '2024-04-18', 'active', '2024-01-05 07:20:28', '2024-01-10 00:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_details`
--

CREATE TABLE `campaign_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `fund_amount` varchar(10) DEFAULT NULL,
  `campiagn_type` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `is_direct` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign_details`
--

INSERT INTO `campaign_details` (`id`, `title`, `short_description`, `description`, `main_image`, `meta_keyword`, `meta_description`, `fund_amount`, `campiagn_type`, `status`, `is_active`, `is_direct`, `created_at`, `updated_at`) VALUES
(3, 'Periods with Pride: Empowering Menstrual Health', 'Join Akino\'s \'Periods with Pride\' campaign, dedicated to empowering menstrual health. We\'re breaking taboos, educating, and providing resources to ensure everyone experiences periods with confidence and dignity', 'Join the Akino Foundation\'s \'Periods with Pride\' campaign, a dedicated effort to empower menstrual health. We\'re on a mission to shatter taboos, educate, and provide essential resources, all to ensure that everyone experiences periods with confidence and dignity. Together with Akino Foundation, we\'re creating a world where menstruation is celebrated and supported.', '/campaign/1694606028akino_doctor1.jpg', NULL, 'Join Akino\'s \'Periods with Pride\' campaign, dedicated to empowering menstrual health. We\'re breaking taboos, educating, and providing resources to ensure everyone experiences periods with confidence and dignity', '50000', 1, 'created', 'active', '0', '2023-09-13 18:53:48', '2023-09-14 17:55:22'),
(4, 'Restoring Hope: Santosh Tamba Paralysis Recovery Fund', 'Join the \'Restoring Hope: Santosh Tamba Paralysis Recovery Fund\' and \'Akino Foundation\' to empower Santosh and make a positive impact in the lives of those in need.', 'Mr. Santosh Laxman Tambe resides with his son and wife, as he faces mobility challenges, relying on assistance for daily tasks like getting out of bed, walking, and using the restroom. His son is his constant companion, ensuring his well-being. Due to financial constraints, covering medical expenses has become difficult. We are extending our support to help with their medical and daily living costs.', '/campaign/1694687731IMG-20230913-WA0070.jpg', NULL, 'Join the \'Restoring Hope: Santosh Tamba Paralysis Recovery Fund\' and \'Akino Foundation\' to empower Santosh and make a positive impact in the lives of those in need.', '48000', 2, 'created', 'inactive', '1', '2023-09-14 17:35:31', '2023-09-14 20:30:22'),
(5, 'Restoring Hope: Santosh Tamba Paralysis Recovery Fund', 'Join the \'Restoring Hope: Santosh Tamba Paralysis Recovery Fund\' and \'Akino Foundation\' to empower Santosh and make a positive impact in the lives of those in need.', 'Mr. Santosh Laxman Tambe resides with his son and wife, as he faces mobility challenges, relying on assistance for daily tasks like getting out of bed, walking, and using the restroom. His son is his constant companion, ensuring his well-being. Due to financial constraints, covering medical expenses has become difficult. We are extending our support to help with their medical and daily living costs.', '/campaign/1694696113bLVAO0LojicO_96vIpOBnuIchW6seKBF_r5cKiZI2TY=_plaintext_638302066066183530.jpg', NULL, 'Join the \'Restoring Hope: Santosh Tamba Paralysis Recovery Fund\' and \'Akino Foundation\' to empower Santosh and make a positive impact in the lives of those in need.', '48000', 2, 'created', 'active', '0', '2023-09-14 17:37:49', '2023-09-14 20:07:23'),
(6, 'Child Education', 'Supporting children\'s education paves the way for brighter futures. Akinofoundation is dedicated to empowering young minds by providing them with the essential tools and opportunities they need to succeed in their educational journey and beyond.', 'At Akinofoundation, we believe that education is the key to unlocking a child\'s potential and breaking the cycle of poverty. Our commitment to child education goes beyond classrooms; it\'s about fostering a love for learning and providing essential resources. By supporting us, you\'re investing in young minds, equipping them with knowledge and skills that will shape their futures. Join us in our mission to empower the next generation, ensuring every child has access to quality education. Together, we can create a world where all children have the opportunity to thrive and reach their dreams.', '/campaign/1694696471akino_child_education3.png', NULL, 'Supporting children\'s education paves the way for brighter futures. Akinofoundation is dedicated to empowering young minds by providing them with the essential tools and opportunities they need to succeed in their educational journey and beyond.', '75000', 3, 'created', 'active', '1', '2023-09-14 20:01:11', '2023-10-10 00:38:35'),
(7, 'Health Care', 'Akinofoundation is on a mission to enhance healthcare access in underserved communities, striving to make quality healthcare a universal reality. We invite you to join us in this noble cause, as your support helps bring improved healthcare within reach for all in need.', 'At Akinofoundation, we believe that everyone deserves access to quality healthcare, regardless of their socio-economic background. We are on a mission to transform lives by bridging the gap in healthcare services for underserved communities. Through our dedicated team of healthcare professionals and state-of-the-art facilities, we provide essential medical care, preventive services, and health education to those in need.\r\n\r\nYour support can make a significant difference. By donating to Akinofoundation, you are directly contributing to better health outcomes for individuals and families who would otherwise go without. Join us in our commitment to create a healthier, more equitable world. Together, we can bring hope and healing to those who need it most.', '/campaign/1696860208akino_health_img1.jpg', NULL, 'Akinofoundation is on a mission to enhance healthcare access in underserved communities, striving to make quality healthcare a universal reality. We invite you to join us in this noble cause, as your support helps bring improved healthcare within reach for all in need.', '48000', 2, 'created', 'active', '1', '2023-09-14 20:32:54', '2023-10-09 21:04:58'),
(8, 'Women Empowerment', 'At Akinofoundation, we believe that when you empower women, you empower entire communities and create a ripple effect of positive change. Our mission is simple yet profound: to uplift and empower women from all walks of life. We invite you to be a part of this transformative journey by making a donation today.', 'In our relentless pursuit of women\'s empowerment, Akinofoundation is committed to not only providing immediate support but also fostering long-lasting change. We believe that by investing in the potential of women today, we are shaping a brighter, more equitable tomorrow for generations to come. Through education, skill-building, and advocacy, we strive to break down the barriers that have held women back for far too long. Join us in this vital mission, as we work tirelessly to create a world where every woman has the opportunity to thrive and lead, and where the strength of empowered women serves as a beacon of hope for communities worldwide. Your donation is not just a financial contribution; it\'s an investment in a more equitable and harmonious future.', '/campaign/1696859625IMG-20230914-WA0013-removebg-preview.png', NULL, 'At Akinofoundation, we believe that when you empower women, you empower entire communities and create a ripple effect of positive change. Our mission is simple yet profound: to uplift and empower women from all walks of life. We invite you to be a part of this transformative journey by making a donation today.', '74000', 1, 'created', 'active', '1', '2023-09-14 20:34:14', '2023-10-09 20:53:45'),
(9, 'Disaster Management', 'Akinofoundation\'s rapid response to global disasters delivers vital relief and recovery efforts. Your support empowers us to extend a helping hand to affected communities, making a lasting impact on their journey towards recovery and resilience', 'At Akinofoundation, we understand the urgent need for disaster management and relief when unforeseen crises strike. We are dedicated to responding rapidly to disasters worldwide, offering immediate relief, medical aid, shelter, and support to affected communities. Our disaster management teams are well-prepared and equipped to mitigate the impact of natural or humanitarian emergencies. With your support, we can provide timely assistance to those in distress, helping them rebuild their lives and communities. Join us in our mission to be a beacon of hope during times of crisis, and together, we can make a meaningful difference in the face of adversity.', '/campaign/1696873923IMG-20230914-WA0011.jpg', NULL, 'Akinofoundation\'s rapid response to global disasters delivers vital relief and recovery efforts. Your support empowers us to extend a helping hand to affected communities, making a lasting impact on their journey towards recovery and resilience', '4000', 5, 'created', 'active', '1', '2023-10-10 00:52:03', '2023-10-10 00:52:03'),
(10, 'Disaster Management', 'Akinofoundation\'s rapid response to global disasters delivers vital relief and recovery efforts. Your support empowers us to extend a helping hand to affected communities, making a lasting impact on their journey towards recovery and resilience', 'At Akinofoundation, we understand the urgent need for disaster management and relief when unforeseen crises strike. We are dedicated to responding rapidly to disasters worldwide, offering immediate relief, medical aid, shelter, and support to affected communities. Our disaster management teams are well-prepared and equipped to mitigate the impact of natural or humanitarian emergencies. With your support, we can provide timely assistance to those in distress, helping them rebuild their lives and communities. Join us in our mission to be a beacon of hope during times of crisis, and together, we can make a meaningful difference in the face of adversity.', '/campaign/1696873940IMG-20230914-WA0011.jpg', NULL, 'Akinofoundation\'s rapid response to global disasters delivers vital relief and recovery efforts. Your support empowers us to extend a helping hand to affected communities, making a lasting impact on their journey towards recovery and resilience', '4000', 5, 'created', 'inactive', '0', '2023-10-10 00:52:20', '2023-10-10 01:03:40'),
(11, 'SKill  Development', 'Akinofoundation\'s unwavering commitment to skill development programs empowers individuals with essential skills, enhancing their career prospects and fostering economic independence. Your contribution plays a pivotal role in shaping brighter, self-reliant futures.', 'Akinofoundation is dedicated to fostering self-reliance and economic empowerment through skill development initiatives. We firmly believe that acquiring new skills opens doors to better job opportunities and a more prosperous future. With your support, we offer comprehensive skill development programs, training, and resources to individuals from diverse backgrounds. These programs not only enhance their employability but also boost their confidence and self-sufficiency. By investing in skill development, we enable individuals to take control of their lives, break free from the cycle of poverty, and contribute to the growth of their communities and economies. Join us in this transformative journey toward a brighter, more skilled workforce.', '/campaign/1696874405skill5.jpg', NULL, 'Akinofoundation\'s unwavering commitment to skill development programs empowers individuals with essential skills, enhancing their career prospects and fostering economic independence. Your contribution plays a pivotal role in shaping brighter, self-reliant futures.', '50000', 6, 'created', 'inactive', '0', '2023-10-10 01:00:05', '2023-10-10 01:02:54'),
(12, 'SKill  Development', 'Akinofoundation\'s unwavering commitment to skill development programs empowers individuals with essential skills, enhancing their career prospects and fostering economic independence. Your contribution plays a pivotal role in shaping brighter, self-reliant futures.', 'Akinofoundation is dedicated to fostering self-reliance and economic empowerment through skill development initiatives. We firmly believe that acquiring new skills opens doors to better job opportunities and a more prosperous future. With your support, we offer comprehensive skill development programs, training, and resources to individuals from diverse backgrounds. These programs not only enhance their employability but also boost their confidence and self-sufficiency. By investing in skill development, we enable individuals to take control of their lives, break free from the cycle of poverty, and contribute to the growth of their communities and economies. Join us in this transformative journey toward a brighter, more skilled workforce.', '/campaign/1696874498skill5.jpg', NULL, 'Akinofoundation\'s unwavering commitment to skill development programs empowers individuals with essential skills, enhancing their career prospects and fostering economic independence. Your contribution plays a pivotal role in shaping brighter, self-reliant futures.', '50000', 6, 'created', 'active', '1', '2023-10-10 01:01:38', '2023-10-10 01:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `banner`, `icon`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Akino', NULL, NULL, NULL, '2023-09-09 14:17:55', '2023-09-09 14:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `location`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'JarredGob', 'JarredGob', '83898163328', 'Tunisia', 'Mfheidjwhfuh HUJUHGUJH djwidjwfhuefejjifeh NUHUUUhufhedjefheuhufheudhuwfhu', NULL, '2023-10-19 06:39:22', '2023-10-19 06:39:22'),
(2, 'MisUnfaT', 'MisUnfaT', '83736586435', 'United States', 'Secret SEO service invitation - Revolutionize Your SEO with Duckctr.com', NULL, '2023-10-21 00:04:50', '2023-10-21 00:04:50'),
(3, 'OIJdKJvJuOs', 'OIJdKJvJuOs', '1', 'olcWOcybROmRdAOIC', 'olcWOcybROmRdAOIC', NULL, '2023-10-22 11:15:12', '2023-10-22 11:15:12'),
(4, 'DHVnBIrbnFTNh', 'DHVnBIrbnFTNh', '1', 'vTMNDjnjVIcTwuAzeCTFMqsrrf', 'vTMNDjnjVIcTwuAzeCTFMqsrrf', NULL, '2023-10-25 07:21:21', '2023-10-25 07:21:21'),
(5, 'Richardfraph', 'Richardfraph', '83742495762', 'United States', 'How to make money from email newsletters from $30,000 per month', NULL, '2023-10-30 22:12:12', '2023-10-30 22:12:12'),
(6, 'Richardfraph', 'Richardfraph', '87652895453', 'United States', 'How to make money from email newsletters from $30,000 per month', NULL, '2023-10-30 22:12:15', '2023-10-30 22:12:15'),
(7, 'Richardfraph', 'Richardfraph', '86537691287', 'United States', 'How to make money from email newsletters from $30,000 per month', NULL, '2023-10-30 22:12:18', '2023-10-30 22:12:18'),
(8, 'Richardfraph', 'Richardfraph', '88717921896', 'United States', 'How to make money from email newsletters from $30,000 per month', NULL, '2023-10-30 22:12:21', '2023-10-30 22:12:21'),
(9, 'Richardfraph', 'Richardfraph', '84888637216', 'United States', 'How to make money from email newsletters from $30,000 per month', NULL, '2023-10-30 22:12:23', '2023-10-30 22:12:23'),
(10, 'AWEFNfsFBdjj', 'AWEFNfsFBdjj', '1', 'LbsqjESMzYehXDTvpfBN', 'LbsqjESMzYehXDTvpfBN', NULL, '2023-10-31 13:14:30', '2023-10-31 13:14:30'),
(11, 'MisUnfaT', 'MisUnfaT', '88837411769', 'United States', 'Secret SEO service invitation - Revolutionize Your SEO Strategy for 2023', NULL, '2023-11-05 02:20:57', '2023-11-05 02:20:57'),
(12, 'MisUnfaT', 'MisUnfaT', '83235696176', 'United States', 'Rank your website on Google and Bing in few hours with DuckCTR.com', NULL, '2023-11-08 17:17:58', '2023-11-08 17:17:58'),
(13, 'LJioaMJpvNNknrskV', 'LJioaMJpvNNknrskV', '1', 'kkoMOIHbmjWBldXNP', 'kkoMOIHbmjWBldXNP', NULL, '2023-11-10 04:52:52', '2023-11-10 04:52:52'),
(14, 'KendallHella', 'KendallHella', '85497541182', 'United Kingdom', 'Trailblazing Profits: 17 Cryptocurrencies That Will Surge by 90,000%', NULL, '2023-11-10 19:14:40', '2023-11-10 19:14:40'),
(15, 'KendallHella', 'KendallHella', '88544688816', 'United Kingdom', 'Trailblazing Profits: 17 Cryptocurrencies That Will Surge by 90,000%', NULL, '2023-11-10 19:14:42', '2023-11-10 19:14:42'),
(16, 'KendallHella', 'KendallHella', '84927785215', 'United Kingdom', 'Trailblazing Profits: 17 Cryptocurrencies That Will Surge by 90,000%', NULL, '2023-11-10 19:14:43', '2023-11-10 19:14:43'),
(17, 'KendallHella', 'KendallHella', '81742479484', 'United Kingdom', 'Trailblazing Profits: 17 Cryptocurrencies That Will Surge by 90,000%', NULL, '2023-11-10 19:14:45', '2023-11-10 19:14:45'),
(18, 'KendallHella', 'KendallHella', '89985145577', 'United Kingdom', 'Trailblazing Profits: 17 Cryptocurrencies That Will Surge by 90,000%', NULL, '2023-11-10 19:14:47', '2023-11-10 19:14:47'),
(19, 'qXjIAmvHLjzOL', 'qXjIAmvHLjzOL', '1', 'aDejupCjtJPnCocyXlPWwjdpCPDA', 'aDejupCjtJPnCocyXlPWwjdpCPDA', NULL, '2023-11-15 01:34:45', '2023-11-15 01:34:45'),
(20, 'Anfisa', 'Anfisa', '8004213643847', 'Russia', 'Re: You asked to send a link', NULL, '2023-11-21 03:33:54', '2023-11-21 03:33:54'),
(21, 'BellelilyMany', 'BellelilyMany', '800421364337', 'Russia', 'Black Friday on Bellelily Many: discounts up to 80%', NULL, '2023-11-24 04:59:09', '2023-11-24 04:59:09'),
(22, 'Zaniyah', 'Zaniyah', '1', 'Kehlani Ventura', 'Kehlani Ventura', NULL, '2023-11-25 11:58:11', '2023-11-25 11:58:11'),
(23, 'MikhailRS', 'MikhailRS', '89722135517', 'Russia', 'Увеличу посещаемость и доходность сайта', NULL, '2023-11-26 11:14:32', '2023-11-26 11:14:32'),
(24, 'Aleggatorseo', 'Aleggatorseo', '80042136437', 'Russia', 'Нужен прогон сайта?', NULL, '2023-11-26 14:32:35', '2023-11-26 14:32:35'),
(25, 'UKLqTWHTsfpTz', 'UKLqTWHTsfpTz', '1', 'yycTQcHLPPoCULoaoUTacSqBaVuz', 'yycTQcHLPPoCULoaoUTacSqBaVuz', NULL, '2023-11-28 04:05:37', '2023-11-28 04:05:37'),
(26, 'BrendonPed', 'BrendonPed', '84155769154', 'United Kingdom', 'LinkBoost Pro: Where Backlinks Meet Digital Success', NULL, '2023-11-28 14:35:39', '2023-11-28 14:35:39'),
(27, 'BrendonPed', 'BrendonPed', '86438977549', 'United Kingdom', 'LinkBoost Pro: Where Backlinks Meet Digital Success', NULL, '2023-11-28 14:35:41', '2023-11-28 14:35:41'),
(28, 'BrendonPed', 'BrendonPed', '82564813283', 'United Kingdom', 'LinkBoost Pro: Where Backlinks Meet Digital Success', NULL, '2023-11-28 14:35:43', '2023-11-28 14:35:43'),
(29, 'BrendonPed', 'BrendonPed', '81738139357', 'United Kingdom', 'LinkBoost Pro: Where Backlinks Meet Digital Success', NULL, '2023-11-28 14:35:44', '2023-11-28 14:35:44'),
(30, 'BrendonPed', 'BrendonPed', '84896365199', 'United Kingdom', 'LinkBoost Pro: Where Backlinks Meet Digital Success', NULL, '2023-11-28 14:35:46', '2023-11-28 14:35:46'),
(31, 'Tejaswini Patil', 'Tejaswini Patil', '+919146695144', 'Navi Mumbai', 'Can I help your Akino through ManPower', NULL, '2023-11-28 19:14:49', '2023-11-28 19:14:49'),
(32, 'Mamta sahani', 'Mamta sahani', '9653296824', 'navi mumbai', NULL, NULL, '2023-11-29 17:13:10', '2023-11-29 17:13:10'),
(33, 'Lucienne Kanode', 'Lucienne Kanode', '0370 4793050', 'a point or extent in space', 'rank in top 10 !', NULL, '2023-11-30 03:01:24', '2023-11-30 03:01:24'),
(34, 'Charlesecoca', 'Charlesecoca', '82237844262', 'South Africa', 'Defi-don', NULL, '2023-11-30 06:06:05', '2023-11-30 06:06:05'),
(35, 'Charlesecoca', 'Charlesecoca', '89894444464', 'South Africa', 'Defi-don', NULL, '2023-11-30 06:06:40', '2023-11-30 06:06:40'),
(36, 'Charlesecoca', 'Charlesecoca', '84549832323', 'South Africa', 'Defi-don', NULL, '2023-11-30 06:07:02', '2023-11-30 06:07:02'),
(37, 'Charlesecoca', 'Charlesecoca', '82553255941', 'South Africa', 'Defi-don', NULL, '2023-11-30 06:07:22', '2023-11-30 06:07:22'),
(38, 'Charlesecoca', 'Charlesecoca', '87169532229', 'South Africa', 'Defi-don', NULL, '2023-11-30 06:07:35', '2023-11-30 06:07:35'),
(39, 'Larcombe', 'Larcombe', '0311 8376154', 'a point or extent in space', 'Hey I noticed something', NULL, '2023-12-02 10:36:48', '2023-12-02 10:36:48'),
(40, 'leAQLqMjrHt', 'leAQLqMjrHt', '1', 'VMeMjOrSMIlqslQCK', 'VMeMjOrSMIlqslQCK', NULL, '2023-12-05 21:51:48', '2023-12-05 21:51:48'),
(41, 'RonaldDus', 'RonaldDus', '84696352124', 'Uganda', 'IT\'S ALL JUST FOR YOU...', NULL, '2023-12-06 13:02:44', '2023-12-06 13:02:44'),
(42, 'Kolton', 'Kolton', '1', 'Damon Farmer', 'Damon Farmer', NULL, '2023-12-06 13:24:23', '2023-12-06 13:24:23'),
(43, 'Dr. Mark Wilba', 'Dr. Mark Wilba', '(71) 9306-5425', 'a point or extent in space', 'New Leads', NULL, '2023-12-06 15:13:09', '2023-12-06 15:13:09'),
(44, 'VirgilReism', 'VirgilReism', '88383546939', 'Marshall Islands', 'Анальный секс', NULL, '2023-12-06 18:35:57', '2023-12-06 18:35:57'),
(45, 'Dr. Mark Wilba', 'Dr. Mark Wilba', '06-92559862', 'a point or extent in space', 'New Leads', NULL, '2023-12-07 05:11:43', '2023-12-07 05:11:43'),
(46, 'Sayyed noor e iram wajid ali', 'Sayyed noor e iram wajid ali', '88287828029', 'Hari nagar tiger bengali chowal opposite meghwadi police chowki', 'I have a muslim and so dont say people to my real name and identity', NULL, '2023-12-12 03:38:15', '2023-12-12 03:38:15'),
(47, 'Vanessa Mixon', 'Vanessa Mixon', '217-388-1942', 'a point or extent in space', 'rank in google top 10  !', NULL, '2023-12-12 13:07:00', '2023-12-12 13:07:00'),
(48, 'Giles Nicholas', 'Giles Nicholas', '305-445-1274', 'a point or extent in space', 'Help', NULL, '2023-12-12 20:15:28', '2023-12-12 20:15:28'),
(49, 'Michaelreeby', 'Michaelreeby', '87619991549', 'South Africa', 'Automate Your Destiny: $3 Per Minute Autopilot Income – Your Future Starts Now', NULL, '2023-12-15 17:14:15', '2023-12-15 17:14:15'),
(50, 'Michaelreeby', 'Michaelreeby', '82699234133', 'South Africa', 'Automate Your Destiny: $3 Per Minute Autopilot Income – Your Future Starts Now', NULL, '2023-12-15 17:14:17', '2023-12-15 17:14:17'),
(51, 'Michaelreeby', 'Michaelreeby', '86473576333', 'South Africa', 'Automate Your Destiny: $3 Per Minute Autopilot Income – Your Future Starts Now', NULL, '2023-12-15 17:14:19', '2023-12-15 17:14:19'),
(52, 'Michaelreeby', 'Michaelreeby', '81286949171', 'South Africa', 'Automate Your Destiny: $3 Per Minute Autopilot Income – Your Future Starts Now', NULL, '2023-12-15 17:14:21', '2023-12-15 17:14:21'),
(53, 'Michaelreeby', 'Michaelreeby', '86563276794', 'South Africa', 'Automate Your Destiny: $3 Per Minute Autopilot Income – Your Future Starts Now', NULL, '2023-12-15 17:14:22', '2023-12-15 17:14:22'),
(54, 'BitcoinSystem', 'BitcoinSystem', '8008943572529', 'Russia', '€1.000 in 60 minuten', NULL, '2023-12-15 18:03:25', '2023-12-15 18:03:25'),
(55, 'Aleggatorseo', 'Aleggatorseo', '80042136437', 'Russia', 'Нужен прогон сайта?', NULL, '2023-12-16 11:32:55', '2023-12-16 11:32:55'),
(56, 'Eula Kitchens', 'Eula Kitchens', '(11) 6935-2258', 'a point or extent in space', 'rank in google top 10 !!!', NULL, '2023-12-16 12:04:56', '2023-12-16 12:04:56'),
(57, 'Dubaistars', 'Dubaistars', '80963986040', 'Russia', 'Welcome to Dubai stars – your premier escort companions', NULL, '2023-12-17 21:27:37', '2023-12-17 21:27:37'),
(58, 'epQYCkWOwpVkPssH', 'epQYCkWOwpVkPssH', '1', 'sODAXkHdKdVjumxo', 'sODAXkHdKdVjumxo', NULL, '2023-12-19 06:13:14', '2023-12-19 06:13:14'),
(59, 'Dulce', 'Dulce', '1', 'Athena Quintero', 'Athena Quintero', NULL, '2023-12-19 22:48:14', '2023-12-19 22:48:14'),
(60, 'CityTravel', 'CityTravel', '897543582768', 'Russia', 'CityTravel - chip flights', NULL, '2023-12-22 15:52:05', '2023-12-22 15:52:05'),
(61, 'SupportBtcPebyte', 'SupportBtcPebyte', '83835384837', 'Burkina Faso', 'Automated Cloud Mining: 1 Year Later, Your BTC Accumulated, Devices Connected, Inactive Presence', NULL, '2023-12-22 16:29:56', '2023-12-22 16:29:56'),
(62, 'SupportBtcPebyte', 'SupportBtcPebyte', '83124612919', 'Burkina Faso', 'Automated Cloud Mining: 1 Year Later, Your BTC Accumulated, Devices Connected, Inactive Presence', NULL, '2023-12-22 16:29:58', '2023-12-22 16:29:58'),
(63, 'SupportBtcPebyte', 'SupportBtcPebyte', '82981686923', 'Burkina Faso', 'Automated Cloud Mining: 1 Year Later, Your BTC Accumulated, Devices Connected, Inactive Presence', NULL, '2023-12-22 16:30:00', '2023-12-22 16:30:00'),
(64, 'SupportBtcPebyte', 'SupportBtcPebyte', '89497355963', 'Burkina Faso', 'Automated Cloud Mining: 1 Year Later, Your BTC Accumulated, Devices Connected, Inactive Presence', NULL, '2023-12-22 16:30:01', '2023-12-22 16:30:01'),
(65, 'SupportBtcPebyte', 'SupportBtcPebyte', '88687297576', 'Burkina Faso', 'Automated Cloud Mining: 1 Year Later, Your BTC Accumulated, Devices Connected, Inactive Presence', NULL, '2023-12-22 16:30:03', '2023-12-22 16:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `document_details`
--

CREATE TABLE `document_details` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_details`
--

INSERT INTO `document_details` (`id`, `campaign_id`, `name`, `attachment`, `is_active`, `created_at`, `updated_at`) VALUES
(21, 10, 'Disaster Management', '/campaign/documents/1696874007IMG-20230914-WA0011.jpg', 'active', '2023-10-10 00:53:27', '2023-10-10 00:53:27'),
(22, 11, 'Skill Development', '/campaign/documents/1696874440skill2.jpg', 'active', '2023-10-10 01:00:40', '2023-10-10 01:00:40'),
(23, 5, 'Santosh', '/campaign/documents/16972770498vWxpKwKg2RidmkBAA5DZ8zZtNbPZD-Clxh1BuV4_2g=_plaintext_638302066048502543.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(24, 5, 'Santosh', '/campaign/documents/1697277049bLVAO0LojicO_96vIpOBnuIchW6seKBF_r5cKiZI2TY=_plaintext_638302066066183530.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(25, 5, 'Santosh', '/campaign/documents/1697277049GEhT9HXgWjBP1alF2Kzi6J4Agxe1cf1mO9VeZsDv-X8=_plaintext_638302066066273555.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(26, 5, 'Santosh', '/campaign/documents/1697277049IMG-20230913-WA0070.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(27, 5, 'Santosh', '/campaign/documents/1697277049IMG-20230913-WA0071.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(28, 5, 'Santosh', '/campaign/documents/1697277049IMG-20230913-WA0072.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(29, 5, 'Santosh', '/campaign/documents/1697277049IMG-20230913-WA0073.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(30, 5, 'Santosh', '/campaign/documents/1697277049IMG-20230913-WA0074.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(31, 5, 'Santosh', '/campaign/documents/1697277049NKO61mVi41iiStIf6_Kv7yw_f4udj8SiPmWSQGBzmkw=_plaintext_638302066059152976.jpg', 'active', '2023-10-14 16:50:49', '2023-10-14 16:50:49'),
(32, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor1.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(33, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor2.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(34, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor3.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(35, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor4.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(36, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor5.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(37, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor6.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(38, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor7.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(39, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor8.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(40, 3, 'Pink ribbon', '/campaign/documents/1697281120akino_doctor9.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(41, 3, 'Pink ribbon', '/campaign/documents/1697281120IMG-20230823-WA0088.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(42, 3, 'Pink ribbon', '/campaign/documents/1697281120IMG-20230823-WA0094.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40'),
(43, 3, 'Pink ribbon', '/campaign/documents/1697281120IMG-20230823-WA0103.jpg', 'active', '2023-10-14 17:58:40', '2023-10-14 17:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `donation_type` enum('onetime','monthly','fullpayment') DEFAULT NULL,
  `donation_amount` varchar(20) DEFAULT NULL,
  `full_name` varchar(300) DEFAULT NULL,
  `pancard` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `transaction_status` varchar(200) DEFAULT NULL,
  `order_id` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `campaign_id`, `donation_type`, `donation_amount`, `full_name`, `pancard`, `email`, `mobile`, `address`, `city`, `state`, `country`, `transaction_id`, `transaction_status`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(38, NULL, NULL, '1000', 'Kamble', 'Pritesh', 'kpritesh12@gmail.com', '8108913675', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2311101433312379420868', 'SUCCESS', '861793', 'Success', '2023-11-10 16:02:31', '2023-11-10 16:03:43'),
(39, NULL, NULL, '1000', 'kamble', 'pritesh', 'kpritesh12@gmail.com', '8779507814', NULL, 'mumbai', 'maharashta', 'India', NULL, NULL, '690436', 'pending', '2023-11-10 20:49:45', '2023-11-10 20:49:45'),
(40, 5, NULL, '12500', 'Pritesh', 'Bgvpkq101', 'kpritesh12@gmail.com', '8108913675', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2311181117095615337629', 'SUCCESS', '658746', 'Success', '2023-11-18 12:46:36', '2023-12-22 10:10:51'),
(41, 3, NULL, '10000', 'PRITESH DILIP KMBLE', 'BGVPK101Q', 'kpritesh12@gmail.com', '8108913675', NULL, 'MUMBAI', 'maharashtra', 'India', 'T2311241311338791365783', 'SUCCESS', '163012', 'Success', '2023-11-24 14:38:30', '2023-12-22 10:05:23'),
(42, 12, NULL, '1000', 'Chanakya Mundada', 'BCMPM3598J', 'chanakyamundada@gmail.com', '8830225441', NULL, 'Navi Mumbai', 'Maharashtra', 'India', 'T2311251912449873300596', 'SUCCESS', '318580', 'Success', '2023-11-25 20:42:25', '2023-11-25 20:42:56'),
(43, NULL, NULL, '2000', 'Babita sahani', 'THAN45688', 'sahanibabita327@gmail.com', '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '384497', 'pending', '2023-11-28 10:35:56', '2023-11-28 10:35:56'),
(44, NULL, NULL, '2000', 'Babita sahani', 'THAN45688', 'sahanibabita327@gmail.com', '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, 'TXN_AUTO_FAILED', '723977', 'Success', '2023-11-28 10:36:18', '2023-11-28 13:50:14'),
(45, NULL, NULL, '500', 'Roshan bhave', 'BHAT6789', 'roshubhavess@gmail.com', '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '334993', 'pending', '2023-11-28 13:49:05', '2023-11-28 13:49:05'),
(46, NULL, NULL, '1', 'Babita sahani', 'THAN45688', 'sahanibabita327@gmail.com', '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2311281222015090005542', 'SUCCESS', '965175', 'Success', '2023-11-28 13:51:44', '2023-11-28 13:52:11'),
(51, 5, NULL, '1000', 'ram', NULL, NULL, NULL, NULL, 'Mumbai', 'maharashtra', 'India', NULL, NULL, '449905', 'pending', '2023-12-04 19:32:16', '2023-12-04 19:32:16'),
(52, NULL, NULL, '100', 'kamble', NULL, NULL, NULL, NULL, 'MUMBAI', 'maharashta', 'India', NULL, NULL, '897726', 'pending', '2023-12-04 19:33:29', '2023-12-04 19:33:29'),
(53, NULL, NULL, '1000', 'Babita sahani', NULL, 'sahanibabita327@gmail.com', '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '825902', 'pending', '2023-12-07 01:00:09', '2023-12-07 01:00:09'),
(54, NULL, NULL, '1', 'Salman Khan', 'ASKLH2730A', 'sal@gmail.com', '9563844766', NULL, 'Mumbai', 'Mh', 'India', NULL, NULL, '213573', 'pending', '2023-12-08 11:54:42', '2023-12-08 11:54:42'),
(55, NULL, NULL, '1000', 'Pritesh', NULL, NULL, '8108913675', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '263971', 'pending', '2023-12-10 15:41:33', '2023-12-10 15:41:33'),
(56, NULL, NULL, '289', 'Snehalee Dabhade', NULL, 'dabhade.snehal76@gmail.com', '8691900846', NULL, 'Ghatkopar west', 'Maharashtra', 'India', 'T2312101414328750704523', 'CANCELLED_BY_USER', '542876', 'Success', '2023-12-10 15:43:28', '2023-12-10 15:45:12'),
(57, NULL, NULL, '289', 'Snehalee Dabhade', NULL, 'dabhade.snehal76@gmail.com', '8691900846', NULL, 'Ghatkopar west', 'Maharashtra', 'India', 'T2312101416346769156484', 'CANCELLED_BY_USER', '562421', 'Success', '2023-12-10 15:46:00', '2023-12-10 15:47:10'),
(58, NULL, NULL, '100', 'Kiran Kamble', NULL, 'kpritesh12@gmail.com', '8108913675', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2312101423363547740922', 'AUTHENTICATION_FAILED', '345120', 'Success', '2023-12-10 15:52:11', '2023-12-10 15:53:51'),
(59, NULL, NULL, '1000', 'Subash', 'Kkk', 'rupeshvk1122@gmail.com', '88521369494', NULL, 'Nagpur', 'Maharashtra', 'India', NULL, NULL, '454994', 'Success', '2023-12-12 17:15:39', '2023-12-12 17:15:48'),
(60, 3, NULL, '1100', 'Pritt', NULL, NULL, '8108913675', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, 'SUCCESS', '622184', 'Success', '2023-12-12 21:23:32', '2023-12-22 10:06:23'),
(61, 3, NULL, '1955', 'Babita', NULL, NULL, '9372835992', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, 'SUCCESS', '555506', 'Success', '2023-12-12 23:22:00', '2023-12-22 10:06:56'),
(62, NULL, NULL, '500', 'Rahul Yadav', 'AMEPY6179Q', '07rahulyadav@gmail.com', '7208117911', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2312131306099995627551', 'SUCCESS', '393803', 'Success', '2023-12-13 14:36:01', '2023-12-13 14:38:35'),
(63, NULL, NULL, '500', 'Tushar Muley', 'BNCPM3084Q', 'tdm1309@gmail.com', '8788083895', NULL, 'Panvel', 'Maharashtra', 'India', 'T2312131418144256977925', 'SUCCESS', '449712', 'Success', '2023-12-13 15:47:20', '2023-12-13 15:48:20'),
(64, 3, NULL, '100', 'Suru', NULL, NULL, '877950714', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '115214', 'Success', '2023-12-13 18:23:17', '2023-12-13 18:23:24'),
(65, 12, NULL, '1', 'Suresh patel', NULL, 'sureshsanju3445@gmail.com', '7010293445', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2312131657195051422723', 'SUCCESS', '609348', 'Success', '2023-12-13 18:25:15', '2023-12-13 18:27:22'),
(66, NULL, NULL, '1000', 'Raj patra', '27dyfssgh', 'rkenterprises74783@gmail.com', '9833558653', NULL, 'Palghar', 'Maharashtra', 'India', NULL, NULL, '612761', 'pending', '2023-12-14 11:11:19', '2023-12-14 11:11:19'),
(81, NULL, NULL, '1000', 'Vidhya Nair', 'Anbpn7663g', 'vidhya.m90@gmail.com', '9022580042', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '475725', 'pending', '2023-12-15 18:02:26', '2023-12-15 18:02:26'),
(82, NULL, NULL, '1000', 'Vidhya Nair', 'Anbpn7663g', 'vidhya.m90@gmail.com', '9022580042', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2312151632517951757737', 'SUCCESS', '157920', 'Success', '2023-12-15 18:02:27', '2023-12-15 18:02:56'),
(83, NULL, NULL, '101', 'ashutosh', 'cbrpb7613j', 'ashutosh.burhade52@gmail.com', '8793081591', NULL, 'thane', 'Maharashtra', 'India', 'T2312171936293923560972', 'SUCCESS', '340159', 'Success', '2023-12-17 21:06:08', '2023-12-17 21:06:33'),
(84, NULL, NULL, '200', 'Shreyas', 'Doipp2598F', 'shreyasvpawar@gmail.com', '8380062816', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '544436', 'pending', '2023-12-18 20:49:25', '2023-12-18 20:49:25'),
(85, NULL, NULL, '251', 'Rahul', 'AGMPY0079P', 'rahulyadav8690@gmail.com', '8750451930', NULL, 'mumbai', 'maharashtra', 'India', NULL, NULL, '490339', 'pending', '2023-12-19 20:55:39', '2023-12-19 20:55:39'),
(86, NULL, NULL, '251', 'Rahul', 'AGMPY0079P', 'rahulyadav8690@gmail.com', '8750451930', NULL, 'mumbai', 'maharashtra', 'India', NULL, NULL, '638488', 'pending', '2023-12-19 20:57:43', '2023-12-19 20:57:43'),
(87, NULL, NULL, '251', 'Rahul', 'AGMPY0079P', 'rahulyadav8690@gmail.com', '8750451930', NULL, 'mumbai', 'maharashtra', 'India', 'T2312191929190302253428', 'SUCCESS', '111328', 'Success', '2023-12-19 20:58:22', '2023-12-19 20:59:25'),
(88, NULL, NULL, '3000', 'Annamalay Thevar', NULL, 'sandran67@yahoo.com', '6596259428', NULL, 'Singapore', 'Singapore', 'Other', NULL, NULL, '365351', 'pending', '2023-12-19 21:46:06', '2023-12-19 21:46:06'),
(89, NULL, NULL, '3000', 'Annamalay Thevar', NULL, 'sandran67@yahoo.com', '6596259428', NULL, 'Singapore', 'Singapore', 'Other', NULL, NULL, '335575', 'pending', '2023-12-19 21:46:08', '2023-12-19 21:46:08'),
(90, NULL, NULL, '3000', 'Annamalay Thevar', NULL, 'sandran67@yahoo.com', '6596259428', NULL, 'Singapore', 'Singapore', 'Other', NULL, NULL, '405112', 'Success', '2023-12-19 21:46:09', '2023-12-19 21:46:17'),
(91, NULL, NULL, '3000', 'Annamalay Thevar', NULL, 'sandran67@yahoo.com', '6596259428', NULL, 'Singapore', 'Singapore', 'Other', NULL, NULL, '332705', 'pending', '2023-12-19 21:48:03', '2023-12-19 21:48:03'),
(92, NULL, NULL, '3000', 'Annamalay Thevar', NULL, 'sandran67@yahoo.com', '6596259428', NULL, 'Singapore', 'Singapore', 'Other', NULL, NULL, '728571', 'Success', '2023-12-19 21:48:04', '2023-12-19 21:48:12'),
(93, NULL, NULL, '10', 'Ashishkumar Subhash Chandra', 'BGQPC3621L', 'ashishchandra131@gmail.com', '8976890500', NULL, 'Mumbai', 'Maharashtra', 'India', NULL, NULL, '696670', 'pending', '2023-12-20 16:39:09', '2023-12-20 16:39:09'),
(94, NULL, NULL, '10', 'Ashishkumar Subhash Chandra', 'BGQPC3621L', 'ashishchandra131@gmail.com', '8976890500', NULL, 'Mumbai', 'Maharashtra', 'India', 'T2312201509349431430028', 'SUCCESS', '825939', 'Success', '2023-12-20 16:39:10', '2023-12-20 16:39:42'),
(95, NULL, NULL, '10', 'Durgesh Pandey', 'cuepp6825m', 'durgesh@whizzact.com', '8268108343', NULL, 'Mumbai', 'MH', 'India', 'T2312221515550246618639', 'SUCCESS', '419234', 'Success', '2023-12-22 16:45:05', '2023-12-22 16:46:27'),
(96, NULL, NULL, '10', 'Durgesh Pandey', 'cuepp6825m', 'durgesh@whizzact.com', '8268108343', NULL, 'Mumbai', 'MH', 'India', 'T2312221520073772190727', 'AUTHENTICATION_FAILED', '599529', 'Success', '2023-12-22 16:49:19', '2023-12-22 16:53:01'),
(97, NULL, NULL, '10', 'Durgesh Pandey', 'cuepp6825m', 'durgesh@whizzact.com', '8268108343', NULL, 'Mumbai', 'MH', 'India', 'T2312221524134040799716', 'AUTHENTICATION_FAILED', '612211', 'Success', '2023-12-22 16:53:36', '2023-12-22 16:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `faq_details`
--

CREATE TABLE `faq_details` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` longtext NOT NULL,
  `position` int(11) NOT NULL,
  `is_active` varchar(200) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_details`
--

INSERT INTO `faq_details` (`id`, `question`, `answer`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'In what ways can my contribution inspire others?', 'Akinofoundation\'s small yet impactful contributions inspire by transparently sharing our journey, showcasing achievable actions, and emphasizing collaboration. Through storytelling and documenting progress, we invite others to join us in creating positive change for communities, fostering a sense of shared responsibility and collective impact.\"', 1, 'active', '2023-12-23 01:09:03', '2023-12-23 01:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_details`
--

CREATE TABLE `gallery_details` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `type` enum('gallery','activity') NOT NULL DEFAULT 'activity',
  `image` varchar(250) DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_details`
--

INSERT INTO `gallery_details` (`id`, `album_id`, `type`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(139, 6, 'activity', '/gallery/1697261327happytime.png', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(140, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0001.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(141, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0007.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(142, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0012.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(143, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0013.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(144, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0014.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(145, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0017.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(146, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0018.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(147, 6, 'activity', '/gallery/1697261327IMG-20230913-WA0023.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(148, 6, 'activity', '/gallery/1697261327WhatsApp Image 2023-09-13 at 17.44.54.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(149, 6, 'activity', '/gallery/1697261327WhatsApp Image 2023-09-13 at 17.44.55.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(150, 6, 'activity', '/gallery/1697261327WhatsApp Image 2023-09-13 at 17.49.44.jpg', 'active', '2023-10-14 12:28:47', '2023-10-14 12:28:47'),
(151, 3, 'activity', '/gallery/1697261647akino5-skill.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(152, 3, 'activity', '/gallery/1697261647akino-skill2.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(153, 3, 'activity', '/gallery/1697261647akino-skill3.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(154, 3, 'activity', '/gallery/1697261647akino-skill4.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(155, 3, 'activity', '/gallery/1697261647akino-skill5.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(156, 3, 'activity', '/gallery/1697261647akino-skill6.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(157, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0082.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(158, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0083 - Copy.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(159, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0084.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(160, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0085.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(161, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0086.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(162, 3, 'activity', '/gallery/1697261647IMG-20230913-WA0087.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(163, 3, 'activity', '/gallery/1697261647skil_akino.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(164, 3, 'activity', '/gallery/1697261647womenempower.jpg', 'active', '2023-10-14 12:34:07', '2023-10-14 12:34:07'),
(165, 2, 'activity', '/gallery/16972622391694761724IMG-20230914-WA0014.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(166, 2, 'activity', '/gallery/16972622391694761724IMG-20230914-WA0016.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(167, 2, 'activity', '/gallery/16972622391694761724WhatsApp Image 2023-09-15 at 12.15.11.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(168, 2, 'activity', '/gallery/16972622391694761724women.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(169, 2, 'activity', '/gallery/16972622391694761724women2.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(170, 2, 'activity', '/gallery/16972622391694761724women3.jpg', 'active', '2023-10-14 12:43:59', '2023-10-14 12:43:59'),
(177, 1, 'activity', '/gallery/1697264211akino_child_education1.png', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(178, 1, 'activity', '/gallery/1697264211akino_child_education2.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(179, 1, 'activity', '/gallery/1697264211akino_child_education3.png', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(180, 1, 'activity', '/gallery/1697264211akino_child_education4 - Copy.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(181, 1, 'activity', '/gallery/1697264211akino_child_education5.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(182, 1, 'activity', '/gallery/1697264211akino_child_education6.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(183, 1, 'activity', '/gallery/1697264211akino_child_education8.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(184, 1, 'activity', '/gallery/1697264211akino_child_education9.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(185, 1, 'activity', '/gallery/1697264211akino_child_education10.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(186, 1, 'activity', '/gallery/1697264211akino_child_education11.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(187, 1, 'activity', '/gallery/1697264211akino_doctor7.jpg', 'active', '2023-10-14 13:16:51', '2023-10-14 13:16:51'),
(188, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 18.58.47.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(189, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 18.58.48.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(190, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 18.58.49.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(191, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 19.04.39.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(192, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 19.04.40.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(193, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 19.04.41.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(194, 9, 'activity', '/gallery/1698644147WhatsApp Image 2023-09-13 at 19.04.42.webp', 'active', '2023-10-30 12:35:47', '2023-10-30 12:35:47'),
(195, 8, 'activity', '/gallery/1698646455IMG-20230914-WA0008.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(196, 8, 'activity', '/gallery/1698646455IMG-20230914-WA0009.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(197, 8, 'activity', '/gallery/1698646455IMG-20230914-WA0010.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(199, 8, 'activity', '/gallery/1698646455IMG-20230914-WA0012.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(200, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.38.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(201, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.40.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(202, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.43.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(203, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.50.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(204, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.51.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(205, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.52.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(206, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.53.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(207, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.54.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(208, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.55.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(209, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.56.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(210, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.58.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(211, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-13 at 18.42.59.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(212, 8, 'activity', '/gallery/1698646455WhatsApp Image 2023-09-14 at 19.11.04.webp', 'active', '2023-10-30 13:14:15', '2023-10-30 13:14:15'),
(217, 7, 'activity', '/gallery/1699876877WhatsApp Image 2023-09-13 at 18.23.48.webp', 'active', '2023-11-13 19:01:17', '2023-11-13 19:01:17'),
(218, 7, 'activity', '/gallery/1699876877WhatsApp Image 2023-09-13 at 18.23.52.webp', 'active', '2023-11-13 19:01:17', '2023-11-13 19:01:17'),
(223, 7, 'activity', '/gallery/1699876877WhatsApp Image 2023-09-13 at 18.23.53.webp', 'active', '2023-11-13 19:01:17', '2023-11-13 19:01:17'),
(224, 7, 'activity', '/gallery/1699876877WhatsApp Image 2023-09-13 at 18.23.55.webp', 'active', '2023-11-13 19:01:17', '2023-11-13 19:01:17'),
(225, 7, 'activity', '/gallery/1699876877WhatsApp Image 2023-09-13 at 18.23.56.webp', 'active', '2023-11-13 19:01:17', '2023-11-13 19:01:17'),
(226, 7, 'activity', '/gallery/1699878298NKO61mVi41iiStIf6_Kv7yw_f4udj8SiPmWSQGBzmkw=_plaintext_638302066059152976.jpg', 'active', '2023-11-13 19:24:58', '2023-11-13 19:24:58'),
(227, 7, 'activity', '/gallery/1699878298santosh.jpg', 'active', '2023-11-13 19:24:58', '2023-11-13 19:24:58'),
(228, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.37.47_5a73919d.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(229, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.39.40_000d9718.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(230, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.39.40_db8f7f9c.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(231, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.39.40_f130508b.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(232, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.39.41_0b363462.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(233, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.39.42_aa3b7a0e.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(234, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-20 at 12.57.36_51c31bbb.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(235, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-21 at 12.23.45_0c4055b7.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(236, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-21 at 12.23.47_c9b8728a.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(237, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-21 at 12.23.48_868d2a8d.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(238, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-21 at 12.23.49_ff29e77a.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(239, 1, 'activity', '/gallery/1700635872WhatsApp Image 2023-11-21 at 12.23.52_81c74517.jpg', 'active', '2023-11-22 13:51:12', '2023-11-22 13:51:12'),
(240, 15, 'activity', '/gallery/1704796920IMG-20230913-WA0001.jpg', 'active', '2024-01-09 05:12:00', '2024-01-09 05:12:00'),
(241, 15, 'activity', '/gallery/1704796920IMG-20230913-WA0007.jpg', 'active', '2024-01-09 05:12:00', '2024-01-09 05:12:00'),
(242, 15, 'activity', '/gallery/1704797421happytime.png', 'active', '2024-01-09 05:20:21', '2024-01-09 05:20:21'),
(243, 15, 'activity', '/gallery/1704797421IMG-20230913-WA0007.jpg', 'active', '2024-01-09 05:20:21', '2024-01-09 05:20:21'),
(244, 15, 'activity', '/gallery/1704797421IMG-20230913-WA0017.jpg', 'active', '2024-01-09 05:20:21', '2024-01-09 05:20:21'),
(245, 15, 'activity', '/gallery/1704797421IMG-20230913-WA0018.jpg', 'active', '2024-01-09 05:20:21', '2024-01-09 05:20:21'),
(246, 15, 'activity', '/gallery/1704798219WhatsApp Image 2023-09-13 at 18.23.52.jpg', 'active', '2024-01-09 05:33:39', '2024-01-09 05:33:39'),
(247, 15, 'activity', '/gallery/1704798219WhatsApp Image 2023-09-13 at 18.23.56.jpg', 'active', '2024-01-09 05:33:39', '2024-01-09 05:33:39'),
(248, 15, 'activity', '/gallery/1704798353happytime.png', 'active', '2024-01-09 05:35:53', '2024-01-09 05:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `like_counter`
--

CREATE TABLE `like_counter` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `like_ip` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `our_impact`
--

CREATE TABLE `our_impact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `total_number` varchar(20) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `top_head` varchar(255) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_impact`
--

INSERT INTO `our_impact` (`id`, `name`, `total_number`, `description`, `top_head`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Disaster Relief & Rehabilitation', '108', NULL, 'Helped During Disaster', '/impact/1697270733WhatsApp Image 2023-09-13 at 18.42.55 (1).jpg', 'active', '2023-09-09 09:02:10', '2023-10-14 15:05:33'),
(2, 'EmpowerHER: Rebuilding Lives, & Rehabilitation', '265', NULL, 'Help Women EmpowerHER', '/impact/1697275641akino_distribute5 (1).jpg', 'active', '2023-09-09 09:05:04', '2023-10-14 16:27:21'),
(3, 'TinyHeroes: Empowering Special Abilities in Little Ones & Rehabilitation', '265', NULL, 'Helped TinyHeroes', '/impact/1697266883akino_child_education8.jpg', 'active', '2023-09-09 09:06:27', '2023-10-14 14:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `our_workdetail`
--

CREATE TABLE `our_workdetail` (
  `id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `slug` varchar(3000) DEFAULT NULL,
  `main_image` varchar(300) DEFAULT NULL,
  `slogan` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `total` varchar(200) NOT NULL,
  `is_active` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_workdetail`
--

INSERT INTO `our_workdetail` (`id`, `subcategory_id`, `category`, `title`, `slug`, `main_image`, `slogan`, `description`, `total`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, 'Child Education', 'STUDENT EDUCATION', 'student-education', '/ourwork/1705311347akino_child_education5.jpg', '\"Nurturing Dreams, Sparking Hope: AKINO\'s Child Education Journey - Where Hearts and Minds Flourish Together.\"', '<h2 class=\"fs-25 fw-600 pb-3 aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"500\" style=\"box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-left: 0px; margin: 0px 0px 0.5rem; font-family: Poppins, sans-serif; line-height: 1.2; color: rgb(33, 37, 41); font-size: 25px; transform: translateZ(0px); opacity: 1; transition-property: opacity, transform; transition-duration: 0.5s; transition-timing-function: ease; background-color: rgb(255, 255, 255); padding-bottom: 1rem !important;\">WHY EDUCATION</h2><p class=\"fs-15 text-dark-gray text-justify aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"500\" style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem; font-family: Poppins, sans-serif; transform: translateZ(0px); font-size: 15px; color: rgb(60, 60, 60); opacity: 1; transition-property: opacity, transform; transition-duration: 0.5s; transition-timing-function: ease; background-color: rgb(255, 255, 255);\">Education is the beacon that illuminates the path to a brighter future. It empowers individuals, ignites their potential, and transforms lives. At AKINO, we believe in the profound impact of education, especially for children. It\'s the key to breaking the cycle of poverty, fostering innovation, and building strong, resilient communities. Education nurtures empathy, tolerance, and understanding, fostering a more compassionate world. It equips young minds with the tools to confront challenges, make informed decisions, and contribute positively to society. In a world marked by uncertainty, education remains a constant, guiding light, offering hope, opportunities, and the promise of a better tomorrow.</p><h2 class=\"fs-25 fw-600 pt-4 pb-3 aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"500\" style=\"box-sizing: border-box; padding-right: 0px; padding-left: 0px; margin: 0px 0px 0.5rem; font-family: Poppins, sans-serif; line-height: 1.2; color: rgb(33, 37, 41); font-size: 25px; transform: translateZ(0px); opacity: 1; transition-property: opacity, transform; transition-duration: 0.5s; transition-timing-function: ease; background-color: rgb(255, 255, 255); padding-top: 1.5rem !important; padding-bottom: 1rem !important;\">WHAT WE DO</h2><p class=\"fs-15 text-dark-gray text-justify aos-init aos-animate\" data-aos=\"fade-up\" data-aos-duration=\"500\" style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem; font-family: Poppins, sans-serif; transform: translateZ(0px); font-size: 15px; color: rgb(60, 60, 60); opacity: 1; transition-property: opacity, transform; transition-duration: 0.5s; transition-timing-function: ease; background-color: rgb(255, 255, 255);\">At AKINO, our mission centers on forging flood-resilient communities and providing vital support when disaster strikes. We prioritize Disaster Preparedness by educating and training communities, enabling them to respond effectively to floods. Our Relief and Aid teams swiftly deliver essential resources to affected areas during crises. We also focus on Infrastructure Development, constructing flood-resistant homes and bolstering infrastructure to mitigate future risks. Empowering communities through Education and Skills Development is key to their long-term recovery. Additionally, AKINO advocates for policies that promote flood resilience. We rely on Donation Drives to fund our initiatives, and our Child Education program ensures the younger generation is prepared for future challenges.</p>', '46,560', 'active', '2024-01-15 04:05:47', '2024-01-16 07:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `payment_status` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `banner` varchar(200) DEFAULT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `banner`, `icon`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Women Empowerment', '/category/1697266245c1.png', '/category/1697266245c1.png', 'women-empowerment', '2023-09-09 08:49:23', '2023-10-14 13:50:45'),
(2, 2, 'Health Care', '/category/1697266209Medical Help.png', '/category/1697266209Medical Help.png', 'health-care', '2023-09-09 08:49:51', '2023-10-14 13:50:09'),
(3, 2, 'Child Education', '/category/1697266159c2.png', '/category/1697266159c2.png', 'child-education', '2023-09-09 08:51:05', '2023-10-14 13:49:19'),
(5, 2, 'Disaster Management', '/category/1697266121disester.png', '/category/1697266121disester.png', 'disaster-management', '2023-09-30 21:06:33', '2023-10-14 13:48:41'),
(6, 2, 'Skill Development', '/category/1697266092Women Empoweerment.png', '/category/1697266092Women Empoweerment.png', 'skill-development', '2023-09-30 21:10:43', '2023-10-14 13:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `tag_detail`
--

CREATE TABLE `tag_detail` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `tag` varchar(300) DEFAULT NULL,
  `TYPE` enum('blog') DEFAULT NULL,
  `is_active` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_detail`
--

CREATE TABLE `testimonial_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `is_active` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_detail`
--

INSERT INTO `testimonial_detail` (`id`, `name`, `email`, `mobile`, `image`, `message`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Nirmal', NULL, NULL, '/testimonial/1694270636img-2.png', 'I am going to fulfil my mother\'s dreams and support her like she supported me. Nirmal\'s mother has been her strongest pillar in her journey. Her father did not support her getting an education past eighth standard. From being a little child dreaming of going to school to becoming a strong and courageous girl Nirmal has come a long way struggling to be successful. Akino Foundation\'s scholarship allowed Nirmal to be more fearless towards financial issues hampering her studies. Nirmal is currently studying in Class 10 and aspires to study more to fulfil all her mother\'s dreams. Her parents are very proud of her and encourage her more every day', 'active', '2023-09-09 09:13:56', '2023-12-24 23:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `referral_code` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `referred_by`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_pic`, `phone`, `address`, `country`, `city`, `state`, `postal_code`, `referral_code`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Durgesh', 'durgesh@whizzact.in', '2023-08-28 12:57:09', '$2y$10$jBokrGwlezpsf5bAka2XaObs.hs8DzmXejjbeqt6fZEvxWOi8DnuK', NULL, NULL, '8268108343', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 12:09:53', '2023-08-28 18:27:09'),
(2, NULL, 2, 'Durgesh Pandey', 'durgesh@admin.com', '2023-08-28 12:12:36', '$2y$10$jBokrGwlezpsf5bAka2XaObs.hs8DzmXejjbeqt6fZEvxWOi8DnuK', NULL, NULL, '8268108343', 'ddddd', 'India', NULL, NULL, NULL, NULL, NULL, '2023-08-15 16:19:27', '2023-08-28 17:42:36'),
(3, NULL, 3, 'Durgesh Pandey', 'durgesh@whizzact.com11', '2023-08-28 12:10:26', '$2y$10$jBokrGwlezpsf5bAka2XaObs.hs8DzmXejjbeqt6fZEvxWOi8DnuK', NULL, NULL, '8268108343', 'ddddd', 'India', NULL, NULL, NULL, NULL, NULL, '2023-08-15 16:19:27', '2023-08-28 17:40:26'),
(5, NULL, 2, 'Durgesh', 'durgesh@whizzact.com', '2023-08-28 12:57:34', '$2y$10$n1v/jETFibjtyUX0.aXUNu19efwXoRTBcpBQ3tvHUvUAH9G9WFsOi', NULL, NULL, '8268108343', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-28 12:57:19', '2023-08-28 18:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'User', 'active', '2023-08-03 13:38:03', '2023-08-03 13:38:03'),
(2, 'Admin', 'active', '2023-08-03 13:38:03', '2023-08-03 13:38:03'),
(3, 'Pandit', 'active', '2023-08-03 13:38:03', '2023-08-03 13:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_detail`
--
ALTER TABLE `activity_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_details`
--
ALTER TABLE `album_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_detail`
--
ALTER TABLE `blogs_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_detail`
--
ALTER TABLE `blog_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_details`
--
ALTER TABLE `campaign_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_details`
--
ALTER TABLE `document_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_details`
--
ALTER TABLE `faq_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_details`
--
ALTER TABLE `gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_counter`
--
ALTER TABLE `like_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_impact`
--
ALTER TABLE `our_impact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_workdetail`
--
ALTER TABLE `our_workdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_detail`
--
ALTER TABLE `tag_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_detail`
--
ALTER TABLE `testimonial_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_detail`
--
ALTER TABLE `activity_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `album_details`
--
ALTER TABLE `album_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs_detail`
--
ALTER TABLE `blogs_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_detail`
--
ALTER TABLE `blog_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `campaign_details`
--
ALTER TABLE `campaign_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `document_details`
--
ALTER TABLE `document_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `faq_details`
--
ALTER TABLE `faq_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_details`
--
ALTER TABLE `gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `like_counter`
--
ALTER TABLE `like_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_impact`
--
ALTER TABLE `our_impact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_workdetail`
--
ALTER TABLE `our_workdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tag_detail`
--
ALTER TABLE `tag_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial_detail`
--
ALTER TABLE `testimonial_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `our_workdetail`
--
ALTER TABLE `our_workdetail`
  ADD CONSTRAINT `our_workdetail_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

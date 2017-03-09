-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 05:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_info`, `author_image`) VALUES
(1, 'Bạn Tốt', NULL, NULL),
(4, 'Adam Khoo & Gary Lee', 'sYBo5vH9DG', NULL),
(5, 'Adam Khoo', 'r1xvEUh8f8', NULL),
(6, 'Agatha Christie', 'IN0JstB233', NULL),
(7, 'Akiko Hayashi', 'KoLcjECjxs', NULL),
(8, 'Alain de Botton', '5MBhZQE70l', NULL),
(9, 'Alan Phan ', 'Qhkku5AHkm', NULL),
(10, 'Alan Watts', '7kI7ocHnwD', NULL),
(11, 'Allan & Barbara Pease', 'iDvbXXXnVF', NULL),
(12, 'Alphabooks biên soạn', 'yDzcYWInfV', NULL),
(13, 'Anagarika Govinda', '9WJGa7n636', NULL),
(14, 'Andrea Hirata', 'Nw7kSgZhn1', NULL),
(15, 'Andrew Spooner', 'Pg7qxY73Pz', NULL),
(16, 'Anh Nguyễn', 'wyE5WPgjou', NULL),
(17, 'Anh Thư - Thu Giang', 'qj8JDtdpdu', NULL),
(18, 'Ann Weil', '92RaWY1nOn', NULL),
(19, 'Anthony Robbins', '2PlY75dFV6', NULL),
(20, 'Anthony Weston', 'ia82ucfsYV', NULL),
(21, 'Antoine De Saint-Exupéry', 'xFEjc2zNzJ', NULL),
(22, 'Aoyama Gosho', 'IKr5vVyiSv', NULL),
(23, 'Arrian', 'LXHlCOP3Vu', NULL),
(24, 'Arthur Conan Doyle', 'xIdUIaJ6Wu', NULL),
(25, 'Atul Gawande', 'FWlIqMxgPH', NULL),
(26, 'Austin Kleon', 'XtCcBHXxy2', NULL),
(27, 'Bách Dương', 'hcFmMYCD6P', NULL),
(28, 'Bạch Trà', 'qOvWr0OUV2', NULL),
(29, 'Barbara Pease Allan', '6Nc0xV2pKo', NULL),
(30, 'Betty L Khoo-Kingsley', 'SaYznD28Tc', NULL),
(31, 'Bill Henderson - Carlos M. Garcia', '5FmF5AthdJ', NULL),
(32, 'Bộ Giáo Dục Và Đào Tạo', 'I7FCcWKCLG', NULL),
(33, 'Bonnier Fakta Sweden', 'vG3yvWUVrf', NULL),
(34, 'Boris A.Kordemsky', 'zJdQkrCzPm', NULL),
(35, 'Brad Stone', 'rokhoaOFfL', NULL),
(36, 'Brendan Debbie Gallagher ', '0DO6sYC1Tk', NULL),
(37, 'Brette McWhorter Sember', 'GejRreA4SI', NULL),
(38, 'Bruce Bueno de Mesquita', 'v4xZO1xpws', NULL),
(39, 'BS. Đào Xuân Dũng', '8hu5Rgz6oN', NULL),
(40, 'BS Đỗ Hồng Ngọc', 'T4uhFnDMaV', NULL),
(41, 'Bùi Phụng', 'alpdGfD6nd', NULL),
(42, 'Bùi Quốc Châu', 'i0LUJ7ZLgQ', NULL),
(43, 'Bùi Thị Ánh Tuyết', '2S7PE50dBz', NULL),
(44, 'Bùi Văn Vinh', '0UVuqKiYio', NULL),
(45, 'Camilo Cruz', 'tqNKKQBWqC', NULL),
(46, 'Cấn Vân Khánh', '3HTx6UOVZE', NULL),
(47, 'Cao Nhuận', '4viYJxecrY', NULL),
(48, 'Carl-Johan Forssén Ehrlin', '8SYIDGhPjU', NULL),
(49, 'Choi Pyong Hee & Go Deuk Seong & Jeong Seong Jin', 'm5of3fIwxx', NULL),
(50, 'Christine Hà', 'meAFJVjKem', NULL),
(51, 'Chu Đình Tới', 'BRh1BvcuZ0', NULL),
(52, 'Chu Văn Biên ', 'wUzXUSJAFZ', NULL),
(53, 'Claire Throp', 'L3VjnPlqwu', NULL),
(54, 'Cloud Pillow Studio', 'zbfyoW9Z03', NULL),
(55, 'Cố Mạn', 'bv4GslOgJk', NULL),
(56, 'Cố Tây Tước', 'l3bqcYpfGZ', NULL),
(57, 'Cửu Bả Đao', 'YbFwY1ddMz', NULL),
(58, 'D. T. Suzuki', 'oCwoFCz4vh', NULL),
(59, 'Đại đức Thích Minh Tông', '0MbF8vSHsx', NULL),
(60, 'Đại Phát', 'l1ETCfd1VO', NULL),
(61, 'Dalai Lama', '65emK5PwYp', NULL),
(62, 'Dale Carnegie', 'K9MmsSA7b6', NULL),
(63, 'Dan Ariely', 'teuUPINGRi', NULL),
(64, 'Dan Senor & Saul Singer', 'DGAhMwqhQv', NULL),
(65, 'Đặng Hoàng Giang', 'ENTXKQzDBz', NULL),
(66, 'Đặng Hoàng Xa', 'RZQMCn0KIr', NULL),
(67, 'Đặng Minh Châu', 'e2W9hDJU7x', NULL),
(68, 'Daniel J. Boorstin', 'eqrauIhhe0', NULL),
(69, 'Daniel R. Castro', 'T05HUWwzPr', NULL),
(70, 'Đào Duy Anh', 'ksK3eQsfXG', NULL),
(71, 'Đào Trinh Nhất ', 'YyDZceqLp8', NULL),
(72, 'Darshani Deane', 'TjsT9mBDtj', NULL),
(73, 'Dave Trott', 'SRb1juRCCn', NULL),
(74, 'Denis Gingas Ph.D - Richard Beliveau Ph.D', '5MZEjENSBE', NULL),
(75, 'Địch Quế Dung', 'JIfcXufkWz', NULL),
(76, 'Diệp Lạc Vô Tâm', 'H3ICn49AUM', NULL),
(77, 'Đinh Công Bảy', '9ZAVMDtXMi', NULL),
(78, 'Đinh Thị Hương', 'iF8edT5tec', NULL),
(79, 'Đỗ Anh Thư - Phạm Hương Thuỷ', '5qJdy3xu5N', NULL),
(80, 'Đỗ Hồng Ngọc', 'wWbaa53zwa', NULL),
(81, 'Đỗ Mạnh Hà', 'Ov2zv6t7n4', NULL),
(82, 'Đỗ Nhật Nam ', '3ASTaN4yXl', NULL),
(83, 'Doãn Kiến Lợi', 'LECoSzZqvW', NULL),
(84, 'Đoạn Mạnh Linh - Đào Huyền Trang', '9nsYvUuwL1', NULL),
(85, 'Đoàn Thị Điểm ', 'HgFT463q77', NULL),
(86, 'Đới Hiểu Huyên', 'tB5PPGA5OF', NULL),
(87, 'Donald J. Trump', 'NcMR8WzHrq', NULL),
(88, 'Donna M. Genett Ph.D', 'uZZBR8mbs1', NULL),
(89, 'Dr. Blair Thomas Spalding', 'lbzjgqkGcV', NULL),
(90, 'Dr. Mike Goldsmith ', '7ikZpxqHlI', NULL),
(91, 'Dr. Mirriam Stoppard', 'rKqFI3g3dW', NULL),
(92, 'Đức Long', 'gV6ijDnque', NULL),
(93, 'Đức Pháp Vương Gyalwang Drukpa', 'WfKG28Bge4', NULL),
(94, 'Dung Keil', 'G70Yx17I7E', NULL),
(95, 'Dương Hương - Hoa Nguyễn', '6anDIGDJ6t', NULL),
(96, 'Dương Linh', 'ligu2RDxK6', NULL),
(97, 'Dương Ngọc Hiệp', 'QpXrcIzEM1', NULL),
(98, 'Đường Thất Công Tử', 'Hu8HJM7QBo', NULL),
(99, 'Eiichiro Oda', 'fsTbgq5u3k', NULL),
(100, 'Elaine Mazlish', 'igJ9FzEZb4', NULL),
(101, 'Elizabeth Raum', 'lxhvsYupGA', NULL),
(102, 'Eran Katz', 'z2hovVPMeT', NULL),
(103, 'Ernest Hemingway', 'BokZwBl5sw', NULL),
(104, 'Esther Hicks', 'LVModM5hsE', NULL),
(105, 'Foster Cline & Jim Fay', 'YlcoocYAdE', NULL),
(106, 'Francoize Boucher', 'FpdahRdDlI', NULL),
(107, 'Fujita Hioko - Aka Shozo', 'cREFdE2AxN', NULL),
(108, 'Gari', 'TEEq5EPwAu', NULL),
(109, 'Gary Lee', 'xgwDbialFz', NULL),
(110, 'Gary Zukav', 'KYSET1Nllb', NULL),
(111, 'George W. Bush', 'zkf2JbpmI6', NULL),
(112, 'Geshe Michael Roach', '5NZIvSNomu', NULL),
(113, 'Gia Đoàn', 'W4w8dMg4q4', NULL),
(114, 'Giản Tư Trung', '2dlTIyTDl9', NULL),
(115, 'Giang Văn Toàn', 'epbAJhG0Ju', NULL),
(116, 'Giáo Sư - Bác Sĩ: Hiromi Shinya MD', 'CXj632lJKH', NULL),
(117, 'Glenn Doman', '7rLTF1eFzI', NULL),
(118, 'Gosho Aoyama', '64uq9iXrUM', NULL),
(119, 'Greg allikas & Ned Nash', 'm375TK1QRL', NULL),
(120, 'GS. Cao Huy Đỉnh', 'eTEsCcvFwa', NULL),
(121, 'Gustave Le Bon', 'ajShJ6S4OA', NULL),
(122, 'Ha-chu ', 'TrqFIzqs9a', NULL),
(123, 'Hà Hữu Hải - Đoàn Trí Dũng', 'vxDKQaQgz0', NULL),
(124, 'Hà Thành - Trí Việt', 'UfEqezcs1J', NULL),
(125, 'Hà Yên - Hoài Phương', 'y1vygC2vOp', NULL),
(126, 'Hachun Lyonnet - Bubu Huong - Mẹ Ong Bông', 'lmdLhMzbRC', NULL),
(127, 'Hải Đường', 'aEN9Kje72q', NULL),
(128, 'Hán Trúc', 'k5PVODLYbc', NULL),
(129, 'Harper Lee ', 'YRIyXStUE7', NULL),
(130, 'Hayashi Akiko', 'EjfIwqcxXl', NULL),
(131, 'Hector Malot', 'Fy2cyfydbq', NULL),
(132, 'Henry Kissinger', 'OviQnXDidM', NULL),
(133, 'Herbert Rosendorfer', 'JWMYeDrLVB', NULL),
(134, 'Hervé This ', 'WDQ4ut1QJv', NULL),
(135, 'Hồ Thị Hải Âu', '9r0B8ivh8d', NULL),
(136, 'Hòa thượng Thích Thánh Nghiêm', '97SKpImOuw', NULL),
(137, 'Hoàng Anh Tú ', 'SW9rVdntyl', NULL),
(138, 'Hoàng Đào - Hương Giang', 'g31JrOYpXs', NULL),
(139, 'Hoàng Đạo Thúy', '8pujf0ZcoB', NULL),
(140, 'Hoàng Sơn', 'fqB4RZCV64', NULL),
(141, 'Hoàng Văn Lộc', 've548ppuO1', NULL),
(142, 'Hứa Nguyện', 'juyeZQQKoy', NULL),
(143, 'Huyền Linh', 'Jq7mIgLyqo', NULL),
(144, 'Huỳnh Vĩnh Sơn', 'IYcBLc40bh', NULL),
(145, 'Ian Stewart', 'Yo0seP6uIm', NULL),
(146, 'Ibuka Masaru', 'XxmKJmqkpQ', NULL),
(147, 'Inamori Kazuo', 'cjMZbuZC5I', NULL),
(148, 'J. D. Salinger', 'QpTXTf3jTr', NULL),
(149, 'Jack Canfield ', 'L0nRniMlr0', NULL),
(150, 'James Canton', 'Lvhkygjtrv', NULL),
(151, 'James G. Zumwalt', 'hpj1Sjgkfc', NULL),
(152, 'Jamgon Mipham', 'SploG0wDbp', NULL),
(153, 'Jared Diamond', '0Z4DY7sWEk', NULL),
(154, 'Jay Conrad Levinson', 'h1ndrN36Wi', NULL),
(155, 'Jay M. Feinman', '0r3XnSKg9L', NULL),
(156, 'Jeni Stepanek - Larry Lindner', 'VEdJer0Sdn', NULL),
(157, 'Jocelyn K.Glei', '01DjeM8OaU', NULL),
(158, 'Johanna Basford', 'RFU1fzLlCA', NULL),
(159, 'John Blofeld', 'rMWt6qPUH7', NULL),
(160, 'John Green', 'CO8CcvSdkw', NULL),
(161, 'Jonas Jonasson ', 'aniYDwNpJQ', NULL),
(162, 'Jostein Gaarder', 'aJtv75p6XB', NULL),
(163, 'Julia V Taylor', 'mNlJAk8PCy', NULL),
(164, 'Kẩm Nhung', 'eigC2ngEJZ', NULL),
(165, 'Kamiya - Taeko', 'lt2oKqtNEk', NULL),
(166, 'Kangawa Joshiko - Yagyu Genichiro', 'qh4XG6GHY7', NULL),
(167, 'Kate Di Camillo', 'MhD4F7qhm7', NULL),
(168, 'Katrin Himmler', 'yuAlIYOnRt', NULL),
(169, 'Katsusuke Serizawa', 'm6LTEzTVPD', NULL),
(170, 'Kazumi Yumoto ', 'xVz1Zn0So4', NULL),
(171, 'Keith Ferrazzi', 'P3lX7zCssj', NULL),
(172, 'Ken Kesey ', 'KbJ8HHFsjJ', NULL),
(173, 'Khoa Phan', 'qAqQz6WFgA', NULL),
(174, 'Kim Byung-Kook - Erza F. Vogel', 'O2Egu6ATbB', NULL),
(175, 'Kim Huggens', 'FayErIDwFU', NULL),
(176, 'Kim Oanh', 'qIr7iveSSR', NULL),
(177, 'Kim Woo Choong', '89K8ujlbZF', NULL),
(178, 'Kimura Kyuichi', '3ALgsd9F9h', NULL),
(179, 'Kito Aya', 'X5jKm6XO9D', NULL),
(180, 'Koike Ryunosuke', 'vqnVbvELL4', NULL),
(181, 'KS. Đỗ Mạnh Dũng', 'AjE1ZTG7JB', NULL),
(182, 'KS. Thái Hà - Đặng Mai', '9aC2wJoicM', NULL),
(183, 'Ks. Thành Đông - Thanh Hải (biên soạn)', 'nMVffRAcD9', NULL),
(184, 'Kuroyanagi Tetsuko', 'HNjrNmzfIq', NULL),
(185, 'L.G.Alexander', 'KA3upWwfo0', NULL),
(186, 'Lâm Xuân Nguyệt', 'zceEdGFyvY', NULL),
(187, 'Larry Berman', 'RaruJUNiRh', NULL),
(188, 'Laurence J.Brahm', 'rzN0DiTkm2', NULL),
(189, 'Lê Bích', 'EOgjNPR4Yz', NULL),
(190, 'Lê Đăng Khương', 'LvXvTItI44', NULL),
(191, 'Lê Đình Bì. M.A.', 'jExp9v5UeX', NULL),
(192, 'Lê Đình Nguyên', 'IvxYCKlG2h', NULL),
(193, 'Lê Hoài Phương', 'jkClU9GajF', NULL),
(194, 'Lê Huy Khoa - Lê Hữu Nhân', 'LYuUASK3Y3', NULL),
(195, 'Lê Huy Khoa', '56i5hMDN9z', NULL),
(196, 'Lê Ngọc Bích - Phạm Quang Huy', 'Ywv3l3F88q', NULL),
(197, 'Lê Phạm Thành - Nguyễn Thành Sơn', 'TW0N1b3DbK', NULL),
(198, 'Lê Thành Khôi', 'IuTgwN5h2R', NULL),
(199, 'Lê Thanh Nhật - Phạm Quang Hiển', '54F7W4uvIA', NULL),
(200, 'Linda Goodman', 'iPrmpCENMt', NULL),
(201, 'Linh Trang', '9MM5ZNkn7L', NULL),
(202, 'Linh', 'SFEDPWiZ2l', NULL),
(203, 'Lois Lowry', 'MrXN7pGmEA', NULL),
(204, 'Lois N.Magner', 'qLFjraq2w3', NULL),
(205, 'Lois P.Frankel', 'tM5EvjkYo6', NULL),
(206, 'Lư Tô Vỹ', 'YYWVmTQOV3', NULL),
(207, 'Luật sư Nguyễn Ngọc Bích', 'ppZD7zCA0Z', NULL),
(208, 'Lục Trần - Chu Thị Hạnh', 'DZihrsj5mi', NULL),
(209, 'Luis Sepulveda', 'Quyb1HmCqG', NULL),
(210, 'Lý Mẫn', 'PWtVh0QWPp', NULL),
(211, 'Lý Tùng', '7TaC9Z6REa', NULL),
(212, 'Lya Luft', 'DYxHOwM8bf', NULL),
(213, 'Mặc Bảo Phi Bảo', '45dVHFwWhL', NULL),
(214, 'Mai Hương - Vĩnh Thắng', 'eMQoJMrEV2', NULL),
(215, 'Makoto Shichida', 'b0wCnCeIBu', NULL),
(216, 'Malcolm Gladwell ', 'd02gpegphM', NULL),
(217, 'Mạnh Linh', 'NQXJUqagQ9', NULL),
(218, 'Márai Sándor', 'yKFJPG4GWv', NULL),
(219, 'Marcia Iwatate - Geeta Mehta - Geeta K. Mehta - Nacasa & Partners', '73XrOXU0zT', NULL),
(220, 'Margaret Sassé', 'BVEB9WaBrv', NULL),
(221, 'Mary Colson', 'Hxx4t5cNr3', NULL),
(222, 'Master Sridevi Tố Hải', '6DxQbPYr6O', NULL),
(223, 'Matt Crossick', 'qsoHP6dP5b', NULL),
(224, 'Mẹ Xu-Sim', 'VYmlDn9lSO', NULL),
(225, 'Meg Jay', 'SYkeBB3W6M', NULL),
(226, 'Mèo Mốc ', 'hELlczGXT6', NULL),
(227, 'Michael Bar-Zohar ', '034cq0mnX5', NULL),
(228, 'Michael Guillen. Ph.D.', 'LL39kdNGqb', NULL),
(229, 'Michael Gurian', '8W2ffDpMBh', NULL),
(230, 'Michael Hurley', 'UuZrR5egPo', NULL),
(231, 'Minh Cúc', 'xTgPoLDDqz', NULL),
(232, 'Minh Đạo', 'fTdVspsVTS', NULL),
(233, 'Minh Mẫn - Du Phong', 'jEtY5pykHZ', NULL),
(234, 'Minh Niệm', 'SSMLHH2w3r', NULL),
(235, 'Mitchell Stephens', 'AbD2FuWSKr', NULL),
(236, 'Mộc Diệp Tử', '0OmXWgJoKF', NULL),
(237, 'Mohammed bin Rashid Al Maktoum', '9BM5I922T1', NULL),
(238, 'Morris', '0NBmzQNSwi', NULL),
(239, 'Morris & Goscinny ', '5JvnS67IQc', NULL),
(240, 'N. Gregory Mankiw', '2oFlraGOXs', NULL),
(241, 'Nancy Dickmann', 'aoS80zc4w4', NULL),
(242, 'Naoko Takeuchi', 't5tXpk6cQl', NULL),
(243, 'Napoleon Hill', 'RwlUZp9rfg', NULL),
(244, 'Nghệ Sĩ Ái Vân', 'ndQbPsqFfc', NULL),
(245, 'Ngô Huy Hoà', 'RPVzWF9z9P', NULL),
(246, 'Ngô Kế Tựu', 'CU70FVkngs', NULL),
(247, 'Ngô Mục Thiên', 'xNTdekzJBQ', NULL),
(248, 'Ngô Quang Trì', 'lE2tiKLRQc', NULL),
(249, 'Ngọc Bích - Tường Thụy', 'Os0bvwGomL', NULL),
(250, 'Nguyễn Anh Đức', '5XWn3jt9T5', NULL),
(251, 'Nguyễn Anh Vinh', '2bRjnvKDu0', NULL),
(252, 'Nguyễn Bình Phương', 'usBeew8vg0', NULL),
(253, 'Nguyễn Chấn Hùng', 'tCO0tra1jo', NULL),
(254, 'Nguyễn Chu Phác', 'EKe5Kdjl3W', NULL),
(255, 'Nguyễn Đăng Khoa', 'h8RTkUVo37', NULL),
(256, 'Nguyễn Danh Vàn', 'QG2u26JKeY', NULL),
(257, 'Nguyễn Đức Dân', 'XhkwleuX4z', NULL),
(258, 'Nguyễn Đức Hiếu (biên soạn)', 'N5ydoj4nqs', NULL),
(259, 'Nguyễn Hoàng Bảo', 'xl0865rXY7', NULL),
(260, 'Nguyễn Hữu Bắc', '7iNbJovco0', NULL),
(261, 'Nguyễn Hữu Biển', 'pWryREqRvP', NULL),
(262, 'Nguyễn Hữu Đức', 'hVvTaBD112', NULL),
(263, 'Nguyễn Hữu Hưng (chủ biên)', 'blCC1jThae', NULL),
(264, 'Nguyễn Khắc Khoái', 'qWglSPYc7f', NULL),
(265, 'Nguyễn Khánh Dư ', '5iMSBEHuuF', NULL),
(266, 'Nguyễn Kim Dân', 'vdDnE5iHbt', NULL),
(267, 'Nguyễn Mạnh Hưởng (chủ biên) - Nguyễn Văn Ninh', 'asEI3E6DzE', NULL),
(268, 'Nguyễn Minh Thảo', 'iZmJxnSDtV', NULL),
(269, 'Nguyễn Ngọc Duy Trâm', 'PzAWox5vSB', NULL),
(270, 'Nguyên Ngọc', 'fax9UIQkA7', NULL),
(271, 'Nguyễn Nhật Ánh', 'VlD1bn9EmT', NULL),
(272, 'Nguyễn Phương Mai', 'SudvSbLHbg', NULL),
(273, 'Nguyễn Quỳnh', 'mSZljQh52G', NULL),
(274, 'Nguyễn Sử', 'tm0TaE7oae', NULL),
(275, 'Nguyễn Thanh Tuyên (Chủ biên)', 'mogatsKxaf', NULL),
(276, 'Nguyễn Thị Bích Phương (tuyển dịch)', '5Mpuh0n3ME', NULL),
(277, 'Nguyễn Thị Diệu Thảo', 'KDXRGTvsQi', NULL),
(278, 'Nguyễn Thị Hồng', 'TJnYyBLFk1', NULL),
(279, 'Nguyễn Thị Lệ Mỹ - Dương Hương', 'HKqzCFONpO', NULL),
(280, 'Nguyễn Thị Thu Hằng', 'snIBcgDXWJ', NULL),
(281, 'Nguyễn Thị Thu Hiền', 'J0o9zRVeGw', NULL),
(282, 'Nguyễn Tôn Nhan - Phú Văn Hẳn', 'Xbi0HGIDLl', NULL),
(283, 'Nguyễn Tường Bách', '4lf1v6SVqt', NULL),
(284, 'Nguyễn Văn Hai', 'rGGaow63KY', NULL),
(285, 'Nguyễn Văn Khỏa (biên dịch)', 'vGsHiUnjdN', NULL),
(286, 'Nguyễn Văn Trung', 'ihJyq5diA0', NULL),
(287, 'Nguyễn Văn Tuấn ', 'fuXVVTToRC', NULL),
(288, 'Nhà báo Hàn Ni', 'bhlYL9qivI', NULL),
(289, 'Nhạc Sĩ Hoài An', 'MTAB2TkDjv', NULL),
(290, 'Nhân Văn Group', 'bU5IZD0guI', NULL),
(291, 'Nhiều Tác Giả', 'HbfrtAeZgR', NULL),
(292, 'Nhóm biên soạn Thuận Việt', 'm7QttoTn0C', NULL),
(293, 'Nhóm Chuyện Của Nghề', 'nXT0ArmTAw', NULL),
(294, 'Nhóm Ezpsychology', 'MHHHj7eFPg', NULL),
(295, 'Nhóm Trí Thức Việt', 'aY3caNFRHw', NULL),
(296, 'Niall Ferguson', 'TCvG6qCDED', NULL),
(297, 'Niccolo Machiavelli', 'pcV2R96Mxo', NULL),
(298, 'Nick Arnold', 'zU4C79ZXlw', NULL),
(299, 'Nick Hunter', 'kPm1sGyOQH', NULL),
(300, 'Nick Vujicic', 'YAfKvMrXGV', NULL),
(301, 'Nishi Katsuzo', 'Ln43yycaDn', NULL),
(302, 'NXB Triết Giang', 'Aa8aZyQiij', NULL),
(303, 'One & Yusuke Murata', 'Tuum6rwHIu', NULL),
(304, 'ONO Eriko', 'Ain9PDcCqW', NULL),
(305, 'Osho', 'AfCnsIwcug', NULL),
(306, 'Pam Grout', '7ZuFI9PAxr', NULL),
(307, 'Patrick Modiano & Sempé', 'pCrhq8Q3nv', NULL),
(308, 'Paula Hawkins', 'DK0WSugD5Z', NULL),
(309, 'Paulo Coelho ', '1C4lzOuJ1F', NULL),
(310, 'Peter Kelder', '5RUDiq2wZm', NULL),
(311, 'PGS. TS. Đặng Hữu Toàn', 'WDkN3IWDuy', NULL),
(312, 'Phạm Công Luận', 'uWcvCpqfYM', NULL),
(313, 'Phạm Hoài Huấn (chủ biên)', 'cwthQIc4JW', NULL),
(314, 'Phạm Hữu Cường', 'FKHc3i2PI0', NULL),
(315, 'Phạm Minh Trung', 'JO2bof3V7M', NULL),
(316, 'Phạm Quang Hiển - Phạm Phương Hoa', 'AZDVwyhBxC', NULL),
(317, 'Phạm Quang Hiển - Phạm Quang Huy', 'ydNEMB8r62', NULL),
(318, 'Phạm Quang Huy - Lê Cảnh Trung', 'TW6VTF24HZ', NULL),
(319, 'Phạm Quang Huy - Nguyễn Duy Ngọc', 'JZ7zQJJZLo', NULL),
(320, 'Phạm Quang Huy - Nguyễn Trọng Hiếu', '9lnr1jsM0C', NULL),
(321, 'Phạm Quang Huy - Phạm Phương Hoa', 'hVcefb41n7', NULL),
(322, 'Phạm Quang Huy - Trần Tường Thụy', 'pob08E64L1', NULL),
(323, 'Phạm Quang Huy', 'KeXukNy5c6', NULL),
(324, 'Phạm Thế Long (chủ biên)', 'vFBQfpCN1Q', NULL),
(325, 'Phạm Văn Đông', 'yNCVhuo0QO', NULL),
(326, 'Phạm Vũ Ngọc Nga', 'Vz7qPVJg1A', NULL),
(327, 'Phan Huy Chú ', 'zLUcWhhj4D', NULL),
(328, 'Phan Thị Hồ Điệp', 'P3EKiNUXVn', NULL),
(329, 'Pháp Sư Thích Hải Đào', 'OCiIQkwDfQ', NULL),
(330, 'Philippe M.F.Peycam', 'wsSB9qgCtL', NULL),
(331, 'Phoenix Ho', 'L0kp7ugTda', NULL),
(332, 'Phương Hoa - Quang Hiển', 'iLXRTvdFO1', NULL),
(333, 'Quỳnh Thy', '3ojiCDS0J0', NULL),
(334, 'Ralph Leighton', 'z6JKGIodag', NULL),
(335, 'Reki Kawahara', 'qcoeUz54XU', NULL),
(336, 'Richard Branson', 'xYpv71D3Zo', NULL),
(337, 'Richard H. Thaler', 's5dBSH5LDJ', NULL),
(338, 'Richard Wiseman ', 'XWkQAhksbO', NULL),
(339, 'Rob Eastaway', 'Ub8Bi3oUeN', NULL),
(340, 'Robert Ashton', 'uKdod01XPk', NULL),
(341, 'Robert Fulghum', 'OLaUdClYnf', NULL),
(342, 'Robert Greene', 'p7HCDnCTOh', NULL),
(343, 'Robert T. Kiyosaki', '7LN9ipwlO8', NULL),
(344, 'Robin Sharma ', 'A1pchbM27a', NULL),
(345, 'Rod Campbell', 'NgbyvEx8Ey', NULL),
(346, 'Ron Bracey ', '2pjti1WY6h', NULL),
(347, 'Rosie Nguyễn', 'qMSWj7089Q', NULL),
(348, 'Sara Imas', 'BdJDUGPAI7', NULL),
(349, 'Sara', 'QuyRzYSKYH', NULL),
(350, 'Sarah Delmege', 'h6jGN7NNO2', NULL),
(351, 'Seith M. Siegel', 'kxVSe9k1qg', NULL),
(352, 'Seth Godin', '72QqERp3co', NULL),
(353, 'Shinkai Makoto', 'MXrbSFVcXX', NULL),
(354, 'Shiv Khera', 'u3BKDQ9yrR', NULL),
(355, 'Simon Singh ', 'tpytzgNKot', NULL),
(356, 'Som Sujeera', '5i09z5v7A2', NULL),
(357, 'Sơn Nam', 'Lglc4spYVr', NULL),
(358, 'Song Ji Hye (Daria Song)', 'CwEkKSTuRx', NULL),
(359, 'Sophie Mas - Anne Berest - Audrey Diwan - Caroline de Maigret', 'MwSHE3ADwz', NULL),
(360, 'Stephen R Covey', 'EDXe2DsQih', NULL),
(361, 'Steven D.Levitt - Stephen J. Dubner', 'eDzhgrvR9D', NULL),
(362, 'Steven K. Scott ', 'irLW9ZsiTe', NULL),
(363, 'Sugahara Yuko', 'rl3BTbLku0', NULL),
(364, 'Susan Curtis - Pat Thomas - Dragana Vilinac', '8An0xRvFbW', NULL),
(365, 'Susan L. Shirk', '0fPCP7TKbE', NULL),
(366, 'Swami Vishnu Devananda', 'i147dXwijF', NULL),
(367, 'Tạ Chí Đại Trường', 'E3HfgW9BwA', NULL),
(368, 'Tabata Seiichi Nobe Akiko & Shizawa Sayoko', 'ITCQFVLJaH', NULL),
(369, 'Donald J.Trump', 'bEwtxux91a', NULL),
(370, 'Hạ Vũ', '55wULk0RZ8', NULL),
(371, 'Takano Ichigo', 'QiusFa0NfU', NULL),
(372, 'Tammy Strobel', 'g1s36TDfu5', NULL),
(373, 'Tanith Carey', 'Wfh65xM8lx', NULL),
(374, 'Trần Thanh Hà', 'xGl3z7tw7L', NULL),
(375, 'Thanh Huyền', 'S5CXbaabvH', NULL),
(376, 'Thảo Xù', 'ABdTz6e1Vv', NULL),
(377, 'The Sakura', 'VFZBjRp3YS', NULL),
(378, 'The Windy', 'QXSkjp892x', NULL),
(379, 'Thiên Ân', 'snqsGqfMKy', NULL),
(380, 'Thiên Kim', '2DaU5s1fbd', NULL),
(381, 'Thiền sư Philip Kapleau', '44z16xzk4G', NULL),
(382, 'Thiều Chửu', '49rfG0ZE2Q', NULL),
(383, 'Thịnh Nam ', 'BaVp4xZ1J4', NULL),
(384, 'Thôi Hiểu Lệ', 'XoUM2y5Qqf', NULL),
(385, 'Thomas Cathcart & Daniel Klein', 'gGcnqi4DIc', NULL),
(386, 'Thomas Harris', 'CQfMDaZzzw', NULL),
(387, 'Ths. Đỗ Đức Trí', 'MD0oJurXA7', NULL),
(388, 'Ths. Trần Thị Hoa', 'pKwTUjZsil', NULL),
(389, 'Thu Giang - Nguyễn Duy Cần', 'zx8yUVDJLq', NULL),
(390, 'Thu Hà', 'IltXWso8eB', NULL),
(391, 'Thủy Kiwi - Trà My', 'UPuaQXOm4n', NULL),
(392, 'Thùy Minh', 'CRBCcSZUcl', NULL),
(393, 'Tiến sĩ E. Nugroho DVM', 'BZQUyOmf9O', NULL),
(394, 'Tim Severin', 'GZXEhgXWAS', NULL),
(395, 'Timothy Ferriss', 'f7jOuJklsE', NULL),
(396, 'Tina Seelig', '6ro3w6nIg2', NULL),
(397, 'Tôn Nữ Thị Ninh', 'hyKBuUhuBb', NULL),
(398, 'Tôn Thất Nguyễn Thiêm', 'H5WUUl4RjG', NULL),
(399, 'Tòng Văn Sinh', 'KyVWYOy38Y', NULL),
(400, 'Tony Buổi Sáng', '29w6lt0oPU', NULL),
(401, 'Tony Buzan', '4YRbV4FHzg', NULL),
(402, 'Tony & Suzanne Mace', 'GfQcxJHY6m', NULL),
(403, 'Toyota Kazuhiko', '80RrW9qnH7', NULL),
(404, 'Trác Nhã', 'Crc6b6A0It', NULL),
(405, 'Trạch Quế Vinh', 'XGQzK99IAd', NULL),
(406, 'Trần Công Diêu', 'd5fGb2gYXn', NULL),
(407, 'Trần Đăng Khoa', 'yUFHWloTkP', NULL),
(408, 'Trần Du', 'RF75Vd47Zd', NULL),
(409, 'Trần Hoài Phương', 'q91r2Aqiiw', NULL),
(410, 'Trần Mạnh Tường', 'TU5BPQDUea', NULL),
(411, 'Trần Nhật Vy', 'pM6imh2rNZ', NULL),
(412, 'Trần Quang Đức', 'i17ojSI1fv', NULL),
(413, 'Trần Thị Hà Giang - Nguyễn Thị Hạnh', 'zmsMlIqXav', NULL),
(414, 'Trần Thị Huyên Thảo ', 'JuRjUSF93G', NULL),
(415, 'Trần Thị Thanh Liêm', 'wc7R2d3oYY', NULL),
(416, 'Trần Thị Thùy Trang', 'zL1wCYSOPB', NULL),
(417, 'Trần Tường Thụy - Phạm Phương Hoa', 'gCn8ErwGhX', NULL),
(418, 'Trần Tường Thụy - Phạm Quang Hiển', 'iFDwpNGGZ2', NULL),
(419, 'Trần Văn Oai - Phạm Hồng Vương', 'NkNhAnsypt', NULL),
(420, 'Trịnh Bình', 'suyvkP5NMN', NULL),
(421, 'Trình Chí Lương', 'e819nQvxed', NULL),
(422, 'Trịnh Ngọc Minh', 'FK8T3kUv00', NULL),
(423, 'Trịnh Văn Quỳnh', 'WY1hvNFr18', NULL),
(424, 'Trịnh Xuân Thuận', 'U2KSaa1EvQ', NULL),
(425, 'Trương Minh Trí - Phạm Quang Huy', 'IeKhxWxfD1', NULL),
(426, 'TS - Bác Sĩ Nguyễn Lan Hải', '7AQSI48HhI', NULL),
(427, 'TS. Huỳnh Văn Tòng', 'i7omoZ8hRt', NULL),
(428, 'TS Michael Newton', 'tSgavDdnbP', NULL),
(429, 'TS. Phan Quốc Việt', 'gvvYrWCRPm', NULL),
(430, 'TS. Wendy Mogel ', '5AOP6g3Clf', NULL),
(431, 'Tsutsui Yoriko - Hayashi Akiko', 'srakuUwnPo', NULL),
(432, 'Tsutsumi Chiharu', 'WrVd1I4l5f', NULL),
(433, 'Từ Thành Bắc', '7WQ4NWSIt7', NULL),
(434, 'Tuệ Nghi', 'Ts6vlt189R', NULL),
(435, 'Uyên Bùi - BS. Trí Đoàn', 'FUNXMHDNpI', NULL),
(436, 'Vân Trang (biên soạn)', 'yjjS8h8h04', NULL),
(437, 'Venio Tachibana', '1QHOjhW8uD', NULL),
(438, 'Viết Chi - Lâm Trinh (Sưu tầm)', 'Ta3CLA3FjY', NULL),
(439, 'Việt Chương - KS. Nguyễn Việt Thái', 'MNfcPMsDBm', NULL),
(440, 'Việt Chương - Lâm Thị Mỹ Hương', 'tUN3FZ9G0M', NULL),
(441, 'Việt Chương - Nguyễn Sô', '6EPu0BHQvC', NULL),
(442, 'Việt Chương - Nguyễn Việt Tiến', 'Z9KX7FDO2t', NULL),
(443, 'Việt Chương - Phúc Quyên', 'oL2wmctwwM', NULL),
(444, 'Việt Chương', 'PIN6pC1BX7', NULL),
(445, 'Việt Phương - Thái Hà', 'oYmx60lwMu', NULL),
(446, 'Việt Thư', 'pe566aeNdW', NULL),
(447, 'Vĩnh Sính', 'tCpaPqGn6W', NULL),
(448, 'Violeta Babíc', 'ubvkMVVCyP', NULL),
(449, 'VL.COMP ', 'UYBnCj1j8l', NULL),
(450, 'Vladimir Nabokov', 'dYLRzqP9bM', NULL),
(451, 'VL - Comp', 'g6IWDuC0bh', NULL),
(452, 'Vũ Thị Mai Phương', 'AniCErKqj3', NULL),
(453, 'Vũ Tiến Cường', 'eqRX6ALgc0', NULL),
(454, 'Vương Đăng Phong', '69u4H1jBS1', NULL),
(455, 'Vương Nguy (chủ biên)', 'Z8tXZpwqrq', NULL),
(456, 'Vương Quyên', 'mqi75PrJ9f', NULL),
(457, 'Vương Trung Hiếu', '7MU1kQTCwI', NULL),
(458, 'WaterPC', '9kOgyDS5b6', NULL),
(459, 'Werner M. Busch', 'ULajoqV0Zu', NULL),
(460, 'William Ury', 'WpOhrHlmsc', NULL),
(461, 'Williams', 's0IW2XFAeM', NULL),
(462, 'Woo Bo Hyun', 'J2QsSQxlL5', NULL),
(463, 'Xuân Tùng', 'iqkzrJFv3F', NULL),
(464, 'Yasushi Kitagawa', 'wSo281c1Ej', NULL),
(465, 'Yellow Tanabe', 'TVWHtPAqWr', NULL),
(466, 'Yukito Ayatsuji', 'ngnMaS3fV1', NULL),
(467, 'Scott Cochrane', 'QW8HW4N5Uo', NULL),
(468, 'Kim Zoller - Kerry Preston', 'wMWQDRAAfZ', NULL),
(469, 'Sandra Fox', 'ulxmDZwaZM', NULL),
(470, 'Young Learners Practice Tests', 'DVJcrTto0P', NULL),
(471, 'Emily Bronte', 'ulfJk3ngT9', NULL),
(472, 'John Gray - Barbara Annis', 'mQLujApTie', NULL),
(473, 'Jessica Greenwell - Kimberley Scott', 'Adek0WKZ2T', NULL),
(474, 'Malcolm Gladwell', '57oLpg2Jb4', NULL),
(475, 'Susan Coolidge', 'wPHuuUP3fs', NULL),
(476, 'Haruki Murakami', 'fJO2xPjCNf', NULL),
(477, 'Jill O Sullivan - Joan Kang Shin', '3416CHulyG', NULL),
(478, 'Harper Lee', 'IdErx6VKdg', NULL),
(479, 'Collins Maples', 'fVfRm8gUb8', NULL),
(480, 'Tim Collins - Mary Maples', 'WTFiNzPFmF', NULL),
(481, 'Jerome K. Jerome', 'aM2HD0Cmlp', NULL),
(482, 'Nicholas Sparks', 'z2CdMOWY1K', NULL),
(483, 'Robert Louis Stevenson - Dr Tim Middleton - Dr Keith Carabine', 'yGjyDsbADI', NULL),
(484, 'Wes Moore', '2Rckyhh48r', NULL),
(485, 'Katherine Applegate - Patricia Castelao', 'VF7z0xi1Vk', NULL),
(486, 'Khaled Hosseini', 'CDlP0ct8sf', NULL),
(487, 'Suzanne Collins', 'W4dfJQg2kI', NULL),
(488, 'Victor Hugo', 'meAnuhbOeG', NULL),
(489, 'Sir Arthur Conan Doyle', 'KKvVJHZZIn', NULL),
(490, 'Adrian Tinniswood', 'iWALrP5E1N', NULL),
(491, 'E. Nesbit', '3TpY6uJ2B8', NULL),
(492, 'Beverly Harzog', 'Vxycg4JcM5', NULL),
(493, 'Prof Steve Peters', '6s3l0P1UmS', NULL),
(494, 'Paulo Coelho', '9NWARyYE1M', NULL),
(495, 'Karen Blumenthal', 'QmfVIjr5IW', NULL),
(496, 'William Shakespeare', 'uncpOLpLDv', NULL),
(497, 'Tim Falla - Paul A Davies', 'JcTMq4mqv8', NULL),
(498, 'N/A', 'JDFgq9dJLV', NULL),
(499, 'Ken Wilson - Mike Boyle', '16DQd5jA0n', NULL),
(500, 'Heather Amery', 'nzSh71fY2g', NULL),
(501, 'David Bohlke', 'aFWTUS6LCV', NULL),
(502, 'Jane Austen', 'l5Wu87ULFA', NULL),
(503, 'Steve Rohr - Shirley Impellizzeri', 'pMcadwmM9f', NULL),
(504, 'Ben Jealous - Trabian Shorters - Russell Simmons', 'j6htrMy2ej', NULL),
(505, 'Danielle Steel', '8xJ5wMCvH4', NULL),
(506, 'Eleanor H. Porter', '1Ll2ZiDDpX', NULL),
(507, 'Jayme Adelson-Goldstein', 'okuhyRcHEK', NULL),
(508, 'Jon Hird', '0xtjk3ZaTP', NULL),
(509, 'John Eastwood', 'J49mJVl2T9', NULL),
(510, 'Kate Cory-Wright', 'Ot9XAMHfrm', NULL),
(511, 'Nguyễn Ngọc Thuần', 'cTSQX8dKXk', NULL),
(512, '111111111111111', '1212121212112', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` tinyint(4) NOT NULL,
  `order` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`, `order`) VALUES
(1, 'Sách Tiếng Việt ', 0, 1),
(2, ' Sách Tiếng Anh', 0, 2),
(3, ' Sách Văn Học', 1, 1),
(4, 'Sách Thiếu Nhi ', 1, 2),
(5, 'Sách Kỹ Năng - Sống Đẹp', 1, 3),
(6, 'Sách Kinh Tế', 1, 4),
(7, 'Sách Nuôi Dạy Con', 1, 5),
(8, 'Sách Tham Khảo', 1, 6),
(9, 'Sách Giáo Khoa', 1, 7),
(10, 'Sách Học Ngoại Ngữ', 1, 8),
(11, 'Từ Điển', 1, 9),
(12, 'Truyện Tranh, Manga, Comic', 1, 10),
(13, 'Giáo Trình Đại Học - Cao Đẳng', 1, 11),
(14, 'Sách Kiến Thức Tổng Hợp', 1, 12),
(15, 'Sách Khoa Học - Kỹ Thuật', 1, 13),
(16, 'Sách Văn Hoá - Địa Lý - Du Lịch', 1, 14),
(17, 'Sách Tôn Giáo - Tâm Linh', 1, 15),
(18, 'Sách Chính Trị - Pháp Lý', 1, 16),
(19, 'Sách Nông - Lâm - Ngư Nghiệp', 1, 17),
(20, 'Sách Công Nghệ Thông Tin', 1, 18),
(21, 'Sách Y Học', 1, 19),
(22, 'Tạp Chí - Catalogue', 1, 20),
(23, 'Sách Thường Thức - Đời Sống', 1, 21),
(24, 'Sách Tâm lý - Giới tính', 1, 22),
(25, 'Foreign Language Learning', 2, 1),
(26, 'Fiction - Literature', 2, 2),
(27, 'Children''s books', 2, 3),
(28, 'Teens', 2, 4),
(29, 'Memoirs - Biographies', 2, 5),
(30, 'How-to - Self help', 2, 6),
(31, 'Economics', 2, 7),
(32, 'Awarded books', 2, 8),
(33, 'Nature - Humanities', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_info` text COLLATE utf8mb4_unicode_ci,
  `company_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_info`, `company_image`) VALUES
(3, 'hai', 'sdadsdfsdfs', NULL),
(4, 'hai', 'sdadsdfsdfsdfsfsfds', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2017_03_05_164701_add_colums_into_user_table', 1),
(44, '2017_03_06_105226_create_categories_table', 1),
(45, '2017_03_08_193853_create_authors_table', 1),
(46, '2017_03_08_193908_create_companies_table', 1),
(47, '2017_03_09_141230_create_slides_table', 2),
(48, '2017_03_09_141246_create_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, '#ád', 'ád', 'dá', '2017-03-09 09:58:09', '2017-03-09 09:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `order` smallint(6) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_image`, `link`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tuong.jpg', '#', 1, 1, '2017-03-09 09:17:19', '2017-03-09 09:17:19'),
(2, 'hang.jpg', '#', 1, 1, '2017-03-09 09:29:26', '2017-03-09 09:29:26'),
(3, 'quang.jpg', '#', 1, 0, '2017-03-09 09:29:46', '2017-03-09 09:29:46'),
(4, 'thoai.jpg', '#', 4, 0, '2017-03-09 09:30:39', '2017-03-09 09:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` smallint(6) NOT NULL DEFAULT '0' COMMENT '0:customer, 1:mod, 2:admin',
  `block` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'true:block',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'true:delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `level`, `block`, `deleted`) VALUES
(1, 'uEowW5xBRj', 'buihai2603@gmail.com', '$2y$10$8XjRLBwlEnxeGmkoTrx43OELsjIgjLBIRi1gZ2uwlNhwjkXEMh4xy', NULL, '2017-03-08 22:57:14', NULL, 1664872279, 'UD4AAFN3EZhà nội', 2, 0, 0),
(2, 'xELABGgN5K', 'mod@gmail.com', '$2y$10$usVfXZ2hf6ieC/K8Q0rHR.I/bOEVknnYgi9hK8tUGFZYNYd9YHtQ2', NULL, '2017-03-08 22:57:14', NULL, 1664872279, 'xAW97CY3adhà nội', 1, 0, 0),
(3, 'tCqwCGbJAH', 'member@gmail.com', '$2y$10$etGZ7ehwSVt8iiaOkrapcO/cINeh3UvST0ChzP1sL008rrkXrjQva', NULL, '2017-03-08 22:57:14', NULL, 1664872279, 'stUXS8ouL5hà nội', 0, 0, 0),
(4, 'kXUTICjQ58', 'member1@gmail.com', '$2y$10$CGxLwzDjm2h3zE.hlqhPdOqb2hbg5MJ6RiLGdJC666Y1zPaWHgfie', NULL, '2017-03-08 22:57:14', NULL, 1664872279, 'B2UVRbPboAhà nội', 0, 0, 0),
(5, '4HqaXTpe42', 'member2@gmail.com', '$2y$10$QZLQ4SHFMQGnwB4zn.lM2.sYVEPtQ4jhAtgsirkaIxXjOOssjj55G', NULL, '2017-03-08 22:57:14', NULL, 1664872279, 'hPFNMg6BSlhà nội', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_name_index` (`category_name`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

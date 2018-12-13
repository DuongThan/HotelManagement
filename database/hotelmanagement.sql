-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2018 lúc 10:16 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotelmanagement`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`articleId`, `title`, `description`, `content`) VALUES
(1, 'Bài viết giới thiệu', '<p>Kh&aacute;ch sạn,resort đang trở th&agrave;nh một xu hướng kinh doanh hot nhất hiện nay. &nbsp;Điểm qua một v&agrave;i th&agrave;nh phố lớn, c&aacute;c kh&aacute;ch sạn, nh&agrave; nghỉ mọc l&ecirc;n san s&aacute;t. K&eacute;o theo tr&agrave;o lưu đ&oacute;, c&aacute;c c&ocirc;ng việc li&ecirc;n quan đến kh&aacute;ch sạn đang trở th&agrave;nh một thị trường tiềm năng, trong đ&oacute; lễ t&acirc;n kh&aacute;ch sạn được coi l&agrave; c&ocirc;ng việc nhiều hứa hẹn nhất. Tuy nhi&ecirc;n để trở th&agrave;nh một lễ t&acirc;n kh&aacute;ch sạn chuy&ecirc;n nghiệp, bạn cần g&igrave;? Đ&acirc;y&nbsp;l&agrave; thắc mắc chung của hầu hết c&aacute;c nh&acirc;n vi&ecirc;n v&agrave; ứng vi&ecirc;n muốn theo đuổi nghề lễ t&acirc;n kh&aacute;ch sạn&nbsp;hiện nay</p>', '<p><span style=\"color:#0000ff\"><strong>T&igrave;m kiếm c&ocirc;ng việc lễ t&acirc;n trong một kh&aacute;ch sạn tốt</strong></span></p>\r\n\r\n<p>Một kh&aacute;ch sạn tốt ở đ&acirc;y kh&ocirc;ng nhất thiết phải l&agrave; những kh&aacute;ch sạn quy m&ocirc; lớn 4, 5 sao m&agrave; kh&aacute;ch sạn đ&oacute; phải &ldquo;như l&agrave; nh&agrave;&rdquo;, tức l&agrave;&nbsp;phải tạo cho nh&acirc;n vi&ecirc;n một m&ocirc;i trường l&agrave;m việc thoải m&aacute;i, th&acirc;n thiện, h&ograve;a đồng v&agrave; c&ocirc;ng bằng, d&acirc;n chủ. Tại đ&acirc;y, bạn&nbsp;được tạo điều kiện tốt nhất để thực hiện nhiệm vụ c&ocirc;ng việc được giao; được cấp tr&ecirc;n v&agrave; đồng nghiệp đi trước tận t&igrave;nh chỉ dạy những kiến thức chuy&ecirc;n ng&agrave;nh, kỹ năng nghiệp vụ v&agrave; một số mẹo sử dụng trong c&ocirc;ng việc; được đ&aacute;nh gi&aacute; c&ocirc;ng t&acirc;m, đ&uacute;ng năng lực cống hiến; được thỏa thuận v&agrave; chi trả mức lương xứng đ&aacute;ng với khả năng v&agrave; hiệu quả c&ocirc;ng việc, đồng thời được x&eacute;t duyệt khen thưởng v&agrave; tăng lương theo định kỳ hoặc đột xuất nếu l&agrave;m tốt.</p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>Trang bị một số kiến thức nghiệp vụ về nghề lễ t&acirc;n</strong></span></h3>\r\n\r\n<p>Nghề lễ t&acirc;n kh&ocirc;ng phải l&agrave; nghề bắt buộc phải được đ&agrave;o tạo ch&iacute;nh quy qua trường lớp, hầu hết nh&acirc;n vi&ecirc;n lễ t&acirc;n mới đều sẽ được đ&agrave;o tạo lại từ đầu trong ng&agrave;y đầu ti&ecirc;n tiếp nhận c&ocirc;ng việc. Tuy nhi&ecirc;n, để tr&aacute;nh bỡ ngỡ v&agrave; tiếp thu nhanh y&ecirc;u cầu của Quản l&yacute; kh&aacute;ch sạn, bạn cần trang bị cho m&igrave;nh một số kỹ năng cần thiết trong nghề như:&nbsp;kỹ năng giao tiếp, phục vụ kh&aacute;ch h&agrave;ng, nắm bắt t&acirc;m l&yacute; kh&aacute;ch h&agrave;ng, kỹ năng xử l&yacute; t&igrave;nh huống<em>, &hellip;</em>&nbsp;Hầu hết c&aacute;c kỹ năng n&agrave;y đều được giảng dạy trong c&aacute;c kh&oacute;a nghiệp vụ lễ t&acirc;n&nbsp;ngắn hạn tại c&aacute;c trung t&acirc;m đ&agrave;o tạo uy t&iacute;n tr&ecirc;n cả nước.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://ezcloudhotel.com/wp-content/uploads/2018/06/nghệp-vụ.png\"><img alt=\"\" class=\"alignnone size-full wp-image-7708\" src=\"https://ezcloudhotel.com/wp-content/uploads/2018/06/nghệp-vụ.png\" style=\"height:393px; width:600px\" /></a></p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>Nắm r&otilde; v&agrave; hiểu được nhiệm vụ c&ocirc;ng việc lễ t&acirc;n</strong></span></h3>\r\n\r\n<p>Bất kể bạn l&agrave; nh&acirc;n vi&ecirc;n l&acirc;u năm nhiều kinh nghiệm hay nh&acirc;n vi&ecirc;n mới v&agrave;o nghề, muốn đ&aacute;p ứng tốt y&ecirc;u cầu c&ocirc;ng việc th&igrave; bắt buộc phải nắm v&agrave; hiểu r&otilde; nhiệm vụ c&ocirc;ng việc tại vị tr&iacute; đ&oacute;, vị tr&iacute; lễ t&acirc;n kh&aacute;ch sạn cũng kh&ocirc;ng ngoại lệ. Nhiệm vụ ch&iacute;nh của c&ocirc;ng việc n&agrave;y bao gồm:&nbsp;ch&agrave;o hỏi; l&agrave;m thủ tục check-in, check-out, thanh to&aacute;n, đổi tiền,&hellip; cho kh&aacute;ch; tiễn kh&aacute;ch. Ngo&agrave;i ra, nh&acirc;n vi&ecirc;n lễ t&acirc;n c&ograve;n phải&nbsp;trực điện thoại, b&aacute;n dịch vụ, hỗ trợ th&ocirc;ng tin, tiếp nhận v&agrave; xử l&yacute; mọi y&ecirc;u cầu/ ph&agrave;n n&agrave;n của kh&aacute;ch, &hellip;&nbsp;đảm bảo mang đến sự h&agrave;i l&ograve;ng cao nhất cho kh&aacute;ch h&agrave;ng về chất lượng phục vụ của kh&aacute;ch sạn.</p>\r\n\r\n<p><a href=\"https://ezcloudhotel.com/wp-content/uploads/2018/04/lễ-tân-1.jpg\"><img alt=\"\" class=\"aligncenter size-full wp-image-7301\" src=\"https://ezcloudhotel.com/wp-content/uploads/2018/04/lễ-tân-1.jpg\" style=\"height:400px; width:600px\" /></a></p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>Giao tiếp ngoại ngữ tr&ocirc;i chảy</strong></span></h3>\r\n\r\n<p>C&ocirc;ng việc lễ t&acirc;n phải thường xuy&ecirc;n tiếp x&uacute;c v&agrave; l&agrave;m việc với kh&aacute;ch h&agrave;ng l&agrave; người nước ngo&agrave;i. V&igrave; vậy, giao tiếp ngoại ngữ tr&ocirc;i chảy l&agrave; một trong những y&ecirc;u cầu bắt buộc khi tuyển dụng lễ t&acirc;n kh&aacute;ch sạn. Nh&acirc;n vi&ecirc;n lễ t&acirc;n giỏi phải&nbsp;th&agrave;nh thạo c&aacute;c kỹ năng nghe-n&oacute;i-đọc-viết khi thực hiện c&ocirc;ng việc, giao tiếp th&agrave;nh thạo tiếng Anh như người bản xứ, hiểu được văn h&oacute;a giao tiếp v&ugrave;ng miền của một số quốc gia đặc trưng; ngo&agrave;i ra, nh&acirc;n vi&ecirc;n lễ t&acirc;n l&agrave;m việc trong c&aacute;c kh&aacute;ch sạn 4, 5 sao y&ecirc;u cầu phải biết v&agrave; giao tiếp được th&ecirc;m một ngoại ngữ thứ 2.</p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>Th&agrave;nh thạo kỹ năng vi t&iacute;nh văn ph&ograve;ng v&agrave; phần mềm quản l&yacute; kh&aacute;ch sạn</strong></span></h3>\r\n\r\n<p>Y&ecirc;u cầu c&ocirc;ng việc đ&ograve;i hỏi nh&acirc;n vi&ecirc;n lễ t&acirc;n phải thao t&aacute;c với c&aacute;c phần mềm, chứng từ, bi&ecirc;n bản tr&ecirc;n m&aacute;y t&iacute;nh. V&igrave; vậy, một lễ t&acirc;n giỏi phải&nbsp;th&agrave;nh thạo c&aacute;c kỹ năng vi t&iacute;nh văn ph&ograve;ng, nhất l&agrave; world, excel outlook, access; hiểu r&otilde; v&agrave; thao t&aacute;c được phần mềm quản l&yacute; kh&aacute;ch sạn như <a href=\"https://ezcloudhotel.com/?utm_source=blog&amp;utm_medium=article&amp;utm_campaign=home&amp;utm_term=responsibility:Khanh&amp;utm_content=textlink:lam-nao-de-tro-thanh-mot-le-tan-khach-san-chuyen-nghiep\" rel=\"noopener\" target=\"_blank\"><strong><span style=\"color:#0000ff\">ezCloudhotel</span> </strong></a>&ndash; đ&acirc;y l&agrave; một phần mềm quản l&yacute; kh&aacute;ch sạn rất dễ sử dụng, tr&aacute;nh trường hợp thao t&aacute;c sai hoặc luống cuống g&acirc;y ấn tượng kh&ocirc;ng tốt đến kh&aacute;ch h&agrave;ng về chất lượng phục vụ tại kh&aacute;ch sạn.</p>\r\n\r\n<p><a href=\"https://ezcloudhotel.com/wp-content/uploads/2018/02/khách-quay-lại.jpg\"><img alt=\"\" class=\"aligncenter wp-image-5890\" src=\"https://ezcloudhotel.com/wp-content/uploads/2018/02/khách-quay-lại.jpg\" style=\"height:379px; width:612px\" /></a></p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>C&oacute; tinh thần học hỏi v&agrave; sự cầu tiến</strong></span></h3>\r\n\r\n<p>Bạn chỉ thực sự nỗ lực trong c&ocirc;ng việc v&agrave; c&oacute; cơ hội ph&aacute;t triển khi ch&iacute;nh bản th&acirc;n bạn lu&ocirc;n mong muốn m&igrave;nh ho&agrave;n thiện v&agrave; tốt hơn mỗi ng&agrave;y. H&atilde;y&nbsp;kh&ocirc;ng ngừng học hỏi kinh nghiệm v&agrave; kỹ năng li&ecirc;n quan đến c&ocirc;ng việc lễ t&acirc;n qua đồng nghiệp, cấp tr&ecirc;n; tự trau dồi vốn kiến thức v&agrave; hiểu biết của m&igrave;nh qua s&aacute;ch b&aacute;o, c&aacute;c kh&oacute;a học ngắn hạn, t&agrave;i liệu quốc tế,&hellip;&nbsp;Ngo&agrave;i ra, h&atilde;y cho mọi người thấy được sự cầu to&agrave;n, cầu tiến của bạn qua những h&agrave;nh động thực tế trong c&ocirc;ng việc, đừng chỉ dừng lại ở lời n&oacute;i. Hầu hết c&aacute;c kh&aacute;ch sạn đều đ&aacute;nh gi&aacute; cao những nh&acirc;n vi&ecirc;n lu&ocirc;n cố gắng đ&aacute;p ứng tốt hơn y&ecirc;u cầu c&ocirc;ng việc được giao; th&acirc;n thiện với kh&aacute;ch h&agrave;ng; h&ograve;a đồng với đồng nghiệp;&hellip; xứng đ&aacute;ng trở th&agrave;nh nh&acirc;n vi&ecirc;n lễ t&acirc;n giỏi.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://ezcloudhotel.com/wp-content/uploads/2018/03/tieng-anh-cho-le-tan-2.jpg\"><img alt=\"\" class=\"alignnone wp-image-5876\" src=\"https://ezcloudhotel.com/wp-content/uploads/2018/03/tieng-anh-cho-le-tan-2.jpg\" style=\"height:381px; width:573px\" /></a></p>\r\n\r\n<h3><span style=\"color:#0000ff\"><strong>Chủ động trong mọi t&igrave;nh huống</strong></span></h3>\r\n\r\n<p>C&ocirc;ng việc lễ t&acirc;n kh&ocirc;ng chỉ dừng lại ở việc&nbsp;sẵn s&agrave;ng v&agrave; chủ động trong tiếp nhận v&agrave; giải quyết tất cả c&aacute;c sự cố ph&aacute;t sinh li&ecirc;n quan đến kh&aacute;ch trong ca l&agrave;m việc; hỗ trợ đồng nghiệp v&agrave; c&aacute;c bộ phận kh&aacute;c phục vụ kh&aacute;ch h&agrave;ng tốt nhất;&hellip;&nbsp;m&agrave; lễ t&acirc;n c&ograve;n l&agrave; c&ocirc;ng việc của sự kh&ocirc;ng cố định, cả trong nhiệm vụ c&ocirc;ng việc v&agrave; trong ph&acirc;n chia ca k&iacute;p. Một nh&acirc;n vi&ecirc;n lễ t&acirc;n giỏi lu&ocirc;n&nbsp;chủ động trong việc tiếp nhận những nhiệm vụ c&ocirc;ng việc kh&ocirc;ng giới hạn; chủ động trong việc nhận ca v&agrave; chia ca (c&oacute; thể h&ocirc;m qua l&agrave;m ca ng&agrave;y, h&ocirc;m nay l&agrave;m ca đ&ecirc;m v&agrave; ng&agrave;y mai l&agrave;m ca g&atilde;y, chưa kể c&oacute; những l&uacute;c kh&aacute;ch đ&ocirc;ng phải tăng ca).</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; chia sẻ của <strong><em>ezCloudhotel&nbsp;</em></strong>về việc&nbsp;<strong><em>&ldquo;L&agrave;m thế n&agrave;o để trở th&agrave;nh nh&acirc;n vi&ecirc;n lễ t&acirc;n chuy&ecirc;n nghiệp?&rdquo;</em></strong>. Chỉ cần định h&igrave;nh được nhu cầu của bản th&acirc;n v&agrave; x&atilde; hội; hiểu r&otilde; t&iacute;nh chất c&ocirc;ng việc lễ t&acirc;n, trang bị đầy đủ c&aacute;c kiến thức chuy&ecirc;n m&ocirc;n v&agrave; kỹ năng nghiệp vụ,&hellip; l&agrave; bạn đ&atilde; đủ điều kiện để t&igrave;m kiếm v&agrave; theo đuổi nghề lễ t&acirc;n, nỗ lực hết m&igrave;nh để trở th&agrave;nh nh&acirc;n vi&ecirc;n lễ t&acirc;n giỏi, đẩy nhanh con đường thăng tiến của bản th&acirc;n trong ng&agrave;nh Kh&aacute;ch sạn &ndash; Nh&agrave; h&agrave;ng.</p>\r\n\r\n<h2 style=\"text-align:center\">&nbsp;</h2>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `bookingId` int(11) NOT NULL,
  `roomTypeId` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `adult` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `request` varchar(500) DEFAULT NULL,
  `dateBook` datetime NOT NULL,
  `totalMoney` float NOT NULL,
  `status` int(11) NOT NULL,
  `note` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`bookingId`, `roomTypeId`, `roomId`, `checkIn`, `checkOut`, `adult`, `fullName`, `email`, `phone`, `address`, `request`, `dateBook`, `totalMoney`, `status`, `note`) VALUES
(3, 16, 1, '2019-01-01', '2019-01-01', 1, '2019-1-1', '2019-1-1', '2019-1-1', '2019-1-1', '2019-1-1', '2018-12-13 00:00:00', 1, 3, 'sdf sdf sdf sdf'),
(4, 16, 4, '2018-12-13', '2018-12-14', 2, 's', 'd', 'd', 's', 's', '2018-12-13 00:00:00', 500000, 3, NULL),
(5, 15, 2, '2018-12-13', '2018-12-14', 2, 'ád', 'ád', 'ád', 'ád', 'ád', '2018-12-13 00:00:00', 500000, 3, NULL),
(6, 16, 0, '2018-12-13', '2018-12-14', 2, 'Duong Ngo', 'email@gmail.com', '0987654321', 'dia chi', NULL, '2018-12-13 00:00:00', 500000, 1, ''),
(7, 16, NULL, '2018-12-13', '2018-12-14', 2, 'ádf', 'sadf', 'sadf', 'sadf', NULL, '2018-12-13 00:00:00', 500000, 1, ''),
(8, 16, NULL, '2018-12-13', '2018-12-14', 2, 'sadf', 'ádf', 'sadf', '111', '111111', '2018-12-13 00:00:00', 500000, 1, ''),
(9, 16, NULL, '2018-12-13', '2018-12-14', 2, 'Ngo', 'email@gmail.com', 'sod ien thaoi', 'dia chi', 'yeu cau them', '2018-12-13 00:00:00', 1100000, 1, ''),
(10, 15, 2, '2018-12-13', '2018-12-14', 2, 'Ngo', 'email@gmail.com', 'sod ien thaoi', 'dia chi', 'yeu cau them', '2018-12-13 00:00:00', 1100000, 3, NULL),
(11, 16, NULL, '2018-12-13', '2018-12-14', 2, 'ư', 'ư', 'ư', 'ư', 'ư', '2018-12-13 00:00:00', 500000, 1, ''),
(12, 16, NULL, '2018-12-13', '2018-12-14', 2, 'f', 'f', 'ff', 'f', 'f', '2018-12-13 00:00:00', 500000, 1, ''),
(13, 16, NULL, '2018-12-13', '2018-12-14', 2, 'Ngo Xuan Duong', 'email@gmail.com', '0987654321', 'dia chi', 'yeuc au them', '2018-12-13 09:57:37', 1100000, 1, ''),
(14, 15, NULL, '2018-12-13', '2018-12-14', 2, 'Ngo Xuan Duong', 'email@gmail.com', '0987654321', 'dia chi', 'yeuc au them', '2018-12-13 09:57:37', 1100000, 1, ''),
(15, 16, NULL, '2018-12-13', '2018-12-14', 2, 'ádf', 'sadf', 'sadf', 'sadf', 'sadf', '2018-12-13 10:05:31', 500000, 1, ''),
(16, 16, NULL, '2018-12-13', '2018-12-14', 2, 'a', 'a', 'a', 'a', 'a', '2018-12-13 10:08:08', 1500000, 1, ''),
(17, 16, NULL, '2018-12-13', '2018-12-14', 2, 'a', 'a', 'a', 'a', 'a', '2018-12-13 10:08:08', 1500000, 1, ''),
(18, 16, NULL, '2018-12-13', '2018-12-14', 2, 'a', 'a', 'a', 'a', 'a', '2018-12-13 10:08:08', 1500000, 1, ''),
(19, 16, NULL, '2018-12-13', '2018-12-14', 2, 'f', 'f', 'f', 'f', 'f', '2018-12-13 10:09:03', 500000, 1, ''),
(20, 16, NULL, '2018-12-13', '2018-12-14', 2, 'f', 'f', 'f', 'f', 'f', '2018-12-13 10:09:03', 500000, 5, ''),
(21, 15, NULL, '2018-12-13', '2018-12-14', 2, 'ANonymous', 'q', 'q', 'q', 'q', '2018-12-13 10:14:10', 600000, 4, 'Khách đặt theo nhóm. Số lượng khách bằng số lượng khách trong đoàn'),
(22, 15, NULL, '2018-12-13', '2018-12-14', 2, 'ANonymous', 'q', 'q', 'q', 'q', '2018-12-13 10:14:10', 600000, 3, 'Khách đặt theo nhóm. Số lượng khách bằng số lượng khách trong đoàn'),
(23, 15, NULL, '2018-12-13', '2018-12-14', 2, 'ANonymous', 'q', 'q', 'q', 'q', '2018-12-13 10:14:10', 600000, 2, 'Khách đặt theo nhóm. Số lượng khách bằng số lượng khách trong đoàn'),
(24, 16, NULL, '2018-12-13', '2018-12-14', 2, 'ANonymous', 'q', 'q', 'q', 'q', '2018-12-13 10:14:10', 500000, 1, 'Khách đặt theo nhóm. Số lượng khách bằng số lượng khách trong đoàn'),
(25, 19, 3, '2018-12-13', '2018-12-13', 2, 'Tên khách', NULL, NULL, NULL, NULL, '2018-12-13 15:10:34', 0, 3, NULL),
(26, 15, 2, '2018-12-13', '2018-12-13', 2, 'Tên khách', NULL, NULL, NULL, NULL, '2018-12-13 15:28:25', 0, 3, NULL),
(27, 16, 1, '2018-12-13', '2018-12-14', 2, 'Ngo Xuan Duong', 'ngoxuanduong23@gmail.com', '0987654321', 'Ha Noi', 'check in sơm luc 7h', '2018-12-13 16:03:12', 500000, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `request` varchar(5000) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`contactId`, `fullName`, `phone`, `email`, `request`, `date`) VALUES
(8, 'Ngô Xuân Dương', '0987654321', 'email@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '2018-12-13 09:56:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `hotelId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `hotline` varchar(250) DEFAULT NULL,
  `fax` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `metaTitle` varchar(250) DEFAULT NULL,
  `metaDescription` varchar(250) DEFAULT NULL,
  `favicon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hotel`
--

INSERT INTO `hotel` (`hotelId`, `name`, `logo`, `tel`, `hotline`, `fax`, `email`, `address`, `location`, `youtube`, `metaTitle`, `metaDescription`, `favicon`) VALUES
(1, 'Nhóm 2 Hotel', '1544585333.logo.png', '0987654321', '0987654321', '1234567890', 'nhom2email@gmail.com', 'Hà Nội', NULL, NULL, NULL, NULL, '1544585333.logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `roomId` int(11) NOT NULL,
  `roomTypeId` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`roomId`, `roomTypeId`, `code`, `index`) VALUES
(1, 16, '1001', 6),
(2, 15, '1002', 1),
(3, 19, '1003', 4),
(4, 16, '2001', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roomtype`
--

CREATE TABLE `roomtype` (
  `roomTypeId` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `price` float NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roomtype`
--

INSERT INTO `roomtype` (`roomTypeId`, `title`, `image`, `description`, `price`, `index`) VALUES
(15, 'Deluxe Bacony Double', '1544515130.37883044_838706646335824_1961489702699663360_n.jpg', '<p><strong>Giường:&nbsp;</strong>One king<br />\r\n<strong>Khung cảnh:&nbsp;</strong>No view<br />\r\n<strong>K&iacute;ch thước ph&ograve;ng:&nbsp;</strong>23 s.q.m</p>', 600000, 2),
(16, 'Deluxe Bacony Twin', '1544515106.37838845_838706649669157_4450519861726019584_n.jpg', '<p><strong>Giường:&nbsp;</strong>One king<br />\r\n<strong>Khung cảnh:&nbsp;</strong>No view<br />\r\n<strong>K&iacute;ch thước ph&ograve;ng:&nbsp;</strong>22 s.q.m</p>', 500000, 1),
(19, 'Family Inter-conneting', '1544515174.37837562_838705796335909_5324287450078511104_n.jpg', '<p><strong>Giường:&nbsp;</strong>One king<br />\r\n<strong>Khung cảnh:&nbsp;</strong>No view<br />\r\n<strong>K&iacute;ch thước ph&ograve;ng:&nbsp;</strong>24 s.q.m</p>', 800000, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `slideShowId` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`slideShowId`, `image`, `index`) VALUES
(2, '1544528262.1811_hanquocTetKyHoi.jpg', 2),
(3, '1544527937.1811_NhatTet.jpg', 3),
(4, '1544528281.1811_DuXuanxuDai.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userName`, `password`, `email`, `status`) VALUES
('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', 1),
('staff', '12345678', 'admin2@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `roomTypeId` (`roomTypeId`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelId`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomId`),
  ADD KEY `roomTypeId` (`roomTypeId`);

--
-- Chỉ mục cho bảng `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`roomTypeId`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slideShowId`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `roomTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slideShowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2023 lúc 03:34 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vietseiko_`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(40) NOT NULL,
  `permission` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `img_blog` varchar(255) NOT NULL,
  `tieude_blog` text NOT NULL,
  `noidung_blog` text NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `img_blog`, `tieude_blog`, `noidung_blog`, `type_id`, `slug`, `created_at`, `updated_at`) VALUES
(10, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703057135ddd.jpg\"></figure>', 'Duyệt danh sách truyện theo thể loại', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị</p><h2><strong>Phiếu lý lịch tư pháp là gì? Nội dung gồm những gì?</strong></h2><p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án thì ghi “không có án tích”. Trường hợp người bị kết án chưa đủ điều kiện được xóa án tích thì ghi “có án tích”, tội danh, hình phạt chính, hình phạt bổ sung.</li><li>Đối với người được xoá án tích và thông tin về việc xoá án tích đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li><li>Đối với người được đại xá và thông tin về việc đại xá đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li></ul><p>– Thông tin về cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã:</p><ul><li>Đối với người không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi “không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã”.</li><li>Đối với người bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi chức vụ bị cấm đảm nhiệm, thời hạn không được thành lập, quản lý doanh nghiệp, hợp tác xã.</li></ul><p>Trường hợp cá nhân, cơ quan hoặc tổ chức không yêu cầu thì nội dung được quy định tại khoản này không ghi vào phiếu lý lịch tư pháp.</p>', 1, 'duyet-danh-sach-truyen-theo-the-loai', '2023-12-20', '2023-12-26 14:46:53'),
(9, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703601873anh-phai.png\"></figure>', 'cơ quan hoặc tổ chức được quy định tại khoản', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án th</li></ul>', 1, 'co-quan-hoac-to-chuc-duoc-quy-dinh-tai-khoan', '2023-12-20', '2023-12-26 14:44:35'),
(11, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703057135ddd.jpg\"></figure>', 'Backend có thể chỉ cần viết trên console', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị</p><h2><strong>Phiếu lý lịch tư pháp là gì? Nội dung gồm những gì?</strong></h2><p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án thì ghi “không có án tích”. Trường hợp người bị kết án chưa đủ điều kiện được xóa án tích thì ghi “có án tích”, tội danh, hình phạt chính, hình phạt bổ sung.</li><li>Đối với người được xoá án tích và thông tin về việc xoá án tích đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li><li>Đối với người được đại xá và thông tin về việc đại xá đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li></ul><p>– Thông tin về cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã:</p><ul><li>Đối với người không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi “không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã”.</li><li>Đối với người bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi chức vụ bị cấm đảm nhiệm, thời hạn không được thành lập, quản lý doanh nghiệp, hợp tác xã.</li></ul><p>Trường hợp cá nhân, cơ quan hoặc tổ chức không yêu cầu thì nội dung được quy định tại khoản này không ghi vào phiếu lý lịch tư pháp.</p>', 1, 'backend-co-the-chi-can-viet-tren-console', '2023-12-20', '2023-12-26 14:47:19'),
(17, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703600165anh trai.png\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng', '<p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án th</li></ul>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong', '2023-12-26', '2023-12-26 14:30:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cam_nang`
--

CREATE TABLE `cam_nang` (
  `id_blog` int(11) NOT NULL,
  `img_blog` varchar(255) NOT NULL,
  `tieude_blog` text NOT NULL,
  `noidung_blog` text NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cam_nang`
--

INSERT INTO `cam_nang` (`id_blog`, `img_blog`, `tieude_blog`, `noidung_blog`, `type_id`, `slug`, `created_at`, `updated_at`) VALUES
(9, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703601907anh-phai.png\"></figure>', 'cơ quan hoặc tổ chức được quy định tại khoản', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án th</li></ul>', 1, 'co-quan-hoac-to-chuc-duoc-quy-dinh-tai-khoan', '2023-12-20', '2023-12-26 14:45:09'),
(11, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703127709p2.jpg\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp', '<p>Thư ngỏ là thư dùng để yêu cầu, trình bày nội dung hoặc vấn đến nào đó như xin tài trợ, mời hợp tác, chào hàng,… Dù mục đích khác nhau nhưng các loại thư ngỏ này đều đại diện cho một tập thể, đơn vị,… mang tính chất công việc và dùng để đề xuất một vấn đề cụ thể.&nbsp;</p><p>Nội dung thư ngỏ thường ở dạng mở nhằm gửi đến nhiều đối tượng khác nhau. Người gửi thư sẽ giới thiệu sơ nét về thông tin cá nhân và các thông tin về công ty, sản phẩm/dịch vụ hoặc sự kiện sắp diễn ra.</p><h2><strong>Thế nào là một mẫu thư đẹp, chuyên nghiệp?</strong></h2><p>Tuy thư ngỏ không phải là văn bản hành chính nhưng mẫu thư ngỏ cần đảm bảo các yêu cầu sau đây:</p><ul><li>Nội dung thư ngỏ được viết ngắn gọn, súc tích và chia thành các câu ngắn.</li><li>Bố cục hợp lý: Lời chào – Giới thiệu người gửi thư – Nội dung thư ngỏ – Lời kêu gọi hành động ( hợp tác, xin tài trợ,…) – Kết thư.&nbsp;</li><li>Nội dung được phân bổ hợp lý, đúng trọng tâm và được chia thành nhiều đoạn.</li><li>Ngôn ngữ trang trọng, hấp dẫn.</li><li>Cách trình bày thư ngỏ có thể khác nhau nhưng cần phù hợp với nội dung.</li><li>Đưa ra dẫn chứng thuyết phục.&nbsp;</li></ul>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep', '2023-12-21', '2023-12-26 14:46:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `muc_luong` varchar(255) NOT NULL,
  `khu_vuc_hien_tai` varchar(255) NOT NULL,
  `khu_vuc_mong_muon` varchar(255) NOT NULL,
  `nganhnghe` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `muc_luong`, `khu_vuc_hien_tai`, `khu_vuc_mong_muon`, `nganhnghe`, `type_id`, `created_at`) VALUES
(56, 'teesst', 'khongtenzzz1111@gmail.com', '0533333334', '12', 'Thành phố Hà Nội', 'ewdsfd', '1', 1, '2023-12-25 01:30:35'),
(59, '1234', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Vĩnh Phúc', 'ewdsfd', '2', 1, '2023-12-25 02:57:57'),
(60, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 2, '2023-12-25 03:04:30'),
(61, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 2, '2023-12-25 03:04:30'),
(62, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 3, '2023-12-25 03:04:30'),
(63, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 3, '2023-12-25 03:04:30'),
(64, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 4, '2023-12-25 03:04:30'),
(65, 'r3435', 'test@gmail.com', '0333333333', 'ewqe', 'Tỉnh Lạng Sơn', 'ewdsfd', '7', 4, '2023-12-25 03:04:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cty`
--

CREATE TABLE `cty` (
  `id_cty` int(11) NOT NULL,
  `img_cty` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quymo` varchar(255) NOT NULL,
  `about_cty` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cty`
--

INSERT INTO `cty` (`id_cty`, `img_cty`, `name`, `quymo`, `about_cty`, `address`, `type_id`, `updated_at`) VALUES
(1, '', 'Không hiển thị Công ty', '', '', '', 1, '2023-12-18 02:46:42'),
(17, '<figure class=\"image\"><img src=\"../../images/logo-company/1703493445p1.jpg\"></figure>', 'KCN Trà Nóc 1, Phường Trà Nóc, Quận Bình Thủy, TP.Cần Thơ, Việt Nam', '50-100', '<p>CÔNG TY TNHH THƯƠNG MẠI - XÂY DỰNG QUANH ANH ANH hoạt động trong lĩnh vực xây dựng, sản xuất và thi công nội thất. Địa chỉ : 348 Nguyễn Thị Thập, P. Tân Quy, Quận 7, Thành phố Hồ Chí Minh</p>', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 1, '2023-12-25 08:37:27'),
(21, '<figure class=\"image\"><img src=\"../../images/logo-company/1703603391gggg.jpg\"></figure>', 'Công Ty TNHH Nnd Studio', '50-100', '', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 2, '2023-12-26 15:09:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id_gt` int(11) NOT NULL,
  `name_gt` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id_gt`, `name_gt`, `created_at`) VALUES
(1, 'Nam', '2023-09-12 07:31:40'),
(2, 'Nữ', '2023-09-12 07:31:40'),
(3, 'Không yêu cầu', '2023-12-18 02:23:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `job_code` varchar(255) NOT NULL,
  `id_nganhnghe` int(11) NOT NULL,
  `id_hinhthuc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_kinhnghiem` int(255) NOT NULL,
  `ngaycuoicung` date NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `mucluong` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `diachi_cuthe` varchar(300) NOT NULL,
  `mota` text DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `quyenloi` text DEFAULT NULL,
  `thongtin_khac` text NOT NULL,
  `id_trangthai` int(11) NOT NULL DEFAULT 1,
  `id_cty` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `slug`, `created_at`, `updated_at`) VALUES
(36, 'Nhân Viên Tư Vấn Kinh Doanh (Lương Cứng 16,8 Triệu + Hoa Hồng 10 - 30%) Triệu + Hoa Hồng 10 - 30%)', 'nhân viên', 'vn934', 4, 3, 3, 3, '2024-02-15', 3, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 0, 17, '20-30', '', '2023-12-17 02:38:42', '2023-12-26 07:30:43'),
(35, 'Nhân Viên Tư Vấn Kinh Doanh (Lương Cứng 16,8 Triệu + Hoa Hồng 10 - 30%)Triệu + Hoa Hồng 10 - 30%)', 'nhân viên', 'vn96546', 5, 1, 3, 4, '2024-01-29', 2, 'Thỏa thuận', 'Đồng Nai', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 17, '20-30', 'nhan-vien-tu-van-kinh-doanh-luong-cung-16-8-trieu-hoa-hong-10-30-trieu-hoa-hong-10-30', '2023-12-17 02:38:42', '2023-12-26 15:12:23'),
(38, 'Nhân Viên Tư Vấn Kinh Doanh ', 'nhân viên', 'vn5657', 5, 1, 3, 4, '2024-01-04', 2, '20-30 triệu', 'Hồ Chí Minh', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 17, '20-30', '', '2023-12-17 02:38:42', '2023-12-26 06:47:15'),
(42, 'quản lý', 'nhân viên', 'vn9546', 5, 1, 3, 4, '2024-02-06', 2, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 1, '20-30', '', '2023-12-17 02:38:42', '2023-12-23 14:55:38'),
(47, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'jp12222222', 5, 2, 3, 3, '2024-01-06', 2, '12 triệu', 'HÀ NỘI', 'bình thạnh, 123 , tp hcm', '', '', '', '', 1, 21, '20-30', 'quan-ly-bao-hanh-kho-van-khu-vuc-tp-hcm', '2023-12-26 15:10:35', '2023-12-26 15:10:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_hinhthuc`
--

CREATE TABLE `job_hinhthuc` (
  `id_hinhthuc` int(11) NOT NULL,
  `name_hinhthuc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_hinhthuc`
--

INSERT INTO `job_hinhthuc` (`id_hinhthuc`, `name_hinhthuc`, `created_at`) VALUES
(1, 'Toàn thời gian', '2023-12-19 08:32:10'),
(2, 'Bán thời gian', '2023-12-19 08:34:54'),
(3, 'Hợp đồng tư vấn', '2023-12-19 08:33:12'),
(9, 'Thực tập', '2023-12-19 08:33:38'),
(11, '1234', '2023-12-24 15:49:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_kysunb`
--

CREATE TABLE `job_kysunb` (
  `id_job` int(11) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `job_code` varchar(255) NOT NULL,
  `id_nganhnghe` int(11) NOT NULL,
  `id_hinhthuc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_kinhnghiem` int(255) NOT NULL,
  `ngaycuoicung` date NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `mucluong` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `diachi_cuthe` varchar(300) NOT NULL,
  `mota` text DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `quyenloi` text DEFAULT NULL,
  `thongtin_khac` text NOT NULL,
  `id_trangthai` int(11) NOT NULL DEFAULT 1,
  `id_cty` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `ngonngu` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_kysunb`
--

INSERT INTO `job_kysunb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `slug`, `created_at`, `updated_at`) VALUES
(28, ' Helpdesk  77 dá ddasdqwewq 23e4234 ewtert', 'nhân viên', '444', 2, 2, 2, 4, '2024-01-03', 1, 'tret', 'rewr', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 17, '25', 'nn123', 'helpdesk-77-da-ddasdqwewq-23e4234-ewtert', '2023-12-23 11:43:27', '2023-12-26 15:27:32'),
(29, 'Nhân Viên IT ', 'nhân viên', '444', 2, 2, 2, 4, '2024-01-03', 1, 'tret', 'rewr', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 17, '25', 'nn123', '', '2023-12-23 11:43:27', '2023-12-23 11:43:27'),
(27, 'Nhân Viên IT ', 'nhân viên', '444', 2, 2, 2, 4, '2024-01-03', 1, 'tret', 'rewr', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 17, '25', 'nn123', '', '2023-12-23 11:43:27', '2023-12-23 11:43:27'),
(30, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'jp', 3, 9, 50, 2, '2023-12-14', 1, '20-30', 'Hồ Chí Minh', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 21, '20-30', 'nn123', 'quan-ly-bao-hanh-kho-van-khu-vuc-tp-hcm', '2023-12-26 15:28:18', '2023-12-26 15:28:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_nganhnghe`
--

CREATE TABLE `job_nganhnghe` (
  `id_nganhnghe` int(11) NOT NULL,
  `name_nganhnghe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_nganhnghe`
--

INSERT INTO `job_nganhnghe` (`id_nganhnghe`, `name_nganhnghe`, `created_at`) VALUES
(1, 'Sản xuất', '2023-12-07 04:02:03'),
(2, 'Kỹ thuật', '2023-12-07 04:02:11'),
(3, 'Cơ khí', '2023-12-07 04:01:47'),
(4, 'Tự động hóa', '2023-12-07 04:01:47'),
(5, 'Công nghệ thông tin', '2023-12-07 04:01:47'),
(6, 'Khối ngoại ngữ', '2023-12-07 04:01:47'),
(7, 'Xuất nhập khẩu và Logistics', '2023-12-07 04:02:59'),
(8, 'Khối cấp cao và khối văn phòng có ngoại ngữ', '2023-12-07 04:02:59'),
(9, 'Khác', '2023-12-23 18:26:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_trangthai`
--

CREATE TABLE `job_trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `name_trangthai` varchar(255) NOT NULL,
  `img_trangthai` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_trangthai`
--

INSERT INTO `job_trangthai` (`id_trangthai`, `name_trangthai`, `img_trangthai`, `create_at`) VALUES
(0, 'Hết thời hạn', '', '2023-12-07 03:17:21'),
(1, 'Còn thời hạn', '', '2023-12-07 03:17:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_vietseiko`
--

CREATE TABLE `job_vietseiko` (
  `id_job` int(11) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `job_code` varchar(255) NOT NULL,
  `id_nganhnghe` int(11) NOT NULL,
  `id_hinhthuc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_kinhnghiem` int(255) NOT NULL,
  `ngaycuoicung` date NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `mucluong` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `diachi_cuthe` varchar(300) NOT NULL,
  `mota` text DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `quyenloi` text DEFAULT NULL,
  `thongtin_khac` text NOT NULL,
  `id_trangthai` int(11) NOT NULL DEFAULT 1,
  `id_cty` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_vietseiko`
--

INSERT INTO `job_vietseiko` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `slug`, `created_at`, `updated_at`) VALUES
(14, ' Helpdesk  77 dá ddasdqwewq 23e4234 ewtert', 'nhân viên', 'jp12222222', 6, 2, 2, 2, '2024-01-06', 2, 'Tới 20 triệu', 'HÀ NỘI', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '25', 'helpdesk-77-da-ddasdqwewq-23e4234-ewtert', '2023-12-18 04:59:47', '2023-12-26 15:29:11'),
(15, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 17, '20-30', '', '2023-12-16 13:48:59', '2023-12-23 14:35:10'),
(16, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 17, '20-30', '', '2023-12-16 13:48:59', '2023-12-23 14:35:20'),
(17, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Nhân viên 7', '444', 3, 2, 5, 4, '2024-01-04', 2, '10-12 triệu', 'HÀ NỘI', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 21, '20-30', 'quan-ly-bao-hanh-kho-van-khu-vuc-tp-hcm', '2023-12-26 15:30:05', '2023-12-26 15:30:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_xkld_nb`
--

CREATE TABLE `job_xkld_nb` (
  `id_job` int(11) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `job_code` varchar(255) NOT NULL,
  `id_nganhnghe` int(11) NOT NULL,
  `id_hinhthuc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_kinhnghiem` int(255) NOT NULL,
  `ngaycuoicung` date NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `mucluong` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `diachi_cuthe` varchar(300) NOT NULL,
  `mota` text DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `quyenloi` text DEFAULT NULL,
  `thongtin_khac` text NOT NULL,
  `id_trangthai` int(11) NOT NULL DEFAULT 1,
  `id_cty` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `ngonngu` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_xkld_nb`
--

INSERT INTO `job_xkld_nb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `slug`, `created_at`, `updated_at`) VALUES
(30, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 0, 17, '20-30', 'nn1', '', '2023-12-16 13:24:46', '2023-12-23 14:27:12'),
(36, 'Nhân Viên Telesales Nhà Tốt (Nghỉ Thứ 7,)', 'nhân viên', '4652', 4, 9, 3, 4, '2024-01-06', 2, '10-12', 'rew', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 21, '20-30', 'nn1', 'nhan-vien-telesales-nha-tot-nghi-thu-7', '2023-12-26 15:25:13', '2023-12-26 15:26:26'),
(33, 'Nhân Viên IT ', 'ewqr', 'jp12222222', 3, 3, 23, 4, '2023-12-28', 3, '10-12', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>ưq</p>', '', '', '', 1, 1, '20-30', 'nn123', 'nhan-vien-it', '2023-12-18 04:16:56', '2023-12-26 15:27:00'),
(34, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 17, '20-30', 'nn1', '', '2023-12-16 13:24:46', '2023-12-23 14:25:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhnghiem`
--

CREATE TABLE `kinhnghiem` (
  `id_kn` int(11) NOT NULL,
  `name_kn` varchar(266) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinhnghiem`
--

INSERT INTO `kinhnghiem` (`id_kn`, `name_kn`, `created_at`) VALUES
(1, '1 Năm', '2023-09-12 07:29:46'),
(2, '2 Năm', '2023-09-12 07:29:46'),
(3, '3 năm', '2023-12-08 08:50:47'),
(4, '4 năm', '2023-12-08 08:50:47'),
(5, 'Trên 4 năm', '2023-12-08 08:51:46'),
(6, 'Không yêu cầu ', '2023-12-08 08:51:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `img-type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`, `img-type`) VALUES
(1, 'Việc Làm Tại Việt Nam', ''),
(2, 'Xuất Khẩu Lao Động Tại Nhật Bản', ''),
(3, 'Kỹ Sư & Thông Dịch Viên tại Nhật Bản', ''),
(4, 'Việc làm tại VietSeiko', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ung_tuyen`
--

CREATE TABLE `ung_tuyen` (
  `id_ungtuyen` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nam_sinh` varchar(100) NOT NULL,
  `muc_luong` varchar(255) NOT NULL,
  `khu_vuc` varchar(255) NOT NULL,
  `vi_tri_ung_tuyen` varchar(255) NOT NULL,
  `link_cv` varchar(255) NOT NULL,
  `id_job` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ung_tuyen`
--

INSERT INTO `ung_tuyen` (`id_ungtuyen`, `name`, `email`, `phone`, `nam_sinh`, `muc_luong`, `khu_vuc`, `vi_tri_ung_tuyen`, `link_cv`, `id_job`, `type_id`, `created_at`) VALUES
(38, 'teesst', 'rwerwe@gmail.com', '0533333334', '1234', '20-30', 'hcm', 'nhân viên', '1703320038file-sample_100kB.doc', 364, 1, '2023-12-23 08:27:18'),
(39, 'wer', 'test@gmail.com', '0333333333', '1234', '10-12', 'ưqe', 'ewqe', '1703320323file-sample_500kB.docx', 42, 1, '2023-12-23 08:32:03'),
(40, 'rqwe', 'rwerwe@gmail.com', '0333333333', '1234', '23', 'ưqe', 'ewqe', '1703320463file-example_PDF_500_kB.pdf', 35, 1, '2023-12-23 08:34:23'),
(45, 'teesst', 'rwerwe@gmail.com', '0533333334', '1234', '20-30', 'hcm', 'nhân viên', '1703320038file-sample_100kB.doc', 30, 2, '2023-12-23 08:27:18'),
(46, 'wer', 'test@gmail.com', '0333333333', '1234', '10-12', 'ưqe', 'ewqe', '1703320323file-sample_500kB.docx', 31, 2, '2023-12-23 08:32:03'),
(47, 'rqwe', 'rwerwe@gmail.com', '0333333333', '1234', '23', 'ưqe', 'ewqe', '1703320463file-example_PDF_500_kB.pdf', 30, 2, '2023-12-23 08:34:23'),
(48, 'teesst', 'rwerwe@gmail.com', '0533333334', '1234', '20-30', 'hcm', 'nhân viên', '1703320038file-sample_100kB.doc', 27, 3, '2023-12-23 08:27:18'),
(49, 'wer', 'test@gmail.com', '0333333333', '1234', '10-12', 'ưqe', 'ewqe', '1703320323file-sample_500kB.docx', 28, 3, '2023-12-23 08:32:03'),
(50, 'rqwe', 'rwerwe@gmail.com', '0333333333', '1234', '23', 'ưqe', 'ewqe', '1703320463file-example_PDF_500_kB.pdf', 29, 3, '2023-12-23 08:34:23'),
(51, 'teesst', 'rwerwe@gmail.com', '0533333334', '1234', '20-30', 'hcm', 'nhân viên', '1703320038file-sample_100kB.doc', 14, 4, '2023-12-23 08:27:18'),
(52, 'wer', 'test@gmail.com', '0333333333', '1234', '10-12', 'ưqe', 'ewqe', '1703320323file-sample_500kB.docx', 15, 4, '2023-12-23 08:32:03'),
(53, 'rqwe', 'rwerwe@gmail.com', '0333333333', '1234', '23', 'ưqe', 'ewqe', '1703320463file-example_PDF_500_kB.pdf', 147, 4, '2023-12-23 08:34:23'),
(54, 'rqwe', 'test@gmail.com', '0533333334', '1234', 'Tới 20 triệu', 'ưqe', 'Quản lý', '1703474713file-example_PDF_500_kB.pdf', 15, 4, '2023-12-25 03:25:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `bangcap` varchar(255) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `address`, `img`, `password`, `gioitinh`, `bangcap`, `sodienthoai`, `email`, `created_at`, `Role`) VALUES
(1, 'LeNgocHai', NULL, '', '25f9e794323b453885f5181f1b624d0b', 'Nam', 'Cao Đẳng', 332369993, 'lengochai.fit2019@gmail.com', '2023-10-04 06:11:52', 0),
(3, 'admin', NULL, '', '25f9e794323b453885f5181f1b624d0b', '', '', 0, '', '2023-11-13 09:09:41', 1),
(4, 'admin2', NULL, '', '123456', '', '', 0, '', '2023-11-28 15:26:23', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_employer`
--

CREATE TABLE `user_employer` (
  `id_employer` int(11) NOT NULL,
  `username_employer` varchar(225) NOT NULL,
  `password_employer` varchar(40) NOT NULL,
  `permission_employer` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `cam_nang`
--
ALTER TABLE `cam_nang`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `cty`
--
ALTER TABLE `cty`
  ADD PRIMARY KEY (`id_cty`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id_gt`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Chỉ mục cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  ADD PRIMARY KEY (`id_hinhthuc`);

--
-- Chỉ mục cho bảng `job_kysunb`
--
ALTER TABLE `job_kysunb`
  ADD PRIMARY KEY (`id_job`);

--
-- Chỉ mục cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  ADD PRIMARY KEY (`id_nganhnghe`);

--
-- Chỉ mục cho bảng `job_trangthai`
--
ALTER TABLE `job_trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Chỉ mục cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  ADD PRIMARY KEY (`id_job`);

--
-- Chỉ mục cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  ADD PRIMARY KEY (`id_job`);

--
-- Chỉ mục cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  ADD PRIMARY KEY (`id_kn`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `ung_tuyen`
--
ALTER TABLE `ung_tuyen`
  ADD PRIMARY KEY (`id_ungtuyen`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_employer`
--
ALTER TABLE `user_employer`
  ADD PRIMARY KEY (`id_employer`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `cam_nang`
--
ALTER TABLE `cam_nang`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `cty`
--
ALTER TABLE `cty`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  MODIFY `id_hinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `job_kysunb`
--
ALTER TABLE `job_kysunb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ung_tuyen`
--
ALTER TABLE `ung_tuyen`
  MODIFY `id_ungtuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user_employer`
--
ALTER TABLE `user_employer`
  MODIFY `id_employer` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2024 lúc 02:05 PM
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
-- Cấu trúc bảng cho bảng `anh_banner`
--

CREATE TABLE `anh_banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_banner`
--

INSERT INTO `anh_banner` (`id`, `name`, `img`, `type_id`, `created_at`, `updated_at`) VALUES
(25, 'teesst', '1705493605tryty.png', 0, '2024-01-17', '2024-01-17 12:13:25'),
(20, 'banner 1', '1705493622ytrytyt.png', 0, '2024-01-17', '2024-01-17 12:13:42'),
(24, 'banner 4444', '1705493640jhgj.png', 0, '2024-01-17', '2024-01-17 12:14:00'),
(16, 'job ksnb', '1705493656banner ewr.jpg', 3, '2024-01-17', '2024-01-17 12:14:16'),
(17, 'job vietseiko e2324', '1705493671banner ewr.jpg', 4, '2024-01-17', '2024-01-17 12:14:31'),
(14, 'job vn', '1705496523banner ewr.jpg', 1, '2024-01-17', '2024-01-17 13:02:03'),
(15, 'job xkld', '1705493715banner ewr.jpg', 2, '2024-01-17', '2024-01-17 12:15:15');

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
(23, '17054856792-1.jpg', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp', '<p>A text string, also known as a string or simply as text, is a group of characters that are used as <a href=\"https://www.lifewire.com/data-definition-excel-3123415\">data</a> in a spreadsheet program. Text strings are most often comprised of words, but may also include <a href=\"https://www.lifewire.com/convert-text-to-upper-lower-case-3123710\">letters, numbers, special characters</a>, the dash symbol, or the number sign. By default, text strings are left-aligned in a cell while number data is aligned to the right.</p>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep', '2024-01-17', '2024-01-17 10:27:32'),
(24, '1705495190banner.jpg', 'Lý lịch tư pháp là gì? Thủ tục đăng ký lý lịch tư pháp ', '<p>A text string, also known as a string or simply as text, is a group of characters that are used as <a href=\"https://www.lifewire.com/data-definition-excel-3123415\">data</a> in a spreadsheet program. Text strings are most often comprised of words, but may also include <a href=\"https://www.lifewire.com/convert-text-to-upper-lower-case-3123710\">letters, numbers, special characters</a>, the dash symbol, or the number sign. By default, text strings are left-aligned in a cell while number data is aligned to the right.</p><figure class=\"image\"><img src=\"../../images/l-image-blog/1705485891banner.jpg\"></figure><p>ưqewqe</p>', 1, 'ly-lich-tu-phap-la-gi-thu-tuc-dang-ky-ly-lich-tu-phap', '2024-01-17', '2024-01-17 12:39:50');

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
(18, '1705486696images.jpg', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp ffffff', '<p>A text string, also known as a string or simply as text, is a group of characters that are used as <a href=\"https://www.lifewire.com/data-definition-excel-3123415\">data</a> in a spreadsheet program. Text strings are most often comprised of words, but may also include <a href=\"https://www.lifewire.com/convert-text-to-upper-lower-case-3123710\">letters, numbers, special characters</a>, the dash symbol, or the number sign. By default, text strings are left-aligned in a cell while number data is aligned to the right.</p>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep-ffffff', '2024-01-17', '2024-01-17 10:27:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `muc_luong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `khu_vuc_hien_tai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `khu_vuc_mong_muon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nganhnghe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `muc_luong`, `khu_vuc_hien_tai`, `khu_vuc_mong_muon`, `nganhnghe`, `type_id`, `file`, `created_at`) VALUES
(108, 'teesst', 'test@gmail.com', '0333333333', '12', 'Vĩnh Phúc', 'ytry', '3', 1, '17054966091703320038file-sample_100kB.doc', '2024-01-17 13:03:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_ntd&khac`
--

CREATE TABLE `contact_ntd&khac` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `muc_dich` varchar(255) NOT NULL,
  `dia_diem` varchar(255) NOT NULL,
  `vi_tri_can_tuyen` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL COMMENT '1: nhà tuyển dụng, 2: khác',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_ntd&khac`
--

INSERT INTO `contact_ntd&khac` (`id_contact`, `name`, `email`, `phone`, `muc_dich`, `dia_diem`, `vi_tri_can_tuyen`, `file`, `type_id`, `created_at`) VALUES
(105, 'teesst', 'test@gmail.com', '0333333333', 'test', 'Bắc Giang', 'test', '', 1, '2024-01-17 12:07:13'),
(104, 'teesst', 'test@gmail.com', '0533333334', 'ưqewqe', 'Lạng Sơn', 'ewqewq', '1705247584file-example_PDF_500_kB.pdf', 1, '2024-01-14 15:53:08');

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
(23, '<figure class=\"image\"><img src=\"../../images/logo-company/170514602411046498.jpg\"></figure>', 'Công Ty TNHH Sam Sung Climate Control Việt Nam', '50-100', '<p>We are looking for the right people — people who want to innovate, achieve, grow and lead. We attract and retain the best talent by investing in our employees and empowering them to develop themselves and their careers. Experience the challenges, rewards and opportunity of working for SAM SUNG CLIMATE CONTROL CO., LTD. is leading Korean Auto part maker, specialized in Automotive Thermal System. We have been successfully serving leading customers such as Hyundai, KIA, Mitsubishi, Mercedes Benz, John Deere.</p>', 'Một phần lô J, khu công nghiệp Đồng Văn II, Phường Bạch Thượng, Thị xã Duy Tiên, Tỉnh Hà Nam', 1, '2024-01-13 11:40:26'),
(24, '<figure class=\"image\"><img src=\"../../images/logo-company/1705492398rrewrr.png\"></figure>', 'Công Ty Vàng Bạc Đá Quý Bảo Tín Minh Châu', '50-100', '<p>Bảo Tín Minh Châu là một trong những công ty uy tín hàng đầu trong lĩnh vực kinh doanh và chế tác vàng bạc đá quý tại Việt Nam. Với hơn 30 năm phát triển, Bảo Tín Minh Châu đã có 3 cơ sở kinh doanh tại Hà Nội và trên 200 đại lý, điểm kinh doanh trên toàn quốc với hai loại sản phẩm chính là Vàng rồng Thăng Long và Vàng trang sức chất lượng cao</p>', 'Toà nhà CTM Complex, 139 Cầu Giấy, Phường Quan Hoa, Quận Cầu Giấy, Hà Nội', 2, '2024-01-17 11:53:20'),
(25, '<figure class=\"image\"><img src=\"../../images/logo-company/170506627722.jpg\"></figure>', 'Công ty TNHH Concentrix Service Vietnam 99', '50-100', '<p>We are looking for the right people — people who want to innovate, achieve, grow and lead. We attract and retain the best talent by investing in our employees and empowering them to develop themselves and their careers. Experience the challenges, rewards...</p>', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 3, '2024-01-12 13:31:30'),
(26, '<figure class=\"image\"><img src=\"../../images/logo-company/1705496303ewrew.png\"></figure>', 'Công Ty TNHH Thực Phẩm Bình Hưng', '50-100', '<p>Công Ty TNHH Thực Phẩm Bình Hưng là công ty hoạt động trong lĩnh vực buôn bán rau quả</p><p>CÔNG TY TNHH THỰC PHẨM BÌNH HƯNG</p><p>Tên giao dịch: BHF CO., LTD</p><p>Loại hình hoạt động: Công ty TNHH Một Thành Viên</p>', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 1, '2024-01-17 12:58:36');

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
-- Cấu trúc bảng cho bảng `hinhanh_video`
--

CREATE TABLE `hinhanh_video` (
  `id` int(11) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT '1: hình anh, 2: logo, 3: video',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh_video`
--

INSERT INTO `hinhanh_video` (`id`, `path`, `type`, `created_at`, `updated_at`) VALUES
(52, 'https://www.youtube.com/watch?v=v8PRQ3arfi4', 3, '2024-01-17', '2024-01-17 12:29:52'),
(53, 'https://www.youtube.com/watch?v=-PUrmegeubU', 3, '2024-01-17', '2024-01-17 12:30:05'),
(48, '1705494924gggg.jpg', 2, '2024-01-17', '2024-01-17 12:35:24'),
(45, '1705465674hinh10.jpg', 1, '2024-01-17', '2024-01-17 04:27:54'),
(49, 'https://www.youtube.com/watch?v=PZLcf2f91yg', 3, '2024-01-17', '2024-01-17 04:48:06'),
(44, '1705465559hinh1.jpg', 1, '2024-01-17', '2024-01-17 04:25:59'),
(43, '1705465601hinh18.jpg', 1, '2024-01-17', '2024-01-17 04:26:41'),
(41, '1705461036hinh7.jpg', 1, '2024-01-17', '2024-01-17 03:10:36'),
(42, '1705461066hinh5.jpg', 1, '2024-01-17', '2024-01-17 03:11:06');

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
  `type_job` int(11) NOT NULL DEFAULT 1,
  `view` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `slug`, `type_job`, `view`, `created_at`, `updated_at`) VALUES
(66, ' Helpdesk  77 dá ddasdqwewq ', 'Quản lý cấp trung', '444', 3, 2, 3, 2, '2024-01-18', 1, 'Tới 20 triệu', ' TP.HCM', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Xuất hoá đơn tài chính</p><p>- Tập hợp công nợ</p><p>- Viết hoá đơn bán hàng</p><p>- Check đơn hàng , báo giá , đối chiếu công nợ</p><p>- Sắp xếp giấy tờ văn bản,..</p><p>Địa chỉ: 15 Ngõ 70 Thạch Cầu, Long Biên, HN</p><p>- Xuất hoá đơn tài chính</p><p>- Tập hợp công nợ</p><p>- Viết hoá đơn bán hàng</p><p>- Check đơn hàng , báo giá , đối chiếu công nợ</p><p>- Sắp xếp giấy tờ văn bản,..</p><p>Địa chỉ: 15 Ngõ 70 Thạch Cầu, Long Biên, HN</p>', '<p>- Cẩn thận và hòa đồng, tâm huyết và trách nhiệm, trung thực</p><p>- Nắm vững các chính sách, chế độ Tài chính - Kế toán, Thuế &amp; quản lý tài chính hiện hành;</p><p>- Thành thạo các kỹ năng word và exel văn phòng, phần mềm kế toán misa</p><p>- Có trình độ từ trung cấp, cao đẳng, đại học. Ưu tiên nhân viên có kinh nghiệm</p><p>- Thành thạo máy tính, có kinh nghiệm kế toán</p>', '<p>- Lương từ 7 - 12 triệu/tháng tùy năng lực</p><p>- Được tham gia BHXH-BHYT</p><p>- Được tăng lương định kỳ theo năm mức tăng từ 5-10% tùy theo năng lực làm việc.</p><p>- Chế độ du lịch: 01 năm /01 lần.</p><p>- Làm giờ hành chính, 1 tháng nghỉ 3 buổi, có làm tăng ca trong tuần</p>', '', 1, 26, '20-30', 'helpdesk-77-da-ddasdqwewq', 1, 9, '2024-01-17 12:48:17', '2024-01-17 13:01:50');

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
(9, 'Thực tập', '2023-12-19 08:33:38');

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
  `type_job` int(11) NOT NULL DEFAULT 3,
  `view` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `type_job` int(11) NOT NULL DEFAULT 4,
  `view` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_vietseiko`
--

INSERT INTO `job_vietseiko` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `slug`, `type_job`, `view`, `created_at`, `updated_at`) VALUES
(25, 'Nhân Viên IT ', 'nhân viên', '4652', 5, 3, 5, 2, '2024-01-15', 2, '12 triệu', 'HÀ NỘI', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<h4><strong>Mô tả công việc</strong></h4><p>- Xuất hoá đơn tài chính</p><p>- Tập hợp công nợ</p><p>- Viết hoá đơn bán hàng</p><p>- Check đơn hàng , báo giá , đối chiếu công nợ</p><p>- Sắp xếp giấy tờ văn bản,..</p>', '<h4><strong>Yêu cầu công việc</strong></h4><p>- Cẩn thận và hòa đồng, tâm huyết và trách nhiệm, trung thực</p><p>- Nắm vững các chính sách, chế độ Tài chính - Kế toán, Thuế &amp; quản lý tài chính hiện hành;</p><p>- Thành thạo các kỹ năng word và exel văn phòng, phần mềm kế toán misa</p><p>- Có trình độ từ trung cấp, cao đẳng, đại học. Ưu tiên nhân viên có kinh nghiệm</p><p>- Thành thạo máy tính, có kinh nghiệm kế toán</p>', '<h4><strong>Quyền lợi</strong></h4><p>- Lương từ 7 - 12 triệu/tháng tùy năng lực</p><p>- Được tham gia BHXH-BHYT</p><p>- Được tăng lương định kỳ theo năm mức tăng từ 5-10% tùy theo năng lực làm việc.</p><p>- Chế độ du lịch: 01 năm /01 lần.</p><p>- Làm giờ hành chính, 1 tháng nghỉ 3 buổi, có làm tăng ca trong tuần</p>', '', 0, 24, '20-30', 'nhan-vien-it', 4, 5, '2024-01-17 12:51:49', '2024-01-17 12:59:35');

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
  `type_job` int(11) NOT NULL DEFAULT 2,
  `view` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `img_review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review`
--

INSERT INTO `review` (`id`, `img_review`, `name`, `mota`, `updated_at`) VALUES
(10, '1705476530tải xuống (3).jpg', '1234243', 'Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình ', '2024-01-17 07:28:50'),
(8, '1705495443hinh8.jpg', 'gsdfg', 'Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình eeee', '2024-01-17 12:44:03'),
(11, '1705480794tải xuống (4).jpg', 'rqwe', 'Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình nên mình rất tin tưởng, ', '2024-01-17 08:39:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ung_tuyen`
--

CREATE TABLE `ung_tuyen` (
  `id_ungtuyen` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nam_sinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `muc_luong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `khu_vuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vi_tri_ung_tuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_cv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_job` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ung_tuyen`
--

INSERT INTO `ung_tuyen` (`id_ungtuyen`, `name`, `email`, `phone`, `nam_sinh`, `muc_luong`, `khu_vuc`, `vi_tri_ung_tuyen`, `link_cv`, `id_job`, `type_id`, `created_at`) VALUES
(81, 'teesst', 'test@gmail.com', '0533333334', '1234', 'Tới 20 triệu', 'hcm', 'Quản lý test', '1705496100file-sample_500kB.docx', 25, 4, '2024-01-17 12:55:00'),
(80, 'eqw', 'rwerwe@gmail.com', '0333333333', '1999', '12 triệu', 'Đồng Nai', 'nhân viên', '1705495755file-example_PDF_500_kB.pdf', 66, 1, '2024-01-17 12:49:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ung_tuyen_nhaptay`
--

CREATE TABLE `ung_tuyen_nhaptay` (
  `id_ungtuyen` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nam_sinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `muc_luong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `khu_vuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vi_tri_ung_tuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_cv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `anh_banner`
--
ALTER TABLE `anh_banner`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `contact_ntd&khac`
--
ALTER TABLE `contact_ntd&khac`
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
-- Chỉ mục cho bảng `hinhanh_video`
--
ALTER TABLE `hinhanh_video`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ung_tuyen`
--
ALTER TABLE `ung_tuyen`
  ADD PRIMARY KEY (`id_ungtuyen`);

--
-- Chỉ mục cho bảng `ung_tuyen_nhaptay`
--
ALTER TABLE `ung_tuyen_nhaptay`
  ADD PRIMARY KEY (`id_ungtuyen`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `anh_banner`
--
ALTER TABLE `anh_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `cam_nang`
--
ALTER TABLE `cam_nang`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `contact_ntd&khac`
--
ALTER TABLE `contact_ntd&khac`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `cty`
--
ALTER TABLE `cty`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hinhanh_video`
--
ALTER TABLE `hinhanh_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  MODIFY `id_hinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `job_kysunb`
--
ALTER TABLE `job_kysunb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `ung_tuyen`
--
ALTER TABLE `ung_tuyen`
  MODIFY `id_ungtuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `ung_tuyen_nhaptay`
--
ALTER TABLE `ung_tuyen_nhaptay`
  MODIFY `id_ungtuyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

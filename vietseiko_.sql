-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2023 lúc 09:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `img_blog`, `tieude_blog`, `noidung_blog`, `type_id`, `created_at`, `updated_at`) VALUES
(10, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703057135ddd.jpg\"></figure>', 'Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị</p>\r\n<h2><strong>Phiếu lý lịch tư pháp là gì? Nội dung gồm những gì?</strong></h2><p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án thì ghi “không có án tích”. Trường hợp người bị kết án chưa đủ điều kiện được xóa án tích thì ghi “có án tích”, tội danh, hình phạt chính, hình phạt bổ sung.</li><li>Đối với người được xoá án tích và thông tin về việc xoá án tích đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li><li>Đối với người được đại xá và thông tin về việc đại xá đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li></ul><p>– Thông tin về cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã:</p><ul><li>Đối với người không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi “không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã”.</li><li>Đối với người bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi chức vụ bị cấm đảm nhiệm, thời hạn không được thành lập, quản lý doanh nghiệp, hợp tác xã.</li></ul><p>Trường hợp cá nhân, cơ quan hoặc tổ chức không yêu cầu thì nội dung được quy định tại khoản này không ghi vào phiếu lý lịch tư pháp.</p>', 3, '2023-12-20', '2023-12-20 07:30:35'),
(9, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1703058422Untitled.jpg\"></figure>', 'rrrrrrr', '<p>ewr</p>', 1, '2023-12-20', '2023-12-20 07:47:08');

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
(17, '<figure class=\"image\"><img src=\"../../images/logo-company/1702778975tttt.jpg\"></figure>', 'KCN Trà Nóc 1, Phường Trà Nóc, Quận Bình Thủy, TP.Cần Thơ, Việt Nam', '50-100', '<p>CÔNG TY TNHH THƯƠNG MẠI - XÂY DỰNG QUANH ANH ANH hoạt động trong lĩnh vực xây dựng, sản xuất và thi công nội thất. Địa chỉ : 348 Nguyễn Thị Thập, P. Tân Quy, Quận 7, Thành phố Hồ Chí Minh</p>', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 1, '2023-12-18 02:11:15'),
(18, '<figure class=\"image\"><img src=\"../../images/logo-company/170278016322.jpg\"></figure>', 'Công ty TNHH Concentrix Service Vietnam 99', '50-100', '<p>hukiukiuki</p>', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 1, '2023-12-17 02:30:11'),
(20, '<figure class=\"image\"><img src=\"../../images/logo-company/1702952009gggg.jpg\"></figure><p>ewqewq</p><p>ewqe</p><p>ưewwww</p><figure class=\"image\"><img src=\"../../images/logo-company/1702952046Untitled.jpg\"></figure>', 'Công ty TNHH adddđ', '', '', ' TP.HCM, 27 Tam Bình , Tam Phú, Thủ Đức', 2, '2023-12-19 02:14:18'),
(16, '<figure class=\"image\"><img src=\"../../images/logo-company/1702732461ewrew.png\"></figure>', 'KCN Trà Nóc 1, Phường Trà Nóc, Quận Bình Thủy, TP.Cần Thơ, Việt Nam', '50-100', '<p>Với nền tảng tuyển dụng trực tuyến vững chắc cùng mạng lưới đa kênh trên thị trường việc làm, Gadas đã hợp tác mang lại những giá trị thiết thực cho nhiều ứng viên cũng như các doanh nghiệp trong và ngoài nước.Với mong muốn hỗ trợ và gắn kết giữa những người đang tìm kiếm việc làm với các công ty, Gadas đã xây dựng một hệ thống tìm kiếm, phân loại công việc thông minh; một đội ngũ nhân sự tận tâm, tận lực và một cộng đồng Gadas chia sẻ nhiều thông tin về việc làm trên toàn quốc.</p>', '745 Phạm Văn Thuận, KP5, Tam Hiệp, Biên Hòa, Đồng Nai', 4, '2023-12-18 02:10:34'),
(14, '<figure class=\"image\"><img src=\"../../images/logo-company/1702732168Untitled.jpg\"></figure>', 'Công Ty CP Phân Phối Quốc Tế Genex', '30- 50', '<p>Tại Công ty, mọi người đều bình đẳng, tôn trọng lẫn nhau và tôn trọng sự khác biệt. Ý chí, Nghị lực, Tố chất lãnh đạo và Tinh thần làm chủ là những giá trị cốt lõi của Công ty và là yếu tố giúp Công ty vượt qua những giai đoạn khó khăn nhất. Chúng tôi làm việc với niềm tin “Không gì là không thể”, luôn hướng tới mục đích thành công lâu dài. Chúng tôi tin rằng mỗi cá nhân, không phân biệt giới tính, tuổi tác, sắc tộc, tôn giáo hay học vấn, đều có thể vươn tới thành công với lòng kiên trì, sáng tạo và nỗ lực không ngừng nghỉ. (Xin xem mục “Chúng tôi là ai” trên website http://genex.com.vn).</p>', ' TP.HCM, 123A Gò Dầu, Tân Quý,, Tân Phú', 1, '2023-12-16 14:01:41');

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
-- Cấu trúc bảng cho bảng `infomation_ung_tuyen`
--

CREATE TABLE `infomation_ung_tuyen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ngay-sinh` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `kinh-nghiem` varchar(255) NOT NULL,
  `hoc-van` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `luong` varchar(255) NOT NULL,
  `des-kn` varchar(255) NOT NULL,
  `muctieu` varchar(255) NOT NULL,
  `ghi-chu` varchar(255) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `infomation_ung_tuyen`
--

INSERT INTO `infomation_ung_tuyen` (`id`, `name`, `gender`, `email`, `phone`, `ngay-sinh`, `job`, `kinh-nghiem`, `hoc-van`, `address`, `luong`, `des-kn`, `muctieu`, `ghi-chu`, `created_At`, `updated_At`) VALUES
(1, 'rqwe', 'Nam', ' test@gmail.com', '0333333333', '2023-12-08', 'Công nghệ thông tin', '>4 năm', 'THPT', 'ewqe', 'ewqe', 'ewqe', 'ewe', 'ewqe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'gsdfg', 'Nam', ' test@gmail.com', '0333333333', '2023-12-21', 'Tự động hóa', '3 năm', 'THPT', 'rewr', 'rewr', 'rewr', 'rẻ', 'rewr', '0000-00-00 00:00:00', '2023-12-04 10:30:22'),
(3, 'aaaaa', 'Nam', ' ewq@krwej.com', '0533333334', '2023-12-08', 'Cơ khí', '4 năm', 'Trung cấp', 'ewqqe', 'ewqeqwe', 'qưeqwe', 'qưewqee', 'ewqe', '2023-12-05 03:17:06', '2023-12-05 03:17:06'),
(4, 'dong nai', 'Nữ', ' ewq@krwej.com', '0533333334', '2023-12-14', 'Công nghệ thông tin', '4 năm', 'Trung cấp', 'Tỉnh Đồng Nai', 'ewqeqwe', 'dsads', 'dsd', 'dsd', '2023-12-05 07:07:13', '2023-12-05 07:07:13'),
(5, 'phong', 'Nam', ' test@gmail.com', '0333333333', '2023-12-22', 'Công nghệ thông tin', '2 năm', 'Cao đẳng', 'Thành phố Hà Nội', '12', 'ythy6h', 'hy6h', 'hy6h', '2023-12-17 02:26:47', '2023-12-17 02:26:47');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `created_at`, `updated_at`) VALUES
(37, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'VN01', 1, 1, 2, 2, '2024-01-05', 4, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p><p>- Quản lý dịch vụ kho, dịch vụ vận chuyển do bên thứ 3 cung cấp tại TP.HCM;</p><p>- Tổng hợp kết quả giao hàng/kho vận theo tháng báo cáo cho Quản lý giao hàng-Kho vận Toàn quốc</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>3) Tương tác nội bộ:</p><p>- Làm việc với phòng Kinh doanh, Kế toán, Phát triển sản phẩm, Kiểm soát chất lượng, Thiết kế, … Báo cáo trực tiếp cho QLGiao hàng – Bảo hành Toàn quốc.</p><p>4) Tương tác bên ngoài:</p><p>- Làm việc với các đối tác nước ngoài và khách hàng.</p><p>5) Nơi làm việc: 123A Gò Dầu, Tân Quý, Tân Phú, TP.HCM</p><p>6) Thời gian làm việc: Thứ 2 đến thứ 6: từ 8h đến 17h (nghỉ trưa từ 12h đến 13h); Thứ 7: từ 8h sáng đến 12h trưa; Nghỉ chiều thứ 7, ngày chủ nhật, ngày Lễ, Tết theo Luật lao động.</p>', '<p>- Có tố chất lãnh đạo, quản lý và tinh thần làm chủ;</p><p>- Có tính cách liêm chính, thật thà, trung thực, tinh thần học hỏi, trách nhiệm và cầu tiến;</p><p>- Có kiến thức về kỹ thuật (để hiểu sản phẩm đồ dùng, máy móc ngành hàng mẹ và bé); Tốt nghiệp các trường trung cấp, cao đẳng trở lên chuyên ngành kỹ thuật;</p><p>- Giao tiếp tốt bằng tiếng Anh (đọc, hiểu, viết .....); sử dụng thành thạo máy tính</p><p>- Chịu được áp lực công việc.</p><p>- Ưu tiên ứng viên có kinh nghiệm</p><p>- Mong muốn làm việc và gắn bó lâu dài;</p>', '<p>- Thử việc 2 tháng, được hưởng 80% lương chính thức, được đào tạo qua công việc.</p><p>- Môi trường làm việc minh bạch, công bằng, rõ ràng, là một nơi để bạn có thể phát triển lâu dài.</p><p>- Lương cơ bản: thỏa thuận (tối thiểu là 20 triệu/tháng). Có Bảo hiểm Y tế, BHXH, BHTN, Bảo hiểm PVI. Lương tháng 13, thưởng hàng mới, thưởng đột xuất, phúc lợi, … theo chính sách Công ty.</p><p>- Được làm việc với các Quản lý giỏi, các đối tác nước ngoài;</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 14, '20-30', '2023-12-16 12:58:32', '2023-12-19 09:47:25'),
(36, 'quản lý', 'nhân viên', 'vn9', 5, 1, 3, 4, '2024-01-07', 2, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 1, '20-30', '2023-12-17 02:38:42', '2023-12-18 02:48:30'),
(33, 'quản lý', 'nhân viên', 'vn9', 5, 1, 3, 4, '2024-01-07', 2, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 1, '20-30', '2023-12-17 02:38:42', '2023-12-18 02:48:30'),
(34, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'VN01', 1, 1, 2, 2, '2024-01-05', 4, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p><p>- Quản lý dịch vụ kho, dịch vụ vận chuyển do bên thứ 3 cung cấp tại TP.HCM;</p><p>- Tổng hợp kết quả giao hàng/kho vận theo tháng báo cáo cho Quản lý giao hàng-Kho vận Toàn quốc</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>3) Tương tác nội bộ:</p><p>- Làm việc với phòng Kinh doanh, Kế toán, Phát triển sản phẩm, Kiểm soát chất lượng, Thiết kế, … Báo cáo trực tiếp cho QLGiao hàng – Bảo hành Toàn quốc.</p><p>4) Tương tác bên ngoài:</p><p>- Làm việc với các đối tác nước ngoài và khách hàng.</p><p>5) Nơi làm việc: 123A Gò Dầu, Tân Quý, Tân Phú, TP.HCM</p><p>6) Thời gian làm việc: Thứ 2 đến thứ 6: từ 8h đến 17h (nghỉ trưa từ 12h đến 13h); Thứ 7: từ 8h sáng đến 12h trưa; Nghỉ chiều thứ 7, ngày chủ nhật, ngày Lễ, Tết theo Luật lao động.</p>', '<p>- Có tố chất lãnh đạo, quản lý và tinh thần làm chủ;</p><p>- Có tính cách liêm chính, thật thà, trung thực, tinh thần học hỏi, trách nhiệm và cầu tiến;</p><p>- Có kiến thức về kỹ thuật (để hiểu sản phẩm đồ dùng, máy móc ngành hàng mẹ và bé); Tốt nghiệp các trường trung cấp, cao đẳng trở lên chuyên ngành kỹ thuật;</p><p>- Giao tiếp tốt bằng tiếng Anh (đọc, hiểu, viết .....); sử dụng thành thạo máy tính</p><p>- Chịu được áp lực công việc.</p><p>- Ưu tiên ứng viên có kinh nghiệm</p><p>- Mong muốn làm việc và gắn bó lâu dài;</p>', '<p>- Thử việc 2 tháng, được hưởng 80% lương chính thức, được đào tạo qua công việc.</p><p>- Môi trường làm việc minh bạch, công bằng, rõ ràng, là một nơi để bạn có thể phát triển lâu dài.</p><p>- Lương cơ bản: thỏa thuận (tối thiểu là 20 triệu/tháng). Có Bảo hiểm Y tế, BHXH, BHTN, Bảo hiểm PVI. Lương tháng 13, thưởng hàng mới, thưởng đột xuất, phúc lợi, … theo chính sách Công ty.</p><p>- Được làm việc với các Quản lý giỏi, các đối tác nước ngoài;</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 14, '20-30', '2023-12-16 12:58:32', '2023-12-16 13:04:42'),
(35, 'quản lý', 'nhân viên', 'vn9', 5, 1, 3, 4, '2024-01-07', 2, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 17, '20-30', '2023-12-17 02:38:42', '2023-12-17 02:38:42'),
(38, 'quản lý', 'nhân viên', 'vn9', 5, 1, 3, 4, '2024-01-07', 2, '20-30', 'hcm', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi thán</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 17, '20-30', '2023-12-17 02:38:42', '2023-12-17 02:38:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_hinhthuc`
--

CREATE TABLE `job_hinhthuc` (
  `id_hinhthuc` int(11) NOT NULL,
  `name_hinhthuc` varchar(255) NOT NULL,
  `img_hinhthuc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_hinhthuc`
--

INSERT INTO `job_hinhthuc` (`id_hinhthuc`, `name_hinhthuc`, `img_hinhthuc`, `created_at`) VALUES
(1, 'Toàn thời gian', '', '2023-12-19 08:32:10'),
(2, 'Bán thời gian', '', '2023-12-19 08:34:54'),
(3, 'Hợp đồng tư vấn', '', '2023-12-19 08:33:12'),
(9, 'Thực tập', '', '2023-12-19 08:33:38');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_kysunb`
--

INSERT INTO `job_kysunb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `created_at`, `updated_at`) VALUES
(23, 'Nhân Viên Tư Vấn Trả Góp Tại Cửa Hàng - Toàn Quốc', 'nhân viên', 'KS01', 7, 1, 5, 3, '2024-01-07', 4, '10-12', 'Hồ Chí Minh', 'Lầu 2, Ree Tower, 09 Đoàn Văn Bơ, Q. 4, Tp. Hcm', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', 'Cấp độ N2', '2023-12-16 13:43:55', '2023-12-18 04:36:52'),
(24, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', '444', 3, 2, 50, 6, '2024-01-05', 1, 'Tới 20 triệu', 'hcm', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '', '', '', '', 1, 1, '20-30', 'nn123', '2023-12-18 04:40:34', '2023-12-18 04:40:34');

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
(9, 'Khác', '2023-12-07 04:03:12');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_vietseiko`
--

INSERT INTO `job_vietseiko` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `created_at`, `updated_at`) VALUES
(7, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06'),
(8, ' Helpdesk  77', 'nhân viên', 'jp12222222', 6, 2, 2, 2, '2024-01-06', 2, 'Tới 20 triệu', 'HÀ NỘI', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '25', '2023-12-18 04:59:47', '2023-12-18 04:59:47'),
(9, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06'),
(10, ' Helpdesk  77', 'nhân viên', 'jp12222222', 6, 2, 2, 2, '2024-01-06', 2, 'Tới 20 triệu', 'HÀ NỘI', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '25', '2023-12-18 04:59:47', '2023-12-18 04:59:47'),
(11, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06'),
(12, ' Helpdesk  77', 'nhân viên', 'jp12222222', 6, 2, 2, 2, '2024-01-06', 2, 'Tới 20 triệu', 'HÀ NỘI', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '25', '2023-12-18 04:59:47', '2023-12-18 04:59:47'),
(13, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06'),
(14, ' Helpdesk  77', 'nhân viên', 'jp12222222', 6, 2, 2, 2, '2024-01-06', 2, 'Tới 20 triệu', 'HÀ NỘI', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '25', '2023-12-18 04:59:47', '2023-12-18 04:59:47'),
(15, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06'),
(16, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', '2023-12-16 13:48:59', '2023-12-18 04:58:06');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_xkld_nb`
--

INSERT INTO `job_xkld_nb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `created_at`, `updated_at`) VALUES
(30, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', 'nn1', '2023-12-16 13:24:46', '2023-12-18 04:14:32'),
(31, 'Nhân Viên IT ', 'ewqr', 'jp12222222', 3, 3, 23, 4, '2023-12-28', 3, '10-12', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>ưq</p>', '', '', '', 1, 1, '20-30', 'nn123', '2023-12-18 04:16:56', '2023-12-18 04:16:56'),
(32, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', 'nn1', '2023-12-16 13:24:46', '2023-12-18 04:14:32'),
(33, 'Nhân Viên IT ', 'ewqr', 'jp12222222', 3, 3, 23, 4, '2023-12-28', 3, '10-12', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>ưq</p>', '', '', '', 1, 1, '20-30', 'nn123', '2023-12-18 04:16:56', '2023-12-18 04:16:56'),
(34, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', 'nn1', '2023-12-16 13:24:46', '2023-12-18 04:14:32'),
(35, 'Nhân Viên IT ', 'ewqr', 'jp12222222', 3, 3, 23, 4, '2023-12-28', 3, '10-12', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>ưq</p>', '', '', '', 1, 1, '20-30', 'nn123', '2023-12-18 04:16:56', '2023-12-18 04:16:56');

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
-- Cấu trúc bảng cho bảng `nganhnghe_nb`
--

CREATE TABLE `nganhnghe_nb` (
  `id_nganhnghe_NB` int(11) NOT NULL,
  `name_nn_NB` varchar(255) NOT NULL,
  `img_nn_NB` varchar(255) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe_nb`
--

INSERT INTO `nganhnghe_nb` (`id_nganhnghe_NB`, `name_nn_NB`, `img_nn_NB`, `create_at`) VALUES
(1, 'Kỹ Sư', '', '2023-10-13'),
(2, 'Thực Tập Sinh', '', '2023-10-13');

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
-- Chỉ mục cho bảng `infomation_ung_tuyen`
--
ALTER TABLE `infomation_ung_tuyen`
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
-- Chỉ mục cho bảng `nganhnghe_nb`
--
ALTER TABLE `nganhnghe_nb`
  ADD PRIMARY KEY (`id_nganhnghe_NB`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

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
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cty`
--
ALTER TABLE `cty`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `infomation_ung_tuyen`
--
ALTER TABLE `infomation_ung_tuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  MODIFY `id_hinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `job_kysunb`
--
ALTER TABLE `job_kysunb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nganhnghe_nb`
--
ALTER TABLE `nganhnghe_nb`
  MODIFY `id_nganhnghe_NB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

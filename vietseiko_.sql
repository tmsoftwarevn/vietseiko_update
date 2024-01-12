-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2024 lúc 02:24 PM
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
(1, 'banner 1 2222', '<figure class=\"image\"><img src=\"../../images/banner/1705063758tryty.png\"></figure>', 0, '2024-01-05', '2024-01-12 12:49:20'),
(2, 'banner 2', '<figure class=\"image\"><img src=\"../../images/banner/1705063776jhgj.png\"></figure>', 0, '2024-01-05', '2024-01-12 12:49:37'),
(3, 'banner 3', '<figure class=\"image\"><img src=\"../../images/banner/1705063798ytrytyt.png\"></figure>', 0, '2024-01-05', '2024-01-12 12:50:00'),
(4, 'job vn', '<figure class=\"image\"><img src=\"../../images/banner/1705063818tryty.png\"></figure>', 1, '2024-01-05', '2024-01-12 12:50:19'),
(5, 'job xkld', '<figure class=\"image\"><img src=\"../../images/banner/1705063834tryty.png\"></figure>', 2, '2024-01-05', '2024-01-12 12:50:36'),
(6, 'job ksnb', '<figure class=\"image\"><img src=\"../../images/banner/1705063849tryty.png\"></figure>', 3, '2024-01-05', '2024-01-12 12:50:52'),
(7, 'job vietseiko', '<figure class=\"image\"><img src=\"../../images/banner/1705063866tryty.png\"></figure>', 4, '2024-01-05', '2024-01-12 12:51:07');

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
(9, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705064202slide-01.jpg\"></figure>', 'cơ quan hoặc tổ chức được quy định tại khoản', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án th</li></ul>', 1, 'co-quan-hoac-to-chuc-duoc-quy-dinh-tai-khoan', '2023-12-20', '2024-01-12 12:56:44'),
(11, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705063948photo-1697103181716-16971031820651723593177.png\"></figure>', 'Backend có thể chỉ cần viết trên console', '<p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị</p><h2><strong>Phiếu lý lịch tư pháp là gì? Nội dung gồm những gì?</strong></h2><p>Căn cứ theo Điều 42 Luật Lý lịch tư pháp năm 2009: Phiếu lý lịch tư pháp là phiếu được cơ quan quản lý cơ sở dữ liệu lý lịch tư pháp cấp có giá trị chứng minh cá nhân có hoặc không có có án tích; bị cấm hay không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã trong trường hợp doanh nghiệp và hợp tác xã bị Tòa án tuyên bố phá sản.</p><p>Phiếu lý lịch tư pháp gồm 02 loại, phân biệt với dựa theo nội dung thể hiện trên phiếu, cụ thể như sau:</p><h3><strong>Phiếu lý lịch tư pháp số 1</strong></h3><p><a href=\"https://docs.google.com/document/d/16KCs5B-qwfn8wcqCEwtMrhdVBOcPlf9B/edit?usp=drive_link&amp;ouid=101115996844489148014&amp;rtpof=true&amp;sd=true\">Phiếu lý lịch tư pháp số 1</a> được cấp cho cá nhân, cơ quan hoặc tổ chức được quy định tại khoản 1 và khoản 3 Điều 7 Luật Lý lịch tư pháp năm 2009.&nbsp;</p><p>Theo Điều 42 Luật Lý lịch tư pháp năm 2009, nội dung phiếu lý lịch tư pháp số 1 như sau:&nbsp;</p><p>– Họ, tên, giới tính, ngày, tháng, năm sinh, nơi sinh, quốc tịch, nơi cư trú, số giấy chứng minh nhân dân hoặc hộ chiếu của người được cấp Phiếu lý lịch tư pháp.</p><p>– Tình trạng án tích:</p><ul><li>Đối với người không bị kết án thì ghi “không có án tích”. Trường hợp người bị kết án chưa đủ điều kiện được xóa án tích thì ghi “có án tích”, tội danh, hình phạt chính, hình phạt bổ sung.</li><li>Đối với người được xoá án tích và thông tin về việc xoá án tích đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li><li>Đối với người được đại xá và thông tin về việc đại xá đã được cập nhật vào Lý lịch tư pháp thì ghi “không có án tích”.</li></ul><p>– Thông tin về cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã:</p><ul><li>Đối với người không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi “không bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã”.</li><li>Đối với người bị cấm đảm nhiệm chức vụ, thành lập, quản lý doanh nghiệp, hợp tác xã theo quyết định tuyên bố phá sản thì ghi chức vụ bị cấm đảm nhiệm, thời hạn không được thành lập, quản lý doanh nghiệp, hợp tác xã.</li></ul><p>Trường hợp cá nhân, cơ quan hoặc tổ chức không yêu cầu thì nội dung được quy định tại khoản này không ghi vào phiếu lý lịch tư pháp.</p>', 1, 'backend-co-the-chi-can-viet-tren-console', '2023-12-20', '2024-01-12 12:52:30'),
(17, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705064220slide-03.jpg\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng', '<p>Không có bài kiểm tra nào có thể đánh giá chính xác năng lực <a href=\"http://vietseiko.local/\">quản lý</a> chiến lược của một người. Nhưng có những câu hỏi có thể chỉ ra mức độ của năng lực đó. Hãy thử trả lời để có thêm ý tưởng cho việc phát triển tư duy chiến lược của bản thân.</p><h3><strong>1. Bạn có tầm nhìn kinh doanh và quản lý không?</strong></h3><p>Steves Jobs và Wozniak - hai nhà sáng lập Apple Computer đã hình dung ra \"quá trình dân chủ hóa máy tính\". Tầm nhìn của bạn khi bắt đầu bất kỳ hoạt động kinh doanh nào chính là \"kim chỉ nam\" - định hướng lâu dài cho cả quá trình, chứ không phải mục tiêu ngắn hạn. Một nhân sự có năng lực quản lý chiến lược sẽ có khả năng trình bày rõ ràng tầm nhìn của mình chỉ trong một vài câu.</p><h3><strong>2. Bạn có triết lý hành động không?</strong></h3><p>Triết lý chính là sứ mệnh cho hoạt động hàng ngày của bạn và nhóm/ doanh nghiệp của bạn. Một tổ chức có <a href=\"https://vieclam.tuoitre.vn/tin-tuc/phat-trien-to-chuc-tu-triet-ly-dau-tu-con-nguoi-20230630134016982.html\">triết lý</a> hành động đủ để thuyết phục những nhân sự trong tổ chức tuân theo là đã đạt được 50% thành công. Và vì thế, không chỉ quan tâm triết lý của công ty &amp; bản thân, bạn còn cần biết triết lý kinh doanh của công ty đối thủ.</p><h3><strong>3. Tổ chức của bạn có lợi thế cạnh tranh?</strong></h3><p>Điều cốt lõi để một tập thể/ doanh nghiệp tồn tại được là có vị trí độc nhất trong phân khúc thị trường đang hoạt động, dựa trên một lợi thế cạnh tranh nào đó. Nói cách khác, tổ chức của bạn phải trở thành số 1 hoặc 2, hoặc chí ít là thuộc tốp các tổ chức cạnh tranh hàng đầu dù là trong phân khúc nào. Ví dụ, lợi thế cạnh tranh là giá cả hợp lý, thiết kế độc đáo, thương hiệu uy tín hoặc thế mạnh về cung cấp.</p><p>Nói cách khác, một nhà chiến lược sẽ xác lập được các yếu tố để thúc đẩy người mua lựa chọn sản phẩm của công ty mình thay vì một sản phẩm khác tương đương. Tương tự, đội nhóm dưới quyền bạn cũng cần chứng minh được vai trò quan trọng trong công ty.</p><h3><strong>4. Nhân viên của bạn có thể làm việc độc lập?</strong></h3><p>CareerBuilder đã từng có các bài viết về việc trao quyền cho nhân viên. Bởi một công ty được <a href=\"https://vieclam.tuoitre.vn/tin-tuc/ky-nang-ma-tat-ca-cac-nha-quan-ly-nhan-su-phai-co-20230310104539558.html\">quản lý</a> một cách <a href=\"https://vieclam.tuoitre.vn/tin-tuc/cach-nao-giu-chan-nhan-tai-20230511164216739.html\">chiến lược</a> sẽ trở thành một tổ chức liên minh mà trong đó mỗi nhân sự là một doanh nhân, có trách nhiệm quản lý một số nhiệm vụ nhất định. Mỗi nhóm có thể coi là một công ty siêu nhỏ, được hỗ trợ bởi nguồn lực của toàn tập đoàn và đứng đầu là các <a href=\"https://vieclam.tuoitre.vn/tin-tuc/nhung-nang-luc-cua-nha-quan-ly-tuong-lai-20230214162046435.html\">nhà quản lý</a>.</p>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong', '2023-12-26', '2024-01-12 12:57:02');

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
(11, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705063989slide-02.jpg\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp', '<p>Thư ngỏ là thư dùng để yêu cầu, trình bày nội dung hoặc vấn đến nào đó như xin tài trợ, mời hợp tác, chào hàng,… Dù mục đích khác nhau nhưng các loại thư ngỏ này đều đại diện cho một tập thể, đơn vị,… mang tính chất công việc và dùng để đề xuất một vấn đề cụ thể.&nbsp;</p><p>Nội dung thư ngỏ thường ở dạng mở nhằm gửi đến nhiều đối tượng khác nhau. Người gửi thư sẽ giới thiệu sơ nét về thông tin cá nhân và các thông tin về công ty, sản phẩm/dịch vụ hoặc sự kiện sắp diễn ra.</p><h2><strong>Thế nào là một mẫu thư đẹp, chuyên nghiệp?</strong></h2><p>Tuy thư ngỏ không phải là văn bản hành chính nhưng mẫu thư ngỏ cần đảm bảo các yêu cầu sau đây:</p><ul><li>Nội dung thư ngỏ được viết ngắn gọn, súc tích và chia thành các câu ngắn.</li><li>Bố cục hợp lý: Lời chào – Giới thiệu người gửi thư – Nội dung thư ngỏ – Lời kêu gọi hành động ( hợp tác, xin tài trợ,…) – Kết thư.&nbsp;</li><li>Nội dung được phân bổ hợp lý, đúng trọng tâm và được chia thành nhiều đoạn.</li><li>Ngôn ngữ trang trọng, hấp dẫn.</li><li>Cách trình bày thư ngỏ có thể khác nhau nhưng cần phù hợp với nội dung.</li><li>Đưa ra dẫn chứng thuyết phục.&nbsp;</li></ul>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep', '2023-12-21', '2024-01-12 12:53:11'),
(17, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705064002slide-03.jpg\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp', '<p>Thư ngỏ là thư dùng để yêu cầu, trình bày nội dung hoặc vấn đến nào đó như xin tài trợ, mời hợp tác, chào hàng,… Dù mục đích khác nhau nhưng các loại thư ngỏ này đều đại diện cho một tập thể, đơn vị,… mang tính chất công việc và dùng để đề xuất một vấn đề cụ thể.&nbsp;</p><p>Nội dung thư ngỏ thường ở dạng mở nhằm gửi đến nhiều đối tượng khác nhau. Người gửi thư sẽ giới thiệu sơ nét về thông tin cá nhân và các thông tin về công ty, sản phẩm/dịch vụ hoặc sự kiện sắp diễn ra.</p><h2><strong>Thế nào là một mẫu thư đẹp, chuyên nghiệp?</strong></h2><p>Tuy thư ngỏ không phải là văn bản hành chính nhưng mẫu thư ngỏ cần đảm bảo các yêu cầu sau đây:</p><ul><li>Nội dung thư ngỏ được viết ngắn gọn, súc tích và chia thành các câu ngắn.</li><li>Bố cục hợp lý: Lời chào – Giới thiệu người gửi thư – Nội dung thư ngỏ – Lời kêu gọi hành động ( hợp tác, xin tài trợ,…) – Kết thư.&nbsp;</li><li>Nội dung được phân bổ hợp lý, đúng trọng tâm và được chia thành nhiều đoạn.</li><li>Ngôn ngữ trang trọng, hấp dẫn.</li><li>Cách trình bày thư ngỏ có thể khác nhau nhưng cần phù hợp với nội dung.</li><li>Đưa ra dẫn chứng thuyết phục.&nbsp;</li></ul>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep', '2023-12-21', '2024-01-12 12:53:25'),
(16, '<figure class=\"image\"><img src=\"../../images/l-image-blog/1705064002slide-03.jpg\"></figure>', 'Không rời mắt trước các mẫu thư ngỏ ấn tượng, chuyên nghiệp', '<p>Thư ngỏ là thư dùng để yêu cầu, trình bày nội dung hoặc vấn đến nào đó như xin tài trợ, mời hợp tác, chào hàng,… Dù mục đích khác nhau nhưng các loại thư ngỏ này đều đại diện cho một tập thể, đơn vị,… mang tính chất công việc và dùng để đề xuất một vấn đề cụ thể.&nbsp;</p><p>Nội dung thư ngỏ thường ở dạng mở nhằm gửi đến nhiều đối tượng khác nhau. Người gửi thư sẽ giới thiệu sơ nét về thông tin cá nhân và các thông tin về công ty, sản phẩm/dịch vụ hoặc sự kiện sắp diễn ra.</p><h2><strong>Thế nào là một mẫu thư đẹp, chuyên nghiệp?</strong></h2><p>Tuy thư ngỏ không phải là văn bản hành chính nhưng mẫu thư ngỏ cần đảm bảo các yêu cầu sau đây:</p><ul><li>Nội dung thư ngỏ được viết ngắn gọn, súc tích và chia thành các câu ngắn.</li><li>Bố cục hợp lý: Lời chào – Giới thiệu người gửi thư – Nội dung thư ngỏ – Lời kêu gọi hành động ( hợp tác, xin tài trợ,…) – Kết thư.&nbsp;</li><li>Nội dung được phân bổ hợp lý, đúng trọng tâm và được chia thành nhiều đoạn.</li><li>Ngôn ngữ trang trọng, hấp dẫn.</li><li>Cách trình bày thư ngỏ có thể khác nhau nhưng cần phù hợp với nội dung.</li><li>Đưa ra dẫn chứng thuyết phục.&nbsp;</li></ul>', 1, 'khong-roi-mat-truoc-cac-mau-thu-ngo-an-tuong-chuyen-nghiep', '2023-12-21', '2024-01-12 12:53:25');

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
(107, 'teesst', 'test@gmail.com', '0333333333', '12', 'Phú Thọ', 'ewdsfd', '2', 2, '1705065724file-example_PDF_500_kB.pdf', '2024-01-12 13:22:07');

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
(23, '<figure class=\"image\"><img src=\"../../images/logo-company/170506348311142670.png\"></figure>', 'Công Ty TNHH Sam Sung Climate Control Việt Nam', '50-100', '<p>We are looking for the right people — people who want to innovate, achieve, grow and lead. We attract and retain the best talent by investing in our employees and empowering them to develop themselves and their careers. Experience the challenges, rewards and opportunity of working for SAM SUNG CLIMATE CONTROL CO., LTD. is leading Korean Auto part maker, specialized in Automotive Thermal System. We have been successfully serving leading customers such as Hyundai, KIA, Mitsubishi, Mercedes Benz, John Deere.</p>', 'Một phần lô J, khu công nghiệp Đồng Văn II, Phường Bạch Thượng, Thị xã Duy Tiên, Tỉnh Hà Nam', 1, '2024-01-12 12:45:04'),
(24, '<figure class=\"image\"><img src=\"../../images/logo-company/170506465311230694.jpg\"></figure>', 'Công Ty Vàng Bạc Đá Quý Bảo Tín Minh Châu', '50-100', '<p>Bảo Tín Minh Châu là một trong những công ty uy tín hàng đầu trong lĩnh vực kinh doanh và chế tác vàng bạc đá quý tại Việt Nam. Với hơn 30 năm phát triển, Bảo Tín Minh Châu đã có 3 cơ sở kinh doanh tại Hà Nội và trên 200 đại lý, điểm kinh doanh trên toàn quốc với hai loại sản phẩm chính là Vàng rồng Thăng Long và Vàng trang sức chất lượng cao</p>', 'Toà nhà CTM Complex, 139 Cầu Giấy, Phường Quan Hoa, Quận Cầu Giấy, Hà Nội', 2, '2024-01-12 13:04:31');

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
(31, 'https://www.youtube.com/watch?v=dLXv0hj7y5k', 3, '2024-01-09', '2024-01-09 03:10:28'),
(20, 'https://www.youtube.com/watch?v=Op3syM-6_Po', 3, '2024-01-09', '2024-01-09 02:29:21'),
(21, 'https://www.youtube.com/watch?v=0gwO5_S1whk', 3, '2024-01-09', '2024-01-09 02:33:54'),
(30, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769781tttt.jpg\"></figure>', 2, '2024-01-09', '2024-01-09 03:09:42'),
(9, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769670hinh1.jpg\"></figure>', 1, '2024-01-08', '2024-01-09 03:07:55'),
(29, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769772rrewrr.png\"></figure>', 2, '2024-01-09', '2024-01-09 03:09:34'),
(27, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/170476976122.jpg\"></figure>', 2, '2024-01-09', '2024-01-09 03:09:22'),
(28, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769767gggg.jpg\"></figure>', 2, '2024-01-09', '2024-01-09 03:09:27'),
(15, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704764544hinh5.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 01:42:34'),
(18, 'https://www.youtube.com/watch?v=z7UDmBkXotw', 3, '2024-01-09', '2024-01-09 02:27:54'),
(22, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769688hinh2.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:08:10'),
(23, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769694hinh3.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:08:15'),
(24, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769699hinh4.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:08:20'),
(25, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769709hinh7.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:08:30'),
(26, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704769715hinh8.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:08:36'),
(32, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704771916hinh10.jpg\"></figure>', 1, '2024-01-09', '2024-01-09 03:45:18'),
(33, '<figure class=\"image\"><img src=\"../../images/hinhanh_video/1704771931nnnn.jpg\"></figure>', 2, '2024-01-09', '2024-01-09 03:45:33'),
(34, 'https://www.youtube.com/watch?v=JRfuAukYTKg', 3, '2024-01-09', '2024-01-09 03:45:49'),
(35, 'https://www.youtube.com/watch?v=JRfuAukYTKg', 3, '2024-01-09', '2024-01-09 03:47:29'),
(36, 'https://www.youtube.com/watch?v=JRfuAukYTKg', 3, '2024-01-09', '2024-01-09 03:47:32'),
(37, 'https://www.youtube.com/watch?v=JRfuAukYTKg', 3, '2024-01-09', '2024-01-09 03:47:35');

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
(63, 'Nhân Viên IT ', 'nhân viên', 'VN02', 6, 2, 2, 3, '2024-01-25', 2, 'Tới 20 triệu', 'HÀ NỘI', 'khu công nghiệp Đồng Văn II, Phường Bạch Thượng, Thị xã Duy Tiên, Tỉnh Hà Nam', '', '', '', '', 1, 1, '20-30', 'nhan-vien-it', 1, 2, '2024-01-12 13:19:20', '2024-01-12 13:19:34'),
(62, 'Trưởng Phòng Hành Chính Nhân Sự - GA & HR', 'Trưởng phòng', 'vn01', 2, 2, 3, 4, '2024-02-03', 1, 'thỏa thuận', 'Hồ Chí Minh', 'khu công nghiệp Đồng Văn II, Phường Bạch Thượng, Thị xã Duy Tiên, Tỉnh Hà Nam', '<p>* Quy mô công ty: &lt;100 nhân sự<br>+ Phụ trách lĩnh vực nhân sự: Quản lý công tác tuyển dụng, đào tạo, Quản lý hồ sơ , thông tin người lao động, hợp đồng lao động.Quản lý, kiểm soát việc chấm công, tiền lương,thưởng , phúc lợi, BHXH,quan hệ lao động…. Lập Nội quy lao động, thang bảng lương, tư vấn cho lãnh đạo về các chính sách liên quan đến pháp luật lao động.<br>+ Phụ trách việc quản lý lao động nước ngoài: Thư mời, Giấy phép lao động, visa, thẻ tạm trú, nhà ở, ...<br>+ Quản lý công việc hành chính: tiếp đón khách, bảo vệ, tạp vụ,vệ sinh, mua bán vpp, đồng phục lao động, nhà ăn, điều xe, rác thải, nước thải…<br>+ Quản lý các công việc liên quan đến an toàn nhà máy: Phòng cháy chữa cháy, An toàn máy móc, lao động, Môi trường, Sức khỏe, Điện…</p>', '<p>- Ưu tiên ứng viên sinh sống tại Hà Nam hoặc có dự định làm việc lâu dài tại Hà Nam<br>- Tốt nghiệp Đại học trở lên.<br>- Sử dụng tiếng Anh trong công việc.<br>- Thành thạo tin học văn phòng: word, excel<br>- Có từ 2-3 năm kinh nghiệm tại vị trí tương đương<br>- Có hiểu biết sâu rộng về Luật lao động và các Luật khác liên quan<br>- Có kinh nghiệm làm việc với các cơ quan ban ngành<br>- Kỹ năng quản lý bao quát, giám sát công việc tốt</p>', '<p>- Làm việc trong môi trường năng động, chuyên nghiệp.<br>- Chế độ lương thưởng hấp dẫn.<br>- Cung cấp đầy đủ trang thiết bị phục vụ công việc.<br>- Đóng BHXH, BHYT, BHTN theo quy định nhà nước.<br>- Có xe đưa đón công nhân viên trong công ty.,…<br>- Thời gian làm việc: 8h – 17h, thứ 2 đến thứ 7.</p>', '', 1, 23, '20-30', 'truong-phong-hanh-chinh-nhan-su-ga-hr', 1, 7, '2024-01-12 12:47:25', '2024-01-12 13:09:30');

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

--
-- Đang đổ dữ liệu cho bảng `job_kysunb`
--

INSERT INTO `job_kysunb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `slug`, `type_job`, `view`, `created_at`, `updated_at`) VALUES
(31, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'nhân viên', 'ks01', 4, 2, 5, 2, '2024-02-01', 1, '12 triệu', 'Hồ Chí Minh', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 23, '20-30', 'nn1', 'quan-ly-bao-hanh-kho-van-khu-vuc-tp-hcm', 3, 2, '2024-01-12 13:11:48', '2024-01-12 13:12:02');

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
(24, ' Helpdesk  77', 'nhân viên', 'vsk01', 5, 1, 2, 3, '2024-01-30', 1, 'Tới 20 triệu', 'Hồ Chí Minh', ' 53 Đường 31E, Phường An Phú, Thành phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '', '', '', '', 1, 1, '20-30', 'helpdesk-77', 4, 6, '2024-01-12 13:12:57', '2024-01-12 13:17:19');

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

--
-- Đang đổ dữ liệu cho bảng `job_xkld_nb`
--

INSERT INTO `job_xkld_nb` (`id_job`, `chucvu`, `capbac`, `job_code`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `id_kinhnghiem`, `ngaycuoicung`, `id_gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `thongtin_khac`, `id_trangthai`, `id_cty`, `age`, `ngonngu`, `slug`, `type_job`, `view`, `created_at`, `updated_at`) VALUES
(43, 'Trưởng Ban Hành Chính Lương 20 - 30 Triệu, Nghỉ Thứ 7 Chủ Nhật', 'Trưởng phòng', 'jp01', 2, 2, 5, 3, '2024-02-02', 1, 'Tới 20 triệu', 'HÀ NỘI', 'Toà nhà CTM Complex, 139 Cầu Giấy, Phường Quan Hoa, Quận Cầu Giấy, Hà Nội', '<p>I) Mô tả công việc<br>1. Hoạch định, tổ chức, chỉ huy, kiểm soát các hoạt động tuyển dụng, phát triển và sử dụng nguồn nhân sự đạt mục tiêu công ty đề ra liên quan đến Ban Hành Chính<br>2. Tiếp cận một cách có hệ thống công tác hoạch định những nhu cầu về nguồn lực của tổ chức, trên nhu cầu đó tiến hành các hoạt động tuyển dụng, huấn luyện, đào tạo, phát triển nhân sự. Trưởng ban Hành Chính đánh giá khả năng, năng lực của cấp dưới, duy trì môi trường làm việc thuận lợi, an toàn.<br>3. Tham mưu cho Ban Giám Đốc về công tác tổ chức hành chính của công ty. Giúp đỡ động viên, tạo điều kiện cho các thành viên hoàn thành tốt nhiệm vụ được giao, tuyên truyền, phổ biến chủ trương chính sách của công ty.<br>4. Có biện pháp phù hợp để xây dựng sự ổn định cơ cấu tổ chức công ty, tạo quan hệ lành mạnh, đoàn</p>', '<p>- Giới tính: Nữ tuổi từ 30 - 40, ngoại hình ưa nhìn.<br>- Học vấn bắt buộc: Tốt nghiệp Đại học chính quy trở lên, chuyên ngành Quản Trị nhân sự, Quản trị văn phòng, Hành chính và các chuyên ngành khác có liên quan.<br>- Kinh nghiệm: Có ít nhất 3- 5 năm kinh nghiệm làm việc tại vị trí tương đương. Ưu tiên có kinh nghiệm làm Quản lý Hành Chính tại các Công ty bán lẻ, thời trang.<br>- Kỹ năng:<br>+ Có kĩ năng quản lý, tổng hợp, sắp xếp và phân công công việc hiệu quả.<br>+ Thành tạo tin học văn phòng.</p>', '<p>- Lương: 20 triệu – 30 triệu/tháng (thỏa thuận phù hợp theo năng lực). Thử việc: Hưởng nguyên lương<br>- Thời gian làm việc: Từ thứ 2 đến thứ 6. Từ 8h30 - 17h30<br>- Cơ hội huấn luyện:<br>+ Được cử đi đào tạo các lớp nghiệp vụ chuyên môn, các hội thảo, diễn đàn<br>+ Được tham gia các khóa đào tạo nâng cao nghiệp vụ do Công ty tài trợ.<br>- Đồng nghiệp: Môi trường làm việc trẻ, năng động, chuyên nghiệp, thân thiện, ổn định<br>- Ngày nghỉ:<br>+ Nghỉ hàng tuần: thứ 7 và chủ nhật<br>+ Nghỉ phép năm: 12 ngày<br>+ Nghỉ việc riêng hưởng lương, nghỉ lễ tết: Theo quy định pháp luật<br>- Phúc lợi:<br>+ Chế độ tham gia BHXH, BHYT, BHTN theo quy định của Nhà nước; hưởng các chế độ phúc lợi: thăm hỏi ốm đau, thai sản, du lịch, chế độ thăm khám sức khỏe,<br>- Phụ cấp khác :<br>+ Được cấp phát đầy đủ máy tính, trang thiết bị để làm việc</p>', '', 1, 24, '20-30', 'nn1', 'truong-ban-hanh-chinh-luong-20-30-trieu-nghi-thu-7-chu-nhat', 2, 4, '2024-01-12 13:06:25', '2024-01-12 13:09:18');

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
(1, '<figure class=\"image\"><img src=\"../../images/review/1704273606kkj.png\"></figure>', 'nguyễn văn quang 21321', 'Tỷ lệ chọi thấp, uy tín, luôn quan tâm đến học viên, nhiệt tình trong tư vấn', '2024-01-03 09:20:08'),
(2, '<figure class=\"image\"><img src=\"../../images/review/1704273673tytr.jpg\"></figure>', 'nguyễn thị a', 'Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình nên mình rất tin tưởng,các bạn nên tham gia', '2024-01-04 01:50:26'),
(3, '<figure class=\"image\"><img src=\"../../images/review/1704273898ewr.jpg\"></figure>', 'nguyễn thị kim', 'Tỷ lệ chọi thấp, uy tín, luôn quan tâm đến học viên, nhiệt tình trong tư vấn', '2024-01-03 09:25:03'),
(4, '<figure class=\"image\"><img src=\"../../images/review/1704273941fdsf.jpg\"></figure>', 'nguyễn thị c', 'Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình ', '2024-01-03 09:25:48');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `cam_nang`
--
ALTER TABLE `cam_nang`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `contact_ntd&khac`
--
ALTER TABLE `contact_ntd&khac`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `cty`
--
ALTER TABLE `cty`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hinhanh_video`
--
ALTER TABLE `hinhanh_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ung_tuyen`
--
ALTER TABLE `ung_tuyen`
  MODIFY `id_ungtuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

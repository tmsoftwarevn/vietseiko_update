-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2023 lúc 02:52 PM
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
-- Cấu trúc bảng cho bảng `ban_tin`
--

CREATE TABLE `ban_tin` (
  `id_bantin` int(11) NOT NULL,
  `name_bantin` varchar(255) NOT NULL,
  `id_congcu` int(11) NOT NULL,
  `img_bantin` varchar(255) NOT NULL,
  `tieude_bantin` text NOT NULL,
  `noidung_bantin` text NOT NULL,
  `ngaydang` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ban_tin`
--

INSERT INTO `ban_tin` (`id_bantin`, `name_bantin`, `id_congcu`, `img_bantin`, `tieude_bantin`, `noidung_bantin`, `ngaydang`, `created_at`) VALUES
(1, 'Đổ lỗi khi đi làm: Ai cũng là nạn nhân trong câu chuyện của chính mình', 1, 'https://nghenghiep.vieclam24h.vn/wp-content/uploads/2023/08/do-loi.jpg', '“Văn hoá đổ lỗi” đã và đang chen chân, làm ảnh hưởng tới sự hiệu quả, công bằng và minh bạch của môi trường làm việc công sở. Cụ thể, hành vi này tác động như thế nào tới chúng ta? Nên xử lý như thế nào khi bị đồng nghiệp đổ lỗi? Cùng Nghề Nghiệp Việc Làm 24h hiểu hơn về hành vi qua bài viết.', 'Đổ lỗi là gì?\r\nTrước khi biết cách xử lý và tránh xa thói đổ lỗi, bạn cần hiểu rõ hành vi này là gì.\r\n\r\nĐây là hành vi cố tình chối bỏ sai lầm của bản thân bằng cách đưa ra đủ lý do khách quan hoặc tệ hơn là chuyển lý do đó sang người khác. \r\n\r\nVí dụ: bạn đi làm trễ do ngủ dậy muộn nhưng lại bạn lại đổ lỗi do tắc đường. Bạn làm sai báo cáo do nhập sai số liệu đầu vào nhưng lại đổ lỗi do người chuyển số liệu cho bạn. Thậm chí khi dự án thất bại, bạn đổ lỗi cho các thành viên trong nhóm thiếu năng lực. \r\n\r\nNghiên cứu của Đại học Stanford cho biết: việc đổ lỗi có đặc tính lây lan. Khi một người chứng kiến người khác có hành vi này hoặc thậm chí là nạn nhân, họ cũng có xu hướng đổ lỗi. Nói cách khác, bất cứ ai cũng có thể là nạn nhân hoặc tác nhân của thói xấu này. Bởi tính chất lây nhiễm như vậy, đổ lỗi đang trở thành thói quen trong xã hội, đặc biệt trong môi trường công sở. \r\n\r\nđổ lỗi\r\nĐây là hành vi có tính lây lan. \r\nVì sao người ta đổ lỗi?\r\nCó nhiều nguyên nhân khiến chúng ta đổ lỗi hoặc trở thành nạn nhân của hành vi này.\r\n\r\nĐể tự vệ hoặc bảo vệ hình ảnh của bản thân trước sự đánh giá, phán xét của người khác.\r\nĐể giải phóng nỗi lo lắng hoặc từ chối việc chấp nhận thất bại của bản thân.\r\nĐể bảo vệ bản thân tránh khỏi cảm xúc tiêu cực như: tội lỗi, xấu hổ, buồn phiền, tự ti…\r\nĐể tạo cảm giác an toàn khi việc chịu trách nhiệm được đẩy sang cho người khác. \r\nDo một hiện tượng mang tên “Kick – the – dog” (đá con chó),người ở cấp cao (lãnh đạo, thầy cô, ba mẹ…) công kích cấp dưới, người bị chỉ trích có xu hướng chỉ tay về người thứ ba. Hiện tượng này thường xảy ra ở những môi trường sống mang tính thứ bậc hoặc môi trường công sở.  \r\nDo thói quen hình thành trong môi trường sống từ nhỏ (hẳn hồi còn bé ai cũng có lần thấy cha mẹ đánh chiếc bàn, chiếc ghế hay hòn đá làm chúng ta vấp ngã dù rõ ràng lỗi là do ta đi không cẩn thận…). \r\nđổ lỗi\r\nThói quen xấu này có thể hình thành do môi trường sống từ nhỏ. \r\nHậu quả của việc đổ lỗi trong môi trường công sở\r\nHành vi này xuất hiện ở môi trường công sở sẽ gây ra nhiều hậu quả, tác động tới cả 3 bên: nạn nhân, tác nhân và cả tập thể. \r\n\r\nVới người bị đổ lỗi\r\nCó cảm giác bức xúc, khó chịu, cảm thấy bị bất công khi tự dưng phải gánh những lỗi lầm “tai bay vạ gió” không biết từ đâu tới, nhất là khi họ không được lên tiếng do người đổ lỗi là sếp hoặc hoặc thiếu bằng chứng để thanh minh.\r\nMất đi niềm tin vào sự công bằng và minh bạch của văn hoá doanh nghiệp, từ đó giảm đi sự gắn bó với công ty.\r\nđổ lỗi\r\nNạn nhân có thể mất đi niềm tin vào sự công bằng minh bạch của môi trường làm việc. \r\nVới người đổ lỗi\r\nLúc đầu, bạn có thể phần nào thấy thoải mái, nhưng về sau có thể dẫn tới cảm giác day dứt, hối lỗi và xấu hổ trước đồng nghiệp bị bạn đổ lỗi. \r\nKhiến bạn không dám nhận trách nhiệm, hệ luỵ là bạn sẽ dần dần không dám nhận việc, không dám đương đầu với những thử thách mới vì lo sợ lại mắc sai lầm và phải nhận lỗi. \r\nGiảm đi khả năng tự hoàn thiện và cơ hội nâng cao năng lực bản thân: do bạn không muốn tin mình đã sai lầm, không phải chịu trách nhiệm thì sẽ không có rút kinh nghiệm để hoàn thiện công việc tốt hơn. \r\nđổ lỗi\r\nThói quen đổ lỗi sẽ kìm chân bạn phát triển và khiến bạn không dám nhận trách nhiệm. \r\nVới tập thể có những người đổ lỗi\r\nGóp phần làm nên tình trạng “cha chung không ai khóc” do không ai còn dám nhận trách nhiệm vì sợ làm sai, sợ bị đổ lỗi. \r\nNăng suất làm việc giảm sút do nhân sự mất đi động lực cố gắng.\r\nTeam-work trở nên khó khăn do mối quan hệ nhân sự nội bộ đứt gãy.\r\nMất đi niềm tin vào người quản lý (ví dụ: sếp chê nhân viên kém chuyên môn, ngược lại, nhân viên mất niềm tin và chê sếp thiếu kỹ năng quản lý, hoặc nhân viên thấy sếp xử trí không công bằng sẽ không còn tin tưởng) dẫn tới khó khăn khi giao việc. \r\nKìm hãm sự phát triển chung và tinh thần làm việc cống hiến, giảm sự gắn bó và nỗ lực của những nhân sự cầu tiến. \r\nNói tóm lại, văn hoá đổ lỗi được xem là thứ kìm chân sự phát triển của một tổ chức, bởi nó ảnh hưởng tới chính nhân sự và đánh vào niềm tin của những cá nhân phải chứng kiến hoặc chịu đựng hành vi này. \r\n\r\nđổ lỗi\r\nVăn hoá đổ lỗi có thể kìm chân sự phát triển của cả doanh nghiệp.\r\nXem thêm: Passive Aggressive là gì? Phải làm gì khi đồng nghiệp là người gây hấn thụ động?\r\n\r\nLàm gì khi bị đồng nghiệp đổ lỗi?\r\nDẫu biết là một hành vi không tốt, nhưng đổ lỗi đang ngày càng phổ biến trong môi trường công sở. Tuy nhiên, bằng việc hiểu rõ về hành vi này, bạn hoàn toàn có thể biết cách xử trí thông minh khi bị người khác đổ lỗi và cùng chung tay chấm dứt hành vi  độc hại chốn công sở này.\r\n\r\nTập trung vào giải quyết vấn đề\r\nKhi bị đổ lỗi, bạn có thể dễ bị phản ứng lại ngay lập tức do cảm giác bị công kích. Tuy nhiên, hãy bình tĩnh và nhìn nhận lại toàn bộ quá trình: phân tích quá khứ, hoàn cảnh (cả khách quan lẫn chủ quan) và tình hình sự việc. Từ đó, bạn đánh giá xem liệu mình lúc này có thể làm gì để cải thiện tình hình thay vì tập trung vào việc chỉ trích và đổ lỗi hay cố gắng minh oan.\r\n\r\nBạn sẽ được đánh giá cao hơn khi biết chú ý vào lợi ích tập thể, gạt bỏ đi cảm xúc cá nhân để hướng tới hiệu quả công việc chung.\r\n\r\nXem thêm: Kiểm soát cảm xúc: Làm gì để không nổi điên nơi công sở?\r\n\r\nđổ lỗi\r\nNên tập trung giải quyết vấn đề thay vì chú ý vào sự chỉ trích ai sai.\r\nĐổi hướng suy nghĩ\r\nNgười bị đổ lỗi thường bị đẩy vào tình huống bị động. Tuy nhiên, chẳng ai đổ lỗi được cho bạn nếu bạn hoàn toàn không dính dáng gì tới công việc hay dự án đó.   \r\n\r\nDo vậy, nếu chưa thể minh oan ngay lúc đó, bạn có thể đổi hướng suy nghĩ chủ động hơn bằng cách tập trung vào phần việc và trách nhiệm của mình. Đổi hướng suy nghĩ về “tôi” và “trách nhiệm chủ động của tôi” thay vì “tôi bị”.\r\n\r\nVí dụ: Nếu bạn tham gia dự án và dự án thất bại. Dù phần sai không phải do bạn, nhưng đồng nghiệp nhất quyết đổ lỗi lên đầu bạn. Thay vì suy nghĩ tôi bị đổ lỗi, bạn có thể nhìn lại phần việc mình phụ trách thực sự đã chu toàn 100% hay chưa. Nếu chưa thì phần nào còn thiếu sót? Phần nào có khả năng (lưu ý là có khả năng) dẫn tới sai sót của cả dự án? Từ đó, bạn chủ động ghi nhận lỗi này, chủ động xin lỗi hoặc xin rút kinh nghiệm về phần mình đã làm sai, tìm cách hoàn thiện hơn. \r\n\r\nCách này vừa giúp bạn tạm thời “trốn” ra khỏi tâm lý bị công kích. Đồng thời việc nhận lỗi thực sự của mình (chứ không phải nhận lỗi của người khác) vừa giúp bạn tự giảm bớt áp lực cho bản thân, vừa xoa dịu tập thể đang cuống cuồng do sự cố để tập trung vào giải quyết vấn đề trước đã. \r\n\r\nNgoài ra, cách tư duy này còn giúp bạn khái quát hoá lại quá trình làm việc của mình, nâng cao khả năng quản trị rủi ro trong phần việc được giao. Đặc biệt, nó giúp bạn tìm ra phương án để tránh tình trạng tiếp tục bị đổ lỗi do sơ sót này trong tương lai. \r\n\r\nXem thêm: Cách giành lại spotlight khi bị đồng nghiệp cướp công\r\n\r\nđổ lỗi\r\nKhi bị đổ lỗi mà chưa thể minh oan ngay tức khắc, bạn có thể đổi hướng suy nghĩ sang thế chủ động để ưu tiên việc giải quyết vấn đề trước đã. \r\n“Minh oan” vào lúc thích hợp\r\nNếu bạn thực sự cảm thấy “khó nuốt trôi” việc bị đổ lỗi vừa rồi, đồng thời không dung túng cho hành vi của một đồng nghiệp xấu tính, bạn có thể tự bảo vệ và chứng minh năng lực của mình bằng cách minh oan vào thời điểm thích hợp. \r\n\r\nLưu ý rằng, bạn cần tìm tới người thực sự có thẩm quyền để trình bày. Bạn cũng chuẩn bị những bằng chứng xác thực để làm căn cứ thuyết phục cho lời thanh minh của mình. \r\n\r\nĐừng quên, sẽ là chuyên nghiệp và phù hợp nhất để bạn minh oan sau khi đã giải quyết xong hậu quả hoặc đã khắc phục hoàn toàn vấn đề do lỗi sai trên gây ra. Bởi, đây là thời điểm tất cả mọi người có thể bình tĩnh nhất lắng nghe bạn trình bày, đồng thời là quãng thời gian thích hợp để rút kinh nghiệm về sự cố vừa qua. \r\n\r\nHãy nhớ bạn luôn có thể rút lui \r\nNếu việc đổ lỗi xảy ra thường xuyên, liên tục và không chỉ một mình bạn là nạn nhân, nếu bạn đã cố minh oan mà không được chấp nhận còn kẻ chuyên đổ lỗi tiếp tục được dung túng hết lần này tới lần khác. \r\n\r\nTệ hơn, nếu người đổ lỗi chính là sếp của bạn. Thì, đây rõ ràng là một dấu hiệu cờ đỏ “red flag” cho thấy môi trường làm việc thiếu sự lành mạnh và minh bạch. Đó chẳng phải là người sếp hoặc đồng nghiệp mà bạn có thể gắn bó lâu dài. \r\n\r\nLúc này, bạn có thể xem xét về quyết định rời đi tìm một bến đỗ mới công bằng và lành mạnh hơn. Bởi, chẳng ai có thể an tâm phát triển hay thể hiện hết năng lực, ý tưởng bản thân ở một môi trường luôn nơm nớp bị đổ lỗi. Hãy nhớ, bạn luôn là người ra quyết định lựa chọn con đường phát triển sự nghiệp của mình và rõ ràng bạn có quyền chọn cho mình một môi trường lành mạnh để tự tin và phát huy hết khả năng bản thân.\r\n\r\nđổ lỗi\r\nMột môi trường dung túng cho văn hoá cũng chẳng phải là môi trường chuyên nghiệp và công bằng để bạn có thể gắn bó lâu dài. \r\nLời kết\r\nQua bài viết trên của Việc Làm 24h, hi vọng bạn đã phần nào hiểu hơn về đổ lỗi, tác động của hành vi này tới môi trường công sở. Mong rằng bài viết cũng phần nào giúp bạn có được cách xử lý khôn ngoan và chuyên nghiệp hơn khi bị đồng nghiệp đổ lỗi. \r\n\r\nĐừng quên rằng, nếu tình huống này có xảy ra thì cũng không hẳn là điều gì đó quá tệ. Ở một mặt nào đó, đây cũng là “bài test” để bạn tăng khả năng “sinh tồn” chốn công sở cũng như tin tưởng hơn vào năng lực của bản thân và không ngừng phát triển. Bởi khi bạn làm đúng, làm tốt thì chắc chắn chẳng ai có cơ hội đổ lỗi cho bạn nữa. ', '2023-10-17', '2023-10-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `name_blog` varchar(255) NOT NULL,
  `img_blog` varchar(255) NOT NULL,
  `tieude_blog` text NOT NULL,
  `noidung_blog` text NOT NULL,
  `ngaydang` date NOT NULL,
  `creat_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `name_blog`, `img_blog`, `tieude_blog`, `noidung_blog`, `ngaydang`, `creat_at`) VALUES
(1, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg1.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05'),
(2, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg2.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05'),
(3, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg3.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05'),
(4, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg4.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05'),
(5, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg5.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05'),
(6, 'Top 10 kỹ năng cần có khi đi làm được nhà tuyển dụng đánh giá cao\r\n\r\n', 'bg6.jpg', 'Làm thế nào để trở thành ứng viên nổi bật trong mắt nhà tuyển dụng? Những kỹ năng được nhà tuyển dụng đánh giá cao là gì? Đây có lẽ là thắc mắc của nhiều bạn khi đang tìm việc. Mỗi ngành nghề, công việc sẽ có những kỹ năng khác nhau. Nhưng đây chính là những kỹ năng cốt lõi cần có của một ứng viên sáng giá. Làm nổi bật được những kỹ năng này trong CV và buổi phỏng vấn bạn sẽ tăng cơ hội được chọn. Cùng điểm qua top 10 kỹ năng cần có khi đi làm cùng Vietseiko nhé!\r\n\r\n', '2. Kỹ năng làm việc nhóm\r\n\r\nKỹ năng cần có khi đi làm tiếp theo là kỹ năng làm việc nhóm. Đây là kỹ năng vô cùng quan trọng trong thời đại 4.0. Bất kỳ công ty, tổ chức nào muốn phát triển lớn mạnh đều cần tập thể cán bộ công nhân viên hợp tác, đoàn kết làm việc với nhau vì mục tiêu chung. Làm việc nhóm giúp nhân viên gắn kết và có trách nhiệm hơn công việc mình đang làm. Mỗi người sẽ có những điểm mạnh, điểm yếu và kinh nghiệm khác nhau, làm việc nhóm giúp phát huy tối đa những điểm mạnh và khắc phục đi điểm yếu. Từ đó hiệu suất làm việc và kết quả công việc cũng được nâng cao.\r\n\r\n3. Tư duy phản biện\r\n\r\nTư duy phản biện (Critical Thinking) là một kỹ năng cần có khi đi làm đang được các nhà tuyển dụng tìm kiếm và đánh giá rất cao. Tư duy phản biện giúp các bạn đưa ra những đánh giá hợp lý, có lập luận logic để bảo vệ ý kiến hay quan điểm nào đó. Những điều này đều dựa trên những thông tin chính xác, có cơ sở khoa học chứng mình. Để có khả năng tư duy phản biện tốt bạn cần phải có khả năng vận dụng suy nghĩ độc lập và suy nghĩ phản chiếu. Trong thời đại bùng nổ thông tin như hiện nay, có rất nhiều thông tin sai lệch được truyền tải, người có tư duy phản biện sẽ biết cách chắt lọc thông tin đúng và hạn chế đưa ra những quyết định sai lầm.\r\n\r\n\r\n\r\n(Các nhà tuyển dụng ngày càng tìm kiếm các ứng viên có tư duy phản biện tốt)\r\n4. Kỹ năng giải quyết vấn đề\r\n\r\nBất kể là công việc hay cuộc sống, những vấn đề gây bất lợi có thể diễn ra bất cứ lúc nào. Chúng đòi hỏi ta phải có cách giải quyết tích cực để đưa cuộc sống hay công việc mình trở về lại trạng thái ổn định. Một nhân viên có kỹ năng giải quyết vấn đề tốt là người luôn chủ động tìm hiểu gốc rễ của vấn đề, xem xét và đưa ra những phương pháp giải quyết một cách logic và hiệu quả. Kỹ năng giải quyết vấn đề cần phải có có nhiều trải nghiệm để tích lũy, nó không phải là một kỹ năng hình thành trong thời gian ngắn. Đây là kỹ năng cần có khi đi làm mà bạn phải nỗ lực rèn luyện rất nhiều.\r\n\r\n5. Kỹ năng lãnh đạo bản thân\r\n\r\nLãnh đạo bản thân là bao hàm những khả năng như: quản lý và kiểm soát suy nghĩ, cảm xúc, hành vi. Người đó ý thức được đúng đắn bản thân mình là ai, những điểm mạnh, điểm yếu của người đó, và họ luôn có mục tiêu rõ ràng trong tương lai. Để lãnh đạo bản thân người đó phải có tư duy tự chịu trách nhiệm cao, sự kỷ luật và nhiều kỹ năng cần thiết khác. Kỹ năng này quan trọng vì những người tự lãnh đạo bản thân tốt là những người có thể tự thúc đẩy bản thân tiến bộ, phát triển hơn trong tương lai. Họ chịu trách nhiệm cho tất cả các hành động của mình và cố gắng thực hiện mọi việc tốt nhất có thể. Vì thế những người này thường đạt được hiệu suất làm việc cao cũng như có nhiều thăng tiến trong sự nghiệp. Không chỉ mang lại lợi ích cho người đó mà còn cho chính công ty.\r\n\r\n6. Tư duy cầu tiến\r\n\r\nTư duy cầu tiến – Growth Mindset có thể hiểu là niềm tin của một cá nhân khi họ đủ nhận thức bản thân mình có thể học hỏi và cải nâng cao năng lực. Người có tư duy cầu tiến thường có góc nhìn cởi mở về sự thành công. Họ sẵn đón nhận những khó khăn thử thách, và tin rằng năng lực của bản thân sẽ được phát triển qua quá trình nỗ lực học tập và làm việc. Khao khát chinh phục của những người có tư duy cầu tiến rất mạnh, nhờ đó mà họ luôn phấn đấu hơn trong công việc và cuộc sống. Chính vì vậy mà họ sẽ gặt hái được nhiều thành tựu tốt đẹp.\r\n\r\n\r\n\r\n(Tư duy cầu tiến thường là nhưng người ham học hỏi, luôn muốn phát triển bản thân)\r\n7. Quản lý thời gian\r\n\r\nỨng viên có kỹ năng quản lý thời gian là những người có thể tối ưu hóa được năng suất làm việc. Vì họ biết cách lập kế hoạch, phân bổ thời gian, biết cách sắp xếp công việc hợp lý để hoàn thành đúng hoặc trước cả thời gian. Những ứng viên này cũng là người có tính kỷ luật cao, rõ ràng trong công việc thông qua việc họ tuân thủ đúng với kế hoạch mà họ đặt ra. Do đó mà nhà tuyển dụng rất coi trọng kỹ năng này. Không chỉ là kỹ năng cần có trong công việc, đây cũng là kỹ năng giúp cuộc sống của bạn được cân bằng. \r\n\r\n8. Kỹ năng lãnh đạo\r\n\r\nKỹ năng lãnh đạo không chỉ cần thiết khi tuyển dụng các nhân sự cấp quản lý, mà bất kỳ nhân sự nào cũng nên sở hữu kỹ năng này. Vì người có kỹ năng lãnh đạo là người tư duy chiến lược, có thể dùng những kiến thức, chiến lược của mình để thúc đẩy, tạo sự ảnh hướng tới những người xung quanh để thực hiện mục tiêu chung của tổ chức. Và thường thì những người có kỹ năng lãnh đạo tốt còn có thể cung cấp năng lượng tích cực, tạo động lực cho những người xung quanh. Kỹ năng này cũng có thể giải quyết những mâu thuẫn hay khó khăn của các nhân viên với nhau, đảm bảo hoạt động tổ chức, tiến độ công việc diễn ra một cách suôn sẻ.\r\n\r\n\r\n\r\n(Không chỉ cấp quản lý, bất kỳ nhân viên nào cũng cần sở hữu kỹ năng lãnh đạo)\r\n9. Kỹ năng làm việc dưới áp lực\r\n\r\nBất cứ ngành nghề trong lĩnh vực nào, công việc sẽ luôn có những khó khăn và áp lực riêng. Vậy nên làm việc dưới áp lực cũng trở thành kỹ năng cần có khi đi làm rất quan trọng. Để phát triển và tạo nên những thành tích trong công việc cần phải chuẩn bị cho mình tâm lý vững vàng để đối mặt với những thử thách. Có những công việc lại thường xuất hiện những tình huống bất ngờ, cần sự linh hoạt, thay đổi nhanh chóng và đòi hỏi cần phải bình tĩnh và đưa ra những quyết định đúng đắn. Do đó mà kỹ năng xử lý, ứng phó với những áp lực căng thẳng là vô cùng quan trọng. Mỗi người nhân sự gần như bắt buộc phải có kỹ năng này để có tâm lý vững vàng, gắn bó lâu dài với công việc, làm việc năng suất và đảm bảo kết quả của công việc.\r\n\r\n10. Tư duy sáng tạo\r\n\r\nTư duy sáng tạo là một trong những yếu tố dẫn đến thành công của nhiều doanh nghiệp. Để có thể dẫn đầu thị trường trong thời đại mọi thứ đều đang thay đổi và phát triển vượt bậc thì tư duy sáng tạo chiếm một vai trò rất quan trọng. Những người có tư duy sáng tạo luôn đưa ra những ý tưởng cách giải quyết độc đáo trước những vấn đề. Tuy không phải lúc nào những ý tưởng đều áp dụng được với thực thế nhưng những người có tư duy sáng tạo sẽ sẵn sàng khám phá, thử nghiệm để đưa ra cách giải quyết hiệu quả nhất, mà chưa ai có thể nghĩ ra. Các doanh nghiệp cũng sẵn sàng để các nhân sự mình có thời gian để thử nghiệm những ý tưởng của mình. Doanh nghiệp muốn tạo nên sự đột phá thì không thể thiếu được tư duy sáng tạo, và do đó họ luôn tìm kiếm những ứng viên sở hữu tư duy này.\r\n\r\nTrên đây là top 10 kỹ năng cần có khi đi làm mà bạn có thể tham khảo. Đây là những kỹ năng bạn phải kiên nhẫn, nỗ lực để rèn luyện. Và chắc rằng khi sở hữu chúng, bạn không chỉ dừng lại việc trở thành ứng viên sáng giá trong mắt mà tuyển dụng mà bạn sẽ đạt được nhiều thành công, thăng tiến trong sự nghiệp của mình.', '2023-10-05', '2023-10-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cty`
--

CREATE TABLE `cty` (
  `id_cty` int(11) NOT NULL,
  `img_cty` text NOT NULL,
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
(15, '<figure class=\"image\"><img src=\"../../images/logo-company/170273238222.jpg\"></figure>', 'Công Ty TNHH Dịch Vụ Truyền Thông Gadas', '10-20', '<p>Gadas là công ty cung cấp các giải pháp truyền thông và nhân sự cho các Doanh nghiệp, đặc biệt trong lĩnh vực Tài chính Ngân hàng.&nbsp;</p><p>Với nền tảng tuyển dụng trực tuyến vững chắc cùng mạng lưới đa kênh trên thị trường việc làm, Gadas đã hợp tác mang lại những giá trị thiết thực cho nhiều ứng viên cũng như các doanh nghiệp trong và ngoài nước.</p><p>Với mong muốn hỗ trợ và gắn kết giữa những người đang tìm kiếm việc làm với các công ty, Gadas đã xây dựng một hệ thống tìm kiếm, phân loại công việc thông minh; một đội ngũ nhân sự tận tâm, tận lực và một cộng đồng Gadas chia sẻ nhiều thông tin về việc làm trên toàn quốc.</p><p>Chia sẻ nhiệt tình, hỗ trợ chu đáo, xúc tiến quy trình tuyển dụng nhanh chóng và chăm sóc khách hàng tận tâm là những điều Gadas luôn đề cao hàng đầu.&nbsp;</p><p>Đến với Gadas, tổng thời gian từ khi tiếp nhận hồ sơ, tư vấn đến khi đi làm chính thức sẽ được tối ưu hóa ở mức thấp nhất. Việc này là điều Gadas luôn chú trọng hàng đầu, để có thể giúp các ứng viên mau chóng tìm được một công việc ổn định hài lòng.</p><p>“Nghề chọn người chứ người đâu chọn nghề”, đó là câu bạn hay nghe, còn Gadas sẽ nói rằng: “Chúng tôi sẽ giúp bạn chạm đến một công việc phù hợp và mang nhiều lợi ích nhất đến với cuộc sống của bạn”</p><p>Hôm nay bạn có thể tự tìm kiếm cho mình một công việc mới, hoặc liên hệ Gadas để chúng tôi giúp bạn chạm đến một công việc tốt nhanh chóng.</p><p><br>&nbsp;</p>', 'Xuân Thủy, Phường Thảo Điền, Thành phố Thủ Đức, Thành phố Hồ Chí Minh', 3, '2023-12-16 13:13:13'),
(16, '<figure class=\"image\"><img src=\"../../images/logo-company/1702732461ewrew.png\"></figure>', 'Công Ty Cổ Phần Đầu Tư Và Phát Triển Kinh Doanh Hoàng Phát', '50-100', '<p>Với nền tảng tuyển dụng trực tuyến vững chắc cùng mạng lưới đa kênh trên thị trường việc làm, Gadas đã hợp tác mang lại những giá trị thiết thực cho nhiều ứng viên cũng như các doanh nghiệp trong và ngoài nước.</p><p>Với mong muốn hỗ trợ và gắn kết giữa những người đang tìm kiếm việc làm với các công ty, Gadas đã xây dựng một hệ thống tìm kiếm, phân loại công việc thông minh; một đội ngũ nhân sự tận tâm, tận lực và một cộng đồng Gadas chia sẻ nhiều thông tin về việc làm trên toàn quốc.</p><p>Chia sẻ nhiệt tình, hỗ trợ chu đáo, xúc tiến quy trình tuyển dụng nhanh chóng và chăm sóc khách hàng tận tâm là những điều Gadas luôn đề cao hàng đầu.&nbsp;</p>', '745 Phạm Văn Thuận, KP5, Tam Hiệp, Biên Hòa, Đồng Nai', 4, '2023-12-16 13:14:42'),
(14, '<figure class=\"image\"><img src=\"../../images/logo-company/1702732168Untitled.jpg\"></figure>', 'Công Ty CP Phân Phối Quốc Tế Genex', '30- 50', '<p>Công Ty Cổ Phần Phân Phối Quốc Tế Genex (trước đây là Công ty TNHH Sản phẩm trẻ em Chí Việt).</p><p>Trụ sở chính: 123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, TP. HCM</p><p>Chi Nhánh Hà Nội: 52-53 TT 20, Khu Đô Thị Văn Phú, Hà Đông, Hà Nội Website: http://genex.com.vn</p><p>Facebook nhãn hiệu Fatz baby: https://www.facebook.com/fatzbabyvietnam</p><p>Kênh Youtube nhãn hiệu Fatz baby: https://www.youtube.com/@FATZBABYVIETNAM</p><p>Công Ty Cổ Phần Phân Phối Quốc Tế Genex là nhà phân phối đồ dùng mẹ và bé trên toàn quốc (các nhãn hiệu: Unimom, Fatz baby, Upass, Ange) với khoảng 2.000 điểm bán. Nhãn hiệu Fatz baby, đã phổ biến trên thị trường 14 năm, là nhãn hiệu số 1 hiện nay cho ngành hàng đồ dùng mẹ và bé (máy hâm sữa, máy tiệt trùng, máy hút sữa, máy đun nước pha sữa, …) tại Việt Nam.</p><p>Mô hình quản trị, văn hóa và phương thức làm việc của công ty theo phương Tây/Mỹ. Công ty chỉ có 1 cổ đông và được xây dựng dựa trên sự minh bạch, công bằng, rõ ràng. Không phát triển dựa trên quan hệ thân hữu/họ hàng. Chúng tôi dựa vào Tinh thần làm chủ, Kỹ năng lãnh đạo và Tài năng để thăng tiến và phát triển. Chúng tôi coi con người là 1 trong những tài sản quý giá nhất của Công ty.</p><p>Tại Công ty, mọi người đều bình đẳng, tôn trọng lẫn nhau và tôn trọng sự khác biệt. Ý chí, Nghị lực, Tố chất lãnh đạo và Tinh thần làm chủ là những giá trị cốt lõi của Công ty và là yếu tố giúp Công ty vượt qua những giai đoạn khó khăn nhất. Chúng tôi làm việc với niềm tin “Không gì là không thể”, luôn hướng tới mục đích thành công lâu dài. Chúng tôi tin rằng mỗi cá nhân, không phân biệt giới tính, tuổi tác, sắc tộc, tôn giáo hay học vấn, đều có thể vươn tới thành công với lòng kiên trì, sáng tạo và nỗ lực không ngừng nghỉ. (Xin xem mục “Chúng tôi là ai” trên website http://genex.com.vn).</p><p>Quy mô công ty: 50-60 nhân viên.</p>', ' TP.HCM, 123A Gò Dầu, Tân Quý,, Tân Phú', 1, '2023-12-16 13:09:31');

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
(3, 'Khác', '2023-09-12 07:32:04'),
(4, 'Không yêu cầu', '2023-12-08 04:35:22');

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
(4, 'dong nai', 'Nữ', ' ewq@krwej.com', '0533333334', '2023-12-14', 'Công nghệ thông tin', '4 năm', 'Trung cấp', 'Tỉnh Đồng Nai', 'ewqeqwe', 'dsads', 'dsd', 'dsd', '2023-12-05 07:07:13', '2023-12-05 07:07:13');

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
(32, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'VN01', 1, 1, 2, 2, '2024-01-05', 4, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>1) Công việc Quản lý bảo hành:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ bảo hành của các nhân viên bảo hành Khu vực Miền Nam, bao gồm: tiếp nhận thông tin sản phẩm lỗi, sửa chữa sản phẩm lỗi và giao lại cho khách hàng.</p><p>- Đào tạo, phát triển, đánh giá và quản lý hiệu suất làm việc các nhân viên bảo hành Miền Nam;</p><p>- Làm việc với các đối tác nước ngoài về lỗi, cách xử lý lỗi …</p><p>- Tổng hợp linh phụ kiện bảo hành cần gửi QLBH Toàn quốc.</p><p>- Tổng hợp kết quả bảo hành sản phẩm theo tuần/tháng để báo cáo QLBH Toàn quốc;</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>2) Công việc Kho vận:</p><p>- Phân công công việc, quản lý tiến độ và chất lượng dịch vụ giao hàng của các nhân viên khu vực Miền Nam, bao gồm: giao hàng đầy đủ, đúng hạn, đúng địa chỉ, …</p><p>- Kiểm tra và phê duyệt chi phí chành xe chính xác, tiết kiệm và hợp lý.</p><p>- Đánh giá, lựa chọn các nhà xe, chành xe đi tỉnh để có dịch vụ tốt, chi phí hợp lý, có hóa đơn VAT;</p><p>- Đặt in tem, nhãn - quản lý việc dán tem, nhãn đảm bảo hàng hóa đầy đủ tem nhãn trước khi ra khỏi kho</p><p>- Quản lý hàng hóa xuất/nhập và tồn trong kho: chính xác, sạch sẽ, đúng quy định</p><p>- Kiểm kê kho mỗi tháng ít nhất 01 lần; Chủ động báo cáo, đưa ra hướng xử lý hàng sắp hết date, hàng bị móp méo không xuất bán được ra thị trường;</p><p>- Quản lý dịch vụ kho, dịch vụ vận chuyển do bên thứ 3 cung cấp tại TP.HCM;</p><p>- Tổng hợp kết quả giao hàng/kho vận theo tháng báo cáo cho Quản lý giao hàng-Kho vận Toàn quốc</p><p>- Các công việc khác theo yêu cầu của cấp trên;</p><p>3) Tương tác nội bộ:</p><p>- Làm việc với phòng Kinh doanh, Kế toán, Phát triển sản phẩm, Kiểm soát chất lượng, Thiết kế, … Báo cáo trực tiếp cho QLGiao hàng – Bảo hành Toàn quốc.</p><p>4) Tương tác bên ngoài:</p><p>- Làm việc với các đối tác nước ngoài và khách hàng.</p><p>5) Nơi làm việc: 123A Gò Dầu, Tân Quý, Tân Phú, TP.HCM</p><p>6) Thời gian làm việc: Thứ 2 đến thứ 6: từ 8h đến 17h (nghỉ trưa từ 12h đến 13h); Thứ 7: từ 8h sáng đến 12h trưa; Nghỉ chiều thứ 7, ngày chủ nhật, ngày Lễ, Tết theo Luật lao động.</p>', '<p>- Có tố chất lãnh đạo, quản lý và tinh thần làm chủ;</p><p>- Có tính cách liêm chính, thật thà, trung thực, tinh thần học hỏi, trách nhiệm và cầu tiến;</p><p>- Có kiến thức về kỹ thuật (để hiểu sản phẩm đồ dùng, máy móc ngành hàng mẹ và bé); Tốt nghiệp các trường trung cấp, cao đẳng trở lên chuyên ngành kỹ thuật;</p><p>- Giao tiếp tốt bằng tiếng Anh (đọc, hiểu, viết .....); sử dụng thành thạo máy tính</p><p>- Chịu được áp lực công việc.</p><p>- Ưu tiên ứng viên có kinh nghiệm</p><p>- Mong muốn làm việc và gắn bó lâu dài;</p>', '<p>- Thử việc 2 tháng, được hưởng 80% lương chính thức, được đào tạo qua công việc.</p><p>- Môi trường làm việc minh bạch, công bằng, rõ ràng, là một nơi để bạn có thể phát triển lâu dài.</p><p>- Lương cơ bản: thỏa thuận (tối thiểu là 20 triệu/tháng). Có Bảo hiểm Y tế, BHXH, BHTN, Bảo hiểm PVI. Lương tháng 13, thưởng hàng mới, thưởng đột xuất, phúc lợi, … theo chính sách Công ty.</p><p>- Được làm việc với các Quản lý giỏi, các đối tác nước ngoài;</p>', '<ul><li>-Cách ứng tuyển: Phỏng vấn trực tiếp</li><li>-Số điện thoại: 0363212627</li><li>-Email: tuyendungjapan@vietseiko.com</li><li>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</li><li>-Hạn nhận hồ sơ: 30-01-2024</li></ul>', 1, 14, '20-30', '2023-12-16 12:58:32', '2023-12-16 13:04:42');

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
(1, 'Full Time', '', '2023-08-29 06:41:17'),
(2, 'Part-Time', '', '2023-08-29 06:43:12'),
(3, 'Freelancer', '', '2023-08-29 06:43:31');

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
(23, 'Nhân Viên Tư Vấn Trả Góp Tại Cửa Hàng - Toàn Quốc', 'nhân viên', 'KS01', 7, 1, 5, 3, '2024-01-07', 4, '10-12', 'Hồ Chí Minh', 'Lầu 2, Ree Tower, 09 Đoàn Văn Bơ, Q. 4, Tp. Hcm', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 15, '20-30', 'Cấp độ N2', '2023-12-16 13:43:55', '2023-12-16 13:43:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_nganhnghe`
--

CREATE TABLE `job_nganhnghe` (
  `id_nganhnghe` int(11) NOT NULL,
  `name_nganhnghe` varchar(255) NOT NULL,
  `img_nganhnghe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_nganhnghe`
--

INSERT INTO `job_nganhnghe` (`id_nganhnghe`, `name_nganhnghe`, `img_nganhnghe`, `created_at`) VALUES
(1, 'Sản xuất', '', '2023-12-07 04:02:03'),
(2, 'Kỹ thuật', '', '2023-12-07 04:02:11'),
(3, 'Cơ khí', '', '2023-12-07 04:01:47'),
(4, 'Tự động hóa', '', '2023-12-07 04:01:47'),
(5, 'Công nghệ thông tin', '', '2023-12-07 04:01:47'),
(6, 'Khối ngoại ngữ', '', '2023-12-07 04:01:47'),
(7, 'Xuất nhập khẩu và Logistics', '', '2023-12-07 04:02:59'),
(8, 'Khối cấp cao và khối văn phòng có ngoại ngữ', '', '2023-12-07 04:02:59'),
(9, 'Khác', '', '2023-12-07 04:03:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_nhatban`
--

CREATE TABLE `job_nhatban` (
  `id_NB` int(11) NOT NULL,
  `name_NB` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_nganhnghe_NB` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `mucluong` varchar(255) NOT NULL,
  `trinhdo` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `yeucau` text NOT NULL,
  `quyenloi` text NOT NULL,
  `hinhthucPV` varchar(255) NOT NULL,
  `ngaydang` date NOT NULL,
  `ngaychot` date NOT NULL,
  `thongtinxinghiep` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_nhatban`
--

INSERT INTO `job_nhatban` (`id_NB`, `name_NB`, `diachi`, `id_nganhnghe_NB`, `soluong`, `gioitinh`, `mucluong`, `trinhdo`, `mota`, `yeucau`, `quyenloi`, `hinhthucPV`, `ngaydang`, `ngaychot`, `thongtinxinghiep`, `created_at`) VALUES
(1, 'Tuyển Dụng Kỹ Sư Chuyển Việc Tại Nhật', 'TOKYO, KANAGAWA, SAITAMA, CHIBA, GUNMA', 1, 10, 'Nam/Nữ', '217.800 Yên', 'NHận bằng chuẩn nhà hàng khách sạn (ngoài ra bằng kinh tế bằng ngôn ngữ đều được)', 'Quản lý nhà hàng (Dịch vụ khách hàng, kế toán, kinh doanh,... như tên cho quản lí toàn bộ hoạt động của quán)', 'Bạn sẽ chịu trách nhiệm về một loạt hoạt động của của hàng:\r\n- Dịch vụ khách hàng, hướng dẫn, kế toán.\r\n- Nấu ăn, phục vụ, nướng đơn giản.\r\n- Đặt hàng thực phẩm để chuẩn bị cho ngày mới', '', 'Phỏng vấn online', '2023-10-09', '2023-10-26', '2', '2023-10-09');

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
(7, 'Quản Lý Bảo Hành – Kho Vận Khu Vực Tp.HCM', 'Quản lý cấp trung', 'Vsk01', 3, 1, 2, 6, '2024-03-16', 2, '20-30', 'Hồ Chí Minh', '123A Gò Dầu, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh, Việt Nam', '<p>- Theo dõi quy trình bán hàng của VPBFC để tư vấn các sản phẩm của VPBFC đến khách hàng</p><p>- Xây dựng mối quan hệ tốt và duy trì mức độ hài lòng với các Đại lý</p><p>- Hoàn thành mục tiêu bán hàng &amp; làm báo cáo hàng ngày.</p><p>- Thiết lập các tiến độ thanh toán cho khách hàng để giảm Chi phí tổng thể bằng cách thanh lý các khoản vay, hợp đồng lãi suất cao, ngắn hạn trước.</p><p>- Đánh giá &amp; kiểm tra hồ sơ khách hàng để giảm thiểu sai lầm cho mỗi ứng dụng cũng như loại bỏ khách hàng lừa đảo</p><p>- Triển khai chiến dịch khuyến mãi mới để giúp Bộ phận bán hàng đạt được mục tiêu</p><p>- Kiểm soát POSM, xây dựng hình ảnh hiệu quả trong POS.</p><p>- Thực hiện các nhiệm vụ khác được giao bởi quản lý trực tiếp</p>', '<p>- Ít nhất 1 năm kinh nghiệm tại vị trí tư vấn bán hàng</p><p>- Kinh nghiệm bán hàng trong khu vực</p><p>- Hiểu biết về các sản phẩm và dịch vụ tài chính</p><p>- Kỹ năng giao tiếp và soạn thảo bằng văn bản tốt</p><p>- Thành thạo phần mềm Microsoft Office</p><p>- KHÔNG CÓ NỢ XẤU</p>', '<p>- Lương cứng + phụ cấp cơm (tùy khu vực)</p><p>- Thưởng hoa hồng không giới hạn</p><p>- Thử việc 100% lương + tất cả chế độ phúc lợi ngay khi nhận việc</p><p>- 15 ngày ngỉ phép năm, các ngày nghỉ lễ, tết</p><p>- Bảo hiểm theo quy định, có thêm thẻ bảo hiểm sức khỏe toàn diện</p><p>- Được đào tạo, cơ hội thăng tiến rộng mở</p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 16, '20-30', '2023-12-16 13:48:59', '2023-12-16 13:48:59');

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
(30, 'Nhân Viên Kinh Doanh', 'nhân viên', 'JP01', 5, 3, 5, 6, '2024-01-05', 1, '10-12', 'Hầ Nội', '- Hà nội: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '<p><i><strong>- Chăm sóc khách hàng:</strong></i></p><p>+&nbsp;Báo giá theo yêu cầu của khách hàng công ty</p><p>+ Soạn hợp đồng, hồ sơ liên quan</p><p>+ Kết nối thông tin giữa công ty với các khách hàng của công ty</p><p>+ Theo dõi công nợ bán hàng của khách hàng đang đảm trách để liên hệ nhắc khách hàng khi đến hạn thanh toán</p><p><i><strong>- Mua hàng- cung ứng</strong></i></p><p>Triển khai các đơn hàng sau khi bộ phận kinh doanh chót đơn hàng với khách hàng:</p><p>+&nbsp;Đặt mua hàng</p><p>+ Thuê xe vận chuyển (theo danh sách vận chuyển đang có) để vận chuyển hàng từ nhà máy hoặc nơi mua đến công trình</p><p>+ Theo dõi tiến độ giao hàng theo phương thức giao hàng của mỗi đơn hàng.</p><p>+ Nhận bộ chứng từ mua hàng, bán hàng kiểm tra đầy đủ theo qui&nbsp;định</p><p>+&nbsp;Theo dõi công nợ nhà cung cấp và đơn vị vận chuyển: Theo dõi công nợ và trình thanh toán theo kế hoạch thanh toán</p><p>+&nbsp;&nbsp;Theo dõi pháp lý mua hàng, vận chuyển</p>', '<p>-Tin học văn phòng: Thuần thạo word, excel</p><p>-Tính toán nhanh.</p><p>-Có khả năng suy luận logic, nghe hiểu vấn đề</p>', '<p><strong>- Lương:</strong>&nbsp;Từ 8.500.000đ đến 14.000.000đ : Tuỳ kinh nghiệm làm việc và năng lực của mỗi ứng viên&nbsp;</p><p><strong>- Thưởng:</strong>&nbsp;Theo qui chế công ty&nbsp;<strong>(&nbsp;</strong>Tối thiểu 1 tháng lương tháng 13 (lương thực nhận))</p><p><strong>- Chế độ khác</strong>: Nghỉ Lễ theo các ngày nghỉ nhà nước qui&nbsp;định</p><p><strong>- Bảo hiểm:&nbsp;</strong>Công ty đóng bảo hiểm ngay sau khi ký hợp đồng lao động chính thức</p><p><strong>Thời gian làm việc tại công ty:</strong>&nbsp;8h/ ngày (sáng:7h45 đến 11h45, chiều: 13h15 đến 17h15)</p><p>&nbsp;</p><p><i><strong>Khi nhân viên được tuyển vào làm việc thì có Anh/chị trong công ty sẽ hướng dẫn trực tiếp công việc đảm nhận</strong></i></p>', '<p>-Cách ứng tuyển: Phỏng vấn trực tiếp</p><p>-Số điện thoại: 0363212627</p><p>-Email: tuyendungjapan@vietseiko.com</p><p>-Yêu cầu hồ sơ: Tiếng nhật giao tiếp tốt</p><p>-Hạn nhận hồ sơ: 30-01-2024</p>', 1, 14, '20-30', 'nn1', '2023-12-16 13:24:46', '2023-12-16 13:24:46');

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
-- Cấu trúc bảng cho bảng `nganh_ung_tuyen`
--

CREATE TABLE `nganh_ung_tuyen` (
  `id` int(11) NOT NULL,
  `ten_nganh` varchar(255) NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh_ung_tuyen`
--

INSERT INTO `nganh_ung_tuyen` (`id`, `ten_nganh`, `created_At`) VALUES
(1, 'Sản xuất', '2023-12-05 03:34:51'),
(2, 'Kỹ thuật', '2023-12-05 03:34:51'),
(3, 'Cơ khí', '2023-12-05 03:34:51'),
(4, 'Tự động hóa', '2023-12-05 03:34:51'),
(5, 'Công nghệ thông tin', '2023-12-05 03:34:51'),
(6, 'Khối ngoại ngữ', '2023-12-05 03:34:51'),
(7, 'Xuất nhập khẩu và Logistics', '2023-12-05 03:34:51'),
(8, 'Khối cấp cao và khối văn phòng có ngoại ngữ', '2023-12-05 03:36:34'),
(9, 'Khác', '2023-12-05 03:36:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Việc Làm Tại Việt Nam'),
(2, 'Xuất Khẩu Lao Động Nhật Bản'),
(3, 'Kỹ Sư & Thông Dịch Viên'),
(4, 'Việc làm tại VietSeiko');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes_congcu`
--

CREATE TABLE `protypes_congcu` (
  `id_congcu` int(11) NOT NULL,
  `name_congcu` varchar(255) NOT NULL,
  `img_congcu` varchar(255) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes_congcu`
--

INSERT INTO `protypes_congcu` (`id_congcu`, `name_congcu`, `img_congcu`, `create_at`) VALUES
(1, 'Cẩm nang nghề nghiệp', '', '2023-10-17'),
(2, 'Tính lương Gross sang Net', '', '2023-10-17'),
(3, 'Trắc nghiệm tính cách', '', '0000-00-00');

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
-- Chỉ mục cho bảng `ban_tin`
--
ALTER TABLE `ban_tin`
  ADD PRIMARY KEY (`id_bantin`);

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
-- Chỉ mục cho bảng `job_nhatban`
--
ALTER TABLE `job_nhatban`
  ADD PRIMARY KEY (`id_NB`);

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
-- Chỉ mục cho bảng `nganh_ung_tuyen`
--
ALTER TABLE `nganh_ung_tuyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `protypes_congcu`
--
ALTER TABLE `protypes_congcu`
  ADD PRIMARY KEY (`id_congcu`);

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
-- AUTO_INCREMENT cho bảng `cty`
--
ALTER TABLE `cty`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `infomation_ung_tuyen`
--
ALTER TABLE `infomation_ung_tuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  MODIFY `id_hinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `job_kysunb`
--
ALTER TABLE `job_kysunb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `job_nhatban`
--
ALTER TABLE `job_nhatban`
  MODIFY `id_NB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `job_vietseiko`
--
ALTER TABLE `job_vietseiko`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `job_xkld_nb`
--
ALTER TABLE `job_xkld_nb`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT cho bảng `protypes_congcu`
--
ALTER TABLE `protypes_congcu`
  MODIFY `id_congcu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

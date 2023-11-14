-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 10:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

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
  `img_cty` varchar(255) NOT NULL,
  `name_cty` varchar(255) NOT NULL,
  `phone_cty` int(11) NOT NULL,
  `email_cty` varchar(255) NOT NULL,
  `about_cty` text NOT NULL,
  `responsabilities` text NOT NULL,
  `address_cty` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cty`
--

INSERT INTO `cty` (`id_cty`, `img_cty`, `name_cty`, `phone_cty`, `email_cty`, `about_cty`, `responsabilities`, `address_cty`, `created_at`) VALUES
(1, 'pic1.jpg', 'Galaxy Software Development', 332369993, 'thewebmaxdemo@gmail.com\r\n', 'UUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.\r\n\r\nOpossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.?', 'Establish and promote design guidelines, best practices and standards.\r\nAccurately estimate design tickets during planning sessions.\r\nPartnering with product and engineering to translate business and user goals.', '1363-1385 Sunset Blvd Angeles, CA 90026 ,USA', '2023-08-29 06:26:15');

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
(3, 'Khác', '2023-09-12 07:32:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `capbac` varchar(255) NOT NULL,
  `img_cty` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `id_nganhnghe` int(11) NOT NULL,
  `id_hinhthuc` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `kinhnghiem` varchar(255) NOT NULL,
  `ngaydang` date NOT NULL,
  `ngaycuoicung` date NOT NULL,
  `ngaygan` date NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `mucluong` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `diachi_cuthe` varchar(300) NOT NULL,
  `mota` text DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `quyenloi` text DEFAULT NULL,
  `id_trangthai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id_job`, `name`, `chucvu`, `capbac`, `img_cty`, `type_id`, `id_nganhnghe`, `id_hinhthuc`, `soluong`, `kinhnghiem`, `ngaydang`, `ngaycuoicung`, `ngaygan`, `gioitinh`, `mucluong`, `diachi`, `diachi_cuthe`, `mota`, `yeucau`, `quyenloi`, `id_trangthai`, `created_at`) VALUES
(1, 'Công Ty TNHH ABC', 'Developer Website', 'Nhân Viên', '', 1, 1, 1, 2, '2', '2023-10-02', '2023-10-02', '2023-10-02', '1', '20-30 Triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.', 'Must be able to communicate with others to convey information effectively.\nPersonally passionate and up to date with current trends and technologies, committed to quality and comfortable working with adult media.\nRachelor or Master degree level educational background.\n4 years relevant PHP dev experience.\nTroubleshooting, testing and maintaining the core product software and databases.', 'Establish and promote design guidelines, best practices and standards.\nAccurately estimate design tickets during planning sessions.\nPartnering with product and engineering to translate business and user goals into elegant and practical designs. that can deliver on key business and user metrics.\nCreate wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design.\nPresent and defend designs and key deliverables to peers and executive level stakeholders.\nExecute all visual design stages from concept to final hand-off to engineering.', 0, '2023-09-28 03:52:10'),
(2, 'Công ty TNHH Phân Phối Synnex FPT', 'Nhân Viên IT Helpdesk/ Support Tại Vĩnh Phúc (Thu Nhập 9 - 12 Triệu) ', 'Nhân viên', '', 2, 2, 2, 3, '1', '2023-10-02', '2023-10-13', '2023-10-11', 'Nam', '9 - 12 triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '- Hỗ trợ người dùng cuối từ xa hoặc trực tiếp:\r\n<br/>\r\n- Trong các ứng dụng/dịch vụ phục vụ cho người dùng trong môi trường doanh nghiệp.\r\n<br/>\r\n- Quản lý hệ thống và xử lý các yêu cầu, khắc phục sự cố phần mềm/ phần cứng trên các thiết bị người dùng.\r\n<br/>\r\n- Thực hiện kiểm tra và đề xuất bảo hành, bảo trì , nâng cấp hệ thống và các thiết bị CNTT\r\n<br/>\r\n- Cài đặt các chương trình ứng dụng và các thiết bị CNTT.\r\n<br/>\r\n- Các công việc cụ thể khác được trao đổi trong buổi phỏng vấn.', '- Nam, tốt nghiệp Cao đẳng trở lên các ngành điện tử, viễn thông, CNTT.\r\n<br/>\r\n- Sử dụng được Tiếng Anh cơ bản trong giao tiếp và email\r\n<br/>\r\n- Hiểu biết về hệ thống mạng LAN, WAN\r\n<br/>\r\n- Biết cài đặt mail Outlook, lưu trữ thông tin mail.\r\n<br/>\r\n- Có khả năng quản trị các hệ thống của MS như AD, DNS, DHCP, file, TMG …\r\n<br/>\r\n- Có khả năng cài đặt và quản lý các ứng dụng\r\n<br/>\r\n- Chịu được áp lực công việc, có khả năng làm việc độc lập và làm việc nhóm', '- Thu nhập cạnh tranh 9 - 12 Triệu <br/>\r\n- Lương tháng thứ 13. <br/>\r\n- Thời gian làm việc từ T2 - T6<br/>\r\n- Xem xét tăng lương định kỳ hàng năm.<br/>\r\n- Các chế độ BHYT, BHXH, BHTN theo quy định.<br/>\r\n- Chế độ nghỉ mát, FPT Care theo quy định của Công ty.<br/>\r\n- Môi trường làm việc năng động, hiện đại, tôn trọng cá nhân;<br/>\r\n- Được đào tạo để nâng cao năng lực và nghiệp vụ;<br/>\r\n- Có cơ hội thăng tiến trong Tập đoàn CNTT lớn nhất Việt Nam;<br/>', 1, '2023-10-02 07:04:30'),
(3, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52'),
(4, 'Công Ty TNHH ABC', 'Developer Website', 'Nhân Viên', '', 1, 1, 1, 2, '2', '2023-10-02', '2023-10-02', '2023-10-02', '1', '20-30 Triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.', 'Must be able to communicate with others to convey information effectively.\r\nPersonally passionate and up to date with current trends and technologies, committed to quality and comfortable working with adult media.\r\nRachelor or Master degree level educational background.\r\n4 years relevant PHP dev experience.\r\nTroubleshooting, testing and maintaining the core product software and databases.', 'Establish and promote design guidelines, best practices and standards.\r\nAccurately estimate design tickets during planning sessions.\r\nPartnering with product and engineering to translate business and user goals into elegant and practical designs. that can deliver on key business and user metrics.\r\nCreate wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design.\r\nPresent and defend designs and key deliverables to peers and executive level stakeholders.\r\nExecute all visual design stages from concept to final hand-off to engineering.', 0, '2023-09-28 03:52:10'),
(5, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52'),
(6, 'Công Ty TNHH ABC', 'Developer Website', 'Nhân Viên', '', 1, 1, 1, 2, '2', '2023-10-02', '2023-10-02', '2023-10-02', '1', '20-30 Triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.', 'Must be able to communicate with others to convey information effectively.\r\nPersonally passionate and up to date with current trends and technologies, committed to quality and comfortable working with adult media.\r\nRachelor or Master degree level educational background.\r\n4 years relevant PHP dev experience.\r\nTroubleshooting, testing and maintaining the core product software and databases.', 'Establish and promote design guidelines, best practices and standards.\r\nAccurately estimate design tickets during planning sessions.\r\nPartnering with product and engineering to translate business and user goals into elegant and practical designs. that can deliver on key business and user metrics.\r\nCreate wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design.\r\nPresent and defend designs and key deliverables to peers and executive level stakeholders.\r\nExecute all visual design stages from concept to final hand-off to engineering.', 0, '2023-09-28 03:52:10'),
(7, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52'),
(8, 'Công Ty TNHH ABC', 'Developer Website', 'Nhân Viên', '', 1, 1, 1, 2, '2', '2023-10-02', '2023-10-02', '2023-10-02', '1', '20-30 Triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.', 'Must be able to communicate with others to convey information effectively.\r\nPersonally passionate and up to date with current trends and technologies, committed to quality and comfortable working with adult media.\r\nRachelor or Master degree level educational background.\r\n4 years relevant PHP dev experience.\r\nTroubleshooting, testing and maintaining the core product software and databases.', 'Establish and promote design guidelines, best practices and standards.\r\nAccurately estimate design tickets during planning sessions.\r\nPartnering with product and engineering to translate business and user goals into elegant and practical designs. that can deliver on key business and user metrics.\r\nCreate wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design.\r\nPresent and defend designs and key deliverables to peers and executive level stakeholders.\r\nExecute all visual design stages from concept to final hand-off to engineering.', 0, '2023-09-28 03:52:10'),
(9, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52'),
(10, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52'),
(11, 'Công Ty TNHH ABC', 'Developer Website', 'Nhân Viên', '', 1, 1, 1, 2, '2', '2023-10-02', '2023-10-02', '2023-10-02', '1', '20-30 Triệu', 'HCM', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.', 'Must be able to communicate with others to convey information effectively.\r\nPersonally passionate and up to date with current trends and technologies, committed to quality and comfortable working with adult media.\r\nRachelor or Master degree level educational background.\r\n4 years relevant PHP dev experience.\r\nTroubleshooting, testing and maintaining the core product software and databases.', 'Establish and promote design guidelines, best practices and standards.\r\nAccurately estimate design tickets during planning sessions.\r\nPartnering with product and engineering to translate business and user goals into elegant and practical designs. that can deliver on key business and user metrics.\r\nCreate wireframes, storyboards, user flows, process flows and site maps to communicate interaction and design.\r\nPresent and defend designs and key deliverables to peers and executive level stakeholders.\r\nExecute all visual design stages from concept to final hand-off to engineering.', 0, '2023-09-28 03:52:10'),
(12, 'Công ty TNHH Concentrix Service Vietnam', 'Nhân Viên IT Helpdesk ', 'Nhân viên\r\n', '', 1, 1, 1, 2, '1', '2023-10-02', '2023-10-19', '2023-10-17', 'Không yêu cầu\r\n', 'Tới 15 triệu', 'Hồ Chí Minh', '- Hồ Chí Minh: số 14 đường số 7 khu đô thị Him Lam, Tân Hưng, Quận 7', '• Provide support to end-users in regard to network connectivity and desktop computing. \r\n• Maintain and support PC workstations and laptop. This will include troubleshooting and \r\nreplacing hardware components, performing upgrades to existing systems, and \r\ninstalling replacement system. \r\n• Support also includes software support of the operating system, Microsoft Office, and \r\nother standard package used by Concentrix Group. \r\n• Develop, implement and administer IT service, ensure the stability, integrity, and \r\nefficient operation of all information and production systems. \r\n• Responsible for network-telecommunications function and to ensure compatibility and \r\ninteroperability of computer systems, telecommunication and office equipment.', 'Good English: ability to write, read well. \r\n• Ability to analyse, logical thinking. \r\n• Can use office software (Word, Excel, Outlook...) \r\n• At least 2 years of Helpdesk Support', '- 14 ngày phép/năm.\r\n- Tham gia đầy đủ BHXH, BHYT, gói bảo hiểm tai nạn 24/7.\r\n- Xét tăng lương hàng năm.\r\n- Khám sức khỏe hằng năm.\r\n- Lộ trình thăng tiến rõ ràng.\r\n- Tham gia các khóa đào tạo về kỹ năng, nghiệp vụ.\r\n- Môi trường làm việc quốc tế, hiện đại và chuyên nghiệp', 1, '2023-10-02 07:10:52');

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
  `id_kysu` int(11) NOT NULL,
  `name_kysu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'IT', '', '2023-08-29 06:39:34'),
(2, 'QA', '', '2023-08-29 06:43:44');

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
(0, 'Active', '', '2023-09-29 08:38:31'),
(1, 'In Active', '', '2023-09-29 08:39:18');

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
(2, '2 Năm', '2023-09-12 07:29:46');

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
  `type_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`, `type_img`) VALUES
(1, 'Việc Làm Tại Việc Nam', ''),
(2, 'Xuất Khẩu Lao Động Nhật Bản', ''),
(3, 'Kỹ Sư & Thông Dịch Viên', '');

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
(3, 'admin', NULL, '', '25f9e794323b453885f5181f1b624d0b', '', '', 0, '', '2023-11-13 09:09:41', 1);

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
  ADD PRIMARY KEY (`id_kysu`);

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
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `job_hinhthuc`
--
ALTER TABLE `job_hinhthuc`
  MODIFY `id_hinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `job_nganhnghe`
--
ALTER TABLE `job_nganhnghe`
  MODIFY `id_nganhnghe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `job_nhatban`
--
ALTER TABLE `job_nhatban`
  MODIFY `id_NB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `id_kn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nganhnghe_nb`
--
ALTER TABLE `nganhnghe_nb`
  MODIFY `id_nganhnghe_NB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `protypes_congcu`
--
ALTER TABLE `protypes_congcu`
  MODIFY `id_congcu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_employer`
--
ALTER TABLE `user_employer`
  MODIFY `id_employer` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

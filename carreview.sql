-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `linkImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `name`, `type`, `description`, `link`, `content`, `linkImage`) VALUES
(1, 'Car rental review\r\n', 'Thông tin', 'Thị trường cho thuê ô tô đang khá phổ biến ở Việt Nam hiện nay. Car rental là kênh chuyên mua bán, cho thuê ô tô giá hợp lý...', './/////', 'Thị trường cho thuê ô tô đang khá phổ biến ở Việt Nam hiện nay. Car rental là kênh chuyên mua bán, cho thuê ô tô giá hợp lý nhất thị trường. Chúng tôi là đơn vị uy tín hàng đầu Việt Nam', './assets/img/about-1-570x350.jpg'),
(2, 'Địa chỉ', 'Địa chỉ', 'Địa chỉ trụ sở chính\r\nTầng 29 Tòa Keangnam Landmark, KĐT mới Cầu Giấy, Phường Mễ Trì, Quận Nam Từ Liêm, TP. Hà Nội.\r\n024.3212.3830 | 0904.573.739\r\nGiấy chứng nhận ĐKDN số 0106774081 cấp bởi Phòng ĐKKD', '', 'Địa chỉ trụ sở chính\r\nTầng 29 Tòa Keangnam Landmark, KĐT mới Cầu Giấy, Phường Mễ Trì, Quận Nam Từ Liêm, TP. Hà Nội.\r\n024.3212.3830 | 0904.573.739\r\nGiấy chứng nhận ĐKDN số 0106774081 cấp bởi Phòng ĐKKD Hà Nội ngày 11/02/2015\r\nGiấy phép ICP số 978/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 14/4/2015\r\nGiấy phép sửa đổi, bổ sung Giấy phép ICP Số 4362/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 20/10/2017\r\nVăn phòng TP. Hồ Chí Minh\r\nTầng 14, Toà nhà Vietcombank, số 5 Công Trường Mê Linh, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh.\r\n0965.336.806 | 0965.336.806', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `linkimage` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `linkimage`, `content`, `date`, `link`, `author`) VALUES
(1, 'Khách hàng nói gì sau khi lái thử xe VinFast Fadil', 'Từ ngày 1/6 đến 15/6/2019, khách hàng có thể đến 32 showroom và đại lý của VinFast để trải nghiệm lái thực tế chiếc xe đô thị đa dụng từ nhà sản xuất Việt Nam.', './assets/img/vinfast-fadil.jpg', 'Từ ngày 1/6 đến 15/6/2019, khách hàng có thể đến 32 showroom và đại lý của VinFast để trải nghiệm lái thực tế chiếc xe đô thị đa dụng từ nhà sản xuất Việt Nam.\r\nChương trình lái thử xe là cơ hội cho khách hàng được “sờ tận tay, lái tận vô lăng” trước khi chính thức trở thành chủ sở hữu xe VinFast Fadil. Chỉ trong 3 ngày kể từ khi bắt đầu, đã có hàng nghìn khách hàng đăng ký lái thử sản phẩm đầu tiên của thương hiệu ô tô Việt. Đây chính là là cơ hội để người tiêu dùng có được cảm nhận cụ thể, chính xác nhất trước khi quyết định có trở thành khách hàng của VinFast hay không. Nhiều khách hàng đã quyết định “mua ngay” sau khi được lái thử chiếc xe này.', '0000-00-00', '//////', 'Ngọc Đức'),
(2, 'Gần 1.500 xe VinFast đến tay khách hàng trong thán', 'VinFast đã nỗ lực để vượt qua tháng bán hàng thấp điểm của thị trường và đạt được kết quả ấn tượng, với tổng cộng 1.494 xe ô tô bán ra thị trường, gồm 849 xe Fadil, 337 xe Lux A2.0 và 308 xe Lux SA2.0', './assets/img/gia-xe-o-to-vinfast-1-11-2019-2.jpg', 'VinFast đã nỗ lực để vượt qua tháng bán hàng thấp điểm của thị trường và đạt được kết quả ấn tượng, với tổng cộng 1.494 xe ô tô bán ra thị trường, gồm 849 xe Fadil, 337 xe Lux A2.0 và 308 xe Lux SA2.0.\r\nTháng vừa qua trùng với thời gian bán hàng thấp điểm của thị trường ô tô Việt Nam, cùng với những diễn biến phức tạp của dịch bệnh Covid-19 đợt 2 đã gây ra những khó khăn không nhỏ cho tình hình sản xuất, kinh doanh của VinFast nói riêng và các doanh nghiệp ô tô nói chung. Mặc dù vậy, VinFast đã nỗ lực để vượt qua khó khăn chung và đạt được kết quả ấn tượng, với tổng cộng 1.494 xe ô tô bán ra thị trường, gồm 849 xe Fadil, 337 xe Lux A2.0 và 308 xe Lux SA2.0.\r\n\r\nTrong tháng 9, VinFast đang tiếp tục triển khai chương trình “Vạn quà tri ân - Tin yêu lan tỏa”, dành tặng các voucher tri ân có trị giá 80 triệu đồng để mua xe Lux A2.0 và 120 triệu đồng để mua Lux SA2.0 cho các khách hàng đã sở hữu xe VinFast. Khách hàng có thể cho, tặng, chuyển nhượng voucher này cho người thân hoặc sử dụng để', '0000-00-00', '', 'Diệu Linh'),
(3, 'Ô tô sau cùng cũng chỉ là phương tiện mà thôi', 'Thời 1985-1995, nghĩa là cách đây hơn 25 năm, xe máy được xem là tài sản lớn trong mỗi gia đình. Và bây giờ, ô tô cũng vậy. Còn tương lai thì sao?', './assets/img/xe-kia-morning-si-2016-18_1.jpg', 'Thời 1985-1995, nghĩa là cách đây hơn 25 năm, xe máy được xem là tài sản lớn trong mỗi gia đình. Và bây giờ, ô tô cũng vậy. Còn tương lai thì sao?\r\nHồi đó có một chiếc Honda Cub 81 kim vàng giọt lệ, xe 82 đèn vuông 70 phân khối, rồi DD đỏ và Dream Thái thì ra đường mặt có thể vênh lên, chả khác giờ sở hữu những xế sang hàng hiệu Mercedes, Lexus hay BMW như thời nay.\r\nỐi người mua xe máy lúc đó, giờ “tiếc ngẩn, tiếc ngơ” nhủ lòng biết thế đi mua đất. Xe thì chỉ có xuống, còn đất nói chung là lên giá, ngoại trừ chỗ quy hoạch treo.\r\nHonda Việt Nam năm 1998 có sản phẩm đầu tiên bán ra thị trường nhưng cơn sốt Dream Thái vẫn không dừng. Mua Dream nội được định nghĩa không thể xịn như Dream Thái. Rồi Honda ra Furture, dân Việt cũng ồn ào xao động. Trong tâm thế dân Việt, xe máy nhất thiết vẫn cứ phải là Dream Thái hay chí ít Cup 82 đèn vuông.\r\nThuở ấy, các hãng như Yamaha, Piaggio, Suzuki, VMEP hoặc là chưa có, chưa vào Việt Nam, hoặc có bán thì cũng là hàng rất phọt phẹt.\r\nCơn sốt xe máy Tà', '0000-00-00', '', 'Tiến Đạt');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `daterantel` date NOT NULL,
  `datereturn` date NOT NULL,
  `namecar` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `numberphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(11) NOT NULL,
  `namelicense` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `namelicense`, `content`) VALUES
(1, 'Chính sách sửa chữa thay thế ', '(1) CHI TIẾT ĐƯỢC BẢO HÀNH:\r\nCHI TIẾT BẢO HÀNH CHUNG và CHI TIẾT ĐẶC BIỆT là các chi tiết của xe ô tô MMV mới mà không thuộc nhóm “CHI TIẾT KHÔNG BẢO HÀNH” là những chi tiết được bảo hành.\r\n(2) THỜI GIAN BẢO HÀNH:\r\nThời gian bảo hành được tính từ thời điểm xe ô tô MMV mới được giao tới người mua đầu tiên ghi trong “Biên Bản Đăng Ký” (Sau đây gọi là “Ngày Bắt Đầu Bảo Hành”).\r\nCác CHI TIẾT BẢO HÀNH CHUNG là các chi tiết không thuộc nhóm CHI TIẾT ĐẶC BIỆT và CHI TIẾT KHÔNG BẢO HÀNH sẽ được bảo hành trong 36 tháng hoặc 100,000 km, tùy điều kiện nào đến trước kể từ “Ngày Bắt Đầu Bảo Hành”.\r\nCác CHI TIẾT ĐẶC BIỆT bao gồm:\r\nThiết bị âm thanh (Radio, CD, DVD, màn hình) được lắp nguyên bản trên xe sẽ được bảo hành trong 36 tháng hoặc 100,000 km, tùy điều kiện nào đến trước kể từ “Ngày Bắt Đầu Bảo Hành”.\r\nẮc-quy được lắp nguyên bản trên xe sẽ được bảo hành trong 12 tháng hoặc 20,000 km, tùy điều kiện nào đến trước kể từ “Ngày Bắt Đầu Bảo Hành”.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `linkimage` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `pricerental` float NOT NULL,
  `status` varchar(20) NOT NULL,
  `timerental` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `linkimage`, `price`, `description`, `pricerental`, `status`, `timerental`, `unit`) VALUES
(1, 'LUX SA2.0', './assets/img/luxSA20.png', 1649000000, 'VinFast Lux SA2.0 là dòng xe SUV/Crossover của thương hiệu xe VinFast, trực thuộc tập đoàn Vingroup, Việt Nam. Đây là dòng xe phát triển dựa trên nền tảng của BMW X5 thế hệ 5, do VinFast mua bản quyền từ hãng xe Đức.', 0, 'bán mới', 0, ''),
(2, 'LUX SA2.0', './assets/img/lux-a.png', 1179000000, 'VINFAST Lux A 2.0 được thiết kế với đầu xe dài bề thế, các đường dập nổi thân xe mềm mại sang trọng, đuôi xe được vuốt lên cao với dãy đèn LED cổ điển, một sự lựa chọn tuyệt vời cho khách hàng phân khúc Sedan hạng sang', 0, 'bán mới', 0, ''),
(3, 'Fadil', './assets/img/offer-3-370x270.jpg', 425000000, 'VinFast Fadil – ô tô thương hiệu Việt có giá rẻ', 0, 'bán mới', 0, ''),
(4, 'Mercedes S450 Luxury', 'assets/img/mercedes-s450-luxury .jpg', 4869000000, 'S-Class là dòng xe hạng sang, với doanh số bán ra hơn 500 chiếc vào năm 2017. S-Class trở thành dòng xe chiếm thị phần lớn nhất trong dòng Sedan cùng phân khúc.\r\nMercedes S450L Luxury là mẫu Sedan là phiên bản kết hợp hoàn hảo giữa hai phạm trù phong cách và vị thế.\r\nKhông chỉ mang ngoại hình đẹp, sang trọng bật nhất. S450L Luxury còn trang bị nội thất và khả năng vận hành ấn tượng.', 0, 'bán mới', 0, ''),
(5, 'Toyota Camry', './assets/img/gia-xe-toyota-camry-25q-2020-muaxegiatot-vn-2.jpg', 1235000000, 'Toyota Camry 2020 khoác lên mình bộ khung gầm hoàn toàn mới có kích thước tổng thể là 4885x 1840 x 1445 mm.Chi tiết tạo điểm nhấn đáng chú ý nhất ở phần đầu xe là bộ lưới tản nhiệt mở rộng đến tận cản trước tạo cảm giác trọng tâm thấp. Điều này không chỉ giúp đầu xe trông rộng hơn mà còn làm bật lên sự khác biệt trong diện mạo so với phiên bản cũ (Camry 2019 lắp ráp Việt Nam).', 0, 'bán mới', 0, ''),
(6, 'Hyundai Accent 1.4L AT đặc biệt', './assets/img/hyundai-accent-gia-bao-nhieu.JPG', 535000000, 'Thế hệ mới Hyundai Accent 2020 ra mắt tại Việt nam ngày 16/04/2018 dưới dạng lắp ráp. Mẫu xe hạng B khá hút khách của Hyundai Việt Nam có lợi thế so với đối thủ Toyota Vios, Honda City là nhiều option hơn, nhưng giá lại thấp hơn. Sử dụng động cơ 1.4l DOHC, công suất cực đại 100 mã lực và mô men xoắn cực đại 132Nm, với hộp số sàn 6 cấp hoặc tự động 6 cấp, phanh đĩa ABS, cửa sổ trời, đèn Projector... Kích thước xe DRC: 4.440 x 1.729 x 1.460mm, chiều dài cơ sở 2600mm, bán kính vòng quay 5,2m. Xe đư', 0, 'bán mới', 0, ''),
(7, 'Ford Ranger XLS AT 2020', './assets/img/20200922090616-c655_wm.jpg', 620000000, 'Ford Ranger XLS AT 2020 ông vua phân khúc bán tải tại Việt Nam.\r\n- Dòng xe bán tải có động cơ mạnh, hệ thống truyền động tốt cùng khung gầm cao giúp tăng khả năng Off-road.\r\n- Hệ thống treo sau chịu tải tốt hơn trong việc chở hàng hóa.\r\n- Xe có gầm cao và hệ thống cầu cứng phía sau nên xe có thể chở nửa tấn hàng mà vẫn tạo cảm giác nhẹ nhàng trên những địa hình gồ ghề ở tốc độ thấp, hoặc lướt bứt phá khi phải leo dốc cao.\r\n- Xe với thiết kế chi tiết được trau chuốt tỉ mỉ giúp ngoại hình của xe t', 1000000, 'Cho thuê', 1, 'day'),
(8, 'Suzuki XL7 2020 ', './assets/img/20200907111059-7e58_wm.jpg', 579000000, 'Ưu đãi tháng Ngâu dành riêng cho khách hàng từ Oto.com.vn\r\n\r\n\r\n+ Tặng ghế da chính hãng hoặc bảo hiểm vật chất, tổng giá trị tương đương 10 triệu đồng (bao gồm VAT) khi khách hàng liên hệ mua xe từ Oto.com.vn\r\n+ Hạn sử dụng mã ưu đãi đặt chỗ tháng Ngâu: 30/09/2020\r\n+ Lưu ý: Mã ưu đãi chỉ được áp dụng khi Quý khách tiến hành đặt chỗ trong thời gian diễn ra chương trình \"Đặt chỗ tháng Ngâu - Ưu đãi cực ngầu\" và xe vẫn đang được giao dịch.\r\n\r\n\r\nXL7 hoàn toàn mới - dòng SUV đích thực của Suzuki.\r\nGi', 1000000, 'Cho thuê', 1, 'day'),
(9, 'Hyundai Tucson 2020', './assets/img/20200805082741-6efa_wm.jpg', 759000000, 'Số cửa: 5\r\nSố chỗ:5 \r\nHộp số :Số tự động\r\nDẫn động : FWD - Dẫn động cầu trước\r\nNhiên liệu : Xăng\r\nMàu xe : Trắng\r\nMàu nội thất : Kem (Be)', 2000000, 'Cho thuê', 1, 'day'),
(10, 'Mercedes E-Class', './assets/img/gia-xe-mercedes-e-cl-65fb.jpg', 2200000000, 'Xét về giá bán, E200 2020 tăng nhẹ 31 triệu đồng so với phiên bản cũ. Ở lần nâng cấp này, thương hiệu ngôi sao ba cánh tập trung cải thiện hiệu suất vận hành cho E200 2020 nhằm đem đến cảm giác lái mới mẻ cho người dùng.\r\nCụ thể, E200 2020 vẫn sử dụng động cơ cũ Xăng I4 2.0L nhưng đã được tinh chỉnh lại để có thể tăng thêm 13 mã lực so với trước. Nhờ đó E200 mới đạt công suất tối đa 197 mã lực, mô men xoắn cực đại đạt 300 Nm. \r\nmam-xe-mercedes-e200-2019-2020-muaxegiatot-vn\r\nĐi kèm là hộp số tự đ', 10000000, 'Cho thuê', 5, 'day');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `linkImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `description`, `linkImage`) VALUES
(1, 'Võ Ngọc Đức', 'CO-Founder', 'Tốt nghiệp đại Mỏ địa chất. Có 3 năm kinh nghiệm trong quản trị doanh nghiệp, 2 năm kinh nghiệm trong tảng TMDT,đầu tư kinh doanh.', './assets/img/ngocduc.jpg'),
(2, 'Phạm Quan Hậu', 'CO-Founder', 'Tốt nghiệp đại học Mỏ địa chất. Có 3 năm kinh nghiệm trong ngành ô tô.', './assets/img/ngocduc.jpg'),
(3, 'Bùi thao Ly', 'CO-Founder', 'Tốt nghiệp đại học Mỏ địa chất. Có 3 năm kinh nghiệm trong mảng sale marketing.', './assets/img/ngocduc.jpg'),
(4, 'Diệu Linh', 'CO-Founder', 'Tốt nghiệp đại Mỏ địa chất. Có 3 năm kinh nghiệm trong quản trị doanh nghiệp, 2 năm kinh nghiệm trong tảng TMDT,đầu tư kinh doanh.', './assets/img/ngocduc.jpg'),
(5, 'Nguyễn Tiến Đạt', 'CO-Founder', 'Tốt nghiệp đại Mỏ địa chất. Có 3 năm kinh nghiệm trong quản trị doanh nghiệp, 2 năm kinh nghiệm trong tảng TMDT,đầu tư kinh doanh.', './assets/img/ngocduc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `namecus` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(250) NOT NULL,
  `linkImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `namecus`, `date`, `description`, `linkImage`) VALUES
(1, 'Võ Ngọc Đức', '2020-11-14', 'Tôi rất hài lòng về chất lượng dịch vụ và xe bên bạn', './assets/img/depositphotos_108108494-stock-photo-happy-client-giving-car-keys.jpg'),
(2, 'Diệu Linh', '2020-10-16', 'Tôi cực kỳ thích cách chăm sóc khách hàng của bên bạn', './assets/img/happy-female-client-sitting-new-comfortable-automobile_7502-2305.jpg'),
(3, 'Nguyễn Tiến Đạt', '2020-09-15', 'OTO bên bạn rất tuyệt vời.Cảm ơn', './assets/img/inline_image_preview.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

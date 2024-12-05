-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2024 lúc 12:27 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_ve`
--

CREATE TABLE `chi_tiet_ve` (
  `id` varchar(5) NOT NULL,
  `ma_ve` int(10) NOT NULL,
  `loai_ve` varchar(10) NOT NULL,
  `trang_thai` varchar(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `gia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_ve`
--

INSERT INTO `chi_tiet_ve` (`id`, `ma_ve`, `loai_ve`, `trang_thai`, `so_luong`, `gia`) VALUES
('1', 1, 'Vé thường', 'Đã mua', 1, 75000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` varchar(5) NOT NULL,
  `cot` varchar(10) NOT NULL,
  `hang` varchar(10) NOT NULL,
  `trang_thai` varchar(10) NOT NULL,
  `loai_ghe` varchar(10) NOT NULL,
  `cap_nhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id`, `cot`, `hang`, `trang_thai`, `loai_ghe`, `cap_nhat`) VALUES
('A1', '1', '1', 'Trống', 'Ghế thường', '2024-11-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(5) NOT NULL,
  `ma_nguoi_dung` int(10) NOT NULL,
  `tong_tien` int(10) NOT NULL,
  `ngay_tao` datetime(6) NOT NULL,
  `ngay_cap_nhat` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ma_nguoi_dung`, `tong_tien`, `ngay_tao`, `ngay_cap_nhat`) VALUES
(1, 1, 75000, '2024-11-21 14:29:51.000000', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(5) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `mat_khau` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sdt` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten`, `mat_khau`, `email`, `sdt`) VALUES
(1, 'Nguyễn Thành Công', 'thanhcong123', 'thanhcong123@gmail.com', '0972651735');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` varchar(5) NOT NULL,
  `ten` varchar(20) NOT NULL,
  `hinh_anh` varchar(30) DEFAULT NULL,
  `mo_ta` varchar(300) NOT NULL,
  `the_loai` varchar(20) NOT NULL,
  `thoi_luong` int(5) NOT NULL,
  `ngay_phat_hanh` date DEFAULT NULL,
  `danh_gia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `ten`, `hinh_anh`, `mo_ta`, `the_loai`, `thoi_luong`, `ngay_phat_hanh`, `danh_gia`) VALUES
('1', 'Kung Fu Panda', 'kungfu.png', 'Một chú gấu trúc mơ ước trở thành một võ sĩ kung fu, anh phải đối mặt với thử thách lớn khi kẻ thù xuất hiện.', 'Phim hoạt hình', 125, '2024-11-21', 'Hay'),
('10', 'Ký Sinh Trùng', 'view/img/ky-sinh-trung.jpg', 'Một gia đình nghèo khổ tại Hàn Quốc tìm cách tiếp cận gia đình giàu có, nhưng những bí mật ẩn giấu k', 'Phim tâm lý', 132, '0000-00-00', 'Kinh điển'),
('11', 'Cua Lại Vợ Bầu', 'view/img/cua-lai-vo-bau.jpg', 'Một bộ phim hài tình cảm xoay quanh câu chuyện của một người đàn ông bất ngờ gặp lại người yêu cũ và', 'Phim hài', 100, '0000-00-00', 'Hài hước'),
('12', 'Train to Busan', 'view/img/train-to-busan.jpg', 'Một nhóm người sống sót trong chuyến tàu khởi hành từ Seoul đến Busan khi đại dịch zombie bùng phát.', 'Phim kinh dị', 118, '0000-00-00', 'Tuyệt vời'),
('13', 'Gái Già Lắm Chiêu', 'view/img/gai-gia-lam-chieu.jpg', 'Phim tình cảm với nhiều tình huống gay cấn và cảm động xoay quanh một người phụ nữ độc lập và mạnh m', 'Phim tình cảm', 105, '0000-00-00', 'Tuyệt vời'),
('14', 'Parasite', 'view/img/parasite.jpg', 'Bộ phim giành giải Oscar kể về sự phân biệt giàu nghèo trong xã hội hiện đại qua câu chuyện về một g', 'Phim tâm lý', 132, '0000-00-00', 'Kinh điển'),
('15', 'Tiệc Trăng Máu', 'view/img/tiec-trang-mau.jpg', 'Một nhóm bạn cũ tụ tập lại với nhau và tham gia trò chơi “Tiệc Trăng Máu” – mọi bí mật và chuyện xưa', 'Phim tâm lý', 96, '0000-00-00', 'Tuyệt vời'),
('16', 'Midnight Runners', 'view/img/midnight-runners.jpg', 'Hai sinh viên cảnh sát không có kinh nghiệm phải đối mặt với vụ án bắt cóc đầy rủi ro, khi tìm thấy ', 'Phim hành động', 108, '0000-00-00', 'Tốt'),
('17', 'Sóng Gió', 'view/img/song-gio.jpg', 'Một câu chuyện tình yêu đầy cảm xúc và thử thách của một cặp đôi không cùng đẳng cấp xã hội.', 'Phim tình cảm', 110, '0000-00-00', 'Tuyệt vời'),
('18', 'Secret Zoo', 'view/img/secret-zoo.jpg', 'Một người đàn ông phải đóng giả một con gấu trong sở thú để cứu nơi này khỏi bị đóng cửa vì thiếu ng', 'Phim hài', 117, '0000-00-00', 'Hài hước'),
('19', 'Em Chưa 18', 'view/img/em-chua-18.jpg', 'Một bộ phim tình cảm hài hước về câu chuyện của một cô gái trẻ tìm cách giữ bí mật về tuổi tác để có', 'Phim hài', 100, '0000-00-00', 'Hài hước'),
('2', 'Siêu Anh Hùng', 'view/img/kungfupanda-banner-1.', 'Phim lấy bối cảnh vũ trụ, âm thanh chiến đấu vô cùng chỉnh chu.', 'Phim hoạt hình', 120, '0000-00-00', 'Xuất sắc'),
('20', 'The Man Standing Nex', 'view/img/the-man-standing-next', 'Bộ phim kể về cuộc sống của những nhân vật cấp cao trong chính quyền Hàn Quốc và những âm mưu quyền ', 'Phim chính kịch', 113, '0000-00-00', 'Tuyệt vời'),
('3', 'Linh Miêu', 'view/img/banner-linhmieu.jpg', 'Một câu chuyện đầy kịch tính về hành trình của Linh Miêu vượt qua thử thách để bảo vệ gia đình và bạ', 'Phim kinh dị', 130, '0000-00-00', 'Tuyệt vời'),
('4', 'Venom', 'view/img/banner-venom.jpg', 'Một nhà báo bị biến thành quái vật Venom sau khi tiếp xúc với một sinh vật ngoài hành tinh, chiến đấ', 'Phim hành động', 140, '0000-00-00', 'Tốt'),
('5', 'Wicked', 'view/img/banner-wicked.jpg', 'Câu chuyện ma thuật về một phù thủy tốt bị hiểu nhầm là xấu, khám phá câu chuyện phía sau những trận', 'Phim giả tưởng', 115, '0000-00-00', 'Tuyệt vời'),
('6', 'Ngày Xưa Có Một Chuy', 'view/img/banner-ngayxuacomotch', 'Một câu chuyện kỳ bí về thời gian và không gian, nơi mọi thứ đều có thể xảy ra.', 'Phim phiêu lưu', 125, '0000-00-00', 'Xuất sắc'),
('7', 'Cười Xuyên Biên Giới', 'view/img/banner-cuoixuyenbieng', 'Một bộ phim hài về những cuộc phiêu lưu ngớ ngẩn và những tình huống dở khóc dở cười xuyên biên giới', 'Phim hài', 110, '0000-00-00', 'Hài hước'),
('8', 'Mật Mã Đỏ', 'view/img/banner-matmado.jpg', 'Một nhóm chuyên gia hacker tham gia vào cuộc chiến chống lại những kẻ xâm nhập nguy hiểm, đánh bại c', 'Phim hành động', 135, '0000-00-00', 'Tuyệt vời'),
('9', 'Bố Già', 'view/img/bo-gia.jpg', 'Một câu chuyện cảm động về gia đình, tình yêu và những thử thách của cuộc sống trong xã hội hiện đại', 'Phim tình cảm', 120, '0000-00-00', 'Tuyệt vời');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` varchar(5) NOT NULL,
  `ten_phong` varchar(10) NOT NULL,
  `ma_rap` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `ten_phong`, `ma_rap`) VALUES
('1', 'A1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_ghe`
--

CREATE TABLE `quan_ly_ghe` (
  `id` varchar(5) NOT NULL,
  `ma_phong` varchar(5) NOT NULL,
  `cot` varchar(5) NOT NULL,
  `hang` varchar(5) NOT NULL,
  `trang_thai` varchar(10) NOT NULL,
  `loai_ghe` varchar(10) NOT NULL,
  `cap_nhat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_ghe`
--

INSERT INTO `quan_ly_ghe` (`id`, `ma_phong`, `cot`, `hang`, `trang_thai`, `loai_ghe`, `cap_nhat`) VALUES
('1', '1', '1', '1', 'Đã mua', 'Ghê thường', '2024-11-20'),
('10', '1', '5', '2', 'Trống', 'Ghế thường', NULL),
('11', '1', '1', '3', 'Trống', 'Ghế thường', NULL),
('12', '1', '2', '3', 'Trống', 'Ghế thường', NULL),
('13', '1', '3', '3', 'Trống', 'Ghế thường', NULL),
('14', '1', '4', '3', 'Trống', 'Ghế thường', NULL),
('15', '1', '5', '3', 'Trống', 'Ghế thường', NULL),
('16', '1', '1', '4', 'Trống', 'Ghế thường', NULL),
('17', '1', '2', '4', 'Trống', 'Ghế thường', NULL),
('18', '1', '3', '4', 'Trống', 'Ghế thường', NULL),
('19', '1', '4', '4', 'Trống', 'Ghế thường', NULL),
('2', '1', '1', '2', 'Trống', 'Ghế thường', NULL),
('20', '1', '5', '4', 'Trống', 'Ghế thường', NULL),
('21', '1', '1', '5', 'Trống', 'Ghế thường', NULL),
('22', '1', '2', '5', 'Trống', 'Ghế thường', NULL),
('23', '1', '3', '5', 'Trống', 'Ghế thường', NULL),
('24', '1', '4', '5', 'Trống', 'Ghế thường', NULL),
('25', '1', '5', '5', 'Trống', 'Ghế thường', NULL),
('26', '1', '1', '6', 'Trống', 'Ghế thường', NULL),
('27', '1', '2', '6', 'Trống', 'Ghế thường', NULL),
('28', '1', '3', '6', 'Trống', 'Ghế thường', NULL),
('29', '1', '4', '6', 'Trống', 'Ghế thường', NULL),
('3', '1', '2', '1', 'Trống', 'Ghế thường', NULL),
('30', '1', '5', '6', 'Trống', 'Ghế thường', NULL),
('31', '1', '1', '7', 'Trống', 'Ghế thường', NULL),
('32', '1', '2', '7', 'Trống', 'Ghế thường', NULL),
('33', '1', '3', '7', 'Trống', 'Ghế thường', NULL),
('34', '1', '4', '7', 'Trống', 'Ghế thường', NULL),
('35', '1', '5', '7', 'Trống', 'Ghế thường', NULL),
('36', '1', '1', '8', 'Trống', 'Ghế thường', NULL),
('37', '1', '2', '8', 'Trống', 'Ghế thường', NULL),
('38', '1', '3', '8', 'Trống', 'Ghế thường', NULL),
('39', '1', '4', '8', 'Trống', 'Ghế thường', NULL),
('4', '1', '3', '1', 'Trống', 'Ghế thường', NULL),
('40', '1', '5', '8', 'Trống', 'Ghế thường', NULL),
('41', '1', '1', '9', 'Trống', 'Ghế thường', NULL),
('42', '1', '2', '9', 'Trống', 'Ghế thường', NULL),
('43', '1', '3', '9', 'Trống', 'Ghế thường', NULL),
('44', '1', '4', '9', 'Trống', 'Ghế thường', NULL),
('45', '1', '5', '9', 'Trống', 'Ghế thường', NULL),
('46', '1', '1', '10', 'Trống', 'Ghế thường', NULL),
('47', '1', '2', '10', 'Trống', 'Ghế thường', NULL),
('48', '1', '3', '10', 'Trống', 'Ghế thường', NULL),
('49', '1', '4', '10', 'Trống', 'Ghế thường', NULL),
('5', '1', '4', '1', 'Trống', 'Ghế thường', NULL),
('50', '1', '5', '10', 'Trống', 'Ghế thường', NULL),
('6', '1', '5', '1', 'Trống', 'Ghế thường', NULL),
('7', '1', '2', '2', 'Trống', 'Ghế thường', NULL),
('8', '1', '3', '2', 'Trống', 'Ghế thường', NULL),
('9', '1', '4', '2', 'Trống', 'Ghế thường', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id` varchar(5) NOT NULL,
  `ten` varchar(10) NOT NULL,
  `dia_chi` varchar(30) NOT NULL,
  `tong_so_phong` int(3) NOT NULL,
  `lien_he` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id`, `ten`, `dia_chi`, `tong_so_phong`, `lien_he`) VALUES
('1', 'CGV Tô Ký', '123 Tô Ký, Tân Chánh Hiệp, Q12', 30, 'CGVToKy123@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suat_chieu`
--

CREATE TABLE `suat_chieu` (
  `id` int(5) NOT NULL,
  `ma_phim` varchar(10) NOT NULL,
  `ma_phong` varchar(10) NOT NULL,
  `thoi_luong` int(8) NOT NULL,
  `trang_thai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suat_chieu`
--

INSERT INTO `suat_chieu` (`id`, `ma_phim`, `ma_phong`, `thoi_luong`, `trang_thai`) VALUES
(1, '1', '1', 130, 'Đang chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(5) NOT NULL,
  `ma_nguoi_dung` int(10) NOT NULL,
  `ma_hoa_don` int(10) NOT NULL,
  `ma_suat_chieu` int(10) NOT NULL,
  `ma_ghe` varchar(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `trang_thai` varchar(20) NOT NULL,
  `loai_ve` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `ma_nguoi_dung`, `ma_hoa_don`, `ma_suat_chieu`, `ma_ghe`, `gia`, `trang_thai`, `loai_ve`) VALUES
(1, 1, 1, 1, 'A1', 75000, 'Đang hoạt động', 'Vé thường');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_ve`
--
ALTER TABLE `chi_tiet_ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitiet_ve` (`ma_ve`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_nguoidung` (`ma_nguoi_dung`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rap_suatchieu` (`ma_rap`);

--
-- Chỉ mục cho bảng `quan_ly_ghe`
--
ALTER TABLE `quan_ly_ghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ghe_phong` (`ma_phong`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phim_suatchieu` (`ma_phim`),
  ADD KEY `phong_suatchieu` (`ma_phong`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hoadon_ve` (`ma_hoa_don`),
  ADD KEY `suatchieu_ve` (`ma_suat_chieu`),
  ADD KEY `nguoidung_ve` (`ma_nguoi_dung`) USING BTREE,
  ADD KEY `ghe_ve` (`ma_ghe`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_ve`
--
ALTER TABLE `chi_tiet_ve`
  ADD CONSTRAINT `ve_chitiet` FOREIGN KEY (`ma_ve`) REFERENCES `ve` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoadon_nguoidung` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`id`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_rap` FOREIGN KEY (`ma_rap`) REFERENCES `rap` (`id`);

--
-- Các ràng buộc cho bảng `quan_ly_ghe`
--
ALTER TABLE `quan_ly_ghe`
  ADD CONSTRAINT `ghe_phong` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD CONSTRAINT `suatchieu_phim` FOREIGN KEY (`ma_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `suatchieu_phong` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ghe_ve` FOREIGN KEY (`ma_ghe`) REFERENCES `ghe` (`id`),
  ADD CONSTRAINT `hoadon_ve` FOREIGN KEY (`ma_hoa_don`) REFERENCES `nguoi_dung` (`id`),
  ADD CONSTRAINT `nguoidung_ve` FOREIGN KEY (`ma_nguoi_dung`) REFERENCES `nguoi_dung` (`id`),
  ADD CONSTRAINT `suatchieu_ve` FOREIGN KEY (`ma_suat_chieu`) REFERENCES `suat_chieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

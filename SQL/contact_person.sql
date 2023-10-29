-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 07:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_person`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id` int(11) NOT NULL,
  `nama_agama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id`, `nama_agama`) VALUES
(7, 'Buddha'),
(6, 'Hindu'),
(3, 'Islam'),
(9, 'Khonghucu'),
(1, 'Kristen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_agama` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `sosmed` varchar(32) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `asal_kampus` varchar(64) NOT NULL,
  `quotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`id`, `nama_lengkap`, `gender`, `id_agama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `no_hp`, `email`, `sosmed`, `foto`, `asal_kampus`, `quotes`) VALUES
(1, 'Irgi Rama Sulistio', 'Laki-Laki', 3, '2002-03-06', 'Bogor', 'Kp.Babakan RT:02/03 No:16 Kec.Cileungsi Kab.Bogor', '089612431791', 'irgirama01@gmail.com', 'irgiramz', 'https://drive.google.com/open?id=1lBzStK9b3AfVQOMhyAwrHQmIM9q-p_IO', 'Politeknik Negeri Media Kreatif', 'Semangat dan teruslah berusaha'),
(2, 'Ahmad Fadhliansyah ', 'Laki-Laki', 3, '2003-06-13', 'Dki Jakarta', 'Jl Lapangan Roos III', '082114254952', 'fadhliansyah9f@gmail.com', 'fadhliansyaah', 'https://drive.google.com/open?id=1laNPoGSe4ptL_4U55KcKrRTTztmFPxKX', 'Stt NF', 'Janganlah menjadi orang yang tidak menghargai orang lain.'),
(3, 'Nata Nara Narendra Putra Suanda', 'Laki-Laki', 6, '2003-07-30', 'Sumbawa Besar', 'Jl. Gunung Agung Gang. 1C Perumahan Pesona Agung Graha Adi No. B2', '089675998114', 'natanaranarendra@gmail.com', 'natanaraps', 'https://drive.google.com/open?id=115I2R31TKlFJRWHCEuvrmzamrsLzLUM5', 'Universitas Udayana', 'Tetap semangat walaupun hidup sangat berat'),
(4, 'Muhammad Jaisy Adli', 'Laki-Laki', 3, '2004-01-13', 'Bekasi', 'Jln. H. Taqwa no 108 rt/rw 006/009', '089512391211', 'muhjaisyadli@gmail.com', 'jaisyadli', 'https://drive.google.com/open?id=1BR35Cwh4lkbehB2r_wy15CvH6p832A4z', 'STT NF', '2 3 ular kebo\nkita hidup harus semangat tlus lo phei phei'),
(5, 'Adi', 'Laki-Laki', 3, '2000-10-29', 'Pamekasan', 'Sumber Waru Waru Jawa Timur', '081937264222', 'adilrindu29@gmail.com', 'adialfatih45', 'https://drive.google.com/open?id=13omsJheY-SQdMeqRAmQdPKiEEmdLOsYg', 'Institut Sains danTeknologi Annuqayah', 'Jangan pernah takut untuk mencoba'),
(6, 'Qonita Azizah ', 'Perempuan', 3, '2002-03-08', 'Panyalaian ', 'Jalan Allogio barat 3, Medang, kec pegedangan, banten', '085761434808', 'qonita.azizah@student.pradita.ac.id', 'qonitaazh_', 'https://drive.google.com/open?id=1hyy9LLgJGTaidRW0i7RkwzAIe38GwP3x', 'Pradita University ', 'Jadi diri sendiri '),
(7, 'Milda Khusnul Khotimah', 'Perempuan', 3, '2003-02-26', 'Lumajang', 'Lumajang, Jawa Timur', '087863533945', 'mildakhusnul999@gmai.com', '_mldkhsnl', 'https://drive.google.com/open?id=1a_oAIGwdGNKIQh45_gpE_k2OeWkEAjaD', 'Politeknik Negeri Malang', 'Life is to be grateful'),
(8, 'Izzudin muktar ', 'Laki-Laki', 3, '2003-06-27', 'Depok', 'Dsn bebegan, jati kabupaten Blora Jawa Tengah ', '083122661966', 'izudinmuktar5@gmail.com', 'mukktaaaaar', 'https://drive.google.com/open?id=1c27-7GPo18iPhl36dZjQPE9GLiEioZ6k', 'STT Terpadu Nurul Fikri ', 'Guru terbaik adalah pengalaman orang lain.'),
(9, 'MOCH FIKRI RAMADHAN', 'Laki-Laki', 3, '2001-10-11', 'Depok', 'JL. Situ Indah No.3 Rt.06/10 Kel.Tugu Kec.Cimanggis Depok', '089684711291', 'libr.libr1711@gmail.com', 'fikrii1711', 'https://drive.google.com/open?id=1PzkglugW8cyuF3thY1JGguD3AdNrqlza', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri', 'Everything you do, do it 100%'),
(10, 'Sri Lestari', 'Perempuan', 3, '2002-09-28', 'Pati', 'Ds.Sukolilo RT 06/RW 07', '08157945227', 'lestatari41@gmail.com', 'taarrrrri', 'https://drive.google.com/open?id=1rb8q3qwIXQI4R5FemydeI-udb6kq1FPR', 'Universitas Muria Kudus', 'Tuhan memiliki rencananya sendiri. Percayai itu dan nikmati saat  ini.'),
(11, 'Septia Dwi Kurniasih', 'Perempuan', 3, '1995-09-18', 'Jakarta', 'Kp. Pulo Makasar Jakarta Timur', '087889018920', 'septiadk2@gmail.com', 'cepiaaaws', 'https://drive.google.com/open?id=1mWdoGZrpNmXO6QfczdFhs3RvZD_wCcPI', 'Unsurya', 'Sebaik apapun diri kita, kita tidak akan pernah terlihat sempurna oleh manusia lain.'),
(12, 'Putra Habib Al Aziz ', 'Laki-Laki', 3, '2003-12-23', 'Rantau karya ', 'OKI, Sumatera Selatan ', '085377519996', 'putrahabibalaziz@gmail.com', 'ajizz11_', 'https://drive.google.com/open?id=1mR353F0eybxXSTF9lk9ky2AetRFkebl5', 'Politeknik Manufaktur Negeri Bangka Belitung ', 'Bernafaslah selagi masih hidup '),
(13, 'Siti Amdah', 'Perempuan', 3, '2001-04-14', 'Tangerang', 'Tigaraksa, Tangerang-Banten', '08979281365', 'siti.amdah14@gmail.com', 'amdah14', 'https://drive.google.com/open?id=1AvYIqRSxsY-dD4IQ732Gj-vKY7xCm2GM', 'STT Terpadu Nurul Fikri', '???? ????? ??????'),
(14, 'Renawati', 'Perempuan', 3, '2001-05-22', 'Tangerang', 'Kp.Daraham ', '085282884467', 'rena09910@gmail.com', 'ren_aniqobie', 'https://drive.google.com/open?id=1qaaZaNsJJRAdljIavvpmfrWF7ZwN7hE1', 'STT Terpadu Nurul Fikri', 'If you\'re finish changing, you\'re finished'),
(15, 'Hanif Hidayatulloh ', 'Laki-Laki', 3, '2003-11-28', 'Brebes', 'Purwokerto Utara', '087862678478', 'hanifhidayatulloh2811@gmail.com', 'hanief_nief', 'https://drive.google.com/open?id=1tqaKGY1YGOqyQ5zcNHWJVhCoMxtXwdQR', 'Universitas Amikom Purwokerto ', '\"Jangan kau penjarakan ucapanmu, jika kau menghamba kepada ketakutan kau hanya akan memperpanjang barisan perbudakan\" - Widji Thukul '),
(16, 'Ariza Akmal Syahida', 'Laki-Laki', 3, '2003-04-13', 'Bantul', 'Bantul, Daerah Istimewa Yogyakarta', '083849257999', 'arizaakmal04@gmail.com', 'arizaakmal13', 'https://drive.google.com/open?id=1rdiEKa9Bqwg5Qa8qdabJgLSHEQvG3ZCf', 'Universitas Amikom Yogyakarta', 'Jadilah lebih baik dari hari kemarin'),
(17, 'Muarif Rizqy', 'Laki-Laki', 3, '2001-11-21', 'Brebes', 'Kec. Paguyangan jl. Bumiayu - Purwokerto', '085326762608', 'murizqyarf17@gmail.com', 'Arif_rzym', 'https://drive.google.com/open?id=1Y7HCxeWngkXlQog-ndzKnoS-Ur7Kr_d9', 'Universitas Peradaban', 'Ayo makan biar nggak mati'),
(18, 'Muhammad Alifi Ferdiansyah', 'Laki-Laki', 3, '2000-07-24', 'Tulungagung', 'Desa Tenggong, Kecamatan Rejotangan, Kabupaten Tulungagung', '088217206039', 'alifi240700@gmail.com', 'alifi_24', 'https://drive.google.com/open?id=1akCTlNpVT2-bCQf8vgb0CcXHg99nMM3O', 'Universitas Bhinneka PGRI', 'Just Do It Man!'),
(19, 'Fajar septianto', 'Laki-Laki', 3, '2002-09-06', 'jakarta selatan', 'cinere, depok', '085889432197', 'fajar23.septianto@gmail.com', 'slashandback', 'https://drive.google.com/open?id=1PeeilCPErcChk9NojIKtVpqdhdwGPBtj', 'STT Nurul Fikri', 'we can buy the time. setiap proses yang bisa di kurangi waktunya sama dengan membeli waktu'),
(20, 'Kurniawan', 'Laki-Laki', 3, '2001-08-19', 'Sumedang', 'Sumedang', '081411096708', 'ikurniawannf@gmail.com', 'i_kr19', 'https://drive.google.com/open?id=18vV_Q4cNlRxk6qBx-nM26RUfJZ9-781w', 'SEKOLAH TINGGI TEKNOLOGI TERPADU NURUL FIKRI', 'Jangan malu untuk menjadi diri sendiri'),
(21, 'Muhammad Bahrul Ulum', 'Laki-Laki', 3, '2002-09-15', 'Pontianak', 'Jalan Bujama Desa Pal IX Kecamatan Sungai Kakap Kabupaten Kubu Raya', '087716374672', 'rangga.agg2018@gmail.com', 'ulum_kane', 'https://drive.google.com/open?id=1RIem8WkIZ6jtL9u17lSegXTi4ABiAeiu', 'Universitas Tanjungpura', 'Dunia memang tidak memihakmu, Tapi bukan berarti kau harus kalah darinya'),
(22, 'Zian Naisila Anjarwati', 'Perempuan', 3, '2001-02-24', 'Sumedang', 'Jl. Caringin Cikungkurak Bandung', '089652639063', 'ziannaisilaa@gmail.com', 'ziannaisilaa', 'https://drive.google.com/open?id=1XjkckNT2mp9sEa3NcqAAfIjELkDDQGcy', 'STMIK - IM Bandung', 'spion dulu diri sendiri, baru klakson orang lain'),
(23, 'Hadi Prasetiyo', 'Laki-Laki', 3, '2002-06-16', 'Samarinda', 'Samarinda, Kalimantan Timur', '085711228592', 'hadiiyok01@gmail.com', 'hadiiprasetiyo', 'https://drive.google.com/open?id=1Fw1ClGFHPwcELblvyGYVivxt302Nwu_y', 'Universitas Mulawarman', 'Sesulit apapun tugasmu pasti akan selesai dimenit terakhir'),
(24, 'Euis safania', 'Perempuan', 3, '2001-10-25', 'Cirebon', 'Kabupaten Cirebon Provinsi Jawa Barat ', '083156525468', 'euissafania8703@students.unnes.ac.id', 'safania.euis', 'https://drive.google.com/open?id=1IMAG6png-s8jp_AI4rytJtymXW-YKocH', 'Universitas Negeri Semarang', '\"Sukses bukanlah kunci kebahagiaan, tapi kebahagian adalah kunci sukses\"'),
(25, 'Ulayya Salmaa Khoirunnisaa', 'Perempuan', 3, '2003-05-28', 'Kudus', 'Bulungcangkring RT 03/ RW 01, Kec. Jekulo, Kab. Kudus', '081215627905', 'ulayyasalmaa28@gmail.com', 'salmaaul._', 'https://drive.google.com/open?id=1H5GlVSkQL6WGL-fHEmCn-ncfjHLKNzkf', 'Universitas Muria Kudus', 'Hidup itu seperti di drama Korea, penuh dengan plot twist, tapi pasti ada episode happy endingnya.'),
(26, 'Ahmad Riziq', 'Laki-Laki', 3, '2002-07-18', 'Jakarta', 'Kp.Roke Des. Negkasari Kec.Jasinga Kab. Bogor Provinsi.jawa barat', '085939446587', 'ahmadriziq010@gmail.com', 'arizieq', 'https://drive.google.com/open?id=1DmXduVSdQeHobycZQ0Mbw61q1v7pkGAs', 'Sekolah Tinggi Teknologi terpadu Nurul fikri', 'Satu Satunya perjalanan yg Mustahil, adalah perjalanan yg tidak pernah kamu mulai'),
(27, 'Carmennita Soleman', 'Perempuan', 1, '2004-01-24', 'Samarinda', 'Jl. Budaya Pampang, Samarinda, Kalimantan Timur', '085350232057', 'nitacarmen06@gmail.com', 'carmeennita', 'https://drive.google.com/open?id=1nZWzBonQHCL7qG44jSDRjcASqs38fIis', 'Universitas Mulawarman', 'Be Grateful'),
(28, 'Dimas Andhika Firmansyah ', 'Laki-Laki', 3, '2003-07-20', 'Pemalang ', 'Pemalang, Jawa Tengah ', '089630147925', 'dmsandhika87@gmail.com', 'dmsandhika_', '', 'Universitas Negeri Semarang ', 'Jika kamu merasa tidak ada orang baik, jadilah orang baik tersebut'),
(29, 'Ahmad Zuaidi', 'Laki-Laki', 3, '2001-11-02', 'Sumenep ', 'Lembung Barat Lenteng Sumenep Jatim', '085963093822', 'ahmadzuaidi892@gmail.com', 'ahmd.zdi__', 'https://drive.google.com/open?id=1LyEIh0jXxE8gLkhQDWxuVcdMoIZXaOzD', 'IST Annuqayah', 'Fatum brutum amor fati. Sebab kata orang Tuhan tidak pernah bermain dadu.'),
(30, 'SHABRINA PRIMADEWI', 'Perempuan', 3, '2003-01-09', 'Kudus', 'Desa Sadang, Rt 03 Rw 02, Kecamatan Jekulo, Kabupaten Kudus, Jawa Tengah', '085848686194', 'shabrinaprima@gmail.com', 'shabrinampol', 'https://drive.google.com/open?id=1ESsoqDwVWY_q3LiLmxoy9WZb0JTN50x8', 'Universitas Muria Kudus', 'Kamu seringkali berkata gak sanggup, bahkan beberapa kali ingin menyerah, tapi lihat kamu masih bertahan sampai saat ini. Teruslah mengeluh sampai semua pada akhirnya terselesaikan juga'),
(31, 'Ridwan Khomarudin Muharram ', 'Laki-Laki', 3, '2003-03-10', 'Tanggerang ', 'Citayam kp. Kelapa gg. Nusaindah rt04/rw16', '081281238348', 'ridwanmts812@gmail.com', 'arraaamm__', '', 'STT Terpadu Nurul Fikri ', 'Klo bisa dilakukan skrng knpa harus bsk.'),
(32, 'Anisa', 'Perempuan', 3, '2003-10-09', 'Depok', 'Kp. Sindangkarsa Rt01/07, sukamaju baru, Tapos depok', '083895461608', 'anisaaabcd@gmail.com', 'SyNissa', 'https://drive.google.com/open?id=1Fw2MmxtHNcXqbCBABM36nBoqkUFDGead', 'Stt terpadu nurul Fikri ', 'Stop wishing, start doing! :)'),
(33, 'Shafa Salsabila Febriani', 'Perempuan', 3, '2002-02-20', 'Depok', 'Jl Bhakti Abri Rt 02 Rw 10 ', '0895706510309', 'shafafebriani4@gmail.com', 'shafaslls', 'https://drive.google.com/open?id=1JB3fF2lruthW8lZo52nIzd_zpxlUwNvc', 'UBSI Depok', 'jadilah diri sendiri'),
(34, 'Febi Febiyanti ', 'Perempuan', 3, '2003-02-27', 'Garut ', 'Jl. KH Hasan Arif, Kp. Pagersari RT.01 RW.06 Kec. Banyuresmi Kab. Garut', '085860257486', 'febi20289ti@student.nurulfikri.ac.id', '_ffyyyyyyy', 'https://drive.google.com/open?id=1FW-YgB8HMbvf9CO4BYUZmAnTD-YAClID', 'Sekolah Tinggi Teknologi Terpadu Nurul Fikri ', '\"Terkadang, perubahan adalah kunci untuk pertumbuhan.\"'),
(35, 'Nasyath Faykar ', 'Laki-Laki', 3, '2002-11-30', 'Pekalongan ', 'Jalan KH Ahmad Dahlan Tirto Gg. 7 No. 31', '088806923500', 'nasyathfaykar@gmail.com', 'faykarr_', 'https://drive.google.com/open?id=1G9_p8X7kBKB3iZrkzaLFXji-11gcfEG4', 'STMIK WIDYA PRATAMA PEKALONGAN ', 'Learn to be best rather than yesterday.'),
(36, 'Maulidhiansyah Bayu Setiawan', 'Laki-Laki', 3, '2003-05-10', 'Jakarta ', 'Jl. Jantung Harapan RT 08/07 Kel.pabuaran Kec.cibinong', '089507631813', 'maulidhiansyahbayu@gmail.com', 'inibayou', 'https://drive.google.com/open?id=1WUHjzatdfOhw6Sffchtc45EnPaTuErUC', 'STT Terpadu Nurul Fikri ', 'Hiduplah seperti larry'),
(37, 'RANGGA EKKLESIA GABRIEL ANUGRAHNU', 'Laki-Laki', 1, '2002-06-08', 'Palangka Raya', 'Jl.Perkebunan komp perikanan ', '083143508517', 'ranggaekkle20020806@gmail.com', 'rangga_e.g.a', '', 'UNIVERSITAS PALANGKARAYA ', 'Ngoding Tanpa Error impossible!'),
(38, 'Muhammad Alif Firdaus Arizona', 'Laki-Laki', 3, '2002-03-14', 'Surabaya', 'Perum TNI AL Candi ', '082132306322', '20410100080@dinamika.ac.id', 'afarizona_', 'https://drive.google.com/open?id=1cka9eIGnmY58edSq4J8hWXZ4k_diG8_Z', 'Universitas Dinamika', 'Aut viam inveniam aut faciam'),
(39, 'Mukhammad Rifkhi Rifangga ', 'Laki-Laki', 3, '2002-05-13', 'Kudus ', 'Sunggingan RT 03 RW 03 Kota Kudus ', '08812670156', 'rifkhirifangga@gmail.com', 'rifkhi.rifangga_', 'https://drive.google.com/open?id=199oRqigNkF6JmMomQMCyVN7DE35ZWn4W', 'Universitas Muria Kudus ', 'Tawa adalah cara terbaik untuk lupa '),
(40, 'Winanda afrilia harisya', 'Perempuan', 3, '2003-04-26', 'Sungai penuh', 'Kapalo koto, Pauh, Padang', '+62 878-4218-2759', 'winandaafrilia0304@gmail.com', '_winandaah', '', 'Universitas Andalas', '\"Walaupun hidup tidak menyenangkan akhir akhir ini, tapi setidaknya masih layak di jalani dan dicoba\"'),
(41, 'Muhammad Anwar Fauzan', 'Laki-Laki', 3, '2003-01-15', 'Serang', 'Bumi Agung Permai 1', '085939410330', 'anwar.fauzan98@gmail.com', 'anwarfz__', 'https://drive.google.com/open?id=1zE3ysQ6UVYwN7UNodg2PQvZZeiEIKtBT', 'Universitas Banten Jaya', 'Your future created by what you do today not tomorrow'),
(42, 'Erick Darmawan', 'Laki-Laki', 3, '2003-08-13', 'Kota Serang', 'Kota Serang', '085282568210', 'erickdarmawanboeniarto130803@gmail.com', 'erick.db13', 'https://drive.google.com/open?id=10MgTZ7xmnRdCM8znyAaZUVbeYSP2Td_L', 'Universitas Banten Jaya', 'tetap Semangat'),
(43, 'Lora Lorensa Manafe ', 'Perempuan', 1, '2001-10-30', 'Sulamu', 'Sulamu ', '081353024713', 'lhomanafe@gmail.com', 'Lhomnfe30 ', '', 'Politeknik Negeri kupang ', 'Jalan mu memang beda dengan mereka, tetapi kamu akan lebih kuat dari mereka.'),
(44, 'Bagus Febriyanto', 'Laki-Laki', 3, '2002-02-02', 'Pati', 'Kab. Pati, Kec. Tayu, desa Pondowan', '08978270522', 'bagusfebriyanto19@gmail.com', '__imnotbgs', 'https://drive.google.com/open?id=1AYoQdvBrKcYi0B3IDswj3EDimV6PSkbN', 'Universitas Muria Kudus', 'Itami o kanjiro \n\nItami o kangaero\n\nItami o uketore \n\nItami o shire \n\nKoko yori.... sekai ni itami o..... SHINRA TENSEI!!!! ??????'),
(45, 'Safitri ', 'Perempuan', 3, '2003-10-16', 'Jakarta ', 'Jakarta ', '084567444545', 'safitri1337@gmail.com', 'safitri16__', '', 'Universitas Bina Nusantara ', 'Nothing '),
(46, 'Bagus Muhammad Mumtaza ', 'Laki-Laki', 3, '2003-08-20', 'Kota Pekalongan ', 'Indonesia, Jawa Tengah, Kota Pekalongan, Jl. KHM. Mansyur Bendan GG. 7', '085875282178', 'bagusbendan07@gmail.com', 'mmtza.mm', '', 'STMIK Widya Pratama Pekalongan ', 'Tetap semangat dan jangan menyerah apapun yang terjadi'),
(65, 'Fathan Mubin', 'Laki-Laki', 3, '1997-09-21', 'Jakarta', 'Jakarta, Indonesia', '085882103423', 'fathan@nurulfikri.ac.id', 'fathanmubin23', 'https://drive.google.com/open?id=1sreMEcexcfT4J6wVIvu1Ax7LjGxGxPBG', 'Nurul Fikri Computer', '\"Kemampuan individu seorang ninja memang penting, tetapi lebih penting lagi adalah kerja sama tim\". Hatake Kakashi - Naruto');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` enum('Mentor','Peserta') NOT NULL,
  `id_person` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `role`, `id_person`) VALUES
(2, 'faykarr', 'f7a1a42dfe889ee79978fa06bd76801b5285a731', 'Mentor', 35),
(7, 'irgiRama', 'd14b63af8f0d44751fa819cfb7fd96fdff3eaa11', 'Peserta', 1),
(13, 'fathan_', '2753a1e5255c691b5aa0ca759ed2c081284b2bda', 'Mentor', 65),
(15, 'adminUtama', '8da0a5ee649d1c418513809ba6980b8650bbac48', 'Mentor', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_agama` (`nama_agama`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_tb_agama` (`id_agama`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_person` (`id_person`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD CONSTRAINT `tb_person_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `tb_person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 09:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaspwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `image`, `comments`, `tanggal`) VALUES
(10, 'Mikhael Diastama Santoso', 'foto1.jpg', 'I like it very much, thanks Real Madrid ', '2016-10-13 02:34:40'),
(11, 'Mikhael Diastama Santoso', 'foto1.jpg', 'This is AWESOME :D', '2016-10-13 02:35:54'),
(12, 'Ignatius Aldi Pradana', 'foto2.JPG', 'AMAZING bro !!!', '2016-10-13 02:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telp`, `pesan`, `created_at`, `updated_at`) VALUES
(9, 'Dias', 'mikhaelmds@gmail.com', '085781893718', 'Coba', '2016-10-13 02:15:32', '2016-10-13 02:15:32'),
(10, 'Dias Mikhael', 'mikhaelmds@gmail.com', '0858709162610', 'esf', '2016-10-13 02:17:22', '2016-10-13 02:17:22'),
(13, 'admin', 'mikhael@gmail.com', '089123781', 'cobacioba', '2016-10-14 11:39:36', '2016-10-14 11:39:36'),
(14, 'Coba', 'mikhaelmds@gmail.com', '1389173817', 'Coba ya', '2016-10-14 11:49:37', '2016-10-14 11:49:37'),
(15, 'Mikhael', 'mikhaelmds@gmail.com', '913971', 'adajkda', '2016-10-21 03:27:21', '2016-10-21 03:27:21'),
(16, 'aaa', 'mikhaelmds@gmail.com', 'aaa', 'aaa', '2016-11-18 02:57:45', '2016-11-18 02:57:45'),
(17, 'adada', 'mikhaelmds@gmail.com', '12131', 'adadada', '2016-11-18 03:16:50', '2016-11-18 03:16:50'),
(18, 'aaaa', 'mikhaelmds@gmail.com', '086829121', 'ajdkajdjaijdiaha', '2016-12-02 03:34:16', '2016-12-02 03:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `description`, `image`, `price`) VALUES
(4, 'Home Shirt Real Madrid Season 2015/2016', '<p>Home Shirt Real Madrid Season 2015/2016</p>', 'real-madrid-home-shirt-2014-2015.jpg', 500000),
(5, 'Away Shirt Real Madrid Season 2015/2016', '<p>Away Shirt Real Madrid Season 2015/2016</p>', 'Real-Madrid-15-16-Third-Kit (2).jpg', 450000),
(6, 'Away Shirt Real Madrid Season 2016/2017', '<p>Away Shirt Real Madrid Season 2016/2017</p>', '37709724_xxl.jpg', 450000),
(7, 'Home Shirt Real Madrid Season 2014/2015', '<p>Home Shirt Real Madrid Season 2014/2015</p>', '12-13-Real-Madrid-Home-Football-Shirt.jpg', 300000),
(8, 'Third Shirt Real Madrid Season 2016/2017', '<p>Third Shirt Real Madrid Season 2016/2017</p>', 'Real-Madrid-3rd-Football-Shirt-16-17.jpg', 475000);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`) VALUES
(6, 'Joe Hart Ingin Move On Dari Kegagalan Euro 2016', '<p>Kiper Inggris, Joe Hart&nbsp;menyebut kesalahan yang ia buat di&nbsp;Euro 2016&nbsp;kemarin membuatnya terpuruk, namun ia bertekad untuk <em>move on</em> dan menunjukkan kepada dunia soal kualitasnya yang sesungguhnya.</p>\r\n<p>Hart dijadikan sebagai kambing hitam dalam tersingkirnya Inggris di babak 16 besar dari Islandia, setelah sebelumnya ia turut melakukan blunder kala menghadapi Wales di babak grup.</p>\r\n<p>Kiper Torino itu, yang dipinjam dari Manchester City, mengakui bahwa ia harusnya bisa melakukan hal yang lebih baik, namun itu semua coba ia lupakan dan bertekad untuk bangkit dari keterpurukan.</p>\r\n<p>&nbsp;</p>\r\n<p>&ldquo;Saya kecewa dengan jalannya musim panas kemarin,&rdquo; kata Hart dikutip dari <em>BBC</em>.</p>\r\n<p>&ldquo;Saya pasti akan senang jika mampu menyelamatkan dua tendangan yang harusnya bisa saya selamatkan tersebut, namun itu sudah berlalu.</p>\r\n<p>&ldquo;Saya ingin bangkit dengan berada di tempat yang bagus. Sepakbola berlalu begitu cepat. Saya harus <em>move on</em>. Saya harus terus berjuang.&rdquo;</p>\r\n<p>Pada awal pekan ini, Hart dianggap sebagai pemain terbaik saat Inggris menahan imbang Slovenia 0-0 dalam lanjutan kualifikasi Piala Dunia 2018.</p>', 'news4.jpg'),
(7, 'Sergio Aguero: Pep Guardiola Ingin Latih Argentina', '<p>Sergio Aguero tak sungkan menyanjung habis manajernya di Manchester City, Pep Guardiola, yang telah tunjukkan pekerjaan luar biasa.</p>\r\n<p>Penyerang internasional Argentina itu memandang Guardiola sebagai sosok pemenang sejati, lantaran sanggup memenangkan segalanya bersama klub yang dilatihnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Tak lupa bahwa mantan penggawa Atletico Madrid ini mengungkap bahwa Guardiola sempat menyampaikan hasratnya untuk melatih timnas Argentina.</p>\r\n<p>"Sebagai pemain saya memandang sosok Pep Guardiola sebagai&nbsp;orang yang luar biasa," tutur Aguero,&nbsp;seperti dikutip <strong>Goal Internasional.</strong></p>\r\n<p>&nbsp;</p>\r\n<p>"Ada satu alasan di balik semua yang dilakukannya,&nbsp;seperti yang ia kerjakan di Bayern Munich&nbsp;dan menjuarai segalanya. Pep adalah pemenang sejati!</p>\r\n<p>"Apakah Anda ingat ada satu pembicaraan tentang timnas [Argentina]&nbsp;beberapa waktu lalu? Pep&nbsp;mengatakan pada saya: Anda tak memanggil saya, padahal saya ingin melatih kalian," tandasnya.</p>', 'news1.jpg'),
(8, 'Pep Guardiola Siap Tampung Kingsley Coman', '<p>Manajer Manchester City&nbsp;Pep Guardiola dikabarkan siap menampung gelandang pinjaman&nbsp;Bayern Munich&nbsp;Kingsley Coman.</p>\r\n<p>Pemain asal Prancis berusia 20 tahun itu bergabung ke Juventus dari Paris Saint-Germain pada Juli 2014. Namun, ia kemudian dipinjamkan ke Bayern selama dua musim pada Agustus 2015.</p>\r\n<p>&nbsp;</p>\r\n<p>Dilansir <em>Leggo</em>, Bayern enggan mempermanenkan status Coman. Sementara itu, pihak<em>Bianconeri </em>kabarnya juga tidak terima kembalinya sang gelandang.</p>\r\n<p>Guardiola tampaknya ingin bereuni kembali dengan Coman, yang pernah diasuhnya di Allianz Arena. City memiliki rencana untuk mendatangkan sang pemain pada bursa transfer musim panas 2017.</p>', 'news2.jpg'),
(9, 'Nolito Akui Nyaris Berseragam Barcelona Lagi', '<p>Nolito&nbsp;mengakui dirinya nyaris kembali ke Barcelona&nbsp;di musim panas kemarin sebelum akhirnya memilih Manchester City&nbsp;sebagai destinasi berikutnya.</p>\r\n<p>Barcelona memang sudah lama berencana untuk memulangkan Nolito menyusul performa menonjolnya di Celta Vigo. Nolito diproyeksikan sebagai pelapis trio penyerang Lionel Messi, Luis Suarez, dan Neymar. Kepindahan itu hampir saja terjadi sebelum City datang dan menebus klausul pelepasannya dari Celta senilai &euro;18 juta.</p>\r\n<p>&ldquo;Saya nyaris bergabung ke Barcelona. Tetapi pada akhirnya saya memilih ke Manchester City. Saya pikir, itu adalah keputusan terbaik bagi saya dan keluarga saya. Saya sangat bahagia bermain bagi City,&rdquo; ungkap Nolito kepada <em>Mundo Deportivo</em>, Minggu (9/10).</p>\r\n<p>&nbsp;</p>\r\n<p>Kedatangan penyerang 29 tahun itu ke Etihad Stadium membuatnya dilatih kembali oleh Pep Guardiola. Semasa keduanya di Barcelona, Guardiola hanya memainkan Nolito sebanyak lima kali sebelum dijual ke Benfica pada 2011. Meski sempat menjadi pilihan kedua Guardiola, Nolito mengaku tidak ambil pusing dengan masa lalunya itu.</p>\r\n<p>&ldquo;Hubungan kami baik, sangat baik. Saya tidak protes. Bagi saya, dilatih olehnya adalah sebuah keistimewaan. Saya mencoba untuk belajar setiap hari dari dirinya,&rdquo; imbuh Nolito yang di musim ini tampil apik bersama City dengan sudah mampu mengemas tiga gol dari tujuh pertandingan.</p>', 'news6.jpg'),
(10, 'Manchester City Bidik Jose Luis Gaya', '<p>Manchester City&nbsp;dikabarkan sedang membidik <em>full-back</em> Valencia Jose Luis Gaya untuk didatangkan pada bursa transfer mendatang.</p>\r\n<p>Gaya, yang sebenarnya masih terikat kontrak bersama<em> Los Che</em> hingga 2020, kabarnya memiliki klausul pelepasan kontrak senilai &pound;45 juta.</p>\r\n<p>&nbsp;</p>\r\n<p>Dilansir <em>The Sunday Times</em>, manajer <em>The Citizens</em> Pep Guardiola tampaknya membutuhkan<em> full-back</em> yang baru karena empat pemain utamanya di sektor ini sudah berusia di atas 30 tahun. Mereka adalah Gael Clichy, Bacary Sagna, Pablo Zabaleta, dan Aleksandar Kolarov.</p>\r\n<p>Gaya, yang bermain di posisi bek kiri, kabarnya diproyeksi Guardiola sebagai penerus di masa depan.</p>', 'news7.png'),
(11, 'Akademi Manchester City Siap Manjakan Pep Guardiola', '<p>Pimpinan akademi Manchester City, Jason Wilcox menyatakan bahwa banyaknya pemain muda bertalenta yang ada saat ini akan bisa memanjakan&nbsp;Pep Guardiola&nbsp;dalam waktu dekat.</p>\r\n<p>Sheikh Mansour selaku pemilik <em>The Citizens</em> telah melakukan investasi jangka panjang ketika membeli klub pada 2008 lalu dan dengan dana sekitar &pound;200 juta, City Football Academy mampu berkembang dengan sangat baik.</p>\r\n<p>Sejumlah pemain muda telah melakoni debut di skuat utama sejak fasilitas pengembangan usia dini dibuka pada 2014 lalu dan Wilcox merasa City sudah berada di jalan yang benar untuk bisa membangun sebuah dinasti masa depan.</p>\r\n<p>&nbsp;</p>\r\n<p>"Saya bukan seseorang yang suka berlebihan, tapi saya tak pernah melihat banyak talenta yang kami piliki seperti di akademi tim ini," ujar Wilcox pada <em>The Mirror.</em></p>\r\n<p>"Kami memiliki banyak pemuda yang berada di level yang luar biasa. Itu membuat saya berharap untuk bisa bekerja lebih lama lagi, sepuluh tahun ke depan di sini."</p>\r\n<p>"Kami ingin membuay Pep Guardiola dimanjakan dengan banyaknya pilihan dan proses itu sedang berjalan."</p>\r\n<p>"Tagret kami adalah memiliki skuat utama yang dipenuhi dengan para pemain dari akademi. Tak hanya itu, akan sangat hebat apabila bisa mendapatkan pemain bertalenta asli Manchester," tukasnya.</p>', 'news3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role` enum('0','1') NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `country`, `username`, `password`, `image`, `role`, `remember_token`) VALUES
(15, 'Mikhael Diastama Santoso', 'mikhaelmds@gmail.com', 'Bangkok', 'dias', '$2y$10$1YHDNgrkiwbuwvoHPJfnOOUvSoki00StcbqAhU4hUKFvsmbs5l6Ti', 'foto1.jpg', '0', 'LpepEPyDMzT8YSoPdv7qV1hIbGjCLfqmtp9jl2tNmfHuP3lz4wp7pO9dHZdY'),
(16, 'Ignatius Aldi Pradana', 'aldi@gmail.com', 'Indonesia', 'aldi', '$2y$10$bpQ5O1h//0gPVb2uD9mO0Oadg829jkR5vH5ibWn53InuPVNxk2Qyy', 'foto2.JPG', '0', ''),
(17, 'Admin', 'admin@gmail.com', 'Alabama', 'admin', '$2y$10$DS/8FDzUfTJJg1BOGnrL0OdbVrWZ23vQHB9wOJxH9m7.3nj9VcJZK', 'logo.png', '1', 'xo7yGgUua7jRw1rZrtYpKQIq1ALP9QB8xfE7WJjcFhJi6C4P4oF3FpSNR6GQ'),
(18, 'Danang', 'danang@gmail.com', 'Indonesia', 'danang', '$2y$10$n9zfvVycaO/J3xUsNltBReH8h.SS45TmFHDObYdqB2G4q5Jl8nK/i', 'logo.png', '0', 'mQSBCqmZ38nLaLmoGi5pqbAVrzY0RHcShPudU0KMIyPm1covbcE0ixKD4iav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

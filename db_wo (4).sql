-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 01:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wo`
--

-- --------------------------------------------------------

--
-- Table structure for table `avenue`
--

CREATE TABLE `avenue` (
  `id_avenue` varchar(200) NOT NULL,
  `nama_avenue` varchar(200) NOT NULL,
  `deskripsi_avenue` varchar(200) NOT NULL,
  `harga_avenue` int(11) NOT NULL,
  `gambar_avenue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avenue`
--

INSERT INTO `avenue` (`id_avenue`, `nama_avenue`, `deskripsi_avenue`, `harga_avenue`, `gambar_avenue`) VALUES
('1', 'yuyu', 'mahal', 6000, 'Screenshot_(2)1.png'),
('5000', 'JAket', 'Mahal', 7000, 'mac.jpg'),
('600', 'jepit', 'mahal', 100, 'Screenshot_(3)1.png'),
('778978', 'bhbhjb', 'manjah', 87897, 'jugg.jpg'),
('hai', 'sapu', 'jih', 8000, 'dell.jpg'),
('thtr', 'ugyg', 'ett', 9547, '_576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `kategori_barang`, `gambar_barang`) VALUES
('A1', 'Hotel Talavera Terrace', 'Berada di daerah TB. simatupang aksesnya mudah dijangkau oleh tamu undangan. Selain itu, gedung memiliki kapasitas hingga 500 orang dengan konsep pernikahan outdoor.  Kelebihan:  Profesional staff Venue nyaman dan diperbolehkan menggunakan cafe Basil untuk after party Tempat parkir luas  Lokasi mudah dijangkau Full Outdoor Makanan enak Disediakan ruang tunggu keluarga dan ruang rias di lantai atas Kekurangan:  Harga sewa tempat relatif mahal, yaitu Rp. 40 juta.Jalan Metro Pondok Indah Blok. 3B, Kebayoran Lama. Jakarta Selatan, DKI Jakarta 12310, Indonesia Telepon: +62 21 7506750', 100000000, 'Avenue', '021.jpg'),
('A2', 'Hotel De La Rosa', 'Berlokasi di Jl. Kemang Selatan No 111, De La Rossa menjadi tempat favorit pilihan calon pengantin. Dengan luas sekitar 2500 meter, De la rossa dapat menampung hingga 1000 undangan. Memiliki konsep tempat pernikahan semioutdoor jadi kamu tidak perlu khawatir jika musim hujan tiba.  Kelebihan Venue:  Tempat pernikahan memiliki desain dan interior yang elegan dan cantik bagus Memiliki ambience yang sangat baik untuk keperluan fotografi, lihat foto disini Memiliki area outdoor dan indoor bisa untuk acara semioutdoor Tidak khawatir jika hujan turun karena memiliki area indoor Area outdoornya bagus terawat dengan baik dengan tema garden Berada di wilayah kemang dan pinggir jalan sehingga mudah ditemukan oleh tamu undangan Bisa menampung hingga 1000 orang Kekurangan Venue:  Tempat parkir terbatas Alamat :  Jl. Kemang Selatan No. 111.  Cilandak Timur, Pasar Minggu.  Daerah Khusus Ibukota Jakarta.  Telepon : +62 21 7195876', 200000000, 'Avenue', '121.jpg'),
('A3', 'Hotel Bella Rosa', 'Hadir dikawasan elit kemang, Bella rossa cocok menjadi Tempat Pernikahan / Wedding Indoor & Outdoor. Wedding venue yang satu ini cocok untuk kamu yang ingin memiliki pesta pernikahan yang intim dan private, karena kapasitas disini cocok untuk small reception dengan jumlah berkisar 500 orang.  Kelebihan Venue:  Tempat bagus, elegant, klasik, mewah, dengan arsitektur menawan di tiap sudut ruangannya, dilengkapi sofa-sofa yang nyaman di beberapa sudut ruangannya. Karena tempat sudah tertata indah, tidak diperlukan dekorasi yang berlebihan, hal ini akan menghemat biaya dekorasi Paket wedding mulai Rp. 29 juta untuk 300 pax, untuk lebih jelasnya bisa dilihat di sini. Banyak pilihan vendor katering yang bagus-bagus Kekurangan Venue:  Tempat parkir terbatas (namun disediakan shuttle bus dan vallet parking) Tempatnya kecil, jadi seringkali tamu terlewat, sebaiknya sediakan tim khusus untuk menjadi petunjuk jalan/ GPS bila diperlukan, agar tamu tidak tersasar, apalagi bila tamu undangan kebanyakan adalah para sepuh (sudah tua) Untuk acara akad nikah/pemberkatan dan foto pre wedding dikenakan biaya tambahan Kontak:  Jl. Madrasah Raya No. 11 G-H, Jeruk Purut, Kemang Jakarta Selatan, 12560 Phone: (021) 7805352 / 7806209 / 7801715 Email: belindarosalinaw@hotmail.com', 300000000, 'Avenue', '0326508ef80c4fe7f7aebaadd7a94c02--backyard-restaurant-bohemian-restaurant1.jpg'),
('A4', 'Hotel Bumi Harum', 'Tempat Pernikahan / Wedding Indoor & Outdoor yang ini bergaya garden outdoor dengan nuansa yang hijau pepohonan di kawasan lebak bulus jakarta.  Kelebihan Venue:  Tempat parkir luas dan disediakan tukang parkir Terdiri dari kebun yang luas Ada beberapa joglo yang disediakan, sehingga tidak perlu lagi menyewa tenda atau takut kehujanan ruang makan lengkap dengan dapur dan air minum galon, meja dan  kursi Bisa disediakan paket pernikahan sesuai permintaan calon pengantin Kekurangan Venue:  Harga sewa tempat relatif mahal Rp. 17 juta untuk seluruh area Harus menggunakan vendor-vendor rekanan yang memang berkualitas, namun harganya relatif mahal Kontak:  Jl. Lebak Bulus 1 No.62. Cilandak-Jakarta Selatan.  Telepon : Gladys – 0818400200.  email : bumiharummanis@yahoo.com', 400000000, 'Avenue', '687061021.jpg'),
('A5', 'Hotel Chakra The Breeze Bsd', 'Berlokasi di Bumi Sepong Damai ( BSD ) Chakra venue saat ini menjadi referensi tempat pernikahan outdoor dan indoor. Yang menarik pada tempat pernikahan ini, Bagian outdoor dilengkapi dengan bangunan mirip kapel-kapel di Bali yang dikelilingi danau buatan. Jadi kamu ngga perlu jauh-jauh lagi ke Bali untuk mewujudkan pernikahanmu dengan suasana kapel ala Bali.  Kelebihan:  Memiliki nuansa seperti kapel di Bali Desain bangunan yang unik Memiliki nuansa yang warm dan Intimate View sudah cantik tidak perlu dekorasi yang berlebihan Memiliki area yang mixed outdoor dan indoor Kekurangan:  Berlokasi cukup jauh dari pusat kota Kontak :  Jl. Boulevard BSD Raya, Green Office Park Kav 1 BSD City Tangerang, 15345 Telepon: +62812 877 69 010 / +62812 877 69 010 Email: info@chakravenue.com', 200000000, 'Avenue', '15624741_1844028049214660_5871252196649074688_n1.jpg'),
('A6', 'Hotel Grand Galaxi', 'Saat ini Kota Bekasi memiliki tempat pernikahan yang tidak kalah dengan gedung mewah di Jakarta. Tempat pernikahan ini mewah bernama Grand Galaxi Convention Hall. Terletak di Green Mall Lantai 2 Grand Galaxy Park, Green Mall ini berada di kawasan perumahan Grand Galaxy City. Convention hall ini memiliki slogannya “The Biggest and The Most Luxurious Convention in Bekasi” tidak heran jika gedung pernikahan ini memang memberikan kesan Lux dan elegan.  Kelebihan:  Memiliki Ballroom yang megah dan mewah Dilengkapi dengan full karpet Harga relatif terjangkau dibandingkan dengan fasilitas dan kenyamanan yang didapat Langit -langit ruangan tinggi Dilengkapi dengan lampu – lampu kristal yang mewah Memiliki kapasitas 2000 orang Fasilitas ruang ganti baju yang banyak Bisa menggunakan catering dari luar Kekurangan :  Lokasinya jauh untuk dijangkau Kontak :   Jalan Grand Galaxy Boulevard No.1, Bekasi Selatan. Telepon: 021-29613300', 200000000, 'Avenue', '32297948290_41d6d962ca1.jpg'),
('A7', 'Hotel Bumi Bandhawa', 'Hotel Bumi Bandhawa ini berada di komplek perumahan juga, dan jauh dari kebisingan. Cocok untuk Boboers yang ingin mengadakan resepsi dengan konsep outdoor dan tidak terlalu banyak tamu.  Arena outdoornya yang dikelilingi pepohonan tentu bisa memberi suasana romantis yang tak terlupakan. Untuk paket weddingnya mulai dari IDR 40.000.000 untuk 200 pax, sudah termasuk venue, one night stay at Grand Suite, complimentary room buat akad nikah, dan listrik 3.000 watt. Additional catering per pax harga IDR 200.000.  Bumi Bandhawa Jl. Konstitusi I/16, Cigadung – Bandung', 10000000, 'Avenue', 'Gedung-arsip-nasional-11.jpg'),
('A8', 'Hotel Patrajasa', 'Nuansa mewah terasa pada gedung yang berada di Jl Gatot Subroto ini. Gedung yang telah di dekorasi cantik dengan lampu  kristal yang menghiasi langit langit ballroom, serta tirai yang sudah dekor dengan warna maroon-gold menambah kesan mewah pada ballroom ini. Selain itu yang terpenting adalah ruangan telah dilengkapi dengan full carpet, sehingga kamu tidak perlu lagi menambahkan biaya penyewaan karpet.  Berbicara mengenai kapasitas ruangan ini mampu menampung hingga 1500 orang. Ruang ganti, rias, dll juga tersedia lengkap dengan full ac. Lengkapnya fasilitas disini membuat gedung ini selalu fully booked, jadi jangan heran jika kamu diminta untuk membooking tempat ini setahun sebelum acara.  Kelebihan venue :  Berada strategis di pusat kota jakarta ruangan ballroom sudah dilengkapi dengan full karpet langit -langit ballroom yang tinggi menambah kesah luas ruangan Mampu menampung 1500 orang Area parkir cukup luas Disediakan ruang rias Failitas lainnya cukup lengkap Memiliki tirai yang menambah kesan elegan ruangan ballroom Bisa dilangsungkan akad nikah / pemberkatan Kekurangan venue :  Biaya sewa cukup mahal Kontak :  Jalan Gatot Subroto, Kav. 32-34, kuningan timur. Jakarta selatan. Telepon: 021-5203058', 450000000, 'Avenue', 'd2421896eec28dea956e377d7abc0642--interior-hotel-deco-interiors.jpg'),
('A9', 'Hotel Antam', 'Wedding venue selanjutnya adalah gedung antam atau aneka tambang yang terletak di Jalan TB. Simatupang. Tepat pernikahan ini sering digunakan sebagai gedung untuk menggelar acara pernikahan. Banyak dipilih karena selain lokasinya yang strategis fasilitas yang ditawarkan juga menarik untuk dilihat. Memiliki kapasitas hingga 1500 orang, gedung ini juga dilengkapi dengan area parkir yang luas juga.  Kelebihan:  Berada di lokasi yang mudah dijangkau Gedung memiliki langit – langit ruangan yang tinggi Mampu menampung 1500 orang Area parkir yang luas Dilengkapi dengan Full karpet Kekurangan :  Harus menggunakan catering vendor rekanan Kontak :  Jl. T. B. Simatupang No. 1, Tanjung Barat, Jagakarsa. Jakarta  Telepon:+62 21 7812635', 15000000, 'Avenue', 'ea2c27267a290ef7a9add8962ae6a6521.jpg'),
('D1', 'Rustic', 'Nah untuk dekorasi yang satu ini sepertinya memiliki kesamaan dengan si Shabby Chic. Si Rustic juga mengusung warna-warna pastel serta motif-motif bunga dalam dekorasinya. Hanya saja Rustic lebih condong ke konsep country, vintage dan juga unsur-unsur kayu. Tema Rustic ini sebenarnya terlihat lebih kalem dan terlihat lebih unik dibandingkan dengan konsep Shabby Chic.', 10000000, 'Dekorasi', '24671469ab2e1ec9635d701452d7e23d1.jpg'),
('D2', 'Beach', 'Saat ini semakin banyak orang yang menggunakan konsep pantai dalam acara pernikahan mereka. Pemilihan tema ini biasanya didasari dengan kesukaan sang mempelai terhadap alam khususnya pantai. Karena berlatar belakang view pantai maka ornamen-ornamen yang digunakan dalam pernikahan ini didominasi dengan warna aqua, putih, turquoise dan biru laut.', 1200000, 'Dekorasi', '86ea454431f0f5b2f4cc47a85487298f--beach-weddings-wedding-venues1.jpg'),
('D3', 'Javanese', 'Konsep pernikahan adat jawa memiliki ciri khas yaitu dengan adanya penyekat ruangan atau biasa disebut gebyok yang menjadi certerpiece di pelaminan. Gebyok ini pada dasarnya menggunakan kayu asli. Dengan adanya ornamen kayu asli akan menampilkan kesan klasik dan kuat.', 15000000, 'Dekorasi', '1927bee845482e32a0e43c03dc8d3e181.jpg'),
('D4', 'Royal Gold', 'Dekorasi yang mengusung konsep mewah tidak akan jauh dari yang namanya gemerlap. Pernikahan dengan konsep ini biasanya akan penuh dengan hal-hal mewah dan gemerlap. Mulai dari display setiap ornamen utama dalam gedung hingga penampilan tamu yang tentu saja tidak jauh dari kesan mewah. Warna-warna yang diusung adalah putih, silver, dan gold. Biasanya orang-orang yang tinggal di perkotaan akan condong pada konsep ini. Karena dekorasi pernikahan glamor sendiri membutuhkan ruangan yang luas serta budget yang cukup besar.', 25000000, 'Dekorasi', '51.jpg'),
('D5', 'Shaby Chic', 'Konsep Shabby Chic biasanya menjadi favorit para wanita. Karena konsep ini mengusung sisi romantisme dan feminisme yang kental. Mulai dari pemilihan warna-warna pink dan pastel serta identik dengan motif bunga. Wanita mana yang tidak ingin pesta pernikahannya penuh dengan keromantismean?', 200000000, 'Dekorasi', 'file_libk2h1.png'),
('D6', 'Flower Blossom', 'Nah bagi kalian yang menggilai bunga, tidak ada salahnya untuk memilih konsep Flower Blossom ini. Dengan tema ini kalian akan dikelilingi oleh bunga bunga. Akan ada beberapa bunga yang banyak yang berada di sekitar pelaminan. Warna-warna yang diusung dalam dekorasi ini tetap senada dengan bunga bunga seperti putih, pink dan beige.', 25000000, 'Dekorasi', 'b975abecface34c4bd4d5d431a811069--pakistani-wedding-cake-pakistani-wedding-decoration.jpg'),
('D7', 'Cherry Blossom', 'Nah bagi kalian yang menggilai bunga, tidak ada salahnya untuk memilih konsep Cherry Blossom ini. Dengan tema ini kalian akan dikelilingi oleh bunga sakura. Akan ada beberapa pohon sakura yang berada di sekitar pelaminan. Warna-warna yang diusung dalam dekorasi ini tetap senada dengan bunga sakura seperti putih, pink dan beige.', 200000000, 'Dekorasi', '9b4a6969038927390ce25a25c992183e--wedding-marquee-decoration-luxury-wedding.jpg'),
('D8', 'Flower Tale', 'Nah bagi kalian yang menggilai bunga, tidak ada salahnya untuk memilih konsep Flower Blossom ini. Dengan tema ini kalian akan dikelilingi oleh bunga bunga. Akan ada beberapa bunga yang banyak yang berada di sekitar pelaminan. Warna-warna yang diusung dalam dekorasi ini tetap senada dengan bunga bunga seperti putih, pink dan beige. Selain itu dipadukan dengan diusungnya tema negeri dongeng', 25000000, 'Dekorasi', '88e83a35d583e53b966fb0be71f0f04d--nigerian-weddings-african-weddings1.jpg'),
('D9', 'Islamic', 'ntuk tema pernikahan islami biasanya akan diambil unsur-unsur yang terdapat pada pernikahan Negara-negara islam seperti Arab ataupun Pakistan. Ornamen-ornamen khas seperti adanya tirai panjang yang digunakan sebagai background pelaminan. Untuk tirai ini bisa diaplikasikan hanya dengan satu warna atau dua warna. Dalam tema pernikahan islam bunga juga menjadi item yang wajib ada. Biasanya bunga dengan warna kuning, putih, hijau, pink, merah, marun, atau ungu lebih sering dipakai. Selain itu pohon yang dikeringkan juga sering digunakan sebagai ornamen penghias dalam tema ini. Dan berikut ini merupakan beberapa contoh dekorasi pernikahan bertema islami.', 200000000, 'Dekorasi', 'DoubleTree1.jpg'),
('GL1', 'Amarossa Hall', 'Hadir dikawasan elit jakarta, Amarossa cocok menjadi Tempat Pernikahan / Wedding Indoor & Outdoor. Wedding venue yang satu ini cocok untuk kamu yang ingin memiliki pesta pernikahan yang intim dan private, karena kapasitas disini cocok untuk small reception dengan jumlah berkisar 500 orang.  Kelebihan Venue:  Tempat bagus, elegant, klasik, mewah, dengan arsitektur menawan di tiap sudut ruangannya, dilengkapi sofa-sofa yang nyaman di beberapa sudut ruangannya. Karena tempat sudah tertata indah, tidak diperlukan dekorasi yang berlebihan, hal ini akan menghemat biaya dekorasi Paket wedding mulai Rp. 29 juta untuk 300 pax, untuk lebih jelasnya bisa dilihat di sini. Banyak pilihan vendor katering yang bagus-bagus Kekurangan Venue:  Tempat parkir terbatas (namun disediakan shuttle bus dan vallet parking) Tempatnya kecil, jadi seringkali tamu terlewat, sebaiknya sediakan tim khusus untuk menjadi petunjuk jalan/ GPS bila diperlukan, agar tamu tidak tersasar, apalagi bila tamu undangan kebanyakan adalah para sepuh (s', 350000000, 'GoldGedung', 'gold.jpg'),
('GL2', 'Rustic', 'Nah untuk dekorasi yang satu ini sepertinya memiliki kesamaan dengan si Shabby Chic. Si Rustic juga mengusung warna-warna pastel serta motif-motif bunga dalam dekorasinya. Hanya saja Rustic lebih condong ke konsep country, vintage dan juga unsur-unsur kayu. Tema Rustic ini sebenarnya terlihat lebih kalem dan terlihat lebih unik dibandingkan dengan konsep Shabby Chic.', 100000000, 'GoldDekor', '154509d9590b2e433974d1d9261a907e--red-rose-wedding-dream-wedding.jpg'),
('GL3', 'Nude Wedding', 'Jika kamu suka desain yang bewarna nude dan sesuai dengan tema pernikahanmu maka tema ini sangat cocok. Dihiasi dengan  desain simple ssehingga', 150000, 'GoldUndangan', 'affordable-blush-pink-lace-wedding-invitations-EWI327.jpg'),
('GL4', 'Billy William', 'Alamat: JL. Sunter Jaya 8, No. 12 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021)000999888', 2000000, 'GoldMC', 'allan11.png'),
('GL5', 'VME Entertaiment', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano ,biola yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 3000000, 'GoldSupport', 'file_ohh7mo11.png'),
('GL6', 'Uppermost Photograph', 'Website : www.theuppermost.com Email : contact@theuppermost.com Head office (by appointment only) : Bintaro Puspita IV / A7 Bumi Bintaro Permai, Jakarta selatan Jakarta, Indonesia 12330 Phone : Suri Lim – Jakarta (+62.877.8134.3211) / Memena Lee – Bali (+62-811.7580.117)', 1200000, 'GoldPhotographer', 'capotrait11.png'),
('GL7', 'Paket B', 'Foods : Nasi Putih Nasi Goreng  Aneka Sup  Aneka Tumisan  Aneka Olahan Ayam  Aneka Olahan Daging Kerupuk  Beverages : Infused Water Aneka Es  Desserts : Puding / Buah Potong', 2000000, 'GoldCatering', '11008516_954142861301856_157890887606200306_n-500x50011.png'),
('K1', 'PAKET A', 'Nasi Putih Nasi Goreng (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 1500000, 'Catering', '99519b62347374b8bfeff3b32329f2261.jpg'),
('K2', 'PAKET B', 'Foods : Nasi Putih Nasi Goreng  Aneka Sup  Aneka Tumisan  Aneka Olahan Ayam  Aneka Olahan Daging Kerupuk  Beverages : Infused Water Aneka Es  Desserts : Puding / Buah Potong', 2000000, 'Catering', '11008516_954142861301856_157890887606200306_n-500x5001.png'),
('K3', 'PAKET C', 'Nasi Putih Nasi Goreng (Pilihan) Daging (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Menu Pendamping 1 (Pilihan) Menu Pendamping 2 (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 2500000, 'Catering', 'abc-catering-katering-pernikahan--3efb8b9d-65c9-4aaa-af9e-7d006d5f5c531.jpg'),
('K4', 'PAKET D', 'Nasi Putih Nasi Goreng (Pilihan) Daging (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 3000000, 'Catering', 'malaysia_wedding_caterers_zuki_catering_malay_wedding_nadia_aizad61.jpg'),
('K5', 'PAKET E', 'Aneka Soup  Aneka Tumisan Sambal Goreng Ati  Aneka Olahan Mie Special  Aneka Olahan Ikan Special  Aneka Olahan Ayam Special  Aneka Olahan Daging Special Nasi Goreng Seafood Special Nasi Putih Kerupuk Udang  Beverages :  Aneka Es Buah Aneka Soft Drink Air Mineral   Desserts : Buah Potong Puding Potong Salad Buah & Sayur Es Puter', 3500000, 'Catering', 'catering1.jpg'),
('K6', 'PAKET F', 'Foods : Aneka Soup  Aneka Tumisan  Aneka Olahan Mie  Aneka Olahan Ayam  Aneka Olahan Daging  Aneka Olahan Ikan  Aneka Olahan Seafood  Nasi Olahan Special Nasi Putih Kerupuk Udang  Beverages : Aneka Es Buah Soft Drink Juice Lemonade Water  Desserts : Buah Potong Puding Potong Salad Buah', 4000000, 'Catering', 'luxury-wedding-catering-services-500x5002.jpg'),
('M1', 'Rudy Hartono', 'Alamat: JL. Ranau 2, No. 12 A, RT.07/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatan, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 6500135', 1000000, 'MC', 'ruben1.jpg'),
('M2', 'Billy William', 'Alamat: JL. Sunter Jaya 8, No. 12 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021)000999888', 2000000, 'MC', 'allan.png'),
('M3', 'Alan Wang', 'Alamat: JL. Sunter Jaya 10, No. 16 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 65034532', 1200000, 'MC', 'billy.png'),
('M4', 'Rudy Atmojo', 'Alamat: JL. Sunter Jaya  19, No. 1 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatann, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 234512', 1000000, 'MC', 'mc-ilham-makalalag-1509194709-BJaRixGAW1.png'),
('M5', 'Fernando Edo', 'Alamat: JL. Sunter Jaya 2, No. 12 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 650987654', 3000000, 'MC', 'fernando1.jpg'),
('M6', 'Steven Eka', 'Alamat: JL. Sunter Jaya 5, No. 12 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 65432', 1500000, 'MC', 'file_gt8dsi1.png'),
('P1', 'Axio Photograph', 'Quote “Harga memang nggak pernah bohong” cocok untuk mendefinisikan salah satu dari 10 vendor wedding photographer terbaik di Jakarta ini! Hasil fotonya bisa dibilang ngga pernah mengecewakan. Tema-tema yang mereka suguhkan benar-benar sangat indah, selain itu foto mereka hasilkan seakan seperti bercerita.  Untuk mengetahui lebih jelas tentang Axioo Photography, kamu bisa kontak mereka di :  Phone/Fax : (62) 21 724 3622 Email : info@axioo.com Website : www.axioo.com Instagram : @axioo Facebook : Axioo Twitter :@ axioo', 1200000, 'Photographer', 'axioo1.jpg'),
('P2', 'Uppermost Photograph', 'Theuppermost Photography bisa dibilang menjadi rujukan bagi para wedding photographer yang bosan dengan style wedding photography yang itu-itu saja, maka tidak salah apabila Seputar Pernikahan  menilainya sebagai vendor anti mainstream yang mempunyai ciri khas dalam setiap pengambilan gambar bahkan Theuppermost dianggap mampu menciptakan aliran tersendiri yang kadang keluar dari pakem-pakem photography yang sudah ada sebelumnya, style ini biasa mereka sebut: moment in beauty.  Sesuai dengan arti dari nama vendor ini, uppermost yang dapat diartikan in the highest position. Hasil-hasil foto mereka pun outstanding. Bisa dibilang, they are a great moment capturer!  Website : www.theuppermost.com Email : contact@theuppermost.com Head office (by appointment only) : Bintaro Puspita IV / A7 Bumi Bintaro Permai, Jakarta selatan Jakarta, Indonesia 12330 Phone : Suri Lim – Jakarta (+62.877.8134.3211) / Memena Lee – Bali (+62-811.7580.117)', 1500000, 'Photographer', 'capotrait1.png'),
('P3', 'Bernardo Photograph', 'Setelah mereview akun instagram Bernardo Pictura, tim Seputar pernikahan langsung jatuh hati melihat kemewahan dari setiap angle yang disuguhkan pada setiap photo yang ada di Bernardo Pictura, Jika kamu menyukai tema elegant dan momen-momen yang intim, Bernardo Pictura mungkin pilihan yang tepat!  Email : hello@bernardopictura.com Phone : +628129916771 Instagram : @bernardopictura Twitter : @bernardopictura Facebook : Bernardo Pictura', 2500000, 'Photographer', 'defrr1.jpg'),
('P4', 'Antheia Photograph', 'Tone warnanya yang soft juga menjadi daya tarik bagi para couple yang senang dengan tone warna yang soft bak fairy tale.  Address : Jl Marina Indah, Rukan Cordoba Blok B-30, Pantai Indah Kapuk, Jakarta. Website : www.antheiaphoto.com Phone : +6221-56983430 / +62-812-8016-4097  Email : info@antheiaphoto.com', 1200000, 'Photographer', 'dniel1.png'),
('P5', 'Thepomoto Photograph', 'Thepotomoto Photography juga tercatat dalam member Fearless Photographers yang berisi wedding photographer terbaik di dunia. Selain di Jakarta, Thepotomoto Photography juga membuka layanannya di Bali.  Dari hasil fotonya, mereka menekankan pada tone yang Bright and soft. Sisi uniknya, mereka bisa menghadirkan angle yang unik dan berani. Menariknya lagi, anda bisa melihat langsung price list di website mereka. Dan secara mengejutkan, jika dibandingkan dengan vendor lainnya, mungkin vendor ini yang paling terjangkau di antara yang lain. Quote “Harga nggak bisa bohong” sepertinya tidak berlaku untuk vendor ini  Berikut data lengkap Thepotomoto Photography :  Website: thepotomoto.com Email : support@thepotomoto.com Phone & WhatsApp : +62813-153-77979 /  +62812-9911-1980 Instagram : @thepotomoto Facebook : Thepotomoto Photography Twitter : @thepotomoto Address :  Taman Manggis Permai Blok J No.6, Tole Iskandar – Depok', 1500000, 'Photographer', 'bogor2.png'),
('P6', 'Le Motion Photograph', 'Vendor Photography lainnya yang patut direkomendasikan adalah Le motion. Memiliki tone kuning lembut adalah ciri khas dari setiap karyanya, tak ayal jika melihat akun instagramnya para pengunjung langsung jatuh cinta pada tone yang di hasilkan dari Le Motion ini.  Website : www.lemotionphoto.com Office : Jl. Kemang V No.6B , Jakarta Selatan Phone : 021-7197417 Email : lemotionphoto@gmail.com Instagram : @lemotionphoto Facebook : Le Motion Photo Twitter : @lemotionphoto', 2500000, 'Photographer', 'mostra.png'),
('PL1', 'Hotel Intercontinental Jakarta Mildplaza', 'JI. Jend. Sudirman Kay 10-11, Jakarta     Tel: (021) 2510888  Fax: (021) 2511777  www.intercontinental.com', 550000000, 'PlatinumGedung', '1640bd3f4960c3890547722ca86496c4--pernikahan-jakarta2.jpg'),
('PL2', 'Elegan White', 'Warna putih mempunyai arti damai dan suci. Seperti tujuan pernikahan yang ingin mencapai kedamaian dan kebahagian dalam ikatan suci.  Dalam bentuk konotasi warna, warna putih bisa menjadi pilihan konsep acara yang patut di pertimbangkan.  Dimulai dari karpet putih yang membentang dari pintu masuk menuju ke pelaminan, terlihat panggung pelaminan  mulai dari sofa, background pelaminan dengan dominasi warna putih. Diiringi tiap detail ruangan dengan perpaduan warna senada menciptakan kesan anggun dan berkelas. Ditambah hiasan dedaunan berwarna hijau dan aroma harum bunga-bunga segar, menjadi doa tersirat agar setelah pernikahan  nantinya akan hidup dalam kesuburan dan kemakmuran. Dengan desain pelaminan minimalis tanpa terlalu banyak ornamen dan dengan desain warna soft yang disusun dengan cermat, memberikan kesan elegan. Adanya hiasan pepohonan dengan daun-daun putih di sisi kanan dan kiri pelaminan, dipadu dengan pencahayaan yang sesuai, akan memancarkan  suasana lebih  indah. Di iringi dengan musik pernikahan yang romantis,tempat duduk dengan warna putih dan vas bunga elegan diatasnya para tamu undangan seakan diajak untuk menjadi saksi akan hadirnya sebuah rumah tangga baru yang dibalut dengan kedamaian.', 8000000, 'PlatinumDekor', '0322e037237020d6bd5f5bf3e22a1943--wedding-stuff-dream-wedding.jpg'),
('PL3', 'Coconut Card', 'Ukuran: 25 cm x 14,5cm Tipe: Hardcover Variasi: Hiasan kain vintage + full bunga khas chic vintage', 550000, 'PlatinumUndangan', 'godeliva-undangan-pernikahan--6b7d437a-fc7e-45ea-a52a-94cb167e8170.jpg'),
('PL4', 'Rudy Lim', 'Alamat: JL. Melati 2, No. 12 A, RT.08/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatan, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 6500187', 3000000, 'PlatinumMC', 'andi1.png'),
('PL5', 'Wufy Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0815612342', 5000000, 'PlatinumSupport', 'images.jpg'),
('PL6', 'Daniel Photography', 'Memiliki tone coklat lembut adalah ciri khas dari setiap karyanya, tak ayal jika melihat akun instagramnya para pengunjung langsung jatuh cinta pada tone yang di hasilkan dari daniel ini. Website : www.danielphoto.com Office : Jl. Kemang V No.6B , Jakarta Selatan Phone : 021-7197417 Email : danielphoto@gmail.com Instagram : @danielphoto Facebook : daniel Photo Twitter : @danielphotolemotion', 6500000, 'PlatinumPhotographer', '7667_1.jpg'),
('PL7', 'Paket Catering Platinum', 'Foods : Aneka Soup  Aneka Tumisan  Aneka Olahan Mie  Aneka Olahan Ayam  Aneka Olahan Daging  Aneka Olahan Ikan  Aneka Olahan Seafood  Nasi Olahan Special Nasi Putih Kerupuk Udang  Beverages : Aneka Es Buah Soft Drink Juice Lemonade Water  Desserts : Buah Potong Puding Potong Salad Buah', 7000000, 'PlatinumCatering', 'wed1.png'),
('S1', 'Steven Guitar', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 1200000, 'Support', 'file_(1)2.jpg'),
('S2', 'Rany Ambarwati', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 08567823112', 1500000, 'Support', 'file1.jpg'),
('S3', 'Pelangi Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0812-1393-7331', 2000000, 'Support', 'file_n4pehq.png'),
('S4', 'Stairways Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0812-1393-7331', 1200000, 'Support', '98117adc6906afc8ce11de7bbeabbcb5--stairways-music1.jpg'),
('S5', 'VME Entertaiment', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano ,biola yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 3000000, 'Support', 'file_ohh7mo1.png'),
('S6', 'Astera Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 3500000, 'Support', 'astera-entertainment-management_kevin-and-lianna-wedding-reception-at-raffles-hotel-jakarta_42.jpg'),
('SL1', 'Merlynn Park Hotel', 'JI KH. HasyimAshari No. 29-31  Jakarta Pusat 10130 Tel: (021) 30026888  Fax: (021) 30026889  Hp: 08161147705', 50000000, 'SilverGedung', '6d4360080fd07e54ed1457b54e5bcf03.jpg'),
('SL2', 'Love Pattern', 'Satu atau dua lembar kartu undangan dengan pilihan kertas harga paling ekonomis pasti nggak akan bikin kartu undanganmu jadi mahal. Biar lebih manis, bisa kamu tambahkan amplop warna favorit, warna merah muda seperti ini misalnya', 150000, 'SilverUndangan', 'wedding-invitation-card-500x50021.jpg'),
('SL3', 'Javanese', 'Konsep pernikahan adat jawa memiliki ciri khas yaitu dengan adanya penyekat ruangan atau biasa disebut gebyok yang menjadi certerpiece di pelaminan. Gebyok ini pada dasarnya menggunakan kayu asli. Dengan adanya ornamen kayu asli akan menampilkan kesan klasik dan kuat.', 15000000, 'SilverDekor', '1927bee845482e32a0e43c03dc8d3e1811.jpg'),
('SL4', 'Rudy Atmojo', 'Alamat: JL. Sunter Jaya  19, No. 1 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatann, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 234512', 1000000, 'SilverMC', 'mc-ilham-makalalag-1509194709-BJaRixGAW11.png'),
('SL5', 'Rany Ambarwati', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 08567823112', 1500000, 'GoldSupport', 'file11.jpg'),
('SL6', 'Axio Photograph', 'Tema-tema yang mereka suguhkan benar-benar sangat indah, selain itu foto mereka hasilkan seakan seperti bercerita. Untuk mengetahui lebih jelas tentang Axioo Photography, kamu bisa kontak mereka di : Phone/Fax : (62) 21 724 3622 Email : info@axioo.com Website : www.axioo.com Instagram : @axioo Facebook : Axioo Twitter :@ axioo', 1200000, 'SilverPhotographer', 'axioo11.jpg'),
('SL7', 'PAKET A', 'Nasi Putih Nasi Goreng (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 1500000, 'SilverCatering', '99519b62347374b8bfeff3b32329f22611.jpg'),
('U1', 'Rose Gold', 'Jika kamu suka desain yang mewah dan sesuai dengan tema pernikahanmu maka tema ini sangat cocok. Dihiasi dengan motof bunga mawar dan dipadukan dengan warna emas undangan ini terkesan glamor dan mewah.', 600000, 'Undangan', 'cb14c380bed9b78b54b6a8ede91eee3d--silver-wedding-invitations-wedding-cards2.jpg'),
('U2', 'Elegan White', 'Sekilas kartu undangan ini terlihat seperti sampul buku, ya. Cocok nih buat kamu yang suka desain klasik dan elegan. Kalau undanganmu berukuran kecil, kamu bisa tambahkan amplop cantik, tapi kalau sudah cukup besar, amplop bisa ditiadakan~', 250000, 'Undangan', '51f7TSE46ZL__US500_1.jpg'),
('U3', 'Paper Invitation', 'Kartu undangan dengan minim corak dengan dominasi warna putih seperti ini simpel banget, nggak butuh banyak kertas juga jadi pastinya irit! Biar cakep, kamu bisa tambahkan aksen tali cokelat seperti ini', 135000, 'Undangan', 'b58057bb86fd387acb710649187d91de--wedding-invitations-online-wedding-invitation-kits1.jpg'),
('U4', 'Leaf Invitation', 'Ingin sesuatu yang terlihat lebih klasik dan feminin dari undanganmu? Bisa tambahan ornamen dedaunan seperti ini, lho. Dijamin undanganmu tetap terlihat cantik meski super simpel', 120000, 'Undangan', 'bohemian-wedding-invitations-with-uses-cheap-materials-for-cool-wedding-invitation-design-2341.jpg'),
('U5', 'Floral Invitation', 'Undangan bermotif floral seperti ini wajib kamu coba kalau kamu suka sesuatu yang feminin dan rustic. Meski terkesan mahal, sebenarnya undangan semacam ini bisa kamu unduh secara gratis lho di banyak situs-situs desain!', 150000, 'Undangan', 'design-wedding-invitations-online-green-and-white-combined-design-with-ribbon-and-small-envelope-with-pattern-design-floral2.jpg'),
('U6', 'Pastel Pink', 'Suka desain yang lebih kalem? Maka undangan dengan corak goresan cat air seperti ini bisa jadi pilihan. Ongkosnya bisa kamu pangkas di amplop, jadi tinggal bikin kartu undangan yang apik terus masukan plastik undangan deh', 200000, 'Undangan', 'shine-wedding-invitations-with-elegant-ornaments-of-beautiful-Wedding-Invitation-Cards-invitation-card-design-81.jpg'),
('U7', 'Love Pattern', 'Satu atau dua lembar kartu undangan dengan pilihan kertas harga paling ekonomis pasti nggak akan bikin kartu undanganmu jadi mahal. Biar lebih manis, bisa kamu tambahkan amplop warna favorit, warna merah muda seperti ini misalnya', 150000, 'Undangan', 'wedding-invitation-card-500x5002.jpg'),
('U8', 'Purple Black', 'Warna-warna deep seperti ini juga bisa kamu coba kalau kamu suka sesuatu yang minimalis tapi elegan. Meski terlihat mahal, desain seperti ini kelihatan mahal, sebenarnya bisa disesuaikan dengan bujet yang kamu punya', 250000, 'Undangan', 'purple-wedding-invitation-kits-as-best-style-to-make-amazing-wedding-invitations-design1.jpg'),
('U9', 'Rustic', 'Undangan kertas cokelat seperti ini bisa jadi pilihan kalau kamu butuh undangan ekonomis tapi bergaya ala vintage. Untuk memangkas harga, kartu undangan bisa langsung kamu masukkan plastik undangan saja tanpa tambahan amplop', 200000, 'Undangan', 'Rustic-Wedding-Invitations-which-can-be-used-to-make-your-own-Wedding-invitation-design-22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dekorasi`
--

CREATE TABLE `dekorasi` (
  `id_dekorasi` varchar(200) NOT NULL,
  `nama_dekorasi` varchar(200) NOT NULL,
  `judul_dekorasi` varchar(200) NOT NULL,
  `deskripsi_dekorasi` varchar(200) NOT NULL,
  `harga_dekorasi` int(11) NOT NULL,
  `gambar_dekorasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dekorasi`
--

INSERT INTO `dekorasi` (`id_dekorasi`, `nama_dekorasi`, `judul_dekorasi`, `deskripsi_dekorasi`, `harga_dekorasi`, `gambar_dekorasi`) VALUES
('uhuh', 'uhuih', '', 'uhu', 98, 'Coreldraw_x81.png');

-- --------------------------------------------------------

--
-- Table structure for table `katering`
--

CREATE TABLE `katering` (
  `id_katering` varchar(200) NOT NULL,
  `nama_katering` varchar(200) NOT NULL,
  `deskripsi_katering` varchar(200) NOT NULL,
  `harga_katering` int(11) NOT NULL,
  `gambar_katering` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katering`
--

INSERT INTO `katering` (`id_katering`, `nama_katering`, `deskripsi_katering`, `harga_katering`, `gambar_katering`) VALUES
('huuh', 'huh', 'uhuhu', 989, 'Penampakan_Pocong_Asli_Dan_Nyata.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mc`
--

CREATE TABLE `mc` (
  `id_mc` varchar(200) NOT NULL,
  `nama_mc` varchar(200) NOT NULL,
  `deskripsi_mc` varchar(200) NOT NULL,
  `harga_mc` int(11) NOT NULL,
  `gambar_mc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mc`
--

INSERT INTO `mc` (`id_mc`, `nama_mc`, `deskripsi_mc`, `harga_mc`, `gambar_mc`) VALUES
('fewfew', 'efefew', 'effewf46546', 43, '_575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`username`, `password`, `level`) VALUES
('admin', 'admin', '1'),
('Aldi', 'rani', '1'),
('pegawai1', 'pegawai1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id_photographer` varchar(200) NOT NULL,
  `nama_photographer` varchar(200) NOT NULL,
  `deskripsi_photographer` varchar(200) NOT NULL,
  `harga_photographer` int(11) NOT NULL,
  `gambar_photographer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id_support` varchar(200) NOT NULL,
  `nama_support` varchar(200) NOT NULL,
  `deskripsi_support` varchar(200) NOT NULL,
  `harga_support` int(11) NOT NULL,
  `gambar_support` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id_support`, `nama_support`, `deskripsi_support`, `harga_support`, `gambar_support`) VALUES
('huh', 'uhu', 'hu', 8787, 'aplikasi_edukasi_anak_suara_hewan2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `nama_testi` varchar(255) NOT NULL,
  `email_testi` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`nama_testi`, `email_testi`, `comment`) VALUES
('Bayu', 'bayu@gmail.com', 'Membuat Tidak tidur'),
('dafa', 'dafa@gmail.com', 'membuat pulang tengah malam'),
('hihi', 'udin@gmail.com', 'Semangat.........'),
('Katy', 'katy@gmail.com', 'bagus sekali'),
('Yessy', 'Yessy@gmail.com', 'Membuat mata dingin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `nama_undangan` varchar(30) NOT NULL,
  `jumlah_undangan` int(20) NOT NULL,
  `nama_gedung` varchar(30) NOT NULL,
  `jam_gedung` int(11) NOT NULL,
  `dekorasi` varchar(100) NOT NULL,
  `photographer` varchar(100) NOT NULL,
  `katering` varchar(100) NOT NULL,
  `jumlah_katering` int(20) NOT NULL,
  `mc` varchar(100) NOT NULL,
  `support` varchar(100) NOT NULL,
  `total_harga` bigint(50) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `status` varchar(60) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_lengkap`, `alamat`, `no_ktp`, `nama_undangan`, `jumlah_undangan`, `nama_gedung`, `jam_gedung`, `dekorasi`, `photographer`, `katering`, `jumlah_katering`, `mc`, `support`, `total_harga`, `tanggal_acara`, `status`, `tanggal_transaksi`, `gambar_transaksi`) VALUES
(1, 'udin', 'jabung', '123435234', 'a', 100, 'a0', 2, 'a', 'a', 'a', 0, 'a', 'a', 36540, '2018-01-18', 'Terverifikasi', '2018-01-18 04:30:29', '2017-09-29-16-00-dev_dot_co_id_(1)1.png'),
(2, 'udin', 'jalsana', '123123213', 'a', 111, 'a1', 2, 'a', 'a', 'a', 0, 'a', 'a', 28530, '2018-01-26', 'Terverifik', '2018-01-18 04:29:31', '20638289_208631743002300_4903323289566599573_n1.jpg'),
(3, 'udin', 'asdasdasd', '123312421', 'a', 123, 'a1', 2, 'a', '', 'a', 500, '', '', 56340, '2018-01-26', 'Terverifik', '2018-01-15 22:55:23', 'Telkom_School_Logo.jpg'),
(4, 'udin', 'wdwd', '234234', 'a', 6, 'a0', 4, 'a', 'a', 'a', 5, 'a', 'a', 990, '2018-01-26', 'Terverifik', '2018-01-18 04:29:24', '15663.png'),
(5, 'udin', 'asdasdasd', '123123', 'Leaf Invitation', 4, 'Hotel De La Rosa', 3, 'Javanese', '', '', 0, '', '', 615480000, '2018-01-18', 'Belum Luna', '2018-01-15 17:00:00', ''),
(6, 'lula lala', 'sadasd', '213123', 'Paper Invitation', 3, 'Hotel Talavera Terrace', 2, 'Beach', '', '', 0, '', '', 201605000, '2018-01-18', 'Terverifik', '2018-01-16 07:09:37', 'akbar3.PNG'),
(7, 'udien', 'sadasd', '123123', 'Coconut Card', 3, 'Hotel Intercontinental Jakarta', 2, 'Elegan White', 'Daniel Photography', 'Paket Catering Platinum', 4, 'Rudy Lim', 'Wufy Music', 1152150000, '2018-01-25', 'Belum Luna', '2018-01-15 17:00:00', ''),
(8, 'lula lala', 'asasas', '1212', 'Elegan White', 3, 'Hotel De La Rosa', 3, 'Javanese', '', '', 0, '', '', 615750000, '2018-01-31', 'Belum Luna', '2018-01-15 17:00:00', ''),
(9, 'lula lala', 'sadasd', '123213', 'Leaf Invitation', 1, 'Hotel De La Rosa', 4, 'Javanese', '', 'PAKET C', 2, 'Billy William', '', 822120000, '2018-01-31', 'Belum Luna', '2018-01-15 17:00:00', ''),
(10, 'lula lala', 'malang', '765', 'Elegan White', 300, 'Hotel Bella Rosa', 3, 'Rustic', '', '', 0, 'Steven Eka', '', 986500000, '2018-01-20', 'Terverifik', '2018-01-16 07:31:57', 'mail1.PNG'),
(11, 'Bayu Chrisna', 'malang', '987654', 'Paper Invitation', 600, 'Hotel De La Rosa', 2, 'Javanese', 'Uppermost Photograph', 'PAKET B', 900, 'Rudy Atmojo', 'Steven Guitar', 2147483647, '2018-01-26', 'Terverifik', '2018-01-18 03:54:36', 'sistem.PNG'),
(12, 'Bayu Chrisna', 'malang', '9876', 'Rose Gold', 500, 'Hotel Bumi Harum', 6, 'Beach', 'Axio Photograph', 'PAKET C', 900, 'Rudy Hartono', 'Rany Ambarwati', 2147483647, '2018-03-09', 'Terverifik', '2018-01-18 03:54:31', 'dot1.PNG'),
(13, 'Bayu Chrisna', 'malang', '9876', 'Coconut Card', 80, 'Hotel Intercontinental Jakarta', 7, 'Elegan White', 'Daniel Photography', 'Paket Catering Platinum', 60, 'Rudy Lim', 'Wufy Music', 2147483647, '2018-01-31', 'Terverifik', '2018-01-18 03:54:53', 'signup1.PNG'),
(14, 'Bayu Chrisna', 'fefe', '534546', 'Coconut Card', 5, 'Hotel Intercontinental Jakarta', 5, 'Elegan White', 'Daniel Photography', 'Paket Catering Platinum', 5, 'Rudy Lim', 'Wufy Music', 2147483647, '2018-01-27', 'Belum Luna', '2018-01-17 17:00:00', ''),
(15, 'Bayu Chrisna', 'erf', '434', 'Paper Invitation', 5, 'Hotel Bumi Bandhawa', 5, 'Beach', 'Axio Photograph', 'PAKET C', 3, 'Rudy Hartono', 'Rany Ambarwati', 63075000, '2018-01-31', 'Terverifikasi', '2018-01-18 04:30:35', ''),
(16, 'Bayu Chrisna', 'jyj', '667', 'Elegan White', 70, 'Hotel De La Rosa', 6, 'Beach', 'Bernardo Photograph', 'PAKET B', 60, 'Rudy Hartono', 'Pelangi Music', 1344200000, '2018-03-10', 'Terverifikasi', '2018-01-18 05:09:41', '6d4360080fd07e54ed1457b54e5bcf031.jpg'),
(17, 'lula lala', 'jabung', '123123123', 'Coconut Card', 1, 'Hotel Intercontinental Jakarta', 2, 'Elegan White', 'Daniel Photography', 'Paket Catering Platinum', 3, 'Rudy Lim', 'Wufy Music', 1144050000, '2018-01-24', 'Belum Lunas', '2018-01-17 17:00:00', ''),
(18, 'lula lala', 'asdasd', '123213', 'Rose Gold', 1, 'Hotel De La Rosa', 3, 'Javanese', 'Uppermost Photograph', 'PAKET C', 4, 'Billy William', 'Pelangi Music', 631100000, '2018-01-26', 'Belum Lunas', '2018-01-18 13:56:05', 'auth1.jpg'),
(19, 'lula lala', 'asdasd', '23123', 'Nude Wedding', 2, 'Amarossa Hall', 3, 'Rustic', 'Uppermost Photograph', 'Paket B', 1, 'Billy William', 'VME EntertaimentRany Ambarwati', 2147483647, '2018-01-31', 'Belum Lunas', '2018-01-17 17:00:00', ''),
(20, 'lula lala', 'asdasd', '123123', 'Nude Wedding', 3, 'Amarossa Hall', 3, 'Rustic', 'Uppermost Photograph', 'Paket B', 2, 'Billy William', 'VME EntertaimentRany Ambarwati', 30001159150000, '2018-01-31', 'Belum Lunas', '2018-01-17 17:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id_undangan` varchar(200) NOT NULL,
  `nama_undangan` varchar(200) NOT NULL,
  `deskripsi_undangan` varchar(200) NOT NULL,
  `harga_undangan` int(11) NOT NULL,
  `gambar_undangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id_undangan`, `nama_undangan`, `deskripsi_undangan`, `harga_undangan`, `gambar_undangan`) VALUES
('32', 'uhui', 'huhuih', 767, '454');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `google` tinyint(1) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `link` text NOT NULL,
  `picture` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `google`, `first_name`, `last_name`, `email`, `password`, `gender`, `link`, `picture`, `created`, `modified`) VALUES
('104856818417542905320', 1, 'Bayu', 'Chrisna', 'bayuchrisna3@gmail.com', '', '', 'https://plus.google.com/104856818417542905320', 'https://lh5.googleusercontent.com/-eqdyF82K5kg/AAAAAAAAAAI/AAAAAAAAAVw/wzVJgBc85l8/photo.jpg', '2018-01-18 03:37:15', '0000-00-00 00:00:00'),
('105066652068032907140', 1, 'M,in''am', 'Awaludin', 'darkdm003@gmail.com', '', '', 'https://plus.google.com/105066652068032907140', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2018-01-06 08:33:45', '0000-00-00 00:00:00'),
('113176546967161757722', 1, 'Muchammad In''am Awaludin', '24RPL', 'muchammad_awaludin_24rpl@student.smktelkom-mlg.sch.id', '', '', '', 'https://lh5.googleusercontent.com/-5YH3rx1WZik/AAAAAAAAAAI/AAAAAAAAABU/-H6Gtkq1LSo/photo.jpg', '2018-01-08 06:45:07', '0000-00-00 00:00:00'),
('113449228868370881279', 1, 'M.In''am', 'Awaludin', 'inam.awaludin@gmail.com', '', '', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2018-01-06 08:36:34', '0000-00-00 00:00:00'),
('11556501254', 0, 'ded', 'ede', 'dafa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '2018-01-16 03:49:46', '0000-00-00 00:00:00'),
('117178218247705305802', 1, 'Dafa', 'Alfendo', 'dafaalfendo99@gmail.com', '', '', 'https://plus.google.com/117178218247705305802', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '2018-01-16 07:58:09', '0000-00-00 00:00:00'),
('1999083498', 0, 'lula', 'lala', 'darkdm00@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '2018-01-16 03:43:57', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avenue`
--
ALTER TABLE `avenue`
  ADD PRIMARY KEY (`id_avenue`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD PRIMARY KEY (`id_dekorasi`);

--
-- Indexes for table `katering`
--
ALTER TABLE `katering`
  ADD PRIMARY KEY (`id_katering`);

--
-- Indexes for table `mc`
--
ALTER TABLE `mc`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id_photographer`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id_support`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`nama_testi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

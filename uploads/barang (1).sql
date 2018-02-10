-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 04:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
('GL1', 'Amarossa Hall', 'Hadir dikawasan elit jakarta, Amarossa cocok menjadi Tempat Pernikahan / Wedding Indoor & Outdoor. Wedding venue yang satu ini cocok untuk kamu yang ingin memiliki pesta pernikahan yang intim dan private, karena kapasitas disini cocok untuk small reception dengan jumlah berkisar 500 orang.  Kelebihan Venue:  Tempat bagus, elegant, klasik, mewah, dengan arsitektur menawan di tiap sudut ruangannya, dilengkapi sofa-sofa yang nyaman di beberapa sudut ruangannya. Karena tempat sudah tertata indah, tidak diperlukan dekorasi yang berlebihan, hal ini akan menghemat biaya dekorasi Paket wedding mulai Rp. 29 juta untuk 300 pax, untuk lebih jelasnya bisa dilihat di sini. Banyak pilihan vendor katering yang bagus-bagus Kekurangan Venue:  Tempat parkir terbatas (namun disediakan shuttle bus dan vallet parking) Tempatnya kecil, jadi seringkali tamu terlewat, sebaiknya sediakan tim khusus untuk menjadi petunjuk jalan/ GPS bila diperlukan, agar tamu tidak tersasar, apalagi bila tamu undangan kebanyakan adalah para sepuh (s', 350000000, 'Gold', 'gold.jpg'),
('K1', 'PAKET A', 'Nasi Putih Nasi Goreng (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 1500000, 'Catering', '99519b62347374b8bfeff3b32329f2261.jpg'),
('K2', 'PAKET B', 'Foods : Nasi Putih Nasi Goreng  Aneka Sup  Aneka Tumisan  Aneka Olahan Ayam  Aneka Olahan Daging Kerupuk  Beverages : Infused Water Aneka Es  Desserts : Puding / Buah Potong', 2000000, 'Catering', '11008516_954142861301856_157890887606200306_n-500x5001.png'),
('K3', 'PAKET C', 'Nasi Putih Nasi Goreng (Pilihan) Daging (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Menu Pendamping 1 (Pilihan) Menu Pendamping 2 (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 2500000, 'Catering', 'abc-catering-katering-pernikahan--3efb8b9d-65c9-4aaa-af9e-7d006d5f5c531.jpg'),
('K4', 'PAKET D', 'Nasi Putih Nasi Goreng (Pilihan) Daging (Pilihan) Ayam (Pilihan) Ikan / Sambal Goreng (Pilihan) Soup (Pilihan) Sayuran (Pilihan) Krupuk Udang / Emping (Pilihan) Aneka Buah Segar Aneka Snack Aneka Puding Variasi Aneka Soft Drink Air Mineral', 3000000, 'Catering', 'malaysia_wedding_caterers_zuki_catering_malay_wedding_nadia_aizad61.jpg'),
('K5', 'PAKET E', 'Aneka Soup  Aneka Tumisan Sambal Goreng Ati  Aneka Olahan Mie Special  Aneka Olahan Ikan Special  Aneka Olahan Ayam Special  Aneka Olahan Daging Special Nasi Goreng Seafood Special Nasi Putih Kerupuk Udang  Beverages :  Aneka Es Buah Aneka Soft Drink Air Mineral   Desserts : Buah Potong Puding Potong Salad Buah & Sayur Es Puter', 3500000, 'Catering', 'catering1.jpg'),
('K6', 'PAKET F', 'Foods : Aneka Soup  Aneka Tumisan  Aneka Olahan Mie  Aneka Olahan Ayam  Aneka Olahan Daging  Aneka Olahan Ikan  Aneka Olahan Seafood  Nasi Olahan Special Nasi Putih Kerupuk Udang  Beverages : Aneka Es Buah Soft Drink Juice Lemonade Water  Desserts : Buah Potong Puding Potong Salad Buah', 4000000, 'Catering', 'luxury-wedding-catering-services-500x5002.jpg'),
('M1', 'Rudy Hartono', 'Alamat: JL. Ranau 2, No. 12 A, RT.07/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatan, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 6500135', 1000000, 'MC', 'ruben1.jpg'),
('M2', 'Billy William', 'Alamat: JL. Sunter Jaya 8, No. 12 A, RT.12/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021)000999888', 2000000, 'MC', 'allan1.png'),
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
('PL1', 'Hotel Intercontinental Jakarta Mildplaza', 'JI. Jend. Sudirman Kay 10-11, Jakarta     Tel: (021) 2510888  Fax: (021) 2511777  www.intercontinental.com', 550000000, 'Platinum', '1640bd3f4960c3890547722ca86496c4--pernikahan-jakarta2.jpg'),
('PL2', 'Coconut Card', 'Ukuran: 25 cm x 14,5cm Tipe: Hardcover Variasi: Hiasan kain vintage + full bunga khas chic vintage', 550000, 'Platinum', 'godeliva-undangan-pernikahan--6b7d437a-fc7e-45ea-a52a-94cb167e8170.jpg'),
('PL3', 'Elegan White', 'Warna putih mempunyai arti damai dan suci. Seperti tujuan pernikahan yang ingin mencapai kedamaian dan kebahagian dalam ikatan suci.  Dalam bentuk konotasi warna, warna putih bisa menjadi pilihan konsep acara yang patut di pertimbangkan.  Dimulai dari karpet putih yang membentang dari pintu masuk menuju ke pelaminan, terlihat panggung pelaminan  mulai dari sofa, background pelaminan dengan dominasi warna putih. Diiringi tiap detail ruangan dengan perpaduan warna senada menciptakan kesan anggun dan berkelas. Ditambah hiasan dedaunan berwarna hijau dan aroma harum bunga-bunga segar, menjadi doa tersirat agar setelah pernikahan  nantinya akan hidup dalam kesuburan dan kemakmuran. Dengan desain pelaminan minimalis tanpa terlalu banyak ornamen dan dengan desain warna soft yang disusun dengan cermat, memberikan kesan elegan. Adanya hiasan pepohonan dengan daun-daun putih di sisi kanan dan kiri pelaminan, dipadu dengan pencahayaan yang sesuai, akan memancarkan  suasana lebih  indah. Di iringi dengan musik pernikahan yang romantis,tempat duduk dengan warna putih dan vas bunga elegan diatasnya para tamu undangan seakan diajak untuk menjadi saksi akan hadirnya sebuah rumah tangga baru yang dibalut dengan kedamaian.', 8000000, 'Platinum', '0322e037237020d6bd5f5bf3e22a1943--wedding-stuff-dream-wedding.jpg'),
('PL4', 'Rudy Lim', 'Alamat: JL. Melati 2, No. 12 A, RT.08/RW.2, Sunter Jaya, Tj. Priok, Kota Jkt Selatan, Daerah Khusus Ibukota Jakarta 14360 Telepon: (021) 6500187', 3000000, 'Platinum', 'andi1.png'),
('PL5', 'Wufy Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0815612342', 5000000, 'Platinum', 'images.jpg'),
('PL6', 'Daniel Photography', 'Memiliki tone coklat lembut adalah ciri khas dari setiap karyanya, tak ayal jika melihat akun instagramnya para pengunjung langsung jatuh cinta pada tone yang di hasilkan dari daniel ini. Website : www.danielphoto.com Office : Jl. Kemang V No.6B , Jakarta Selatan Phone : 021-7197417 Email : danielphoto@gmail.com Instagram : @danielphoto Facebook : daniel Photo Twitter : @danielphotolemotion', 6500000, 'Platinum', '7667_1.jpg'),
('PL7', 'Paket Catering Platinum', 'Foods : Aneka Soup  Aneka Tumisan  Aneka Olahan Mie  Aneka Olahan Ayam  Aneka Olahan Daging  Aneka Olahan Ikan  Aneka Olahan Seafood  Nasi Olahan Special Nasi Putih Kerupuk Udang  Beverages : Aneka Es Buah Soft Drink Juice Lemonade Water  Desserts : Buah Potong Puding Potong Salad Buah', 7000000, 'Platinum', 'wed1.png'),
('S1', 'Steven Guitar', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 1200000, 'Support', 'file_(1)2.jpg'),
('S2', 'Rany Ambarwati', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 08567823112', 1500000, 'Support', 'file1.jpg'),
('S3', 'Pelangi Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0812-1393-7331', 2000000, 'Support', 'file_n4pehq.png'),
('S4', 'Stairways Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 0812-1393-7331', 1200000, 'Support', '98117adc6906afc8ce11de7bbeabbcb5--stairways-music1.jpg'),
('S5', 'VME Entertaiment', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano ,biola yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 3000000, 'Support', 'file_ohh7mo1.png'),
('S6', 'Astera Music', 'Kami mempunyai beberapa pilihan konsep band akustik, chambers, full band, solo piano yang dapat disesuaikan dengan acara wedding dan event. Musisi, talent yang profesional dan didukung oleh peralatan yang baik. Call / WA : 081567823', 3500000, 'Support', 'astera-entertainment-management_kevin-and-lianna-wedding-reception-at-raffles-hotel-jakarta_42.jpg'),
('U1', 'Rose Gold', 'Jika kamu suka desain yang mewah dan sesuai dengan tema pernikahanmu maka tema ini sangat cocok. Dihiasi dengan motof bunga mawar dan dipadukan dengan warna emas undangan ini terkesan glamor dan mewah.', 600000, 'Undangan', 'cb14c380bed9b78b54b6a8ede91eee3d--silver-wedding-invitations-wedding-cards2.jpg'),
('U2', 'Elegan White', 'Sekilas kartu undangan ini terlihat seperti sampul buku, ya. Cocok nih buat kamu yang suka desain klasik dan elegan. Kalau undanganmu berukuran kecil, kamu bisa tambahkan amplop cantik, tapi kalau sudah cukup besar, amplop bisa ditiadakan~', 250000, 'Undangan', '51f7TSE46ZL__US500_1.jpg'),
('U3', 'Paper Invitation', 'Kartu undangan dengan minim corak dengan dominasi warna putih seperti ini simpel banget, nggak butuh banyak kertas juga jadi pastinya irit! Biar cakep, kamu bisa tambahkan aksen tali cokelat seperti ini', 135000, 'Undangan', 'b58057bb86fd387acb710649187d91de--wedding-invitations-online-wedding-invitation-kits1.jpg'),
('U4', 'Leaf Invitation', 'Ingin sesuatu yang terlihat lebih klasik dan feminin dari undanganmu? Bisa tambahan ornamen dedaunan seperti ini, lho. Dijamin undanganmu tetap terlihat cantik meski super simpel', 120000, 'Undangan', 'bohemian-wedding-invitations-with-uses-cheap-materials-for-cool-wedding-invitation-design-2341.jpg'),
('U5', 'Floral Invitation', 'Undangan bermotif floral seperti ini wajib kamu coba kalau kamu suka sesuatu yang feminin dan rustic. Meski terkesan mahal, sebenarnya undangan semacam ini bisa kamu unduh secara gratis lho di banyak situs-situs desain!', 150000, 'Undangan', 'design-wedding-invitations-online-green-and-white-combined-design-with-ribbon-and-small-envelope-with-pattern-design-floral2.jpg'),
('U6', 'Pastel Pink', 'Suka desain yang lebih kalem? Maka undangan dengan corak goresan cat air seperti ini bisa jadi pilihan. Ongkosnya bisa kamu pangkas di amplop, jadi tinggal bikin kartu undangan yang apik terus masukan plastik undangan deh', 200000, 'Undangan', 'shine-wedding-invitations-with-elegant-ornaments-of-beautiful-Wedding-Invitation-Cards-invitation-card-design-81.jpg'),
('U7', 'Love Pattern', 'Satu atau dua lembar kartu undangan dengan pilihan kertas harga paling ekonomis pasti nggak akan bikin kartu undanganmu jadi mahal. Biar lebih manis, bisa kamu tambahkan amplop warna favorit, warna merah muda seperti ini misalnya', 150000, 'Undangan', 'wedding-invitation-card-500x5002.jpg'),
('U8', 'Purple Black', 'Warna-warna deep seperti ini juga bisa kamu coba kalau kamu suka sesuatu yang minimalis tapi elegan. Meski terlihat mahal, desain seperti ini kelihatan mahal, sebenarnya bisa disesuaikan dengan bujet yang kamu punya', 250000, 'Undangan', 'purple-wedding-invitation-kits-as-best-style-to-make-amazing-wedding-invitations-design1.jpg'),
('U9', 'Rustic', 'Undangan kertas cokelat seperti ini bisa jadi pilihan kalau kamu butuh undangan ekonomis tapi bergaya ala vintage. Untuk memangkas harga, kartu undangan bisa langsung kamu masukkan plastik undangan saja tanpa tambahan amplop', 200000, 'Undangan', 'Rustic-Wedding-Invitations-which-can-be-used-to-make-your-own-Wedding-invitation-design-22.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
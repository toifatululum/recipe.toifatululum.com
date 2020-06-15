-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2020 at 03:20 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tag` int(50) NOT NULL,
  `author` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `createdAt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `content`, `cover`, `image`, `tag`, `author`, `title`, `price`, `description`, `createdAt`) VALUES
(37, '<p><strong>WAKTU MEMASAK</strong></p><ul><li>Persiapan: 20menit</li><li>Memasak: 80 menit&nbsp;</li><li>Total: 100menit</li></ul><p><strong>JUMLAH PORSI</strong></p><ul><li>4 Porsi</li></ul><p><strong>BAHAN - BAHAN</strong></p><p><strong>BAHAN MEMBUAT TOTILLA</strong></p><ul><li>40 ml minyak sayur</li><li>1/2 sendok teh garam</li><li>200 gram tepung terigu serba guna</li><li>125 ml air hangat</li><li>1/2 sendok teh baking powder</li></ul><p><strong>BAHAN ISIAN BURRTO</strong></p><ul><li>Daging sapi cincang 550 gram</li><li>Bawang putih 1 siung</li><li>Minyak zaitun 1 sendok teh</li><li>Bawang merah 2 buah</li><li>Air 1/2 gelas</li><li>Saus taco secukupnya</li><li>Tomat</li><li>Keju parut</li><li>Selada</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><p><strong>CARA MEMBUAT TOTTILA</strong></p><p>&nbsp;</p><ol><li>Pertama &ndash; Pertama kita akan buat terlebih dahulu tortilla wrap, yakni bagian kulit burrito yang akan digunakna untuk melapisi atau menutupi isian dari burrito yang akan kita buat.</li><li>Cara yang pertama yang bisa dilakukan untuk membuat kulit tortilla adalah dengan menyiapkan terlebih dahulu wadah atau baskom dengan ukurna yang cukup besar agar ketika anda mencampur bahan-bahan kulit burrito, anda akan dapat menguleninya dengan leluasa.</li><li>Setelah wadah dipersiapkan, selanjutnya, silahkan masukkan semua adonan menjadi satu bagian. Namun sebelumnya, jangan dulu menuangkan air, aduk kesemua bahan yang kering agar tercampur secara merata.</li><li>Setelah itu, baru tuangkan air hangat perlahan-lahan dan uleni adonan kulit tortilla ini dengan tangan. Pastikan jika anda menguleni bahan ini hingga menjadi kalis dan terlihat elastis sehingga ketika ditarik dengan tangan teksturnya elastis dan tidak mudah sobek.</li><li>Kemudian, bagi adonan menjadi 8 bagian bulatan dan bulat-bulat dengan rapih.</li><li>Lalu, siapkan adonan dalam wadah dan ambil penggiling kayu dan pipihkan adonan burrito hingga pipih dan tipis, agar adonan tidak lengket sewaktu ditipiskan, pastikan jika anda terlebih dahulu menaburi tepung pada bagian penggiling kayu dan tatakan yang anda gunakan untuk menyimpan adonan burrito.</li><li>Setelah selesai dengan adonan yang pertama, pastikan anda melakukan hal yang sama pada sisa adonan hingga habis dan ukurannya tipis merata.</li><li>Siapkan wajan anti lengket, berikan sedikit mentega dan panggang adonan burrito diatasnya hingga adonan menjadi matang dan berwarna kecoklatan, jangan lupa untuk dibulak-balik agar adonan matang secara merata, setelah itu, angkat tortilla yang sudah dipanggang dan sisihkan sementara.</li></ol><p><strong>CARA MEMBUAT ISIAN BURRITO</strong></p><ol><li>Pertama, bisa dilakukan dengan memanaskan minyak zaitun diatas wajan dan masukkan daging sapi cincang kedalamnya, lalu tumis daging hingga berubah warna menjadi kecoklatan dan matang.</li><li>Setelah daging berubah warna, masukkan bawang merah dan bawang putih kedalamnya dan aduk-aduk hingga tercium bau harum yang sedap dan nikmat.</li><li>Setelah itu, campurkan tumisan daging bersama dengan tomat dan selaga, lalu tuangkan saus tacos bersama dengan sedikit air, aduk-aduk merata dan mauskkan dalam sebuah wadah, kini isian burrito sudah matang dan siap untuk kita tata dengan tortilla yang sudah kita buat.</li></ol><p><strong>CARA MEMBUAT BURRITO</strong></p><ol><li>Setelah isian burrito dan kulit tortilla matang, kini kita akan siap untuk merangkainya, caranya letakan kulit tortilla dibagian bawah.</li><li>Masukkan isian kedalamnya dan berikan taburan keju parut dibagian atasnya, lalu tuangkan sedikit saus tacos.</li><li>Gulung dan bungkus dengan rapih.</li></ol><p>&nbsp;</p><p>&nbsp;</p>', '129802245burrito.jpg', '354017265burrito.jpg', 19, 42, 'Burrito', 35500, 'Burrito makanan tradisional khas Amerika', '2020-05-08 22:09:12'),
(38, '<p><strong>WAKTU MEMASAK</strong></p><ul><li>60 menit</li></ul><p><strong>JUMLAH PORSI</strong></p><ul><li>1 porsi</li></ul><p><strong>BAHAN - BAHAN</strong></p><p><strong>BAHAN ROTI</strong></p><ul><li>1 kg tepung terigu protein berkualitas</li><li>500 ml air</li><li>10 gr ragi instant</li><li>15 gr gula</li><li>30 gr garam</li><li>100 ml minyak goreng</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><p><strong>CARA MEMBUAT ROTI PIZZA</strong></p><ol><li>Terigu, gula pasir dan garam aduk rata. Masukkan air dan minyak, aduk rata and terakhir masukkan fermipam atau ragi instant. Uleni dengan tangan kurang lebiih 10 hingga 20 menit atau sampai adonan bisa mengembang kembali bila ditekan dengan jari dan permukaan adonan kelihatan halus. Pindahkan adonan ke dalam mangkok yang sudah diolesi minyak, tutup dengan clingwrap atau kain serbet bersih sampai ukurannya mengembang dua kali lipat</li><li>Setelah mengembang dua kali lipat, perlahan-lahan tekan adonannya supaya udaranya keluar. Bulatkan adonan seperti bola dan tutup kembali dengan clingwrap atau kain serbet. Diamkan selama 1 jam.</li><li>&nbsp;Setelah 1 jam, bagi adonan menjadi 3 bagian dan bulatkan. Keluarkan adonan satu persatu and giling adonan tersebut menjadi pizza base dengan ketinggian sesuai selera.</li></ol><p><strong>CARA MEMBUAT TOPPING</strong></p><ol><li>. Untuk isi, taruh bahan-bahan di bawah ini secara berurutan supaya isi pizza melekat dan tidak hancur. Tidak perlu disisakan jarak sedikit di ujungnya untuk mebuat pizza crust karena ujungnya akan mengembang dengan sendirinya.<br />2. Taburi dengan Light Mozarella cheese atau Mozarella cheese sampai dasar pizza tertutup namun jangan sampai terlalu tebal.<br /><br />3. Sayur-sayuran seperti irisan bawang bombai, capsicum, jagung manis, tomat, cabe, etc. Isi pizza tidak harus seperti yang dijual di toko. Isinya sesuai selera<br /><br />4. Daging. Anda bisa menaruh potongan daging sapi, ayam ataupun sosis<br /><br />5. Saus. Boleh saus tomat, barbeque sauce, chilli sauce.<br /><br />6. Tabur sedikit garam dan lada hitam di atas bahan-bahan yang sudah diisi untuk menambah rasa.<br /><br />7. Tabur lagi Mozarella cheese di atas bahan-bahan tersebut sampai tertutup rata. Tapi jangan terlalu tebal.<br /><br />8. Panggang di dalam oven yang sudah dipanaskan dengan suhu 220C. Kalau bisa, lebih bagus pakai pizza stone (panggangan pizza yang terbuat dari batu atau terracota). Tapi kalau tidak ada, loyang aluminium juga boleh. Yang penting panasnya bisa merata ke semua bagian pizza ini. Panggang selama 10-18 menit (sesuai ketebalan pizza base). Setelah matang langsung dipotong menjadi delapan bagian dan hidangkan panas-panas.</li></ol>', '478123671pizza.jpeg', '857303362pizza.jpeg', 20, 42, 'Italian Pizza', 45000, 'Resep asli premium pizza khas Italia', '2020-05-08 22:19:02'),
(39, '<p><strong>WAKTU MEMASAK</strong></p><p>60 menit</p><p><strong>JUMLAH PORSI</strong></p><p><strong>3 porsi</strong></p><p><strong>BAHAN - BAHAN</strong></p><p><strong>BAHAN KULIT LASAGNA</strong></p><ul><li>Kulit Lasagna</li><li>Keju</li></ul><p><strong>BAHAN SAUS TOMAT</strong></p><ul><li>1,5 kg Daging sapi cincang</li><li>3 kaleng besar tomat yang dipotong dadu</li><li>250 ml Kaldu ayam</li><li>500 ml Air</li><li>Garam dan lada disesuaikan dengan selera</li><li>1 Bawang bombay, dipotong kotak</li><li>2 Batang seledri, potong dadu</li><li>2 Buah wortel besar yang dipotong dadu</li><li>170 gr Pasta tomat (kalengan)</li><li>5 lembar Daun basil</li><li>Daun parsley secukupnya</li></ul><p><strong>BAHAN SAUS BECHAMEL</strong></p><ul><li>200 ml Susu cair</li><li>2-3 sdm Keju parmesan</li><li>2 sdm Mentega</li><li>2 sdm Tepung terigu</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><p><strong>CARA MEMBUAT SAUS TOMAT</strong></p><ol><li>Masukan dan tumis bawang bombay, batang seledri dan wortel hingga berair/berkeringat ke dalam panci dengan api kecil. Tumis dengan waktu 5-7 menit. Jaga agar masakan anda tidak sampai gosong.</li><li>Besarkan api, dan masukan daging cincang, pasta tomat, tomat yang telah dipotong dadu, kaldu ayam, air dan daun basil. Masak selama 30-40 menit, hingga mendidih dan adonan terlihat mengental. Jangan lupa untuk mengaduk adonan setiap 10 menit.</li><li>Tambahkan irisan daun parsley sesuai selera, menjelang akhir.</li><li>Tambahkan garam dan lada. Sesuaikan dengan selera anda masing-masing</li><li>Jika rasa asam dari tomat pada adonan sudah stabil masukan sedikit garam dalam adonan</li></ol><p><strong>CARA MEMBUAT SAUS BECAMEL LASAGNA</strong></p><ol><li>Lelehkan mentega yang sudah anda siapkan kemudian masukkan tepung terigu. Aduk rata.</li><li>Campurkan susu cair secara perlahan dan bertahap ke dalam adonan</li><li>Perhatikan adonan, jika terlalu kental maka cobalah tambahkan susu cair secukupnya, namun jika sebaliknya maka tambahkan tepung terigu secukupnya. Jika adonan dirasa sudah konsisten kemudian masukkan 2-3 sdm keju parmesan lalu aduk rata.</li></ol><p><strong>CARA MEMASAK LASAGNA</strong></p><ol><li>Rebus kulit lasagna selama kurang lebih 3 menit. Perhatian untuk tidak menumpuk lebaran kulit pasta tersebut terlalu banyak karena dikahwatirkan akan menempel dan sulit dipisahkan. Angkat dan tiriskan.</li><li>Ambil loyang kemudian masukan dan lumuri lapisan paling bawah dengan saus tomat lasagna yang telah dibuat. Setelah itu tutupi dengan kulit lasagna, kemudian lapisi kembali dengan saus tomat lasagna dan saus bechamel yang sebelumnya telah dipersiapkan. Lakukan langkah tersebut hingga layer-layer selanjutnya. (minimun dibuat dengan 4 layer)</li><li>Setelah selesai menata layernya kemudian tutup rapat loyang dengan alumunium foil dan panggang di panas 180 derajat selama 20 menit.</li><li>Angkat dan sajikan<strong>.</strong></li></ol>', '1287065794pexels-photo-2765875.jpeg', '869734898pexels-photo-2765875.jpeg', 20, 42, 'Lasagna', 32000, 'Rahasia lasagna enak by Chef Jenny', '2020-05-08 22:27:36'),
(40, '<p><strong>WAKTU MEMASAK</strong></p><p>65 menit</p><p><strong>JUMLAH PORSI</strong></p><p>&nbsp;1 porsi</p><p><strong>BAHAN - BAHAN</strong></p><p><strong>BAHAN SATE</strong></p><ul><li>400 gram fillet ikan tenggiri giling</li><li>100 gram ayam giling</li><li>25 gram tepung kanji/tapioka</li><li>50 gram tepung terigu serbaguna</li><li>1 kuning telur ayam</li><li>minyak goreng secukupnya, untuk menumis</li><li>8 batang serai ukuran 15 cm</li></ul><p><strong>BUMBU HALUS</strong></p><ul><li>1 ruas jari kunyit</li><li>1 ruas jari jahe</li><li>1 ruas jari kencur</li><li>1 ruas jari lengkuas</li><li>4 siung bawang putih</li><li>6 butir bawang merah</li><li>4 buah cabai merah</li><li>garam secukupnya</li><li>gula merah secukupnya</li></ul><p>&nbsp;</p><p><strong>LANGKAH - LANGKAH</strong></p><ol><li>Haluskan kunyit, jahe, bawang putih, bawang merah, kencur, cabai, lengkuas, garam, dan gula merah. Setelah itu panaskan sedikit minyak di penggorengan dan tumis bumbu hingga harum dan berubah warna.</li><li>Campur ikan tenggiri dan ayam giling, tambahkan tepung kanji, tepung terigu, kuning telur, dan terakhir masukkan tumisan bumbu.</li><li>Bentuk sate dan lilitkan ke batang serai. Panggang dengan api kecil sampai seluruh bagian sate matang sempurna.</li></ol>', '500932286sate.jpeg', '1749507511sate.jpeg', 24, 42, 'Sate Lilit Bali', 43000, 'Sate ikan tenggiri dengan rempah khas Bali', '2020-05-08 22:38:23'),
(41, '<p><strong>WAKTU MEMASAK</strong></p><p>35 menit</p><p><strong>JUMLAH PORSI</strong></p><p>1 porsi</p><p><strong>BAHAN</strong></p><ul><li>1 pack bumbu Laksa 600 ml</li><li>Kaldu ayam secukupnya</li><li>250 ml santan kental</li><li>2 udang (ukuran 21-25), kupas dan bersihkan punggungnya</li><li>2 bakso udang</li><li>70 gram bihun ukuran besar direndam air mendidih</li><li>2 tahu yang digoreng dan iris tipis</li><li>50 gram taoge yang dicelup air panas</li><li>1 butir telur rebus, potong menjadi setengah</li><li>2 pucuk daun kemangi</li><li>1 sendok makan bawang goreng</li><li>1 jeruk nipis</li><li>Garam dan merica bubuk putih secukupnya</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><ol><li>Beri sedikit garam dan merica bubuk putih pada udang.</li><li>Aduk rata bumbu laksa dengan kaldu ayam. Panaskan hingga mendidih dengan api kecil.</li><li>Masukkan udang dan bakso, biarkan hingga kembali mendidih. Kecilkan api dan masukkan santan kental, aduk rata dan masak udang hingga matang dengan kekentalan yang dikehendaki.</li><li>Untuk penyajian, tuang laksa secara berurutan dalam mangkuk, yakni bihun, taoge, telur, tahu, bakso udang, udang, dan daun kemangi,. Tuang kaldu perlahan-lahan, lalu taburkan bawang goreng.<br />&nbsp;</li></ol>', '1935653746sop.jpeg', '1914061886sop.jpeg', 24, 44, 'Laksa Udang', 50000, 'Laksa udang bumbu rempah ala Chef Junna', '2020-05-08 23:01:11'),
(42, '<p><strong>WAKTU MEMASAK:</strong></p><p>15 menit</p><p><strong>PORSI</strong></p><p>1</p><p><strong>BAHAN</strong></p><ul><li>1 sachet kopi bubuk&nbsp;</li><li>80 ml susu sapi segar ( bukan bubuk )</li><li>1 gr coklat bubuk/ kayu manis ( sebagai garnish )</li><li>1 1/2 sendok makan gula pasir</li><li>50 ml whipping cream</li><li>1 buah gelas cangkir</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><ol><li>&nbsp;Siapkan panci yang akan di gunakan untuk memanaskan susu,</li><li>Siapkan gelas cangkir</li><li>Tuangkan susu sapi ke dalam panci untuk di panaskan sampai mendidih kurang lebih sekitar 5 menit, lalu masukkan kopi bubuk dan gula pasir ke dalam gelas cangkir.</li><li>Tuangkan susu panas ke dalam cangkir yang sudah terisi kopi dan gula lalu aduk hingga rata.</li><li>Setelah itu tuangkan whipping cream ke atas campuran kopi dan susu sebagai foammy&nbsp;</li><li>&nbsp;Cappucino ala cafe siap di sajikan namun terlebih dahulu taburi whiping cream dengan coklat bubuk/</li></ol>', '1487438571coffe.jpg', '601713362coffe.jpg', 18, 44, 'Cappucinno Latte', 50000, 'Hot Cappucino latte resep rumahan anti gagal ', '2020-05-09 01:07:48'),
(43, '<p><strong>WAKTU MEMASAK&nbsp;</strong></p><p>30 menit</p><p><strong>JUMLAH PORSI</strong></p><p>1 porsi</p><p><strong>BAHAN</strong></p><ul><li>1/2 kg sayap ayam</li><li>1 buah jeruk nipis</li><li>Secukupnya garam dan lada bubuk</li><li>3 sdm tepung terigu</li><li>2 sdm tepung maizena</li><li>1 sdm tepung beras</li></ul><p><strong>BUMBU HALUS</strong></p><ul><li>2 siung bawang merah</li><li>2 siung bawang putih</li><li>5 buah cabe merah keriting</li></ul><p><strong>BUMBU TAMBAHAN</strong></p><ul><li>1/2 siung bawang bombay, iris</li><li>3 sdm saos sambal</li><li>2 sdm saos tomat</li><li>2 sdm saos tiram</li><li>1 sdm kecap asin</li><li>1 sdm minyak wijen</li><li>100 ml air</li><li>1 sdm air perasan jeruk lemon</li><li>Secukupnya garam dan gula</li><li>2 sdm minyak untuk menumis</li></ul><p><strong>BAHAN TOPPING</strong></p><ul><li>1 sdm wijen putih sangrai</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><ul><li>Siapkan semua bahan. Potong sayap ayam, pisahkan bagian pentung dan bagian yang melengkung, cuci bersih, lumuri air jeruk nipis. Bilas. Beri garam dan lada, simpan di wadah tertutup dalam kulkas minimal 30 menit.</li><li>Sementara marinasi, haluskan bumbu. Panaskan minyak, tumis bawang bombay sampai harum, masukkan bumbu halus dan semua bumbu tambahan lain. Koreksi rasa. Masak sampai meletup, angkat sisihkan.</li><li>Siapkan campuran tepung-tepung. Keluarkan sayap ayam dari kulkas, gulingkan dalam tepung, tekan-tekan dan cubit, lalu goreng dalam minyak panas.</li><li>Balur sayap ayam goreng dengan saosnya. Beri taburan w<strong>ijen</strong></li></ul>', '1852528121ayam.jpg', '45133383ayam.jpg', 25, 44, 'Dakgangjeong', 50000, 'Best recipe Dakgangjeon korean food', '2020-05-09 01:22:00'),
(44, '<p><strong>WAKTU MEMASAK:</strong></p><ul><li>20 menit</li></ul><p><strong>JUMLAH</strong></p><ul><li>2 porsi</li></ul><p><strong>BAHAN</strong></p><ul><li>1 cup strawberry frozen</li><li>3 buah pisang frozen</li><li>2 sdm gula</li><li>1/4 gelas susu cair</li></ul><p><strong>TOPPING</strong></p><ul><li>3 buah irisan strawberry</li><li>2 buah pisang, iris</li><li>Secukupnya chia seed</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><ol><li>Bekukan strawberry dan pisang. Blender dengan sedikit susu cair dan gula.</li><li>Pindahkan ke bowl. Tambahkan topping strawberry dan pisang iris. Taburi dengan chia seeD</li></ol><p>&nbsp;</p>', '1197941353smooties.jpg', '788565030smooties.jpg', 18, 45, 'Smoothies Strowberry', 49000, 'Strawberry smoothies bowl with banana ', '2020-05-09 01:29:34'),
(45, '<p><strong>WAKTU MEMASAK</strong></p><p>30 menit</p><p><strong>JUMLAH</strong></p><p>1 porsi</p><p><strong>BAHAN</strong></p><ul><li>300 gr daging ayam tanpa kulit, cincang kecil atau blender halus</li><li>2 siung bawang putih, haluskan</li><li>2 batang daun seledri, cincang kecil</li><li>1 batang wortel, cincang kecil</li><li>1 buah bawang bombay, cincang kecil</li><li>1 cm jahe, haluskan</li><li>1 sdm saus tiram</li><li>1 sdm kecap asin</li><li>1/2 sdt merica bubuk</li><li>penyedap rasa secukupnya (optional)</li><li>air secukupnya</li><li>kulit wonton atau pangsit secukupnya</li></ul><p><strong>LANGKAH - LANGKAH</strong></p><ol><li>Campur rata daging ayam yang sudah halus dengan semua sayuran dan bumbu.</li><li>Ambil kulit wonton atau pangsit dan isi dengan adonan ayam. Rekatkan pinggirannya dengan air.&nbsp;</li><li>Kukus semua pangsit kurang lebih 30 menit. Setelah itu bisa direbus sebentar agar kulitnya tidak terlalu kering.</li></ol>', '390188211DUMPLING.jpg', '1241073373DUMPLING.jpg', 26, 45, 'Dumpling', 46000, 'Makanan tradisional khas dari Tiongkok', '2020-05-09 01:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tagName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tagName`) VALUES
(18, 'Drink'),
(19, 'Amerikan'),
(20, 'Italian'),
(21, 'Japannese'),
(24, 'Indonesian'),
(25, 'Korean'),
(26, 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `recipe` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `norek` varchar(20) NOT NULL,
  `nameRek` varchar(50) NOT NULL,
  `proof` varchar(1000) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `recipe`, `user`, `status`, `norek`, `nameRek`, `proof`, `date`) VALUES
(33, 38, 45, 2, '12345678910', 'Ananda Dahliar', '723762091Screenshot (1).png', '2020-05-09 01:38:31'),
(34, 41, 45, 0, '12345678910', 'Ananda Dahliar', '', '2020-05-09 01:39:32'),
(35, 37, 42, 2, '21346579018', 'Jenny Na', '1561709875Screenshot (11).png', '2020-05-09 01:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `name`) VALUES
(26, 'Toto Rubianto', 'toto.rubianto.17@gmail.com', 'ulum1701', 'USER', 'toto'),
(40, 'toifatululum', 'toifatululum222@gmail.com', 'ulum1701', 'ADMIN', 'Toifatul Ulum'),
(42, 'jenny', 'jenny@gmail.com', 'jenny', 'USER', 'Jenny Na'),
(43, 'dahliar', 'dahliar@gmail.com', 'dahliar', 'ADMIN', 'Dahliar Ananda'),
(44, 'juna', 'juna@gmail.com', 'juna', 'USER', 'Juna Rom'),
(45, 'ananda', 'ananda@gmail.com', 'ananda', 'USER', 'Ananda Dahliar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag` (`tag`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `recipe` (`recipe`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`recipe`) REFERENCES `recipe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

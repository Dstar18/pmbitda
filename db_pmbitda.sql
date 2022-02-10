-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2022 pada 13.55
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmbitda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `date_insert_berita` date NOT NULL,
  `date_update_berita` date NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `konten_berita` text NOT NULL,
  `status_berita` int(11) NOT NULL,
  `id_petugas_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `date_insert_berita`, `date_update_berita`, `judul_berita`, `konten_berita`, `status_berita`, `id_petugas_berita`) VALUES
(5, '2022-01-22', '2022-02-03', 'Program Non Reguler', '<div align=\"justify\" xss=removed><p xss=removed>Mahasiswa program non-reguler atau karyawan adalah mahasiswa yang ingin mengikuti pendidikan program sarjana secara paruh waktu di ITDA.</p><p xss=removed><span xss=removed><u xss=removed>Ketentuan :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Calon mahasiswa non reguler adalah calon pendaftar yang mempunyai Ijazah SMA.</li><li xss=removed>Prosedur pendaftaran calon mahasiswa diatur pada Pedoman Penerimaan Mahasiswa Baru ITDA.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Pendaftaran dan Seleksi :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Calon mahasiswa non reguler melakukan proses pendaftaran secara online.</li><li xss=removed>Calon mahasiswa non reguler dinyatakan lulus seleksi jika tim seleksi yang dibentuk oleh Program Studi menyatakan lulus seleksi.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Biaya Perkuliahan :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Calon Mahasiswa non reguler dikenai biaya perkuliahan mengikuti aturan Rektor yang berlaku.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Penutup :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Peraturan ini berlaku sejak disahkan oleh Rektor.</li><li xss=removed>Hal yang timbul sebagai akibat pelaksanaan ketentuan ini, akan diselesaikan secara musyawarah untuk mufakat dengan tetap memperhatikan ketentuan peraturan perundang-undangan.</li></ol><p xss=removed></p></div><p xss=removed><span xss=removed><u xss=removed>Alur Pendaftaran Mahasiswa Non Reguler adalah sebagai berikut:</u></span></p>', 2, 1),
(6, '2022-01-22', '2022-02-03', '                                                              Program Alih Perguruan Tinggi', '<div xss=removed><font color=\"#555555\" face=\"Open Sans, Arial, sans-serif\"><span xss=removed>Program Alih Perguruan Tinggi</span></font></div><p xss=\"removed\"><br></p><p xss=\"removed\">Mahasiswa alih perguruan tinggi adalah mahasiswa yang belum menyelesaikan studi di perguruan tinggi asal baik negeri atau swasta dan pindah ke Program Studi yang sama di ITDA</p><p xss=\"removed\">Ketentuan :</p><div align=\"justify\" xss=removed><ol type=\"1\" xss=removed><li xss=removed>Mahasiswa Program Sarjana dan Diploma dari perguruan tinggi negeri atau swasta dapat pindah ke ITDA dengan ketentuan dan syarat sebagai berikut :</li><ol type=\"a\" xss=removed><li xss=removed>Berasal dari jenjang dan program studi yang serumpun baik program sarjana atau diploma.</li><li xss=removed>Akreditasi Program studi Perguruan Tinggi Negeri asal B atau lebih tinggi.</li><li xss=removed>Calon mahasiswa tercatat di Pangkalan Data DIKTI.</li><li xss=removed>Terdaftar sebagai mahasiswa aktif dalam semester berjalan dari program studi asal.</li><li xss=removed>Masa studi calon mahasiswa diberlakukan selama 7 tahun untuk Program Sarjana dan 4 tahun untuk Program Diploma Tiga dengan mengakumulasikan masa studi dari perguruan tinggi asal.</li><li xss=removed>Memiliki surat keterangan pengunduran diri dari perguruan tinggi asal.</li></ol><li xss=removed>Mata kuliah yang sudah ditempuh dan dinyatakan lulus di Perguruan Tinggi asal dapat diakui sesuai dengan ketentuan yang berlaku dan sesuai dengan kurikulum Program Studi yang dituju.</li><li xss=removed>Memiliki transkrip nilai yang disahkan oleh Ketua Program Studi dan Ketua atau Rektor dari Perguruan Tinggi asal.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Pendaftaran dan Seleksi :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Calon mahasiswa alih perguruan tinggi melakukan proses pendaftaran secara online.</li><li xss=removed>Calon mahasiswa alih perguruan tinggi dinyatakan lulus seleksi jika tim seleksi yang dibentuk oleh Program Studi menyatakan lulus seleksi.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Biaya Perkuliahan :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Calon Mahasiswa alih perguruan tinggi dikenai biaya perkuliahan mengikuti aturan Rektor yang berlaku.</li></ol><p xss=removed></p><p xss=removed><span xss=removed><u xss=removed>Penutup :</u></span></p><p xss=removed></p><ol type=\"1\" xss=removed><li xss=removed>Peraturan ini berlaku sejak disahkan oleh Rektor.</li><li xss=removed>Hal yang timbul sebagai akibat pelaksanaan ketentuan ini, akan diselesaikan secara musyawarah untuk mufakat dengan tetap memperhatikan ketentuan peraturan perundang-undangan.</li></ol><p xss=removed></p></div><p xss=removed><span xss=removed><u xss=removed>Alur Pendaftaran Mahasiswa Alih Perguruan Tinggi adalah sebagai berikut:</u></span></p>', 1, 1),
(7, '2022-01-22', '2022-02-03', 'Program Reguler', '<div class=\"container content profile\" xss=\"removed\"><div class=\"row\" xss=\"removed\"><div class=\"col-md-12\" xss=\"removed\"><div class=\"row margin-bottom-20\" xss=\"removed\"><div class=\"profile-body \" xss=\"removed\"><div class=\"col-sm-12 alert\" xss=\"removed\"><div class=\"panel panel-profile no-bg\" xss=\"removed\"><div align=\"justify\" xss=\"removed\"><p xss=\"removed\"><br></p><div xss=\"removed\"><b>Jalur Reguler </b></div><div xss=\"removed\">Program Reguler Institut Teknologi Dirgantara adisutjipto Yogyakarta</div><p></p><p xss=\"removed\"><span xss=\"removed\">Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu baik kelas pagi, siang, sore, dan malam di Institut Teknologi Dirgantara Adisutjipto (ITDA) yang merupakan Warga Negara Indonesia atau Warga Negara Asing. Alur Pendaftaran Mahasiswa Reguler adalah sebagai berikut:</span><br></p></div><div id=\"scrollbar\" class=\"panel-body no-padding mCustomScrollbar\" data-mcs-theme=\"minimal-dark\" xss=\"removed\"><div class=\"profile-post color-one\" xss=\"removed\"><div class=\"profile-post color-one\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>01 ISI FORM PENDAFTARAN</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Silakan mengisi form pendaftaran sesuai data yang benar.</p></div></div><div class=\"profile-post color-two\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>02 </b></span><span xss=\"removed\"><b>CEK EMAIL</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Cek Inbox pada Email yang digunakan waktu mengisi form pendaftaran, terdapat ID Pendaftar, Password, Nomor Rekening dan Jumlah Pembayaran Pendaftaran.</p></div></div><div class=\"profile-post color-three\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>03 </b></span><span xss=\"removed\"><b>MELAKUKAN PEMBAYARAN</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Silahkan melunasi pembayaran pendaftaran melalui Teller Bank atau ATM, ke Nomor Virtual Account BNI</p></div></div><div class=\"profile-post color-four\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>04 </b></span><span xss=\"removed\"><b>LOGIN PORTAL PMB</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Silahkan kembali mengunjungi portal PMB di pmb.stta.ac.id kemudian pilih menu \"Login\", gunakan Username dan Password yang tertera di email untuk melakukan proses otetifikasi sistem.</p></div></div><div class=\"profile-post color-five\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>05 UPLOAD BERKAS</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Silakan melengkapi form selanjutnya dengan mengunggah berkas sesuai form yang telah disediakan</p></div></div><div class=\"profile-post color-six\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>06</b> <b>UBAH STATUS</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Cek semua tahapan proses, apabila sudah merasa lengkap silakan mengubah status agar data pendaftar segera di verifikasi oleh admin PMB.</p></div></div><div class=\"profile-post color-seven\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>07</b> </span><span xss=\"removed\"><b>TES CBT DAN WAWANCARA</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Untuk Jalur Reguler dilanjutkan dengan Tes CBT dan Tes Wawancara (Untuk Jalur Prestasi tahapan ini tidak dilakukan).</p></div></div><div class=\"profile-post color-one\" xss=\"removed\"><span class=\"profile-post-numb\" xss=\"removed\"><b>08 </b></span><span xss=\"removed\"><b>SELESAI</b></span><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\">Proses Pendaftaran Selesai. Silakan menunggu pengumuman dari hasil seleksi.</p></div></div></div></div></div></div></div></div></div></div></div><div class=\"footer-v1\" xss=\"removed\"><div class=\"footer\" xss=\"removed\"><div class=\"container\" xss=\"removed\"><div class=\"row\" xss=\"removed\"></div></div></div></div>', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_halaman`
--

CREATE TABLE `tb_halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(255) NOT NULL,
  `ketjudul_halaman` varchar(255) NOT NULL,
  `konten_halaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_halaman`
--

INSERT INTO `tb_halaman` (`id_halaman`, `judul_halaman`, `ketjudul_halaman`, `konten_halaman`) VALUES
(4, 'Persyaratan Pendaftaran ', 'Persyaratan S-1', '<table class=\"table table-bordered\" xss=\"removed\"><tbody><tr><td><p xss=\"removed\" xss=removed>Persyaratan Umum Jalur Prestasi</p><p xss=\"removed\" xss=removed>S-1</p></td><td xss=\"removed\"><p xss=removed>Persyaratan Umum Jalur Reguler</p><p xss=removed>S-1</p></td><td xss=\"removed\"><p xss=removed>Persyaratan Umum Jalur Bidik Misi </p><p xss=removed>S-1</p></td><td xss=\"removed\"><p xss=removed>Persyaratan Umum Jalur UTBK</p><p xss=removed>S-1</p></td><td xss=\"removed\"><p xss=removed>Persyaratan Khusus</p><p xss=removed>S-1</p></td><td xss=\"removed\" xss=removed>Persyaratan D-III</td></tr><tr><td>Scan Rapor kelas X-XI (Legalisir)</td><td><span xss=\"removed\">Fotocopy Ijazah dan Transkrip Nilai (Legalisir)</span><br></td><td><span xss=\"removed\">Form biodata pendaftaran di website bidikmisi.belmawa.ristekdikti.go.ig</span><br></td><td><span xss=\"removed\">Scan Nilai UTBK Tahun 2019</span><br></td><td><span xss=\"removed\">1. SMA Jurusan IPA atau SMK Teknik Untuk Program Studi S1 Teknik Penerbangan, Teknik Mesin dan Teknik Elektro.</span><br></td><td><span xss=\"removed\">1. Lulusan SMU/ MA dan sederajat jurusan IPA atau Lulusan SMK Jurusan Teknik.</span><br></td></tr><tr><td>Scan Sertifikat dan piagam prestasi, minimal tingkat kabupaten (Jika ada)<br></td><td><span xss=\"removed\">Fotocopy Sertifikat dan piagam prestasi, minimal tingkat kabupaten (Jika ada)</span><br></td><td><span xss=\"removed\">Foto Copy Ijazah dan Transkrip Nilai atau Rapor (Legalisir)</span><br></td><td><span xss=\"removed\">Scan Sertifikat dan piagam prestasi, minimal tingkat kabupaten (Jika ada)</span><br></td><td><span xss=\"removed\">2. Tidak buta warna untuk Program Studi Teknik Penerbangan dan Program Studi Teknik Elektro</span><br></td><td><span xss=\"removed\">2. Fotocopy legalisir Ijazah atau STK atau STTB (1 lembar)</span><br></td></tr><tr><td>Scan Kartu Identitas (KTP/Kartu Pelajar/SIM)<br></td><td><span xss=\"removed\">Fotocopy Kartu Identitas (KTP/Kartu Pelajar/SIM)</span><br></td><td><span xss=\"removed\">Fot Copy Sertifikat dan piagam prestasi, minimal tingkat kabupaten (Jika ada)</span><br></td><td><span xss=\"removed\">Scan Kartu Identitas (KTP/Kartu Pelajar/SIM)</span><br></td><td><span xss=\"removed\">3. Bagi anak kandung TNI AU, wajib menyerahkan Fotocopy Kartu Tanda Anggota (KTA) orang tua</span><br></td><td><span xss=\"removed\">3. Fotocopy Akte Kelahiran (1 Lembar)</span><br></td></tr><tr><td>Scan Kartu Keluarga<br></td><td><span xss=\"removed\">Fotocopy Kartu Keluarga</span><br></td><td><span xss=\"removed\">Kartu Identitas (KTP/Kartu Pelajar/SIM)</span><br></td><td><span xss=\"removed\">Scan Kartu Keluarga</span><br></td><td><span xss=\"removed\">4. Untuk anggota TNI AU, wajib menyerahkan Surat Keterangan Tugas dari Atasan.</span><br></td><td><span xss=\"removed\">4. Fotocopy KTP (1 Lembar)</span><br></td></tr><tr><td><br></td><td><span xss=\"removed\">Fotocopy Bukti Pembayaran Biaya Pendaftaran</span><br></td><td><span xss=\"removed\">Fotocopy Kartu Keluarga</span><br></td><td><br></td><td><br></td><td><span xss=\"removed\">5. Fotocopy Kartu Keluarga (1 Lembar)</span><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><span xss=\"removed\">6. Pas foto berwarna 3 x 4 (2 lembar)</span><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><span xss=\"removed\">7. Surat Keterangan RS: badan sehat, tidak bertato, tidak bertindik, tidak buta warna, bebas narkoba, tidak memiliki ketunaan</span><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><span xss=\"removed\">8. Fotocopy SKCK</span><br></td></tr></tbody></table><p><br></p>'),
(5, 'Jadwal Pendaftaran', 'Berikut Jadwal Pendaftaran masing-masing jalur dan gelombang Institut Teknologi Dirgantara Adisutjipto Yogyakarta Tahun Akademik 2022/2023', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td>#</td><td>Jalur Pendaftaran</td><td>Tangal Mulai</td><td>Tanggal Selesai</td><td>Status</td><td><br></td></tr><tr><td>1</td><td>Jalur Prestasi </td><td>01-November-2021</td><td><span xss=removed>31-Agustus-2022</span><br></td><td>aktif</td><td><br></td></tr><tr><td>2</td><td>Jalur Reguler</td><td>01-November-2021</td><td><span xss=removed>31-Agustus-2022</span><br></td><td>aktif</td><td><br></td></tr><tr><td>3</td><td>Jalur Alih Perguruan Tinggi </td><td>01-November-2021<br></td><td><span xss=removed>31-Agustus-2022</span><br></td><td>aktif<br></td><td><br></td></tr><tr><td>4</td><td>Jalur Non Reguler</td><td>01-November-2021<br></td><td><span xss=removed>31-Agustus-2022</span><br></td><td>aktif<br></td><td><br></td></tr><tr><td>5</td><td>Jalur Alih Jalur</td><td>01-November-2021<br></td><td><span xss=removed>31-Agustus-2022</span><br></td><td>aktif<br></td><td><br></td></tr></tbody></table><p><br></p>'),
(6, 'Prosedur Pendaftaran', 'Berikut merupakan prosedur pendaftaran di Institut Teknologi Dirgantara Adisutjipto Yogyakarta Tahun Akademik 2022/2023', '<div class=\"profile-post color-one\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">1 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">ISI FORM PENDAFTARAN</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Silakan mengisi form pendaftaran sesuai data yang benar.</font></p></div></div><div class=\"profile-post color-two\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">02 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">CEK EMAIL</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Cek Inbox pada Email yang digunakan waktu mengisi form pendaftaran, terdapat ID Pendaftar, Password, Nomor Rekening dan Jumlah Pembayaran Pendaftaran.</font></p></div></div><div class=\"profile-post color-three\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">03 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">MELAKUKAN PEMBAYARAN</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Silahkan melunasi pembayaran pendaftaran melalui Teller Bank atau ATM, ke Nomor Virtual Account BNI</font></p></div></div><div class=\"profile-post color-four\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">04 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">LOGIN PORTAL PMB</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Silahkan kembali mengunjungi portal PMB di pmb.stta.ac.id kemudian pilih menu \"Login\", gunakan Username dan Password yang tertera di email untuk melakukan proses otetifikasi sistem.</font></p></div></div><div class=\"profile-post color-five\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">05 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">UPLOAD BERKAS</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Silakan melengkapi form selanjutnya dengan mengunggah berkas sesuai form yang telah disediakan</font></p></div></div><div class=\"profile-post color-six\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">06 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">UBAH STATUS</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Cek semua tahapan proses, apabila sudah merasa lengkap silakan mengubah status agar data pendaftar segera di verifikasi oleh admin PMB.</font></p></div></div><div class=\"profile-post color-seven\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">07 </span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\">TES CBT DAN WAWANCARA</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Untuk Jalur Reguler dilanjutkan dengan Tes CBT dan Tes Wawancara (Untuk Jalur Prestasi tahapan ini tidak dilakukan).</font></p></div></div><div class=\"profile-post color-one\" xss=\"removed\"><font color=\"#000000\"><span class=\"profile-post-numb\" xss=\"removed\">08<span xss=removed> </span></span><a href=\"https://pmb.itda.ac.id/index.php?view=prosedur#\" xss=\"removed\"><font color=\"#000000\" xss=removed>SELESAI</font></a></font><div class=\"profile-post-in\" xss=\"removed\"><p xss=\"removed\"><font color=\"#000000\">Proses Pendaftaran Selesai. Silakan menunggu pengumuman dari hasil seleksi.</font></p></div></div>'),
(7, 'Biaya Pendidikan', 'Berikut merupakan daftar pembiayaan perkuliahan yang ada di Institut Teknologi Dirgantara Adisutjipto Yogyakarta Tahun Akademik 2022/2023', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td xss=removed><p>Pendaftaran</p></td><td><p>Kemahasiswaan</p><p><br></p></td><td>UKT Per Semester</td></tr><tr><td>S1 Teknik Dirgantara</td><td>Rp. 200.000,-<br></td><td>Rp. 3.000.000,-</td><td>Rp. 9.800.000,-</td></tr><tr><td>S1 Teknik Mesin<br></td><td>Rp. 200.000,-<br></td><td>Rp. 3.000.000,-<br></td><td>Rp. 7.500.000,-</td></tr><tr><td>S1 Teknik Informatika<br></td><td>Rp. 200.000,-<br></td><td>Rp. 3.000.000,-<br></td><td>Rp. 7.500.000,-<br></td></tr><tr><td>S1 Teknik Industri<br></td><td>Rp. 200.000,-<br></td><td>Rp. 3.000.000,-<br></td><td>Rp. 7.200.000,-<br></td></tr><tr><td>S1 Teknik Elektro<br></td><td>Rp. 200.000,-<br></td><td>Rp. 3.000.000,-<br></td><td>Rp. 6.900.000,-</td></tr><tr><td>D3 Aeronautika</td><td>Rp. 200.000,-<br></td><td>Rp. 8.500.000,-<br></td><td>Rp. 9.000.000,-</td></tr><tr><td></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><table class=\"table table-bordered\"><tbody xss=removed>Daftar Sekarang<br></tbody></table><p><br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_pengaturan` varchar(255) NOT NULL,
  `logo_pengaturan` varchar(255) NOT NULL,
  `ketweb_pengaturan` varchar(255) NOT NULL,
  `alamat_pengaturan` varchar(255) NOT NULL,
  `phone_pengaturan` bigint(20) NOT NULL,
  `fax_pengaturan` varchar(255) NOT NULL,
  `email_pengaturan` varchar(255) NOT NULL,
  `jamkerja1_pengaturan` varchar(255) NOT NULL,
  `jamkerja2_pengaturan` varchar(255) NOT NULL,
  `jamkerja3_pengaturan` varchar(255) NOT NULL,
  `ig_pengaturan` varchar(255) NOT NULL,
  `fb_pengaturan` varchar(255) NOT NULL,
  `tiktok_pengaturan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`id_pengaturan`, `nama_pengaturan`, `logo_pengaturan`, `ketweb_pengaturan`, `alamat_pengaturan`, `phone_pengaturan`, `fax_pengaturan`, `email_pengaturan`, `jamkerja1_pengaturan`, `jamkerja2_pengaturan`, `jamkerja3_pengaturan`, `ig_pengaturan`, `fb_pengaturan`, `tiktok_pengaturan`) VALUES
(1, 'PMB ITDA ', 'logo-220124-07dfb20af5.png', 'STTA Yogyakarta telah secara resmi membuka Pendaftaran Mahasiswa Baru (PMB) untuk Tahun Akademik 2022/2023.', 'Yogyakarta 3435gfgf', 8216660079744, '0088 itdagfg 3434', 'cindydea05@gmail.com', 'senin-selasa 08.00-12.00', 'rabu-kamis 13.00-15.00', 'jumaat 15.00 - 17.00', '@itda.yogyakarta', 'itda_yogyakarta', 'itda.yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(225) NOT NULL,
  `ketJudul_pengumuman` varchar(225) NOT NULL,
  `content_pengumuman` text NOT NULL,
  `cover_pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nip_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `email_petugas` varchar(255) NOT NULL,
  `nohp_petugas` int(11) NOT NULL,
  `username_petugas` varchar(255) NOT NULL,
  `password_petugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nip_petugas`, `nama_petugas`, `email_petugas`, `nohp_petugas`, `username_petugas`, `password_petugas`) VALUES
(1, 232134, 'cindy', 'cindy@email', 656556, 'admin', 'admin'),
(2, 12345898, 'Jesi2', 'fdjdj3@gkg', 67767, 'jesi', 'jesi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unggah`
--

CREATE TABLE `tb_unggah` (
  `id_unggah` int(11) NOT NULL,
  `nama_unggah` varchar(255) NOT NULL,
  `keterangan_unggah` varchar(255) NOT NULL,
  `file_unggah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_unggah`
--

INSERT INTO `tb_unggah` (`id_unggah`, `nama_unggah`, `keterangan_unggah`, `file_unggah`) VALUES
(3, 'PDF', 'fsdfds', 'file-220125-bffe42373a.pdf'),
(4, 'PPT', 'kdkfdsf', 'file-220125-83f7a0459a.pptx'),
(5, 'Word', 'kfkds', 'file-220125-bd891883c2.docx'),
(6, 'tess', 'drd', 'file-220202-7f3582b0f1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `fk_petugas` (`id_petugas_berita`);

--
-- Indeks untuk tabel `tb_halaman`
--
ALTER TABLE `tb_halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indeks untuk tabel `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_unggah`
--
ALTER TABLE `tb_unggah`
  ADD PRIMARY KEY (`id_unggah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_halaman`
--
ALTER TABLE `tb_halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_unggah`
--
ALTER TABLE `tb_unggah`
  MODIFY `id_unggah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `fk_petugas` FOREIGN KEY (`id_petugas_berita`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

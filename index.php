<?php
// Fungsi require_once yang digunakan untuk mengimpor file erpisah untuk dapat mengakses properti dan metode dari file-file PHP tersebut
require_once('anggota.php'); // Mengimpor kelas Anggota
require_once('buku.php'); // Mengimpor kelas Buku
require_once('pinjam.php'); // Mengimpor kelas Pinjam

// Membuat objek Anggota
$anggota1= new Anggota(); // Membuat sebuah objek baru dari kelas Anggota
$anggota1->nama = "Budi Hartono"; // Memasukkan nilai dari properti nama
$anggota1->prodi = "Teknik Informatika"; // Memasukkan nilai dari properti prodi
$anggota1->fakultas = "Teknik"; // Memasukkan nilai dari properti fakultas
$anggota1->instansi = "Universitas Indonesia"; // Memasukkan nilai dari properti instansi

// Membuat objek Buku
$buku1 = new Buku(); // Membuat sebuah objek baru dari kelas Buku
$buku1->judul= "Konsep Objek Oriented Programming Pada PHP"; // Memasukkan nilai dari properti judul
$buku1->nomorRak = 3; // Memasukkan nilai dari properti nomor rak
$buku1->jumlahHalaman = 209; // Memasukkan nilai dari properti jumlah halaman
$buku1->tahunTerbit = 2021; // Memasukkan nilai dari properti tahun terbit
$buku1->penerbit= "Erlangga"; // Memasukkan nilai dari properti penerbit
$buku1->tipeBuku = "Pendidikan"; // Memasukkan nilai dari properti tipe buku

// Membuat objek Pinjam
$pinjam1 = new Pinjam(); // Membuat sebuah objek baru dari kelas Pinjam
$pinjam1->status= "Tidak Aktif"; // Memasukkan nilai dari properti status
$pinjam1->tanggalPinjam= "09-09-2023"; // Memasukkan nilai dari properti tanggal pinjam
$pinjam1->lamaPinjam= 10; // Memasukkan nilai dari properti lama pinjam
$pinjam1->tanggalkembali= "19-09-2023"; // Memasukkan nilai dari properti tanggal kembali


// Menampilkan informasi data ke layar
echo "Informasi Anggota Perpustakaan"; // Menampilkan keterangan bahwa data di bawahnya adalah data Anggota
echo "<br>"; // Membuat baris baru
$anggota1->informasiAnggota(); // Memanggil public metode informasiAnggota() dari kelas Anggota
echo "<br>";
echo "Informasi Buku"; // Menampilkan keterangan bahwa data di bawahnya adalah data Buku
echo "<br>"; // Membuat paragraf baru
$buku1->informasiBuku(); // Memanggil public metode informasiBuku() dari kelas Buku
echo "<br>"; // Membuat baris baru
echo "Informasi Peminjaman"; // Menampilkan keterangan bahwa data di bawahnya adalah data Peminjaman
echo "<br>"; // Membuat baris baru
$pinjam1->informasiPinjam(); // Memanggil public metode informasiPinjam() dari kelas Pinjam
echo "<br>"; // Membuat baris baru
$pinjam1->peminjaman("Aktif"); // Memanggil public metode peminjaman dan mengelola argumen "Aktif" dari kelas Pinjam
echo "<br>"; // Membuat baris baru
?>
<?php
// Pendefinisian sebuah kelas dengan nama unik "Anggota". Di dalam kelas ini terdapat beberapa properti dan metode 
class Anggota {
    // Public properti berarti properti yang dapat diakses dari luar kelas
    public $nama; // Properti untuk menyimpan data nama Anggota Perpustakaan.
    public $prodi; // Properti untuk menyimpan data asal Program Studi.
    public $fakultas; // Properti untuk menyimpan data Fakultas.
    public $instansi; // Properti untuk menyimpan data asal Instansi Anggota.

    // Metode public function yang berarti metode secara public atau dapat dipanggil dari luar kelas Anggota. 
    // Metode memiliki nama informasiAnggota, yang akan mengeksekusi pernyataan di dalamnya, jika nantinya metode tersebut dipanggil
    public function informasiAnggota() {
        // Pada pernyataan echo digunakan untuk menampilkan teks yang dimasukkan ke layar
        // Pada fungsi $this berperan untuk merujuk pada objek dalam sebuah kelas yang sedang berjalan, sehingga dapat digunakan untuk
        // mengakses properti dan metode dari objek tersebut
        echo "Nama: " . $this->nama . "<br>"; // Menampilkan nama Anggota
        echo "Program Studi: " . $this->prodi . "<br>"; // Menampilkan Program Studi Anggota
        echo "Fakultas: " . $this->fakultas . "<br>"; // Menampilkan Fakultas Anggota
        echo "Instansi: " . $this->instansi . "<br>"; // Menampilkan Instansi Anggota
    }

// Bagian akhir dari pendefinisian kelas Anggota
}

?>
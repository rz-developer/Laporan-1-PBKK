<?php
// Pendefinisian sebuah kelas dengan nama unik "Buku". Di dalam kelas ini terdapat beberapa properti dan metode 
class Buku {
    // Public properti berarti properti yang dapat diakses dari luar kelas
    public $judul; // Properti untuk menyimpan data judul Buku
    public $nomorRak; // Properti untuk menyimpan data nomor Rak
    public $jumlahHalaman; // Properti untuk menyimpan data jumlah Halaman
    public $tahunTerbit; // Properti untuk menyimpan data Tahun Terbit
    public $penerbit; // Properti untuk menyimpan data Penerbit
    public $tipeBuku; // Properti untuk menyimpan data Tipe Buku

    // Metode public function yang berarti metode secara public atau dapat dipanggil dari luar kelas Anggota. 
    // Metode memiliki nama informasiBuku, yang akan mengeksekusi pernyataan di dalamnya, jika nantinya metode tersebut dipanggil
    public function informasiBuku(){
        // Pada pernyataan echo digunakan untuk menampilkan teks yang dimasukkan ke layar
        // Pada fungsi $this berperan untuk merujuk pada objek dalam sebuah kelas yang sedang berjalan, sehingga dapat digunakan untuk
        // mengakses properti dan metode dari objek tersebut
        echo "Judul Buku : ". $this->judul ."<br>"; // Menampilkan judul buku
        echo "Nomor Rak : " .$this->nomorRak . "<br>"; // Menampilkan nomor rak
        echo "Jumlah Halaman : " .$this->jumlahHalaman . "<br>"; // Menampilkan Jumlah Halaman
        echo "Tahun Terbit: " .$this->tahunTerbit. "<br>"; // Menampilkan Tahun Terbit
        echo "Penerbit : " .$this->penerbit . "<br>"; // Menampilkan Penerbit
        echo "Tipe Buku : " .$this->tipeBuku . "<br>"; // Menampilkan Tipe Buku
    }

// Bagian akhir dari pendefinisian kelas Buku
}

?>
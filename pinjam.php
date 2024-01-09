<?php
// Pendefinisian sebuah kelas dengan nama unik "Pinjam". Di dalam kelas ini terdapat beberapa properti dan metode 
class Pinjam {
    // Public properti berarti properti yang dapat diakses dari luar kelas
    public $status; // Properti untuk menyimpan status peminjaman.
    public $tanggalPinjam; // Properti untuk menyimpan tanggal peminjaman.
    public $lamaPinjam; // Properti untuk menyimpan durasi peminjaman
    public $tanggalKembali; // Properti untuk menyimpan tanggal pengembalian
    
    // Metode public function yang berarti metode secara public atau dapat dipanggil dari luar kelas Anggota. 
    // Metode memiliki nama informasiPinjam, yang akan mengeksekusi pernyataan di dalamnya, jika nantinya metode tersebut dipanggil
    public function informasiPinjam(){
        // Pada pernyataan echo digunakan untuk menampilkan teks yang dimasukkan ke layar
        // Pada fungsi $this berperan untuk merujuk pada objek dalam sebuah kelas yang sedang berjalan, sehingga dapat digunakan untuk
        // mengakses properti dan metode dari objek tersebut
        echo "Status Peminjaman : " .$this->status."<br>"; // Menampilkan status lama
    }
    // Metode Public dengan nama peminjaman yang akan mengeksekusi pernyataan argumen baru di dalamnya
    // Argumen baru di dalam metode ini adalah $statusBaru
    public function peminjaman($statusBaru) {

        // Properti status pada kelas Pinjam akan diatur ke dalam argumen baru yang dimasukkan nantinya, yakni $statusBaru
        $this->status = $statusBaru;
        // Jika status diatur ke dalam argumen baru, maka akan dikelola fungsi echo tambahan seperti Tanggal Pinjam, Lama Pinjam, dan Tanggal Kembali
        echo "Status Peminjaman Menjadi : " . $this->status . "<br>"; // Menampilkan status baru
        echo "Tanggal Peminjaman : " .$this->tanggalPinjam . "<br>"; // Menampilkan tanggal peminjaman
        echo "Perjanjian Lama Peminjaman  : " .$this->lamaPinjam . " hari <br>"; // Menampilkan durasi atau lama peminjaman
        echo "Tanggal Pengembalian : " .$this->tanggalkembali. "<br>"; // Menampilkan tanggal pengembalian

    }

// Bagian akhir dari pendefinisian kelas Pinjam
}

?>
<?php
    //membuat kelas
    class buku{
        //mendeklarasikan properties
        public $judulBuku;
        public $ISBN;
        public $penulis;
        public $penerbit;

        //membuat constructor yang otomatis akan dijalankan ketika sebuah objek di-instansiasi
        public function __construct($judulBuku, $ISBN="belum ada", $penulis="belum ada penulis", $penerbit="belum ada penerbit"){
            $this->judulBuku = $judulBuku;
            $this->ISBN = $ISBN;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
        }

        //membuat method (fungsi yang ada dalam sebuah kelas)
        public function sayHello(){
            return "hello world!";
        }
        
        public function getInfoBuku(){
            return  "Judul Buku: ".$this->judulBuku."<br> ".
                    "ISBN: ".$this->ISBN."<br>".
                    "Nama Penulis: ".$this->penulis."<br>".
                    "Penerbit: ".$this->penerbit."<br>";
            /* $this digunakan untuk mengambil isi dari properties yang ada di kelas itu sendiri */
        }

    


    }

    //membuat objek baru dari kelas yang sudah dibuat dan memasukan data ke propertinya melalui konstruktor
    $buku1 = new buku();

    // tampilkan isi dari objek buku1
    echo $buku1->getInfoBuku();





    //memasukkan data ke properties objek
    // $buku1-> judulBuku = "Cara beternak kutu";
    // $buku1-> ISBN = "12345";
    // $buku1-> penulis = "Uu Suru'u";
    // $buku1->penerbit = "Pustaka Tani";

    //menampilkan data dari proerties yang ada di objek yang sudah dibuat
    // echo "BUKU 1: <br>";
    // echo "Judul Buku: ".$buku1->judulBuku."<br>";
    // echo "ISBN: ".$buku1->ISBN."<br>";
    // echo "Penulis: ".$buku1->penulis."<br>";
    // echo "Penerbit: ".$buku1->penerbit."<br>";
    
    // echo"<hr>";

    //cara panggil method
    // echo $buku1->getNamaPenulis();
   

?>
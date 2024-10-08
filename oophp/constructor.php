<?php

//jualan produk
//komik
//game

class Produk {

    public $judul,
           $penulis, 
           $penerbit,
           $harga = 0;

    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis; 
        $this->penerbit = $penerbit; 
        $this->harga = $harga;  
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
 
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500);
$produk3 = new Produk("God Of War");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

var_dump($produk3);
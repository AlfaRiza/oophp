<?php

    //Jual produk
    //komik
    //game

    class Produk{
        public $judul,
                $penulis,
                $penerbit,
                $harga;

        public function getLabel(){
            return "$this->judul,$this->penulis,$this->penerbit";
        }

    }

    $produk = new Produk();
    $produk->judul = "Naruto";
    $produk->penulis = "Masashi Kisimoto";
    $produk->penerbit = "Shonen Jump";
    $produk->harga = 30000;

    $produk1 = new Produk();
    $produk1->judul = "Uncharter";
    $produk1->penulis = "Downy Donke";
    $produk1->penerbit = "Atlas";
    $produk1->harga = 250000;

    echo "Komik : " . $produk->getLabel();
    echo "<br>";
    echo "Game : " . $produk1->getLabel();

?>
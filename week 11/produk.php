<?php
class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
        //fungsi this mengambil properti yang berada didalam kelas yang bersangkutan 
    }
}

/*$produk1 = new Produk();
$produk1->judul = "Azkaban";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Narnia";
var_dump($produk2);*/ 

$produk3  = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk ();
$produk4->judul = "Uncharted";
$produk4->penulis= "Neil Druckmann";
$produk4->penerbit= "Sony Computer";
$produk4->harga = 250000;

echo "<br><br>";
echo "Komik : ".$produk3->getLabel();
echo "<br>";
echo "Game : ".$produk4->getLabel();

?>
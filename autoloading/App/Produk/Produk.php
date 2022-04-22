<?php
class Produk {
    private  $judul,
            $penulis,
            $penerbit;
    protected $diskon = 0;

    private $harga = 0;
    
    public function __construct($judul = "judul", $penulis = "penulis",$penerbit="penerbit",$harga = 0)//"__" method special
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function setJudul($judul){
       
        $this->judul = $judul;
    }

    public function getJudul(){
     return $this->judul;   
    }

    public function setPenulis($penulis){
       
        $this->penulis = $penulis;
    }

    public function getPenulis($penulis){
       
        $this->penulis = $penulis;
    }

    public function getPenerbit($penerbit){
       
        $this->penerbit = $penerbit;
    }

    public function setPenerbit($penerbit){
       
        $this->penerbit = $penerbit;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon/100 );
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
        //fungsi this mengambil properti yang berada didalam kelas yang bersangkutan 
    }

   
    
    public function getInfo(){
        $str = "($this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;        
    } 
}
?>
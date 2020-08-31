<?php
    class produk{
        public $namaBarang,
            $merk,
           $harga;

         public function getCetak(){
               return "$this->namaBarang, $this->merk, $this->harga";
           }
         public function __construct($namaBarang="nama barang", $merk="merk", $harga=0){
               $this->namaBarang = $namaBarang;
               $this->merk=$merk;
               $this->harga=$harga;
           }

}

$produk1 = new produk("Ideapad 310","Lenovo",7000000);
$produk2 = new produk("flasdisk","Sandisk",1000000);
$produk3 = new produk("Macbook Air","Apple",250000000);
$produk4 = new produk("Mouse","Logitech",120000);

echo "Nama Barang Laptop : " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris : " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang Laptop : " . $produk3->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris : " . $produk4->getCetak();
?>
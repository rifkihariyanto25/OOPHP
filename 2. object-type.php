<?php
class produk
{
    public $judul, $penulis, $penerbit, $harga;

    // untuk menjalankan instan setiap membuat kelas baru
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// hanya mencetak produk saja
class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $string = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga}) ";
        return $string;
    }
}


$produk1 = new produk("Toy Story", "Janto", "Perpustakaan", "250000");
$produk2 = new produk("Marvel", "Kuwuk", "Studio", "350000");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game :  " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);

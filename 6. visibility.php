<?php

// Interface untuk memastikan semua kelas yang mengimplementasikannya memiliki metode getInfo
interface InfoProduk
{
    public function getInfo();
}

// Kelas Produk sebagai parent
class Produk implements InfoProduk
{
    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;

    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfo()
    {
        return $this->getInfoProduk();
    }
}

// Kelas Komik sebagai turunan dari Produk
class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function getInfo()
    {
        return $this->getInfoProduk();
    }
}

// Kelas Game sebagai turunan dari Produk
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo()
    {
        return $this->getInfoProduk();
    }
}

// Kelas untuk mencetak info produk
class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
        return $str;
    }
}

// Membuat objek dan menampilkan informasi produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
echo "<hr>";

$produk2->setDiskon(50);
echo "Harga setelah diskon: Rp. " . $produk2->getHarga();

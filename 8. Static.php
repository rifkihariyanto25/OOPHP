<?php
class Contohstatic
{
    // properti static
    public static $angka = 1;


    // method
    public static function halo()
    {
        return "hallo guys" . self::$angka++ . " kali.";
    }
}


// manggil angka
echo Contohstatic::$angka;
echo "<br>";
// manggil hallo
echo Contohstatic::halo();
echo "<br>";
// manggil hallo
echo Contohstatic::halo();

echo "<hr>";


class Contoh2
{
    public static $angkalagi = 1;

    public function halo()
    {
        return "Halo " . self::$angkalagi++ . " kali. <br>";
    }
}

$obj = new Contoh2;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh2;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

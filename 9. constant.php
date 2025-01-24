<?php

// konstanta menggunakan define, tidak dapat disimpan di dalam kelas jadi ini konstanta global
define('NAMA', 'janto');

echo NAMA;


echo "<br>";

// bisa disimpan dalam , jadi kalo mau pake kelas pake ini
const UMUR = 32;
echo UMUR;

class Coba
{
    const NAMA = 'Rifki';
}
echo "<br>";
echo Coba::NAMA;

echo "<br>";

// magic konstan
function coba1()
{
    return __FUNCTION__;
}

echo coba1();

class Coba2
{
    public $kelas = __CLASS__;
}

$obj = new Coba2;
echo $obj->kelas;

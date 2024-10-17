<?php


// define('NAMA', 'Kaka Praditha');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Kaka';
// }

// echo Coba::NAMA;

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";

function coba(){
    return __FUNCTION__;
}
echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>
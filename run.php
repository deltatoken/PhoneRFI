<?php
include 'func.php';

/*
    https://github.com/deltatoken/PhoneRFI/
    Made by pablo rotem
*/

$init = new Bom();

$init->no = ""; //Nomer Hp tujuan
$loop = ""; //Jumlah eksekusi
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}

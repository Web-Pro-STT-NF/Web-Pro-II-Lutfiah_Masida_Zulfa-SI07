<?php

include_once "class_persegipanjang.php";
$persegipanjang1 = new persegipanjang(25, 30);

echo "Lebar Persegi Panjang adalah 25 dan kelilingnya adalah 30, maka besar luas & kelilingnya adalah...";
echo "<br/> Jawab :";
echo "<br/>Luas Persegi Pannjang adalah : ". $persegipanjang1->luas();
echo "<br/>Keliling Persegi Panjang adalah : ". $persegipanjang1->keliling();

?>
<?php
include_once "mobil.php";
include_once "mobilListrik.php";

$mobilbbm = new Mobil();
$mobillistrik = new MobilListrik();

echo "Mobil Yang Pake BBM <br>";
$mobilbbm->menggunakanBBM();

echo "<br>Mobil Yang Pake Baterai <br>";
$mobillistrik->menggunakanBaterai();

?>
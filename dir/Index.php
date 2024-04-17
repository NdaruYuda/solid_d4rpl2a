<?php

include_once "BarangElektronik.php";
include_once "Saklar.php";
include_once "Lampu.php";
include_once "KipasAngin.php";

// Membuat objek Lampu dan KipasAngin
$lampu = new Lampu();
$kipasAngin = new KipasAngin();

// Membuat objek Saklar dengan Lampu dan KipasAngin sebagai item
$saklarLampu = new Saklar($lampu);
$saklarKipas = new Saklar($kipasAngin);

// Mengaktifkan saklar untuk menyalakan dan mematikan barang elektronik
$saklarLampu->berubah();
echo "<br>";
$saklarKipas->berubah();
echo "<br>";

?>

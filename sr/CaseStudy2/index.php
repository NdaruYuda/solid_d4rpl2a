<?php
include_once "view.php";

$mahasiswa = new Mahasiswa("2205021", "Ndaru Septian Yudha Nugroho");
$viewmhs = new MahasiswaView();
echo "Informasi Mahasiswa :";
echo "<br>";
$viewmhs->showMahasiswa($mahasiswa);
?>

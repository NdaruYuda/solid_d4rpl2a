<?php

include_once "BarangElektronik.php";

class Lampu implements BarangElektronik {
    public function beroperasi(): void {
        echo "Lampu menyala. \n";
    }

    public function berhenti(): void {
        echo "Lampu berhenti menyala. \n";
    }
}
?>

<?php

include_once "BarangElektronik.php";

class KipasAngin implements BarangElektronik {
    public function beroperasi(): void {
        echo "Kipas angin berputar. \n";
    }

    public function berhenti(): void {
        echo "Kipas angin berhenti berputar. \n";
    }
}
?>

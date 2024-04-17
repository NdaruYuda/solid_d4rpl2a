<?php

include_once "BarangElektronik.php";

class Saklar {
    private BarangElektronik $item;
    private bool $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function berubah(): void {
        $this->item->beroperasi();
        $this->keaktifan = !$this->keaktifan;
    }
}
?>

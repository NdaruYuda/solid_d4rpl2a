<?php
include_once "kendaraanListrik.php";

class MobilListrik implements KendaraanListrik {
    public function menggunakanBaterai() :void{
        echo "di charge kalau habis baterai nya !";
    }
}

?>
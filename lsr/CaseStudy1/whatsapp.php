<?php
include_once "vgm.php";

class WhatsApp implements VideoGroupManager {
    public function chat() {
        echo "P <br>";
    }

    public function sendPhotosAndVideos() {
        echo "P bagi jawaban <br>";
    }

    public function callGroupVideo() {
        echo "Berbunyi kecuali di silent <br>";
    }
}

?>

<?php
include_once "pmm.php";

class Instagram implements PostMediaManager {
    public function chat() {
        echo "P <br>";
    }

    public function sendPhotosAndVideos() {
        echo "Upload foto dan video <br>";
    }

    public function publishPost() {
        echo "Posting <br>";
    }
}
?>

<?php
include_once "dbms.php";
class MySQL implements DBMS {
    public function createConnection() {
        echo "Creating MySQL connection...\n";
    }
}
?>

<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('database.db');
    }
}
$db = new MyDB();
if (!$db) {
    die("Gagal membuka database: " . $db->lastErrorMsg());
}
?>


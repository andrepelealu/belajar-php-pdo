<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'blog';
$dbms = 'mysql';
$charset = 'utf8';
$db = null;
try {
    $db = new PDO("$dbms:host=$host;dbname=$database;charset=$charset", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'koneksi berhasil';
}
    catch(PDOException $e) {
    echo 'koneksi error :'.$e->getMessage();
}

?>

<?php

ini_set('memory_limit', '1024M');

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "emlak_db"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
?>

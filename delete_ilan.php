<?php
session_start();
require '../db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];


    $stmt = $conn->prepare("SELECT resim FROM ilanlar WHERE id = ?");
    $stmt->execute([$id]);
    $ilan = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($ilan && $ilan['resim'] && file_exists("../" . $ilan['resim'])) {
        unlink("../" . $ilan['resim']); 
    }

 
    $stmt = $conn->prepare("DELETE FROM ilanlar WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: dashboard.php");
exit;
?>

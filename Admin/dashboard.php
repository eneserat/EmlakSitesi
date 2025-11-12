<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Yönetim Paneli</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">🏠 Emlak Yönetim Paneli</span>
    <div>
      <a href="add_ilan.php" class="btn btn-success btn-sm">+ Yeni İlan</a>
      <a href="list_ilan.php" class="btn btn-warning btn-sm">📋 İlanları Gör</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Çıkış</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
  <h3>Hoşgeldin, <?= $_SESSION['admin'] ?> 👋</h3>
  <p>Buradan ilanlarını yönetebilirsin.</p>
</div>
</body>
</html>

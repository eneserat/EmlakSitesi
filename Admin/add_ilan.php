<?php
session_start();
require '../db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baslik = $_POST['baslik'];
    $fiyat = $_POST['fiyat'];
    $adres = $_POST['adres'];
    $aciklama = $_POST['aciklama'];

    $resimYolu = null;
    if (!empty($_FILES['resim']['name'])) {
        $hedefKlasor = "../uploads/";
        $dosyaAdi = time() . "_" . basename($_FILES["resim"]["name"]);
        $hedefDosya = $hedefKlasor . $dosyaAdi;

        if (move_uploaded_file($_FILES["resim"]["tmp_name"], $hedefDosya)) {
            $resimYolu = "uploads/" . $dosyaAdi;
        } else {
            $message = "Resim yüklenirken bir hata oluştu.";
        }
    }

  
    $stmt = $conn->prepare("INSERT INTO ilanlar (baslik, fiyat, adres, aciklama, resim) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$baslik, $fiyat, $adres, $aciklama, $resimYolu]);
    $message = "✅ İlan başarıyla eklendi!";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni İlan Ekle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark px-3">
    <a href="dashboard.php" class="navbar-brand">🏠 Yönetim Paneli</a>
    <a href="logout.php" class="btn btn-outline-light">Çıkış Yap</a>
</nav>

<div class="container mt-4">
    <h3>Yeni İlan Ekle</h3>
    <?php if ($message): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label>Başlık</label>
            <input type="text" name="baslik" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fiyat (₺)</label>
            <input type="number" name="fiyat" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Adres</label>
            <input type="text" name="adres" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Açıklama</label>
            <textarea name="aciklama" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label>Resim</label>
            <input type="file" name="resim" accept="image/*" class="form-control">
        </div>
        <button class="btn btn-success w-100">İlanı Ekle</button>
    </form>
</div>
</body>
</html>

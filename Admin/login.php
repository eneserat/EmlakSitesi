<?php
session_start();
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    $stmt = $conn->prepare("SELECT * FROM adminler WHERE kullanici_adi = ?");
    $stmt->execute([$kullanici_adi]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($sifre, $admin['sifre'])) {
        $_SESSION['admin'] = $admin['kullanici_adi'];
        header("Location: dashboard.php");
        exit;
    } else {
        $hata = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Admin Giriş | Emlak Paneli</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow p-4">
        <h3 class="text-center mb-3">Admin Giriş</h3>
        <?php if(!empty($hata)): ?>
          <div class="alert alert-danger"><?= $hata ?></div>
        <?php endif; ?>
        <form method="POST">
          <input type="text" name="kullanici_adi" class="form-control mb-3" placeholder="Kullanıcı Adı" required>
          <input type="password" name="sifre" class="form-control mb-3" placeholder="Şifre" required>
          <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

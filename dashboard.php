<?php
session_start();
require '../db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}


$stmt = $conn->query("SELECT * FROM ilanlar ORDER BY id DESC");
$ilanlar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yönetici Paneli - İlanlar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">🏠 Emlak Admin Panel</span>
    <a href="logout.php" class="btn btn-outline-light">Çıkış Yap</a>
</nav>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>İlan Listesi</h3>
        <a href="add_ilan.php" class="btn btn-success">+ Yeni İlan Ekle</a>
    </div>

    <table class="table table-bordered table-striped align-middle shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Başlık</th>
                <th>Fiyat</th>
                <th>Adres</th>
                <th>Resim</th>
                <th>Tarih</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($ilanlar) > 0): ?>
            <?php foreach ($ilanlar as $ilan): ?>
                <tr>
                    <td><?= $ilan['id'] ?></td>
                    <td><?= htmlspecialchars($ilan['baslik']) ?></td>
                    <td><?= number_format($ilan['fiyat'], 2, ',', '.') ?> ₺</td>
                    <td><?= htmlspecialchars($ilan['adres']) ?></td>
                    <td>
                        <?php if ($ilan['resim']): ?>
                            <img src="../<?= $ilan['resim'] ?>" width="80" height="60" style="object-fit:cover;">
                        <?php else: ?>
                            Yok
                        <?php endif; ?>
                    </td>
                    <td><?= date("d.m.Y H:i", strtotime($ilan['tarih'])) ?></td>
                    <td>
                        <a href="edit_ilan.php?id=<?= $ilan['id'] ?>" class="btn btn-sm btn-primary">Düzenle</a>
                        <a href="delete_ilan.php?id=<?= $ilan['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bu ilanı silmek istediğine emin misin?')">Sil</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7" class="text-center text-muted">Henüz ilan eklenmemiş.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>

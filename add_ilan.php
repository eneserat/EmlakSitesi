<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baslik = $_POST['baslik'];
    $konum = $_POST['konum'];
    $fiyat = $_POST['fiyat'];
    $para_birimi = $_POST['para_birimi'];
    $durum = $_POST['durum'];
    $resim = null;


    if (!empty($_FILES['resim']['name'])) {
        $hedef_klasor = "uploads/";
        if (!is_dir($hedef_klasor)) {
            mkdir($hedef_klasor, 0777, true);
        }

        $dosya_adi = time() . "_" . basename($_FILES['resim']['name']);
        $hedef_yol = $hedef_klasor . $dosya_adi;

     
        $uzanti = strtolower(pathinfo($hedef_yol, PATHINFO_EXTENSION));
        $izinli = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (in_array($uzanti, $izinli)) {
            if (move_uploaded_file($_FILES['resim']['tmp_name'], $hedef_yol)) {
                $resim = $hedef_yol; 
                echo "<script>alert('Resim yüklenemedi!');</script>";
            }
        } else {
            echo "<script>alert('Sadece resim dosyalarına izin verilir!');</script>";
        }
    }

   
    $sql = "INSERT INTO ilanlar (baslik, konum, fiyat, para_birimi, durum, resim)
            VALUES (:baslik, :konum, :fiyat, :para_birimi, :durum, :resim)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':baslik' => $baslik,
        ':konum' => $konum,
        ':fiyat' => $fiyat,
        ':para_birimi' => $para_birimi,
        ':durum' => $durum,
        ':resim' => $resim
    ]);

    echo "<script>alert('Yeni ilan başarıyla eklendi!'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni İlan Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h3>Yeni İlan Ekle</h3>
    <form method="POST" enctype="multipart/form-data" class="mt-4">
        <div class="mb-3">
            <label>Başlık</label>
            <input type="text" name="baslik" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konum</label>
            <input type="text" name="konum" class="form-control">
        </div>
        <div class="mb-3">
            <label>Fiyat</label>
            <input type="number" name="fiyat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Para Birimi</label>
            <select name="para_birimi" class="form-select">
                <option value="TL">TL</option>
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Durum</label>
            <select name="durum" class="form-select">
                <option value="Satılık">Satılık</option>
                <option value="Kiralık">Kiralık</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Resim Yükle</label>
            <input type="file" name="resim" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success">İlanı Kaydet</button>
    </form>
</div>
</body>
</html>

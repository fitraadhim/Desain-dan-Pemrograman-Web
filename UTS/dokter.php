<?php
include 'koneksi.php'; 
$sql = 'SELECT
    "Id" AS "Id",
    "Nama" AS "Nama",
    "Spesialis" AS "Spesialis",
    "Pengalaman" AS "Pengalaman"
    FROM "timdokter"
    ORDER BY "Id"';

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dokter - Klinik Gigi Adhim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <section class="page-header">
        <h1>Tim Dokter Kami</h1>
    </section>

    <section class="doctors">
        <div class="container">
            <div class="doctor-grid">
                <?php $i=1; ?>
            <?php while ($row = pg_fetch_assoc($result)) : ?>
                <div class="doctor-card">
                    <div class="doctor-photo">🧑‍⚕️</div>
                    <h3><?= htmlspecialchars($row['Nama']); ?></h3>
                    <p class="specialty"><?= htmlspecialchars($row['Spesialis']); ?></p>
                    <p><?= htmlspecialchars($row['Pengalaman']); ?></p>
                </div>
                
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
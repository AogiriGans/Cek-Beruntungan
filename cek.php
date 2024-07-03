<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Keberuntungan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Hasil Keberuntungan Anda</h1>
        <?php
            $name = htmlspecialchars($_GET['name']);
            $positives = ["Kekayaan", "Kesehatan", "Cinta/Relasi", "Kestabilan"];
            $negatives = ["Perselisihan", "Kehilangan", "Malapetaka", "Kehancuran"];

            function getRandomPercentage() {
                return rand(1, 100) . "%";
            }

            echo "<h2>Nama: $name</h2>";
            echo "<h3>ENERGI POSITIF</h3>";
            foreach ($positives as $positive) {
                echo "$positive = " . getRandomPercentage() . "<br>";
            }
            echo "<h3>ENERGI NEGATIF</h3>";
            foreach ($negatives as $negative) {
                echo "$negative = " . getRandomPercentage() . "<br>";
            }
        ?>
        <font size="15">Pesan Harap Dibaca</font>
        <br> <p>Ini Hanyalah Permainan. Takdir Sudah Diatur Oleh Tuhan. Maka Berdoalah Karna Dokter Tidak Berjanji Bahwa Meminum Obat Bakal Sembuh Tapi Tuhan Berjanji Barang Sipa Yang Memperbaiki Ibadahnya Maka Tuhan Memperbaiki Hidupnya.</p>
    </div>
</body>
</html>
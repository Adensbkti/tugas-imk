<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .konten {
            margin-top: 70px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .isi-konten {
            display: flex;
            flex-direction: row;
            gap: 20px;
            flex-wrap: wrap;
        }

        .isi-konten .card {
            padding: 20px;
            width: 250px;
            background-color: rgb(70, 50, 37);
            color: white;
            border-radius: 12px;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="../picture/logo.png" alt="">
            <h2>Cagar Cianjur</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="ReservasiMasuk.php">Reservasi Masuk</a></li>
                <li><a href="DataKunjungan.php">Data Kunjungan</a></li>
                <li><a href="ValidasiTiket.php">Validasi Tiket</a></li>
                <li><a href="Laporan.php">Laporan</a></li>
            </ul>
            <div class="btn">
                <button class="btn-masuk">Masuk</button>
                <button class="btn-daftar">Daftar</button>
            </div>
        </div>
    </div>
    <div class="konten">
        <h2>📊 Ringkasan Statistik</h2>
        <div class="isi-konten">
            <div class="card">
                <h3>Pengunjung / Hari</h3>
                <h1>234</h1>
            </div>
            <div class="card">
                <h3>Reservasi / Hari</h3>
                <h1>20</h1>
            </div>
            <div class="card">
                <h3>Tiket Tervalidasi</h3>
                <h1>10</h1>
            </div>
            <div class="card">
                <h3>Pendapatan</h3>
                <h1>1.500.000</h1>
            </div>
        </div>

    </div>
</body>

</html>
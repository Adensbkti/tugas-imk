<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 180px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            z-index: 1;
        }

        .dropdown-content a {
            padding: 10px 15px;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            color: #2e7d32;
        }

        .menu ul li:hover .dropdown-content {
            display: block;
        }

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
                <li>
                    <a href="#">Kelola ▾</a>
                    <div class="dropdown-content">
                        <a href="KelolaWisata.php">Kelola Wisata</a>
                        <a href="TiketTarif.php">Tiket & Tarif</a>
                        <a href="Artikel.php">Artikel</a>
                        <a href="Petugas.php">Petugas</a>
                        <a href="Pengguna.php">Pengguna</a>
                    </div>
                </li>
                <li><a href="Reservasi.php">Reservasi</a></li>
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
                <h3>Total Reservasi Hari Ini</h3>
                <h1>25</h1>
            </div>
            <div class="card">
                <h3>Pengunjung Bulan Ini</h3>
                <h1>1.235</h1>
            </div>
            <div class="card">
                <h3>Pendapatan Bulan Ini</h3>
                <h1>Rp 12.750.000</h1>
            </div>
            <div class="card">
                <h3>Destinasi Wisata</h3>
                <h1>8</h1>
            </div>
            <div class="card">
                <h3>Tiket Terjual</h3>
                <h1>987</h1>
            </div>
        </div>
    </div>
</body>

</html>
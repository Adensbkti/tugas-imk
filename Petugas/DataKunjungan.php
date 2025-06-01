<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .konten {
            margin-top: 70px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: rgb(70, 50, 37);;
            color: white;
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
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="ReservasiMasuk.php">Reservasi Masuk</a></li>
                <li><a href="#">Data Kunjungan</a></li>
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
        <h3>Data Kunjungan | Data pengunjung yang sudah melakukan kunjungan</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>Nama Pengunjung</th>
                <th>Destinasi</th>
                <th>Tgl Kunjungan</th>
                <th>Jumlah Orang</th>
                <th>Status</th>
                <th>Tiket</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Morgan</td>
                <td>Gunung Gede</td>
                <td>12 Juni 2025</td>
                <td>3 Orang</td>
                <td>Selesai</td>
                <td>v</td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Tiket</title>
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

        input {
            font-size: 15px;
            width: 25%;
            padding: 5px 18px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        .konten .button {
            padding: 10px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            background-color: rgb(52, 98, 225);
            text-align: center;
            text-decoration: none;
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
        <h3>Validasi Tiket | Dengan Input No Reservasi</h3>
        <div class="cari-reservasi">
            <input type="text">
            <a href="" class="button" style="background-color: #2e7d32;">Cari</a>
        </div>
        <div class="card-detail">
            <table>
                <tr>
                    <th>Kolom / Label</th>
                    <th>Contoh Data</th>
                </tr>
                <tr>
                    <td>Nama Pengunjung</td>
                    <td>Rina Maulani</td>
                </tr>
                <tr>
                    <td>Kode Reservasi</td>
                    <td>RES-20250603-017</td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td>3 Juni 2025</td>
                </tr>
                <tr>
                    <td>Jumlah Orang</td>
                    <td>4 orang</td>
                </tr>
                <tr>
                    <td>Destinasi Wisata</td>
                    <td>Curug Cibeureum</td>
                </tr>
                <tr>
                    <td>Jenis Tiket</td>
                    <td>Umum / Pelajar / Pendaki / Camping</td>
                </tr>
                <tr>
                    <td>Status Pembayaran</td>
                    <td>✅ Sudah Bayar</td>
                </tr>
                <tr>
                    <td>Status Tiket</td>
                    <td>❌ Belum Divalidasi</td>
                </tr>
                <tr>
                    <td>Tombol Validasi</td>
                    <td>
                        <a class="button">✅ Validasi Tiket</a>
                        <a class="button">❌ Tolak</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
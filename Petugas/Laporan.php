<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
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

        input,
        select {
            padding: 5px;
            margin-bottom: 10px;
            width: 200px;
        }

        .konten form {
            display: grid;
            grid-template-columns: auto auto auto;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
        }

        form>div {
            display: flex;
            flex-direction: column;
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
            background-color: rgb(70, 50, 37);
            ;
            color: white;
        }

        .konten button {
            padding: 10px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 200px;
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
                <li><a href="#">Laporan</a></li>
            </ul>
            <div class="btn">
                <button class="btn-masuk">Masuk</button>
                <button class="btn-daftar">Daftar</button>
            </div>
        </div>

    </div>

    <div class="konten">
        <h2>Filter Data Laporan</h2>
        <form>
            <div>
                <label for="start-date">Tanggal Mulai:</label>
                <input type="date" id="start-date" name="start-date">
            </div>
            <div>
                <label for="end-date">Tanggal Akhir:</label>
                <input type="date" id="end-date" name="end-date">
            </div>
            <div>
                <label for="destinasi">Destinasi Wisata:</label>
                <select id="destinasi" name="destinasi">
                    <option value="">-- Semua --</option>
                    <option value="Gunung Gede">Gunung Gede</option>
                    <option value="Curug Cibeureum">Curug Cibeureum</option>
                </select>
            </div>
            <div>
                <label for="kategori">Kategori Pengunjung:</label>
                <select id="kategori" name="kategori">
                    <option value="">-- Semua --</option>
                    <option value="Umum">Umum</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="WNA">WNA</option>
                    <option value="Pendaki">Pendaki</option>
                    <option value="Camping">Camping</option>
                </select>
            </div>
            <div>
                <label for="petugas">Petugas:</label>
                <input type="text" id="petugas" name="petugas" placeholder="Nama Petugas">
            </div>
            <div>
                <label for="status">Status Kedatangan:</label>
                <select id="status" name="status">
                    <option value="">-- Semua --</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>
            <button type="submit">Tampilkan Laporan</button>
        </form>

        <h2>Tabel Ringkasan Laporan</h2>
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Destinasi</th>
                    <th>Total Pengunjung</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                    <th>Pendapatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2 Juni 2025</td>
                    <td>Gunung Gede</td>
                    <td>85</td>
                    <td>80</td>
                    <td>5</td>
                    <td>Rp 2.500.000</td>
                </tr>
                <tr>
                    <td>5 Juni 2025</td>
                    <td>Curug Cibeureum</td>
                    <td>45</td>
                    <td>42</td>
                    <td>3</td>
                    <td>Rp 900.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
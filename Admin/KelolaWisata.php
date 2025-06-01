<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wisata</title>
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
            background-color: rgb(70, 50, 37);
            ;
            color: white;
        }

        .konten .button {
            padding: 5px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #f0ad4e;
            color: white;
        }

        .btn-delete {
            background-color: #d9534f;
            color: white;
            margin-bottom: 15px;
        }

        .btn-add {
            background-color: #5cb85c;
            color: white;
            width: 200px;
            margin-bottom: 15px;
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
                <li>
                    <a href="#">Kelola ▾</a>
                    <div class="dropdown-content">
                        <a href="KelolaWisata.php">Kelola Wisata</a>
                        <a href="TiketTarif.php">Tiket & Tarif</a>
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
        <h2>Daftar Destinasi Wisata</h2>

        <a href="FormWisata.php" class="button btn-add">+ Tambah Wisata</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Wisata</th>
                    <th>Lokasi</th>
                    <th>Kategori</th>
                    <th>Status Tayang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gunung Gede</td>
                    <td>Cipanas</td>
                    <td>Pendakian</td>
                    <td>Tayang</td>
                    <td>
                        <a class="button btn-edit">Edit</a>
                        <a class="button btn-delete">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Curug Cibeureum</td>
                    <td>Cibodas</td>
                    <td>Air Terjun</td>
                    <td>Tayang</td>
                    <td>
                        <a class="button btn-edit">Edit</a>
                        <a class="button btn-delete">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Situs Megalitikum Gunung Padang</td>
                    <td>Campaka</td>
                    <td>Edukasi</td>
                    <td>Nonaktif</td>
                    <td>
                        <a class="button btn-edit">Edit</a>
                        <a class="button btn-delete">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
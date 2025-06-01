<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .konten {
            margin-top: 70px;
            width: 100%;
            max-width: 450px;
            border-radius: 15px;
            /* box-shadow: 1px 1px 5px rgb(194, 193, 193); */
            padding: 10px;
        }

        form {
            margin-left: 25px;
        }

        td {
            padding: 5px;
            text-align: left;
        }


        input,
        select {
            font-size: 15px;
            width: 100%;
            padding: 10px 18px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }


        .konten button {
            padding: 10px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-submit {
            background-color: #4CAF50;
            border: none;
        }

        .btn-reset {
            background-color: #4e71ff;
            border: none;
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
                <li><a href="../LandingPage.php">Beranda</a></li>
                <li><a href="#">Destinasi Wisata</a></li>
                <li><a href="#">Tiket & Tarif</a></li>
                <li><a href="Galeri.php">Galeri</a></li>
                <li><a href="#">Artikel & Edukasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div class="btn">
                <button class="btn-masuk">Masuk</button>
                <button class="btn-daftar">Daftar</button>
            </div>
        </div>
    </div>

    <div class="konten">
        <form action="submit.php" method="POST">
            <a href="Destinasi.php" style="margin-bottom: 20px; font-size:20px;">Back</a>
            <h2>Form Reservasi</h2>
            <table>
                <tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td>:</td>
                    <td><input type="nama" name="nama"></td>
                </tr>
                <td><label for="destinasi">Destinasi</label></td>
                <td>:</td>
                <td>
                    <select name="destinasi" id="destinasi" class="destinasi">
                        <option value="">-</option>
                        <option value="Gunung Padang">Gunung Padang</option>
                        <option value="Curug Cikondang">Curug Cikondang</option>
                        <option value="Cibobas">Cibodas</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><label for="kunjungan">Jenis Kunjungan</label></td>
                    <td>:</td>
                    <td>
                        <select name="kunjungan" id="kunjungan" class="kunjungan">
                            <option value="">-</option>
                            <option value="Umum">Umum</option>
                            <option value="Camping">Camping</option>
                            <option value="Pendakian">Pendakian</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="tgl_kunjungan">Tanggal Kunjungan</label></td>
                    <td>:</td>
                    <td><input type="date" name="tgl_kunjungan"></td>
                </tr>
                <tr>
                    <td><label for="jml_pengunjung">Jumlah Pengunjung</label></td>
                    <td>:</td>
                    <td><input type="number" name="jml_pengunjung"></td>
                </tr>

                <tr>
                    <td><label for="kategori_pengunjung">Kategori Pengunjung</label></td>
                    <td>:</td>
                    <td>
                        <select name="kategori_pengunjung" id="kategori_pengunjung" class="kategori_pengunjung">
                            <option value="">-</option>
                            <option value="Umum">Umum</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-submit">Pesan</button>
            <button type="reset" class="btn btn-reset">Reset</button>
        </form>
    </div>
</body>

</html>
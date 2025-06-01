<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="picture/logo.png" alt="">
            <h2>Cagar Cianjur</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="Pengunjung/detailDestinasi.php">Destinasi Wisata</a></li>
                <li><a href="#">Tiket & Tarif</a></li>
                <li><a href="Pengunjung/Galeri.php">Galeri</a></li>
                <li><a href="#">Artikel & Edukasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div class="btn">
                <button class="btn-masuk">Masuk</button>
                <button class="btn-daftar">Daftar</button>
            </div>
        </div>

    </div>

    <div class="content">
        <div class="beranda">
            <img src="picture/taman-bunga.jpeg" alt="">
        </div>
        <div class="destinasi-unggulan">
            <h3>Destinasi Unggulan</h3>
            <div class="isi-konten">
                <div class="box-destinasi">
                    <img src="picture/gunung padang.jpg" alt="">
                    <h3>Gunung padang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                    <button>Detail</button>
                </div>

                <div class="box-destinasi">
                    <img src="picture/curug.webp" alt="">
                    <h3>Curug Cikondang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                    <button>Detail</button>
                </div>

                <div class="box-destinasi">
                    <img src="picture/cibodas.jpg" alt="">
                    <h3>cibodas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                    <button>Detail</button>
                </div>
            </div>
            <button style="width: 150px;">detail destinasi</button>
        </div>
        <hr>
        <div class="tiket-tarif">
            <h3>Kategori Tiket Umum -- Berlaku untuk sebagian besar destinasi:</h3>
            <table>
                <tr>
                    <td>Umum(WNI)</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td>Rp10.000 – Rp15.000</td>
                </tr>
                <tr>
                    <td>Pelajar</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td>Rp5.000 – Rp7.500 </td>
                </tr>
                <tr>
                    <td>WNA</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td>Rp100.000 – Rp150.000</td>
                </tr>
                <tr>
                    <td>Pendakian</td>
                    <td>&nbsp; : &nbsp;</td>
                    <td>Rp30.000–40.000/hari </td>
                </tr>
                <tr>
                    <td>Camping </td>
                    <td>&nbsp; : &nbsp;</td>
                    <td>Rp20.000–25.000/malam</td>
                </tr>
            </table>
            <button style="width: 200px;">Detail Tarif Per Destinasi</button>
        </div>
        <hr>
        <div class="galeri-mini" style="width: 100%;">
            <h3>Galeri Mini</h3>
            <div class="isi-konten">
                <img src="picture/cibodas.jpg" alt="">
                <img src="picture/gunung padang.jpg" alt="">
                <img src="picture/curug.webp" alt="">
                <img src="picture/cibodas.jpg" alt="">
                <img src="picture/gunung padang.jpg" alt="">
                <img src="picture/curug.webp" alt="">
                <img src="picture/cibodas.jpg" alt="">
                <img src="picture/gunung padang.jpg" alt="">
                <img src="picture/curug.webp" alt="">
            </div>
            <button style="width: 200px;">Lihat lebih banyak gambar...</button>
        </div>
    </div>

    <div class="footer">
        <h3>Kontak Petugas</h3>
        <div class="isi-footer">
            <div class="box-kontak">
                <h5>WhatsApp Petugas Cianjur Selatan:    </h5>
                <p>+62 812-3456-7890 (Pak Dedi)</p>
            </div>

            <div class="box-kontak">
                <h5>WhatsApp Petugas Kawasan Gunung Gede:  </h5>
                <p>+62 813-4567-8901 (Bu Rina)</p>
            </div>
        </div>
    </div>
</body>

</html>
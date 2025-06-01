<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .konten, .footer {
            margin-top: 70px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        input{
            font-size: 15px;
            width: 25%;
            padding: 5px 18px;
        }
        .konten img {
            width: 250px;
            height: 150px;
        }

        .konten .isi-konten {
            display: flex;
            flex-direction: row;
            gap: 15px;
            flex-wrap: wrap;
        }

        .box-destinasi {
            box-shadow: 1px 1px 5px rgb(194, 193, 193);
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-radius: 10px;
            width: 370px;
        }

        .box-destinasi img {
            margin: auto;
        }

        .konten .button {
            padding: 10px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            background-color: #2e7d32;
            text-align: center;
            text-decoration: none;
        }

        .footer .isi-footer {
            display: flex;
            gap: 10px;
        }

        .footer {
            background-color: rgb(70, 50, 37);
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
                <li><a href="../LandingPage.php">Beranda</a></li>
                <li><a href="#">Destinasi Wisata</a></li>
                <li><a href="Galeri.php">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div class="btn">
                 <button onclick="window.location.href='../LoginForm.php'" class="btn-masuk">Masuk</button>
                <button onclick="window.location.href='../DaftarForm.php'" class="btn-daftar">Daftar</button>
            </div>
        </div>
    </div>

    <div class="konten">
        <h3>Destinasi Wisata</h3>

        <div class="cari">
            <input type="text">
            <a href="" class="button">Cari</a>
        </div>
        <div class="isi-konten">
            <div class="box-destinasi">
                <img src="../picture/gunung padang.jpg" alt="">
                <h3>Gunung padang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>
            <div class="box-destinasi">
                <img src="../picture/curug.webp" alt="">
                <h3>Curug Cikondang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>

            <div class="box-destinasi">
                <img src="../picture/cibodas.jpg" alt="">
                <h3>cibodas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>
            <div class="box-destinasi">
                <img src="../picture/gunung padang.jpg" alt="">
                <h3>Gunung padang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>
            <div class="box-destinasi">
                <img src="../picture/curug.webp" alt="">
                <h3>Curug Cikondang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>

            <div class="box-destinasi">
                <img src="../picture/cibodas.jpg" alt="">
                <h3>cibodas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, eligendi ad reprehenderit provident delectus praesentium facere nihil eveniet ut deleniti omnis voluptates laudantium culpa magni recusandae veritatis saepe quos necessitatibus!</p>
                <a class="button" href="Destinasi.php">Detail</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <h3>Kontak Petugas</h3>
        <div class="isi-footer">
            <div class="box-kontak">
                <h5>WhatsApp Petugas Cianjur Selatan: </h5>
                <p>+62 812-3456-7890 (Pak Dedi)</p>
            </div>

            <div class="box-kontak">
                <h5>WhatsApp Petugas Kawasan Gunung Gede: </h5>
                <p>+62 813-4567-8901 (Bu Rina)</p>
            </div>
        </div>
    </div>
</body>

</html>
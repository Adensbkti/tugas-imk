<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curug</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .konten{
            margin-top: 70px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 25px;
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

        .deskripsi-konten img{
            width: 500px;
        }

        .deskripsi-konten{
            display: flex;
            flex-direction: column;
            gap: 20px;
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
                <li><a href="detailDestinasi.php">Destinasi Wisata</a></li>
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
        <h2>Curug Cikondang</h2>

        <div class="deskripsi-konten">
            <img src="../picture/curug.webp" alt="">
            <div class="deskripsi">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam consectetur natus, vitae, delectus voluptates soluta recusandae cumque fuga, neque laborum non blanditiis velit possimus? Similique aspernatur labore omnis nihil tempore.  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eum ab rerum illum recusandae incidunt mollitia reprehenderit, id pariatur ipsam nisi neque voluptas voluptates aliquam velit quia at exercitationem commodi!</p>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatum! Rerum impedit adipisci necessitatibus explicabo sint quidem ut suscipit expedita nobis. Non nihil corrupti labore, vitae cupiditate quasi dignissimos. Enim? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, praesentium quae earum libero molestiae sequi in rerum asperiores maiores amet porro doloribus consequuntur, ratione nesciunt ab corporis provident, sapiente et?</p>
            </div>
            
        </div>

        <div class="lokasi">
            <h3>Lokasi :</h3>
            <p>Desa Sukadana, Kecamatan Campaka, Cianjur, Jawa Barat</p>
            
        </div>
        <div class="jam">
            <h3>Jam Operasional : </h3>
            <p>Setiap hari pukul 07.00 - 17.00</p>
        </div>
        <div class="fasilitas">
            <h3>Fasilitas</h3>
            <ul>
                <li>Area Parkir Motor Mobil</li>
                <li>Musola & Toilet</li>
                <li>Gazebo</li>
                <li>Warung</li>
            </ul>
        </div>

        <div class="detail-tiket">
            <h3>Harga Tiket Masuk</h3>
            <ul>
                <li>Dewasa : Rp 10.000</li>
                <li>Anak-Anak : Rp 5.000</li>
            </ul>
        </div>

        <a class="button" href="Reservasi.php" style="width: 200px;">Pesan Tiket</a>
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
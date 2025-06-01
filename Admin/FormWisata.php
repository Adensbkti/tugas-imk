<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Wisata</title>
    <style>
        .box-tambah{
            width: 100%;
            max-width: 500px;
            margin: auto;
            margin-top: 30px;
            
        }

        .form-tambah{
            display: flex;
            flex-direction: column;
            gap: 10px;
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


        .button {
            padding: 10px;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-add {
            background-color: #5cb85c;
            color: white;
            margin-bottom: 15px;
        }

        .btn-reset{
            background-color: rgb(52, 98, 225);
            color: white;
            margin-bottom: 15px;
        }

    </style>
</head>

<body>
    <div class="box-tambah">
        <div class="form-tambah">
            <h2 class="form-title">Form Tambah / Edit Destinasi Wisata</h2>
            <a href="KelolaWisata.php" style="margin-bottom: 20px; font-size:20px;">Back</a>
            <form>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td><label for="nama">Nama Wisata</label></td>
                        <td><input type="text" id="nama" name="nama" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsi_singkat">Deskripsi Singkat</label></td>
                        <td><textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="2" style="width: 100%;"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsi_lengkap">Deskripsi Lengkap</label></td>
                        <td><textarea id="deskripsi_lengkap" name="deskripsi_lengkap" rows="4" style="width: 100%;"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="lokasi">Lokasi / Alamat</label></td>
                        <td><input type="text" id="lokasi" name="lokasi" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <td><label for="kategori">Kategori</label></td>
                        <td>
                            <select id="kategori" name="kategori" style="width: 100%;">
                                <option value="">-- Pilih --</option>
                                <option value="Pendakian">Pendakian</option>
                                <option value="Air Terjun">Air Terjun</option>
                                <option value="Edukasi">Edukasi</option>
                                <option value="Camping">Camping</option>
                                <option value="Taman">Taman</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="foto_utama">Foto Utama</label></td>
                        <td><input type="file" id="foto_utama" name="foto_utama"></td>
                    </tr>
                    <tr>
                        <td><label for="galeri">Galeri Foto</label></td>
                        <td><input type="file" id="galeri" name="galeri[]" multiple></td>
                    </tr>
                    <tr>
                        <td><label for="fasilitas">Fasilitas yang Tersedia</label></td>
                        <td><input type="text" id="fasilitas" name="fasilitas" style="width: 100%;" placeholder="Misal: Toilet, Mushola, Parkir"></td>
                    </tr>
                    <tr>
                        <td><label for="jam_operasional">Jam Operasional</label></td>
                        <td><input type="text" id="jam_operasional" name="jam_operasional" style="width: 100%;" placeholder="Contoh: 07.00 - 17.00"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;">
                            <button type="submit" class="button btn-add">Simpan</button>
                            <button type="reset" class="button btn-reset">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>
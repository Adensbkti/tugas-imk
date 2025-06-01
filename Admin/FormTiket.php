<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket</title>
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
            <h2>Form Tambah / Edit Tarif Tiket</h2>
            <a href="TiketTarif.php" style="margin-bottom: 20px; font-size:20px;">Back</a>
            <form>
                <table style="width:100%; border-spacing: 10px;">
                    <tr>
                        <td><label for="nama_wisata">Nama Wisata</label></td>
                        <td>
                            <select id="nama_wisata" name="nama_wisata">
                                <option value="">-- Pilih Wisata --</option>
                                <option value="Gunung Gede">Gunung Gede</option>
                                <option value="Curug Cibeureum">Curug Cibeureum</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="kategori">Kategori Tiket</label></td>
                        <td>
                            <select id="kategori" name="kategori">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Umum">Umum</option>
                                <option value="Pelajar">Pelajar</option>
                                <option value="WNA">WNA</option>
                                <option value="Pendaki">Pendaki</option>
                                <option value="Camping">Camping</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="hari">Hari Berlaku</label></td>
                        <td>
                            <select id="hari" name="hari">
                                <option value="">-- Pilih Hari --</option>
                                <option value="Hari Biasa">Hari Biasa</option>
                                <option value="Akhir Pekan">Akhir Pekan</option>
                                <option value="Hari Libur Nasional">Hari Libur Nasional</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="harga">Harga Tiket</label></td>
                        <td><input type="number" id="harga" name="harga" placeholder="Contoh: 20000"></td>
                    </tr>
                    <tr>
                        <td><label for="aktif">Status Aktif</label></td>
                        <td>
                            <select id="aktif" name="aktif">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </td>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Petugas</title>
    <style>
        .box-tambah {
            width: 100%;
            max-width: 500px;
            margin: auto;
            margin-top: 30px;

        }

        .form-tambah {
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

        .btn-reset {
            background-color: rgb(52, 98, 225);
            color: white;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="box-tambah">
        <div class="form-tambah">
            <h2>Form Tambah / Edit Petugas</h2>
            <a href="Petugas.php" style="margin-bottom: 20px; font-size:20px;">Back</a>
            <form>
                <table>
                    <tr>
                        <td><label for="nama">Nama Lengkap</label></td>
                        <td><input type="text" id="nama" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password (Default)</label></td>
                        <td><input type="text" id="password" name="password" placeholder="Atau akan digenerate otomatis"></td>
                    </tr>
                    <tr>
                        <td><label for="kontak">Email / Nomor WA</label></td>
                        <td><input type="text" id="kontak" name="kontak"></td>
                    </tr>
                    <tr>
                        <td><label for="destinasi">Destinasi yang Dikelola</label></td>
                        <td>
                            <select id="destinasi" name="destinasi">
                                <option value="">-- Pilih Destinasi --</option>
                                <option>Gunung Gede</option>
                                <option>Curug Cibeureum</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="status">Status Akun</label></td>
                        <td>
                            <select id="status" name="status">
                                <option>Aktif</option>
                                <option>Nonaktif</option>
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
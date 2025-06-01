<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_SESSION["akun"][$username]) && $_SESSION["akun"][$username] === $password) {
        $_SESSION["login"] = $username;
        header("Location: LandingPage.php"); 
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: rgb(70, 50, 37);
        font-family: Arial, Helvetica, sans-serif;

        /* Tambahkan ini untuk center vertikal dan horizontal */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* full viewport height */
    }

    * {
        padding: 0px;
        margin: 0px;
    }

    .box-login {
        width: 100%;
        max-width: 600px;
        display: flex;
        gap: 10px;
        border-radius: 15px;
        box-shadow: 1px 1px 5px rgb(194, 193, 193);
        text-align: center;
        padding: 15px;
        background-color: white;
    }

    .form-login {
        width: 300px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .box-login img {
        width: 300px;
        border-radius: 10px;
    }

    .box-login h1 {
        margin: 0;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="input"],
    input[type="password"] {
        width: 100%;
        padding: 7px;
        font-size: 14px;
        box-sizing: border-box;
        border: 1px solid #444;
        border-radius: 5px;
    }

    button {
        padding: 12px;
        font-size: 14px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #2E7D32;
    }
</style>


<body>
    <div class="box-login">
        <img src="picture/Cagar Cianjur.png" alt="">
        <div class="form-login">
            <h1>Masuk ke akun anda</h1>
            <form method="POST">
                <div>
                    <label for="username">Username </label>
                    <input type="input" name="username" id="username" placeholder="username" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required>
                </div>

                <button type="submit" name="login">Masuk</button>
                <p class="mt-3">Belum punya akun? <a href="DaftarForm.php">Daftar di sini</a></p>
            </form>
        </div>
    </div>
</body>

</html>
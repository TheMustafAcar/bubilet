<?php
include("connect.php");
$email = $password = $Err="";
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $cekme = "SELECT * FROM users WHERE eposta= $email";
    $query = mysqli_query($connect, $cekme);

    if ($query) {
        $kullanicibilgisi = mysqli_fetch_assoc($query);

        if ($kullanicibilgisi) {
            $hash = $kullanicibilgisi["sifre"];

            if ($password==$hash) {
                $_SESSION["id"] = $kullanicibilgisi["id"];
                $_SESSION["ad"] = $kullanicibilgisi["ad"];
                $_SESSION["soyad"] = $kullanicibilgisi["soyad"];
                header("Location: index.php");
                exit();
            } else {
                $Err= "Şifre yanlış!";
            }
        } else {
            $Err= "Kullanıcı bulunamadı!";
        }
    } else {
        $Err= "Sorgu hatası: " . mysqli_error($connect);
    }
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUBilet Hesabına Giriş Yap</title>
    <p><?php echo $Err ?></p>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <form method = "post">
        <h2>BUBilet'e Giriş Yap</h2>

        <label for="email">E-Posta:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="submit" value="Giriş Yap" require>
    </form>

</body>
</html>
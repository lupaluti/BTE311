<?php
$conn = new mysqli("localhost", "root", "", "bte311yeni", 3307);
if ($conn->connect_error) {
    die("Baglanti hatasi");
}

if (isset($_POST["ekle"])) {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];

    $sql = "INSERT INTO myguests (firstname, lastname, email)
            VALUES ('$ad', '$soyad', '$email')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VTYS Veri Girme</title>
</head>

    <style>
        body {
            background: #f2ffe6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px 0;
            color: #222;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 90%;
            max-width: 850px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            border: 2px solid #356600;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            text-align: center;
        }

        h3 {
            color: #408000;
            margin-bottom: 25px;
            font-size: 30px;
        }

        form {
            margin-bottom: 30px;
            font-size: 18px;
            color: #204000ff;
        }

        input[type="number"] {
            padding: 8px;
            width: 120px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1.5px solid #356600;
            background: #d9ebc5;
        }

        input[type="submit"] {
            background: #408000;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #2c5c00;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1.5px solid #356600;
            padding: 12px 18px;
            background: #d9ebc5;
            border-radius: 4px;
            font-size: 18px;
        }

        input[type="text"],
            input[type="email"] {
            padding: 8px;
            width: 250px;
            border-radius: 6px;
            border: 1.5px solid #356600;
            background: #d9ebc5;
        }

        .btn {
            background: #408000;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
        }

        .btn:hover {
            background: #2c5c00;
        }

        label{
            font-weight: bold;
            color: #356600;
        }

    </style>

<body>
<div class="container">
<h3>Kişi Ekle</h3>
<form method="post">
    <label>Ad:</labels><br> <input type="text" name="ad"><br><br>
    <label>Soyad:</labels><br> <input type="text" name="soyad"><br><br>
    <label>Email:</labels><br> <input type="email" name="email"><br><br>
    <input type="submit" name="ekle" value="Kaydet" class="btn">
</form>
<div>
</body>
</html>

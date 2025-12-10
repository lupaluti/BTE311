<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinamik Tablo</title>

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

        h1 {
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

    </style>

</head>
<body>

<div class="container">

    <h1>Tablo Oluşturma Aracı</h1>

    <form method="post">
        Satır Sayısı: <br>
        <input type="number" name="satir" required><br><br>

        Sütun Sayısı: <br>
        <input type="number" name="sutun" required><br><br>

        <input type="submit" value="Tabloyu Oluştur">
    </form>

    <hr style="border: 1.3px solid #356600;">

    <?php
    if ($_POST) {
        $satir_sayisi = $_POST['satir'];
        $sutun_sayisi = $_POST['sutun'];
        
        echo "<table>"; 

        for ($i = 0; $i < $satir_sayisi; $i++) {
            echo "<tr>";
            
            for ($j = 0; $j < $sutun_sayisi; $j++) {
                $rastgele_sayi = rand(1, 100);
                echo "<td>$rastgele_sayi</td>";
            }
            echo "</tr>"; 
        }
        echo "</table>";
    }
    ?>

</div>

</body>
</html>

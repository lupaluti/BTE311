<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-100 Arası Tek Sayılar</title>

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

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            border: 1.5px solid #356600;
            padding: 12px 18px;
            font-size: 18px;
            background: #d9ebc5;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>1 - 100 Arası Tek Sayılar</h1>

    <table>
        <tr>
            <?php
            $count = 0;

            for ($i = 1; $i <= 100; $i += 2) {
                echo "<td>$i</td>";
                $count++;

                if ($count % 5 == 0) {
                    echo "</tr><tr>";
                }
            }
            ?>
        </tr>
    </table>

</div>

</body>
</html>

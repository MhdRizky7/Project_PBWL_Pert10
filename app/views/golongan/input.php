<?php
$user_id = $_SESSION['user']["user_id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Golongan</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 20px;
            font: italic 40px "Fira Sans", serif;
            font-weight: bold;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        table {
            width: 100%;
            margin-top: 10px;
            margin-right: auto;
            margin-left: auto;
            position: relative;
            top: -20vh;
            left: 15vh;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table td {
            padding: 12px;
            border: 1px solid #cccccc;
        }

        table input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        table input[type="submit"] {
            background-color: #1a6ed8;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table input[type="submit"]:hover {
            background-color: #1e7ff5;
        }
    </style>
</head>

<body>

    <h2> Input Golongan</h2>

    <form action="<?php echo URL; ?>/golongan/save" method="post">
        <table>
            <tr>
                <td>KODE</td>
                <td>
                    <input type="text" name="gol_kode" required value="<?php echo $data['getKodeGo']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="gol_nama" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_save" value="SAVE"></td>
            </tr>
        </table>
    </form>

</body>

</html>

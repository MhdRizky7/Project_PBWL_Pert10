<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Golongan</title>

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

    <h2>EDIT GOLONGAN</h2>

    <form action="<?php echo URL; ?>/golongan/update" method="post">
        <input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
        <table>
            <tr>
                <td>KODE</td>
                <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>" required readonly></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_update" value="UPDATE"></td>
            </tr>
        </table>
    </form>

</body>

</html>

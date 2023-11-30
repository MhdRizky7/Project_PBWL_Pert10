<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>

    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    margin: 0; /* Menghapus margin body untuk menghindari margin default */
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
    margin: 20px auto; /* Memberikan margin pada form */
}

table {
    width: 100%;
    margin-top: 10px; /* Mengurangi margin-top agar tabel lebih dekat dengan judul */
    margin-right: auto; /* Memposisikan tabel ke kanan */
    margin-left: auto; /* Memposisikan tabel ke kiri */
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

table {
    position: relative;
            top: -20vh;
            left: 15vh;
}

table td {
    padding: 12px;
    border: 1px solid #cccccc;
}

table input[type="email"],
table input[type="password"],
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

    <h2>INPUT USER</h2>

    <form action="<?php echo URL; ?>/users/save" method="post">
        <table>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td><input type="text" name="hp" required></td>
            </tr>
            <tr>
                <td>KODE POS</td>
                <td><input type="text" name="pos" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_save" value="SAVE"></td>
            </tr>
        </table>
    </form>

</body>

</html>

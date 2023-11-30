<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login iKy</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px; /* Diperbesar lebar container */
            width: 100%;
        }

        .shadow p-5 {
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .rounded {
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 shadow p-5 rounded"> <!-- Diperbesar lebar konten -->
                <h2>Login Sistem</h2>
                <form action="<?php echo URL; ?>/login/proses" method="post">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
                    <div class="alert alert-danger mt-3">
                        Login tidak ditemukan
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>

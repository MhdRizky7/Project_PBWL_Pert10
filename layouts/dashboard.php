<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">

    <title> System PLN | PBWL Project10</title>
    <link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,600&display=swap">


    <script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>
    <script src="<?php echo AST; ?>/jquery/jquery.min.js"></script>

  
</head>

<body>



    <input type="checkbox" name="MenuToggle" id="MenuToggle" class="toggle__icon">
    <main class="right">

        <label for="MenuToggle" class="toggle__icon">
            <span class="line line1"></span>
            <span class="line line3"></span>
            <span class="line line2"></span>
        </label>
        <header class="hiders">
            <img src="<?php echo AST; ?>/img/green-power.png" class="brand" style="margin-top: 1rem;">
            <?php if(isset($_SESSION['user_full_name'])): ?>
            <div class="user"><?php $_SESSION['login']; ?></div>
            <?php endif; ?>
            <a class="tulog">iKy PLN</a>
        </header>
    </main>
    
    <aside class="sidebar">
        <nav class="napbar">
            
            <ul>
                <li>
                    <a class="itemhom" href="<?php echo URL; ?>/dashboard">
                        <img class="icon" src="<?php echo AST; ?>/img/dashboard.png" alt=""> Home
                    </a>
                </li>
                <li>
                    <a class="itemus" href="<?php echo URL; ?>/users">
                        <img class="icon" src="<?php echo AST; ?>/img/user.png" alt=""> Users
                    </a>
                </li>
                <li>
                    <a class="itemgol" href="<?php echo URL; ?>/golongan">
                        <img class="icon" src="<?php echo AST; ?>/img/plugin.png" alt=""> Golongan
                    </a>
                </li>
                <li>
                    <a class="itempel" href="<?php echo URL; ?>/pelanggan">
                        <img class="icon" src="<?php echo AST; ?>/img/group.png" alt=""> Pelanggan
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>/dashboard/logout">
                        <img class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> Logout
                    </a>
                </li>
            </ul>
        </nav>
    </aside>


    <main class="right">
        <div class="content">
            <?php require_once ROOT . "app/views/" . $view . ".php"; ?>
        </div>


        
    </main>
    
    <footer>
        Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mhd Rizky Wibowo
    </footer>
    <script>
        new DataTable('#dtb', {
            info: false,
            ordering: true,
            paging: true
        });
    </script>

</body>

</html>

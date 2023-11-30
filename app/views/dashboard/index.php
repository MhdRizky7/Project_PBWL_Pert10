<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            font-family: 'Raleway', sans-serif; 
            background-color: #f4f4f4;
            margin: 0;
            overflow: hidden;
        }

        .dashboard-container {
            position: relative;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            height: 100vh;
            bottom: 24vh;
        }

        .dashboard-image {
            width: 100vw;
            height: 100vh;
            position: absolute;
            object-fit: cover;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .dashboard-content {
            position: absolute;
            z-index: 1;
            text-align: center;
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        h2 {
            margin-top: 12vw;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }

        .read-more-button {
            margin-top: 20px;
            background-color: #1a6ed8;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .read-more-button:hover {
            background-color: #1e7ff5;
        }

        .dashboard-text {
            margin-top: 20px;
            
            color: #333;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="dashboard-container">
        <img src="<?php echo AST; ?>/img/orangs.png" alt="dashboard" class="dashboard-image">
        <div class="image-overlay"></div>
        <div class="dashboard-content">
            <h2>Welcome to Your Dashboard, PLN Person!</h2>
            <p>Tentang</p>
            <a href="https://github.com/MhdRizky7/Project_PBWL_Pert10.git" class="read-more-button">Read More</a>
            <div class="dashboard-text">
                <p>About PLN Listrik: PLN (Perusahaan Listrik Negara) is the state-owned electricity company in Indonesia, providing electricity services to millions of people. With a commitment to delivering reliable and sustainable energy, PLN plays a crucial role in powering homes, businesses, and communities across the nation.</p>
            </div>
        </div>
    </div>

</body>

</html>

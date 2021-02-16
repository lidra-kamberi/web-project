<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>H Skincare</title>
    <link rel='stylesheet' href='css/main.css'>
</head>


<body>
    <header class='topnav'>
        <a href="index.php">
            <img src='images/logo.png' alt='logo' class='logo'>
        </a>
        <div class='links'>
            <a class='nav-bar' href="index.php">Home</a>
            <a class='nav-bar' href="shop.php">Shop</a>
            <a class='nav-bar' href="about.php">About us</a>
            <a class='nav-bar' href="contact.php">Contact</a>
            <?php session_start();
                if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1):
            ?>
            <a class='nav-bar' href="dashboard/views/products.php">Dashboard</a>
            <?php endif; ?>

            <?php
                if(isset($_SESSION['roli'])):
            ?>
            <a class='nav-bar' href="userLogic/logout.php">Logout</a>
            <?php else: ?>
            <a class='nav-bar' href="log-reg.php">Log in/Register</a>
            <?php endif; ?>
        </div>
    </header>

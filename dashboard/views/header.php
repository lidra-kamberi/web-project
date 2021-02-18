<!DOCTYPE html>
<html>

<head>
    <title>H Skincare</title>
    <link rel='stylesheet' href='../../css/main.css'>
    <link rel='stylesheet' href='../../css/dashboard.css'>

</head>

<body>
    <header class='topnav'>
        <a href="index.php">
            <img src='images/logo.png' alt='logo' class='logo'>
        </a>
        <div class='links'>
            <a class='nav-bar' href="../../index.php">Home</a>
            <a class='nav-bar' href="../../shop.php">Shop</a>
            <a class='nav-bar' href="../../about.php">About us</a>
            <a class='nav-bar' href="../../contact.php">Contact</a>
            

            <?php session_start();
                if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1):
            ?>
            <a class='nav-bar' href="products.php">Dashboard</a>
            <?php endif; ?>

            <?php
                if(isset($_SESSION['roli'])):
            ?>
            <a class='nav-bar' href="../../userLogic/logout.php">Logout</a>
            <?php else: ?>
            <a class='nav-bar' href="../../log-reg.php">Log in/Register</a>
            <?php endif; ?>

    </header>
    <div class="wrapper">
        <div class="sidebar">
            <h2>admin</h2>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="aboutUs.php">About</a></li>
                <li><a href="feedbacks.php">Feedback</a></li>
            </ul> 
        </div>
    </div>
<?php
    include "layout/header.php";
?>
    <link rel='stylesheet' href='css/log-reg.css'>
    <style>
        body{
            background-image: url('images/bg2.jpg');
        }
    </style>
    <main>
        <div class="container">
            <div class="link-container">
                <a id="firstA" href="#">Login</a>
                <a href="#">Register</a>
            </div>
            <form id="mainForm" action="userLogic/loginVerify.php" method="post">
                <div class="login forms form-style">
                    <input type="text" name="username" class="input input-field" placeholder="Username" />
                    <div id="div1"></div><br>
                    <input type="password" name="password" class="input input-field" placeholder="Password" />
                    <div id="div2"></div><br>
                    <input type="submit" name ="login-btn" class="input submit" value="Login" />
                </div>
                <div class="register forms hidden">
                    <input type="text" name="e-mail" class="input input-field" placeholder="E-mail" />
                    <div id="div3"></div><br>
                    <input type="text" name="user" class="input input-field" placeholder="Username" />
                    <div id="div4"></div><br>
                    <input type="password" name="pass" class="input input-field" placeholder="Password" />
                    <div id="div5"></div><br>
                    <input type="password" name="confirmPass" class="input input-field" placeholder="Confirm Password" />
                    <div id="div6"></div><br>
                    <input type="submit" name ="register-btn" class="input submit" value="Register" />
                </div>
            </form>
        </div>

    </main>


    <script src="js/log-reg.js"></script>

</body>


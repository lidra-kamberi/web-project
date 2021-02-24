<?php
    include "layout/header.php";
?>
    <link rel='stylesheet' href='css/contact.css'>
    <style>
        body{
            background-image: url(images/contact1.png);
        }
    </style>
    <main class="content-holder">
        <div class='contact-container'>
            <span>CONTACT US!</span>
            <form action="dashboard/views/fetchFeedback.php" method="post" class="contact__form">
                <input name="name" type="text" class="input" placeholder="First Name and Last Name" />
                <div id="div1"></div><br>
                <input name="email" type="text" class="input" placeholder="Email" />
                <div id="div2"></div><br>
                <textarea name="text" class="input" placeholder="Comment"></textarea>
                <div id="div3"></div><br>
                <input name="submit" type="submit" class="submit" value="SUBMIT" onclick="return(validate())" />
            </form>
        </div>
    </main>

    <script src="js/contact.js"></script>

<?php
    include "layout/footer.php";
?>   
<?php
    include "layout/header.php";
?>
    <main class="content-holder">
        <div class="slider">
            <div class="slider-content active">
                <img src="images/first.jpg" alt="first-img" />
            </div>
            <div class="slider-content not-active">
                <img src="images/second.jpg" alt="second-img" />
            </div>
            <div class="slider-content not-active">
                <img src="images/third.jpg" alt="third-img" />
            </div>
            <div class="slider-content not-active">
                <img src="images/fourth.jpg" alt="fourth-img" />
            </div>

            <a id="prev">&#10094;</a>
            <a id="next">&#10095;</a>

        </div>
    </main>

    <?php
        include "layout/footer.php";
    ?>
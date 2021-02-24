<?php
    include "header.php";
?>

<div class='dashboard-admin-data'>
    <h1>Add Product</h1>
    <form class="mainForm" action="../businessLogic/addProduct.php" method="post" enctype="multipart/form-data">
        <div class="forms form-style">
            <label for="">Title:</label>
            <input type="text" name='title' class="input" placeholder="title..." />
            <label for="">Image:</label>
            <input type="file" name='imageToUpload' id="imageToUpload" class="input" accept="image/png, image/jpeg"/>
            <label for="">Price:</label>
            <input type="text" name='price' class="input" placeholder="price..."  />
            <label for="">Created date:</label>
            <input type="date" name='createdDate' class="input" placeholder="Created date..."  />

            <input id="submit" type="submit" name='add-btn' class="add-button" value="Add this product" />
        </div>
    </form>
</div>
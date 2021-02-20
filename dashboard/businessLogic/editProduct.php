<?php

include_once "../product.php";
include_once "../productController.php";

if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['createdDate'])) {
    $productId = $_POST['id'];
    $title = $_POST['title'];
    
    if ($_FILES['imageToUpload']['tmp_name'] != "") {
        $filename = $_FILES['imageToUpload']['name'];
        $filetype = $_FILES['imageToUpload']['type'];
        if ($filetype == "image/jpeg" || $filetype == "image/png") {
            move_uploaded_file($_FILES['imageToUpload']['tmp_name'], '../../images/'.$filename);
            $filepath = "images/".$filename;
        }
    } else {
        $filepath = $_POST['hiddenValue'];
    }
    

    $price = $_POST['price'];
    $createdDate = $_POST['createdDate'];

    $product = new Product($title, $filepath, $price, $createdDate);
    $productController = new ProductController();
    $productController->editProduct($product, $productId);

    header("Location:../views/products.php");
}
<?php

include_once "../product.php";
include_once "../productController.php";

if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['createdDate'])) {
    $title = $_POST['title'];
    print_r($_FILES);
    $filename = $_FILES['imageToUpload']['name'];
    $filetype = $_FILES['imageToUpload']['type'];
    if ($filetype == "image/jpeg" || $filetype == "image/png") {
        move_uploaded_file($_FILES['imageToUpload']['tmp_name'], '../../images/'.$filename);
        $filepath = "images/".$filename;
    }

    $price = $_POST['price'];
    $createdDate = $_POST['createdDate'];

    $product = new Product($title, $filepath, $price, $createdDate);
    $productController = new ProductController();
    $productController->addProduct($product);

    header("Location:../views/products.php");
}
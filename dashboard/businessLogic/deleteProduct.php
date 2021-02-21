<?php
include_once "../product.php";
include_once "../productController.php";
if(isset($_POST['id']))
{
    $productId = $_POST['id'];
    $productController = new ProductController();
    $productController->deleteProduct($productId);
    header("Location:../views/products.php");
}
?>
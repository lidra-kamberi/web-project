<?php
include "header.php";
include_once '../productController.php';
if (isset($_GET['id'])) 
{
    $productId = $_GET['id'];
    $productController = new ProductController();
    $product = $productController->getProductById($productId);
}
?>
<div class='dashboard-admin-data'>
    <h1>Edit Product</h1>
    <form class="mainForm" action="../businessLogic/editProduct.php" method="post" enctype="multipart/form-data">
        <div class="dashboard__form">
            <input type="text" style="display:none;" value=<?php echo $productId; ?> name="id" />
            <div class="block">
                <label for="">Title:</label>
                <input type="text" name='title' class="input" placeholder="title..." value=<?php echo $product['title']; ?> />
            </div>
            <div class="block">
                <label for="">Image:</label>
                <img class="edit-image" src="../../<?php echo $product['image']; ?>"/>
                <input type="hidden" name="hiddenValue" value="<?php echo $product['image']; ?>" /> 
                <input type="file" name='imageToUpload' id="imageToUpload" class="input" accept="image/png, image/jpeg" />
            </div>
            <div class="block">
                <label for="">Price:</label>
                <input type="text" name='price' class="input" placeholder="price..." value=<?php echo $product['price']; ?> />
            </div>
            <div class="block">
                <label for="">Created date:</label>
                <input type="date" name='createdDate' class="input" placeholder="Created date..." value=<?php echo $product['created_date']; ?> />
            </div>
            <div class="edit-button__wrapper">
                <input id="submit" type="submit" name='edit-btn' class="add-button" value="Edit product" />
            </div>
        </div>
    </form>
</div>
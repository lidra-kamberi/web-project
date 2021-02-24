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
    <h1>Delete Product</h1>
    <form class="mainForm" action="../businessLogic/deleteProduct.php" method="post" enctype="multipart/form-data">
        <div class="dashboard__form">
            <div class="block">
                <input type="text" style="display:none;" value=<?php echo $productId; ?> name="id" />
                <label for="">Title:</label>
                <?php echo $product['title'];?>
                <input type="text" style="display:none;" name='title' class="input" placeholder="title..." value=<?php echo $product['title']; ?> />
            </div>
            <div class="block">
                <label for="">Image:</label>
                <img class="delete-image" src="../../<?php echo $product['image']; ?>"/>
                <input type="hidden" name="hiddenValue" value="<?php echo $product['image']; ?>" /> 
                <input type="file" style="display:none;" name='imageToUpload' id="imageToUpload" class="input" accept="image/png, image/jpeg" />
            </div>
            <div class="block">
                <label for="">Price:</label>
                <?php echo $product['price']; ?>&euro;
                <input type="text" name='price' style="display:none;" class="input" placeholder="price..." value=<?php echo $product['price']; ?> />
            </div>
           <div class="block">
                <label for="">Created date:</label>
                <?php echo $product['created_date']; ?>
                <input type="date" style="display:none;" name='createdDate' class="input" placeholder="Created date..." value=<?php echo $product['created_date']; ?> />
            </div>
            <input id="submit" type="submit" name='delete-btn' class="add-button" value="Delete product" />
        </div>
    </form>
</div>
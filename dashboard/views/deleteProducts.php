<?php
include_once '../productController.php';
if (isset($_GET['id'])) 
{
    $productId = $_GET['id'];
    $productController = new ProductController();
    $product = $productController->getProductById($productId);
}
?>
<div class='container'>
    <h1>Delete Product</h1>
    <form class="mainForm" action="../businessLogic/deleteProduct.php" method="post" enctype="multipart/form-data">
        <div class="login forms form-style">

            <input type="text" style="display:none;" value=<?php echo $productId; ?> name="id" />
            <label for="">Title:</label>
            <?php echo $product['title'];?>
            <input type="text" style="display:none;" name='title' class="input" placeholder="title..." value=<?php echo $product['title']; ?> />
            <label for="">Image:</label>
            <img src="../../<?php echo $product['image']; ?>"/>
            <input type="hidden" name="hiddenValue" value="<?php echo $product['image']; ?>" /> 
            <input type="file" style="display:none;" name='imageToUpload' id="imageToUpload" class="input" accept="image/png, image/jpeg" />
            <label for="">Price:</label>
            <?php echo $product['price']; ?>
            <input type="text" name='price' style="display:none;" class="input" placeholder="price..." value=<?php echo $product['price']; ?> />
            <label for="">Created date:</label>
            <?php echo $product['created_date']; ?>
            <input type="date" style="display:none;" name='createdDate' class="input" placeholder="Created date..." value=<?php echo $product['created_date']; ?> />


            <input id="submit" type="submit" name='delete-btn' class="input submit" value="Delete" />
        </div>
    </form>
</div>
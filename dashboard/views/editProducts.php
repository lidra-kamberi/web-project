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
    <h1>Edit Product</h1>
    <form class="mainForm" action="../businessLogic/editProduct.php" method="post" enctype="multipart/form-data">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $productId; ?> name="id" />
            <label for="">Title:</label>
            <input type="text" name='title' class="input" placeholder="title..." value=<?php echo $product['title']; ?> />
            <label for="">Image:</label>
            <img src="../../<?php echo $product['image']; ?>"/>
            <input type="hidden" name="hiddenValue" value="<?php echo $product['image']; ?>" /> 
            <input type="file" name='imageToUpload' id="imageToUpload" class="input" accept="image/png, image/jpeg" />
            <label for="">Price:</label>
            <input type="text" name='price' class="input" placeholder="price..." value=<?php echo $product['price']; ?> />
            <label for="">Created date:</label>
            <input type="date" name='createdDate' class="input" placeholder="Created date..." value=<?php echo $product['created_date']; ?> />

            <input id="submit" type="submit" name='edit-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>
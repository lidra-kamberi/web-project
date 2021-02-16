<?php
    include "layout/header.php";
    include_once "dashboard/database.php";
    include "dashboard/productController.php";

    $product = new ProductController();
    $products = $product->showAll();
    
?>
    <link rel='stylesheet' href='css/shop.css'>
    <main>
        <div class="title">
            <h1>Our Products</h1>
        </div>
        <div class="wrapper">
        <?php for($i=0; $i<count($products); $i++): ?>
            <div class="item">
                <img src="<?php echo $products[$i]['image']; ?>" alt="item" />
                
                <h2><?php echo $products[$i]['title'];?> </h2>

                <p class="price">Price: <?php echo $products[$i]['price'];?>&euro;</p>

                <button class="add-to-cart" type="button">Add to cart</button>
            </div>
        <?php endfor;?>
        </div>
    </main>

    
<?php
    include "layout/footer.php";
?>    
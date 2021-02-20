<?php
    include "header.php";
    include_once "../productController.php";
        $controller = new ProductController();
        $productList = $controller->showAll();
?>

<div class="dashboard-admin-data">
    <h1>Dashboard</h1>
    <div>
    <div class="product__title">
        <h1>Products list</h1>
        <a href="../views/addProducts.php" class="add-button">Add product</a>
    </div>
        <table>
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td>Created Date</td>
                    <td>Created by</td>
                    <td>Edited by</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($productList as $product){
                ?>

                <tr class="tbody-row">
                    <td class=""><?php echo $product['title']; ?></td>
                    <td><?php echo $product['image']; ?></td>
                    <td><?php echo $product['price']; ?>&euro;</td>
                    <td><?php echo $product['created_date']; ?></td>
                    <td><?php echo $product['created_by']; ?></td>
                    <td><?php echo $product['edited_by']; ?></td>
                    <td><a class="edit-button" href=<?php echo "../views/editProducts.php?id=" . $product['ID'];
                                    ?>>Edit</td>
                    <td><a class="delete-button" href=<?php echo "../views/deleteProducts.php?id=" . $product['ID'];
                                    ?>>Delete</td>
                    </tr>
                
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    include_once 'database.php';

    class ProductController extends DatabaseConfig 
    {

        private $connection;
        private $query;
        
        public function __construct()
        {
            $this->connection = $this->getConnection();
        }

        public function showAll()
        {
            $this->query = "SELECT * FROM products";
            if ($this->connection != NULL) {
                $result = $this->connection->query($this->query);

                $products = $result->fetch_all(MYSQLI_ASSOC);
    
                return $products;
            }
            return NULL;
        }

        public function addProduct(\Product $product)
        {
            $this->validate($product);

            session_start();
            $username = $_SESSION['username'];

            $this->query = "INSERT INTO products(title, image, price, created_date, created_by) VALUES (?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($this->query);
            $statement->bind_param("sssss", $product->getTitle(), $product->getImage(), $product->getPrice(), $product->getCreatedDate(), $username);
            $statement->execute();
        }

        public function validate(\Product $product)
        {
            if(empty($product->title) || empty($product->image) || empty($product->price) || empty($product->createdDate)){
                echo 'All fields must be filled!';
                return 0;
            }

        }

        public function getProductById($productId)
        {
            $this->query = "SELECT * FROM products WHERE ID=$productId";
            $statement = $this->connection->query($this->query);
            $product = $statement->fetch_all(MYSQLI_ASSOC)[0];
            return $product;
        } 

        public function editProduct(\Product $product, $productId)
        {
            $this->validate($product);

            session_start();
            $username = $_SESSION['username'];

            $this->query = "UPDATE products SET title = ?, image = ?, price =? , created_date = ?, edited_by = ? WHERE ID = $productId";
            $statement = $this->connection->prepare($this->query);
            $statement->bind_param("sssss", $product->getTitle(), $product->getImage(), $product->getPrice(), $product->getCreatedDate(), $username);
            $statement->execute();
        }

        public function deleteProduct($productId)
        {
            $this->query = "DELETE FROM products WHERE ID = $productId";
            $statement = $this->connection->prepare($this->query);
            $statement->bind_param("s", $productId);
            $statement->execute();
        }
    }

    // $this->connection->close();
?>
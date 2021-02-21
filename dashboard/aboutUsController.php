<?php

    class AboutUsController extends DatabaseConfig 
    {

        private $connection;
        private $query;

        public function __construct()
        {
            $this->connection = $this->getConnection();
        }

        public function showAll()
        {
            $this->query = "SELECT * FROM aboutus";
            if ($this->connection != NULL) {
                $result = $this->connection->query($this->query);
                $content = $result->fetch_all(MYSQLI_ASSOC);
    
                return $content;
            }
            return NULL;
        }

    }
   

    // $this->connection->close();
?>
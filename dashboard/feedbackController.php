<?php

    include_once 'database.php';

    class FeedbackController extends DatabaseConfig 
    {

        private $connection;
        private $query;

        public function __construct()
        {
            $this->connection = $this->getConnection();
        }

        public function showAll()
        {
            $this->query = "SELECT * FROM contact";
            if ($this->connection != NULL) {
                $result = $this->connection->query($this->query);
                $feedback = $result->fetch_all(MYSQLI_ASSOC);
    
                return $feedback;
            }
            return NULL;
        }

        public function insertFeedback(\Feedback $feedback)
        {
            $this->query = "INSERT INTO contact(name, email, comment) VALUES (?, ?, ?)";
            $statement = $this->connection->prepare($this->query);
            $statement->bind_param("sss", $feedback->getName(), $feedback->getEmail(), $feedback->getComment());
            $statement->execute();
        }

    }
    
   

    // $this->connection->close();
?>
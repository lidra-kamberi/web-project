<?php
    class Feedback
    {
        protected $name;
        protected $email;
        protected $comment;

        function __construct($name, $email, $comment){
            $this->name = $name;
            $this->email = $email;
            $this->comment = $comment;
        }

        function getName() {
            return $this->name;
        }

        function getEmail() {
            return $this->email;
        }

        function getComment() {
            return $this->comment;
        }

    }
?>
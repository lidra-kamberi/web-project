<?php
    class Product
    {
        protected $title;
        protected $image;
        protected $price;
        protected $createdDate;
        protected $createdBy;
        protected $editedBy;

        function __construct($title, $image, $price, $createdDate)
        {
            $this->title = $title;
            $this->image = $image;
            $this->price = $price;
            $this->createdDate = $createdDate;
            $this->createdBy = '';
            $this->editedBy = '';
        }

        function getTitle() {
            return $this->title;
        }

        function getImage() {
            return $this->image;
        }

        function getPrice() {
            return $this->price;
        }
        
        function getCreatedDate() {
            return $this->createdDate;
        }

        function getCreatedBy() {
            return $this->createdBy;
        }

        function getEditedBy() {
            return $this->editedBy;
        }
    }
?>
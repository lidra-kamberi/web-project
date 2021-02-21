<?php
    class About
    {
        protected $mainTitle;
        protected $title;
        protected $text;

        function __construct($mainTitle, $title, $text){
            $this->mainTitle = $mainTitle;
            $this->title = $title;
            $this->text = $text;
        }

        function getMainTitle() {
            return $this->mainTitle;
        }

        function getTitle() {
            return $this->title;
        }

        function getText() {
            return $this->text;
        }

    }
?>
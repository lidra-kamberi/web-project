<?php
   include '../feedbackController.php';
   include '../feedback.php';


   if (isset($_POST['submit'])) 
   {
      $feedback = new FeedbackLogic($_POST);
      $feedback->insertData();
   } else {
      header("Location:../../index.php");
   }

   class FeedbackLogic 
   {

      private $name = "";
      private $email = "";
      private $comment = "";
  
      public function __construct($formData)
      {
          $this->name = $formData['name'];
          $this->email = $formData['email'];
          $this->comment = $formData['text'];
      }  

      public function insertData()
      {
         $feedback = new Feedback($this->name, $this->email, $this->comment);
         $feedbackController = new FeedbackController();
         $feedbackController->insertFeedback($feedback);
         header("Location:../../contact.php");
      }
   }
?>


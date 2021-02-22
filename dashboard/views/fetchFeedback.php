<?php
   // include_once '../database.php';
   include '../feedbackController.php';
   include '../feedback.php';
   // if(isset($_POST['submit']))
   // {    
   //    $name = $_POST['name'];
   //    $email = $_POST['email'];
   //    $comment = $_POST['text'];
   //    $sql = "INSERT INTO contact (name, email, comment)
   //    VALUES ('$name','$email','$comment')";
   //    if (mysqli_query($connection, $sql)) {
   //       echo "New record has been added successfully!";
   //    } else {
   //       echo "Error: " . $sql . ":-" . mysqli_error($connection);
   //    }
   //    mysqli_close($connection);
   // }


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


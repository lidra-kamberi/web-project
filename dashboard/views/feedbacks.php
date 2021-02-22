<?php
    include "header.php";
    include_once "../database.php";
    include_once "../feedbackController.php";
         $feedbackController = new FeedbackController();
         $feedbackList = $feedbackController->showAll();
?>

<div class="dashboard-admin-data">
    <h1>Dashboard</h1>
    <div>
        <h1>Feedback comments</h1>
        <table>
            <thead>
                <tr>
                    <td class="width-150">Name</td>
                    <td class="width-150">Email</td>
                    <td>Comments</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($feedbackList as $feedback){
                ?>

                <tr>
                    <td><?php echo $feedback['name']; ?></td>
                    <td><?php echo $feedback['email']; ?></td>
                    <td><?php echo $feedback['comment']; ?></td>
                    
                
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
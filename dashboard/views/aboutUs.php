<?php
    include "header.php";
    include_once "../database.php";
    include_once "../aboutUsController.php";
        $aboutController = new AboutUsController();
        $aboutList = $aboutController->showAll();
?>

<div class="dashboard-admin-data">
    <h1>Dashboard</h1>
    <div>
        <h1>About us Content</h1>
        <table>
            <thead>
                <tr>
                    <td class="width-150">Main Title</td>
                    <td class="width-150">Title</td>
                    <td>Content</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($aboutList as $content){
                ?>

                <tr>
                    <td><?php echo $content['main_title']; ?></td>
                    <td><?php echo $content['title']; ?></td>
                    <td><?php echo $content['content']; ?></td>
                    
                
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
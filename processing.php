<?php require_once('includes/header.php'); ?>
<?php require_once('includes/classes/VideoUploadData.php'); ?>
<?php require_once('includes/classes/VideoProcessor.php'); ?>
<?php require_once('includes/nav.php'); ?>
<?php require_once('includes/nav.php'); ?>
    <main id="mainSectionContainer" class="main-container-content">
        <div id="mainContentContainer" class="main-container-content__container">
        <?php 
            if(!isset($_POST['UploadButton'])){
                echo "No file has been chosen to be upload.";
                exit();
            }
            // Create file upload data
            $videoUploadData = new VideoUploadData(
                                    $_POST["fileInput"], 
                                    $_POST["titleInput"], 
                                    $_POST["descriptionInput"],
                                    $_POST["privacyInput"],
                                    $_POST["categoryInput"],
                                    "REPLACE-THIS"
                                    );
            // Process video data upload
            $videoProcessor = new VideoProcessor($con);
            $wasSuccessful = $videoProcessor->upload($videoUploadData);
            // Check if upload was successful
        ?>

<?php require_once('includes/footer.php'); ?>
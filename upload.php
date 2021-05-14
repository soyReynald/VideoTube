<?php require_once('includes/classes/VideoDetailsFormProvider.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
                <div class="upload">
                    <?php
                        $formProvider = new VideoDetailsFormProvider($con);
                        echo $formProvider->createUploadForm();
                    ?>
                </div>        
<?php require_once('includes/footer.php'); ?>
<?php require_once('includes/classes/VideoDetailsFormProvider.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
        <main id="mainSectionContainer" class="main-container-content">
            <div id="mainContentContainer" class="main-container-content__container">
                
                <div class="upload">
                    <?php
                        $formProvider = new VideoDetailsFormProvider($con);
                        echo $formProvider->createUploadForm();
                    ?>
                </div>

            </div>
        </main>
        
<?php require_once('includes/footer.php'); ?>
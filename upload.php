<?php require_once('includes/classes/VideoDetailsFormProvider.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php'); ?>
        <main id="mainSectionContainer" class="main-container-content">
            <div id="mainContentContainer" class="main-container-content__container">
                
                <div class="upload">
                    <?php
                        $formProvider = new VideoDetailsFormProvider();
                        echo $formProvider->createUploadForm();

                        $query = $con->prepare("SELECT * FROM categories");
                        $query->execute();

                        while($row = $query->fetch(PDO::FETCH_ASSOC)){
                            echo $row['name'] . "<br/>";
                        }
                    ?>
                </div>

            </div>
        </main>
        
<?php require_once('includes/footer.php'); ?>
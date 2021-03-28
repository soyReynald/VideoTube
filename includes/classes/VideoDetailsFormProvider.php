<?php
class VideoDetailsFormProvider {
    public function createUploadForm(){
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        $descriptionInput = $this->createDescriptionInput();
        $privacyInput = $this->createPrivacyInput();
        return "<form class='form' action='processing.php' method='post'>
                    $fileInput
                    $titleInput
                    $descriptionInput
                    $privacyInput
                </form>
        ";
    }

    private function createFileInput(){
            return "<div class='form-group my-3'>
                <input type='file' name='fileInput' class='form-control-file' id='exampleFormControlFile1' required>
            </div>";
    }

    private function createTitleInput(){
        return "<div class='form-group my-3'>
            <input type='text' name='titleInput' placeholder='Title' class='form-control' required>
        </div>";
    }

    private function createDescriptionInput(){
        return "<div class='form-group my-3'>
            <textarea name='descriptionInput' placeholder='Description' class='form-control' rows='3'></textarea>
        </div>";
    }

    private function createPrivacyInput(){
        return "<div class='form-group my-3'>
        <select class='form-select form-select' aria-label='.form-select example'>
            <option disabled selected>Open this select menu</option>
            <option value='0'>Private</option>
            <option value='1'>Public</option>
        </select>       
        </div>";
    }

}

?>
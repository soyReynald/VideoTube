<?php
class VideoDetailsFormProvider {
    public function createUploadForm(){
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        $descriptionInput = $this->createDescriptionInput();
        return "<form action='processing.php' method='post'>
                    $fileInput
                    $titleInput
                    $descriptionInput
                </form>
        ";
    }

    private function createFileInput(){
            return "<div class='form-group'>
                <input type='file' name='fileInput' class='form-control-file' id='exampleFormControlFile1' required>
            </div>";
    }

    private function createTitleInput(){
        return "<div class='form-group'>
            <input type='text' name='titleInput' placeholder='Title' class='form-control' required>
        </div>";
    }

    private function createDescriptionInput(){
        return "<div class='form-group'>
            <textarea name='descriptionInput' placeholder='Description' class='form-control' rows='3'></textarea>
        </div>";
    }
}

?>
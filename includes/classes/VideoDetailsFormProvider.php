<?php
class VideoDetailsFormProvider {

    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function createUploadForm(){
        $fileInput = $this->createFileInput();
        $titleInput = $this->createTitleInput();
        $descriptionInput = $this->createDescriptionInput();
        $privacyInput = $this->createPrivacyInput();
        $categoriesInput = $this->createCategoriesInput();
        $uploadBtn = $this->createUploadBtn();
        return "<form class='form' action='processing.php' method='post'>
                    $fileInput
                    $titleInput
                    $descriptionInput
                    $privacyInput
                    $categoriesInput
                    $uploadBtn
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

    private function createCategoriesInput(){
        $query = $this->con->prepare("SELECT * FROM categories");
        $query->execute();

        $html = "<div class='form-group my-3'>
        <select class='form-select form-select' aria-label='.form-select example'>";
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $name = $row['name'];
                $id = $row['id'];
                $html .= "<option selected value='$id'>". $name . "</option>";
            }
        $html .= "</select></div>";

        return $html;
    }

    private function createUploadBtn(){
        return "<button name='UploadButton' class='btn btn-primary' type='submit'>Upload</button>";
    }
}

?>
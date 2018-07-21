<?php

class profile extends AppController {

    public function __construct($parent) {

        $this->parent = $parent;

        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"] == 1) {

        }
        else {
            header("Location:/home");
        }
    }

    public function index() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"home"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("profile");

        $this->getView("components/footer");
    }

    public function update() {
        var_dump($_FILES);

        if($_FILES["img"]["name"] != "") {
            $imageFileType = pathinfo("assets/images/".$_FILE["img"]["name"], PATHINFO_EXTENSION);

            if(file_exists("assets/"/$_FILES["img"]["name"])) {
                echo "Sorry. File already exists";
            }
        }
        else {
            if($imgFileType != "jpg" && $imageFileType != "png") {
                echo "File type not allowed";
            }
            else {
                if(move_uploaded_file($FILES["img"]["tmp_name"], "assets/images/".$_FILES["img"]["name"])) {
                    echo "File uploaded.";
                }
                else {
                    echo "Error uploading";
                }
            }
        }
        header("Location:/profile?msg=File Uploaded");
    }

}

?>
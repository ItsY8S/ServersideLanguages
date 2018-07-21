<?php

class Home extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function index() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"home"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("home");

        $this->getView("components/footer");
    }

    public function contact() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"contact"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $random = substr( md5(rand()), 0, 7);

        $this->getView("contact",array("cap"=>$random));

        $this->getView("contact");

        $this->getView("components/footer");
    }

    public function contactRecv() {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"home"));

        if($_POST == $_REQUEST["email"]) {
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
                echo "Email invalid";
                echo "<br><a href='/home/contact'>Click here to go back</a>";
            }
            else {
                echo "Email valid";
            }
        }
        else {
            echo "Invalid captcha";
            echo "<br><a href='/home/contact'>Click here to go back</a>";
        }

        $this->getView("components/navigation", $menu);

        var_dump($_POST["email"]);
        $emailRegex = '/^[a-z0-9_-]{3,15}$/';
        if(!preg_match($emailRegex, $_POST['email'])) {
            echo "Email Valid";
        }
        else {
            echo "Email Invalid";
        }

        $passwordRegex = '/^[a-zA-Z]*$/';
        if(!preg_match($passwordRegex, $_POST['password'])) {
            echo "Invalid password. Letters only.";
        }
        else {
            echo "Password Valid";
        }

        $this->getView("components/body");

        $this->getView("contact");

        $this->getView("components/footer");
    }

    public function ajaxPars() {
        if(@$_REQUEST["email"] == "gri.y8s@gmail.com" && @$_REQUEST["password"] == "pass") {
            echo "welcome";
        }
        else {
            echo "bad login";
        }


    }
    
    // JS Validation

    // Process form
    // Check for message

    // Display Form (VIEW)
}

?>
<?php

class About extends AppController {
    public function __construct($urlPathParts) {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"about"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("about");

        $this->getView("components/footer");
    }
}

?>
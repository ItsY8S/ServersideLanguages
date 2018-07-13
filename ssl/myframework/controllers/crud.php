<?php

class CRUD extends AppController {
    public function __construct($urlPathParts) {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"crud"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("crud");

        $this->getView("components/footer");
    }
}

?>
<?php

class API extends AppController {
    public function __construct($urlPathParts) {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"api"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("api");

        $this->getView("components/footer");
    }
}

?>
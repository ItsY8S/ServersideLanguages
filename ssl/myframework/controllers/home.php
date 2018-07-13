<?php

class Home extends AppController {
    public function __construct($urlPathParts) {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud");

        $this->getView("components/header", array("pagename"=>"home"));

        $this->getView("components/navigation", $menu);

        $this->getView("components/body");

        $this->getView("home");

        $this->getView("components/footer");
    }
}

?>
<?php

class CRUD extends AppController {
    public function __construct($urlPathParts) {

        $menu = array("home" => "home", "api" => "api", "crud" => "crud");

        $this->getView("header", array("pagename"=>"crud"));

        $this->getView("navigation", $menu);

        $this->getView("body");
    }
}

?>
<?php

class Controller extends AppController {

    public function __construct($parent) {

        $this->parent = $parent;

        $menu = array("home" => "home", "api" => "api");

        $this->getView("header", array("pagename"=>"welcome"));

        $this->getView("navigation", $menu);

        $this->getView("body");
    }

    public function t2018() {

    }
}

?>
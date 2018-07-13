<?php

    class Welcome extends AppController {

        public function __construct($urlPathParts) {
            $menu = array("home" => "home", "api" => "api", "crud" => "crud");

            $this->getView("header", array("pagename"=>"welcome"));

            $this->getView("navigation", $menu);

            $this->getView("body");
        }
    }

?>
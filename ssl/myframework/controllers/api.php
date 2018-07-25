<?php

class API extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;
        $this->showAPI();
    }

    // Call this method upon going to the page
    // Defining views and setting the data variable
    public function showAPI() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");
        $this->getView("components/header", array("pagename"=>"api"));
        $this->getView("components/navigation", $menu);
        $this->getView("components/body");
        $data = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
        $this->getView("api", $data);
        $this->getView("components/footer");
    }
}

?>
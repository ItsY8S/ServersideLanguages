<?php

class About extends AppController {
    public function __construct($parent) {

        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){
            $this->parent = $parent;

            $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");
    
            $this->getView("components/header", array("pagename"=>"about"));
    
            $this->getView("components/navigation", $menu);
    
            $this->getView("components/body");
    
            $this->getView("contact");
            // add comma and second argument above
    
            $this->getView("components/footer");
        }else{
        
        header("Location:/home");
        
        }

        
    }
}

?>
<?php

class CRUD extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;

        if (@!$_SESSION["loggedin"] && @$_SESSION["loggedin"]!=1) {
            header("location:/home");
        }
    }

    public function index() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"crud"));

        $this->getView("components/navigation", $menu);

        $data["fruits"] = $this->parent->getModel("fruits")->select("select * from fruit_table");
        
        $this->getView("crud", $data);

        $this->getView("components/footer");
    }

    public function addform() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");

        $this->getView("components/header", array("pagename"=>"crud"));

        $this->getView("components/navigation", $menu);

        $this->getView("addform");

        $this->getView("components/footer");
    }

    public function addaction() {
        var_dump($_REQUEST);
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values(:fruitname)",
        array(":fruitname" => $_REQUEST["fruitname"]));
        header("location:/crud");
    }

    //select where id = SOMETHING from URL PATH PARTS

}

?>
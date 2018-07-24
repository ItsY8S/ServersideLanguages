<?php

class About extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;
        $this->showList();
    }

    public function showList() {
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){
            $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
            $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");
            $this->getView("components/header", array("pagename"=>"about"));
            $this->getView("components/navigation", $menu);
            $this->getView("components/body");
            $this->getView("about", $data);
            $this->getView("components/footer");
        }
        else {
            header("Location:/home");
        }
    }

    public function showAddForm() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");
    
        $this->getView("components/header", array("pagename"=>"about"));  
        $this->getView("components/navigation", $menu); 
        $this->getView("components/body");
        $this->getView("addform");
        $this->getView("components/footer");
    }

    public function addAction() {
        var_dump($_REQUEST);
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }

    public function showUpdateForm() {
        $menu = array("home" => "home", "api" => "api", "crud" => "crud", "about" => "about");
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table where id = :id", array(":id" => $this->parent->urlPathParts[2]));
        var_dump($data);
        var_dump($this->parent->urlPathParts[2]);
        $this->getView("components/header", array("pagename"=>"about"));  
        $this->getView("components/navigation", $menu); 
        $this->getView("components/body");
        $this->getView("updateform", $data);
        $this->getView("components/footer");
    }

    public function updateAction() {
        var_dump($_REQUEST['fruit']);
        var_dump($_REQUEST['id']);
        $data = $this->parent->getModel('fruits')->update('update fruit_table set name = :name where id = :id', array(":name" => $_REQUEST['fruit'], ":id" => $_REQUEST['id']));
        header("location:/about");
    }

    public function deleteAction() {
        var_dump($_REQUEST);
        var_dump($this->parent->urlPathParts[2]);
        $this->parent->getModel("fruits")->delete("delete from fruit_table where id = :id", array(":id" => $this->parent->urlPathParts[2]));
        header("location:/about");
    }
}

?>
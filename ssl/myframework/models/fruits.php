<?php

class fruits {
    public function __construct($parent) {
     
        $this->db = $parent->db;
        //$this->db = $parent->db;
    }

    public function select($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
        $data = $this->sql->fetchAll();
        return $data;
    }

    public function add($sql, $value=array()) {
        $this->sql = $this->db->prepare($sql);
        $result = $this->sql->execute($value);
    }

    public function delete() {
        echo "Deleting";
    }

    public function update() {
        echo "Updating";
    }
}

?> 
<?php

class auth extends AppController {

    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function login() {



        // $file = fopen("login.txt", "r") or die("Unable to open file!");
        // $fileText = fgets($file);
        // for($i = 0; $i < count($line); $i++) {

        // }
        // $result = explode("|",$fileText);
        // $email = "Mike@aol.com";
        // $password = "password";
        // var_dump($result);

        $handle = fopen("login.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // echo $line;
                $result = explode("|",$line);
                echo $result[0];
                if($result[0] === $_REQUEST["email"] && $result[1] === $_REQUEST["password"]) {
                    echo "Working";
                    $_SESSION["loggedin"] = 1;
                    header("location:/home");
                }
                else {
                    echo "Not logged in.";
                }
                
            }

            fclose($handle);
        }

        // if($_REQUEST["email"] && $_REQUEST["password"]) {

            // $data = $this->parent->getModel("users")->select(
            //     "select * from users where email = :email and password = :password",
            //     array(":email"=>$_REQUEST["email"],":password"=>sha1($_REQUEST["password"])));

            // if($data) {
            //     $_SESSION["loggedin"] = 1;
            //     header("location:/home");
            // }
            // else {
            //     header("location:/home?msg=Bad Login");
            // }

            // if($_REQUEST["email"] == "gri.y8s@gmail.com" && $_REQUEST["password"] == "pass") {
            //     $_SESSION["loggedin"] = 1;
            //     // header("Location:/home");
            // }
            // else {
            //     // header("Location:/home?msg=Bad Login");
            // }
            // for($i = 0; $i < count($result); $i++) {
            //     if($result[$i] === $email && $result[$i+1] === $password) {
            //         $_SESSION["loggedin"] = 1;
            //         header("Location:/home");
            //     }
            // }
            
        // }
        // else {
        //     // header("Location:/home?msg=Bad Login");
        // }
    }

    public function logout() {
        session_destroy();
        header("Location:/home");
    }
}

?>
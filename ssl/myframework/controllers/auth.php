<?php

class auth extends AppController {

    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function login() {
        // $handle = fopen("login.txt", "r");
        // if ($handle) {
        //     while (($line = fgets($handle)) !== false) {
        //         // echo $line;
        //         $result = explode("|",$line);
        //         echo $result[0];
        //         if($result[0] === $_REQUEST["email"] && $result[1] === $_REQUEST["password"]) {
        //             echo "Working";
        //             $_SESSION["loggedin"] = 1;
        //             header("location:/home");
        //         }
        //         else {
        //             echo "Not logged in.";
        //         }
                
        //     }

        //     fclose($handle);
        // }

        if($_REQUEST["email"] && $_REQUEST["password"]) {

            $data = $this->parent->getModel("users")->select(
                "select * from users where email = :email and password = :password",
                array(":email"=>$_REQUEST["email"],":password"=>sha1($_REQUEST["password"])));

            if($data) {
                $_SESSION["loggedin"] = 1;
                header("location:/home");
            }
            else {
                header("location:/home?msg=Bad Login");
            }
        }
    }


    public function logout() {
        session_destroy();
        header("Location:/home");
    }
}

?>
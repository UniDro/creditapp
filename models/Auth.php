<?php

class Auth{

    public function __construct()
    {
        session_start();
    }

    public function checkAuth($username, $password){
        if ($username == "admin" && $password == "admin"){
            $_SESSION['username'] = $username;
            return true;
        }
        return false;
    }

    public function isLoggedIn(){
        if (isset($_SESSION['username'])){
            return true;
        }
        return false;
    }

    public function logout(){
        session_destroy();
    }
}

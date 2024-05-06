<?php
require_once 'Controller.php';
require_once './models/Auth.php';
class AuthController extends Controller
{
    public function index()
    {
        //require_once './views/auth/index.php';
        $this -> renderView("auth", "index");
    }

    public function login(): void
    {
        $username = $this->getHTTPPostParam('username');
        $password = $this->getHTTPPostParam('password');

        $auth = new Auth();
        if ($auth->checkAuth($username, $password)) {
            //header("Location: index.php?c=plano&a=index");
            $this->redirectToRoute("plano", "index");

        }
        else{
            //require_once './views/auth/index.php';
            $this->redirectToRoute("auth", "index");
        }
    }


    public function logout(): void
    {
        $auth = new Auth();
        $auth->logout();
        //header("Location: index.php?c=auth&a=index");
        $this->redirectToRoute("auth", "index");
    }
}
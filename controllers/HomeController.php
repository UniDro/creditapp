<?php
require_once 'controller.php';
class HomeController extends Controller
{
    public function index(){
        $this->renderView("home", "index");
    }
}
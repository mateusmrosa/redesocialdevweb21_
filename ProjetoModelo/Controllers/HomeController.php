<?php
namespace ProjetoModelo\Controllers;

class HomeController{

    public function index(){
        
        if(isset($_SESSION['login']))
            \ProjetoModelo\Views\MainView::render('home');
        else
            \ProjetoModelo\Views\MainView::render('login');
        
    }
}

?>
<?php
namespace ProjetoModelo\Controllers;

class HomeController{

    public function index(){


        if(isset($_SESSION['login'])){
            \ProjetoModelo\Views\MainView::render('home');
            var_dump($_SESSION);
        }
        else{

            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $verifica = \ProjetoModelo\Models\UsuariosModel::verficaLogin($email);

                if($verifica->rowCount() == 0){
                    \ProjetoModelo\Utilidades::alerta('Não existe nenhum usuário com esta e-mail!');
                    \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
                }
                else{
                    $dados = $verifica->fetch();
                    $senhaBanco = $dados['senha'];

                    if(\ProjetoModelo\Bcrypt::check($senha, $senhaBanco)){
                        //usuario logado
                        $_SESSION['login'] = $dados['email'];
                        \ProjetoModelo\Utilidades::alert("Usuário Logado com sucesso");
                        \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
                    }
                    else{
                        \ProjetoModelo\Utilidades::alert("Usuário Logado com sucesso");
                        \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
                    }
                }
            }
            \ProjetoModelo\Views\MainView::render('login');
        }
    }
}

?>
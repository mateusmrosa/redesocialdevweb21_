<?php
namespace ProjetoModelo\Controllers;

class RegistrarController{

    public function index(){
        
    if(isset($_POST["registrar"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            \ProjetoModelo\Utilidades::alerta('Email inválido!');
            \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH.'registrar');
        }
        else if(strlen($senha) < 6){
            \ProjetoModelo\Utilidades::alerta('Senha muito curta!');
            \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH.'registrar');
        }
        else if(\ProjetoModelo\Models\UsuariosModel::emailExists($email)){       
            \ProjetoModelo\Utilidades::alerta('Este e-mail já existe!');
            \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH.'registrar');
        }
        else{
            $senha = \ProjetoModelo\Bcrypt::hash($senha);
            $registro = \ProjetoModelo\MySql::connect()->prepare("INSERT INTO usuarios VALUES (null, ?,?,?)");
            $registro->execute(array($nome, $email, $senha));
      
            \ProjetoModelo\Utilidades::alerta('Registrado com sucesso!');
            \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
        }

    }

        \ProjetoModelo\Views\MainView::render('registrar');
        
    }
}

?>
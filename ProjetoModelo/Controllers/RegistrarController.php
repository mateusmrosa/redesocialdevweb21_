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
           
            $dados = array(
                "nome" => $nome,
                "email" => $email,
                "senha" => $senha
            );

            $gravar = \ProjetoModelo\Models\UsuariosModel::gravar($dados);

            if($gravar){
                \ProjetoModelo\Utilidades::alerta('Registrado com sucesso!');
                \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
            }
            else
                \ProjetoModelo\Utilidades::alerta('Erro ao registrar usuário!');

            \ProjetoModelo\Utilidades::redirect(INCLUDE_PATH);
        }

    }
        \ProjetoModelo\Views\MainView::render('registrar');   
    }
}

?>
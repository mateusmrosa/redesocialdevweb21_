<?php
namespace ProjetoModelo\Models;

class UsuariosModel{

    public static function emailExists($email){

        $pdo = \ProjetoModelo\MySql::connect();
        $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
        $verificar->execute(array($email));

        if($verificar->rowCount() == 1)
            return true;
        else
            return false;
        
    }

    public static function gravar($dados){

        $pdo = \ProjetoModelo\MySql::connect();
        $insert = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?,?,?)");
        $insert->execute(array($dados['nome'], $dados['email'], $dados['senha']));

        return $insert;


    }

    public static function verficaLogin($email){

        $pdo = \ProjetoModelo\MySql::connect();
        $verificar = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $verificar->execute(array($email));
        return $verificar;
    }
    
}

?>
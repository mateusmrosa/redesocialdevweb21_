<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/style.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="sidebar"></div>

    <div class="form-container-login">

        <div class="logo-chamada-login">

            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logo.svg" alt="Logo Rede Social" width="100" heigth="100">
            <p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social Danki Code</p>

        </div>

        <div class="form-login">
            <h3>Crie sua conta!</h3>
            <form method="post">
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Criar Conta!">
                <input type="hidden" name="registrar" value="registrar">
            </form>
        </div>
    </div>
</body>

</html>
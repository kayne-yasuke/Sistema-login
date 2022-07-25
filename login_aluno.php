<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aluno</title>
</head>
<body>
    <?php
    if(isset($_SESSION['not_autentic'])):
    ?>
    <div>
        <h3>Usuario Not found</h3>
    </div>
    <?php
     unset($_SESSION['not_autentic']);
        endif;
    ?>
    <form action="validation_login_aluno.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome_aluno" id='nome' placeholder="Digite seu usuario...">
        <br>
        <br>
        <label>Senha</label>
        <input type="password" name="senha_aluno" id='senha' placeholder="Digite sua pass...">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<style>
    form{
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }

    div{
        position: absolute;
        top:40%;
        left:50%;
        transform:translate(-50%,-50%);
        background-color: red;
        width: 200px;
        height: 50px;
        color:white;
        border-radius: 10px;
        text-align: center;

    }
</style>


<script>

    // const nome = document.querySelector('#nome');
    // const senha = document.querySelector('#nome');

</script>
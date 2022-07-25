<?php
    session_start();
    include_once('cofing.php');

    if(empty($_POST['nome_aluno']) || empty($_POST['senha_aluno'])){
        header('Location:login_aluno.php');
        exit();
    }

    $nome_aluno = mysqli_real_escape_string($conn,$_POST['nome_aluno']);
    $senha_aluno = mysqli_real_escape_string($conn,$_POST['senha_aluno']);

    $query = "select id_aluno,nome from aluno where nome = '{$nome_aluno}' and senha = '{$senha_aluno}'";

    // echo $query;

    $result = mysqli_query($conn,$query);

    $row = mysqli_num_rows($result);
    // echo $row;

    if($row == 1)
    {
        $_SESSION['nome'] = $nome_aluno;
        header('Location:painel_aluno.php');
        exit();

    }
    else
    {
     $_SESSION['not_autentic'] = true;
        header('Location:login_aluno.php');  
        exit();
    }
?>
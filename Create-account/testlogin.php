<?php
    session_start();

    //print_r($_REQUEST);

    //Acessa
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM login WHERE usuario_admin = '$usuario' and senha_admin = '$senha'";

        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1){
            
            unset($_SESSION['user']);
            unset($_SESSION['senha']);
            header('Location: create-account.php');
        }

        else{
            
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            header('Location: escolha_sistema.php');
        }

    }

    //Não acessa
    else{
        header('Location: create-account.php');
    }

?>
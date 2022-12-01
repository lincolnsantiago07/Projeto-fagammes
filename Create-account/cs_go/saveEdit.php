<?php

    include_once('config.php');

        if(isset($_POST['update'])){
    
            $id = $_POST['id'];
            $nickname1 = $_POST['nickname-1'];
            $nickname2 = $_POST['nickname-2'];
            $nickname3 = $_POST['nickname-3'];
            $nickname4 = $_POST['nickname-4'];
            $nickname5 = $_POST['nickname-5'];
            $maiorelo = $_POST['maior_elo'];
    
            $sqlUpdate = "UPDATE cs SET nick1 = '$nickname1',nick2 = '$nickname2',nick3 = '$nickname3',nick4 = '$nickname4',nick5 = '$nickname5',maior_elo = '$maiorelo'
            WHERE id='$id'";
    
            $result = $conexao->query($sqlUpdate);
            
        }
    
        header('Location: sistema.php');

?>
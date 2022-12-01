<?php
    include_once('config.php');
    
    try {

        if(isset($_POST['update'])){
            
            $id = $_POST['id'];

            $nome_completo = $_POST['nome_completo'];
            $estado = $_POST['estado'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $genero = $_POST['genero'];
            $curso = $_POST['curso'];
            $cpf = $_POST['cpf'];
            $cidade = $_POST['cidade'];
            $data_nasc = $_POST['data_nasc'];
            $nome_jogador2 = $_POST['nome_jogador2'];
            $nome_jogador3 = $_POST['nome_jogador3'];
            $nome_jogador4 = $_POST['nome_jogador4'];
            $nome_jogador5 = $_POST['nome_jogador5'];
            $idade_jogador2 = $_POST['idade_jogador2'];
            $idade_jogador3 = $_POST['idade_jogador3'];
            $idade_jogador4 = $_POST['idade_jogador4'];
            $idade_jogador5 = $_POST['idade_jogador5'];
            $nome_capitao = $_POST['nome_capitao'];
            $nome_time = $_POST['nome_time'];
    
            $sqlUpdate = "UPDATE time SET nome_completo = '$nome_completo',estado = '$estado',email = '$email',celular = '$celular',gener = '$genero',
            curso = '$curso',cpf = '$cpf',cidade = '$cidade',data_nasc = '$data_nasc',nome_jogador2 = '$nome_jogador2',nome_jogador3 = '$nome_jogador3',nome_jogador4 = '$nome_jogador4', 
            nome_jogador5 = '$nome_jogador5',idade_jogador2 = '$idade_jogador2',idade_jogador3 = '$idade_jogador3',idade_jogador4 = '$idade_jogador4',idade_jogador5 = '$idade_jogador5',
            nome_capitao = '$nome_capitao',nome_time = '$nome_time' WHERE id='$id'";
    
             $result = $conexao->query($sqlUpdate);
            
        }
    
        header('Location: sistema.php');
    } catch (Exception $e) {

        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }



       

?>
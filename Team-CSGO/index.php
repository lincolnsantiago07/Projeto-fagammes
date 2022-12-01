<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nickname1 = $_POST['nickname-1'];
        $nickname2 = $_POST['nickname-2'];
        $nickname3 = $_POST['nickname-3'];
        $nickname4 = $_POST['nickname-4'];
        $nickname5 = $_POST['nickname-5'];
        $maiorelo = $_POST['maior-elo'];

        $result = mysqli_query($conexao, "INSERT INTO cs(nick1,nick2,nick3,nick4,nick5,maior_elo) 
        VALUES('$nickname1','$nickname2','$nickname3','$nickname4','$nickname5','$maiorelo')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="variables.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Cadastre seu time </title> 
</head>
<body>
    <div class="container">
        <header>CS:GO</header>

        <form action="index.php" method="POST">
            <div class="details ID">
                <div class="details family">
                    <span class="title">NickName dos Jogadores</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Seu nickname no jogo</label>
                            <input type="text" name="nickname-1" placeholder="Entre com o seu nickname" required>
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 2° jogador</label>
                            <input type="text" name="nickname-2" placeholder="nickname do 2° jogador" >
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 3° jogador</label>
                            <input type="text" name="nickname-3" placeholder="nickname do 3° jogador" >
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 4° jogador</label>
                            <input type="text" name="nickname-4" placeholder="nickname do 4° jogador" >
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 5° jogador</label>
                            <input type="text" name="nickname-5" placeholder="nickname do 5° jogador" >
                        </div>

                        <div class="input-field">
                            <label>Qual a maior patente do time?</label>
                            <input type="text" name="maior-elo" placeholder="maior patente do time" >
                        </div>
                    </div> 
                    <button class="nextBtn" type="submit" name="submit">
                        <span class="btnText">Enviar</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="scrollreveal.js"></script>
    <script src="script.js"></script>
</body>
</html>
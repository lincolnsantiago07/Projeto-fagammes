<?php

    session_start();
    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
            
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: ../create-account.php');
        
    }

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cs WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

                $nickname1 = $user_data['nick1'];
                $nickname2 = $user_data['nick2'];
                $nickname3 = $user_data['nick3'];
                $nickname4 = $user_data['nick4'];
                $nickname5 = $user_data['nick5'];
                $maiorelo = $user_data['maior_elo'];
            }
        }

        else{

            header('Location: sistema.php');
        }
    }

    else{
        header('Location: sistema.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Team-LOL/style.css">
    <link rel="stylesheet" href="../../Team-CSGO/variables.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Cadastre seu time </title> 
</head>
<body>
    <div class="container">
        <header>Formulario CS:GO</header>

        <form action="saveEdit.php" method="POS   <div class="details ID">
            <div class="details ID">
                <div class="details family">
                    <span class="title">NickName dos Jogadores</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Seu nickname no jogo</label>
                            <input type="text" name="nickname-1" placeholder="Entre com o seu nickname" value="<?php echo $nickname1 ?>">
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 2° jogador</label>
                            <input type="text" name="nickname-2" placeholder="nickname do 2° jogador" value="<?php echo $nickname2 ?>" >
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 3° jogador</label>
                            <input type="text" name="nickname-3" placeholder="nickname do 3° jogador" value="<?php echo $nickname3 ?>">
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 4° jogador</label>
                            <input type="text" name="nickname-4" placeholder="nickname do 4° jogador" value="<?php echo $nickname4 ?>">
                        </div>
    
                        <div class="input-field">
                            <label>Nickname do 5° jogador</label>
                            <input type="text" name="nickname-5" placeholder="nickname do 5° jogador" value="<?php echo $nickname5 ?>">
                        </div>

                        <div class="input-field">
                            <label>Qual a maior patente do time?</label>
                            <input type="text" name="maior-elo" placeholder="maior patente do time" value="<?php echo $maioreloT"> ?>">
                        </div>
                
                        <input type= "hidden" name="id" value="<?php echo $id ?>">

                    </div> 
                    <button class="nextBtn" type="submit" name="update" id="update">
                        <span class="btnText">Enviar</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="../../Team-CSGO/scrollreveal.js"></script>
    <script src="../../Team-CSGO/script.js"></script>
</body>
</html>
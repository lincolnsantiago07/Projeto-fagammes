<?php

    session_start();
    include_once('config.php');

    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
            
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: ../create-account.php');
        
    }

    if(!empty($_GET['id'])){

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM time WHERE id=$id";

        $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0){    

                while($user_data = mysqli_fetch_assoc($result)){

                    $nome_completo = $user_data['nome_completo'];
                    $estado = $user_data['estado'];
                    $email = $user_data['email'];
                    $celular = $user_data['celular'];
                    $genero = $user_data['genero'];
                    $curso = $user_data['curso'];
                    $cpf = $user_data['cpf'];
                    $cidade = $user_data['cidade'];
                    $data_nasc = $user_data['data_nasc'];
                    $nome_jogador2 = $user_data['nome_jogador2'];
                    $nome_jogador3 = $user_data['nome_jogador3'];
                    $nome_jogador4 = $user_data['nome_jogador4'];
                    $nome_jogador5 = $user_data['nome_jogador5'];
                    $idade_jogador2 = $user_data['idade_jogador2'];
                    $idade_jogador3 = $user_data['idade_jogador3'];
                    $idade_jogador4 = $user_data['idade_jogador4'];
                    $idade_jogador5 = $user_data['idade_jogador5'];
                    $nome_capitao = $user_data['nome_capitao'];
                    $nome_time = $user_data['nome_time'];

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
    <link rel="stylesheet" href="../../Create-Team/style.css">
    <link rel="stylesheet" href="../../Create-Team/variables.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Cadastre seu time </title> 
</head>
<body>
    <div class="container">
        <header>Cadastre seu time</header>

        <form action="saveEdit.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Detalhes pessoais</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Completo</label>
                            <input type="text" placeholder="Entre com o nome completo" name="nome_completo" value="<?php echo $nome_completo?>" required>
                        </div>

                        <div class="input-field">
                            <label>Estado</label>
                            <input type="text" placeholder="Estado onde mora" name="estado" value="<?php echo $estado ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Entre com seu email" name="email" value="<?php echo $email ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Numero do Celular</label>
                            <input type="number" placeholder="Entre com o Numero de Celular" name="celular" value="<?php echo $celular ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Gênero</label>
                            <select name="genero" required>
                                <option disabled selected>Selecione seu Gênero</option>
                                <option  value="Masculino"> <?php echo ($genero == 'masculino')? 'checked': ''?> Masculino</option>
                                <option  value="Feminino"> <?php echo ($genero == 'feminino')? 'checked': ''?>Feminino</option>
                                <option  value="Outros" <?php echo ($genero == 'outros')? 'checked': ''?>>Outros</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Seu curso</label>
                            <input type="text" placeholder="Seu curso (Não obrigatório)" value="<?php echo $curso ?>" name="curso" >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Detalhes de Identidade</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>CPF</label>
                            <input type="number" placeholder="Entre com o CPF" name="cpf" value="<?php echo $cpf ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Cidade onde mora</label>
                            <input type="text" placeholder="Entre com a sua cidade" name="cidade" value="<?php echo $cidade ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Data de aniversário</label>
                            <input type="date" placeholder="Entre com a data de nascimento" name="data_nasc" value="<?php echo $data_nasc ?>" required>
                        </div>
                    </div>
                    
                    <button class="nextBtn" id="nextBtn">
                        <span class="btnText">Próximo</span>
                        <i class="uil uil-navigator"></i>
                    </button>

                                            
                     
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Nomes dos Jogadores</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nome do 2° jogador</label>
                            <input type="text" placeholder="Nome do 2° jogador" name="nome_jogador2" value="<?php echo $nome_jogador2 ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Nome do 3° jogador</label>
                            <input type="text" placeholder="Nome do 3° jogador" name="nome_jogador3" value="<?php echo $nome_jogador3 ?>" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do 4° jogador</label>
                            <input type="text" placeholder="Nome do 4° jogador" name="nome_jogador4" value="<?php echo $nome_jogador4 ?>" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do 5° jogador</label>
                            <input type="text" placeholder="Nome do 5° jogador" name="nome_jogador5" value="<?php echo $nome_jogador5 ?>" required" >
                        </div>
                </div>

                <div class="details family">
                    <span class="title">Idade dos integrantes</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Idade do 2° jogador</label>
                            <input type="date" placeholder="Idade do 2° jogador" name="idade_jogador2" value="<?php echo $idade_jogador2 ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Idade do 3° jogador</label>
                            <input type="date" placeholder="Idade do 3° jogador" name="idade_jogador3" value="<?php echo $idade_jogador3 ?>" required" >
                        </div>

                        <div class="input-field">
                            <label>Idade do 4° jogador</label>
                            <input type="date" placeholder="Idade do 4° jogador" name="idade_jogador4" value="<?php echo $idade_jogador4 ?>" required" >
                        </div>

                        <div class="input-field">
                            <label>Idade do 5° jogador</label>
                            <input type="date" placeholder="Idade do 5° jogador" name="idade_jogador5" value="<?php echo $idade_jogador5 ?>" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do capitão do time</label>
                            <input type="text" placeholder="Insira capitão do time" name="nome_capitao" value="<?php echo $nome_capitao ?>">
                        </div>

                        <div class="input-field">
                            <label>Nome do time</label>
                            <input type="text" placeholder="Insira o nome do time" name="nome_time" value="<?php echo $nome_time ?>">
                        </div>

                        <input type= "" name="id" value="<?php echo $id ?>">

                    </div>

                    <div class="buttons">
                    <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Voltar</span>
                        </div>

                        <button class="nextBtn" type="submit" name="update" id="update">
                            <span class="btnText">Enviar</span>
                            <i class="uil uil-navigator"></i>
                        </button>

                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="../../Create-Team/scrollreveal.js"></script>
    <script src="../../Create-Team/script.js"></script>
</body>
</html>
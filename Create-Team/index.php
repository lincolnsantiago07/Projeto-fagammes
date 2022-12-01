<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

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


        $result = mysqli_query($conexao, "INSERT INTO time(nome_completo,estado,email,celular,genero,curso,cpf,cidade,data_nasc,nome_jogador2,nome_jogador3,nome_jogador4,nome_jogador5,
        idade_jogador2,idade_jogador3,idade_jogador4,idade_jogador5,nome_capitao,nome_time) 
        VALUES('$nome_completo','$estado','$email','$celular','$genero','$curso','$cpf','$cidade','$data_nasc','$nome_jogador2','$nome_jogador3','$nome_jogador4','$nome_jogador5',
        '$idade_jogador2','$idade_jogador3','$idade_jogador4','$idade_jogador5','$nome_capitao','$nome_time')");
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
        <header>Cadastre seu time</header>

        <form action="index.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Detalhes pessoais</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Completo</label>
                            <input type="text" placeholder="Entre com o nome completo" name="nome_completo" required>
                        </div>

                        <div class="input-field">
                            <label>Estado</label>
                            <input type="text" placeholder="Estado onde mora" name="estado" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Entre com seu email" name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Numero do Celular</label>
                            <input type="number" placeholder="Entre com o Numero de Celular" name="celular" required>
                        </div>

                        <div class="input-field">
                            <label>Gênero</label>
                            <select name="genero" required>
                                <option disabled selected>Selecione seu Gênero</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Seu curso</label>
                            <input type="text" placeholder="Seu curso (Não obrigatório)" name="curso" >
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Detalhes de Identidade</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>CPF</label>
                            <input type="number" placeholder="Entre com o CPF" name="cpf" required>
                        </div>

                        <div class="input-field">
                            <label>Cidade onde mora</label>
                            <input type="text" placeholder="Entre com a sua cidade" name="cidade" required>
                        </div>

                        <div class="input-field">
                            <label>Data de aniversário</label>
                            <input type="date" placeholder="Entre com a data de nascimento" name="data_nasc" required>
                        </div>
                    </div>
                    
                    <button class="nextBtn">
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
                            <input type="text" placeholder="Nome do 2° jogador" name="nome_jogador2" required>
                        </div>

                        <div class="input-field">
                            <label>Nome do 3° jogador</label>
                            <input type="text" placeholder="Nome do 3° jogador" name="nome_jogador3" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do 4° jogador</label>
                            <input type="text" placeholder="Nome do 4° jogador" name="nome_jogador4" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do 5° jogador</label>
                            <input type="text" placeholder="Nome do 5° jogador" name="nome_jogador5" required" >
                        </div>
                </div>

                <div class="details family">
                    <span class="title">Idade dos integrantes</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Idade do 2° jogador</label>
                            <input type="date" placeholder="Idade do 2° jogador" name="idade_jogador2" required>
                        </div>

                        <div class="input-field">
                            <label>Idade do 3° jogador</label>
                            <input type="date" placeholder="Idade do 3° jogador" name="idade_jogador3" required" >
                        </div>

                        <div class="input-field">
                            <label>Idade do 4° jogador</label>
                            <input type="date" placeholder="Idade do 4° jogador" name="idade_jogador4" required" >
                        </div>

                        <div class="input-field">
                            <label>Idade do 5° jogador</label>
                            <input type="date" placeholder="Idade do 5° jogador" name="idade_jogador5" required" >
                        </div>

                        <div class="input-field">
                            <label>Nome do capitão do time</label>
                            <input type="text" placeholder="Insira capitão do time" name="nome_capitao" >
                        </div>

                        <div class="input-field">
                            <label>Nome do time</label>
                            <input type="text" placeholder="Insira o nome do time" name="nome_time" >
                        </div>
                    </div>

                    <div class="buttons">
                        
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Voltar</span>
                        </div>

                        <button class="nextBtn" type="submit" name="submit">
                            <span class="btnText">Enviar</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="scrollreveal.js"></script>
    <script src="script.js"></script>
</body>
</html>
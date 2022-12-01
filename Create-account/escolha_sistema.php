<?php
    session_start();
    include_once('config.php');

    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true)) {
        
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: create-account.php');
        
    }

    $logado = $_SESSION['user'];

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM lol WHERE id LIKE '%$data%' or nick1 LIKE '%$data%' or nick2 LIKE '%$data%' or nick3 LIKE '%$data%' or nick4 LIKE '%$data%' 
        or nick5 LIKE '%$data%' or maior_elo LIKE '%$data%'  ORDER BY id DESC";
    }
    else{
        $sql = "SELECT * FROM lol ORDER BY id DESC";
    }

    $result = $conexao->query($sql);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/sistema.css">
    <link rel="stylesheet" href="assets/variables.css">
    <title>Crud Admin</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema Fagames</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>  
    <br>
    <?php
        echo "<h1>Bem vindo ao banco de dados ;)</h1>";
        echo "<h2>Clique no nome para ir para sua respectivas listas</h2>";
    ?>
    <br>
    <div class="m-5">
        <a href="create-team/sistema.php">Times </a>
        <a href="cs_go/sistema.php">CS:GO </a>
        <a href="lol/sistema.php">LOL </a>
        <a href="valorant/sistema.php">Valorant</a>
    </div>
</body>

</html>
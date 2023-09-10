
<?php

$server = "localhost";
$user = "root";
$pass = "near";
$bd = "empresa";
$conn = mysqli_connect($server, $user, $pass, $bd);

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO `pessoa` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`)
    VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";


if (mysqli_query($conn, $sql)){
        echo "$nome cadastrado com sucesso";
    }else
        echo "$nome não foi cadastrado";





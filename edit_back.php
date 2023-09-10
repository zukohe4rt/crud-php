
<?php

$server = "localhost";
$user = "root";
$pass = "near";
$bd = "empresa";
$conn = mysqli_connect($server, $user, $pass, $bd);

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "UPDATE `pessoa` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE cod_pessoa = $id";
   


if (mysqli_query($conn, $sql)){
        echo "$nome cadastrado com sucesso";
    }else
        echo "$nome não foi cadastrado";





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>alteração de cadastro</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php

    include "conexao.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoa WHERE cod_pessoa = $id";
    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="registration-form">
        <form action="edit_back.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nome" placeholder="Username" value="<?= $linha['nome']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="endereco" placeholder="Adress" value="<?= $linha['endereco']; ?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="email" placeholder="Email" value="<?= $linha['email']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="telefone" placeholder="Phone Number" value="<?= $linha['telefone']; ?>">
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" name="data_nascimento" placeholder="Birth Date" value="<?= $linha['data_nascimento']; ?>">
            </div>
            <div class="form-group mb-5">
                <button type="submit" class="btn btn-block create-account" value="salvarAlterações">Salvar alterações</button>
                <input type="hidden" name="id" value="<?= $linha['cod_pessoa']; ?>">
            </div>
            <div class="text-lg-start text-lg-start">
                <a href="index.php" class="btn-get-started scrollto">Go Back</a>
            </div>


        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>
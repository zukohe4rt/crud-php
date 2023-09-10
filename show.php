<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <?php

    $pesquisa = isset($_POST['busca']) ? $_POST['busca'] : '';

    include "conexao.php";

    $sql = "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </nav>

                <a href="index.php" class="btn btn-info">voltar</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">endereço</th>
                            <th scope="col">telefone</th>
                            <th scope="col">email</th>
                            <th scope="col">data de nascimento</th>
                            <th scope="col">funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $nome = $linha['nome'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $email = $linha['email'];
                            $data_nascimento = $linha['data_nascimento'];
                            $data_nascimento = mostrar_data($data_nascimento);

                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$data_nascimento</td>
                                    <td width=150px>
                                        <a href='edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                        <a href='#' class='btn btn-danger btn-sm'>Excluir</a>

                                    </td>
                                </tr>";
                        }

                        ?>


                    </tbody>
                </table>
            </div>



        </div>





        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="assets/js/script.js"></script>

</body>

</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="registration-form">
    <form action="cadastro_script.php" method="post">
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" name="nome" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" name="endereco" placeholder="Adress">
        </div>
        <div class="form-group">
            <input type="email" class="form-control item" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" name="telefone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input type="date" class="form-control item" name="data_nascimento" placeholder="Birth Date">
        </div>
        <div class="form-group mb-5">
            <button type="submit" class="btn btn-block create-account">Create Account</button>
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

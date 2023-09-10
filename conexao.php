<?php

$server = "localhost";
$user = "root";
$pass = "near";
$bd = "empresa";


$conn = mysqli_connect($server, $user, $pass, $bd);

function mostrar_data($data){
    $d = explode('-', $data);
    $escreve = $d[2]. "/" .$d[1] . "/" .$d[0];
    return $escreve;
}

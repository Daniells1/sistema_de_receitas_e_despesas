<?php

$host = "localhost";
$username = "root";
$password ="";
$dbname ="sistema_de_gastos";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Erro na conexão com o banco de dados". mysqli_connect_error();
    exit;
}



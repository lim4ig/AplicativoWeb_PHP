<?php

// Cria a conexão com o banco de dados MySQL.
$conn = mysqli_connect("localhost", "root", "", "db_spotify");

if(!$conn){
    // Se a conexão falhar, termina a página mostrando o erro.
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

?>
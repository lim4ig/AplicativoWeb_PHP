<?php
// Conexão com o banco de dados MySQL.
$conn = mysqli_connect("localhost", "root", "", "db_spotify");

// Se a conexão falhar, exibe uma mensagem de erro e interrompe a execução.
if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}
?>
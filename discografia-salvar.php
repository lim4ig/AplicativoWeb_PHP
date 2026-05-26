<?php

// Recebe os dados enviados pelo formulário de discografia.
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

// Exibe rapidamente os dados recebidos, para debugging simples.
echo "Artista: $artista - Nome: $nome - Ano de lançamento: $ano - Tipo: $tipo - URL da Capa: $foto";

// Conecta ao banco de dados MySQL.
$conn = mysqli_connect("localhost", "root", "", "db_spotify");

if(!$conn){
    die("<h3>Erro</h3>" . mysqli_connect_error() );
}

// Prepara a consulta para inserir os dados com parâmetros.
$sql = "INSERT INTO tb_discografia (artista, nome, ano, tipo, foto) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssiss", $artista, $nome, $ano, $tipo, $foto);
    $resultado = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
} else {
    $resultado = false;
}

// Mostra se o cadastro foi bem-sucedido.
if($resultado){
    echo "Cadastrado com sucesso!";
}
else{
    echo "Houve algum problema.";
}

mysqli_close($conn);

?>
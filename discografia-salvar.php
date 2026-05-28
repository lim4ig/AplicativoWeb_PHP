<?php

// Recebe os dados enviados pelo formulário via POST.
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

// Exibe os dados recebidos para depuração simples.
echo "Artista: $artista - Nome: $nome - Ano de lançamento: $ano - Tipo: $tipo - URL da Capa: $foto";

// Inclui a conexão com o banco de dados.
include "inc-conexao.php";

// Insere o novo registro na tabela tb_discografia.
$resultado = mysqli_execute_query($conn, "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) VALUES(?, ?, ?, ?, ?)", 
[$artista, $nome, $ano, $tipo, $foto]);

echo '<br><br>';

if($resultado){
    // Mensagem em caso de sucesso.
    echo "Cadastrado com sucesso!";
}
else{
    // Mensagem em caso de falha.
    echo "Houve algum problema.";
}

mysqli_close($conn);

?>
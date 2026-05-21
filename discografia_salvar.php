<?php
/* discografia-salvar.php */
 
$artista = $_POST['artista'];
$ano = $_POST['ano'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];
 
echo "$artista - $ano - $nome - $tipo - $foto";
 

/* CONEXÃO COM BANCO DE DADOS */
$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
 
if(!$conexao){
    die("<h3>Erro</h3>" . mysqli_connect_error());
}
 
/* inserir dados */
$sql = "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) values ('$artista', '$nome', '$ano', '$tipo', '$foto')";
 
$resultado = mysqli_query($conexao, $sql);
 
if($resultado){
    echo "Cadastro com sucesso";
}else{
    echo "Houve algum problema.";
}

mysqli_close($conexao);
?>
    
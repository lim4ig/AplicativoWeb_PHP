<?php
include "inc-conexao.php";
$id = $_GET['ID'];
$sql = "DELETE FROM tb_discografia WHERE ID = $id";
$resultado = mysqli_query($conn, $sql);
return header("Location: discografia-listagem.php");
mysqli_close($conn);
?>
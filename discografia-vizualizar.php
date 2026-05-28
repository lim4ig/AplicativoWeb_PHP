<?php
// Define o título da página e inclui o cabeçalho e conexão com o banco.
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";
include "inc-conexao.php";

// Obtém o ID da discografia a ser visualizada a partir da URL.
$id = $_GET['id'];

// Busca o registro da discografia pelo ID.
$sql = "SELECT * FROM tb_discografia WHERE ID = $id";
$resultado = mysqli_query($conn, $sql);

$foto = $artista = $nome = $ano = $tipo = "";
while($linha_resultado = mysqli_fetch_assoc($resultado)){
    $foto = $linha_resultado['foto'];
    $artista = $linha_resultado['artista'];
    $nome = $linha_resultado['nome'];
    $ano = $linha_resultado['ano'];
    $tipo = $linha_resultado['tipo'];
}
?>
<body>
    <!-- Inclui o menu de navegação -->
    <?php include "inc-menu.php"; ?>
    <main class="container mt-5">
        <div class="card shadow-sm">
            <div class="row g-0">
                <div class="col-md-4 bg-light d-flex align-items-center justify-content-center p-4">
                    <!-- Exibe a capa do álbum -->
                    <img src="<?=$foto;?>" alt="<?=$nome;?>" class="img-fluid rounded shadow-sm" style="max-height: 300px; width: auto;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="h3 text-success mb-4">Visualizar Discografia</h1>
                        <dl class="row mb-4">
                            <dt class="col-sm-4 text-muted">Artista</dt>
                            <dd class="col-sm-8"><?=$artista;?></dd>

                            <dt class="col-sm-4 text-muted">Nome</dt>
                            <dd class="col-sm-8"><?=$nome;?></dd>

                            <dt class="col-sm-4 text-muted">Ano</dt>
                            <dd class="col-sm-8"><?=$ano;?></dd>

                            <dt class="col-sm-4 text-muted">Tipo</dt>
                            <dd class="col-sm-8 text-capitalize"><?=$tipo;?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    // Fecha a conexão com o banco e inclui o rodapé.
    mysqli_close($conn);
    include "inc-rodape.php"; 
    ?>
</body>
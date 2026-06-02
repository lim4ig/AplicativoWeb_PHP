<?php
include "inc-conexao.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tb_discografia WHERE ID = $id";
$resultado = mysqli_query($conn, $sql);
$nome = $artista = $ano = $tipo = $foto = "";
while($linha_resultado = mysqli_fetch_assoc($resultado)){
    $nome = $linha_resultado['nome'];
    $artista = $linha_resultado['artista'];
    $ano = $linha_resultado['ano'];
    $tipo = $linha_resultado['tipo'];
    $foto = $linha_resultado['foto'];
}
include "inc-cabecalho.php";
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-success mb-0">Editar Discografia:<br><strong><?=$nome;?></strong></h1>
            <a href="discografia-listagem.php" class="btn btn-success">Voltar</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="discografia-atualizar.php?ID=<?=$id;?>" method="post">
                    <input type="hidden" name="ID" value="<?=$id;?>">
                    <div class="mb-3">
                        <label class="form-label">Artista</label>
                        <input type="text" name="artista" class="form-control" value="<?=$artista;?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nome do álbum</label>
                        <input type="text" name="nome" class="form-control" value="<?=$nome;?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ano de lançamento</label>
                        <input type="number" name="ano" class="form-control" value="<?=$ano;?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <select name="tipo" class="form-select" required>
                            <option value="">Selecione o tipo</option>
                            <option value="album" <?=$tipo == 'album' ? 'selected' : '';?>>Álbum</option>
                            <option value="single" <?=$tipo == 'single' ? 'selected' : '';?>>Single</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="text" name="foto" class="form-control" value="<?=$foto;?>" required>
                    </div>
                    <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>
    <?php 
    mysqli_close($conn);
    include "inc-rodape.php"; 
    ?>
</body>
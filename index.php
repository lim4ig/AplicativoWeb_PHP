<?php
$titulo_da_pagina = "Discos";
include "inc-cabecalho.php";
?>
<link rel="stylesheet" href="style.css">
<body>
    <main class="container py-4">
        <?php include "inc-menu.php"; ?>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-1">Discografia</h1>
                <p class="text-muted mb-0">Visualize os discos cadastrados no sistema.</p>
            </div>
        </div>

        <div class="row gy-4">
            <?php
            include "inc-conexao.php";

            $sql = "SELECT * FROM tb_discografia ORDER BY artista, ano";
            $resultado = mysqli_query($conn, $sql);

            while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="cartao" style="background-image: url('<?= $linha['foto'] ?>');">
                        <div class="cor-cartao">
                            <div class="texto-cartao p-3">
                                <h1 class="fs-4"><?= $linha['nome']; ?></h1>
                                <h2 class="fs-5"><?= $linha['artista']; ?></h2>
                                <h3 class="fs-6"><?= $linha['tipo']; ?> - <?= $linha['ano']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

<?php 
include "inc-rodape.php"; 
?>
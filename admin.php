<?php

// Define o título da página e inclui o cabeçalho comum com Bootstrap.
$titulo_da_pagina = "Administrador";
include "inc-cabecalho.php";

?>
<body>
    <main class="container">
        <!-- Inclui o menu de navegação padrão do site -->
        <?php include "inc-menu.php"; ?>

        <h1 class="text-center text-success mt-5"><i class="bi bi-spotify"></i>
        Spotify</h1>

        <div class="row">
            <div class="col">
                <div class="bg-light p-3 rounded d-inline-block">
                    <!-- Botão para abrir o formulário de nova discografia -->
                    <a href="discografia-formulario.php" class="btn btn-success">Nova discografia</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Inclui o rodapé comum e fecha as tags HTML -->
    <?php include "inc-rodape.php"; ?>
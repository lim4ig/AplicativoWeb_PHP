<?php

// Define o título da página para ser usado no cabeçalho comum.
$titulo_da_pagina = "Administrador";
include "inc-cabecalho.php";

?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <!-- Cabeçalho da página de administração -->
        <h1 class="text-center text-success mt-5"><i class="bi bi-spotify"></i>
        Spotify</h1>

        <div class="row">
            <div class="col">
                <!-- Botão para abrir o formulário de cadastro de discografia -->
                <a href="discografia-formulario.php" class="btn btn-success">Nova discografia</a>
            </div>
        </div>
    </main>

    <?php include "inc-rodape.php"; ?>
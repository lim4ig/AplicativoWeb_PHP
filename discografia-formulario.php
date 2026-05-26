<?php

$titulo_da_pagina = "Cadastro de discografia";
include "inc-cabecalho.php";

?>

<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <!-- Página com formulário para cadastrar uma nova discografia -->

        <section class="d-flex flex-column align-items-center">
            <h1 class="text-primary-emphasis fs-2 mt-2">Cadastro de Discografia</h1>
            <br>
            <div class="card p-4">
                <form action="discografia-salvar.php" method="post">
                    <!-- Campo para o nome do artista -->
                    <label>Artista</label><br>
                    <input type="text" name="artista" required>

                    <br>

                    <!-- Campo para o nome do álbum -->
                    <label>Nome do álbum</label><br>
                    <input type="text" name="nome" required>

                    <br>

                    <!-- Campo para o ano de lançamento -->
                    <label>Ano de lançamento</label><br>
                    <input type="number" name="ano" required>

                    <br>

                    <!-- Campo para o tipo de lançamento -->
                    <label>Tipo</label><br>
                    <select name="tipo" required>
                        <option value="album">Álbum</option>
                        <option value="single">Single</option>
                    </select>

                    <br>

                    <!-- Campo para a URL da imagem de capa -->
                    <label>Foto</label><br>
                    <input type="text" name="foto" required>

                    <br><br>

                    <!-- Envia os dados para cadastro -->
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <!-- Limpa os campos preenchidos -->
                    <button type="reset" class="btn btn-success">Limpar</button>
                </form>
            </div>
        </section>
    </main>

    <?php include "inc-rodape.php"; ?>
</body>
</html>
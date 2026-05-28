<?php

// Define o título da página e inclui o cabeçalho com Bootstrap.
$titulo_da_pagina = "Cadastro de discografia";
include "inc-cabecalho.php";

?>

<body>
    <main class="container">
        <!-- Menu de navegação padrão -->
        <?php include "inc-menu.php"; ?>

        <section class="d-flex flex-column align-items-center">
            <h1 class="text-primary-emphasis fs-2 mt-2">Cadastro de Discografia</h1>
            <br>
            <div class="card p-4 shadow-sm">
                <!-- Formulário que envia os dados para salvar no banco -->
                <form action="discografia-salvar.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Artista</label>
                        <input type="text" name="artista" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome do álbum</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ano de lançamento</label>
                        <input type="number" name="ano" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <select name="tipo" class="form-select" required>
                            <option value="album">Álbum</option>
                            <option value="single">Single</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="text" name="foto" class="form-control" required>
                    </div>

                    <div class="bg-light p-3 rounded">
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <button type="reset" class="btn btn-outline-success">Limpar</button>
                            <a href="discografia-listagem.php" class="btn btn-outline-success">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Rodapé comum do site -->
    <?php include "inc-rodape.php"; ?>
</body>
</html>
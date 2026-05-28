<?php

// Define o título da página e inclui o cabeçalho comum.
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";

?>
<body>
    <main class="container py-4">
        <!-- Menu de navegação comum -->
        <?php include "inc-menu.php"; ?>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-1">Listagem de Discografias</h1>
                <p class="text-muted mb-0">Registros de álbuns e discos cadastrados no sistema.</p>
            </div>
            <a href="discografia-formulario.php" class="btn btn-success">Nova Discografia</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Artista</th>
                                <th>Nome</th>
                                <th>Ano</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            // Conecta ao banco de dados.
                            include "inc-conexao.php";
                            
                            // Busca todas as discografias e ordena por artista e ano.
                            $sql = "SELECT * FROM tb_discografia ORDER BY artista, ano";
                            $resultado = mysqli_query($conn, $sql);

                            // Verifica se existem resultados.
                            if(mysqli_num_rows($resultado) > 0){
                                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                                    echo '<tr>';
                                    echo "<td> {$linha_resultado['ID']} </td>";
                                    echo "<td> {$linha_resultado['artista']} </td>";
                                    echo "<td><a href='discografia-vizualizar.php?id={$linha_resultado['ID']}' class='text-decoration-none'>{$linha_resultado['nome']}</a></td>";
                                    echo "<td> {$linha_resultado['ano']} </td>";
                                    echo "<td> {$linha_resultado['tipo']} </td>";
                                    echo '</tr>';
                                }
                            } else {
                                // Mensagem quando não há registros.
                                echo '<tr><td colspan="5" class="text-center py-3">Nenhum registro encontrado.</td></tr>';
                            }

                            mysqli_close($conn);

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- Inclui o rodapé e fecha a página -->
<?php include "inc-rodape.php"; ?>
<?php

$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";

?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <!-- Título da página que mostra todas as discografias cadastradas -->
        <h1>Listagem de Discografias</h1>
        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php" class="btn btn-success">Nova discografia</a>
            </div>
        </div>

        <div class="row">
           <div class="col">
            <table>
                <tr>
                    <th>Artista</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Tipo</th>
                    <th>Foto</th>
                </tr>
                <?php
                // Inclui a conexão com o banco de dados.
                include "inc-conexao.php";

                // Consulta todas as discografias e ordena por artista e nome.
                $sql = "select * from tb_discografia order by artista, nome";
                $resultado = mysqli_query($conn, $sql);

                // Para cada registro encontrado, exibe uma linha na tabela.
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['artista'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['ano'] . "</td>";
                    echo "<td>" . $linha['tipo'] . "</td>";
                    echo "</tr>";
                }

                // Fecha a conexão após terminar a leitura dos dados.
                mysqli_close($conn);
                ?>
            </table>
           </div>
        </div>
    </main>

<?php include "inc-rodape.php"; ?>
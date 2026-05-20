<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilodiscografia.css">
    <title>Discografia</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Discografia</h1>
        <form action="discografia_salvar.php" method="post">

            <label class="campo-texto">Artista</label>
            <input type="text" name="artista" required class="campo"><br>

            <label class="campo-texto">Nome do álbum</label>
            <input type="text" name="nome_album" required class="campo"><br>

            <label class="campo-texto">Ano de lançamento</label>
            <input type="number" name="ano_lancamento" min="1900" max="2099" step="1" required class="campo"><br>

            <label class="campo-texto">Tipo</label>
            <select name="tipo" required class="campo">
                <option value="">Selecione o tipo</option>
                <option value="Álbum">Álbum</option>
            </select><br>

            <label class="campo-texto">Foto</label>
            <input type="text" name="foto" placeholder="Caminho ou URL da imagem" class="campo"><br>

            <div class="campo-botao">
                <input type="submit" value="Salvar" class="botao">
                <input type="reset" value="Limpar" class="botao">
            </div>

        </form>
    </div>
</body>
</html>

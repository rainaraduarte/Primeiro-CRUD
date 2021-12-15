<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de cadastro</title>
</head>
<body>
    <?php
    $id_livro = $_GET["id_livro"];

    include "conexao.php";
    $conn = conectar();

    $sql = "SELECT * FROM livros WHERE id_livro=$id_livro";
    $result = $conn->query($sql);

    $titulo = "";
    $editora = "";
    $quantidade = 0;
    $data_lancamento = "";

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $titulo = $row["titulo"];
            $editora = $row["editora"];
            $cpf = $row["quantidade"];
            $data_lamcamento = $row["data_lancamento"];

        }
    }
    desconectar($conn);

    ?>

    <h1>Editar registro:</h1>
    <form action = "livro_bd_editar.php" method="post">
                    <p>
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" id="titulo" value = "<?php echo $titulo; ?>" />
                    </p>

                    <p>
                        <label for="editora">Editora:</label>
                        <input type="text" name="editora" id="editora" value = "<?php echo $editora; ?>" />
                    </p>

                    <p>
                        <label for="data_lancamento">Data de lançamento:</label>
                        <input type="date" name="data_lancamento" id="data_lancamento" value = "<?php echo $data_lancamento; ?>" /> 
                    </p>
                     
                    <p>
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" name="quantidade" id="quantidade" step="1" value = "<?php echo $quantidade; ?>" />
                    </p>

                    <input type="hidden" name="id_livro"  value = "<?php echo $id_livro; ?>" />

                    <p>
                        <input type="submit" value="Editar" />
                    </p>

                   
                  </form>
</body>
</html>

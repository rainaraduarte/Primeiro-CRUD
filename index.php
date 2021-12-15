<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <!-- Alunas: Rainara Paulino e Rita de Cássia-->
    <h1>Estoque de Livros</h1>
    <p><a href="livro_cadastro.php">Registrar livros</a></p>

    <h4>Livros registrados:</h4>

    <?php
    include "conexao.php";

    $conn = conectar();

    $sql= "SELECT * FROM livros";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p> Título: " .$row["titulo"]. "<br />";
            echo "Editora: " .$row["editora"]. "<br />";
            echo "Data de lançamento: " .$row["data_lancamento"]."<br />";
            echo "Quantidade: " .$row["quantidade"]. "<br />";
            echo "<a href='livro_bd_excluir.php?id_livro=".$row["id_livro"]."'>EXCLUIR</a><br />";
            echo "<a href='livro_editar.php?id_livro=" .$row["id_livro"]."'>EDITAR</a></p>";
        }

    } else {
        echo "<p>Nenhum livro cadastrado!</p>";
    }

    desconectar($conn);
    ?>

</body>
</html>

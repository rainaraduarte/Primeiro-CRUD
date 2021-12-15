<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de livros</title>
</head>
<body>
    <h1>Registrar livro:</h1>
    <form action = "livro_bd_registrar.php" method="post">
    <p>
                        <label for="titulo">Título:</label>
                        <input type="text" name="titulo" id="titulo"/>
                    </p>

                    <p>
                        <label for="editora">Editora:</label>
                        <input type="text" name="editora" id="editora"/>
                    </p>

                    <p>
                        <label for="data">Data de lançamento:</label>
                        <input type="date" name="data_lancamento" id="data"/> 
                    </p>

                     
                    <p>
                        <label for="cpf">Quantidade:</label>
                        <input type="number" name="quantidade" id="quantidade" step="1"/>
                    </p>


                    <p>
                        <input type="submit" value="Registrar" />
                    </p>
                   
                  </form>
</body>
</html>

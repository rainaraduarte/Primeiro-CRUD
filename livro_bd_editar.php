<?php 
$titulo = $_POST["titulo"];
$editora = $_POST["editora"];
$quantidade = $_POST["quantidade"];
$data_lancamento = $_POST["data_lancamento"];
$id_livro = $_POST["id_livro"];

include "conexao.php";
$conn = conectar();
$sql = "UPDATE livros SET titulo='$titulo', editora='$editora', quantidade=$quantidade, data_lancamento='$data_lancamento' WHERE id_livro=$id_livro";

if($conn->query($sql)){
    desconectar($conn);
    header("location: index.php");
    die();

} else {
    die ("Deu erro! Erro: " .$conn->error);
}
?>

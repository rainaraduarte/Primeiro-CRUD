<?php

$id_livro = $_GET["id_livro"];

include "conexao.php";
$conn = conectar();

$sql = "DELETE FROM livros WHERE id_livro=$id_livro";

if($conn->query($sql)){
    desconectar($conn);
    header("location: index.php");
    die();

} else {
    die ("Deu erro! Erro: " .$conn->error);
}
?>

<?php

$titulo = $_POST["titulo"];
$editora = $_POST["editora"];
$quantidade = $_POST["quantidade"];
$data_lancamento = $_POST["data_lancamento"];

include "conexao.php";

$conn = conectar();

$sql = "INSERT INTO livros (titulo, editora, quantidade, data_lancamento) VALUES ('$titulo', '$editora', $quantidade, '$data_lancamento')";

if($conn->query($sql)) {
desconectar($conn);
header("location: index.php");
die();

} else {
   die ("Deu erro! Erro:" .$conn->error);
}
?>

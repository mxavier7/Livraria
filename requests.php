<?php
    include('setup.php');
    if (isset($_POST['submit'])) {
        $editora = (int) $_POST['editora'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano = (int) $_POST['ano'];
        $preco = (int) $_POST['preco'];
        $quantidade = (int) $_POST['quantidade'];
        $tipo = (int) $_POST['tipo'];

       $sql = Mysql::conectar()->prepare("INSERT INTO `acervo` VALUES (null, ?, ?, ?, ?, ?, ?, ?) ");
       $sql->execute(array($editora,$titulo,$autor,$ano,$preco,$quantidade,$tipo));
    }
?>

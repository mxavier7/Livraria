<?php
    class Update {
        static public function update($id, $editora,$titulo,$autor,$ano,$preco,$quantidade,$tipo) {
            $sql = Mysql::conectar()->query("UPDATE `acervo` SET editora = $editora, titulo = $titulo, autor = $autor, ano = $ano, preco = $preco, quantidade = $quantidade, tipo = $tipo WHERE id = $id" );
        }
    }
?>
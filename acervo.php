<?php
    include('setup.php');
    $db = Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body>
<div class="lista">
        <?php
            foreach($db->query('SELECT * FROM acervo JOIN editora ON editora.id = acervo.idEditora' ) as $item) {
                $id = $item['id'];
                $nome = $item['nome'];
                $titulo = $item['titulo'];
                $autor = $item['autor'];
                $ano = $item['ano'];
                $preco = $item['preco'];
                $quantidade = $item['quantidade'];
                $tipo = $item['tipo'];

                echo '<a class="item" href="atualizar.php?id='.$id.'">
                    <p>Editora: '. $nome .'</p>
                    <p>Título: '. $titulo. '</p>
                    <p>Autor: '. $autor .'</p>
                    <p>Ano: '. $ano .'</p>
                    <p>Preço: '. $preco .'</p>
                    <p>Quantidade: '. $quantidade .'</p>
                    <p>Tipo: ' . $tipo .'</p>
                </a>';
            }
        ?>
    </div>
</body>
</html>
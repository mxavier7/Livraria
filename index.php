<?php
    include('setup.php');
    $db = Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <div class="form_cd">
        <h2>Cadastro de Livro</h2>
        <form method="POST" action="requests.php">
            <select name="editora" id="editora">
                <?php
                    foreach($db->query('SELECT * FROM editora' ) as $item) {
                        echo '<div><option value="'.$item["id"].'">'. $item["nome"] .'</option></div>';
                    }
                ?>
            </select>
            <div><input type="text" name="titulo" placeholder="Título"></div>
            <div><input type="text" name="autor" placeholder="Autor"></div>
            <div><input type="text" name="ano" placeholder="Ano"></div>
            <div><input type="text" name="preco" placeholder="Preço"></div>
            <div><input type="text" name="quantidade" placeholder="Quantidade"></div>
            <div><input type="text" name="tipo" placeholder="Tipo"></div>
            <div><input type="submit" name="submit" value="Cadastrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>
        </form>

        <form action="acervo.php" method="get">
            <input type="submit" value="Lista Completa" name="filter">
        </form>
    </div>
</body>
</html>
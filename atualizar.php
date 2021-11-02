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

<?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $editora = $_POST['editora'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $tipo = $_POST['tipo'];

        Update::update($id, $editora,$titulo,$autor,$ano,$preco,$quantidade, $tipo);
    }
?>
    <div class="form_cd">
        <h2>Atualizar</h2>
        <form method="POST" action="acervo.php">
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
            <div><input type="submit" name="update" value="Atualizar"></div>

        </form>
    </div>
</body>
</html>
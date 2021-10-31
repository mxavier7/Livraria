<?php
    include('config.php');
    Mysql::conectar();

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Acervo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <div class="form_cd">


        <?php

            if(isset(%POST['acao']) && $_POST['form'] == 'f_form'){
                $editora = $_POST['editora'];
                $titulo = $_POST['titulo'];
                $autor = $_POST['autor'];
                $ano = $_POST['ano'];
                $preco = $_POST['preco'];
                $quantidade = $_POST['quantidade'];

                if($editora == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else if($titulo == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else if($autor == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else if($ano == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else if($preco == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else if($quantidade == ''){
                    Form::alert('Erro','Algum campo está vazio!');
                }else{
                    Form::cadastrar($editora,$titulo,$autor,$ano,$preco,$quantidade);
                    Form::alert('sucesso','Livro cadastrado com sucesso!');
                }
        
            }

        ?>


        <h2>Cadastro de Livro</h2>
        <form method="POST">
            <div><input type="text" name="editora" placeholder="Editora"></div>
            <div><input type="text" name="titulo" placeholder="Título"></div>
            <div><input type="text" name="autor" placeholder="Autor"></div>
            <div><input type="text" name="ano" placeholder="Ano"></div>
            <div><input type="text" name="preco" placeholder="Preço"></div>
            <div><input type="text" name="quantidade" placeholder="Quantidade"></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>

        </form>

    </div>
    /*cadastrar novos itens no acervo;
alterar dados de itens previamente cadastrados no acervo;
listar todos os itens disponíveis no acervo; 
pesquisar itens do acervo a partir do título.*/
</body>
</html>
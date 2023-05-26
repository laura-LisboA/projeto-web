<?php

    require "roupasfemininas.php";

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $blusas[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $calcas[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $shorts[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $saias[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $vestidos[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $b = $sapatos[$i];
    }
    else{
        header("location: index.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Roupas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
    <div class="botao">
		<a href="formulario.php">Área do cliente</a>
	</div>
    <div id="menu">
                <div>
                    <img src="imagens/Logo fashion reborn.png">
                </div>
                <nav>
                <div class="barra">
                    <form> 
                        <input type="search" name="search" placeholder="Pesquisar">
                        <input type="submit" value="Buscar">
                    </form>
                </div> 
				    <ul>
					   <li><a href="">Home</a></li>
					   <li><a href="">Roupas</a></li>
					   <li><a href="">Informações</a></li>
					   <li><a href="">Entrar</a></li>
				    </ul>	
                </nav>
            </div>
    </header>
	<div class="container">
        <img src="<?=$b["foto"]?>" alt = "<?=$b["tipo"]?>">
		<h3><?=$b["tipo"]?></h3>
        <h3>Marca: <?=$b["marca"]?></h3>
		<h3>Tamanho: <?=$b["tamanho"]?></h3>
		<h3>Preço: R$ <?=$b["preco"]?> </h3>
		<h3>Descrição: <?=$b["descricao"]?> </h3>
        <h3>Condição: <?=$b["condicao"]?></h3>
		<a href="index.php" class="botao">Voltar</a>
        <a class="botao">Comprar</a>
	</div>
</body>
</html>
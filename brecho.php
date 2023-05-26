<?php

    require "roupasfemininas.php";

    if(isset(["i"])){
        $i = $_GET["i"];
        $b = $blusas[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset(["i"])){
        $i = $_GET["i"];
        $b = $calcas[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset(["i"])){
        $i = $_GET["i"];
        $b = $shorts[$i];
    }
    else{
        header("location: index.php");
        die;
    }

    if(isset(["i"])){
        $i = $_GET["i"];
        $b = $saias[$i];
    }
    else{
        header("location: index.php");
        die;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Roupas</title>
	<link rel="stylesheet" type="text/css" href="funcionarios.css">
</head>
<body>
    <header>
    <div class="botao">
		<a href="formulario.php">Área do cliente</a>
	</div>
    <div id="menu">
                <div>
                    <img src="images/logo.png">
                </div>
                <nav>
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
        <img src="<?=$b["foto"]?>" alt = "<?=$=["tipo"]?>">
		<h3><?=$f["tipo"]?></h3>
		<h3>Tamanho: <?=$f["tamanho"]?></h3>
		<h3>Preço: R$ <?=$f["preco"]?> </h3>
		<p>Descrição: <?=$f["descricao"]?> </p>
		<a href="index.php" class="botao">Voltar</a>
        <a class="botao">Comprar</a>
	</div>
</body>
</html>
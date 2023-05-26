<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fashion Reborn</title>
</head>

<body>
    <header>

        <div id="menu">

            <nav>
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
    <div class='container'>
        <h1 class="nome-loja">Fashion Reborn</h1>
        <div class="menu-principal">
            <div>
                <div class="select-menu moda-feminina">
                </div>
                <h2 class="title-menu texto" id="moda-feminina" onclick="redireciona(this)">Moda Feminina</h2>
            </div>
            <div>
                <div class="select-menu moda-masculina">
                </div>
                <h2 id="moda-masculina" class="title-menu texto" onclick="redireciona(this)">Moda Masculina</h2>
            </div>
            <div>
                <div class="select-menu moda-kids">
                </div>
                <h2 id="moda-kids" class="title-menu texto" onclick="redireciona(this)">Moda Kids</h2>
            </div>
        </div>
    </div>
    <footer>
        <div class='footer'>
            <div class="rodape1">
            <p style="font-family:sans-serif;">©Todos Direitos Reservados FashionReborn Ltda.</p>
			<img src="imagens/telefone.png"><p>(77) 3441-2106</p>
			</div>
			<div class="rodape1">
			<img src="imagens/instagram.png"><p>@fashion_reborn</p>
			</div>
			<div class="rodape1">
			<img src="imagens/facebook.png"><p>FashionRebornRoupas</p>
			</div>
			<div class="rodape1">
			<img src="imagens/twiter.png"><p>fashionReborn_roupas</p>
			</div>
			<div id="endereco">
			<p>Rua: Praça da Bandeira, 683,
			Centro,Malhada de Pedras-BA</p>
            </div>
            <div class="rodape1">
                <img src="images/instagram.png">
                <p>@fashion_reborn</p>
            </div>
            <div class="rodape1">
                <img src="images/facebook.png">
                <p>FashionRebornRoupas</p>
            </div>
            <div class="rodape1">
                <img src="images/twiter.png">
                <p>fashionReborn_roupas</p>
            </div>
            <div id="endereco">
                <p>Rua: Praça da Bandeira, 683,</p>
                <p>
                    Centro,Malhada de Pedras-BA</p>
            </div>
        </div>
        <p style="font-family:sans-serif;">©Todos Direitos Reservados FashionReborn Ltda.</p>
    </footer>
    <script>
        function redireciona(e) {
            if (e.id == 'moda-masculina') {
                window.location.replace('brecho.php?pagina=1')
            } else if (e.id == 'moda-feminina') {
                window.location.replace('brecho.php?pagina=2')
            } else {
                window.location.replace('brecho.php?pagina=3')
            }
        }
    </script>
</body>


</html>
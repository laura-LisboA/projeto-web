<?php
if ($_GET['pagina'] == 1) {
    require_once "roupasmasculina.php";

} elseif ($_GET['pagina'] == 2) {
    require_once 'roupasfemininas.php';

} else {
    require_once 'roupaskids.php';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Roupas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/brecho.css">
</head>

<body>
    <header>
        <div id="menu">

            <nav>
                <div>
                    <img width="90" height="100%" src="images/logo.png">
                </div>
                <ul>
                    <li><a class="menu-option" href="/projeto-web">Home</a></li>
                    <li><a class="menu-option" href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>">Tudo</a>
                    </li>
                    <?php if ($_GET['pagina'] == 2) { ?>
                        <li><a class="menu-option" id="sapato"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Sapatos">Sapatos</a></li>
                        <li><a class="menu-option" id="vestido"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Vestidos">Vestidos</a></li>
                        <li><a class="menu-option" id="short"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Shorts">Shorts</a></li>
                        <li><a class="menu-option" id="calca"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Calça">Calças</a></li>
                        <li><a class="menu-option" id="blusa"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Blusa">Blusas</a></li>
                        <li><a class="menu-option" id="blusa"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Saia">Saias</a></li>
                    <?php } else { ?>
                        <li><a class="menu-option" id="short"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Shorts">Shorts</a></li>
                        <li><a class="menu-option" id="calca"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Calça">Calças</a></li>
                        <li><a class="menu-option" id="blusa"
                                href="/projeto-web/brecho.php?pagina=<?= $_GET['pagina'] ?>&tipo=Blusa">Blusas</a></li>
                    <?php } ?>

                </ul>
            </nav>
        </div>
    </header>
    <div class='container-roupas'>
        <?php foreach ($roupas as $roupa) { ?>
            <?php if (!isset($_GET['tipo'])) { ?>
                <div class="produto" id="<?= $roupa['foto'] ?>">
                    <img src="<?= $roupa['foto'] ?>" width="100%" height="70%" alt="erro">
                    <div class="texto-produto">
                        <p>Valor: R$
                            <?= $roupa['preco'] ?>
                        </p>
                        <p>Descrição:
                            <?= $roupa['descricao'] ?>
                        </p>
                        <p>Tamanho:
                            <?= $roupa['tamanho'] ?>
                        </p>
                    </div>
                </div>
            <?php } else { ?>
                <?php if ($roupa['tipo'] == $_GET['tipo']) { ?>
                    <div class="produto" id="<?= $roupa['foto'] ?>">
                        <img src="<?= $roupa['foto'] ?>" width="100%" height="70%" alt="erro">
                        <div class="texto-produto">
                            <p>Valor: R$
                                <?= $roupa['preco'] ?>
                            </p>
                            <p>Descrição:
                                <?= $roupa['descricao'] ?>
                            </p>
                            <p>Tamanho:
                                <?= $roupa['tamanho'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
    <footer>
        <div class='footer'>
            <div class="rodape1">
                <img src="images/telefone.png">
                <p>(77) 3441-2106</p>
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
</body>

</html>
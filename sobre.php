<!DOCTYPE html>
<html lang="pt-br"> <!--Facilitando o trabalho do navegador já atribuindo a linguagem da página em PT-BR-->
    <head>
        <meta charset="utf-8"> <!--Forçando o arquivo em utf8-->
        <title>Clinica Kibeleza</title>
        <meta name="viewport" content="width=device-width">
        <!--CSS - Arquivo de reset das configurações do Browser-->
        <link rel="stylesheet" type="text/css" href="css\reset.css"> 
        <link rel="icon" type="image/png" href="img\icon\favicon-32x32.png"> <!--Colocando o logotipo na Guia-->
        <!--Adicionando bibliotecas de Carrossel-->
        <link rel="stylesheet" type="text/css" href="css\slick.css">
        <link rel="stylesheet" type="text/css" href="css\slick-theme.css">
        <!--Adicionando animação-->
        <link rel="stylesheet" type="text/css" href="css\animate.css">
        <!--LITY-->
        <link rel="stylesheet" type="text/css" href="css\lity.css">
        
       <link rel="stylesheet" type="text/css" href="css\estilo.css"> <!--Arquivo de estilo do CSS-->
    </head>
    <body>
        <main>
            
        <!--É um cabeçalho do site, onde ficará armazenada toda a parte do topo e se manterá sem alterar-->
        <?php require_once("topo.php"); ?> <!--link do topo da página-->
        <?php require_once("banner.php"); ?>
        
        <section class="sobre"> <!--Inicio da página sobre-->
            <div class="site">
                <article>
                    <img src="img\micro.jpg" alt="foto teste">
                </article>
                <article class="info">
                    <article>
                        <h2>Quem Somos?</h2>
                    </article>
                    <article>
                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                    </article>
                </article>
            </div>
        </section>
        </main>
        <?php require_once("rodape.php"); ?> <!--Link do sobre, partes de forma separada-->
    </body>
    <script type="text/javascript" src="js\jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js\wow.js"></script>
    <script type="text/javascript" src="js\lity.js"></script>  
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
    <script type="text/javascript" src="js\slick.js"></script>
    <script type="text/javascript" src="js\animacao.js"></script>
</html>
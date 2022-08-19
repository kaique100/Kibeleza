<!DOCTYPE html>
<html lang="pt-br"> <!--Facilitando o trabalho do navegador já atribuindo a linguagem da página em PT-BR-->
    <head>
        <meta charset="utf-8"> <!--Forçando o arquivo em utf8-->
        <meta name="viewport" content="width=device-width">

        <title>Clinica Kibeleza</title>
        <!--CSS - Arquivo de reset das configurações do Browser-->
        <link rel="stylesheet" type="text/css" href="css\reset.css"> 
        <link rel="icon" type="image/png" href="img\icon\favicon-32x32.png"> <!--Colocando o logotipo na Guia-->
        <!--Adicionando bibliotecas de Carrossel-->
        <link rel="stylesheet" type="text/css" href="css\slick.css">
        <link rel="stylesheet" type="text/css" href="css\slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css\estilo.css"> <!--Arquivo de estilo do CSS-->
    </head>
    <body>
        <!--É um cabeçalho do site, onde ficará armazenada toda a parte do topo e se manterá sem alterar-->
        <?php require_once("topo.php"); ?> <!--link do topo da página-->
        <section class="banner"> <!--SECTION: Tag usada para definir seções na página-->
            <img src="img\microagulhamento.jpg" alt="Banner da página KiBeleza">
            <img src="img\imagemcabelo-1.png" alt="Banner da página KiBeleza">
        </section> <!--Fim da seção Banner-->
        <section class="servicos">
            <div class="site">
                <article>
                    <h2>Nossos Serviços</h2> <!--Titulo da Página-->
                </article>
                <article class="listaServicos1"> <!--Classe que será utilizada para configurar todos os serviços-->
                    <article>
                        <img src="img\servicos04.png" alt="Serviço">
                        <h3>Microagulhamento</h3>
                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                        <a href="#">leia mais</a>
                    </article>
                    <article>
                            <img src="img\servicos03.png" alt="Serviço">
                            <h3>Microagulhamento</h3>
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                            <a href="#">leia mais</a>
                    </article>
                    <article>
                            <img src="img\servicos02.png" alt="Serviço">
                            <h3>Microagulhamento</h3>
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                            <a href="#">leia mais</a>
                    </article>
                    <article>
                            <img src="img\servicos04.png" alt="Serviço">
                            <h3>Microagulhamento</h3>
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                            <a href="#">leia mais</a>
                    </article>
                </article>
            </div>
        </section>
        <section class="servicos">
            <div class="site">
                    <article class="listaServicos2">
                            <article>
                                <img src="img\servicos03.png" alt="Serviço">
                                <h3>Microagulhamento</h3>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                                <a href="#">leia mais</a>
                            </article>
                            <article>
                                    <img src="img\servicos03.png" alt="Serviço">
                                    <h3>Microagulhamento</h3>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                                    <a href="#">leia mais</a>
                            </article>
                            <article>
                                    <img src="img\servicos03.png" alt="Serviço">
                                    <h3>Microagulhamento</h3>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                                    <a href="#">leia mais</a>
                            </article>
                            <article>
                                    <img src="img\servicos03.png" alt="Serviço">
                                    <h3>Microagulhamento</h3>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
                                    <a href="#">leia mais</a>
                            </article>
                    </article>
            </div>
        </section>
        <?php require_once("rodape.php"); ?> <!--Link do sobre, partes de forma separada-->
    </body>
    <script type="text/javascript" src="js\jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js\wow.js"></script>
    <script type="text/javascript" src="js\lity.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
   
    <script type="text/javascript" src="js\slick.js"></script>
    <script type="text/javascript" src="js\animacao.js"></script>
</html>
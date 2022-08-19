<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> <!--Forçando o arquivo em UTF8, linguagem de teclado universal-->
        <title>Clinica Kibeleza</title>
        <!--Viewport:fornece instruções ao navegador sobre como controlar as dimensões e o dimensionamento da página-->
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
        <!--header - Cabeçalho do site-->
        <?php require_once("topo.php"); ?>

        <section class="map"> <!--Iframe : especifica um quadro, ou seja você pode colocar um link de algum site-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254647270517!2d-46.434050784408164!3d-23.495592265053293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac+S%C3%A3o+Miguel+Paulista!5e0!3m2!1spt-BR!2sbr!4v1562247662760!5m2!1spt-BR!2sbr"width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <section class="site contato">
			<article>
			<h2>Formulário de contato</h2>
			<form action="#" method="post" class="form"> <!--FORM:usada para criar um formulário HTML para entrada do usuário-->
				<div>
					<input type="text" name="nome" placeholder="Digitar o nome: " required> <!--imput:especifica um campo de entrada no qual o usuário pode inserir dados-->
				</div>
				<div>
					<input type="email" name="email" placeholder="Digite seu e-mail: " required>
				</div>
				<div>
					<input type="tel" name="fone" placeholder="Digite seu telefone: ">
				</div>
				<div>
					<textarea name="mems" placeholder="Digite sua mensagem: " cols="5" rows="10"></textarea>
				</div>
				
			</form>
			
			</article> <!-- Fim Article Form -->
			<article>
				<h2>Dados Salão KiBeleza!</h2>
				<ul>
					<li>Telefone: 5698-6598</li>
					<li>WhatsApp: 96886-6886</li>
					<li>End: Av. São Miguel, 2525 - São Miguel</li>
					<li>E-mail: contato@kibeleza.com.br</li>
					<li>Site: www.kibeleza.com.br</li>
				</ul>
			</article>
		</section>    
       
     
        <?php require_once("rodape.php"); ?>
    </body>
    <script type="text/javascript" src="js\jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js\slick.js"></script>
    <script type="text/javascript" src="js\wow.js"></script>
    <script type="text/javascript" src="js\lity.js"></script>
    <script type="text/javascript" src="js\animacao.js"></script>
   
</html>
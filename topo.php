<!--É um cabeçalho do site, onde ficará armazenada toda a parte do topo e se manterá sem alterar-->
<header id="topo-fixo"> <!--ID- Só pode ser utilizado uma única vez-->
            <div class="site topo"> <!--Divisão de blocos do topo do site. Class: pode ser usada várias vezes, usada para segmentar e definir classes -->
                <h1> Clinica KiBeleza!!!</h1>
                <button class="abrir-menu"></button>
                <!--Colocando o Logo Kibeleza na página. SRC= é colocado o caminho para qual imagem deve ser capturada-->
                <!--img src="img\logo-kibeleza.svg" alt="Logo KiBeleza"--> <!--Espécie de comentário que aparecerá caso a imagem não apareça, e também é utilizado para acessibilidade--> 
                  <nav>
                  <button class="fechar-menu"></button>
                      <ul> <!--Habilita lista para criar tópicos-->
                        <li>
                            <a href="index.php"> 
                                <span class="icon iconHome"></span> <!--Coloca os objetos em linha, podendo colocar diferentes ícones na mesma linha-->
                                <span>HOME</span>
                            </a>
                        </li> <!--Fim da lista "Home"-->
                        <li>
                            <a href="sobre.php">
                                <span class="icon iconSobre"></span>
                                <span>SOBRE</span>
                            </a>
                        </li> <!--Fim da lista Sobre-->
                        <li>
                            <a href="servico.php">
                                <span class="icon iconServico"></span>
                                <span>SERVIÇO</span>
                            </a>
                        </li> <!--Fim da lista Serviço-->
                       
                        <li>
                            <a href="contato.php">
                                <span class="icon iconContato"></span>
                                <span>CONTATO</span>
                            </a>
                        </li> <!--Fim da lista Contato-->
                      </ul>
                  </nav>
            </div>
</header>
        <script type="text/javascript" src="js/menu-fixo.js"></script>
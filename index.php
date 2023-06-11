<!DOCTYPE html> 
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Zamatsu idiomas </title>
    </head>
    <body>
        <header>
            <div class="topo"> 
                <nav> 
                    <ul>
                        <li> <a href="#Home"> <span class="icon iconHome"> </span> <span>  HOME </span> </a> </li>
                        <li> <a href="#Sobre"> <span class="icon iconSobre"> </span> <span>  SOBRE NÓS </span> </a> </li>
                        <li> <a href="#Curso"> <span class="icon iconCurso"> </span> <span>  CURSO </span> </a> </li>
                        <li> <a href="#Contato">  <span class="icon iconContato"> </span> <span>  CONTATO </span> </a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="banner">
            <img src="img/banner.png"> 
        </section>

        <a name="Sobre"> </a>
        <section class="sobre">
            <div class="site">
                <article>
                    <h2> Sobre Nós </h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Zamatsu JP printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised Zamatsu JP with the release of Letraset sheets Zamatsu JP Lorem Ipsum passages. </p>
                </article>

                <article>
                    <img src="img/sobre.png">
                </article>
            </div>
        </section>

        <section class="PorqueJP"> 
            <div class="site">
                <div class="box-video">
                    <h2> Porque aprender Japonês ? </h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_NZORnpKDJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="width:100%"></iframe>
                </div>
            </div>
        </section>
        
        <div class="wrapper">
            <div class="close-chat">
                <button id="fecha-chat"> <img src="img/icon/close-svgrepo-com.svg"> </button>
            </div>
            <div class="title">Zamatsu Chat </div>
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="img-chat"> </div>
                        <div class="msg-header">
                            <p>Possui dúvidas ? <br> tecle sim para começar o autoatendimento </p>
                        </div>
                    </div>
                </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Digite aqui" required>
                    <button id="send-btn">Enviar</button>
                </div>
            </div>
        </div>
    
        <div id="chat-icone">
            <button id="abre-chat" style="cursor:pointer;">
                <div class="ballon"> 
                    <p> Olá, posso ajudar? </p>
                </div>
                <img src="img/icon/chat.png" style="width:60px;"> 
            </button>
        </div>

        <a name="Curso"> </a>
        <section class="curso-modulos">
            <h2> Módulos do Curso </h2>
            <div class="site">
                <div class="conteudo-box">
                    <div class="card-modulo">
                        <div class="pic-box">
                            <img src="img/img1.png">
                        </div>
                        <h3> Viagens </h3>
                        <p> Você poderá usar os conhecimentos desse modulo para realizar uma viagem ao japão </p>
                    </div>
                    <div class="card-modulo">
                        <div class="pic-box">
                            <img src="img/img2.png">
                        </div>
                        <h3> Literatura </h3>
                        <p> Você conseguirá ler os suas obras preferidas no idioma nativo em que foi escrito </p>
                    </div>
                    <div class="card-modulo">
                        <div class="pic-box">
                            <img src="img/img3.png">
                        </div>
                        <h3> Conversação </h3>
                        <p> Você vai conseguir falar o idioma da terra do sol nascente de forma fluente em poucos meses ! </p>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once('content/avaliacoes.php'); ?>
        
        <hr>
        <a name="Contato"> </a>
        <footer>
            <div class="site">
                <h2> Entre em contato </h2>
                <p> zamatsu.idiomasjp@gmail.com </p>
                <div class="icon-contato">
                    <a href="https://www.facebook.com/" target="_blank"> <img src="img/icon/facebook.svg"> </a>
                    <a href="https://www.instagram.com/felipe_valentine/" target="_blank"> <img src="img/icon/insta.svg"> </a>
                </div>
                <h3> Av. Galvão bueno, liberdade, São paulo - SP, 0005482 </h3>
            </div>
        </footer>
        <script src="js_zamatsu/chat.js"> </script>
        <script src="js_zamatsu/avaliacoes.js"> </script>
    </body>
</html>
<!DOCTYPE html> 
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Zamatsu JP </title>
    </head>
    <body>
        <header>
            <div class="topo"> 
                <nav> 
                    <ul>
                        <li> <a href="index.php">  HOME </a> </li>
                        <li> <a href="#Sobre">  SOBRE NÓS </a> </li>
                        <li> <a href="#Curso">  CURSO </a> </li>
                        <li> <a href="#Contato">  CONTATO </a> </li>
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
            <div class="title">Zamatsu Chat </div>
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="img-chat"> </div>
                        <div class="msg-header">
                            <p>Possui dúvidas ? tecle sim para começar o autoatendimento</p>
                        </div>
                    </div>
                </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Type something here.." required>
                    <button id="send-btn">Send</button>
                </div>
            </div>
        </div>

        <a name="Curso"> </a>
        <section class="curso-modulos">
            <h2> Módulos do Curso </h2>
            <div class="site">
                
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
                    <img src="img/facebook.svg">
                    <img src="img/insta.svg">
                </div>
                <h3> Av. Galvão bueno, liberdade, São paulo - SP, 0005482 </h3>
            </div>
        </footer>
        <script src="js_zamatsu/chat.js"> </script>
        <script src="js_zamatsu/avaliacoes.js"> </script>
    </body>
</html>
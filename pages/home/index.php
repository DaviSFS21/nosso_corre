<?php
    session_start();

    if(isset($_SESSION['nome'])){
        $user = "<a href='../../controllers/exit.php'>".$_SESSION['nome']." - Sair</a>";
    }else{
        $user = "<a href='../login/login.php'>Login</a>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <title>Nosso Corre</title>
</head>

<body>
  <div class="loading">
    <div class="loading-spinner"></div>
  </div>
  <section class="showcase">
    <header>
      <div class="wrapper">
        <header>
          <i class="bx bx-cookie"></i>
          <h2>Política de Cookies</h2>
        </header>
        <div class="data"><br>
          <p>Este site utiliza Cookies para ajudar você a ter uma melhor experiência. <a id="term-use"
              href="../terms/html/termo_uso.html">Termos de uso</a></p>
        </div>
        <div class="buttons">
          <button class="button" id="acceptBtn">Prosseguir</button>
        </div>
      </div>
      <h2 class="logo"></h2>
      <div class="toggle"></div>
    </header>
    <div class="overlay"></div>
    <div class="text">
      <h2>A verdadeira <b>cultura </b></h2>
      <h3>É dar valor aos nossos.</h3>
      <p>Nascemos para dar voz aos que nunca foram escutados.<br>
        Para trazer luz a jovens líderes e jovens talentos.<br>
        Para contar histórias reais, por vozes reais.<br>
        Para fazer da busca pela vitória, um relato coletivo.<br>
        Para inspirar a nova geração, no presente.<br>
        Para promover a inclusão e o bem-estar coletivo,<br>
        mas, acima de tudo, a esperança.<br>
        Para fazer de visões, a realidade.</p>
    </div>
  </section>
  <div class="menu">
    <ul>
      <li><a href="#">Início</a></li>
      <li><a href="#sobreNos">Sobre Nós</a></li>
      <li><a href="#corre">O Corre</a></li>
      <li><?php echo $user ?></li>
      <li><a href="../contact/contato.html">Contato</a></li>
      <!-- <li><a href="../contact/patrocinadores.html">Patrocinadores</a></li> --> 
    </ul>
  </div>
  <div class="imgtext">
    <img src="../../assets/images/png/Morro.png" alt="Imagem do Morro">
    <p>Uma plataforma onde você se identifica, esse é o</p>
    <h2>Nosso Corre</h2>
  </div>
  <h1 class="hover-underline-animation" style="margin-top: 200px">Salve!</h1>
  <p class="contentdesc">Conosco, você é capaz. O seu corre, é o <span
      style="color:#fcaa43; margin-left:5px;">nosso.</span></p>
  <span>Por isso, unimos tópicos influentes do nosso país para que você se identifique.</span>
  </section>
  <div class="cards" id="corre">
    <div class="services">
      <div class="content content-1">
        <h2>Música</h2>
        <p>Publique e acesse as músicas e os artistas do nosso país.</p>
        <a href="../musica/musica.php">Veja mais</a>
      </div>
      <div class="content content-2">
        <h2>Portal de notícias</h2>
        <p>Veja e participe das notícias e acontecimentos não valorizados publicamente ao redor do Brasil.</p>
        <a href="../../pages/news/news.php">Veja mais</a>
      </div>
      <div class="content content-3">
        <h2>Eventos</h2>
        <p>Participe e cadastre eventos culturais pelo Brasil.</p>
        <a href="../events/eventos.php">Veja mais</a>
      </div>
    </div><br><br><br>
    <!-- Sobre Nós -->
    <div class="about-wrapper">
      <div class="about-left">
        <div class="about-left-content">
          <div>
            <div class="shadow">
              <div class="about-img">
                <img src="../../assets/images/svg/Nosso_Corre.svg" alt="Logo Nosso Corre">
              </div>
            </div>
            <h2>Nosso Corre</h2>
            <h3>Integração Cultural</h3>
          </div>
          <ul class="icons">
            <li><a href="http://instagram.com/nosso__corre/" target="_blank"><i class="fa fa-instagram"
                  style="color: #fff;"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="about-right" id="sobreNos">
        <h1 style="font-family: Grafite;">Nosso Corre</h1>
        <h2>Veja o que somos e o nosso proposito</h2>
        <div class="about-btns">
          <!-- <button type="button" class="btn btn-yellow">O Corre</button> -->
          <a href="../contact/contato.html"><button type="button" class="btn btn-white">Contatos</button></a>
        </div>
        <div class="about-para">
          <p>Sabemos que as futuras riquezas da nossa nação ainda estão por vir. O que de fato temos de nascença, é o
            espírito e a coragem de ser brasileiro, a coragem de fazer acontecer e mostrar para todos que somos um só.
          </p>
          <p>A plataforma Nosso Corre foi criada para instruir e promover a valorização do nosso país, afim de destacar
            as irreconhecidas joias do Brasil.</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <h1>Nosso Corre</h1>
        <p>Conosco você é capaz.</p>

        <div id="footer_social_media">
          
        </div>
      </div>

      <ul class="footer-list">
        <li>
          <h3>Site</h3>
        </li>
        <li>
          <a href="../musica/musica.php" class="footer-link">Músicas</a>
        </li>
        <li>
          <a href="../news/news.php" class="footer-link">Portal de notícias</a>
        </li>
        <li>
          <a href="../events/eventos.php" class="footer-link">Eventos</a>
        </li>
      </ul>

      <ul class="footer-list">
        <li>
          <h3>Termos do site</h3>
        </li>
        <li>
          <a href="../terms/html/politica_privacidade.html" class="footer-link">Política de privacidade</a>
        </li>
        <li>
          <a href="../terms/html/termo_uso.html" class="footer-link">Termos de uso</a>
        </li>
      </ul>

      <div id="footer_subscribe">
        <h3>Sobre nós</h3>
        <p style="text-align: justify;">
          O Nosso Corre nasce para dar a voz aos que nunca foram escutados, para valorizar os nossos, para inspirar a
          nova geração e propagar acima de tudo, a esperança<a href="https://avatars.githubusercontent.com/u/64922416?v=4" style="text-decoration: none; color: #fff;">.</a></p>
      </div>
    </div>

    <div id="footer_copyright">
      Nosso Corre &#169
      2023 Todos os direitos reservados
    </div>
  </footer>

<script src="./js/loading.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>

</body>
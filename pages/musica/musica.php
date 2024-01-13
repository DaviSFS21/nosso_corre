<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>Nosso Corre - Músicas</title>
</head>

<body>
<div class="loading">
    <div class="loading-spinner"></div>
  </div>
  <div id="hero">
    <div class="slider">
      <div class="hero-carousel">
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/jpg/musicas/racionaismusica.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="red-sec hide"></div>
    <div class="lrb"></div>
    <div class="lgb"></div>
    <div class="l-box">
      <div class="s-down">
        <a href="../home/index.php" style="font-size: 0.8rem; font-weight: 400;">Volte para home</a>
      </div>
    </div>
    <div class="intro-box">
      <div class="in-title hide">Salve!</div>
      <div class="in-txt">
        Bem vindo(a) a sessão de
        <span style="font-family: Grafite; color: #fcca43">Músicas</span>
      </div>
      <div class="in-b-txt hide">
        Escute e descubra os talentos músicais pelo nosso país. <br><br>
      </div>

      <a href="../musica/musicacrud.php" class="button-block button-block--brand active hide"
        style="color:#fcca43">Vamo lá!</a>
    </div>
  </div>

  <!-- Content -->
  <section class="game-section">
    <h2 class="line-title" style="font-size: 3rem;">A Influência da música no <span
        style="font-family: Grafite; color: #fcca43;">Brasil</span></h2>
    <p style="font-size: 2rem; text-align: justify">Já parou pra pensar nessa mistura maluca de <b><span>ritmos e
          estilos</span></b> que é a música brasileira? Desde lá dos tempos do samba clássico até as batidas envolventes
      do funk, a música sempre foi o som que coloca todo mundo pra <b><span>dançar e pensar</span></b>.

      <br>E olha, a <b><span>influência</span></b> disso é insana. A gente tem o sertanejo tocando os corações nos
      cantos mais longínquos do interior, o pagode trazendo alegria pro churrasco de domingo, o axé fazendo a galera
      sambar no carnaval, o rock brasileiro mandando ver nas guitarras, e não podemos esquecer do nosso eterno samba,
      né? Aquele ritmo que flui na veia do país, cheia de histórias e sentimentos.
    </p><br><br>
    <h1 style="font-size: 2rem;">Veja os <span style="font-family: Grafite; color: #fcca43;">principais gêneros</span>
      musicais do nosso país</h1>
    <div class="owl-carousel custom-carousel owl-theme">
      <div class="item active" style="
              background-image:url(../..//assets/images/jpg/musicas/funkmusica.jpg);
            ">
        <div class="item-desc">
          <h3>Funk</h3>
          <p>
            Originado nas favelas do Rio de Janeiro, é um gênero de música com ritmos envolventes com letras que abordam
            uma variedade de temas, incluindo festas, amor e questões sociais. <br><br>

          </p>
        </div>
      </div>
      <div class="item active" style="
              background-image:url(../..//assets/images/jpg/musicas/forromusicas.jpg);
            ">
        <div class="item-desc">
          <h3>Forró</h3>
          <p>
            Originário do Nordeste do Brasil, é caracterizado por ritmos de dança animados e letras muitas vezes
            românticas. <br><br>

          </p>
        </div>
      </div>
      <div class="item" style="
              background-image: url(../../assets/images/jpg/musicas/trapmusicas.jpeg);
            ">
        <div class="item-desc">
          <h3 style="white-space: nowrap;">Trap</h3>
          <p>
            O trap é um subgênero do hip-hop que se caracteriza por suas batidas pesadas, uso proeminente de
            sintetizadores e letras que frequentemente abordam temas como vida nas ruas, dificuldades sociais e
            aspirações individuais <br><br>

          </p>
        </div>
      </div>
      <div class="item" style="
              background-image: url(../../assets/images/jpg/musicas/hiphopmusicas.jpg);
            ">
        <div class="item-desc">
          <h3>Hip-Hop</h3>
          <p>
            O hip-hop é um gênero musical e cultural que engloba diversas formas de expressão, incluindo música, dança,
            arte visual e poesia. <br><br>

          </p>
        </div>
      </div>
      <div class="item" style="
              background-image: url(../../assets/images/jpg/musicas/sertanejomusicas.jpg);
            ">
        <div class="item-desc">
          <h3 style="white-space: nowrap;">Sertanejo</h3>
          <p>
            Um dos gêneros mais populares no Brasil, especialmente em áreas rurais e cidades do interior.<br><br>

          </p>
        </div>
      </div>
      <div class="item" style="
              background-image: url(../../assets/images/jpg/musicas/pagodebrasil.jpeg);
            ">
        <div class="item-desc">
          <h3>Pagode</h3>
          <p>
            Um estilo de música associado à cultura do Rio de Janeiro e outros estados do Brasil, conhecido por suas
            batidas animadas e letras que frequentemente falam sobre festas e relacionamentos. <br><br>

          </p>
        </div>
      </div>
      <div class="item active" style="
              background-image:url(../..//assets/images/jpg/musicas/mpbmusicas.jpg);
            ">
        <div class="item-desc">
          <h3>MPB</h3>
          <p>
            A Música Popular Brasileira (MPB) é um gênero musical que engloba uma ampla variedade de estilos e
            influências musicais, refletindo a riqueza da cultura musical do Brasil. A MPB é caracterizada pela fusão de
            diferentes ritmos e estilos, combinando elementos tradicionais com influências modernas. <br><br>

          </p>
        </div>
      </div>
      <div class="item" style="
              background-image: url(../../assets/images/jpg/musicas/axebrasil.jpg);
            ">
        <div class="item-desc">
          <h3>Axé</h3>
          <p>
            O axé é um gênero musical originário do estado da Bahia, no Brasil.É conhecido por suas batidas
            contagiantes, letras animadas e ritmos que promovem a dança e a celebração. O termo "axé" tem origens nas
            religiões de matriz africana e é usado como uma saudação positiva, uma forma de desejar energia positiva e
            boa sorte. <br><br>

          </p>
        </div>
      </div>
    </div>

    <!-- Músicas do BD -->
    <h2 class="line-title">Músicas para você!</h2>
    <div class='owl-carousel custom-carousel owl-theme'>
      <?php
          require_once "../../assets/db/connect.php";

          $result_musica = mysqli_query($conexao, "SELECT * FROM `musica`");
          $numero_result = mysqli_num_rows($result_musica);

          if($numero_result != 0){
              for($i = 1; $i <= $numero_result; $i++){
                  $vetor_musica = mysqli_fetch_array($result_musica);
                  $data = new DateTime($vetor_musica[3]);

                  echo "
                  <div class='item active ' 
                  style='background-image:url(../../assets/images/jpg/musicas/img_musica.jpg);'>
                    <div class='item-desc'> 
                      <h3>" . $vetor_musica[1] . "</h3>
                      <h1>" . $vetor_musica[2] . "</h1>
                      <video id='videoPlayer' width='420' height='80' controls>
                        <source src='" . $vetor_musica[5] . "' type='video/mp4'>
                      </video>
                      <p>
                      " . $vetor_musica[4] . " - " . $data->format('d/m/Y') . "<br><br>
                      </p>
                    </div>
                  </div>
                  ";
              }
          }
      ?>
    </div>
    <br><br>
    <div class="sectionlocal" style="justify-content: center;
    display: flex;
    align-items: center;
    color: #fcca43;">
    <h1>Pesquise a música:</h1>
  </div>
    <body>
      <form class="search-container" action="#search-bar" method="GET">
        <input type="text" id="search-bar" name="search" placeholder="Ex.: Pop, Rock, MPB, pagode..." style="font-family: Poppins, serif" />
      </form>
    </body>
    <style>
      .search-container {
        width: 490px;
        display: block;
        margin: 0 auto;
      }

      input#search-bar {
        margin: 0 auto;
        width: 100%;
        height: 45px;
        padding: 0 20px;
        font-size: 1rem;
        border: 1px solid #d0cfce;
        outline: none;
      }

      input#search-bar:focus {
        border: 1px solid rgb(73, 77, 162);
        transition: 0.35s ease;
      }

      input#search-bar:focus::-webkit-input-placeholder {
        transition: opacity 0.45s ease;
        opacity: 0;
      }

      input#search-bar:focus::-moz-placeholder {
        transition: opacity 0.45s ease;
        opacity: 0;
      }

      input#search-bar:focus:-ms-placeholder {
        transition: opacity 0.45s ease;
        opacity: 0;
      }
    </style>

    <h2 class="line-title">
    <?php if(isset($_GET['search'])){echo 'Resultados para "' . $_GET['search'] . '"';} ?></h2>
    <div class="owl-carousel custom-carousel owl-theme">
      <?php
        require_once "../../controllers/pesquisar_musica.php";
      ?>
    </div>
  </section>
  <aside style="font-family: Poppins, serif; margin-top: -20px; margin-bottom: 100px;">
    <button>
      <a href="../musica/musicacrud.php" 
      style="color: #fcca43; margin-left: 10px;">Postar música</a>
    </button>
  </aside>
  <br>
  <?php
    if(isset($_SESSION['nome'])){    
  ?>
  <section class="game-section" style="background-color: #041424;">
    <h2 class="line-title" style="color: #fff;">Minhas músicas</h2>
    <div class='owl-carousel custom-carousel owl-theme'>
      <?php
          require_once "../../assets/db/connect.php";

          $result_musica = mysqli_query($conexao, "SELECT * FROM `musica` WHERE `usuario_id` LIKE '" . $_SESSION['id'] . "'");
          $numero_result = mysqli_num_rows($result_musica);

          if($numero_result != 0){
              for($i = 1; $i <= $numero_result; $i++){
                  $vetor_musica = mysqli_fetch_array($result_musica);
                  $data = new DateTime($vetor_musica[3]);

                  echo "
                
                  <div class='item active' style='
                          background-image:url(../../assets/images/jpg/musicas/img_musica.jpg);
                        '>
                    <div class='item-desc'>
                      <h3>" . $vetor_musica[1] . "</h3>
                      <video id='videoPlayer' width='420' height='80' controls>
                        <source src='" . $vetor_musica[5] . "' type='video/mp4'>
                      </video>
                      <p>
                      " . $vetor_musica[4] . " - " . $data->format('d/m/Y') . "<br>
                      <a href='../../controllers/excluir_musica.php?id_musica=" . $vetor_musica[0] . 
                      "&url_msc=" . $vetor_musica[5] . "'
                      onclick=\"return confirm('Tem certeza que deseja excluir " . $vetor_musica[1] . "?')\">
                      Excluir música</a>
                      <br><br>
                      </p>
                    </div>
                  </div>
                  ";
              }
          }
      ?>
    </div>
  </section>
  <?php
    }
  ?>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="./js/script.js"></script>
  <script src="./js/loading.js"></script>
</body>

</html>
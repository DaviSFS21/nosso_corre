<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <title>Nosso Corre - Eventos</title>
</head>

<body>
  <div id="hero">
    <div class="slider">
      <div class="hero-carousel">
        <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../assets/images/jpg/batalha.jpg" class="d-block w-100" alt="..." />
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
        <span style="font-family: Grafite; color: #fcca43">Eventos</span>
      </div>
      <div class="in-b-txt hide">
        Acesse e cadastre os diversos eventos culturais pelo nosso país.
      </div>

      <a href="#eventos" class="button-block button-block--brand active hide" style="color:#fcca43">Vamo lá!</a>
    </div>
  </div>
  <!-- nav -->
  <header>
    <div class="banner">
      <div class="heading_content">
        <h1 style="margin-top: 8rem">
          Nós trazemos reconhecimento<br /><span style="
                justify-content: center;
                display: flex;
                align-items: center;
              ">ao seu cotidiano.</span>
        </h1>
      </div>
    </div>
  </header>
  <div class="sectionlocal">
    <h1>Pesquise pelo nome:</h1>
  </div>
  <body>
    <form class="search-container" action="#search-bar" method="GET">
      <input type="text" id="search-bar" name="search" placeholder="Ex.: Vôlei, encontro, rima, pagode..." style="font-family: Poppins, serif" />
      <a href="#"><img class="search-icon" src="../../assets/images/png/lupa.png" /></a>
    </form>
  </body>
  <section class="game-section">
      <h2 class="line-title"><?php if(isset($_GET['search'])){echo 'Resultados para "' . $_GET['search'] . '"';} ?></h2>
      <div class="owl-carousel custom-carousel owl-theme">
        <?php
          require_once "../../assets/db/connect.php";
          require_once "../../controllers/pesquisar_evento.php";
        ?>
      </div>
  </section>

  <?php
      if(isset($_SESSION['nome'])){
  ?>
  <div class="cardscontent" id="eventos">
    <h1>
      <span style="color: #fcca43">Eventos</span><span style="color: rgb(73, 77, 162)"> populares</span>
    </h1>
    <section class="game-section">
      <h2 class="line-title">Eventos em <?php echo $_SESSION['cidade'] ?></h2>
      <div class="owl-carousel custom-carousel owl-theme">
        <?php
        require_once "../../assets/db/connect.php";

        $result_evento_cidade = mysqli_query($conexao, "SELECT * FROM `eventos` WHERE `cidade` LIKE '" . $_SESSION['cidade'] . "'");
        $numero_result = mysqli_num_rows($result_evento_cidade);

        if($numero_result != 0){
              for($i = 1; $i <= $numero_result; $i++){
                  $vetor_evento_cidade = mysqli_fetch_array($result_evento_cidade);
                  $data = new DateTime($vetor_evento_cidade[3]);

                  echo "
      <div class='item' style='
            background-image:url(" . $vetor_evento_cidade[10] . ");
          '>
        <div class='item-desc'>
          <h3>" . $vetor_evento_cidade[1] . "</h3>
          <p>
          " . $vetor_evento_cidade[2] . " <br>
          " . $data->format('d/m/Y') . "<br><br>
          <strong>Local:</strong> " . $vetor_evento_cidade[6] . ", " . $vetor_evento_cidade[7] . " - " . $vetor_evento_cidade[8] . " <br>
          <br>
          </p>
        </div>
      </div>
                  ";
              }
          }
      }
      ?>
      </div>
    </section>
    <section class="game-section">
      <h2 class="line-title">Eventos ao redor do Brasil</h2>
      <div class="owl-carousel custom-carousel owl-theme">
        <?php
        require_once "../../assets/db/connect.php";

        $result_eventos = mysqli_query($conexao, "SELECT * FROM `eventos`");
        $numero_result = mysqli_num_rows($result_eventos);

        if($numero_result != 0){
              for($i = 1; $i <= $numero_result; $i++){
                  $vetor_eventos = mysqli_fetch_array($result_eventos);
                  $data = new DateTime($vetor_eventos[3]);

                  echo "
      <div class='item' style='
            background-image:url(" . $vetor_eventos[10] . ");
          '>
        <div class='item-desc'>
          <h3>" . $vetor_eventos[1] . "</h3>
          <p>
          " . $vetor_eventos[2] . " <br>
          " . $data->format('d/m/Y') . "<br><br>
          <strong>Local:</strong> " . $vetor_eventos[6] . ", " . $vetor_eventos[7] . " - " . $vetor_eventos[8] . " <br>
          <br>
          </p>
        </div>
      </div>
                  ";
              }
          }
      ?>
      </div>
      <aside style="font-family: Poppins, serif; margin-top: -20px;">
        <button>
          <a href="../events/eventscrud.php" style="color: #fcca43;">Cadastrar eventos</a>
        </button>
      </aside>
    </section>
    <?php
      if(isset($_SESSION['nome'])){
    ?>
    <section class="game-section" style="background-color: #041424;">
      <h2 class="line-title" style="color: #fff;">Meus eventos</h2>
      <div class="owl-carousel custom-carousel owl-theme">
        <?php
        require_once "../../assets/db/connect.php";

        if($numero_result != 0){
              $result_evento_user = mysqli_query($conexao, "SELECT * FROM `eventos` WHERE `usuario_id` LIKE '" . $_SESSION['id'] . "'");
              $numero_result = mysqli_num_rows($result_evento_user);

              for($i = 1; $i <= $numero_result; $i++){
                  $vetor_evento_user = mysqli_fetch_array($result_evento_user);
                  $data = new DateTime($vetor_evento_user[3]);

                  echo "
      <div class='item' style='
            background-image:url(" . $vetor_evento_user[10] . ");
          '>
        <div class='item-desc'>
          <h3>" . $vetor_evento_user[1] . "</h3>
          <p>
          " . $vetor_evento_user[2] . " <br>
          " . $data->format('d/m/Y') . "<br><br>
          <a href='eventsedit.php?id_evento=" . $vetor_evento_user[0] . "'>Editar evento</a> || 
          <a href='../../controllers/excluir_evento.php?id_evento=" . $vetor_evento_user[0] . "&url_img=" . $vetor_evento_user[10]. "'
        onclick=\"return confirm('Tem certeza que deseja deletar este evento?')\">Excluir evento</a><br><br>
          <strong>Local:</strong> " . $vetor_evento_user[6] . ", " . $vetor_evento_user[7] . " - " . $vetor_evento_user[8] . " <br>
          <br>
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
  </div>

  <!--  jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="./js/script.js"></script>
  <script src="./js/loading.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>
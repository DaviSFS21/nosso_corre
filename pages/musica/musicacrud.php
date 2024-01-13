<?php
    require_once "../../controllers/verif_session.php";
    require_once "../../controllers/postar_musica.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/musicacrud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <title>Nosso Corre - Postar Música</title>
</head>

<body>
<div class="loading">
    <div class="loading-spinner"></div>
  </div>
    <div class="title">
        <div class="hero">
            <h1>Fala,<strong><?php echo $_SESSION['nome']; ?></strong> </h1>
            <ul class="icons">
                <a href="../home/index.php" target="_blank"><i class="fa fa-home"
                        style="color: #fcaa43; justify-content: center; align-items: center; display: flex;"><span
                            style="font-family: Poppins, serif; margin-left: 0.3rem;"> Voltar para home</span></i></a>
                </li>
        </div><br><br><br>
        <p><span>Músicas</span></p><br><br>
        <p style="font-size: 2rem; margin-top: -4rem;">Tela de cadastro</p>
    </div>
    <div class="container">
        <fieldset>
            <form enctype="multipart/form-data" action="" method="POST">
                Título: <input type="text" name="n_titulo" maxlength="100"><br>
                Gênero: <input type="text" name="n_genero" maxlength="300"><br>
                Música(.mp3 ou .m4a): <input type="file" name="n_musica"><br>
                <button
                    style="font-family: Poppins, serif; color: #fcaa43; background-color: transparent; font-size: 2rem; border: none; margin-left: -0.5rem;"
                    type="submit">Enviar</button>
            </form>
        </fieldset>
    </div>
    <script src="./js/loading.js"></script>
</body>

</html>
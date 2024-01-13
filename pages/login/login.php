<?php
    require_once "../../controllers/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Nosso Corre - Login</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <img class="wave" src="../../assets/images/png/login/wave-Login.png">
      <div class="container">
        <div class="img">
          <img src="../../assets/images/svg/login/bio-Login.svg">
        </div>
        <div class="login-content">
          <form action="" method="POST">
            <img src="../../assets/images/svg/login/profile-Login.svg">
            <h2 class="title">Bem-Vindo(a) de volta</h2>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="div">
                <h5>E-mail</h5>
                <input type="text" class="input" name="email" maxlength="35" required>
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Senha</h5>
                <input type="password" class="input" name="senha" minlength="6" maxlength="20" required>
              </div>
            </div>
            <a href="../home/index.php">Voltar para a home</a>
            <a href="../signUp/index.php">Cadastrar</a>
            <input type="submit" class="btn" value="Login">
          </form>
        </div>
      </div>
      <script src="js/main.js"></script>
</body>

</html>
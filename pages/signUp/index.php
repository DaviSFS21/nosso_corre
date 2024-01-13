<?php
require_once "../../controllers/cadastro.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <link rel="stylesheet" href="../signUp/css/style.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Nosso Corre - Cadastro</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <img class="wave" src="../../assets/images/png/login/wave-signUp.png">
      <div class="container">
        <div class="img">
          <img src="../../assets/images/svg/login/signUp.svg">
        </div>
        <div class="login-content">
          <form action="" method="POST">
            <h2 class="title">Bem-Vindo(a)</h2>
            <h2 class="title" style="font-size: medium; color: red;"><?php if(isset($total_rep)) { echo trim($total_rep, " e "); } ?></h2>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-user"></i>
              </div>
              <div class="div">
                <h5>Nome</h5>
                <input type="text" class="input" name="nome" maxlength="30" required>
              </div>
            </div>
            <div class="input-div one">
              <div class="i">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="div">
                <h5>E-mail</h5>
                <input type="email" class="input" name="c_email" maxlength="35" required>
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-id-card"></i>
              </div>
              <div class="div">
                <h5>CPF</h5>
                <input type="text" class="input" name="c_cpf" onkeypress="$(this).mask('000.000.000-00');" maxlength="15" required>
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Senha</h5>
                <input type="password" class="input" name="senha" id="senha" oninput="checkSenha()" minlength="6" maxlength="20" required>
              </div>
            </div>
              <div class="input-div pass">
                <div class="i">
                  <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                  <h5>Repetir senha</h5>
                  <input type="password" class="input" id="repSenha" oninput="checkSenha()" minlength="6" maxlength="20" required>
                </div>
              </div>
            <div class="">
            <a href="../home/index.php">Voltar para a home</a>
            <a href="../login/login.php">Já possuo cadastro</a>
            </div>
            <input id=confirmButton type="submit" class="btn" value="Login" disabled>
          </form>
        </div>
      </div>

      <!-- JavaScript -->
      <script src="./js/main.js"></script>
      <!--  Jquery -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!--  Cloudflare -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="./js/loading.js"></script>
</body>

</html>
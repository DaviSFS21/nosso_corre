<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
  <title>Nosso Corre - Editar perfil</title>
</head>

<body>
      
      <div class="edit-profile">
        <h1>Editar Perfil</h1>
        <form id="edit-form">
          <div class="form-group">
            <label for="edit-email">Email:</label>
            <input type="text" id="edit-email" name="email">
          </div>
          <div class="form-group">
            <label for="edit-password">Senha:</label>
            <input type="password" id="edit-password" name="password">
          </div>
          <div class="form-group">
            <label for="edit-cep">CEP:</label>
            <input type="text" id="edit-cep" name="cep">
          </div>
          <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" id="photo" name="photo">
            <label for="photo" class="file-upload">Selecionar Foto</label>
          </div>
          <button type="submit" class="btn-save" onclick="alert('Perfil alterado com sucesso!')">
          <a href="./profile.php" style="text-decoration:none; color: #fff;">Salvar</a>
        </button>
        </form>
      </div>
      <script src="./js/main.js"></script>
</body>

</html>
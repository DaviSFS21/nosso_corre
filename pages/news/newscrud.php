<?php
    require_once "../../controllers/verif_session.php";
    require_once "../../controllers/postar_artigo.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
    <link rel="stylesheet" href="../news/css/newscrud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <title>Nosso Corre - Postar artigo</title>
</head>

<body>
<div class="loading">
    <div class="loading-spinner"></div>
  </div>
    <div class="title">
        <div class="hero">
            <h1>Fala, <strong><?php echo $_SESSION['nome']; ?></strong> </h1>
            <ul class="icons">
                <a href="../home/index.php" target="_blank"><i class="fa fa-home"
                        style="color: #fcaa43; justify-content: center; align-items: center; display: flex;"><span
                            style="font-family: Poppins, serif; margin-left: 0.3rem;"> Voltar para home</span></i></a>
                </li>
        </div><br><br><br>
        <p><span style="font-family: Grafite;"> Portal de notícias</span></p><br>
        <p style="font-size: 2rem; margin-top: -4rem;">Tela de cadastro</p>
    </div>
    <div class="container">
        <fieldset>
            <form enctype="multipart/form-data" action="" method="POST">
                Título: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;"
                    type="text" name="n_titulo" id="n_titulo" maxlength="100" oninput="salvarArtigo()"><br>
                Texto: <br><textarea name="n_texto" id="n_texto" cols="90" rows="20" maxlength="3000"
                    oninput="salvarArtigo()"></textarea><br>
                Imagem: <input type="file" name="n_img"><br>
                <a onclick="removerCookies()">Recomeçar</a>
                <button
                    style="font-family: Poppins, serif; color: #fcaa43; background-color: transparent; border: none; font-size: 1rem;"
                    type="submit">Enviar</button>
            </form>
        </fieldset>
    </div>
    <script src="./js/loading.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script>
        const titulo = Cookies.get('titulo');
        document.querySelector("input[name=n_titulo]").value = Cookies.get('titulo') || "";

        const texto = Cookies.get('texto');
        document.querySelector("textarea").innerHTML = Cookies.get('texto') || "";

        function salvarArtigo(){
            var nTitulo = document.querySelector("input[name=n_titulo]").value;
            Cookies.set('titulo', nTitulo, { expires: 5 });

            var nTexto = document.querySelector("#n_texto").value;
            Cookies.set('texto', nTexto, { expires: 5 });
        }

        function removerCookies(){
            Cookies.remove('titulo');
            Cookies.remove('texto');

            document.querySelector("input[name=n_titulo]").value = "";
            document.querySelector("textarea").innerHTML = "";
        }
    </script>
</body>

</html>
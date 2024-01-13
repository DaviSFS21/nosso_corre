<?php
    require_once "../../controllers/verif_session.php";
    require_once "../../controllers/criar_evento.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/eventscrud.css">
    <link rel="shortcut icon" href="../../assets/images/png/Nosso_Corre.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    
    <script src="./js/script.js"></script>
    <script src="./js/cep.js"></script>
    <title>Nosso Corre - Criar Eventos</title>
</head>

<body>
<div class="loading">
    <div class="loading-spinner"></div>
</div>
    <div class="title">
        <div class="hero">
            <h1>Fala, <strong><?php echo $_SESSION['nome']; ?></strong></h1>
            <ul class="icons">
                <a href="../home/index.php" style="text-decoration: none;"><i class="fa fa-home"
                        style="color: #fcaa43; justify-content: center; align-items: center; display: flex;"><span
                            style="font-family: Poppins, serif; margin-left: 0.3rem;"> Voltar para home</span></i></a>
                </li>
        </div><br><br><br>
        <p><span style="font-family: Grafite;"> Eventos</span></p><br>
        <p style="font-size: 2rem; margin-top: -4rem;">Tela de cadastro</p>
    </div>
    <div class="container">
        <fieldset>
            <form enctype="multipart/form-data" action="" method="POST">
                Nome do evento: <input style="border:none; border-bottom: 1px solid black; width: 50%; outline: none;"
                    type="text" name="n_nome_ev" maxlength="100" required><br><br>
                Descrição: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;"
                    type="text" name="n_descricao" maxlength="1200"></textarea><br><br>
                Data de Início: <input type="date" name="n_data_inicio" id="data_inicio" oninput="compararDatas();"
                    pattern="YYYY-MM-DD" min='<?= date("Y-m-d") ?>' required><br><br>
                Data de Término: <input type="date" name="n_data_fim" id="data_fim"  oninput="compararDatas();"
                    pattern="YYYY-MM-DD" min='<?= date("Y-m-d") ?>' disabled required><br><br>
                CEP: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;" name="n_cep"
                    type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"><br><br>
                Rua: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;" name="n_rua"
                    type="text" id="rua" size="60" required><br><br>
                Bairro: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;"
                    name="n_bairro" type="text" id="bairro" required><br><br>
                Cidade: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;"
                    name="n_cidade" type="text" id="cidade"><br><br>
                UF: <input style="border:none; border-bottom: 1px solid black; width: 70%; outline: none;"
                    name="n_estado" type="text" id="uf" maxlength="2"><br><br>
                Imagem do evento: <input type="file" name="n_img"><br><br>
                <button type="submit">Criar evento</button>
            </form>
        </fieldset>
    </div>

    <script>
        function compararDatas() {
            var dataInicio = document.getElementById("data_inicio").value;
            var dataFim = document.getElementById("data_fim");

            console.log(dataInicio);

            if(dataInicio != ""){
                dataFim.disabled = false;
                dataFim.setAttribute("min", dataInicio);
            }else{
                dataFim.disabled = true;
                dataFim.setAttribute("min", "Y-m-d");
            }
        }
    </script>
    <!--  Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--  Cloudflare -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="./js/loading.js"></script>
</body>
</html>
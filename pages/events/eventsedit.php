<?php
    require_once "../../controllers/verif_session.php";
    require_once "../../controllers/editar_evento.php";
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
    <title>Nosso Corre - Editar Eventos</title>
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
            Nome do evento: <input type="text" name="a_nome_ev" maxlength="100" value="<?php echo $edit_evento[1]; ?>" required><br><br>
        Descrição: <textarea type="text" name="a_descricao" maxlength="1200" rows="6" cols="26"><?php echo $edit_evento[2]; ?></textarea><br><br>
        Data de Início: <input type="date" name="a_data_inicio" value="<?php echo $edit_evento[3]; ?>" pattern="YYYY-MM-DD" required><br><br>
        Data de Término: <input type="date" name="a_data_fim" value="<?php echo $edit_evento[4]; ?>" pattern="YYYY-MM-DD" required><br><br>
        CEP: <input name="a_cep" type="text" id="cep" value="<?php echo $edit_evento[5]; ?>" size="10" maxlength="9"
               onblur="pesquisacep(this.value);"><br><br>
        Rua: <input name="a_rua" type="text" id="rua" value="<?php echo $edit_evento[6]; ?>" size="60" required><br><br>
        Bairro: <input name="a_bairro" type="text" id="bairro" value="<?php echo $edit_evento[7]; ?>" required><br><br>
        Cidade: <input name="a_cidade" type="text" id="cidade" value="<?php echo $edit_evento[8]; ?>" required><br><br>
        UF: <input name="a_estado" type="text" id="uf" value="<?php echo $edit_evento[9]; ?>" required><br><br>
                <button type="submit">Atualizar evento</button>
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
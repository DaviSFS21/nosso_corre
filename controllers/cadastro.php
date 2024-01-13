<?php
    if(isset($_POST['c_email'])){
        //Estabelecendo conexão para realizar a busca de um perfil com dados idênticos
        require_once '../../assets/db/connect.php';

        $cpf = $_POST['c_cpf'];
        $email = $_POST['c_email'];

        //tranformando em numero o resultado da pesquisa
        $verif_cpf = mysqli_num_rows(mysqli_query($conexao, "SELECT * FROM `usuario` WHERE `cpf` = '$cpf'"));
        $verif_email = mysqli_num_rows(mysqli_query($conexao, "SELECT * FROM `usuario` WHERE `email` = '$email'"));
        $verif_geral = $verif_cpf + $verif_email;

        if($verif_geral > 0){
            $total_rep = "Já cadastrados: ";
            if ($verif_cpf == 1) $total_rep = $total_rep . "CPF e ";
            if ($verif_email == 1) $total_rep = $total_rep . "Email";

            ?>
                <script>
                    alert("<?php echo trim($total_rep, " e "); ?>");
                </script>
            <?php
        }else{
            $nome = $_POST['nome'];
            $data_nasc = $_POST['data_nasc'];
            $senha = sha1($_POST['senha']);

            mysqli_query($conexao, "INSERT INTO 
            `usuario`(`nome`, `cpf`, `data_nasc`, `email`, `senha`, `cep`, `rua`, `bairro`, `cidade`, `estado`,`adm_check`) 
            VALUES ('$nome','$cpf','$data_nasc','$email','$senha','12231-675','Avenida Cidade Jardim','Jardim Satélite','São José dos Campos','SP',0)");
            ?>
                <script>
                    alert("Cadastrado com sucesso!");
                    window.location.replace("../login/login.php");
                </script>
            <?php
        }

        mysqli_close($conexao);
    }
?>
<?php
    require_once '../../assets/db/connect.php';

    if(isset($_GET['id_evento'])){
        $result_evento = mysqli_query($conexao, "SELECT * FROM `eventos` WHERE `id` = " . $_GET['id_evento']);
        $numero_result = mysqli_num_rows($result_evento);
        if($numero_result == 1){
            $edit_evento = mysqli_fetch_array($result_evento);
            if(isset($_POST['a_nome_ev'])){
                if($_SESSION['id'] == $edit_evento[11]){
                    $id_evento = $_GET['id_evento'];
                    $nome_evento = $_POST['a_nome_ev'];
                    $descricao = $_POST['a_descricao'];
                    $data_inicio = $_POST['a_data_inicio'];
                    $data_fim = $_POST['a_data_fim'];
                    $cep = $_POST['a_cep'];
                    $rua = $_POST['a_rua'];
                    $bairro = $_POST['a_bairro'];
                    $cidade = $_POST['a_cidade'];
                    $estado = $_POST['a_estado'];
        
                    mysqli_query($conexao, "UPDATE `eventos` SET `nome_ev`='$nome_evento',`descricao`='$descricao',`data_inicio`='$data_inicio',
                    `data_fim`='$data_fim',`cep`='$cep',`rua`='$rua',`bairro`='bairro',`cidade`='$cidade',`estado`='$estado' 
                    WHERE `id` = $id_evento");
        
                    ?>
                        <script>
                            alert("Evento atualizado!");
                            window.location.replace("../events/eventos.php");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("Este evento não existe...");
                            window.location.replace("../events/eventos.php");
                        </script>
                    <?php
                }
        }
        }else{
            ?>
                <script>
                    alert("Este evento não foi encontrado...");
                    window.location.replace("../events/eventos.php"); 
                </script>
            <?php
        }    
    }else{
        ?>
        <script>
            alert("Este evento não existe...");
            window.location.replace("../events/eventos.php");
        </script>
        <?php
    }
?>
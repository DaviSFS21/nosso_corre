<?php
    require_once '../assets/db/connect.php';
    session_start();

    if(isset($_GET['id_musica'])){

        unlink($_GET['url_msc']);

        $result_musica = mysqli_query($conexao, "SELECT * FROM `musica` WHERE `id` = '" . $_GET['id_musica'] . "'");
        $numero_result = mysqli_num_rows($result_musica);

        if($numero_result != 0){
            mysqli_query($conexao, "DELETE FROM `musica` WHERE `id` =  '" . $_GET['id_musica'] . "'");
            ?>
            <script>
                alert("Música excluída!");
                window.location.replace("../pages/musica/musica.php");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Esta música não existe...");
                window.location.replace("../pages/musica/musica.php");
            </script>
            <?php
        }
    }
?>
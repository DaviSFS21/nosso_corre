<?php
    require_once "../../assets/db/connect.php";

    if(isset($_GET['search'])){
        $search = $_GET['search'];

        $result_pesq = mysqli_query($conexao, "SELECT * FROM `eventos` 
        WHERE `nome_ev` LIKE '%$search%'");
        $numero_result = mysqli_num_rows($result_pesq);

        if($numero_result == 0){
            echo "<h1>Não foram encontrados eventos com este nome!</h1>";
        }else{
            for ($i = 1; $i <= $numero_result; $i++) {
                $vetor_eventos = mysqli_fetch_array($result_pesq);
                $data = new DateTime($vetor_eventos[3]);
                echo "
          <div class='item' style='
            background-image:url(" . $vetor_eventos[10] . ");
            '>
            <div class='item-desc'>
              <h3>" . $vetor_eventos[1] . "</h3>
              <p>
              " . $vetor_eventos[2] . " <br>
              " . $data->format('d/m/Y') . "<br><br>
              </p>
            </div>
          </div>
                ";
            }
        }
    }else{
        $result_pesq = mysqli_query($conexao, "SELECT * FROM `eventos`");
        $numero_result = mysqli_num_rows($result_pesq);

        if($numero_result == 0){
            echo "<h1>Não foram encontrados eventos com este nome!</h1>";
        }else{
            for ($i = 1; $i <= $numero_result; $i++) {
                $vetor_eventos = mysqli_fetch_array($result_pesq);
                $data = new DateTime($vetor_eventos[3]);
                echo "
              <div class='item' style='
              background-image:url(" . $vetor_eventos[10] . ");
              '>
                <div class='item-desc'>
                  <h3>" . $vetor_eventos[1] . "</h3>
                  <p>
                  " . $vetor_eventos[2] . " <br>
                  " . $data->format('d/m/Y') . "<br><br>
                  </p>
                </div>
              </div>
                ";
            }
        }
    }
?>
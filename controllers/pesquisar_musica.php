<?php
    require_once "../../assets/db/connect.php";

    if(isset($_GET['search'])){
        $search = $_GET['search'];

        $result_pesq = mysqli_query($conexao, "SELECT * FROM `musica` 
        WHERE `titulo` LIKE '%$search%'");
        $numero_result = mysqli_num_rows($result_pesq);

        if($numero_result == 0){
            echo "<h1>Não foram encontradas músicas com este nome!</h1>";
        }else{
            for ($i = 1; $i <= $numero_result; $i++) {
                $vetor_musica = mysqli_fetch_array($result_pesq);
                $data = new DateTime($vetor_musica[3]);

                echo "
                
                <div class='item active' style='
                          background-image:url(../../assets/images/jpg/musicas/img_musica.jpg);
                        '>
                    <div class='item-desc'>
                      <h3>" . $vetor_musica[1] . "</h3>
                      <h1>" . $vetor_musica[2] . "</h1>
                      <video id='videoPlayer' width='420' height='80' controls>
                        <source src='" . $vetor_musica[5] . "' type='video/mp4'>
                      </video>
                      <p>
                      " . $vetor_musica[4] . " - " . $data->format('d/m/Y') . "<br><br>
                      </p>
                    </div>
                  </div>
                ";
            }
        }
    }else{
        $result_pesq = mysqli_query($conexao, "SELECT * FROM `musica`");
        $numero_result = mysqli_num_rows($result_pesq);

        if($numero_result == 0){
          echo "<h1>Não foram encontradas músicas com este nome!</h1>";
        }else{
            for ($i = 1; $i <= $numero_result; $i++) {
                $vetor_musica = mysqli_fetch_array($result_pesq);
                $data = new DateTime($vetor_musica[3]);
                echo "
        <div class='item' style='
        background-image:url(../../assets/images/jpg/musicas/img_musica.jpg);'>
          <div class='item-desc'>
            <h3>" . $vetor_musica[1] . "</h3>
            <h1>" . $vetor_musica[2] . "</h1>
            <video id='videoPlayer' width='420' height='80' controls>
              <source src='" . $vetor_musica[5] . "' type='video/mp4'>
            </video>
            <p>
            " . $vetor_musica[4] . " - " . $data->format('d/m/Y') . "<br><br>
            </p>
          </div>
        </div>
                ";
            }
        }
    }
?>
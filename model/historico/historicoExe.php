<?php

 require_once "historico.php";

 if(isset($_POST["determinante"])){
    $x = $_POST["determinante"];
    $historico = new historico();
    // $curso = new curso();
    switch($x){
       case 1:
            $pesquisa = $historico->mostraHist();
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['tipo']?></td>
                        <td><?= $row['item']?></td>
                        <td><?= $row['data_execucao']?></td>
                    </tr>
                <?php
            }
        break;
    }

}
?>
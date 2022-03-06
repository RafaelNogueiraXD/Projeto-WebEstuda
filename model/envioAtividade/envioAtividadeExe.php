<?php

require_once "envioAtividade.php";

if(isset($_GET['determinante'])){
    $escolheAcao = $_GET['determinante'];
    $envioAtividade = new envioAtividade();
    session_start();
    $hoje = date('Y-m-d');
    switch($escolheAcao){
        case 1:
            $dados = $envioAtividade->selecionaEnviosPorId($_GET['id']);
            // echo "a";
            while($row = $dados->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <!-- <td></td> -->
                        <td><?= $row['nomeAluno']?></td>
                        <td><?= $row['emailAluno']?></td>
                        <td><?= $row['arquivo']?></td>
                        <td><?= $row['data'] ?></td>  
                    </tr>
                    <hr>
                <?php
            }
        break;
        case 2:
            $idAtividade = $_GET['idAtividade'];
            $envioAtividade->adicionaEnvioAtividade($_SESSION['nome'],$_SESSION['email'],
            $_GET['arquivoAtividade'],$hoje,$idAtividade);
            header("Location: ../../view/pages/Plataforma/envio.php?id=$idAtividade");
        break;
    }
}

?>

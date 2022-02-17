<?php

require_once "curso.php";
require_once "../historico/historico.php";

 if(isset($_POST["determinante"])){
    $x = $_POST["determinante"];
    $curso = new curso();
    $historico = new historico();
    $hoje = date('Y-m-d');
    switch($x){
       case 1:
            $pesquisa = $curso->buscaCurso();
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nome']?></td>
                        <td><?= $row['sigla']?></td>
                        <td><a onclick="Deletar(<?= $row['id']?>)"><img  src="../../css/img/icones/excluir.png" width="36px" height="37px"></a></td>
                    </tr>
                <?php
            }
        break;
        case 2:
            $curso->cadastraCurso($_POST['nome'],$_POST['sigla']);
            $historico->cadastraHist("cadastro","curso: ".$_POST['nome'],$hoje);    
            break;
        case 3:
            $nomeCurso = $curso->buscaCursoId($_POST['id']);
            $curso->deletaCurso($_POST['id']);
            $historico->cadastraHist("Excluir","curso: ".$nomeCurso['nome'],$hoje);    
        break;
    }
}
?>
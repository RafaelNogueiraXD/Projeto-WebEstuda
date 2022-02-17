<?php

require_once "topico.php";
require_once "../atividade/atividade.php";

if(isset($_POST['determinante'])){
    $x = $_POST['determinante'];
    $topico = new topico();
    $atividades = new atividade();
    $hoje = date("Y-m-d");
    $contador = 0;
    switch($x){
        case 1: 
            $pesquisa = $topico->topicosDisciplina($_POST['disicplina']);
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                $contador ++;
                $artigoId = $contador;
            ?>
                <article id="<?= $artigoId ?>" class="topicoContexto">
                    <header>
                        <h2><?= $row['Titulo']?></h2>
                        <p><?= $row['subtitulo']?></p>
                    </header>
                    <section class="arquivosAdicionais">
                        <?php
                            $atv = $atividades->mostraAtv($row['id']);
                            while($linha = $atv->fetch(PDO::FETCH_ASSOC)){
                                $escolheAtv = $linha['tipo'];
                                switch($escolheAtv){
                                    case "forum":
                                        $texto = $linha['titulo'];
                                        echo "<a>$texto</a><br>";
                                    break;
                                    case "atividade":
                                        $texto = $linha['titulo'];
                                        echo "<a>$texto</a><br>";
                                        break;
                                    case "paragrafo":
                                        $texto = $linha['texto'];
                                        echo "$texto<br>";
                                    break;
                                }
                            }
                        ?>
                    </section>
                </article>
            <?php
            }
    $contador = 0;

        break;
        case 2: 
            $topico->adicionaTopico($_POST['titulo'],$_POST['visualiza'],$_POST['subtitulo'],$_POST['idDisciplina'],$hoje);
            $id = $_POST['idDisciplina'];
            header("Location: ../../view/pages/Plataforma/topico.php?id=$id");
        break;
        case 3:
            $topico->deletaTopico($_POST['id']);
        break;
        case 4: 
        $pesquisa = $topico->topicosDisciplina($_POST['disicplina']);
        while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
            $contador ++;
            $artigoId = $contador;        
        ?>
           <li><a href="#<?=$artigoId?>"><?= $row['Titulo']?></a></li>
        <?php
        }
        ?>
        <?php
        break;
    }
}

?>
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
                $testeforum = $atividades->VerificaForum($row['id']);

            
            ?>
            <script>
                console.log(<?= $testeforum ?>);
            </script>
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
                                        $idAtv = $linha['id'];
                                        echo "<a href='forum.php?id=$idAtv'>Forum: $texto</a><br>";
                                    break;
                                    case "atividade":
                                        $texto = $linha['titulo'];
                                        $idAtv = $linha['id'];

                                        echo "<a href='envio.php?id=$idAtv'>Atividade: $texto</a><br>";
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
        case 5:
            $x5 = $_POST['tipo'];
            $id = $_POST['idDisciplina'];
            switch($x5){
                case 1:
                   $tipo = "forum";
                   $topicox = $topico->topicosId($_POST['idtopico']);
                   $testeforum = $atividades->VerificaForum($topicox['id']);
                   if($testeforum == 2){
                    header("Location: ../../view/pages/Plataforma/topico.php?id=$id");
                   }else{
                       $_POST['titulo'] = $topicox['Titulo'];
                        $atividades->cadastraAtv($_POST['titulo'],$hoje,$_POST['idtopico'],$_POST['arquivo'],$_POST['texto'],$tipo);
                   }
                break;
                case 2:
                   $tipo = "atividade";
                    $atividades->cadastraAtv($_POST['titulo'],$hoje,$_POST['idtopico'],$_POST['arquivo'],$_POST['texto'],$tipo);

                break;
                case 3:
                    $tipo = "paragrafo";
                    $atividades->cadastraAtv($_POST['titulo'],$hoje,$_POST['idtopico'],$_POST['arquivo'],$_POST['texto'],$tipo);
                break;
            }
            header("Location: ../../view/pages/Plataforma/topico.php?id=$id");
        break;
        case 6:
            $pesquisa = $topico->topicosDisciplina($_POST['disicplina']);
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                $contador ++;
                $artigoId = $contador;        
            ?>
               <option value="<?= $row['id']?>"><?= $row['Titulo']?></option>
            <?php
            }
            ?>
            <?php
        break;
    }
}

?>
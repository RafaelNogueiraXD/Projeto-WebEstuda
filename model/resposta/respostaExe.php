<?php

 require_once "resposta.php";
 require_once "../usuario/usuario.php";

 if(isset($_GET["determinante"])){
    $x = $_GET["determinante"];
    $resposta = new resposta();
    $usuario = new usuario();
    // $curso = new curso();
    switch($x){
       case 1:
            $atvx = $resposta->mostraAtv($_GET['id']);
            $idTopico = $_GET['id'];
            while($row = $atvx->fetch(PDO::FETCH_ASSOC)){
                $idresposta = $row['id'];
                echo "<script>
                    var idforum = $idTopico;
                    var idResposta = $idresposta;
                </script>";
            ?>
             <main class="forumContainerResposta">
                        <section>
                            <header>
                                <h1><?= $row['titulo']?></h1>
                            </header>
                            <div class="corpoDoForum">
                                <p><span>Resposta: </span><?= $row['resposta']?>.</p>
                            </div>
                            <footer>
                                <div>
                                    <a onclick="deletaResposta(idforum,idResposta)" class="professorAut">Excluir</a>
                                </div>
                            </footer>
                        </section>
                    </main>
            <?php
            }
        break;
        case 2:
            echo "a";
            $nomeUsu = $usuario->buscaIdUsuarios($_GET['idUsu']);
            $idforum = $_GET['idForum'];
            $resposta->cadastraResposta($nomeUsu['nome'],$_GET['resposta'],$_GET['idForum']);
            header("Location: ../../view/pages/Plataforma/forum.php?id=$idforum");
        break;
        case 3:
            $resposta->removeResposta($_GET['id']);
        break;
    }
    echo "b";

}
?>
c
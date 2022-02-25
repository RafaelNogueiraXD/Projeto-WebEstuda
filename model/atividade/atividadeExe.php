<?php

 require_once "atividade.php";

 if(isset($_POST["determinante"])){
    $x = $_POST["determinante"];
    $atividade = new atividade();
    // $curso = new curso();
    switch($x){
       case 1:
            $atvx = $atividade->mostraAtvId($_POST['id']);
            ?>
            <main class="envioContexto">
                <header>
                    <h1><?= $atvx['titulo']?></h1>
                </header>
                <!-- <span>ewq</span> -->
                <section>
                    <div>
                        <p><span> <b>Descrição da Atividade:</b></span>
                        <?= $atvx['texto']?></p>
                    </div>
                    <div>
                        <p> <span> <b>Aula:</b> </span> <a download="<?= $atvx['arquivo']?>"> <?= $atvx['arquivo']?></a></p>
                    </div>
                    <div>
                        <p><span><b>Data de entrega:</b></span><?= $atvx['data_criacao']?></p>
                    </div>
                </section>
                <footer>
                    <div>
                    <a class="btn" id="removeBtn" onclick="envioAtividade()">enviar</a>
                    <script>
                        $(".envioAtiv").hide();
                        
                    </script>
                    <div class="envioAtiv">
                                <form action="">
                                    <input type="file" name="tarefa">
                                    <input type="submit">
                                </form>
                            </div>
                    </div>
                </footer>
            </main>
            <?php
        break;
        case 2:
            $atvx = $atividade->mostraAtvId($_POST['id']);
            ?>
            <main class="forumContainerMain">
                    <section>
                        <header>
                            <h1><?= $atvx['titulo']?></h1>
                        </header>
                        <div class="corpoDoForum">
                            <p><span>Descrição: </span> <?= $atvx['texto']?></p>
                        </div>
                        <footer>
                            <div>
                                <a href="#cadastro" onclick="abreCad()">Responder</a>
                                <a href="">Excluir</a>
                            </div>
                        </footer>
                    </section>
                </main>
            <?php
        break;
    }

}
?>
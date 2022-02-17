<?php

 require_once "disciplina.php";
 require_once "../curso/curso.php";
 require_once "../usuario/usuario.php";
require_once "../historico/historico.php";


 if(isset($_POST["determinante"])){
    $x = $_POST["determinante"];
    $disciplina = new disciplina();
    $curso = new curso();
    $historico = new historico();
    $usuario = new usuario();
    $hoje = date('Y-m-d');
    switch($x){
       case 1:
            $pesquisa = $disciplina->buscaDisciplina();
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nome']?></td>
                        <td><?= $row['sigla']?></td>
                        <td><?php
                            $xCurso = $curso->buscaCursoId($row['idCurso']);
                            echo $xCurso["nome"];
                        ?></td>
                        <td><a onclick="Deletar(<?= $row['id']?>)"><img  src="../../css/img/icones/excluir.png" width="36px" height="37px"></a></td>
                    </tr>
                <?php
            }
        break;
        case 2:
            $historico->cadastraHist("cadastro","disciplina: ".$_POST['nome'],$hoje);
            $disciplina->cadastraDisciplina($_POST['nome'],$_POST['sigla'],$_POST['idProfessor'],$_POST['idCurso']);
        break;
        case 3:
            $nomeDisciplina = $disciplina->buscaDisciplinaId($_POST['id']);
            $historico->cadastraHist("Excluir","disciplina: ".$nomeDisciplina['nome'],$hoje);
            $disciplina->deletaDisciplina($_POST['id']);
        break;
        case 4:
            $pesquisa = $curso->buscaCurso();
            $professores = $usuario->buscaContas();
            ?>
                <select name="curos" id="curso">

                    <?php
                while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?= $row['id']?>"><?= $row['nome']?></option> 
                    <?php
                }
                ?>
                </select>
                <select name="professor" id="professor">
                    <?php
                        while($row = $professores->fetch(PDO::FETCH_ASSOC)){
                            if($row['cargo'] == 'Professor'){
                    ?>
                        <option value="<?= $row['id']?>"><?= $row['nome']?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            <?php
        break;
        case 5:
            ?>
            <li><a href='index.php'>Home</a></li>
            <li class="dropdown">
                <span>Disicplinas</span>
                <div class="dropdown-content">
                    <?php
                    $pesquisa = $disciplina->professorDisciplina($_POST['idProfessor']);
                    while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <a href="topico.php?id=<?=$row['id']?>"><?=$row['sigla']?></a>
                    <?php
                    }
                    ?>
                 </div>
            </li>
            <li class="dropdown">
            
                <span>Opções</span>
                <div class="dropdown-content">
                <a href='index.php'>Home</a>
                <a href=''>Perfil</a>
                <a href='../login/login.html'>sair</a>
                </div>
            </li>
            <?php
        break;
    }

}
?>
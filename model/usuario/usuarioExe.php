<?php

 require_once "usuario.php";
 require_once "../curso/curso.php";
 require_once "../historico/historico.php";

 if(isset($_POST["determinante"])){
    $x = $_POST["determinante"];
    // $x = 4;
    $usuario = new usuario();
    $historico = new historico();
    $curso = new curso();
    $hoje = date('Y-m-d');
    switch($x){
       case 1:
            $pesquisa = $usuario->buscaContas();
            while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nome']?></td>
                        <td><?= $row['email']?></td>
                        <td><?= $row['cargo']?></td>
                        <td>
                            <a onclick="Deletar(<?= $row['id']?>)"><img  src="../../css/img/icones/excluir.png" width="36px" height="37px"></a>
                            <a href="editarUsuario.html" id="edita"><img  src="../../css/img/icones/editar.png" width="36px" height="37px"></a> 
                            <a href="verUsuario.html" id="edita"><img  src="../../css/img/icones/ver.png" width="36px" height="37px"></a>
                        </td>
                    </tr>
                <?php
            }
        break;
        case 2:
            $hoje = date('Y-m-d');
            if($_POST['cargo'] == "Aluno"){
            $historico->cadastraHist("cadastro","Usuario: ".$_POST['nome'],$hoje);
            $usuario->cadastraUsuario($_POST['nome'],$_POST['localizacao'],$_POST['cargo'],
                $_POST['email'],$_POST['senha'],$hoje,$_POST['matricula']);
            }else{
                $mat = '';
            $historico->cadastraHist("cadastro","Usuario: ".$_POST['nome'],$hoje);
            $usuario->cadastraUsuario($_POST['nome'],$_POST['localizacao'],$_POST['cargo'],
                $_POST['email'],$_POST['senha'],$hoje,$mat);
            }
            
        break;
        case 3:
            $nomeUsu = $usuario->buscaIdUsuarios($_POST['id']);
            $historico->cadastraHist("Excluir","Usuario: ".$nomeUsu['nome'],$hoje);
            $usuario->deletaUsuario($_POST['id']);
        break;
        case 4:
            $pessoa = $usuario->login("rafael@gmail.com","123");
            // return $pessoa;
        break;
        case 5:
            $pessoa = $usuario->login($_POST['email'],$_POST['senha']);
            if($pessoa == ''){
                echo "Email ou senha incorretos!";
                header("Location: ../../view/pages/login/login.html");
            }else{
                session_start();
                $_SESSION['id'] = $pessoa['id'];
                $_SESSION['email'] = $pessoa['email'];
                $_SESSION['cargo'] = $pessoa['cargo'];
                if($pessoa['cargo'] == "adm"){
                    header("Location: ../../view/pages/ADM/historico.html");
                    
                }else{
                    header("Location: ../../view/pages/Plataforma/index.php");
                }
            }

        break;
    }
    // print_r($pessoa);
}
?>
<?php

require_once "../database/banco.php";

class resposta extends crud{

    public function cadastraResposta($titulo,$texto,$idUsu){
        crud::insert("respostas","default,'$titulo','$texto','$idUsu'"
        ,array());
    }

    public function mostraAtv($idtopico){
        $historico = crud::select("*","respostas","where usuarioid =$idtopico order by id desc",array());
        return $historico;
    }
    public function mostraAtvId($id){
        $resultado = crud::select("*","respostas","where id =$id ",array());
        $rest = $resultado->fetch(PDO::FETCH_ASSOC);

        return $rest;
    }
    public function removeResposta($id){
        $resultado = crud::delete("respostas",
        "id = $id ",array());
        return $resultado;
    }

    // select * from resposta where idtopico = 2 and tipo = 'forum';
    public function VerificaForum($idt){
        $resultado = crud::select("*","resposta","where idtopico = $idt and tipo = 'forum' ",array());
        $rest = $resultado->fetch(PDO::FETCH_ASSOC);
        if($rest == '')
        {
            return 1;
        }else{
            return 2;
        }
    }
  
}


?>
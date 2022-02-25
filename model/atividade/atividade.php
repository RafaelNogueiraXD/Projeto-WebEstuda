<?php

require_once "../database/banco.php";

class atividade extends crud{

    public function cadastraAtv($titulo,$data,$idTopico,$arquvio,$texto,$tipo){
        crud::insert("atividade","default,'$titulo','$data',
        '$idTopico','$arquvio','$texto','$tipo'",array());
    }

    public function mostraAtv($idtopico){
        $historico = crud::select("*","atividade","where idtopico =$idtopico order by id desc",array());
        return $historico;
    }
    public function mostraAtvId($id){
        $resultado = crud::select("*","atividade","where id =$id ",array());
        $rest = $resultado->fetch(PDO::FETCH_ASSOC);

        return $rest;
    }
    // select * from atividade where idtopico = 2 and tipo = 'forum';
    public function VerificaForum($idt){
        $resultado = crud::select("*","atividade","where idtopico = $idt and tipo = 'forum' ",array());
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
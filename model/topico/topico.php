<?php
require_once "../database/banco.php";

class topico extends crud{

    function topicosDisciplina($idDisciplina){
        $topicos = crud::select("*","topico","where disciplinaid = $idDisciplina 
        order by data_criacao asc",array());
        return $topicos;
    }
    function topicosId($id){
        $resultado = crud::select("*","topico","where id = $id",array());
        $rest = $resultado->fetch(PDO::FETCH_ASSOC);
        return $rest;
    }

    function adicionaTopico($titulo,$visualiza,$subtitulo,$idDisciplina,$hoje){
        crud::insert("topico","default,'$titulo','$visualiza','$subtitulo','$idDisciplina','$hoje'",array());
    }
    public function deletaTopico($id){
        crud::delete("topico","id = $id ",array());
    }
}


?>
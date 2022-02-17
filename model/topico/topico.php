<?php
require_once "../database/banco.php";

class topico extends crud{

    function topicosDisciplina($idDisciplina){
        $topicos = crud::select("*","topico","where disciplinaid = $idDisciplina 
        order by data_criacao asc",array());
        return $topicos;
    }

    function adicionaTopico($titulo,$visualiza,$subtitulo,$idDisciplina,$hoje){
        crud::insert("topico","default,'$titulo','$visualiza','$subtitulo','$idDisciplina','$hoje'",array());
    }
    public function deletaTopico($id){
        crud::delete("topico","id = $id ",array());
    }
}


?>
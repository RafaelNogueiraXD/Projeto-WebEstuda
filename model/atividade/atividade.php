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
}


?>
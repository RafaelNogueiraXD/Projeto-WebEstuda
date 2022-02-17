<?php

require_once "../database/banco.php";

class historico extends crud{

    protected $id,$tipo,$item,$data_execucao;

    public function cadastraHist($tipo,$item,$data){
        crud::insert("historico","default,'$tipo','$item',
        '$data'",array());
    }

    public function mostraHist(){
        $historico = crud::select("*","historico","order by id desc",array());
        return $historico;
    }
}


?>
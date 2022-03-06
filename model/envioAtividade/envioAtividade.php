<?php

require_once "../database/banco.php";

class envioAtividade extends crud{
    
    public function adicionaEnvioAtividade($nomeAluno,$emailAluno,$ArquivoAtividade,$dataResgistro,$idAtividade){
        crud::insert("envioatividade","default,'$nomeAluno','$ArquivoAtividade','$dataResgistro','$emailAluno','$idAtividade'",array());
    }

    public function selecionaEnviosPorId($idAtividade){
       $data = crud::select("*","envioatividade","where idAtividade = $idAtividade",array());
       return $data;
    }

}

// echo $a
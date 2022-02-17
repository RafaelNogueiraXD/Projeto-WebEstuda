<?php


require_once "../database/banco.php";

class curso extends crud{
    protected $nome,$sigla,$id;

    public function cadastraCurso($nome,$sigla){
        crud::insert("curso","default,'$nome','$sigla'",array());
    }
    public function buscaCurso(){
        $result = crud::select("*","curso","order by id desc",array());
        return $result;
    }
    public function buscaCursoId($id){
        $result = crud::select("*","curso","where id = $id",array())
        ->fetch(PDO::FETCH_ASSOC); 
        return $result;
    }
    
    public function deletaCurso($id){
        $resultado = crud::delete("curso",
        "id = $id ",array());
        return $resultado;
    }
}
// $curso = new curso();
// $curso->deletaCurso(4);


?>
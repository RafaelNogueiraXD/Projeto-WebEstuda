<?php


require_once "../database/banco.php";

class disciplina extends crud{
    protected $nome,$sigla,$id;

    public function cadastraDisciplina($nome,$sigla,$idProfessor,$idcurso){
        crud::insert("disciplina","default,'$nome','$sigla','$idProfessor','$idcurso'",array());
    }
    public function buscaDisciplina(){
        $result = crud::select("*","disciplina","order by id desc",array());
        return $result;
    }
    public function buscaDisciplinaId($id){
        $result = crud::select("*","disciplina","where id = $id",array())
        ->fetch(PDO::FETCH_ASSOC); 
        return $result;
    }

    public function deletaDisciplina($id){
        $resultado = crud::delete("disciplina",
        "id = $id ",array());
        return $resultado;
    }
    public function professorDisciplina($idprofessor){
        $resultado = crud::select(" u.nome,d.id,d.sigla ,d.nome as disciplina ","usuarios u
        inner join disciplina d on u.id = d.idProfessor","",array());
        return $resultado;
    }

// select * from usuarios u 
// inner join disciplina d 
// on d.idCurso = u.curso where u.curso = 30;
    public function alunoDisciplina($idcurso){
        $resultado = crud::select("d.id, d.sigla","usuarios u
        inner join disciplina d on d.idCurso = u.curso where u.curso = $idcurso","",array());
        return $resultado;
    }
}
// $disciplina = new disciplina();
// $pesquisa = $disciplina->professorDisciplina(0);
// // print_r($pesquisa);
// while($row = $pesquisa->fetch(PDO::FETCH_ASSOC)){
//     print_r($row);
//     echo $row['disciplina']."<br>";

//  }


?>
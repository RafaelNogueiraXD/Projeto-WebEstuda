<?php

require_once "../database/banco.php";
// require_once "../database/banco";

class usuario extends crud{

    protected $id,$nome,$localizacao,
    $cargo,$email,$senha,$data_criacao;

    public function cadastraUsuario($nome,$localizacao,
    $cargo,$email,$senha,$data_criacao,$matricula,$curso){
       $A= crud::insert("usuarios","default,'$nome','$localizacao',
        '$cargo','$email','$senha','$data_criacao','$matricula','$curso'",array());
            return  $A;
    }
    public function login($email,$senha){
        $resultado = crud::select("*","usuarios",
        "where email ='$email' and senha='$senha'",array());
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
    public function deletaUsuario($id){
        $resultado = crud::delete("usuarios",
        "id = $id ",array());
        return $resultado;
    }
    public function buscaIdUsuarios($id){
        $result = crud::select("*","usuarios","WHERE id = $id",array());                                             
        $usuario = $result->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
    
    public function buscaContas(){
        $result = crud::select("*","usuarios","order by id desc",array());
        return $result;
        
    }
    // select d.id,d.nome from usuarios u 
    // inner join disciplina d 
    // where d.idProfessor = u.id; 
    public function professorDisciplinas($id){
        $result = crud::select("d.id,d.nome","usuarios u 
        inner join disciplina d ","where d.idProfessor =  u.id and u.id = $id",array());
        return $result;
    }
} 
// $teste = new usuario();
// $pessoa = $teste->login("rafa@gmail.com","123");
// var_dump($pessoa);
?>


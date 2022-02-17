<?php
abstract class banco
{
    protected function conecta(){
        try{
            $Banco = new PDO("mysql:host=localhost;dbname=webestuda;charset=utf8",
            "root","");
            // mysqli_set_charset($Banco,"utf8");
            return $Banco;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

?>
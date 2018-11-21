<?php

class Endereco{
    public function getEndereco($cep){
        global $pdo;
        
        $array = array();
        
        $sql = $pdo->prepare("SELECT * FROM endereco WHERE cep = :cep");
        $sql->bindValue(":cep",$cep);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $array =$sql->fetchAll();
        }
        
        return $array;
    }
}

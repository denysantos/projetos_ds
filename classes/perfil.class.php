<?php

class Perfil{
      
    public function addPerfil($perfil){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO perfil SET ds_perfil = :perfil");
        $sql->bindValue(":perfil",$perfil);
        $sql->execute();
    }
    
    
    public function getPerfil($perfil){
        global $pdo;
        
        $array = array();
        $sql = $pdo->prepare("SELECT * FROM perfil ORDER BY ds_perfil LIMIT 10");
        $sql->bindValue(":ds_perfil",$perfil);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function excluiPerfil($id){
        global $pdo;
        
        $sql = $pdo->prepare("DELETE FROM perfil WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
    }
    
}

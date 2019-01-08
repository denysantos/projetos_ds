<?php

class Usuario {
     
    
    public function exibeTodosUsuarios($usuario){
        $array = array();
        global $pdo;
        $sql = $pdo->query("SELECT * FROM usuarios ORDER BY ds_usuario");
        $sql->bindValue(':ds_usuario',$usuario);
        $sql->execute();
        

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

        } 

        return $array;


    }

}



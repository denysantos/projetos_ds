<?php

class Pessoa{
    
    public function addPessoa($cpf,$pessoa,$fone,$cep,$numero){
        global $pdo;
        
        //$array = array();
        $sql = $pdo->prepare("INSERT INTO pessoas SET nr_cpf = :cpf, "
                . "nm_pessoa = :pessoa,"
                . "fone = :fone,"
                . "cep = :cep,"
                . "numero = :numero");
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":pessoa",$pessoa);   
        $sql->bindValue(":fone",$fone);
        $sql->bindValue(":cep",$cep);
        $sql->bindValue(":numero",$numero);
        $sql->execute();
    }

    public function getPessoa($pessoa){
        global $pdo;

        $array = array();

        $sql = $pdo->prepare("SELECT * FROM pessoas ORDER BY nm_pessoa LIMIT 10");
        $sql->bindValue(":pessoa", $pessoa);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function excluirPessoa($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM pessoas WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

    }

    public function editPessoa($cpf,$pessoa,$fone,$cep,$numero){
        global $pdo;        
        
        $sql = $pdo->prepare("UPDATE pessoas 
                                 SET nr_cpf = :cpf, 
                                     nm_pessoa = :pessoa,
                                     fone = :fone,
                                     cep = :cep,
                                     numero = :numero
                               WHERE id = :id");
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":pessoa",$pessoa);   
        $sql->bindValue(":fone",$fone);
        $sql->bindValue(":cep",$cep);
        $sql->bindValue(":numero",$numero);
        $sql->execute();   
    }

}


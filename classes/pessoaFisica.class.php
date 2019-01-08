<?php

class Pessoa{
    
    public function addPessoa($cpf,$pessoa,$fone,$cep,$numero,$email){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO pessoas SET nr_cpf = :cpf,"
                                                   . "nm_pessoa = :pessoa,"
                                                   . "fone = :fone,"
                                                   . "cep = :cep,"
                                                   . "numero = :numero,"
                                                   . "email = :email");
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":pessoa",$pessoa);   
        $sql->bindValue(":fone",$fone);
        $sql->bindValue(":cep",$cep);
        $sql->bindValue(":numero",$numero);
        $sql->bindValue(":email",$email);
        $sql->execute();
    }

    public function getPessoa($id){
        global $pdo;

        $array = array();

        $sql = $pdo->prepare("SELECT * FROM pessoas  ORDER BY id DESC LIMIT 3");
        $sql->bindValue(":id", $id);        
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }


    public function getExibePessoa($id){
        global $pdo;

        $array = array();

        $sql = $pdo->prepare("SELECT * FROM pessoas WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function excluirPessoa($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM pessoas WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

    }

    public function editPessoa($cpf,$pessoa,$fone,$cep,$numero,$email,$id){
        global $pdo;        
        
        $sql = $pdo->prepare("UPDATE pessoas 
                                 SET nr_cpf = :cpf, 
                                     nm_pessoa = :pessoa,
                                     fone = :fone,
                                     cep = :cep,
                                     numero = :numero,
                                     email = :email
                               WHERE id = :id");
        $sql->bindValue(":cpf",$cpf);
        $sql->bindValue(":pessoa",$pessoa);   
        $sql->bindValue(":fone",$fone);
        $sql->bindValue(":cep",$cep);
        $sql->bindValue(":numero",$numero);
        $sql->bindValue(":id",$id);
        $sql->bindValue(":email",$email);
        $sql->execute();   
    }

}


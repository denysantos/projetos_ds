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
}


<?php

class Usuarios {
  
    
    public function getTotalUsuarios() {
        global $pdo;

        $sql = $pdo->query("SELECT COUNT(*) as c FROM usuarios");
        $row = $sql->fetch();

        return $row['c'];
    }

    
    public function cadastrar($nome, $email, $senha) {
        global $pdo;
        
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if ($sql->rowCount() == 0) {
            $sql = $pdo->prepare("INSERT INTO usuarios "
                    . "SET  "
                    . "ds_usuario = :nome, "
                    . "email = :email, "
                    . "ds_senha = :senha");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    public function login($email, $senha) {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND ds_senha = :senha");

        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['cLogin'] = $dado['id'];

            return true;
        } else {
            return false;
        }
    }

    public function exibeUsuario($id) {
        global $pdo;
        $sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            return $dado['nome'];

            return true;
        } else {
            return false;
        }
    }

}



<?php require 'pages/header.php'; ?>

<div class="container">
    <h1>Cadastre-se</h1>


<?php 
require 'classes/usuarios.class.php'; 
$u = new Usuarios();

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = ($_POST['senha']); //criar verificação de senha
    
    if(!empty($nome) && !empty($email) && !empty($senha)){
        if($u->cadastrar($nome, $email, $senha)){
            ?>

<div class="alert alert-success">
    <strong>Parabéns.</strong> Cadastro realizado com sucesso.
    <a href="login.php" class="alert-link">Faça seu login agora.</a>
</div>

<?php
        } else{
            ?>
<div class="alert alert-warning">
    Este usuário já existe.
    <a href="login.php" class="alert-link">Faça seu login agora.</a> 
</div>
<?php
        }
    } else{
        ?>
<div class="alert alert-warning">
    Preencha todos os campos.
</div>
<?php
    }
}
?>

<form method="POST">
    <div class="form-group">
        <label for="text" name="nome">Seu nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"/>
    </div>    
    <div class="form-group">
        <label for="email" name="email">Seu e-mail:</label>
        <input type="email" name="email"  id="email" class="form-control" />
    </div>
    <div>
        <label for="senha" name="senha">Digite uma senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" />
    </div>
    <br>
    <input type="submit" value="Cadastrar" class="btn btn-success">
</form>

</div>
<?php require 'pages/footer.php'; ?>
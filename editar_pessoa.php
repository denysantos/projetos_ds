<?php require 'pages/header.php';?>

<div class="container">
    <h1>Pessoa Física</h1>
    <legend>Cadastro - Edição</legend>
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li role="admin"><a href="admin.php">Admin</a></li>
            <li role="admin" class="active"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="fornecedores.php">Fornecedores</a></li>
        </ul>        
    </div>
<?php if(empty($_SESSION['cLogin'])){
    ?>

<script type="text/javascript">window.location.href = "login.php";</script>

<?php
exit;
} 

require 'classes/pessoaFisica.class.php';
$p = new Pessoa();


if(isset($_POST['cpf']) && !empty($_POST['cpf'])) {
    $cpf = addslashes($_POST['cpf']);
    $pessoa = addslashes($_POST['pessoa']);
    $fone = addslashes($_POST['fone']);
    $cep = addslashes($_POST['cep']);
    $numero = addslashes($_POST['numero']);
    $email = addslashes($_POST['email']);
    
    $p->editPessoa($cpf,$pessoa,$fone,$cep,$numero,$email,$_GET['id']);
    
?>

<div class="alert alert-success">
        Alteração realizada com sucesso!
    </div>

<?php
}

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $info = $p->getExibePessoa($_GET['id']);
} else {
?>

<script type="text/javascript">window.location.href="add_pessoa.php";</script>

<?php
exit;

}
?>

<?php 
require 'classes/endereco.class.php'; 
$end = new Endereco();

$exibeEndereco = $end->getEndereco($cep,$_GET['id']);

var_dump($exibeEndereco['cep']);

?>



    <form method="POST">
        <div class="form-group col-sm-2">
            <label for="cpf" name="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $info['nr_cpf']; ?>" />
        </div>
        <div class="form-group col-sm-5">
            <label for="pessoa" name="pessoa">Nome Completo:</label>
            <input type="text" name="pessoa" id="pessoa" class="form-control" value="<?php echo $info['nm_pessoa']; ?>" />
        </div>
        <div class="form-group col-sm-2">
            <label for="fone" name="fone">Fone:</label>
            <input type="text" name="fone" id="fone" class="form-control" value="<?php echo $info['fone']; ?>"/>
        </div>        
        <div class="form-group col-sm-3">
            <label for="email" name="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $info['email']; ?>"/>
        </div>
        <div class="form-group col-sm-2">
            <label for="cep" name="cep">CEP:</label>
            <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $info['cep']; ?>" />
        </div>                
        <div class="form-group col-sm-7">
            <label for="logradouro" name="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" class="form-control" disabled />
        </div>
        <div class="form-group col-sm-2">
            <label for="numero" name="numero">Número:</label>
            <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $info['numero']; ?>"/>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" value="Salvar" class="btn btn-success"/>
        </div>
    </form>
    </div>
</div>

<?php require 'pages/footer.php'; ?>
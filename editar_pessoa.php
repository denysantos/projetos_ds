<?php 
require 'pages/header.php';
?>
<div class="container">
    <h1>Pessoa Física</h1>
    <legend>Editar Cadastro</legend>
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li role="admin"><a href="admin.php">Admin</a></li>
            <li role="admin" class="active"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="fornecedores.php">Fornecedores</a></li>
        </ul>        
    </div>

<?php
if (empty($_SESSION['cLogin'])){
?>

<script type="text/javascript">window.location.href="login.php";</script>

<?php
exit;
}


require "classes/pessoaFisica.class.php";

$p = new Pessoa();

if(isset($_POST['id']) && !empty($_POST['id'])){
	$cpf = addslashes($_POST['cpf']);
	$pessoa = addslashes($_POST['pessoa']);
	$fone = addslashes($_POST['fone']);
	$cep = addslashes($_POST['cep']);
	$numero = addslashes($_POST['numero']);

	$p->editPessoa($cpf,$pessoa,$fone,$cep,$numero,$_GET['id']);

?>
<div class="alert alert-success">
	Pessoa editada com sucesso.
</div>

<?php
}

if(isset($_GET['id']) && !empty($_GET['id'])){
	$info = $p->getPessoa($_GET['id']);
} else {
	?>
	<script type="text/javascript">window.location.href="add_pessoa.php";</script>
	<?php
	exit;
}


?>

	<form method="POST" enctype="multipart/form-data">
	<div class="form-group col-sm-3">
		<label for="cpf" name="cpf">CPF:</label>
		<input type="text" name="cpf" id="cpf" class="form-control">
	</div>
	<div class="form-group col-sm-9">
        <label for="pessoa" name="pessoa">Nome Completo:</label>
        <input type="text" name="pessoa" id="pessoa" class="form-control" />
        </div>
    <div class="form-group col-sm-3">
        <label for="fone" name="fone">Fone:</label>
        <input type="text" name="fone" id="fone" class="form-control"/>
    </div>        
    <div class="form-group col-sm-2">
        <label for="cep" name="cep">CEP:</label>
        <input type="text" name="cep" id="cep" class="form-control"/>
    </div>
    <div class="form-group col-sm-1">
        <label for="numero" name="numero">Número:</label>
        <input type="text" name="numero" id="numero" class="form-control"/>
    </div>
    <div class="form-group col-md-12">
        <input type="submit" value="Salvar" class="btn btn-success"/>
    </div>    
	</form>
</div>



<?php if(empty($_SESSION['cLogin'])){
    ?>
<script type="text/javascript">window.location.href="login.php";</script>
<?php
} ?>
<div class="container">
<h1>Usuários</h1>
<legend>Cadastro</legend>
<div class="col-sm-12">
	<?php
	$menu = 0;
	
	?>
        <ul class="nav nav-tabs">        	
            <li role="admin"><a href="meus_projetos.php">Meus Projetos</a></li>
            <li role="admin" class="active"><a href="usuarios.php">Usuários</a></li>
            <li role="admin"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="fornecedores.php">Fornecedores</a></li>
        </ul>        
    </div>

    
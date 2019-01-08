<?php require 'pages/header.php'; ?>
<?php 
//Verifica sessão do usuário. 
//Se não estiver logado, então redireciona o usuário à página de login.
if (empty($_SESSION['cLogin'])){
    ?>

<script type="text/javascript">window.location.href="login.php";</script>

<?php
exit;
}

require 'classes/projetos.class.php';

$p = new Projetos();
$id_usuario = 0;

if(isset($_POST['nm_projeto']) && !empty($_POST['nm_projeto'])){
    $nm_projeto = addslashes($_POST['nm_projeto']);
    $p->addProjeto($nm_projeto,$id_usuario);
 ?>

<div class="alert alert-success">
    Projeto adicionado com sucesso.
</div>

<?php
} 
?>


<div class="container">
    <h1>Adicionar projeto</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group col-md-8">
            <label for="nm_projeto">Título</label>
            <input class="form-control" type="text" name="nm_projeto" id="nm_projeto" />
        </div>        
        <div class="form-group col-md-12">
            <input class="btn btn-success" type="submit" value="Adicionar" />
        </div>
    </form>
</div>

<?php require 'pages/footer.php'; ?>
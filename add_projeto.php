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

$responsavel = $_SESSION['cLogin'];
$situacao = 'A';

if(isset($_POST['nm_projeto']) && !empty($_POST['nm_projeto'])){
    $nm_projeto     = addslashes($_POST['nm_projeto']);
    $responsavel    = addslashes($_POST['id_responsavel']);
    $dt_inicio      = addslashes($_POST['dt_inicio']);
    $dt_fim         = addslashes(($_POST['dt_fim']));
    $situacao       = addslashes($_POST['ie_situacao']);
    
    $p->addProjeto($nm_projeto, $responsavel, $dt_inicio, $dt_fim, $situacao);
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
        <div class="form-group col-md-2">
            <label for="dt_inicio">Data de Início</label> 
            <input class="form-control" type="date" name="dt_inicio" id="dt_inicio" />            
        </div>
        <div class="form-group col-md-2">
            <label for="dt_fim">Data Fim</label> 
            <input class="form-control" type="date" name="dt_fim" id="dt_fim" />
        </div>
        <div class="form-group col-md-12">
            <input class="btn btn-success" type="submit" value="Adicionar" />
        </div>
    </form>
</div>

<?php require 'pages/footer.php'; ?>
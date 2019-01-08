<?php require 'pages/header.php'; ?>
<?php
if (empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href = "login.php";</script>
    <?php
    exit;
}
?>
<div class="container">
    <h1>Meus Projetos</h1>
    <legend>Cadastros</legend>
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li role="admin" class="active"><a href="meus_projetos.php">Meus Projetos</a></li>
            <li role="admin"><a href="usuarios.php">Usuários</a></li>
            <li role="admin"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="fornecedores.php">Fornecedores</a></li>
        </ul>
    </div>
        <a href="add_projeto.php" class="btn btn-default">Adicionar Projeto</a>    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Projetos</th>
            </tr>
        </thead>        
        <?php
        require 'classes/projetos.class.php';
        $p = new Projetos();
        $id = 0;
        $projetos = $p->getMeusProjetos($id);
        foreach ($projetos as $projeto) {
            ?>

            <tr>
                <td><?php echo $projeto['nm_projeto']; ?></td>
                <td>
                    <a href="editar_projeto.php?id=<?= $projeto['id'] ?>" class="btn btn-default">Editar</a>
                    
                    <a href="excluirProjetos.php?id=<?= $projeto['id'] ?>" class="btn btn-danger">Excluir</a>
                    <a href="iniciacao.php?id=<?= $projeto['id'] ?>" class="btn btn-warning">Iniciação</a>
                </td>
                <?php
            }
            ?>
        </tr>
    </table>
    
</div>
<?php require 'pages/footer.php'; ?>
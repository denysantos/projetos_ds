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
    <a href="add_projeto.php" class="btn btn-default">Adicionar Projeto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Projeto</th>
                <th>Responsável</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        require 'classes/projetos.class.php';
        $p = new Projetos();
        $projetos = $p->getMeusProjetos();
        foreach ($projetos as $projeto) {
            ?>
            <tr>
                <td>
                    <?php if(!empty($projeto['url'])): ?>
                        <img src="assets/images/projetos/<?php echo $projeto['url']; ?>" height="50" border="0"/>
                    <?php else: ?>
                        <img src="assets/images/default.JPG" height="50" border="0" />
                    <?php endif; ?>
                </td>
                <td><?php echo $projeto['titulo']; ?></td>
                <td>R$ <?php echo number_format($projeto['valor'], 2); ?></td>
                <td>
                    <a href="editar_projeto.php?id=<?php echo $projeto['id'] ?>" class="btn btn-success">Editar</a>
                    <a href="excluir_projeto.php?id=<?php echo $projeto['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
                <?php
            }
            ?>
        </tr>

    </table>

</div>
<?php require 'pages/footer.php'; ?>
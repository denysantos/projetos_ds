<?php require 'pages/header.php'; ?>
<?php require 'pages/menu.php'; ?>
<?php require 'classes/usuario.class.php'; ?>

<?php
$u = new Usuario();
$usuario = 0;
$exibeUsuario = $u->exibeTodosUsuarios($usuario);
?>
<div class="container">
    <table  class="table table-striped col-md-12">
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>E-mail</th>
        </tr>
        <?php
        foreach ($exibeUsuario as $exibirUsuarios) {
            ?>

            <tr>
                <td class="col-md-3">
                    <?php echo ($exibirUsuarios['id']); ?>
                </td>
                <td class="col-md-3">
                    <?php echo ($exibirUsuarios['ds_usuario']); ?>
                </td>
                <td class="col-md-3">
                    <?php echo ($exibirUsuarios['email']); ?>
                </td>
            </tr>

            <?php
        }
        ?>
    </table>
</div>
<?php require 'pages/footer.php'; ?>

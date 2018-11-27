<?php require 'pages/header.php'; ?>

<div class="container">
    <h1>Perfil</h1>
    <legend>Cadastro</legend>
    <div class="col-md-12">
        <ul class="nav nav-tabs">
            <li role="admin"><a href="admin.php">Admin</a></li>
            <li role="admin"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin" class="active"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="#">Fornecedores</a></li>
        </ul>
    </div>
    <?php if (empty($_SESSION['cLogin'])) {
        ?>
        <script type="text/javascript">window.location.href = "login.php";</script>
        <?php
        exit;
    }

    require 'classes/perfil.class.php';
    $p = new Perfil();

    if (isset($_POST['ds_perfil']) && !empty($_POST['ds_perfil'])) {
        $perfil = addslashes($_POST['ds_perfil']);

        $p->addPerfil($perfil);
        ?>

        <div class="alert alert-success">
            Perfil cadastrado com sucesso.
        </div>
        <?php
    }
    ?>

    <form method="POST">
        <div class="form-group col-md-12">
            <label for="ds_perfil">Perfil</label>
            <input class="form-control" type="text" name="ds_perfil" id="ds_perfil"/>
        </div>        
        <div class="form-group col-md-12">
            <input class="btn btn-success" type="submit" value="Cadastrar"/>        
        </div>
    </form>

    <div class="col-md-12">
        <table class="table-striped col-md-12">
            <thead>
                <tr>
                    <th>Perfis cadastrados</th>
                </tr>
                <tr>
                    <th>Perfil:</th>
                    <th>Ação:</th>
                </tr>
            </thead>

            <?php
            $ep = new Perfil();
            $perfil = 0;
            $exibePerfil = $ep->getPerfil($perfil);
            foreach ($exibePerfil as $exibirPerfil) {
                ?>
                <tr class="col-md-12">
                    <td class="col-md-9">
                        <h4><?php echo ($exibirPerfil['ds_perfil']); ?></h4>
                    </td>
                    <td class="col-md-3">
                        <a href="excluirPerfil.php?id=<?php echo $exibirPerfil['id'] ?>" class="btn btn-danger">Excluir</a> 
                    </td>
                </tr>
            <?php
            
            }
            ?>
            </table>
    </div>
</div>

<?php require "pages/footer.php"; ?>
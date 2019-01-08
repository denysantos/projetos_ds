<?php require 'pages/header.php';?>

<div class="container">
    <h1>Pessoa Física</h1>
    <legend>Cadastro</legend>
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li role="admin"><a href="admin.php">Admin</a></li>
            <li role="admin"><a href="usuarios.php">Usuários</a></li>
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
//$totalPessoas = $p->getTotalPessoas();
$pag = 0;

//$porPagina = 3;
//$totalPaginas = ceil($totalPessoas / $porPagina);
//$pessoas = $a->getTotalPessoas();



if(isset($_POST['cpf']) && !empty($_POST['cpf'])) {
    $cpf = addslashes($_POST['cpf']);
    $pessoa = addslashes($_POST['pessoa']);
    $fone = addslashes($_POST['fone']);
    $cep = addslashes($_POST['cep']);
    $numero = addslashes($_POST['numero']);
    $email = addslashes($_POST['email']);
    
    $p->addPessoa($cpf, $pessoa, $fone, $cep, $numero,$email);


?>

<div class="alert alert-success">
        Pessoa cadastrada com sucesso!
    </div>

<?php
}
?>

    <form method="POST">
        <div class="form-group col-sm-2">
            <label for="cpf" name="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" />
        </div>
        <div class="form-group col-sm-5">
            <label for="pessoa" name="pessoa">Nome Completo:</label>
            <input type="text" name="pessoa" id="pessoa" class="form-control" />
        </div>
        <div class="form-group col-sm-2">
            <label for="fone" name="fone">Fone:</label>
            <input type="text" name="fone" id="fone" class="form-control"/>            
        </div>        
        <div class="form-group col-sm-3">
            <label for="email" name="fone">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control"/>            
        </div>
        <div class="form-group col-sm-2">
            <label for="cep" name="cep">CEP:</label>
            <input type="text" name="cep" id="cep" class="form-control"/>
        </div>
        <div class="form-group col-sm-7">
            <label for="logradouro" name="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" class="form-control" disabled />
        </div>
        <div class="form-group col-sm-2">
            <label for="numero" name="numero">Número:</label>
            <input type="text" name="numero" id="numero" class="form-control"/>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" value="Cadastrar" class="btn btn-success"/>
        </div>
    </form>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <legend>Últimas Pessoas Cadastradas</legend>                    
                </tr>
                <tr>
                    <th class="col-md-1">CPF:</th>
                    <th class="col-md-6">Nome:</th>
                    <th class="col-md-1">Telefone:</th>
                    <th class="col-md-1">E-mail:</th>
                    <th class="col-md-1">CEP:</th>
                    <th class="col-md-1">Número:</th>
                    <th class="col-md-1">Ação:</th>
                </tr>
            </thead>
                <?php
                $pf = new Pessoa();
                $pessoa = 0;
                $exibePessoa = $pf->getPessoa($pessoa);
                foreach ($exibePessoa as $exibirPessoa) {

                ?>
            <tbody>
                <tr>
                    <td class="col-md-1">
                        <?php echo ($exibirPessoa['nr_cpf']); ?>
                    </td>
                    <td class="col-sm-5">
                        <?php echo ($exibirPessoa['nm_pessoa']); ?>
                    </td>
                    <td class="col-sm-1">
                        <?php echo ($exibirPessoa['fone']); ?>
                    </td>
                    <td class="col-sm-1">
                        <?php echo ($exibirPessoa['email']); ?>
                    </td>
                    <td class="col-sm-1">
                        <?php echo ($exibirPessoa['cep']); ?>
                    </td>
                    <td class="col-sm-1">
                        <?php echo ($exibirPessoa['numero']); ?>
                    </td>
                    <td class="col-md-1">
                        <a href="editar_pessoa.php?id=<?php echo $exibirPessoa['id'] ?>" class="btn btn-warning">Editar</a>
                    </td>
                    <td class="col-md-1">
                        <a href="excluirPessoa.php?id=<?php echo $exibirPessoa['id']?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>

                <?php 
                }
                ?>

            </tbody>
        </table>
<!--
        <ul class="pagination">
            <?php for($q=1;$q<=$totalPaginas;$q++): ?>
                <li class="<?php echo ($pag==$q)?'active':''?>">
                    <a href="add_pessoa.php?p=<?php echo $q ?>"><?php echo $q; ?></a>
                </li>
            <?php endfor;?>
        </ul>
-->        
    </div>
</div>
<?php require 'pages/footer.php'; ?>
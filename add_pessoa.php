<?php require 'pages/header.php';?>

<div class="container">
    <h1>Pessoa Física</h1>
    <legend>Cadastro</legend>
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
    
    $p->addPessoa($cpf, $pessoa, $fone, $cep, $numero);


?>

<div class="alert alert-success">
        Pessoa cadastrada com sucesso!
    </div>

<?php
}
?>

    <form method="POST">
        <div class="form-group col-sm-3">
            <label for="cpf" name="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" />
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
        <?php require 'classes/endereco.class.php'; 
        $cep = 0;
        $e = new Endereco();
        $ends = $e->getEndereco($cep);
        foreach($ends as $end){
            ?>
        <div class="form-group col-sm-6">
            <label for="endereco" name="endereco">Endereço:</label>            
            <?php echo utf8_encode($end['ds_logradouro']); ?>    
        </div>        
        
            <?php
        }
        ?>
        <div class="form-group col-sm-1">
            <label for="numero" name="numero">Número:</label>
            <input type="text" name="numero" id="numero" class="form-control"/>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" value="Cadastrar" class="btn btn-success"/>
        </div>
    </form>
    <div class="col-md-12">
        <table class="table-borderless">
            <thead>
                <tr>
                    <legend>Pessoas Cadastradas</legend>                    
                </tr>
                <tr>
                    <th class="col-md-1">CPF:</th>
                    <th class="col-sm-6">Nome:</th>
                    <th class="col-sm-1">Telefone:</th>
                    <th class="col-sm-1">CEP:</th>
                    <th class="col-sm-1">Número:</th>
                    <th>Ação:</th>
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

    </div>
</div>

<?php require 'pages/footer.php'; ?>
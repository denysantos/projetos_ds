<?php require 'pages/header.php'; ?>
<?require 'pages/menu.php'; ?>
<?php if(empty($_SESSION['cLogin'])){
    ?>
<script type="text/javascript">window.location.href="login.php";</script>
<?php
} ?>
<div class="container">
    <h1>Página de Cadastros</h1>
    <legend>Administrador</legend>

    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li role="admin" class="active"><a href="admin.php">Admin</a></li>
            <li role="admin"><a href="usuarios.php">Usuários</a></li>
            <li role="admin"><a href="add_pessoa.php">Pessoas</a></li>
            <li role="admin"><a href="perfil.php">Perfil</a></li>
            <li role="admin"><a href="fornecedores.php">Fornecedores</a></li>
        </ul>        
    </div>
    <div class="col-sm-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, neque ut blandit dignissim, ligula diam sollicitudin tellus, et hendrerit elit libero at libero. Phasellus vehicula odio libero, vitae porta turpis suscipit eget. Donec non fringilla ante. Praesent vel purus ac arcu molestie tristique. Integer quis quam rutrum, pellentesque elit quis, efficitur risus. Proin ac felis id elit finibus sagittis. Sed a pulvinar quam. Nunc varius odio in sem gravida, vel tristique mauris mollis. Nunc placerat arcu condimentum, volutpat tellus a, auctor diam. Proin placerat posuere mauris eu condimentum. Quisque scelerisque, purus non egestas pulvinar, risus lacus consequat risus, sed consequat metus leo in urna. Integer sollicitudin mattis ipsum quis suscipit.
    </div>
</div> 
<?php require 'pages/footer.php'; ?>
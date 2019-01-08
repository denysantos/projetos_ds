<?php
require 'pages/header.php';
?>
<!--navegação-->

<!--fim de navegação-->        

<div class="container">
    <form>
        <div class="row">
            <h1>Visão de Projetos (Atores e Casos de Uso)</h1>
            <legend>Dados do cliente</legend>                    
            <div class="col-sm-3">
                <label for="nromap">Projeto</label>
                <div class="input-group">                            
                    <span class="input-group-addon" id="basic-addon1">ID</span>
                    <input type="text" class="form-control" placeholder="ID Projeto" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="nome">Nome Cliente</label>
                <div class="input-group">                            
                    <span class="input-group-addon" id="nome" aria-describedby="nome">
                        <span class="glyphicon glyphicon-search"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Nome do cliente" aria-describedby="nome">
                </div>                        
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Setor</label>
                    <select class="form-control">
                        <option>Tecnologia da Informação</option>                        
                        <option>Contabilidade</option>
                        <option>Diretoria</option>
                        <option>Enfermagem</option>                        
                        <option>Médicos</option>
                        <option>SADT</option>
                    </select>
                </div>
            </div>


            <!--setor
            <div class="col-sm-3">
                <label for="setor">Setor</label>
                <div class="form-group">                            
                    <input type="text" class="form-control" id="setor" disabled placeholder="Tecnologia da Informação">
                </div>                          
            </div>
            -->

            <div class="col-md-2">
                <label for="dt_solic">Data Mapeamento</label>
                <div class="form-group">                            
                    <input type="date" class="form-control" id="dt_solic">
                </div>                  
            </div> 
        </div>


        <div class="row">
            <div class="form-group">
                <div class="form-group">
                    <legend>Visão de Projeto</legend>
                    Também conhecida como visão de negócio, enunciado do problema, requisição do cliente etc.
                    <textarea rows=7 class="form-control" id="comoativ" 
                              placeholder="Pode ser obtida de várias formas: 
                              - Brainstorming, 
                              - Seminários JAD (Joint Application Design), 
                              - Análise de documentos, Etc."></textarea>
                </div>                        
            </div>                    
        </div>

        <div class="row">
            <div class="form-group">
                <div class="form-group">
                    <legend>Identificação dos atores</legend>
                    Para identificar um ator é necessário:
                    <textarea rows=7 class="form-control" id="comoativ" 
                              placeholder="a) Um ator especifica um papel desempenhado por um usuário ou qualquer outro sistema que interage com o sujeito; 
                              b) O próximo passo é levantar suas responsabilidades; 
                              c) Atores primários: aqueles que iniciam ações no sistema; 
                              d) Em seguida, temos que identificar papéis que um indivíduo poderia assumir em relação ao sistema."></textarea>
                </div>                        
            </div>                    
        </div>

        <div class="row">
            <div class="form-group">
                <legend>Identificação dos casos de uso</legend>
                Responder às seguintes perguntas sobre os atores encontrados, principalmente os atores primários:
                <textarea rows="7" class="form-control" id="usecase" 
                          placeholder="a) Quais são os processos de que o ator participa nos quais atinge algum objetivo de negócio?; 
                          b) Como o ator utiliza os serviços do sistema em cada processo?"></textarea>
            </div>
        </div>


        <div class="row col-md-12">
            <button class="btn btn-success btn-lg" data-toggle="tooltip" title="Confirmar a gravação dos dados">Gravar</button>
            <button class="btn btn-warning btn-lg" data-toggle="tooltip" title="Pular para a próxima etapa">Pular</button>
            <button class="btn btn-danger btn-lg" data-toggle="tooltip" title="Cancelar a gravação dos dados">Cancelar</button>
        </div>
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });
</script>        
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
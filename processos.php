<?php
require 'pages/header.php';
?>
<!--navegação-->

<!--fim de navegação-->        

<div class="container">
    <form>
        <div class="row">
            <h1>Mapeamento de Processos</h1>
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
            <legend>Identificando o processo de negócio</legend>
            <div class="col-sm-12">
                <div class="form-group">                            
                    <div class="form-group">                            
                        <label>Qual</label> o objetivo do processo?
                        <textarea rows="3" class="form-control" id="qual_objetivo" placeholder="Digite aqui o objetivo do negócio." required></textarea>
                    </div>
                    <label>Quais</label> as atividades envolvidas e a sua sequência?
                    <textarea rows="5" class="form-control" id="quais_atividades" placeholder="Digite aqui as atividades envolvidas e a sua sequência."></textarea>
                </div>
                <div class="form-group">                            
                    <label>Quando</label> as atividades são realizadas?
                    <textarea rows="5" class="form-control" id="quando_realizadas" placeholder="Digite aqui quais são as atividades realizadas..."></textarea>
                </div>
                <div class="form-group">                            
                    <label>Quem ou o quê</label> está envolvido na execução das atividades?
                    <textarea rows="7" class="form-control" id="quem_executa" placeholder="Digite aqui as atividades e sua sequência..."></textarea>
                </div>       
                <div class="form-group">                            
                    <label>O que</label> é consumido ou produzido?
                    <textarea rows="7" class="form-control" id="o_que_produz" placeholder="Digite aqui as atividades e sua sequência..."></textarea>
                </div>          
                <div class="form-group">                            
                    <label>Como</label> as atividades devem ser realizadas?
                    <textarea rows=7 class="form-control" id="como_deve_ser" placeholder="Digite aqui as atividades e sua sequência..."></textarea>
                </div>        
                <div class="form-group">                            
                    <label>Como</label> o processo se relaciona com a organização do negócio?
                    <textarea rows="7" class="form-control" id="como_se_relaciona" placeholder="Digite aqui as atividades e sua sequência..."></textarea>
                </div>                        
            </div>
        </div>    
        <div class="row">
            <legend>Compilação da análise do processo</legend>
            <!--tabela-->
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead><strong>TABELA</strong></thead>
                    <tbody>
                        <tr>
                            <th class="col-md-2">Título</th>                            
                            <th class="col-md-10">Descrição</th>
                        </tr>
                        <tr>
                            <th class="col-md-2">Nome do processo</th>                            
                            <td class="col-md-10"><textarea rows="1" class="form-control" id="nm_processo" placeholder="Insira o nome do processo aqui..."></textarea></td>
                        </tr>
                        <tr>
                            <th class="col-md-2">Objetivo</th>
                            <td class="col-md-10"><textarea rows="1" class="form-control" id="ds_objetivo" placeholder="Digite o objetivo do processo aqui..."></textarea></td>
                            
                        </tr>
                        <tr>
                            <th class="col-md-2">Entradas</th>
                            <td class="col-md-10"><textarea rows="2" class="form-control" id="ds_entrada" placeholder="Digite as entradas do processo aqui..."></textarea></td>
                        </tr>
                        <tr>
                            <th class="col-md-2">Saídas</th>
                            <td class="col-md-10"><textarea rows="2" class="form-control" id="ds_saidas" placeholder="Digite as saídas do processo aqui..."></textarea></td>
                        </tr>
                        <tr>
                            <th class="col-md-2">Recursos</th>
                            <td class="col-md-10"><textarea rows="2" class="form-control" id="ds_recursos" placeholder="Digite os recursos do processo aqui..."></textarea></td>
                        </tr>
                        <tr>
                            <th class="col-md-2">Atividades</th>
                            <td class="col-md-10"><textarea rows="2" class="form-control" id="ds_atividades" placeholder="Digite as atividades do processo aqui..."></textarea></td>
                        </tr>      
                        <tr>
                            <th class="col-md-2">Eventos</th>
                            <td class="col-md-10"><textarea rows="2" class="form-control" id="ds_eventos" placeholder="Digite os eventos do processo aqui..."></textarea></td>
                        </tr>                                
                    </tbody>
                </table>
            </div>
            <!--fim da tabela-->

            <!--diagrama de negócios-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <legend>Diagrama de modelo de negócios</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/default.JPG" alt="thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--fim diagrama de negócios-->

                <!--diagrama de atividades-->

                <div class="col-md-12">
                    <div class="form-group">
                        <legend>Diagrama de atividades</legend>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="thumbnail"><img src="assets/images/default.JPG" alt="thumbnail"></a>                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--fim diagrama de atividades-->
        </div>


        <div class="row col-sm-3">
            <button type=button" class="btn btn-success btn-lg" data-toggle="tooltip" title="Confirmar gravação dos dados">Gravar</button>
            <button class="btn btn-danger btn-lg">Cancelar</button>
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
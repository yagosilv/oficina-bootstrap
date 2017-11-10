<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php date_default_timezone_set('America/Fortaleza'); ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oficina Bootstrap</title>

        <!-- Favicon -->
        <!--[if IE]><link rel="shortcut icon" href="images/favicon.ico"><![endif]-->
        <link rel="icon" href="images/favicon.ico">

        <!-- Normalize - CSS para resetar componentes -->
        <link href="./css/normalize.css" rel="stylesheet">

        <!--- Bootstrap -->
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- MATERIAL ICONS -->
        <link href="./iconfont/material-icons.css" rel="stylesheet">

        <!--- CSS GERAL -->
        <link href="./css/style.css" rel="stylesheet" >

        <!-- ICONES BOOTSTRAP-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Título do modal</h4>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="video" class="embed-responsive-item" src=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center title-content">
                <h1 class="text-capitalize workshop-title">oficina bootstrap</h1>
            </div>

            <form action="" method="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-capitalize">Dados Pessoais</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome-form" class="control-label">Nome:</label>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" id="nome-form" name="nome" class="form-control" placeholder="digite seu nome">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="data-nascimento-form" class="control-label">Data de Nascimento:</label>
                                    <input type="date" name="data_nascimento" id="data-nascimento-form" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="data-cadastro-form" class="control-label">Data de Cadastro:</label>
                                    <input type="date" name="data_cadastro" id="data-cadastro-form" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cpf-form" class="control-label">CPF:</label>
                                    <input type="text" name="cpf" id="cpf-form" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="rg-form" class="control-label">RG:</label>
                                    <input type="text" name="rg" id="rg-form" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome-mae-form" class="control-label">Nome da Mãe:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="nome_mae" id="nome-mae-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fixo-form" class="control-label">Telefone Fixo:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                        <input type="tel" name="fixo" id="fixo-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular-form" class="control-label">Telefone Celular:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input type="tel" name="celular" id="celular-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email-form" class="control-label">Email:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" name="email" id="email-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="observacoes-form" class="control-label">Observações:</label>
                                    <textarea id="observacoes-form" name="observacoes" class="form-control" rows="4" placeholder="Observações"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Endereço</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="logradouro-form" class="control-label">Logradouro:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" name="logradouro" id="logradouro-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="complemento-form" class="control-label">Complemento:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" name="complemento" id="complemento-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="numero-form" class="control-label">Número:</label>
                                    <input type="number" name="numero" id="numero-form" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cep-form" class="control-label">CEP:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" name="cep" id="cep-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bairro-form" class="control-label">Bairro:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" name="bairro" id="bairro-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cidade-form" class="control-label">Cidade:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" name="cidade" id="cidade-form" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="uf-form" class="control-label">UF:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <select name="uf" id="uf-form" class="form-control">
                                            <option value="CE">Ceará</option>
                                            <option value="BA">Bahia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- IMPORTACAO DOS SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="./mdl/material.min.js"></script>
        <script src="./js/glossario.js"></script>

    </body>
</html>

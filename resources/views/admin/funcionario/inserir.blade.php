﻿<!DOCTYPE html>
<html>

<head>
@include('admin.layout.head2');
</head>

<body class="theme-red">
    
    @include('admin.layout.carregamento')
    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    @include('admin.layout.topbar')
   
   @include('admin.layout.menu-lateral')

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>CADASTRO DE FUNCIONÁRIO</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="/funcionarios/add" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="nome" required>
                                            <label class="form-label">Nome</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="endereco" required>
                                            <label class="form-label">Endereço</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" value="" class="form-control" autocomplete="off" name="email" required>
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" value="" class="form-control" name="carteira_trabalho" required>
                                            <label class="form-label">Carteira de Trabalho</label>
                                        </div>
                                        <div class="help-info">Apenas números</div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control data" name="data_nascimento" required>
                                            <label class="form-label">Data de nascimento</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="nome_conjuge">
                                            <label class="form-label">Nome conjuge</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" value="" class="form-control" name="quantidade_beneficiarios">
                                            <label class="form-label">Número de beneficiários</label>
                                        </div>
                                        <div class="help-info">Apenas números</div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control valor" name="salario">
                                            <label class="form-label">Salário</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control valor" name="vt">
                                            <label class="form-label">Vale Transporte</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control valor" name="vr">
                                            <label class="form-label">Vale Refeição</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control valor" name="va">
                                            <label class="form-label">Vale Alimentação</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control data" name="data_admissao">
                                            <label class="form-label">Data de admissão</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

    <script src="/plugins/mask/src/jquery.mask.js"></script>
    <script src="/plugins/maskmoney/src/jquery.maskMoney.js"></script>

    <!-- Custom Js -->
    <script src="/js/admin.js"></script>
    <script src="/js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="/js/demo.js"></script>
    

    <script>
        $(document).ready(function(){
            $('.data').mask('00/00/0000');

            $(".valor").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'', decimal:'.', affixesStay: false});
        })
    </script>
</body>

</html>

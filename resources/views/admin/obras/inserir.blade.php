<!DOCTYPE html>
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
                            <h2>CADASTRO DE OBRAS</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="/funcionarios/add" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="empresa" required>
                                            <label class="form-label">Empresa</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="nome" required>
                                            <label class="form-label">Nome</label>
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
                                            <input type="text" value="" class="form-control valor" name="valor">
                                            <label class="form-label">Valor da obra</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control valor" name="telefone">
                                            <label class="form-label">Telefone</label>
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" value="" class="form-control data" autocomplete="off" name="data_inicio" required>
                                            <label class="form-label">Data de início da obra</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" value="" class="form-control data" autocomplete="off" name="data_revisao" required>
                                            <label class="form-label">Data de revisão da obra</label>
                                        </div>
                                    </div>
                                </div>   

                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" value="" class="form-control" id="cep" autocomplete="off" name="cep" required>
                                            <label class="form-label">CEP</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="logradouro" required>
                                            <label class="form-label">Endereço</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="complemento" required>
                                            <label class="form-label">Complemento</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="bairro" required>
                                            <label class="form-label">Bairro</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <p>
                                        <b>Basic</b>
                                    </p>
                                    <select class="form-control show-tick">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="" class="form-control" autocomplete="off" name="cidade" required>
                                            <label class="form-label">Cidade</label>
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

        $(document).on('blur','#cep',function(){
            $.ajax({
                url: 'https://viacep.com.br/ws/06414025/json/',
                dataType: 'json',   
                contentType: "application/json",
                statusCode: {
                    200: function(data) { console.log(data); } // Ok
                    ,400: function(msg) { console.log(msg);  } // Bad Request
                    ,404: function(msg) { console.log("CEP não encontrado!!"); } // Not Found
                }
            })
        })
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistema de Almoxarifado</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"></link>
        <link rel="stylesheet" href="css/app.css"></link>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
            <header class="navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-md-6 col-sm-6">
                            <div class="logo">
                                <i class="fa fa-dot-circle-o fa-2x"></i>&nbsp;
                            </div>
                            <div class="titulo">
                                <h4>Valkiria - Sistema de Almoxarifado</h4>
                            </div>
                        </section>
                        <section class="col-md-6 col-sm-6 text-right">
                            <ul class="nav nav-pills text-right">
                                <li data-toggle="tooltip" data-placement="bottom"
                                title="Início">
                                    <a>
                                        <i class="fa fa-home fa-fw"></i>
                                    </a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom"
                                title="Mensagens Internas">
                                    <a><i class="fa fa-envelope-o fa-fw"></i>
                                    </a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom"
                                title="Perfil do Usuário">
                                    <a><i class="fa fa-user-plus fa-fw"></i>
                                    </a>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom"
                                title="Sair do Sistema">
                                    <a>
                                        <i class="fa fa-sign-out fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </header>

            <section id="corpo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <aside id="menu-lateral" class="wrap-box-shadow">
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
                                        <a><i class="fa fa-home fa-fw"></i>&nbsp;
                                            Início
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-inbox fa-fw"></i>&nbsp;
                                            Requisições&nbsp;<span class="badge">42</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-cubes fa-fw"></i>&nbsp;
                                            Almoxarifados
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-mail-reply fa-fw"></i>&nbsp;
                                            Entrada de Materiais
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-external-link fa-fw"></i>&nbsp;
                                            Saída de Materiais
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-area-chart fa-fw"></i>&nbsp;
                                            Relatórios
                                        </a>
                                    </li>
                                    <li>
                                        <a><i class="fa fa-gear fa-fw"></i>&nbsp;
                                            Configurações
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            @yield("corpo")

                            <footer>
                            </footer>
                        </div>
                    </div>
                </div>
            </section>

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        @yield("javascripts")
        <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistema de Almoxarifado</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3 style="color:#ecf0f1;">Sistema de Almoxarifado</h3>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <ul class="inline-list text-right">
                            <li role="presentation" class="active">
                                <a href="#">
                                    <i class="fa fa-home fw"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#">
                                    <i class="fa fa-user fw"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#">
                                    <i class="fa fa-align-justify fw"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section id="corpo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    Menu do Sistema
                                </div>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-home fa-fw"></i>&nbsp;
                                            Inicio
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-inbox fa-fw"></i>&nbsp;
                                            Requisições<spam class="badge">16</spam>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-cubes fa-fw"></i>&nbsp;
                                            Almoxarifados
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-external-link-square fa-fw"></i>&nbsp;
                                            Entrada de Materiais
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-sign-out fa-fw"></i>&nbsp;
                                            Saída de Materiais
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-users fa-fw"></i>&nbsp;
                                            Usuários
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-bar-chart fa-fw"></i>&nbsp;
                                            Relatórios
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a>
                                            <i class="fa fa-gears fa-fw"></i>&nbsp;
                                            Configurações
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-10">
                        @yield("corpo")
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="text-center">
                            <spam>&copy;Todos os direitos a Prefeitura Municipal de Forquilha</spam>
                            <br />
                            <spam>Desenvolvido por <a href=#>Rodrigo Soares</a></spam>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        @yield("javascripts")
        <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>

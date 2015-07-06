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
        <header class="navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <h4 class="titulo">Sistema de Almoxarifado - Valkiria v0.1</h4>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <nav id="menu-topo">
                            <ul class="inline-list text-right">
                                <li><a href=#><i class="fa fa-home fa-fw"></i></a></li>
                                <li><a href=#><i class="fa fa-user fa-fw"></i></a></li>
                                <li><a href=#><i class="fa fa-sign-out fa-fw"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <section id="corpo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 col-md-2">
                        <nav id="menu">
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
                                        <i class="fa fa-bookmark fa-fw"></i>&nbsp;
                                        Setores
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
                                        <i class="fa fa-share-square-o fa-fw"></i>&nbsp;
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
                        </nav>
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
                            <spam><?php echo date('Y') ?>&nbsp;&copy;Todos os direitos a <a href=#>Prefeitura Municipal de Forquilha</a></spam>
                            <br />
                            <spam>Desenvolvido por <a href=#>Rodrigo Soares</a></spam>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        @yield("javascripts")
    </body>
</html>

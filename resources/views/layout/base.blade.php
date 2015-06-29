<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Site Properities -->
        <title>Homepage Example - Semantic</title>

        <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="semantic/semantic.js"></script>
    </head>

    <body>

        <header>
            <div class="ui grid">
                <div class="eight wide column">

                </div>
                <div class="eight wide column">
                </div>
            </div>
        </header>

        <section id="corpo">
            <div class="ui grid">
                <div class="three wide column">
                    <div class="ui vertical menu">
                        <div class="item">
                            <div class="ui transparent icon input">
                                <input placeholder="pesquisa..." type="text">
                                <i class="search icon"></i>
                            </div>
                        </div>
                        <a class="active teal item">
                            Inbox
                            <div class="ui teal label">1</div>
                        </a>
                        <a class="item">
                            Spam
                            <div class="ui label">51</div>
                        </a>
                        <a class="item">
                            Updates
                            <div class="ui label">1</div>
                        </a>
                    </div>
                </div>
                <div class="thirteen wide column">
                    @yield("corpo")
                </div>
            </div>
        </section>

        <footer>
        </footer>

        <script type="text/javascript">
            $('.left.demo.sidebar')
                .sidebar('toggle')
            ;
        </script>
    </body>
</html>

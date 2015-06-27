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
        </header>

        <section id="menu-lateral">
            <div class="ui visible left vertical inverted labeled icon sidebar menu">
                <a class="item">
                    <i class="home icon"></i>
                    Home
                </a>
                <a class="item">
                    <i class="block layout icon"></i>
                    Topics
                </a>
                <a class="item">
                    <i class="smile icon"></i>
                    Friends
                </a>
                <a class="item">
                    <i class="calendar icon"></i>
                    History
                </a>
                <a class="item">
                    <i class="mail icon"></i>
                    Messages
                </a>
                <a class="item">
                    <i class="chat icon"></i>
                    Discussions
                </a>
                <a class="item">
                    <i class="trophy icon"></i>
                    Achievements
                </a>
                <a class="item">
                    <i class="shop icon"></i>
                    Store
                </a>
                <a class="item">
                    <i class="settings icon"></i>
                    Settings
                </a>
            </div>
        </section>

        <section id="corpo">
            <div class="">
                @yield("corpo")
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

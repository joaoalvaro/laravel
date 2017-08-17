<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sua Vaga</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

        <!--Assets -->
        <link rel="stylesheet" href="{{url('assets/admin/css/estilo.css')}}"
              <link rel="stylesheet" href="{{url('assets/css/theme.css')}}"
              <link rel="stylesheet" href="{{url('assets/css/docs.css')}}"
              <link rel="stylesheet" href="{{url('assets/css/ie10-viewport-bug-workaround.css')}}"/>

        <link rel="stylesheet" href="{{url('assets/js/vendor/jquery.min.js')}}"/>
        <link rel="stylesheet" href="{{url('assets/js/ie-emulation-modes-warning.js')}}"/>
        <link rel="stylesheet" href="{{url('assets/js/docs.min.js')}}"/>
        <link rel="stylesheet" href="{{url('assets/js/ie10-viewport-bug-workaround.js')}}"/>

        <!--Dist -->
        <link rel="stylesheet" href="{{url('dist/css/bootstrap-theme.min.css')}}"/>
        <link rel="stylesheet" href="{{url('dist/css/bootstrap.min.css')}}"/>

        <link rel="stylesheet" href="{{url('dist/js/bootstrap.min.js')}}"/>
        <link rel="stylesheet" href="{{url('dist/js/')}}"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
               <!-- font-family: 'Raleway', sans-serif; -->
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .footer > a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-left: 20px;
                text-align: left;
            }

            .footer{
                background-color: #000;
                padding-top: 35px;
                padding-bottom: 50px;
            }
            
            .footer > li{
                margin-left: 5px;
                margin-bottom: 2px;
                margin-top: 1px;
            }
            
            .footer > li > a{
                color: #fff;
            }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SuaVaga.com</a>
                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dicas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div>
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Cadastre-se</a>
                            @endauth
                        </div>
                        @endif
                    </div>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

            <div class="footer">
                <li><a href="">Link</a></li>
                <li><a href="">Git-Hub</a></li>
                <li><a href="">Dicas</a></li>
            </div>

    </body>
</html>

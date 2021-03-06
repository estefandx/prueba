<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css')
          }}">
          <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-material-design/dist/bootstrap-material-design.css')
          }}">
         

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
          
            <div class="content">
                <div class="title m-b-md">
                    <h1>estefan cambio para git</h1>
                <button type="button" class="btn btn-raised btn-danger">otra version git</button
                >
                <button type="button" class="btn btn-raised btn-danger">este boton es de la rama test</button
                >
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
    </body>
</html>

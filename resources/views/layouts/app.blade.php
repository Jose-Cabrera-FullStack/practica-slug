<html>
    <head>
        <title>ProjectoLaravel - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    </head>

    <body>

        <nav class="navbar navbar-dark bg-primary">
        <a href="http://projectolaravel.com/trainers" class="navbar-brand">ProjectoLaravel</a>
        </nav>
        <div class="container">
              @yield('content')
        </div>

      
    </body>
</html>
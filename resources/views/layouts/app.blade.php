<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <nav>
            <div>
                <a href="/">All Tasks</a>
            </div>
            <div>
                <a href="/create">New Task</a>
            </div>
        </nav>
        
        <div>
            @yield('content')
        </div>
        
    </body>
</html>
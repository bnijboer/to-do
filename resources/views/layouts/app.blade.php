<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Dropper To-Do') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        
        
        
        <div class="container border mt-5 p-3">
            <div class="text-center text-uppercase">
                <div class="d-inline pr-5">
                    <a href="{{ route('index') }}">
                        All Tasks
                    </a>
                </div>
                <div class="d-inline">
                    <a href="{{ route('create') }}">
                        New Task
                    </a>
                </div>
            </div>
            <div class="text-center py-3">
                <h1>@yield('heading')</h1>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
        
    </body>
</html>
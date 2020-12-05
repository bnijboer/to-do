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
        <div class="container border mt-5 px-0 pb-3">
            <div class="bg-light py-2">
                <div class="d-inline pl-3 pr-4">
                    <a
                        class="text-decoration-none"
                        href="{{ route('index') }}"
                    >
                        Tasks
                    </a>
                </div>
                <div class="d-inline">
                    <a
                        class="text-decoration-none" 
                        href="{{ route('create') }}"
                    >
                        New Task
                    </a>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="text-center text-dark py-3">
                        <h2>@yield('heading')</h2>
                    </div>
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
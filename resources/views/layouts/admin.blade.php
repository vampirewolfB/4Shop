<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Winkel - Scouting Raamsdonksveer</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success d-flex justify-content-between">
        <span class="navbar-brand">Winkel ({{ $date->start->toFormattedDateString() }} - {{ $date->end->toFormattedDateString() }})</span>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.orders.index') }}">Bestellingen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Producten</a>
            </li>
            <li class="nav-item">
                <span class="nav-link">Accounts</span>
            </li>
        </ul>
    </nav>

    <div class="main">
        <div class="container mt-4">

            @if (session('status'))
                <div class="alert alert-{{ session('status')[0] }}">
                    {!! session('status')[1] !!}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>

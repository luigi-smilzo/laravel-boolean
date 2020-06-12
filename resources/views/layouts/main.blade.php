<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Boolean</title>
</head>
<body>
    @include('shared.header')
    
    <main>
        @yield('content')
    </main>

    @include('shared.footer')
</body>
</html>
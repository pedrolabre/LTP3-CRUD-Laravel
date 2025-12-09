<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Armário Virtual')</title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Custom Styles - Modularizado -->
    <link rel="stylesheet" href="{{ asset('css/modules/_variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/_navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/_cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/_forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.navbar')

    @include('partials.alerts')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
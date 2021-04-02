<!doctype html>
<html lang="fr">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script type="text/javascript" src="{{ mix('/assets/js/alpine.js') }}" defer></script>
    @stack('head')
    <link rel="stylesheet" href="{{ mix('/assets/css/admin.css') }}">
</head>
<body class="antialiased font-sans bg-gray-200">
<div class="min-h-screen bg-gray-100">
    @includeIf('admin.partials.navbar')
    <div class="max-w-9xl mx-auto lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="py-10 sm:px-6 lg:px-8 hidden lg:block lg:col-span-2">
            @includeIf('admin.partials.sidebar')
        </div>
        <main class="lg:col-span-10">
            @yield('content')
        </main>
    </div>
</div>
@stack('js')
</body>
</html>

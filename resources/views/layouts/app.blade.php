<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('projects.index') }}" class="text-xl font-bold text-gray-900">Gestão de Projetos</a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="{{ route('projects.index') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Meus Projetos</a>
                        <a href="{{ route('logout') }}" class="ml-4 text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

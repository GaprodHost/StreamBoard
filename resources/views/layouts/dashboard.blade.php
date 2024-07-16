<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f597ce5d55.js" crossorigin="anonymous"></script>
    <title>@yield('title') | Streamboard</title>

    @vite('css')
</head>
<body class="h-screen">
<div class="flex h-screen w-full">
    <div class="fixed w-[250px] h-screen bg-gray-100 p-4 flex flex-col">
        <div class="font-bold text-xl text-center bg-gray-200 p-4 rounded">
            Streamboard <i class="fa fa-rocket"></i>
        </div>
        <div class="flex flex-col pt-4 gap-4">
            <a href="{{ route('dashboard') }}" class="block hover:bg-gray-200 rounded p-2.5">
                <i class="fa fa-dashboard mr-2"></i> Dashboard
            </a>
            <a href="{{ route('dashboard') }}" class="block hover:bg-gray-200 rounded p-2.5">
                <i class="fa fa-link mr-2"></i> Liens
            </a>
            <a href="{{ route('dashboard') }}" class="block hover:bg-gray-200 rounded p-2.5">
                <i class="fa fa-desktop mr-2"></i> Pages
            </a>
            <a href="{{ route('dashboard') }}" class="block hover:bg-gray-200 rounded p-2.5">
                <i class="fa fa-external-link mr-2"></i> Redirections
            </a>
            <a href="{{ route('dashboard') }}" class="block hover:bg-gray-200 rounded p-2.5">
                <i class="fa fa-wrench mr-2"></i> Paramètres
            </a>
        </div>

        <div class="text-xs text-center italic mt-auto">
            Version: {app_version}
        </div>
    </div>
    <main class="w-full h-screen ml-[250px] p-16">
        @yield('content')
    </main>
</div>
</body>
</html>

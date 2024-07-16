<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f597ce5d55.js" crossorigin="anonymous"></script>
    <title>Title</title>

    @vite('css')
</head>
<body class="h-screen">
<div class="h-screen w-full flex flex-col gap-6 justify-center items-center">
    <h1 class="text-3xl font-bold text-center">
        Streamboard -|- Tableau de bord
    </h1>
    <div class="w-[500px] bg-black rounded-lg p-4 gap-4 flex flex-col">
        <form action="{{ route('login') }}" method="POST" class="w-full flex flex-col gap-4">
            @csrf
            <input type="text" name="email"
                   class="block w-full rounded-md border-0 py-2 pl-7 pr-20 text-gray-900 font-light placeholder:text-gray-400"
                   placeholder="example@domaine.com"
                   required/>
            <input type="password" name="password"
                   class="block w-full rounded-md border-0 py-2 pl-7 pr-20 text-gray-900 placeholder:text-gray-400"
                   placeholder="Mot de passe"
                   required/>
            <div class="">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                           name="remember">
                    <span class="ms-2 text-white">Se rappeler de moi</span>
                </label>
            </div>
            <button type="submit" class="w-full p-2 bg-white hover:bg-white/95 text-black rounded-md text-center font-bold">
                Se connecter
            </button>
        </form>
    </div>
</div>
</body>
</html>

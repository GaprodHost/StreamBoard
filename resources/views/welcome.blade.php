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
    <img src="https://picsum.photos/500" class="rounded-full w-20" alt="Profile Pic">
    <h1 class="text-3xl font-bold text-center">
        Pseudo
    </h1>
    <div class="w-[500px] bg-black rounded-lg p-4 gap-4 flex flex-col">
        <div class="bg-white hover:bg-white/95 text-black rounded-md text-center font-bold">
            <a href="" class="block p-4">
                <i class="fa fa-link"></i> Lien random lol
            </a>
        </div>
    </div>
    <div class="w-[400px] text-center">
        <span class="text-xs">Ce site est créé par Streamboard, un logiciel open-source développé par Gaprod et la communauté des ADS. Cliquez ici pour en savoir plus</span>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f597ce5d55.js" crossorigin="anonymous"></script>
    <title>{{ Setting::get('name') }}</title>

    <link rel="icon" type="image/png" href="{{ Setting::get('avatar_url') }}">
    @vite('css')
</head>
<body class="h-screen bg-[{{ Setting::get('background_color') }}]">
<div class="h-screen w-full flex flex-col gap-6 justify-center items-center">
    <img src="{{ Setting::get('avatar_url') }}" class="rounded-full w-20" alt="Profile Pic">
    <h1 class="text-3xl font-bold text-center text-[{{ Setting::get('nickname_color') }}]">
        {{ Setting::get('name') }}
    </h1>
    <div class="w-[500px] bg-[{{ Setting::get('card_bg_color') }}] rounded-[{{ Setting::get('card_radius') }}] p-4 gap-4 flex flex-col">
        @foreach($links as $link)
            <div class="bg-[{{ Setting::get('button_bg_color') }}] hover:bg-[{{ Setting::get('button_bg_color_on_hover') }}] text-[{{ Setting::get('button_text') }}] hover:text-[{{ Setting::get('button_text_on_hover') }}] rounded-[{{ Setting::get('button_radius') }}] text-center font-bold">
                <a href="{{ $link->destination }}" target="_blank" class="block p-4">
                    @if($link->have_icon && $link->icon_position == "before")
                        <i class="{{ $link->icon_class }}"></i>
                    @endif
                    {{ $link->name }}
                    @if($link->have_icon && $link->icon_position == "after")
                        <i class="{{ $link->icon_class }}"></i>
                    @endif

                </a>
            </div>
        @endforeach
    </div>
    <div class="w-[400px] text-center">
        <span class="text-xs">Ce site est créé par Streamboard, un logiciel open-source développé par <a href="https://www.gaprod.host" target="_blank">Gaprod</a> et la communauté des ADS. <a
                href="https://github.com/GaprodHost/StreamBoard" target="_blank">Cliquez ici pour en savoir plus</a></span>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    @vite(['resources/css/app.css'])
</head>
<body class="px-20 overflow-x-hidden">
    <main>
        <header class="text-[#1c1d20] relative">
            @include('layouts.nav')
    
            <h1 class="sm:w-[90%] md:w-[80%] sm:text-[50px] md:text-[70px] lg:text-[80px] xl:text-[100px] font-sans font-semibold">Our network has up to `{{ $total }}` announces.</h1>
            <img class="sm:hidden md:block w-[70rem] z-[-1] top-[300px] right-[-40%] bottom-0 left-auto absolute opacity-[.83]" src="https://ahmedbenkrara.netlify.app/assets/highlight-ElSyRTm5.png" alt="highlight">
        </header>
        <div class="grid grid-cols-2 gap-10 mt-44 mb-40 font-Quicksand" id="annonces">
            @foreach($top10 as $item)
            <a class="block" href="/annonce/{{ $item->id }}">
                <img class="block object-cover w-full md:h-[400px]" src="{{'/storage/'.$item->cover}}" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">{{$item->title}}</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">{{$item->category->name}}</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">{{$item->type}}</h1></div>
            </a>
            @endforeach
        </div>
    </main>
</body>
</html>
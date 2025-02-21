<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css'])
</head>
<body class="px-20 overflow-x-hidden">
    <main>
        <header class="text-[#1c1d20] relative">
            @include('layouts.nav')
    
            <h1 class="sm:w-[90%] md:w-[80%] sm:text-[50px] md:text-[70px] lg:text-[80px] xl:text-[100px] font-sans font-semibold">Connecting people to reunite lost belongings.</h1>
            <img class="sm:hidden md:block w-[70rem] z-[-1] top-[300px] right-[-40%] bottom-0 left-auto absolute opacity-[.83]" src="https://ahmedbenkrara.netlify.app/assets/highlight-ElSyRTm5.png" alt="highlight">
        </header>
        <div class="mt-11">
            <input id="keyword" type="text" placeholder="Search ..." class="w-1/2 bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
            <div id="categories" class="flex gap-x-4 gap-y-6 flex-wrap">
                <div class="category selectedcat">All</div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-10 mt-44 mb-40 font-Quicksand" id="annonces">
        </div>
    </main>
    @vite(['resources/js/home.js'])
</body>
</html>
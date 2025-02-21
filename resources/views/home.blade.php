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
            <nav class="flex justify-between py-11 font-Quicksand mb-16">
                <h1 class="sm:text-[19px] md:text-[18px] lg:text-[20px] font-[600]">Lost&Found</h1>
                <ul class="flex gap-x-6 sm:text-[19px] md:text-[16px] lg:text-[16px] font-[600]">
                    <li><a href="">Home</a></li>
                    <li><a href="">Statistics</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Register</a></li>
                </ul>
            </nav>
    
            <h1 class="sm:w-[90%] md:w-[80%] sm:text-[50px] md:text-[70px] lg:text-[80px] xl:text-[100px] font-sans font-semibold">Connecting people to reunite lost belongings.</h1>
            <img class="sm:hidden md:block w-[70rem] z-[-1] top-[300px] right-[-40%] bottom-0 left-auto absolute opacity-[.83]" src="https://ahmedbenkrara.netlify.app/assets/highlight-ElSyRTm5.png" alt="highlight">
        </header>
        <div class="mt-11">
            <input placeholder="Search ..." class="w-1/2 bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
            <div class="flex gap-x-4 gap-y-6 flex-wrap">
                <div class="category selectedcat">All</div>
                <div class="category">Electronics</div>
                <div class="category">Documents</div>
                <div class="category">Clothing</div>
                <div class="category">Accessories</div>
                <div class="category">Keys</div>
                <div class="category">Wallets</div>
                <div class="category">Bags</div>
                <div class="category">Personal Items</div>
                <div class="category">Jewelry</div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-10 mt-44">
            <a class="block font-Quicksand" href="">
                <img class="block object-cover w-full md:h-[400px]" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">Realestate</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">Design &amp; Development</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">2021</h1></div>
            </a>
            <a class="block font-Quicksand" href="">
                <img class="block object-cover w-full md:h-[400px]" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">Realestate</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">Design &amp; Development</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">lost</h1></div>
            </a>
            <a class="block font-Quicksand" href="">
                <img class="block object-cover w-full md:h-[400px]" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">Realestate</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">Design &amp; Development</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">found</h1></div>
            </a>
            <a class="block font-Quicksand" href="">
                <img class="block object-cover w-full md:h-[400px]" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
                <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">Realestate</h1>
                <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
                <div class="flex justify-between"><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">Design &amp; Development</h1><h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">2021</h1></div>
            </a>
        </div>

        <!-- <a target="_blank" href="" class="block">
            <img class="block object-cover w-full" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
            <h1 class="sm:mt-5 md:mt-8 sm:text-[22px] md:text-[26px] lg:text-[33px] font-[500]">Realestate</h1>
            <div class="w-full h-[1.5px] sm:my-2 md:my-4 bg-[#d7d7d8]"></div>
            <div class="flex justify-between">
                <h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">Design &amp; Development</h1>
                <h1 class="sm:text-[15px] md:text-[16px] lg:text-[18px] sm:font-[500] md:font-[400] lg:font-[500]">2021</h1>
            </div>
        </a> -->

    </main>
</body>
</html>
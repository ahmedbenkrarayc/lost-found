<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css'])
</head>
<body class="px-20 overflow-x-hidden">
    <main class="font-Quicksand">
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
    
            <img class="sm:hidden md:block w-[70rem] z-[-1] top-[300px] right-[-40%] bottom-0 left-auto absolute opacity-[.83]" src="https://ahmedbenkrara.netlify.app/assets/highlight-ElSyRTm5.png" alt="highlight">
        </header>
        <section class="mt-11">
            <img class="block object-cover w-full md:h-[500px]" src="https://ahmedbenkrara.netlify.app/assets/realestate-CSPdVNba.png" alt="cover image">
            <span class="block mt-6 text-white text-xs bg-[#1c1d20] font-semibold px-4 py-2 w-fit rounded-full">Found</span>
            <h1 class="text-2xl font-[600] mt-1">Lorem Ipsum is simply dummy</h1>
        </section>
        <section class="mt-6">
            <p class="text-lg text-[#1c1d20]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </section>
        <section class="mt-10">
            <h1 class="text-xl font-[600] mt-1 mb-4">Comments</h1>
            <textarea placeholder="Write a comment here" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-4 h-[150px] rounded-md sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium resize-none"></textarea>
            <button class="bg-[#1c1d20] text-white font-medium px-6 py-2 rounded-md ml-auto block">Comment</button>

            <div class="comments mt-10">
                <div class="mb-6">
                    <div class="flex items-center gap-x-2 font-medium">
                        <img class="w-10 h-10" src="{{ asset('assets/images/avatar.svg') }}" alt=""> 
                        <h1>Ahmed Benkrara</h1>
                    </div>
                    <p class="pl-12">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <div class="mb-6">
                    <div class="flex items-center gap-x-2 font-medium">
                        <img class="w-10 h-10" src="{{ asset('assets/images/avatar.svg') }}" alt=""> 
                        <h1>Ahmed Benkrara</h1>
                    </div>
                    <p class="pl-12">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <div class="mb-6">
                    <div class="flex items-center gap-x-2 font-medium">
                        <img class="w-10 h-10" src="{{ asset('assets/images/avatar.svg') }}" alt=""> 
                        <h1>Ahmed Benkrara</h1>
                    </div>
                    <p class="pl-12">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
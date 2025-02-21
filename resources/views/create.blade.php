<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create annonce</title>
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
            @if(session('success'))
            <div class="px-10 py-6 bg-[#d4edda] text-[#155724] border-[#c3e6cb] rounded-md mb-16">Annonce created successfully !</div>
            @endif
            @if($errors->any())
            <ul class="list-disc px-16 py-6 bg-[#f8d7da] text-[#721c24] border-[#f5c6cb] rounded-md mb-16">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form action="/annonce/create" method="post" enctype="multipart/form-data" >
                @csrf
                <input placeholder="Title" name="title" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
                <input placeholder="Cover" name="cover" type="file" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
                <input placeholder="Place" name="place" type="text" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
                <input placeholder="Phone" name="phone" type="text" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
                <input type="date" name="date" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium"/>
                <select name="category_id" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <select name="type" class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 h-fit rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium">
                    <option value="">Select a type</option>
                    <option value="lost">Lost</option>
                    <option value="found">Found</option>
                </select>
                <textarea name="description" placeholder="Description ..." class="w-full bg-white text-[#1c1d20] border border-[#c0c0c0] mb-10 rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium resize-none h-[150px]"></textarea>
                <button type="submit" class="w-full border border-[#c0c0c0] mb-10 rounded-full sm:px-8 sm:py-[18px] md:px-9 md:py-[20px] lg:px-11 lg:py-[25px] font-Quicksand sm:text-[15px] md:text-[16px] font-medium bg-[#1c1d20] text-white">Create annonce</button>
            </form>
        </div>
    </main>
</body>
</html>
<nav class="flex justify-between py-11 font-Quicksand mb-16">
    <h1 class="sm:text-[19px] md:text-[18px] lg:text-[20px] font-[600]">Lost&Found</h1>
    <ul class="flex gap-x-6 sm:text-[19px] md:text-[16px] lg:text-[16px] font-[600]">
        <li><a href="/">Home</a></li>
        <li><a href="/statistics">Statistics</a></li>
        <li><a href="/annonce/create">Create announce</a></li>
        <li><form action="/logout" method="post">@csrf <button type="submit">Logout</button></form></li>
    </ul>
</nav>
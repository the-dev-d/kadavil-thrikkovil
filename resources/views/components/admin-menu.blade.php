<x-base-app> 
    <main class="flex w-full h-full ">
        <section class="w-1/6 h-full border-2 shadow-md">
            <div class="grid">
                <div class="w-full p-10 text-xl font-semibold border-b-2">
                    Logged in as 
                    <span class="text-3xl capitalize">
                        {{$user->name}}
                    </span>
                </div>
                {{-- bg-p1 --}}
                <ul class="grid">
                    <a href="today">
                        <li @class(["flex items-center w-full gap-3 p-5 font-semibold border-b-2", "bg-cyan-100" => request()->routeIs('today')])>
                            <span class="material-symbols-outlined">
                                today
                            </span>
                            Today
                        </li>
                    </a>
                    <a href="recent">
                        <li @class(["flex items-center w-full gap-3 p-5 font-semibold border-b-2", "bg-cyan-100" => request()->routeIs('recent')])>
                            <span class="material-symbols-outlined">
                                history
                            </span>
                            Recent
                        </li>
                    </a>
                </ul>
            </div>
        </section>
        <section class="w-full">
            {{$slot}}
        </section>
    </main>    
</x-base-app>
<x-base-app> 
    <main class="grid w-full h-full lg:flex ">
        <section class="w-full h-full border-2 shadow-md lg:w-1/6">
            <div class="flex flex-col h-full justify-items-start">
                <div class="hidden w-full p-10 text-xl font-semibold border-b-2 lg:block">
                    Logged in as 
                    <span class="text-3xl capitalize">
                        {{$user->name}}
                    </span>
                </div>
                {{-- bg-p1 --}}
                <ul style="grid-template-rows: min-content min-content 1fr;" class="flex flex-auto gap-2 lg:gap-0 justify-items-end lg:grid">
                    <a class="lg:w-full" href="/admin/console/today">
                        <li @class(["flex items-center w-full gap-3 p-5 font-semibold border-b-2", "bg-p1 bg-opacity-60" => request()->routeIs('console.today')])>
                            <span class="material-symbols-outlined">
                                today
                            </span>
                            Today
                        </li>
                    </a>
                    <a class="lg:w-full" href="/admin/console/recent">
                        <li @class(["flex items-center w-full gap-3 p-5 font-semibold border-b-2", "bg-p1 bg-opacity-60" => request()->routeIs('console.recent')])>
                            <span class="material-symbols-outlined">
                                history
                            </span>
                            Recent
                        </li>
                    </a>
                    <a class="lg:w-full" class="flex-auto" href="/admin/logout">
                        
                    </a>
                </ul>
            </div>
        </section>
        <section class="w-full">
            {{$slot}}
        </section>
    </main>    
</x-base-app>
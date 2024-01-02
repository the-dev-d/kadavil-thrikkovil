<nav class="fixed top-0 left-0 z-40 grid w-full px-3 shadow-md bg-slate-50 bg-opacity-30 backdrop-blur-2xl">
    <div class="container grid items-center grid-cols-2 mx-auto lg:grid-cols-nav">
        <h3 class="grid py-4 text-xl font-semibold xl:mx-3 place-items-center text-nowrap justify-self-start">
            <a href="/">കടവിൽ തൃക്കോവിൽ</a>
        </h3>
        <ul class="hidden grid-flow-col gap-2 gap-20justify-items-center lg:grid">
            <li @class(['h-full p-4 text-xl transition-colors hover:bg-opacity-70 border-y-4 border-transparent hover:border-b-amber-500 hover:border-opacity-70 hover:bg-white', 'border-b-amber-600' => Request::routeIs('temple')])>ക്ഷേത്രത്തെക്കുറിച്ച്</li>
            <a href="/vazhipaad">
                <li @class(['h-full p-4 text-xl transition-colors hover:bg-opacity-70 border-y-4 border-transparent hover:border-b-amber-500 hover:border-opacity-70 hover:bg-white', 'border-b-amber-600' => Request::routeIs('offerings')])>വഴിപാടുകൾ</li>
            </a>
            <li @class(['h-full p-4 text-xl transition-colors hover:bg-opacity-70 border-y-4 border-transparent hover:border-b-amber-500 hover:border-opacity-70 hover:bg-white', 'border-b-amber-600' => Request::routeIs('thirumeni')])>തിരുമേനിയെകുറിച്ച്</li>
            <a href="/#contact">
                <li @class(['h-full p-4 text-xl transition-colors hover:bg-opacity-70 border-y-4 border-transparent hover:border-b-amber-500 hover:border-opacity-70 hover:bg-white', 'border-b-amber-600' => Request::routeIs('#contact')])>ബന്ധപ്പെടുക</li>
            </a>
            <div class="items-center hidden mx-3 justify-self-end lg:grid">
                @guest
                    <a href="/login" class="flex items-center justify-center h-full gap-2 px-2 border-transparent hover:bg-white hover:bg-opacity-80 border-y-4 hover:border-b-amber-500">
                        Login
                        <span class="material-symbols-outlined">
                            login
                        </span>
                    </a>  
                @endguest
                @auth
                    <a href="/dashboard" class="flex items-center justify-center h-full gap-2 px-2 border-transparent hover:bg-white hover:bg-opacity-80 border-y-4 hover:border-b-amber-500">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                        Dashboard
                    </a>
                @endauth
            </div>
        </ul>
        <span class="justify-self-end lg:hidden">
            <span class="material-symbols-outlined">
                menu
            </span>
        </span>
    </div>
</nav>
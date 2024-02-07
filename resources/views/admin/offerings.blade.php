<x-admin-menu :user=$user> 
    <div class="box-border grid h-screen grid-cols-2 p-3 text-lg">
        <div class="box-border h-[98vh] overflow-y-auto border-2 rounded-md shadow-sm relative">
            @isset($mode)
                @if ($mode == 'add')
                <form class="sticky top-0 grid p-5 text-lg bg-white border-2 shadow-md" action={{ route('console.offerings.add') }} method="post">
                    @csrf
                    <div class="grid gap-3 p-3 mt-3">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="vazhipaad" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-500 focus:outline-none focus:ring-0 focus:border-amber-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Vazhipaad</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="price" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-amber-500 focus:outline-none focus:ring-0 focus:border-amber-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-amber-600 peer-focus:dark:text-amber-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-800">Add</button>
                </form>
                @endif
            @else
            <a href="vazhipaad?mode=add">
                <button class="sticky top-0 flex items-center justify-center w-full gap-3 p-6 bg-white border-2 border-dashed text-amber-600 border-amber-500 hover:bg-amber-50">
                    <span class="material-symbols-outlined">
                        add_circle
                    </span>
                    <span>
                        Add New
                    </span>
                </button>
            </a>
            @endisset
            @foreach ($offerings as $offering)
                <div class="grid content-center w-full grid-cols-2 gap-3 p-3 shadow-sm borer-b-2">
                    <span class="grid content-center">{{$offering->name}}</span>    
                    <div class="grid grid-cols-2 place-items-center w-fit place-self-end">
                        <div class="grid content-center font-bold">
                            <span>Rs.{{$offering->price}}</span>
                        </div>
                        <span class="p-2 ml-4 font-medium rounded-full hover:bg-slate-100 material-symbols-outlined">
                            edit
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-admin-menu>
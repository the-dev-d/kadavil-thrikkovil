<x-base-app>
    @include('layouts.navbar')
    <div class="mt-20 antialiased">
        <div class="container p-3 mx-auto">
            <div class="flex items-center justify-center p-6 my-3 bg-white border-2 rounded-md shadow-sm ">
                <span class="material-symbols-outlined">
                    error
                </span> 
                <p class="ml-2">വഴിപാടുകൾ ബുക്ക്  ചെയ്തതിനു ശേഷമുള്ള വഴിപാട് സമയങ്ങളിലായി ചെയ്യപ്പെടും. പൂർത്തിയായ വഴിപാട് ക്ഷേത്രത്തിൽനിന്ന് നേരിട്ട് വാങ്ങാവുന്നതാണ് </p>
            </div>
        </div>
        <div class="container grid gap-3 p-3 mx-auto xl:grid-cols-3">
            @foreach ($offerings as $offering)
                <div class="grid items-center w-full grid-cols-2 gap-3 p-3 bg-white border-2 rounded-sm shadow-sm xl:grid-cols-none">
                    <div class="w-full">
                        <div class="text-xl capitalize text-slate-800">
                            {{$offering->name}}
                        </div>
                        <h5 class="mt-2 text-lg font-semibold">Rs.{{$offering->price}}</h5>
                    </div>
                    <a class="xl:w-full justify-self-end" href={{ route('offerings')."/".$offering->id }}>
                        <button type="button" class="text-white xl:w-full bg-amber-500 hover:bg-amber-800 focus:ring-4 focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none">Book</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-base-app>
    


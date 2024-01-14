<x-base-app>
    @include('layouts.navbar')
    <div class="mt-20 antialiased">
        <div class="container p-3 mx-auto bg-white">
            <div class="flex items-center justify-center gap-6 p-6 my-3 bg-white border-2 rounded-md shadow-md ">
                <span class="material-symbols-outlined">
                    error
                </span> 
                <div class="text-sm lg:text-base">
                    <p class="ml-2">വഴിപാടുകൾ ബുക്ക്  ചെയ്തതിനു ശേഷമുള്ള വഴിപാട് സമയങ്ങളിലായി ചെയ്യപ്പെടും. പൂർത്തിയായ വഴിപാട് ക്ഷേത്രത്തിൽനിന്ന് നേരിട്ട് വാങ്ങാവുന്നതാണ്. </p>
                    <p class="mt-2 ml-2">                        
                        ബുക്കിങ്ങിന്റെ 2-3% വരെ പേയ്‌മെന്റ് പ്രൊവൈഡർ ചാർജ് അധികമായി ഈടാക്കാവുന്നതാണ്.
                    </p>
                </div>
            </div>
        </div>
        <div class="container grid gap-3 p-3 mx-auto bg-white md:grid-cols-2">
            @foreach ($offerings as $offering)
                <div class="grid items-center w-full gap-6 p-6 bg-white border-2 rounded-sm border-slate-200 grid-cols-nav">
                    <div class="w-full">
                        <div class="capitalize lg:text-xl text-slate-800">
                            {{$offering->name}}
                        </div>
                        <h5 class="mt-2 text-xl font-semibold">Rs.{{$offering->price}}</h5>
                    </div>
                    <a class="xl:w-full justify-self-end" href={{ route('offerings')."/".$offering->id }}>
                        <button type="button" class="text-white xl:w-full bg-amber-500 hover:bg-amber-800 focus:ring-4 focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none">Book</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-base-app>
    


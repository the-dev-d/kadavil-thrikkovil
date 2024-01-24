<x-base-app>
    <div class="bg-white">
        @include('layouts.navbar')
    <div class="w-full h-[50vh] lg:h-[70vh] relative">
        <img class="absolute top-0 left-0 w-full h-full" src="images/about-banner.png" alt="">
        <img class="absolute bottom-0 left-0 w-full" src="images/about-wave.png" alt="">
        <div class="absolute bottom-0 left-0 grid w-full gap-3 p-3 lg:gap-10 translate-y-3/4 lg:translate-y-1/3 lg:flex">
            <div class="relative w-1/2 lg:w-1/4 aspect-square">
                <img class="absolute z-10 w-full h-full" src="images/about-poojari.png" alt="">
                <div class="absolute bottom-0 left-0 z-20 w-full h-1/2 bg-gradient-to-t from-white to-transparent"></div>
            </div>
            <div class="grid items-end w-full p-3 lg:px-6 lg:w-3/4">
                <div class="grid gap-3 mt-10">
                    <h3 class="text-2xl font-semibold md:text-4xl">
                       <br><br><br> ABOUT MELSHANTHI
                    </h3>
                    <h4 class="text-base lg:text-2xl">
                    സന്തോഷ് കുമാർ താമരപള്ളിമഠം (ക്ഷേത്രം മേൽശാന്തി)<br>
                    </h4>
                </div>
            </div>
        </div>
        
    </div>
    <section class="container p-2 mx-auto my-48 lg:my-28"></section>
    <section class="container p-6 py-20 mx-auto border-t-8 lg:p-9 lg:py-36 border-p1">
        <h3 class="mt-10 text-3xl font-semibold uppercase">More Details</h3>
        <p class="mt-10 text-xl lg:text-2xl">
        1996 മുതൽ സർവൈകാര്യ ദായകനായ പാർത്ഥസാരഥിയെയും, അമ്മ സ്വരൂപിണിയായ മാങ്കായി ഭഗവതിയെയും പൂജാകർമ്മങ്ങൾ നൽകി മുന്നോട്ട് പോകുന്നു. 
                    താന്ത്രിക വിധിപ്രകാരമുള്ള പൂജക്കൊപ്പം ജോൽസ്യയും സ്വയത്തമാക്കിയ സന്തോഷ് ഗൃഹപ്രവേശപ്പൂജ, മറ്റുള്ള പരിഹാര പൂജകളും ശ്രേഷ്‌ഠ നടത്തിപ്പോരുന്നു.
        </p>
        
    </section>
    </div>
    @include('layouts.footer')
</x-base-app>
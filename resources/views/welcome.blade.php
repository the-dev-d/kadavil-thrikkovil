<x-base-app> 
    <div class="w-full bg-white">
        @include('layouts.navbar')
        
        <div class="relative h-[60vh] lg:h-screen max-h-screen max-w-screen">
            <img class="object-cover w-full h-full brightness-90" src={{asset('/images/main-krishna-banner.jpg')}} alt="">
            <div class="absolute z-20 grid text-2xl font-bold text-white -translate-y-1/2 lg:translate-x-10 md:text-4xl left-3 top-1/2">
                <span class="text-3xl md:text-6xl">കടവിൽ തൃക്കോവിൽ </span>
                <span class="mt-2"> ശ്രീകൃഷ്ണസ്വാമി ക്ഷേത്രം </span>
            </div>
            <div class="absolute bottom-0 w-full translate-y-1/2">
                <img class="w-full" src={{asset('images/main-paper.png')}} alt="">
            </div>
        </div>
        
        <section class="container p-6 mx-auto mt-20 md:mt-72 py-10lg:py-14">
            <div style="background: url('images/main-temple-timings-bg.png')" class="relative grid w-full gap-8 py-3 overflow-hidden rounded-2xl justify-items-center drop-shadow-lg">
                <div style="grid-template-rows: min-content 1fr" class="grid w-full h-full gap-4 p-5 lg:gap-10 lg:p-10">
                    <h3 class="w-full text-2xl font-semibold text-center lg:text-4xl text-amber-950">ക്ഷേത്ര സമയം</h3>
                    <div class="grid w-full gap-6 my-auto text-center lg:text-2xl">
                        <div><span>05:00 AM - </span> <span>നടതുറപ്പ്</span></div>
                        <div><span>06:30 AM - </span> <span>ഗണപതി ഹോമം </span></div>
                        <div><span>08:30 AM - </span> <span>പൂജ</span></div>
                        <div><span>10:00 AM - </span> <span>നട അടക്കും</span></div>
                        <div><span>10:00 AM - 10:30 AM - </span> <span>പൂജ (ദേവി ക്ഷേത്രത്തിൽ)</span></div>
                        <div><span>05:30 PM - </span> <span>നട തുറക്കും</span></div>
                        <div><span>സൂര്യാസ്തമയ സമയം - </span> <span>ദീപാരാധന</span></div>
                        <div><span>07:00 PM - </span> <span>അത്താഴപൂജ</span></div>
                        <div><span>07:30 PM - </span> <span>നട അടക്കും</span></div>
                        <div><span>07:30 PM - </span> <span>പൂജ (ഭഗവതി ക്ഷേത്രത്തിൽ)</span></div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="relative object-cover w-full p-3 my-10 bg-no-repeat lg:my-24 lg:p-6">
            <img class="absolute top-0 left-0 object-cover w-full h-full" src={{asset('images/main-peacock.png')}} alt="">
            <div class="container z-10 mx-auto text-white lg:p-3 re6ative">
                <h3 class="text-4xl font-semibold text-white my-14">കൂടുതൽ അറിയാം</h3>
                <div class="grid gap-6 my-16 lg:grid-cols-3 lg:grid-rows-cards lg:template-area-card">
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-a backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">വഴിപാട്</h3>
                        <p>
                        ക്ഷേത്രത്തിലെ വഴിപാടുകൾ ഈ വെബ്സൈറ്റിലൂടെ ബുക്ക് ചെയ്യാവുന്നതാണ്. ശേഷം വഴിപാടുകൾ അമ്പലത്തിൽനിന്നും വാങ്ങാവുന്നതാണ്.
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-b backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                        എറണാകുളം ജില്ലയുടെ തെക്കേ അതിർത്തിഭാഗമായ ഉദയംപേരൂർ എന്ന സ്ഥലത്തു സ്ഥിതിചെയ്യുന്ന ക്ഷേത്രമാണ് കടവിൽ തൃക്കോവിൽ ശ്രീകൃഷ്ണസ്വാമിക്ഷേത്രം. ഏകദേശം 800 ഓളം വര്‍ഷം പഴക്കം ചെന്ന ക്ഷേത്രം ആണെന്നതാണ് ക്ഷേത്രത്തിലെ ചുവർ ചിത്രങ്ങളിലെ രേഖകളിലൂടെ മനസ്സിലാക്കാനാകുന്നത്.
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-c backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">തിരുമേനി</h3>
                        <p>
                        1996 മുതൽ സർവൈകാര്യ ദായകനായ പാർത്ഥസാരഥിയെയും, അമ്മ സ്വരൂപിണിയായ മാങ്കായി ഭഗവതിയെയും പൂജാകർമ്മങ്ങൾ നൽകി മുന്നോട്ട് പോകുന്നു.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container p-6 mx-auto my-9 lg:my-24">
            <h3 class="p-3 text-2xl font-semibold lg:my-10 md:text-4xl text-c1 lg:-mt-16 ">ബന്ധപ്പെടുക</h3>
            <div class="grid items-center lg:gap-12 md:gap-7 lg:grid-cols-2">
                <div class="hidden max-w-full mapouter md:block">
                    <div class="gmap_canvas ">
                        <iframe class="border-2 border-slate-800" src="https://maps.google.com/maps?q=kadavil%20thrikkovil%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 100%;">
                        </iframe>
                        <style>.mapouter{position:relative;height:100%;width:100%;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><style>.gmap_canvas{overflow:hidden;height:40rem;width:100%}.gmap_canvas iframe{position:relative;z-index:2}</style>
                    </div>
                </div>
                <div class="grid p-3 lg:gap-12 lg:justify-items-center">
                    <div class="grid gap-7 lg:gap-12">
                        <div class="grid items-center gap-6 md:flex">
                            <span class="hidden p-2 text-2xl rounded-full md:block md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                                location_on
                            </span>
                            <span>
                                Kadavil Thrikkovil Sreekrishna Swamy Temple <br>
                                Udayamperoor, Thrippunithura, <br>
                                Ernakulam, Kerala 682307, India
                            </span>
                        </div>
                        <div class="grid items-center gap-6 md:flex">
                            <span class="hidden p-2 text-2xl rounded-full md:block md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                                call
                            </span>
                            +91 6969696969
                        </div>
                        <div class="grid items-center gap-6 md:flex">
                            <span class="hidden p-2 text-2xl rounded-full md:block md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                                mail
                            </span>
                            support@kadavilthrikkovilmelshanthi.in
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
        </div>
</x-base-app>
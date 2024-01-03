<x-base-app> 
    <div class="w-full bg-white">
        @include('layouts.navbar')
        
        <div class="relative max-h-screen max-w-screen">
            <img class="object-cover w-full h-full brightness-90" src={{asset('/images/main-krishna-banner.jpg')}} alt="">
            <div class="absolute z-20 grid text-2xl font-bold text-white -translate-y-1/2 lg:translate-x-10 md:text-4xl left-3 top-1/2">
                <span class="text-3xl md:text-6xl">കടവിൽ തൃക്കോവിൽ </span>
                <span class="mt-2"> ശ്രീകൃഷ്ണസ്വാമി ക്ഷേത്രം </span>
            </div>
            <div class="absolute bottom-0 w-full translate-y-1/2">
                <img class="w-full" src={{asset('images/main-paper.png')}} alt="">
            </div>
        </div>
        
        <section class="container p-6 mx-auto mt-20 md:mt-72 py-14">
            <div style="background: url('images/main-temple-timings-bg.png')" class="relative grid w-full gap-8 py-3 overflow-hidden rounded-2xl justify-items-center drop-shadow-lg">
                <div style="grid-template-rows: min-content 1fr" class="grid w-full h-full gap-10 p-10">
                    <h3 class="w-full text-4xl font-semibold text-center text-amber-950">ക്ഷേത്ര സമയം</h3>
                    <div class="grid w-full gap-6 my-auto text-2xl text-center">
                        <div><span>9:00 - 10:00</span> <span>Content 1</span></div>
                        <div><span>9:00 - 10:00</span> <span>Content 1</span></div>
                        <div><span>9:00 - 10:00</span> <span>Content 1</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative object-cover w-full p-3 my-24 bg-no-repeat lg:p-6">
            <img class="absolute top-0 left-0 object-cover w-full h-full" src={{asset('images/main-peacock.png')}} alt="">
            <div class="container z-10 mx-auto text-white lg:p-3 re6ative">
                <h3 class="text-4xl font-semibold text-white my-14">കൂടുതൽ അറിയാം</h3>
                <div class="grid gap-6 my-16 lg:grid-cols-3 lg:grid-rows-cards lg:template-area-card">
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-a backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-b backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                        
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md lg:grid-area-c backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container p-6 mx-auto lg:mt-24">
            <h3 class="my-10 text-2xl font-semibold md:text-4xl text-c1 lg:mt-28 lg:my-14">ബന്ധപ്പെടുക</h3>
            <div class="grid items-center gap-12 md:gap-7 lg:grid-cols-2">
                <div class="hidden max-w-full mapouter md:block">
                    <div class="gmap_canvas ">
                        <iframe class="border-2 border-slate-800" src="https://maps.google.com/maps?q=kadavil%20thrikkovil%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 100%;">
                        </iframe>
                        <style>.mapouter{position:relative;height:100%;width:100%;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><style>.gmap_canvas{overflow:hidden;height:40rem;width:100%}.gmap_canvas iframe{position:relative;z-index:2}</style>
                    </div>
                </div>
                <div class="grid gap-12 p-3 lg:justify-items-center">
                    <div class="grid gap-12">
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
                            contact@kadavilthrikkovilmelshanthi.in
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
        </div>
</x-base-app>
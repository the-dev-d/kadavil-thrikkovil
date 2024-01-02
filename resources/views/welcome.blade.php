<x-base-app> 
    <div class="w-full bg-white">
        @include('layouts.navbar')
        
        <div class="relative max-h-screen max-w-screen">
            <img class="object-cover w-full h-full brightness-90" src={{asset('/images/peakpx.jpg')}} alt="">
            <div class="absolute grid z-20 text-4xl font-bold text-white translate-x-10 -translate-y-1/2 left-3 top-1/2">
                <span class="text-6xl">കടവിൽ തൃക്കോവിൽ </span>
                <span class="mt-2"> ശ്രീകൃഷ്ണസ്വാമി ക്ഷേത്രം </span>
            </div>
            <div class="absolute w-full -bottom-32 translate-y-1/3">
                <img class="w-full" src={{asset('images/paper.png')}} alt="">
            </div>
        </div>
        
        
        <section class="container mx-auto mt-72 py-14">
            <div class="relative grid justify-items-center w-fit">
                <h3 class="absolute mt-6 text-3xl font-semibold text-center text-amber-950">ക്ഷേത്ര സമയം</h3>
                <img class="rounded-[3rem] shadow-md" src={{asset('images/paper-frame.png')}} alt="">
            </div>
        </section>
        <section class="relative object-cover w-full p-6 my-24 bg-no-repeat">
            <img class="absolute top-0 left-0 object-cover w-full h-full" src={{asset('images/peacock.png')}} alt="">
            <div class="container relative z-10 mx-auto text-white">
                <h3 class="text-4xl font-semibold text-white my-14">കൂടുതൽ അറിയാം</h3>
                <div class="grid grid-cols-3 gap-6 my-16 cards">
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md grid-area-a backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md grid-area-b backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                        
                        </p>
                    </div>
                    <div class="grid gap-6 p-10 bg-white rounded-lg shadow-md grid-area-c backdrop-blur-lg bg-opacity-20 shadow-slate-800">
                        <h3 class="text-3xl font-semibold">ക്ഷേത്രം</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dignissimos vel voluptatem ipsam enim voluptas! Ipsum soluta accusamus commodi numquam officia perferendis ipsa illo, officiis excepturi enim provident fugit vel minima dolores illum deleniti esse reiciendis quos autem. Esse, sequi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container mx-auto mt-24">
            <h3 class="text-2xl font-semibold md:text-4xl text-c1 mt-28 my-14">ബന്ധപ്പെടുക</h3>
            <div class="grid items-center gap-32 lg:grid-cols-2">
                <div class="mapouter">
                    <div class="gmap_canvas ">
                        <iframe class="border-2 border-slate-800" src="https://maps.google.com/maps?q=kadavil%20thrikkovil%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 100%;">
                        </iframe>
                        <style>.mapouter{position:relative;height:100%;width:100%;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><style>.gmap_canvas{overflow:hidden;height:40rem;width:90%}.gmap_canvas iframe{position:relative;z-index:2}</style>
                    </div>
                </div>
                <div class="grid content-start gap-12 p-3 contact">
                    <div class="flex items-center gap-6">
                        <span class="p-2 text-2xl rounded-full md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                            location_on
                        </span>
                        <span>
                            Kadavil Thrikkovil Sreekrishna Swamy Temple <br>
                            Udayamperoor, Thrippunithura, <br>
                            Ernakulam, Kerala 682307, India
                        </span>
                    </div>
                    <div class="flex items-center gap-6">
                        <span class="p-2 text-2xl rounded-full md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                            call
                        </span>
                        +91 6969696969
                    </div>
                    <div class="flex items-center gap-6">
                        <span class="p-2 text-2xl rounded-full md:text-4xl md:p-3 text-slate-50 bg-amber-600 material-symbols-outlined">
                            mail
                        </span>
                        contact@kadavilthrikkovilmelshanthi.in
                    </div>
                </div>
            </div>
        </section>
        <footer class="grid grid-cols-3 px-32 py-20 mt-28 bg-c2 bg-amber-950">
            <div class="pages">
                <h3 class="text-2xl font-bold text-white">Pages</h3>
                <ul class="grid gap-3 mt-5 text-white">
                    <li class="text-xl">ഹോം പേജ്</li>
                    <li class="text-xl">ക്ഷേത്രത്തെക്കുറിച്ച്</li>
                    <a href="/vazhipaad">
                    <li class="text-xl">വഴിപാടുകൾ</li>
                    </a>
                    <li class="text-xl">തിരുമേനിയെകുറിച്ച്</li>
                    <li class="text-xl">സ്ഥലം</li>
                    <li class="text-xl">ബന്ധപ്പെടുക</li>
                </ul>
            </div>
        </footer>
        </div>
</x-base-app>
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
                <div class="grid gap-6 mt-10">
                    <h3 class="text-2xl font-semibold md:text-4xl">
                        ABOUT MELSHANTHI
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis rutrum mauris, ac interdum nunc. Etiam sed lectus consequat magna faucibus convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a mi dolor. Quisque fermentum justo sed nibh porta,
                    </p>
                </div>
            </div>
        </div>
        
    </div>
    <section class="container p-2 mx-auto my-48 lg:my-28"></section>
    <section class="container p-6 py-20 mx-auto border-t-8 lg:p-9 lg:py-36 border-p1">
        <h3 class="mt-10 text-3xl font-semibold uppercase">More Details</h3>
        <p class="mt-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis rutrum mauris, ac interdum nunc. Etiam sed lectus consequat magna faucibus convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a mi dolor. Quisque fermentum justo sed nibh porta, eget varius turpis mattis. Curabitur quis volutpat ex, vitae mattis ex. Mauris mattis lobortis blandit. Phasellus nisi risus, dignissim eu molestie nec, tristique eu velit. Duis porttitor ipsum nulla, a malesuada nulla pellentesque sit amet. Etiam efficitur bibendum mauris vitae mollis. Nam vitae posuere sapien, mollis congue odio. Proin ut tellus dictum, sodales purus non, pellentesque enim. Suspendisse sit amet augue bibendum, luctus ipsum in, sagittis diam. Duis quis blandit dui.
        </p>
        <p class="my-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis rutrum mauris, ac interdum nunc. Etiam sed lectus consequat magna faucibus convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a mi dolor. Quisque fermentum justo sed nibh porta, eget varius turpis mattis. Curabitur quis volutpat ex, vitae mattis ex. Mauris mattis lobortis blandit. Phasellus nisi risus, dignissim eu molestie nec, tristique eu velit. Duis porttitor ipsum nulla, a malesuada nulla pellentesque sit amet. Etiam efficitur bibendum mauris vitae mollis. Nam vitae posuere sapien, mollis congue odio. Proin ut tellus dictum, sodales purus non, pellentesque enim. Suspendisse sit amet augue bibendum, luctus ipsum in, sagittis diam. Duis quis blandit dui.
        </p>
        <p class="my-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis rutrum mauris, ac interdum nunc. Etiam sed lectus consequat magna faucibus convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a mi dolor. Quisque fermentum justo sed nibh porta, eget varius turpis mattis. Curabitur quis volutpat ex, vitae mattis ex. Mauris mattis lobortis blandit. Phasellus nisi risus, dignissim eu molestie nec, tristique eu velit. Duis porttitor ipsum nulla, a malesuada nulla pellentesque sit amet. Etiam efficitur bibendum mauris vitae mollis. Nam vitae posuere sapien, mollis congue odio. Proin ut tellus dictum, sodales purus non, pellentesque enim. Suspendisse sit amet augue bibendum, luctus ipsum in, sagittis diam. Duis quis blandit dui.
        </p>
    </section>
    </div>
    @include('layouts.footer')
</x-base-app>
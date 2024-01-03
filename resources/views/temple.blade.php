<x-base-app>
    <div class="bg-white">
        @include('layouts.navbar')
    <div class="w-full h-[50vh] lg:h-[80vh] relative">
        

<div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden rounded-lg">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/temple-carousel-1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/temple-carousel-1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/temple-carousel-1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/temple-carousel-1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/temple-carousel-1.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
    </div>
    <section class="container p-12 py-24 mx-auto">
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
        <p class="my-9">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis rutrum mauris, ac interdum nunc. Etiam sed lectus consequat magna faucibus convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean a mi dolor. Quisque fermentum justo sed nibh porta, eget varius turpis mattis. Curabitur quis volutpat ex, vitae mattis ex. Mauris mattis lobortis blandit. Phasellus nisi risus, dignissim eu molestie nec, tristique eu velit. Duis porttitor ipsum nulla, a malesuada nulla pellentesque sit amet. Etiam efficitur bibendum mauris vitae mollis. Nam vitae posuere sapien, mollis congue odio. Proin ut tellus dictum, sodales purus non, pellentesque enim. Suspendisse sit amet augue bibendum, luctus ipsum in, sagittis diam. Duis quis blandit dui.
        </p>
    </section>
    </div>
    @include('layouts.footer')
</x-base-app>
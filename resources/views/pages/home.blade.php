
@extends('layouts.main')

@section('title', 'Home | ShopEase')

@section('content')

<!-- Welcome Section -->
     


    
<section
    id="watch-hero"
    class="relative isolate mx-auto max-w-7xl overflow-hidden
           rounded-2xl bg-slate-900 px-4 py-12 sm:px-8
           lg:px-12 lg:py-16 min-h-[480px] sm:min-h-[520px]
           lg:min-h-[580px] flex items-center">

    <!-- Background Image Slides -->
    <div class="absolute inset-0 -z-20">
        <img
            src="{{ asset('images/home-images/Luxury Chronograph Watch Display-2.png') }}"
            alt=""
            class="hero-slide absolute inset-0 h-full w-full object-cover
                   object-center opacity-100 transition-opacity duration-1000"
            fetchpriority="high">

        <img
            src="{{ asset('images/home-images/Luxury Watch Display with Golden Accents-1.png') }}"
            alt=""
            class="hero-slide absolute inset-0 h-full w-full object-cover
                   object-center opacity-0 transition-opacity duration-1000">

        <img
            src="{{ asset('images/home-images/Luxury Watch Still Life in Warm Tones-3.png') }}"
            alt=""
            class="hero-slide absolute inset-0 h-full w-full object-cover
                   object-center opacity-0 transition-opacity duration-1000">
    </div>

    <!-- Dark Overlay for Text Readability -->
    <div class="absolute inset-0 -z-10 bg-gradient-to-r
                from-white/95 via-white/75 to-transparent">
    </div>

    <!-- Existing Hero Content -->
    <div class="relative z-10 max-w-2xl py-6">

        <span class="inline-block rounded-full bg-amber-100
                     px-4 py-2 text-sm font-semibold text-amber-800">
            Welcome to ShopEase
        </span>

        <h1 class="mt-5 text-4xl font-extrabold tracking-tight
                   text-slate-900 sm:text-5xl lg:text-6xl">
            Discover Products You
            <span class="text-amber-500">Love.</span>
        </h1>

        <p class="mt-5 max-w-xl text-base leading-7
                  text-slate-700 sm:text-lg">
            Explore quality products, discover great deals,
            and enjoy a simple online shopping experience.
        </p>

        <div class="mt-8 flex flex-wrap gap-4">

            <a href="/shop"
               class="btn border-amber-500 bg-amber-400
                      font-semibold text-slate-900
                      hover:border-amber-400 hover:bg-amber-300">
                Shop Now
            </a>

            <a href="/categories"
               class="btn border-slate-300 bg-white/90
                      text-slate-800 hover:bg-white">
                Explore Categories
            </a>

        </div>
    </div>

    <!-- Slide Indicators -->
    <div class="absolute bottom-5 left-1/2 z-20 flex
                -translate-x-1/2 gap-2"
         aria-label="Hero slide indicators">

        <span class="hero-dot h-2.5 w-7 rounded-full bg-amber-400
                     transition-all duration-300"></span>

        <span class="hero-dot h-2.5 w-2.5 rounded-full bg-white/70
                     transition-all duration-300"></span>

        <span class="hero-dot h-2.5 w-2.5 rounded-full bg-white/70
                     transition-all duration-300"></span>
    </div>

</section>

<!-- Automatic Background Slider -->
<script>
    (() => {
        const hero = document.getElementById('watch-hero');

        if (!hero || hero.dataset.sliderInitialized) return;

        hero.dataset.sliderInitialized = 'true';

        const slides = hero.querySelectorAll('.hero-slide');
        const dots = hero.querySelectorAll('.hero-dot');

        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('opacity-100', i === index);
                slide.classList.toggle('opacity-0', i !== index);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle('w-7', i === index);
                dot.classList.toggle('w-2.5', i !== index);
                dot.classList.toggle('bg-amber-400', i === index);
                dot.classList.toggle('bg-white/70', i !== index);
            });

            currentSlide = index;
        }

        window.setInterval(() => {
            showSlide((currentSlide + 1) % slides.length);
        }, 3000);
    })();
</script>



   <!-- catagory section -->
    
<!-- Shop by Category -->
<section class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-10 lg:py-16">

    <!-- Section Header -->
    <div class="mb-8 flex flex-col gap-3 sm:flex-row
                sm:items-end sm:justify-between">

        <div>
            <span class="text-sm font-bold uppercase tracking-[0.2em]
                         text-amber-600">
                Explore Collections
            </span>

            <h2 class="mt-2 text-2xl font-extrabold tracking-tight
                       text-slate-900 sm:text-3xl lg:text-4xl">
                Shop by Category
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500 sm:text-base">
                Discover products made for your everyday lifestyle.
            </p>
        </div>

        <a href="/categories"
           class="inline-flex items-center gap-2 text-sm
                  font-semibold text-slate-800 transition
                  hover:text-amber-600">
            View All Categories

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-4 w-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 12h14m-6-6 6 6-6 6"/>
            </svg>
        </a>
    </div>

    <!-- Top selling  Cards -->
    <div class="grid grid-cols-2 gap-4 sm:gap-6
                lg:grid-cols-4">

        <!-- Cap  -->
        <a href="/shop?category=cap"
           class="group overflow-hidden rounded-2xl
                  border border-slate-200 bg-white
                  shadow-sm transition-all duration-300
                  hover:-translate-y-1 hover:border-amber-300
                  hover:shadow-lg">

            <div class="flex aspect-square items-center
                        justify-center overflow-hidden bg-slate-50 p-5 sm:p-8">

                <img
                    src="{{ asset('images/logo/caplogo.webp') }}"
                    alt="Cap collection"
                    loading="lazy"
                    class="h-full w-full object-contain
                           transition-transform duration-500
                           group-hover:scale-110">
            </div>

            <div class="flex items-center justify-between gap-2
                        border-t border-slate-100 px-3 py-4
                        sm:px-5">

                <div>
                    <h3 class="text-base font-bold text-slate-900
                               transition-colors group-hover:text-amber-600
                               sm:text-lg">
                        Caps
                    </h3>

                    <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                        Explore collection
                    </p>
                </div>

                <span class="flex h-8 w-8 shrink-0 items-center
                             justify-center rounded-full bg-slate-100
                             transition-all group-hover:bg-amber-400">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </span>
            </div>
        </a>

        <!-- Bag  -->
        <a href="/shop?category=bag"
           class="group overflow-hidden rounded-2xl
                  border border-slate-200 bg-white
                  shadow-sm transition-all duration-300
                  hover:-translate-y-1 hover:border-amber-300
                  hover:shadow-lg">

            <div class="flex aspect-square items-center
                        justify-center overflow-hidden bg-slate-50 p-5 sm:p-8">

                <img
                    src="{{ asset('images/logo/baglogo.png') }}"
                    alt="Bag collection"
                    loading="lazy"
                    class="h-full w-full object-contain
                           transition-transform duration-500
                           group-hover:scale-110">
            </div>

            <div class="flex items-center justify-between gap-2
                        border-t border-slate-100 px-3 py-4
                        sm:px-5">

                <div>
                    <h3 class="text-base font-bold text-slate-900
                               transition-colors group-hover:text-amber-600
                               sm:text-lg">
                        Bags
                    </h3>

                    <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                        Explore collection
                    </p>
                </div>

                <span class="flex h-8 w-8 shrink-0 items-center
                             justify-center rounded-full bg-slate-100
                             transition-all group-hover:bg-amber-400">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </span>
            </div>
        </a>

        <!-- Induction  -->
        <a href="/shop?category=induction"
           class="group overflow-hidden rounded-2xl
                  border border-slate-200 bg-white
                  shadow-sm transition-all duration-300
                  hover:-translate-y-1 hover:border-amber-300
                  hover:shadow-lg">

            <div class="flex aspect-square items-center
                        justify-center overflow-hidden bg-slate-50 p-5 sm:p-8">

                <img
                    src="{{ asset('images/logo/inductionlogo.jpg') }}"
                    alt="Induction cooker collection"
                    loading="lazy"
                    class="h-full w-full object-contain
                           transition-transform duration-500
                           group-hover:scale-110">
            </div>

            <div class="flex items-center justify-between gap-2
                        border-t border-slate-100 px-3 py-4
                        sm:px-5">

                <div>
                    <h3 class="text-base font-bold text-slate-900
                               transition-colors group-hover:text-amber-600
                               sm:text-lg">
                        Induction
                    </h3>

                    <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                        Explore collection
                    </p>
                </div>

                <span class="flex h-8 w-8 shrink-0 items-center
                             justify-center rounded-full bg-slate-100
                             transition-all group-hover:bg-amber-400">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </span>
            </div>
        </a>

        <!-- Watch  -->
        <a href="/shop?category=watch"
           class="group overflow-hidden rounded-2xl
                  border border-slate-200 bg-white
                  shadow-sm transition-all duration-300
                  hover:-translate-y-1 hover:border-amber-300
                  hover:shadow-lg">

            <div class="flex aspect-square items-center
                        justify-center overflow-hidden bg-slate-50 p-5 sm:p-8">

                <img
                    src="{{ asset('images/logo/watchlogo.jpg') }}"
                    alt="Watch collection"
                    loading="lazy"
                    class="h-full w-full object-contain
                           transition-transform duration-500
                           group-hover:scale-110">
            </div>

            <div class="flex items-center justify-between gap-2
                        border-t border-slate-100 px-3 py-4
                        sm:px-5">

                <div>
                    <h3 class="text-base font-bold text-slate-900
                               transition-colors group-hover:text-amber-600
                               sm:text-lg">
                        Watches
                    </h3>

                    <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                        Explore collection
                    </p>
                </div>

                <span class="flex h-8 w-8 shrink-0 items-center
                             justify-center rounded-full bg-slate-100
                             transition-all group-hover:bg-amber-400">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-6-6 6 6-6 6"/>
                    </svg>
                </span>
            </div>
        </a>

    </div>
</section>


@endsection

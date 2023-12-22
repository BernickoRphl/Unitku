@extends('layouts.template')

@section('link')
    <link rel="stylesheet" href="resources/css/product.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
    <section class="about" id="about">
        <h1 class="heading"><span>INTRICATELY </span> DESIGNED</h1>

        <div class="w-full">

            <div id="carousel-container" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-screen rounded-lg sm:h-screen xl:h-screen 2xl:h-screen">

                    {{-- <div class="overflow-hidden relative h-64 rounded-lg sm:h-96 xl:h-96 2xl:h-96"> --}}

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>

                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>

                        <img src="/resources/images/DSC07925.JPG"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>

                        <img src="/resources/images/DSC08140.JPG"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>

                        <img src="/resources/images/DSC08082.JPG"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

                    </div>

                </div>

                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">

                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>

                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>

                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>

                </div>

                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>

                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>

                        <span class="hidden">Previous</span>

                    </span>

                </button>

                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>

                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>

                        <span class="hidden">Next</span>

                    </span>

                </button>

            </div>

            <br>
            <br>
            <br>

            {{-- <p class="mt-5">This is our product available now, more to come. You can see the details in the <a
                    class="text-blue-600 hover:underline" href="https://www.instagram.com/intric.id/" target="_blank">Intric
                    documentation</a>.
            </p> --}}

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        </div>

        <div class="row">

            <div class="video-container">

                <video src="/resources/video/intripost.mp4" loop autoplay muted></video>

                {{-- <h3>best cloth sellers</h3> --}}

            </div>

            <div class="content">

                <h3>MADE OF 100% FABRIC</h3>
                <p>Our product was so soft and will sustain for a long-term, so you don't need to buy more clothes! By
                    purchasing our product, you are also supporting SDG for a better world!</p>

            </div>

        </div>

        <h1 class="heading2"><span> Our </span> Products </h1>

        <div class="w-full">

            <div id="carousel-container" class="relative" data-carousel="static">

                <div class="overflow-hidden relative h-screen rounded-lg sm:h-screen xl:h-screen 2xl:h-screen">

                    {{-- <div class="overflow-hidden relative h-64 rounded-lg sm:h-96 xl:h-96 2xl:h-96"> --}}
                    @foreach ($products as $index => $product)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>

                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">Slide
                                {{ $index + 1 }}</span>

                            <img src="{{ asset('storage/' . $product->product_image) }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="{{ $product->product_name }}">

                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <a href="/product/{{ $product['id'] }}">
                                    <h3 class="text-2xl font-semibold text-white">{{ $product->product_name }}</h3>
                                </a>
                                <p class="text-white">Unique and customable shirt or longsleeves-shirt by taking the buttons
                                    off-and-on based on your moods and needs!</p>
                                <p class="text-white">Color: {{ $product->color }}</p>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">

                    @foreach ($products as $index => $product)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach

                </div>

                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>

                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>

                        <span class="hidden">Previous</span>

                    </span>

                </button>

                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>

                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>

                        <span class="hidden">Next</span>

                    </span>

                </button>

            </div>

            <br>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        </div>

        {{-- <div class="w-full">

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="product images"
                                class="w-full">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <h3 class="text-2xl font-semibold text-white">{{ $product->product_name }}</h3>
                                <p class="text-white">{{ $product->color }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        </script>

        <style>
            /* Hide navigation buttons on small screens */
            @media (max-width: 767px) {

                .swiper-button-next,
                .swiper-button-prev {
                    display: none;
                }
            }
        </style> --}}

        {{-- @foreach ($products as $product)
            <div class="row">

                <div class="video-container">

                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="product images" class="productImages">

                </div>

                <div class="content">

                    <a href="/product/{{ $product['id'] }}">

                        <h3>{{ $product->product_name }}</h3>

                    </a>

                    <p>Unique and customable shirt or longsleeves-shirt by take the buttons off-and-on based on your moods
                        and
                        needs!
                    </p>

                    <p>Color: {{ $product->color }}</p>

                </div>

            </div>
        @endforeach --}}

        {{-- <div class="models">
            <h3>Models</h3>
        </div> --}}

        <p class="mt-5">This is our product available now, more to come. You can see the details in the <a
                class="text-blue-600 hover:underline" href="https://www.instagram.com/intric.id/" target="_blank">Intric
                documentation</a>.
        </p>

    </section>
@endsection

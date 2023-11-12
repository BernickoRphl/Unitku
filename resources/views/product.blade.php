@extends('layouts.template')

@section('link')
    <link rel="stylesheet" href="resources/css/product.css">
    <script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')
    <section class="about" id="about">
        <h1 class="heading"><span>Sustain
            Clothes for </span>  Your Daily Wear </h1>

        <div class="video-container">
            <video src="/resources/video/videointric.mp4" loop autoplay muted></video>
            {{-- <h3>best cloth sellers</h3> --}}
        </div>
        <div class="row">
            <div class="content">
                <h3>MADE OF 100% COTTON</h3>
                <p>Our product was so soft and will sustain for a long-term, so you don't need to buy more clothes! By purchasing our product, you are also supporting SDG for a better world!</p>
            </div>
        </div>

        <h1 class="heading"><span> Our </span> Products </h1>

        <div class="row">
            <div class="video-container">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt="">
            </div>
            <div class="content">
                <h3>SHIRT (ZIPPER)</h3>
                <p>Unique and customable shirt or longsleeves-shirt by take the zipper off-and-on based o n your moods and
                    needs!


                    Available in: XS, S, M, L, XL

                    Color: Black, White, Grey, Brown</p>
            </div>
        </div>
        <div class="row">
            <div class="content">
                <h3>PANTS</h3>
                <p>Pants that made of twirl cottons.


                    Available in: XS, S, M, L, XL

                    Color: Black, White, Grey, Brown</p>
            </div>

            <div class="video-container">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt="">
            </div>

        </div>

        <div class="row">

            <div class="video-container">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt="">
            </div>

            <div class="content">
                <h3>JACKET</h3>
                <p>This jacket can be mix matched with your pants and clothes.


                    Available in: XS, S, M, L, XL

                    Color: Black, White, Grey, Brown</p>
            </div>
        </div>

       <!-- carousel -->
        <div class="models">
            <h3>Models</h3>
        </div>

<div class="max-w-2xl mx-auto">
    <div id="carousel-container" class="relative" data-carousel="static">
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="/resources/images/DSC07925.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/resources/images/DSC08140.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/resources/images/DSC08082.JPG" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

	<p class="mt-5">This is our product available now, more to come. You can see the details in the <a class="text-blue-600 hover:underline"
			href="https://www.instagram.com/intric.id/" target="_blank">Intric documentation</a>.
	</p>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
        </section>
@endsection

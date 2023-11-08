@extends('layouts.navbar')

@section('link')
    <link rel="stylesheet" href="resources/css/product.css">
    <script href="resources/js/product.css"></script>
@endsection

@section('content')
    <section class="about" id="about">
        <h1 class="heading"><span>Sustain
            Clothes for </span>  Your Daily Wear </h1>

        <div class="video-container">
            {{-- <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt=""> --}}
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
                {{-- <video src="https://youtu.be/ilFg9XpDX8c" loop autoplay muted></video> --}}
                {{-- <h3>best cloth sellers</h3> --}}
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
                {{-- <video src="https://youtu.be/ilFg9XpDX8c" loop autoplay muted></video> --}}
                {{-- <h3>best cloth sellers</h3> --}}
            </div>

        </div>

        <div class="row">

            <div class="video-container">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt="">
                {{-- <video src="https://youtu.be/ilFg9XpDX8c" loop autoplay muted></video> --}}
                {{-- <h3>best cloth sellers</h3> --}}

            </div>

            <div class="content">
                <h3>JACKET</h3>
                <p>This jacket can be mix matched with your pants and clothes.


                    Available in: XS, S, M, L, XL

                    Color: Black, White, Grey, Brown</p>
            </div>
        </div>
    </section>
@endsection

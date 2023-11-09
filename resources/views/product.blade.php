@extends('layouts.navbar')

@section('link')
    <link rel="stylesheet" href="resources/css/product.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
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

        {{-- <div class="row">
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
        </div> --}}
        {{-- <div class="row">
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
        </div> --}}

        {{-- <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Product 1</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Product 2</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Product 3</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> --}}
    </section>
@endsection

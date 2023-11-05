@extends('layouts.navbar')

@section('link')
    <link rel="stylesheet" href="resources/css/about.css">
@endsection

@section('content')
    <section class="about" id="about">

        <h1 class="heading"><span> About </span> Us </h1>

        <div class="row">

            <div class="video-container">
                <img src="https://wallpapers.com/images/hd/clothes-background-ot7pkynbf8g28jsr.jpg" alt="">
                {{-- <video src="https://youtu.be/ilFg9XpDX8c" loop autoplay muted></video> --}}
                <h3>best cloth sellers</h3>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Intric is a detachable clothing company created in late 2022 and based in Indonesia. it focuses on
                    making simple but intricately designed functional clothing in the form of a shirt with detachable
                    parts. Intric aims to create clothing that is flexible towards the customer's taste by allowing
                    customisation to the detachable areas. The concept has been around for quite some time, but Intric
                    is the first one to do it here in Indonesia. Quite cool right?</p>
                <a class="btn" href="https://wa.me/628113308457" target="_blank">contact us</a>
            </div>
        </div>

    </section>
@endsection

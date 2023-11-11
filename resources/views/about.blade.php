@extends('layouts.navbar')

@section('link')
    <link rel="stylesheet" href="resources/css/about.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="resources/js/about.js"></script>
@endsection

@section('content')
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://cms.cloudinary.vpsvc.com/images/c_scale,dpr_auto,f_auto,q_auto:good,w_1920/legacy_dam/en-au/S001667837/MXP-24803-Holiday-Banner-Promo-Product-Desktop-001?cb=a5f9c53cbe235e515e96440bc08d4e282a379ca3)">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">About Us</p>
                    <p class="text-2xl mb-10 leading-none">Get to know us more!</p>
                    <a href="https://wa.me/085234983438"
                        class="bg-blue-950 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                        us</a>
                </div>
            </div> <!-- container -->
            <br>
        </div>

        <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://t4.ftcdn.net/jpg/06/34/09/69/360_F_634096945_nT013AXOaokOmXXU0mRlfSLmnSbbmZXw.jpg)">

                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">About Us</p>
                <p class="text-2xl mb-10 leading-none">Get to know us more!</p>
                <a href="https://wa.me/085234983438"
                    class="bg-blue-950 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                    us</a>

            </div> <!-- container -->
            <br>
        </div>
    </div>
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-blue-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-blue-400 rounded-full w-4 p-2"></button>
    </div>

    <section class="about" id="about">

        {{-- <h1 class="heading"><span> About </span> Us </h1> --}}

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
                {{-- <a class="btn" href="https://wa.me/085234983438" target="_blank">contact us</a> --}}
            </div>
        </div>

    </section>

    @foreach ($teams as $team)
        <section class="team" id="team">
            <h1 class="heading">Our <span>Team</span></h1>

            <div class="box-container">

                <div class="box">
                    <span class="classification">{{ $team['position'] }}</span>
                    <div class="image">
                        <img src="/resources/images/{{ $team['team_image'] }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>{{ $team['name'] }}</h3>
                        <div class="price"> I'm part of JCI and several experiences on clothing industry.</div>
                    </div>
                </div>

                <div class="box">
                    <span class="classification">{{ $team['position'] }}</span>
                    <div class="image">
                        <img src="/resources/images/{{ $team['team_image'] }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>{{ $team['name'] }}</h3>
                        <div class="price"> I have several exoeriences on branding products.</div>
                    </div>
                </div>

                <div class="box">
                    <span class="classification">{{ $team['position'] }}</span>
                    <div class="image">
                        <img src="/resources/images/{{ $team['team_image'] }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>{{ $team['name'] }}</h3>
                        <div class="price"> I'm good at managing financial.</div>
                    </div>
                </div>
        </section>
    @endforeach
@endsection

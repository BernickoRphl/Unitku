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
                <a class="btn" href="https://wa.me/ 085234983438" target="_blank">contact us</a>
            </div>
        </div>

    </section>

    <section class="team" id="team">
        <h1 class="heading">Our <span>Team</span></h1>

        <div class="box-container">

            <div class="box">
                <span class="classification">CEO</span>
                <div class="image">
                    <img src="/resources/images/daniel.png" alt="" />
                </div>
                <div class="content">
                    <h3>DANIEL KARIYADI</h3>
                    <div class="price"> I'm part of JCI and several experiences on clothing industry.</div>
                </div>
            </div>

            <div class="box">
                <span class="classification">CTO</span>
                <div class="image">
                    <img src="/resources/images/bry.png" alt="" />
                </div>
                <div class="content">
                    <h3>BRYANNA JERSEY</h3>
                    <div class="price"> I have several exoeriences on branding products.</div>
                </div>
            </div>

            <div class="box">
                <span class="classification">CFO</span>
                <div class="image">
                    <img src="/resources/images/jj.png" alt="" />
                </div>
                <div class="content">
                    <h3>ALDRICH JEREMIAH</h3>
                    <div class="price"> I'm good at managing financial.</div>
                </div>
            </div>
    </section>

    <section class="contact" id="contact">

        <h1 class="heading"><span> Contact </span> Us </h1>

        <div class="row">

            <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" placeholder="message" id="" cols="30" rows="10" class="box">

            </textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="https://i.pinimg.com/564x/fd/07/d0/fd07d0725f28aa4ff7de5a9db36457be.jpg" alt="">
        </div>
        </div>


    </section>
@endsection

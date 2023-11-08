@extends('layouts.navbar')

@section('link')
    <link rel="stylesheet" href="resources/css/team.css">
@endsection

@section('content')
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
@endsection

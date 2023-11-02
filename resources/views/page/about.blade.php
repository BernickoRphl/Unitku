@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
    margin: 0;padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.heading{
    text-align: center;
    font-size: 4rem;
    color: #333;
    padding: 1rem;
    margin: 2rem;
    background: #D3D3D3;
}

.heading span{
    color: #ffffff;
}

:root{
    --pink:#e84393
}

html{
    font-size: 90.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section {
    padding: 2rem 9%;
}

.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background-color: white;
    /* background:url(https://img.freepik.com/free-photo/light-gray-concrete-wall_53876-89532.jpg) no-repeat; */
    background-size: cover;
    background-position: center;
}

.home .content{
    max-width: 50rem;
}

.home .content h3{
    font-size: 6rem;
    color: antiquewhite;
}

.home .content span{
    font-size: 3.5rem;
    color:var(--antiquewhite);
    padding: 1rem 0;
    line-height: 1.5
}

.home .content p{
    font-size: 1.5rem;
    color:var(--antiquewhite);
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background: #333;
    color: #fff;
    padding:.9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}
.btn:hover {
    background:var(--antiquewhite)
}



@media(max-width: 991px){
    html{
    font-size: 85%;

}
}

@media(max-width: 450px){
    html{
    font-size: 60%;

    .heading{
        font-size: 3rem;
    }
}
}

.about .row{
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 2rem 0;
    padding-bottom: 3rem;
}

.about .row .video-container{
    flex: 1 1 40rem;
    position: relative;
}

.about .row .video-container video{
    width: 100%;
    border: 1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
}

.about .row .video-container h3{
    position: absolute;
    top: 50%; transform: translateY(-50%);
    font-size: 3rem;
    color: #333;
    background: #fff;
    width: 100%;
    padding: 1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;
}

.about .row .video-container img{
    width: 100%;
    border: 1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
}

.about .row .content{
    flex: 1 1 40rem;
}

.about .row .content h3{
    font-size: 3rem;
    color: #333;
}
.about .row .content p{
    font-size: 1.5rem;
    color: #999;

}

    </style>
</head>
<body>
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
            <p>Intric is a detachable clothing company created in late 2022 and based in Indonesia. it focuses on making simple but intricately designed functional clothing in the form of a shirt with detachable parts. Intric aims to create clothing that is flexible towards the customer's taste by allowing customisation to the detachable areas. The concept has been around for quite some time, but Intric is the first one to do it here in Indonesia. Quite cool right?</p>
            <a class="btn" href="/product">learn more</a>
        </div>
    </div>

    </section>
</body>
</html>

@include('layouts.footer')

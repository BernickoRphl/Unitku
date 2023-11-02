@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
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

}
}

    </style>
</head>
<body>

    <section class="home" id="home">

        <div class="content">
            <h3>INTRIC</h3>
            <span>Best Fashioned Cloth</span>
            <p>Intric is a detachable clothing company created in late 2022 and based in Indonesia. it focuses on making simple but intricately designed functional clothing in the form of a shirt with detachable parts. Intric aims to create clothing that is flexible towards the customer's taste by allowing customisation to the detachable areas. The concept has been around for quite some time, but Intric is the first one to do it here in Indonesia. Quite cool right?</p>
            <a href="/product" class="btn">Shop Now</a>
        </div>

    </section>

</body>
</html>
@include('layouts.footer')

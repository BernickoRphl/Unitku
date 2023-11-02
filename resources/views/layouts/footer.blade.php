<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;

}
.footer .box-container .box{
   flex: 1 1 15rem;

}

.footer .box-container .box h3{
    color: #333;
    font-size: 2.5rem;
    padding: 1rem 0;
 }

.footer .box-container .box a{
    display: block;
    color: #666;
    font-size: 1.5rem;
    padding: 1rem 0;
 }
.footer .box-container .box a:hover{
    color: #fff;
    text-decoration: underline;
 }
.footer .box-container .box a:hover img{
    margin-top: 1rem;
 }

.footer .credit{
    text-align: center;
    padding: 1.5rem;
    margin-top: 1.5 rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color: #333;
    border-top: .1rem solid rgba(0, 0, 0, 1);
 }

.footer .credit span{
    color:var(--antiquewhite)
 }

    </style>
</head>
<body>
    <section class="footer">

       <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="">home</a>
            <a href="">products</a>
            <a href="">team</a>
            <a href="">about</a>
            <a href="">contacts</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="">extra1</a>
            <a href="">extra2</a>
            <a href="">extra3</a>
            <a href="">extra4</a>
            <a href="">extra5</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="">Indonesia</a>
            <a href="">Surabaya</a>
            <a href="">Location1</a>
            <a href="">Location2</a>
            <a href="">Location3</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="">Line</a>
            <a href="">Number</a>
            <a href="">Email</a>
            <a href="">Instagram</a>
            <a href="">contacts</a>
        </div>
        </div>
    <div class="credit"> created by <span> Bernicko Raphael & Widhyastanto Rahmadian</span> | all rights reserved</div>

    </section>

</body>
</html>

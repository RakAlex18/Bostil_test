<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>ТЕСТОВОЕ ЗАДАНИЕ </title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset ('font-awesome-4.7.0/css/font-awesome.min.css') }}" />
</head>

<body>

@include('front.nav')
<header>
    <h1>10+ WordPress themes & plugins to build your website.</h1>
    <h2>Download now each free version, no email required.</h2>
    <p>If you are looking for free <b>WordPress themes</b> for your site or blog, we offer a selection of <b>professional themes</b> to suit your needs. We specialise in clean formatting for easy navigation, and all of our themes can be used on both personal and commercial websites. With <b>free versions</b> available of all of our premium themes and plugins, you can make sure it’s exactly right for you.</p>
</header>
@yield('content')
<div id="form">
    <form action="obr.php" method="POST" name="registr" autocomplete="on">
        <div><b>SUBSCRIBE TO OUR NEWSLETTER AND DOWNLOAD EACH PREMIUM RESOURCE FROM OUR <a href="#">RESERVED AREA</a></b></div>
        <label>
            <input type="text" name="name" id="name" placeholder="Your name">
        </label>
        <label>
            <input type="email" name="" placeholder="Your email">
        </label>
        <label>
            <input id="Sign" type="submit" value="SIGN UP">
        </label>
    </form>
</div>
<footer>
    @include('front.footer')
</footer>
</body>

</html>

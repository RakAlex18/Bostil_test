<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>ТЕСТОВОЕ ЗАДАНИЕ </title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset ('font-awesome-4.7.0/css/font-awesome.min.css') }}" />
</head>

<body>
<nav>
    <img src="images/logo.png">
    <ul id="menu">
        <li>
            <a id="onemenu" href="#">HOME</a>
        </li>
        <li>
            <a href="#">THEMES</a>
            <ul class="submenu">
                <li>
                    <a href="#">Sueva</a>
                </li>

                <li>
                    <a href="#">SvevaPro</a>
                </li>
                <li>
                    <a href="#">Avana</a>
                </li>
                <li>
                    <a href="#">Anna</a>
                </li>
                <li>
                    <a href="#">Venice</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">PLUGINS</a>
            <ul class="submenu">
                <li>
                    <a href="#">WooCarousel</a>
                </li>
                <li>
                    <a href="#">C-Login</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">OUR SERVICES</a>
        </li>
        <li>
            <a href="#">HOSTING</a>
        </li>
        <li>
            <a href="#">RESERVED AREA</a>
        </li>
        <li>
            <a href="#">LOGIN</a>
        </li>
    </ul>
    <select name="menu2">
        <option value="Home">Home</option>
        <option value="Themes">Themes</option>
        <option value="Plugins">Plugins</option>
        <option value="Hosting">Hosting</option>
        <option value="ReservedArea">Reserved Area</option>
    </select>
</nav>
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
    <p>Copyright Theme in Progress 2017 - <a href="#">Privacy - Terms and Conditions - Affiliates</a> - P.IVA: 10848341003</p>
    <div>
        <a href="#">
            <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
        </a>
        <a class="icon" href="#">
            <i class="fa fa-bandcamp fa-2x" , "fa-bandcamp" aria-hidden="true"></i>
        </a>
        <a class="icon" href="#">
            <i class="fa fa-product-hunt fa-2x" aria-hidden="true"></i>
        </a>
    </div>
</footer>
</body>

</html>

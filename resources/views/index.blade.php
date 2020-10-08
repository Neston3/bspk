<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bongobespoke</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/added-style.css') }}" >
    <link rel="stylesheet" href="{{ url('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/Contact-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ url('css/Drag--Drop-Upload-Form.css') }}">
    <link rel="stylesheet" href="{{ url('css/Features-Boxed.css') }}">
    <link rel="stylesheet" href="{{ url('css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="{{ url('css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ url('css/Highlight-Blue.css') }}">
    <link rel="stylesheet" href="{{ url('css/Highlight-Clean.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{ url('css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="{{ url('css/Login-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ url('css/Map-Clean.css') }}">
    <link rel="stylesheet" href="{{ url('css/Navigation-Clean.css') }}">
    <link rel="stylesheet" href="{{  url('css/Newsletter-Subscription-Form.css') }}">
    <link rel="stylesheet" href="{{ url('css/Projects-Clean.css') }}">
    <link rel="stylesheet" href="{{ url('css/Sidebar-Menu.css') }}">
    <link rel="stylesheet" href="{{ url('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="icon" type="image/png" href="{{ url('img/logo-top.png') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<body>


<div class="highlight-clean">
    <div class="logo-div"><img src="{{ url('img/logo.jpg') }}" class="brand-logo"></div>
    <div class="container" id="container-2">
        <div class="intro">
            <h2 class="text-center" id="text-center-main">bongobespoke</h2>
            <p id="text-center"><br>Dedicated to provide the best of bespoke designs and embroidery for individuals, institutes and ventures, wether it's suits, uniform or custom cloth branding.<br><br></p>
        </div>
    </div>
</div>

<div class="features-boxed" id="feature">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Our Services</h2>
            <p class="text-center" style="color: white;">Embroidery, Tailoring, School and Offices as well as Home Fabrics Design.
            </p>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><img src="{{ url('img/Badge-03.jpg') }}" id="icon-service">
                    <h3 class="name">Embroidering</h3>
                    <p class="description">Get personalized logos, and fabrics prints on your clothing, have your business
                        branded by the finest of threads from bongobespoke</p>
                    <a href="{{ url('embroidering') }}" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><img src="{{ url('img/Badge-05.jpg') }}" id="icon-service-sale">
                    <h3 class="name">Home fabrics</h3>
                    <p class="description">Why be like everyone else? Style your home with best of fabrics designs from
                        curtains to cushions improve your home decor</p>
                    <a href="{{ url('fabric') }}" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><img src="{{ url('img/Badges-02.jpg') }}" id="icon-service-design">
                    <h3 class="name">Schools and Offices</h3>
                    <p class="description">For the smartest of uniforms with the best of fabrics work with bongobespoke
                        to value your money and increase efficiency through properly designed uniforms</p>
                    <a href="{{ url('office') }}" class="learn-more">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><img src="{{ url('img/Badge-04.jpg') }}" id="icon-service">
                    <h3 class="name">Tailoring</h3>
                    <p class="description">Every design for every gender work with us for the luxurious at fair prices,
                        everything is bespke</p>
                    <a href="{{ url('tailoring') }}" class="learn-more">Learn more »</a></div>
            </div>
        </div>
    </div>
</div>

<div id="email-subscribe" class="newsletter-subscribe">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Subscribe to bongobespoke</h2>
            <p class="text-center">Subscribe for the latest news on fashion and offers from bongobespoke.</p>
        </div>
        <form class="form-inline" method="post" action="{{ url('/subscribe/submit') }}">
            {{csrf_field()}}
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" name="btn-submit">Subscribe</button></div>
        </form>
    </div>
</div>

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 item text">
                    <h3>bongobespoke</h3>
                    <p>Dedicated to provide the best of bespoke designs and embroidery for individuals, institutes and ventures, wether it's suits, uniform or custom cloth branding.</p>
                </div>
                <div class="col item social">
                    <a href="http://facebook.com/bongobespoke"><i class="icon ion-social-facebook"></i></a>
                    <a href="https://twitter.com/bespokebongo"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.instagram.com/bongobespoke"><i class="icon ion-social-instagram"></i></a>
                </div>
            </div>
            <p class="copyright">bongobespoke © 2018</p>
        </div>
    </footer>
</div>

<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="{{ url('js/Sidebar-Menu.js') }}"></script>

</body>

</html>
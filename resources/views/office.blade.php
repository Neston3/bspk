<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School and Office</title>
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
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" id="nav-bar">
        <div class="container" id="top-container"><a class="navbar-brand" href="{{ url('/') }}" id="nav-bar-logo-text">
                <img src="{{ url('img/logo.jpg') }}" id="top-bar-logo"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                    class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" id="btn-contact"><a class="nav-link" href="{{ url('service/contact') }}">
                            Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="photo-gallery" id="photo">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">School and Office</h2>
            <p class="text-center" style="color: white;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat,
                pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row photos">


            @foreach($type as $types )
                @if($types->category == 'school_office')
                    <div class="col-md-3 item" id="column">
                        <a href="{{ url('img/upload/'.$types->image_name) }}" data-lightbox="photos">
                            <img class="img-fluid" src="{{ url('img/upload/'.$types->image_name) }}"
                                 alt="{{ $types->image_name }}" style="width: 100%; height: 100%;">
                        </a>
                    </div>
                    <div class="col-md-3" id="column">
                        <p id="detail-para" style="color: white">{{ $types->detail }}</p>
                    </div>
                @endif
            @endforeach


        </div>
    </div>
</div>
<div id="email-subscribe" class="newsletter-subscribe">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Subscribe to bongobespoke</h2>
            <p class="text-center">Subscribe for the latest news on fashion and offers from bongobespoke.</p>
        </div>
        <form class="form-inline" method="post">
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
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
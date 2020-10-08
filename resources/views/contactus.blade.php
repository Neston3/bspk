<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        <div class="container" id="top-container"><a class="navbar-brand" href="{{ url('/')}}" id="nav-bar-logo-text">
                <img src="{{ url('img/logo.jpg') }}" id="top-bar-logo"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
<div class="highlight-blue" style="background-image: url({{ url('img/contactus.png') }});">
    <div class="container" id="contact_us">
        <div class="intro">
            <h2 class="text-center">CONTACT US</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
    </div>
</div>


<div>
    <div class="container">
        <div class="row" id="row_getInTouch">
            <div class="col-md-12">
                <h1 id="heading_getInTouch">Get in Touch</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" id="column_1">
                <h3>bongobespoke</h3>
                <p>Dedicated to provide the best of bespoke designs and embroidery for individuals, institutes and ventures, wether it's suits, uniform or custom cloth branding.<br></p>
                <h4 id="heading4">Contact</h4>
                <p>Email; info@bongobespoke.co.tz<br></p>
                <p>phone; +255 682 124 000<br></p>
                <p>phone; +255 753 802 525<br></p>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{ url('/appointment/submit') }}">
                    {{csrf_field()}}
                    <h5 class="text-center">Book an appointment</h5>
                    <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                    <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                    <div class="form-group"><textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit" name="btn-appointment">send </button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="block-location" class="map-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">We are located at</h2>
            <p class="text-center">You are welcome at bongobespoke for any service from us, thank you</p>
        </div>
    </div><iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBblHxlIBUMt1t6xu-CKC74E6ZsQHPhBOI&amp;q=Kumekucha%2C+Shekilango+Road%2C+Sinza%2C+Dar+es+Salaam&amp;zoom=15"></iframe></div>


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
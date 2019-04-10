<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bongo</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/added-style.css') }}">
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

<div class="container" id="top-badge">
    <img src="{{ url('img/logo.jpg') }}" alt="">

    {{--<button class="btn btn-success" id="btn-logout">--}}
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" id="btn-logout">
        <img src="{{ url('img/logout.png') }}" alt="" style="width: 30%;">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    {{--</button>--}}
</div>

<div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded" id="wrapper1">
    <h3 align="center">Upload Image</h3>
    <div class="wrapper2">
        <form action="{{ url('/upload/submit') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();"
                   formenctype="multipart/form-data" multiple required>
            <br>
            <select name="taskoption" title="Pick a number" class="selectpicker" id="select_option" required>
                <option value="0">Select category</option>
                <option value="embroidering">Embroidering</option>
                <option value="fabrics">Home fabrics</option>
                <option value="school_office">School and Offices</option>
                <option value="Tailoring">Tailoring</option>
            </select>
            <br>
            <textarea name="detail" id="detail" cols="30" rows="10" placeholder="Describe the item">
                </textarea>
            <br>
            <input type="submit" name='submit_image' value="Upload Image" id="submit_btn"/>

        </form>
        <div id="image_preview"></div>
    </div>
</div>

<div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded" id="wrapper1">
    @foreach($image as $images )
        {{--<div class="pull-left">--}}
            <img src="{{ url('img/upload/'.$images->image_name) }}" alt="" style="width: 10%">
            <p>{{$images->image_name}}</p>
        {{--</div>--}}
        <div class="pull-right">
            <a href="#" class="btn btn-danger">Delete</a>
        </div>
    @endforeach
</div>

<script src="{{ url('js/my.js') }}"></script>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="{{ url('js/Sidebar-Menu.js') }}"></script>

</body>

</html>
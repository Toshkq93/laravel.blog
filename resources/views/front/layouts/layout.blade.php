<!DOCTYPE HTML>
<head>
    <title>Free Share_Blog the Blog Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('fronts/css/front.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

@include('front.layouts.header')

<!--------------------- Main Content ------------------->
<div class="wrap">
    <div class="main">

        <div class="content">
            @include('front.layouts.errors')
        @yield('content')
        </div>

        <div class="sidebar">
        @include('front.layouts.sidebar')
        </div>

        <div class="clear"></div>
    </div>
</div>
<!--------------------- End Main Content ----------------------------------->
<div class="footer">
@include('front.layouts.footer')
</div>
<script src="{{ asset('fronts/js/front.js') }}"></script>

</body>
</html>


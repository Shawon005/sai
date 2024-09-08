@php $setting=setting(); @endphp
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SAI::Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{$setting->fav_logo}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend///fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600%7CRoboto:400,900">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/fonts.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/style.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <div class="page">
        @include('frontend.layout.partial.header')
        @yield('content')  
        @include('frontend.layout.partial.footer')
    </div>

    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
      var botmanWidget = {
            aboutText:'Studio All In',
            introMessage :'Hi Welcome to Studio All In',
            bubbleAvatarUrl:'{{asset('')}}frontend/images/chat10.png',
      };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    <script src="{{asset('')}}frontend/js/core.min.js"></script>
    <script src="{{asset('')}}frontend/js/script.js"></script>
    @yield('js')  
  </body>
</html>
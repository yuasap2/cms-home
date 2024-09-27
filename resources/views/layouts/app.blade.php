<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="{{ asset('/css/reset.css')  }}" >
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
</head>
<body>
    <div id="app">


        <main class="py-4">
            
        <div class="sidebar">
            <header></header>     
            <ul>
                <!-- ハンバーガー -->
                <button type="button" id="  " class="hamburger">
                    <button class="hamburger-menu" id="js-hamburger-menu">
                        <span class="hamburger-menu__bar"></span>
                        <span class="hamburger-menu__bar"></span>
                        <span class="hamburger-menu__bar"></span>
                    </button>

               <!-- アイコン ホーム-->
                <a href="{{ route('home') }}" class="sidebar-home-icon">
                    <li class="side-button"><i class="fa-solid fa-house"></i>
                </a>
                <a href="{{ route('home') }}" class="sidebar-home">HOME</a></li>
               
                
                <!-- アイコン 会員登録-->
                <a href="{{ route('member') }}" class="sidebar-register">
                    <li class="side-button"><i class="fa-regular fa-address-card"></i>
                </a>
                <a href="{{ route('member') }}" class="sidebar-register">会員登録</a></li>
                
                <script>
                    $(function () {
                        $('.hamburger-menu').on('click', function () {
                            // $('.toggleClass').slideToggle(500)
                            $('.sidebar').toggleClass('shrunk')
                            $('.sidebar-home,.sidebar-register').toggle()
                            $('.side-button').toggle()
                            // $('.hamburger').animate({ "marginRight": "100px"})
                        });
                    });
                </script>
            </ul>
            
            
        </div>
           @yield('content')
        </main>
    </div>
</body>
</html>

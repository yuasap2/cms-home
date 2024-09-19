@extends('layouts.app')

@section('content')

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
   
  <body>

     <div class="sidebar">
            <header></header>     
            <ul>
            <button type="button" id="  " class="hamburger">
                <button class="hamburger-menu" id="js-hamburger-menu">
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                </button>

              
                <li class="side-button"><i class="fa-solid fa-house"></i>
                <a href="{{ route('home') }}" class="sidebar-home">HOME</a></li>
                <li class="side-button"><i class="fa-regular fa-address-card"></i>
                <a href="{{ route('member') }}" class="sidebar-register">会員登録</a></li>
                <script>
                    $(function () {
                    $('.hamburger-menu').on('click', function () {
                        // $('.toggleClass').slideToggle(500)
                        $('.sidebar').toggleClass('shrunk')
                        $('.sidebar-home,.sidebar-register').text('')
                        $('.hamburger').animate({ "marginRight": "100px"})
                    });
                    });
                </script>
            </ul>
            
            
        </div>
  <div class="home">
      <header class="administrator">管理者</header>
      <div class="main">
       <div class="content">
            <div class ="content-top">TOP</div>
            <div class ="content-home">HOME
                <div class ='member'>
                    <header class = 'member2'>
                        <header class =>会員登録</header>
                    </header>
                </div>
            </div>
            </div>
       </div>
       
    </div>
</body>

@endsection

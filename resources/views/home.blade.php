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
  <nav class="navigation">
                <span class="trigger-icon"><span class="hamburger__inner">
                <span class="trigger-icon__line"></span><span class="_assistive-text"></span>
                </span></span>
                </button>
                
                         
                <li><i class="fa-solid fa-house"></i>
                <a href="{{ route('home') }}" class="sidebar-home">HOME</a></li>
                <li><i class="fa-regular fa-address-card"></i>
                <a href="{{ route('member') }}" class="sidebar-register">会員登録</a></li>
                <script>
                    $(function () {
                    $('.sidebar').on('click', function () {
                        $('.navigation').slideToggle(500)
                        $('.sidebar').toggleClass('.sidebar--open')
                    });
                    });
                </script>
            </ul>
     
        </div>
  <div class="home">
      <header class="administrator">管理者</header>
      <div class="main">
       <div class="content">
            <i class="fa-solid fa-house"></i>
            <div class ="content-top">TOP</div>
            <i class="fa-solid fa-envelopes-bulk"></i>
            <div class ="content-home">
                <div class = "home">HOME</div>
                <div class ='member'>
                    <header class = 'member2'>
                        会員登録
                        <header class =></header>
                    </header>
                </div>
            </div>
            </div>
       </div>
       
    </div>
</body>

@endsection

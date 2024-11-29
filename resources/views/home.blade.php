@extends('layouts.app')

@section('content')

 <body>
            <div class="sidebar">   
                    <ul>
                        <!-- ハンバーガー  -->
                        {{-- <button type="button" class="hamburger"> --}}
                        <button class="hamburger-menu" id="js-hamburger-menu">
                            <span class="hamburger-menu__bar"></span>
                            <span class="hamburger-menu__bar"></span>
                            <span class="hamburger-menu__bar"></span>
                        </button>

                        <!-- アイコン ホーム -->
                        <a href="{{ route('home') }}" class="sidebar-home-icon">
                            <li class="side-button"><i class="fa-solid fa-house"></i>HOME</li>
                        </a>
                        
                        <!-- アイコン 会員登録 -->
                        <a href="{{ route('member') }}" class="sidebar-register">
                            <li class="side-button"><i class="fa-regular fa-address-card"></i>会員登録</li>
                        </a>

                         <!-- アイコン  -->
                         <a href="{{ route('account') }}" class="sidebar-register">
                            <li class="side-button"><i class="fa-solid fa-pen"></i>会員一覧</li>
                        </a>
                     </ul>
            </div>
                        
                        
            
            <div class="main-part">
                <header class="d-flex justify-content-end align-items-center administrator">
                    <h3 class="me-2">管理者</h3>
                    <form method="POST" action="{{ route('logout') }}" class="logout" >
                         @csrf
                         <button type="submit" class="btn-logout">ログアウト</button>
                    </form> 
                </header>
                <div class="content">
                    <h3 class ="content-top">TOP</h3>
                    <h2 class="home-screen">HOME</h2>
                    <div class ="content-home">
                        <div class ='member'>
                            <div>
                                <div class = 'member-registration'>会員登録</div>
                                <div class = 'membership-roll'>会員一覧</div>
                             </div>
                        </div>
                    </div>
                 </div>                   
            </div>
</body>
    
    <script>
        $(function () {
            $('.hamburger-menu').on('click', function () {
                // $('.toggleClass').slideToggle(500)
                $('.sidebar').toggleClass('shrunk')
                $('.hamburger-menu').toggleClass('hamburger-menu-shrunk')
                $('.sidebar-home,.sidebar-register').toggle()
                $('.side-button').toggle()
                $('.main-part').toggleClass('main-part-shrunk')
                // $('.hamburger').animate({ "marginRight": "100px"})
            });
            $('.hamburger-menu-shrunk').on('click', function () {
                $('.hamburger-menu-shrunk').toggleClass('hamburger-menu')
            });
         });
    </script> 
              


@endsection

@extends('layouts.app')

@section('content')
   
  <body>
            <div class="sidebar">
                <header></header>     
                    <ul>
                        <!-- ハンバーガー  -->
                        <button type="button" class="hamburger">
                            <button class="hamburger-menu" id="js-hamburger-menu">
                                <span class="hamburger-menu__bar"></span>
                                <span class="hamburger-menu__bar"></span>
                                <span class="hamburger-menu__bar"></span>
                            </button>

                        <!-- アイコン ホーム -->
                        <a href="{{ route('home') }}" class="sidebar-home-icon">
                            <li class="side-button"><i class="fa-solid fa-house"></i>
                        </a>
                        <a href="{{ route('home') }}" class="sidebar-home">HOME</a></li>
                    
                        
                        <!-- アイコン 会員登録 -->
                        <a href="{{ route('member') }}" class="sidebar-register">
                            <li class="side-button"><i class="fa-regular fa-address-card"></i>
                        </a>
                        <a href="{{ route('member') }}" class="sidebar-register">会員登録</a></li>
                        
                      
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
                                <div class ="content-top">TOP</div>
                                <div class ="content-home">
                                    <div class = "home">HOME</div>
                                    <div class ='member'>
                                            <header>
                                                    <div class = 'member-registration'>会員登録</div>
                                                    <div class = 'membership-roll'>会員一覧</div>
                                                    


                                            </header>
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
        $('.sidebar-home,.sidebar-register').toggle()
        $('.side-button').toggle()
        // $('.hamburger').animate({ "marginRight": "100px"})
        });
    });
</script>

@endsection

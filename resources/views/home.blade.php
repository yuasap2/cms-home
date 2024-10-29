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
            
            <div class="main-part">
                <header class="administrator">管理者</header>
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
                                <!-- <div class="logout-button">
                                    <a action="{{ route('logout') }}">ログアウト</a>
                                </div> -->
                                <form method="POST" action="{{ route('logout') }}" class="logout" >
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>  
                                
                         </div> 
                                
            </div>
            
           

   
    
</body>

@endsection

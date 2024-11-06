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
                <header>アカウント一覧</header>
                <table>
                    <tbody>
                        <tr>
                            <th>見出し</th>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <th>見出し</th>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <th>見出し</th>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <th>見出し</th>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <th>見出し</th>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                    </tbody>
                </table>
                                
            </div>
            
           

   
    
</body>

@endsection

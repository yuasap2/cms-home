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
            
            <div class="table">
                <header>アカウント一覧</header>
                <table>
                    <tbody>
                        <tr>
                            <th>編集</th>
                            <td>テキストが入ります</td>
                            <th>削除</th>
                            <td>テキストが入ります</td>
                            <th>名前</th>
                            <td>テキストが入ります</td>
                            <th>メールアドレス</th>
                            <td>テキストが入ります</td>
                            <th>電話番号</th>
                            <td>テキストが入ります</td>
                            <th>都道府県</th>
                            <td>テキストが入ります</td>
                            <th>市町村</th>
                            <td>テキストが入ります</td>
                            <th>番地・アパート名</th>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>削除</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>名前</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>メールアドレス</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>電話番号</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>都道府県</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>市町村</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                        <tr>
                            <!-- <th>番地・アパート名</th> -->
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                            <td>テキストが入ります</td>
                        </tr>
                    </tbody>
                </table>
                                
            </div>
            
           

   
    
</body>

@endsection

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
            
            <div class=main-part>
                <header class=account-name>アカウント一覧</header>
                <table>
                    <tbody>
                        <tr>
                            <th>編集</th>
                            <th>削除</th>
                            <th>名前</th>
                            <th>メールアドレス</th>
                            <th>電話番号</th>
                            <th>都道府県</th>
                            <th>市町村</th>
                            <th>番地・アパート名</th>
                        </tr>
                        <tr>
                            <!-- <th>削除</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>名前</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>メールアドレス</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>電話番号</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>都道府県</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>市町村</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                        <tr>
                            <!-- <th>番地・アパート名</th> -->
                            <td>edit</td>
                            <td>delete</td>
                            <td>name</td>
                            <td>email</td>
                            <td>telephone</td>
                            <td>prefectures</td>
                            <td>Municipality</td>
                            <td>Street address/apartment name</td>
                        </tr>
                    </tbody>
                </table>
                                
            </div>
            
           

   
    
</body>

@endsection

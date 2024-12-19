@extends('layouts.app')

@section('content')
 <body>
           <div class= "table-part">
                <header class= "account-name">アカウント一覧</header>
                <a href="" class="btn btn-solid"><span>新規登録</span></a>

                <table>
                <!--  テーブルのヘッダーはこの中に記述 
                 <thead>というタグで囲むのが一般的  -->
                    <thead>
                    <!-- <tr> => テーブルロー => 1行分のデータを表す -->
                        <tr>
                        <!-- <th> => テーブルヘッダー => 1列分のデータを表す  -->
                            <th>編集</th>
                            <th>削除</th>
                            <th>名前</th>
                            <th>メールアドレス</th>
                            <th>電話番号</th>
                            <th>都道府県</th>
                            <th>市町村</th>
                            <th>番地・アパート名</th>
                        </tr>
                    </thead>
                    <!-- {{-- テーブルのボディ部分はこの中に記述 --}}
                    {{-- <tbody>というタグで囲むのが一般的 --}} -->
                    <tbody>
                    <!-- {{-- 3. Controller側から受け取ったデータをforeachで回して表示 --}} -->
                    @foreach ($users as $user)
                         <!-- {{-- <tr> => テーブルロー => 1行分のデータを表す --}} -->
                        <tr>
                            <!-- {{-- <td> => テーブルデータ => 1セル分のデータを表す --}} -->
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->telephone }}</td>
                            <td>{{ $user->prefectures }}</td>
                            <td>{{ $user->Municipality }}</td>
                            <td>{{ $user->apartment_name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- <table>
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
                </table> -->
                                
            </div>
        </body>

@endsection

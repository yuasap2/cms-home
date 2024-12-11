@extends('layouts.app')

@section('content')
 <body>
           <div class= "table-part">
                <header class= "account-name">アカウント一覧</header>
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
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                                
            </div>
        </body>

@endsection

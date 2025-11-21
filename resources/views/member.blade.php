@extends('layouts.app')

@section('content')
   
  <body>
            <div class="main-part">
            <header class="d-flex justify-content-end align-items-center administrator">
                    <h3 class="me-2">管理者</h3>
                    <form method="POST" action="{{ route('logout') }}" class="logout" >
                         @csrf
                         <button type="submit" class="btn-logout">ログアウト</button>
                    </form> 
                </header>
                    <div class="content">
                            <div class ="content-home">
                                <div class ='member'>
                                    <div>
                                        <div class = 'member-registration'>会員登録</div>
                                        <div class = 'membership-roll'>会員一覧</div>
                                        <table>
                <!--  テーブルのヘッダーはこの中に記述 
                 <thead>というタグで囲むのが一般的  -->
                    <thead>
                    <!-- <tr> => テーブルロー => 1行分のデータを表す -->
                        <tr>
                        <!-- <th> => テーブルヘッダー => 1列分のデータを表す  -->
                            <th class = nameTable>名前</th>
                            <th class = huriganaTable>フリガナ</th>
                            <th class = mailTable>メールアドレス</th>
                            <th class = phoneTable>電話番号</th>
                            <th class = prefecturesTable>都道府県</th>
                            <th class = municipalityTable>市町村</th>
                            <th class = addressTable>番地・アパート名</th>
                            <th class = remarkTable>備考欄</th>
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
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->furigana }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->prefecture }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->remarks}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                                    </div>
                                </div>
                            </div>
                    </div>                   
            </div>                
</body>


@endsection

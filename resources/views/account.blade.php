@extends('layouts.app')

@section('content')
 <body>
           <div class= "table-part">
                <header class= "account-name">アカウント一覧</header>
                <div class="new-register">
                    <a href="new_registration" class="btn-solid">
                        <span class="registration">新規登録</span>
                    </a>
                </div>

            
                <table>
                <!--  テーブルのヘッダーはこの中に記述 
                 <thead>というタグで囲むのが一般的  -->
                    <thead>
                    <!-- <tr> => テーブルロー => 1行分のデータを表す -->
                        <tr>
                        <!-- <th> => テーブルヘッダー => 1列分のデータを表す  -->
                            <th class = editTable>編集</th>
                            <th class = delateTable>削除</th>
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
                            <td class=tdEdit><a href="{{ route('users.edit' , $user->id) }}"  onclick="return confirm('編集しますか？');">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </td>
                            
                            <td class=tdDelete>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button" onclick="return confirm('削除しますか？');">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            
                            <td>{{ $user->member_name }}</td>
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
        </body>

@endsection

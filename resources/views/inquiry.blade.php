
@extends('layouts.app')

@section('content')
 <body>
           <div class= "table-part">
                <header class= "account-name">お問い合わせ一覧</header>
                <!-- <div class="new-register">
                    <a href="new_registration" class="btn-solid">
                        <span class="registration">新規登録</span>
                    </a>
                </div> -->





            
                <table>
                <!--  テーブルのヘッダーはこの中に記述 
                 <thead>というタグで囲むのが一般的  -->
                    <thead>
                    <!-- <tr> => テーブルロー => 1行分のデータを表す -->
                        <tr>
                        <!-- <th> => テーブルヘッダー => 1列分のデータを表す  -->
                            <th class = editTableInquiry>編集</th>
                            <th class = statusTableInquiry>ステータス</th>
                            <th class = companyTableInquiry>会社名</th>
                            <th class = huriganaTableInquiry>氏名</th>
                            <th class = phoneTableInquiry>電話番号</th>
                            <th class = mailaddressTableInquiry>メールアドレス</th>
                            <th class = birthTableInquiry>生年月日</th>
                            <th class = genderTableInquiry>性別</th>
                            <th class = jobTableInquiry>職業</th>
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
                            <td><a href="{{ route('users.edit' , $user->id) }}"  onclick="return confirm('編集しますか？');">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </td>
                            
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button" onclick="return confirm('削除しますか？');">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            
                            <td>{{ $user->company }}</td>
                            <td>{{ $user->member_name }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->job }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </body>

@endsection
